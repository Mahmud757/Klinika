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
 * Service definition for Genomics (v1).
 *
 * <p>
 * An API to store, process, explore, and share genomic data. It supports
 * reference-based alignments, genetic variants, and reference genomes. This API
 * provides an implementation of the Global Alliance for Genomics and Health
 * (GA4GH) v0.5.1 API as well as several extensions.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 * @internal
 */
class Google_Service_Genomics extends Google_Service
{
    /** View and manage your data in Google BigQuery. */
    const BIGQUERY = "https://www.googleapis.com/auth/bigquery";
    /** View and manage your data across Google Cloud Platform services. */
    const CLOUD_PLATFORM = "https://www.googleapis.com/auth/cloud-platform";
    /** Manage your data in Google Cloud Storage. */
    const DEVSTORAGE_READ_WRITE = "https://www.googleapis.com/auth/devstorage.read_write";
    /** View and manage Genomics data. */
    const GENOMICS = "https://www.googleapis.com/auth/genomics";
    /** View Genomics data. */
    const GENOMICS_READONLY = "https://www.googleapis.com/auth/genomics.readonly";
    public $callsets;
    public $datasets;
    public $operations;
    public $readgroupsets;
    public $readgroupsets_coveragebuckets;
    public $reads;
    public $references;
    public $references_bases;
    public $referencesets;
    public $variants;
    public $variantsets;
    /**
     * Constructs the internal representation of the Genomics service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->rootUrl = 'https://genomics.googleapis.com/';
        $this->servicePath = '';
        $this->version = 'v1';
        $this->serviceName = 'genomics';
        $this->callsets = new Google_Service_Genomics_Callsets_Resource($this, $this->serviceName, 'callsets', array('methods' => array('create' => array('path' => 'v1/callsets', 'httpMethod' => 'POST', 'parameters' => array()), 'delete' => array('path' => 'v1/callsets/{callSetId}', 'httpMethod' => 'DELETE', 'parameters' => array('callSetId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => 'v1/callsets/{callSetId}', 'httpMethod' => 'GET', 'parameters' => array('callSetId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'patch' => array('path' => 'v1/callsets/{callSetId}', 'httpMethod' => 'PATCH', 'parameters' => array('callSetId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'updateMask' => array('location' => 'query', 'type' => 'string'))), 'search' => array('path' => 'v1/callsets/search', 'httpMethod' => 'POST', 'parameters' => array()))));
        $this->datasets = new Google_Service_Genomics_Datasets_Resource($this, $this->serviceName, 'datasets', array('methods' => array('create' => array('path' => 'v1/datasets', 'httpMethod' => 'POST', 'parameters' => array()), 'delete' => array('path' => 'v1/datasets/{datasetId}', 'httpMethod' => 'DELETE', 'parameters' => array('datasetId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => 'v1/datasets/{datasetId}', 'httpMethod' => 'GET', 'parameters' => array('datasetId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'getIamPolicy' => array('path' => 'v1/{+resource}:getIamPolicy', 'httpMethod' => 'POST', 'parameters' => array('resource' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'v1/datasets', 'httpMethod' => 'GET', 'parameters' => array('projectId' => array('location' => 'query', 'type' => 'string'), 'pageSize' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'patch' => array('path' => 'v1/datasets/{datasetId}', 'httpMethod' => 'PATCH', 'parameters' => array('datasetId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'updateMask' => array('location' => 'query', 'type' => 'string'))), 'setIamPolicy' => array('path' => 'v1/{+resource}:setIamPolicy', 'httpMethod' => 'POST', 'parameters' => array('resource' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'testIamPermissions' => array('path' => 'v1/{+resource}:testIamPermissions', 'httpMethod' => 'POST', 'parameters' => array('resource' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'undelete' => array('path' => 'v1/datasets/{datasetId}:undelete', 'httpMethod' => 'POST', 'parameters' => array('datasetId' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->operations = new Google_Service_Genomics_Operations_Resource($this, $this->serviceName, 'operations', array('methods' => array('cancel' => array('path' => 'v1/{+name}:cancel', 'httpMethod' => 'POST', 'parameters' => array('name' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => 'v1/{+name}', 'httpMethod' => 'GET', 'parameters' => array('name' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'v1/{+name}', 'httpMethod' => 'GET', 'parameters' => array('name' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'filter' => array('location' => 'query', 'type' => 'string'), 'pageSize' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->readgroupsets = new Google_Service_Genomics_Readgroupsets_Resource($this, $this->serviceName, 'readgroupsets', array('methods' => array('delete' => array('path' => 'v1/readgroupsets/{readGroupSetId}', 'httpMethod' => 'DELETE', 'parameters' => array('readGroupSetId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'export' => array('path' => 'v1/readgroupsets/{readGroupSetId}:export', 'httpMethod' => 'POST', 'parameters' => array('readGroupSetId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => 'v1/readgroupsets/{readGroupSetId}', 'httpMethod' => 'GET', 'parameters' => array('readGroupSetId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'import' => array('path' => 'v1/readgroupsets:import', 'httpMethod' => 'POST', 'parameters' => array()), 'patch' => array('path' => 'v1/readgroupsets/{readGroupSetId}', 'httpMethod' => 'PATCH', 'parameters' => array('readGroupSetId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'updateMask' => array('location' => 'query', 'type' => 'string'))), 'search' => array('path' => 'v1/readgroupsets/search', 'httpMethod' => 'POST', 'parameters' => array()))));
        $this->readgroupsets_coveragebuckets = new Google_Service_Genomics_ReadgroupsetsCoveragebuckets_Resource($this, $this->serviceName, 'coveragebuckets', array('methods' => array('list' => array('path' => 'v1/readgroupsets/{readGroupSetId}/coveragebuckets', 'httpMethod' => 'GET', 'parameters' => array('readGroupSetId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'referenceName' => array('location' => 'query', 'type' => 'string'), 'start' => array('location' => 'query', 'type' => 'string'), 'end' => array('location' => 'query', 'type' => 'string'), 'targetBucketWidth' => array('location' => 'query', 'type' => 'string'), 'pageToken' => array('location' => 'query', 'type' => 'string'), 'pageSize' => array('location' => 'query', 'type' => 'integer'))))));
        $this->reads = new Google_Service_Genomics_Reads_Resource($this, $this->serviceName, 'reads', array('methods' => array('search' => array('path' => 'v1/reads/search', 'httpMethod' => 'POST', 'parameters' => array()), 'stream' => array('path' => 'v1/reads:stream', 'httpMethod' => 'POST', 'parameters' => array()))));
        $this->references = new Google_Service_Genomics_References_Resource($this, $this->serviceName, 'references', array('methods' => array('get' => array('path' => 'v1/references/{referenceId}', 'httpMethod' => 'GET', 'parameters' => array('referenceId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'search' => array('path' => 'v1/references/search', 'httpMethod' => 'POST', 'parameters' => array()))));
        $this->references_bases = new Google_Service_Genomics_ReferencesBases_Resource($this, $this->serviceName, 'bases', array('methods' => array('list' => array('path' => 'v1/references/{referenceId}/bases', 'httpMethod' => 'GET', 'parameters' => array('referenceId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'start' => array('location' => 'query', 'type' => 'string'), 'end' => array('location' => 'query', 'type' => 'string'), 'pageToken' => array('location' => 'query', 'type' => 'string'), 'pageSize' => array('location' => 'query', 'type' => 'integer'))))));
        $this->referencesets = new Google_Service_Genomics_Referencesets_Resource($this, $this->serviceName, 'referencesets', array('methods' => array('get' => array('path' => 'v1/referencesets/{referenceSetId}', 'httpMethod' => 'GET', 'parameters' => array('referenceSetId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'search' => array('path' => 'v1/referencesets/search', 'httpMethod' => 'POST', 'parameters' => array()))));
        $this->variants = new Google_Service_Genomics_Variants_Resource($this, $this->serviceName, 'variants', array('methods' => array('create' => array('path' => 'v1/variants', 'httpMethod' => 'POST', 'parameters' => array()), 'delete' => array('path' => 'v1/variants/{variantId}', 'httpMethod' => 'DELETE', 'parameters' => array('variantId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => 'v1/variants/{variantId}', 'httpMethod' => 'GET', 'parameters' => array('variantId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'import' => array('path' => 'v1/variants:import', 'httpMethod' => 'POST', 'parameters' => array()), 'patch' => array('path' => 'v1/variants/{variantId}', 'httpMethod' => 'PATCH', 'parameters' => array('variantId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'updateMask' => array('location' => 'query', 'type' => 'string'))), 'search' => array('path' => 'v1/variants/search', 'httpMethod' => 'POST', 'parameters' => array()), 'stream' => array('path' => 'v1/variants:stream', 'httpMethod' => 'POST', 'parameters' => array()))));
        $this->variantsets = new Google_Service_Genomics_Variantsets_Resource($this, $this->serviceName, 'variantsets', array('methods' => array('create' => array('path' => 'v1/variantsets', 'httpMethod' => 'POST', 'parameters' => array()), 'delete' => array('path' => 'v1/variantsets/{variantSetId}', 'httpMethod' => 'DELETE', 'parameters' => array('variantSetId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'export' => array('path' => 'v1/variantsets/{variantSetId}:export', 'httpMethod' => 'POST', 'parameters' => array('variantSetId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => 'v1/variantsets/{variantSetId}', 'httpMethod' => 'GET', 'parameters' => array('variantSetId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'patch' => array('path' => 'v1/variantsets/{variantSetId}', 'httpMethod' => 'PATCH', 'parameters' => array('variantSetId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'updateMask' => array('location' => 'query', 'type' => 'string'))), 'search' => array('path' => 'v1/variantsets/search', 'httpMethod' => 'POST', 'parameters' => array()))));
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
 * Service definition for Genomics (v1).
 *
 * <p>
 * An API to store, process, explore, and share genomic data. It supports
 * reference-based alignments, genetic variants, and reference genomes. This API
 * provides an implementation of the Global Alliance for Genomics and Health
 * (GA4GH) v0.5.1 API as well as several extensions.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Genomics', 'VendorDuplicator\\Google_Service_Genomics', \false);
/**
 * The "callsets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $callsets = $genomicsService->callsets;
 *  </code>
 * @internal
 */
class Google_Service_Genomics_Callsets_Resource extends Google_Service_Resource
{
    /**
     * Creates a new call set. For the definitions of call sets and other genomics
     * resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * (callsets.create)
     *
     * @param Google_CallSet $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_CallSet
     */
    public function create(Google_Service_Genomics_CallSet $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('create', array($params), "VendorDuplicator\\Google_Service_Genomics_CallSet");
    }
    /**
     * Deletes a call set. For the definitions of call sets and other genomics
     * resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * (callsets.delete)
     *
     * @param string $callSetId The ID of the call set to be deleted.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Empty
     */
    public function delete($callSetId, $optParams = array())
    {
        $params = array('callSetId' => $callSetId);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Genomics_Empty");
    }
    /**
     * Gets a call set by ID. For the definitions of call sets and other genomics
     * resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * (callsets.get)
     *
     * @param string $callSetId The ID of the call set.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_CallSet
     */
    public function get($callSetId, $optParams = array())
    {
        $params = array('callSetId' => $callSetId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Genomics_CallSet");
    }
    /**
     * Updates a call set. For the definitions of call sets and other genomics
     * resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * This method supports patch semantics. (callsets.patch)
     *
     * @param string $callSetId The ID of the call set to be updated.
     * @param Google_CallSet $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string updateMask An optional mask specifying which fields to
     * update. At this time, the only mutable field is name. The only acceptable
     * value is "name". If unspecified, all mutable fields will be updated.
     * @return Google_Service_Genomics_CallSet
     */
    public function patch($callSetId, Google_Service_Genomics_CallSet $postBody, $optParams = array())
    {
        $params = array('callSetId' => $callSetId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('patch', array($params), "VendorDuplicator\\Google_Service_Genomics_CallSet");
    }
    /**
     * Gets a list of call sets matching the criteria. For the definitions of call
     * sets and other genomics resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * Implements [GlobalAllianceApi.searchCallSets](https://github.com/ga4gh/schema
     * s/blob/v0.5.1/src/main/resources/avro/variantmethods.avdl#L178).
     * (callsets.search)
     *
     * @param Google_SearchCallSetsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_SearchCallSetsResponse
     */
    public function search(Google_Service_Genomics_SearchCallSetsRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('search', array($params), "VendorDuplicator\\Google_Service_Genomics_SearchCallSetsResponse");
    }
}
/**
 * The "callsets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $callsets = $genomicsService->callsets;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Genomics_Callsets_Resource', 'VendorDuplicator\\Google_Service_Genomics_Callsets_Resource', \false);
/**
 * The "datasets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $datasets = $genomicsService->datasets;
 *  </code>
 * @internal
 */
class Google_Service_Genomics_Datasets_Resource extends Google_Service_Resource
{
    /**
     * Creates a new dataset. For the definitions of datasets and other genomics
     * resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * (datasets.create)
     *
     * @param Google_Dataset $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Dataset
     */
    public function create(Google_Service_Genomics_Dataset $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('create', array($params), "VendorDuplicator\\Google_Service_Genomics_Dataset");
    }
    /**
     * Deletes a dataset. For the definitions of datasets and other genomics
     * resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * (datasets.delete)
     *
     * @param string $datasetId The ID of the dataset to be deleted.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Empty
     */
    public function delete($datasetId, $optParams = array())
    {
        $params = array('datasetId' => $datasetId);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Genomics_Empty");
    }
    /**
     * Gets a dataset by ID. For the definitions of datasets and other genomics
     * resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * (datasets.get)
     *
     * @param string $datasetId The ID of the dataset.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Dataset
     */
    public function get($datasetId, $optParams = array())
    {
        $params = array('datasetId' => $datasetId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Genomics_Dataset");
    }
    /**
     * Gets the access control policy for the dataset. This is empty if the policy
     * or resource does not exist. See Getting a Policy for more information. For
     * the definitions of datasets and other genomics resources, see [Fundamentals
     * of Google Genomics](https://cloud.google.com/genomics/fundamentals-of-google-
     * genomics) (datasets.getIamPolicy)
     *
     * @param string $resource REQUIRED: The resource for which policy is being
     * specified. Format is `datasets/`.
     * @param Google_GetIamPolicyRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Policy
     */
    public function getIamPolicy($resource, Google_Service_Genomics_GetIamPolicyRequest $postBody, $optParams = array())
    {
        $params = array('resource' => $resource, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('getIamPolicy', array($params), "VendorDuplicator\\Google_Service_Genomics_Policy");
    }
    /**
     * Lists datasets within a project. For the definitions of datasets and other
     * genomics resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * (datasets.listDatasets)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string projectId Required. The project to list datasets for.
     * @opt_param int pageSize The maximum number of results to return in a single
     * page. If unspecified, defaults to 50. The maximum value is 1024.
     * @opt_param string pageToken The continuation token, which is used to page
     * through large result sets. To get the next page of results, set this
     * parameter to the value of `nextPageToken` from the previous response.
     * @return Google_Service_Genomics_ListDatasetsResponse
     */
    public function listDatasets($optParams = array())
    {
        $params = array();
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Genomics_ListDatasetsResponse");
    }
    /**
     * Updates a dataset. For the definitions of datasets and other genomics
     * resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * This method supports patch semantics. (datasets.patch)
     *
     * @param string $datasetId The ID of the dataset to be updated.
     * @param Google_Dataset $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string updateMask An optional mask specifying which fields to
     * update. At this time, the only mutable field is name. The only acceptable
     * value is "name". If unspecified, all mutable fields will be updated.
     * @return Google_Service_Genomics_Dataset
     */
    public function patch($datasetId, Google_Service_Genomics_Dataset $postBody, $optParams = array())
    {
        $params = array('datasetId' => $datasetId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('patch', array($params), "VendorDuplicator\\Google_Service_Genomics_Dataset");
    }
    /**
     * Sets the access control policy on the specified dataset. Replaces any
     * existing policy. For the definitions of datasets and other genomics
     * resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * See Setting a Policy for more information. (datasets.setIamPolicy)
     *
     * @param string $resource REQUIRED: The resource for which policy is being
     * specified. Format is `datasets/`.
     * @param Google_SetIamPolicyRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Policy
     */
    public function setIamPolicy($resource, Google_Service_Genomics_SetIamPolicyRequest $postBody, $optParams = array())
    {
        $params = array('resource' => $resource, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('setIamPolicy', array($params), "VendorDuplicator\\Google_Service_Genomics_Policy");
    }
    /**
     * Returns permissions that a caller has on the specified resource. See Testing
     * Permissions for more information. For the definitions of datasets and other
     * genomics resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * (datasets.testIamPermissions)
     *
     * @param string $resource REQUIRED: The resource for which policy is being
     * specified. Format is `datasets/`.
     * @param Google_TestIamPermissionsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_TestIamPermissionsResponse
     */
    public function testIamPermissions($resource, Google_Service_Genomics_TestIamPermissionsRequest $postBody, $optParams = array())
    {
        $params = array('resource' => $resource, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('testIamPermissions', array($params), "VendorDuplicator\\Google_Service_Genomics_TestIamPermissionsResponse");
    }
    /**
     * Undeletes a dataset by restoring a dataset which was deleted via this API.
     * For the definitions of datasets and other genomics resources, see
     * [Fundamentals of Google Genomics](https://cloud.google.com/genomics
     * /fundamentals-of-google-genomics) This operation is only possible for a week
     * after the deletion occurred. (datasets.undelete)
     *
     * @param string $datasetId The ID of the dataset to be undeleted.
     * @param Google_UndeleteDatasetRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Dataset
     */
    public function undelete($datasetId, Google_Service_Genomics_UndeleteDatasetRequest $postBody, $optParams = array())
    {
        $params = array('datasetId' => $datasetId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('undelete', array($params), "VendorDuplicator\\Google_Service_Genomics_Dataset");
    }
}
/**
 * The "datasets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $datasets = $genomicsService->datasets;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Genomics_Datasets_Resource', 'VendorDuplicator\\Google_Service_Genomics_Datasets_Resource', \false);
/**
 * The "operations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $operations = $genomicsService->operations;
 *  </code>
 * @internal
 */
class Google_Service_Genomics_Operations_Resource extends Google_Service_Resource
{
    /**
     * Starts asynchronous cancellation on a long-running operation. The server
     * makes a best effort to cancel the operation, but success is not guaranteed.
     * Clients may use Operations.GetOperation or Operations.ListOperations to check
     * whether the cancellation succeeded or the operation completed despite
     * cancellation. (operations.cancel)
     *
     * @param string $name The name of the operation resource to be cancelled.
     * @param Google_CancelOperationRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Empty
     */
    public function cancel($name, Google_Service_Genomics_CancelOperationRequest $postBody, $optParams = array())
    {
        $params = array('name' => $name, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('cancel', array($params), "VendorDuplicator\\Google_Service_Genomics_Empty");
    }
    /**
     * Gets the latest state of a long-running operation. Clients can use this
     * method to poll the operation result at intervals as recommended by the API
     * service. (operations.get)
     *
     * @param string $name The name of the operation resource.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Operation
     */
    public function get($name, $optParams = array())
    {
        $params = array('name' => $name);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Genomics_Operation");
    }
    /**
     * Lists operations that match the specified filter in the request.
     * (operations.listOperations)
     *
     * @param string $name The name of the operation collection.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter A string for filtering Operations. The following
     * filter fields are supported: * projectId: Required. Corresponds to
     * OperationMetadata.projectId. * createTime: The time this job was created, in
     * seconds from the [epoch](http://en.wikipedia.org/wiki/Unix_time). Can use
     * `>=` and/or `= 1432140000` * `projectId = my-project AND createTime >=
     * 1432140000 AND createTime <= 1432150000 AND status = RUNNING`
     * @opt_param int pageSize The maximum number of results to return. If
     * unspecified, defaults to 256. The maximum value is 2048.
     * @opt_param string pageToken The standard list page token.
     * @return Google_Service_Genomics_ListOperationsResponse
     */
    public function listOperations($name, $optParams = array())
    {
        $params = array('name' => $name);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Genomics_ListOperationsResponse");
    }
}
/**
 * The "operations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $operations = $genomicsService->operations;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Genomics_Operations_Resource', 'VendorDuplicator\\Google_Service_Genomics_Operations_Resource', \false);
/**
 * The "readgroupsets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $readgroupsets = $genomicsService->readgroupsets;
 *  </code>
 * @internal
 */
class Google_Service_Genomics_Readgroupsets_Resource extends Google_Service_Resource
{
    /**
     * Deletes a read group set. For the definitions of read group sets and other
     * genomics resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * (readgroupsets.delete)
     *
     * @param string $readGroupSetId The ID of the read group set to be deleted. The
     * caller must have WRITE permissions to the dataset associated with this read
     * group set.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Empty
     */
    public function delete($readGroupSetId, $optParams = array())
    {
        $params = array('readGroupSetId' => $readGroupSetId);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Genomics_Empty");
    }
    /**
     * Exports a read group set to a BAM file in Google Cloud Storage. For the
     * definitions of read group sets and other genomics resources, see
     * [Fundamentals of Google Genomics](https://cloud.google.com/genomics
     * /fundamentals-of-google-genomics) Note that currently there may be some
     * differences between exported BAM files and the original BAM file at the time
     * of import. See
     * [ImportReadGroupSets](google.genomics.v1.ReadServiceV1.ImportReadGroupSets)
     * for caveats. (readgroupsets.export)
     *
     * @param string $readGroupSetId Required. The ID of the read group set to
     * export. The caller must have READ access to this read group set.
     * @param Google_ExportReadGroupSetRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Operation
     */
    public function export($readGroupSetId, Google_Service_Genomics_ExportReadGroupSetRequest $postBody, $optParams = array())
    {
        $params = array('readGroupSetId' => $readGroupSetId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('export', array($params), "VendorDuplicator\\Google_Service_Genomics_Operation");
    }
    /**
     * Gets a read group set by ID. For the definitions of read group sets and other
     * genomics resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * (readgroupsets.get)
     *
     * @param string $readGroupSetId The ID of the read group set.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_ReadGroupSet
     */
    public function get($readGroupSetId, $optParams = array())
    {
        $params = array('readGroupSetId' => $readGroupSetId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Genomics_ReadGroupSet");
    }
    /**
     * Creates read group sets by asynchronously importing the provided information.
     * For the definitions of read group sets and other genomics resources, see
     * [Fundamentals of Google Genomics](https://cloud.google.com/genomics
     * /fundamentals-of-google-genomics) The caller must have WRITE permissions to
     * the dataset. ## Notes on [BAM](https://samtools.github.io/hts-
     * specs/SAMv1.pdf) import - Tags will be converted to strings - tag types are
     * not preserved - Comments (`@CO`) in the input file header will not be
     * preserved - Original header order of references (`@SQ`) will not be preserved
     * - Any reverse stranded unmapped reads will be reverse complemented, and their
     * qualities (also the "BQ" and "OQ" tags, if any) will be reversed - Unmapped
     * reads will be stripped of positional information (reference name and
     * position) (readgroupsets.import)
     *
     * @param Google_ImportReadGroupSetsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Operation
     */
    public function import(Google_Service_Genomics_ImportReadGroupSetsRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('import', array($params), "VendorDuplicator\\Google_Service_Genomics_Operation");
    }
    /**
     * Updates a read group set. For the definitions of read group sets and other
     * genomics resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * This method supports patch semantics. (readgroupsets.patch)
     *
     * @param string $readGroupSetId The ID of the read group set to be updated. The
     * caller must have WRITE permissions to the dataset associated with this read
     * group set.
     * @param Google_ReadGroupSet $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string updateMask An optional mask specifying which fields to
     * update. Supported fields: * name. * referenceSetId. Leaving `updateMask`
     * unset is equivalent to specifying all mutable fields.
     * @return Google_Service_Genomics_ReadGroupSet
     */
    public function patch($readGroupSetId, Google_Service_Genomics_ReadGroupSet $postBody, $optParams = array())
    {
        $params = array('readGroupSetId' => $readGroupSetId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('patch', array($params), "VendorDuplicator\\Google_Service_Genomics_ReadGroupSet");
    }
    /**
     * Searches for read group sets matching the criteria. For the definitions of
     * read group sets and other genomics resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * Implements [GlobalAllianceApi.searchReadGroupSets](https://github.com/ga4gh/s
     * chemas/blob/v0.5.1/src/main/resources/avro/readmethods.avdl#L135).
     * (readgroupsets.search)
     *
     * @param Google_SearchReadGroupSetsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_SearchReadGroupSetsResponse
     */
    public function search(Google_Service_Genomics_SearchReadGroupSetsRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('search', array($params), "VendorDuplicator\\Google_Service_Genomics_SearchReadGroupSetsResponse");
    }
}
/**
 * The "readgroupsets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $readgroupsets = $genomicsService->readgroupsets;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Genomics_Readgroupsets_Resource', 'VendorDuplicator\\Google_Service_Genomics_Readgroupsets_Resource', \false);
/**
 * The "coveragebuckets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $coveragebuckets = $genomicsService->coveragebuckets;
 *  </code>
 * @internal
 */
class Google_Service_Genomics_ReadgroupsetsCoveragebuckets_Resource extends Google_Service_Resource
{
    /**
     * Lists fixed width coverage buckets for a read group set, each of which
     * correspond to a range of a reference sequence. Each bucket summarizes
     * coverage information across its corresponding genomic range. For the
     * definitions of read group sets and other genomics resources, see
     * [Fundamentals of Google Genomics](https://cloud.google.com/genomics
     * /fundamentals-of-google-genomics) Coverage is defined as the number of reads
     * which are aligned to a given base in the reference sequence. Coverage buckets
     * are available at several precomputed bucket widths, enabling retrieval of
     * various coverage 'zoom levels'. The caller must have READ permissions for the
     * target read group set. (coveragebuckets.listReadgroupsetsCoveragebuckets)
     *
     * @param string $readGroupSetId Required. The ID of the read group set over
     * which coverage is requested.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string referenceName The name of the reference to query, within
     * the reference set associated with this query. Optional.
     * @opt_param string start The start position of the range on the reference,
     * 0-based inclusive. If specified, `referenceName` must also be specified.
     * Defaults to 0.
     * @opt_param string end The end position of the range on the reference, 0-based
     * exclusive. If specified, `referenceName` must also be specified. If unset or
     * 0, defaults to the length of the reference.
     * @opt_param string targetBucketWidth The desired width of each reported
     * coverage bucket in base pairs. This will be rounded down to the nearest
     * precomputed bucket width; the value of which is returned as `bucketWidth` in
     * the response. Defaults to infinity (each bucket spans an entire reference
     * sequence) or the length of the target range, if specified. The smallest
     * precomputed `bucketWidth` is currently 2048 base pairs; this is subject to
     * change.
     * @opt_param string pageToken The continuation token, which is used to page
     * through large result sets. To get the next page of results, set this
     * parameter to the value of `nextPageToken` from the previous response.
     * @opt_param int pageSize The maximum number of results to return in a single
     * page. If unspecified, defaults to 1024. The maximum value is 2048.
     * @return Google_Service_Genomics_ListCoverageBucketsResponse
     */
    public function listReadgroupsetsCoveragebuckets($readGroupSetId, $optParams = array())
    {
        $params = array('readGroupSetId' => $readGroupSetId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Genomics_ListCoverageBucketsResponse");
    }
}
/**
 * The "coveragebuckets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $coveragebuckets = $genomicsService->coveragebuckets;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Genomics_ReadgroupsetsCoveragebuckets_Resource', 'VendorDuplicator\\Google_Service_Genomics_ReadgroupsetsCoveragebuckets_Resource', \false);
/**
 * The "reads" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $reads = $genomicsService->reads;
 *  </code>
 * @internal
 */
class Google_Service_Genomics_Reads_Resource extends Google_Service_Resource
{
    /**
     * Gets a list of reads for one or more read group sets. For the definitions of
     * read group sets and other genomics resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * Reads search operates over a genomic coordinate space of reference sequence &
     * position defined over the reference sequences to which the requested read
     * group sets are aligned. If a target positional range is specified, search
     * returns all reads whose alignment to the reference genome overlap the range.
     * A query which specifies only read group set IDs yields all reads in those
     * read group sets, including unmapped reads. All reads returned (including
     * reads on subsequent pages) are ordered by genomic coordinate (by reference
     * sequence, then position). Reads with equivalent genomic coordinates are
     * returned in an unspecified order. This order is consistent, such that two
     * queries for the same content (regardless of page size) yield reads in the
     * same order across their respective streams of paginated responses. Implements
     * [GlobalAllianceApi.searchReads](https://github.com/ga4gh/schemas/blob/v0.5.1/
     * src/main/resources/avro/readmethods.avdl#L85). (reads.search)
     *
     * @param Google_SearchReadsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_SearchReadsResponse
     */
    public function search(Google_Service_Genomics_SearchReadsRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('search', array($params), "VendorDuplicator\\Google_Service_Genomics_SearchReadsResponse");
    }
    /**
     * Returns a stream of all the reads matching the search request, ordered by
     * reference name, position, and ID. (reads.stream)
     *
     * @param Google_StreamReadsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_StreamReadsResponse
     */
    public function stream(Google_Service_Genomics_StreamReadsRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('stream', array($params), "VendorDuplicator\\Google_Service_Genomics_StreamReadsResponse");
    }
}
/**
 * The "reads" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $reads = $genomicsService->reads;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Genomics_Reads_Resource', 'VendorDuplicator\\Google_Service_Genomics_Reads_Resource', \false);
/**
 * The "references" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $references = $genomicsService->references;
 *  </code>
 * @internal
 */
class Google_Service_Genomics_References_Resource extends Google_Service_Resource
{
    /**
     * Gets a reference. For the definitions of references and other genomics
     * resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * Implements [GlobalAllianceApi.getReference](https://github.com/ga4gh/schemas/
     * blob/v0.5.1/src/main/resources/avro/referencemethods.avdl#L158).
     * (references.get)
     *
     * @param string $referenceId The ID of the reference.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Reference
     */
    public function get($referenceId, $optParams = array())
    {
        $params = array('referenceId' => $referenceId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Genomics_Reference");
    }
    /**
     * Searches for references which match the given criteria. For the definitions
     * of references and other genomics resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * Implements [GlobalAllianceApi.searchReferences](https://github.com/ga4gh/sche
     * mas/blob/v0.5.1/src/main/resources/avro/referencemethods.avdl#L146).
     * (references.search)
     *
     * @param Google_SearchReferencesRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_SearchReferencesResponse
     */
    public function search(Google_Service_Genomics_SearchReferencesRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('search', array($params), "VendorDuplicator\\Google_Service_Genomics_SearchReferencesResponse");
    }
}
/**
 * The "references" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $references = $genomicsService->references;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Genomics_References_Resource', 'VendorDuplicator\\Google_Service_Genomics_References_Resource', \false);
/**
 * The "bases" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $bases = $genomicsService->bases;
 *  </code>
 * @internal
 */
class Google_Service_Genomics_ReferencesBases_Resource extends Google_Service_Resource
{
    /**
     * Lists the bases in a reference, optionally restricted to a range. For the
     * definitions of references and other genomics resources, see [Fundamentals of
     * Google Genomics](https://cloud.google.com/genomics/fundamentals-of-google-
     * genomics) Implements [GlobalAllianceApi.getReferenceBases](https://github.com
     * /ga4gh/schemas/blob/v0.5.1/src/main/resources/avro/referencemethods.avdl#L221
     * ). (bases.listReferencesBases)
     *
     * @param string $referenceId The ID of the reference.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string start The start position (0-based) of this query. Defaults
     * to 0.
     * @opt_param string end The end position (0-based, exclusive) of this query.
     * Defaults to the length of this reference.
     * @opt_param string pageToken The continuation token, which is used to page
     * through large result sets. To get the next page of results, set this
     * parameter to the value of `nextPageToken` from the previous response.
     * @opt_param int pageSize The maximum number of bases to return in a single
     * page. If unspecified, defaults to 200Kbp (kilo base pairs). The maximum value
     * is 10Mbp (mega base pairs).
     * @return Google_Service_Genomics_ListBasesResponse
     */
    public function listReferencesBases($referenceId, $optParams = array())
    {
        $params = array('referenceId' => $referenceId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Genomics_ListBasesResponse");
    }
}
/**
 * The "bases" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $bases = $genomicsService->bases;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Genomics_ReferencesBases_Resource', 'VendorDuplicator\\Google_Service_Genomics_ReferencesBases_Resource', \false);
/**
 * The "referencesets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $referencesets = $genomicsService->referencesets;
 *  </code>
 * @internal
 */
class Google_Service_Genomics_Referencesets_Resource extends Google_Service_Resource
{
    /**
     * Gets a reference set. For the definitions of references and other genomics
     * resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * Implements [GlobalAllianceApi.getReferenceSet](https://github.com/ga4gh/schem
     * as/blob/v0.5.1/src/main/resources/avro/referencemethods.avdl#L83).
     * (referencesets.get)
     *
     * @param string $referenceSetId The ID of the reference set.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_ReferenceSet
     */
    public function get($referenceSetId, $optParams = array())
    {
        $params = array('referenceSetId' => $referenceSetId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Genomics_ReferenceSet");
    }
    /**
     * Searches for reference sets which match the given criteria. For the
     * definitions of references and other genomics resources, see [Fundamentals of
     * Google Genomics](https://cloud.google.com/genomics/fundamentals-of-google-
     * genomics) Implements [GlobalAllianceApi.searchReferenceSets](https://github.c
     * om/ga4gh/schemas/blob/v0.5.1/src/main/resources/avro/referencemethods.avdl#L7
     * 1) (referencesets.search)
     *
     * @param Google_SearchReferenceSetsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_SearchReferenceSetsResponse
     */
    public function search(Google_Service_Genomics_SearchReferenceSetsRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('search', array($params), "VendorDuplicator\\Google_Service_Genomics_SearchReferenceSetsResponse");
    }
}
/**
 * The "referencesets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $referencesets = $genomicsService->referencesets;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Genomics_Referencesets_Resource', 'VendorDuplicator\\Google_Service_Genomics_Referencesets_Resource', \false);
/**
 * The "variants" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $variants = $genomicsService->variants;
 *  </code>
 * @internal
 */
class Google_Service_Genomics_Variants_Resource extends Google_Service_Resource
{
    /**
     * Creates a new variant. For the definitions of variants and other genomics
     * resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * (variants.create)
     *
     * @param Google_Variant $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Variant
     */
    public function create(Google_Service_Genomics_Variant $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('create', array($params), "VendorDuplicator\\Google_Service_Genomics_Variant");
    }
    /**
     * Deletes a variant. For the definitions of variants and other genomics
     * resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * (variants.delete)
     *
     * @param string $variantId The ID of the variant to be deleted.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Empty
     */
    public function delete($variantId, $optParams = array())
    {
        $params = array('variantId' => $variantId);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Genomics_Empty");
    }
    /**
     * Gets a variant by ID. For the definitions of variants and other genomics
     * resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * (variants.get)
     *
     * @param string $variantId The ID of the variant.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Variant
     */
    public function get($variantId, $optParams = array())
    {
        $params = array('variantId' => $variantId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Genomics_Variant");
    }
    /**
     * Creates variant data by asynchronously importing the provided information.
     * For the definitions of variant sets and other genomics resources, see
     * [Fundamentals of Google Genomics](https://cloud.google.com/genomics
     * /fundamentals-of-google-genomics) The variants for import will be merged with
     * any existing variant that matches its reference sequence, start, end,
     * reference bases, and alternative bases. If no such variant exists, a new one
     * will be created. When variants are merged, the call information from the new
     * variant is added to the existing variant, and other fields (such as key/value
     * pairs) are discarded. In particular, this means for merged VCF variants that
     * have conflicting INFO fields, some data will be arbitrarily discarded. As a
     * special case, for single-sample VCF files, QUAL and FILTER fields will be
     * moved to the call level; these are sometimes interpreted in a call-specific
     * context. Imported VCF headers are appended to the metadata already in a
     * variant set. (variants.import)
     *
     * @param Google_ImportVariantsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Operation
     */
    public function import(Google_Service_Genomics_ImportVariantsRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('import', array($params), "VendorDuplicator\\Google_Service_Genomics_Operation");
    }
    /**
     * Updates a variant. For the definitions of variants and other genomics
     * resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * This method supports patch semantics. Returns the modified variant without
     * its calls. (variants.patch)
     *
     * @param string $variantId The ID of the variant to be updated.
     * @param Google_Variant $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string updateMask An optional mask specifying which fields to
     * update. At this time, mutable fields are names and info. Acceptable values
     * are "names" and "info". If unspecified, all mutable fields will be updated.
     * @return Google_Service_Genomics_Variant
     */
    public function patch($variantId, Google_Service_Genomics_Variant $postBody, $optParams = array())
    {
        $params = array('variantId' => $variantId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('patch', array($params), "VendorDuplicator\\Google_Service_Genomics_Variant");
    }
    /**
     * Gets a list of variants matching the criteria. For the definitions of
     * variants and other genomics resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * Implements [GlobalAllianceApi.searchVariants](https://github.com/ga4gh/schema
     * s/blob/v0.5.1/src/main/resources/avro/variantmethods.avdl#L126).
     * (variants.search)
     *
     * @param Google_SearchVariantsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_SearchVariantsResponse
     */
    public function search(Google_Service_Genomics_SearchVariantsRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('search', array($params), "VendorDuplicator\\Google_Service_Genomics_SearchVariantsResponse");
    }
    /**
     * Returns a stream of all the variants matching the search request, ordered by
     * reference name, position, and ID. (variants.stream)
     *
     * @param Google_StreamVariantsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_StreamVariantsResponse
     */
    public function stream(Google_Service_Genomics_StreamVariantsRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('stream', array($params), "VendorDuplicator\\Google_Service_Genomics_StreamVariantsResponse");
    }
}
/**
 * The "variants" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $variants = $genomicsService->variants;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Genomics_Variants_Resource', 'VendorDuplicator\\Google_Service_Genomics_Variants_Resource', \false);
/**
 * The "variantsets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $variantsets = $genomicsService->variantsets;
 *  </code>
 * @internal
 */
class Google_Service_Genomics_Variantsets_Resource extends Google_Service_Resource
{
    /**
     * Creates a new variant set. For the definitions of variant sets and other
     * genomics resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * The provided variant set must have a valid `datasetId` set - all other fields
     * are optional. Note that the `id` field will be ignored, as this is assigned
     * by the server. (variantsets.create)
     *
     * @param Google_VariantSet $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_VariantSet
     */
    public function create(Google_Service_Genomics_VariantSet $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('create', array($params), "VendorDuplicator\\Google_Service_Genomics_VariantSet");
    }
    /**
     * Deletes the contents of a variant set. The variant set object is not deleted.
     * For the definitions of variant sets and other genomics resources, see
     * [Fundamentals of Google Genomics](https://cloud.google.com/genomics
     * /fundamentals-of-google-genomics) (variantsets.delete)
     *
     * @param string $variantSetId The ID of the variant set to be deleted.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Empty
     */
    public function delete($variantSetId, $optParams = array())
    {
        $params = array('variantSetId' => $variantSetId);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Genomics_Empty");
    }
    /**
     * Exports variant set data to an external destination. For the definitions of
     * variant sets and other genomics resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * (variantsets.export)
     *
     * @param string $variantSetId Required. The ID of the variant set that contains
     * variant data which should be exported. The caller must have READ access to
     * this variant set.
     * @param Google_ExportVariantSetRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_Operation
     */
    public function export($variantSetId, Google_Service_Genomics_ExportVariantSetRequest $postBody, $optParams = array())
    {
        $params = array('variantSetId' => $variantSetId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('export', array($params), "VendorDuplicator\\Google_Service_Genomics_Operation");
    }
    /**
     * Gets a variant set by ID. For the definitions of variant sets and other
     * genomics resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * (variantsets.get)
     *
     * @param string $variantSetId Required. The ID of the variant set.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_VariantSet
     */
    public function get($variantSetId, $optParams = array())
    {
        $params = array('variantSetId' => $variantSetId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Genomics_VariantSet");
    }
    /**
     * Updates a variant set using patch semantics. For the definitions of variant
     * sets and other genomics resources, see [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * (variantsets.patch)
     *
     * @param string $variantSetId The ID of the variant to be updated (must already
     * exist).
     * @param Google_VariantSet $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string updateMask An optional mask specifying which fields to
     * update. Supported fields: * metadata. Leaving `updateMask` unset is
     * equivalent to specifying all mutable fields.
     * @return Google_Service_Genomics_VariantSet
     */
    public function patch($variantSetId, Google_Service_Genomics_VariantSet $postBody, $optParams = array())
    {
        $params = array('variantSetId' => $variantSetId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('patch', array($params), "VendorDuplicator\\Google_Service_Genomics_VariantSet");
    }
    /**
     * Returns a list of all variant sets matching search criteria. For the
     * definitions of variant sets and other genomics resources, see [Fundamentals
     * of Google Genomics](https://cloud.google.com/genomics/fundamentals-of-google-
     * genomics) Implements [GlobalAllianceApi.searchVariantSets](https://github.com
     * /ga4gh/schemas/blob/v0.5.1/src/main/resources/avro/variantmethods.avdl#L49).
     * (variantsets.search)
     *
     * @param Google_SearchVariantSetsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_SearchVariantSetsResponse
     */
    public function search(Google_Service_Genomics_SearchVariantSetsRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('search', array($params), "VendorDuplicator\\Google_Service_Genomics_SearchVariantSetsResponse");
    }
}
/**
 * The "variantsets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $variantsets = $genomicsService->variantsets;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Genomics_Variantsets_Resource', 'VendorDuplicator\\Google_Service_Genomics_Variantsets_Resource', \false);
/** @internal */
class Google_Service_Genomics_Binding extends Google_Collection
{
    protected $collection_key = 'members';
    protected $internal_gapi_mappings = array();
    public $members;
    public $role;
    public function setMembers($members)
    {
        $this->members = $members;
    }
    public function getMembers()
    {
        return $this->members;
    }
    public function setRole($role)
    {
        $this->role = $role;
    }
    public function getRole()
    {
        return $this->role;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_Binding', 'VendorDuplicator\\Google_Service_Genomics_Binding', \false);
/** @internal */
class Google_Service_Genomics_CallSet extends Google_Collection
{
    protected $collection_key = 'variantSetIds';
    protected $internal_gapi_mappings = array();
    public $created;
    public $id;
    public $info;
    public $name;
    public $sampleId;
    public $variantSetIds;
    public function setCreated($created)
    {
        $this->created = $created;
    }
    public function getCreated()
    {
        return $this->created;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setInfo($info)
    {
        $this->info = $info;
    }
    public function getInfo()
    {
        return $this->info;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setSampleId($sampleId)
    {
        $this->sampleId = $sampleId;
    }
    public function getSampleId()
    {
        return $this->sampleId;
    }
    public function setVariantSetIds($variantSetIds)
    {
        $this->variantSetIds = $variantSetIds;
    }
    public function getVariantSetIds()
    {
        return $this->variantSetIds;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_CallSet', 'VendorDuplicator\\Google_Service_Genomics_CallSet', \false);
/** @internal */
class Google_Service_Genomics_CancelOperationRequest extends Google_Model
{
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_CancelOperationRequest', 'VendorDuplicator\\Google_Service_Genomics_CancelOperationRequest', \false);
/** @internal */
class Google_Service_Genomics_CigarUnit extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $operation;
    public $operationLength;
    public $referenceSequence;
    public function setOperation($operation)
    {
        $this->operation = $operation;
    }
    public function getOperation()
    {
        return $this->operation;
    }
    public function setOperationLength($operationLength)
    {
        $this->operationLength = $operationLength;
    }
    public function getOperationLength()
    {
        return $this->operationLength;
    }
    public function setReferenceSequence($referenceSequence)
    {
        $this->referenceSequence = $referenceSequence;
    }
    public function getReferenceSequence()
    {
        return $this->referenceSequence;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_CigarUnit', 'VendorDuplicator\\Google_Service_Genomics_CigarUnit', \false);
/** @internal */
class Google_Service_Genomics_CloudAuditOptions extends Google_Model
{
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_CloudAuditOptions', 'VendorDuplicator\\Google_Service_Genomics_CloudAuditOptions', \false);
/** @internal */
class Google_Service_Genomics_Condition extends Google_Collection
{
    protected $collection_key = 'values';
    protected $internal_gapi_mappings = array();
    public $iam;
    public $op;
    public $svc;
    public $sys;
    public $value;
    public $values;
    public function setIam($iam)
    {
        $this->iam = $iam;
    }
    public function getIam()
    {
        return $this->iam;
    }
    public function setOp($op)
    {
        $this->op = $op;
    }
    public function getOp()
    {
        return $this->op;
    }
    public function setSvc($svc)
    {
        $this->svc = $svc;
    }
    public function getSvc()
    {
        return $this->svc;
    }
    public function setSys($sys)
    {
        $this->sys = $sys;
    }
    public function getSys()
    {
        return $this->sys;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
    public function setValues($values)
    {
        $this->values = $values;
    }
    public function getValues()
    {
        return $this->values;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_Condition', 'VendorDuplicator\\Google_Service_Genomics_Condition', \false);
/** @internal */
class Google_Service_Genomics_CounterOptions extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $field;
    public $metric;
    public function setField($field)
    {
        $this->field = $field;
    }
    public function getField()
    {
        return $this->field;
    }
    public function setMetric($metric)
    {
        $this->metric = $metric;
    }
    public function getMetric()
    {
        return $this->metric;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_CounterOptions', 'VendorDuplicator\\Google_Service_Genomics_CounterOptions', \false);
/** @internal */
class Google_Service_Genomics_CoverageBucket extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $meanCoverage;
    protected $rangeType = 'VendorDuplicator\\Google_Service_Genomics_Range';
    protected $rangeDataType = '';
    public function setMeanCoverage($meanCoverage)
    {
        $this->meanCoverage = $meanCoverage;
    }
    public function getMeanCoverage()
    {
        return $this->meanCoverage;
    }
    public function setRange(Google_Service_Genomics_Range $range)
    {
        $this->range = $range;
    }
    public function getRange()
    {
        return $this->range;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_CoverageBucket', 'VendorDuplicator\\Google_Service_Genomics_CoverageBucket', \false);
/** @internal */
class Google_Service_Genomics_DataAccessOptions extends Google_Model
{
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_DataAccessOptions', 'VendorDuplicator\\Google_Service_Genomics_DataAccessOptions', \false);
/** @internal */
class Google_Service_Genomics_Dataset extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $createTime;
    public $id;
    public $name;
    public $projectId;
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;
    }
    public function getCreateTime()
    {
        return $this->createTime;
    }
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
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }
    public function getProjectId()
    {
        return $this->projectId;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_Dataset', 'VendorDuplicator\\Google_Service_Genomics_Dataset', \false);
/** @internal */
class Google_Service_Genomics_Empty extends Google_Model
{
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_Empty', 'VendorDuplicator\\Google_Service_Genomics_Empty', \false);
/** @internal */
class Google_Service_Genomics_Experiment extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $instrumentModel;
    public $libraryId;
    public $platformUnit;
    public $sequencingCenter;
    public function setInstrumentModel($instrumentModel)
    {
        $this->instrumentModel = $instrumentModel;
    }
    public function getInstrumentModel()
    {
        return $this->instrumentModel;
    }
    public function setLibraryId($libraryId)
    {
        $this->libraryId = $libraryId;
    }
    public function getLibraryId()
    {
        return $this->libraryId;
    }
    public function setPlatformUnit($platformUnit)
    {
        $this->platformUnit = $platformUnit;
    }
    public function getPlatformUnit()
    {
        return $this->platformUnit;
    }
    public function setSequencingCenter($sequencingCenter)
    {
        $this->sequencingCenter = $sequencingCenter;
    }
    public function getSequencingCenter()
    {
        return $this->sequencingCenter;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_Experiment', 'VendorDuplicator\\Google_Service_Genomics_Experiment', \false);
/** @internal */
class Google_Service_Genomics_ExportReadGroupSetRequest extends Google_Collection
{
    protected $collection_key = 'referenceNames';
    protected $internal_gapi_mappings = array();
    public $exportUri;
    public $projectId;
    public $referenceNames;
    public function setExportUri($exportUri)
    {
        $this->exportUri = $exportUri;
    }
    public function getExportUri()
    {
        return $this->exportUri;
    }
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }
    public function getProjectId()
    {
        return $this->projectId;
    }
    public function setReferenceNames($referenceNames)
    {
        $this->referenceNames = $referenceNames;
    }
    public function getReferenceNames()
    {
        return $this->referenceNames;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_ExportReadGroupSetRequest', 'VendorDuplicator\\Google_Service_Genomics_ExportReadGroupSetRequest', \false);
/** @internal */
class Google_Service_Genomics_ExportVariantSetRequest extends Google_Collection
{
    protected $collection_key = 'callSetIds';
    protected $internal_gapi_mappings = array();
    public $bigqueryDataset;
    public $bigqueryTable;
    public $callSetIds;
    public $format;
    public $projectId;
    public function setBigqueryDataset($bigqueryDataset)
    {
        $this->bigqueryDataset = $bigqueryDataset;
    }
    public function getBigqueryDataset()
    {
        return $this->bigqueryDataset;
    }
    public function setBigqueryTable($bigqueryTable)
    {
        $this->bigqueryTable = $bigqueryTable;
    }
    public function getBigqueryTable()
    {
        return $this->bigqueryTable;
    }
    public function setCallSetIds($callSetIds)
    {
        $this->callSetIds = $callSetIds;
    }
    public function getCallSetIds()
    {
        return $this->callSetIds;
    }
    public function setFormat($format)
    {
        $this->format = $format;
    }
    public function getFormat()
    {
        return $this->format;
    }
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }
    public function getProjectId()
    {
        return $this->projectId;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_ExportVariantSetRequest', 'VendorDuplicator\\Google_Service_Genomics_ExportVariantSetRequest', \false);
/** @internal */
class Google_Service_Genomics_GetIamPolicyRequest extends Google_Model
{
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_GetIamPolicyRequest', 'VendorDuplicator\\Google_Service_Genomics_GetIamPolicyRequest', \false);
/** @internal */
class Google_Service_Genomics_ImportReadGroupSetsRequest extends Google_Collection
{
    protected $collection_key = 'sourceUris';
    protected $internal_gapi_mappings = array();
    public $datasetId;
    public $partitionStrategy;
    public $referenceSetId;
    public $sourceUris;
    public function setDatasetId($datasetId)
    {
        $this->datasetId = $datasetId;
    }
    public function getDatasetId()
    {
        return $this->datasetId;
    }
    public function setPartitionStrategy($partitionStrategy)
    {
        $this->partitionStrategy = $partitionStrategy;
    }
    public function getPartitionStrategy()
    {
        return $this->partitionStrategy;
    }
    public function setReferenceSetId($referenceSetId)
    {
        $this->referenceSetId = $referenceSetId;
    }
    public function getReferenceSetId()
    {
        return $this->referenceSetId;
    }
    public function setSourceUris($sourceUris)
    {
        $this->sourceUris = $sourceUris;
    }
    public function getSourceUris()
    {
        return $this->sourceUris;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_ImportReadGroupSetsRequest', 'VendorDuplicator\\Google_Service_Genomics_ImportReadGroupSetsRequest', \false);
/** @internal */
class Google_Service_Genomics_ImportReadGroupSetsResponse extends Google_Collection
{
    protected $collection_key = 'readGroupSetIds';
    protected $internal_gapi_mappings = array();
    public $readGroupSetIds;
    public function setReadGroupSetIds($readGroupSetIds)
    {
        $this->readGroupSetIds = $readGroupSetIds;
    }
    public function getReadGroupSetIds()
    {
        return $this->readGroupSetIds;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_ImportReadGroupSetsResponse', 'VendorDuplicator\\Google_Service_Genomics_ImportReadGroupSetsResponse', \false);
/** @internal */
class Google_Service_Genomics_ImportVariantsRequest extends Google_Collection
{
    protected $collection_key = 'sourceUris';
    protected $internal_gapi_mappings = array();
    public $format;
    public $normalizeReferenceNames;
    public $sourceUris;
    public $variantSetId;
    public function setFormat($format)
    {
        $this->format = $format;
    }
    public function getFormat()
    {
        return $this->format;
    }
    public function setNormalizeReferenceNames($normalizeReferenceNames)
    {
        $this->normalizeReferenceNames = $normalizeReferenceNames;
    }
    public function getNormalizeReferenceNames()
    {
        return $this->normalizeReferenceNames;
    }
    public function setSourceUris($sourceUris)
    {
        $this->sourceUris = $sourceUris;
    }
    public function getSourceUris()
    {
        return $this->sourceUris;
    }
    public function setVariantSetId($variantSetId)
    {
        $this->variantSetId = $variantSetId;
    }
    public function getVariantSetId()
    {
        return $this->variantSetId;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_ImportVariantsRequest', 'VendorDuplicator\\Google_Service_Genomics_ImportVariantsRequest', \false);
/** @internal */
class Google_Service_Genomics_ImportVariantsResponse extends Google_Collection
{
    protected $collection_key = 'callSetIds';
    protected $internal_gapi_mappings = array();
    public $callSetIds;
    public function setCallSetIds($callSetIds)
    {
        $this->callSetIds = $callSetIds;
    }
    public function getCallSetIds()
    {
        return $this->callSetIds;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_ImportVariantsResponse', 'VendorDuplicator\\Google_Service_Genomics_ImportVariantsResponse', \false);
/** @internal */
class Google_Service_Genomics_LinearAlignment extends Google_Collection
{
    protected $collection_key = 'cigar';
    protected $internal_gapi_mappings = array();
    protected $cigarType = 'VendorDuplicator\\Google_Service_Genomics_CigarUnit';
    protected $cigarDataType = 'array';
    public $mappingQuality;
    protected $positionType = 'VendorDuplicator\\Google_Service_Genomics_Position';
    protected $positionDataType = '';
    public function setCigar($cigar)
    {
        $this->cigar = $cigar;
    }
    public function getCigar()
    {
        return $this->cigar;
    }
    public function setMappingQuality($mappingQuality)
    {
        $this->mappingQuality = $mappingQuality;
    }
    public function getMappingQuality()
    {
        return $this->mappingQuality;
    }
    public function setPosition(Google_Service_Genomics_Position $position)
    {
        $this->position = $position;
    }
    public function getPosition()
    {
        return $this->position;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_LinearAlignment', 'VendorDuplicator\\Google_Service_Genomics_LinearAlignment', \false);
/** @internal */
class Google_Service_Genomics_ListBasesResponse extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $nextPageToken;
    public $offset;
    public $sequence;
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
    public function setOffset($offset)
    {
        $this->offset = $offset;
    }
    public function getOffset()
    {
        return $this->offset;
    }
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;
    }
    public function getSequence()
    {
        return $this->sequence;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_ListBasesResponse', 'VendorDuplicator\\Google_Service_Genomics_ListBasesResponse', \false);
/** @internal */
class Google_Service_Genomics_ListCoverageBucketsResponse extends Google_Collection
{
    protected $collection_key = 'coverageBuckets';
    protected $internal_gapi_mappings = array();
    public $bucketWidth;
    protected $coverageBucketsType = 'VendorDuplicator\\Google_Service_Genomics_CoverageBucket';
    protected $coverageBucketsDataType = 'array';
    public $nextPageToken;
    public function setBucketWidth($bucketWidth)
    {
        $this->bucketWidth = $bucketWidth;
    }
    public function getBucketWidth()
    {
        return $this->bucketWidth;
    }
    public function setCoverageBuckets($coverageBuckets)
    {
        $this->coverageBuckets = $coverageBuckets;
    }
    public function getCoverageBuckets()
    {
        return $this->coverageBuckets;
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
\class_alias('VendorDuplicator\\Google_Service_Genomics_ListCoverageBucketsResponse', 'VendorDuplicator\\Google_Service_Genomics_ListCoverageBucketsResponse', \false);
/** @internal */
class Google_Service_Genomics_ListDatasetsResponse extends Google_Collection
{
    protected $collection_key = 'datasets';
    protected $internal_gapi_mappings = array();
    protected $datasetsType = 'VendorDuplicator\\Google_Service_Genomics_Dataset';
    protected $datasetsDataType = 'array';
    public $nextPageToken;
    public function setDatasets($datasets)
    {
        $this->datasets = $datasets;
    }
    public function getDatasets()
    {
        return $this->datasets;
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
\class_alias('VendorDuplicator\\Google_Service_Genomics_ListDatasetsResponse', 'VendorDuplicator\\Google_Service_Genomics_ListDatasetsResponse', \false);
/** @internal */
class Google_Service_Genomics_ListOperationsResponse extends Google_Collection
{
    protected $collection_key = 'operations';
    protected $internal_gapi_mappings = array();
    public $nextPageToken;
    protected $operationsType = 'VendorDuplicator\\Google_Service_Genomics_Operation';
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
\class_alias('VendorDuplicator\\Google_Service_Genomics_ListOperationsResponse', 'VendorDuplicator\\Google_Service_Genomics_ListOperationsResponse', \false);
/** @internal */
class Google_Service_Genomics_LogConfig extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $cloudAuditType = 'VendorDuplicator\\Google_Service_Genomics_CloudAuditOptions';
    protected $cloudAuditDataType = '';
    protected $counterType = 'VendorDuplicator\\Google_Service_Genomics_CounterOptions';
    protected $counterDataType = '';
    protected $dataAccessType = 'VendorDuplicator\\Google_Service_Genomics_DataAccessOptions';
    protected $dataAccessDataType = '';
    public function setCloudAudit(Google_Service_Genomics_CloudAuditOptions $cloudAudit)
    {
        $this->cloudAudit = $cloudAudit;
    }
    public function getCloudAudit()
    {
        return $this->cloudAudit;
    }
    public function setCounter(Google_Service_Genomics_CounterOptions $counter)
    {
        $this->counter = $counter;
    }
    public function getCounter()
    {
        return $this->counter;
    }
    public function setDataAccess(Google_Service_Genomics_DataAccessOptions $dataAccess)
    {
        $this->dataAccess = $dataAccess;
    }
    public function getDataAccess()
    {
        return $this->dataAccess;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_LogConfig', 'VendorDuplicator\\Google_Service_Genomics_LogConfig', \false);
/** @internal */
class Google_Service_Genomics_Operation extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $done;
    protected $errorType = 'VendorDuplicator\\Google_Service_Genomics_Status';
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
    public function setError(Google_Service_Genomics_Status $error)
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
\class_alias('VendorDuplicator\\Google_Service_Genomics_Operation', 'VendorDuplicator\\Google_Service_Genomics_Operation', \false);
/** @internal */
class Google_Service_Genomics_OperationEvent extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $description;
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_OperationEvent', 'VendorDuplicator\\Google_Service_Genomics_OperationEvent', \false);
/** @internal */
class Google_Service_Genomics_OperationMetadata extends Google_Collection
{
    protected $collection_key = 'events';
    protected $internal_gapi_mappings = array();
    public $createTime;
    protected $eventsType = 'VendorDuplicator\\Google_Service_Genomics_OperationEvent';
    protected $eventsDataType = 'array';
    public $projectId;
    public $request;
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;
    }
    public function getCreateTime()
    {
        return $this->createTime;
    }
    public function setEvents($events)
    {
        $this->events = $events;
    }
    public function getEvents()
    {
        return $this->events;
    }
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }
    public function getProjectId()
    {
        return $this->projectId;
    }
    public function setRequest($request)
    {
        $this->request = $request;
    }
    public function getRequest()
    {
        return $this->request;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_OperationMetadata', 'VendorDuplicator\\Google_Service_Genomics_OperationMetadata', \false);
/** @internal */
class Google_Service_Genomics_Policy extends Google_Collection
{
    protected $collection_key = 'rules';
    protected $internal_gapi_mappings = array();
    protected $bindingsType = 'VendorDuplicator\\Google_Service_Genomics_Binding';
    protected $bindingsDataType = 'array';
    public $etag;
    protected $rulesType = 'VendorDuplicator\\Google_Service_Genomics_Rule';
    protected $rulesDataType = 'array';
    public $version;
    public function setBindings($bindings)
    {
        $this->bindings = $bindings;
    }
    public function getBindings()
    {
        return $this->bindings;
    }
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setRules($rules)
    {
        $this->rules = $rules;
    }
    public function getRules()
    {
        return $this->rules;
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
\class_alias('VendorDuplicator\\Google_Service_Genomics_Policy', 'VendorDuplicator\\Google_Service_Genomics_Policy', \false);
/** @internal */
class Google_Service_Genomics_Position extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $position;
    public $referenceName;
    public $reverseStrand;
    public function setPosition($position)
    {
        $this->position = $position;
    }
    public function getPosition()
    {
        return $this->position;
    }
    public function setReferenceName($referenceName)
    {
        $this->referenceName = $referenceName;
    }
    public function getReferenceName()
    {
        return $this->referenceName;
    }
    public function setReverseStrand($reverseStrand)
    {
        $this->reverseStrand = $reverseStrand;
    }
    public function getReverseStrand()
    {
        return $this->reverseStrand;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_Position', 'VendorDuplicator\\Google_Service_Genomics_Position', \false);
/** @internal */
class Google_Service_Genomics_Program extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $commandLine;
    public $id;
    public $name;
    public $prevProgramId;
    public $version;
    public function setCommandLine($commandLine)
    {
        $this->commandLine = $commandLine;
    }
    public function getCommandLine()
    {
        return $this->commandLine;
    }
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
    public function setPrevProgramId($prevProgramId)
    {
        $this->prevProgramId = $prevProgramId;
    }
    public function getPrevProgramId()
    {
        return $this->prevProgramId;
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
\class_alias('VendorDuplicator\\Google_Service_Genomics_Program', 'VendorDuplicator\\Google_Service_Genomics_Program', \false);
/** @internal */
class Google_Service_Genomics_Range extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $end;
    public $referenceName;
    public $start;
    public function setEnd($end)
    {
        $this->end = $end;
    }
    public function getEnd()
    {
        return $this->end;
    }
    public function setReferenceName($referenceName)
    {
        $this->referenceName = $referenceName;
    }
    public function getReferenceName()
    {
        return $this->referenceName;
    }
    public function setStart($start)
    {
        $this->start = $start;
    }
    public function getStart()
    {
        return $this->start;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_Range', 'VendorDuplicator\\Google_Service_Genomics_Range', \false);
/** @internal */
class Google_Service_Genomics_Read extends Google_Collection
{
    protected $collection_key = 'alignedQuality';
    protected $internal_gapi_mappings = array();
    public $alignedQuality;
    public $alignedSequence;
    protected $alignmentType = 'VendorDuplicator\\Google_Service_Genomics_LinearAlignment';
    protected $alignmentDataType = '';
    public $duplicateFragment;
    public $failedVendorQualityChecks;
    public $fragmentLength;
    public $fragmentName;
    public $id;
    public $info;
    protected $nextMatePositionType = 'VendorDuplicator\\Google_Service_Genomics_Position';
    protected $nextMatePositionDataType = '';
    public $numberReads;
    public $properPlacement;
    public $readGroupId;
    public $readGroupSetId;
    public $readNumber;
    public $secondaryAlignment;
    public $supplementaryAlignment;
    public function setAlignedQuality($alignedQuality)
    {
        $this->alignedQuality = $alignedQuality;
    }
    public function getAlignedQuality()
    {
        return $this->alignedQuality;
    }
    public function setAlignedSequence($alignedSequence)
    {
        $this->alignedSequence = $alignedSequence;
    }
    public function getAlignedSequence()
    {
        return $this->alignedSequence;
    }
    public function setAlignment(Google_Service_Genomics_LinearAlignment $alignment)
    {
        $this->alignment = $alignment;
    }
    public function getAlignment()
    {
        return $this->alignment;
    }
    public function setDuplicateFragment($duplicateFragment)
    {
        $this->duplicateFragment = $duplicateFragment;
    }
    public function getDuplicateFragment()
    {
        return $this->duplicateFragment;
    }
    public function setFailedVendorQualityChecks($failedVendorQualityChecks)
    {
        $this->failedVendorQualityChecks = $failedVendorQualityChecks;
    }
    public function getFailedVendorQualityChecks()
    {
        return $this->failedVendorQualityChecks;
    }
    public function setFragmentLength($fragmentLength)
    {
        $this->fragmentLength = $fragmentLength;
    }
    public function getFragmentLength()
    {
        return $this->fragmentLength;
    }
    public function setFragmentName($fragmentName)
    {
        $this->fragmentName = $fragmentName;
    }
    public function getFragmentName()
    {
        return $this->fragmentName;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setInfo($info)
    {
        $this->info = $info;
    }
    public function getInfo()
    {
        return $this->info;
    }
    public function setNextMatePosition(Google_Service_Genomics_Position $nextMatePosition)
    {
        $this->nextMatePosition = $nextMatePosition;
    }
    public function getNextMatePosition()
    {
        return $this->nextMatePosition;
    }
    public function setNumberReads($numberReads)
    {
        $this->numberReads = $numberReads;
    }
    public function getNumberReads()
    {
        return $this->numberReads;
    }
    public function setProperPlacement($properPlacement)
    {
        $this->properPlacement = $properPlacement;
    }
    public function getProperPlacement()
    {
        return $this->properPlacement;
    }
    public function setReadGroupId($readGroupId)
    {
        $this->readGroupId = $readGroupId;
    }
    public function getReadGroupId()
    {
        return $this->readGroupId;
    }
    public function setReadGroupSetId($readGroupSetId)
    {
        $this->readGroupSetId = $readGroupSetId;
    }
    public function getReadGroupSetId()
    {
        return $this->readGroupSetId;
    }
    public function setReadNumber($readNumber)
    {
        $this->readNumber = $readNumber;
    }
    public function getReadNumber()
    {
        return $this->readNumber;
    }
    public function setSecondaryAlignment($secondaryAlignment)
    {
        $this->secondaryAlignment = $secondaryAlignment;
    }
    public function getSecondaryAlignment()
    {
        return $this->secondaryAlignment;
    }
    public function setSupplementaryAlignment($supplementaryAlignment)
    {
        $this->supplementaryAlignment = $supplementaryAlignment;
    }
    public function getSupplementaryAlignment()
    {
        return $this->supplementaryAlignment;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_Read', 'VendorDuplicator\\Google_Service_Genomics_Read', \false);
/** @internal */
class Google_Service_Genomics_ReadGroup extends Google_Collection
{
    protected $collection_key = 'programs';
    protected $internal_gapi_mappings = array();
    public $datasetId;
    public $description;
    protected $experimentType = 'VendorDuplicator\\Google_Service_Genomics_Experiment';
    protected $experimentDataType = '';
    public $id;
    public $info;
    public $name;
    public $predictedInsertSize;
    protected $programsType = 'VendorDuplicator\\Google_Service_Genomics_Program';
    protected $programsDataType = 'array';
    public $referenceSetId;
    public $sampleId;
    public function setDatasetId($datasetId)
    {
        $this->datasetId = $datasetId;
    }
    public function getDatasetId()
    {
        return $this->datasetId;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setExperiment(Google_Service_Genomics_Experiment $experiment)
    {
        $this->experiment = $experiment;
    }
    public function getExperiment()
    {
        return $this->experiment;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setInfo($info)
    {
        $this->info = $info;
    }
    public function getInfo()
    {
        return $this->info;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setPredictedInsertSize($predictedInsertSize)
    {
        $this->predictedInsertSize = $predictedInsertSize;
    }
    public function getPredictedInsertSize()
    {
        return $this->predictedInsertSize;
    }
    public function setPrograms($programs)
    {
        $this->programs = $programs;
    }
    public function getPrograms()
    {
        return $this->programs;
    }
    public function setReferenceSetId($referenceSetId)
    {
        $this->referenceSetId = $referenceSetId;
    }
    public function getReferenceSetId()
    {
        return $this->referenceSetId;
    }
    public function setSampleId($sampleId)
    {
        $this->sampleId = $sampleId;
    }
    public function getSampleId()
    {
        return $this->sampleId;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_ReadGroup', 'VendorDuplicator\\Google_Service_Genomics_ReadGroup', \false);
/** @internal */
class Google_Service_Genomics_ReadGroupSet extends Google_Collection
{
    protected $collection_key = 'readGroups';
    protected $internal_gapi_mappings = array();
    public $datasetId;
    public $filename;
    public $id;
    public $info;
    public $name;
    protected $readGroupsType = 'VendorDuplicator\\Google_Service_Genomics_ReadGroup';
    protected $readGroupsDataType = 'array';
    public $referenceSetId;
    public function setDatasetId($datasetId)
    {
        $this->datasetId = $datasetId;
    }
    public function getDatasetId()
    {
        return $this->datasetId;
    }
    public function setFilename($filename)
    {
        $this->filename = $filename;
    }
    public function getFilename()
    {
        return $this->filename;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setInfo($info)
    {
        $this->info = $info;
    }
    public function getInfo()
    {
        return $this->info;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setReadGroups($readGroups)
    {
        $this->readGroups = $readGroups;
    }
    public function getReadGroups()
    {
        return $this->readGroups;
    }
    public function setReferenceSetId($referenceSetId)
    {
        $this->referenceSetId = $referenceSetId;
    }
    public function getReferenceSetId()
    {
        return $this->referenceSetId;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_ReadGroupSet', 'VendorDuplicator\\Google_Service_Genomics_ReadGroupSet', \false);
/** @internal */
class Google_Service_Genomics_Reference extends Google_Collection
{
    protected $collection_key = 'sourceAccessions';
    protected $internal_gapi_mappings = array();
    public $id;
    public $length;
    public $md5checksum;
    public $name;
    public $ncbiTaxonId;
    public $sourceAccessions;
    public $sourceUri;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setLength($length)
    {
        $this->length = $length;
    }
    public function getLength()
    {
        return $this->length;
    }
    public function setMd5checksum($md5checksum)
    {
        $this->md5checksum = $md5checksum;
    }
    public function getMd5checksum()
    {
        return $this->md5checksum;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setNcbiTaxonId($ncbiTaxonId)
    {
        $this->ncbiTaxonId = $ncbiTaxonId;
    }
    public function getNcbiTaxonId()
    {
        return $this->ncbiTaxonId;
    }
    public function setSourceAccessions($sourceAccessions)
    {
        $this->sourceAccessions = $sourceAccessions;
    }
    public function getSourceAccessions()
    {
        return $this->sourceAccessions;
    }
    public function setSourceUri($sourceUri)
    {
        $this->sourceUri = $sourceUri;
    }
    public function getSourceUri()
    {
        return $this->sourceUri;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_Reference', 'VendorDuplicator\\Google_Service_Genomics_Reference', \false);
/** @internal */
class Google_Service_Genomics_ReferenceBound extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $referenceName;
    public $upperBound;
    public function setReferenceName($referenceName)
    {
        $this->referenceName = $referenceName;
    }
    public function getReferenceName()
    {
        return $this->referenceName;
    }
    public function setUpperBound($upperBound)
    {
        $this->upperBound = $upperBound;
    }
    public function getUpperBound()
    {
        return $this->upperBound;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_ReferenceBound', 'VendorDuplicator\\Google_Service_Genomics_ReferenceBound', \false);
/** @internal */
class Google_Service_Genomics_ReferenceSet extends Google_Collection
{
    protected $collection_key = 'sourceAccessions';
    protected $internal_gapi_mappings = array();
    public $assemblyId;
    public $description;
    public $id;
    public $md5checksum;
    public $ncbiTaxonId;
    public $referenceIds;
    public $sourceAccessions;
    public $sourceUri;
    public function setAssemblyId($assemblyId)
    {
        $this->assemblyId = $assemblyId;
    }
    public function getAssemblyId()
    {
        return $this->assemblyId;
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
    public function setMd5checksum($md5checksum)
    {
        $this->md5checksum = $md5checksum;
    }
    public function getMd5checksum()
    {
        return $this->md5checksum;
    }
    public function setNcbiTaxonId($ncbiTaxonId)
    {
        $this->ncbiTaxonId = $ncbiTaxonId;
    }
    public function getNcbiTaxonId()
    {
        return $this->ncbiTaxonId;
    }
    public function setReferenceIds($referenceIds)
    {
        $this->referenceIds = $referenceIds;
    }
    public function getReferenceIds()
    {
        return $this->referenceIds;
    }
    public function setSourceAccessions($sourceAccessions)
    {
        $this->sourceAccessions = $sourceAccessions;
    }
    public function getSourceAccessions()
    {
        return $this->sourceAccessions;
    }
    public function setSourceUri($sourceUri)
    {
        $this->sourceUri = $sourceUri;
    }
    public function getSourceUri()
    {
        return $this->sourceUri;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_ReferenceSet', 'VendorDuplicator\\Google_Service_Genomics_ReferenceSet', \false);
/** @internal */
class Google_Service_Genomics_Rule extends Google_Collection
{
    protected $collection_key = 'permissions';
    protected $internal_gapi_mappings = array();
    public $action;
    protected $conditionsType = 'VendorDuplicator\\Google_Service_Genomics_Condition';
    protected $conditionsDataType = 'array';
    public $description;
    public $in;
    protected $logConfigType = 'VendorDuplicator\\Google_Service_Genomics_LogConfig';
    protected $logConfigDataType = 'array';
    public $notIn;
    public $permissions;
    public function setAction($action)
    {
        $this->action = $action;
    }
    public function getAction()
    {
        return $this->action;
    }
    public function setConditions($conditions)
    {
        $this->conditions = $conditions;
    }
    public function getConditions()
    {
        return $this->conditions;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setIn($in)
    {
        $this->in = $in;
    }
    public function getIn()
    {
        return $this->in;
    }
    public function setLogConfig($logConfig)
    {
        $this->logConfig = $logConfig;
    }
    public function getLogConfig()
    {
        return $this->logConfig;
    }
    public function setNotIn($notIn)
    {
        $this->notIn = $notIn;
    }
    public function getNotIn()
    {
        return $this->notIn;
    }
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
    }
    public function getPermissions()
    {
        return $this->permissions;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_Rule', 'VendorDuplicator\\Google_Service_Genomics_Rule', \false);
/** @internal */
class Google_Service_Genomics_SearchCallSetsRequest extends Google_Collection
{
    protected $collection_key = 'variantSetIds';
    protected $internal_gapi_mappings = array();
    public $name;
    public $pageSize;
    public $pageToken;
    public $variantSetIds;
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }
    public function getPageSize()
    {
        return $this->pageSize;
    }
    public function setPageToken($pageToken)
    {
        $this->pageToken = $pageToken;
    }
    public function getPageToken()
    {
        return $this->pageToken;
    }
    public function setVariantSetIds($variantSetIds)
    {
        $this->variantSetIds = $variantSetIds;
    }
    public function getVariantSetIds()
    {
        return $this->variantSetIds;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_SearchCallSetsRequest', 'VendorDuplicator\\Google_Service_Genomics_SearchCallSetsRequest', \false);
/** @internal */
class Google_Service_Genomics_SearchCallSetsResponse extends Google_Collection
{
    protected $collection_key = 'callSets';
    protected $internal_gapi_mappings = array();
    protected $callSetsType = 'VendorDuplicator\\Google_Service_Genomics_CallSet';
    protected $callSetsDataType = 'array';
    public $nextPageToken;
    public function setCallSets($callSets)
    {
        $this->callSets = $callSets;
    }
    public function getCallSets()
    {
        return $this->callSets;
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
\class_alias('VendorDuplicator\\Google_Service_Genomics_SearchCallSetsResponse', 'VendorDuplicator\\Google_Service_Genomics_SearchCallSetsResponse', \false);
/** @internal */
class Google_Service_Genomics_SearchReadGroupSetsRequest extends Google_Collection
{
    protected $collection_key = 'datasetIds';
    protected $internal_gapi_mappings = array();
    public $datasetIds;
    public $name;
    public $pageSize;
    public $pageToken;
    public function setDatasetIds($datasetIds)
    {
        $this->datasetIds = $datasetIds;
    }
    public function getDatasetIds()
    {
        return $this->datasetIds;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }
    public function getPageSize()
    {
        return $this->pageSize;
    }
    public function setPageToken($pageToken)
    {
        $this->pageToken = $pageToken;
    }
    public function getPageToken()
    {
        return $this->pageToken;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_SearchReadGroupSetsRequest', 'VendorDuplicator\\Google_Service_Genomics_SearchReadGroupSetsRequest', \false);
/** @internal */
class Google_Service_Genomics_SearchReadGroupSetsResponse extends Google_Collection
{
    protected $collection_key = 'readGroupSets';
    protected $internal_gapi_mappings = array();
    public $nextPageToken;
    protected $readGroupSetsType = 'VendorDuplicator\\Google_Service_Genomics_ReadGroupSet';
    protected $readGroupSetsDataType = 'array';
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
    public function setReadGroupSets($readGroupSets)
    {
        $this->readGroupSets = $readGroupSets;
    }
    public function getReadGroupSets()
    {
        return $this->readGroupSets;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_SearchReadGroupSetsResponse', 'VendorDuplicator\\Google_Service_Genomics_SearchReadGroupSetsResponse', \false);
/** @internal */
class Google_Service_Genomics_SearchReadsRequest extends Google_Collection
{
    protected $collection_key = 'readGroupSetIds';
    protected $internal_gapi_mappings = array();
    public $end;
    public $pageSize;
    public $pageToken;
    public $readGroupIds;
    public $readGroupSetIds;
    public $referenceName;
    public $start;
    public function setEnd($end)
    {
        $this->end = $end;
    }
    public function getEnd()
    {
        return $this->end;
    }
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }
    public function getPageSize()
    {
        return $this->pageSize;
    }
    public function setPageToken($pageToken)
    {
        $this->pageToken = $pageToken;
    }
    public function getPageToken()
    {
        return $this->pageToken;
    }
    public function setReadGroupIds($readGroupIds)
    {
        $this->readGroupIds = $readGroupIds;
    }
    public function getReadGroupIds()
    {
        return $this->readGroupIds;
    }
    public function setReadGroupSetIds($readGroupSetIds)
    {
        $this->readGroupSetIds = $readGroupSetIds;
    }
    public function getReadGroupSetIds()
    {
        return $this->readGroupSetIds;
    }
    public function setReferenceName($referenceName)
    {
        $this->referenceName = $referenceName;
    }
    public function getReferenceName()
    {
        return $this->referenceName;
    }
    public function setStart($start)
    {
        $this->start = $start;
    }
    public function getStart()
    {
        return $this->start;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_SearchReadsRequest', 'VendorDuplicator\\Google_Service_Genomics_SearchReadsRequest', \false);
/** @internal */
class Google_Service_Genomics_SearchReadsResponse extends Google_Collection
{
    protected $collection_key = 'alignments';
    protected $internal_gapi_mappings = array();
    protected $alignmentsType = 'VendorDuplicator\\Google_Service_Genomics_Read';
    protected $alignmentsDataType = 'array';
    public $nextPageToken;
    public function setAlignments($alignments)
    {
        $this->alignments = $alignments;
    }
    public function getAlignments()
    {
        return $this->alignments;
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
\class_alias('VendorDuplicator\\Google_Service_Genomics_SearchReadsResponse', 'VendorDuplicator\\Google_Service_Genomics_SearchReadsResponse', \false);
/** @internal */
class Google_Service_Genomics_SearchReferenceSetsRequest extends Google_Collection
{
    protected $collection_key = 'md5checksums';
    protected $internal_gapi_mappings = array();
    public $accessions;
    public $assemblyId;
    public $md5checksums;
    public $pageSize;
    public $pageToken;
    public function setAccessions($accessions)
    {
        $this->accessions = $accessions;
    }
    public function getAccessions()
    {
        return $this->accessions;
    }
    public function setAssemblyId($assemblyId)
    {
        $this->assemblyId = $assemblyId;
    }
    public function getAssemblyId()
    {
        return $this->assemblyId;
    }
    public function setMd5checksums($md5checksums)
    {
        $this->md5checksums = $md5checksums;
    }
    public function getMd5checksums()
    {
        return $this->md5checksums;
    }
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }
    public function getPageSize()
    {
        return $this->pageSize;
    }
    public function setPageToken($pageToken)
    {
        $this->pageToken = $pageToken;
    }
    public function getPageToken()
    {
        return $this->pageToken;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_SearchReferenceSetsRequest', 'VendorDuplicator\\Google_Service_Genomics_SearchReferenceSetsRequest', \false);
/** @internal */
class Google_Service_Genomics_SearchReferenceSetsResponse extends Google_Collection
{
    protected $collection_key = 'referenceSets';
    protected $internal_gapi_mappings = array();
    public $nextPageToken;
    protected $referenceSetsType = 'VendorDuplicator\\Google_Service_Genomics_ReferenceSet';
    protected $referenceSetsDataType = 'array';
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
    public function setReferenceSets($referenceSets)
    {
        $this->referenceSets = $referenceSets;
    }
    public function getReferenceSets()
    {
        return $this->referenceSets;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_SearchReferenceSetsResponse', 'VendorDuplicator\\Google_Service_Genomics_SearchReferenceSetsResponse', \false);
/** @internal */
class Google_Service_Genomics_SearchReferencesRequest extends Google_Collection
{
    protected $collection_key = 'md5checksums';
    protected $internal_gapi_mappings = array();
    public $accessions;
    public $md5checksums;
    public $pageSize;
    public $pageToken;
    public $referenceSetId;
    public function setAccessions($accessions)
    {
        $this->accessions = $accessions;
    }
    public function getAccessions()
    {
        return $this->accessions;
    }
    public function setMd5checksums($md5checksums)
    {
        $this->md5checksums = $md5checksums;
    }
    public function getMd5checksums()
    {
        return $this->md5checksums;
    }
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }
    public function getPageSize()
    {
        return $this->pageSize;
    }
    public function setPageToken($pageToken)
    {
        $this->pageToken = $pageToken;
    }
    public function getPageToken()
    {
        return $this->pageToken;
    }
    public function setReferenceSetId($referenceSetId)
    {
        $this->referenceSetId = $referenceSetId;
    }
    public function getReferenceSetId()
    {
        return $this->referenceSetId;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_SearchReferencesRequest', 'VendorDuplicator\\Google_Service_Genomics_SearchReferencesRequest', \false);
/** @internal */
class Google_Service_Genomics_SearchReferencesResponse extends Google_Collection
{
    protected $collection_key = 'references';
    protected $internal_gapi_mappings = array();
    public $nextPageToken;
    protected $referencesType = 'VendorDuplicator\\Google_Service_Genomics_Reference';
    protected $referencesDataType = 'array';
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
    public function setReferences($references)
    {
        $this->references = $references;
    }
    public function getReferences()
    {
        return $this->references;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_SearchReferencesResponse', 'VendorDuplicator\\Google_Service_Genomics_SearchReferencesResponse', \false);
/** @internal */
class Google_Service_Genomics_SearchVariantSetsRequest extends Google_Collection
{
    protected $collection_key = 'datasetIds';
    protected $internal_gapi_mappings = array();
    public $datasetIds;
    public $pageSize;
    public $pageToken;
    public function setDatasetIds($datasetIds)
    {
        $this->datasetIds = $datasetIds;
    }
    public function getDatasetIds()
    {
        return $this->datasetIds;
    }
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }
    public function getPageSize()
    {
        return $this->pageSize;
    }
    public function setPageToken($pageToken)
    {
        $this->pageToken = $pageToken;
    }
    public function getPageToken()
    {
        return $this->pageToken;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_SearchVariantSetsRequest', 'VendorDuplicator\\Google_Service_Genomics_SearchVariantSetsRequest', \false);
/** @internal */
class Google_Service_Genomics_SearchVariantSetsResponse extends Google_Collection
{
    protected $collection_key = 'variantSets';
    protected $internal_gapi_mappings = array();
    public $nextPageToken;
    protected $variantSetsType = 'VendorDuplicator\\Google_Service_Genomics_VariantSet';
    protected $variantSetsDataType = 'array';
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
    public function setVariantSets($variantSets)
    {
        $this->variantSets = $variantSets;
    }
    public function getVariantSets()
    {
        return $this->variantSets;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_SearchVariantSetsResponse', 'VendorDuplicator\\Google_Service_Genomics_SearchVariantSetsResponse', \false);
/** @internal */
class Google_Service_Genomics_SearchVariantsRequest extends Google_Collection
{
    protected $collection_key = 'variantSetIds';
    protected $internal_gapi_mappings = array();
    public $callSetIds;
    public $end;
    public $maxCalls;
    public $pageSize;
    public $pageToken;
    public $referenceName;
    public $start;
    public $variantName;
    public $variantSetIds;
    public function setCallSetIds($callSetIds)
    {
        $this->callSetIds = $callSetIds;
    }
    public function getCallSetIds()
    {
        return $this->callSetIds;
    }
    public function setEnd($end)
    {
        $this->end = $end;
    }
    public function getEnd()
    {
        return $this->end;
    }
    public function setMaxCalls($maxCalls)
    {
        $this->maxCalls = $maxCalls;
    }
    public function getMaxCalls()
    {
        return $this->maxCalls;
    }
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }
    public function getPageSize()
    {
        return $this->pageSize;
    }
    public function setPageToken($pageToken)
    {
        $this->pageToken = $pageToken;
    }
    public function getPageToken()
    {
        return $this->pageToken;
    }
    public function setReferenceName($referenceName)
    {
        $this->referenceName = $referenceName;
    }
    public function getReferenceName()
    {
        return $this->referenceName;
    }
    public function setStart($start)
    {
        $this->start = $start;
    }
    public function getStart()
    {
        return $this->start;
    }
    public function setVariantName($variantName)
    {
        $this->variantName = $variantName;
    }
    public function getVariantName()
    {
        return $this->variantName;
    }
    public function setVariantSetIds($variantSetIds)
    {
        $this->variantSetIds = $variantSetIds;
    }
    public function getVariantSetIds()
    {
        return $this->variantSetIds;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_SearchVariantsRequest', 'VendorDuplicator\\Google_Service_Genomics_SearchVariantsRequest', \false);
/** @internal */
class Google_Service_Genomics_SearchVariantsResponse extends Google_Collection
{
    protected $collection_key = 'variants';
    protected $internal_gapi_mappings = array();
    public $nextPageToken;
    protected $variantsType = 'VendorDuplicator\\Google_Service_Genomics_Variant';
    protected $variantsDataType = 'array';
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
    public function setVariants($variants)
    {
        $this->variants = $variants;
    }
    public function getVariants()
    {
        return $this->variants;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_SearchVariantsResponse', 'VendorDuplicator\\Google_Service_Genomics_SearchVariantsResponse', \false);
/** @internal */
class Google_Service_Genomics_SetIamPolicyRequest extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $policyType = 'VendorDuplicator\\Google_Service_Genomics_Policy';
    protected $policyDataType = '';
    public function setPolicy(Google_Service_Genomics_Policy $policy)
    {
        $this->policy = $policy;
    }
    public function getPolicy()
    {
        return $this->policy;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_SetIamPolicyRequest', 'VendorDuplicator\\Google_Service_Genomics_SetIamPolicyRequest', \false);
/** @internal */
class Google_Service_Genomics_Status extends Google_Collection
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
\class_alias('VendorDuplicator\\Google_Service_Genomics_Status', 'VendorDuplicator\\Google_Service_Genomics_Status', \false);
/** @internal */
class Google_Service_Genomics_StreamReadsRequest extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $end;
    public $projectId;
    public $readGroupSetId;
    public $referenceName;
    public $start;
    public function setEnd($end)
    {
        $this->end = $end;
    }
    public function getEnd()
    {
        return $this->end;
    }
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }
    public function getProjectId()
    {
        return $this->projectId;
    }
    public function setReadGroupSetId($readGroupSetId)
    {
        $this->readGroupSetId = $readGroupSetId;
    }
    public function getReadGroupSetId()
    {
        return $this->readGroupSetId;
    }
    public function setReferenceName($referenceName)
    {
        $this->referenceName = $referenceName;
    }
    public function getReferenceName()
    {
        return $this->referenceName;
    }
    public function setStart($start)
    {
        $this->start = $start;
    }
    public function getStart()
    {
        return $this->start;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_StreamReadsRequest', 'VendorDuplicator\\Google_Service_Genomics_StreamReadsRequest', \false);
/** @internal */
class Google_Service_Genomics_StreamReadsResponse extends Google_Collection
{
    protected $collection_key = 'alignments';
    protected $internal_gapi_mappings = array();
    protected $alignmentsType = 'VendorDuplicator\\Google_Service_Genomics_Read';
    protected $alignmentsDataType = 'array';
    public function setAlignments($alignments)
    {
        $this->alignments = $alignments;
    }
    public function getAlignments()
    {
        return $this->alignments;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_StreamReadsResponse', 'VendorDuplicator\\Google_Service_Genomics_StreamReadsResponse', \false);
/** @internal */
class Google_Service_Genomics_StreamVariantsRequest extends Google_Collection
{
    protected $collection_key = 'callSetIds';
    protected $internal_gapi_mappings = array();
    public $callSetIds;
    public $end;
    public $projectId;
    public $referenceName;
    public $start;
    public $variantSetId;
    public function setCallSetIds($callSetIds)
    {
        $this->callSetIds = $callSetIds;
    }
    public function getCallSetIds()
    {
        return $this->callSetIds;
    }
    public function setEnd($end)
    {
        $this->end = $end;
    }
    public function getEnd()
    {
        return $this->end;
    }
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }
    public function getProjectId()
    {
        return $this->projectId;
    }
    public function setReferenceName($referenceName)
    {
        $this->referenceName = $referenceName;
    }
    public function getReferenceName()
    {
        return $this->referenceName;
    }
    public function setStart($start)
    {
        $this->start = $start;
    }
    public function getStart()
    {
        return $this->start;
    }
    public function setVariantSetId($variantSetId)
    {
        $this->variantSetId = $variantSetId;
    }
    public function getVariantSetId()
    {
        return $this->variantSetId;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_StreamVariantsRequest', 'VendorDuplicator\\Google_Service_Genomics_StreamVariantsRequest', \false);
/** @internal */
class Google_Service_Genomics_StreamVariantsResponse extends Google_Collection
{
    protected $collection_key = 'variants';
    protected $internal_gapi_mappings = array();
    protected $variantsType = 'VendorDuplicator\\Google_Service_Genomics_Variant';
    protected $variantsDataType = 'array';
    public function setVariants($variants)
    {
        $this->variants = $variants;
    }
    public function getVariants()
    {
        return $this->variants;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_StreamVariantsResponse', 'VendorDuplicator\\Google_Service_Genomics_StreamVariantsResponse', \false);
/** @internal */
class Google_Service_Genomics_TestIamPermissionsRequest extends Google_Collection
{
    protected $collection_key = 'permissions';
    protected $internal_gapi_mappings = array();
    public $permissions;
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
    }
    public function getPermissions()
    {
        return $this->permissions;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_TestIamPermissionsRequest', 'VendorDuplicator\\Google_Service_Genomics_TestIamPermissionsRequest', \false);
/** @internal */
class Google_Service_Genomics_TestIamPermissionsResponse extends Google_Collection
{
    protected $collection_key = 'permissions';
    protected $internal_gapi_mappings = array();
    public $permissions;
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
    }
    public function getPermissions()
    {
        return $this->permissions;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_TestIamPermissionsResponse', 'VendorDuplicator\\Google_Service_Genomics_TestIamPermissionsResponse', \false);
/** @internal */
class Google_Service_Genomics_UndeleteDatasetRequest extends Google_Model
{
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_UndeleteDatasetRequest', 'VendorDuplicator\\Google_Service_Genomics_UndeleteDatasetRequest', \false);
/** @internal */
class Google_Service_Genomics_Variant extends Google_Collection
{
    protected $collection_key = 'names';
    protected $internal_gapi_mappings = array();
    public $alternateBases;
    protected $callsType = 'VendorDuplicator\\Google_Service_Genomics_VariantCall';
    protected $callsDataType = 'array';
    public $created;
    public $end;
    public $filter;
    public $id;
    public $info;
    public $names;
    public $quality;
    public $referenceBases;
    public $referenceName;
    public $start;
    public $variantSetId;
    public function setAlternateBases($alternateBases)
    {
        $this->alternateBases = $alternateBases;
    }
    public function getAlternateBases()
    {
        return $this->alternateBases;
    }
    public function setCalls($calls)
    {
        $this->calls = $calls;
    }
    public function getCalls()
    {
        return $this->calls;
    }
    public function setCreated($created)
    {
        $this->created = $created;
    }
    public function getCreated()
    {
        return $this->created;
    }
    public function setEnd($end)
    {
        $this->end = $end;
    }
    public function getEnd()
    {
        return $this->end;
    }
    public function setFilter($filter)
    {
        $this->filter = $filter;
    }
    public function getFilter()
    {
        return $this->filter;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setInfo($info)
    {
        $this->info = $info;
    }
    public function getInfo()
    {
        return $this->info;
    }
    public function setNames($names)
    {
        $this->names = $names;
    }
    public function getNames()
    {
        return $this->names;
    }
    public function setQuality($quality)
    {
        $this->quality = $quality;
    }
    public function getQuality()
    {
        return $this->quality;
    }
    public function setReferenceBases($referenceBases)
    {
        $this->referenceBases = $referenceBases;
    }
    public function getReferenceBases()
    {
        return $this->referenceBases;
    }
    public function setReferenceName($referenceName)
    {
        $this->referenceName = $referenceName;
    }
    public function getReferenceName()
    {
        return $this->referenceName;
    }
    public function setStart($start)
    {
        $this->start = $start;
    }
    public function getStart()
    {
        return $this->start;
    }
    public function setVariantSetId($variantSetId)
    {
        $this->variantSetId = $variantSetId;
    }
    public function getVariantSetId()
    {
        return $this->variantSetId;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_Variant', 'VendorDuplicator\\Google_Service_Genomics_Variant', \false);
/** @internal */
class Google_Service_Genomics_VariantCall extends Google_Collection
{
    protected $collection_key = 'genotypeLikelihood';
    protected $internal_gapi_mappings = array();
    public $callSetId;
    public $callSetName;
    public $genotype;
    public $genotypeLikelihood;
    public $info;
    public $phaseset;
    public function setCallSetId($callSetId)
    {
        $this->callSetId = $callSetId;
    }
    public function getCallSetId()
    {
        return $this->callSetId;
    }
    public function setCallSetName($callSetName)
    {
        $this->callSetName = $callSetName;
    }
    public function getCallSetName()
    {
        return $this->callSetName;
    }
    public function setGenotype($genotype)
    {
        $this->genotype = $genotype;
    }
    public function getGenotype()
    {
        return $this->genotype;
    }
    public function setGenotypeLikelihood($genotypeLikelihood)
    {
        $this->genotypeLikelihood = $genotypeLikelihood;
    }
    public function getGenotypeLikelihood()
    {
        return $this->genotypeLikelihood;
    }
    public function setInfo($info)
    {
        $this->info = $info;
    }
    public function getInfo()
    {
        return $this->info;
    }
    public function setPhaseset($phaseset)
    {
        $this->phaseset = $phaseset;
    }
    public function getPhaseset()
    {
        return $this->phaseset;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_VariantCall', 'VendorDuplicator\\Google_Service_Genomics_VariantCall', \false);
/** @internal */
class Google_Service_Genomics_VariantSet extends Google_Collection
{
    protected $collection_key = 'referenceBounds';
    protected $internal_gapi_mappings = array();
    public $datasetId;
    public $id;
    protected $metadataType = 'VendorDuplicator\\Google_Service_Genomics_VariantSetMetadata';
    protected $metadataDataType = 'array';
    protected $referenceBoundsType = 'VendorDuplicator\\Google_Service_Genomics_ReferenceBound';
    protected $referenceBoundsDataType = 'array';
    public $referenceSetId;
    public function setDatasetId($datasetId)
    {
        $this->datasetId = $datasetId;
    }
    public function getDatasetId()
    {
        return $this->datasetId;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
    }
    public function getMetadata()
    {
        return $this->metadata;
    }
    public function setReferenceBounds($referenceBounds)
    {
        $this->referenceBounds = $referenceBounds;
    }
    public function getReferenceBounds()
    {
        return $this->referenceBounds;
    }
    public function setReferenceSetId($referenceSetId)
    {
        $this->referenceSetId = $referenceSetId;
    }
    public function getReferenceSetId()
    {
        return $this->referenceSetId;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Genomics_VariantSet', 'VendorDuplicator\\Google_Service_Genomics_VariantSet', \false);
/** @internal */
class Google_Service_Genomics_VariantSetMetadata extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $description;
    public $id;
    public $info;
    public $key;
    public $number;
    public $type;
    public $value;
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
    public function setInfo($info)
    {
        $this->info = $info;
    }
    public function getInfo()
    {
        return $this->info;
    }
    public function setKey($key)
    {
        $this->key = $key;
    }
    public function getKey()
    {
        return $this->key;
    }
    public function setNumber($number)
    {
        $this->number = $number;
    }
    public function getNumber()
    {
        return $this->number;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
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
\class_alias('VendorDuplicator\\Google_Service_Genomics_VariantSetMetadata', 'VendorDuplicator\\Google_Service_Genomics_VariantSetMetadata', \false);
