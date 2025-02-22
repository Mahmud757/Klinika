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
 * Service definition for Compute (v1).
 *
 * <p>
 * API for the Google Compute Engine service.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/compute/docs/reference/latest/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 * @internal
 */
class Google_Service_Compute extends Google_Service
{
    /** View and manage your data across Google Cloud Platform services. */
    const CLOUD_PLATFORM = "https://www.googleapis.com/auth/cloud-platform";
    /** View and manage your Google Compute Engine resources. */
    const COMPUTE = "https://www.googleapis.com/auth/compute";
    /** View your Google Compute Engine resources. */
    const COMPUTE_READONLY = "https://www.googleapis.com/auth/compute.readonly";
    /** Manage your data and permissions in Google Cloud Storage. */
    const DEVSTORAGE_FULL_CONTROL = "https://www.googleapis.com/auth/devstorage.full_control";
    /** View your data in Google Cloud Storage. */
    const DEVSTORAGE_READ_ONLY = "https://www.googleapis.com/auth/devstorage.read_only";
    /** Manage your data in Google Cloud Storage. */
    const DEVSTORAGE_READ_WRITE = "https://www.googleapis.com/auth/devstorage.read_write";
    public $addresses;
    public $autoscalers;
    public $backendServices;
    public $diskTypes;
    public $disks;
    public $firewalls;
    public $forwardingRules;
    public $globalAddresses;
    public $globalForwardingRules;
    public $globalOperations;
    public $httpHealthChecks;
    public $httpsHealthChecks;
    public $images;
    public $instanceGroupManagers;
    public $instanceGroups;
    public $instanceTemplates;
    public $instances;
    public $licenses;
    public $machineTypes;
    public $networks;
    public $projects;
    public $regionOperations;
    public $regions;
    public $routes;
    public $snapshots;
    public $sslCertificates;
    public $subnetworks;
    public $targetHttpProxies;
    public $targetHttpsProxies;
    public $targetInstances;
    public $targetPools;
    public $targetVpnGateways;
    public $urlMaps;
    public $vpnTunnels;
    public $zoneOperations;
    public $zones;
    /**
     * Constructs the internal representation of the Compute service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->rootUrl = 'https://www.googleapis.com/';
        $this->servicePath = 'compute/v1/projects/';
        $this->version = 'v1';
        $this->serviceName = 'compute';
        $this->addresses = new Google_Service_Compute_Addresses_Resource($this, $this->serviceName, 'addresses', array('methods' => array('aggregatedList' => array('path' => '{project}/aggregated/addresses', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'delete' => array('path' => '{project}/regions/{region}/addresses/{address}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'address' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/regions/{region}/addresses/{address}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'address' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => '{project}/regions/{region}/addresses', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/regions/{region}/addresses', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->autoscalers = new Google_Service_Compute_Autoscalers_Resource($this, $this->serviceName, 'autoscalers', array('methods' => array('aggregatedList' => array('path' => '{project}/aggregated/autoscalers', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'delete' => array('path' => '{project}/zones/{zone}/autoscalers/{autoscaler}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'autoscaler' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/zones/{zone}/autoscalers/{autoscaler}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'autoscaler' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => '{project}/zones/{zone}/autoscalers', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/zones/{zone}/autoscalers', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'patch' => array('path' => '{project}/zones/{zone}/autoscalers', 'httpMethod' => 'PATCH', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'autoscaler' => array('location' => 'query', 'type' => 'string', 'required' => \true))), 'update' => array('path' => '{project}/zones/{zone}/autoscalers', 'httpMethod' => 'PUT', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'autoscaler' => array('location' => 'query', 'type' => 'string'))))));
        $this->backendServices = new Google_Service_Compute_BackendServices_Resource($this, $this->serviceName, 'backendServices', array('methods' => array('delete' => array('path' => '{project}/global/backendServices/{backendService}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'backendService' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/global/backendServices/{backendService}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'backendService' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'getHealth' => array('path' => '{project}/global/backendServices/{backendService}/getHealth', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'backendService' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => '{project}/global/backendServices', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/global/backendServices', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'patch' => array('path' => '{project}/global/backendServices/{backendService}', 'httpMethod' => 'PATCH', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'backendService' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'update' => array('path' => '{project}/global/backendServices/{backendService}', 'httpMethod' => 'PUT', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'backendService' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->diskTypes = new Google_Service_Compute_DiskTypes_Resource($this, $this->serviceName, 'diskTypes', array('methods' => array('aggregatedList' => array('path' => '{project}/aggregated/diskTypes', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'get' => array('path' => '{project}/zones/{zone}/diskTypes/{diskType}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'diskType' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/zones/{zone}/diskTypes', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->disks = new Google_Service_Compute_Disks_Resource($this, $this->serviceName, 'disks', array('methods' => array('aggregatedList' => array('path' => '{project}/aggregated/disks', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'createSnapshot' => array('path' => '{project}/zones/{zone}/disks/{disk}/createSnapshot', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'disk' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'delete' => array('path' => '{project}/zones/{zone}/disks/{disk}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'disk' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/zones/{zone}/disks/{disk}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'disk' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => '{project}/zones/{zone}/disks', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'sourceImage' => array('location' => 'query', 'type' => 'string'))), 'list' => array('path' => '{project}/zones/{zone}/disks', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->firewalls = new Google_Service_Compute_Firewalls_Resource($this, $this->serviceName, 'firewalls', array('methods' => array('delete' => array('path' => '{project}/global/firewalls/{firewall}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'firewall' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/global/firewalls/{firewall}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'firewall' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => '{project}/global/firewalls', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/global/firewalls', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'patch' => array('path' => '{project}/global/firewalls/{firewall}', 'httpMethod' => 'PATCH', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'firewall' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'update' => array('path' => '{project}/global/firewalls/{firewall}', 'httpMethod' => 'PUT', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'firewall' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->forwardingRules = new Google_Service_Compute_ForwardingRules_Resource($this, $this->serviceName, 'forwardingRules', array('methods' => array('aggregatedList' => array('path' => '{project}/aggregated/forwardingRules', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'delete' => array('path' => '{project}/regions/{region}/forwardingRules/{forwardingRule}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'forwardingRule' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/regions/{region}/forwardingRules/{forwardingRule}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'forwardingRule' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => '{project}/regions/{region}/forwardingRules', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/regions/{region}/forwardingRules', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'setTarget' => array('path' => '{project}/regions/{region}/forwardingRules/{forwardingRule}/setTarget', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'forwardingRule' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->globalAddresses = new Google_Service_Compute_GlobalAddresses_Resource($this, $this->serviceName, 'globalAddresses', array('methods' => array('delete' => array('path' => '{project}/global/addresses/{address}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'address' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/global/addresses/{address}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'address' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => '{project}/global/addresses', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/global/addresses', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->globalForwardingRules = new Google_Service_Compute_GlobalForwardingRules_Resource($this, $this->serviceName, 'globalForwardingRules', array('methods' => array('delete' => array('path' => '{project}/global/forwardingRules/{forwardingRule}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'forwardingRule' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/global/forwardingRules/{forwardingRule}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'forwardingRule' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => '{project}/global/forwardingRules', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/global/forwardingRules', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'setTarget' => array('path' => '{project}/global/forwardingRules/{forwardingRule}/setTarget', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'forwardingRule' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->globalOperations = new Google_Service_Compute_GlobalOperations_Resource($this, $this->serviceName, 'globalOperations', array('methods' => array('aggregatedList' => array('path' => '{project}/aggregated/operations', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'delete' => array('path' => '{project}/global/operations/{operation}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'operation' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/global/operations/{operation}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'operation' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/global/operations', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->httpHealthChecks = new Google_Service_Compute_HttpHealthChecks_Resource($this, $this->serviceName, 'httpHealthChecks', array('methods' => array('delete' => array('path' => '{project}/global/httpHealthChecks/{httpHealthCheck}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'httpHealthCheck' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/global/httpHealthChecks/{httpHealthCheck}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'httpHealthCheck' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => '{project}/global/httpHealthChecks', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/global/httpHealthChecks', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'patch' => array('path' => '{project}/global/httpHealthChecks/{httpHealthCheck}', 'httpMethod' => 'PATCH', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'httpHealthCheck' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'update' => array('path' => '{project}/global/httpHealthChecks/{httpHealthCheck}', 'httpMethod' => 'PUT', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'httpHealthCheck' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->httpsHealthChecks = new Google_Service_Compute_HttpsHealthChecks_Resource($this, $this->serviceName, 'httpsHealthChecks', array('methods' => array('delete' => array('path' => '{project}/global/httpsHealthChecks/{httpsHealthCheck}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'httpsHealthCheck' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/global/httpsHealthChecks/{httpsHealthCheck}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'httpsHealthCheck' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => '{project}/global/httpsHealthChecks', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/global/httpsHealthChecks', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'patch' => array('path' => '{project}/global/httpsHealthChecks/{httpsHealthCheck}', 'httpMethod' => 'PATCH', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'httpsHealthCheck' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'update' => array('path' => '{project}/global/httpsHealthChecks/{httpsHealthCheck}', 'httpMethod' => 'PUT', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'httpsHealthCheck' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->images = new Google_Service_Compute_Images_Resource($this, $this->serviceName, 'images', array('methods' => array('delete' => array('path' => '{project}/global/images/{image}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'image' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'deprecate' => array('path' => '{project}/global/images/{image}/deprecate', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'image' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/global/images/{image}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'image' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => '{project}/global/images', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/global/images', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->instanceGroupManagers = new Google_Service_Compute_InstanceGroupManagers_Resource($this, $this->serviceName, 'instanceGroupManagers', array('methods' => array('abandonInstances' => array('path' => '{project}/zones/{zone}/instanceGroupManagers/{instanceGroupManager}/abandonInstances', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instanceGroupManager' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'aggregatedList' => array('path' => '{project}/aggregated/instanceGroupManagers', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'delete' => array('path' => '{project}/zones/{zone}/instanceGroupManagers/{instanceGroupManager}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instanceGroupManager' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'deleteInstances' => array('path' => '{project}/zones/{zone}/instanceGroupManagers/{instanceGroupManager}/deleteInstances', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instanceGroupManager' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/zones/{zone}/instanceGroupManagers/{instanceGroupManager}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instanceGroupManager' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => '{project}/zones/{zone}/instanceGroupManagers', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/zones/{zone}/instanceGroupManagers', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'listManagedInstances' => array('path' => '{project}/zones/{zone}/instanceGroupManagers/{instanceGroupManager}/listManagedInstances', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instanceGroupManager' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'recreateInstances' => array('path' => '{project}/zones/{zone}/instanceGroupManagers/{instanceGroupManager}/recreateInstances', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instanceGroupManager' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'resize' => array('path' => '{project}/zones/{zone}/instanceGroupManagers/{instanceGroupManager}/resize', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instanceGroupManager' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'size' => array('location' => 'query', 'type' => 'integer', 'required' => \true))), 'setInstanceTemplate' => array('path' => '{project}/zones/{zone}/instanceGroupManagers/{instanceGroupManager}/setInstanceTemplate', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instanceGroupManager' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'setTargetPools' => array('path' => '{project}/zones/{zone}/instanceGroupManagers/{instanceGroupManager}/setTargetPools', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instanceGroupManager' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->instanceGroups = new Google_Service_Compute_InstanceGroups_Resource($this, $this->serviceName, 'instanceGroups', array('methods' => array('addInstances' => array('path' => '{project}/zones/{zone}/instanceGroups/{instanceGroup}/addInstances', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instanceGroup' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'aggregatedList' => array('path' => '{project}/aggregated/instanceGroups', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'delete' => array('path' => '{project}/zones/{zone}/instanceGroups/{instanceGroup}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instanceGroup' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/zones/{zone}/instanceGroups/{instanceGroup}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instanceGroup' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => '{project}/zones/{zone}/instanceGroups', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/zones/{zone}/instanceGroups', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'listInstances' => array('path' => '{project}/zones/{zone}/instanceGroups/{instanceGroup}/listInstances', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instanceGroup' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'removeInstances' => array('path' => '{project}/zones/{zone}/instanceGroups/{instanceGroup}/removeInstances', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instanceGroup' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'setNamedPorts' => array('path' => '{project}/zones/{zone}/instanceGroups/{instanceGroup}/setNamedPorts', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instanceGroup' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->instanceTemplates = new Google_Service_Compute_InstanceTemplates_Resource($this, $this->serviceName, 'instanceTemplates', array('methods' => array('delete' => array('path' => '{project}/global/instanceTemplates/{instanceTemplate}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instanceTemplate' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/global/instanceTemplates/{instanceTemplate}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instanceTemplate' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => '{project}/global/instanceTemplates', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/global/instanceTemplates', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->instances = new Google_Service_Compute_Instances_Resource($this, $this->serviceName, 'instances', array('methods' => array('addAccessConfig' => array('path' => '{project}/zones/{zone}/instances/{instance}/addAccessConfig', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instance' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'networkInterface' => array('location' => 'query', 'type' => 'string', 'required' => \true))), 'aggregatedList' => array('path' => '{project}/aggregated/instances', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'attachDisk' => array('path' => '{project}/zones/{zone}/instances/{instance}/attachDisk', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instance' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'delete' => array('path' => '{project}/zones/{zone}/instances/{instance}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instance' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'deleteAccessConfig' => array('path' => '{project}/zones/{zone}/instances/{instance}/deleteAccessConfig', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instance' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'accessConfig' => array('location' => 'query', 'type' => 'string', 'required' => \true), 'networkInterface' => array('location' => 'query', 'type' => 'string', 'required' => \true))), 'detachDisk' => array('path' => '{project}/zones/{zone}/instances/{instance}/detachDisk', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instance' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'deviceName' => array('location' => 'query', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/zones/{zone}/instances/{instance}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instance' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'getSerialPortOutput' => array('path' => '{project}/zones/{zone}/instances/{instance}/serialPort', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instance' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'port' => array('location' => 'query', 'type' => 'integer'))), 'insert' => array('path' => '{project}/zones/{zone}/instances', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/zones/{zone}/instances', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'reset' => array('path' => '{project}/zones/{zone}/instances/{instance}/reset', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instance' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'setDiskAutoDelete' => array('path' => '{project}/zones/{zone}/instances/{instance}/setDiskAutoDelete', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instance' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'autoDelete' => array('location' => 'query', 'type' => 'boolean', 'required' => \true), 'deviceName' => array('location' => 'query', 'type' => 'string', 'required' => \true))), 'setMachineType' => array('path' => '{project}/zones/{zone}/instances/{instance}/setMachineType', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instance' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'setMetadata' => array('path' => '{project}/zones/{zone}/instances/{instance}/setMetadata', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instance' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'setScheduling' => array('path' => '{project}/zones/{zone}/instances/{instance}/setScheduling', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instance' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'setTags' => array('path' => '{project}/zones/{zone}/instances/{instance}/setTags', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instance' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'start' => array('path' => '{project}/zones/{zone}/instances/{instance}/start', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instance' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'stop' => array('path' => '{project}/zones/{zone}/instances/{instance}/stop', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'instance' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->licenses = new Google_Service_Compute_Licenses_Resource($this, $this->serviceName, 'licenses', array('methods' => array('get' => array('path' => '{project}/global/licenses/{license}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'license' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->machineTypes = new Google_Service_Compute_MachineTypes_Resource($this, $this->serviceName, 'machineTypes', array('methods' => array('aggregatedList' => array('path' => '{project}/aggregated/machineTypes', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'get' => array('path' => '{project}/zones/{zone}/machineTypes/{machineType}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'machineType' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/zones/{zone}/machineTypes', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->networks = new Google_Service_Compute_Networks_Resource($this, $this->serviceName, 'networks', array('methods' => array('delete' => array('path' => '{project}/global/networks/{network}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'network' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/global/networks/{network}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'network' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => '{project}/global/networks', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/global/networks', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->projects = new Google_Service_Compute_Projects_Resource($this, $this->serviceName, 'projects', array('methods' => array('get' => array('path' => '{project}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'moveDisk' => array('path' => '{project}/moveDisk', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'moveInstance' => array('path' => '{project}/moveInstance', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'setCommonInstanceMetadata' => array('path' => '{project}/setCommonInstanceMetadata', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'setUsageExportBucket' => array('path' => '{project}/setUsageExportBucket', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->regionOperations = new Google_Service_Compute_RegionOperations_Resource($this, $this->serviceName, 'regionOperations', array('methods' => array('delete' => array('path' => '{project}/regions/{region}/operations/{operation}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'operation' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/regions/{region}/operations/{operation}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'operation' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/regions/{region}/operations', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->regions = new Google_Service_Compute_Regions_Resource($this, $this->serviceName, 'regions', array('methods' => array('get' => array('path' => '{project}/regions/{region}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/regions', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->routes = new Google_Service_Compute_Routes_Resource($this, $this->serviceName, 'routes', array('methods' => array('delete' => array('path' => '{project}/global/routes/{route}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'route' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/global/routes/{route}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'route' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => '{project}/global/routes', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/global/routes', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->snapshots = new Google_Service_Compute_Snapshots_Resource($this, $this->serviceName, 'snapshots', array('methods' => array('delete' => array('path' => '{project}/global/snapshots/{snapshot}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'snapshot' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/global/snapshots/{snapshot}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'snapshot' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/global/snapshots', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->sslCertificates = new Google_Service_Compute_SslCertificates_Resource($this, $this->serviceName, 'sslCertificates', array('methods' => array('delete' => array('path' => '{project}/global/sslCertificates/{sslCertificate}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'sslCertificate' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/global/sslCertificates/{sslCertificate}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'sslCertificate' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => '{project}/global/sslCertificates', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/global/sslCertificates', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->subnetworks = new Google_Service_Compute_Subnetworks_Resource($this, $this->serviceName, 'subnetworks', array('methods' => array('aggregatedList' => array('path' => '{project}/aggregated/subnetworks', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'delete' => array('path' => '{project}/regions/{region}/subnetworks/{subnetwork}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'subnetwork' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/regions/{region}/subnetworks/{subnetwork}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'subnetwork' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => '{project}/regions/{region}/subnetworks', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/regions/{region}/subnetworks', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->targetHttpProxies = new Google_Service_Compute_TargetHttpProxies_Resource($this, $this->serviceName, 'targetHttpProxies', array('methods' => array('delete' => array('path' => '{project}/global/targetHttpProxies/{targetHttpProxy}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'targetHttpProxy' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/global/targetHttpProxies/{targetHttpProxy}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'targetHttpProxy' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => '{project}/global/targetHttpProxies', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/global/targetHttpProxies', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'setUrlMap' => array('path' => '{project}/targetHttpProxies/{targetHttpProxy}/setUrlMap', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'targetHttpProxy' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->targetHttpsProxies = new Google_Service_Compute_TargetHttpsProxies_Resource($this, $this->serviceName, 'targetHttpsProxies', array('methods' => array('delete' => array('path' => '{project}/global/targetHttpsProxies/{targetHttpsProxy}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'targetHttpsProxy' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/global/targetHttpsProxies/{targetHttpsProxy}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'targetHttpsProxy' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => '{project}/global/targetHttpsProxies', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/global/targetHttpsProxies', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'setSslCertificates' => array('path' => '{project}/targetHttpsProxies/{targetHttpsProxy}/setSslCertificates', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'targetHttpsProxy' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'setUrlMap' => array('path' => '{project}/targetHttpsProxies/{targetHttpsProxy}/setUrlMap', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'targetHttpsProxy' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->targetInstances = new Google_Service_Compute_TargetInstances_Resource($this, $this->serviceName, 'targetInstances', array('methods' => array('aggregatedList' => array('path' => '{project}/aggregated/targetInstances', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'delete' => array('path' => '{project}/zones/{zone}/targetInstances/{targetInstance}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'targetInstance' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/zones/{zone}/targetInstances/{targetInstance}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'targetInstance' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => '{project}/zones/{zone}/targetInstances', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/zones/{zone}/targetInstances', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->targetPools = new Google_Service_Compute_TargetPools_Resource($this, $this->serviceName, 'targetPools', array('methods' => array('addHealthCheck' => array('path' => '{project}/regions/{region}/targetPools/{targetPool}/addHealthCheck', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'targetPool' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'addInstance' => array('path' => '{project}/regions/{region}/targetPools/{targetPool}/addInstance', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'targetPool' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'aggregatedList' => array('path' => '{project}/aggregated/targetPools', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'delete' => array('path' => '{project}/regions/{region}/targetPools/{targetPool}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'targetPool' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/regions/{region}/targetPools/{targetPool}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'targetPool' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'getHealth' => array('path' => '{project}/regions/{region}/targetPools/{targetPool}/getHealth', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'targetPool' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => '{project}/regions/{region}/targetPools', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/regions/{region}/targetPools', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'removeHealthCheck' => array('path' => '{project}/regions/{region}/targetPools/{targetPool}/removeHealthCheck', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'targetPool' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'removeInstance' => array('path' => '{project}/regions/{region}/targetPools/{targetPool}/removeInstance', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'targetPool' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'setBackup' => array('path' => '{project}/regions/{region}/targetPools/{targetPool}/setBackup', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'targetPool' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'failoverRatio' => array('location' => 'query', 'type' => 'number'))))));
        $this->targetVpnGateways = new Google_Service_Compute_TargetVpnGateways_Resource($this, $this->serviceName, 'targetVpnGateways', array('methods' => array('aggregatedList' => array('path' => '{project}/aggregated/targetVpnGateways', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'delete' => array('path' => '{project}/regions/{region}/targetVpnGateways/{targetVpnGateway}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'targetVpnGateway' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/regions/{region}/targetVpnGateways/{targetVpnGateway}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'targetVpnGateway' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => '{project}/regions/{region}/targetVpnGateways', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/regions/{region}/targetVpnGateways', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->urlMaps = new Google_Service_Compute_UrlMaps_Resource($this, $this->serviceName, 'urlMaps', array('methods' => array('delete' => array('path' => '{project}/global/urlMaps/{urlMap}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'urlMap' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/global/urlMaps/{urlMap}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'urlMap' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => '{project}/global/urlMaps', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/global/urlMaps', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'patch' => array('path' => '{project}/global/urlMaps/{urlMap}', 'httpMethod' => 'PATCH', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'urlMap' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'update' => array('path' => '{project}/global/urlMaps/{urlMap}', 'httpMethod' => 'PUT', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'urlMap' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'validate' => array('path' => '{project}/global/urlMaps/{urlMap}/validate', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'urlMap' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->vpnTunnels = new Google_Service_Compute_VpnTunnels_Resource($this, $this->serviceName, 'vpnTunnels', array('methods' => array('aggregatedList' => array('path' => '{project}/aggregated/vpnTunnels', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'delete' => array('path' => '{project}/regions/{region}/vpnTunnels/{vpnTunnel}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'vpnTunnel' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/regions/{region}/vpnTunnels/{vpnTunnel}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'vpnTunnel' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => '{project}/regions/{region}/vpnTunnels', 'httpMethod' => 'POST', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/regions/{region}/vpnTunnels', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'region' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->zoneOperations = new Google_Service_Compute_ZoneOperations_Resource($this, $this->serviceName, 'zoneOperations', array('methods' => array('delete' => array('path' => '{project}/zones/{zone}/operations/{operation}', 'httpMethod' => 'DELETE', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'operation' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => '{project}/zones/{zone}/operations/{operation}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'operation' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/zones/{zone}/operations', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->zones = new Google_Service_Compute_Zones_Resource($this, $this->serviceName, 'zones', array('methods' => array('get' => array('path' => '{project}/zones/{zone}', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'zone' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => '{project}/zones', 'httpMethod' => 'GET', 'parameters' => array('project' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
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
 * Service definition for Compute (v1).
 *
 * <p>
 * API for the Google Compute Engine service.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/compute/docs/reference/latest/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute', 'VendorDuplicator\\Google_Service_Compute', \false);
/**
 * The "addresses" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $addresses = $computeService->addresses;
 *  </code>
 * @internal
 */
class Google_Service_Compute_Addresses_Resource extends Google_Service_Resource
{
    /**
     * Retrieves an aggregated list of addresses. (addresses.aggregatedList)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_AddressAggregatedList
     */
    public function aggregatedList($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('aggregatedList', array($params), "VendorDuplicator\\Google_Service_Compute_AddressAggregatedList");
    }
    /**
     * Deletes the specified address resource. (addresses.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $region The name of the region for this request.
     * @param string $address Name of the address resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $region, $address, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'address' => $address);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns the specified address resource. (addresses.get)
     *
     * @param string $project Project ID for this request.
     * @param string $region The name of the region for this request.
     * @param string $address Name of the address resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Address
     */
    public function get($project, $region, $address, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'address' => $address);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_Address");
    }
    /**
     * Creates an address resource in the specified project using the data included
     * in the request. (addresses.insert)
     *
     * @param string $project Project ID for this request.
     * @param string $region The name of the region for this request.
     * @param Google_Address $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, $region, Google_Service_Compute_Address $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves a list of addresses contained within the specified region.
     * (addresses.listAddresses)
     *
     * @param string $project Project ID for this request.
     * @param string $region The name of the region for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_AddressList
     */
    public function listAddresses($project, $region, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_AddressList");
    }
}
/**
 * The "addresses" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $addresses = $computeService->addresses;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_Addresses_Resource', 'VendorDuplicator\\Google_Service_Compute_Addresses_Resource', \false);
/**
 * The "autoscalers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $autoscalers = $computeService->autoscalers;
 *  </code>
 * @internal
 */
class Google_Service_Compute_Autoscalers_Resource extends Google_Service_Resource
{
    /**
     * Retrieves an aggregated list of autoscalers. (autoscalers.aggregatedList)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_AutoscalerAggregatedList
     */
    public function aggregatedList($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('aggregatedList', array($params), "VendorDuplicator\\Google_Service_Compute_AutoscalerAggregatedList");
    }
    /**
     * Deletes the specified autoscaler resource. (autoscalers.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $autoscaler Name of the persistent autoscaler resource to
     * delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $zone, $autoscaler, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'autoscaler' => $autoscaler);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns the specified autoscaler resource. (autoscalers.get)
     *
     * @param string $project Project ID for this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $autoscaler Name of the persistent autoscaler resource to
     * return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Autoscaler
     */
    public function get($project, $zone, $autoscaler, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'autoscaler' => $autoscaler);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_Autoscaler");
    }
    /**
     * Creates an autoscaler resource in the specified project using the data
     * included in the request. (autoscalers.insert)
     *
     * @param string $project Project ID for this request.
     * @param string $zone Name of the zone scoping this request.
     * @param Google_Autoscaler $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, $zone, Google_Service_Compute_Autoscaler $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves a list of autoscaler resources contained within the specified zone.
     * (autoscalers.listAutoscalers)
     *
     * @param string $project Project ID for this request.
     * @param string $zone Name of the zone scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_AutoscalerList
     */
    public function listAutoscalers($project, $zone, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_AutoscalerList");
    }
    /**
     * Updates an autoscaler resource in the specified project using the data
     * included in the request. This method supports patch semantics.
     * (autoscalers.patch)
     *
     * @param string $project Project ID for this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $autoscaler Name of the autoscaler resource to update.
     * @param Google_Autoscaler $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function patch($project, $zone, $autoscaler, Google_Service_Compute_Autoscaler $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'autoscaler' => $autoscaler, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('patch', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Updates an autoscaler resource in the specified project using the data
     * included in the request. (autoscalers.update)
     *
     * @param string $project Project ID for this request.
     * @param string $zone Name of the zone scoping this request.
     * @param Google_Autoscaler $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string autoscaler Name of the autoscaler resource to update.
     * @return Google_Service_Compute_Operation
     */
    public function update($project, $zone, Google_Service_Compute_Autoscaler $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('update', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
}
/**
 * The "autoscalers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $autoscalers = $computeService->autoscalers;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_Autoscalers_Resource', 'VendorDuplicator\\Google_Service_Compute_Autoscalers_Resource', \false);
/**
 * The "backendServices" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $backendServices = $computeService->backendServices;
 *  </code>
 * @internal
 */
class Google_Service_Compute_BackendServices_Resource extends Google_Service_Resource
{
    /**
     * Deletes the specified BackendService resource. (backendServices.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $backendService Name of the BackendService resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $backendService, $optParams = array())
    {
        $params = array('project' => $project, 'backendService' => $backendService);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns the specified BackendService resource. (backendServices.get)
     *
     * @param string $project Project ID for this request.
     * @param string $backendService Name of the BackendService resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_BackendService
     */
    public function get($project, $backendService, $optParams = array())
    {
        $params = array('project' => $project, 'backendService' => $backendService);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_BackendService");
    }
    /**
     * Gets the most recent health check results for this BackendService.
     * (backendServices.getHealth)
     *
     * @param string $project
     * @param string $backendService Name of the BackendService resource to which
     * the queried instance belongs.
     * @param Google_ResourceGroupReference $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_BackendServiceGroupHealth
     */
    public function getHealth($project, $backendService, Google_Service_Compute_ResourceGroupReference $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'backendService' => $backendService, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('getHealth', array($params), "VendorDuplicator\\Google_Service_Compute_BackendServiceGroupHealth");
    }
    /**
     * Creates a BackendService resource in the specified project using the data
     * included in the request. There are several restrictions and guidelines to
     * keep in mind when creating a backend service. Read  Restrictions and
     * Guidelines for more information. (backendServices.insert)
     *
     * @param string $project Project ID for this request.
     * @param Google_BackendService $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, Google_Service_Compute_BackendService $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves the list of BackendService resources available to the specified
     * project. (backendServices.listBackendServices)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_BackendServiceList
     */
    public function listBackendServices($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_BackendServiceList");
    }
    /**
     * Updates the entire content of the BackendService resource. There are several
     * restrictions and guidelines to keep in mind when updating a backend service.
     * Read  Restrictions and Guidelines for more information. This method supports
     * patch semantics. (backendServices.patch)
     *
     * @param string $project Project ID for this request.
     * @param string $backendService Name of the BackendService resource to update.
     * @param Google_BackendService $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function patch($project, $backendService, Google_Service_Compute_BackendService $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'backendService' => $backendService, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('patch', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Updates the entire content of the BackendService resource. There are several
     * restrictions and guidelines to keep in mind when updating a backend service.
     * Read  Restrictions and Guidelines for more information.
     * (backendServices.update)
     *
     * @param string $project Project ID for this request.
     * @param string $backendService Name of the BackendService resource to update.
     * @param Google_BackendService $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function update($project, $backendService, Google_Service_Compute_BackendService $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'backendService' => $backendService, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('update', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
}
/**
 * The "backendServices" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $backendServices = $computeService->backendServices;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_BackendServices_Resource', 'VendorDuplicator\\Google_Service_Compute_BackendServices_Resource', \false);
/**
 * The "diskTypes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $diskTypes = $computeService->diskTypes;
 *  </code>
 * @internal
 */
class Google_Service_Compute_DiskTypes_Resource extends Google_Service_Resource
{
    /**
     * Retrieves an aggregated list of disk types. (diskTypes.aggregatedList)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_DiskTypeAggregatedList
     */
    public function aggregatedList($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('aggregatedList', array($params), "VendorDuplicator\\Google_Service_Compute_DiskTypeAggregatedList");
    }
    /**
     * Returns the specified disk type. (diskTypes.get)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $diskType Name of the disk type to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_DiskType
     */
    public function get($project, $zone, $diskType, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'diskType' => $diskType);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_DiskType");
    }
    /**
     * Retrieves a list of disk types available to the specified project.
     * (diskTypes.listDiskTypes)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_DiskTypeList
     */
    public function listDiskTypes($project, $zone, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_DiskTypeList");
    }
}
/**
 * The "diskTypes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $diskTypes = $computeService->diskTypes;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_DiskTypes_Resource', 'VendorDuplicator\\Google_Service_Compute_DiskTypes_Resource', \false);
/**
 * The "disks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $disks = $computeService->disks;
 *  </code>
 * @internal
 */
class Google_Service_Compute_Disks_Resource extends Google_Service_Resource
{
    /**
     * Retrieves an aggregated list of persistent disks. (disks.aggregatedList)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_DiskAggregatedList
     */
    public function aggregatedList($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('aggregatedList', array($params), "VendorDuplicator\\Google_Service_Compute_DiskAggregatedList");
    }
    /**
     * Creates a snapshot of a specified persistent disk. (disks.createSnapshot)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $disk Name of the persistent disk to snapshot.
     * @param Google_Snapshot $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function createSnapshot($project, $zone, $disk, Google_Service_Compute_Snapshot $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'disk' => $disk, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('createSnapshot', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Deletes the specified persistent disk. Deleting a disk removes its data
     * permanently and is irreversible. However, deleting a disk does not delete any
     * snapshots previously made from the disk. You must separately delete
     * snapshots. (disks.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $disk Name of the persistent disk to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $zone, $disk, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'disk' => $disk);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns a specified persistent disk. (disks.get)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $disk Name of the persistent disk to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Disk
     */
    public function get($project, $zone, $disk, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'disk' => $disk);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_Disk");
    }
    /**
     * Creates a persistent disk in the specified project using the data in the
     * request. You can create a disk with a sourceImage, a sourceSnapshot, or
     * create an empty 200 GB data disk by omitting all properties. You can also
     * create a disk that is larger than the default size by specifying the sizeGb
     * property. (disks.insert)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param Google_Disk $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string sourceImage Optional. Source image to restore onto a disk.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, $zone, Google_Service_Compute_Disk $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves a list of persistent disks contained within the specified zone.
     * (disks.listDisks)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_DiskList
     */
    public function listDisks($project, $zone, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_DiskList");
    }
}
/**
 * The "disks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $disks = $computeService->disks;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_Disks_Resource', 'VendorDuplicator\\Google_Service_Compute_Disks_Resource', \false);
/**
 * The "firewalls" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $firewalls = $computeService->firewalls;
 *  </code>
 * @internal
 */
class Google_Service_Compute_Firewalls_Resource extends Google_Service_Resource
{
    /**
     * Deletes the specified firewall. (firewalls.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $firewall Name of the firewall rule to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $firewall, $optParams = array())
    {
        $params = array('project' => $project, 'firewall' => $firewall);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns the specified firewall. (firewalls.get)
     *
     * @param string $project Project ID for this request.
     * @param string $firewall Name of the firewall rule to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Firewall
     */
    public function get($project, $firewall, $optParams = array())
    {
        $params = array('project' => $project, 'firewall' => $firewall);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_Firewall");
    }
    /**
     * Creates a firewall rule in the specified project using the data included in
     * the request. (firewalls.insert)
     *
     * @param string $project Project ID for this request.
     * @param Google_Firewall $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, Google_Service_Compute_Firewall $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves the list of firewall rules available to the specified project.
     * (firewalls.listFirewalls)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_FirewallList
     */
    public function listFirewalls($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_FirewallList");
    }
    /**
     * Updates the specified firewall rule with the data included in the request.
     * This method supports patch semantics. (firewalls.patch)
     *
     * @param string $project Project ID for this request.
     * @param string $firewall Name of the firewall rule to update.
     * @param Google_Firewall $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function patch($project, $firewall, Google_Service_Compute_Firewall $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'firewall' => $firewall, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('patch', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Updates the specified firewall rule with the data included in the request.
     * (firewalls.update)
     *
     * @param string $project Project ID for this request.
     * @param string $firewall Name of the firewall rule to update.
     * @param Google_Firewall $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function update($project, $firewall, Google_Service_Compute_Firewall $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'firewall' => $firewall, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('update', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
}
/**
 * The "firewalls" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $firewalls = $computeService->firewalls;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_Firewalls_Resource', 'VendorDuplicator\\Google_Service_Compute_Firewalls_Resource', \false);
/**
 * The "forwardingRules" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $forwardingRules = $computeService->forwardingRules;
 *  </code>
 * @internal
 */
class Google_Service_Compute_ForwardingRules_Resource extends Google_Service_Resource
{
    /**
     * Retrieves an aggregated list of forwarding rules.
     * (forwardingRules.aggregatedList)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_ForwardingRuleAggregatedList
     */
    public function aggregatedList($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('aggregatedList', array($params), "VendorDuplicator\\Google_Service_Compute_ForwardingRuleAggregatedList");
    }
    /**
     * Deletes the specified ForwardingRule resource. (forwardingRules.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $region Name of the region scoping this request.
     * @param string $forwardingRule Name of the ForwardingRule resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $region, $forwardingRule, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'forwardingRule' => $forwardingRule);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns the specified ForwardingRule resource. (forwardingRules.get)
     *
     * @param string $project Project ID for this request.
     * @param string $region Name of the region scoping this request.
     * @param string $forwardingRule Name of the ForwardingRule resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_ForwardingRule
     */
    public function get($project, $region, $forwardingRule, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'forwardingRule' => $forwardingRule);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_ForwardingRule");
    }
    /**
     * Creates a ForwardingRule resource in the specified project and region using
     * the data included in the request. (forwardingRules.insert)
     *
     * @param string $project Project ID for this request.
     * @param string $region Name of the region scoping this request.
     * @param Google_ForwardingRule $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, $region, Google_Service_Compute_ForwardingRule $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves a list of ForwardingRule resources available to the specified
     * project and region. (forwardingRules.listForwardingRules)
     *
     * @param string $project Project ID for this request.
     * @param string $region Name of the region scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_ForwardingRuleList
     */
    public function listForwardingRules($project, $region, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_ForwardingRuleList");
    }
    /**
     * Changes target URL for forwarding rule. The new target should be of the same
     * type as the old target. (forwardingRules.setTarget)
     *
     * @param string $project Project ID for this request.
     * @param string $region Name of the region scoping this request.
     * @param string $forwardingRule Name of the ForwardingRule resource in which
     * target is to be set.
     * @param Google_TargetReference $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function setTarget($project, $region, $forwardingRule, Google_Service_Compute_TargetReference $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'forwardingRule' => $forwardingRule, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('setTarget', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
}
/**
 * The "forwardingRules" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $forwardingRules = $computeService->forwardingRules;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_ForwardingRules_Resource', 'VendorDuplicator\\Google_Service_Compute_ForwardingRules_Resource', \false);
/**
 * The "globalAddresses" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $globalAddresses = $computeService->globalAddresses;
 *  </code>
 * @internal
 */
class Google_Service_Compute_GlobalAddresses_Resource extends Google_Service_Resource
{
    /**
     * Deletes the specified address resource. (globalAddresses.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $address Name of the address resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $address, $optParams = array())
    {
        $params = array('project' => $project, 'address' => $address);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns the specified address resource. (globalAddresses.get)
     *
     * @param string $project Project ID for this request.
     * @param string $address Name of the address resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Address
     */
    public function get($project, $address, $optParams = array())
    {
        $params = array('project' => $project, 'address' => $address);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_Address");
    }
    /**
     * Creates an address resource in the specified project using the data included
     * in the request. (globalAddresses.insert)
     *
     * @param string $project Project ID for this request.
     * @param Google_Address $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, Google_Service_Compute_Address $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves a list of global addresses. (globalAddresses.listGlobalAddresses)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_AddressList
     */
    public function listGlobalAddresses($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_AddressList");
    }
}
/**
 * The "globalAddresses" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $globalAddresses = $computeService->globalAddresses;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_GlobalAddresses_Resource', 'VendorDuplicator\\Google_Service_Compute_GlobalAddresses_Resource', \false);
/**
 * The "globalForwardingRules" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $globalForwardingRules = $computeService->globalForwardingRules;
 *  </code>
 * @internal
 */
class Google_Service_Compute_GlobalForwardingRules_Resource extends Google_Service_Resource
{
    /**
     * Deletes the specified ForwardingRule resource. (globalForwardingRules.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $forwardingRule Name of the ForwardingRule resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $forwardingRule, $optParams = array())
    {
        $params = array('project' => $project, 'forwardingRule' => $forwardingRule);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns the specified ForwardingRule resource. (globalForwardingRules.get)
     *
     * @param string $project Project ID for this request.
     * @param string $forwardingRule Name of the ForwardingRule resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_ForwardingRule
     */
    public function get($project, $forwardingRule, $optParams = array())
    {
        $params = array('project' => $project, 'forwardingRule' => $forwardingRule);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_ForwardingRule");
    }
    /**
     * Creates a ForwardingRule resource in the specified project and region using
     * the data included in the request. (globalForwardingRules.insert)
     *
     * @param string $project Project ID for this request.
     * @param Google_ForwardingRule $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, Google_Service_Compute_ForwardingRule $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves a list of ForwardingRule resources available to the specified
     * project. (globalForwardingRules.listGlobalForwardingRules)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_ForwardingRuleList
     */
    public function listGlobalForwardingRules($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_ForwardingRuleList");
    }
    /**
     * Changes target URL for forwarding rule. The new target should be of the same
     * type as the old target. (globalForwardingRules.setTarget)
     *
     * @param string $project Project ID for this request.
     * @param string $forwardingRule Name of the ForwardingRule resource in which
     * target is to be set.
     * @param Google_TargetReference $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function setTarget($project, $forwardingRule, Google_Service_Compute_TargetReference $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'forwardingRule' => $forwardingRule, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('setTarget', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
}
/**
 * The "globalForwardingRules" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $globalForwardingRules = $computeService->globalForwardingRules;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_GlobalForwardingRules_Resource', 'VendorDuplicator\\Google_Service_Compute_GlobalForwardingRules_Resource', \false);
/**
 * The "globalOperations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $globalOperations = $computeService->globalOperations;
 *  </code>
 * @internal
 */
class Google_Service_Compute_GlobalOperations_Resource extends Google_Service_Resource
{
    /**
     * Retrieves an aggregated list of all operations.
     * (globalOperations.aggregatedList)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_OperationAggregatedList
     */
    public function aggregatedList($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('aggregatedList', array($params), "VendorDuplicator\\Google_Service_Compute_OperationAggregatedList");
    }
    /**
     * Deletes the specified Operations resource. (globalOperations.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $operation Name of the Operations resource to delete.
     * @param array $optParams Optional parameters.
     */
    public function delete($project, $operation, $optParams = array())
    {
        $params = array('project' => $project, 'operation' => $operation);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }
    /**
     * Retrieves the specified Operations resource. (globalOperations.get)
     *
     * @param string $project Project ID for this request.
     * @param string $operation Name of the Operations resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function get($project, $operation, $optParams = array())
    {
        $params = array('project' => $project, 'operation' => $operation);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves a list of Operation resources contained within the specified
     * project. (globalOperations.listGlobalOperations)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_OperationList
     */
    public function listGlobalOperations($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_OperationList");
    }
}
/**
 * The "globalOperations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $globalOperations = $computeService->globalOperations;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_GlobalOperations_Resource', 'VendorDuplicator\\Google_Service_Compute_GlobalOperations_Resource', \false);
/**
 * The "httpHealthChecks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $httpHealthChecks = $computeService->httpHealthChecks;
 *  </code>
 * @internal
 */
class Google_Service_Compute_HttpHealthChecks_Resource extends Google_Service_Resource
{
    /**
     * Deletes the specified HttpHealthCheck resource. (httpHealthChecks.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $httpHealthCheck Name of the HttpHealthCheck resource to
     * delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $httpHealthCheck, $optParams = array())
    {
        $params = array('project' => $project, 'httpHealthCheck' => $httpHealthCheck);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns the specified HttpHealthCheck resource. (httpHealthChecks.get)
     *
     * @param string $project Project ID for this request.
     * @param string $httpHealthCheck Name of the HttpHealthCheck resource to
     * return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_HttpHealthCheck
     */
    public function get($project, $httpHealthCheck, $optParams = array())
    {
        $params = array('project' => $project, 'httpHealthCheck' => $httpHealthCheck);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_HttpHealthCheck");
    }
    /**
     * Creates a HttpHealthCheck resource in the specified project using the data
     * included in the request. (httpHealthChecks.insert)
     *
     * @param string $project Project ID for this request.
     * @param Google_HttpHealthCheck $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, Google_Service_Compute_HttpHealthCheck $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves the list of HttpHealthCheck resources available to the specified
     * project. (httpHealthChecks.listHttpHealthChecks)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_HttpHealthCheckList
     */
    public function listHttpHealthChecks($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_HttpHealthCheckList");
    }
    /**
     * Updates a HttpHealthCheck resource in the specified project using the data
     * included in the request. This method supports patch semantics.
     * (httpHealthChecks.patch)
     *
     * @param string $project Project ID for this request.
     * @param string $httpHealthCheck Name of the HttpHealthCheck resource to
     * update.
     * @param Google_HttpHealthCheck $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function patch($project, $httpHealthCheck, Google_Service_Compute_HttpHealthCheck $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'httpHealthCheck' => $httpHealthCheck, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('patch', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Updates a HttpHealthCheck resource in the specified project using the data
     * included in the request. (httpHealthChecks.update)
     *
     * @param string $project Project ID for this request.
     * @param string $httpHealthCheck Name of the HttpHealthCheck resource to
     * update.
     * @param Google_HttpHealthCheck $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function update($project, $httpHealthCheck, Google_Service_Compute_HttpHealthCheck $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'httpHealthCheck' => $httpHealthCheck, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('update', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
}
/**
 * The "httpHealthChecks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $httpHealthChecks = $computeService->httpHealthChecks;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_HttpHealthChecks_Resource', 'VendorDuplicator\\Google_Service_Compute_HttpHealthChecks_Resource', \false);
/**
 * The "httpsHealthChecks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $httpsHealthChecks = $computeService->httpsHealthChecks;
 *  </code>
 * @internal
 */
class Google_Service_Compute_HttpsHealthChecks_Resource extends Google_Service_Resource
{
    /**
     * Deletes the specified HttpsHealthCheck resource. (httpsHealthChecks.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $httpsHealthCheck Name of the HttpsHealthCheck resource to
     * delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $httpsHealthCheck, $optParams = array())
    {
        $params = array('project' => $project, 'httpsHealthCheck' => $httpsHealthCheck);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns the specified HttpsHealthCheck resource. (httpsHealthChecks.get)
     *
     * @param string $project Project ID for this request.
     * @param string $httpsHealthCheck Name of the HttpsHealthCheck resource to
     * return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_HttpsHealthCheck
     */
    public function get($project, $httpsHealthCheck, $optParams = array())
    {
        $params = array('project' => $project, 'httpsHealthCheck' => $httpsHealthCheck);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_HttpsHealthCheck");
    }
    /**
     * Creates a HttpsHealthCheck resource in the specified project using the data
     * included in the request. (httpsHealthChecks.insert)
     *
     * @param string $project Project ID for this request.
     * @param Google_HttpsHealthCheck $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, Google_Service_Compute_HttpsHealthCheck $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves the list of HttpsHealthCheck resources available to the specified
     * project. (httpsHealthChecks.listHttpsHealthChecks)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_HttpsHealthCheckList
     */
    public function listHttpsHealthChecks($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_HttpsHealthCheckList");
    }
    /**
     * Updates a HttpsHealthCheck resource in the specified project using the data
     * included in the request. This method supports patch semantics.
     * (httpsHealthChecks.patch)
     *
     * @param string $project Project ID for this request.
     * @param string $httpsHealthCheck Name of the HttpsHealthCheck resource to
     * update.
     * @param Google_HttpsHealthCheck $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function patch($project, $httpsHealthCheck, Google_Service_Compute_HttpsHealthCheck $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'httpsHealthCheck' => $httpsHealthCheck, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('patch', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Updates a HttpsHealthCheck resource in the specified project using the data
     * included in the request. (httpsHealthChecks.update)
     *
     * @param string $project Project ID for this request.
     * @param string $httpsHealthCheck Name of the HttpsHealthCheck resource to
     * update.
     * @param Google_HttpsHealthCheck $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function update($project, $httpsHealthCheck, Google_Service_Compute_HttpsHealthCheck $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'httpsHealthCheck' => $httpsHealthCheck, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('update', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
}
/**
 * The "httpsHealthChecks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $httpsHealthChecks = $computeService->httpsHealthChecks;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_HttpsHealthChecks_Resource', 'VendorDuplicator\\Google_Service_Compute_HttpsHealthChecks_Resource', \false);
/**
 * The "images" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $images = $computeService->images;
 *  </code>
 * @internal
 */
class Google_Service_Compute_Images_Resource extends Google_Service_Resource
{
    /**
     * Deletes the specified image. (images.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $image Name of the image resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $image, $optParams = array())
    {
        $params = array('project' => $project, 'image' => $image);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Sets the deprecation status of an image.
     *
     * If an empty request body is given, clears the deprecation status instead.
     * (images.deprecate)
     *
     * @param string $project Project ID for this request.
     * @param string $image Image name.
     * @param Google_DeprecationStatus $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function deprecate($project, $image, Google_Service_Compute_DeprecationStatus $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'image' => $image, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('deprecate', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns the specified image. (images.get)
     *
     * @param string $project Project ID for this request.
     * @param string $image Name of the image resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Image
     */
    public function get($project, $image, $optParams = array())
    {
        $params = array('project' => $project, 'image' => $image);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_Image");
    }
    /**
     * Creates an image in the specified project using the data included in the
     * request. (images.insert)
     *
     * @param string $project Project ID for this request.
     * @param Google_Image $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, Google_Service_Compute_Image $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves the list of private images available to the specified project.
     * Private images are images you create that belong to your project. This method
     * does not get any images that belong to other projects, including publicly-
     * available images, like Debian 7. If you want to get a list of publicly-
     * available images, use this method to make a request to the respective image
     * project, such as debian-cloud or windows-cloud.
     *
     * See Accessing images for more information. (images.listImages)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_ImageList
     */
    public function listImages($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_ImageList");
    }
}
/**
 * The "images" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $images = $computeService->images;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_Images_Resource', 'VendorDuplicator\\Google_Service_Compute_Images_Resource', \false);
/**
 * The "instanceGroupManagers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $instanceGroupManagers = $computeService->instanceGroupManagers;
 *  </code>
 * @internal
 */
class Google_Service_Compute_InstanceGroupManagers_Resource extends Google_Service_Resource
{
    /**
     * Schedules a group action to remove the specified instances from the managed
     * instance group. Abandoning an instance does not delete the instance, but it
     * does remove the instance from any target pools that are applied by the
     * managed instance group. This method reduces the targetSize of the managed
     * instance group by the number of instances that you abandon. This operation is
     * marked as DONE when the action is scheduled even if the instances have not
     * yet been removed from the group. You must separately verify the status of the
     * abandoning action with the listmanagedinstances method.
     * (instanceGroupManagers.abandonInstances)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone where the managed instance group is
     * located.
     * @param string $instanceGroupManager The name of the managed instance group.
     * @param Google_InstanceGroupManagersAbandonInstancesRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function abandonInstances($project, $zone, $instanceGroupManager, Google_Service_Compute_InstanceGroupManagersAbandonInstancesRequest $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instanceGroupManager' => $instanceGroupManager, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('abandonInstances', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves the list of managed instance groups and groups them by zone.
     * (instanceGroupManagers.aggregatedList)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_InstanceGroupManagerAggregatedList
     */
    public function aggregatedList($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('aggregatedList', array($params), "VendorDuplicator\\Google_Service_Compute_InstanceGroupManagerAggregatedList");
    }
    /**
     * Deletes the specified managed instance group and all of the instances in that
     * group. Note that the instance group must not belong to a backend service.
     * Read  Deleting an instance group for more information.
     * (instanceGroupManagers.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone where the managed instance group is
     * located.
     * @param string $instanceGroupManager The name of the managed instance group to
     * delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $zone, $instanceGroupManager, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instanceGroupManager' => $instanceGroupManager);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Schedules a group action to delete the specified instances in the managed
     * instance group. The instances are also removed from any target pools of which
     * they were a member. This method reduces the targetSize of the managed
     * instance group by the number of instances that you delete. This operation is
     * marked as DONE when the action is scheduled even if the instances are still
     * being deleted. You must separately verify the status of the deleting action
     * with the listmanagedinstances method. (instanceGroupManagers.deleteInstances)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone where the managed instance group is
     * located.
     * @param string $instanceGroupManager The name of the managed instance group.
     * @param Google_InstanceGroupManagersDeleteInstancesRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function deleteInstances($project, $zone, $instanceGroupManager, Google_Service_Compute_InstanceGroupManagersDeleteInstancesRequest $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instanceGroupManager' => $instanceGroupManager, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('deleteInstances', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns all of the details about the specified managed instance group.
     * (instanceGroupManagers.get)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone where the managed instance group is
     * located.
     * @param string $instanceGroupManager The name of the managed instance group.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_InstanceGroupManager
     */
    public function get($project, $zone, $instanceGroupManager, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instanceGroupManager' => $instanceGroupManager);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_InstanceGroupManager");
    }
    /**
     * Creates a managed instance group using the information that you specify in
     * the request. After the group is created, it schedules an action to create
     * instances in the group using the specified instance template. This operation
     * is marked as DONE when the group is created even if the instances in the
     * group have not yet been created. You must separately verify the status of the
     * individual instances with the listmanagedinstances method.
     * (instanceGroupManagers.insert)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone where you want to create the managed
     * instance group.
     * @param Google_InstanceGroupManager $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, $zone, Google_Service_Compute_InstanceGroupManager $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves a list of managed instance groups that are contained within the
     * specified project and zone. (instanceGroupManagers.listInstanceGroupManagers)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone where the managed instance group is
     * located.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_InstanceGroupManagerList
     */
    public function listInstanceGroupManagers($project, $zone, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_InstanceGroupManagerList");
    }
    /**
     * Lists all of the instances in the managed instance group. Each instance in
     * the list has a currentAction, which indicates the action that the managed
     * instance group is performing on the instance. For example, if the group is
     * still creating an instance, the currentAction is CREATING. If a previous
     * action failed, the list displays the errors for that failed action.
     * (instanceGroupManagers.listManagedInstances)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone where the managed instance group is
     * located.
     * @param string $instanceGroupManager The name of the managed instance group.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_InstanceGroupManagersListManagedInstancesResponse
     */
    public function listManagedInstances($project, $zone, $instanceGroupManager, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instanceGroupManager' => $instanceGroupManager);
        $params = \array_merge($params, $optParams);
        return $this->call('listManagedInstances', array($params), "VendorDuplicator\\Google_Service_Compute_InstanceGroupManagersListManagedInstancesResponse");
    }
    /**
     * Schedules a group action to recreate the specified instances in the managed
     * instance group. The instances are deleted and recreated using the current
     * instance template for the managed instance group. This operation is marked as
     * DONE when the action is scheduled even if the instances have not yet been
     * recreated. You must separately verify the status of the recreating action
     * with the listmanagedinstances method.
     * (instanceGroupManagers.recreateInstances)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone where the managed instance group is
     * located.
     * @param string $instanceGroupManager The name of the managed instance group.
     * @param Google_InstanceGroupManagersRecreateInstancesRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function recreateInstances($project, $zone, $instanceGroupManager, Google_Service_Compute_InstanceGroupManagersRecreateInstancesRequest $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instanceGroupManager' => $instanceGroupManager, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('recreateInstances', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Resizes the managed instance group. If you increase the size, the group
     * creates new instances using the current instance template. If you decrease
     * the size, the group deletes instances. The resize operation is marked DONE
     * when the resize actions are scheduled even if the group has not yet added or
     * deleted any instances. You must separately verify the status of the creating
     * or deleting actions with the listmanagedinstances method.
     * (instanceGroupManagers.resize)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone where the managed instance group is
     * located.
     * @param string $instanceGroupManager The name of the managed instance group.
     * @param int $size The number of running instances that the managed instance
     * group should maintain at any given time. The group automatically adds or
     * removes instances to maintain the number of instances specified by this
     * parameter.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function resize($project, $zone, $instanceGroupManager, $size, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instanceGroupManager' => $instanceGroupManager, 'size' => $size);
        $params = \array_merge($params, $optParams);
        return $this->call('resize', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Specifies the instance template to use when creating new instances in this
     * group. The templates for existing instances in the group do not change unless
     * you recreate them. (instanceGroupManagers.setInstanceTemplate)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone where the managed instance group is
     * located.
     * @param string $instanceGroupManager The name of the managed instance group.
     * @param Google_InstanceGroupManagersSetInstanceTemplateRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function setInstanceTemplate($project, $zone, $instanceGroupManager, Google_Service_Compute_InstanceGroupManagersSetInstanceTemplateRequest $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instanceGroupManager' => $instanceGroupManager, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('setInstanceTemplate', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Modifies the target pools to which all instances in this managed instance
     * group are assigned. The target pools automatically apply to all of the
     * instances in the managed instance group. This operation is marked DONE when
     * you make the request even if the instances have not yet been added to their
     * target pools. The change might take some time to apply to all of the
     * instances in the group depending on the size of the group.
     * (instanceGroupManagers.setTargetPools)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone where the managed instance group is
     * located.
     * @param string $instanceGroupManager The name of the managed instance group.
     * @param Google_InstanceGroupManagersSetTargetPoolsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function setTargetPools($project, $zone, $instanceGroupManager, Google_Service_Compute_InstanceGroupManagersSetTargetPoolsRequest $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instanceGroupManager' => $instanceGroupManager, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('setTargetPools', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
}
/**
 * The "instanceGroupManagers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $instanceGroupManagers = $computeService->instanceGroupManagers;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroupManagers_Resource', 'VendorDuplicator\\Google_Service_Compute_InstanceGroupManagers_Resource', \false);
/**
 * The "instanceGroups" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $instanceGroups = $computeService->instanceGroups;
 *  </code>
 * @internal
 */
class Google_Service_Compute_InstanceGroups_Resource extends Google_Service_Resource
{
    /**
     * Adds a list of instances to the specified instance group. All of the
     * instances in the instance group must be in the same network/subnetwork. Read
     * Adding instances for more information. (instanceGroups.addInstances)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone where the instance group is located.
     * @param string $instanceGroup The name of the instance group where you are
     * adding instances.
     * @param Google_InstanceGroupsAddInstancesRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function addInstances($project, $zone, $instanceGroup, Google_Service_Compute_InstanceGroupsAddInstancesRequest $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instanceGroup' => $instanceGroup, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('addInstances', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves the list of instance groups and sorts them by zone.
     * (instanceGroups.aggregatedList)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_InstanceGroupAggregatedList
     */
    public function aggregatedList($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('aggregatedList', array($params), "VendorDuplicator\\Google_Service_Compute_InstanceGroupAggregatedList");
    }
    /**
     * Deletes the specified instance group. The instances in the group are not
     * deleted. Note that instance group must not belong to a backend service. Read
     * Deleting an instance group for more information. (instanceGroups.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone where the instance group is located.
     * @param string $instanceGroup The name of the instance group to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $zone, $instanceGroup, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instanceGroup' => $instanceGroup);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns the specified instance group resource. (instanceGroups.get)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone where the instance group is located.
     * @param string $instanceGroup The name of the instance group.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_InstanceGroup
     */
    public function get($project, $zone, $instanceGroup, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instanceGroup' => $instanceGroup);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_InstanceGroup");
    }
    /**
     * Creates an instance group in the specified project using the parameters that
     * are included in the request. (instanceGroups.insert)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone where you want to create the
     * instance group.
     * @param Google_InstanceGroup $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, $zone, Google_Service_Compute_InstanceGroup $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves the list of instance groups that are located in the specified
     * project and zone. (instanceGroups.listInstanceGroups)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone where the instance group is located.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_InstanceGroupList
     */
    public function listInstanceGroups($project, $zone, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_InstanceGroupList");
    }
    /**
     * Lists the instances in the specified instance group.
     * (instanceGroups.listInstances)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone where the instance group is located.
     * @param string $instanceGroup The name of the instance group from which you
     * want to generate a list of included instances.
     * @param Google_InstanceGroupsListInstancesRequest $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_InstanceGroupsListInstances
     */
    public function listInstances($project, $zone, $instanceGroup, Google_Service_Compute_InstanceGroupsListInstancesRequest $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instanceGroup' => $instanceGroup, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('listInstances', array($params), "VendorDuplicator\\Google_Service_Compute_InstanceGroupsListInstances");
    }
    /**
     * Removes one or more instances from the specified instance group, but does not
     * delete those instances. (instanceGroups.removeInstances)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone where the instance group is located.
     * @param string $instanceGroup The name of the instance group where the
     * specified instances will be removed.
     * @param Google_InstanceGroupsRemoveInstancesRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function removeInstances($project, $zone, $instanceGroup, Google_Service_Compute_InstanceGroupsRemoveInstancesRequest $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instanceGroup' => $instanceGroup, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('removeInstances', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Sets the named ports for the specified instance group.
     * (instanceGroups.setNamedPorts)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone where the instance group is located.
     * @param string $instanceGroup The name of the instance group where the named
     * ports are updated.
     * @param Google_InstanceGroupsSetNamedPortsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function setNamedPorts($project, $zone, $instanceGroup, Google_Service_Compute_InstanceGroupsSetNamedPortsRequest $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instanceGroup' => $instanceGroup, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('setNamedPorts', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
}
/**
 * The "instanceGroups" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $instanceGroups = $computeService->instanceGroups;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroups_Resource', 'VendorDuplicator\\Google_Service_Compute_InstanceGroups_Resource', \false);
/**
 * The "instanceTemplates" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $instanceTemplates = $computeService->instanceTemplates;
 *  </code>
 * @internal
 */
class Google_Service_Compute_InstanceTemplates_Resource extends Google_Service_Resource
{
    /**
     * Deletes the specified instance template. If you delete an instance template
     * that is being referenced from another instance group, the instance group will
     * not be able to create or recreate virtual machine instances. Deleting an
     * instance template is permanent and cannot be undone.
     * (instanceTemplates.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $instanceTemplate The name of the instance template to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $instanceTemplate, $optParams = array())
    {
        $params = array('project' => $project, 'instanceTemplate' => $instanceTemplate);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns the specified instance template resource. (instanceTemplates.get)
     *
     * @param string $project Project ID for this request.
     * @param string $instanceTemplate The name of the instance template.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_InstanceTemplate
     */
    public function get($project, $instanceTemplate, $optParams = array())
    {
        $params = array('project' => $project, 'instanceTemplate' => $instanceTemplate);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_InstanceTemplate");
    }
    /**
     * Creates an instance template in the specified project using the data that is
     * included in the request. If you are creating a new template to update an
     * existing instance group, your new instance template must use the same network
     * or, if applicable, the same subnetwork as the original template.
     * (instanceTemplates.insert)
     *
     * @param string $project Project ID for this request.
     * @param Google_InstanceTemplate $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, Google_Service_Compute_InstanceTemplate $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves a list of instance templates that are contained within the
     * specified project and zone. (instanceTemplates.listInstanceTemplates)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_InstanceTemplateList
     */
    public function listInstanceTemplates($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_InstanceTemplateList");
    }
}
/**
 * The "instanceTemplates" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $instanceTemplates = $computeService->instanceTemplates;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceTemplates_Resource', 'VendorDuplicator\\Google_Service_Compute_InstanceTemplates_Resource', \false);
/**
 * The "instances" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $instances = $computeService->instances;
 *  </code>
 * @internal
 */
class Google_Service_Compute_Instances_Resource extends Google_Service_Resource
{
    /**
     * Adds an access config to an instance's network interface.
     * (instances.addAccessConfig)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance The instance name for this request.
     * @param string $networkInterface The name of the network interface to add to
     * this instance.
     * @param Google_AccessConfig $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function addAccessConfig($project, $zone, $instance, $networkInterface, Google_Service_Compute_AccessConfig $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'networkInterface' => $networkInterface, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('addAccessConfig', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves aggregated list of instances. (instances.aggregatedList)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_InstanceAggregatedList
     */
    public function aggregatedList($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('aggregatedList', array($params), "VendorDuplicator\\Google_Service_Compute_InstanceAggregatedList");
    }
    /**
     * Attaches a Disk resource to an instance. (instances.attachDisk)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance The instance name for this request.
     * @param Google_AttachedDisk $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function attachDisk($project, $zone, $instance, Google_Service_Compute_AttachedDisk $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('attachDisk', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Deletes the specified Instance resource. For more information, see Stopping
     * or Deleting an Instance. (instances.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance Name of the instance resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $zone, $instance, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Deletes an access config from an instance's network interface.
     * (instances.deleteAccessConfig)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance The instance name for this request.
     * @param string $accessConfig The name of the access config to delete.
     * @param string $networkInterface The name of the network interface.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function deleteAccessConfig($project, $zone, $instance, $accessConfig, $networkInterface, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'accessConfig' => $accessConfig, 'networkInterface' => $networkInterface);
        $params = \array_merge($params, $optParams);
        return $this->call('deleteAccessConfig', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Detaches a disk from an instance. (instances.detachDisk)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance Instance name.
     * @param string $deviceName Disk device name to detach.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function detachDisk($project, $zone, $instance, $deviceName, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'deviceName' => $deviceName);
        $params = \array_merge($params, $optParams);
        return $this->call('detachDisk', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns the specified Instance resource. (instances.get)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance Name of the instance resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Instance
     */
    public function get($project, $zone, $instance, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_Instance");
    }
    /**
     * Returns the specified instance's serial port output.
     * (instances.getSerialPortOutput)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance Name of the instance scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int port Specifies which COM or serial port to retrieve data from.
     * @return Google_Service_Compute_SerialPortOutput
     */
    public function getSerialPortOutput($project, $zone, $instance, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
        $params = \array_merge($params, $optParams);
        return $this->call('getSerialPortOutput', array($params), "VendorDuplicator\\Google_Service_Compute_SerialPortOutput");
    }
    /**
     * Creates an instance resource in the specified project using the data included
     * in the request. (instances.insert)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param Google_Instance $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, $zone, Google_Service_Compute_Instance $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves the list of instances contained within the specified zone.
     * (instances.listInstances)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_InstanceList
     */
    public function listInstances($project, $zone, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_InstanceList");
    }
    /**
     * Performs a hard reset on the instance. (instances.reset)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance Name of the instance scoping this request.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function reset($project, $zone, $instance, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
        $params = \array_merge($params, $optParams);
        return $this->call('reset', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Sets the auto-delete flag for a disk attached to an instance.
     * (instances.setDiskAutoDelete)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance The instance name.
     * @param bool $autoDelete Whether to auto-delete the disk when the instance is
     * deleted.
     * @param string $deviceName The device name of the disk to modify.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function setDiskAutoDelete($project, $zone, $instance, $autoDelete, $deviceName, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'autoDelete' => $autoDelete, 'deviceName' => $deviceName);
        $params = \array_merge($params, $optParams);
        return $this->call('setDiskAutoDelete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Changes the machine type for a stopped instance to the machine type specified
     * in the request. (instances.setMachineType)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance Name of the instance scoping this request.
     * @param Google_InstancesSetMachineTypeRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function setMachineType($project, $zone, $instance, Google_Service_Compute_InstancesSetMachineTypeRequest $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('setMachineType', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Sets metadata for the specified instance to the data included in the request.
     * (instances.setMetadata)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance Name of the instance scoping this request.
     * @param Google_Metadata $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function setMetadata($project, $zone, $instance, Google_Service_Compute_Metadata $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('setMetadata', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Sets an instance's scheduling options. (instances.setScheduling)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance Instance name.
     * @param Google_Scheduling $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function setScheduling($project, $zone, $instance, Google_Service_Compute_Scheduling $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('setScheduling', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Sets tags for the specified instance to the data included in the request.
     * (instances.setTags)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance Name of the instance scoping this request.
     * @param Google_Tags $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function setTags($project, $zone, $instance, Google_Service_Compute_Tags $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('setTags', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Starts an instance that was stopped using the using the instances().stop
     * method. For more information, see Restart an instance. (instances.start)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance Name of the instance resource to start.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function start($project, $zone, $instance, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
        $params = \array_merge($params, $optParams);
        return $this->call('start', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Stops a running instance, shutting it down cleanly, and allows you to restart
     * the instance at a later time. Stopped instances do not incur per-minute,
     * virtual machine usage charges while they are stopped, but any resources that
     * the virtual machine is using, such as persistent disks and static IP
     * addresses, will continue to be charged until they are deleted. For more
     * information, see Stopping an instance. (instances.stop)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $instance Name of the instance resource to stop.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function stop($project, $zone, $instance, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
        $params = \array_merge($params, $optParams);
        return $this->call('stop', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
}
/**
 * The "instances" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $instances = $computeService->instances;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_Instances_Resource', 'VendorDuplicator\\Google_Service_Compute_Instances_Resource', \false);
/**
 * The "licenses" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $licenses = $computeService->licenses;
 *  </code>
 * @internal
 */
class Google_Service_Compute_Licenses_Resource extends Google_Service_Resource
{
    /**
     * Returns the specified license resource. (licenses.get)
     *
     * @param string $project Project ID for this request.
     * @param string $license Name of the License resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_License
     */
    public function get($project, $license, $optParams = array())
    {
        $params = array('project' => $project, 'license' => $license);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_License");
    }
}
/**
 * The "licenses" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $licenses = $computeService->licenses;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_Licenses_Resource', 'VendorDuplicator\\Google_Service_Compute_Licenses_Resource', \false);
/**
 * The "machineTypes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $machineTypes = $computeService->machineTypes;
 *  </code>
 * @internal
 */
class Google_Service_Compute_MachineTypes_Resource extends Google_Service_Resource
{
    /**
     * Retrieves an aggregated list of machine types. (machineTypes.aggregatedList)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_MachineTypeAggregatedList
     */
    public function aggregatedList($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('aggregatedList', array($params), "VendorDuplicator\\Google_Service_Compute_MachineTypeAggregatedList");
    }
    /**
     * Returns the specified machine type. (machineTypes.get)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param string $machineType Name of the machine type to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_MachineType
     */
    public function get($project, $zone, $machineType, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'machineType' => $machineType);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_MachineType");
    }
    /**
     * Retrieves a list of machine types available to the specified project.
     * (machineTypes.listMachineTypes)
     *
     * @param string $project Project ID for this request.
     * @param string $zone The name of the zone for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_MachineTypeList
     */
    public function listMachineTypes($project, $zone, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_MachineTypeList");
    }
}
/**
 * The "machineTypes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $machineTypes = $computeService->machineTypes;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_MachineTypes_Resource', 'VendorDuplicator\\Google_Service_Compute_MachineTypes_Resource', \false);
/**
 * The "networks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $networks = $computeService->networks;
 *  </code>
 * @internal
 */
class Google_Service_Compute_Networks_Resource extends Google_Service_Resource
{
    /**
     * Deletes the specified network. (networks.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $network Name of the network to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $network, $optParams = array())
    {
        $params = array('project' => $project, 'network' => $network);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns the specified network. (networks.get)
     *
     * @param string $project Project ID for this request.
     * @param string $network Name of the network to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Network
     */
    public function get($project, $network, $optParams = array())
    {
        $params = array('project' => $project, 'network' => $network);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_Network");
    }
    /**
     * Creates a network in the specified project using the data included in the
     * request. (networks.insert)
     *
     * @param string $project Project ID for this request.
     * @param Google_Network $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, Google_Service_Compute_Network $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves the list of networks available to the specified project.
     * (networks.listNetworks)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_NetworkList
     */
    public function listNetworks($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_NetworkList");
    }
}
/**
 * The "networks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $networks = $computeService->networks;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_Networks_Resource', 'VendorDuplicator\\Google_Service_Compute_Networks_Resource', \false);
/**
 * The "projects" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $projects = $computeService->projects;
 *  </code>
 * @internal
 */
class Google_Service_Compute_Projects_Resource extends Google_Service_Resource
{
    /**
     * Returns the specified project resource. (projects.get)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Project
     */
    public function get($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_Project");
    }
    /**
     * Moves a persistent disk from one zone to another. (projects.moveDisk)
     *
     * @param string $project Project ID for this request.
     * @param Google_DiskMoveRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function moveDisk($project, Google_Service_Compute_DiskMoveRequest $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('moveDisk', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Moves an instance and its attached persistent disks from one zone to another.
     * (projects.moveInstance)
     *
     * @param string $project Project ID for this request.
     * @param Google_InstanceMoveRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function moveInstance($project, Google_Service_Compute_InstanceMoveRequest $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('moveInstance', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Sets metadata common to all instances within the specified project using the
     * data included in the request. (projects.setCommonInstanceMetadata)
     *
     * @param string $project Project ID for this request.
     * @param Google_Metadata $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function setCommonInstanceMetadata($project, Google_Service_Compute_Metadata $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('setCommonInstanceMetadata', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Enables the usage export feature and sets the usage export bucket where
     * reports are stored. If you provide an empty request body using this method,
     * the usage export feature will be disabled. (projects.setUsageExportBucket)
     *
     * @param string $project Project ID for this request.
     * @param Google_UsageExportLocation $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function setUsageExportBucket($project, Google_Service_Compute_UsageExportLocation $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('setUsageExportBucket', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
}
/**
 * The "projects" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $projects = $computeService->projects;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_Projects_Resource', 'VendorDuplicator\\Google_Service_Compute_Projects_Resource', \false);
/**
 * The "regionOperations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $regionOperations = $computeService->regionOperations;
 *  </code>
 * @internal
 */
class Google_Service_Compute_RegionOperations_Resource extends Google_Service_Resource
{
    /**
     * Deletes the specified region-specific Operations resource.
     * (regionOperations.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $region Name of the region for this request.
     * @param string $operation Name of the Operations resource to delete.
     * @param array $optParams Optional parameters.
     */
    public function delete($project, $region, $operation, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'operation' => $operation);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }
    /**
     * Retrieves the specified region-specific Operations resource.
     * (regionOperations.get)
     *
     * @param string $project Project ID for this request.
     * @param string $region Name of the region for this request.
     * @param string $operation Name of the Operations resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function get($project, $region, $operation, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'operation' => $operation);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves a list of Operation resources contained within the specified
     * region. (regionOperations.listRegionOperations)
     *
     * @param string $project Project ID for this request.
     * @param string $region Name of the region for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_OperationList
     */
    public function listRegionOperations($project, $region, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_OperationList");
    }
}
/**
 * The "regionOperations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $regionOperations = $computeService->regionOperations;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_RegionOperations_Resource', 'VendorDuplicator\\Google_Service_Compute_RegionOperations_Resource', \false);
/**
 * The "regions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $regions = $computeService->regions;
 *  </code>
 * @internal
 */
class Google_Service_Compute_Regions_Resource extends Google_Service_Resource
{
    /**
     * Returns the specified region resource. (regions.get)
     *
     * @param string $project Project ID for this request.
     * @param string $region Name of the region resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Region
     */
    public function get($project, $region, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_Region");
    }
    /**
     * Retrieves the list of region resources available to the specified project.
     * (regions.listRegions)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_RegionList
     */
    public function listRegions($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_RegionList");
    }
}
/**
 * The "regions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $regions = $computeService->regions;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_Regions_Resource', 'VendorDuplicator\\Google_Service_Compute_Regions_Resource', \false);
/**
 * The "routes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $routes = $computeService->routes;
 *  </code>
 * @internal
 */
class Google_Service_Compute_Routes_Resource extends Google_Service_Resource
{
    /**
     * Deletes the specified route resource. (routes.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $route Name of the route resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $route, $optParams = array())
    {
        $params = array('project' => $project, 'route' => $route);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns the specified route resource. (routes.get)
     *
     * @param string $project Project ID for this request.
     * @param string $route Name of the route resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Route
     */
    public function get($project, $route, $optParams = array())
    {
        $params = array('project' => $project, 'route' => $route);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_Route");
    }
    /**
     * Creates a route resource in the specified project using the data included in
     * the request. (routes.insert)
     *
     * @param string $project Project ID for this request.
     * @param Google_Route $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, Google_Service_Compute_Route $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves the list of route resources available to the specified project.
     * (routes.listRoutes)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_RouteList
     */
    public function listRoutes($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_RouteList");
    }
}
/**
 * The "routes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $routes = $computeService->routes;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_Routes_Resource', 'VendorDuplicator\\Google_Service_Compute_Routes_Resource', \false);
/**
 * The "snapshots" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $snapshots = $computeService->snapshots;
 *  </code>
 * @internal
 */
class Google_Service_Compute_Snapshots_Resource extends Google_Service_Resource
{
    /**
     * Deletes the specified Snapshot resource. Keep in mind that deleting a single
     * snapshot might not necessarily delete all the data on that snapshot. If any
     * data on the snapshot that is marked for deletion is needed for subsequent
     * snapshots, the data will be moved to the next corresponding snapshot.
     *
     * For more information, see Deleting snaphots. (snapshots.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $snapshot Name of the Snapshot resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $snapshot, $optParams = array())
    {
        $params = array('project' => $project, 'snapshot' => $snapshot);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns the specified Snapshot resource. (snapshots.get)
     *
     * @param string $project Project ID for this request.
     * @param string $snapshot Name of the Snapshot resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Snapshot
     */
    public function get($project, $snapshot, $optParams = array())
    {
        $params = array('project' => $project, 'snapshot' => $snapshot);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_Snapshot");
    }
    /**
     * Retrieves the list of Snapshot resources contained within the specified
     * project. (snapshots.listSnapshots)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_SnapshotList
     */
    public function listSnapshots($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_SnapshotList");
    }
}
/**
 * The "snapshots" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $snapshots = $computeService->snapshots;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_Snapshots_Resource', 'VendorDuplicator\\Google_Service_Compute_Snapshots_Resource', \false);
/**
 * The "sslCertificates" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $sslCertificates = $computeService->sslCertificates;
 *  </code>
 * @internal
 */
class Google_Service_Compute_SslCertificates_Resource extends Google_Service_Resource
{
    /**
     * Deletes the specified SslCertificate resource. (sslCertificates.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $sslCertificate Name of the SslCertificate resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $sslCertificate, $optParams = array())
    {
        $params = array('project' => $project, 'sslCertificate' => $sslCertificate);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns the specified SslCertificate resource. (sslCertificates.get)
     *
     * @param string $project Project ID for this request.
     * @param string $sslCertificate Name of the SslCertificate resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_SslCertificate
     */
    public function get($project, $sslCertificate, $optParams = array())
    {
        $params = array('project' => $project, 'sslCertificate' => $sslCertificate);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_SslCertificate");
    }
    /**
     * Creates a SslCertificate resource in the specified project using the data
     * included in the request. (sslCertificates.insert)
     *
     * @param string $project Project ID for this request.
     * @param Google_SslCertificate $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, Google_Service_Compute_SslCertificate $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves the list of SslCertificate resources available to the specified
     * project. (sslCertificates.listSslCertificates)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_SslCertificateList
     */
    public function listSslCertificates($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_SslCertificateList");
    }
}
/**
 * The "sslCertificates" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $sslCertificates = $computeService->sslCertificates;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_SslCertificates_Resource', 'VendorDuplicator\\Google_Service_Compute_SslCertificates_Resource', \false);
/**
 * The "subnetworks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $subnetworks = $computeService->subnetworks;
 *  </code>
 * @internal
 */
class Google_Service_Compute_Subnetworks_Resource extends Google_Service_Resource
{
    /**
     * Retrieves an aggregated list of subnetworks. (subnetworks.aggregatedList)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_SubnetworkAggregatedList
     */
    public function aggregatedList($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('aggregatedList', array($params), "VendorDuplicator\\Google_Service_Compute_SubnetworkAggregatedList");
    }
    /**
     * Deletes the specified subnetwork. (subnetworks.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $region Name of the region scoping this request.
     * @param string $subnetwork Name of the Subnetwork resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $region, $subnetwork, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'subnetwork' => $subnetwork);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns the specified subnetwork. (subnetworks.get)
     *
     * @param string $project Project ID for this request.
     * @param string $region Name of the region scoping this request.
     * @param string $subnetwork Name of the Subnetwork resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Subnetwork
     */
    public function get($project, $region, $subnetwork, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'subnetwork' => $subnetwork);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_Subnetwork");
    }
    /**
     * Creates a subnetwork in the specified project using the data included in the
     * request. (subnetworks.insert)
     *
     * @param string $project Project ID for this request.
     * @param string $region Name of the region scoping this request.
     * @param Google_Subnetwork $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, $region, Google_Service_Compute_Subnetwork $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves a list of subnetworks available to the specified project.
     * (subnetworks.listSubnetworks)
     *
     * @param string $project Project ID for this request.
     * @param string $region Name of the region scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_SubnetworkList
     */
    public function listSubnetworks($project, $region, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_SubnetworkList");
    }
}
/**
 * The "subnetworks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $subnetworks = $computeService->subnetworks;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_Subnetworks_Resource', 'VendorDuplicator\\Google_Service_Compute_Subnetworks_Resource', \false);
/**
 * The "targetHttpProxies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $targetHttpProxies = $computeService->targetHttpProxies;
 *  </code>
 * @internal
 */
class Google_Service_Compute_TargetHttpProxies_Resource extends Google_Service_Resource
{
    /**
     * Deletes the specified TargetHttpProxy resource. (targetHttpProxies.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $targetHttpProxy Name of the TargetHttpProxy resource to
     * delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $targetHttpProxy, $optParams = array())
    {
        $params = array('project' => $project, 'targetHttpProxy' => $targetHttpProxy);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns the specified TargetHttpProxy resource. (targetHttpProxies.get)
     *
     * @param string $project Project ID for this request.
     * @param string $targetHttpProxy Name of the TargetHttpProxy resource to
     * return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_TargetHttpProxy
     */
    public function get($project, $targetHttpProxy, $optParams = array())
    {
        $params = array('project' => $project, 'targetHttpProxy' => $targetHttpProxy);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_TargetHttpProxy");
    }
    /**
     * Creates a TargetHttpProxy resource in the specified project using the data
     * included in the request. (targetHttpProxies.insert)
     *
     * @param string $project Project ID for this request.
     * @param Google_TargetHttpProxy $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, Google_Service_Compute_TargetHttpProxy $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves the list of TargetHttpProxy resources available to the specified
     * project. (targetHttpProxies.listTargetHttpProxies)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_TargetHttpProxyList
     */
    public function listTargetHttpProxies($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_TargetHttpProxyList");
    }
    /**
     * Changes the URL map for TargetHttpProxy. (targetHttpProxies.setUrlMap)
     *
     * @param string $project Project ID for this request.
     * @param string $targetHttpProxy The name of the TargetHttpProxy resource to
     * set a URL map for.
     * @param Google_UrlMapReference $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function setUrlMap($project, $targetHttpProxy, Google_Service_Compute_UrlMapReference $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'targetHttpProxy' => $targetHttpProxy, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('setUrlMap', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
}
/**
 * The "targetHttpProxies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $targetHttpProxies = $computeService->targetHttpProxies;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetHttpProxies_Resource', 'VendorDuplicator\\Google_Service_Compute_TargetHttpProxies_Resource', \false);
/**
 * The "targetHttpsProxies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $targetHttpsProxies = $computeService->targetHttpsProxies;
 *  </code>
 * @internal
 */
class Google_Service_Compute_TargetHttpsProxies_Resource extends Google_Service_Resource
{
    /**
     * Deletes the specified TargetHttpsProxy resource. (targetHttpsProxies.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $targetHttpsProxy Name of the TargetHttpsProxy resource to
     * delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $targetHttpsProxy, $optParams = array())
    {
        $params = array('project' => $project, 'targetHttpsProxy' => $targetHttpsProxy);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns the specified TargetHttpsProxy resource. (targetHttpsProxies.get)
     *
     * @param string $project Project ID for this request.
     * @param string $targetHttpsProxy Name of the TargetHttpsProxy resource to
     * return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_TargetHttpsProxy
     */
    public function get($project, $targetHttpsProxy, $optParams = array())
    {
        $params = array('project' => $project, 'targetHttpsProxy' => $targetHttpsProxy);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_TargetHttpsProxy");
    }
    /**
     * Creates a TargetHttpsProxy resource in the specified project using the data
     * included in the request. (targetHttpsProxies.insert)
     *
     * @param string $project Project ID for this request.
     * @param Google_TargetHttpsProxy $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, Google_Service_Compute_TargetHttpsProxy $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves the list of TargetHttpsProxy resources available to the specified
     * project. (targetHttpsProxies.listTargetHttpsProxies)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_TargetHttpsProxyList
     */
    public function listTargetHttpsProxies($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_TargetHttpsProxyList");
    }
    /**
     * Replaces SslCertificates for TargetHttpsProxy.
     * (targetHttpsProxies.setSslCertificates)
     *
     * @param string $project Project ID for this request.
     * @param string $targetHttpsProxy Name of the TargetHttpsProxy resource to set
     * an SSL certificate for.
     * @param Google_TargetHttpsProxiesSetSslCertificatesRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function setSslCertificates($project, $targetHttpsProxy, Google_Service_Compute_TargetHttpsProxiesSetSslCertificatesRequest $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'targetHttpsProxy' => $targetHttpsProxy, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('setSslCertificates', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Changes the URL map for TargetHttpsProxy. (targetHttpsProxies.setUrlMap)
     *
     * @param string $project Project ID for this request.
     * @param string $targetHttpsProxy Name of the TargetHttpsProxy resource whose
     * URL map is to be set.
     * @param Google_UrlMapReference $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function setUrlMap($project, $targetHttpsProxy, Google_Service_Compute_UrlMapReference $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'targetHttpsProxy' => $targetHttpsProxy, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('setUrlMap', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
}
/**
 * The "targetHttpsProxies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $targetHttpsProxies = $computeService->targetHttpsProxies;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetHttpsProxies_Resource', 'VendorDuplicator\\Google_Service_Compute_TargetHttpsProxies_Resource', \false);
/**
 * The "targetInstances" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $targetInstances = $computeService->targetInstances;
 *  </code>
 * @internal
 */
class Google_Service_Compute_TargetInstances_Resource extends Google_Service_Resource
{
    /**
     * Retrieves an aggregated list of target instances.
     * (targetInstances.aggregatedList)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_TargetInstanceAggregatedList
     */
    public function aggregatedList($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('aggregatedList', array($params), "VendorDuplicator\\Google_Service_Compute_TargetInstanceAggregatedList");
    }
    /**
     * Deletes the specified TargetInstance resource. (targetInstances.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $targetInstance Name of the TargetInstance resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $zone, $targetInstance, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'targetInstance' => $targetInstance);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns the specified TargetInstance resource. (targetInstances.get)
     *
     * @param string $project Project ID for this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $targetInstance Name of the TargetInstance resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_TargetInstance
     */
    public function get($project, $zone, $targetInstance, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'targetInstance' => $targetInstance);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_TargetInstance");
    }
    /**
     * Creates a TargetInstance resource in the specified project and zone using the
     * data included in the request. (targetInstances.insert)
     *
     * @param string $project Project ID for this request.
     * @param string $zone Name of the zone scoping this request.
     * @param Google_TargetInstance $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, $zone, Google_Service_Compute_TargetInstance $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves a list of TargetInstance resources available to the specified
     * project and zone. (targetInstances.listTargetInstances)
     *
     * @param string $project Project ID for this request.
     * @param string $zone Name of the zone scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_TargetInstanceList
     */
    public function listTargetInstances($project, $zone, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_TargetInstanceList");
    }
}
/**
 * The "targetInstances" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $targetInstances = $computeService->targetInstances;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetInstances_Resource', 'VendorDuplicator\\Google_Service_Compute_TargetInstances_Resource', \false);
/**
 * The "targetPools" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $targetPools = $computeService->targetPools;
 *  </code>
 * @internal
 */
class Google_Service_Compute_TargetPools_Resource extends Google_Service_Resource
{
    /**
     * Adds health check URLs to a target pool. (targetPools.addHealthCheck)
     *
     * @param string $project Project ID for this request.
     * @param string $region Name of the region scoping this request.
     * @param string $targetPool Name of the target pool to add a health check to.
     * @param Google_TargetPoolsAddHealthCheckRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function addHealthCheck($project, $region, $targetPool, Google_Service_Compute_TargetPoolsAddHealthCheckRequest $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('addHealthCheck', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Adds an instance to a target pool. (targetPools.addInstance)
     *
     * @param string $project Project ID for this request.
     * @param string $region Name of the region scoping this request.
     * @param string $targetPool Name of the TargetPool resource to add instances
     * to.
     * @param Google_TargetPoolsAddInstanceRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function addInstance($project, $region, $targetPool, Google_Service_Compute_TargetPoolsAddInstanceRequest $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('addInstance', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves an aggregated list of target pools. (targetPools.aggregatedList)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_TargetPoolAggregatedList
     */
    public function aggregatedList($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('aggregatedList', array($params), "VendorDuplicator\\Google_Service_Compute_TargetPoolAggregatedList");
    }
    /**
     * Deletes the specified target pool. (targetPools.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $region Name of the region scoping this request.
     * @param string $targetPool Name of the TargetPool resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $region, $targetPool, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns the specified target pool. (targetPools.get)
     *
     * @param string $project Project ID for this request.
     * @param string $region Name of the region scoping this request.
     * @param string $targetPool Name of the TargetPool resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_TargetPool
     */
    public function get($project, $region, $targetPool, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_TargetPool");
    }
    /**
     * Gets the most recent health check results for each IP for the instance that
     * is referenced by the given target pool. (targetPools.getHealth)
     *
     * @param string $project Project ID for this request.
     * @param string $region Name of the region scoping this request.
     * @param string $targetPool Name of the TargetPool resource to which the
     * queried instance belongs.
     * @param Google_InstanceReference $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_TargetPoolInstanceHealth
     */
    public function getHealth($project, $region, $targetPool, Google_Service_Compute_InstanceReference $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('getHealth', array($params), "VendorDuplicator\\Google_Service_Compute_TargetPoolInstanceHealth");
    }
    /**
     * Creates a target pool in the specified project and region using the data
     * included in the request. (targetPools.insert)
     *
     * @param string $project Project ID for this request.
     * @param string $region Name of the region scoping this request.
     * @param Google_TargetPool $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, $region, Google_Service_Compute_TargetPool $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves a list of target pools available to the specified project and
     * region. (targetPools.listTargetPools)
     *
     * @param string $project Project ID for this request.
     * @param string $region Name of the region scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_TargetPoolList
     */
    public function listTargetPools($project, $region, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_TargetPoolList");
    }
    /**
     * Removes health check URL from a target pool. (targetPools.removeHealthCheck)
     *
     * @param string $project Project ID for this request.
     * @param string $region Name of the region for this request.
     * @param string $targetPool Name of the target pool to remove health checks
     * from.
     * @param Google_TargetPoolsRemoveHealthCheckRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function removeHealthCheck($project, $region, $targetPool, Google_Service_Compute_TargetPoolsRemoveHealthCheckRequest $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('removeHealthCheck', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Removes instance URL from a target pool. (targetPools.removeInstance)
     *
     * @param string $project Project ID for this request.
     * @param string $region Name of the region scoping this request.
     * @param string $targetPool Name of the TargetPool resource to remove instances
     * from.
     * @param Google_TargetPoolsRemoveInstanceRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function removeInstance($project, $region, $targetPool, Google_Service_Compute_TargetPoolsRemoveInstanceRequest $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('removeInstance', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Changes a backup target pool's configurations. (targetPools.setBackup)
     *
     * @param string $project Project ID for this request.
     * @param string $region Name of the region scoping this request.
     * @param string $targetPool Name of the TargetPool resource to set a backup
     * pool for.
     * @param Google_TargetReference $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param float failoverRatio New failoverRatio value for the target pool.
     * @return Google_Service_Compute_Operation
     */
    public function setBackup($project, $region, $targetPool, Google_Service_Compute_TargetReference $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('setBackup', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
}
/**
 * The "targetPools" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $targetPools = $computeService->targetPools;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetPools_Resource', 'VendorDuplicator\\Google_Service_Compute_TargetPools_Resource', \false);
/**
 * The "targetVpnGateways" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $targetVpnGateways = $computeService->targetVpnGateways;
 *  </code>
 * @internal
 */
class Google_Service_Compute_TargetVpnGateways_Resource extends Google_Service_Resource
{
    /**
     * Retrieves an aggregated list of target VPN gateways.
     * (targetVpnGateways.aggregatedList)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_TargetVpnGatewayAggregatedList
     */
    public function aggregatedList($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('aggregatedList', array($params), "VendorDuplicator\\Google_Service_Compute_TargetVpnGatewayAggregatedList");
    }
    /**
     * Deletes the specified target VPN gateway. (targetVpnGateways.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $region The name of the region for this request.
     * @param string $targetVpnGateway Name of the target VPN gateway to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $region, $targetVpnGateway, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'targetVpnGateway' => $targetVpnGateway);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns the specified target VPN gateway. (targetVpnGateways.get)
     *
     * @param string $project Project ID for this request.
     * @param string $region The name of the region for this request.
     * @param string $targetVpnGateway Name of the target VPN gateway to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_TargetVpnGateway
     */
    public function get($project, $region, $targetVpnGateway, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'targetVpnGateway' => $targetVpnGateway);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_TargetVpnGateway");
    }
    /**
     * Creates a target VPN gateway in the specified project and region using the
     * data included in the request. (targetVpnGateways.insert)
     *
     * @param string $project Project ID for this request.
     * @param string $region The name of the region for this request.
     * @param Google_TargetVpnGateway $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, $region, Google_Service_Compute_TargetVpnGateway $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves a list of target VPN gateways available to the specified project
     * and region. (targetVpnGateways.listTargetVpnGateways)
     *
     * @param string $project Project ID for this request.
     * @param string $region The name of the region for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_TargetVpnGatewayList
     */
    public function listTargetVpnGateways($project, $region, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_TargetVpnGatewayList");
    }
}
/**
 * The "targetVpnGateways" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $targetVpnGateways = $computeService->targetVpnGateways;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetVpnGateways_Resource', 'VendorDuplicator\\Google_Service_Compute_TargetVpnGateways_Resource', \false);
/**
 * The "urlMaps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $urlMaps = $computeService->urlMaps;
 *  </code>
 * @internal
 */
class Google_Service_Compute_UrlMaps_Resource extends Google_Service_Resource
{
    /**
     * Deletes the specified UrlMap resource. (urlMaps.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $urlMap Name of the UrlMap resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $urlMap, $optParams = array())
    {
        $params = array('project' => $project, 'urlMap' => $urlMap);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns the specified UrlMap resource. (urlMaps.get)
     *
     * @param string $project Project ID for this request.
     * @param string $urlMap Name of the UrlMap resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_UrlMap
     */
    public function get($project, $urlMap, $optParams = array())
    {
        $params = array('project' => $project, 'urlMap' => $urlMap);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_UrlMap");
    }
    /**
     * Creates a UrlMap resource in the specified project using the data included in
     * the request. (urlMaps.insert)
     *
     * @param string $project Project ID for this request.
     * @param Google_UrlMap $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, Google_Service_Compute_UrlMap $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves the list of UrlMap resources available to the specified project.
     * (urlMaps.listUrlMaps)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_UrlMapList
     */
    public function listUrlMaps($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_UrlMapList");
    }
    /**
     * Updates the entire content of the UrlMap resource. This method supports patch
     * semantics. (urlMaps.patch)
     *
     * @param string $project Project ID for this request.
     * @param string $urlMap Name of the UrlMap resource to update.
     * @param Google_UrlMap $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function patch($project, $urlMap, Google_Service_Compute_UrlMap $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'urlMap' => $urlMap, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('patch', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Updates the entire content of the UrlMap resource. (urlMaps.update)
     *
     * @param string $project Project ID for this request.
     * @param string $urlMap Name of the UrlMap resource to update.
     * @param Google_UrlMap $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function update($project, $urlMap, Google_Service_Compute_UrlMap $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'urlMap' => $urlMap, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('update', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Runs static validation for the UrlMap. In particular, the tests of the
     * provided UrlMap will be run. Calling this method does NOT create the UrlMap.
     * (urlMaps.validate)
     *
     * @param string $project Project ID for this request.
     * @param string $urlMap Name of the UrlMap resource to be validated as.
     * @param Google_UrlMapsValidateRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_UrlMapsValidateResponse
     */
    public function validate($project, $urlMap, Google_Service_Compute_UrlMapsValidateRequest $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'urlMap' => $urlMap, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('validate', array($params), "VendorDuplicator\\Google_Service_Compute_UrlMapsValidateResponse");
    }
}
/**
 * The "urlMaps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $urlMaps = $computeService->urlMaps;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_UrlMaps_Resource', 'VendorDuplicator\\Google_Service_Compute_UrlMaps_Resource', \false);
/**
 * The "vpnTunnels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $vpnTunnels = $computeService->vpnTunnels;
 *  </code>
 * @internal
 */
class Google_Service_Compute_VpnTunnels_Resource extends Google_Service_Resource
{
    /**
     * Retrieves an aggregated list of VPN tunnels. (vpnTunnels.aggregatedList)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_VpnTunnelAggregatedList
     */
    public function aggregatedList($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('aggregatedList', array($params), "VendorDuplicator\\Google_Service_Compute_VpnTunnelAggregatedList");
    }
    /**
     * Deletes the specified VpnTunnel resource. (vpnTunnels.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $region The name of the region for this request.
     * @param string $vpnTunnel Name of the VpnTunnel resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function delete($project, $region, $vpnTunnel, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'vpnTunnel' => $vpnTunnel);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Returns the specified VpnTunnel resource. (vpnTunnels.get)
     *
     * @param string $project Project ID for this request.
     * @param string $region The name of the region for this request.
     * @param string $vpnTunnel Name of the VpnTunnel resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_VpnTunnel
     */
    public function get($project, $region, $vpnTunnel, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'vpnTunnel' => $vpnTunnel);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_VpnTunnel");
    }
    /**
     * Creates a VpnTunnel resource in the specified project and region using the
     * data included in the request. (vpnTunnels.insert)
     *
     * @param string $project Project ID for this request.
     * @param string $region The name of the region for this request.
     * @param Google_VpnTunnel $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function insert($project, $region, Google_Service_Compute_VpnTunnel $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves a list of VpnTunnel resources contained in the specified project
     * and region. (vpnTunnels.listVpnTunnels)
     *
     * @param string $project Project ID for this request.
     * @param string $region The name of the region for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_VpnTunnelList
     */
    public function listVpnTunnels($project, $region, $optParams = array())
    {
        $params = array('project' => $project, 'region' => $region);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_VpnTunnelList");
    }
}
/**
 * The "vpnTunnels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $vpnTunnels = $computeService->vpnTunnels;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_VpnTunnels_Resource', 'VendorDuplicator\\Google_Service_Compute_VpnTunnels_Resource', \false);
/**
 * The "zoneOperations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $zoneOperations = $computeService->zoneOperations;
 *  </code>
 * @internal
 */
class Google_Service_Compute_ZoneOperations_Resource extends Google_Service_Resource
{
    /**
     * Deletes the specified zone-specific Operations resource.
     * (zoneOperations.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $zone Name of the zone for this request.
     * @param string $operation Name of the Operations resource to delete.
     * @param array $optParams Optional parameters.
     */
    public function delete($project, $zone, $operation, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'operation' => $operation);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }
    /**
     * Retrieves the specified zone-specific Operations resource.
     * (zoneOperations.get)
     *
     * @param string $project Project ID for this request.
     * @param string $zone Name of the zone for this request.
     * @param string $operation Name of the Operations resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Operation
     */
    public function get($project, $zone, $operation, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'operation' => $operation);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_Operation");
    }
    /**
     * Retrieves a list of Operation resources contained within the specified zone.
     * (zoneOperations.listZoneOperations)
     *
     * @param string $project Project ID for this request.
     * @param string $zone Name of the zone for request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_OperationList
     */
    public function listZoneOperations($project, $zone, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_OperationList");
    }
}
/**
 * The "zoneOperations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $zoneOperations = $computeService->zoneOperations;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_ZoneOperations_Resource', 'VendorDuplicator\\Google_Service_Compute_ZoneOperations_Resource', \false);
/**
 * The "zones" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $zones = $computeService->zones;
 *  </code>
 * @internal
 */
class Google_Service_Compute_Zones_Resource extends Google_Service_Resource
{
    /**
     * Returns the specified zone resource. (zones.get)
     *
     * @param string $project Project ID for this request.
     * @param string $zone Name of the zone resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Compute_Zone
     */
    public function get($project, $zone, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Compute_Zone");
    }
    /**
     * Retrieves the list of zone resources available to the specified project.
     * (zones.listZones)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Sets a filter expression for filtering listed
     * resources, in the form filter={expression}. Your {expression} must be in the
     * format: field_name comparison_string literal_string.
     *
     * The field_name is the name of the field you want to compare. Only atomic
     * field types are supported (string, number, boolean). The comparison_string
     * must be either eq (equals) or ne (not equals). The literal_string is the
     * string value to filter to. The literal value must be valid for the type of
     * field you are filtering by (string, number, boolean). For string fields, the
     * literal value is interpreted as a regular expression using RE2 syntax. The
     * literal value must match the entire field.
     *
     * For example, to filter for instances whose name is not equal to example-
     * instance, you would use filter=name ne example-instance.
     *
     * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
     * also filter on nested fields. For example, you could filter on instances that
     * have set the scheduling.automaticRestart field to true. In particular, use
     * filtering on nested fields to take advantage of instance labels to organize
     * and filter results based on label values.
     *
     * The Beta API also supports filtering on multiple expressions by providing
     * each separate expression within parentheses. For example,
     * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
     * expressions are treated as AND expressions meaning that resources must match
     * all expressions to pass the filters.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * maxResults, Compute Engine returns a nextPageToken that can be used to get
     * the next page of results in subsequent list requests.
     * @opt_param string pageToken Specifies a page token to use. Set pageToken to
     * the nextPageToken returned by a previous list request to get the next page of
     * results.
     * @return Google_Service_Compute_ZoneList
     */
    public function listZones($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Compute_ZoneList");
    }
}
/**
 * The "zones" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $zones = $computeService->zones;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Compute_Zones_Resource', 'VendorDuplicator\\Google_Service_Compute_Zones_Resource', \false);
/** @internal */
class Google_Service_Compute_AccessConfig extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $kind;
    public $name;
    public $natIP;
    public $type;
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
    public function setNatIP($natIP)
    {
        $this->natIP = $natIP;
    }
    public function getNatIP()
    {
        return $this->natIP;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_AccessConfig', 'VendorDuplicator\\Google_Service_Compute_AccessConfig', \false);
/** @internal */
class Google_Service_Compute_Address extends Google_Collection
{
    protected $collection_key = 'users';
    protected $internal_gapi_mappings = array();
    public $address;
    public $creationTimestamp;
    public $description;
    public $id;
    public $kind;
    public $name;
    public $region;
    public $selfLink;
    public $status;
    public $users;
    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
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
    public function setRegion($region)
    {
        $this->region = $region;
    }
    public function getRegion()
    {
        return $this->region;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setUsers($users)
    {
        $this->users = $users;
    }
    public function getUsers()
    {
        return $this->users;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_Address', 'VendorDuplicator\\Google_Service_Compute_Address', \false);
/** @internal */
class Google_Service_Compute_AddressAggregatedList extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_AddressesScopedList';
    protected $itemsDataType = 'map';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_AddressAggregatedList', 'VendorDuplicator\\Google_Service_Compute_AddressAggregatedList', \false);
/** @internal */
class Google_Service_Compute_AddressList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_Address';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_AddressList', 'VendorDuplicator\\Google_Service_Compute_AddressList', \false);
/** @internal */
class Google_Service_Compute_AddressesScopedList extends Google_Collection
{
    protected $collection_key = 'addresses';
    protected $internal_gapi_mappings = array();
    protected $addressesType = 'VendorDuplicator\\Google_Service_Compute_Address';
    protected $addressesDataType = 'array';
    protected $warningType = 'VendorDuplicator\\Google_Service_Compute_AddressesScopedListWarning';
    protected $warningDataType = '';
    public function setAddresses($addresses)
    {
        $this->addresses = $addresses;
    }
    public function getAddresses()
    {
        return $this->addresses;
    }
    public function setWarning(Google_Service_Compute_AddressesScopedListWarning $warning)
    {
        $this->warning = $warning;
    }
    public function getWarning()
    {
        return $this->warning;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_AddressesScopedList', 'VendorDuplicator\\Google_Service_Compute_AddressesScopedList', \false);
/** @internal */
class Google_Service_Compute_AddressesScopedListWarning extends Google_Collection
{
    protected $collection_key = 'data';
    protected $internal_gapi_mappings = array();
    public $code;
    protected $dataType = 'VendorDuplicator\\Google_Service_Compute_AddressesScopedListWarningData';
    protected $dataDataType = 'array';
    public $message;
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_AddressesScopedListWarning', 'VendorDuplicator\\Google_Service_Compute_AddressesScopedListWarning', \false);
/** @internal */
class Google_Service_Compute_AddressesScopedListWarningData extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $key;
    public $value;
    public function setKey($key)
    {
        $this->key = $key;
    }
    public function getKey()
    {
        return $this->key;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_AddressesScopedListWarningData', 'VendorDuplicator\\Google_Service_Compute_AddressesScopedListWarningData', \false);
/** @internal */
class Google_Service_Compute_AttachedDisk extends Google_Collection
{
    protected $collection_key = 'licenses';
    protected $internal_gapi_mappings = array();
    public $autoDelete;
    public $boot;
    public $deviceName;
    public $index;
    protected $initializeParamsType = 'VendorDuplicator\\Google_Service_Compute_AttachedDiskInitializeParams';
    protected $initializeParamsDataType = '';
    public $interface;
    public $kind;
    public $licenses;
    public $mode;
    public $source;
    public $type;
    public function setAutoDelete($autoDelete)
    {
        $this->autoDelete = $autoDelete;
    }
    public function getAutoDelete()
    {
        return $this->autoDelete;
    }
    public function setBoot($boot)
    {
        $this->boot = $boot;
    }
    public function getBoot()
    {
        return $this->boot;
    }
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
    }
    public function getDeviceName()
    {
        return $this->deviceName;
    }
    public function setIndex($index)
    {
        $this->index = $index;
    }
    public function getIndex()
    {
        return $this->index;
    }
    public function setInitializeParams(Google_Service_Compute_AttachedDiskInitializeParams $initializeParams)
    {
        $this->initializeParams = $initializeParams;
    }
    public function getInitializeParams()
    {
        return $this->initializeParams;
    }
    public function setInterface($interface)
    {
        $this->interface = $interface;
    }
    public function getInterface()
    {
        return $this->interface;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setLicenses($licenses)
    {
        $this->licenses = $licenses;
    }
    public function getLicenses()
    {
        return $this->licenses;
    }
    public function setMode($mode)
    {
        $this->mode = $mode;
    }
    public function getMode()
    {
        return $this->mode;
    }
    public function setSource($source)
    {
        $this->source = $source;
    }
    public function getSource()
    {
        return $this->source;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_AttachedDisk', 'VendorDuplicator\\Google_Service_Compute_AttachedDisk', \false);
/** @internal */
class Google_Service_Compute_AttachedDiskInitializeParams extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $diskName;
    public $diskSizeGb;
    public $diskType;
    public $sourceImage;
    public function setDiskName($diskName)
    {
        $this->diskName = $diskName;
    }
    public function getDiskName()
    {
        return $this->diskName;
    }
    public function setDiskSizeGb($diskSizeGb)
    {
        $this->diskSizeGb = $diskSizeGb;
    }
    public function getDiskSizeGb()
    {
        return $this->diskSizeGb;
    }
    public function setDiskType($diskType)
    {
        $this->diskType = $diskType;
    }
    public function getDiskType()
    {
        return $this->diskType;
    }
    public function setSourceImage($sourceImage)
    {
        $this->sourceImage = $sourceImage;
    }
    public function getSourceImage()
    {
        return $this->sourceImage;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_AttachedDiskInitializeParams', 'VendorDuplicator\\Google_Service_Compute_AttachedDiskInitializeParams', \false);
/** @internal */
class Google_Service_Compute_Autoscaler extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $autoscalingPolicyType = 'VendorDuplicator\\Google_Service_Compute_AutoscalingPolicy';
    protected $autoscalingPolicyDataType = '';
    public $creationTimestamp;
    public $description;
    public $id;
    public $kind;
    public $name;
    public $selfLink;
    public $target;
    public $zone;
    public function setAutoscalingPolicy(Google_Service_Compute_AutoscalingPolicy $autoscalingPolicy)
    {
        $this->autoscalingPolicy = $autoscalingPolicy;
    }
    public function getAutoscalingPolicy()
    {
        return $this->autoscalingPolicy;
    }
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setTarget($target)
    {
        $this->target = $target;
    }
    public function getTarget()
    {
        return $this->target;
    }
    public function setZone($zone)
    {
        $this->zone = $zone;
    }
    public function getZone()
    {
        return $this->zone;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_Autoscaler', 'VendorDuplicator\\Google_Service_Compute_Autoscaler', \false);
/** @internal */
class Google_Service_Compute_AutoscalerAggregatedList extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_AutoscalersScopedList';
    protected $itemsDataType = 'map';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_AutoscalerAggregatedList', 'VendorDuplicator\\Google_Service_Compute_AutoscalerAggregatedList', \false);
/** @internal */
class Google_Service_Compute_AutoscalerList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_Autoscaler';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_AutoscalerList', 'VendorDuplicator\\Google_Service_Compute_AutoscalerList', \false);
/** @internal */
class Google_Service_Compute_AutoscalersScopedList extends Google_Collection
{
    protected $collection_key = 'autoscalers';
    protected $internal_gapi_mappings = array();
    protected $autoscalersType = 'VendorDuplicator\\Google_Service_Compute_Autoscaler';
    protected $autoscalersDataType = 'array';
    protected $warningType = 'VendorDuplicator\\Google_Service_Compute_AutoscalersScopedListWarning';
    protected $warningDataType = '';
    public function setAutoscalers($autoscalers)
    {
        $this->autoscalers = $autoscalers;
    }
    public function getAutoscalers()
    {
        return $this->autoscalers;
    }
    public function setWarning(Google_Service_Compute_AutoscalersScopedListWarning $warning)
    {
        $this->warning = $warning;
    }
    public function getWarning()
    {
        return $this->warning;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_AutoscalersScopedList', 'VendorDuplicator\\Google_Service_Compute_AutoscalersScopedList', \false);
/** @internal */
class Google_Service_Compute_AutoscalersScopedListWarning extends Google_Collection
{
    protected $collection_key = 'data';
    protected $internal_gapi_mappings = array();
    public $code;
    protected $dataType = 'VendorDuplicator\\Google_Service_Compute_AutoscalersScopedListWarningData';
    protected $dataDataType = 'array';
    public $message;
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_AutoscalersScopedListWarning', 'VendorDuplicator\\Google_Service_Compute_AutoscalersScopedListWarning', \false);
/** @internal */
class Google_Service_Compute_AutoscalersScopedListWarningData extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $key;
    public $value;
    public function setKey($key)
    {
        $this->key = $key;
    }
    public function getKey()
    {
        return $this->key;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_AutoscalersScopedListWarningData', 'VendorDuplicator\\Google_Service_Compute_AutoscalersScopedListWarningData', \false);
/** @internal */
class Google_Service_Compute_AutoscalingPolicy extends Google_Collection
{
    protected $collection_key = 'customMetricUtilizations';
    protected $internal_gapi_mappings = array();
    public $coolDownPeriodSec;
    protected $cpuUtilizationType = 'VendorDuplicator\\Google_Service_Compute_AutoscalingPolicyCpuUtilization';
    protected $cpuUtilizationDataType = '';
    protected $customMetricUtilizationsType = 'VendorDuplicator\\Google_Service_Compute_AutoscalingPolicyCustomMetricUtilization';
    protected $customMetricUtilizationsDataType = 'array';
    protected $loadBalancingUtilizationType = 'VendorDuplicator\\Google_Service_Compute_AutoscalingPolicyLoadBalancingUtilization';
    protected $loadBalancingUtilizationDataType = '';
    public $maxNumReplicas;
    public $minNumReplicas;
    public function setCoolDownPeriodSec($coolDownPeriodSec)
    {
        $this->coolDownPeriodSec = $coolDownPeriodSec;
    }
    public function getCoolDownPeriodSec()
    {
        return $this->coolDownPeriodSec;
    }
    public function setCpuUtilization(Google_Service_Compute_AutoscalingPolicyCpuUtilization $cpuUtilization)
    {
        $this->cpuUtilization = $cpuUtilization;
    }
    public function getCpuUtilization()
    {
        return $this->cpuUtilization;
    }
    public function setCustomMetricUtilizations($customMetricUtilizations)
    {
        $this->customMetricUtilizations = $customMetricUtilizations;
    }
    public function getCustomMetricUtilizations()
    {
        return $this->customMetricUtilizations;
    }
    public function setLoadBalancingUtilization(Google_Service_Compute_AutoscalingPolicyLoadBalancingUtilization $loadBalancingUtilization)
    {
        $this->loadBalancingUtilization = $loadBalancingUtilization;
    }
    public function getLoadBalancingUtilization()
    {
        return $this->loadBalancingUtilization;
    }
    public function setMaxNumReplicas($maxNumReplicas)
    {
        $this->maxNumReplicas = $maxNumReplicas;
    }
    public function getMaxNumReplicas()
    {
        return $this->maxNumReplicas;
    }
    public function setMinNumReplicas($minNumReplicas)
    {
        $this->minNumReplicas = $minNumReplicas;
    }
    public function getMinNumReplicas()
    {
        return $this->minNumReplicas;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_AutoscalingPolicy', 'VendorDuplicator\\Google_Service_Compute_AutoscalingPolicy', \false);
/** @internal */
class Google_Service_Compute_AutoscalingPolicyCpuUtilization extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $utilizationTarget;
    public function setUtilizationTarget($utilizationTarget)
    {
        $this->utilizationTarget = $utilizationTarget;
    }
    public function getUtilizationTarget()
    {
        return $this->utilizationTarget;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_AutoscalingPolicyCpuUtilization', 'VendorDuplicator\\Google_Service_Compute_AutoscalingPolicyCpuUtilization', \false);
/** @internal */
class Google_Service_Compute_AutoscalingPolicyCustomMetricUtilization extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $metric;
    public $utilizationTarget;
    public $utilizationTargetType;
    public function setMetric($metric)
    {
        $this->metric = $metric;
    }
    public function getMetric()
    {
        return $this->metric;
    }
    public function setUtilizationTarget($utilizationTarget)
    {
        $this->utilizationTarget = $utilizationTarget;
    }
    public function getUtilizationTarget()
    {
        return $this->utilizationTarget;
    }
    public function setUtilizationTargetType($utilizationTargetType)
    {
        $this->utilizationTargetType = $utilizationTargetType;
    }
    public function getUtilizationTargetType()
    {
        return $this->utilizationTargetType;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_AutoscalingPolicyCustomMetricUtilization', 'VendorDuplicator\\Google_Service_Compute_AutoscalingPolicyCustomMetricUtilization', \false);
/** @internal */
class Google_Service_Compute_AutoscalingPolicyLoadBalancingUtilization extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $utilizationTarget;
    public function setUtilizationTarget($utilizationTarget)
    {
        $this->utilizationTarget = $utilizationTarget;
    }
    public function getUtilizationTarget()
    {
        return $this->utilizationTarget;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_AutoscalingPolicyLoadBalancingUtilization', 'VendorDuplicator\\Google_Service_Compute_AutoscalingPolicyLoadBalancingUtilization', \false);
/** @internal */
class Google_Service_Compute_Backend extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $balancingMode;
    public $capacityScaler;
    public $description;
    public $group;
    public $maxRate;
    public $maxRatePerInstance;
    public $maxUtilization;
    public function setBalancingMode($balancingMode)
    {
        $this->balancingMode = $balancingMode;
    }
    public function getBalancingMode()
    {
        return $this->balancingMode;
    }
    public function setCapacityScaler($capacityScaler)
    {
        $this->capacityScaler = $capacityScaler;
    }
    public function getCapacityScaler()
    {
        return $this->capacityScaler;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setGroup($group)
    {
        $this->group = $group;
    }
    public function getGroup()
    {
        return $this->group;
    }
    public function setMaxRate($maxRate)
    {
        $this->maxRate = $maxRate;
    }
    public function getMaxRate()
    {
        return $this->maxRate;
    }
    public function setMaxRatePerInstance($maxRatePerInstance)
    {
        $this->maxRatePerInstance = $maxRatePerInstance;
    }
    public function getMaxRatePerInstance()
    {
        return $this->maxRatePerInstance;
    }
    public function setMaxUtilization($maxUtilization)
    {
        $this->maxUtilization = $maxUtilization;
    }
    public function getMaxUtilization()
    {
        return $this->maxUtilization;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_Backend', 'VendorDuplicator\\Google_Service_Compute_Backend', \false);
/** @internal */
class Google_Service_Compute_BackendService extends Google_Collection
{
    protected $collection_key = 'healthChecks';
    protected $internal_gapi_mappings = array();
    protected $backendsType = 'VendorDuplicator\\Google_Service_Compute_Backend';
    protected $backendsDataType = 'array';
    public $creationTimestamp;
    public $description;
    public $fingerprint;
    public $healthChecks;
    public $id;
    public $kind;
    public $name;
    public $port;
    public $portName;
    public $protocol;
    public $selfLink;
    public $timeoutSec;
    public function setBackends($backends)
    {
        $this->backends = $backends;
    }
    public function getBackends()
    {
        return $this->backends;
    }
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setFingerprint($fingerprint)
    {
        $this->fingerprint = $fingerprint;
    }
    public function getFingerprint()
    {
        return $this->fingerprint;
    }
    public function setHealthChecks($healthChecks)
    {
        $this->healthChecks = $healthChecks;
    }
    public function getHealthChecks()
    {
        return $this->healthChecks;
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
    public function setPort($port)
    {
        $this->port = $port;
    }
    public function getPort()
    {
        return $this->port;
    }
    public function setPortName($portName)
    {
        $this->portName = $portName;
    }
    public function getPortName()
    {
        return $this->portName;
    }
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
    }
    public function getProtocol()
    {
        return $this->protocol;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setTimeoutSec($timeoutSec)
    {
        $this->timeoutSec = $timeoutSec;
    }
    public function getTimeoutSec()
    {
        return $this->timeoutSec;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_BackendService', 'VendorDuplicator\\Google_Service_Compute_BackendService', \false);
/** @internal */
class Google_Service_Compute_BackendServiceGroupHealth extends Google_Collection
{
    protected $collection_key = 'healthStatus';
    protected $internal_gapi_mappings = array();
    protected $healthStatusType = 'VendorDuplicator\\Google_Service_Compute_HealthStatus';
    protected $healthStatusDataType = 'array';
    public $kind;
    public function setHealthStatus($healthStatus)
    {
        $this->healthStatus = $healthStatus;
    }
    public function getHealthStatus()
    {
        return $this->healthStatus;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_BackendServiceGroupHealth', 'VendorDuplicator\\Google_Service_Compute_BackendServiceGroupHealth', \false);
/** @internal */
class Google_Service_Compute_BackendServiceList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_BackendService';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_BackendServiceList', 'VendorDuplicator\\Google_Service_Compute_BackendServiceList', \false);
/** @internal */
class Google_Service_Compute_DeprecationStatus extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $deleted;
    public $deprecated;
    public $obsolete;
    public $replacement;
    public $state;
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }
    public function getDeleted()
    {
        return $this->deleted;
    }
    public function setDeprecated($deprecated)
    {
        $this->deprecated = $deprecated;
    }
    public function getDeprecated()
    {
        return $this->deprecated;
    }
    public function setObsolete($obsolete)
    {
        $this->obsolete = $obsolete;
    }
    public function getObsolete()
    {
        return $this->obsolete;
    }
    public function setReplacement($replacement)
    {
        $this->replacement = $replacement;
    }
    public function getReplacement()
    {
        return $this->replacement;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_DeprecationStatus', 'VendorDuplicator\\Google_Service_Compute_DeprecationStatus', \false);
/** @internal */
class Google_Service_Compute_Disk extends Google_Collection
{
    protected $collection_key = 'users';
    protected $internal_gapi_mappings = array();
    public $creationTimestamp;
    public $description;
    public $id;
    public $kind;
    public $lastAttachTimestamp;
    public $lastDetachTimestamp;
    public $licenses;
    public $name;
    public $options;
    public $selfLink;
    public $sizeGb;
    public $sourceImage;
    public $sourceImageId;
    public $sourceSnapshot;
    public $sourceSnapshotId;
    public $status;
    public $type;
    public $users;
    public $zone;
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
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
    public function setLastAttachTimestamp($lastAttachTimestamp)
    {
        $this->lastAttachTimestamp = $lastAttachTimestamp;
    }
    public function getLastAttachTimestamp()
    {
        return $this->lastAttachTimestamp;
    }
    public function setLastDetachTimestamp($lastDetachTimestamp)
    {
        $this->lastDetachTimestamp = $lastDetachTimestamp;
    }
    public function getLastDetachTimestamp()
    {
        return $this->lastDetachTimestamp;
    }
    public function setLicenses($licenses)
    {
        $this->licenses = $licenses;
    }
    public function getLicenses()
    {
        return $this->licenses;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setOptions($options)
    {
        $this->options = $options;
    }
    public function getOptions()
    {
        return $this->options;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setSizeGb($sizeGb)
    {
        $this->sizeGb = $sizeGb;
    }
    public function getSizeGb()
    {
        return $this->sizeGb;
    }
    public function setSourceImage($sourceImage)
    {
        $this->sourceImage = $sourceImage;
    }
    public function getSourceImage()
    {
        return $this->sourceImage;
    }
    public function setSourceImageId($sourceImageId)
    {
        $this->sourceImageId = $sourceImageId;
    }
    public function getSourceImageId()
    {
        return $this->sourceImageId;
    }
    public function setSourceSnapshot($sourceSnapshot)
    {
        $this->sourceSnapshot = $sourceSnapshot;
    }
    public function getSourceSnapshot()
    {
        return $this->sourceSnapshot;
    }
    public function setSourceSnapshotId($sourceSnapshotId)
    {
        $this->sourceSnapshotId = $sourceSnapshotId;
    }
    public function getSourceSnapshotId()
    {
        return $this->sourceSnapshotId;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setUsers($users)
    {
        $this->users = $users;
    }
    public function getUsers()
    {
        return $this->users;
    }
    public function setZone($zone)
    {
        $this->zone = $zone;
    }
    public function getZone()
    {
        return $this->zone;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_Disk', 'VendorDuplicator\\Google_Service_Compute_Disk', \false);
/** @internal */
class Google_Service_Compute_DiskAggregatedList extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_DisksScopedList';
    protected $itemsDataType = 'map';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_DiskAggregatedList', 'VendorDuplicator\\Google_Service_Compute_DiskAggregatedList', \false);
/** @internal */
class Google_Service_Compute_DiskList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_Disk';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_DiskList', 'VendorDuplicator\\Google_Service_Compute_DiskList', \false);
/** @internal */
class Google_Service_Compute_DiskMoveRequest extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $destinationZone;
    public $targetDisk;
    public function setDestinationZone($destinationZone)
    {
        $this->destinationZone = $destinationZone;
    }
    public function getDestinationZone()
    {
        return $this->destinationZone;
    }
    public function setTargetDisk($targetDisk)
    {
        $this->targetDisk = $targetDisk;
    }
    public function getTargetDisk()
    {
        return $this->targetDisk;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_DiskMoveRequest', 'VendorDuplicator\\Google_Service_Compute_DiskMoveRequest', \false);
/** @internal */
class Google_Service_Compute_DiskType extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $creationTimestamp;
    public $defaultDiskSizeGb;
    protected $deprecatedType = 'VendorDuplicator\\Google_Service_Compute_DeprecationStatus';
    protected $deprecatedDataType = '';
    public $description;
    public $id;
    public $kind;
    public $name;
    public $selfLink;
    public $validDiskSize;
    public $zone;
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDefaultDiskSizeGb($defaultDiskSizeGb)
    {
        $this->defaultDiskSizeGb = $defaultDiskSizeGb;
    }
    public function getDefaultDiskSizeGb()
    {
        return $this->defaultDiskSizeGb;
    }
    public function setDeprecated(Google_Service_Compute_DeprecationStatus $deprecated)
    {
        $this->deprecated = $deprecated;
    }
    public function getDeprecated()
    {
        return $this->deprecated;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setValidDiskSize($validDiskSize)
    {
        $this->validDiskSize = $validDiskSize;
    }
    public function getValidDiskSize()
    {
        return $this->validDiskSize;
    }
    public function setZone($zone)
    {
        $this->zone = $zone;
    }
    public function getZone()
    {
        return $this->zone;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_DiskType', 'VendorDuplicator\\Google_Service_Compute_DiskType', \false);
/** @internal */
class Google_Service_Compute_DiskTypeAggregatedList extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_DiskTypesScopedList';
    protected $itemsDataType = 'map';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_DiskTypeAggregatedList', 'VendorDuplicator\\Google_Service_Compute_DiskTypeAggregatedList', \false);
/** @internal */
class Google_Service_Compute_DiskTypeList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_DiskType';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_DiskTypeList', 'VendorDuplicator\\Google_Service_Compute_DiskTypeList', \false);
/** @internal */
class Google_Service_Compute_DiskTypesScopedList extends Google_Collection
{
    protected $collection_key = 'diskTypes';
    protected $internal_gapi_mappings = array();
    protected $diskTypesType = 'VendorDuplicator\\Google_Service_Compute_DiskType';
    protected $diskTypesDataType = 'array';
    protected $warningType = 'VendorDuplicator\\Google_Service_Compute_DiskTypesScopedListWarning';
    protected $warningDataType = '';
    public function setDiskTypes($diskTypes)
    {
        $this->diskTypes = $diskTypes;
    }
    public function getDiskTypes()
    {
        return $this->diskTypes;
    }
    public function setWarning(Google_Service_Compute_DiskTypesScopedListWarning $warning)
    {
        $this->warning = $warning;
    }
    public function getWarning()
    {
        return $this->warning;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_DiskTypesScopedList', 'VendorDuplicator\\Google_Service_Compute_DiskTypesScopedList', \false);
/** @internal */
class Google_Service_Compute_DiskTypesScopedListWarning extends Google_Collection
{
    protected $collection_key = 'data';
    protected $internal_gapi_mappings = array();
    public $code;
    protected $dataType = 'VendorDuplicator\\Google_Service_Compute_DiskTypesScopedListWarningData';
    protected $dataDataType = 'array';
    public $message;
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_DiskTypesScopedListWarning', 'VendorDuplicator\\Google_Service_Compute_DiskTypesScopedListWarning', \false);
/** @internal */
class Google_Service_Compute_DiskTypesScopedListWarningData extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $key;
    public $value;
    public function setKey($key)
    {
        $this->key = $key;
    }
    public function getKey()
    {
        return $this->key;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_DiskTypesScopedListWarningData', 'VendorDuplicator\\Google_Service_Compute_DiskTypesScopedListWarningData', \false);
/** @internal */
class Google_Service_Compute_DisksScopedList extends Google_Collection
{
    protected $collection_key = 'disks';
    protected $internal_gapi_mappings = array();
    protected $disksType = 'VendorDuplicator\\Google_Service_Compute_Disk';
    protected $disksDataType = 'array';
    protected $warningType = 'VendorDuplicator\\Google_Service_Compute_DisksScopedListWarning';
    protected $warningDataType = '';
    public function setDisks($disks)
    {
        $this->disks = $disks;
    }
    public function getDisks()
    {
        return $this->disks;
    }
    public function setWarning(Google_Service_Compute_DisksScopedListWarning $warning)
    {
        $this->warning = $warning;
    }
    public function getWarning()
    {
        return $this->warning;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_DisksScopedList', 'VendorDuplicator\\Google_Service_Compute_DisksScopedList', \false);
/** @internal */
class Google_Service_Compute_DisksScopedListWarning extends Google_Collection
{
    protected $collection_key = 'data';
    protected $internal_gapi_mappings = array();
    public $code;
    protected $dataType = 'VendorDuplicator\\Google_Service_Compute_DisksScopedListWarningData';
    protected $dataDataType = 'array';
    public $message;
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_DisksScopedListWarning', 'VendorDuplicator\\Google_Service_Compute_DisksScopedListWarning', \false);
/** @internal */
class Google_Service_Compute_DisksScopedListWarningData extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $key;
    public $value;
    public function setKey($key)
    {
        $this->key = $key;
    }
    public function getKey()
    {
        return $this->key;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_DisksScopedListWarningData', 'VendorDuplicator\\Google_Service_Compute_DisksScopedListWarningData', \false);
/** @internal */
class Google_Service_Compute_Firewall extends Google_Collection
{
    protected $collection_key = 'targetTags';
    protected $internal_gapi_mappings = array();
    protected $allowedType = 'VendorDuplicator\\Google_Service_Compute_FirewallAllowed';
    protected $allowedDataType = 'array';
    public $creationTimestamp;
    public $description;
    public $id;
    public $kind;
    public $name;
    public $network;
    public $selfLink;
    public $sourceRanges;
    public $sourceTags;
    public $targetTags;
    public function setAllowed($allowed)
    {
        $this->allowed = $allowed;
    }
    public function getAllowed()
    {
        return $this->allowed;
    }
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
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
    public function setNetwork($network)
    {
        $this->network = $network;
    }
    public function getNetwork()
    {
        return $this->network;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setSourceRanges($sourceRanges)
    {
        $this->sourceRanges = $sourceRanges;
    }
    public function getSourceRanges()
    {
        return $this->sourceRanges;
    }
    public function setSourceTags($sourceTags)
    {
        $this->sourceTags = $sourceTags;
    }
    public function getSourceTags()
    {
        return $this->sourceTags;
    }
    public function setTargetTags($targetTags)
    {
        $this->targetTags = $targetTags;
    }
    public function getTargetTags()
    {
        return $this->targetTags;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_Firewall', 'VendorDuplicator\\Google_Service_Compute_Firewall', \false);
/** @internal */
class Google_Service_Compute_FirewallAllowed extends Google_Collection
{
    protected $collection_key = 'ports';
    protected $internal_gapi_mappings = array("iPProtocol" => "IPProtocol");
    public $iPProtocol;
    public $ports;
    public function setIPProtocol($iPProtocol)
    {
        $this->iPProtocol = $iPProtocol;
    }
    public function getIPProtocol()
    {
        return $this->iPProtocol;
    }
    public function setPorts($ports)
    {
        $this->ports = $ports;
    }
    public function getPorts()
    {
        return $this->ports;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_FirewallAllowed', 'VendorDuplicator\\Google_Service_Compute_FirewallAllowed', \false);
/** @internal */
class Google_Service_Compute_FirewallList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_Firewall';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_FirewallList', 'VendorDuplicator\\Google_Service_Compute_FirewallList', \false);
/** @internal */
class Google_Service_Compute_ForwardingRule extends Google_Model
{
    protected $internal_gapi_mappings = array("iPAddress" => "IPAddress", "iPProtocol" => "IPProtocol");
    public $iPAddress;
    public $iPProtocol;
    public $creationTimestamp;
    public $description;
    public $id;
    public $kind;
    public $name;
    public $portRange;
    public $region;
    public $selfLink;
    public $target;
    public function setIPAddress($iPAddress)
    {
        $this->iPAddress = $iPAddress;
    }
    public function getIPAddress()
    {
        return $this->iPAddress;
    }
    public function setIPProtocol($iPProtocol)
    {
        $this->iPProtocol = $iPProtocol;
    }
    public function getIPProtocol()
    {
        return $this->iPProtocol;
    }
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
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
    public function setPortRange($portRange)
    {
        $this->portRange = $portRange;
    }
    public function getPortRange()
    {
        return $this->portRange;
    }
    public function setRegion($region)
    {
        $this->region = $region;
    }
    public function getRegion()
    {
        return $this->region;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setTarget($target)
    {
        $this->target = $target;
    }
    public function getTarget()
    {
        return $this->target;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_ForwardingRule', 'VendorDuplicator\\Google_Service_Compute_ForwardingRule', \false);
/** @internal */
class Google_Service_Compute_ForwardingRuleAggregatedList extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_ForwardingRulesScopedList';
    protected $itemsDataType = 'map';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_ForwardingRuleAggregatedList', 'VendorDuplicator\\Google_Service_Compute_ForwardingRuleAggregatedList', \false);
/** @internal */
class Google_Service_Compute_ForwardingRuleList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_ForwardingRule';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_ForwardingRuleList', 'VendorDuplicator\\Google_Service_Compute_ForwardingRuleList', \false);
/** @internal */
class Google_Service_Compute_ForwardingRulesScopedList extends Google_Collection
{
    protected $collection_key = 'forwardingRules';
    protected $internal_gapi_mappings = array();
    protected $forwardingRulesType = 'VendorDuplicator\\Google_Service_Compute_ForwardingRule';
    protected $forwardingRulesDataType = 'array';
    protected $warningType = 'VendorDuplicator\\Google_Service_Compute_ForwardingRulesScopedListWarning';
    protected $warningDataType = '';
    public function setForwardingRules($forwardingRules)
    {
        $this->forwardingRules = $forwardingRules;
    }
    public function getForwardingRules()
    {
        return $this->forwardingRules;
    }
    public function setWarning(Google_Service_Compute_ForwardingRulesScopedListWarning $warning)
    {
        $this->warning = $warning;
    }
    public function getWarning()
    {
        return $this->warning;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_ForwardingRulesScopedList', 'VendorDuplicator\\Google_Service_Compute_ForwardingRulesScopedList', \false);
/** @internal */
class Google_Service_Compute_ForwardingRulesScopedListWarning extends Google_Collection
{
    protected $collection_key = 'data';
    protected $internal_gapi_mappings = array();
    public $code;
    protected $dataType = 'VendorDuplicator\\Google_Service_Compute_ForwardingRulesScopedListWarningData';
    protected $dataDataType = 'array';
    public $message;
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_ForwardingRulesScopedListWarning', 'VendorDuplicator\\Google_Service_Compute_ForwardingRulesScopedListWarning', \false);
/** @internal */
class Google_Service_Compute_ForwardingRulesScopedListWarningData extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $key;
    public $value;
    public function setKey($key)
    {
        $this->key = $key;
    }
    public function getKey()
    {
        return $this->key;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_ForwardingRulesScopedListWarningData', 'VendorDuplicator\\Google_Service_Compute_ForwardingRulesScopedListWarningData', \false);
/** @internal */
class Google_Service_Compute_HealthCheckReference extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $healthCheck;
    public function setHealthCheck($healthCheck)
    {
        $this->healthCheck = $healthCheck;
    }
    public function getHealthCheck()
    {
        return $this->healthCheck;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_HealthCheckReference', 'VendorDuplicator\\Google_Service_Compute_HealthCheckReference', \false);
/** @internal */
class Google_Service_Compute_HealthStatus extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $healthState;
    public $instance;
    public $ipAddress;
    public $port;
    public function setHealthState($healthState)
    {
        $this->healthState = $healthState;
    }
    public function getHealthState()
    {
        return $this->healthState;
    }
    public function setInstance($instance)
    {
        $this->instance = $instance;
    }
    public function getInstance()
    {
        return $this->instance;
    }
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }
    public function getIpAddress()
    {
        return $this->ipAddress;
    }
    public function setPort($port)
    {
        $this->port = $port;
    }
    public function getPort()
    {
        return $this->port;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_HealthStatus', 'VendorDuplicator\\Google_Service_Compute_HealthStatus', \false);
/** @internal */
class Google_Service_Compute_HostRule extends Google_Collection
{
    protected $collection_key = 'hosts';
    protected $internal_gapi_mappings = array();
    public $description;
    public $hosts;
    public $pathMatcher;
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setHosts($hosts)
    {
        $this->hosts = $hosts;
    }
    public function getHosts()
    {
        return $this->hosts;
    }
    public function setPathMatcher($pathMatcher)
    {
        $this->pathMatcher = $pathMatcher;
    }
    public function getPathMatcher()
    {
        return $this->pathMatcher;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_HostRule', 'VendorDuplicator\\Google_Service_Compute_HostRule', \false);
/** @internal */
class Google_Service_Compute_HttpHealthCheck extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $checkIntervalSec;
    public $creationTimestamp;
    public $description;
    public $healthyThreshold;
    public $host;
    public $id;
    public $kind;
    public $name;
    public $port;
    public $requestPath;
    public $selfLink;
    public $timeoutSec;
    public $unhealthyThreshold;
    public function setCheckIntervalSec($checkIntervalSec)
    {
        $this->checkIntervalSec = $checkIntervalSec;
    }
    public function getCheckIntervalSec()
    {
        return $this->checkIntervalSec;
    }
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
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
    public function setPort($port)
    {
        $this->port = $port;
    }
    public function getPort()
    {
        return $this->port;
    }
    public function setRequestPath($requestPath)
    {
        $this->requestPath = $requestPath;
    }
    public function getRequestPath()
    {
        return $this->requestPath;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setTimeoutSec($timeoutSec)
    {
        $this->timeoutSec = $timeoutSec;
    }
    public function getTimeoutSec()
    {
        return $this->timeoutSec;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_HttpHealthCheck', 'VendorDuplicator\\Google_Service_Compute_HttpHealthCheck', \false);
/** @internal */
class Google_Service_Compute_HttpHealthCheckList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_HttpHealthCheck';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_HttpHealthCheckList', 'VendorDuplicator\\Google_Service_Compute_HttpHealthCheckList', \false);
/** @internal */
class Google_Service_Compute_HttpsHealthCheck extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $checkIntervalSec;
    public $creationTimestamp;
    public $description;
    public $healthyThreshold;
    public $host;
    public $id;
    public $kind;
    public $name;
    public $port;
    public $requestPath;
    public $selfLink;
    public $timeoutSec;
    public $unhealthyThreshold;
    public function setCheckIntervalSec($checkIntervalSec)
    {
        $this->checkIntervalSec = $checkIntervalSec;
    }
    public function getCheckIntervalSec()
    {
        return $this->checkIntervalSec;
    }
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
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
    public function setPort($port)
    {
        $this->port = $port;
    }
    public function getPort()
    {
        return $this->port;
    }
    public function setRequestPath($requestPath)
    {
        $this->requestPath = $requestPath;
    }
    public function getRequestPath()
    {
        return $this->requestPath;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setTimeoutSec($timeoutSec)
    {
        $this->timeoutSec = $timeoutSec;
    }
    public function getTimeoutSec()
    {
        return $this->timeoutSec;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_HttpsHealthCheck', 'VendorDuplicator\\Google_Service_Compute_HttpsHealthCheck', \false);
/** @internal */
class Google_Service_Compute_HttpsHealthCheckList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_HttpsHealthCheck';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_HttpsHealthCheckList', 'VendorDuplicator\\Google_Service_Compute_HttpsHealthCheckList', \false);
/** @internal */
class Google_Service_Compute_Image extends Google_Collection
{
    protected $collection_key = 'licenses';
    protected $internal_gapi_mappings = array();
    public $archiveSizeBytes;
    public $creationTimestamp;
    protected $deprecatedType = 'VendorDuplicator\\Google_Service_Compute_DeprecationStatus';
    protected $deprecatedDataType = '';
    public $description;
    public $diskSizeGb;
    public $id;
    public $kind;
    public $licenses;
    public $name;
    protected $rawDiskType = 'VendorDuplicator\\Google_Service_Compute_ImageRawDisk';
    protected $rawDiskDataType = '';
    public $selfLink;
    public $sourceDisk;
    public $sourceDiskId;
    public $sourceType;
    public $status;
    public function setArchiveSizeBytes($archiveSizeBytes)
    {
        $this->archiveSizeBytes = $archiveSizeBytes;
    }
    public function getArchiveSizeBytes()
    {
        return $this->archiveSizeBytes;
    }
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDeprecated(Google_Service_Compute_DeprecationStatus $deprecated)
    {
        $this->deprecated = $deprecated;
    }
    public function getDeprecated()
    {
        return $this->deprecated;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDiskSizeGb($diskSizeGb)
    {
        $this->diskSizeGb = $diskSizeGb;
    }
    public function getDiskSizeGb()
    {
        return $this->diskSizeGb;
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
    public function setLicenses($licenses)
    {
        $this->licenses = $licenses;
    }
    public function getLicenses()
    {
        return $this->licenses;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setRawDisk(Google_Service_Compute_ImageRawDisk $rawDisk)
    {
        $this->rawDisk = $rawDisk;
    }
    public function getRawDisk()
    {
        return $this->rawDisk;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setSourceDisk($sourceDisk)
    {
        $this->sourceDisk = $sourceDisk;
    }
    public function getSourceDisk()
    {
        return $this->sourceDisk;
    }
    public function setSourceDiskId($sourceDiskId)
    {
        $this->sourceDiskId = $sourceDiskId;
    }
    public function getSourceDiskId()
    {
        return $this->sourceDiskId;
    }
    public function setSourceType($sourceType)
    {
        $this->sourceType = $sourceType;
    }
    public function getSourceType()
    {
        return $this->sourceType;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_Image', 'VendorDuplicator\\Google_Service_Compute_Image', \false);
/** @internal */
class Google_Service_Compute_ImageList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_Image';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_ImageList', 'VendorDuplicator\\Google_Service_Compute_ImageList', \false);
/** @internal */
class Google_Service_Compute_ImageRawDisk extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $containerType;
    public $sha1Checksum;
    public $source;
    public function setContainerType($containerType)
    {
        $this->containerType = $containerType;
    }
    public function getContainerType()
    {
        return $this->containerType;
    }
    public function setSha1Checksum($sha1Checksum)
    {
        $this->sha1Checksum = $sha1Checksum;
    }
    public function getSha1Checksum()
    {
        return $this->sha1Checksum;
    }
    public function setSource($source)
    {
        $this->source = $source;
    }
    public function getSource()
    {
        return $this->source;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_ImageRawDisk', 'VendorDuplicator\\Google_Service_Compute_ImageRawDisk', \false);
/** @internal */
class Google_Service_Compute_Instance extends Google_Collection
{
    protected $collection_key = 'serviceAccounts';
    protected $internal_gapi_mappings = array();
    public $canIpForward;
    public $cpuPlatform;
    public $creationTimestamp;
    public $description;
    protected $disksType = 'VendorDuplicator\\Google_Service_Compute_AttachedDisk';
    protected $disksDataType = 'array';
    public $id;
    public $kind;
    public $machineType;
    protected $metadataType = 'VendorDuplicator\\Google_Service_Compute_Metadata';
    protected $metadataDataType = '';
    public $name;
    protected $networkInterfacesType = 'VendorDuplicator\\Google_Service_Compute_NetworkInterface';
    protected $networkInterfacesDataType = 'array';
    protected $schedulingType = 'VendorDuplicator\\Google_Service_Compute_Scheduling';
    protected $schedulingDataType = '';
    public $selfLink;
    protected $serviceAccountsType = 'VendorDuplicator\\Google_Service_Compute_ServiceAccount';
    protected $serviceAccountsDataType = 'array';
    public $status;
    public $statusMessage;
    protected $tagsType = 'VendorDuplicator\\Google_Service_Compute_Tags';
    protected $tagsDataType = '';
    public $zone;
    public function setCanIpForward($canIpForward)
    {
        $this->canIpForward = $canIpForward;
    }
    public function getCanIpForward()
    {
        return $this->canIpForward;
    }
    public function setCpuPlatform($cpuPlatform)
    {
        $this->cpuPlatform = $cpuPlatform;
    }
    public function getCpuPlatform()
    {
        return $this->cpuPlatform;
    }
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDisks($disks)
    {
        $this->disks = $disks;
    }
    public function getDisks()
    {
        return $this->disks;
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
    public function setMachineType($machineType)
    {
        $this->machineType = $machineType;
    }
    public function getMachineType()
    {
        return $this->machineType;
    }
    public function setMetadata(Google_Service_Compute_Metadata $metadata)
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
    public function setNetworkInterfaces($networkInterfaces)
    {
        $this->networkInterfaces = $networkInterfaces;
    }
    public function getNetworkInterfaces()
    {
        return $this->networkInterfaces;
    }
    public function setScheduling(Google_Service_Compute_Scheduling $scheduling)
    {
        $this->scheduling = $scheduling;
    }
    public function getScheduling()
    {
        return $this->scheduling;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setServiceAccounts($serviceAccounts)
    {
        $this->serviceAccounts = $serviceAccounts;
    }
    public function getServiceAccounts()
    {
        return $this->serviceAccounts;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatusMessage($statusMessage)
    {
        $this->statusMessage = $statusMessage;
    }
    public function getStatusMessage()
    {
        return $this->statusMessage;
    }
    public function setTags(Google_Service_Compute_Tags $tags)
    {
        $this->tags = $tags;
    }
    public function getTags()
    {
        return $this->tags;
    }
    public function setZone($zone)
    {
        $this->zone = $zone;
    }
    public function getZone()
    {
        return $this->zone;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_Instance', 'VendorDuplicator\\Google_Service_Compute_Instance', \false);
/** @internal */
class Google_Service_Compute_InstanceAggregatedList extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_InstancesScopedList';
    protected $itemsDataType = 'map';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceAggregatedList', 'VendorDuplicator\\Google_Service_Compute_InstanceAggregatedList', \false);
/** @internal */
class Google_Service_Compute_InstanceGroup extends Google_Collection
{
    protected $collection_key = 'namedPorts';
    protected $internal_gapi_mappings = array();
    public $creationTimestamp;
    public $description;
    public $fingerprint;
    public $id;
    public $kind;
    public $name;
    protected $namedPortsType = 'VendorDuplicator\\Google_Service_Compute_NamedPort';
    protected $namedPortsDataType = 'array';
    public $network;
    public $selfLink;
    public $size;
    public $subnetwork;
    public $zone;
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setFingerprint($fingerprint)
    {
        $this->fingerprint = $fingerprint;
    }
    public function getFingerprint()
    {
        return $this->fingerprint;
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
    public function setNamedPorts($namedPorts)
    {
        $this->namedPorts = $namedPorts;
    }
    public function getNamedPorts()
    {
        return $this->namedPorts;
    }
    public function setNetwork($network)
    {
        $this->network = $network;
    }
    public function getNetwork()
    {
        return $this->network;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setSize($size)
    {
        $this->size = $size;
    }
    public function getSize()
    {
        return $this->size;
    }
    public function setSubnetwork($subnetwork)
    {
        $this->subnetwork = $subnetwork;
    }
    public function getSubnetwork()
    {
        return $this->subnetwork;
    }
    public function setZone($zone)
    {
        $this->zone = $zone;
    }
    public function getZone()
    {
        return $this->zone;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroup', 'VendorDuplicator\\Google_Service_Compute_InstanceGroup', \false);
/** @internal */
class Google_Service_Compute_InstanceGroupAggregatedList extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_InstanceGroupsScopedList';
    protected $itemsDataType = 'map';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroupAggregatedList', 'VendorDuplicator\\Google_Service_Compute_InstanceGroupAggregatedList', \false);
/** @internal */
class Google_Service_Compute_InstanceGroupList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_InstanceGroup';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroupList', 'VendorDuplicator\\Google_Service_Compute_InstanceGroupList', \false);
/** @internal */
class Google_Service_Compute_InstanceGroupManager extends Google_Collection
{
    protected $collection_key = 'targetPools';
    protected $internal_gapi_mappings = array();
    public $baseInstanceName;
    public $creationTimestamp;
    protected $currentActionsType = 'VendorDuplicator\\Google_Service_Compute_InstanceGroupManagerActionsSummary';
    protected $currentActionsDataType = '';
    public $description;
    public $fingerprint;
    public $id;
    public $instanceGroup;
    public $instanceTemplate;
    public $kind;
    public $name;
    protected $namedPortsType = 'VendorDuplicator\\Google_Service_Compute_NamedPort';
    protected $namedPortsDataType = 'array';
    public $selfLink;
    public $targetPools;
    public $targetSize;
    public $zone;
    public function setBaseInstanceName($baseInstanceName)
    {
        $this->baseInstanceName = $baseInstanceName;
    }
    public function getBaseInstanceName()
    {
        return $this->baseInstanceName;
    }
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setCurrentActions(Google_Service_Compute_InstanceGroupManagerActionsSummary $currentActions)
    {
        $this->currentActions = $currentActions;
    }
    public function getCurrentActions()
    {
        return $this->currentActions;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setFingerprint($fingerprint)
    {
        $this->fingerprint = $fingerprint;
    }
    public function getFingerprint()
    {
        return $this->fingerprint;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setInstanceGroup($instanceGroup)
    {
        $this->instanceGroup = $instanceGroup;
    }
    public function getInstanceGroup()
    {
        return $this->instanceGroup;
    }
    public function setInstanceTemplate($instanceTemplate)
    {
        $this->instanceTemplate = $instanceTemplate;
    }
    public function getInstanceTemplate()
    {
        return $this->instanceTemplate;
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
    public function setNamedPorts($namedPorts)
    {
        $this->namedPorts = $namedPorts;
    }
    public function getNamedPorts()
    {
        return $this->namedPorts;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setTargetPools($targetPools)
    {
        $this->targetPools = $targetPools;
    }
    public function getTargetPools()
    {
        return $this->targetPools;
    }
    public function setTargetSize($targetSize)
    {
        $this->targetSize = $targetSize;
    }
    public function getTargetSize()
    {
        return $this->targetSize;
    }
    public function setZone($zone)
    {
        $this->zone = $zone;
    }
    public function getZone()
    {
        return $this->zone;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroupManager', 'VendorDuplicator\\Google_Service_Compute_InstanceGroupManager', \false);
/** @internal */
class Google_Service_Compute_InstanceGroupManagerActionsSummary extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $abandoning;
    public $creating;
    public $deleting;
    public $none;
    public $recreating;
    public $refreshing;
    public $restarting;
    public function setAbandoning($abandoning)
    {
        $this->abandoning = $abandoning;
    }
    public function getAbandoning()
    {
        return $this->abandoning;
    }
    public function setCreating($creating)
    {
        $this->creating = $creating;
    }
    public function getCreating()
    {
        return $this->creating;
    }
    public function setDeleting($deleting)
    {
        $this->deleting = $deleting;
    }
    public function getDeleting()
    {
        return $this->deleting;
    }
    public function setNone($none)
    {
        $this->none = $none;
    }
    public function getNone()
    {
        return $this->none;
    }
    public function setRecreating($recreating)
    {
        $this->recreating = $recreating;
    }
    public function getRecreating()
    {
        return $this->recreating;
    }
    public function setRefreshing($refreshing)
    {
        $this->refreshing = $refreshing;
    }
    public function getRefreshing()
    {
        return $this->refreshing;
    }
    public function setRestarting($restarting)
    {
        $this->restarting = $restarting;
    }
    public function getRestarting()
    {
        return $this->restarting;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroupManagerActionsSummary', 'VendorDuplicator\\Google_Service_Compute_InstanceGroupManagerActionsSummary', \false);
/** @internal */
class Google_Service_Compute_InstanceGroupManagerAggregatedList extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_InstanceGroupManagersScopedList';
    protected $itemsDataType = 'map';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroupManagerAggregatedList', 'VendorDuplicator\\Google_Service_Compute_InstanceGroupManagerAggregatedList', \false);
/** @internal */
class Google_Service_Compute_InstanceGroupManagerList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_InstanceGroupManager';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroupManagerList', 'VendorDuplicator\\Google_Service_Compute_InstanceGroupManagerList', \false);
/** @internal */
class Google_Service_Compute_InstanceGroupManagersAbandonInstancesRequest extends Google_Collection
{
    protected $collection_key = 'instances';
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
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroupManagersAbandonInstancesRequest', 'VendorDuplicator\\Google_Service_Compute_InstanceGroupManagersAbandonInstancesRequest', \false);
/** @internal */
class Google_Service_Compute_InstanceGroupManagersDeleteInstancesRequest extends Google_Collection
{
    protected $collection_key = 'instances';
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
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroupManagersDeleteInstancesRequest', 'VendorDuplicator\\Google_Service_Compute_InstanceGroupManagersDeleteInstancesRequest', \false);
/** @internal */
class Google_Service_Compute_InstanceGroupManagersListManagedInstancesResponse extends Google_Collection
{
    protected $collection_key = 'managedInstances';
    protected $internal_gapi_mappings = array();
    protected $managedInstancesType = 'VendorDuplicator\\Google_Service_Compute_ManagedInstance';
    protected $managedInstancesDataType = 'array';
    public function setManagedInstances($managedInstances)
    {
        $this->managedInstances = $managedInstances;
    }
    public function getManagedInstances()
    {
        return $this->managedInstances;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroupManagersListManagedInstancesResponse', 'VendorDuplicator\\Google_Service_Compute_InstanceGroupManagersListManagedInstancesResponse', \false);
/** @internal */
class Google_Service_Compute_InstanceGroupManagersRecreateInstancesRequest extends Google_Collection
{
    protected $collection_key = 'instances';
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
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroupManagersRecreateInstancesRequest', 'VendorDuplicator\\Google_Service_Compute_InstanceGroupManagersRecreateInstancesRequest', \false);
/** @internal */
class Google_Service_Compute_InstanceGroupManagersScopedList extends Google_Collection
{
    protected $collection_key = 'instanceGroupManagers';
    protected $internal_gapi_mappings = array();
    protected $instanceGroupManagersType = 'VendorDuplicator\\Google_Service_Compute_InstanceGroupManager';
    protected $instanceGroupManagersDataType = 'array';
    protected $warningType = 'VendorDuplicator\\Google_Service_Compute_InstanceGroupManagersScopedListWarning';
    protected $warningDataType = '';
    public function setInstanceGroupManagers($instanceGroupManagers)
    {
        $this->instanceGroupManagers = $instanceGroupManagers;
    }
    public function getInstanceGroupManagers()
    {
        return $this->instanceGroupManagers;
    }
    public function setWarning(Google_Service_Compute_InstanceGroupManagersScopedListWarning $warning)
    {
        $this->warning = $warning;
    }
    public function getWarning()
    {
        return $this->warning;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroupManagersScopedList', 'VendorDuplicator\\Google_Service_Compute_InstanceGroupManagersScopedList', \false);
/** @internal */
class Google_Service_Compute_InstanceGroupManagersScopedListWarning extends Google_Collection
{
    protected $collection_key = 'data';
    protected $internal_gapi_mappings = array();
    public $code;
    protected $dataType = 'VendorDuplicator\\Google_Service_Compute_InstanceGroupManagersScopedListWarningData';
    protected $dataDataType = 'array';
    public $message;
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroupManagersScopedListWarning', 'VendorDuplicator\\Google_Service_Compute_InstanceGroupManagersScopedListWarning', \false);
/** @internal */
class Google_Service_Compute_InstanceGroupManagersScopedListWarningData extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $key;
    public $value;
    public function setKey($key)
    {
        $this->key = $key;
    }
    public function getKey()
    {
        return $this->key;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroupManagersScopedListWarningData', 'VendorDuplicator\\Google_Service_Compute_InstanceGroupManagersScopedListWarningData', \false);
/** @internal */
class Google_Service_Compute_InstanceGroupManagersSetInstanceTemplateRequest extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $instanceTemplate;
    public function setInstanceTemplate($instanceTemplate)
    {
        $this->instanceTemplate = $instanceTemplate;
    }
    public function getInstanceTemplate()
    {
        return $this->instanceTemplate;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroupManagersSetInstanceTemplateRequest', 'VendorDuplicator\\Google_Service_Compute_InstanceGroupManagersSetInstanceTemplateRequest', \false);
/** @internal */
class Google_Service_Compute_InstanceGroupManagersSetTargetPoolsRequest extends Google_Collection
{
    protected $collection_key = 'targetPools';
    protected $internal_gapi_mappings = array();
    public $fingerprint;
    public $targetPools;
    public function setFingerprint($fingerprint)
    {
        $this->fingerprint = $fingerprint;
    }
    public function getFingerprint()
    {
        return $this->fingerprint;
    }
    public function setTargetPools($targetPools)
    {
        $this->targetPools = $targetPools;
    }
    public function getTargetPools()
    {
        return $this->targetPools;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroupManagersSetTargetPoolsRequest', 'VendorDuplicator\\Google_Service_Compute_InstanceGroupManagersSetTargetPoolsRequest', \false);
/** @internal */
class Google_Service_Compute_InstanceGroupsAddInstancesRequest extends Google_Collection
{
    protected $collection_key = 'instances';
    protected $internal_gapi_mappings = array();
    protected $instancesType = 'VendorDuplicator\\Google_Service_Compute_InstanceReference';
    protected $instancesDataType = 'array';
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
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroupsAddInstancesRequest', 'VendorDuplicator\\Google_Service_Compute_InstanceGroupsAddInstancesRequest', \false);
/** @internal */
class Google_Service_Compute_InstanceGroupsListInstances extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_InstanceWithNamedPorts';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroupsListInstances', 'VendorDuplicator\\Google_Service_Compute_InstanceGroupsListInstances', \false);
/** @internal */
class Google_Service_Compute_InstanceGroupsListInstancesRequest extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $instanceState;
    public function setInstanceState($instanceState)
    {
        $this->instanceState = $instanceState;
    }
    public function getInstanceState()
    {
        return $this->instanceState;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroupsListInstancesRequest', 'VendorDuplicator\\Google_Service_Compute_InstanceGroupsListInstancesRequest', \false);
/** @internal */
class Google_Service_Compute_InstanceGroupsRemoveInstancesRequest extends Google_Collection
{
    protected $collection_key = 'instances';
    protected $internal_gapi_mappings = array();
    protected $instancesType = 'VendorDuplicator\\Google_Service_Compute_InstanceReference';
    protected $instancesDataType = 'array';
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
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroupsRemoveInstancesRequest', 'VendorDuplicator\\Google_Service_Compute_InstanceGroupsRemoveInstancesRequest', \false);
/** @internal */
class Google_Service_Compute_InstanceGroupsScopedList extends Google_Collection
{
    protected $collection_key = 'instanceGroups';
    protected $internal_gapi_mappings = array();
    protected $instanceGroupsType = 'VendorDuplicator\\Google_Service_Compute_InstanceGroup';
    protected $instanceGroupsDataType = 'array';
    protected $warningType = 'VendorDuplicator\\Google_Service_Compute_InstanceGroupsScopedListWarning';
    protected $warningDataType = '';
    public function setInstanceGroups($instanceGroups)
    {
        $this->instanceGroups = $instanceGroups;
    }
    public function getInstanceGroups()
    {
        return $this->instanceGroups;
    }
    public function setWarning(Google_Service_Compute_InstanceGroupsScopedListWarning $warning)
    {
        $this->warning = $warning;
    }
    public function getWarning()
    {
        return $this->warning;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroupsScopedList', 'VendorDuplicator\\Google_Service_Compute_InstanceGroupsScopedList', \false);
/** @internal */
class Google_Service_Compute_InstanceGroupsScopedListWarning extends Google_Collection
{
    protected $collection_key = 'data';
    protected $internal_gapi_mappings = array();
    public $code;
    protected $dataType = 'VendorDuplicator\\Google_Service_Compute_InstanceGroupsScopedListWarningData';
    protected $dataDataType = 'array';
    public $message;
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroupsScopedListWarning', 'VendorDuplicator\\Google_Service_Compute_InstanceGroupsScopedListWarning', \false);
/** @internal */
class Google_Service_Compute_InstanceGroupsScopedListWarningData extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $key;
    public $value;
    public function setKey($key)
    {
        $this->key = $key;
    }
    public function getKey()
    {
        return $this->key;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroupsScopedListWarningData', 'VendorDuplicator\\Google_Service_Compute_InstanceGroupsScopedListWarningData', \false);
/** @internal */
class Google_Service_Compute_InstanceGroupsSetNamedPortsRequest extends Google_Collection
{
    protected $collection_key = 'namedPorts';
    protected $internal_gapi_mappings = array();
    public $fingerprint;
    protected $namedPortsType = 'VendorDuplicator\\Google_Service_Compute_NamedPort';
    protected $namedPortsDataType = 'array';
    public function setFingerprint($fingerprint)
    {
        $this->fingerprint = $fingerprint;
    }
    public function getFingerprint()
    {
        return $this->fingerprint;
    }
    public function setNamedPorts($namedPorts)
    {
        $this->namedPorts = $namedPorts;
    }
    public function getNamedPorts()
    {
        return $this->namedPorts;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceGroupsSetNamedPortsRequest', 'VendorDuplicator\\Google_Service_Compute_InstanceGroupsSetNamedPortsRequest', \false);
/** @internal */
class Google_Service_Compute_InstanceList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_Instance';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceList', 'VendorDuplicator\\Google_Service_Compute_InstanceList', \false);
/** @internal */
class Google_Service_Compute_InstanceMoveRequest extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $destinationZone;
    public $targetInstance;
    public function setDestinationZone($destinationZone)
    {
        $this->destinationZone = $destinationZone;
    }
    public function getDestinationZone()
    {
        return $this->destinationZone;
    }
    public function setTargetInstance($targetInstance)
    {
        $this->targetInstance = $targetInstance;
    }
    public function getTargetInstance()
    {
        return $this->targetInstance;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceMoveRequest', 'VendorDuplicator\\Google_Service_Compute_InstanceMoveRequest', \false);
/** @internal */
class Google_Service_Compute_InstanceProperties extends Google_Collection
{
    protected $collection_key = 'serviceAccounts';
    protected $internal_gapi_mappings = array();
    public $canIpForward;
    public $description;
    protected $disksType = 'VendorDuplicator\\Google_Service_Compute_AttachedDisk';
    protected $disksDataType = 'array';
    public $machineType;
    protected $metadataType = 'VendorDuplicator\\Google_Service_Compute_Metadata';
    protected $metadataDataType = '';
    protected $networkInterfacesType = 'VendorDuplicator\\Google_Service_Compute_NetworkInterface';
    protected $networkInterfacesDataType = 'array';
    protected $schedulingType = 'VendorDuplicator\\Google_Service_Compute_Scheduling';
    protected $schedulingDataType = '';
    protected $serviceAccountsType = 'VendorDuplicator\\Google_Service_Compute_ServiceAccount';
    protected $serviceAccountsDataType = 'array';
    protected $tagsType = 'VendorDuplicator\\Google_Service_Compute_Tags';
    protected $tagsDataType = '';
    public function setCanIpForward($canIpForward)
    {
        $this->canIpForward = $canIpForward;
    }
    public function getCanIpForward()
    {
        return $this->canIpForward;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDisks($disks)
    {
        $this->disks = $disks;
    }
    public function getDisks()
    {
        return $this->disks;
    }
    public function setMachineType($machineType)
    {
        $this->machineType = $machineType;
    }
    public function getMachineType()
    {
        return $this->machineType;
    }
    public function setMetadata(Google_Service_Compute_Metadata $metadata)
    {
        $this->metadata = $metadata;
    }
    public function getMetadata()
    {
        return $this->metadata;
    }
    public function setNetworkInterfaces($networkInterfaces)
    {
        $this->networkInterfaces = $networkInterfaces;
    }
    public function getNetworkInterfaces()
    {
        return $this->networkInterfaces;
    }
    public function setScheduling(Google_Service_Compute_Scheduling $scheduling)
    {
        $this->scheduling = $scheduling;
    }
    public function getScheduling()
    {
        return $this->scheduling;
    }
    public function setServiceAccounts($serviceAccounts)
    {
        $this->serviceAccounts = $serviceAccounts;
    }
    public function getServiceAccounts()
    {
        return $this->serviceAccounts;
    }
    public function setTags(Google_Service_Compute_Tags $tags)
    {
        $this->tags = $tags;
    }
    public function getTags()
    {
        return $this->tags;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceProperties', 'VendorDuplicator\\Google_Service_Compute_InstanceProperties', \false);
/** @internal */
class Google_Service_Compute_InstanceReference extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $instance;
    public function setInstance($instance)
    {
        $this->instance = $instance;
    }
    public function getInstance()
    {
        return $this->instance;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceReference', 'VendorDuplicator\\Google_Service_Compute_InstanceReference', \false);
/** @internal */
class Google_Service_Compute_InstanceTemplate extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $creationTimestamp;
    public $description;
    public $id;
    public $kind;
    public $name;
    protected $propertiesType = 'VendorDuplicator\\Google_Service_Compute_InstanceProperties';
    protected $propertiesDataType = '';
    public $selfLink;
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
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
    public function setProperties(Google_Service_Compute_InstanceProperties $properties)
    {
        $this->properties = $properties;
    }
    public function getProperties()
    {
        return $this->properties;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceTemplate', 'VendorDuplicator\\Google_Service_Compute_InstanceTemplate', \false);
/** @internal */
class Google_Service_Compute_InstanceTemplateList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_InstanceTemplate';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceTemplateList', 'VendorDuplicator\\Google_Service_Compute_InstanceTemplateList', \false);
/** @internal */
class Google_Service_Compute_InstanceWithNamedPorts extends Google_Collection
{
    protected $collection_key = 'namedPorts';
    protected $internal_gapi_mappings = array();
    public $instance;
    protected $namedPortsType = 'VendorDuplicator\\Google_Service_Compute_NamedPort';
    protected $namedPortsDataType = 'array';
    public $status;
    public function setInstance($instance)
    {
        $this->instance = $instance;
    }
    public function getInstance()
    {
        return $this->instance;
    }
    public function setNamedPorts($namedPorts)
    {
        $this->namedPorts = $namedPorts;
    }
    public function getNamedPorts()
    {
        return $this->namedPorts;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_InstanceWithNamedPorts', 'VendorDuplicator\\Google_Service_Compute_InstanceWithNamedPorts', \false);
/** @internal */
class Google_Service_Compute_InstancesScopedList extends Google_Collection
{
    protected $collection_key = 'instances';
    protected $internal_gapi_mappings = array();
    protected $instancesType = 'VendorDuplicator\\Google_Service_Compute_Instance';
    protected $instancesDataType = 'array';
    protected $warningType = 'VendorDuplicator\\Google_Service_Compute_InstancesScopedListWarning';
    protected $warningDataType = '';
    public function setInstances($instances)
    {
        $this->instances = $instances;
    }
    public function getInstances()
    {
        return $this->instances;
    }
    public function setWarning(Google_Service_Compute_InstancesScopedListWarning $warning)
    {
        $this->warning = $warning;
    }
    public function getWarning()
    {
        return $this->warning;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstancesScopedList', 'VendorDuplicator\\Google_Service_Compute_InstancesScopedList', \false);
/** @internal */
class Google_Service_Compute_InstancesScopedListWarning extends Google_Collection
{
    protected $collection_key = 'data';
    protected $internal_gapi_mappings = array();
    public $code;
    protected $dataType = 'VendorDuplicator\\Google_Service_Compute_InstancesScopedListWarningData';
    protected $dataDataType = 'array';
    public $message;
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_InstancesScopedListWarning', 'VendorDuplicator\\Google_Service_Compute_InstancesScopedListWarning', \false);
/** @internal */
class Google_Service_Compute_InstancesScopedListWarningData extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $key;
    public $value;
    public function setKey($key)
    {
        $this->key = $key;
    }
    public function getKey()
    {
        return $this->key;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstancesScopedListWarningData', 'VendorDuplicator\\Google_Service_Compute_InstancesScopedListWarningData', \false);
/** @internal */
class Google_Service_Compute_InstancesSetMachineTypeRequest extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $machineType;
    public function setMachineType($machineType)
    {
        $this->machineType = $machineType;
    }
    public function getMachineType()
    {
        return $this->machineType;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_InstancesSetMachineTypeRequest', 'VendorDuplicator\\Google_Service_Compute_InstancesSetMachineTypeRequest', \false);
/** @internal */
class Google_Service_Compute_License extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $chargesUseFee;
    public $kind;
    public $name;
    public $selfLink;
    public function setChargesUseFee($chargesUseFee)
    {
        $this->chargesUseFee = $chargesUseFee;
    }
    public function getChargesUseFee()
    {
        return $this->chargesUseFee;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_License', 'VendorDuplicator\\Google_Service_Compute_License', \false);
/** @internal */
class Google_Service_Compute_MachineType extends Google_Collection
{
    protected $collection_key = 'scratchDisks';
    protected $internal_gapi_mappings = array();
    public $creationTimestamp;
    protected $deprecatedType = 'VendorDuplicator\\Google_Service_Compute_DeprecationStatus';
    protected $deprecatedDataType = '';
    public $description;
    public $guestCpus;
    public $id;
    public $imageSpaceGb;
    public $kind;
    public $maximumPersistentDisks;
    public $maximumPersistentDisksSizeGb;
    public $memoryMb;
    public $name;
    protected $scratchDisksType = 'VendorDuplicator\\Google_Service_Compute_MachineTypeScratchDisks';
    protected $scratchDisksDataType = 'array';
    public $selfLink;
    public $zone;
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDeprecated(Google_Service_Compute_DeprecationStatus $deprecated)
    {
        $this->deprecated = $deprecated;
    }
    public function getDeprecated()
    {
        return $this->deprecated;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setGuestCpus($guestCpus)
    {
        $this->guestCpus = $guestCpus;
    }
    public function getGuestCpus()
    {
        return $this->guestCpus;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setImageSpaceGb($imageSpaceGb)
    {
        $this->imageSpaceGb = $imageSpaceGb;
    }
    public function getImageSpaceGb()
    {
        return $this->imageSpaceGb;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setMaximumPersistentDisks($maximumPersistentDisks)
    {
        $this->maximumPersistentDisks = $maximumPersistentDisks;
    }
    public function getMaximumPersistentDisks()
    {
        return $this->maximumPersistentDisks;
    }
    public function setMaximumPersistentDisksSizeGb($maximumPersistentDisksSizeGb)
    {
        $this->maximumPersistentDisksSizeGb = $maximumPersistentDisksSizeGb;
    }
    public function getMaximumPersistentDisksSizeGb()
    {
        return $this->maximumPersistentDisksSizeGb;
    }
    public function setMemoryMb($memoryMb)
    {
        $this->memoryMb = $memoryMb;
    }
    public function getMemoryMb()
    {
        return $this->memoryMb;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setScratchDisks($scratchDisks)
    {
        $this->scratchDisks = $scratchDisks;
    }
    public function getScratchDisks()
    {
        return $this->scratchDisks;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setZone($zone)
    {
        $this->zone = $zone;
    }
    public function getZone()
    {
        return $this->zone;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_MachineType', 'VendorDuplicator\\Google_Service_Compute_MachineType', \false);
/** @internal */
class Google_Service_Compute_MachineTypeAggregatedList extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_MachineTypesScopedList';
    protected $itemsDataType = 'map';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_MachineTypeAggregatedList', 'VendorDuplicator\\Google_Service_Compute_MachineTypeAggregatedList', \false);
/** @internal */
class Google_Service_Compute_MachineTypeList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_MachineType';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_MachineTypeList', 'VendorDuplicator\\Google_Service_Compute_MachineTypeList', \false);
/** @internal */
class Google_Service_Compute_MachineTypeScratchDisks extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $diskGb;
    public function setDiskGb($diskGb)
    {
        $this->diskGb = $diskGb;
    }
    public function getDiskGb()
    {
        return $this->diskGb;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_MachineTypeScratchDisks', 'VendorDuplicator\\Google_Service_Compute_MachineTypeScratchDisks', \false);
/** @internal */
class Google_Service_Compute_MachineTypesScopedList extends Google_Collection
{
    protected $collection_key = 'machineTypes';
    protected $internal_gapi_mappings = array();
    protected $machineTypesType = 'VendorDuplicator\\Google_Service_Compute_MachineType';
    protected $machineTypesDataType = 'array';
    protected $warningType = 'VendorDuplicator\\Google_Service_Compute_MachineTypesScopedListWarning';
    protected $warningDataType = '';
    public function setMachineTypes($machineTypes)
    {
        $this->machineTypes = $machineTypes;
    }
    public function getMachineTypes()
    {
        return $this->machineTypes;
    }
    public function setWarning(Google_Service_Compute_MachineTypesScopedListWarning $warning)
    {
        $this->warning = $warning;
    }
    public function getWarning()
    {
        return $this->warning;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_MachineTypesScopedList', 'VendorDuplicator\\Google_Service_Compute_MachineTypesScopedList', \false);
/** @internal */
class Google_Service_Compute_MachineTypesScopedListWarning extends Google_Collection
{
    protected $collection_key = 'data';
    protected $internal_gapi_mappings = array();
    public $code;
    protected $dataType = 'VendorDuplicator\\Google_Service_Compute_MachineTypesScopedListWarningData';
    protected $dataDataType = 'array';
    public $message;
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_MachineTypesScopedListWarning', 'VendorDuplicator\\Google_Service_Compute_MachineTypesScopedListWarning', \false);
/** @internal */
class Google_Service_Compute_MachineTypesScopedListWarningData extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $key;
    public $value;
    public function setKey($key)
    {
        $this->key = $key;
    }
    public function getKey()
    {
        return $this->key;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_MachineTypesScopedListWarningData', 'VendorDuplicator\\Google_Service_Compute_MachineTypesScopedListWarningData', \false);
/** @internal */
class Google_Service_Compute_ManagedInstance extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $currentAction;
    public $id;
    public $instance;
    public $instanceStatus;
    protected $lastAttemptType = 'VendorDuplicator\\Google_Service_Compute_ManagedInstanceLastAttempt';
    protected $lastAttemptDataType = '';
    public function setCurrentAction($currentAction)
    {
        $this->currentAction = $currentAction;
    }
    public function getCurrentAction()
    {
        return $this->currentAction;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setInstance($instance)
    {
        $this->instance = $instance;
    }
    public function getInstance()
    {
        return $this->instance;
    }
    public function setInstanceStatus($instanceStatus)
    {
        $this->instanceStatus = $instanceStatus;
    }
    public function getInstanceStatus()
    {
        return $this->instanceStatus;
    }
    public function setLastAttempt(Google_Service_Compute_ManagedInstanceLastAttempt $lastAttempt)
    {
        $this->lastAttempt = $lastAttempt;
    }
    public function getLastAttempt()
    {
        return $this->lastAttempt;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_ManagedInstance', 'VendorDuplicator\\Google_Service_Compute_ManagedInstance', \false);
/** @internal */
class Google_Service_Compute_ManagedInstanceLastAttempt extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $errorsType = 'VendorDuplicator\\Google_Service_Compute_ManagedInstanceLastAttemptErrors';
    protected $errorsDataType = '';
    public function setErrors(Google_Service_Compute_ManagedInstanceLastAttemptErrors $errors)
    {
        $this->errors = $errors;
    }
    public function getErrors()
    {
        return $this->errors;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_ManagedInstanceLastAttempt', 'VendorDuplicator\\Google_Service_Compute_ManagedInstanceLastAttempt', \false);
/** @internal */
class Google_Service_Compute_ManagedInstanceLastAttemptErrors extends Google_Collection
{
    protected $collection_key = 'errors';
    protected $internal_gapi_mappings = array();
    protected $errorsType = 'VendorDuplicator\\Google_Service_Compute_ManagedInstanceLastAttemptErrorsErrors';
    protected $errorsDataType = 'array';
    public function setErrors($errors)
    {
        $this->errors = $errors;
    }
    public function getErrors()
    {
        return $this->errors;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_ManagedInstanceLastAttemptErrors', 'VendorDuplicator\\Google_Service_Compute_ManagedInstanceLastAttemptErrors', \false);
/** @internal */
class Google_Service_Compute_ManagedInstanceLastAttemptErrorsErrors extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $code;
    public $location;
    public $message;
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setLocation($location)
    {
        $this->location = $location;
    }
    public function getLocation()
    {
        return $this->location;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_ManagedInstanceLastAttemptErrorsErrors', 'VendorDuplicator\\Google_Service_Compute_ManagedInstanceLastAttemptErrorsErrors', \false);
/** @internal */
class Google_Service_Compute_Metadata extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $fingerprint;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_MetadataItems';
    protected $itemsDataType = 'array';
    public $kind;
    public function setFingerprint($fingerprint)
    {
        $this->fingerprint = $fingerprint;
    }
    public function getFingerprint()
    {
        return $this->fingerprint;
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
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_Metadata', 'VendorDuplicator\\Google_Service_Compute_Metadata', \false);
/** @internal */
class Google_Service_Compute_MetadataItems extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $key;
    public $value;
    public function setKey($key)
    {
        $this->key = $key;
    }
    public function getKey()
    {
        return $this->key;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_MetadataItems', 'VendorDuplicator\\Google_Service_Compute_MetadataItems', \false);
/** @internal */
class Google_Service_Compute_NamedPort extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $name;
    public $port;
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setPort($port)
    {
        $this->port = $port;
    }
    public function getPort()
    {
        return $this->port;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_NamedPort', 'VendorDuplicator\\Google_Service_Compute_NamedPort', \false);
/** @internal */
class Google_Service_Compute_Network extends Google_Collection
{
    protected $collection_key = 'subnetworks';
    protected $internal_gapi_mappings = array("iPv4Range" => "IPv4Range");
    public $iPv4Range;
    public $autoCreateSubnetworks;
    public $creationTimestamp;
    public $description;
    public $gatewayIPv4;
    public $id;
    public $kind;
    public $name;
    public $selfLink;
    public $subnetworks;
    public function setIPv4Range($iPv4Range)
    {
        $this->iPv4Range = $iPv4Range;
    }
    public function getIPv4Range()
    {
        return $this->iPv4Range;
    }
    public function setAutoCreateSubnetworks($autoCreateSubnetworks)
    {
        $this->autoCreateSubnetworks = $autoCreateSubnetworks;
    }
    public function getAutoCreateSubnetworks()
    {
        return $this->autoCreateSubnetworks;
    }
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setGatewayIPv4($gatewayIPv4)
    {
        $this->gatewayIPv4 = $gatewayIPv4;
    }
    public function getGatewayIPv4()
    {
        return $this->gatewayIPv4;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setSubnetworks($subnetworks)
    {
        $this->subnetworks = $subnetworks;
    }
    public function getSubnetworks()
    {
        return $this->subnetworks;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_Network', 'VendorDuplicator\\Google_Service_Compute_Network', \false);
/** @internal */
class Google_Service_Compute_NetworkInterface extends Google_Collection
{
    protected $collection_key = 'accessConfigs';
    protected $internal_gapi_mappings = array();
    protected $accessConfigsType = 'VendorDuplicator\\Google_Service_Compute_AccessConfig';
    protected $accessConfigsDataType = 'array';
    public $name;
    public $network;
    public $networkIP;
    public $subnetwork;
    public function setAccessConfigs($accessConfigs)
    {
        $this->accessConfigs = $accessConfigs;
    }
    public function getAccessConfigs()
    {
        return $this->accessConfigs;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setNetwork($network)
    {
        $this->network = $network;
    }
    public function getNetwork()
    {
        return $this->network;
    }
    public function setNetworkIP($networkIP)
    {
        $this->networkIP = $networkIP;
    }
    public function getNetworkIP()
    {
        return $this->networkIP;
    }
    public function setSubnetwork($subnetwork)
    {
        $this->subnetwork = $subnetwork;
    }
    public function getSubnetwork()
    {
        return $this->subnetwork;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_NetworkInterface', 'VendorDuplicator\\Google_Service_Compute_NetworkInterface', \false);
/** @internal */
class Google_Service_Compute_NetworkList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_Network';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_NetworkList', 'VendorDuplicator\\Google_Service_Compute_NetworkList', \false);
/** @internal */
class Google_Service_Compute_Operation extends Google_Collection
{
    protected $collection_key = 'warnings';
    protected $internal_gapi_mappings = array();
    public $clientOperationId;
    public $creationTimestamp;
    public $description;
    public $endTime;
    protected $errorType = 'VendorDuplicator\\Google_Service_Compute_OperationError';
    protected $errorDataType = '';
    public $httpErrorMessage;
    public $httpErrorStatusCode;
    public $id;
    public $insertTime;
    public $kind;
    public $name;
    public $operationType;
    public $progress;
    public $region;
    public $selfLink;
    public $startTime;
    public $status;
    public $statusMessage;
    public $targetId;
    public $targetLink;
    public $user;
    protected $warningsType = 'VendorDuplicator\\Google_Service_Compute_OperationWarnings';
    protected $warningsDataType = 'array';
    public $zone;
    public function setClientOperationId($clientOperationId)
    {
        $this->clientOperationId = $clientOperationId;
    }
    public function getClientOperationId()
    {
        return $this->clientOperationId;
    }
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }
    public function getEndTime()
    {
        return $this->endTime;
    }
    public function setError(Google_Service_Compute_OperationError $error)
    {
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
    public function setHttpErrorMessage($httpErrorMessage)
    {
        $this->httpErrorMessage = $httpErrorMessage;
    }
    public function getHttpErrorMessage()
    {
        return $this->httpErrorMessage;
    }
    public function setHttpErrorStatusCode($httpErrorStatusCode)
    {
        $this->httpErrorStatusCode = $httpErrorStatusCode;
    }
    public function getHttpErrorStatusCode()
    {
        return $this->httpErrorStatusCode;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setInsertTime($insertTime)
    {
        $this->insertTime = $insertTime;
    }
    public function getInsertTime()
    {
        return $this->insertTime;
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
    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;
    }
    public function getOperationType()
    {
        return $this->operationType;
    }
    public function setProgress($progress)
    {
        $this->progress = $progress;
    }
    public function getProgress()
    {
        return $this->progress;
    }
    public function setRegion($region)
    {
        $this->region = $region;
    }
    public function getRegion()
    {
        return $this->region;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }
    public function getStartTime()
    {
        return $this->startTime;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatusMessage($statusMessage)
    {
        $this->statusMessage = $statusMessage;
    }
    public function getStatusMessage()
    {
        return $this->statusMessage;
    }
    public function setTargetId($targetId)
    {
        $this->targetId = $targetId;
    }
    public function getTargetId()
    {
        return $this->targetId;
    }
    public function setTargetLink($targetLink)
    {
        $this->targetLink = $targetLink;
    }
    public function getTargetLink()
    {
        return $this->targetLink;
    }
    public function setUser($user)
    {
        $this->user = $user;
    }
    public function getUser()
    {
        return $this->user;
    }
    public function setWarnings($warnings)
    {
        $this->warnings = $warnings;
    }
    public function getWarnings()
    {
        return $this->warnings;
    }
    public function setZone($zone)
    {
        $this->zone = $zone;
    }
    public function getZone()
    {
        return $this->zone;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_Operation', 'VendorDuplicator\\Google_Service_Compute_Operation', \false);
/** @internal */
class Google_Service_Compute_OperationAggregatedList extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_OperationsScopedList';
    protected $itemsDataType = 'map';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_OperationAggregatedList', 'VendorDuplicator\\Google_Service_Compute_OperationAggregatedList', \false);
/** @internal */
class Google_Service_Compute_OperationError extends Google_Collection
{
    protected $collection_key = 'errors';
    protected $internal_gapi_mappings = array();
    protected $errorsType = 'VendorDuplicator\\Google_Service_Compute_OperationErrorErrors';
    protected $errorsDataType = 'array';
    public function setErrors($errors)
    {
        $this->errors = $errors;
    }
    public function getErrors()
    {
        return $this->errors;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_OperationError', 'VendorDuplicator\\Google_Service_Compute_OperationError', \false);
/** @internal */
class Google_Service_Compute_OperationErrorErrors extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $code;
    public $location;
    public $message;
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setLocation($location)
    {
        $this->location = $location;
    }
    public function getLocation()
    {
        return $this->location;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_OperationErrorErrors', 'VendorDuplicator\\Google_Service_Compute_OperationErrorErrors', \false);
/** @internal */
class Google_Service_Compute_OperationList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_Operation';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_OperationList', 'VendorDuplicator\\Google_Service_Compute_OperationList', \false);
/** @internal */
class Google_Service_Compute_OperationWarnings extends Google_Collection
{
    protected $collection_key = 'data';
    protected $internal_gapi_mappings = array();
    public $code;
    protected $dataType = 'VendorDuplicator\\Google_Service_Compute_OperationWarningsData';
    protected $dataDataType = 'array';
    public $message;
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_OperationWarnings', 'VendorDuplicator\\Google_Service_Compute_OperationWarnings', \false);
/** @internal */
class Google_Service_Compute_OperationWarningsData extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $key;
    public $value;
    public function setKey($key)
    {
        $this->key = $key;
    }
    public function getKey()
    {
        return $this->key;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_OperationWarningsData', 'VendorDuplicator\\Google_Service_Compute_OperationWarningsData', \false);
/** @internal */
class Google_Service_Compute_OperationsScopedList extends Google_Collection
{
    protected $collection_key = 'operations';
    protected $internal_gapi_mappings = array();
    protected $operationsType = 'VendorDuplicator\\Google_Service_Compute_Operation';
    protected $operationsDataType = 'array';
    protected $warningType = 'VendorDuplicator\\Google_Service_Compute_OperationsScopedListWarning';
    protected $warningDataType = '';
    public function setOperations($operations)
    {
        $this->operations = $operations;
    }
    public function getOperations()
    {
        return $this->operations;
    }
    public function setWarning(Google_Service_Compute_OperationsScopedListWarning $warning)
    {
        $this->warning = $warning;
    }
    public function getWarning()
    {
        return $this->warning;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_OperationsScopedList', 'VendorDuplicator\\Google_Service_Compute_OperationsScopedList', \false);
/** @internal */
class Google_Service_Compute_OperationsScopedListWarning extends Google_Collection
{
    protected $collection_key = 'data';
    protected $internal_gapi_mappings = array();
    public $code;
    protected $dataType = 'VendorDuplicator\\Google_Service_Compute_OperationsScopedListWarningData';
    protected $dataDataType = 'array';
    public $message;
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_OperationsScopedListWarning', 'VendorDuplicator\\Google_Service_Compute_OperationsScopedListWarning', \false);
/** @internal */
class Google_Service_Compute_OperationsScopedListWarningData extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $key;
    public $value;
    public function setKey($key)
    {
        $this->key = $key;
    }
    public function getKey()
    {
        return $this->key;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_OperationsScopedListWarningData', 'VendorDuplicator\\Google_Service_Compute_OperationsScopedListWarningData', \false);
/** @internal */
class Google_Service_Compute_PathMatcher extends Google_Collection
{
    protected $collection_key = 'pathRules';
    protected $internal_gapi_mappings = array();
    public $defaultService;
    public $description;
    public $name;
    protected $pathRulesType = 'VendorDuplicator\\Google_Service_Compute_PathRule';
    protected $pathRulesDataType = 'array';
    public function setDefaultService($defaultService)
    {
        $this->defaultService = $defaultService;
    }
    public function getDefaultService()
    {
        return $this->defaultService;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setPathRules($pathRules)
    {
        $this->pathRules = $pathRules;
    }
    public function getPathRules()
    {
        return $this->pathRules;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_PathMatcher', 'VendorDuplicator\\Google_Service_Compute_PathMatcher', \false);
/** @internal */
class Google_Service_Compute_PathRule extends Google_Collection
{
    protected $collection_key = 'paths';
    protected $internal_gapi_mappings = array();
    public $paths;
    public $service;
    public function setPaths($paths)
    {
        $this->paths = $paths;
    }
    public function getPaths()
    {
        return $this->paths;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_PathRule', 'VendorDuplicator\\Google_Service_Compute_PathRule', \false);
/** @internal */
class Google_Service_Compute_Project extends Google_Collection
{
    protected $collection_key = 'quotas';
    protected $internal_gapi_mappings = array();
    protected $commonInstanceMetadataType = 'VendorDuplicator\\Google_Service_Compute_Metadata';
    protected $commonInstanceMetadataDataType = '';
    public $creationTimestamp;
    public $description;
    public $enabledFeatures;
    public $id;
    public $kind;
    public $name;
    protected $quotasType = 'VendorDuplicator\\Google_Service_Compute_Quota';
    protected $quotasDataType = 'array';
    public $selfLink;
    protected $usageExportLocationType = 'VendorDuplicator\\Google_Service_Compute_UsageExportLocation';
    protected $usageExportLocationDataType = '';
    public function setCommonInstanceMetadata(Google_Service_Compute_Metadata $commonInstanceMetadata)
    {
        $this->commonInstanceMetadata = $commonInstanceMetadata;
    }
    public function getCommonInstanceMetadata()
    {
        return $this->commonInstanceMetadata;
    }
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setEnabledFeatures($enabledFeatures)
    {
        $this->enabledFeatures = $enabledFeatures;
    }
    public function getEnabledFeatures()
    {
        return $this->enabledFeatures;
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
    public function setQuotas($quotas)
    {
        $this->quotas = $quotas;
    }
    public function getQuotas()
    {
        return $this->quotas;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setUsageExportLocation(Google_Service_Compute_UsageExportLocation $usageExportLocation)
    {
        $this->usageExportLocation = $usageExportLocation;
    }
    public function getUsageExportLocation()
    {
        return $this->usageExportLocation;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_Project', 'VendorDuplicator\\Google_Service_Compute_Project', \false);
/** @internal */
class Google_Service_Compute_Quota extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $limit;
    public $metric;
    public $usage;
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }
    public function getLimit()
    {
        return $this->limit;
    }
    public function setMetric($metric)
    {
        $this->metric = $metric;
    }
    public function getMetric()
    {
        return $this->metric;
    }
    public function setUsage($usage)
    {
        $this->usage = $usage;
    }
    public function getUsage()
    {
        return $this->usage;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_Quota', 'VendorDuplicator\\Google_Service_Compute_Quota', \false);
/** @internal */
class Google_Service_Compute_Region extends Google_Collection
{
    protected $collection_key = 'zones';
    protected $internal_gapi_mappings = array();
    public $creationTimestamp;
    protected $deprecatedType = 'VendorDuplicator\\Google_Service_Compute_DeprecationStatus';
    protected $deprecatedDataType = '';
    public $description;
    public $id;
    public $kind;
    public $name;
    protected $quotasType = 'VendorDuplicator\\Google_Service_Compute_Quota';
    protected $quotasDataType = 'array';
    public $selfLink;
    public $status;
    public $zones;
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDeprecated(Google_Service_Compute_DeprecationStatus $deprecated)
    {
        $this->deprecated = $deprecated;
    }
    public function getDeprecated()
    {
        return $this->deprecated;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
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
    public function setQuotas($quotas)
    {
        $this->quotas = $quotas;
    }
    public function getQuotas()
    {
        return $this->quotas;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setZones($zones)
    {
        $this->zones = $zones;
    }
    public function getZones()
    {
        return $this->zones;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_Region', 'VendorDuplicator\\Google_Service_Compute_Region', \false);
/** @internal */
class Google_Service_Compute_RegionList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_Region';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_RegionList', 'VendorDuplicator\\Google_Service_Compute_RegionList', \false);
/** @internal */
class Google_Service_Compute_ResourceGroupReference extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $group;
    public function setGroup($group)
    {
        $this->group = $group;
    }
    public function getGroup()
    {
        return $this->group;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_ResourceGroupReference', 'VendorDuplicator\\Google_Service_Compute_ResourceGroupReference', \false);
/** @internal */
class Google_Service_Compute_Route extends Google_Collection
{
    protected $collection_key = 'warnings';
    protected $internal_gapi_mappings = array();
    public $creationTimestamp;
    public $description;
    public $destRange;
    public $id;
    public $kind;
    public $name;
    public $network;
    public $nextHopGateway;
    public $nextHopInstance;
    public $nextHopIp;
    public $nextHopNetwork;
    public $nextHopVpnTunnel;
    public $priority;
    public $selfLink;
    public $tags;
    protected $warningsType = 'VendorDuplicator\\Google_Service_Compute_RouteWarnings';
    protected $warningsDataType = 'array';
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDestRange($destRange)
    {
        $this->destRange = $destRange;
    }
    public function getDestRange()
    {
        return $this->destRange;
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
    public function setNetwork($network)
    {
        $this->network = $network;
    }
    public function getNetwork()
    {
        return $this->network;
    }
    public function setNextHopGateway($nextHopGateway)
    {
        $this->nextHopGateway = $nextHopGateway;
    }
    public function getNextHopGateway()
    {
        return $this->nextHopGateway;
    }
    public function setNextHopInstance($nextHopInstance)
    {
        $this->nextHopInstance = $nextHopInstance;
    }
    public function getNextHopInstance()
    {
        return $this->nextHopInstance;
    }
    public function setNextHopIp($nextHopIp)
    {
        $this->nextHopIp = $nextHopIp;
    }
    public function getNextHopIp()
    {
        return $this->nextHopIp;
    }
    public function setNextHopNetwork($nextHopNetwork)
    {
        $this->nextHopNetwork = $nextHopNetwork;
    }
    public function getNextHopNetwork()
    {
        return $this->nextHopNetwork;
    }
    public function setNextHopVpnTunnel($nextHopVpnTunnel)
    {
        $this->nextHopVpnTunnel = $nextHopVpnTunnel;
    }
    public function getNextHopVpnTunnel()
    {
        return $this->nextHopVpnTunnel;
    }
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }
    public function getPriority()
    {
        return $this->priority;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setTags($tags)
    {
        $this->tags = $tags;
    }
    public function getTags()
    {
        return $this->tags;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_Route', 'VendorDuplicator\\Google_Service_Compute_Route', \false);
/** @internal */
class Google_Service_Compute_RouteList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_Route';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_RouteList', 'VendorDuplicator\\Google_Service_Compute_RouteList', \false);
/** @internal */
class Google_Service_Compute_RouteWarnings extends Google_Collection
{
    protected $collection_key = 'data';
    protected $internal_gapi_mappings = array();
    public $code;
    protected $dataType = 'VendorDuplicator\\Google_Service_Compute_RouteWarningsData';
    protected $dataDataType = 'array';
    public $message;
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_RouteWarnings', 'VendorDuplicator\\Google_Service_Compute_RouteWarnings', \false);
/** @internal */
class Google_Service_Compute_RouteWarningsData extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $key;
    public $value;
    public function setKey($key)
    {
        $this->key = $key;
    }
    public function getKey()
    {
        return $this->key;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_RouteWarningsData', 'VendorDuplicator\\Google_Service_Compute_RouteWarningsData', \false);
/** @internal */
class Google_Service_Compute_Scheduling extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $automaticRestart;
    public $onHostMaintenance;
    public $preemptible;
    public function setAutomaticRestart($automaticRestart)
    {
        $this->automaticRestart = $automaticRestart;
    }
    public function getAutomaticRestart()
    {
        return $this->automaticRestart;
    }
    public function setOnHostMaintenance($onHostMaintenance)
    {
        $this->onHostMaintenance = $onHostMaintenance;
    }
    public function getOnHostMaintenance()
    {
        return $this->onHostMaintenance;
    }
    public function setPreemptible($preemptible)
    {
        $this->preemptible = $preemptible;
    }
    public function getPreemptible()
    {
        return $this->preemptible;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_Scheduling', 'VendorDuplicator\\Google_Service_Compute_Scheduling', \false);
/** @internal */
class Google_Service_Compute_SerialPortOutput extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $contents;
    public $kind;
    public $selfLink;
    public function setContents($contents)
    {
        $this->contents = $contents;
    }
    public function getContents()
    {
        return $this->contents;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_SerialPortOutput', 'VendorDuplicator\\Google_Service_Compute_SerialPortOutput', \false);
/** @internal */
class Google_Service_Compute_ServiceAccount extends Google_Collection
{
    protected $collection_key = 'scopes';
    protected $internal_gapi_mappings = array();
    public $email;
    public $scopes;
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setScopes($scopes)
    {
        $this->scopes = $scopes;
    }
    public function getScopes()
    {
        return $this->scopes;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_ServiceAccount', 'VendorDuplicator\\Google_Service_Compute_ServiceAccount', \false);
/** @internal */
class Google_Service_Compute_Snapshot extends Google_Collection
{
    protected $collection_key = 'licenses';
    protected $internal_gapi_mappings = array();
    public $creationTimestamp;
    public $description;
    public $diskSizeGb;
    public $id;
    public $kind;
    public $licenses;
    public $name;
    public $selfLink;
    public $sourceDisk;
    public $sourceDiskId;
    public $status;
    public $storageBytes;
    public $storageBytesStatus;
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDiskSizeGb($diskSizeGb)
    {
        $this->diskSizeGb = $diskSizeGb;
    }
    public function getDiskSizeGb()
    {
        return $this->diskSizeGb;
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
    public function setLicenses($licenses)
    {
        $this->licenses = $licenses;
    }
    public function getLicenses()
    {
        return $this->licenses;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setSourceDisk($sourceDisk)
    {
        $this->sourceDisk = $sourceDisk;
    }
    public function getSourceDisk()
    {
        return $this->sourceDisk;
    }
    public function setSourceDiskId($sourceDiskId)
    {
        $this->sourceDiskId = $sourceDiskId;
    }
    public function getSourceDiskId()
    {
        return $this->sourceDiskId;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setStorageBytes($storageBytes)
    {
        $this->storageBytes = $storageBytes;
    }
    public function getStorageBytes()
    {
        return $this->storageBytes;
    }
    public function setStorageBytesStatus($storageBytesStatus)
    {
        $this->storageBytesStatus = $storageBytesStatus;
    }
    public function getStorageBytesStatus()
    {
        return $this->storageBytesStatus;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_Snapshot', 'VendorDuplicator\\Google_Service_Compute_Snapshot', \false);
/** @internal */
class Google_Service_Compute_SnapshotList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_Snapshot';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_SnapshotList', 'VendorDuplicator\\Google_Service_Compute_SnapshotList', \false);
/** @internal */
class Google_Service_Compute_SslCertificate extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $certificate;
    public $creationTimestamp;
    public $description;
    public $id;
    public $kind;
    public $name;
    public $privateKey;
    public $selfLink;
    public function setCertificate($certificate)
    {
        $this->certificate = $certificate;
    }
    public function getCertificate()
    {
        return $this->certificate;
    }
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
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
    public function setPrivateKey($privateKey)
    {
        $this->privateKey = $privateKey;
    }
    public function getPrivateKey()
    {
        return $this->privateKey;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_SslCertificate', 'VendorDuplicator\\Google_Service_Compute_SslCertificate', \false);
/** @internal */
class Google_Service_Compute_SslCertificateList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_SslCertificate';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_SslCertificateList', 'VendorDuplicator\\Google_Service_Compute_SslCertificateList', \false);
/** @internal */
class Google_Service_Compute_Subnetwork extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $creationTimestamp;
    public $description;
    public $gatewayAddress;
    public $id;
    public $ipCidrRange;
    public $kind;
    public $name;
    public $network;
    public $region;
    public $selfLink;
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setGatewayAddress($gatewayAddress)
    {
        $this->gatewayAddress = $gatewayAddress;
    }
    public function getGatewayAddress()
    {
        return $this->gatewayAddress;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setIpCidrRange($ipCidrRange)
    {
        $this->ipCidrRange = $ipCidrRange;
    }
    public function getIpCidrRange()
    {
        return $this->ipCidrRange;
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
    public function setNetwork($network)
    {
        $this->network = $network;
    }
    public function getNetwork()
    {
        return $this->network;
    }
    public function setRegion($region)
    {
        $this->region = $region;
    }
    public function getRegion()
    {
        return $this->region;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_Subnetwork', 'VendorDuplicator\\Google_Service_Compute_Subnetwork', \false);
/** @internal */
class Google_Service_Compute_SubnetworkAggregatedList extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_SubnetworksScopedList';
    protected $itemsDataType = 'map';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_SubnetworkAggregatedList', 'VendorDuplicator\\Google_Service_Compute_SubnetworkAggregatedList', \false);
/** @internal */
class Google_Service_Compute_SubnetworkList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_Subnetwork';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_SubnetworkList', 'VendorDuplicator\\Google_Service_Compute_SubnetworkList', \false);
/** @internal */
class Google_Service_Compute_SubnetworksScopedList extends Google_Collection
{
    protected $collection_key = 'subnetworks';
    protected $internal_gapi_mappings = array();
    protected $subnetworksType = 'VendorDuplicator\\Google_Service_Compute_Subnetwork';
    protected $subnetworksDataType = 'array';
    protected $warningType = 'VendorDuplicator\\Google_Service_Compute_SubnetworksScopedListWarning';
    protected $warningDataType = '';
    public function setSubnetworks($subnetworks)
    {
        $this->subnetworks = $subnetworks;
    }
    public function getSubnetworks()
    {
        return $this->subnetworks;
    }
    public function setWarning(Google_Service_Compute_SubnetworksScopedListWarning $warning)
    {
        $this->warning = $warning;
    }
    public function getWarning()
    {
        return $this->warning;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_SubnetworksScopedList', 'VendorDuplicator\\Google_Service_Compute_SubnetworksScopedList', \false);
/** @internal */
class Google_Service_Compute_SubnetworksScopedListWarning extends Google_Collection
{
    protected $collection_key = 'data';
    protected $internal_gapi_mappings = array();
    public $code;
    protected $dataType = 'VendorDuplicator\\Google_Service_Compute_SubnetworksScopedListWarningData';
    protected $dataDataType = 'array';
    public $message;
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_SubnetworksScopedListWarning', 'VendorDuplicator\\Google_Service_Compute_SubnetworksScopedListWarning', \false);
/** @internal */
class Google_Service_Compute_SubnetworksScopedListWarningData extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $key;
    public $value;
    public function setKey($key)
    {
        $this->key = $key;
    }
    public function getKey()
    {
        return $this->key;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_SubnetworksScopedListWarningData', 'VendorDuplicator\\Google_Service_Compute_SubnetworksScopedListWarningData', \false);
/** @internal */
class Google_Service_Compute_Tags extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $fingerprint;
    public $items;
    public function setFingerprint($fingerprint)
    {
        $this->fingerprint = $fingerprint;
    }
    public function getFingerprint()
    {
        return $this->fingerprint;
    }
    public function setItems($items)
    {
        $this->items = $items;
    }
    public function getItems()
    {
        return $this->items;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_Tags', 'VendorDuplicator\\Google_Service_Compute_Tags', \false);
/** @internal */
class Google_Service_Compute_TargetHttpProxy extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $creationTimestamp;
    public $description;
    public $id;
    public $kind;
    public $name;
    public $selfLink;
    public $urlMap;
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setUrlMap($urlMap)
    {
        $this->urlMap = $urlMap;
    }
    public function getUrlMap()
    {
        return $this->urlMap;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetHttpProxy', 'VendorDuplicator\\Google_Service_Compute_TargetHttpProxy', \false);
/** @internal */
class Google_Service_Compute_TargetHttpProxyList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_TargetHttpProxy';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetHttpProxyList', 'VendorDuplicator\\Google_Service_Compute_TargetHttpProxyList', \false);
/** @internal */
class Google_Service_Compute_TargetHttpsProxiesSetSslCertificatesRequest extends Google_Collection
{
    protected $collection_key = 'sslCertificates';
    protected $internal_gapi_mappings = array();
    public $sslCertificates;
    public function setSslCertificates($sslCertificates)
    {
        $this->sslCertificates = $sslCertificates;
    }
    public function getSslCertificates()
    {
        return $this->sslCertificates;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetHttpsProxiesSetSslCertificatesRequest', 'VendorDuplicator\\Google_Service_Compute_TargetHttpsProxiesSetSslCertificatesRequest', \false);
/** @internal */
class Google_Service_Compute_TargetHttpsProxy extends Google_Collection
{
    protected $collection_key = 'sslCertificates';
    protected $internal_gapi_mappings = array();
    public $creationTimestamp;
    public $description;
    public $id;
    public $kind;
    public $name;
    public $selfLink;
    public $sslCertificates;
    public $urlMap;
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setSslCertificates($sslCertificates)
    {
        $this->sslCertificates = $sslCertificates;
    }
    public function getSslCertificates()
    {
        return $this->sslCertificates;
    }
    public function setUrlMap($urlMap)
    {
        $this->urlMap = $urlMap;
    }
    public function getUrlMap()
    {
        return $this->urlMap;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetHttpsProxy', 'VendorDuplicator\\Google_Service_Compute_TargetHttpsProxy', \false);
/** @internal */
class Google_Service_Compute_TargetHttpsProxyList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_TargetHttpsProxy';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetHttpsProxyList', 'VendorDuplicator\\Google_Service_Compute_TargetHttpsProxyList', \false);
/** @internal */
class Google_Service_Compute_TargetInstance extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $creationTimestamp;
    public $description;
    public $id;
    public $instance;
    public $kind;
    public $name;
    public $natPolicy;
    public $selfLink;
    public $zone;
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setInstance($instance)
    {
        $this->instance = $instance;
    }
    public function getInstance()
    {
        return $this->instance;
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
    public function setNatPolicy($natPolicy)
    {
        $this->natPolicy = $natPolicy;
    }
    public function getNatPolicy()
    {
        return $this->natPolicy;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setZone($zone)
    {
        $this->zone = $zone;
    }
    public function getZone()
    {
        return $this->zone;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetInstance', 'VendorDuplicator\\Google_Service_Compute_TargetInstance', \false);
/** @internal */
class Google_Service_Compute_TargetInstanceAggregatedList extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_TargetInstancesScopedList';
    protected $itemsDataType = 'map';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetInstanceAggregatedList', 'VendorDuplicator\\Google_Service_Compute_TargetInstanceAggregatedList', \false);
/** @internal */
class Google_Service_Compute_TargetInstanceList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_TargetInstance';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetInstanceList', 'VendorDuplicator\\Google_Service_Compute_TargetInstanceList', \false);
/** @internal */
class Google_Service_Compute_TargetInstancesScopedList extends Google_Collection
{
    protected $collection_key = 'targetInstances';
    protected $internal_gapi_mappings = array();
    protected $targetInstancesType = 'VendorDuplicator\\Google_Service_Compute_TargetInstance';
    protected $targetInstancesDataType = 'array';
    protected $warningType = 'VendorDuplicator\\Google_Service_Compute_TargetInstancesScopedListWarning';
    protected $warningDataType = '';
    public function setTargetInstances($targetInstances)
    {
        $this->targetInstances = $targetInstances;
    }
    public function getTargetInstances()
    {
        return $this->targetInstances;
    }
    public function setWarning(Google_Service_Compute_TargetInstancesScopedListWarning $warning)
    {
        $this->warning = $warning;
    }
    public function getWarning()
    {
        return $this->warning;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetInstancesScopedList', 'VendorDuplicator\\Google_Service_Compute_TargetInstancesScopedList', \false);
/** @internal */
class Google_Service_Compute_TargetInstancesScopedListWarning extends Google_Collection
{
    protected $collection_key = 'data';
    protected $internal_gapi_mappings = array();
    public $code;
    protected $dataType = 'VendorDuplicator\\Google_Service_Compute_TargetInstancesScopedListWarningData';
    protected $dataDataType = 'array';
    public $message;
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetInstancesScopedListWarning', 'VendorDuplicator\\Google_Service_Compute_TargetInstancesScopedListWarning', \false);
/** @internal */
class Google_Service_Compute_TargetInstancesScopedListWarningData extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $key;
    public $value;
    public function setKey($key)
    {
        $this->key = $key;
    }
    public function getKey()
    {
        return $this->key;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetInstancesScopedListWarningData', 'VendorDuplicator\\Google_Service_Compute_TargetInstancesScopedListWarningData', \false);
/** @internal */
class Google_Service_Compute_TargetPool extends Google_Collection
{
    protected $collection_key = 'instances';
    protected $internal_gapi_mappings = array();
    public $backupPool;
    public $creationTimestamp;
    public $description;
    public $failoverRatio;
    public $healthChecks;
    public $id;
    public $instances;
    public $kind;
    public $name;
    public $region;
    public $selfLink;
    public $sessionAffinity;
    public function setBackupPool($backupPool)
    {
        $this->backupPool = $backupPool;
    }
    public function getBackupPool()
    {
        return $this->backupPool;
    }
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setFailoverRatio($failoverRatio)
    {
        $this->failoverRatio = $failoverRatio;
    }
    public function getFailoverRatio()
    {
        return $this->failoverRatio;
    }
    public function setHealthChecks($healthChecks)
    {
        $this->healthChecks = $healthChecks;
    }
    public function getHealthChecks()
    {
        return $this->healthChecks;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setInstances($instances)
    {
        $this->instances = $instances;
    }
    public function getInstances()
    {
        return $this->instances;
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
    public function setRegion($region)
    {
        $this->region = $region;
    }
    public function getRegion()
    {
        return $this->region;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setSessionAffinity($sessionAffinity)
    {
        $this->sessionAffinity = $sessionAffinity;
    }
    public function getSessionAffinity()
    {
        return $this->sessionAffinity;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetPool', 'VendorDuplicator\\Google_Service_Compute_TargetPool', \false);
/** @internal */
class Google_Service_Compute_TargetPoolAggregatedList extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_TargetPoolsScopedList';
    protected $itemsDataType = 'map';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetPoolAggregatedList', 'VendorDuplicator\\Google_Service_Compute_TargetPoolAggregatedList', \false);
/** @internal */
class Google_Service_Compute_TargetPoolInstanceHealth extends Google_Collection
{
    protected $collection_key = 'healthStatus';
    protected $internal_gapi_mappings = array();
    protected $healthStatusType = 'VendorDuplicator\\Google_Service_Compute_HealthStatus';
    protected $healthStatusDataType = 'array';
    public $kind;
    public function setHealthStatus($healthStatus)
    {
        $this->healthStatus = $healthStatus;
    }
    public function getHealthStatus()
    {
        return $this->healthStatus;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetPoolInstanceHealth', 'VendorDuplicator\\Google_Service_Compute_TargetPoolInstanceHealth', \false);
/** @internal */
class Google_Service_Compute_TargetPoolList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_TargetPool';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetPoolList', 'VendorDuplicator\\Google_Service_Compute_TargetPoolList', \false);
/** @internal */
class Google_Service_Compute_TargetPoolsAddHealthCheckRequest extends Google_Collection
{
    protected $collection_key = 'healthChecks';
    protected $internal_gapi_mappings = array();
    protected $healthChecksType = 'VendorDuplicator\\Google_Service_Compute_HealthCheckReference';
    protected $healthChecksDataType = 'array';
    public function setHealthChecks($healthChecks)
    {
        $this->healthChecks = $healthChecks;
    }
    public function getHealthChecks()
    {
        return $this->healthChecks;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetPoolsAddHealthCheckRequest', 'VendorDuplicator\\Google_Service_Compute_TargetPoolsAddHealthCheckRequest', \false);
/** @internal */
class Google_Service_Compute_TargetPoolsAddInstanceRequest extends Google_Collection
{
    protected $collection_key = 'instances';
    protected $internal_gapi_mappings = array();
    protected $instancesType = 'VendorDuplicator\\Google_Service_Compute_InstanceReference';
    protected $instancesDataType = 'array';
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
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetPoolsAddInstanceRequest', 'VendorDuplicator\\Google_Service_Compute_TargetPoolsAddInstanceRequest', \false);
/** @internal */
class Google_Service_Compute_TargetPoolsRemoveHealthCheckRequest extends Google_Collection
{
    protected $collection_key = 'healthChecks';
    protected $internal_gapi_mappings = array();
    protected $healthChecksType = 'VendorDuplicator\\Google_Service_Compute_HealthCheckReference';
    protected $healthChecksDataType = 'array';
    public function setHealthChecks($healthChecks)
    {
        $this->healthChecks = $healthChecks;
    }
    public function getHealthChecks()
    {
        return $this->healthChecks;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetPoolsRemoveHealthCheckRequest', 'VendorDuplicator\\Google_Service_Compute_TargetPoolsRemoveHealthCheckRequest', \false);
/** @internal */
class Google_Service_Compute_TargetPoolsRemoveInstanceRequest extends Google_Collection
{
    protected $collection_key = 'instances';
    protected $internal_gapi_mappings = array();
    protected $instancesType = 'VendorDuplicator\\Google_Service_Compute_InstanceReference';
    protected $instancesDataType = 'array';
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
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetPoolsRemoveInstanceRequest', 'VendorDuplicator\\Google_Service_Compute_TargetPoolsRemoveInstanceRequest', \false);
/** @internal */
class Google_Service_Compute_TargetPoolsScopedList extends Google_Collection
{
    protected $collection_key = 'targetPools';
    protected $internal_gapi_mappings = array();
    protected $targetPoolsType = 'VendorDuplicator\\Google_Service_Compute_TargetPool';
    protected $targetPoolsDataType = 'array';
    protected $warningType = 'VendorDuplicator\\Google_Service_Compute_TargetPoolsScopedListWarning';
    protected $warningDataType = '';
    public function setTargetPools($targetPools)
    {
        $this->targetPools = $targetPools;
    }
    public function getTargetPools()
    {
        return $this->targetPools;
    }
    public function setWarning(Google_Service_Compute_TargetPoolsScopedListWarning $warning)
    {
        $this->warning = $warning;
    }
    public function getWarning()
    {
        return $this->warning;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetPoolsScopedList', 'VendorDuplicator\\Google_Service_Compute_TargetPoolsScopedList', \false);
/** @internal */
class Google_Service_Compute_TargetPoolsScopedListWarning extends Google_Collection
{
    protected $collection_key = 'data';
    protected $internal_gapi_mappings = array();
    public $code;
    protected $dataType = 'VendorDuplicator\\Google_Service_Compute_TargetPoolsScopedListWarningData';
    protected $dataDataType = 'array';
    public $message;
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetPoolsScopedListWarning', 'VendorDuplicator\\Google_Service_Compute_TargetPoolsScopedListWarning', \false);
/** @internal */
class Google_Service_Compute_TargetPoolsScopedListWarningData extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $key;
    public $value;
    public function setKey($key)
    {
        $this->key = $key;
    }
    public function getKey()
    {
        return $this->key;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetPoolsScopedListWarningData', 'VendorDuplicator\\Google_Service_Compute_TargetPoolsScopedListWarningData', \false);
/** @internal */
class Google_Service_Compute_TargetReference extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $target;
    public function setTarget($target)
    {
        $this->target = $target;
    }
    public function getTarget()
    {
        return $this->target;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetReference', 'VendorDuplicator\\Google_Service_Compute_TargetReference', \false);
/** @internal */
class Google_Service_Compute_TargetVpnGateway extends Google_Collection
{
    protected $collection_key = 'tunnels';
    protected $internal_gapi_mappings = array();
    public $creationTimestamp;
    public $description;
    public $forwardingRules;
    public $id;
    public $kind;
    public $name;
    public $network;
    public $region;
    public $selfLink;
    public $status;
    public $tunnels;
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setForwardingRules($forwardingRules)
    {
        $this->forwardingRules = $forwardingRules;
    }
    public function getForwardingRules()
    {
        return $this->forwardingRules;
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
    public function setNetwork($network)
    {
        $this->network = $network;
    }
    public function getNetwork()
    {
        return $this->network;
    }
    public function setRegion($region)
    {
        $this->region = $region;
    }
    public function getRegion()
    {
        return $this->region;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setTunnels($tunnels)
    {
        $this->tunnels = $tunnels;
    }
    public function getTunnels()
    {
        return $this->tunnels;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetVpnGateway', 'VendorDuplicator\\Google_Service_Compute_TargetVpnGateway', \false);
/** @internal */
class Google_Service_Compute_TargetVpnGatewayAggregatedList extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_TargetVpnGatewaysScopedList';
    protected $itemsDataType = 'map';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetVpnGatewayAggregatedList', 'VendorDuplicator\\Google_Service_Compute_TargetVpnGatewayAggregatedList', \false);
/** @internal */
class Google_Service_Compute_TargetVpnGatewayList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_TargetVpnGateway';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetVpnGatewayList', 'VendorDuplicator\\Google_Service_Compute_TargetVpnGatewayList', \false);
/** @internal */
class Google_Service_Compute_TargetVpnGatewaysScopedList extends Google_Collection
{
    protected $collection_key = 'targetVpnGateways';
    protected $internal_gapi_mappings = array();
    protected $targetVpnGatewaysType = 'VendorDuplicator\\Google_Service_Compute_TargetVpnGateway';
    protected $targetVpnGatewaysDataType = 'array';
    protected $warningType = 'VendorDuplicator\\Google_Service_Compute_TargetVpnGatewaysScopedListWarning';
    protected $warningDataType = '';
    public function setTargetVpnGateways($targetVpnGateways)
    {
        $this->targetVpnGateways = $targetVpnGateways;
    }
    public function getTargetVpnGateways()
    {
        return $this->targetVpnGateways;
    }
    public function setWarning(Google_Service_Compute_TargetVpnGatewaysScopedListWarning $warning)
    {
        $this->warning = $warning;
    }
    public function getWarning()
    {
        return $this->warning;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetVpnGatewaysScopedList', 'VendorDuplicator\\Google_Service_Compute_TargetVpnGatewaysScopedList', \false);
/** @internal */
class Google_Service_Compute_TargetVpnGatewaysScopedListWarning extends Google_Collection
{
    protected $collection_key = 'data';
    protected $internal_gapi_mappings = array();
    public $code;
    protected $dataType = 'VendorDuplicator\\Google_Service_Compute_TargetVpnGatewaysScopedListWarningData';
    protected $dataDataType = 'array';
    public $message;
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetVpnGatewaysScopedListWarning', 'VendorDuplicator\\Google_Service_Compute_TargetVpnGatewaysScopedListWarning', \false);
/** @internal */
class Google_Service_Compute_TargetVpnGatewaysScopedListWarningData extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $key;
    public $value;
    public function setKey($key)
    {
        $this->key = $key;
    }
    public function getKey()
    {
        return $this->key;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_TargetVpnGatewaysScopedListWarningData', 'VendorDuplicator\\Google_Service_Compute_TargetVpnGatewaysScopedListWarningData', \false);
/** @internal */
class Google_Service_Compute_TestFailure extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $actualService;
    public $expectedService;
    public $host;
    public $path;
    public function setActualService($actualService)
    {
        $this->actualService = $actualService;
    }
    public function getActualService()
    {
        return $this->actualService;
    }
    public function setExpectedService($expectedService)
    {
        $this->expectedService = $expectedService;
    }
    public function getExpectedService()
    {
        return $this->expectedService;
    }
    public function setHost($host)
    {
        $this->host = $host;
    }
    public function getHost()
    {
        return $this->host;
    }
    public function setPath($path)
    {
        $this->path = $path;
    }
    public function getPath()
    {
        return $this->path;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_TestFailure', 'VendorDuplicator\\Google_Service_Compute_TestFailure', \false);
/** @internal */
class Google_Service_Compute_UrlMap extends Google_Collection
{
    protected $collection_key = 'tests';
    protected $internal_gapi_mappings = array();
    public $creationTimestamp;
    public $defaultService;
    public $description;
    public $fingerprint;
    protected $hostRulesType = 'VendorDuplicator\\Google_Service_Compute_HostRule';
    protected $hostRulesDataType = 'array';
    public $id;
    public $kind;
    public $name;
    protected $pathMatchersType = 'VendorDuplicator\\Google_Service_Compute_PathMatcher';
    protected $pathMatchersDataType = 'array';
    public $selfLink;
    protected $testsType = 'VendorDuplicator\\Google_Service_Compute_UrlMapTest';
    protected $testsDataType = 'array';
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDefaultService($defaultService)
    {
        $this->defaultService = $defaultService;
    }
    public function getDefaultService()
    {
        return $this->defaultService;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setFingerprint($fingerprint)
    {
        $this->fingerprint = $fingerprint;
    }
    public function getFingerprint()
    {
        return $this->fingerprint;
    }
    public function setHostRules($hostRules)
    {
        $this->hostRules = $hostRules;
    }
    public function getHostRules()
    {
        return $this->hostRules;
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
    public function setPathMatchers($pathMatchers)
    {
        $this->pathMatchers = $pathMatchers;
    }
    public function getPathMatchers()
    {
        return $this->pathMatchers;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setTests($tests)
    {
        $this->tests = $tests;
    }
    public function getTests()
    {
        return $this->tests;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_UrlMap', 'VendorDuplicator\\Google_Service_Compute_UrlMap', \false);
/** @internal */
class Google_Service_Compute_UrlMapList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_UrlMap';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_UrlMapList', 'VendorDuplicator\\Google_Service_Compute_UrlMapList', \false);
/** @internal */
class Google_Service_Compute_UrlMapReference extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $urlMap;
    public function setUrlMap($urlMap)
    {
        $this->urlMap = $urlMap;
    }
    public function getUrlMap()
    {
        return $this->urlMap;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_UrlMapReference', 'VendorDuplicator\\Google_Service_Compute_UrlMapReference', \false);
/** @internal */
class Google_Service_Compute_UrlMapTest extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $description;
    public $host;
    public $path;
    public $service;
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setHost($host)
    {
        $this->host = $host;
    }
    public function getHost()
    {
        return $this->host;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_UrlMapTest', 'VendorDuplicator\\Google_Service_Compute_UrlMapTest', \false);
/** @internal */
class Google_Service_Compute_UrlMapValidationResult extends Google_Collection
{
    protected $collection_key = 'testFailures';
    protected $internal_gapi_mappings = array();
    public $loadErrors;
    public $loadSucceeded;
    protected $testFailuresType = 'VendorDuplicator\\Google_Service_Compute_TestFailure';
    protected $testFailuresDataType = 'array';
    public $testPassed;
    public function setLoadErrors($loadErrors)
    {
        $this->loadErrors = $loadErrors;
    }
    public function getLoadErrors()
    {
        return $this->loadErrors;
    }
    public function setLoadSucceeded($loadSucceeded)
    {
        $this->loadSucceeded = $loadSucceeded;
    }
    public function getLoadSucceeded()
    {
        return $this->loadSucceeded;
    }
    public function setTestFailures($testFailures)
    {
        $this->testFailures = $testFailures;
    }
    public function getTestFailures()
    {
        return $this->testFailures;
    }
    public function setTestPassed($testPassed)
    {
        $this->testPassed = $testPassed;
    }
    public function getTestPassed()
    {
        return $this->testPassed;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_UrlMapValidationResult', 'VendorDuplicator\\Google_Service_Compute_UrlMapValidationResult', \false);
/** @internal */
class Google_Service_Compute_UrlMapsValidateRequest extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $resourceType = 'VendorDuplicator\\Google_Service_Compute_UrlMap';
    protected $resourceDataType = '';
    public function setResource(Google_Service_Compute_UrlMap $resource)
    {
        $this->resource = $resource;
    }
    public function getResource()
    {
        return $this->resource;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_UrlMapsValidateRequest', 'VendorDuplicator\\Google_Service_Compute_UrlMapsValidateRequest', \false);
/** @internal */
class Google_Service_Compute_UrlMapsValidateResponse extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $resultType = 'VendorDuplicator\\Google_Service_Compute_UrlMapValidationResult';
    protected $resultDataType = '';
    public function setResult(Google_Service_Compute_UrlMapValidationResult $result)
    {
        $this->result = $result;
    }
    public function getResult()
    {
        return $this->result;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_UrlMapsValidateResponse', 'VendorDuplicator\\Google_Service_Compute_UrlMapsValidateResponse', \false);
/** @internal */
class Google_Service_Compute_UsageExportLocation extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $bucketName;
    public $reportNamePrefix;
    public function setBucketName($bucketName)
    {
        $this->bucketName = $bucketName;
    }
    public function getBucketName()
    {
        return $this->bucketName;
    }
    public function setReportNamePrefix($reportNamePrefix)
    {
        $this->reportNamePrefix = $reportNamePrefix;
    }
    public function getReportNamePrefix()
    {
        return $this->reportNamePrefix;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_UsageExportLocation', 'VendorDuplicator\\Google_Service_Compute_UsageExportLocation', \false);
/** @internal */
class Google_Service_Compute_VpnTunnel extends Google_Collection
{
    protected $collection_key = 'localTrafficSelector';
    protected $internal_gapi_mappings = array();
    public $creationTimestamp;
    public $description;
    public $detailedStatus;
    public $id;
    public $ikeVersion;
    public $kind;
    public $localTrafficSelector;
    public $name;
    public $peerIp;
    public $region;
    public $selfLink;
    public $sharedSecret;
    public $sharedSecretHash;
    public $status;
    public $targetVpnGateway;
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDetailedStatus($detailedStatus)
    {
        $this->detailedStatus = $detailedStatus;
    }
    public function getDetailedStatus()
    {
        return $this->detailedStatus;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setIkeVersion($ikeVersion)
    {
        $this->ikeVersion = $ikeVersion;
    }
    public function getIkeVersion()
    {
        return $this->ikeVersion;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setLocalTrafficSelector($localTrafficSelector)
    {
        $this->localTrafficSelector = $localTrafficSelector;
    }
    public function getLocalTrafficSelector()
    {
        return $this->localTrafficSelector;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setPeerIp($peerIp)
    {
        $this->peerIp = $peerIp;
    }
    public function getPeerIp()
    {
        return $this->peerIp;
    }
    public function setRegion($region)
    {
        $this->region = $region;
    }
    public function getRegion()
    {
        return $this->region;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setSharedSecret($sharedSecret)
    {
        $this->sharedSecret = $sharedSecret;
    }
    public function getSharedSecret()
    {
        return $this->sharedSecret;
    }
    public function setSharedSecretHash($sharedSecretHash)
    {
        $this->sharedSecretHash = $sharedSecretHash;
    }
    public function getSharedSecretHash()
    {
        return $this->sharedSecretHash;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setTargetVpnGateway($targetVpnGateway)
    {
        $this->targetVpnGateway = $targetVpnGateway;
    }
    public function getTargetVpnGateway()
    {
        return $this->targetVpnGateway;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_VpnTunnel', 'VendorDuplicator\\Google_Service_Compute_VpnTunnel', \false);
/** @internal */
class Google_Service_Compute_VpnTunnelAggregatedList extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_VpnTunnelsScopedList';
    protected $itemsDataType = 'map';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_VpnTunnelAggregatedList', 'VendorDuplicator\\Google_Service_Compute_VpnTunnelAggregatedList', \false);
/** @internal */
class Google_Service_Compute_VpnTunnelList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_VpnTunnel';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_VpnTunnelList', 'VendorDuplicator\\Google_Service_Compute_VpnTunnelList', \false);
/** @internal */
class Google_Service_Compute_VpnTunnelsScopedList extends Google_Collection
{
    protected $collection_key = 'vpnTunnels';
    protected $internal_gapi_mappings = array();
    protected $vpnTunnelsType = 'VendorDuplicator\\Google_Service_Compute_VpnTunnel';
    protected $vpnTunnelsDataType = 'array';
    protected $warningType = 'VendorDuplicator\\Google_Service_Compute_VpnTunnelsScopedListWarning';
    protected $warningDataType = '';
    public function setVpnTunnels($vpnTunnels)
    {
        $this->vpnTunnels = $vpnTunnels;
    }
    public function getVpnTunnels()
    {
        return $this->vpnTunnels;
    }
    public function setWarning(Google_Service_Compute_VpnTunnelsScopedListWarning $warning)
    {
        $this->warning = $warning;
    }
    public function getWarning()
    {
        return $this->warning;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_VpnTunnelsScopedList', 'VendorDuplicator\\Google_Service_Compute_VpnTunnelsScopedList', \false);
/** @internal */
class Google_Service_Compute_VpnTunnelsScopedListWarning extends Google_Collection
{
    protected $collection_key = 'data';
    protected $internal_gapi_mappings = array();
    public $code;
    protected $dataType = 'VendorDuplicator\\Google_Service_Compute_VpnTunnelsScopedListWarningData';
    protected $dataDataType = 'array';
    public $message;
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_VpnTunnelsScopedListWarning', 'VendorDuplicator\\Google_Service_Compute_VpnTunnelsScopedListWarning', \false);
/** @internal */
class Google_Service_Compute_VpnTunnelsScopedListWarningData extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $key;
    public $value;
    public function setKey($key)
    {
        $this->key = $key;
    }
    public function getKey()
    {
        return $this->key;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_VpnTunnelsScopedListWarningData', 'VendorDuplicator\\Google_Service_Compute_VpnTunnelsScopedListWarningData', \false);
/** @internal */
class Google_Service_Compute_Zone extends Google_Collection
{
    protected $collection_key = 'maintenanceWindows';
    protected $internal_gapi_mappings = array();
    public $creationTimestamp;
    protected $deprecatedType = 'VendorDuplicator\\Google_Service_Compute_DeprecationStatus';
    protected $deprecatedDataType = '';
    public $description;
    public $id;
    public $kind;
    protected $maintenanceWindowsType = 'VendorDuplicator\\Google_Service_Compute_ZoneMaintenanceWindows';
    protected $maintenanceWindowsDataType = 'array';
    public $name;
    public $region;
    public $selfLink;
    public $status;
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    public function setDeprecated(Google_Service_Compute_DeprecationStatus $deprecated)
    {
        $this->deprecated = $deprecated;
    }
    public function getDeprecated()
    {
        return $this->deprecated;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
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
    public function setMaintenanceWindows($maintenanceWindows)
    {
        $this->maintenanceWindows = $maintenanceWindows;
    }
    public function getMaintenanceWindows()
    {
        return $this->maintenanceWindows;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setRegion($region)
    {
        $this->region = $region;
    }
    public function getRegion()
    {
        return $this->region;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_Zone', 'VendorDuplicator\\Google_Service_Compute_Zone', \false);
/** @internal */
class Google_Service_Compute_ZoneList extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $itemsType = 'VendorDuplicator\\Google_Service_Compute_Zone';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Compute_ZoneList', 'VendorDuplicator\\Google_Service_Compute_ZoneList', \false);
/** @internal */
class Google_Service_Compute_ZoneMaintenanceWindows extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $beginTime;
    public $description;
    public $endTime;
    public $name;
    public function setBeginTime($beginTime)
    {
        $this->beginTime = $beginTime;
    }
    public function getBeginTime()
    {
        return $this->beginTime;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }
    public function getEndTime()
    {
        return $this->endTime;
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
\class_alias('VendorDuplicator\\Google_Service_Compute_ZoneMaintenanceWindows', 'VendorDuplicator\\Google_Service_Compute_ZoneMaintenanceWindows', \false);
