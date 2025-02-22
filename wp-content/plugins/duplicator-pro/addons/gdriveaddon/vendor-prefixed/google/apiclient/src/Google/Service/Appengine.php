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
 * Service definition for Appengine (v1beta5).
 *
 * <p>
 * The Google App Engine Admin API enables developers to provision and manage
 * their App Engine applications.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/appengine/docs/admin-api/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 * @internal
 */
class Google_Service_Appengine extends Google_Service
{
    /** View and manage your data across Google Cloud Platform services. */
    const CLOUD_PLATFORM = "https://www.googleapis.com/auth/cloud-platform";
    public $apps;
    public $apps_operations;
    public $apps_services;
    public $apps_services_versions;
    /**
     * Constructs the internal representation of the Appengine service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->rootUrl = 'https://appengine.googleapis.com/';
        $this->servicePath = '';
        $this->version = 'v1beta5';
        $this->serviceName = 'appengine';
        $this->apps = new Google_Service_Appengine_Apps_Resource($this, $this->serviceName, 'apps', array('methods' => array('get' => array('path' => 'v1beta5/apps/{appsId}', 'httpMethod' => 'GET', 'parameters' => array('appsId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'ensureResourcesExist' => array('location' => 'query', 'type' => 'boolean'))))));
        $this->apps_operations = new Google_Service_Appengine_AppsOperations_Resource($this, $this->serviceName, 'operations', array('methods' => array('get' => array('path' => 'v1beta5/apps/{appsId}/operations/{operationsId}', 'httpMethod' => 'GET', 'parameters' => array('appsId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'operationsId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'v1beta5/apps/{appsId}/operations', 'httpMethod' => 'GET', 'parameters' => array('appsId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'pageSize' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->apps_services = new Google_Service_Appengine_AppsServices_Resource($this, $this->serviceName, 'services', array('methods' => array('delete' => array('path' => 'v1beta5/apps/{appsId}/services/{servicesId}', 'httpMethod' => 'DELETE', 'parameters' => array('appsId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'servicesId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => 'v1beta5/apps/{appsId}/services/{servicesId}', 'httpMethod' => 'GET', 'parameters' => array('appsId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'servicesId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'v1beta5/apps/{appsId}/services', 'httpMethod' => 'GET', 'parameters' => array('appsId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'pageSize' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'patch' => array('path' => 'v1beta5/apps/{appsId}/services/{servicesId}', 'httpMethod' => 'PATCH', 'parameters' => array('appsId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'servicesId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'mask' => array('location' => 'query', 'type' => 'string'), 'migrateTraffic' => array('location' => 'query', 'type' => 'boolean'))))));
        $this->apps_services_versions = new Google_Service_Appengine_AppsServicesVersions_Resource($this, $this->serviceName, 'versions', array('methods' => array('create' => array('path' => 'v1beta5/apps/{appsId}/services/{servicesId}/versions', 'httpMethod' => 'POST', 'parameters' => array('appsId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'servicesId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'delete' => array('path' => 'v1beta5/apps/{appsId}/services/{servicesId}/versions/{versionsId}', 'httpMethod' => 'DELETE', 'parameters' => array('appsId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'servicesId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'versionsId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => 'v1beta5/apps/{appsId}/services/{servicesId}/versions/{versionsId}', 'httpMethod' => 'GET', 'parameters' => array('appsId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'servicesId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'versionsId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'view' => array('location' => 'query', 'type' => 'string'))), 'list' => array('path' => 'v1beta5/apps/{appsId}/services/{servicesId}/versions', 'httpMethod' => 'GET', 'parameters' => array('appsId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'servicesId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'view' => array('location' => 'query', 'type' => 'string'), 'pageSize' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
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
 * Service definition for Appengine (v1beta5).
 *
 * <p>
 * The Google App Engine Admin API enables developers to provision and manage
 * their App Engine applications.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/appengine/docs/admin-api/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Appengine', 'VendorDuplicator\\Google_Service_Appengine', \false);
/**
 * The "apps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appengineService = new Google_Service_Appengine(...);
 *   $apps = $appengineService->apps;
 *  </code>
 * @internal
 */
class Google_Service_Appengine_Apps_Resource extends Google_Service_Resource
{
    /**
     * Gets information about an application. (apps.get)
     *
     * @param string $appsId Part of `name`. Name of the application to get. For
     * example: "apps/myapp".
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool ensureResourcesExist Certain resources associated with an
     * application are created on-demand. Controls whether these resources should be
     * created when performing the `GET` operation. If specified and any resources
     * could not be created, the request will fail with an error code. Additionally,
     * this parameter can cause the request to take longer to complete. Note: This
     * parameter will be deprecated in a future version of the API.
     * @return Google_Service_Appengine_Application
     */
    public function get($appsId, $optParams = array())
    {
        $params = array('appsId' => $appsId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Appengine_Application");
    }
}
/**
 * The "apps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appengineService = new Google_Service_Appengine(...);
 *   $apps = $appengineService->apps;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Appengine_Apps_Resource', 'VendorDuplicator\\Google_Service_Appengine_Apps_Resource', \false);
/**
 * The "operations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appengineService = new Google_Service_Appengine(...);
 *   $operations = $appengineService->operations;
 *  </code>
 * @internal
 */
class Google_Service_Appengine_AppsOperations_Resource extends Google_Service_Resource
{
    /**
     * Gets the latest state of a long-running operation. Clients can use this
     * method to poll the operation result at intervals as recommended by the API
     * service. (operations.get)
     *
     * @param string $appsId Part of `name`. The name of the operation resource.
     * @param string $operationsId Part of `name`. See documentation of `appsId`.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Appengine_Operation
     */
    public function get($appsId, $operationsId, $optParams = array())
    {
        $params = array('appsId' => $appsId, 'operationsId' => $operationsId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Appengine_Operation");
    }
    /**
     * Lists operations that match the specified filter in the request. If the
     * server doesn't support this method, it returns `UNIMPLEMENTED`. NOTE: the
     * `name` binding below allows API services to override the binding to use
     * different resource name schemes, such as `users/operations`.
     * (operations.listAppsOperations)
     *
     * @param string $appsId Part of `name`. The name of the operation collection.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter The standard list filter.
     * @opt_param int pageSize The standard list page size.
     * @opt_param string pageToken The standard list page token.
     * @return Google_Service_Appengine_ListOperationsResponse
     */
    public function listAppsOperations($appsId, $optParams = array())
    {
        $params = array('appsId' => $appsId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Appengine_ListOperationsResponse");
    }
}
/**
 * The "operations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appengineService = new Google_Service_Appengine(...);
 *   $operations = $appengineService->operations;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Appengine_AppsOperations_Resource', 'VendorDuplicator\\Google_Service_Appengine_AppsOperations_Resource', \false);
/**
 * The "services" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appengineService = new Google_Service_Appengine(...);
 *   $services = $appengineService->services;
 *  </code>
 * @internal
 */
class Google_Service_Appengine_AppsServices_Resource extends Google_Service_Resource
{
    /**
     * Deletes a service and all enclosed versions. (services.delete)
     *
     * @param string $appsId Part of `name`. Name of the resource requested. For
     * example: "apps/myapp/services/default".
     * @param string $servicesId Part of `name`. See documentation of `appsId`.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Appengine_Operation
     */
    public function delete($appsId, $servicesId, $optParams = array())
    {
        $params = array('appsId' => $appsId, 'servicesId' => $servicesId);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Appengine_Operation");
    }
    /**
     * Gets the current configuration of the service. (services.get)
     *
     * @param string $appsId Part of `name`. Name of the resource requested. For
     * example: "apps/myapp/services/default".
     * @param string $servicesId Part of `name`. See documentation of `appsId`.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Appengine_Service
     */
    public function get($appsId, $servicesId, $optParams = array())
    {
        $params = array('appsId' => $appsId, 'servicesId' => $servicesId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Appengine_Service");
    }
    /**
     * Lists all the services in the application. (services.listAppsServices)
     *
     * @param string $appsId Part of `name`. Name of the resource requested. For
     * example: "apps/myapp".
     * @param array $optParams Optional parameters.
     *
     * @opt_param int pageSize Maximum results to return per page.
     * @opt_param string pageToken Continuation token for fetching the next page of
     * results.
     * @return Google_Service_Appengine_ListServicesResponse
     */
    public function listAppsServices($appsId, $optParams = array())
    {
        $params = array('appsId' => $appsId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Appengine_ListServicesResponse");
    }
    /**
     * Updates the configuration of the specified service. (services.patch)
     *
     * @param string $appsId Part of `name`. Name of the resource to update. For
     * example: "apps/myapp/services/default".
     * @param string $servicesId Part of `name`. See documentation of `appsId`.
     * @param Google_Service $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string mask Standard field mask for the set of fields to be
     * updated.
     * @opt_param bool migrateTraffic Whether to use Traffic Migration to shift
     * traffic gradually. Traffic can only be migrated from a single version to
     * another single version.
     * @return Google_Service_Appengine_Operation
     */
    public function patch($appsId, $servicesId, Google_Service_Appengine_Service $postBody, $optParams = array())
    {
        $params = array('appsId' => $appsId, 'servicesId' => $servicesId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('patch', array($params), "VendorDuplicator\\Google_Service_Appengine_Operation");
    }
}
/**
 * The "services" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appengineService = new Google_Service_Appengine(...);
 *   $services = $appengineService->services;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Appengine_AppsServices_Resource', 'VendorDuplicator\\Google_Service_Appengine_AppsServices_Resource', \false);
/**
 * The "versions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appengineService = new Google_Service_Appengine(...);
 *   $versions = $appengineService->versions;
 *  </code>
 * @internal
 */
class Google_Service_Appengine_AppsServicesVersions_Resource extends Google_Service_Resource
{
    /**
     * Deploys new code and resource files to a version. (versions.create)
     *
     * @param string $appsId Part of `name`. Name of the resource to update. For
     * example: "apps/myapp/services/default".
     * @param string $servicesId Part of `name`. See documentation of `appsId`.
     * @param Google_Version $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Appengine_Operation
     */
    public function create($appsId, $servicesId, Google_Service_Appengine_Version $postBody, $optParams = array())
    {
        $params = array('appsId' => $appsId, 'servicesId' => $servicesId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('create', array($params), "VendorDuplicator\\Google_Service_Appengine_Operation");
    }
    /**
     * Deletes an existing version. (versions.delete)
     *
     * @param string $appsId Part of `name`. Name of the resource requested. For
     * example: "apps/myapp/services/default/versions/v1".
     * @param string $servicesId Part of `name`. See documentation of `appsId`.
     * @param string $versionsId Part of `name`. See documentation of `appsId`.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Appengine_Operation
     */
    public function delete($appsId, $servicesId, $versionsId, $optParams = array())
    {
        $params = array('appsId' => $appsId, 'servicesId' => $servicesId, 'versionsId' => $versionsId);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Appengine_Operation");
    }
    /**
     * Gets application deployment information. (versions.get)
     *
     * @param string $appsId Part of `name`. Name of the resource requested. For
     * example: "apps/myapp/services/default/versions/v1".
     * @param string $servicesId Part of `name`. See documentation of `appsId`.
     * @param string $versionsId Part of `name`. See documentation of `appsId`.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string view Controls the set of fields returned in the `Get`
     * response.
     * @return Google_Service_Appengine_Version
     */
    public function get($appsId, $servicesId, $versionsId, $optParams = array())
    {
        $params = array('appsId' => $appsId, 'servicesId' => $servicesId, 'versionsId' => $versionsId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Appengine_Version");
    }
    /**
     * Lists the versions of a service. (versions.listAppsServicesVersions)
     *
     * @param string $appsId Part of `name`. Name of the resource requested. For
     * example: "apps/myapp/services/default".
     * @param string $servicesId Part of `name`. See documentation of `appsId`.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string view Controls the set of fields returned in the `List`
     * response.
     * @opt_param int pageSize Maximum results to return per page.
     * @opt_param string pageToken Continuation token for fetching the next page of
     * results.
     * @return Google_Service_Appengine_ListVersionsResponse
     */
    public function listAppsServicesVersions($appsId, $servicesId, $optParams = array())
    {
        $params = array('appsId' => $appsId, 'servicesId' => $servicesId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Appengine_ListVersionsResponse");
    }
}
/**
 * The "versions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appengineService = new Google_Service_Appengine(...);
 *   $versions = $appengineService->versions;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Appengine_AppsServicesVersions_Resource', 'VendorDuplicator\\Google_Service_Appengine_AppsServicesVersions_Resource', \false);
/** @internal */
class Google_Service_Appengine_ApiConfigHandler extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $authFailAction;
    public $login;
    public $script;
    public $securityLevel;
    public $url;
    public function setAuthFailAction($authFailAction)
    {
        $this->authFailAction = $authFailAction;
    }
    public function getAuthFailAction()
    {
        return $this->authFailAction;
    }
    public function setLogin($login)
    {
        $this->login = $login;
    }
    public function getLogin()
    {
        return $this->login;
    }
    public function setScript($script)
    {
        $this->script = $script;
    }
    public function getScript()
    {
        return $this->script;
    }
    public function setSecurityLevel($securityLevel)
    {
        $this->securityLevel = $securityLevel;
    }
    public function getSecurityLevel()
    {
        return $this->securityLevel;
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
\class_alias('VendorDuplicator\\Google_Service_Appengine_ApiConfigHandler', 'VendorDuplicator\\Google_Service_Appengine_ApiConfigHandler', \false);
/** @internal */
class Google_Service_Appengine_ApiEndpointHandler extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $scriptPath;
    public function setScriptPath($scriptPath)
    {
        $this->scriptPath = $scriptPath;
    }
    public function getScriptPath()
    {
        return $this->scriptPath;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_ApiEndpointHandler', 'VendorDuplicator\\Google_Service_Appengine_ApiEndpointHandler', \false);
/** @internal */
class Google_Service_Appengine_Application extends Google_Collection
{
    protected $collection_key = 'dispatchRules';
    protected $internal_gapi_mappings = array();
    public $codeBucket;
    public $defaultBucket;
    protected $dispatchRulesType = 'VendorDuplicator\\Google_Service_Appengine_UrlDispatchRule';
    protected $dispatchRulesDataType = 'array';
    public $id;
    public $location;
    public $name;
    public function setCodeBucket($codeBucket)
    {
        $this->codeBucket = $codeBucket;
    }
    public function getCodeBucket()
    {
        return $this->codeBucket;
    }
    public function setDefaultBucket($defaultBucket)
    {
        $this->defaultBucket = $defaultBucket;
    }
    public function getDefaultBucket()
    {
        return $this->defaultBucket;
    }
    public function setDispatchRules($dispatchRules)
    {
        $this->dispatchRules = $dispatchRules;
    }
    public function getDispatchRules()
    {
        return $this->dispatchRules;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setLocation($location)
    {
        $this->location = $location;
    }
    public function getLocation()
    {
        return $this->location;
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
\class_alias('VendorDuplicator\\Google_Service_Appengine_Application', 'VendorDuplicator\\Google_Service_Appengine_Application', \false);
/** @internal */
class Google_Service_Appengine_AutomaticScaling extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $coolDownPeriod;
    protected $cpuUtilizationType = 'VendorDuplicator\\Google_Service_Appengine_CpuUtilization';
    protected $cpuUtilizationDataType = '';
    protected $diskUtilizationType = 'VendorDuplicator\\Google_Service_Appengine_DiskUtilization';
    protected $diskUtilizationDataType = '';
    public $maxConcurrentRequests;
    public $maxIdleInstances;
    public $maxPendingLatency;
    public $maxTotalInstances;
    public $minIdleInstances;
    public $minPendingLatency;
    public $minTotalInstances;
    protected $networkUtilizationType = 'VendorDuplicator\\Google_Service_Appengine_NetworkUtilization';
    protected $networkUtilizationDataType = '';
    protected $requestUtilizationType = 'VendorDuplicator\\Google_Service_Appengine_RequestUtilization';
    protected $requestUtilizationDataType = '';
    public function setCoolDownPeriod($coolDownPeriod)
    {
        $this->coolDownPeriod = $coolDownPeriod;
    }
    public function getCoolDownPeriod()
    {
        return $this->coolDownPeriod;
    }
    public function setCpuUtilization(Google_Service_Appengine_CpuUtilization $cpuUtilization)
    {
        $this->cpuUtilization = $cpuUtilization;
    }
    public function getCpuUtilization()
    {
        return $this->cpuUtilization;
    }
    public function setDiskUtilization(Google_Service_Appengine_DiskUtilization $diskUtilization)
    {
        $this->diskUtilization = $diskUtilization;
    }
    public function getDiskUtilization()
    {
        return $this->diskUtilization;
    }
    public function setMaxConcurrentRequests($maxConcurrentRequests)
    {
        $this->maxConcurrentRequests = $maxConcurrentRequests;
    }
    public function getMaxConcurrentRequests()
    {
        return $this->maxConcurrentRequests;
    }
    public function setMaxIdleInstances($maxIdleInstances)
    {
        $this->maxIdleInstances = $maxIdleInstances;
    }
    public function getMaxIdleInstances()
    {
        return $this->maxIdleInstances;
    }
    public function setMaxPendingLatency($maxPendingLatency)
    {
        $this->maxPendingLatency = $maxPendingLatency;
    }
    public function getMaxPendingLatency()
    {
        return $this->maxPendingLatency;
    }
    public function setMaxTotalInstances($maxTotalInstances)
    {
        $this->maxTotalInstances = $maxTotalInstances;
    }
    public function getMaxTotalInstances()
    {
        return $this->maxTotalInstances;
    }
    public function setMinIdleInstances($minIdleInstances)
    {
        $this->minIdleInstances = $minIdleInstances;
    }
    public function getMinIdleInstances()
    {
        return $this->minIdleInstances;
    }
    public function setMinPendingLatency($minPendingLatency)
    {
        $this->minPendingLatency = $minPendingLatency;
    }
    public function getMinPendingLatency()
    {
        return $this->minPendingLatency;
    }
    public function setMinTotalInstances($minTotalInstances)
    {
        $this->minTotalInstances = $minTotalInstances;
    }
    public function getMinTotalInstances()
    {
        return $this->minTotalInstances;
    }
    public function setNetworkUtilization(Google_Service_Appengine_NetworkUtilization $networkUtilization)
    {
        $this->networkUtilization = $networkUtilization;
    }
    public function getNetworkUtilization()
    {
        return $this->networkUtilization;
    }
    public function setRequestUtilization(Google_Service_Appengine_RequestUtilization $requestUtilization)
    {
        $this->requestUtilization = $requestUtilization;
    }
    public function getRequestUtilization()
    {
        return $this->requestUtilization;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_AutomaticScaling', 'VendorDuplicator\\Google_Service_Appengine_AutomaticScaling', \false);
/** @internal */
class Google_Service_Appengine_BasicScaling extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $idleTimeout;
    public $maxInstances;
    public function setIdleTimeout($idleTimeout)
    {
        $this->idleTimeout = $idleTimeout;
    }
    public function getIdleTimeout()
    {
        return $this->idleTimeout;
    }
    public function setMaxInstances($maxInstances)
    {
        $this->maxInstances = $maxInstances;
    }
    public function getMaxInstances()
    {
        return $this->maxInstances;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_BasicScaling', 'VendorDuplicator\\Google_Service_Appengine_BasicScaling', \false);
/** @internal */
class Google_Service_Appengine_ContainerInfo extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $image;
    public function setImage($image)
    {
        $this->image = $image;
    }
    public function getImage()
    {
        return $this->image;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_ContainerInfo', 'VendorDuplicator\\Google_Service_Appengine_ContainerInfo', \false);
/** @internal */
class Google_Service_Appengine_CpuUtilization extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $aggregationWindowLength;
    public $targetUtilization;
    public function setAggregationWindowLength($aggregationWindowLength)
    {
        $this->aggregationWindowLength = $aggregationWindowLength;
    }
    public function getAggregationWindowLength()
    {
        return $this->aggregationWindowLength;
    }
    public function setTargetUtilization($targetUtilization)
    {
        $this->targetUtilization = $targetUtilization;
    }
    public function getTargetUtilization()
    {
        return $this->targetUtilization;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_CpuUtilization', 'VendorDuplicator\\Google_Service_Appengine_CpuUtilization', \false);
/** @internal */
class Google_Service_Appengine_Deployment extends Google_Collection
{
    protected $collection_key = 'sourceReferences';
    protected $internal_gapi_mappings = array();
    protected $containerType = 'VendorDuplicator\\Google_Service_Appengine_ContainerInfo';
    protected $containerDataType = '';
    protected $filesType = 'VendorDuplicator\\Google_Service_Appengine_FileInfo';
    protected $filesDataType = 'map';
    protected $sourceReferencesType = 'VendorDuplicator\\Google_Service_Appengine_SourceReference';
    protected $sourceReferencesDataType = 'array';
    public function setContainer(Google_Service_Appengine_ContainerInfo $container)
    {
        $this->container = $container;
    }
    public function getContainer()
    {
        return $this->container;
    }
    public function setFiles($files)
    {
        $this->files = $files;
    }
    public function getFiles()
    {
        return $this->files;
    }
    public function setSourceReferences($sourceReferences)
    {
        $this->sourceReferences = $sourceReferences;
    }
    public function getSourceReferences()
    {
        return $this->sourceReferences;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_Deployment', 'VendorDuplicator\\Google_Service_Appengine_Deployment', \false);
/** @internal */
class Google_Service_Appengine_DiskUtilization extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $targetReadBytesPerSec;
    public $targetReadOpsPerSec;
    public $targetWriteBytesPerSec;
    public $targetWriteOpsPerSec;
    public function setTargetReadBytesPerSec($targetReadBytesPerSec)
    {
        $this->targetReadBytesPerSec = $targetReadBytesPerSec;
    }
    public function getTargetReadBytesPerSec()
    {
        return $this->targetReadBytesPerSec;
    }
    public function setTargetReadOpsPerSec($targetReadOpsPerSec)
    {
        $this->targetReadOpsPerSec = $targetReadOpsPerSec;
    }
    public function getTargetReadOpsPerSec()
    {
        return $this->targetReadOpsPerSec;
    }
    public function setTargetWriteBytesPerSec($targetWriteBytesPerSec)
    {
        $this->targetWriteBytesPerSec = $targetWriteBytesPerSec;
    }
    public function getTargetWriteBytesPerSec()
    {
        return $this->targetWriteBytesPerSec;
    }
    public function setTargetWriteOpsPerSec($targetWriteOpsPerSec)
    {
        $this->targetWriteOpsPerSec = $targetWriteOpsPerSec;
    }
    public function getTargetWriteOpsPerSec()
    {
        return $this->targetWriteOpsPerSec;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_DiskUtilization', 'VendorDuplicator\\Google_Service_Appengine_DiskUtilization', \false);
/** @internal */
class Google_Service_Appengine_ErrorHandler extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $errorCode;
    public $mimeType;
    public $staticFile;
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
    }
    public function getErrorCode()
    {
        return $this->errorCode;
    }
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
    }
    public function getMimeType()
    {
        return $this->mimeType;
    }
    public function setStaticFile($staticFile)
    {
        $this->staticFile = $staticFile;
    }
    public function getStaticFile()
    {
        return $this->staticFile;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_ErrorHandler', 'VendorDuplicator\\Google_Service_Appengine_ErrorHandler', \false);
/** @internal */
class Google_Service_Appengine_FileInfo extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $mimeType;
    public $sha1Sum;
    public $sourceUrl;
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
    }
    public function getMimeType()
    {
        return $this->mimeType;
    }
    public function setSha1Sum($sha1Sum)
    {
        $this->sha1Sum = $sha1Sum;
    }
    public function getSha1Sum()
    {
        return $this->sha1Sum;
    }
    public function setSourceUrl($sourceUrl)
    {
        $this->sourceUrl = $sourceUrl;
    }
    public function getSourceUrl()
    {
        return $this->sourceUrl;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_FileInfo', 'VendorDuplicator\\Google_Service_Appengine_FileInfo', \false);
/** @internal */
class Google_Service_Appengine_HealthCheck extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $checkInterval;
    public $disableHealthCheck;
    public $healthyThreshold;
    public $host;
    public $restartThreshold;
    public $timeout;
    public $unhealthyThreshold;
    public function setCheckInterval($checkInterval)
    {
        $this->checkInterval = $checkInterval;
    }
    public function getCheckInterval()
    {
        return $this->checkInterval;
    }
    public function setDisableHealthCheck($disableHealthCheck)
    {
        $this->disableHealthCheck = $disableHealthCheck;
    }
    public function getDisableHealthCheck()
    {
        return $this->disableHealthCheck;
    }
    public function setHealthyThreshold($healthyThreshold)
    {
        $this->healthyThreshold = $healthyThreshold;
    }
    public function getHealthyThreshold()
    {
        return $this->healthyThreshold;
    }
    public function setHost($host)
    {
        $this->host = $host;
    }
    public function getHost()
    {
        return $this->host;
    }
    public function setRestartThreshold($restartThreshold)
    {
        $this->restartThreshold = $restartThreshold;
    }
    public function getRestartThreshold()
    {
        return $this->restartThreshold;
    }
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
    }
    public function getTimeout()
    {
        return $this->timeout;
    }
    public function setUnhealthyThreshold($unhealthyThreshold)
    {
        $this->unhealthyThreshold = $unhealthyThreshold;
    }
    public function getUnhealthyThreshold()
    {
        return $this->unhealthyThreshold;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_HealthCheck', 'VendorDuplicator\\Google_Service_Appengine_HealthCheck', \false);
/** @internal */
class Google_Service_Appengine_Library extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $name;
    public $version;
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setVersion($version)
    {
        $this->version = $version;
    }
    public function getVersion()
    {
        return $this->version;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_Library', 'VendorDuplicator\\Google_Service_Appengine_Library', \false);
/** @internal */
class Google_Service_Appengine_ListOperationsResponse extends Google_Collection
{
    protected $collection_key = 'operations';
    protected $internal_gapi_mappings = array();
    public $nextPageToken;
    protected $operationsType = 'VendorDuplicator\\Google_Service_Appengine_Operation';
    protected $operationsDataType = 'array';
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
    public function setOperations($operations)
    {
        $this->operations = $operations;
    }
    public function getOperations()
    {
        return $this->operations;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_ListOperationsResponse', 'VendorDuplicator\\Google_Service_Appengine_ListOperationsResponse', \false);
/** @internal */
class Google_Service_Appengine_ListServicesResponse extends Google_Collection
{
    protected $collection_key = 'services';
    protected $internal_gapi_mappings = array();
    public $nextPageToken;
    protected $servicesType = 'VendorDuplicator\\Google_Service_Appengine_Service';
    protected $servicesDataType = 'array';
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
    public function setServices($services)
    {
        $this->services = $services;
    }
    public function getServices()
    {
        return $this->services;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_ListServicesResponse', 'VendorDuplicator\\Google_Service_Appengine_ListServicesResponse', \false);
/** @internal */
class Google_Service_Appengine_ListVersionsResponse extends Google_Collection
{
    protected $collection_key = 'versions';
    protected $internal_gapi_mappings = array();
    public $nextPageToken;
    protected $versionsType = 'VendorDuplicator\\Google_Service_Appengine_Version';
    protected $versionsDataType = 'array';
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
    public function setVersions($versions)
    {
        $this->versions = $versions;
    }
    public function getVersions()
    {
        return $this->versions;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_ListVersionsResponse', 'VendorDuplicator\\Google_Service_Appengine_ListVersionsResponse', \false);
/** @internal */
class Google_Service_Appengine_ManualScaling extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $instances;
    public function setInstances($instances)
    {
        $this->instances = $instances;
    }
    public function getInstances()
    {
        return $this->instances;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_ManualScaling', 'VendorDuplicator\\Google_Service_Appengine_ManualScaling', \false);
/** @internal */
class Google_Service_Appengine_Network extends Google_Collection
{
    protected $collection_key = 'forwardedPorts';
    protected $internal_gapi_mappings = array();
    public $forwardedPorts;
    public $instanceTag;
    public $name;
    public function setForwardedPorts($forwardedPorts)
    {
        $this->forwardedPorts = $forwardedPorts;
    }
    public function getForwardedPorts()
    {
        return $this->forwardedPorts;
    }
    public function setInstanceTag($instanceTag)
    {
        $this->instanceTag = $instanceTag;
    }
    public function getInstanceTag()
    {
        return $this->instanceTag;
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
\class_alias('VendorDuplicator\\Google_Service_Appengine_Network', 'VendorDuplicator\\Google_Service_Appengine_Network', \false);
/** @internal */
class Google_Service_Appengine_NetworkUtilization extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $targetReceivedBytesPerSec;
    public $targetReceivedPacketsPerSec;
    public $targetSentBytesPerSec;
    public $targetSentPacketsPerSec;
    public function setTargetReceivedBytesPerSec($targetReceivedBytesPerSec)
    {
        $this->targetReceivedBytesPerSec = $targetReceivedBytesPerSec;
    }
    public function getTargetReceivedBytesPerSec()
    {
        return $this->targetReceivedBytesPerSec;
    }
    public function setTargetReceivedPacketsPerSec($targetReceivedPacketsPerSec)
    {
        $this->targetReceivedPacketsPerSec = $targetReceivedPacketsPerSec;
    }
    public function getTargetReceivedPacketsPerSec()
    {
        return $this->targetReceivedPacketsPerSec;
    }
    public function setTargetSentBytesPerSec($targetSentBytesPerSec)
    {
        $this->targetSentBytesPerSec = $targetSentBytesPerSec;
    }
    public function getTargetSentBytesPerSec()
    {
        return $this->targetSentBytesPerSec;
    }
    public function setTargetSentPacketsPerSec($targetSentPacketsPerSec)
    {
        $this->targetSentPacketsPerSec = $targetSentPacketsPerSec;
    }
    public function getTargetSentPacketsPerSec()
    {
        return $this->targetSentPacketsPerSec;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_NetworkUtilization', 'VendorDuplicator\\Google_Service_Appengine_NetworkUtilization', \false);
/** @internal */
class Google_Service_Appengine_Operation extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $done;
    protected $errorType = 'VendorDuplicator\\Google_Service_Appengine_Status';
    protected $errorDataType = '';
    public $metadata;
    public $name;
    public $response;
    public function setDone($done)
    {
        $this->done = $done;
    }
    public function getDone()
    {
        return $this->done;
    }
    public function setError(Google_Service_Appengine_Status $error)
    {
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
    }
    public function getMetadata()
    {
        return $this->metadata;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setResponse($response)
    {
        $this->response = $response;
    }
    public function getResponse()
    {
        return $this->response;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_Operation', 'VendorDuplicator\\Google_Service_Appengine_Operation', \false);
/** @internal */
class Google_Service_Appengine_OperationMetadata extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $endTime;
    public $insertTime;
    public $method;
    public $operationType;
    public $target;
    public $user;
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }
    public function getEndTime()
    {
        return $this->endTime;
    }
    public function setInsertTime($insertTime)
    {
        $this->insertTime = $insertTime;
    }
    public function getInsertTime()
    {
        return $this->insertTime;
    }
    public function setMethod($method)
    {
        $this->method = $method;
    }
    public function getMethod()
    {
        return $this->method;
    }
    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;
    }
    public function getOperationType()
    {
        return $this->operationType;
    }
    public function setTarget($target)
    {
        $this->target = $target;
    }
    public function getTarget()
    {
        return $this->target;
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
\class_alias('VendorDuplicator\\Google_Service_Appengine_OperationMetadata', 'VendorDuplicator\\Google_Service_Appengine_OperationMetadata', \false);
/** @internal */
class Google_Service_Appengine_OperationMetadataV1Beta5 extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $endTime;
    public $insertTime;
    public $method;
    public $target;
    public $user;
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }
    public function getEndTime()
    {
        return $this->endTime;
    }
    public function setInsertTime($insertTime)
    {
        $this->insertTime = $insertTime;
    }
    public function getInsertTime()
    {
        return $this->insertTime;
    }
    public function setMethod($method)
    {
        $this->method = $method;
    }
    public function getMethod()
    {
        return $this->method;
    }
    public function setTarget($target)
    {
        $this->target = $target;
    }
    public function getTarget()
    {
        return $this->target;
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
\class_alias('VendorDuplicator\\Google_Service_Appengine_OperationMetadataV1Beta5', 'VendorDuplicator\\Google_Service_Appengine_OperationMetadataV1Beta5', \false);
/** @internal */
class Google_Service_Appengine_RequestUtilization extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $targetConcurrentRequests;
    public $targetRequestCountPerSec;
    public function setTargetConcurrentRequests($targetConcurrentRequests)
    {
        $this->targetConcurrentRequests = $targetConcurrentRequests;
    }
    public function getTargetConcurrentRequests()
    {
        return $this->targetConcurrentRequests;
    }
    public function setTargetRequestCountPerSec($targetRequestCountPerSec)
    {
        $this->targetRequestCountPerSec = $targetRequestCountPerSec;
    }
    public function getTargetRequestCountPerSec()
    {
        return $this->targetRequestCountPerSec;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_RequestUtilization', 'VendorDuplicator\\Google_Service_Appengine_RequestUtilization', \false);
/** @internal */
class Google_Service_Appengine_Resources extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $cpu;
    public $diskGb;
    public $memoryGb;
    public function setCpu($cpu)
    {
        $this->cpu = $cpu;
    }
    public function getCpu()
    {
        return $this->cpu;
    }
    public function setDiskGb($diskGb)
    {
        $this->diskGb = $diskGb;
    }
    public function getDiskGb()
    {
        return $this->diskGb;
    }
    public function setMemoryGb($memoryGb)
    {
        $this->memoryGb = $memoryGb;
    }
    public function getMemoryGb()
    {
        return $this->memoryGb;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_Resources', 'VendorDuplicator\\Google_Service_Appengine_Resources', \false);
/** @internal */
class Google_Service_Appengine_ScriptHandler extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $scriptPath;
    public function setScriptPath($scriptPath)
    {
        $this->scriptPath = $scriptPath;
    }
    public function getScriptPath()
    {
        return $this->scriptPath;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_ScriptHandler', 'VendorDuplicator\\Google_Service_Appengine_ScriptHandler', \false);
/** @internal */
class Google_Service_Appengine_Service extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    public $name;
    protected $splitType = 'VendorDuplicator\\Google_Service_Appengine_TrafficSplit';
    protected $splitDataType = '';
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setSplit(Google_Service_Appengine_TrafficSplit $split)
    {
        $this->split = $split;
    }
    public function getSplit()
    {
        return $this->split;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_Service', 'VendorDuplicator\\Google_Service_Appengine_Service', \false);
/** @internal */
class Google_Service_Appengine_SourceReference extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $repository;
    public $revisionId;
    public function setRepository($repository)
    {
        $this->repository = $repository;
    }
    public function getRepository()
    {
        return $this->repository;
    }
    public function setRevisionId($revisionId)
    {
        $this->revisionId = $revisionId;
    }
    public function getRevisionId()
    {
        return $this->revisionId;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_SourceReference', 'VendorDuplicator\\Google_Service_Appengine_SourceReference', \false);
/** @internal */
class Google_Service_Appengine_StaticFilesHandler extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $applicationReadable;
    public $expiration;
    public $httpHeaders;
    public $mimeType;
    public $path;
    public $requireMatchingFile;
    public $uploadPathRegex;
    public function setApplicationReadable($applicationReadable)
    {
        $this->applicationReadable = $applicationReadable;
    }
    public function getApplicationReadable()
    {
        return $this->applicationReadable;
    }
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;
    }
    public function getExpiration()
    {
        return $this->expiration;
    }
    public function setHttpHeaders($httpHeaders)
    {
        $this->httpHeaders = $httpHeaders;
    }
    public function getHttpHeaders()
    {
        return $this->httpHeaders;
    }
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
    }
    public function getMimeType()
    {
        return $this->mimeType;
    }
    public function setPath($path)
    {
        $this->path = $path;
    }
    public function getPath()
    {
        return $this->path;
    }
    public function setRequireMatchingFile($requireMatchingFile)
    {
        $this->requireMatchingFile = $requireMatchingFile;
    }
    public function getRequireMatchingFile()
    {
        return $this->requireMatchingFile;
    }
    public function setUploadPathRegex($uploadPathRegex)
    {
        $this->uploadPathRegex = $uploadPathRegex;
    }
    public function getUploadPathRegex()
    {
        return $this->uploadPathRegex;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_StaticFilesHandler', 'VendorDuplicator\\Google_Service_Appengine_StaticFilesHandler', \false);
/** @internal */
class Google_Service_Appengine_Status extends Google_Collection
{
    protected $collection_key = 'details';
    protected $internal_gapi_mappings = array();
    public $code;
    public $details;
    public $message;
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setDetails($details)
    {
        $this->details = $details;
    }
    public function getDetails()
    {
        return $this->details;
    }
    public function setMessage($message)
    {
        $this->message = $message;
    }
    public function getMessage()
    {
        return $this->message;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_Status', 'VendorDuplicator\\Google_Service_Appengine_Status', \false);
/** @internal */
class Google_Service_Appengine_TrafficSplit extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $allocations;
    public $shardBy;
    public function setAllocations($allocations)
    {
        $this->allocations = $allocations;
    }
    public function getAllocations()
    {
        return $this->allocations;
    }
    public function setShardBy($shardBy)
    {
        $this->shardBy = $shardBy;
    }
    public function getShardBy()
    {
        return $this->shardBy;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_TrafficSplit', 'VendorDuplicator\\Google_Service_Appengine_TrafficSplit', \false);
/** @internal */
class Google_Service_Appengine_UrlDispatchRule extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $domain;
    public $path;
    public $service;
    public function setDomain($domain)
    {
        $this->domain = $domain;
    }
    public function getDomain()
    {
        return $this->domain;
    }
    public function setPath($path)
    {
        $this->path = $path;
    }
    public function getPath()
    {
        return $this->path;
    }
    public function setService($service)
    {
        $this->service = $service;
    }
    public function getService()
    {
        return $this->service;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_UrlDispatchRule', 'VendorDuplicator\\Google_Service_Appengine_UrlDispatchRule', \false);
/** @internal */
class Google_Service_Appengine_UrlMap extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $apiEndpointType = 'VendorDuplicator\\Google_Service_Appengine_ApiEndpointHandler';
    protected $apiEndpointDataType = '';
    public $authFailAction;
    public $login;
    public $redirectHttpResponseCode;
    protected $scriptType = 'VendorDuplicator\\Google_Service_Appengine_ScriptHandler';
    protected $scriptDataType = '';
    public $securityLevel;
    protected $staticFilesType = 'VendorDuplicator\\Google_Service_Appengine_StaticFilesHandler';
    protected $staticFilesDataType = '';
    public $urlRegex;
    public function setApiEndpoint(Google_Service_Appengine_ApiEndpointHandler $apiEndpoint)
    {
        $this->apiEndpoint = $apiEndpoint;
    }
    public function getApiEndpoint()
    {
        return $this->apiEndpoint;
    }
    public function setAuthFailAction($authFailAction)
    {
        $this->authFailAction = $authFailAction;
    }
    public function getAuthFailAction()
    {
        return $this->authFailAction;
    }
    public function setLogin($login)
    {
        $this->login = $login;
    }
    public function getLogin()
    {
        return $this->login;
    }
    public function setRedirectHttpResponseCode($redirectHttpResponseCode)
    {
        $this->redirectHttpResponseCode = $redirectHttpResponseCode;
    }
    public function getRedirectHttpResponseCode()
    {
        return $this->redirectHttpResponseCode;
    }
    public function setScript(Google_Service_Appengine_ScriptHandler $script)
    {
        $this->script = $script;
    }
    public function getScript()
    {
        return $this->script;
    }
    public function setSecurityLevel($securityLevel)
    {
        $this->securityLevel = $securityLevel;
    }
    public function getSecurityLevel()
    {
        return $this->securityLevel;
    }
    public function setStaticFiles(Google_Service_Appengine_StaticFilesHandler $staticFiles)
    {
        $this->staticFiles = $staticFiles;
    }
    public function getStaticFiles()
    {
        return $this->staticFiles;
    }
    public function setUrlRegex($urlRegex)
    {
        $this->urlRegex = $urlRegex;
    }
    public function getUrlRegex()
    {
        return $this->urlRegex;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_UrlMap', 'VendorDuplicator\\Google_Service_Appengine_UrlMap', \false);
/** @internal */
class Google_Service_Appengine_Version extends Google_Collection
{
    protected $collection_key = 'libraries';
    protected $internal_gapi_mappings = array();
    protected $apiConfigType = 'VendorDuplicator\\Google_Service_Appengine_ApiConfigHandler';
    protected $apiConfigDataType = '';
    protected $automaticScalingType = 'VendorDuplicator\\Google_Service_Appengine_AutomaticScaling';
    protected $automaticScalingDataType = '';
    protected $basicScalingType = 'VendorDuplicator\\Google_Service_Appengine_BasicScaling';
    protected $basicScalingDataType = '';
    public $betaSettings;
    public $creationTime;
    public $defaultExpiration;
    public $deployer;
    protected $deploymentType = 'VendorDuplicator\\Google_Service_Appengine_Deployment';
    protected $deploymentDataType = '';
    public $diskUsageBytes;
    public $env;
    public $envVariables;
    protected $errorHandlersType = 'VendorDuplicator\\Google_Service_Appengine_ErrorHandler';
    protected $errorHandlersDataType = 'array';
    protected $handlersType = 'VendorDuplicator\\Google_Service_Appengine_UrlMap';
    protected $handlersDataType = 'array';
    protected $healthCheckType = 'VendorDuplicator\\Google_Service_Appengine_HealthCheck';
    protected $healthCheckDataType = '';
    public $id;
    public $inboundServices;
    public $instanceClass;
    protected $librariesType = 'VendorDuplicator\\Google_Service_Appengine_Library';
    protected $librariesDataType = 'array';
    protected $manualScalingType = 'VendorDuplicator\\Google_Service_Appengine_ManualScaling';
    protected $manualScalingDataType = '';
    public $name;
    protected $networkType = 'VendorDuplicator\\Google_Service_Appengine_Network';
    protected $networkDataType = '';
    public $nobuildFilesRegex;
    protected $resourcesType = 'VendorDuplicator\\Google_Service_Appengine_Resources';
    protected $resourcesDataType = '';
    public $runtime;
    public $servingStatus;
    public $threadsafe;
    public $vm;
    public function setApiConfig(Google_Service_Appengine_ApiConfigHandler $apiConfig)
    {
        $this->apiConfig = $apiConfig;
    }
    public function getApiConfig()
    {
        return $this->apiConfig;
    }
    public function setAutomaticScaling(Google_Service_Appengine_AutomaticScaling $automaticScaling)
    {
        $this->automaticScaling = $automaticScaling;
    }
    public function getAutomaticScaling()
    {
        return $this->automaticScaling;
    }
    public function setBasicScaling(Google_Service_Appengine_BasicScaling $basicScaling)
    {
        $this->basicScaling = $basicScaling;
    }
    public function getBasicScaling()
    {
        return $this->basicScaling;
    }
    public function setBetaSettings($betaSettings)
    {
        $this->betaSettings = $betaSettings;
    }
    public function getBetaSettings()
    {
        return $this->betaSettings;
    }
    public function setCreationTime($creationTime)
    {
        $this->creationTime = $creationTime;
    }
    public function getCreationTime()
    {
        return $this->creationTime;
    }
    public function setDefaultExpiration($defaultExpiration)
    {
        $this->defaultExpiration = $defaultExpiration;
    }
    public function getDefaultExpiration()
    {
        return $this->defaultExpiration;
    }
    public function setDeployer($deployer)
    {
        $this->deployer = $deployer;
    }
    public function getDeployer()
    {
        return $this->deployer;
    }
    public function setDeployment(Google_Service_Appengine_Deployment $deployment)
    {
        $this->deployment = $deployment;
    }
    public function getDeployment()
    {
        return $this->deployment;
    }
    public function setDiskUsageBytes($diskUsageBytes)
    {
        $this->diskUsageBytes = $diskUsageBytes;
    }
    public function getDiskUsageBytes()
    {
        return $this->diskUsageBytes;
    }
    public function setEnv($env)
    {
        $this->env = $env;
    }
    public function getEnv()
    {
        return $this->env;
    }
    public function setEnvVariables($envVariables)
    {
        $this->envVariables = $envVariables;
    }
    public function getEnvVariables()
    {
        return $this->envVariables;
    }
    public function setErrorHandlers($errorHandlers)
    {
        $this->errorHandlers = $errorHandlers;
    }
    public function getErrorHandlers()
    {
        return $this->errorHandlers;
    }
    public function setHandlers($handlers)
    {
        $this->handlers = $handlers;
    }
    public function getHandlers()
    {
        return $this->handlers;
    }
    public function setHealthCheck(Google_Service_Appengine_HealthCheck $healthCheck)
    {
        $this->healthCheck = $healthCheck;
    }
    public function getHealthCheck()
    {
        return $this->healthCheck;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setInboundServices($inboundServices)
    {
        $this->inboundServices = $inboundServices;
    }
    public function getInboundServices()
    {
        return $this->inboundServices;
    }
    public function setInstanceClass($instanceClass)
    {
        $this->instanceClass = $instanceClass;
    }
    public function getInstanceClass()
    {
        return $this->instanceClass;
    }
    public function setLibraries($libraries)
    {
        $this->libraries = $libraries;
    }
    public function getLibraries()
    {
        return $this->libraries;
    }
    public function setManualScaling(Google_Service_Appengine_ManualScaling $manualScaling)
    {
        $this->manualScaling = $manualScaling;
    }
    public function getManualScaling()
    {
        return $this->manualScaling;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setNetwork(Google_Service_Appengine_Network $network)
    {
        $this->network = $network;
    }
    public function getNetwork()
    {
        return $this->network;
    }
    public function setNobuildFilesRegex($nobuildFilesRegex)
    {
        $this->nobuildFilesRegex = $nobuildFilesRegex;
    }
    public function getNobuildFilesRegex()
    {
        return $this->nobuildFilesRegex;
    }
    public function setResources(Google_Service_Appengine_Resources $resources)
    {
        $this->resources = $resources;
    }
    public function getResources()
    {
        return $this->resources;
    }
    public function setRuntime($runtime)
    {
        $this->runtime = $runtime;
    }
    public function getRuntime()
    {
        return $this->runtime;
    }
    public function setServingStatus($servingStatus)
    {
        $this->servingStatus = $servingStatus;
    }
    public function getServingStatus()
    {
        return $this->servingStatus;
    }
    public function setThreadsafe($threadsafe)
    {
        $this->threadsafe = $threadsafe;
    }
    public function getThreadsafe()
    {
        return $this->threadsafe;
    }
    public function setVm($vm)
    {
        $this->vm = $vm;
    }
    public function getVm()
    {
        return $this->vm;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Appengine_Version', 'VendorDuplicator\\Google_Service_Appengine_Version', \false);
