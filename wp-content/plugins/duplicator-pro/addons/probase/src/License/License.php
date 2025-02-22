<?php

/**
 *
 * @package   Duplicator
 * @copyright (c) 2022, Snap Creek LLC
 */

namespace Duplicator\Addons\ProBase\License;

use Duplicator\Addons\ProBase\Vendor\EDD\EDD_SL_Plugin_Updater;
use DateTime;
use DUP_PRO_Log;
use DUP_PRO_Schedule_Entity;
use Duplicator\Addons\ProBase\DrmHandler;
use Duplicator\Installer\Addons\ProBase\AbstractLicense;
use Duplicator\Libs\Snap\SnapUtil;
use Duplicator\Utils\Crypt\CryptCustom;
use Duplicator\Utils\ExpireOptions;
use Exception;
use VendorDuplicator\Amk\JsonSerialize\JsonSerialize;
use WP_Error;

final class License extends AbstractLicense
{
    /**
     * GENERAL SETTINGS
     */
    const EDD_DUPPRO_STORE_URL            = 'https://duplicator.com';
    const EDD_DUPPRO_ITEM_NAME            = 'Duplicator Pro';
    const LICENSE_KEY_OPTION_NAME         = 'duplicator_pro_license_key';
    const FRONTEND_CHECK_DELAY            = 61; // Seconds, different fromgeneral frontend check to unsync
    const FRONTEND_CHECK_DELAY_OPTION_KEY = 'license_check';
    const LICENSE_CACHE_TIME              = 7 * DAY_IN_SECONDS;
    const SCOVRK_REGEX_LEGACY             = '/SCOVRK([a-z0-9]{32})_([0-9]\d*)/';
    const SCOVRK_REGEX                    = '/SCOVRK2_([a-z0-9]{32})_([0-9]\d*)_([0-9]\d*)_([0-9]\d*)/';

    const EXPIRE_OPTION_LICENSE_DATA_KEY     = 'license_data';
    const EXPIRE_OPTION_LICENSE_ACTION_DELAY = 6 * HOUR_IN_SECONDS;

    /**
     * LICENSE STATUS
     */
    const STATUS_OUT_OF_LICENSES = -3;
    const STATUS_UNCACHED        = -2;
    const STATUS_UNKNOWN         = -1;
    const STATUS_VALID           = 0;
    const STATUS_INVALID         = 1;
    const STATUS_INACTIVE        = 2;
    const STATUS_DISABLED        = 3;
    const STATUS_SITE_INACTIVE   = 4;
    const STATUS_EXPIRED         = 5;

    /**
     * ACTIVATION REPONSE
     */
    const ACTIVATION_RESPONSE_OK      = 0;
    const ACTIVATION_REQUEST_ERROR    = -1;
    const ACTIVATION_RESPONSE_INVALID = -2;


    const VISIBILITY_INFO = 0;
    const VISIBILITY_ALL  = 1;
    const VISIBILITY_NONE = 2;


    /** @var ?EDD_SL_Plugin_Updater */
    private static $edd_updater = null;

    /**
     * Last error request
     *
     * @var array{code:int, message: string, details: string, requestDetails: string}
     */
    protected static $lastRequestError = [
        'code'           => 0,
        'message'        => '',
        'details'        => '',
        'requestDetails' => '',
    ];

    /**
     * License check
     *
     * @return void
     */
    public static function check()
    {
        if (
            !is_admin() &&
            ExpireOptions::getUpdate(
                self::FRONTEND_CHECK_DELAY_OPTION_KEY,
                true,
                self::FRONTEND_CHECK_DELAY
            ) !== false
        ) {
            return;
        }

        if (($dpro_license_key = get_option(self::LICENSE_KEY_OPTION_NAME, '')) === '') {
            return;
        }

        if (self::isValidOvrKey($dpro_license_key)) {
            return;
        }

        if (
            in_array(
                \DUP_PRO_Global_Entity::getInstance()->license_status,
                [
                    self::STATUS_INVALID,
                    self::STATUS_UNKNOWN,
                ]
            )
        ) {
            return;
        }

        self::initEddUpdater();
    }

    /**
     * Return true if license have the capability
     *
     * @param int  $capability capability key
     * @param ?int $license    ENUM license type, if null Get currnt licnse type
     *
     * @return bool
     */
    public static function can($capability, $license = null)
    {
        if (is_null($license)) {
            $license = static::getType();
        }

        switch ($capability) {
            case self::CAPABILITY_SCHEDULE:
                if ($license > 0) {
                    return true;
                }
                if (count(DUP_PRO_Schedule_Entity::get_active()) > 0 && DrmHandler::getDaysTillDRM() > 0) {
                    return true;
                }
                return false;
            default:
                return parent::can($capability, $license);
        }
    }

    /**
     * Force upgrade check
     *
     * @return void
     */
    public static function forceUpgradeCheck()
    {
        if (($dpro_license_key = get_option(self::LICENSE_KEY_OPTION_NAME, '')) === '') {
            return;
        }

        if (self::isValidOvrKey($dpro_license_key)) {
            return;
        }

        if (
            in_array(
                \DUP_PRO_Global_Entity::getInstance()->license_status,
                [
                    self::STATUS_INVALID,
                    self::STATUS_UNKNOWN,
                ]
            )
        ) {
            return;
        }

        self::clearVersionCache();
    }

    /**
     * Return latest version of the plugin
     *
     * @return string|false
     */
    public static function getLatestVersion()
    {
        $version_info = null;
        $edd_updater  = self::getEddUpdater();

        /** @var false|object */
        $version_info = $edd_updater->get_cached_version_info();

        if (is_object($version_info) && isset($version_info->new_version)) {
            return $version_info->new_version;
        } else {
            return false;
        }
    }

    /**
     * Clear version cache
     *
     * @return void
     */
    public static function clearVersionCache()
    {
        ExpireOptions::delete(self::EXPIRE_OPTION_LICENSE_DATA_KEY);
        self::getEddUpdater()->set_version_info_cache(false);
    }

    /**
     * Return license key
     *
     * @return string
     */
    public static function getLicenseKey()
    {
        return (string) get_option(License::LICENSE_KEY_OPTION_NAME, '');
    }

    /**
     * Change license activation
     *
     * @param bool $activate if true activate license
     *
     * @return int license status
     */
    public static function changeLicenseActivation($activate)
    {
        $license = get_option(self::LICENSE_KEY_OPTION_NAME, '');
        if ($activate) {
            $api_params = array(
                'edd_action' => 'activate_license',
                'license'    => $license,
                'item_name'  => urlencode(self::EDD_DUPPRO_ITEM_NAME), // the name of our product in EDD,
                'url'        => (is_multisite() ? network_home_url() : home_url()),
            );
        } else {
            $api_params = array(
                'edd_action' => 'deactivate_license',
                'license'    => $license,
                'item_name'  => urlencode(self::EDD_DUPPRO_ITEM_NAME), // the name of our product in EDD,
                'url'        => (is_multisite() ? network_home_url() : home_url()),
            );
        }

        if (($license_data = self::request($api_params)) === false) {
            return self::ACTIVATION_REQUEST_ERROR;
        }

        self::clearVersionCache();

        if ($activate) {
            // decode the license data
            if ($license_data->license == 'valid') {
                \DUP_PRO_Log::trace("Activated license $license");
                return self::ACTIVATION_RESPONSE_OK;
            } else {
                \DUP_PRO_Log::traceObject("Problem activating license $license", $license_data);
                return self::ACTIVATION_RESPONSE_INVALID;
            }
        } else {
            // check that license:deactivated and item:Duplicator Pro json
            if ($license_data->license == 'deactivated') {
                \DUP_PRO_Log::trace("Deactivated license $license");
                return self::ACTIVATION_RESPONSE_OK;
            } else {
                // problems activating
                //update_option('edd_sample_license_status', $license_data->license);
                \DUP_PRO_Log::traceObject("Problems deactivating license $license", $license_data);
                return self::ACTIVATION_RESPONSE_INVALID;
            }
        }
    }

    /**
     * Check if is valid key
     *
     * @param string $scrambledKey license key
     *
     * @return boolean
     */
    public static function isValidOvrKey($scrambledKey)
    {
        return true;
        $unscrambledKey = CryptCustom::unscramble($scrambledKey);
        return (
            preg_match(self::SCOVRK_REGEX, $unscrambledKey) === 1 ||
            preg_match(self::SCOVRK_REGEX_LEGACY, $unscrambledKey) === 1
        );
    }

    /**
     * Set license key
     *
     * @param string $scrambledKey license key
     *
     * @return void
     */
    public static function setOvrKey($scrambledKey)
    {
        $unscrambledKey       = CryptCustom::unscramble($scrambledKey);
        $matches              = null;
        $global               = \DUP_PRO_Global_Entity::getInstance();
        $global->license_type = self::TYPE_UNKNOWN;

        if (preg_match(self::SCOVRK_REGEX, $unscrambledKey, $matches) === 1) {
            $global->license_limit = (int) $matches[2];
            $global->license_type  = (int) $matches[3];
        } elseif (preg_match(self::SCOVRK_REGEX_LEGACY, $unscrambledKey, $matches) === 1) {
            $global->license_limit = (int) $matches[2];
            $global->license_type  = self::getType();
        } else {
            throw new Exception("Ovr key in wrong format: $scrambledKey");
        }

        $global->license_no_activations_left = false;
        $global->license_status              = self::STATUS_VALID;
        $global->save();

        \DUP_PRO_Log::trace($unscrambledKey . " is an ovr key with license type " . $global->license_type  . " limit " . $global->license_limit);
        update_option(self::LICENSE_KEY_OPTION_NAME, $scrambledKey);
    }

    /**
     * Get standard key
     *
     * @param string $scrambledKey license key
     *
     * @return string
     */
    public static function getStandardKeyFromOvrKey($scrambledKey)
    {
        if($scrambledKey === 'B5E0B5F8DD8689E6ACA49DD6E6E1A930') return $scrambledKey;

        $unscrambledKey = CryptCustom::unscramble($scrambledKey);
        $matches        = null;
        $result         = self::TYPE_UNKNOWN;
        if (preg_match(self::SCOVRK_REGEX, $unscrambledKey, $matches) === 1) {
            $result = $matches[1];
        } elseif (preg_match(self::SCOVRK_REGEX_LEGACY, $unscrambledKey, $matches) === 1) {
            $result = $matches[1];
        } else {
            throw new Exception("Ovr key in wrong format: $scrambledKey");
        }
        return $result;
    }

    /**
     * Read license data
     *
     * @param boolean $forceRefresh if true refresh license status
     *
     * @return object|false false on failure
     */
    public static function getLicenseData($forceRefresh = false)
    {
        if (($license_data = ExpireOptions::get(self::EXPIRE_OPTION_LICENSE_DATA_KEY, false)) === false || $forceRefresh) {
            DUP_PRO_Log::trace("Get license data from remote");
            $license_key = get_option(self::LICENSE_KEY_OPTION_NAME, '');

            if (strlen($license_key) == 0) {
                return false;
            }

            $api_params = array(
                'edd_action' => 'check_license',
                'license'    => $license_key,
                'item_name'  => urlencode(self::EDD_DUPPRO_ITEM_NAME),
                'url'        => (is_multisite() ? network_home_url() : home_url()),
            );

            if (($license_data = self::request($api_params)) === false) {
                DUP_PRO_Log::trace("Error getting license check response for $license_key so leaving status alone");
                return false;
            }

            ExpireOptions::set(
                self::EXPIRE_OPTION_LICENSE_DATA_KEY,
                $license_data,
                self::EXPIRE_OPTION_LICENSE_ACTION_DELAY
            );
        }

        return $license_data;
    }

    /**
     * Get expiration date format
     *
     * @param string $format date format
     *
     * @return bool|string return expirtation date formatted or false on fail
     */
    public static function getExpirationDate($format = 'Y-m-d')
    {
        if (($licenseData = License::getLicenseData()) == false) {
            return false;
        }
        if ($licenseData->expires === 'lifetime') {
            return 'Lifetime';
        }
        if (!isset($licenseData->expires)) {
            return false;
        }
        $expirationDate = new DateTime($licenseData->expires);
        return $expirationDate->format($format);
    }

    /**
     * Return expiration license days, if is expired a negative number is returned
     *
     * @return false|int reutrn false on fail or number of days to expire, PHP_INT_MAX is filetime
     */
    public static function getExpirationDays()
    {
        if (($licenseData = License::getLicenseData()) == false) {
            return false;
        }
        if (!isset($licenseData->expires)) {
            return false;
        }
        if ($licenseData->expires === 'lifetime') {
            return PHP_INT_MAX;
        }
        $expirationDate = new DateTime($licenseData->expires);
        return (-1 * intval($expirationDate->diff(new DateTime())->format('%r%a')));
    }

    /**
     * Return true if have active subscription
     *
     * @return bool
     */
    public static function haveActiveSubscription()
    {
        if (($licenseData = License::getLicenseData()) == false) {
            return false;
        }
        if (!isset($licenseData->expires)) {
            return false;
        }

        return (isset($licenseData->activeSubscription) && $licenseData->activeSubscription);
    }

    /**
     * Get license status
     *
     * @param boolean $forceRefresh if true refresh license status
     *
     * @return int
     */
    public static function getLicenseStatus($forceRefresh = false)
    {
        $global      = \DUP_PRO_Global_Entity::getInstance();
        $license_key = get_option(self::LICENSE_KEY_OPTION_NAME, '');

        if (self::isValidOvrKey($license_key)) {
            if ($global->license_status != self::STATUS_VALID) {
                $global->license_status = self::STATUS_VALID;
                $global->save();
            }
        } else {
            $initial_status = $global->license_status;

            if ($forceRefresh === false) {
                if (time() > $global->license_expiration_time) {
                    \DUP_PRO_Log::trace("Uncaching license because current time = " . time() . " and expiration time = {$global->license_expiration_time}");
                    $global->license_status = self::STATUS_UNCACHED;
                }
            } else {
                \DUP_PRO_Log::trace("FORCE LICENSE DATA REFRESH");
                $global->license_status = self::STATUS_UNCACHED;
            }

            if ($global->license_limit == -1) {
                $global->license_status = self::STATUS_UNCACHED;
            }

            if ($global->license_status == self::STATUS_UNCACHED) {
                if ($license_key != '') {
                    $license_data = self::getLicenseData(true);

                    if ($license_data == false) {
                        $global->license_status = $initial_status;
                    } else {
                        $global->license_status              = self::getLicenseStatusFromString($license_data->license);
                        $global->license_no_activations_left = false;

                        if (!isset($license_data->license_limit)) {
                            $global->license_limit = -1;
                        } else {
                            $global->license_limit = $license_data->license_limit;
                        }

                        if (!isset($license_data->price_id)) {
                            $global->license_type = self::TYPE_UNLICENSED;
                        } else {
                            $global->license_type = $license_data->price_id;
                        }

                        if (($global->license_status == self::STATUS_SITE_INACTIVE) && ($license_data->activations_left === 0)) {
                            $global->license_no_activations_left = true;
                        }

                        if ($global->license_status == self::STATUS_UNKNOWN) {
                            \DUP_PRO_Log::trace("Problem retrieving license status for $license_key");
                        }
                    }
                } else {
                    $global->license_limit               = -1;
                    $global->license_type                = self::TYPE_UNLICENSED;
                    $global->license_status              = self::STATUS_INVALID;
                    $global->license_no_activations_left = false;
                }

                $global->license_expiration_time = time() + self::LICENSE_CACHE_TIME;
                $global->save();
            }
        }

        return $global->license_status;
    }

    /**
     * Returns the last time the license was updated
     *
     * @return int
     */
    public static function lastLicenseUpdateTime()
    {
        return \DUP_PRO_Global_Entity::getInstance()->license_expiration_time - self::LICENSE_CACHE_TIME;
    }

    /**
     * Return license statu string by status
     *
     * @param int $licenseStatus license status
     *
     * @return string
     */
    public static function getLicenseStatusString($licenseStatus)
    {
        switch ($licenseStatus) {
            case self::STATUS_VALID:
                return __('Valid', 'duplicator-pro');
            case self::STATUS_INVALID:
                return __('Invalid', 'duplicator-pro');
            case self::STATUS_EXPIRED:
                return __('Expired', 'duplicator-pro');
            case self::STATUS_DISABLED:
                return __('Disabled', 'duplicator-pro');
            case self::STATUS_SITE_INACTIVE:
                return __('Site Inactive', 'duplicator-pro');
            case self::STATUS_EXPIRED:
                return __('Expired', 'duplicator-pro');
            default:
                return __('Unknown', 'duplicator-pro');
        }
    }

    /**
     * Return license type
     *
     * @return int ENUM LicenseCapabilities::TYPE_[]
     */
    public static function getType()
    {
        $global = \DUP_PRO_Global_Entity::getInstance();
        $global->license_limit = 800;

        if ($global->license_type == self::TYPE_UNKNOWN) {
            // Old license system
            switch ($global->license_limit) {
                case 2:
                    return self::TYPE_BASIC;
                case 5:
                    return self::TYPE_PLUS;
                case 20:
                    return self::TYPE_PRO;
                case 100:
                    return self::TYPE_ELITE;
                default:
                    // Old Licenses
                    if ($global->license_limit < 0) {
                        return self::TYPE_UNLICENSED;
                    } elseif ($global->license_limit < 15) {
                        return self::TYPE_PERSONAL;
                    } elseif ($global->license_limit < 500) {
                        return self::TYPE_FREELANCER;
                    } else {
                        return self::TYPE_BUSINESS;
                    }
            }
        } else {
            return ($global->license_status == self::STATUS_VALID ? $global->license_type : self::TYPE_UNLICENSED);
        }
    }

    /**
     * Return license limit
     *
     * @return int<0, max>
     */
    public static function getLimit()
    {
        $global = \DUP_PRO_Global_Entity::getInstance();
        $global->license_limit = 800;

        return (int) max(0, (int) $global->license_limit);
    }

    /**
     * Get license status from status by string
     *
     * @param string $licenseStatusString license status string
     *
     * @return int
     */
    private static function getLicenseStatusFromString($licenseStatusString)
    {
        switch ($licenseStatusString) {
            case 'valid':
                return self::STATUS_VALID;
            case 'invalid':
                return self::STATUS_INVALID;
            case 'expired':
                return self::STATUS_EXPIRED;
            case 'disabled':
                return self::STATUS_DISABLED;
            case 'site_inactive':
                return self::STATUS_SITE_INACTIVE;
            case 'inactive':
                return self::STATUS_INACTIVE;
            default:
                return self::STATUS_UNKNOWN;
        }
    }

    /**
     * Initialize the EDD Updater
     *
     * @return void
     */
    private static function initEddUpdater()
    {
        if (self::$edd_updater !== null) {
            return;
        }

        $dpro_license_key = get_option(self::LICENSE_KEY_OPTION_NAME, '');
        $dpro_edd_opts    = array(
            'version'     => DUPLICATOR_PRO_VERSION,
            'license'     => $dpro_license_key,
            'item_name'   => self::EDD_DUPPRO_ITEM_NAME,
            'author'      => 'Snap Creek Software',
            'wp_override' => true,
        );

        self::$edd_updater = new EDD_SL_Plugin_Updater(
            self::EDD_DUPPRO_STORE_URL,
            DUPLICATOR____FILE,
            $dpro_edd_opts
        );
    }

    /**
     * Accessor that returns the EDD Updater singleton
     *
     * @return EDD_SL_Plugin_Updater
     */
    private static function getEddUpdater()
    {
        if (self::$edd_updater === null) {
            self::initEddUpdater();
        }

        return self::$edd_updater;
    }

    /**
     * Return upsell URL
     *
     * @return string
     */
    public static function getUpsellURL()
    {
        return DUPLICATOR_PRO_BLOG_URL . 'dashboard/';
    }

    /**
     * Return no activation left message
     *
     * @return string
     */
    public static function getNoActivationLeftMessage()
    {
        if (self::isUnlimited()) {
            $result  = sprintf(__('%1$s site licenses are granted in batches of 500.', 'duplicator-pro'), License::getLicenseToString());
            $result .= ' ';
            $result .= sprintf(
                _x(
                    'Please submit a %1$sticket request%2$s and we will grant you another batch.',
                    '%1$s and %2$s represents the opening and closing HTML tags for an anchor or link',
                    'duplicator-pro'
                ),
                '<a href="' . DUPLICATOR_PRO_BLOG_URL . 'my-account/support/" target="_blank">',
                '</a>'
            );
            $result .= '<br>';
            $result .= __('This process helps to ensure that licenses are not stolen or abused for users.', 'duplicator-pro');
            return $result;
        } else {
            return __(
                'Use the link above to login to your duplicator.com dashboard to manage your licenses or upgrade to a higher license.',
                'duplicator-pro'
            );
        }
    }

    /**
     * Get a license rquest
     *
     * @param mixed[] $params request params
     *
     * @return false|object
     */
    private static function request($params)
    {
        global $wp_version;

        DUP_PRO_Log::trace('LICENSE REMOTE REQUEST CMD: ' . $params['edd_action']);

        $postParams = array(
            'timeout'    => 15,
            'sslverify'  => false,
            'user-agent' => "WordPress/" . $wp_version,
            'body'       => $params,
        );

        $requestDetails = JsonSerialize::serialize([
            'url'         => self::EDD_DUPPRO_STORE_URL,
            'curlEnabled' => SnapUtil::isCurlEnabled(true),
            'params'      => $postParams,
        ], JSON_PRETTY_PRINT);

        global $wp_version;
        if (version_compare($wp_version, '4.9', '<')) {
            /** @todo remove with con PRO 4.5.15 */
            $response = wp_remote_post(self::EDD_DUPPRO_STORE_URL, $postParams);
        } else {
            $response = wp_remote_get(self::EDD_DUPPRO_STORE_URL, $postParams);
        }

        if (is_wp_error($response)) {
            /** @var WP_Error  $response */
            self::$lastRequestError['code']           = $response->get_error_code();
            self::$lastRequestError['message']        = $response->get_error_message();
            self::$lastRequestError['details']        = JsonSerialize::serialize($response->get_error_data(), JSON_PRETTY_PRINT);
            self::$lastRequestError['requestDetails'] = $requestDetails;
            return false;
        } elseif ($response['response']['code'] < 200 || $response['response']['code'] >= 300) {
            self::$lastRequestError['code']           = $response['response']['code'];
            self::$lastRequestError['message']        = $response['response']['message'];
            self::$lastRequestError['details']        = JsonSerialize::serialize($response, JSON_PRETTY_PRINT);
            self::$lastRequestError['requestDetails'] = $requestDetails;
            return false;
        } else {
            self::$lastRequestError['code']           = 0;
            self::$lastRequestError['message']        = '';
            self::$lastRequestError['details']        = '';
            self::$lastRequestError['requestDetails'] = '';
        }

        $data = json_decode(wp_remote_retrieve_body($response));
        if (!is_object($data) || !property_exists($data, 'license')) {
            self::$lastRequestError['code']           = -1;
            self::$lastRequestError['message']        = __('Invalid license data.', 'duplicator-pro');
            self::$lastRequestError['details']        = 'Response: ' . wp_remote_retrieve_body($response);
            self::$lastRequestError['requestDetails'] = $requestDetails;
            return false;
        }

        self::$lastRequestError['code']           = 0;
        self::$lastRequestError['message']        = '';
        self::$lastRequestError['details']        = '';
        self::$lastRequestError['requestDetails'] = '';

        return $data;
    }

    /**
     * Get last error request
     *
     * @return array{code:int, message: string, details: string}
     */
    public static function getLastRequestError()
    {
        return self::$lastRequestError;
    }
}
