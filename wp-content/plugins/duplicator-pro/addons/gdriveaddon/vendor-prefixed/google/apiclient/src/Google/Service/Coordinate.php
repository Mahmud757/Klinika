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
 * Service definition for Coordinate (v1).
 *
 * <p>
 * Lets you view and manage jobs in a Coordinate team.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/coordinate/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 * @internal
 */
class Google_Service_Coordinate extends Google_Service
{
    /** View and manage your Google Maps Coordinate jobs. */
    const COORDINATE = "https://www.googleapis.com/auth/coordinate";
    /** View your Google Coordinate jobs. */
    const COORDINATE_READONLY = "https://www.googleapis.com/auth/coordinate.readonly";
    public $customFieldDef;
    public $jobs;
    public $location;
    public $schedule;
    public $team;
    public $worker;
    /**
     * Constructs the internal representation of the Coordinate service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->rootUrl = 'https://www.googleapis.com/';
        $this->servicePath = 'coordinate/v1/';
        $this->version = 'v1';
        $this->serviceName = 'coordinate';
        $this->customFieldDef = new Google_Service_Coordinate_CustomFieldDef_Resource($this, $this->serviceName, 'customFieldDef', array('methods' => array('list' => array('path' => 'teams/{teamId}/custom_fields', 'httpMethod' => 'GET', 'parameters' => array('teamId' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->jobs = new Google_Service_Coordinate_Jobs_Resource($this, $this->serviceName, 'jobs', array('methods' => array('get' => array('path' => 'teams/{teamId}/jobs/{jobId}', 'httpMethod' => 'GET', 'parameters' => array('teamId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'jobId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'insert' => array('path' => 'teams/{teamId}/jobs', 'httpMethod' => 'POST', 'parameters' => array('teamId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'address' => array('location' => 'query', 'type' => 'string', 'required' => \true), 'lat' => array('location' => 'query', 'type' => 'number', 'required' => \true), 'lng' => array('location' => 'query', 'type' => 'number', 'required' => \true), 'title' => array('location' => 'query', 'type' => 'string', 'required' => \true), 'assignee' => array('location' => 'query', 'type' => 'string'), 'customField' => array('location' => 'query', 'type' => 'string', 'repeated' => \true), 'customerName' => array('location' => 'query', 'type' => 'string'), 'customerPhoneNumber' => array('location' => 'query', 'type' => 'string'), 'note' => array('location' => 'query', 'type' => 'string'))), 'list' => array('path' => 'teams/{teamId}/jobs', 'httpMethod' => 'GET', 'parameters' => array('teamId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'minModifiedTimestampMs' => array('location' => 'query', 'type' => 'string'), 'omitJobChanges' => array('location' => 'query', 'type' => 'boolean'), 'pageToken' => array('location' => 'query', 'type' => 'string'))), 'patch' => array('path' => 'teams/{teamId}/jobs/{jobId}', 'httpMethod' => 'PATCH', 'parameters' => array('teamId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'jobId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'address' => array('location' => 'query', 'type' => 'string'), 'assignee' => array('location' => 'query', 'type' => 'string'), 'customField' => array('location' => 'query', 'type' => 'string', 'repeated' => \true), 'customerName' => array('location' => 'query', 'type' => 'string'), 'customerPhoneNumber' => array('location' => 'query', 'type' => 'string'), 'lat' => array('location' => 'query', 'type' => 'number'), 'lng' => array('location' => 'query', 'type' => 'number'), 'note' => array('location' => 'query', 'type' => 'string'), 'progress' => array('location' => 'query', 'type' => 'string'), 'title' => array('location' => 'query', 'type' => 'string'))), 'update' => array('path' => 'teams/{teamId}/jobs/{jobId}', 'httpMethod' => 'PUT', 'parameters' => array('teamId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'jobId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'address' => array('location' => 'query', 'type' => 'string'), 'assignee' => array('location' => 'query', 'type' => 'string'), 'customField' => array('location' => 'query', 'type' => 'string', 'repeated' => \true), 'customerName' => array('location' => 'query', 'type' => 'string'), 'customerPhoneNumber' => array('location' => 'query', 'type' => 'string'), 'lat' => array('location' => 'query', 'type' => 'number'), 'lng' => array('location' => 'query', 'type' => 'number'), 'note' => array('location' => 'query', 'type' => 'string'), 'progress' => array('location' => 'query', 'type' => 'string'), 'title' => array('location' => 'query', 'type' => 'string'))))));
        $this->location = new Google_Service_Coordinate_Location_Resource($this, $this->serviceName, 'location', array('methods' => array('list' => array('path' => 'teams/{teamId}/workers/{workerEmail}/locations', 'httpMethod' => 'GET', 'parameters' => array('teamId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'workerEmail' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'startTimestampMs' => array('location' => 'query', 'type' => 'string', 'required' => \true), 'maxResults' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'))))));
        $this->schedule = new Google_Service_Coordinate_Schedule_Resource($this, $this->serviceName, 'schedule', array('methods' => array('get' => array('path' => 'teams/{teamId}/jobs/{jobId}/schedule', 'httpMethod' => 'GET', 'parameters' => array('teamId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'jobId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'patch' => array('path' => 'teams/{teamId}/jobs/{jobId}/schedule', 'httpMethod' => 'PATCH', 'parameters' => array('teamId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'jobId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'allDay' => array('location' => 'query', 'type' => 'boolean'), 'duration' => array('location' => 'query', 'type' => 'string'), 'endTime' => array('location' => 'query', 'type' => 'string'), 'startTime' => array('location' => 'query', 'type' => 'string'))), 'update' => array('path' => 'teams/{teamId}/jobs/{jobId}/schedule', 'httpMethod' => 'PUT', 'parameters' => array('teamId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'jobId' => array('location' => 'path', 'type' => 'string', 'required' => \true), 'allDay' => array('location' => 'query', 'type' => 'boolean'), 'duration' => array('location' => 'query', 'type' => 'string'), 'endTime' => array('location' => 'query', 'type' => 'string'), 'startTime' => array('location' => 'query', 'type' => 'string'))))));
        $this->team = new Google_Service_Coordinate_Team_Resource($this, $this->serviceName, 'team', array('methods' => array('list' => array('path' => 'teams', 'httpMethod' => 'GET', 'parameters' => array('admin' => array('location' => 'query', 'type' => 'boolean'), 'dispatcher' => array('location' => 'query', 'type' => 'boolean'), 'worker' => array('location' => 'query', 'type' => 'boolean'))))));
        $this->worker = new Google_Service_Coordinate_Worker_Resource($this, $this->serviceName, 'worker', array('methods' => array('list' => array('path' => 'teams/{teamId}/workers', 'httpMethod' => 'GET', 'parameters' => array('teamId' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
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
 * Service definition for Coordinate (v1).
 *
 * <p>
 * Lets you view and manage jobs in a Coordinate team.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/coordinate/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Coordinate', 'VendorDuplicator\\Google_Service_Coordinate', \false);
/**
 * The "customFieldDef" collection of methods.
 * Typical usage is:
 *  <code>
 *   $coordinateService = new Google_Service_Coordinate(...);
 *   $customFieldDef = $coordinateService->customFieldDef;
 *  </code>
 * @internal
 */
class Google_Service_Coordinate_CustomFieldDef_Resource extends Google_Service_Resource
{
    /**
     * Retrieves a list of custom field definitions for a team.
     * (customFieldDef.listCustomFieldDef)
     *
     * @param string $teamId Team ID
     * @param array $optParams Optional parameters.
     * @return Google_Service_Coordinate_CustomFieldDefListResponse
     */
    public function listCustomFieldDef($teamId, $optParams = array())
    {
        $params = array('teamId' => $teamId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Coordinate_CustomFieldDefListResponse");
    }
}
/**
 * The "customFieldDef" collection of methods.
 * Typical usage is:
 *  <code>
 *   $coordinateService = new Google_Service_Coordinate(...);
 *   $customFieldDef = $coordinateService->customFieldDef;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Coordinate_CustomFieldDef_Resource', 'VendorDuplicator\\Google_Service_Coordinate_CustomFieldDef_Resource', \false);
/**
 * The "jobs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $coordinateService = new Google_Service_Coordinate(...);
 *   $jobs = $coordinateService->jobs;
 *  </code>
 * @internal
 */
class Google_Service_Coordinate_Jobs_Resource extends Google_Service_Resource
{
    /**
     * Retrieves a job, including all the changes made to the job. (jobs.get)
     *
     * @param string $teamId Team ID
     * @param string $jobId Job number
     * @param array $optParams Optional parameters.
     * @return Google_Service_Coordinate_Job
     */
    public function get($teamId, $jobId, $optParams = array())
    {
        $params = array('teamId' => $teamId, 'jobId' => $jobId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Coordinate_Job");
    }
    /**
     * Inserts a new job. Only the state field of the job should be set.
     * (jobs.insert)
     *
     * @param string $teamId Team ID
     * @param string $address Job address as newline (Unix) separated string
     * @param double $lat The latitude coordinate of this job's location.
     * @param double $lng The longitude coordinate of this job's location.
     * @param string $title Job title
     * @param Google_Job $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string assignee Assignee email address, or empty string to
     * unassign.
     * @opt_param string customField Sets the value of custom fields. To set a
     * custom field, pass the field id (from /team/teamId/custom_fields), a URL
     * escaped '=' character, and the desired value as a parameter. For example,
     * customField=12%3DAlice. Repeat the parameter for each custom field. Note that
     * '=' cannot appear in the parameter value. Specifying an invalid, or inactive
     * enum field will result in an error 500.
     * @opt_param string customerName Customer name
     * @opt_param string customerPhoneNumber Customer phone number
     * @opt_param string note Job note as newline (Unix) separated string
     * @return Google_Service_Coordinate_Job
     */
    public function insert($teamId, $address, $lat, $lng, $title, Google_Service_Coordinate_Job $postBody, $optParams = array())
    {
        $params = array('teamId' => $teamId, 'address' => $address, 'lat' => $lat, 'lng' => $lng, 'title' => $title, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Coordinate_Job");
    }
    /**
     * Retrieves jobs created or modified since the given timestamp. (jobs.listJobs)
     *
     * @param string $teamId Team ID
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults Maximum number of results to return in one page.
     * @opt_param string minModifiedTimestampMs Minimum time a job was modified in
     * milliseconds since epoch.
     * @opt_param bool omitJobChanges Whether to omit detail job history
     * information.
     * @opt_param string pageToken Continuation token
     * @return Google_Service_Coordinate_JobListResponse
     */
    public function listJobs($teamId, $optParams = array())
    {
        $params = array('teamId' => $teamId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Coordinate_JobListResponse");
    }
    /**
     * Updates a job. Fields that are set in the job state will be updated. This
     * method supports patch semantics. (jobs.patch)
     *
     * @param string $teamId Team ID
     * @param string $jobId Job number
     * @param Google_Job $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string address Job address as newline (Unix) separated string
     * @opt_param string assignee Assignee email address, or empty string to
     * unassign.
     * @opt_param string customField Sets the value of custom fields. To set a
     * custom field, pass the field id (from /team/teamId/custom_fields), a URL
     * escaped '=' character, and the desired value as a parameter. For example,
     * customField=12%3DAlice. Repeat the parameter for each custom field. Note that
     * '=' cannot appear in the parameter value. Specifying an invalid, or inactive
     * enum field will result in an error 500.
     * @opt_param string customerName Customer name
     * @opt_param string customerPhoneNumber Customer phone number
     * @opt_param double lat The latitude coordinate of this job's location.
     * @opt_param double lng The longitude coordinate of this job's location.
     * @opt_param string note Job note as newline (Unix) separated string
     * @opt_param string progress Job progress
     * @opt_param string title Job title
     * @return Google_Service_Coordinate_Job
     */
    public function patch($teamId, $jobId, Google_Service_Coordinate_Job $postBody, $optParams = array())
    {
        $params = array('teamId' => $teamId, 'jobId' => $jobId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('patch', array($params), "VendorDuplicator\\Google_Service_Coordinate_Job");
    }
    /**
     * Updates a job. Fields that are set in the job state will be updated.
     * (jobs.update)
     *
     * @param string $teamId Team ID
     * @param string $jobId Job number
     * @param Google_Job $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string address Job address as newline (Unix) separated string
     * @opt_param string assignee Assignee email address, or empty string to
     * unassign.
     * @opt_param string customField Sets the value of custom fields. To set a
     * custom field, pass the field id (from /team/teamId/custom_fields), a URL
     * escaped '=' character, and the desired value as a parameter. For example,
     * customField=12%3DAlice. Repeat the parameter for each custom field. Note that
     * '=' cannot appear in the parameter value. Specifying an invalid, or inactive
     * enum field will result in an error 500.
     * @opt_param string customerName Customer name
     * @opt_param string customerPhoneNumber Customer phone number
     * @opt_param double lat The latitude coordinate of this job's location.
     * @opt_param double lng The longitude coordinate of this job's location.
     * @opt_param string note Job note as newline (Unix) separated string
     * @opt_param string progress Job progress
     * @opt_param string title Job title
     * @return Google_Service_Coordinate_Job
     */
    public function update($teamId, $jobId, Google_Service_Coordinate_Job $postBody, $optParams = array())
    {
        $params = array('teamId' => $teamId, 'jobId' => $jobId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('update', array($params), "VendorDuplicator\\Google_Service_Coordinate_Job");
    }
}
/**
 * The "jobs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $coordinateService = new Google_Service_Coordinate(...);
 *   $jobs = $coordinateService->jobs;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Coordinate_Jobs_Resource', 'VendorDuplicator\\Google_Service_Coordinate_Jobs_Resource', \false);
/**
 * The "location" collection of methods.
 * Typical usage is:
 *  <code>
 *   $coordinateService = new Google_Service_Coordinate(...);
 *   $location = $coordinateService->location;
 *  </code>
 * @internal
 */
class Google_Service_Coordinate_Location_Resource extends Google_Service_Resource
{
    /**
     * Retrieves a list of locations for a worker. (location.listLocation)
     *
     * @param string $teamId Team ID
     * @param string $workerEmail Worker email address.
     * @param string $startTimestampMs Start timestamp in milliseconds since the
     * epoch.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults Maximum number of results to return in one page.
     * @opt_param string pageToken Continuation token
     * @return Google_Service_Coordinate_LocationListResponse
     */
    public function listLocation($teamId, $workerEmail, $startTimestampMs, $optParams = array())
    {
        $params = array('teamId' => $teamId, 'workerEmail' => $workerEmail, 'startTimestampMs' => $startTimestampMs);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Coordinate_LocationListResponse");
    }
}
/**
 * The "location" collection of methods.
 * Typical usage is:
 *  <code>
 *   $coordinateService = new Google_Service_Coordinate(...);
 *   $location = $coordinateService->location;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Coordinate_Location_Resource', 'VendorDuplicator\\Google_Service_Coordinate_Location_Resource', \false);
/**
 * The "schedule" collection of methods.
 * Typical usage is:
 *  <code>
 *   $coordinateService = new Google_Service_Coordinate(...);
 *   $schedule = $coordinateService->schedule;
 *  </code>
 * @internal
 */
class Google_Service_Coordinate_Schedule_Resource extends Google_Service_Resource
{
    /**
     * Retrieves the schedule for a job. (schedule.get)
     *
     * @param string $teamId Team ID
     * @param string $jobId Job number
     * @param array $optParams Optional parameters.
     * @return Google_Service_Coordinate_Schedule
     */
    public function get($teamId, $jobId, $optParams = array())
    {
        $params = array('teamId' => $teamId, 'jobId' => $jobId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Coordinate_Schedule");
    }
    /**
     * Replaces the schedule of a job with the provided schedule. This method
     * supports patch semantics. (schedule.patch)
     *
     * @param string $teamId Team ID
     * @param string $jobId Job number
     * @param Google_Schedule $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool allDay Whether the job is scheduled for the whole day. Time
     * of day in start/end times is ignored if this is true.
     * @opt_param string duration Job duration in milliseconds.
     * @opt_param string endTime Scheduled end time in milliseconds since epoch.
     * @opt_param string startTime Scheduled start time in milliseconds since epoch.
     * @return Google_Service_Coordinate_Schedule
     */
    public function patch($teamId, $jobId, Google_Service_Coordinate_Schedule $postBody, $optParams = array())
    {
        $params = array('teamId' => $teamId, 'jobId' => $jobId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('patch', array($params), "VendorDuplicator\\Google_Service_Coordinate_Schedule");
    }
    /**
     * Replaces the schedule of a job with the provided schedule. (schedule.update)
     *
     * @param string $teamId Team ID
     * @param string $jobId Job number
     * @param Google_Schedule $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool allDay Whether the job is scheduled for the whole day. Time
     * of day in start/end times is ignored if this is true.
     * @opt_param string duration Job duration in milliseconds.
     * @opt_param string endTime Scheduled end time in milliseconds since epoch.
     * @opt_param string startTime Scheduled start time in milliseconds since epoch.
     * @return Google_Service_Coordinate_Schedule
     */
    public function update($teamId, $jobId, Google_Service_Coordinate_Schedule $postBody, $optParams = array())
    {
        $params = array('teamId' => $teamId, 'jobId' => $jobId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('update', array($params), "VendorDuplicator\\Google_Service_Coordinate_Schedule");
    }
}
/**
 * The "schedule" collection of methods.
 * Typical usage is:
 *  <code>
 *   $coordinateService = new Google_Service_Coordinate(...);
 *   $schedule = $coordinateService->schedule;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Coordinate_Schedule_Resource', 'VendorDuplicator\\Google_Service_Coordinate_Schedule_Resource', \false);
/**
 * The "team" collection of methods.
 * Typical usage is:
 *  <code>
 *   $coordinateService = new Google_Service_Coordinate(...);
 *   $team = $coordinateService->team;
 *  </code>
 * @internal
 */
class Google_Service_Coordinate_Team_Resource extends Google_Service_Resource
{
    /**
     * Retrieves a list of teams for a user. (team.listTeam)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool admin Whether to include teams for which the user has the
     * Admin role.
     * @opt_param bool dispatcher Whether to include teams for which the user has
     * the Dispatcher role.
     * @opt_param bool worker Whether to include teams for which the user has the
     * Worker role.
     * @return Google_Service_Coordinate_TeamListResponse
     */
    public function listTeam($optParams = array())
    {
        $params = array();
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Coordinate_TeamListResponse");
    }
}
/**
 * The "team" collection of methods.
 * Typical usage is:
 *  <code>
 *   $coordinateService = new Google_Service_Coordinate(...);
 *   $team = $coordinateService->team;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Coordinate_Team_Resource', 'VendorDuplicator\\Google_Service_Coordinate_Team_Resource', \false);
/**
 * The "worker" collection of methods.
 * Typical usage is:
 *  <code>
 *   $coordinateService = new Google_Service_Coordinate(...);
 *   $worker = $coordinateService->worker;
 *  </code>
 * @internal
 */
class Google_Service_Coordinate_Worker_Resource extends Google_Service_Resource
{
    /**
     * Retrieves a list of workers in a team. (worker.listWorker)
     *
     * @param string $teamId Team ID
     * @param array $optParams Optional parameters.
     * @return Google_Service_Coordinate_WorkerListResponse
     */
    public function listWorker($teamId, $optParams = array())
    {
        $params = array('teamId' => $teamId);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Coordinate_WorkerListResponse");
    }
}
/**
 * The "worker" collection of methods.
 * Typical usage is:
 *  <code>
 *   $coordinateService = new Google_Service_Coordinate(...);
 *   $worker = $coordinateService->worker;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Coordinate_Worker_Resource', 'VendorDuplicator\\Google_Service_Coordinate_Worker_Resource', \false);
/** @internal */
class Google_Service_Coordinate_CustomField extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $customFieldId;
    public $kind;
    public $value;
    public function setCustomFieldId($customFieldId)
    {
        $this->customFieldId = $customFieldId;
    }
    public function getCustomFieldId()
    {
        return $this->customFieldId;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
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
\class_alias('VendorDuplicator\\Google_Service_Coordinate_CustomField', 'VendorDuplicator\\Google_Service_Coordinate_CustomField', \false);
/** @internal */
class Google_Service_Coordinate_CustomFieldDef extends Google_Collection
{
    protected $collection_key = 'enumitems';
    protected $internal_gapi_mappings = array();
    public $enabled;
    protected $enumitemsType = 'VendorDuplicator\\Google_Service_Coordinate_EnumItemDef';
    protected $enumitemsDataType = 'array';
    public $id;
    public $kind;
    public $name;
    public $requiredForCheckout;
    public $type;
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }
    public function getEnabled()
    {
        return $this->enabled;
    }
    public function setEnumitems($enumitems)
    {
        $this->enumitems = $enumitems;
    }
    public function getEnumitems()
    {
        return $this->enumitems;
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
    public function setRequiredForCheckout($requiredForCheckout)
    {
        $this->requiredForCheckout = $requiredForCheckout;
    }
    public function getRequiredForCheckout()
    {
        return $this->requiredForCheckout;
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
\class_alias('VendorDuplicator\\Google_Service_Coordinate_CustomFieldDef', 'VendorDuplicator\\Google_Service_Coordinate_CustomFieldDef', \false);
/** @internal */
class Google_Service_Coordinate_CustomFieldDefListResponse extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    protected $itemsType = 'VendorDuplicator\\Google_Service_Coordinate_CustomFieldDef';
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
\class_alias('VendorDuplicator\\Google_Service_Coordinate_CustomFieldDefListResponse', 'VendorDuplicator\\Google_Service_Coordinate_CustomFieldDefListResponse', \false);
/** @internal */
class Google_Service_Coordinate_CustomFields extends Google_Collection
{
    protected $collection_key = 'customField';
    protected $internal_gapi_mappings = array();
    protected $customFieldType = 'VendorDuplicator\\Google_Service_Coordinate_CustomField';
    protected $customFieldDataType = 'array';
    public $kind;
    public function setCustomField($customField)
    {
        $this->customField = $customField;
    }
    public function getCustomField()
    {
        return $this->customField;
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
\class_alias('VendorDuplicator\\Google_Service_Coordinate_CustomFields', 'VendorDuplicator\\Google_Service_Coordinate_CustomFields', \false);
/** @internal */
class Google_Service_Coordinate_EnumItemDef extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $active;
    public $kind;
    public $value;
    public function setActive($active)
    {
        $this->active = $active;
    }
    public function getActive()
    {
        return $this->active;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
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
\class_alias('VendorDuplicator\\Google_Service_Coordinate_EnumItemDef', 'VendorDuplicator\\Google_Service_Coordinate_EnumItemDef', \false);
/** @internal */
class Google_Service_Coordinate_Job extends Google_Collection
{
    protected $collection_key = 'jobChange';
    protected $internal_gapi_mappings = array();
    public $id;
    protected $jobChangeType = 'VendorDuplicator\\Google_Service_Coordinate_JobChange';
    protected $jobChangeDataType = 'array';
    public $kind;
    protected $stateType = 'VendorDuplicator\\Google_Service_Coordinate_JobState';
    protected $stateDataType = '';
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setJobChange($jobChange)
    {
        $this->jobChange = $jobChange;
    }
    public function getJobChange()
    {
        return $this->jobChange;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setState(Google_Service_Coordinate_JobState $state)
    {
        $this->state = $state;
    }
    public function getState()
    {
        return $this->state;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Coordinate_Job', 'VendorDuplicator\\Google_Service_Coordinate_Job', \false);
/** @internal */
class Google_Service_Coordinate_JobChange extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $kind;
    protected $stateType = 'VendorDuplicator\\Google_Service_Coordinate_JobState';
    protected $stateDataType = '';
    public $timestamp;
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setState(Google_Service_Coordinate_JobState $state)
    {
        $this->state = $state;
    }
    public function getState()
    {
        return $this->state;
    }
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }
    public function getTimestamp()
    {
        return $this->timestamp;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Coordinate_JobChange', 'VendorDuplicator\\Google_Service_Coordinate_JobChange', \false);
/** @internal */
class Google_Service_Coordinate_JobListResponse extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    protected $itemsType = 'VendorDuplicator\\Google_Service_Coordinate_Job';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
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
\class_alias('VendorDuplicator\\Google_Service_Coordinate_JobListResponse', 'VendorDuplicator\\Google_Service_Coordinate_JobListResponse', \false);
/** @internal */
class Google_Service_Coordinate_JobState extends Google_Collection
{
    protected $collection_key = 'note';
    protected $internal_gapi_mappings = array();
    public $assignee;
    protected $customFieldsType = 'VendorDuplicator\\Google_Service_Coordinate_CustomFields';
    protected $customFieldsDataType = '';
    public $customerName;
    public $customerPhoneNumber;
    public $kind;
    protected $locationType = 'VendorDuplicator\\Google_Service_Coordinate_Location';
    protected $locationDataType = '';
    public $note;
    public $progress;
    public $title;
    public function setAssignee($assignee)
    {
        $this->assignee = $assignee;
    }
    public function getAssignee()
    {
        return $this->assignee;
    }
    public function setCustomFields(Google_Service_Coordinate_CustomFields $customFields)
    {
        $this->customFields = $customFields;
    }
    public function getCustomFields()
    {
        return $this->customFields;
    }
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
    }
    public function getCustomerName()
    {
        return $this->customerName;
    }
    public function setCustomerPhoneNumber($customerPhoneNumber)
    {
        $this->customerPhoneNumber = $customerPhoneNumber;
    }
    public function getCustomerPhoneNumber()
    {
        return $this->customerPhoneNumber;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setLocation(Google_Service_Coordinate_Location $location)
    {
        $this->location = $location;
    }
    public function getLocation()
    {
        return $this->location;
    }
    public function setNote($note)
    {
        $this->note = $note;
    }
    public function getNote()
    {
        return $this->note;
    }
    public function setProgress($progress)
    {
        $this->progress = $progress;
    }
    public function getProgress()
    {
        return $this->progress;
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
\class_alias('VendorDuplicator\\Google_Service_Coordinate_JobState', 'VendorDuplicator\\Google_Service_Coordinate_JobState', \false);
/** @internal */
class Google_Service_Coordinate_Location extends Google_Collection
{
    protected $collection_key = 'addressLine';
    protected $internal_gapi_mappings = array();
    public $addressLine;
    public $kind;
    public $lat;
    public $lng;
    public function setAddressLine($addressLine)
    {
        $this->addressLine = $addressLine;
    }
    public function getAddressLine()
    {
        return $this->addressLine;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setLat($lat)
    {
        $this->lat = $lat;
    }
    public function getLat()
    {
        return $this->lat;
    }
    public function setLng($lng)
    {
        $this->lng = $lng;
    }
    public function getLng()
    {
        return $this->lng;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Coordinate_Location', 'VendorDuplicator\\Google_Service_Coordinate_Location', \false);
/** @internal */
class Google_Service_Coordinate_LocationListResponse extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    protected $itemsType = 'VendorDuplicator\\Google_Service_Coordinate_LocationRecord';
    protected $itemsDataType = 'array';
    public $kind;
    public $nextPageToken;
    protected $tokenPaginationType = 'VendorDuplicator\\Google_Service_Coordinate_TokenPagination';
    protected $tokenPaginationDataType = '';
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
    public function setTokenPagination(Google_Service_Coordinate_TokenPagination $tokenPagination)
    {
        $this->tokenPagination = $tokenPagination;
    }
    public function getTokenPagination()
    {
        return $this->tokenPagination;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Coordinate_LocationListResponse', 'VendorDuplicator\\Google_Service_Coordinate_LocationListResponse', \false);
/** @internal */
class Google_Service_Coordinate_LocationRecord extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $collectionTime;
    public $confidenceRadius;
    public $kind;
    public $latitude;
    public $longitude;
    public function setCollectionTime($collectionTime)
    {
        $this->collectionTime = $collectionTime;
    }
    public function getCollectionTime()
    {
        return $this->collectionTime;
    }
    public function setConfidenceRadius($confidenceRadius)
    {
        $this->confidenceRadius = $confidenceRadius;
    }
    public function getConfidenceRadius()
    {
        return $this->confidenceRadius;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }
    public function getLatitude()
    {
        return $this->latitude;
    }
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }
    public function getLongitude()
    {
        return $this->longitude;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Coordinate_LocationRecord', 'VendorDuplicator\\Google_Service_Coordinate_LocationRecord', \false);
/** @internal */
class Google_Service_Coordinate_Schedule extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $allDay;
    public $duration;
    public $endTime;
    public $kind;
    public $startTime;
    public function setAllDay($allDay)
    {
        $this->allDay = $allDay;
    }
    public function getAllDay()
    {
        return $this->allDay;
    }
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }
    public function getDuration()
    {
        return $this->duration;
    }
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }
    public function getEndTime()
    {
        return $this->endTime;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }
    public function getStartTime()
    {
        return $this->startTime;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Coordinate_Schedule', 'VendorDuplicator\\Google_Service_Coordinate_Schedule', \false);
/** @internal */
class Google_Service_Coordinate_Team extends Google_Model
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
\class_alias('VendorDuplicator\\Google_Service_Coordinate_Team', 'VendorDuplicator\\Google_Service_Coordinate_Team', \false);
/** @internal */
class Google_Service_Coordinate_TeamListResponse extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    protected $itemsType = 'VendorDuplicator\\Google_Service_Coordinate_Team';
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
\class_alias('VendorDuplicator\\Google_Service_Coordinate_TeamListResponse', 'VendorDuplicator\\Google_Service_Coordinate_TeamListResponse', \false);
/** @internal */
class Google_Service_Coordinate_TokenPagination extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $kind;
    public $nextPageToken;
    public $previousPageToken;
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
    public function setPreviousPageToken($previousPageToken)
    {
        $this->previousPageToken = $previousPageToken;
    }
    public function getPreviousPageToken()
    {
        return $this->previousPageToken;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Coordinate_TokenPagination', 'VendorDuplicator\\Google_Service_Coordinate_TokenPagination', \false);
/** @internal */
class Google_Service_Coordinate_Worker extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    public $kind;
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
\class_alias('VendorDuplicator\\Google_Service_Coordinate_Worker', 'VendorDuplicator\\Google_Service_Coordinate_Worker', \false);
/** @internal */
class Google_Service_Coordinate_WorkerListResponse extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    protected $itemsType = 'VendorDuplicator\\Google_Service_Coordinate_Worker';
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
\class_alias('VendorDuplicator\\Google_Service_Coordinate_WorkerListResponse', 'VendorDuplicator\\Google_Service_Coordinate_WorkerListResponse', \false);
