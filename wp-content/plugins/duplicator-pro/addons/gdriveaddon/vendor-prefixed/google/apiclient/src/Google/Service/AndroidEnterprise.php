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
 * Service definition for AndroidEnterprise (v1).
 *
 * <p>
 * Allows MDMs/EMMs and enterprises to manage the deployment of apps to Android
 * for Work users.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/android/work/play/emm-api" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 * @internal
 */
class Google_Service_AndroidEnterprise extends Google_Service
{
    /** Manage corporate Android devices. */
    const ANDROIDENTERPRISE = "https://www.googleapis.com/auth/androidenterprise";
    public $collections;
    public $collectionviewers;
    public $devices;
    public $enterprises;
    public $entitlements;
    public $grouplicenses;
    public $grouplicenseusers;
    public $installs;
    public $permissions;
    public $products;
    public $storelayoutclusters;
    public $storelayoutpages;
    public $users;
    /**
     * Constructs the internal representation of the AndroidEnterprise service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->rootUrl = 'https://www.googleapis.com/';
        $this->servicePath = 'androidenterprise/v1/';
        $this->version = 'v1';
        $this->serviceName = 'androidenterprise';
        $this->collections = new Google_Service_AndroidEnterprise_Collections_Resource($this, $this->serviceName, 'collections', array('methods' => array('delete' => array('path' => 'enterprises/{enterpriseId}/collections/{collectionId}', 'httpMethod' => 'DELETE', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'collectionId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => 'enterprises/{enterpriseId}/collections/{collectionId}', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'collectionId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => 'enterprises/{enterpriseId}/collections', 'httpMethod' => 'POST', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'enterprises/{enterpriseId}/collections', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'patch' => array('path' => 'enterprises/{enterpriseId}/collections/{collectionId}', 'httpMethod' => 'PATCH', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'collectionId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'update' => array('path' => 'enterprises/{enterpriseId}/collections/{collectionId}', 'httpMethod' => 'PUT', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'collectionId' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->collectionviewers = new Google_Service_AndroidEnterprise_Collectionviewers_Resource($this, $this->serviceName, 'collectionviewers', array('methods' => array('delete' => array('path' => 'enterprises/{enterpriseId}/collections/{collectionId}/users/{userId}', 'httpMethod' => 'DELETE', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'collectionId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'userId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => 'enterprises/{enterpriseId}/collections/{collectionId}/users/{userId}', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'collectionId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'userId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'enterprises/{enterpriseId}/collections/{collectionId}/users', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'collectionId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'patch' => array('path' => 'enterprises/{enterpriseId}/collections/{collectionId}/users/{userId}', 'httpMethod' => 'PATCH', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'collectionId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'userId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'update' => array('path' => 'enterprises/{enterpriseId}/collections/{collectionId}/users/{userId}', 'httpMethod' => 'PUT', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'collectionId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'userId' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->devices = new Google_Service_AndroidEnterprise_Devices_Resource($this, $this->serviceName, 'devices', array('methods' => array('get' => array('path' => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'userId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'deviceId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'getState' => array('path' => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/state', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'userId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'deviceId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'enterprises/{enterpriseId}/users/{userId}/devices', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'userId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'setState' => array('path' => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/state', 'httpMethod' => 'PUT', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'userId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'deviceId' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->enterprises = new Google_Service_AndroidEnterprise_Enterprises_Resource($this, $this->serviceName, 'enterprises', array('methods' => array('delete' => array('path' => 'enterprises/{enterpriseId}', 'httpMethod' => 'DELETE', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'enroll' => array('path' => 'enterprises/enroll', 'httpMethod' => 'POST', 'parameters' => array('token' => array('location' => 'query', 'type' => 'string', 'required' => \true))), 'get' => array('path' => 'enterprises/{enterpriseId}', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'getStoreLayout' => array('path' => 'enterprises/{enterpriseId}/storeLayout', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => 'enterprises', 'httpMethod' => 'POST', 'parameters' => array('token' => array('location' => 'query', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'enterprises', 'httpMethod' => 'GET', 'parameters' => array('domain' => array('location' => 'query', 'type' => 'string', 'required' => \true))), 'sendTestPushNotification' => array('path' => 'enterprises/{enterpriseId}/sendTestPushNotification', 'httpMethod' => 'POST', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'setAccount' => array('path' => 'enterprises/{enterpriseId}/account', 'httpMethod' => 'PUT', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'setStoreLayout' => array('path' => 'enterprises/{enterpriseId}/storeLayout', 'httpMethod' => 'PUT', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'unenroll' => array('path' => 'enterprises/{enterpriseId}/unenroll', 'httpMethod' => 'POST', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->entitlements = new Google_Service_AndroidEnterprise_Entitlements_Resource($this, $this->serviceName, 'entitlements', array('methods' => array('delete' => array('path' => 'enterprises/{enterpriseId}/users/{userId}/entitlements/{entitlementId}', 'httpMethod' => 'DELETE', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'userId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'entitlementId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => 'enterprises/{enterpriseId}/users/{userId}/entitlements/{entitlementId}', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'userId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'entitlementId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'enterprises/{enterpriseId}/users/{userId}/entitlements', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'userId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'patch' => array('path' => 'enterprises/{enterpriseId}/users/{userId}/entitlements/{entitlementId}', 'httpMethod' => 'PATCH', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'userId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'entitlementId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'install' => array('location' => 'query', 'type' => 'boolean'))), 'update' => array('path' => 'enterprises/{enterpriseId}/users/{userId}/entitlements/{entitlementId}', 'httpMethod' => 'PUT', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'userId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'entitlementId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'install' => array('location' => 'query', 'type' => 'boolean'))))));
        $this->grouplicenses = new Google_Service_AndroidEnterprise_Grouplicenses_Resource($this, $this->serviceName, 'grouplicenses', array('methods' => array('get' => array('path' => 'enterprises/{enterpriseId}/groupLicenses/{groupLicenseId}', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'groupLicenseId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'enterprises/{enterpriseId}/groupLicenses', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->grouplicenseusers = new Google_Service_AndroidEnterprise_Grouplicenseusers_Resource($this, $this->serviceName, 'grouplicenseusers', array('methods' => array('list' => array('path' => 'enterprises/{enterpriseId}/groupLicenses/{groupLicenseId}/users', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'groupLicenseId' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->installs = new Google_Service_AndroidEnterprise_Installs_Resource($this, $this->serviceName, 'installs', array('methods' => array('delete' => array('path' => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/installs/{installId}', 'httpMethod' => 'DELETE', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'userId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'deviceId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'installId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/installs/{installId}', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'userId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'deviceId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'installId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/installs', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'userId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'deviceId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'patch' => array('path' => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/installs/{installId}', 'httpMethod' => 'PATCH', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'userId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'deviceId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'installId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'update' => array('path' => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/installs/{installId}', 'httpMethod' => 'PUT', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'userId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'deviceId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'installId' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->permissions = new Google_Service_AndroidEnterprise_Permissions_Resource($this, $this->serviceName, 'permissions', array('methods' => array('get' => array('path' => 'permissions/{permissionId}', 'httpMethod' => 'GET', 'parameters' => array('permissionId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'language' => array('location' => 'query', 'type' => 'string'))))));
        $this->products = new Google_Service_AndroidEnterprise_Products_Resource($this, $this->serviceName, 'products', array('methods' => array('approve' => array('path' => 'enterprises/{enterpriseId}/products/{productId}/approve', 'httpMethod' => 'POST', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'productId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'generateApprovalUrl' => array('path' => 'enterprises/{enterpriseId}/products/{productId}/generateApprovalUrl', 'httpMethod' => 'POST', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'productId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'languageCode' => array('location' => 'query', 'type' => 'string'))), 'get' => array('path' => 'enterprises/{enterpriseId}/products/{productId}', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'productId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'language' => array('location' => 'query', 'type' => 'string'))), 'getAppRestrictionsSchema' => array('path' => 'enterprises/{enterpriseId}/products/{productId}/appRestrictionsSchema', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'productId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'language' => array('location' => 'query', 'type' => 'string'))), 'getPermissions' => array('path' => 'enterprises/{enterpriseId}/products/{productId}/permissions', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'productId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'updatePermissions' => array('path' => 'enterprises/{enterpriseId}/products/{productId}/permissions', 'httpMethod' => 'PUT', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'productId' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->storelayoutclusters = new Google_Service_AndroidEnterprise_Storelayoutclusters_Resource($this, $this->serviceName, 'storelayoutclusters', array('methods' => array('delete' => array('path' => 'enterprises/{enterpriseId}/storeLayout/pages/{pageId}/clusters/{clusterId}', 'httpMethod' => 'DELETE', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'pageId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'clusterId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => 'enterprises/{enterpriseId}/storeLayout/pages/{pageId}/clusters/{clusterId}', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'pageId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'clusterId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => 'enterprises/{enterpriseId}/storeLayout/pages/{pageId}/clusters', 'httpMethod' => 'POST', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'pageId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'enterprises/{enterpriseId}/storeLayout/pages/{pageId}/clusters', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'pageId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'patch' => array('path' => 'enterprises/{enterpriseId}/storeLayout/pages/{pageId}/clusters/{clusterId}', 'httpMethod' => 'PATCH', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'pageId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'clusterId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'update' => array('path' => 'enterprises/{enterpriseId}/storeLayout/pages/{pageId}/clusters/{clusterId}', 'httpMethod' => 'PUT', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'pageId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'clusterId' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->storelayoutpages = new Google_Service_AndroidEnterprise_Storelayoutpages_Resource($this, $this->serviceName, 'storelayoutpages', array('methods' => array('delete' => array('path' => 'enterprises/{enterpriseId}/storeLayout/pages/{pageId}', 'httpMethod' => 'DELETE', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'pageId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => 'enterprises/{enterpriseId}/storeLayout/pages/{pageId}', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'pageId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => 'enterprises/{enterpriseId}/storeLayout/pages', 'httpMethod' => 'POST', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'enterprises/{enterpriseId}/storeLayout/pages', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'patch' => array('path' => 'enterprises/{enterpriseId}/storeLayout/pages/{pageId}', 'httpMethod' => 'PATCH', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'pageId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'update' => array('path' => 'enterprises/{enterpriseId}/storeLayout/pages/{pageId}', 'httpMethod' => 'PUT', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'pageId' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->users = new Google_Service_AndroidEnterprise_Users_Resource($this, $this->serviceName, 'users', array('methods' => array('generateToken' => array('path' => 'enterprises/{enterpriseId}/users/{userId}/token', 'httpMethod' => 'POST', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'userId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => 'enterprises/{enterpriseId}/users/{userId}', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'userId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'getAvailableProductSet' => array('path' => 'enterprises/{enterpriseId}/users/{userId}/availableProductSet', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'userId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'enterprises/{enterpriseId}/users', 'httpMethod' => 'GET', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'email' => array('location' => 'query', 'type' => 'string', 'required' => \true))), 'revokeToken' => array('path' => 'enterprises/{enterpriseId}/users/{userId}/token', 'httpMethod' => 'DELETE', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'userId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'setAvailableProductSet' => array('path' => 'enterprises/{enterpriseId}/users/{userId}/availableProductSet', 'httpMethod' => 'PUT', 'parameters' => array('enterpriseId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'userId' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
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
 * Service definition for AndroidEnterprise (v1).
 *
 * <p>
 * Allows MDMs/EMMs and enterprises to manage the deployment of apps to Android
 * for Work users.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/android/work/play/emm-api" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise', 'VendorDuplicator\\Google_Service_AndroidEnterprise', \false);
/**
 * The "collections" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $collections = $androidenterpriseService->collections;
 *  </code>
 * @internal
 */
class Google_Service_AndroidEnterprise_Collections_Resource extends Google_Service_Resource
{
    /**
     * Deletes a collection. (collections.delete)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $collectionId The ID of the collection.
     * @param array $optParams Optional parameters.
     */
    public function delete($enterpriseId, $collectionId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'collectionId' => $collectionId);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }
    /**
     * Retrieves the details of a collection. (collections.get)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $collectionId The ID of the collection.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_Collection
     */
    public function get($enterpriseId, $collectionId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'collectionId' => $collectionId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_Collection");
    }
    /**
     * Creates a new collection. (collections.insert)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param Google_Collection $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_Collection
     */
    public function insert($enterpriseId, Google_Service_AndroidEnterprise_Collection $postBody, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_Collection");
    }
    /**
     * Retrieves the IDs of all the collections for an enterprise.
     * (collections.listCollections)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_CollectionsListResponse
     */
    public function listCollections($enterpriseId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_CollectionsListResponse");
    }
    /**
     * Updates a collection. This method supports patch semantics.
     * (collections.patch)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $collectionId The ID of the collection.
     * @param Google_Collection $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_Collection
     */
    public function patch($enterpriseId, $collectionId, Google_Service_AndroidEnterprise_Collection $postBody, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'collectionId' => $collectionId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('patch', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_Collection");
    }
    /**
     * Updates a collection. (collections.update)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $collectionId The ID of the collection.
     * @param Google_Collection $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_Collection
     */
    public function update($enterpriseId, $collectionId, Google_Service_AndroidEnterprise_Collection $postBody, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'collectionId' => $collectionId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('update', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_Collection");
    }
}
/**
 * The "collections" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $collections = $androidenterpriseService->collections;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_Collections_Resource', 'VendorDuplicator\\Google_Service_AndroidEnterprise_Collections_Resource', \false);
/**
 * The "collectionviewers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $collectionviewers = $androidenterpriseService->collectionviewers;
 *  </code>
 * @internal
 */
class Google_Service_AndroidEnterprise_Collectionviewers_Resource extends Google_Service_Resource
{
    /**
     * Removes the user from the list of those specifically allowed to see the
     * collection. If the collection's visibility is set to viewersOnly then only
     * such users will see the collection. (collectionviewers.delete)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $collectionId The ID of the collection.
     * @param string $userId The ID of the user.
     * @param array $optParams Optional parameters.
     */
    public function delete($enterpriseId, $collectionId, $userId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'collectionId' => $collectionId, 'userId' => $userId);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }
    /**
     * Retrieves the ID of the user if they have been specifically allowed to see
     * the collection. If the collection's visibility is set to viewersOnly then
     * only these users will see the collection. (collectionviewers.get)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $collectionId The ID of the collection.
     * @param string $userId The ID of the user.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_User
     */
    public function get($enterpriseId, $collectionId, $userId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'collectionId' => $collectionId, 'userId' => $userId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_User");
    }
    /**
     * Retrieves the IDs of the users who have been specifically allowed to see the
     * collection. If the collection's visibility is set to viewersOnly then only
     * these users will see the collection.
     * (collectionviewers.listCollectionviewers)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $collectionId The ID of the collection.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_CollectionViewersListResponse
     */
    public function listCollectionviewers($enterpriseId, $collectionId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'collectionId' => $collectionId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_CollectionViewersListResponse");
    }
    /**
     * Adds the user to the list of those specifically allowed to see the
     * collection. If the collection's visibility is set to viewersOnly then only
     * such users will see the collection. This method supports patch semantics.
     * (collectionviewers.patch)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $collectionId The ID of the collection.
     * @param string $userId The ID of the user.
     * @param Google_User $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_User
     */
    public function patch($enterpriseId, $collectionId, $userId, Google_Service_AndroidEnterprise_User $postBody, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'collectionId' => $collectionId, 'userId' => $userId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('patch', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_User");
    }
    /**
     * Adds the user to the list of those specifically allowed to see the
     * collection. If the collection's visibility is set to viewersOnly then only
     * such users will see the collection. (collectionviewers.update)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $collectionId The ID of the collection.
     * @param string $userId The ID of the user.
     * @param Google_User $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_User
     */
    public function update($enterpriseId, $collectionId, $userId, Google_Service_AndroidEnterprise_User $postBody, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'collectionId' => $collectionId, 'userId' => $userId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('update', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_User");
    }
}
/**
 * The "collectionviewers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $collectionviewers = $androidenterpriseService->collectionviewers;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_Collectionviewers_Resource', 'VendorDuplicator\\Google_Service_AndroidEnterprise_Collectionviewers_Resource', \false);
/**
 * The "devices" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $devices = $androidenterpriseService->devices;
 *  </code>
 * @internal
 */
class Google_Service_AndroidEnterprise_Devices_Resource extends Google_Service_Resource
{
    /**
     * Retrieves the details of a device. (devices.get)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param string $deviceId The ID of the device.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_Device
     */
    public function get($enterpriseId, $userId, $deviceId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_Device");
    }
    /**
     * Retrieves whether a device is enabled or disabled for access by the user to
     * Google services. The device state takes effect only if enforcing EMM policies
     * on Android devices is enabled in the Google Admin Console. Otherwise, the
     * device state is ignored and all devices are allowed access to Google
     * services. (devices.getState)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param string $deviceId The ID of the device.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_DeviceState
     */
    public function getState($enterpriseId, $userId, $deviceId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId);
        $params = \array_merge($params, $optParams);
        return $this->call('getState', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_DeviceState");
    }
    /**
     * Retrieves the IDs of all of a user's devices. (devices.listDevices)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_DevicesListResponse
     */
    public function listDevices($enterpriseId, $userId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_DevicesListResponse");
    }
    /**
     * Sets whether a device is enabled or disabled for access by the user to Google
     * services. The device state takes effect only if enforcing EMM policies on
     * Android devices is enabled in the Google Admin Console. Otherwise, the device
     * state is ignored and all devices are allowed access to Google services.
     * (devices.setState)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param string $deviceId The ID of the device.
     * @param Google_DeviceState $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_DeviceState
     */
    public function setState($enterpriseId, $userId, $deviceId, Google_Service_AndroidEnterprise_DeviceState $postBody, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('setState', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_DeviceState");
    }
}
/**
 * The "devices" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $devices = $androidenterpriseService->devices;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_Devices_Resource', 'VendorDuplicator\\Google_Service_AndroidEnterprise_Devices_Resource', \false);
/**
 * The "enterprises" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $enterprises = $androidenterpriseService->enterprises;
 *  </code>
 * @internal
 */
class Google_Service_AndroidEnterprise_Enterprises_Resource extends Google_Service_Resource
{
    /**
     * Deletes the binding between the EMM and enterprise. This is now deprecated;
     * use this to unenroll customers that were previously enrolled with the
     * 'insert' call, then enroll them again with the 'enroll' call.
     * (enterprises.delete)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param array $optParams Optional parameters.
     */
    public function delete($enterpriseId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }
    /**
     * Enrolls an enterprise with the calling EMM. (enterprises.enroll)
     *
     * @param string $token The token provided by the enterprise to register the
     * EMM.
     * @param Google_Enterprise $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_Enterprise
     */
    public function enroll($token, Google_Service_AndroidEnterprise_Enterprise $postBody, $optParams = array())
    {
        $params = array('token' => $token, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('enroll', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_Enterprise");
    }
    /**
     * Retrieves the name and domain of an enterprise. (enterprises.get)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_Enterprise
     */
    public function get($enterpriseId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_Enterprise");
    }
    /**
     * Returns the store layout resource. (enterprises.getStoreLayout)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_StoreLayout
     */
    public function getStoreLayout($enterpriseId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId);
        $params = \array_merge($params, $optParams);
        return $this->call('getStoreLayout', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_StoreLayout");
    }
    /**
     * Establishes the binding between the EMM and an enterprise. This is now
     * deprecated; use enroll instead. (enterprises.insert)
     *
     * @param string $token The token provided by the enterprise to register the
     * EMM.
     * @param Google_Enterprise $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_Enterprise
     */
    public function insert($token, Google_Service_AndroidEnterprise_Enterprise $postBody, $optParams = array())
    {
        $params = array('token' => $token, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_Enterprise");
    }
    /**
     * Looks up an enterprise by domain name. (enterprises.listEnterprises)
     *
     * @param string $domain The exact primary domain name of the enterprise to look
     * up.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_EnterprisesListResponse
     */
    public function listEnterprises($domain, $optParams = array())
    {
        $params = array('domain' => $domain);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_EnterprisesListResponse");
    }
    /**
     * Sends a test push notification to validate the EMM integration with the
     * Google Cloud Pub/Sub service for this enterprise.
     * (enterprises.sendTestPushNotification)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_EnterprisesSendTestPushNotificationResponse
     */
    public function sendTestPushNotification($enterpriseId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId);
        $params = \array_merge($params, $optParams);
        return $this->call('sendTestPushNotification', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_EnterprisesSendTestPushNotificationResponse");
    }
    /**
     * Set the account that will be used to authenticate to the API as the
     * enterprise. (enterprises.setAccount)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param Google_EnterpriseAccount $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_EnterpriseAccount
     */
    public function setAccount($enterpriseId, Google_Service_AndroidEnterprise_EnterpriseAccount $postBody, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('setAccount', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_EnterpriseAccount");
    }
    /**
     * Sets the store layout resource. (enterprises.setStoreLayout)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param Google_StoreLayout $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_StoreLayout
     */
    public function setStoreLayout($enterpriseId, Google_Service_AndroidEnterprise_StoreLayout $postBody, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('setStoreLayout', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_StoreLayout");
    }
    /**
     * Unenrolls an enterprise from the calling EMM. (enterprises.unenroll)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param array $optParams Optional parameters.
     */
    public function unenroll($enterpriseId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId);
        $params = \array_merge($params, $optParams);
        return $this->call('unenroll', array($params));
    }
}
/**
 * The "enterprises" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $enterprises = $androidenterpriseService->enterprises;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_Enterprises_Resource', 'VendorDuplicator\\Google_Service_AndroidEnterprise_Enterprises_Resource', \false);
/**
 * The "entitlements" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $entitlements = $androidenterpriseService->entitlements;
 *  </code>
 * @internal
 */
class Google_Service_AndroidEnterprise_Entitlements_Resource extends Google_Service_Resource
{
    /**
     * Removes an entitlement to an app for a user and uninstalls it.
     * (entitlements.delete)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param string $entitlementId The ID of the entitlement, e.g.
     * "app:com.google.android.gm".
     * @param array $optParams Optional parameters.
     */
    public function delete($enterpriseId, $userId, $entitlementId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'entitlementId' => $entitlementId);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }
    /**
     * Retrieves details of an entitlement. (entitlements.get)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param string $entitlementId The ID of the entitlement, e.g.
     * "app:com.google.android.gm".
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_Entitlement
     */
    public function get($enterpriseId, $userId, $entitlementId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'entitlementId' => $entitlementId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_Entitlement");
    }
    /**
     * List of all entitlements for the specified user. Only the ID is set.
     * (entitlements.listEntitlements)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_EntitlementsListResponse
     */
    public function listEntitlements($enterpriseId, $userId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_EntitlementsListResponse");
    }
    /**
     * Adds or updates an entitlement to an app for a user. This method supports
     * patch semantics. (entitlements.patch)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param string $entitlementId The ID of the entitlement, e.g.
     * "app:com.google.android.gm".
     * @param Google_Entitlement $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool install Set to true to also install the product on all the
     * user's devices where possible. Failure to install on one or more devices will
     * not prevent this operation from returning successfully, as long as the
     * entitlement was successfully assigned to the user.
     * @return Google_Service_AndroidEnterprise_Entitlement
     */
    public function patch($enterpriseId, $userId, $entitlementId, Google_Service_AndroidEnterprise_Entitlement $postBody, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'entitlementId' => $entitlementId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('patch', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_Entitlement");
    }
    /**
     * Adds or updates an entitlement to an app for a user. (entitlements.update)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param string $entitlementId The ID of the entitlement, e.g.
     * "app:com.google.android.gm".
     * @param Google_Entitlement $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool install Set to true to also install the product on all the
     * user's devices where possible. Failure to install on one or more devices will
     * not prevent this operation from returning successfully, as long as the
     * entitlement was successfully assigned to the user.
     * @return Google_Service_AndroidEnterprise_Entitlement
     */
    public function update($enterpriseId, $userId, $entitlementId, Google_Service_AndroidEnterprise_Entitlement $postBody, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'entitlementId' => $entitlementId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('update', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_Entitlement");
    }
}
/**
 * The "entitlements" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $entitlements = $androidenterpriseService->entitlements;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_Entitlements_Resource', 'VendorDuplicator\\Google_Service_AndroidEnterprise_Entitlements_Resource', \false);
/**
 * The "grouplicenses" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $grouplicenses = $androidenterpriseService->grouplicenses;
 *  </code>
 * @internal
 */
class Google_Service_AndroidEnterprise_Grouplicenses_Resource extends Google_Service_Resource
{
    /**
     * Retrieves details of an enterprise's group license for a product.
     * (grouplicenses.get)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $groupLicenseId The ID of the product the group license is for,
     * e.g. "app:com.google.android.gm".
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_GroupLicense
     */
    public function get($enterpriseId, $groupLicenseId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'groupLicenseId' => $groupLicenseId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_GroupLicense");
    }
    /**
     * Retrieves IDs of all products for which the enterprise has a group license.
     * (grouplicenses.listGrouplicenses)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_GroupLicensesListResponse
     */
    public function listGrouplicenses($enterpriseId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_GroupLicensesListResponse");
    }
}
/**
 * The "grouplicenses" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $grouplicenses = $androidenterpriseService->grouplicenses;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_Grouplicenses_Resource', 'VendorDuplicator\\Google_Service_AndroidEnterprise_Grouplicenses_Resource', \false);
/**
 * The "grouplicenseusers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $grouplicenseusers = $androidenterpriseService->grouplicenseusers;
 *  </code>
 * @internal
 */
class Google_Service_AndroidEnterprise_Grouplicenseusers_Resource extends Google_Service_Resource
{
    /**
     * Retrieves the IDs of the users who have been granted entitlements under the
     * license. (grouplicenseusers.listGrouplicenseusers)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $groupLicenseId The ID of the product the group license is for,
     * e.g. "app:com.google.android.gm".
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_GroupLicenseUsersListResponse
     */
    public function listGrouplicenseusers($enterpriseId, $groupLicenseId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'groupLicenseId' => $groupLicenseId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_GroupLicenseUsersListResponse");
    }
}
/**
 * The "grouplicenseusers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $grouplicenseusers = $androidenterpriseService->grouplicenseusers;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_Grouplicenseusers_Resource', 'VendorDuplicator\\Google_Service_AndroidEnterprise_Grouplicenseusers_Resource', \false);
/**
 * The "installs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $installs = $androidenterpriseService->installs;
 *  </code>
 * @internal
 */
class Google_Service_AndroidEnterprise_Installs_Resource extends Google_Service_Resource
{
    /**
     * Requests to remove an app from a device. A call to get or list will still
     * show the app as installed on the device until it is actually removed.
     * (installs.delete)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param string $deviceId The Android ID of the device.
     * @param string $installId The ID of the product represented by the install,
     * e.g. "app:com.google.android.gm".
     * @param array $optParams Optional parameters.
     */
    public function delete($enterpriseId, $userId, $deviceId, $installId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId, 'installId' => $installId);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }
    /**
     * Retrieves details of an installation of an app on a device. (installs.get)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param string $deviceId The Android ID of the device.
     * @param string $installId The ID of the product represented by the install,
     * e.g. "app:com.google.android.gm".
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_Install
     */
    public function get($enterpriseId, $userId, $deviceId, $installId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId, 'installId' => $installId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_Install");
    }
    /**
     * Retrieves the details of all apps installed on the specified device.
     * (installs.listInstalls)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param string $deviceId The Android ID of the device.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_InstallsListResponse
     */
    public function listInstalls($enterpriseId, $userId, $deviceId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_InstallsListResponse");
    }
    /**
     * Requests to install the latest version of an app to a device. If the app is
     * already installed then it is updated to the latest version if necessary. This
     * method supports patch semantics. (installs.patch)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param string $deviceId The Android ID of the device.
     * @param string $installId The ID of the product represented by the install,
     * e.g. "app:com.google.android.gm".
     * @param Google_Install $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_Install
     */
    public function patch($enterpriseId, $userId, $deviceId, $installId, Google_Service_AndroidEnterprise_Install $postBody, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId, 'installId' => $installId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('patch', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_Install");
    }
    /**
     * Requests to install the latest version of an app to a device. If the app is
     * already installed then it is updated to the latest version if necessary.
     * (installs.update)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param string $deviceId The Android ID of the device.
     * @param string $installId The ID of the product represented by the install,
     * e.g. "app:com.google.android.gm".
     * @param Google_Install $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_Install
     */
    public function update($enterpriseId, $userId, $deviceId, $installId, Google_Service_AndroidEnterprise_Install $postBody, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId, 'installId' => $installId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('update', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_Install");
    }
}
/**
 * The "installs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $installs = $androidenterpriseService->installs;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_Installs_Resource', 'VendorDuplicator\\Google_Service_AndroidEnterprise_Installs_Resource', \false);
/**
 * The "permissions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $permissions = $androidenterpriseService->permissions;
 *  </code>
 * @internal
 */
class Google_Service_AndroidEnterprise_Permissions_Resource extends Google_Service_Resource
{
    /**
     * Retrieves details of an Android app permission for display to an enterprise
     * admin. (permissions.get)
     *
     * @param string $permissionId The ID of the permission.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string language The BCP47 tag for the user's preferred language
     * (e.g. "en-US", "de")
     * @return Google_Service_AndroidEnterprise_Permission
     */
    public function get($permissionId, $optParams = array())
    {
        $params = array('permissionId' => $permissionId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_Permission");
    }
}
/**
 * The "permissions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $permissions = $androidenterpriseService->permissions;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_Permissions_Resource', 'VendorDuplicator\\Google_Service_AndroidEnterprise_Permissions_Resource', \false);
/**
 * The "products" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $products = $androidenterpriseService->products;
 *  </code>
 * @internal
 */
class Google_Service_AndroidEnterprise_Products_Resource extends Google_Service_Resource
{
    /**
     * Approves the specified product (and the relevant app permissions, if any).
     * (products.approve)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $productId The ID of the product.
     * @param Google_ProductsApproveRequest $postBody
     * @param array $optParams Optional parameters.
     */
    public function approve($enterpriseId, $productId, Google_Service_AndroidEnterprise_ProductsApproveRequest $postBody, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'productId' => $productId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('approve', array($params));
    }
    /**
     * Generates a URL that can be rendered in an iframe to display the permissions
     * (if any) of a product. An enterprise admin must view these permissions and
     * accept them on behalf of their organization in order to approve that product.
     *
     * Admins should accept the displayed permissions by interacting with a separate
     * UI element in the EMM console, which in turn should trigger the use of this
     * URL as the approvalUrlInfo.approvalUrl property in a Products.approve call to
     * approve the product. This URL can only be used to display permissions for up
     * to 1 day. (products.generateApprovalUrl)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $productId The ID of the product.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string languageCode The BCP 47 language code used for permission
     * names and descriptions in the returned iframe, for instance "en-US".
     * @return Google_Service_AndroidEnterprise_ProductsGenerateApprovalUrlResponse
     */
    public function generateApprovalUrl($enterpriseId, $productId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'productId' => $productId);
        $params = \array_merge($params, $optParams);
        return $this->call('generateApprovalUrl', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_ProductsGenerateApprovalUrlResponse");
    }
    /**
     * Retrieves details of a product for display to an enterprise admin.
     * (products.get)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $productId The ID of the product, e.g.
     * "app:com.google.android.gm".
     * @param array $optParams Optional parameters.
     *
     * @opt_param string language The BCP47 tag for the user's preferred language
     * (e.g. "en-US", "de").
     * @return Google_Service_AndroidEnterprise_Product
     */
    public function get($enterpriseId, $productId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'productId' => $productId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_Product");
    }
    /**
     * Retrieves the schema defining app restrictions configurable for this product.
     * All products have a schema, but this may be empty if no app restrictions are
     * defined. (products.getAppRestrictionsSchema)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $productId The ID of the product.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string language The BCP47 tag for the user's preferred language
     * (e.g. "en-US", "de").
     * @return Google_Service_AndroidEnterprise_AppRestrictionsSchema
     */
    public function getAppRestrictionsSchema($enterpriseId, $productId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'productId' => $productId);
        $params = \array_merge($params, $optParams);
        return $this->call('getAppRestrictionsSchema', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_AppRestrictionsSchema");
    }
    /**
     * Retrieves the Android app permissions required by this app.
     * (products.getPermissions)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $productId The ID of the product.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_ProductPermissions
     */
    public function getPermissions($enterpriseId, $productId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'productId' => $productId);
        $params = \array_merge($params, $optParams);
        return $this->call('getPermissions', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_ProductPermissions");
    }
    /**
     * Updates the set of Android app permissions for this app that have been
     * accepted by the enterprise. (products.updatePermissions)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $productId The ID of the product.
     * @param Google_ProductPermissions $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_ProductPermissions
     */
    public function updatePermissions($enterpriseId, $productId, Google_Service_AndroidEnterprise_ProductPermissions $postBody, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'productId' => $productId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('updatePermissions', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_ProductPermissions");
    }
}
/**
 * The "products" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $products = $androidenterpriseService->products;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_Products_Resource', 'VendorDuplicator\\Google_Service_AndroidEnterprise_Products_Resource', \false);
/**
 * The "storelayoutclusters" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $storelayoutclusters = $androidenterpriseService->storelayoutclusters;
 *  </code>
 * @internal
 */
class Google_Service_AndroidEnterprise_Storelayoutclusters_Resource extends Google_Service_Resource
{
    /**
     * Deletes a cluster. (storelayoutclusters.delete)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $pageId The ID of the page.
     * @param string $clusterId The ID of the cluster.
     * @param array $optParams Optional parameters.
     */
    public function delete($enterpriseId, $pageId, $clusterId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'pageId' => $pageId, 'clusterId' => $clusterId);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }
    /**
     * Retrieves details of a cluster. (storelayoutclusters.get)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $pageId The ID of the page.
     * @param string $clusterId The ID of the cluster.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_StoreCluster
     */
    public function get($enterpriseId, $pageId, $clusterId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'pageId' => $pageId, 'clusterId' => $clusterId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_StoreCluster");
    }
    /**
     * Inserts a new cluster in a page. (storelayoutclusters.insert)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $pageId The ID of the page.
     * @param Google_StoreCluster $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_StoreCluster
     */
    public function insert($enterpriseId, $pageId, Google_Service_AndroidEnterprise_StoreCluster $postBody, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'pageId' => $pageId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_StoreCluster");
    }
    /**
     * Retrieves the details of all clusters on the specified page.
     * (storelayoutclusters.listStorelayoutclusters)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $pageId The ID of the page.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_StoreLayoutClustersListResponse
     */
    public function listStorelayoutclusters($enterpriseId, $pageId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'pageId' => $pageId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_StoreLayoutClustersListResponse");
    }
    /**
     * Updates a cluster. This method supports patch semantics.
     * (storelayoutclusters.patch)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $pageId The ID of the page.
     * @param string $clusterId The ID of the cluster.
     * @param Google_StoreCluster $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_StoreCluster
     */
    public function patch($enterpriseId, $pageId, $clusterId, Google_Service_AndroidEnterprise_StoreCluster $postBody, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'pageId' => $pageId, 'clusterId' => $clusterId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('patch', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_StoreCluster");
    }
    /**
     * Updates a cluster. (storelayoutclusters.update)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $pageId The ID of the page.
     * @param string $clusterId The ID of the cluster.
     * @param Google_StoreCluster $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_StoreCluster
     */
    public function update($enterpriseId, $pageId, $clusterId, Google_Service_AndroidEnterprise_StoreCluster $postBody, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'pageId' => $pageId, 'clusterId' => $clusterId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('update', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_StoreCluster");
    }
}
/**
 * The "storelayoutclusters" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $storelayoutclusters = $androidenterpriseService->storelayoutclusters;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_Storelayoutclusters_Resource', 'VendorDuplicator\\Google_Service_AndroidEnterprise_Storelayoutclusters_Resource', \false);
/**
 * The "storelayoutpages" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $storelayoutpages = $androidenterpriseService->storelayoutpages;
 *  </code>
 * @internal
 */
class Google_Service_AndroidEnterprise_Storelayoutpages_Resource extends Google_Service_Resource
{
    /**
     * Deletes a store page. (storelayoutpages.delete)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $pageId The ID of the page.
     * @param array $optParams Optional parameters.
     */
    public function delete($enterpriseId, $pageId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'pageId' => $pageId);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }
    /**
     * Retrieves details of a store page. (storelayoutpages.get)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $pageId The ID of the page.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_StorePage
     */
    public function get($enterpriseId, $pageId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'pageId' => $pageId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_StorePage");
    }
    /**
     * Inserts a new store page. (storelayoutpages.insert)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param Google_StorePage $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_StorePage
     */
    public function insert($enterpriseId, Google_Service_AndroidEnterprise_StorePage $postBody, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_StorePage");
    }
    /**
     * Retrieves the details of all pages in the store.
     * (storelayoutpages.listStorelayoutpages)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_StoreLayoutPagesListResponse
     */
    public function listStorelayoutpages($enterpriseId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_StoreLayoutPagesListResponse");
    }
    /**
     * Updates the content of a store page. This method supports patch semantics.
     * (storelayoutpages.patch)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $pageId The ID of the page.
     * @param Google_StorePage $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_StorePage
     */
    public function patch($enterpriseId, $pageId, Google_Service_AndroidEnterprise_StorePage $postBody, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'pageId' => $pageId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('patch', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_StorePage");
    }
    /**
     * Updates the content of a store page. (storelayoutpages.update)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $pageId The ID of the page.
     * @param Google_StorePage $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_StorePage
     */
    public function update($enterpriseId, $pageId, Google_Service_AndroidEnterprise_StorePage $postBody, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'pageId' => $pageId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('update', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_StorePage");
    }
}
/**
 * The "storelayoutpages" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $storelayoutpages = $androidenterpriseService->storelayoutpages;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_Storelayoutpages_Resource', 'VendorDuplicator\\Google_Service_AndroidEnterprise_Storelayoutpages_Resource', \false);
/**
 * The "users" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $users = $androidenterpriseService->users;
 *  </code>
 * @internal
 */
class Google_Service_AndroidEnterprise_Users_Resource extends Google_Service_Resource
{
    /**
     * Generates a token (activation code) to allow this user to configure their
     * work account in the Android Setup Wizard. Revokes any previously generated
     * token.
     *
     * This call only works with Google managed accounts. (users.generateToken)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_UserToken
     */
    public function generateToken($enterpriseId, $userId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId);
        $params = \array_merge($params, $optParams);
        return $this->call('generateToken', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_UserToken");
    }
    /**
     * Retrieves a user's details. (users.get)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_User
     */
    public function get($enterpriseId, $userId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_User");
    }
    /**
     * Retrieves the set of products a user is entitled to access.
     * (users.getAvailableProductSet)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_ProductSet
     */
    public function getAvailableProductSet($enterpriseId, $userId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId);
        $params = \array_merge($params, $optParams);
        return $this->call('getAvailableProductSet', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_ProductSet");
    }
    /**
     * Looks up a user by their primary email address. (users.listUsers)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $email The exact primary email address of the user to look up.
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_UsersListResponse
     */
    public function listUsers($enterpriseId, $email, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'email' => $email);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_UsersListResponse");
    }
    /**
     * Revokes a previously generated token (activation code) for the user.
     * (users.revokeToken)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param array $optParams Optional parameters.
     */
    public function revokeToken($enterpriseId, $userId, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId);
        $params = \array_merge($params, $optParams);
        return $this->call('revokeToken', array($params));
    }
    /**
     * Modifies the set of products a user is entitled to access.
     * (users.setAvailableProductSet)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param Google_ProductSet $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_AndroidEnterprise_ProductSet
     */
    public function setAvailableProductSet($enterpriseId, $userId, Google_Service_AndroidEnterprise_ProductSet $postBody, $optParams = array())
    {
        $params = array('enterpriseId' => $enterpriseId, 'userId' => $userId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('setAvailableProductSet', array($params), "VendorDuplicator\\Google_Service_AndroidEnterprise_ProductSet");
    }
}
/**
 * The "users" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $users = $androidenterpriseService->users;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_Users_Resource', 'VendorDuplicator\\Google_Service_AndroidEnterprise_Users_Resource', \false);
/** @internal */
class Google_Service_AndroidEnterprise_AppRestrictionsSchema extends Google_Collection
{
    protected $collection_key = 'restrictions';
    protected $internal_gapi_mappings = array();
    public $kind;
    protected $restrictionsType = 'VendorDuplicator\\Google_Service_AndroidEnterprise_AppRestrictionsSchemaRestriction';
    protected $restrictionsDataType = 'array';
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setRestrictions($restrictions)
    {
        $this->restrictions = $restrictions;
    }
    public function getRestrictions()
    {
        return $this->restrictions;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_AppRestrictionsSchema', 'VendorDuplicator\\Google_Service_AndroidEnterprise_AppRestrictionsSchema', \false);
/** @internal */
class Google_Service_AndroidEnterprise_AppRestrictionsSchemaRestriction extends Google_Collection
{
    protected $collection_key = 'entryValue';
    protected $internal_gapi_mappings = array();
    protected $defaultValueType = 'VendorDuplicator\\Google_Service_AndroidEnterprise_AppRestrictionsSchemaRestrictionRestrictionValue';
    protected $defaultValueDataType = '';
    public $description;
    public $entry;
    public $entryValue;
    public $key;
    public $restrictionType;
    public $title;
    public function setDefaultValue(Google_Service_AndroidEnterprise_AppRestrictionsSchemaRestrictionRestrictionValue $defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setEntry($entry)
    {
        $this->entry = $entry;
    }
    public function getEntry()
    {
        return $this->entry;
    }
    public function setEntryValue($entryValue)
    {
        $this->entryValue = $entryValue;
    }
    public function getEntryValue()
    {
        return $this->entryValue;
    }
    public function setKey($key)
    {
        $this->key = $key;
    }
    public function getKey()
    {
        return $this->key;
    }
    public function setRestrictionType($restrictionType)
    {
        $this->restrictionType = $restrictionType;
    }
    public function getRestrictionType()
    {
        return $this->restrictionType;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_AppRestrictionsSchemaRestriction', 'VendorDuplicator\\Google_Service_AndroidEnterprise_AppRestrictionsSchemaRestriction', \false);
/** @internal */
class Google_Service_AndroidEnterprise_AppRestrictionsSchemaRestrictionRestrictionValue extends Google_Collection
{
    protected $collection_key = 'valueMultiselect';
    protected $internal_gapi_mappings = array();
    public $type;
    public $valueBool;
    public $valueInteger;
    public $valueMultiselect;
    public $valueString;
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setValueBool($valueBool)
    {
        $this->valueBool = $valueBool;
    }
    public function getValueBool()
    {
        return $this->valueBool;
    }
    public function setValueInteger($valueInteger)
    {
        $this->valueInteger = $valueInteger;
    }
    public function getValueInteger()
    {
        return $this->valueInteger;
    }
    public function setValueMultiselect($valueMultiselect)
    {
        $this->valueMultiselect = $valueMultiselect;
    }
    public function getValueMultiselect()
    {
        return $this->valueMultiselect;
    }
    public function setValueString($valueString)
    {
        $this->valueString = $valueString;
    }
    public function getValueString()
    {
        return $this->valueString;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_AppRestrictionsSchemaRestrictionRestrictionValue', 'VendorDuplicator\\Google_Service_AndroidEnterprise_AppRestrictionsSchemaRestrictionRestrictionValue', \false);
/** @internal */
class Google_Service_AndroidEnterprise_AppVersion extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $versionCode;
    public $versionString;
    public function setVersionCode($versionCode)
    {
        $this->versionCode = $versionCode;
    }
    public function getVersionCode()
    {
        return $this->versionCode;
    }
    public function setVersionString($versionString)
    {
        $this->versionString = $versionString;
    }
    public function getVersionString()
    {
        return $this->versionString;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_AppVersion', 'VendorDuplicator\\Google_Service_AndroidEnterprise_AppVersion', \false);
/** @internal */
class Google_Service_AndroidEnterprise_ApprovalUrlInfo extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $approvalUrl;
    public $kind;
    public function setApprovalUrl($approvalUrl)
    {
        $this->approvalUrl = $approvalUrl;
    }
    public function getApprovalUrl()
    {
        return $this->approvalUrl;
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
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_ApprovalUrlInfo', 'VendorDuplicator\\Google_Service_AndroidEnterprise_ApprovalUrlInfo', \false);
/** @internal */
class Google_Service_AndroidEnterprise_Collection extends Google_Collection
{
    protected $collection_key = 'productId';
    protected $internal_gapi_mappings = array();
    public $collectionId;
    public $kind;
    public $name;
    public $productId;
    public $visibility;
    public function setCollectionId($collectionId)
    {
        $this->collectionId = $collectionId;
    }
    public function getCollectionId()
    {
        return $this->collectionId;
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
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }
    public function getProductId()
    {
        return $this->productId;
    }
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
    }
    public function getVisibility()
    {
        return $this->visibility;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_Collection', 'VendorDuplicator\\Google_Service_AndroidEnterprise_Collection', \false);
/** @internal */
class Google_Service_AndroidEnterprise_CollectionViewersListResponse extends Google_Collection
{
    protected $collection_key = 'user';
    protected $internal_gapi_mappings = array();
    public $kind;
    protected $userType = 'VendorDuplicator\\Google_Service_AndroidEnterprise_User';
    protected $userDataType = 'array';
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setUser($user)
    {
        $this->user = $user;
    }
    public function getUser()
    {
        return $this->user;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_CollectionViewersListResponse', 'VendorDuplicator\\Google_Service_AndroidEnterprise_CollectionViewersListResponse', \false);
/** @internal */
class Google_Service_AndroidEnterprise_CollectionsListResponse extends Google_Collection
{
    protected $collection_key = 'collection';
    protected $internal_gapi_mappings = array();
    protected $collectionType = 'VendorDuplicator\\Google_Service_AndroidEnterprise_Collection';
    protected $collectionDataType = 'array';
    public $kind;
    public function setCollection($collection)
    {
        $this->collection = $collection;
    }
    public function getCollection()
    {
        return $this->collection;
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
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_CollectionsListResponse', 'VendorDuplicator\\Google_Service_AndroidEnterprise_CollectionsListResponse', \false);
/** @internal */
class Google_Service_AndroidEnterprise_Device extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $androidId;
    public $kind;
    public $managementType;
    public function setAndroidId($androidId)
    {
        $this->androidId = $androidId;
    }
    public function getAndroidId()
    {
        return $this->androidId;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setManagementType($managementType)
    {
        $this->managementType = $managementType;
    }
    public function getManagementType()
    {
        return $this->managementType;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_Device', 'VendorDuplicator\\Google_Service_AndroidEnterprise_Device', \false);
/** @internal */
class Google_Service_AndroidEnterprise_DeviceState extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $accountState;
    public $kind;
    public function setAccountState($accountState)
    {
        $this->accountState = $accountState;
    }
    public function getAccountState()
    {
        return $this->accountState;
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
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_DeviceState', 'VendorDuplicator\\Google_Service_AndroidEnterprise_DeviceState', \false);
/** @internal */
class Google_Service_AndroidEnterprise_DevicesListResponse extends Google_Collection
{
    protected $collection_key = 'device';
    protected $internal_gapi_mappings = array();
    protected $deviceType = 'VendorDuplicator\\Google_Service_AndroidEnterprise_Device';
    protected $deviceDataType = 'array';
    public $kind;
    public function setDevice($device)
    {
        $this->device = $device;
    }
    public function getDevice()
    {
        return $this->device;
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
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_DevicesListResponse', 'VendorDuplicator\\Google_Service_AndroidEnterprise_DevicesListResponse', \false);
/** @internal */
class Google_Service_AndroidEnterprise_Enterprise extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    public $kind;
    public $name;
    public $primaryDomain;
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
    public function setPrimaryDomain($primaryDomain)
    {
        $this->primaryDomain = $primaryDomain;
    }
    public function getPrimaryDomain()
    {
        return $this->primaryDomain;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_Enterprise', 'VendorDuplicator\\Google_Service_AndroidEnterprise_Enterprise', \false);
/** @internal */
class Google_Service_AndroidEnterprise_EnterpriseAccount extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $accountEmail;
    public $kind;
    public function setAccountEmail($accountEmail)
    {
        $this->accountEmail = $accountEmail;
    }
    public function getAccountEmail()
    {
        return $this->accountEmail;
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
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_EnterpriseAccount', 'VendorDuplicator\\Google_Service_AndroidEnterprise_EnterpriseAccount', \false);
/** @internal */
class Google_Service_AndroidEnterprise_EnterprisesListResponse extends Google_Collection
{
    protected $collection_key = 'enterprise';
    protected $internal_gapi_mappings = array();
    protected $enterpriseType = 'VendorDuplicator\\Google_Service_AndroidEnterprise_Enterprise';
    protected $enterpriseDataType = 'array';
    public $kind;
    public function setEnterprise($enterprise)
    {
        $this->enterprise = $enterprise;
    }
    public function getEnterprise()
    {
        return $this->enterprise;
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
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_EnterprisesListResponse', 'VendorDuplicator\\Google_Service_AndroidEnterprise_EnterprisesListResponse', \false);
/** @internal */
class Google_Service_AndroidEnterprise_EnterprisesSendTestPushNotificationResponse extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $messageId;
    public $topicName;
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;
    }
    public function getMessageId()
    {
        return $this->messageId;
    }
    public function setTopicName($topicName)
    {
        $this->topicName = $topicName;
    }
    public function getTopicName()
    {
        return $this->topicName;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_EnterprisesSendTestPushNotificationResponse', 'VendorDuplicator\\Google_Service_AndroidEnterprise_EnterprisesSendTestPushNotificationResponse', \false);
/** @internal */
class Google_Service_AndroidEnterprise_Entitlement extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $kind;
    public $productId;
    public $reason;
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }
    public function getProductId()
    {
        return $this->productId;
    }
    public function setReason($reason)
    {
        $this->reason = $reason;
    }
    public function getReason()
    {
        return $this->reason;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_Entitlement', 'VendorDuplicator\\Google_Service_AndroidEnterprise_Entitlement', \false);
/** @internal */
class Google_Service_AndroidEnterprise_EntitlementsListResponse extends Google_Collection
{
    protected $collection_key = 'entitlement';
    protected $internal_gapi_mappings = array();
    protected $entitlementType = 'VendorDuplicator\\Google_Service_AndroidEnterprise_Entitlement';
    protected $entitlementDataType = 'array';
    public $kind;
    public function setEntitlement($entitlement)
    {
        $this->entitlement = $entitlement;
    }
    public function getEntitlement()
    {
        return $this->entitlement;
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
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_EntitlementsListResponse', 'VendorDuplicator\\Google_Service_AndroidEnterprise_EntitlementsListResponse', \false);
/** @internal */
class Google_Service_AndroidEnterprise_GroupLicense extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $acquisitionKind;
    public $approval;
    public $kind;
    public $numProvisioned;
    public $numPurchased;
    public $productId;
    public function setAcquisitionKind($acquisitionKind)
    {
        $this->acquisitionKind = $acquisitionKind;
    }
    public function getAcquisitionKind()
    {
        return $this->acquisitionKind;
    }
    public function setApproval($approval)
    {
        $this->approval = $approval;
    }
    public function getApproval()
    {
        return $this->approval;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setNumProvisioned($numProvisioned)
    {
        $this->numProvisioned = $numProvisioned;
    }
    public function getNumProvisioned()
    {
        return $this->numProvisioned;
    }
    public function setNumPurchased($numPurchased)
    {
        $this->numPurchased = $numPurchased;
    }
    public function getNumPurchased()
    {
        return $this->numPurchased;
    }
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }
    public function getProductId()
    {
        return $this->productId;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_GroupLicense', 'VendorDuplicator\\Google_Service_AndroidEnterprise_GroupLicense', \false);
/** @internal */
class Google_Service_AndroidEnterprise_GroupLicenseUsersListResponse extends Google_Collection
{
    protected $collection_key = 'user';
    protected $internal_gapi_mappings = array();
    public $kind;
    protected $userType = 'VendorDuplicator\\Google_Service_AndroidEnterprise_User';
    protected $userDataType = 'array';
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setUser($user)
    {
        $this->user = $user;
    }
    public function getUser()
    {
        return $this->user;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_GroupLicenseUsersListResponse', 'VendorDuplicator\\Google_Service_AndroidEnterprise_GroupLicenseUsersListResponse', \false);
/** @internal */
class Google_Service_AndroidEnterprise_GroupLicensesListResponse extends Google_Collection
{
    protected $collection_key = 'groupLicense';
    protected $internal_gapi_mappings = array();
    protected $groupLicenseType = 'VendorDuplicator\\Google_Service_AndroidEnterprise_GroupLicense';
    protected $groupLicenseDataType = 'array';
    public $kind;
    public function setGroupLicense($groupLicense)
    {
        $this->groupLicense = $groupLicense;
    }
    public function getGroupLicense()
    {
        return $this->groupLicense;
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
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_GroupLicensesListResponse', 'VendorDuplicator\\Google_Service_AndroidEnterprise_GroupLicensesListResponse', \false);
/** @internal */
class Google_Service_AndroidEnterprise_Install extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $installState;
    public $kind;
    public $productId;
    public $versionCode;
    public function setInstallState($installState)
    {
        $this->installState = $installState;
    }
    public function getInstallState()
    {
        return $this->installState;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }
    public function getProductId()
    {
        return $this->productId;
    }
    public function setVersionCode($versionCode)
    {
        $this->versionCode = $versionCode;
    }
    public function getVersionCode()
    {
        return $this->versionCode;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_Install', 'VendorDuplicator\\Google_Service_AndroidEnterprise_Install', \false);
/** @internal */
class Google_Service_AndroidEnterprise_InstallsListResponse extends Google_Collection
{
    protected $collection_key = 'install';
    protected $internal_gapi_mappings = array();
    protected $installType = 'VendorDuplicator\\Google_Service_AndroidEnterprise_Install';
    protected $installDataType = 'array';
    public $kind;
    public function setInstall($install)
    {
        $this->install = $install;
    }
    public function getInstall()
    {
        return $this->install;
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
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_InstallsListResponse', 'VendorDuplicator\\Google_Service_AndroidEnterprise_InstallsListResponse', \false);
/** @internal */
class Google_Service_AndroidEnterprise_LocalizedText extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $locale;
    public $text;
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }
    public function getLocale()
    {
        return $this->locale;
    }
    public function setText($text)
    {
        $this->text = $text;
    }
    public function getText()
    {
        return $this->text;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_LocalizedText', 'VendorDuplicator\\Google_Service_AndroidEnterprise_LocalizedText', \false);
/** @internal */
class Google_Service_AndroidEnterprise_Permission extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $description;
    public $kind;
    public $name;
    public $permissionId;
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
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
    public function setPermissionId($permissionId)
    {
        $this->permissionId = $permissionId;
    }
    public function getPermissionId()
    {
        return $this->permissionId;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_Permission', 'VendorDuplicator\\Google_Service_AndroidEnterprise_Permission', \false);
/** @internal */
class Google_Service_AndroidEnterprise_Product extends Google_Collection
{
    protected $collection_key = 'appVersion';
    protected $internal_gapi_mappings = array();
    protected $appVersionType = 'VendorDuplicator\\Google_Service_AndroidEnterprise_AppVersion';
    protected $appVersionDataType = 'array';
    public $authorName;
    public $detailsUrl;
    public $distributionChannel;
    public $iconUrl;
    public $kind;
    public $productId;
    public $productPricing;
    public $requiresContainerApp;
    public $title;
    public $workDetailsUrl;
    public function setAppVersion($appVersion)
    {
        $this->appVersion = $appVersion;
    }
    public function getAppVersion()
    {
        return $this->appVersion;
    }
    public function setAuthorName($authorName)
    {
        $this->authorName = $authorName;
    }
    public function getAuthorName()
    {
        return $this->authorName;
    }
    public function setDetailsUrl($detailsUrl)
    {
        $this->detailsUrl = $detailsUrl;
    }
    public function getDetailsUrl()
    {
        return $this->detailsUrl;
    }
    public function setDistributionChannel($distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;
    }
    public function getDistributionChannel()
    {
        return $this->distributionChannel;
    }
    public function setIconUrl($iconUrl)
    {
        $this->iconUrl = $iconUrl;
    }
    public function getIconUrl()
    {
        return $this->iconUrl;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }
    public function getProductId()
    {
        return $this->productId;
    }
    public function setProductPricing($productPricing)
    {
        $this->productPricing = $productPricing;
    }
    public function getProductPricing()
    {
        return $this->productPricing;
    }
    public function setRequiresContainerApp($requiresContainerApp)
    {
        $this->requiresContainerApp = $requiresContainerApp;
    }
    public function getRequiresContainerApp()
    {
        return $this->requiresContainerApp;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setWorkDetailsUrl($workDetailsUrl)
    {
        $this->workDetailsUrl = $workDetailsUrl;
    }
    public function getWorkDetailsUrl()
    {
        return $this->workDetailsUrl;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_Product', 'VendorDuplicator\\Google_Service_AndroidEnterprise_Product', \false);
/** @internal */
class Google_Service_AndroidEnterprise_ProductPermission extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $permissionId;
    public $state;
    public function setPermissionId($permissionId)
    {
        $this->permissionId = $permissionId;
    }
    public function getPermissionId()
    {
        return $this->permissionId;
    }
    public function setState($state)
    {
        $this->state = $state;
    }
    public function getState()
    {
        return $this->state;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_ProductPermission', 'VendorDuplicator\\Google_Service_AndroidEnterprise_ProductPermission', \false);
/** @internal */
class Google_Service_AndroidEnterprise_ProductPermissions extends Google_Collection
{
    protected $collection_key = 'permission';
    protected $internal_gapi_mappings = array();
    public $kind;
    protected $permissionType = 'VendorDuplicator\\Google_Service_AndroidEnterprise_ProductPermission';
    protected $permissionDataType = 'array';
    public $productId;
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setPermission($permission)
    {
        $this->permission = $permission;
    }
    public function getPermission()
    {
        return $this->permission;
    }
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }
    public function getProductId()
    {
        return $this->productId;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_ProductPermissions', 'VendorDuplicator\\Google_Service_AndroidEnterprise_ProductPermissions', \false);
/** @internal */
class Google_Service_AndroidEnterprise_ProductSet extends Google_Collection
{
    protected $collection_key = 'productId';
    protected $internal_gapi_mappings = array();
    public $kind;
    public $productId;
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }
    public function getProductId()
    {
        return $this->productId;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_ProductSet', 'VendorDuplicator\\Google_Service_AndroidEnterprise_ProductSet', \false);
/** @internal */
class Google_Service_AndroidEnterprise_ProductsApproveRequest extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $approvalUrlInfoType = 'VendorDuplicator\\Google_Service_AndroidEnterprise_ApprovalUrlInfo';
    protected $approvalUrlInfoDataType = '';
    public function setApprovalUrlInfo(Google_Service_AndroidEnterprise_ApprovalUrlInfo $approvalUrlInfo)
    {
        $this->approvalUrlInfo = $approvalUrlInfo;
    }
    public function getApprovalUrlInfo()
    {
        return $this->approvalUrlInfo;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_ProductsApproveRequest', 'VendorDuplicator\\Google_Service_AndroidEnterprise_ProductsApproveRequest', \false);
/** @internal */
class Google_Service_AndroidEnterprise_ProductsGenerateApprovalUrlResponse extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $url;
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
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_ProductsGenerateApprovalUrlResponse', 'VendorDuplicator\\Google_Service_AndroidEnterprise_ProductsGenerateApprovalUrlResponse', \false);
/** @internal */
class Google_Service_AndroidEnterprise_StoreCluster extends Google_Collection
{
    protected $collection_key = 'productId';
    protected $internal_gapi_mappings = array();
    public $id;
    public $kind;
    protected $nameType = 'VendorDuplicator\\Google_Service_AndroidEnterprise_LocalizedText';
    protected $nameDataType = 'array';
    public $orderInPage;
    public $productId;
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
    public function setOrderInPage($orderInPage)
    {
        $this->orderInPage = $orderInPage;
    }
    public function getOrderInPage()
    {
        return $this->orderInPage;
    }
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }
    public function getProductId()
    {
        return $this->productId;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_StoreCluster', 'VendorDuplicator\\Google_Service_AndroidEnterprise_StoreCluster', \false);
/** @internal */
class Google_Service_AndroidEnterprise_StoreLayout extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $homepageId;
    public $kind;
    public function setHomepageId($homepageId)
    {
        $this->homepageId = $homepageId;
    }
    public function getHomepageId()
    {
        return $this->homepageId;
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
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_StoreLayout', 'VendorDuplicator\\Google_Service_AndroidEnterprise_StoreLayout', \false);
/** @internal */
class Google_Service_AndroidEnterprise_StoreLayoutClustersListResponse extends Google_Collection
{
    protected $collection_key = 'cluster';
    protected $internal_gapi_mappings = array();
    protected $clusterType = 'VendorDuplicator\\Google_Service_AndroidEnterprise_StoreCluster';
    protected $clusterDataType = 'array';
    public $kind;
    public function setCluster($cluster)
    {
        $this->cluster = $cluster;
    }
    public function getCluster()
    {
        return $this->cluster;
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
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_StoreLayoutClustersListResponse', 'VendorDuplicator\\Google_Service_AndroidEnterprise_StoreLayoutClustersListResponse', \false);
/** @internal */
class Google_Service_AndroidEnterprise_StoreLayoutPagesListResponse extends Google_Collection
{
    protected $collection_key = 'page';
    protected $internal_gapi_mappings = array();
    public $kind;
    protected $pageType = 'VendorDuplicator\\Google_Service_AndroidEnterprise_StorePage';
    protected $pageDataType = 'array';
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setPage($page)
    {
        $this->page = $page;
    }
    public function getPage()
    {
        return $this->page;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_StoreLayoutPagesListResponse', 'VendorDuplicator\\Google_Service_AndroidEnterprise_StoreLayoutPagesListResponse', \false);
/** @internal */
class Google_Service_AndroidEnterprise_StorePage extends Google_Collection
{
    protected $collection_key = 'name';
    protected $internal_gapi_mappings = array();
    public $id;
    public $kind;
    public $link;
    protected $nameType = 'VendorDuplicator\\Google_Service_AndroidEnterprise_LocalizedText';
    protected $nameDataType = 'array';
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
    public function setLink($link)
    {
        $this->link = $link;
    }
    public function getLink()
    {
        return $this->link;
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
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_StorePage', 'VendorDuplicator\\Google_Service_AndroidEnterprise_StorePage', \false);
/** @internal */
class Google_Service_AndroidEnterprise_User extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    public $kind;
    public $primaryEmail;
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
    public function setPrimaryEmail($primaryEmail)
    {
        $this->primaryEmail = $primaryEmail;
    }
    public function getPrimaryEmail()
    {
        return $this->primaryEmail;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_User', 'VendorDuplicator\\Google_Service_AndroidEnterprise_User', \false);
/** @internal */
class Google_Service_AndroidEnterprise_UserToken extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $kind;
    public $token;
    public $userId;
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setToken($token)
    {
        $this->token = $token;
    }
    public function getToken()
    {
        return $this->token;
    }
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
    public function getUserId()
    {
        return $this->userId;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_UserToken', 'VendorDuplicator\\Google_Service_AndroidEnterprise_UserToken', \false);
/** @internal */
class Google_Service_AndroidEnterprise_UsersListResponse extends Google_Collection
{
    protected $collection_key = 'user';
    protected $internal_gapi_mappings = array();
    public $kind;
    protected $userType = 'VendorDuplicator\\Google_Service_AndroidEnterprise_User';
    protected $userDataType = 'array';
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setUser($user)
    {
        $this->user = $user;
    }
    public function getUser()
    {
        return $this->user;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AndroidEnterprise_UsersListResponse', 'VendorDuplicator\\Google_Service_AndroidEnterprise_UsersListResponse', \false);
