<?php

namespace VendorDuplicator;

/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
/**
 * Service definition for AdSense (v1.4).
 *
 * <p>
 * Gives AdSense publishers access to their inventory and the ability to
 * generate reports</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/adsense/management/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 * @internal
 */
class Google_Service_AdSense extends Google_Service
{
    /** View and manage your AdSense data. */
    const ADSENSE = "https://www.googleapis.com/auth/adsense";
    /** View your AdSense data. */
    const ADSENSE_READONLY = "https://www.googleapis.com/auth/adsense.readonly";
    public $accounts;
    public $accounts_adclients;
    public $accounts_adunits;
    public $accounts_adunits_customchannels;
    public $accounts_alerts;
    public $accounts_customchannels;
    public $accounts_customchannels_adunits;
    public $accounts_payments;
    public $accounts_reports;
    public $accounts_reports_saved;
    public $accounts_savedadstyles;
    public $accounts_urlchannels;
    public $adclients;
    public $adunits;
    public $adunits_customchannels;
    public $alerts;
    public $customchannels;
    public $customchannels_adunits;
    public $metadata_dimensions;
    public $metadata_metrics;
    public $payments;
    public $reports;
    public $reports_saved;
    public $savedadstyles;
    public $urlchannels;
    /**
     * Constructs the internal representation of the AdSense service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->rootUrl = 'https://www.googleapis.com/';
        $this->servicePath = 'adsense/v1.4/';
        $this->version = 'v1.4';
        $this->serviceName = 'adsense';
        $this->accounts = new Google_Service_AdSense_Accounts_Resource($this, $this->serviceName, 'accounts', array('methods' => array('get' => array('path' => 'accounts/{accountId}', 'httpMethod' => 'GET', 'parameters' => array('accountId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'tree' => array('location' => 'query', 'type' => 'boolean'))), 'list' => array('path' => 'accounts', 'httpMethod' => 'GET', 'parameters' => array('maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->accounts_adclients = new Google_Service_AdSense_AccountsAdclients_Resource($this, $this->serviceName, 'adclients', array('methods' => array('list' => array('path' => 'accounts/{accountId}/adclients', 'httpMethod' => 'GET', 'parameters' => array('accountId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->accounts_adunits = new Google_Service_AdSense_AccountsAdunits_Resource($this, $this->serviceName, 'adunits', array('methods' => array('get' => array('path' => 'accounts/{accountId}/adclients/{adClientId}/adunits/{adUnitId}', 'httpMethod' => 'GET', 'parameters' => array('accountId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'adClientId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'adUnitId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'getAdCode' => array('path' => 'accounts/{accountId}/adclients/{adClientId}/adunits/{adUnitId}/adcode', 'httpMethod' => 'GET', 'parameters' => array('accountId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'adClientId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'adUnitId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'accounts/{accountId}/adclients/{adClientId}/adunits', 'httpMethod' => 'GET', 'parameters' => array('accountId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'adClientId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'includeInactive' => array('location' => 'query', 'type' => 'boolean'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->accounts_adunits_customchannels = new Google_Service_AdSense_AccountsAdunitsCustomchannels_Resource($this, $this->serviceName, 'customchannels', array('methods' => array('list' => array('path' => 'accounts/{accountId}/adclients/{adClientId}/adunits/{adUnitId}/customchannels', 'httpMethod' => 'GET', 'parameters' => array('accountId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'adClientId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'adUnitId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->accounts_alerts = new Google_Service_AdSense_AccountsAlerts_Resource($this, $this->serviceName, 'alerts', array('methods' => array('delete' => array('path' => 'accounts/{accountId}/alerts/{alertId}', 'httpMethod' => 'DELETE', 'parameters' => array('accountId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'alertId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'accounts/{accountId}/alerts', 'httpMethod' => 'GET', 'parameters' => array('accountId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'locale' => array('location' => 'query', 'type' => 'string'))))));
        $this->accounts_customchannels = new Google_Service_AdSense_AccountsCustomchannels_Resource($this, $this->serviceName, 'customchannels', array('methods' => array('get' => array('path' => 'accounts/{accountId}/adclients/{adClientId}/customchannels/{customChannelId}', 'httpMethod' => 'GET', 'parameters' => array('accountId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'adClientId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'customChannelId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'accounts/{accountId}/adclients/{adClientId}/customchannels', 'httpMethod' => 'GET', 'parameters' => array('accountId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'adClientId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->accounts_customchannels_adunits = new Google_Service_AdSense_AccountsCustomchannelsAdunits_Resource($this, $this->serviceName, 'adunits', array('methods' => array('list' => array('path' => 'accounts/{accountId}/adclients/{adClientId}/customchannels/{customChannelId}/adunits', 'httpMethod' => 'GET', 'parameters' => array('accountId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'adClientId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'customChannelId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'includeInactive' => array('location' => 'query', 'type' => 'boolean'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->accounts_payments = new Google_Service_AdSense_AccountsPayments_Resource($this, $this->serviceName, 'payments', array('methods' => array('list' => array('path' => 'accounts/{accountId}/payments', 'httpMethod' => 'GET', 'parameters' => array('accountId' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->accounts_reports = new Google_Service_AdSense_AccountsReports_Resource($this, $this->serviceName, 'reports', array('methods' => array('generate' => array('path' => 'accounts/{accountId}/reports', 'httpMethod' => 'GET', 'parameters' => array('accountId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'startDate' => array('location' => 'query', 'type' => 'string', 'required' => \true), 'endDate' => array('location' => 'query', 'type' => 'string', 'required' => \true), 'currency' => array('location' => 'query', 'type' => 'string'), 'dimension' => array('location' => 'query', 'type' => 'string', 'repeated' => \true), 'filter' => array('location' => 'query', 'type' => 'string', 'repeated' => \true), 'locale' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'metric' => array('location' => 'query', 'type' => 'string', 'repeated' => \true), 'sort' => array('location' => 'query', 'type' => 'string', 'repeated' => \true), 'startIndex' => array('location' => 'query', 'type' => 'integer'), 'useTimezoneReporting' => array('location' => 'query', 'type' => 'boolean'))))));
        $this->accounts_reports_saved = new Google_Service_AdSense_AccountsReportsSaved_Resource($this, $this->serviceName, 'saved', array('methods' => array('generate' => array('path' => 'accounts/{accountId}/reports/{savedReportId}', 'httpMethod' => 'GET', 'parameters' => array('accountId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'savedReportId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'locale' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'startIndex' => array('location' => 'query', 'type' => 'integer'))), 'list' => array('path' => 'accounts/{accountId}/reports/saved', 'httpMethod' => 'GET', 'parameters' => array('accountId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->accounts_savedadstyles = new Google_Service_AdSense_AccountsSavedadstyles_Resource($this, $this->serviceName, 'savedadstyles', array('methods' => array('get' => array('path' => 'accounts/{accountId}/savedadstyles/{savedAdStyleId}', 'httpMethod' => 'GET', 'parameters' => array('accountId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'savedAdStyleId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'accounts/{accountId}/savedadstyles', 'httpMethod' => 'GET', 'parameters' => array('accountId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->accounts_urlchannels = new Google_Service_AdSense_AccountsUrlchannels_Resource($this, $this->serviceName, 'urlchannels', array('methods' => array('list' => array('path' => 'accounts/{accountId}/adclients/{adClientId}/urlchannels', 'httpMethod' => 'GET', 'parameters' => array('accountId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'adClientId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->adclients = new Google_Service_AdSense_Adclients_Resource($this, $this->serviceName, 'adclients', array('methods' => array('list' => array('path' => 'adclients', 'httpMethod' => 'GET', 'parameters' => array('maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->adunits = new Google_Service_AdSense_Adunits_Resource($this, $this->serviceName, 'adunits', array('methods' => array('get' => array('path' => 'adclients/{adClientId}/adunits/{adUnitId}', 'httpMethod' => 'GET', 'parameters' => array('adClientId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'adUnitId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'getAdCode' => array('path' => 'adclients/{adClientId}/adunits/{adUnitId}/adcode', 'httpMethod' => 'GET', 'parameters' => array('adClientId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'adUnitId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'adclients/{adClientId}/adunits', 'httpMethod' => 'GET', 'parameters' => array('adClientId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'includeInactive' => array('location' => 'query', 'type' => 'boolean'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->adunits_customchannels = new Google_Service_AdSense_AdunitsCustomchannels_Resource($this, $this->serviceName, 'customchannels', array('methods' => array('list' => array('path' => 'adclients/{adClientId}/adunits/{adUnitId}/customchannels', 'httpMethod' => 'GET', 'parameters' => array('adClientId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'adUnitId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->alerts = new Google_Service_AdSense_Alerts_Resource($this, $this->serviceName, 'alerts', array('methods' => array('delete' => array('path' => 'alerts/{alertId}', 'httpMethod' => 'DELETE', 'parameters' => array('alertId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'alerts', 'httpMethod' => 'GET', 'parameters' => array('locale' => array('location' => 'query', 'type' => 'string'))))));
        $this->customchannels = new Google_Service_AdSense_Customchannels_Resource($this, $this->serviceName, 'customchannels', array('methods' => array('get' => array('path' => 'adclients/{adClientId}/customchannels/{customChannelId}', 'httpMethod' => 'GET', 'parameters' => array('adClientId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'customChannelId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'adclients/{adClientId}/customchannels', 'httpMethod' => 'GET', 'parameters' => array('adClientId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->customchannels_adunits = new Google_Service_AdSense_CustomchannelsAdunits_Resource($this, $this->serviceName, 'adunits', array('methods' => array('list' => array('path' => 'adclients/{adClientId}/customchannels/{customChannelId}/adunits', 'httpMethod' => 'GET', 'parameters' => array('adClientId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'customChannelId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'includeInactive' => array('location' => 'query', 'type' => 'boolean'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->metadata_dimensions = new Google_Service_AdSense_MetadataDimensions_Resource($this, $this->serviceName, 'dimensions', array('methods' => array('list' => array('path' => 'metadata/dimensions', 'httpMethod' => 'GET', 'parameters' => array()))));
        $this->metadata_metrics = new Google_Service_AdSense_MetadataMetrics_Resource($this, $this->serviceName, 'metrics', array('methods' => array('list' => array('path' => 'metadata/metrics', 'httpMethod' => 'GET', 'parameters' => array()))));
        $this->payments = new Google_Service_AdSense_Payments_Resource($this, $this->serviceName, 'payments', array('methods' => array('list' => array('path' => 'payments', 'httpMethod' => 'GET', 'parameters' => array()))));
        $this->reports = new Google_Service_AdSense_Reports_Resource($this, $this->serviceName, 'reports', array('methods' => array('generate' => array('path' => 'reports', 'httpMethod' => 'GET', 'parameters' => array('startDate' => array('location' => 'query', 'type' => 'string', 'required' => \true), 'endDate' => array('location' => 'query', 'type' => 'string', 'required' => \true), 'accountId' => array('location' => 'query', 'type' => 'string', 'repeated' => \true), 'currency' => array('location' => 'query', 'type' => 'string'), 'dimension' => array('location' => 'query', 'type' => 'string', 'repeated' => \true), 'filter' => array('location' => 'query', 'type' => 'string', 'repeated' => \true), 'locale' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'metric' => array('location' => 'query', 'type' => 'string', 'repeated' => \true), 'sort' => array('location' => 'query', 'type' => 'string', 'repeated' => \true), 'startIndex' => array('location' => 'query', 'type' => 'integer'), 'useTimezoneReporting' => array('location' => 'query', 'type' => 'boolean'))))));
        $this->reports_saved = new Google_Service_AdSense_ReportsSaved_Resource($this, $this->serviceName, 'saved', array('methods' => array('generate' => array('path' => 'reports/{savedReportId}', 'httpMethod' => 'GET', 'parameters' => array('savedReportId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'locale' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'startIndex' => array('location' => 'query', 'type' => 'integer'))), 'list' => array('path' => 'reports/saved', 'httpMethod' => 'GET', 'parameters' => array('maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->savedadstyles = new Google_Service_AdSense_Savedadstyles_Resource($this, $this->serviceName, 'savedadstyles', array('methods' => array('get' => array('path' => 'savedadstyles/{savedAdStyleId}', 'httpMethod' => 'GET', 'parameters' => array('savedAdStyleId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'savedadstyles', 'httpMethod' => 'GET', 'parameters' => array('maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->urlchannels = new Google_Service_AdSense_Urlchannels_Resource($this, $this->serviceName, 'urlchannels', array('methods' => array('list' => array('path' => 'adclients/{adClientId}/urlchannels', 'httpMethod' => 'GET', 'parameters' => array('adClientId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
    }
}
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
/**
 * Service definition for AdSense (v1.4).
 *
 * <p>
 * Gives AdSense publishers access to their inventory and the ability to
 * generate reports</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/adsense/management/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense', 'VendorDuplicator\\Google_Service_AdSense', \false);
/**
 * The "accounts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $accounts = $adsenseService->accounts;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_Accounts_Resource extends Google_Service_Resource
{
    /**
     * Get information about the selected AdSense account. (accounts.get)
     *
     * @param string $accountId Account to get information about.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool tree Whether the tree of sub accounts should be returned.
     * @return Google_Service_AdSense_Account
     */
    public function get($accountId, $optParams = array())
    {
        $params = array('accountId' => $accountId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_AdSense_Account");
    }
    /**
     * List all accounts available to this AdSense account. (accounts.listAccounts)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of accounts to include in the
     * response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through
     * accounts. To retrieve the next page, set this parameter to the value of
     * "nextPageToken" from the previous response.
     * @return Google_Service_AdSense_Accounts
     */
    public function listAccounts($optParams = array())
    {
        $params = array();
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AdSense_Accounts");
    }
}
/**
 * The "accounts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $accounts = $adsenseService->accounts;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_Accounts_Resource', 'VendorDuplicator\\Google_Service_AdSense_Accounts_Resource', \false);
/**
 * The "adclients" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $adclients = $adsenseService->adclients;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_AccountsAdclients_Resource extends Google_Service_Resource
{
    /**
     * List all ad clients in the specified account.
     * (adclients.listAccountsAdclients)
     *
     * @param string $accountId Account for which to list ad clients.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of ad clients to include in the
     * response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through ad
     * clients. To retrieve the next page, set this parameter to the value of
     * "nextPageToken" from the previous response.
     * @return Google_Service_AdSense_AdClients
     */
    public function listAccountsAdclients($accountId, $optParams = array())
    {
        $params = array('accountId' => $accountId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AdSense_AdClients");
    }
}
/**
 * The "adclients" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $adclients = $adsenseService->adclients;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AccountsAdclients_Resource', 'VendorDuplicator\\Google_Service_AdSense_AccountsAdclients_Resource', \false);
/**
 * The "adunits" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $adunits = $adsenseService->adunits;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_AccountsAdunits_Resource extends Google_Service_Resource
{
    /**
     * Gets the specified ad unit in the specified ad client for the specified
     * account. (adunits.get)
     *
     * @param string $accountId Account to which the ad client belongs.
     * @param string $adClientId Ad client for which to get the ad unit.
     * @param string $adUnitId Ad unit to retrieve.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AdSense_AdUnit
     */
    public function get($accountId, $adClientId, $adUnitId, $optParams = array())
    {
        $params = array('accountId' => $accountId, 'adClientId' => $adClientId, 'adUnitId' => $adUnitId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_AdSense_AdUnit");
    }
    /**
     * Get ad code for the specified ad unit. (adunits.getAdCode)
     *
     * @param string $accountId Account which contains the ad client.
     * @param string $adClientId Ad client with contains the ad unit.
     * @param string $adUnitId Ad unit to get the code for.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AdSense_AdCode
     */
    public function getAdCode($accountId, $adClientId, $adUnitId, $optParams = array())
    {
        $params = array('accountId' => $accountId, 'adClientId' => $adClientId, 'adUnitId' => $adUnitId);
        $params = \array_merge($params, $optParams);
        return $this->call('getAdCode', array($params), "VendorDuplicator\\Google_Service_AdSense_AdCode");
    }
    /**
     * List all ad units in the specified ad client for the specified account.
     * (adunits.listAccountsAdunits)
     *
     * @param string $accountId Account to which the ad client belongs.
     * @param string $adClientId Ad client for which to list ad units.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeInactive Whether to include inactive ad units.
     * Default: true.
     * @opt_param int maxResults The maximum number of ad units to include in the
     * response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through ad
     * units. To retrieve the next page, set this parameter to the value of
     * "nextPageToken" from the previous response.
     * @return Google_Service_AdSense_AdUnits
     */
    public function listAccountsAdunits($accountId, $adClientId, $optParams = array())
    {
        $params = array('accountId' => $accountId, 'adClientId' => $adClientId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AdSense_AdUnits");
    }
}
/**
 * The "adunits" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $adunits = $adsenseService->adunits;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AccountsAdunits_Resource', 'VendorDuplicator\\Google_Service_AdSense_AccountsAdunits_Resource', \false);
/**
 * The "customchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $customchannels = $adsenseService->customchannels;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_AccountsAdunitsCustomchannels_Resource extends Google_Service_Resource
{
    /**
     * List all custom channels which the specified ad unit belongs to.
     * (customchannels.listAccountsAdunitsCustomchannels)
     *
     * @param string $accountId Account to which the ad client belongs.
     * @param string $adClientId Ad client which contains the ad unit.
     * @param string $adUnitId Ad unit for which to list custom channels.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of custom channels to include in
     * the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through custom
     * channels. To retrieve the next page, set this parameter to the value of
     * "nextPageToken" from the previous response.
     * @return Google_Service_AdSense_CustomChannels
     */
    public function listAccountsAdunitsCustomchannels($accountId, $adClientId, $adUnitId, $optParams = array())
    {
        $params = array('accountId' => $accountId, 'adClientId' => $adClientId, 'adUnitId' => $adUnitId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AdSense_CustomChannels");
    }
}
/**
 * The "customchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $customchannels = $adsenseService->customchannels;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AccountsAdunitsCustomchannels_Resource', 'VendorDuplicator\\Google_Service_AdSense_AccountsAdunitsCustomchannels_Resource', \false);
/**
 * The "alerts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $alerts = $adsenseService->alerts;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_AccountsAlerts_Resource extends Google_Service_Resource
{
    /**
     * Dismiss (delete) the specified alert from the specified publisher AdSense
     * account. (alerts.delete)
     *
     * @param string $accountId Account which contains the ad unit.
     * @param string $alertId Alert to delete.
     * @param array $optParams Optional parameters.
     */
    public function delete($accountId, $alertId, $optParams = array())
    {
        $params = array('accountId' => $accountId, 'alertId' => $alertId);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }
    /**
     * List the alerts for the specified AdSense account.
     * (alerts.listAccountsAlerts)
     *
     * @param string $accountId Account for which to retrieve the alerts.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string locale The locale to use for translating alert messages.
     * The account locale will be used if this is not supplied. The AdSense default
     * (English) will be used if the supplied locale is invalid or unsupported.
     * @return Google_Service_AdSense_Alerts
     */
    public function listAccountsAlerts($accountId, $optParams = array())
    {
        $params = array('accountId' => $accountId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AdSense_Alerts");
    }
}
/**
 * The "alerts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $alerts = $adsenseService->alerts;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AccountsAlerts_Resource', 'VendorDuplicator\\Google_Service_AdSense_AccountsAlerts_Resource', \false);
/**
 * The "customchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $customchannels = $adsenseService->customchannels;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_AccountsCustomchannels_Resource extends Google_Service_Resource
{
    /**
     * Get the specified custom channel from the specified ad client for the
     * specified account. (customchannels.get)
     *
     * @param string $accountId Account to which the ad client belongs.
     * @param string $adClientId Ad client which contains the custom channel.
     * @param string $customChannelId Custom channel to retrieve.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AdSense_CustomChannel
     */
    public function get($accountId, $adClientId, $customChannelId, $optParams = array())
    {
        $params = array('accountId' => $accountId, 'adClientId' => $adClientId, 'customChannelId' => $customChannelId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_AdSense_CustomChannel");
    }
    /**
     * List all custom channels in the specified ad client for the specified
     * account. (customchannels.listAccountsCustomchannels)
     *
     * @param string $accountId Account to which the ad client belongs.
     * @param string $adClientId Ad client for which to list custom channels.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of custom channels to include in
     * the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through custom
     * channels. To retrieve the next page, set this parameter to the value of
     * "nextPageToken" from the previous response.
     * @return Google_Service_AdSense_CustomChannels
     */
    public function listAccountsCustomchannels($accountId, $adClientId, $optParams = array())
    {
        $params = array('accountId' => $accountId, 'adClientId' => $adClientId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AdSense_CustomChannels");
    }
}
/**
 * The "customchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $customchannels = $adsenseService->customchannels;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AccountsCustomchannels_Resource', 'VendorDuplicator\\Google_Service_AdSense_AccountsCustomchannels_Resource', \false);
/**
 * The "adunits" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $adunits = $adsenseService->adunits;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_AccountsCustomchannelsAdunits_Resource extends Google_Service_Resource
{
    /**
     * List all ad units in the specified custom channel.
     * (adunits.listAccountsCustomchannelsAdunits)
     *
     * @param string $accountId Account to which the ad client belongs.
     * @param string $adClientId Ad client which contains the custom channel.
     * @param string $customChannelId Custom channel for which to list ad units.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeInactive Whether to include inactive ad units.
     * Default: true.
     * @opt_param int maxResults The maximum number of ad units to include in the
     * response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through ad
     * units. To retrieve the next page, set this parameter to the value of
     * "nextPageToken" from the previous response.
     * @return Google_Service_AdSense_AdUnits
     */
    public function listAccountsCustomchannelsAdunits($accountId, $adClientId, $customChannelId, $optParams = array())
    {
        $params = array('accountId' => $accountId, 'adClientId' => $adClientId, 'customChannelId' => $customChannelId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AdSense_AdUnits");
    }
}
/**
 * The "adunits" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $adunits = $adsenseService->adunits;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AccountsCustomchannelsAdunits_Resource', 'VendorDuplicator\\Google_Service_AdSense_AccountsCustomchannelsAdunits_Resource', \false);
/**
 * The "payments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $payments = $adsenseService->payments;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_AccountsPayments_Resource extends Google_Service_Resource
{
    /**
     * List the payments for the specified AdSense account.
     * (payments.listAccountsPayments)
     *
     * @param string $accountId Account for which to retrieve the payments.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AdSense_Payments
     */
    public function listAccountsPayments($accountId, $optParams = array())
    {
        $params = array('accountId' => $accountId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AdSense_Payments");
    }
}
/**
 * The "payments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $payments = $adsenseService->payments;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AccountsPayments_Resource', 'VendorDuplicator\\Google_Service_AdSense_AccountsPayments_Resource', \false);
/**
 * The "reports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $reports = $adsenseService->reports;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_AccountsReports_Resource extends Google_Service_Resource
{
    /**
     * Generate an AdSense report based on the report request sent in the query
     * parameters. Returns the result as JSON; to retrieve output in CSV format
     * specify "alt=csv" as a query parameter. (reports.generate)
     *
     * @param string $accountId Account upon which to report.
     * @param string $startDate Start of the date range to report on in "YYYY-MM-DD"
     * format, inclusive.
     * @param string $endDate End of the date range to report on in "YYYY-MM-DD"
     * format, inclusive.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string currency Optional currency to use when reporting on
     * monetary metrics. Defaults to the account's currency if not set.
     * @opt_param string dimension Dimensions to base the report on.
     * @opt_param string filter Filters to be run on the report.
     * @opt_param string locale Optional locale to use for translating report output
     * to a local language. Defaults to "en_US" if not specified.
     * @opt_param int maxResults The maximum number of rows of report data to
     * return.
     * @opt_param string metric Numeric columns to include in the report.
     * @opt_param string sort The name of a dimension or metric to sort the
     * resulting report on, optionally prefixed with "+" to sort ascending or "-" to
     * sort descending. If no prefix is specified, the column is sorted ascending.
     * @opt_param int startIndex Index of the first row of report data to return.
     * @opt_param bool useTimezoneReporting Whether the report should be generated
     * in the AdSense account's local timezone. If false default PST/PDT timezone
     * will be used.
     * @return Google_Service_AdSense_AdsenseReportsGenerateResponse
     */
    public function generate($accountId, $startDate, $endDate, $optParams = array())
    {
        $params = array('accountId' => $accountId, 'startDate' => $startDate, 'endDate' => $endDate);
        $params = \array_merge($params, $optParams);
        return $this->call('generate', array($params), "VendorDuplicator\\Google_Service_AdSense_AdsenseReportsGenerateResponse");
    }
}
/**
 * The "reports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $reports = $adsenseService->reports;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AccountsReports_Resource', 'VendorDuplicator\\Google_Service_AdSense_AccountsReports_Resource', \false);
/**
 * The "saved" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $saved = $adsenseService->saved;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_AccountsReportsSaved_Resource extends Google_Service_Resource
{
    /**
     * Generate an AdSense report based on the saved report ID sent in the query
     * parameters. (saved.generate)
     *
     * @param string $accountId Account to which the saved reports belong.
     * @param string $savedReportId The saved report to retrieve.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string locale Optional locale to use for translating report output
     * to a local language. Defaults to "en_US" if not specified.
     * @opt_param int maxResults The maximum number of rows of report data to
     * return.
     * @opt_param int startIndex Index of the first row of report data to return.
     * @return Google_Service_AdSense_AdsenseReportsGenerateResponse
     */
    public function generate($accountId, $savedReportId, $optParams = array())
    {
        $params = array('accountId' => $accountId, 'savedReportId' => $savedReportId);
        $params = \array_merge($params, $optParams);
        return $this->call('generate', array($params), "VendorDuplicator\\Google_Service_AdSense_AdsenseReportsGenerateResponse");
    }
    /**
     * List all saved reports in the specified AdSense account.
     * (saved.listAccountsReportsSaved)
     *
     * @param string $accountId Account to which the saved reports belong.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of saved reports to include in
     * the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through saved
     * reports. To retrieve the next page, set this parameter to the value of
     * "nextPageToken" from the previous response.
     * @return Google_Service_AdSense_SavedReports
     */
    public function listAccountsReportsSaved($accountId, $optParams = array())
    {
        $params = array('accountId' => $accountId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AdSense_SavedReports");
    }
}
/**
 * The "saved" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $saved = $adsenseService->saved;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AccountsReportsSaved_Resource', 'VendorDuplicator\\Google_Service_AdSense_AccountsReportsSaved_Resource', \false);
/**
 * The "savedadstyles" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $savedadstyles = $adsenseService->savedadstyles;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_AccountsSavedadstyles_Resource extends Google_Service_Resource
{
    /**
     * List a specific saved ad style for the specified account. (savedadstyles.get)
     *
     * @param string $accountId Account for which to get the saved ad style.
     * @param string $savedAdStyleId Saved ad style to retrieve.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AdSense_SavedAdStyle
     */
    public function get($accountId, $savedAdStyleId, $optParams = array())
    {
        $params = array('accountId' => $accountId, 'savedAdStyleId' => $savedAdStyleId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_AdSense_SavedAdStyle");
    }
    /**
     * List all saved ad styles in the specified account.
     * (savedadstyles.listAccountsSavedadstyles)
     *
     * @param string $accountId Account for which to list saved ad styles.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of saved ad styles to include in
     * the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through saved
     * ad styles. To retrieve the next page, set this parameter to the value of
     * "nextPageToken" from the previous response.
     * @return Google_Service_AdSense_SavedAdStyles
     */
    public function listAccountsSavedadstyles($accountId, $optParams = array())
    {
        $params = array('accountId' => $accountId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AdSense_SavedAdStyles");
    }
}
/**
 * The "savedadstyles" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $savedadstyles = $adsenseService->savedadstyles;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AccountsSavedadstyles_Resource', 'VendorDuplicator\\Google_Service_AdSense_AccountsSavedadstyles_Resource', \false);
/**
 * The "urlchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $urlchannels = $adsenseService->urlchannels;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_AccountsUrlchannels_Resource extends Google_Service_Resource
{
    /**
     * List all URL channels in the specified ad client for the specified account.
     * (urlchannels.listAccountsUrlchannels)
     *
     * @param string $accountId Account to which the ad client belongs.
     * @param string $adClientId Ad client for which to list URL channels.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of URL channels to include in
     * the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through URL
     * channels. To retrieve the next page, set this parameter to the value of
     * "nextPageToken" from the previous response.
     * @return Google_Service_AdSense_UrlChannels
     */
    public function listAccountsUrlchannels($accountId, $adClientId, $optParams = array())
    {
        $params = array('accountId' => $accountId, 'adClientId' => $adClientId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AdSense_UrlChannels");
    }
}
/**
 * The "urlchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $urlchannels = $adsenseService->urlchannels;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AccountsUrlchannels_Resource', 'VendorDuplicator\\Google_Service_AdSense_AccountsUrlchannels_Resource', \false);
/**
 * The "adclients" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $adclients = $adsenseService->adclients;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_Adclients_Resource extends Google_Service_Resource
{
    /**
     * List all ad clients in this AdSense account. (adclients.listAdclients)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of ad clients to include in the
     * response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through ad
     * clients. To retrieve the next page, set this parameter to the value of
     * "nextPageToken" from the previous response.
     * @return Google_Service_AdSense_AdClients
     */
    public function listAdclients($optParams = array())
    {
        $params = array();
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AdSense_AdClients");
    }
}
/**
 * The "adclients" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $adclients = $adsenseService->adclients;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_Adclients_Resource', 'VendorDuplicator\\Google_Service_AdSense_Adclients_Resource', \false);
/**
 * The "adunits" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $adunits = $adsenseService->adunits;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_Adunits_Resource extends Google_Service_Resource
{
    /**
     * Gets the specified ad unit in the specified ad client. (adunits.get)
     *
     * @param string $adClientId Ad client for which to get the ad unit.
     * @param string $adUnitId Ad unit to retrieve.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AdSense_AdUnit
     */
    public function get($adClientId, $adUnitId, $optParams = array())
    {
        $params = array('adClientId' => $adClientId, 'adUnitId' => $adUnitId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_AdSense_AdUnit");
    }
    /**
     * Get ad code for the specified ad unit. (adunits.getAdCode)
     *
     * @param string $adClientId Ad client with contains the ad unit.
     * @param string $adUnitId Ad unit to get the code for.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AdSense_AdCode
     */
    public function getAdCode($adClientId, $adUnitId, $optParams = array())
    {
        $params = array('adClientId' => $adClientId, 'adUnitId' => $adUnitId);
        $params = \array_merge($params, $optParams);
        return $this->call('getAdCode', array($params), "VendorDuplicator\\Google_Service_AdSense_AdCode");
    }
    /**
     * List all ad units in the specified ad client for this AdSense account.
     * (adunits.listAdunits)
     *
     * @param string $adClientId Ad client for which to list ad units.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeInactive Whether to include inactive ad units.
     * Default: true.
     * @opt_param int maxResults The maximum number of ad units to include in the
     * response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through ad
     * units. To retrieve the next page, set this parameter to the value of
     * "nextPageToken" from the previous response.
     * @return Google_Service_AdSense_AdUnits
     */
    public function listAdunits($adClientId, $optParams = array())
    {
        $params = array('adClientId' => $adClientId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AdSense_AdUnits");
    }
}
/**
 * The "adunits" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $adunits = $adsenseService->adunits;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_Adunits_Resource', 'VendorDuplicator\\Google_Service_AdSense_Adunits_Resource', \false);
/**
 * The "customchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $customchannels = $adsenseService->customchannels;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_AdunitsCustomchannels_Resource extends Google_Service_Resource
{
    /**
     * List all custom channels which the specified ad unit belongs to.
     * (customchannels.listAdunitsCustomchannels)
     *
     * @param string $adClientId Ad client which contains the ad unit.
     * @param string $adUnitId Ad unit for which to list custom channels.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of custom channels to include in
     * the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through custom
     * channels. To retrieve the next page, set this parameter to the value of
     * "nextPageToken" from the previous response.
     * @return Google_Service_AdSense_CustomChannels
     */
    public function listAdunitsCustomchannels($adClientId, $adUnitId, $optParams = array())
    {
        $params = array('adClientId' => $adClientId, 'adUnitId' => $adUnitId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AdSense_CustomChannels");
    }
}
/**
 * The "customchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $customchannels = $adsenseService->customchannels;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AdunitsCustomchannels_Resource', 'VendorDuplicator\\Google_Service_AdSense_AdunitsCustomchannels_Resource', \false);
/**
 * The "alerts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $alerts = $adsenseService->alerts;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_Alerts_Resource extends Google_Service_Resource
{
    /**
     * Dismiss (delete) the specified alert from the publisher's AdSense account.
     * (alerts.delete)
     *
     * @param string $alertId Alert to delete.
     * @param array $optParams Optional parameters.
     */
    public function delete($alertId, $optParams = array())
    {
        $params = array('alertId' => $alertId);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }
    /**
     * List the alerts for this AdSense account. (alerts.listAlerts)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string locale The locale to use for translating alert messages.
     * The account locale will be used if this is not supplied. The AdSense default
     * (English) will be used if the supplied locale is invalid or unsupported.
     * @return Google_Service_AdSense_Alerts
     */
    public function listAlerts($optParams = array())
    {
        $params = array();
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AdSense_Alerts");
    }
}
/**
 * The "alerts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $alerts = $adsenseService->alerts;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_Alerts_Resource', 'VendorDuplicator\\Google_Service_AdSense_Alerts_Resource', \false);
/**
 * The "customchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $customchannels = $adsenseService->customchannels;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_Customchannels_Resource extends Google_Service_Resource
{
    /**
     * Get the specified custom channel from the specified ad client.
     * (customchannels.get)
     *
     * @param string $adClientId Ad client which contains the custom channel.
     * @param string $customChannelId Custom channel to retrieve.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AdSense_CustomChannel
     */
    public function get($adClientId, $customChannelId, $optParams = array())
    {
        $params = array('adClientId' => $adClientId, 'customChannelId' => $customChannelId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_AdSense_CustomChannel");
    }
    /**
     * List all custom channels in the specified ad client for this AdSense account.
     * (customchannels.listCustomchannels)
     *
     * @param string $adClientId Ad client for which to list custom channels.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of custom channels to include in
     * the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through custom
     * channels. To retrieve the next page, set this parameter to the value of
     * "nextPageToken" from the previous response.
     * @return Google_Service_AdSense_CustomChannels
     */
    public function listCustomchannels($adClientId, $optParams = array())
    {
        $params = array('adClientId' => $adClientId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AdSense_CustomChannels");
    }
}
/**
 * The "customchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $customchannels = $adsenseService->customchannels;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_Customchannels_Resource', 'VendorDuplicator\\Google_Service_AdSense_Customchannels_Resource', \false);
/**
 * The "adunits" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $adunits = $adsenseService->adunits;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_CustomchannelsAdunits_Resource extends Google_Service_Resource
{
    /**
     * List all ad units in the specified custom channel.
     * (adunits.listCustomchannelsAdunits)
     *
     * @param string $adClientId Ad client which contains the custom channel.
     * @param string $customChannelId Custom channel for which to list ad units.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeInactive Whether to include inactive ad units.
     * Default: true.
     * @opt_param int maxResults The maximum number of ad units to include in the
     * response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through ad
     * units. To retrieve the next page, set this parameter to the value of
     * "nextPageToken" from the previous response.
     * @return Google_Service_AdSense_AdUnits
     */
    public function listCustomchannelsAdunits($adClientId, $customChannelId, $optParams = array())
    {
        $params = array('adClientId' => $adClientId, 'customChannelId' => $customChannelId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AdSense_AdUnits");
    }
}
/**
 * The "adunits" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $adunits = $adsenseService->adunits;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_CustomchannelsAdunits_Resource', 'VendorDuplicator\\Google_Service_AdSense_CustomchannelsAdunits_Resource', \false);
/**
 * The "metadata" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $metadata = $adsenseService->metadata;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_Metadata_Resource extends Google_Service_Resource
{
}
/**
 * The "metadata" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $metadata = $adsenseService->metadata;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_Metadata_Resource', 'VendorDuplicator\\Google_Service_AdSense_Metadata_Resource', \false);
/**
 * The "dimensions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $dimensions = $adsenseService->dimensions;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_MetadataDimensions_Resource extends Google_Service_Resource
{
    /**
     * List the metadata for the dimensions available to this AdSense account.
     * (dimensions.listMetadataDimensions)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Service_AdSense_Metadata
     */
    public function listMetadataDimensions($optParams = array())
    {
        $params = array();
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AdSense_Metadata");
    }
}
/**
 * The "dimensions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $dimensions = $adsenseService->dimensions;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_MetadataDimensions_Resource', 'VendorDuplicator\\Google_Service_AdSense_MetadataDimensions_Resource', \false);
/**
 * The "metrics" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $metrics = $adsenseService->metrics;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_MetadataMetrics_Resource extends Google_Service_Resource
{
    /**
     * List the metadata for the metrics available to this AdSense account.
     * (metrics.listMetadataMetrics)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Service_AdSense_Metadata
     */
    public function listMetadataMetrics($optParams = array())
    {
        $params = array();
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AdSense_Metadata");
    }
}
/**
 * The "metrics" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $metrics = $adsenseService->metrics;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_MetadataMetrics_Resource', 'VendorDuplicator\\Google_Service_AdSense_MetadataMetrics_Resource', \false);
/**
 * The "payments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $payments = $adsenseService->payments;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_Payments_Resource extends Google_Service_Resource
{
    /**
     * List the payments for this AdSense account. (payments.listPayments)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Service_AdSense_Payments
     */
    public function listPayments($optParams = array())
    {
        $params = array();
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AdSense_Payments");
    }
}
/**
 * The "payments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $payments = $adsenseService->payments;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_Payments_Resource', 'VendorDuplicator\\Google_Service_AdSense_Payments_Resource', \false);
/**
 * The "reports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $reports = $adsenseService->reports;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_Reports_Resource extends Google_Service_Resource
{
    /**
     * Generate an AdSense report based on the report request sent in the query
     * parameters. Returns the result as JSON; to retrieve output in CSV format
     * specify "alt=csv" as a query parameter. (reports.generate)
     *
     * @param string $startDate Start of the date range to report on in "YYYY-MM-DD"
     * format, inclusive.
     * @param string $endDate End of the date range to report on in "YYYY-MM-DD"
     * format, inclusive.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string accountId Accounts upon which to report.
     * @opt_param string currency Optional currency to use when reporting on
     * monetary metrics. Defaults to the account's currency if not set.
     * @opt_param string dimension Dimensions to base the report on.
     * @opt_param string filter Filters to be run on the report.
     * @opt_param string locale Optional locale to use for translating report output
     * to a local language. Defaults to "en_US" if not specified.
     * @opt_param int maxResults The maximum number of rows of report data to
     * return.
     * @opt_param string metric Numeric columns to include in the report.
     * @opt_param string sort The name of a dimension or metric to sort the
     * resulting report on, optionally prefixed with "+" to sort ascending or "-" to
     * sort descending. If no prefix is specified, the column is sorted ascending.
     * @opt_param int startIndex Index of the first row of report data to return.
     * @opt_param bool useTimezoneReporting Whether the report should be generated
     * in the AdSense account's local timezone. If false default PST/PDT timezone
     * will be used.
     * @return Google_Service_AdSense_AdsenseReportsGenerateResponse
     */
    public function generate($startDate, $endDate, $optParams = array())
    {
        $params = array('startDate' => $startDate, 'endDate' => $endDate);
        $params = \array_merge($params, $optParams);
        return $this->call('generate', array($params), "VendorDuplicator\\Google_Service_AdSense_AdsenseReportsGenerateResponse");
    }
}
/**
 * The "reports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $reports = $adsenseService->reports;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_Reports_Resource', 'VendorDuplicator\\Google_Service_AdSense_Reports_Resource', \false);
/**
 * The "saved" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $saved = $adsenseService->saved;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_ReportsSaved_Resource extends Google_Service_Resource
{
    /**
     * Generate an AdSense report based on the saved report ID sent in the query
     * parameters. (saved.generate)
     *
     * @param string $savedReportId The saved report to retrieve.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string locale Optional locale to use for translating report output
     * to a local language. Defaults to "en_US" if not specified.
     * @opt_param int maxResults The maximum number of rows of report data to
     * return.
     * @opt_param int startIndex Index of the first row of report data to return.
     * @return Google_Service_AdSense_AdsenseReportsGenerateResponse
     */
    public function generate($savedReportId, $optParams = array())
    {
        $params = array('savedReportId' => $savedReportId);
        $params = \array_merge($params, $optParams);
        return $this->call('generate', array($params), "VendorDuplicator\\Google_Service_AdSense_AdsenseReportsGenerateResponse");
    }
    /**
     * List all saved reports in this AdSense account. (saved.listReportsSaved)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of saved reports to include in
     * the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through saved
     * reports. To retrieve the next page, set this parameter to the value of
     * "nextPageToken" from the previous response.
     * @return Google_Service_AdSense_SavedReports
     */
    public function listReportsSaved($optParams = array())
    {
        $params = array();
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AdSense_SavedReports");
    }
}
/**
 * The "saved" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $saved = $adsenseService->saved;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_ReportsSaved_Resource', 'VendorDuplicator\\Google_Service_AdSense_ReportsSaved_Resource', \false);
/**
 * The "savedadstyles" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $savedadstyles = $adsenseService->savedadstyles;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_Savedadstyles_Resource extends Google_Service_Resource
{
    /**
     * Get a specific saved ad style from the user's account. (savedadstyles.get)
     *
     * @param string $savedAdStyleId Saved ad style to retrieve.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AdSense_SavedAdStyle
     */
    public function get($savedAdStyleId, $optParams = array())
    {
        $params = array('savedAdStyleId' => $savedAdStyleId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_AdSense_SavedAdStyle");
    }
    /**
     * List all saved ad styles in the user's account.
     * (savedadstyles.listSavedadstyles)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of saved ad styles to include in
     * the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through saved
     * ad styles. To retrieve the next page, set this parameter to the value of
     * "nextPageToken" from the previous response.
     * @return Google_Service_AdSense_SavedAdStyles
     */
    public function listSavedadstyles($optParams = array())
    {
        $params = array();
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AdSense_SavedAdStyles");
    }
}
/**
 * The "savedadstyles" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $savedadstyles = $adsenseService->savedadstyles;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_Savedadstyles_Resource', 'VendorDuplicator\\Google_Service_AdSense_Savedadstyles_Resource', \false);
/**
 * The "urlchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $urlchannels = $adsenseService->urlchannels;
 *  </code>
 * @internal
 */
class Google_Service_AdSense_Urlchannels_Resource extends Google_Service_Resource
{
    /**
     * List all URL channels in the specified ad client for this AdSense account.
     * (urlchannels.listUrlchannels)
     *
     * @param string $adClientId Ad client for which to list URL channels.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of URL channels to include in
     * the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through URL
     * channels. To retrieve the next page, set this parameter to the value of
     * "nextPageToken" from the previous response.
     * @return Google_Service_AdSense_UrlChannels
     */
    public function listUrlchannels($adClientId, $optParams = array())
    {
        $params = array('adClientId' => $adClientId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AdSense_UrlChannels");
    }
}
/**
 * The "urlchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $urlchannels = $adsenseService->urlchannels;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AdSense_Urlchannels_Resource', 'VendorDuplicator\\Google_Service_AdSense_Urlchannels_Resource', \false);
/** @internal */
class Google_Service_AdSense_Account extends Google_Collection
{
    protected $collection_key = 'subAccounts';
    protected $internal_gapi_mappings = array("creationTime" => "creation_time");
    public $creationTime;
    public $id;
    public $kind;
    public $name;
    public $premium;
    protected $subAccountsType = 'VendorDuplicator\\Google_Service_AdSense_Account';
    protected $subAccountsDataType = 'array';
    public $timezone;
    public function setCreationTime($creationTime)
    {
        $this->creationTime = $creationTime;
    }
    public function getCreationTime()
    {
        return $this->creationTime;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setPremium($premium)
    {
        $this->premium = $premium;
    }
    public function getPremium()
    {
        return $this->premium;
    }
    public function setSubAccounts($subAccounts)
    {
        $this->subAccounts = $subAccounts;
    }
    public function getSubAccounts()
    {
        return $this->subAccounts;
    }
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
    }
    public function getTimezone()
    {
        return $this->timezone;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_Account', 'VendorDuplicator\\Google_Service_AdSense_Account', \false);
/** @internal */
class Google_Service_AdSense_Accounts extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $etag;
    protected $itemsType = 'VendorDuplicator\\Google_Service_AdSense_Account';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setItems($items)
    {
        $this->items = $items;
    }
    public function getItems()
    {
        return $this->items;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_Accounts', 'VendorDuplicator\\Google_Service_AdSense_Accounts', \false);
/** @internal */
class Google_Service_AdSense_AdClient extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $arcOptIn;
    public $arcReviewMode;
    public $id;
    public $kind;
    public $productCode;
    public $supportsReporting;
    public function setArcOptIn($arcOptIn)
    {
        $this->arcOptIn = $arcOptIn;
    }
    public function getArcOptIn()
    {
        return $this->arcOptIn;
    }
    public function setArcReviewMode($arcReviewMode)
    {
        $this->arcReviewMode = $arcReviewMode;
    }
    public function getArcReviewMode()
    {
        return $this->arcReviewMode;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
    }
    public function getProductCode()
    {
        return $this->productCode;
    }
    public function setSupportsReporting($supportsReporting)
    {
        $this->supportsReporting = $supportsReporting;
    }
    public function getSupportsReporting()
    {
        return $this->supportsReporting;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AdClient', 'VendorDuplicator\\Google_Service_AdSense_AdClient', \false);
/** @internal */
class Google_Service_AdSense_AdClients extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $etag;
    protected $itemsType = 'VendorDuplicator\\Google_Service_AdSense_AdClient';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setItems($items)
    {
        $this->items = $items;
    }
    public function getItems()
    {
        return $this->items;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AdClients', 'VendorDuplicator\\Google_Service_AdSense_AdClients', \false);
/** @internal */
class Google_Service_AdSense_AdCode extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $adCode;
    public $kind;
    public function setAdCode($adCode)
    {
        $this->adCode = $adCode;
    }
    public function getAdCode()
    {
        return $this->adCode;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AdCode', 'VendorDuplicator\\Google_Service_AdSense_AdCode', \false);
/** @internal */
class Google_Service_AdSense_AdStyle extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $colorsType = 'VendorDuplicator\\Google_Service_AdSense_AdStyleColors';
    protected $colorsDataType = '';
    public $corners;
    protected $fontType = 'VendorDuplicator\\Google_Service_AdSense_AdStyleFont';
    protected $fontDataType = '';
    public $kind;
    public function setColors(Google_Service_AdSense_AdStyleColors $colors)
    {
        $this->colors = $colors;
    }
    public function getColors()
    {
        return $this->colors;
    }
    public function setCorners($corners)
    {
        $this->corners = $corners;
    }
    public function getCorners()
    {
        return $this->corners;
    }
    public function setFont(Google_Service_AdSense_AdStyleFont $font)
    {
        $this->font = $font;
    }
    public function getFont()
    {
        return $this->font;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AdStyle', 'VendorDuplicator\\Google_Service_AdSense_AdStyle', \false);
/** @internal */
class Google_Service_AdSense_AdStyleColors extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $background;
    public $border;
    public $text;
    public $title;
    public $url;
    public function setBackground($background)
    {
        $this->background = $background;
    }
    public function getBackground()
    {
        return $this->background;
    }
    public function setBorder($border)
    {
        $this->border = $border;
    }
    public function getBorder()
    {
        return $this->border;
    }
    public function setText($text)
    {
        $this->text = $text;
    }
    public function getText()
    {
        return $this->text;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AdStyleColors', 'VendorDuplicator\\Google_Service_AdSense_AdStyleColors', \false);
/** @internal */
class Google_Service_AdSense_AdStyleFont extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $family;
    public $size;
    public function setFamily($family)
    {
        $this->family = $family;
    }
    public function getFamily()
    {
        return $this->family;
    }
    public function setSize($size)
    {
        $this->size = $size;
    }
    public function getSize()
    {
        return $this->size;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AdStyleFont', 'VendorDuplicator\\Google_Service_AdSense_AdStyleFont', \false);
/** @internal */
class Google_Service_AdSense_AdUnit extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $code;
    protected $contentAdsSettingsType = 'VendorDuplicator\\Google_Service_AdSense_AdUnitContentAdsSettings';
    protected $contentAdsSettingsDataType = '';
    protected $customStyleType = 'VendorDuplicator\\Google_Service_AdSense_AdStyle';
    protected $customStyleDataType = '';
    protected $feedAdsSettingsType = 'VendorDuplicator\\Google_Service_AdSense_AdUnitFeedAdsSettings';
    protected $feedAdsSettingsDataType = '';
    public $id;
    public $kind;
    protected $mobileContentAdsSettingsType = 'VendorDuplicator\\Google_Service_AdSense_AdUnitMobileContentAdsSettings';
    protected $mobileContentAdsSettingsDataType = '';
    public $name;
    public $savedStyleId;
    public $status;
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setContentAdsSettings(Google_Service_AdSense_AdUnitContentAdsSettings $contentAdsSettings)
    {
        $this->contentAdsSettings = $contentAdsSettings;
    }
    public function getContentAdsSettings()
    {
        return $this->contentAdsSettings;
    }
    public function setCustomStyle(Google_Service_AdSense_AdStyle $customStyle)
    {
        $this->customStyle = $customStyle;
    }
    public function getCustomStyle()
    {
        return $this->customStyle;
    }
    public function setFeedAdsSettings(Google_Service_AdSense_AdUnitFeedAdsSettings $feedAdsSettings)
    {
        $this->feedAdsSettings = $feedAdsSettings;
    }
    public function getFeedAdsSettings()
    {
        return $this->feedAdsSettings;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setMobileContentAdsSettings(Google_Service_AdSense_AdUnitMobileContentAdsSettings $mobileContentAdsSettings)
    {
        $this->mobileContentAdsSettings = $mobileContentAdsSettings;
    }
    public function getMobileContentAdsSettings()
    {
        return $this->mobileContentAdsSettings;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setSavedStyleId($savedStyleId)
    {
        $this->savedStyleId = $savedStyleId;
    }
    public function getSavedStyleId()
    {
        return $this->savedStyleId;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AdUnit', 'VendorDuplicator\\Google_Service_AdSense_AdUnit', \false);
/** @internal */
class Google_Service_AdSense_AdUnitContentAdsSettings extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $backupOptionType = 'VendorDuplicator\\Google_Service_AdSense_AdUnitContentAdsSettingsBackupOption';
    protected $backupOptionDataType = '';
    public $size;
    public $type;
    public function setBackupOption(Google_Service_AdSense_AdUnitContentAdsSettingsBackupOption $backupOption)
    {
        $this->backupOption = $backupOption;
    }
    public function getBackupOption()
    {
        return $this->backupOption;
    }
    public function setSize($size)
    {
        $this->size = $size;
    }
    public function getSize()
    {
        return $this->size;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AdUnitContentAdsSettings', 'VendorDuplicator\\Google_Service_AdSense_AdUnitContentAdsSettings', \false);
/** @internal */
class Google_Service_AdSense_AdUnitContentAdsSettingsBackupOption extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $color;
    public $type;
    public $url;
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AdUnitContentAdsSettingsBackupOption', 'VendorDuplicator\\Google_Service_AdSense_AdUnitContentAdsSettingsBackupOption', \false);
/** @internal */
class Google_Service_AdSense_AdUnitFeedAdsSettings extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $adPosition;
    public $frequency;
    public $minimumWordCount;
    public $type;
    public function setAdPosition($adPosition)
    {
        $this->adPosition = $adPosition;
    }
    public function getAdPosition()
    {
        return $this->adPosition;
    }
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
    }
    public function getFrequency()
    {
        return $this->frequency;
    }
    public function setMinimumWordCount($minimumWordCount)
    {
        $this->minimumWordCount = $minimumWordCount;
    }
    public function getMinimumWordCount()
    {
        return $this->minimumWordCount;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AdUnitFeedAdsSettings', 'VendorDuplicator\\Google_Service_AdSense_AdUnitFeedAdsSettings', \false);
/** @internal */
class Google_Service_AdSense_AdUnitMobileContentAdsSettings extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $markupLanguage;
    public $scriptingLanguage;
    public $size;
    public $type;
    public function setMarkupLanguage($markupLanguage)
    {
        $this->markupLanguage = $markupLanguage;
    }
    public function getMarkupLanguage()
    {
        return $this->markupLanguage;
    }
    public function setScriptingLanguage($scriptingLanguage)
    {
        $this->scriptingLanguage = $scriptingLanguage;
    }
    public function getScriptingLanguage()
    {
        return $this->scriptingLanguage;
    }
    public function setSize($size)
    {
        $this->size = $size;
    }
    public function getSize()
    {
        return $this->size;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AdUnitMobileContentAdsSettings', 'VendorDuplicator\\Google_Service_AdSense_AdUnitMobileContentAdsSettings', \false);
/** @internal */
class Google_Service_AdSense_AdUnits extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $etag;
    protected $itemsType = 'VendorDuplicator\\Google_Service_AdSense_AdUnit';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setItems($items)
    {
        $this->items = $items;
    }
    public function getItems()
    {
        return $this->items;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AdUnits', 'VendorDuplicator\\Google_Service_AdSense_AdUnits', \false);
/** @internal */
class Google_Service_AdSense_AdsenseReportsGenerateResponse extends Google_Collection
{
    protected $collection_key = 'warnings';
    protected $internal_gapi_mappings = array();
    public $averages;
    public $endDate;
    protected $headersType = 'VendorDuplicator\\Google_Service_AdSense_AdsenseReportsGenerateResponseHeaders';
    protected $headersDataType = 'array';
    public $kind;
    public $rows;
    public $startDate;
    public $totalMatchedRows;
    public $totals;
    public $warnings;
    public function setAverages($averages)
    {
        $this->averages = $averages;
    }
    public function getAverages()
    {
        return $this->averages;
    }
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }
    public function getEndDate()
    {
        return $this->endDate;
    }
    public function setHeaders($headers)
    {
        $this->headers = $headers;
    }
    public function getHeaders()
    {
        return $this->headers;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setRows($rows)
    {
        $this->rows = $rows;
    }
    public function getRows()
    {
        return $this->rows;
    }
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }
    public function getStartDate()
    {
        return $this->startDate;
    }
    public function setTotalMatchedRows($totalMatchedRows)
    {
        $this->totalMatchedRows = $totalMatchedRows;
    }
    public function getTotalMatchedRows()
    {
        return $this->totalMatchedRows;
    }
    public function setTotals($totals)
    {
        $this->totals = $totals;
    }
    public function getTotals()
    {
        return $this->totals;
    }
    public function setWarnings($warnings)
    {
        $this->warnings = $warnings;
    }
    public function getWarnings()
    {
        return $this->warnings;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AdsenseReportsGenerateResponse', 'VendorDuplicator\\Google_Service_AdSense_AdsenseReportsGenerateResponse', \false);
/** @internal */
class Google_Service_AdSense_AdsenseReportsGenerateResponseHeaders extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $currency;
    public $name;
    public $type;
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }
    public function getCurrency()
    {
        return $this->currency;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_AdsenseReportsGenerateResponseHeaders', 'VendorDuplicator\\Google_Service_AdSense_AdsenseReportsGenerateResponseHeaders', \false);
/** @internal */
class Google_Service_AdSense_Alert extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    public $isDismissible;
    public $kind;
    public $message;
    public $severity;
    public $type;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setIsDismissible($isDismissible)
    {
        $this->isDismissible = $isDismissible;
    }
    public function getIsDismissible()
    {
        return $this->isDismissible;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setMessage($message)
    {
        $this->message = $message;
    }
    public function getMessage()
    {
        return $this->message;
    }
    public function setSeverity($severity)
    {
        $this->severity = $severity;
    }
    public function getSeverity()
    {
        return $this->severity;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_Alert', 'VendorDuplicator\\Google_Service_AdSense_Alert', \false);
/** @internal */
class Google_Service_AdSense_Alerts extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    protected $itemsType = 'VendorDuplicator\\Google_Service_AdSense_Alert';
    protected $itemsDataType = 'array';
    public $kind;
    public function setItems($items)
    {
        $this->items = $items;
    }
    public function getItems()
    {
        return $this->items;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_Alerts', 'VendorDuplicator\\Google_Service_AdSense_Alerts', \false);
/** @internal */
class Google_Service_AdSense_CustomChannel extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $code;
    public $id;
    public $kind;
    public $name;
    protected $targetingInfoType = 'VendorDuplicator\\Google_Service_AdSense_CustomChannelTargetingInfo';
    protected $targetingInfoDataType = '';
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setTargetingInfo(Google_Service_AdSense_CustomChannelTargetingInfo $targetingInfo)
    {
        $this->targetingInfo = $targetingInfo;
    }
    public function getTargetingInfo()
    {
        return $this->targetingInfo;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_CustomChannel', 'VendorDuplicator\\Google_Service_AdSense_CustomChannel', \false);
/** @internal */
class Google_Service_AdSense_CustomChannelTargetingInfo extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $adsAppearOn;
    public $description;
    public $location;
    public $siteLanguage;
    public function setAdsAppearOn($adsAppearOn)
    {
        $this->adsAppearOn = $adsAppearOn;
    }
    public function getAdsAppearOn()
    {
        return $this->adsAppearOn;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setLocation($location)
    {
        $this->location = $location;
    }
    public function getLocation()
    {
        return $this->location;
    }
    public function setSiteLanguage($siteLanguage)
    {
        $this->siteLanguage = $siteLanguage;
    }
    public function getSiteLanguage()
    {
        return $this->siteLanguage;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_CustomChannelTargetingInfo', 'VendorDuplicator\\Google_Service_AdSense_CustomChannelTargetingInfo', \false);
/** @internal */
class Google_Service_AdSense_CustomChannels extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $etag;
    protected $itemsType = 'VendorDuplicator\\Google_Service_AdSense_CustomChannel';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setItems($items)
    {
        $this->items = $items;
    }
    public function getItems()
    {
        return $this->items;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_CustomChannels', 'VendorDuplicator\\Google_Service_AdSense_CustomChannels', \false);
/** @internal */
class Google_Service_AdSense_Metadata extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    protected $itemsType = 'VendorDuplicator\\Google_Service_AdSense_ReportingMetadataEntry';
    protected $itemsDataType = 'array';
    public $kind;
    public function setItems($items)
    {
        $this->items = $items;
    }
    public function getItems()
    {
        return $this->items;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_Metadata', 'VendorDuplicator\\Google_Service_AdSense_Metadata', \false);
/** @internal */
class Google_Service_AdSense_Payment extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    public $kind;
    public $paymentAmount;
    public $paymentAmountCurrencyCode;
    public $paymentDate;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setPaymentAmount($paymentAmount)
    {
        $this->paymentAmount = $paymentAmount;
    }
    public function getPaymentAmount()
    {
        return $this->paymentAmount;
    }
    public function setPaymentAmountCurrencyCode($paymentAmountCurrencyCode)
    {
        $this->paymentAmountCurrencyCode = $paymentAmountCurrencyCode;
    }
    public function getPaymentAmountCurrencyCode()
    {
        return $this->paymentAmountCurrencyCode;
    }
    public function setPaymentDate($paymentDate)
    {
        $this->paymentDate = $paymentDate;
    }
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_Payment', 'VendorDuplicator\\Google_Service_AdSense_Payment', \false);
/** @internal */
class Google_Service_AdSense_Payments extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    protected $itemsType = 'VendorDuplicator\\Google_Service_AdSense_Payment';
    protected $itemsDataType = 'array';
    public $kind;
    public function setItems($items)
    {
        $this->items = $items;
    }
    public function getItems()
    {
        return $this->items;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_Payments', 'VendorDuplicator\\Google_Service_AdSense_Payments', \false);
/** @internal */
class Google_Service_AdSense_ReportingMetadataEntry extends Google_Collection
{
    protected $collection_key = 'supportedProducts';
    protected $internal_gapi_mappings = array();
    public $compatibleDimensions;
    public $compatibleMetrics;
    public $id;
    public $kind;
    public $requiredDimensions;
    public $requiredMetrics;
    public $supportedProducts;
    public function setCompatibleDimensions($compatibleDimensions)
    {
        $this->compatibleDimensions = $compatibleDimensions;
    }
    public function getCompatibleDimensions()
    {
        return $this->compatibleDimensions;
    }
    public function setCompatibleMetrics($compatibleMetrics)
    {
        $this->compatibleMetrics = $compatibleMetrics;
    }
    public function getCompatibleMetrics()
    {
        return $this->compatibleMetrics;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setRequiredDimensions($requiredDimensions)
    {
        $this->requiredDimensions = $requiredDimensions;
    }
    public function getRequiredDimensions()
    {
        return $this->requiredDimensions;
    }
    public function setRequiredMetrics($requiredMetrics)
    {
        $this->requiredMetrics = $requiredMetrics;
    }
    public function getRequiredMetrics()
    {
        return $this->requiredMetrics;
    }
    public function setSupportedProducts($supportedProducts)
    {
        $this->supportedProducts = $supportedProducts;
    }
    public function getSupportedProducts()
    {
        return $this->supportedProducts;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_ReportingMetadataEntry', 'VendorDuplicator\\Google_Service_AdSense_ReportingMetadataEntry', \false);
/** @internal */
class Google_Service_AdSense_SavedAdStyle extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $adStyleType = 'VendorDuplicator\\Google_Service_AdSense_AdStyle';
    protected $adStyleDataType = '';
    public $id;
    public $kind;
    public $name;
    public function setAdStyle(Google_Service_AdSense_AdStyle $adStyle)
    {
        $this->adStyle = $adStyle;
    }
    public function getAdStyle()
    {
        return $this->adStyle;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_SavedAdStyle', 'VendorDuplicator\\Google_Service_AdSense_SavedAdStyle', \false);
/** @internal */
class Google_Service_AdSense_SavedAdStyles extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $etag;
    protected $itemsType = 'VendorDuplicator\\Google_Service_AdSense_SavedAdStyle';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setItems($items)
    {
        $this->items = $items;
    }
    public function getItems()
    {
        return $this->items;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_SavedAdStyles', 'VendorDuplicator\\Google_Service_AdSense_SavedAdStyles', \false);
/** @internal */
class Google_Service_AdSense_SavedReport extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    public $kind;
    public $name;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_SavedReport', 'VendorDuplicator\\Google_Service_AdSense_SavedReport', \false);
/** @internal */
class Google_Service_AdSense_SavedReports extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $etag;
    protected $itemsType = 'VendorDuplicator\\Google_Service_AdSense_SavedReport';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setItems($items)
    {
        $this->items = $items;
    }
    public function getItems()
    {
        return $this->items;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_SavedReports', 'VendorDuplicator\\Google_Service_AdSense_SavedReports', \false);
/** @internal */
class Google_Service_AdSense_UrlChannel extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    public $kind;
    public $urlPattern;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setUrlPattern($urlPattern)
    {
        $this->urlPattern = $urlPattern;
    }
    public function getUrlPattern()
    {
        return $this->urlPattern;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_UrlChannel', 'VendorDuplicator\\Google_Service_AdSense_UrlChannel', \false);
/** @internal */
class Google_Service_AdSense_UrlChannels extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $etag;
    protected $itemsType = 'VendorDuplicator\\Google_Service_AdSense_UrlChannel';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setItems($items)
    {
        $this->items = $items;
    }
    public function getItems()
    {
        return $this->items;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AdSense_UrlChannels', 'VendorDuplicator\\Google_Service_AdSense_UrlChannels', \false);
