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
 * Service definition for Bigquery (v2).
 *
 * <p>
 * A data platform for customers to create, manage, share and query data.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/bigquery/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 * @internal
 */
class Google_Service_Bigquery extends Google_Service
{
    /** View and manage your data in Google BigQuery. */
    const BIGQUERY = "https://www.googleapis.com/auth/bigquery";
    /** Insert data into Google BigQuery. */
    const BIGQUERY_INSERTDATA = "https://www.googleapis.com/auth/bigquery.insertdata";
    /** View and manage your data across Google Cloud Platform services. */
    const CLOUD_PLATFORM = "https://www.googleapis.com/auth/cloud-platform";
    /** View your data across Google Cloud Platform services. */
    const CLOUD_PLATFORM_READ_ONLY = "https://www.googleapis.com/auth/cloud-platform.read-only";
    /** Manage your data and permissions in Google Cloud Storage. */
    const DEVSTORAGE_FULL_CONTROL = "https://www.googleapis.com/auth/devstorage.full_control";
    /** View your data in Google Cloud Storage. */
    const DEVSTORAGE_READ_ONLY = "https://www.googleapis.com/auth/devstorage.read_only";
    /** Manage your data in Google Cloud Storage. */
    const DEVSTORAGE_READ_WRITE = "https://www.googleapis.com/auth/devstorage.read_write";
    public $datasets;
    public $jobs;
    public $projects;
    public $tabledata;
    public $tables;
    /**
     * Constructs the internal representation of the Bigquery service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->rootUrl = 'https://www.googleapis.com/';
        $this->servicePath = 'bigquery/v2/';
        $this->version = 'v2';
        $this->serviceName = 'bigquery';
        $this->datasets = new Google_Service_Bigquery_Datasets_Resource($this, $this->serviceName, 'datasets', array('methods' => array('delete' => array('path' => 'projects/{projectId}/datasets/{datasetId}', 'httpMethod' => 'DELETE', 'parameters' => array('projectId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'datasetId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'deleteContents' => array('location' => 'query', 'type' => 'boolean'))), 'get' => array('path' => 'projects/{projectId}/datasets/{datasetId}', 'httpMethod' => 'GET', 'parameters' => array('projectId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'datasetId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => 'projects/{projectId}/datasets', 'httpMethod' => 'POST', 'parameters' => array('projectId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'projects/{projectId}/datasets', 'httpMethod' => 'GET', 'parameters' => array('projectId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'all' => array('location' => 'query', 'type' => 'boolean'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'patch' => array('path' => 'projects/{projectId}/datasets/{datasetId}', 'httpMethod' => 'PATCH', 'parameters' => array('projectId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'datasetId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'update' => array('path' => 'projects/{projectId}/datasets/{datasetId}', 'httpMethod' => 'PUT', 'parameters' => array('projectId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'datasetId' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->jobs = new Google_Service_Bigquery_Jobs_Resource($this, $this->serviceName, 'jobs', array('methods' => array('cancel' => array('path' => 'project/{projectId}/jobs/{jobId}/cancel', 'httpMethod' => 'POST', 'parameters' => array('projectId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'jobId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => 'projects/{projectId}/jobs/{jobId}', 'httpMethod' => 'GET', 'parameters' => array('projectId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'jobId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'getQueryResults' => array('path' => 'projects/{projectId}/queries/{jobId}', 'httpMethod' => 'GET', 'parameters' => array('projectId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'jobId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'), 'startIndex' => array('location' => 'query', 'type' => 'string'), 'timeoutMs' => array('location' => 'query', 'type' => 'integer'))), 'insert' => array('path' => 'projects/{projectId}/jobs', 'httpMethod' => 'POST', 'parameters' => array('projectId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'projects/{projectId}/jobs', 'httpMethod' => 'GET', 'parameters' => array('projectId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'allUsers' => array('location' => 'query', 'type' => 'boolean'), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'), 'projection' => array('location' => 'query', 'type' => 'string'), 'stateFilter' => array('location' => 'query', 'type' => 'string', 'repeated' => \true))), 'query' => array('path' => 'projects/{projectId}/queries', 'httpMethod' => 'POST', 'parameters' => array('projectId' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->projects = new Google_Service_Bigquery_Projects_Resource($this, $this->serviceName, 'projects', array('methods' => array('list' => array('path' => 'projects', 'httpMethod' => 'GET', 'parameters' => array('maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->tabledata = new Google_Service_Bigquery_Tabledata_Resource($this, $this->serviceName, 'tabledata', array('methods' => array('insertAll' => array('path' => 'projects/{projectId}/datasets/{datasetId}/tables/{tableId}/insertAll', 'httpMethod' => 'POST', 'parameters' => array('projectId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'datasetId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'tableId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'projects/{projectId}/datasets/{datasetId}/tables/{tableId}/data', 'httpMethod' => 'GET', 'parameters' => array('projectId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'datasetId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'tableId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'), 'startIndex' => array('location' => 'query', 'type' => 'string'))))));
        $this->tables = new Google_Service_Bigquery_Tables_Resource($this, $this->serviceName, 'tables', array('methods' => array('delete' => array('path' => 'projects/{projectId}/datasets/{datasetId}/tables/{tableId}', 'httpMethod' => 'DELETE', 'parameters' => array('projectId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'datasetId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'tableId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => 'projects/{projectId}/datasets/{datasetId}/tables/{tableId}', 'httpMethod' => 'GET', 'parameters' => array('projectId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'datasetId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'tableId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => 'projects/{projectId}/datasets/{datasetId}/tables', 'httpMethod' => 'POST', 'parameters' => array('projectId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'datasetId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'projects/{projectId}/datasets/{datasetId}/tables', 'httpMethod' => 'GET', 'parameters' => array('projectId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'datasetId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'patch' => array('path' => 'projects/{projectId}/datasets/{datasetId}/tables/{tableId}', 'httpMethod' => 'PATCH', 'parameters' => array('projectId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'datasetId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'tableId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'update' => array('path' => 'projects/{projectId}/datasets/{datasetId}/tables/{tableId}', 'httpMethod' => 'PUT', 'parameters' => array('projectId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'datasetId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'tableId' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
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
 * Service definition for Bigquery (v2).
 *
 * <p>
 * A data platform for customers to create, manage, share and query data.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/bigquery/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Bigquery', 'VendorDuplicator\\Google_Service_Bigquery', \false);
/**
 * The "datasets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigqueryService = new Google_Service_Bigquery(...);
 *   $datasets = $bigqueryService->datasets;
 *  </code>
 * @internal
 */
class Google_Service_Bigquery_Datasets_Resource extends Google_Service_Resource
{
    /**
     * Deletes the dataset specified by the datasetId value. Before you can delete a
     * dataset, you must delete all its tables, either manually or by specifying
     * deleteContents. Immediately after deletion, you can create another dataset
     * with the same name. (datasets.delete)
     *
     * @param string $projectId Project ID of the dataset being deleted
     * @param string $datasetId Dataset ID of dataset being deleted
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool deleteContents If True, delete all the tables in the dataset.
     * If False and the dataset contains tables, the request will fail. Default is
     * False
     */
    public function delete($projectId, $datasetId, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'datasetId' => $datasetId);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }
    /**
     * Returns the dataset specified by datasetID. (datasets.get)
     *
     * @param string $projectId Project ID of the requested dataset
     * @param string $datasetId Dataset ID of the requested dataset
     * @param array $optParams Optional parameters.
     * @return Google_Service_Bigquery_Dataset
     */
    public function get($projectId, $datasetId, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'datasetId' => $datasetId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Bigquery_Dataset");
    }
    /**
     * Creates a new empty dataset. (datasets.insert)
     *
     * @param string $projectId Project ID of the new dataset
     * @param Google_Dataset $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Bigquery_Dataset
     */
    public function insert($projectId, Google_Service_Bigquery_Dataset $postBody, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Bigquery_Dataset");
    }
    /**
     * Lists all datasets in the specified project to which you have been granted
     * the READER dataset role. (datasets.listDatasets)
     *
     * @param string $projectId Project ID of the datasets to be listed
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool all Whether to list all datasets, including hidden ones
     * @opt_param string maxResults The maximum number of results to return
     * @opt_param string pageToken Page token, returned by a previous call, to
     * request the next page of results
     * @return Google_Service_Bigquery_DatasetList
     */
    public function listDatasets($projectId, $optParams = array())
    {
        $params = array('projectId' => $projectId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Bigquery_DatasetList");
    }
    /**
     * Updates information in an existing dataset. The update method replaces the
     * entire dataset resource, whereas the patch method only replaces fields that
     * are provided in the submitted dataset resource. This method supports patch
     * semantics. (datasets.patch)
     *
     * @param string $projectId Project ID of the dataset being updated
     * @param string $datasetId Dataset ID of the dataset being updated
     * @param Google_Dataset $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Bigquery_Dataset
     */
    public function patch($projectId, $datasetId, Google_Service_Bigquery_Dataset $postBody, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('patch', array($params), "VendorDuplicator\\Google_Service_Bigquery_Dataset");
    }
    /**
     * Updates information in an existing dataset. The update method replaces the
     * entire dataset resource, whereas the patch method only replaces fields that
     * are provided in the submitted dataset resource. (datasets.update)
     *
     * @param string $projectId Project ID of the dataset being updated
     * @param string $datasetId Dataset ID of the dataset being updated
     * @param Google_Dataset $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Bigquery_Dataset
     */
    public function update($projectId, $datasetId, Google_Service_Bigquery_Dataset $postBody, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('update', array($params), "VendorDuplicator\\Google_Service_Bigquery_Dataset");
    }
}
/**
 * The "datasets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigqueryService = new Google_Service_Bigquery(...);
 *   $datasets = $bigqueryService->datasets;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_Datasets_Resource', 'VendorDuplicator\\Google_Service_Bigquery_Datasets_Resource', \false);
/**
 * The "jobs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigqueryService = new Google_Service_Bigquery(...);
 *   $jobs = $bigqueryService->jobs;
 *  </code>
 * @internal
 */
class Google_Service_Bigquery_Jobs_Resource extends Google_Service_Resource
{
    /**
     * Requests that a job be cancelled. This call will return immediately, and the
     * client will need to poll for the job status to see if the cancel completed
     * successfully. Cancelled jobs may still incur costs. (jobs.cancel)
     *
     * @param string $projectId [Required] Project ID of the job to cancel
     * @param string $jobId [Required] Job ID of the job to cancel
     * @param array $optParams Optional parameters.
     * @return Google_Service_Bigquery_JobCancelResponse
     */
    public function cancel($projectId, $jobId, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'jobId' => $jobId);
        $params = \array_merge($params, $optParams);
        return $this->call('cancel', array($params), "VendorDuplicator\\Google_Service_Bigquery_JobCancelResponse");
    }
    /**
     * Returns information about a specific job. Job information is available for a
     * six month period after creation. Requires that you're the person who ran the
     * job, or have the Is Owner project role. (jobs.get)
     *
     * @param string $projectId [Required] Project ID of the requested job
     * @param string $jobId [Required] Job ID of the requested job
     * @param array $optParams Optional parameters.
     * @return Google_Service_Bigquery_Job
     */
    public function get($projectId, $jobId, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'jobId' => $jobId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Bigquery_Job");
    }
    /**
     * Retrieves the results of a query job. (jobs.getQueryResults)
     *
     * @param string $projectId [Required] Project ID of the query job
     * @param string $jobId [Required] Job ID of the query job
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults Maximum number of results to read
     * @opt_param string pageToken Page token, returned by a previous call, to
     * request the next page of results
     * @opt_param string startIndex Zero-based index of the starting row
     * @opt_param string timeoutMs How long to wait for the query to complete, in
     * milliseconds, before returning. Default is 10 seconds. If the timeout passes
     * before the job completes, the 'jobComplete' field in the response will be
     * false
     * @return Google_Service_Bigquery_GetQueryResultsResponse
     */
    public function getQueryResults($projectId, $jobId, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'jobId' => $jobId);
        $params = \array_merge($params, $optParams);
        return $this->call('getQueryResults', array($params), "VendorDuplicator\\Google_Service_Bigquery_GetQueryResultsResponse");
    }
    /**
     * Starts a new asynchronous job. Requires the Can View project role.
     * (jobs.insert)
     *
     * @param string $projectId Project ID of the project that will be billed for
     * the job
     * @param Google_Job $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Bigquery_Job
     */
    public function insert($projectId, Google_Service_Bigquery_Job $postBody, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Bigquery_Job");
    }
    /**
     * Lists all jobs that you started in the specified project. Job information is
     * available for a six month period after creation. The job list is sorted in
     * reverse chronological order, by job creation time. Requires the Can View
     * project role, or the Is Owner project role if you set the allUsers property.
     * (jobs.listJobs)
     *
     * @param string $projectId Project ID of the jobs to list
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool allUsers Whether to display jobs owned by all users in the
     * project. Default false
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string pageToken Page token, returned by a previous call, to
     * request the next page of results
     * @opt_param string projection Restrict information returned to a set of
     * selected fields
     * @opt_param string stateFilter Filter for job state
     * @return Google_Service_Bigquery_JobList
     */
    public function listJobs($projectId, $optParams = array())
    {
        $params = array('projectId' => $projectId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Bigquery_JobList");
    }
    /**
     * Runs a BigQuery SQL query synchronously and returns query results if the
     * query completes within a specified timeout. (jobs.query)
     *
     * @param string $projectId Project ID of the project billed for the query
     * @param Google_QueryRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Bigquery_QueryResponse
     */
    public function query($projectId, Google_Service_Bigquery_QueryRequest $postBody, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('query', array($params), "VendorDuplicator\\Google_Service_Bigquery_QueryResponse");
    }
}
/**
 * The "jobs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigqueryService = new Google_Service_Bigquery(...);
 *   $jobs = $bigqueryService->jobs;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_Jobs_Resource', 'VendorDuplicator\\Google_Service_Bigquery_Jobs_Resource', \false);
/**
 * The "projects" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigqueryService = new Google_Service_Bigquery(...);
 *   $projects = $bigqueryService->projects;
 *  </code>
 * @internal
 */
class Google_Service_Bigquery_Projects_Resource extends Google_Service_Resource
{
    /**
     * Lists all projects to which you have been granted any project role.
     * (projects.listProjects)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string pageToken Page token, returned by a previous call, to
     * request the next page of results
     * @return Google_Service_Bigquery_ProjectList
     */
    public function listProjects($optParams = array())
    {
        $params = array();
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Bigquery_ProjectList");
    }
}
/**
 * The "projects" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigqueryService = new Google_Service_Bigquery(...);
 *   $projects = $bigqueryService->projects;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_Projects_Resource', 'VendorDuplicator\\Google_Service_Bigquery_Projects_Resource', \false);
/**
 * The "tabledata" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigqueryService = new Google_Service_Bigquery(...);
 *   $tabledata = $bigqueryService->tabledata;
 *  </code>
 * @internal
 */
class Google_Service_Bigquery_Tabledata_Resource extends Google_Service_Resource
{
    /**
     * Streams data into BigQuery one record at a time without needing to run a load
     * job. Requires the WRITER dataset role. (tabledata.insertAll)
     *
     * @param string $projectId Project ID of the destination table.
     * @param string $datasetId Dataset ID of the destination table.
     * @param string $tableId Table ID of the destination table.
     * @param Google_TableDataInsertAllRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Bigquery_TableDataInsertAllResponse
     */
    public function insertAll($projectId, $datasetId, $tableId, Google_Service_Bigquery_TableDataInsertAllRequest $postBody, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insertAll', array($params), "VendorDuplicator\\Google_Service_Bigquery_TableDataInsertAllResponse");
    }
    /**
     * Retrieves table data from a specified set of rows. Requires the READER
     * dataset role. (tabledata.listTabledata)
     *
     * @param string $projectId Project ID of the table to read
     * @param string $datasetId Dataset ID of the table to read
     * @param string $tableId Table ID of the table to read
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string pageToken Page token, returned by a previous call,
     * identifying the result set
     * @opt_param string startIndex Zero-based index of the starting row to read
     * @return Google_Service_Bigquery_TableDataList
     */
    public function listTabledata($projectId, $datasetId, $tableId, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Bigquery_TableDataList");
    }
}
/**
 * The "tabledata" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigqueryService = new Google_Service_Bigquery(...);
 *   $tabledata = $bigqueryService->tabledata;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_Tabledata_Resource', 'VendorDuplicator\\Google_Service_Bigquery_Tabledata_Resource', \false);
/**
 * The "tables" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigqueryService = new Google_Service_Bigquery(...);
 *   $tables = $bigqueryService->tables;
 *  </code>
 * @internal
 */
class Google_Service_Bigquery_Tables_Resource extends Google_Service_Resource
{
    /**
     * Deletes the table specified by tableId from the dataset. If the table
     * contains data, all the data will be deleted. (tables.delete)
     *
     * @param string $projectId Project ID of the table to delete
     * @param string $datasetId Dataset ID of the table to delete
     * @param string $tableId Table ID of the table to delete
     * @param array $optParams Optional parameters.
     */
    public function delete($projectId, $datasetId, $tableId, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }
    /**
     * Gets the specified table resource by table ID. This method does not return
     * the data in the table, it only returns the table resource, which describes
     * the structure of this table. (tables.get)
     *
     * @param string $projectId Project ID of the requested table
     * @param string $datasetId Dataset ID of the requested table
     * @param string $tableId Table ID of the requested table
     * @param array $optParams Optional parameters.
     * @return Google_Service_Bigquery_Table
     */
    public function get($projectId, $datasetId, $tableId, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Bigquery_Table");
    }
    /**
     * Creates a new, empty table in the dataset. (tables.insert)
     *
     * @param string $projectId Project ID of the new table
     * @param string $datasetId Dataset ID of the new table
     * @param Google_Table $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Bigquery_Table
     */
    public function insert($projectId, $datasetId, Google_Service_Bigquery_Table $postBody, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Bigquery_Table");
    }
    /**
     * Lists all tables in the specified dataset. Requires the READER dataset role.
     * (tables.listTables)
     *
     * @param string $projectId Project ID of the tables to list
     * @param string $datasetId Dataset ID of the tables to list
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string pageToken Page token, returned by a previous call, to
     * request the next page of results
     * @return Google_Service_Bigquery_TableList
     */
    public function listTables($projectId, $datasetId, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'datasetId' => $datasetId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Bigquery_TableList");
    }
    /**
     * Updates information in an existing table. The update method replaces the
     * entire table resource, whereas the patch method only replaces fields that are
     * provided in the submitted table resource. This method supports patch
     * semantics. (tables.patch)
     *
     * @param string $projectId Project ID of the table to update
     * @param string $datasetId Dataset ID of the table to update
     * @param string $tableId Table ID of the table to update
     * @param Google_Table $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Bigquery_Table
     */
    public function patch($projectId, $datasetId, $tableId, Google_Service_Bigquery_Table $postBody, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('patch', array($params), "VendorDuplicator\\Google_Service_Bigquery_Table");
    }
    /**
     * Updates information in an existing table. The update method replaces the
     * entire table resource, whereas the patch method only replaces fields that are
     * provided in the submitted table resource. (tables.update)
     *
     * @param string $projectId Project ID of the table to update
     * @param string $datasetId Dataset ID of the table to update
     * @param string $tableId Table ID of the table to update
     * @param Google_Table $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Bigquery_Table
     */
    public function update($projectId, $datasetId, $tableId, Google_Service_Bigquery_Table $postBody, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('update', array($params), "VendorDuplicator\\Google_Service_Bigquery_Table");
    }
}
/**
 * The "tables" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigqueryService = new Google_Service_Bigquery(...);
 *   $tables = $bigqueryService->tables;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_Tables_Resource', 'VendorDuplicator\\Google_Service_Bigquery_Tables_Resource', \false);
/** @internal */
class Google_Service_Bigquery_CsvOptions extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $allowJaggedRows;
    public $allowQuotedNewlines;
    public $encoding;
    public $fieldDelimiter;
    public $quote;
    public $skipLeadingRows;
    public function setAllowJaggedRows($allowJaggedRows)
    {
        $this->allowJaggedRows = $allowJaggedRows;
    }
    public function getAllowJaggedRows()
    {
        return $this->allowJaggedRows;
    }
    public function setAllowQuotedNewlines($allowQuotedNewlines)
    {
        $this->allowQuotedNewlines = $allowQuotedNewlines;
    }
    public function getAllowQuotedNewlines()
    {
        return $this->allowQuotedNewlines;
    }
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
    }
    public function getEncoding()
    {
        return $this->encoding;
    }
    public function setFieldDelimiter($fieldDelimiter)
    {
        $this->fieldDelimiter = $fieldDelimiter;
    }
    public function getFieldDelimiter()
    {
        return $this->fieldDelimiter;
    }
    public function setQuote($quote)
    {
        $this->quote = $quote;
    }
    public function getQuote()
    {
        return $this->quote;
    }
    public function setSkipLeadingRows($skipLeadingRows)
    {
        $this->skipLeadingRows = $skipLeadingRows;
    }
    public function getSkipLeadingRows()
    {
        return $this->skipLeadingRows;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_CsvOptions', 'VendorDuplicator\\Google_Service_Bigquery_CsvOptions', \false);
/** @internal */
class Google_Service_Bigquery_Dataset extends Google_Collection
{
    protected $collection_key = 'access';
    protected $internal_gapi_mappings = array();
    protected $accessType = 'VendorDuplicator\\Google_Service_Bigquery_DatasetAccess';
    protected $accessDataType = 'array';
    public $creationTime;
    protected $datasetReferenceType = 'VendorDuplicator\\Google_Service_Bigquery_DatasetReference';
    protected $datasetReferenceDataType = '';
    public $defaultTableExpirationMs;
    public $description;
    public $etag;
    public $friendlyName;
    public $id;
    public $kind;
    public $lastModifiedTime;
    public $location;
    public $selfLink;
    public function setAccess($access)
    {
        $this->access = $access;
    }
    public function getAccess()
    {
        return $this->access;
    }
    public function setCreationTime($creationTime)
    {
        $this->creationTime = $creationTime;
    }
    public function getCreationTime()
    {
        return $this->creationTime;
    }
    public function setDatasetReference(Google_Service_Bigquery_DatasetReference $datasetReference)
    {
        $this->datasetReference = $datasetReference;
    }
    public function getDatasetReference()
    {
        return $this->datasetReference;
    }
    public function setDefaultTableExpirationMs($defaultTableExpirationMs)
    {
        $this->defaultTableExpirationMs = $defaultTableExpirationMs;
    }
    public function getDefaultTableExpirationMs()
    {
        return $this->defaultTableExpirationMs;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setFriendlyName($friendlyName)
    {
        $this->friendlyName = $friendlyName;
    }
    public function getFriendlyName()
    {
        return $this->friendlyName;
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
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->lastModifiedTime = $lastModifiedTime;
    }
    public function getLastModifiedTime()
    {
        return $this->lastModifiedTime;
    }
    public function setLocation($location)
    {
        $this->location = $location;
    }
    public function getLocation()
    {
        return $this->location;
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
\class_alias('VendorDuplicator\\Google_Service_Bigquery_Dataset', 'VendorDuplicator\\Google_Service_Bigquery_Dataset', \false);
/** @internal */
class Google_Service_Bigquery_DatasetAccess extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $domain;
    public $groupByEmail;
    public $role;
    public $specialGroup;
    public $userByEmail;
    protected $viewType = 'VendorDuplicator\\Google_Service_Bigquery_TableReference';
    protected $viewDataType = '';
    public function setDomain($domain)
    {
        $this->domain = $domain;
    }
    public function getDomain()
    {
        return $this->domain;
    }
    public function setGroupByEmail($groupByEmail)
    {
        $this->groupByEmail = $groupByEmail;
    }
    public function getGroupByEmail()
    {
        return $this->groupByEmail;
    }
    public function setRole($role)
    {
        $this->role = $role;
    }
    public function getRole()
    {
        return $this->role;
    }
    public function setSpecialGroup($specialGroup)
    {
        $this->specialGroup = $specialGroup;
    }
    public function getSpecialGroup()
    {
        return $this->specialGroup;
    }
    public function setUserByEmail($userByEmail)
    {
        $this->userByEmail = $userByEmail;
    }
    public function getUserByEmail()
    {
        return $this->userByEmail;
    }
    public function setView(Google_Service_Bigquery_TableReference $view)
    {
        $this->view = $view;
    }
    public function getView()
    {
        return $this->view;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_DatasetAccess', 'VendorDuplicator\\Google_Service_Bigquery_DatasetAccess', \false);
/** @internal */
class Google_Service_Bigquery_DatasetList extends Google_Collection
{
    protected $collection_key = 'datasets';
    protected $internal_gapi_mappings = array();
    protected $datasetsType = 'VendorDuplicator\\Google_Service_Bigquery_DatasetListDatasets';
    protected $datasetsDataType = 'array';
    public $etag;
    public $kind;
    public $nextPageToken;
    public function setDatasets($datasets)
    {
        $this->datasets = $datasets;
    }
    public function getDatasets()
    {
        return $this->datasets;
    }
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
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
\class_alias('VendorDuplicator\\Google_Service_Bigquery_DatasetList', 'VendorDuplicator\\Google_Service_Bigquery_DatasetList', \false);
/** @internal */
class Google_Service_Bigquery_DatasetListDatasets extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $datasetReferenceType = 'VendorDuplicator\\Google_Service_Bigquery_DatasetReference';
    protected $datasetReferenceDataType = '';
    public $friendlyName;
    public $id;
    public $kind;
    public function setDatasetReference(Google_Service_Bigquery_DatasetReference $datasetReference)
    {
        $this->datasetReference = $datasetReference;
    }
    public function getDatasetReference()
    {
        return $this->datasetReference;
    }
    public function setFriendlyName($friendlyName)
    {
        $this->friendlyName = $friendlyName;
    }
    public function getFriendlyName()
    {
        return $this->friendlyName;
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
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_DatasetListDatasets', 'VendorDuplicator\\Google_Service_Bigquery_DatasetListDatasets', \false);
/** @internal */
class Google_Service_Bigquery_DatasetReference extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $datasetId;
    public $projectId;
    public function setDatasetId($datasetId)
    {
        $this->datasetId = $datasetId;
    }
    public function getDatasetId()
    {
        return $this->datasetId;
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
\class_alias('VendorDuplicator\\Google_Service_Bigquery_DatasetReference', 'VendorDuplicator\\Google_Service_Bigquery_DatasetReference', \false);
/** @internal */
class Google_Service_Bigquery_ErrorProto extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $debugInfo;
    public $location;
    public $message;
    public $reason;
    public function setDebugInfo($debugInfo)
    {
        $this->debugInfo = $debugInfo;
    }
    public function getDebugInfo()
    {
        return $this->debugInfo;
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
\class_alias('VendorDuplicator\\Google_Service_Bigquery_ErrorProto', 'VendorDuplicator\\Google_Service_Bigquery_ErrorProto', \false);
/** @internal */
class Google_Service_Bigquery_ExplainQueryStage extends Google_Collection
{
    protected $collection_key = 'steps';
    protected $internal_gapi_mappings = array();
    public $computeRatioAvg;
    public $computeRatioMax;
    public $id;
    public $name;
    public $readRatioAvg;
    public $readRatioMax;
    public $recordsRead;
    public $recordsWritten;
    protected $stepsType = 'VendorDuplicator\\Google_Service_Bigquery_ExplainQueryStep';
    protected $stepsDataType = 'array';
    public $waitRatioAvg;
    public $waitRatioMax;
    public $writeRatioAvg;
    public $writeRatioMax;
    public function setComputeRatioAvg($computeRatioAvg)
    {
        $this->computeRatioAvg = $computeRatioAvg;
    }
    public function getComputeRatioAvg()
    {
        return $this->computeRatioAvg;
    }
    public function setComputeRatioMax($computeRatioMax)
    {
        $this->computeRatioMax = $computeRatioMax;
    }
    public function getComputeRatioMax()
    {
        return $this->computeRatioMax;
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
    public function setReadRatioAvg($readRatioAvg)
    {
        $this->readRatioAvg = $readRatioAvg;
    }
    public function getReadRatioAvg()
    {
        return $this->readRatioAvg;
    }
    public function setReadRatioMax($readRatioMax)
    {
        $this->readRatioMax = $readRatioMax;
    }
    public function getReadRatioMax()
    {
        return $this->readRatioMax;
    }
    public function setRecordsRead($recordsRead)
    {
        $this->recordsRead = $recordsRead;
    }
    public function getRecordsRead()
    {
        return $this->recordsRead;
    }
    public function setRecordsWritten($recordsWritten)
    {
        $this->recordsWritten = $recordsWritten;
    }
    public function getRecordsWritten()
    {
        return $this->recordsWritten;
    }
    public function setSteps($steps)
    {
        $this->steps = $steps;
    }
    public function getSteps()
    {
        return $this->steps;
    }
    public function setWaitRatioAvg($waitRatioAvg)
    {
        $this->waitRatioAvg = $waitRatioAvg;
    }
    public function getWaitRatioAvg()
    {
        return $this->waitRatioAvg;
    }
    public function setWaitRatioMax($waitRatioMax)
    {
        $this->waitRatioMax = $waitRatioMax;
    }
    public function getWaitRatioMax()
    {
        return $this->waitRatioMax;
    }
    public function setWriteRatioAvg($writeRatioAvg)
    {
        $this->writeRatioAvg = $writeRatioAvg;
    }
    public function getWriteRatioAvg()
    {
        return $this->writeRatioAvg;
    }
    public function setWriteRatioMax($writeRatioMax)
    {
        $this->writeRatioMax = $writeRatioMax;
    }
    public function getWriteRatioMax()
    {
        return $this->writeRatioMax;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_ExplainQueryStage', 'VendorDuplicator\\Google_Service_Bigquery_ExplainQueryStage', \false);
/** @internal */
class Google_Service_Bigquery_ExplainQueryStep extends Google_Collection
{
    protected $collection_key = 'substeps';
    protected $internal_gapi_mappings = array();
    public $kind;
    public $substeps;
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setSubsteps($substeps)
    {
        $this->substeps = $substeps;
    }
    public function getSubsteps()
    {
        return $this->substeps;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_ExplainQueryStep', 'VendorDuplicator\\Google_Service_Bigquery_ExplainQueryStep', \false);
/** @internal */
class Google_Service_Bigquery_ExternalDataConfiguration extends Google_Collection
{
    protected $collection_key = 'sourceUris';
    protected $internal_gapi_mappings = array();
    public $compression;
    protected $csvOptionsType = 'VendorDuplicator\\Google_Service_Bigquery_CsvOptions';
    protected $csvOptionsDataType = '';
    public $ignoreUnknownValues;
    public $maxBadRecords;
    protected $schemaType = 'VendorDuplicator\\Google_Service_Bigquery_TableSchema';
    protected $schemaDataType = '';
    public $sourceFormat;
    public $sourceUris;
    public function setCompression($compression)
    {
        $this->compression = $compression;
    }
    public function getCompression()
    {
        return $this->compression;
    }
    public function setCsvOptions(Google_Service_Bigquery_CsvOptions $csvOptions)
    {
        $this->csvOptions = $csvOptions;
    }
    public function getCsvOptions()
    {
        return $this->csvOptions;
    }
    public function setIgnoreUnknownValues($ignoreUnknownValues)
    {
        $this->ignoreUnknownValues = $ignoreUnknownValues;
    }
    public function getIgnoreUnknownValues()
    {
        return $this->ignoreUnknownValues;
    }
    public function setMaxBadRecords($maxBadRecords)
    {
        $this->maxBadRecords = $maxBadRecords;
    }
    public function getMaxBadRecords()
    {
        return $this->maxBadRecords;
    }
    public function setSchema(Google_Service_Bigquery_TableSchema $schema)
    {
        $this->schema = $schema;
    }
    public function getSchema()
    {
        return $this->schema;
    }
    public function setSourceFormat($sourceFormat)
    {
        $this->sourceFormat = $sourceFormat;
    }
    public function getSourceFormat()
    {
        return $this->sourceFormat;
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
\class_alias('VendorDuplicator\\Google_Service_Bigquery_ExternalDataConfiguration', 'VendorDuplicator\\Google_Service_Bigquery_ExternalDataConfiguration', \false);
/** @internal */
class Google_Service_Bigquery_GetQueryResultsResponse extends Google_Collection
{
    protected $collection_key = 'rows';
    protected $internal_gapi_mappings = array();
    public $cacheHit;
    protected $errorsType = 'VendorDuplicator\\Google_Service_Bigquery_ErrorProto';
    protected $errorsDataType = 'array';
    public $etag;
    public $jobComplete;
    protected $jobReferenceType = 'VendorDuplicator\\Google_Service_Bigquery_JobReference';
    protected $jobReferenceDataType = '';
    public $kind;
    public $pageToken;
    protected $rowsType = 'VendorDuplicator\\Google_Service_Bigquery_TableRow';
    protected $rowsDataType = 'array';
    protected $schemaType = 'VendorDuplicator\\Google_Service_Bigquery_TableSchema';
    protected $schemaDataType = '';
    public $totalBytesProcessed;
    public $totalRows;
    public function setCacheHit($cacheHit)
    {
        $this->cacheHit = $cacheHit;
    }
    public function getCacheHit()
    {
        return $this->cacheHit;
    }
    public function setErrors($errors)
    {
        $this->errors = $errors;
    }
    public function getErrors()
    {
        return $this->errors;
    }
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setJobComplete($jobComplete)
    {
        $this->jobComplete = $jobComplete;
    }
    public function getJobComplete()
    {
        return $this->jobComplete;
    }
    public function setJobReference(Google_Service_Bigquery_JobReference $jobReference)
    {
        $this->jobReference = $jobReference;
    }
    public function getJobReference()
    {
        return $this->jobReference;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setPageToken($pageToken)
    {
        $this->pageToken = $pageToken;
    }
    public function getPageToken()
    {
        return $this->pageToken;
    }
    public function setRows($rows)
    {
        $this->rows = $rows;
    }
    public function getRows()
    {
        return $this->rows;
    }
    public function setSchema(Google_Service_Bigquery_TableSchema $schema)
    {
        $this->schema = $schema;
    }
    public function getSchema()
    {
        return $this->schema;
    }
    public function setTotalBytesProcessed($totalBytesProcessed)
    {
        $this->totalBytesProcessed = $totalBytesProcessed;
    }
    public function getTotalBytesProcessed()
    {
        return $this->totalBytesProcessed;
    }
    public function setTotalRows($totalRows)
    {
        $this->totalRows = $totalRows;
    }
    public function getTotalRows()
    {
        return $this->totalRows;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_GetQueryResultsResponse', 'VendorDuplicator\\Google_Service_Bigquery_GetQueryResultsResponse', \false);
/** @internal */
class Google_Service_Bigquery_Job extends Google_Model
{
    protected $internal_gapi_mappings = array("userEmail" => "user_email");
    protected $configurationType = 'VendorDuplicator\\Google_Service_Bigquery_JobConfiguration';
    protected $configurationDataType = '';
    public $etag;
    public $id;
    protected $jobReferenceType = 'VendorDuplicator\\Google_Service_Bigquery_JobReference';
    protected $jobReferenceDataType = '';
    public $kind;
    public $selfLink;
    protected $statisticsType = 'VendorDuplicator\\Google_Service_Bigquery_JobStatistics';
    protected $statisticsDataType = '';
    protected $statusType = 'VendorDuplicator\\Google_Service_Bigquery_JobStatus';
    protected $statusDataType = '';
    public $userEmail;
    public function setConfiguration(Google_Service_Bigquery_JobConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }
    public function getConfiguration()
    {
        return $this->configuration;
    }
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setJobReference(Google_Service_Bigquery_JobReference $jobReference)
    {
        $this->jobReference = $jobReference;
    }
    public function getJobReference()
    {
        return $this->jobReference;
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
    public function setStatistics(Google_Service_Bigquery_JobStatistics $statistics)
    {
        $this->statistics = $statistics;
    }
    public function getStatistics()
    {
        return $this->statistics;
    }
    public function setStatus(Google_Service_Bigquery_JobStatus $status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
    }
    public function getUserEmail()
    {
        return $this->userEmail;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_Job', 'VendorDuplicator\\Google_Service_Bigquery_Job', \false);
/** @internal */
class Google_Service_Bigquery_JobCancelResponse extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $jobType = 'VendorDuplicator\\Google_Service_Bigquery_Job';
    protected $jobDataType = '';
    public $kind;
    public function setJob(Google_Service_Bigquery_Job $job)
    {
        $this->job = $job;
    }
    public function getJob()
    {
        return $this->job;
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
\class_alias('VendorDuplicator\\Google_Service_Bigquery_JobCancelResponse', 'VendorDuplicator\\Google_Service_Bigquery_JobCancelResponse', \false);
/** @internal */
class Google_Service_Bigquery_JobConfiguration extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $copyType = 'VendorDuplicator\\Google_Service_Bigquery_JobConfigurationTableCopy';
    protected $copyDataType = '';
    public $dryRun;
    protected $extractType = 'VendorDuplicator\\Google_Service_Bigquery_JobConfigurationExtract';
    protected $extractDataType = '';
    protected $loadType = 'VendorDuplicator\\Google_Service_Bigquery_JobConfigurationLoad';
    protected $loadDataType = '';
    protected $queryType = 'VendorDuplicator\\Google_Service_Bigquery_JobConfigurationQuery';
    protected $queryDataType = '';
    public function setCopy(Google_Service_Bigquery_JobConfigurationTableCopy $copy)
    {
        $this->copy = $copy;
    }
    public function getCopy()
    {
        return $this->copy;
    }
    public function setDryRun($dryRun)
    {
        $this->dryRun = $dryRun;
    }
    public function getDryRun()
    {
        return $this->dryRun;
    }
    public function setExtract(Google_Service_Bigquery_JobConfigurationExtract $extract)
    {
        $this->extract = $extract;
    }
    public function getExtract()
    {
        return $this->extract;
    }
    public function setLoad(Google_Service_Bigquery_JobConfigurationLoad $load)
    {
        $this->load = $load;
    }
    public function getLoad()
    {
        return $this->load;
    }
    public function setQuery(Google_Service_Bigquery_JobConfigurationQuery $query)
    {
        $this->query = $query;
    }
    public function getQuery()
    {
        return $this->query;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_JobConfiguration', 'VendorDuplicator\\Google_Service_Bigquery_JobConfiguration', \false);
/** @internal */
class Google_Service_Bigquery_JobConfigurationExtract extends Google_Collection
{
    protected $collection_key = 'destinationUris';
    protected $internal_gapi_mappings = array();
    public $compression;
    public $destinationFormat;
    public $destinationUri;
    public $destinationUris;
    public $fieldDelimiter;
    public $printHeader;
    protected $sourceTableType = 'VendorDuplicator\\Google_Service_Bigquery_TableReference';
    protected $sourceTableDataType = '';
    public function setCompression($compression)
    {
        $this->compression = $compression;
    }
    public function getCompression()
    {
        return $this->compression;
    }
    public function setDestinationFormat($destinationFormat)
    {
        $this->destinationFormat = $destinationFormat;
    }
    public function getDestinationFormat()
    {
        return $this->destinationFormat;
    }
    public function setDestinationUri($destinationUri)
    {
        $this->destinationUri = $destinationUri;
    }
    public function getDestinationUri()
    {
        return $this->destinationUri;
    }
    public function setDestinationUris($destinationUris)
    {
        $this->destinationUris = $destinationUris;
    }
    public function getDestinationUris()
    {
        return $this->destinationUris;
    }
    public function setFieldDelimiter($fieldDelimiter)
    {
        $this->fieldDelimiter = $fieldDelimiter;
    }
    public function getFieldDelimiter()
    {
        return $this->fieldDelimiter;
    }
    public function setPrintHeader($printHeader)
    {
        $this->printHeader = $printHeader;
    }
    public function getPrintHeader()
    {
        return $this->printHeader;
    }
    public function setSourceTable(Google_Service_Bigquery_TableReference $sourceTable)
    {
        $this->sourceTable = $sourceTable;
    }
    public function getSourceTable()
    {
        return $this->sourceTable;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_JobConfigurationExtract', 'VendorDuplicator\\Google_Service_Bigquery_JobConfigurationExtract', \false);
/** @internal */
class Google_Service_Bigquery_JobConfigurationLoad extends Google_Collection
{
    protected $collection_key = 'sourceUris';
    protected $internal_gapi_mappings = array();
    public $allowJaggedRows;
    public $allowQuotedNewlines;
    public $createDisposition;
    protected $destinationTableType = 'VendorDuplicator\\Google_Service_Bigquery_TableReference';
    protected $destinationTableDataType = '';
    public $encoding;
    public $fieldDelimiter;
    public $ignoreUnknownValues;
    public $maxBadRecords;
    public $projectionFields;
    public $quote;
    protected $schemaType = 'VendorDuplicator\\Google_Service_Bigquery_TableSchema';
    protected $schemaDataType = '';
    public $schemaInline;
    public $schemaInlineFormat;
    public $skipLeadingRows;
    public $sourceFormat;
    public $sourceUris;
    public $writeDisposition;
    public function setAllowJaggedRows($allowJaggedRows)
    {
        $this->allowJaggedRows = $allowJaggedRows;
    }
    public function getAllowJaggedRows()
    {
        return $this->allowJaggedRows;
    }
    public function setAllowQuotedNewlines($allowQuotedNewlines)
    {
        $this->allowQuotedNewlines = $allowQuotedNewlines;
    }
    public function getAllowQuotedNewlines()
    {
        return $this->allowQuotedNewlines;
    }
    public function setCreateDisposition($createDisposition)
    {
        $this->createDisposition = $createDisposition;
    }
    public function getCreateDisposition()
    {
        return $this->createDisposition;
    }
    public function setDestinationTable(Google_Service_Bigquery_TableReference $destinationTable)
    {
        $this->destinationTable = $destinationTable;
    }
    public function getDestinationTable()
    {
        return $this->destinationTable;
    }
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
    }
    public function getEncoding()
    {
        return $this->encoding;
    }
    public function setFieldDelimiter($fieldDelimiter)
    {
        $this->fieldDelimiter = $fieldDelimiter;
    }
    public function getFieldDelimiter()
    {
        return $this->fieldDelimiter;
    }
    public function setIgnoreUnknownValues($ignoreUnknownValues)
    {
        $this->ignoreUnknownValues = $ignoreUnknownValues;
    }
    public function getIgnoreUnknownValues()
    {
        return $this->ignoreUnknownValues;
    }
    public function setMaxBadRecords($maxBadRecords)
    {
        $this->maxBadRecords = $maxBadRecords;
    }
    public function getMaxBadRecords()
    {
        return $this->maxBadRecords;
    }
    public function setProjectionFields($projectionFields)
    {
        $this->projectionFields = $projectionFields;
    }
    public function getProjectionFields()
    {
        return $this->projectionFields;
    }
    public function setQuote($quote)
    {
        $this->quote = $quote;
    }
    public function getQuote()
    {
        return $this->quote;
    }
    public function setSchema(Google_Service_Bigquery_TableSchema $schema)
    {
        $this->schema = $schema;
    }
    public function getSchema()
    {
        return $this->schema;
    }
    public function setSchemaInline($schemaInline)
    {
        $this->schemaInline = $schemaInline;
    }
    public function getSchemaInline()
    {
        return $this->schemaInline;
    }
    public function setSchemaInlineFormat($schemaInlineFormat)
    {
        $this->schemaInlineFormat = $schemaInlineFormat;
    }
    public function getSchemaInlineFormat()
    {
        return $this->schemaInlineFormat;
    }
    public function setSkipLeadingRows($skipLeadingRows)
    {
        $this->skipLeadingRows = $skipLeadingRows;
    }
    public function getSkipLeadingRows()
    {
        return $this->skipLeadingRows;
    }
    public function setSourceFormat($sourceFormat)
    {
        $this->sourceFormat = $sourceFormat;
    }
    public function getSourceFormat()
    {
        return $this->sourceFormat;
    }
    public function setSourceUris($sourceUris)
    {
        $this->sourceUris = $sourceUris;
    }
    public function getSourceUris()
    {
        return $this->sourceUris;
    }
    public function setWriteDisposition($writeDisposition)
    {
        $this->writeDisposition = $writeDisposition;
    }
    public function getWriteDisposition()
    {
        return $this->writeDisposition;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_JobConfigurationLoad', 'VendorDuplicator\\Google_Service_Bigquery_JobConfigurationLoad', \false);
/** @internal */
class Google_Service_Bigquery_JobConfigurationQuery extends Google_Collection
{
    protected $collection_key = 'userDefinedFunctionResources';
    protected $internal_gapi_mappings = array();
    public $allowLargeResults;
    public $createDisposition;
    protected $defaultDatasetType = 'VendorDuplicator\\Google_Service_Bigquery_DatasetReference';
    protected $defaultDatasetDataType = '';
    protected $destinationTableType = 'VendorDuplicator\\Google_Service_Bigquery_TableReference';
    protected $destinationTableDataType = '';
    public $flattenResults;
    public $maximumBillingTier;
    public $preserveNulls;
    public $priority;
    public $query;
    protected $tableDefinitionsType = 'VendorDuplicator\\Google_Service_Bigquery_ExternalDataConfiguration';
    protected $tableDefinitionsDataType = 'map';
    public $useQueryCache;
    protected $userDefinedFunctionResourcesType = 'VendorDuplicator\\Google_Service_Bigquery_UserDefinedFunctionResource';
    protected $userDefinedFunctionResourcesDataType = 'array';
    public $writeDisposition;
    public function setAllowLargeResults($allowLargeResults)
    {
        $this->allowLargeResults = $allowLargeResults;
    }
    public function getAllowLargeResults()
    {
        return $this->allowLargeResults;
    }
    public function setCreateDisposition($createDisposition)
    {
        $this->createDisposition = $createDisposition;
    }
    public function getCreateDisposition()
    {
        return $this->createDisposition;
    }
    public function setDefaultDataset(Google_Service_Bigquery_DatasetReference $defaultDataset)
    {
        $this->defaultDataset = $defaultDataset;
    }
    public function getDefaultDataset()
    {
        return $this->defaultDataset;
    }
    public function setDestinationTable(Google_Service_Bigquery_TableReference $destinationTable)
    {
        $this->destinationTable = $destinationTable;
    }
    public function getDestinationTable()
    {
        return $this->destinationTable;
    }
    public function setFlattenResults($flattenResults)
    {
        $this->flattenResults = $flattenResults;
    }
    public function getFlattenResults()
    {
        return $this->flattenResults;
    }
    public function setMaximumBillingTier($maximumBillingTier)
    {
        $this->maximumBillingTier = $maximumBillingTier;
    }
    public function getMaximumBillingTier()
    {
        return $this->maximumBillingTier;
    }
    public function setPreserveNulls($preserveNulls)
    {
        $this->preserveNulls = $preserveNulls;
    }
    public function getPreserveNulls()
    {
        return $this->preserveNulls;
    }
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }
    public function getPriority()
    {
        return $this->priority;
    }
    public function setQuery($query)
    {
        $this->query = $query;
    }
    public function getQuery()
    {
        return $this->query;
    }
    public function setTableDefinitions($tableDefinitions)
    {
        $this->tableDefinitions = $tableDefinitions;
    }
    public function getTableDefinitions()
    {
        return $this->tableDefinitions;
    }
    public function setUseQueryCache($useQueryCache)
    {
        $this->useQueryCache = $useQueryCache;
    }
    public function getUseQueryCache()
    {
        return $this->useQueryCache;
    }
    public function setUserDefinedFunctionResources($userDefinedFunctionResources)
    {
        $this->userDefinedFunctionResources = $userDefinedFunctionResources;
    }
    public function getUserDefinedFunctionResources()
    {
        return $this->userDefinedFunctionResources;
    }
    public function setWriteDisposition($writeDisposition)
    {
        $this->writeDisposition = $writeDisposition;
    }
    public function getWriteDisposition()
    {
        return $this->writeDisposition;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_JobConfigurationQuery', 'VendorDuplicator\\Google_Service_Bigquery_JobConfigurationQuery', \false);
/** @internal */
class Google_Service_Bigquery_JobConfigurationTableCopy extends Google_Collection
{
    protected $collection_key = 'sourceTables';
    protected $internal_gapi_mappings = array();
    public $createDisposition;
    protected $destinationTableType = 'VendorDuplicator\\Google_Service_Bigquery_TableReference';
    protected $destinationTableDataType = '';
    protected $sourceTableType = 'VendorDuplicator\\Google_Service_Bigquery_TableReference';
    protected $sourceTableDataType = '';
    protected $sourceTablesType = 'VendorDuplicator\\Google_Service_Bigquery_TableReference';
    protected $sourceTablesDataType = 'array';
    public $writeDisposition;
    public function setCreateDisposition($createDisposition)
    {
        $this->createDisposition = $createDisposition;
    }
    public function getCreateDisposition()
    {
        return $this->createDisposition;
    }
    public function setDestinationTable(Google_Service_Bigquery_TableReference $destinationTable)
    {
        $this->destinationTable = $destinationTable;
    }
    public function getDestinationTable()
    {
        return $this->destinationTable;
    }
    public function setSourceTable(Google_Service_Bigquery_TableReference $sourceTable)
    {
        $this->sourceTable = $sourceTable;
    }
    public function getSourceTable()
    {
        return $this->sourceTable;
    }
    public function setSourceTables($sourceTables)
    {
        $this->sourceTables = $sourceTables;
    }
    public function getSourceTables()
    {
        return $this->sourceTables;
    }
    public function setWriteDisposition($writeDisposition)
    {
        $this->writeDisposition = $writeDisposition;
    }
    public function getWriteDisposition()
    {
        return $this->writeDisposition;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_JobConfigurationTableCopy', 'VendorDuplicator\\Google_Service_Bigquery_JobConfigurationTableCopy', \false);
/** @internal */
class Google_Service_Bigquery_JobList extends Google_Collection
{
    protected $collection_key = 'jobs';
    protected $internal_gapi_mappings = array();
    public $etag;
    protected $jobsType = 'VendorDuplicator\\Google_Service_Bigquery_JobListJobs';
    protected $jobsDataType = 'array';
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
    public function setJobs($jobs)
    {
        $this->jobs = $jobs;
    }
    public function getJobs()
    {
        return $this->jobs;
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
\class_alias('VendorDuplicator\\Google_Service_Bigquery_JobList', 'VendorDuplicator\\Google_Service_Bigquery_JobList', \false);
/** @internal */
class Google_Service_Bigquery_JobListJobs extends Google_Model
{
    protected $internal_gapi_mappings = array("userEmail" => "user_email");
    protected $configurationType = 'VendorDuplicator\\Google_Service_Bigquery_JobConfiguration';
    protected $configurationDataType = '';
    protected $errorResultType = 'VendorDuplicator\\Google_Service_Bigquery_ErrorProto';
    protected $errorResultDataType = '';
    public $id;
    protected $jobReferenceType = 'VendorDuplicator\\Google_Service_Bigquery_JobReference';
    protected $jobReferenceDataType = '';
    public $kind;
    public $state;
    protected $statisticsType = 'VendorDuplicator\\Google_Service_Bigquery_JobStatistics';
    protected $statisticsDataType = '';
    protected $statusType = 'VendorDuplicator\\Google_Service_Bigquery_JobStatus';
    protected $statusDataType = '';
    public $userEmail;
    public function setConfiguration(Google_Service_Bigquery_JobConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }
    public function getConfiguration()
    {
        return $this->configuration;
    }
    public function setErrorResult(Google_Service_Bigquery_ErrorProto $errorResult)
    {
        $this->errorResult = $errorResult;
    }
    public function getErrorResult()
    {
        return $this->errorResult;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setJobReference(Google_Service_Bigquery_JobReference $jobReference)
    {
        $this->jobReference = $jobReference;
    }
    public function getJobReference()
    {
        return $this->jobReference;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setState($state)
    {
        $this->state = $state;
    }
    public function getState()
    {
        return $this->state;
    }
    public function setStatistics(Google_Service_Bigquery_JobStatistics $statistics)
    {
        $this->statistics = $statistics;
    }
    public function getStatistics()
    {
        return $this->statistics;
    }
    public function setStatus(Google_Service_Bigquery_JobStatus $status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
    }
    public function getUserEmail()
    {
        return $this->userEmail;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_JobListJobs', 'VendorDuplicator\\Google_Service_Bigquery_JobListJobs', \false);
/** @internal */
class Google_Service_Bigquery_JobReference extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $jobId;
    public $projectId;
    public function setJobId($jobId)
    {
        $this->jobId = $jobId;
    }
    public function getJobId()
    {
        return $this->jobId;
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
\class_alias('VendorDuplicator\\Google_Service_Bigquery_JobReference', 'VendorDuplicator\\Google_Service_Bigquery_JobReference', \false);
/** @internal */
class Google_Service_Bigquery_JobStatistics extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $creationTime;
    public $endTime;
    protected $extractType = 'VendorDuplicator\\Google_Service_Bigquery_JobStatistics4';
    protected $extractDataType = '';
    protected $loadType = 'VendorDuplicator\\Google_Service_Bigquery_JobStatistics3';
    protected $loadDataType = '';
    protected $queryType = 'VendorDuplicator\\Google_Service_Bigquery_JobStatistics2';
    protected $queryDataType = '';
    public $startTime;
    public $totalBytesProcessed;
    public function setCreationTime($creationTime)
    {
        $this->creationTime = $creationTime;
    }
    public function getCreationTime()
    {
        return $this->creationTime;
    }
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }
    public function getEndTime()
    {
        return $this->endTime;
    }
    public function setExtract(Google_Service_Bigquery_JobStatistics4 $extract)
    {
        $this->extract = $extract;
    }
    public function getExtract()
    {
        return $this->extract;
    }
    public function setLoad(Google_Service_Bigquery_JobStatistics3 $load)
    {
        $this->load = $load;
    }
    public function getLoad()
    {
        return $this->load;
    }
    public function setQuery(Google_Service_Bigquery_JobStatistics2 $query)
    {
        $this->query = $query;
    }
    public function getQuery()
    {
        return $this->query;
    }
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }
    public function getStartTime()
    {
        return $this->startTime;
    }
    public function setTotalBytesProcessed($totalBytesProcessed)
    {
        $this->totalBytesProcessed = $totalBytesProcessed;
    }
    public function getTotalBytesProcessed()
    {
        return $this->totalBytesProcessed;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_JobStatistics', 'VendorDuplicator\\Google_Service_Bigquery_JobStatistics', \false);
/** @internal */
class Google_Service_Bigquery_JobStatistics2 extends Google_Collection
{
    protected $collection_key = 'queryPlan';
    protected $internal_gapi_mappings = array();
    public $billingTier;
    public $cacheHit;
    protected $queryPlanType = 'VendorDuplicator\\Google_Service_Bigquery_ExplainQueryStage';
    protected $queryPlanDataType = 'array';
    public $totalBytesBilled;
    public $totalBytesProcessed;
    public function setBillingTier($billingTier)
    {
        $this->billingTier = $billingTier;
    }
    public function getBillingTier()
    {
        return $this->billingTier;
    }
    public function setCacheHit($cacheHit)
    {
        $this->cacheHit = $cacheHit;
    }
    public function getCacheHit()
    {
        return $this->cacheHit;
    }
    public function setQueryPlan($queryPlan)
    {
        $this->queryPlan = $queryPlan;
    }
    public function getQueryPlan()
    {
        return $this->queryPlan;
    }
    public function setTotalBytesBilled($totalBytesBilled)
    {
        $this->totalBytesBilled = $totalBytesBilled;
    }
    public function getTotalBytesBilled()
    {
        return $this->totalBytesBilled;
    }
    public function setTotalBytesProcessed($totalBytesProcessed)
    {
        $this->totalBytesProcessed = $totalBytesProcessed;
    }
    public function getTotalBytesProcessed()
    {
        return $this->totalBytesProcessed;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_JobStatistics2', 'VendorDuplicator\\Google_Service_Bigquery_JobStatistics2', \false);
/** @internal */
class Google_Service_Bigquery_JobStatistics3 extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $inputFileBytes;
    public $inputFiles;
    public $outputBytes;
    public $outputRows;
    public function setInputFileBytes($inputFileBytes)
    {
        $this->inputFileBytes = $inputFileBytes;
    }
    public function getInputFileBytes()
    {
        return $this->inputFileBytes;
    }
    public function setInputFiles($inputFiles)
    {
        $this->inputFiles = $inputFiles;
    }
    public function getInputFiles()
    {
        return $this->inputFiles;
    }
    public function setOutputBytes($outputBytes)
    {
        $this->outputBytes = $outputBytes;
    }
    public function getOutputBytes()
    {
        return $this->outputBytes;
    }
    public function setOutputRows($outputRows)
    {
        $this->outputRows = $outputRows;
    }
    public function getOutputRows()
    {
        return $this->outputRows;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_JobStatistics3', 'VendorDuplicator\\Google_Service_Bigquery_JobStatistics3', \false);
/** @internal */
class Google_Service_Bigquery_JobStatistics4 extends Google_Collection
{
    protected $collection_key = 'destinationUriFileCounts';
    protected $internal_gapi_mappings = array();
    public $destinationUriFileCounts;
    public function setDestinationUriFileCounts($destinationUriFileCounts)
    {
        $this->destinationUriFileCounts = $destinationUriFileCounts;
    }
    public function getDestinationUriFileCounts()
    {
        return $this->destinationUriFileCounts;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_JobStatistics4', 'VendorDuplicator\\Google_Service_Bigquery_JobStatistics4', \false);
/** @internal */
class Google_Service_Bigquery_JobStatus extends Google_Collection
{
    protected $collection_key = 'errors';
    protected $internal_gapi_mappings = array();
    protected $errorResultType = 'VendorDuplicator\\Google_Service_Bigquery_ErrorProto';
    protected $errorResultDataType = '';
    protected $errorsType = 'VendorDuplicator\\Google_Service_Bigquery_ErrorProto';
    protected $errorsDataType = 'array';
    public $state;
    public function setErrorResult(Google_Service_Bigquery_ErrorProto $errorResult)
    {
        $this->errorResult = $errorResult;
    }
    public function getErrorResult()
    {
        return $this->errorResult;
    }
    public function setErrors($errors)
    {
        $this->errors = $errors;
    }
    public function getErrors()
    {
        return $this->errors;
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
\class_alias('VendorDuplicator\\Google_Service_Bigquery_JobStatus', 'VendorDuplicator\\Google_Service_Bigquery_JobStatus', \false);
/** @internal */
class Google_Service_Bigquery_ProjectList extends Google_Collection
{
    protected $collection_key = 'projects';
    protected $internal_gapi_mappings = array();
    public $etag;
    public $kind;
    public $nextPageToken;
    protected $projectsType = 'VendorDuplicator\\Google_Service_Bigquery_ProjectListProjects';
    protected $projectsDataType = 'array';
    public $totalItems;
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
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
    public function setProjects($projects)
    {
        $this->projects = $projects;
    }
    public function getProjects()
    {
        return $this->projects;
    }
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }
    public function getTotalItems()
    {
        return $this->totalItems;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_ProjectList', 'VendorDuplicator\\Google_Service_Bigquery_ProjectList', \false);
/** @internal */
class Google_Service_Bigquery_ProjectListProjects extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $friendlyName;
    public $id;
    public $kind;
    public $numericId;
    protected $projectReferenceType = 'VendorDuplicator\\Google_Service_Bigquery_ProjectReference';
    protected $projectReferenceDataType = '';
    public function setFriendlyName($friendlyName)
    {
        $this->friendlyName = $friendlyName;
    }
    public function getFriendlyName()
    {
        return $this->friendlyName;
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
    public function setNumericId($numericId)
    {
        $this->numericId = $numericId;
    }
    public function getNumericId()
    {
        return $this->numericId;
    }
    public function setProjectReference(Google_Service_Bigquery_ProjectReference $projectReference)
    {
        $this->projectReference = $projectReference;
    }
    public function getProjectReference()
    {
        return $this->projectReference;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_ProjectListProjects', 'VendorDuplicator\\Google_Service_Bigquery_ProjectListProjects', \false);
/** @internal */
class Google_Service_Bigquery_ProjectReference extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $projectId;
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
\class_alias('VendorDuplicator\\Google_Service_Bigquery_ProjectReference', 'VendorDuplicator\\Google_Service_Bigquery_ProjectReference', \false);
/** @internal */
class Google_Service_Bigquery_QueryRequest extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $defaultDatasetType = 'VendorDuplicator\\Google_Service_Bigquery_DatasetReference';
    protected $defaultDatasetDataType = '';
    public $dryRun;
    public $kind;
    public $maxResults;
    public $preserveNulls;
    public $query;
    public $timeoutMs;
    public $useQueryCache;
    public function setDefaultDataset(Google_Service_Bigquery_DatasetReference $defaultDataset)
    {
        $this->defaultDataset = $defaultDataset;
    }
    public function getDefaultDataset()
    {
        return $this->defaultDataset;
    }
    public function setDryRun($dryRun)
    {
        $this->dryRun = $dryRun;
    }
    public function getDryRun()
    {
        return $this->dryRun;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setMaxResults($maxResults)
    {
        $this->maxResults = $maxResults;
    }
    public function getMaxResults()
    {
        return $this->maxResults;
    }
    public function setPreserveNulls($preserveNulls)
    {
        $this->preserveNulls = $preserveNulls;
    }
    public function getPreserveNulls()
    {
        return $this->preserveNulls;
    }
    public function setQuery($query)
    {
        $this->query = $query;
    }
    public function getQuery()
    {
        return $this->query;
    }
    public function setTimeoutMs($timeoutMs)
    {
        $this->timeoutMs = $timeoutMs;
    }
    public function getTimeoutMs()
    {
        return $this->timeoutMs;
    }
    public function setUseQueryCache($useQueryCache)
    {
        $this->useQueryCache = $useQueryCache;
    }
    public function getUseQueryCache()
    {
        return $this->useQueryCache;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_QueryRequest', 'VendorDuplicator\\Google_Service_Bigquery_QueryRequest', \false);
/** @internal */
class Google_Service_Bigquery_QueryResponse extends Google_Collection
{
    protected $collection_key = 'rows';
    protected $internal_gapi_mappings = array();
    public $cacheHit;
    protected $errorsType = 'VendorDuplicator\\Google_Service_Bigquery_ErrorProto';
    protected $errorsDataType = 'array';
    public $jobComplete;
    protected $jobReferenceType = 'VendorDuplicator\\Google_Service_Bigquery_JobReference';
    protected $jobReferenceDataType = '';
    public $kind;
    public $pageToken;
    protected $rowsType = 'VendorDuplicator\\Google_Service_Bigquery_TableRow';
    protected $rowsDataType = 'array';
    protected $schemaType = 'VendorDuplicator\\Google_Service_Bigquery_TableSchema';
    protected $schemaDataType = '';
    public $totalBytesProcessed;
    public $totalRows;
    public function setCacheHit($cacheHit)
    {
        $this->cacheHit = $cacheHit;
    }
    public function getCacheHit()
    {
        return $this->cacheHit;
    }
    public function setErrors($errors)
    {
        $this->errors = $errors;
    }
    public function getErrors()
    {
        return $this->errors;
    }
    public function setJobComplete($jobComplete)
    {
        $this->jobComplete = $jobComplete;
    }
    public function getJobComplete()
    {
        return $this->jobComplete;
    }
    public function setJobReference(Google_Service_Bigquery_JobReference $jobReference)
    {
        $this->jobReference = $jobReference;
    }
    public function getJobReference()
    {
        return $this->jobReference;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setPageToken($pageToken)
    {
        $this->pageToken = $pageToken;
    }
    public function getPageToken()
    {
        return $this->pageToken;
    }
    public function setRows($rows)
    {
        $this->rows = $rows;
    }
    public function getRows()
    {
        return $this->rows;
    }
    public function setSchema(Google_Service_Bigquery_TableSchema $schema)
    {
        $this->schema = $schema;
    }
    public function getSchema()
    {
        return $this->schema;
    }
    public function setTotalBytesProcessed($totalBytesProcessed)
    {
        $this->totalBytesProcessed = $totalBytesProcessed;
    }
    public function getTotalBytesProcessed()
    {
        return $this->totalBytesProcessed;
    }
    public function setTotalRows($totalRows)
    {
        $this->totalRows = $totalRows;
    }
    public function getTotalRows()
    {
        return $this->totalRows;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_QueryResponse', 'VendorDuplicator\\Google_Service_Bigquery_QueryResponse', \false);
/** @internal */
class Google_Service_Bigquery_Streamingbuffer extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $estimatedBytes;
    public $estimatedRows;
    public $oldestEntryTime;
    public function setEstimatedBytes($estimatedBytes)
    {
        $this->estimatedBytes = $estimatedBytes;
    }
    public function getEstimatedBytes()
    {
        return $this->estimatedBytes;
    }
    public function setEstimatedRows($estimatedRows)
    {
        $this->estimatedRows = $estimatedRows;
    }
    public function getEstimatedRows()
    {
        return $this->estimatedRows;
    }
    public function setOldestEntryTime($oldestEntryTime)
    {
        $this->oldestEntryTime = $oldestEntryTime;
    }
    public function getOldestEntryTime()
    {
        return $this->oldestEntryTime;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_Streamingbuffer', 'VendorDuplicator\\Google_Service_Bigquery_Streamingbuffer', \false);
/** @internal */
class Google_Service_Bigquery_Table extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $creationTime;
    public $description;
    public $etag;
    public $expirationTime;
    protected $externalDataConfigurationType = 'VendorDuplicator\\Google_Service_Bigquery_ExternalDataConfiguration';
    protected $externalDataConfigurationDataType = '';
    public $friendlyName;
    public $id;
    public $kind;
    public $lastModifiedTime;
    public $location;
    public $numBytes;
    public $numRows;
    protected $schemaType = 'VendorDuplicator\\Google_Service_Bigquery_TableSchema';
    protected $schemaDataType = '';
    public $selfLink;
    protected $streamingBufferType = 'VendorDuplicator\\Google_Service_Bigquery_Streamingbuffer';
    protected $streamingBufferDataType = '';
    protected $tableReferenceType = 'VendorDuplicator\\Google_Service_Bigquery_TableReference';
    protected $tableReferenceDataType = '';
    public $type;
    protected $viewType = 'VendorDuplicator\\Google_Service_Bigquery_ViewDefinition';
    protected $viewDataType = '';
    public function setCreationTime($creationTime)
    {
        $this->creationTime = $creationTime;
    }
    public function getCreationTime()
    {
        return $this->creationTime;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setExpirationTime($expirationTime)
    {
        $this->expirationTime = $expirationTime;
    }
    public function getExpirationTime()
    {
        return $this->expirationTime;
    }
    public function setExternalDataConfiguration(Google_Service_Bigquery_ExternalDataConfiguration $externalDataConfiguration)
    {
        $this->externalDataConfiguration = $externalDataConfiguration;
    }
    public function getExternalDataConfiguration()
    {
        return $this->externalDataConfiguration;
    }
    public function setFriendlyName($friendlyName)
    {
        $this->friendlyName = $friendlyName;
    }
    public function getFriendlyName()
    {
        return $this->friendlyName;
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
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->lastModifiedTime = $lastModifiedTime;
    }
    public function getLastModifiedTime()
    {
        return $this->lastModifiedTime;
    }
    public function setLocation($location)
    {
        $this->location = $location;
    }
    public function getLocation()
    {
        return $this->location;
    }
    public function setNumBytes($numBytes)
    {
        $this->numBytes = $numBytes;
    }
    public function getNumBytes()
    {
        return $this->numBytes;
    }
    public function setNumRows($numRows)
    {
        $this->numRows = $numRows;
    }
    public function getNumRows()
    {
        return $this->numRows;
    }
    public function setSchema(Google_Service_Bigquery_TableSchema $schema)
    {
        $this->schema = $schema;
    }
    public function getSchema()
    {
        return $this->schema;
    }
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    public function getSelfLink()
    {
        return $this->selfLink;
    }
    public function setStreamingBuffer(Google_Service_Bigquery_Streamingbuffer $streamingBuffer)
    {
        $this->streamingBuffer = $streamingBuffer;
    }
    public function getStreamingBuffer()
    {
        return $this->streamingBuffer;
    }
    public function setTableReference(Google_Service_Bigquery_TableReference $tableReference)
    {
        $this->tableReference = $tableReference;
    }
    public function getTableReference()
    {
        return $this->tableReference;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setView(Google_Service_Bigquery_ViewDefinition $view)
    {
        $this->view = $view;
    }
    public function getView()
    {
        return $this->view;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_Table', 'VendorDuplicator\\Google_Service_Bigquery_Table', \false);
/** @internal */
class Google_Service_Bigquery_TableCell extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $v;
    public function setV($v)
    {
        $this->v = $v;
    }
    public function getV()
    {
        return $this->v;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_TableCell', 'VendorDuplicator\\Google_Service_Bigquery_TableCell', \false);
/** @internal */
class Google_Service_Bigquery_TableDataInsertAllRequest extends Google_Collection
{
    protected $collection_key = 'rows';
    protected $internal_gapi_mappings = array();
    public $ignoreUnknownValues;
    public $kind;
    protected $rowsType = 'VendorDuplicator\\Google_Service_Bigquery_TableDataInsertAllRequestRows';
    protected $rowsDataType = 'array';
    public $skipInvalidRows;
    public $templateSuffix;
    public function setIgnoreUnknownValues($ignoreUnknownValues)
    {
        $this->ignoreUnknownValues = $ignoreUnknownValues;
    }
    public function getIgnoreUnknownValues()
    {
        return $this->ignoreUnknownValues;
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
    public function setSkipInvalidRows($skipInvalidRows)
    {
        $this->skipInvalidRows = $skipInvalidRows;
    }
    public function getSkipInvalidRows()
    {
        return $this->skipInvalidRows;
    }
    public function setTemplateSuffix($templateSuffix)
    {
        $this->templateSuffix = $templateSuffix;
    }
    public function getTemplateSuffix()
    {
        return $this->templateSuffix;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_TableDataInsertAllRequest', 'VendorDuplicator\\Google_Service_Bigquery_TableDataInsertAllRequest', \false);
/** @internal */
class Google_Service_Bigquery_TableDataInsertAllRequestRows extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $insertId;
    public $json;
    public function setInsertId($insertId)
    {
        $this->insertId = $insertId;
    }
    public function getInsertId()
    {
        return $this->insertId;
    }
    public function setJson($json)
    {
        $this->json = $json;
    }
    public function getJson()
    {
        return $this->json;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_TableDataInsertAllRequestRows', 'VendorDuplicator\\Google_Service_Bigquery_TableDataInsertAllRequestRows', \false);
/** @internal */
class Google_Service_Bigquery_TableDataInsertAllResponse extends Google_Collection
{
    protected $collection_key = 'insertErrors';
    protected $internal_gapi_mappings = array();
    protected $insertErrorsType = 'VendorDuplicator\\Google_Service_Bigquery_TableDataInsertAllResponseInsertErrors';
    protected $insertErrorsDataType = 'array';
    public $kind;
    public function setInsertErrors($insertErrors)
    {
        $this->insertErrors = $insertErrors;
    }
    public function getInsertErrors()
    {
        return $this->insertErrors;
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
\class_alias('VendorDuplicator\\Google_Service_Bigquery_TableDataInsertAllResponse', 'VendorDuplicator\\Google_Service_Bigquery_TableDataInsertAllResponse', \false);
/** @internal */
class Google_Service_Bigquery_TableDataInsertAllResponseInsertErrors extends Google_Collection
{
    protected $collection_key = 'errors';
    protected $internal_gapi_mappings = array();
    protected $errorsType = 'VendorDuplicator\\Google_Service_Bigquery_ErrorProto';
    protected $errorsDataType = 'array';
    public $index;
    public function setErrors($errors)
    {
        $this->errors = $errors;
    }
    public function getErrors()
    {
        return $this->errors;
    }
    public function setIndex($index)
    {
        $this->index = $index;
    }
    public function getIndex()
    {
        return $this->index;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_TableDataInsertAllResponseInsertErrors', 'VendorDuplicator\\Google_Service_Bigquery_TableDataInsertAllResponseInsertErrors', \false);
/** @internal */
class Google_Service_Bigquery_TableDataList extends Google_Collection
{
    protected $collection_key = 'rows';
    protected $internal_gapi_mappings = array();
    public $etag;
    public $kind;
    public $pageToken;
    protected $rowsType = 'VendorDuplicator\\Google_Service_Bigquery_TableRow';
    protected $rowsDataType = 'array';
    public $totalRows;
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setPageToken($pageToken)
    {
        $this->pageToken = $pageToken;
    }
    public function getPageToken()
    {
        return $this->pageToken;
    }
    public function setRows($rows)
    {
        $this->rows = $rows;
    }
    public function getRows()
    {
        return $this->rows;
    }
    public function setTotalRows($totalRows)
    {
        $this->totalRows = $totalRows;
    }
    public function getTotalRows()
    {
        return $this->totalRows;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_TableDataList', 'VendorDuplicator\\Google_Service_Bigquery_TableDataList', \false);
/** @internal */
class Google_Service_Bigquery_TableFieldSchema extends Google_Collection
{
    protected $collection_key = 'fields';
    protected $internal_gapi_mappings = array();
    public $description;
    protected $fieldsType = 'VendorDuplicator\\Google_Service_Bigquery_TableFieldSchema';
    protected $fieldsDataType = 'array';
    public $mode;
    public $name;
    public $type;
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setFields($fields)
    {
        $this->fields = $fields;
    }
    public function getFields()
    {
        return $this->fields;
    }
    public function setMode($mode)
    {
        $this->mode = $mode;
    }
    public function getMode()
    {
        return $this->mode;
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
\class_alias('VendorDuplicator\\Google_Service_Bigquery_TableFieldSchema', 'VendorDuplicator\\Google_Service_Bigquery_TableFieldSchema', \false);
/** @internal */
class Google_Service_Bigquery_TableList extends Google_Collection
{
    protected $collection_key = 'tables';
    protected $internal_gapi_mappings = array();
    public $etag;
    public $kind;
    public $nextPageToken;
    protected $tablesType = 'VendorDuplicator\\Google_Service_Bigquery_TableListTables';
    protected $tablesDataType = 'array';
    public $totalItems;
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
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
    public function setTables($tables)
    {
        $this->tables = $tables;
    }
    public function getTables()
    {
        return $this->tables;
    }
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }
    public function getTotalItems()
    {
        return $this->totalItems;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_TableList', 'VendorDuplicator\\Google_Service_Bigquery_TableList', \false);
/** @internal */
class Google_Service_Bigquery_TableListTables extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $friendlyName;
    public $id;
    public $kind;
    protected $tableReferenceType = 'VendorDuplicator\\Google_Service_Bigquery_TableReference';
    protected $tableReferenceDataType = '';
    public $type;
    public function setFriendlyName($friendlyName)
    {
        $this->friendlyName = $friendlyName;
    }
    public function getFriendlyName()
    {
        return $this->friendlyName;
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
    public function setTableReference(Google_Service_Bigquery_TableReference $tableReference)
    {
        $this->tableReference = $tableReference;
    }
    public function getTableReference()
    {
        return $this->tableReference;
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
\class_alias('VendorDuplicator\\Google_Service_Bigquery_TableListTables', 'VendorDuplicator\\Google_Service_Bigquery_TableListTables', \false);
/** @internal */
class Google_Service_Bigquery_TableReference extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $datasetId;
    public $projectId;
    public $tableId;
    public function setDatasetId($datasetId)
    {
        $this->datasetId = $datasetId;
    }
    public function getDatasetId()
    {
        return $this->datasetId;
    }
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }
    public function getProjectId()
    {
        return $this->projectId;
    }
    public function setTableId($tableId)
    {
        $this->tableId = $tableId;
    }
    public function getTableId()
    {
        return $this->tableId;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_TableReference', 'VendorDuplicator\\Google_Service_Bigquery_TableReference', \false);
/** @internal */
class Google_Service_Bigquery_TableRow extends Google_Collection
{
    protected $collection_key = 'f';
    protected $internal_gapi_mappings = array();
    protected $fType = 'VendorDuplicator\\Google_Service_Bigquery_TableCell';
    protected $fDataType = 'array';
    public function setF($f)
    {
        $this->f = $f;
    }
    public function getF()
    {
        return $this->f;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_TableRow', 'VendorDuplicator\\Google_Service_Bigquery_TableRow', \false);
/** @internal */
class Google_Service_Bigquery_TableSchema extends Google_Collection
{
    protected $collection_key = 'fields';
    protected $internal_gapi_mappings = array();
    protected $fieldsType = 'VendorDuplicator\\Google_Service_Bigquery_TableFieldSchema';
    protected $fieldsDataType = 'array';
    public function setFields($fields)
    {
        $this->fields = $fields;
    }
    public function getFields()
    {
        return $this->fields;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_TableSchema', 'VendorDuplicator\\Google_Service_Bigquery_TableSchema', \false);
/** @internal */
class Google_Service_Bigquery_UserDefinedFunctionResource extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $inlineCode;
    public $resourceUri;
    public function setInlineCode($inlineCode)
    {
        $this->inlineCode = $inlineCode;
    }
    public function getInlineCode()
    {
        return $this->inlineCode;
    }
    public function setResourceUri($resourceUri)
    {
        $this->resourceUri = $resourceUri;
    }
    public function getResourceUri()
    {
        return $this->resourceUri;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_UserDefinedFunctionResource', 'VendorDuplicator\\Google_Service_Bigquery_UserDefinedFunctionResource', \false);
/** @internal */
class Google_Service_Bigquery_ViewDefinition extends Google_Collection
{
    protected $collection_key = 'userDefinedFunctionResources';
    protected $internal_gapi_mappings = array();
    public $query;
    protected $userDefinedFunctionResourcesType = 'VendorDuplicator\\Google_Service_Bigquery_UserDefinedFunctionResource';
    protected $userDefinedFunctionResourcesDataType = 'array';
    public function setQuery($query)
    {
        $this->query = $query;
    }
    public function getQuery()
    {
        return $this->query;
    }
    public function setUserDefinedFunctionResources($userDefinedFunctionResources)
    {
        $this->userDefinedFunctionResources = $userDefinedFunctionResources;
    }
    public function getUserDefinedFunctionResources()
    {
        return $this->userDefinedFunctionResources;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Bigquery_ViewDefinition', 'VendorDuplicator\\Google_Service_Bigquery_ViewDefinition', \false);
