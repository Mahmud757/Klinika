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
 * Service definition for Cloudresourcemanager (v1beta1).
 *
 * <p>
 * The Google Cloud Resource Manager API provides methods for creating, reading,
 * and updating project metadata.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/resource-manager" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 * @internal
 */
class Google_Service_Cloudresourcemanager extends Google_Service
{
    /** View and manage your data across Google Cloud Platform services. */
    const CLOUD_PLATFORM = "https://www.googleapis.com/auth/cloud-platform";
    /** View your data across Google Cloud Platform services. */
    const CLOUD_PLATFORM_READ_ONLY = "https://www.googleapis.com/auth/cloud-platform.read-only";
    public $organizations;
    public $projects;
    /**
     * Constructs the internal representation of the Cloudresourcemanager service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->rootUrl = 'https://cloudresourcemanager.googleapis.com/';
        $this->servicePath = '';
        $this->version = 'v1beta1';
        $this->serviceName = 'cloudresourcemanager';
        $this->organizations = new Google_Service_Cloudresourcemanager_Organizations_Resource($this, $this->serviceName, 'organizations', array('methods' => array('get' => array('path' => 'v1beta1/organizations/{organizationId}', 'httpMethod' => 'GET', 'parameters' => array('organizationId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'getIamPolicy' => array('path' => 'v1beta1/organizations/{resource}:getIamPolicy', 'httpMethod' => 'POST', 'parameters' => array('resource' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'v1beta1/organizations', 'httpMethod' => 'GET', 'parameters' => array('pageSize' => array('location' => 'query', 'type' => 'integer'), 'pageToken' => array('location' => 'query', 'type' => 'string'), 'filter' => array('location' => 'query', 'type' => 'string'))), 'setIamPolicy' => array('path' => 'v1beta1/organizations/{resource}:setIamPolicy', 'httpMethod' => 'POST', 'parameters' => array('resource' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'testIamPermissions' => array('path' => 'v1beta1/organizations/{resource}:testIamPermissions', 'httpMethod' => 'POST', 'parameters' => array('resource' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'update' => array('path' => 'v1beta1/organizations/{organizationId}', 'httpMethod' => 'PUT', 'parameters' => array('organizationId' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
        $this->projects = new Google_Service_Cloudresourcemanager_Projects_Resource($this, $this->serviceName, 'projects', array('methods' => array('create' => array('path' => 'v1beta1/projects', 'httpMethod' => 'POST', 'parameters' => array()), 'delete' => array('path' => 'v1beta1/projects/{projectId}', 'httpMethod' => 'DELETE', 'parameters' => array('projectId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'get' => array('path' => 'v1beta1/projects/{projectId}', 'httpMethod' => 'GET', 'parameters' => array('projectId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'getIamPolicy' => array('path' => 'v1beta1/projects/{resource}:getIamPolicy', 'httpMethod' => 'POST', 'parameters' => array('resource' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'list' => array('path' => 'v1beta1/projects', 'httpMethod' => 'GET', 'parameters' => array('pageToken' => array('location' => 'query', 'type' => 'string'), 'pageSize' => array('location' => 'query', 'type' => 'integer'), 'filter' => array('location' => 'query', 'type' => 'string'))), 'setIamPolicy' => array('path' => 'v1beta1/projects/{resource}:setIamPolicy', 'httpMethod' => 'POST', 'parameters' => array('resource' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'testIamPermissions' => array('path' => 'v1beta1/projects/{resource}:testIamPermissions', 'httpMethod' => 'POST', 'parameters' => array('resource' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'undelete' => array('path' => 'v1beta1/projects/{projectId}:undelete', 'httpMethod' => 'POST', 'parameters' => array('projectId' => array('location' => 'path', 'type' => 'string', 'required' => \true))), 'update' => array('path' => 'v1beta1/projects/{projectId}', 'httpMethod' => 'PUT', 'parameters' => array('projectId' => array('location' => 'path', 'type' => 'string', 'required' => \true))))));
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
 * Service definition for Cloudresourcemanager (v1beta1).
 *
 * <p>
 * The Google Cloud Resource Manager API provides methods for creating, reading,
 * and updating project metadata.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/resource-manager" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Cloudresourcemanager', 'VendorDuplicator\\Google_Service_Cloudresourcemanager', \false);
/**
 * The "organizations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudresourcemanagerService = new Google_Service_Cloudresourcemanager(...);
 *   $organizations = $cloudresourcemanagerService->organizations;
 *  </code>
 * @internal
 */
class Google_Service_Cloudresourcemanager_Organizations_Resource extends Google_Service_Resource
{
    /**
     * Fetches an Organization resource identified by the specified
     * `organization_id`. (organizations.get)
     *
     * @param string $organizationId The id of the Organization resource to fetch.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Cloudresourcemanager_Organization
     */
    public function get($organizationId, $optParams = array())
    {
        $params = array('organizationId' => $organizationId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Cloudresourcemanager_Organization");
    }
    /**
     * Gets the access control policy for an Organization resource. May be empty if
     * no such policy or resource exists. (organizations.getIamPolicy)
     *
     * @param string $resource REQUIRED: The resource for which the policy is being
     * requested. `resource` is usually specified as a path, such as
     * `projectsprojectzoneszonedisksdisk*`. The format for the path specified in
     * this value is resource specific and is specified in the `getIamPolicy`
     * documentation.
     * @param Google_GetIamPolicyRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Cloudresourcemanager_Policy
     */
    public function getIamPolicy($resource, Google_Service_Cloudresourcemanager_GetIamPolicyRequest $postBody, $optParams = array())
    {
        $params = array('resource' => $resource, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('getIamPolicy', array($params), "VendorDuplicator\\Google_Service_Cloudresourcemanager_Policy");
    }
    /**
     * Lists Organization resources that are visible to the user and satisfy the
     * specified filter. This method returns Organizations in an unspecified order.
     * New Organizations do not necessarily appear at the end of the list.
     * (organizations.listOrganizations)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param int pageSize The maximum number of Organizations to return in the
     * response. This field is optional.
     * @opt_param string pageToken A pagination token returned from a previous call
     * to `ListOrganizations` that indicates from where listing should continue.
     * This field is optional.
     * @opt_param string filter An optional query string used to filter the
     * Organizations to return in the response. Filter rules are case-insensitive.
     * Organizations may be filtered by `owner.directoryCustomerId` or by `domain`,
     * where the domain is a Google for Work domain, for example:
     * |Filter|Description| |------|-----------|
     * |owner.directorycustomerid:123456789|Organizations with
     * `owner.directory_customer_id` equal to `123456789`.|
     * |domain:google.com|Organizations corresponding to the domain `google.com`.|
     * This field is optional.
     * @return Google_Service_Cloudresourcemanager_ListOrganizationsResponse
     */
    public function listOrganizations($optParams = array())
    {
        $params = array();
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Cloudresourcemanager_ListOrganizationsResponse");
    }
    /**
     * Sets the access control policy on an Organization resource. Replaces any
     * existing policy. (organizations.setIamPolicy)
     *
     * @param string $resource REQUIRED: The resource for which the policy is being
     * specified. `resource` is usually specified as a path, such as
     * `projectsprojectzoneszonedisksdisk*`. The format for the path specified in
     * this value is resource specific and is specified in the `setIamPolicy`
     * documentation.
     * @param Google_SetIamPolicyRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Cloudresourcemanager_Policy
     */
    public function setIamPolicy($resource, Google_Service_Cloudresourcemanager_SetIamPolicyRequest $postBody, $optParams = array())
    {
        $params = array('resource' => $resource, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('setIamPolicy', array($params), "VendorDuplicator\\Google_Service_Cloudresourcemanager_Policy");
    }
    /**
     * Returns permissions that a caller has on the specified Organization.
     * (organizations.testIamPermissions)
     *
     * @param string $resource REQUIRED: The resource for which the policy detail is
     * being requested. `resource` is usually specified as a path, such as
     * `projectsprojectzoneszonedisksdisk*`. The format for the path specified in
     * this value is resource specific and is specified in the `testIamPermissions`
     * documentation.
     * @param Google_TestIamPermissionsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Cloudresourcemanager_TestIamPermissionsResponse
     */
    public function testIamPermissions($resource, Google_Service_Cloudresourcemanager_TestIamPermissionsRequest $postBody, $optParams = array())
    {
        $params = array('resource' => $resource, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('testIamPermissions', array($params), "VendorDuplicator\\Google_Service_Cloudresourcemanager_TestIamPermissionsResponse");
    }
    /**
     * Updates an Organization resource identified by the specified
     * `organization_id`. (organizations.update)
     *
     * @param string $organizationId An immutable id for the Organization that is
     * assigned on creation. This should be omitted when creating a new
     * Organization. This field is read-only.
     * @param Google_Organization $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Cloudresourcemanager_Organization
     */
    public function update($organizationId, Google_Service_Cloudresourcemanager_Organization $postBody, $optParams = array())
    {
        $params = array('organizationId' => $organizationId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('update', array($params), "VendorDuplicator\\Google_Service_Cloudresourcemanager_Organization");
    }
}
/**
 * The "organizations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudresourcemanagerService = new Google_Service_Cloudresourcemanager(...);
 *   $organizations = $cloudresourcemanagerService->organizations;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Cloudresourcemanager_Organizations_Resource', 'VendorDuplicator\\Google_Service_Cloudresourcemanager_Organizations_Resource', \false);
/**
 * The "projects" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudresourcemanagerService = new Google_Service_Cloudresourcemanager(...);
 *   $projects = $cloudresourcemanagerService->projects;
 *  </code>
 * @internal
 */
class Google_Service_Cloudresourcemanager_Projects_Resource extends Google_Service_Resource
{
    /**
     * Creates a Project resource. Initially, the Project resource is owned by its
     * creator exclusively. The creator can later grant permission to others to read
     * or update the Project. Several APIs are activated automatically for the
     * Project, including Google Cloud Storage. (projects.create)
     *
     * @param Google_Project $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Cloudresourcemanager_Project
     */
    public function create(Google_Service_Cloudresourcemanager_Project $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('create', array($params), "VendorDuplicator\\Google_Service_Cloudresourcemanager_Project");
    }
    /**
     * Marks the Project identified by the specified `project_id` (for example, `my-
     * project-123`) for deletion. This method will only affect the Project if the
     * following criteria are met: + The Project does not have a billing account
     * associated with it. + The Project has a lifecycle state of ACTIVE. This
     * method changes the Project's lifecycle state from ACTIVE to DELETE_REQUESTED.
     * The deletion starts at an unspecified time, at which point the lifecycle
     * state changes to DELETE_IN_PROGRESS. Until the deletion completes, you can
     * check the lifecycle state checked by retrieving the Project with GetProject,
     * and the Project remains visible to ListProjects. However, you cannot update
     * the project. After the deletion completes, the Project is not retrievable by
     * the GetProject and ListProjects methods. The caller must have modify
     * permissions for this Project. (projects.delete)
     *
     * @param string $projectId The Project ID (for example, `foo-bar-123`).
     * Required.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Cloudresourcemanager_Empty
     */
    public function delete($projectId, $optParams = array())
    {
        $params = array('projectId' => $projectId);
        $params = \array_merge($params, $optParams);
        return $this->call('delete', array($params), "VendorDuplicator\\Google_Service_Cloudresourcemanager_Empty");
    }
    /**
     * Retrieves the Project identified by the specified `project_id` (for example,
     * `my-project-123`). The caller must have read permissions for this Project.
     * (projects.get)
     *
     * @param string $projectId The Project ID (for example, `my-project-123`).
     * Required.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Cloudresourcemanager_Project
     */
    public function get($projectId, $optParams = array())
    {
        $params = array('projectId' => $projectId);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Cloudresourcemanager_Project");
    }
    /**
     * Returns the IAM access control policy for the specified Project. Permission
     * is denied if the policy or the resource does not exist.
     * (projects.getIamPolicy)
     *
     * @param string $resource REQUIRED: The resource for which the policy is being
     * requested. `resource` is usually specified as a path, such as
     * `projectsprojectzoneszonedisksdisk*`. The format for the path specified in
     * this value is resource specific and is specified in the `getIamPolicy`
     * documentation.
     * @param Google_GetIamPolicyRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Cloudresourcemanager_Policy
     */
    public function getIamPolicy($resource, Google_Service_Cloudresourcemanager_GetIamPolicyRequest $postBody, $optParams = array())
    {
        $params = array('resource' => $resource, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('getIamPolicy', array($params), "VendorDuplicator\\Google_Service_Cloudresourcemanager_Policy");
    }
    /**
     * Lists Projects that are visible to the user and satisfy the specified filter.
     * This method returns Projects in an unspecified order. New Projects do not
     * necessarily appear at the end of the list. (projects.listProjects)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken A pagination token returned from a previous call
     * to ListProjects that indicates from where listing should continue. Optional.
     * @opt_param int pageSize The maximum number of Projects to return in the
     * response. The server can return fewer Projects than requested. If
     * unspecified, server picks an appropriate default. Optional.
     * @opt_param string filter An expression for filtering the results of the
     * request. Filter rules are case insensitive. The fields eligible for filtering
     * are: + `name` + `id` + labels.key where *key* is the name of a label Some
     * examples of using labels as filters: |Filter|Description|
     * |------|-----------| |name:*|The project has a name.| |name:Howl|The
     * project's name is `Howl` or `howl`.| |name:HOWL|Equivalent to above.|
     * |NAME:howl|Equivalent to above.| |labels.color:*|The project has the label
     * `color`.| |labels.color:red|The project's label `color` has the value `red`.|
     * |labels.color:red label.size:big|The project's label `color` has the value
     * `red` and its label `size` has the value `big`. Optional.
     * @return Google_Service_Cloudresourcemanager_ListProjectsResponse
     */
    public function listProjects($optParams = array())
    {
        $params = array();
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Cloudresourcemanager_ListProjectsResponse");
    }
    /**
     * Sets the IAM access control policy for the specified Project. Replaces any
     * existing policy. The following constraints apply when using `setIamPolicy()`:
     * + Project currently supports only `user:{emailid}` and
     * `serviceAccount:{emailid}` members in a `Binding` of a `Policy`. + To be
     * added as an `owner`, a user must be invited via Cloud Platform console and
     * must accept the invitation. + Members cannot be added to more than one role
     * in the same policy. + There must be at least one owner who has accepted the
     * Terms of Service (ToS) agreement in the policy. Calling `setIamPolicy()` to
     * to remove the last ToS-accepted owner from the policy will fail. + Calling
     * this method requires enabling the App Engine Admin API. Note: Removing
     * service accounts from policies or changing their roles can render services
     * completely inoperable. It is important to understand how the service account
     * is being used before removing or updating its roles. (projects.setIamPolicy)
     *
     * @param string $resource REQUIRED: The resource for which the policy is being
     * specified. `resource` is usually specified as a path, such as
     * `projectsprojectzoneszonedisksdisk*`. The format for the path specified in
     * this value is resource specific and is specified in the `setIamPolicy`
     * documentation.
     * @param Google_SetIamPolicyRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Cloudresourcemanager_Policy
     */
    public function setIamPolicy($resource, Google_Service_Cloudresourcemanager_SetIamPolicyRequest $postBody, $optParams = array())
    {
        $params = array('resource' => $resource, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('setIamPolicy', array($params), "VendorDuplicator\\Google_Service_Cloudresourcemanager_Policy");
    }
    /**
     * Returns permissions that a caller has on the specified Project.
     * (projects.testIamPermissions)
     *
     * @param string $resource REQUIRED: The resource for which the policy detail is
     * being requested. `resource` is usually specified as a path, such as
     * `projectsprojectzoneszonedisksdisk*`. The format for the path specified in
     * this value is resource specific and is specified in the `testIamPermissions`
     * documentation.
     * @param Google_TestIamPermissionsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Cloudresourcemanager_TestIamPermissionsResponse
     */
    public function testIamPermissions($resource, Google_Service_Cloudresourcemanager_TestIamPermissionsRequest $postBody, $optParams = array())
    {
        $params = array('resource' => $resource, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('testIamPermissions', array($params), "VendorDuplicator\\Google_Service_Cloudresourcemanager_TestIamPermissionsResponse");
    }
    /**
     * Restores the Project identified by the specified `project_id` (for example,
     * `my-project-123`). You can only use this method for a Project that has a
     * lifecycle state of DELETE_REQUESTED. After deletion starts, as indicated by a
     * lifecycle state of DELETE_IN_PROGRESS, the Project cannot be restored. The
     * caller must have modify permissions for this Project. (projects.undelete)
     *
     * @param string $projectId The project ID (for example, `foo-bar-123`).
     * Required.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Cloudresourcemanager_Empty
     */
    public function undelete($projectId, $optParams = array())
    {
        $params = array('projectId' => $projectId);
        $params = \array_merge($params, $optParams);
        return $this->call('undelete', array($params), "VendorDuplicator\\Google_Service_Cloudresourcemanager_Empty");
    }
    /**
     * Updates the attributes of the Project identified by the specified
     * `project_id` (for example, `my-project-123`). The caller must have modify
     * permissions for this Project. (projects.update)
     *
     * @param string $projectId The project ID (for example, `my-project-123`).
     * Required.
     * @param Google_Project $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Cloudresourcemanager_Project
     */
    public function update($projectId, Google_Service_Cloudresourcemanager_Project $postBody, $optParams = array())
    {
        $params = array('projectId' => $projectId, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('update', array($params), "VendorDuplicator\\Google_Service_Cloudresourcemanager_Project");
    }
}
/**
 * The "projects" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudresourcemanagerService = new Google_Service_Cloudresourcemanager(...);
 *   $projects = $cloudresourcemanagerService->projects;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Cloudresourcemanager_Projects_Resource', 'VendorDuplicator\\Google_Service_Cloudresourcemanager_Projects_Resource', \false);
/** @internal */
class Google_Service_Cloudresourcemanager_Binding extends Google_Collection
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
\class_alias('VendorDuplicator\\Google_Service_Cloudresourcemanager_Binding', 'VendorDuplicator\\Google_Service_Cloudresourcemanager_Binding', \false);
/** @internal */
class Google_Service_Cloudresourcemanager_Empty extends Google_Model
{
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Cloudresourcemanager_Empty', 'VendorDuplicator\\Google_Service_Cloudresourcemanager_Empty', \false);
/** @internal */
class Google_Service_Cloudresourcemanager_GetIamPolicyRequest extends Google_Model
{
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Cloudresourcemanager_GetIamPolicyRequest', 'VendorDuplicator\\Google_Service_Cloudresourcemanager_GetIamPolicyRequest', \false);
/** @internal */
class Google_Service_Cloudresourcemanager_ListOrganizationsResponse extends Google_Collection
{
    protected $collection_key = 'organizations';
    protected $internal_gapi_mappings = array();
    public $nextPageToken;
    protected $organizationsType = 'VendorDuplicator\\Google_Service_Cloudresourcemanager_Organization';
    protected $organizationsDataType = 'array';
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
    public function setOrganizations($organizations)
    {
        $this->organizations = $organizations;
    }
    public function getOrganizations()
    {
        return $this->organizations;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Cloudresourcemanager_ListOrganizationsResponse', 'VendorDuplicator\\Google_Service_Cloudresourcemanager_ListOrganizationsResponse', \false);
/** @internal */
class Google_Service_Cloudresourcemanager_ListProjectsResponse extends Google_Collection
{
    protected $collection_key = 'projects';
    protected $internal_gapi_mappings = array();
    public $nextPageToken;
    protected $projectsType = 'VendorDuplicator\\Google_Service_Cloudresourcemanager_Project';
    protected $projectsDataType = 'array';
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
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Cloudresourcemanager_ListProjectsResponse', 'VendorDuplicator\\Google_Service_Cloudresourcemanager_ListProjectsResponse', \false);
/** @internal */
class Google_Service_Cloudresourcemanager_Organization extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $creationTime;
    public $displayName;
    public $organizationId;
    protected $ownerType = 'VendorDuplicator\\Google_Service_Cloudresourcemanager_OrganizationOwner';
    protected $ownerDataType = '';
    public function setCreationTime($creationTime)
    {
        $this->creationTime = $creationTime;
    }
    public function getCreationTime()
    {
        return $this->creationTime;
    }
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
    public function getDisplayName()
    {
        return $this->displayName;
    }
    public function setOrganizationId($organizationId)
    {
        $this->organizationId = $organizationId;
    }
    public function getOrganizationId()
    {
        return $this->organizationId;
    }
    public function setOwner(Google_Service_Cloudresourcemanager_OrganizationOwner $owner)
    {
        $this->owner = $owner;
    }
    public function getOwner()
    {
        return $this->owner;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Cloudresourcemanager_Organization', 'VendorDuplicator\\Google_Service_Cloudresourcemanager_Organization', \false);
/** @internal */
class Google_Service_Cloudresourcemanager_OrganizationOwner extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $directoryCustomerId;
    public function setDirectoryCustomerId($directoryCustomerId)
    {
        $this->directoryCustomerId = $directoryCustomerId;
    }
    public function getDirectoryCustomerId()
    {
        return $this->directoryCustomerId;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Cloudresourcemanager_OrganizationOwner', 'VendorDuplicator\\Google_Service_Cloudresourcemanager_OrganizationOwner', \false);
/** @internal */
class Google_Service_Cloudresourcemanager_Policy extends Google_Collection
{
    protected $collection_key = 'bindings';
    protected $internal_gapi_mappings = array();
    protected $bindingsType = 'VendorDuplicator\\Google_Service_Cloudresourcemanager_Binding';
    protected $bindingsDataType = 'array';
    public $etag;
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
\class_alias('VendorDuplicator\\Google_Service_Cloudresourcemanager_Policy', 'VendorDuplicator\\Google_Service_Cloudresourcemanager_Policy', \false);
/** @internal */
class Google_Service_Cloudresourcemanager_Project extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $createTime;
    public $labels;
    public $lifecycleState;
    public $name;
    protected $parentType = 'VendorDuplicator\\Google_Service_Cloudresourcemanager_ResourceId';
    protected $parentDataType = '';
    public $projectId;
    public $projectNumber;
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;
    }
    public function getCreateTime()
    {
        return $this->createTime;
    }
    public function setLabels($labels)
    {
        $this->labels = $labels;
    }
    public function getLabels()
    {
        return $this->labels;
    }
    public function setLifecycleState($lifecycleState)
    {
        $this->lifecycleState = $lifecycleState;
    }
    public function getLifecycleState()
    {
        return $this->lifecycleState;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setParent(Google_Service_Cloudresourcemanager_ResourceId $parent)
    {
        $this->parent = $parent;
    }
    public function getParent()
    {
        return $this->parent;
    }
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }
    public function getProjectId()
    {
        return $this->projectId;
    }
    public function setProjectNumber($projectNumber)
    {
        $this->projectNumber = $projectNumber;
    }
    public function getProjectNumber()
    {
        return $this->projectNumber;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Cloudresourcemanager_Project', 'VendorDuplicator\\Google_Service_Cloudresourcemanager_Project', \false);
/** @internal */
class Google_Service_Cloudresourcemanager_ResourceId extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $id;
    public $type;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
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
\class_alias('VendorDuplicator\\Google_Service_Cloudresourcemanager_ResourceId', 'VendorDuplicator\\Google_Service_Cloudresourcemanager_ResourceId', \false);
/** @internal */
class Google_Service_Cloudresourcemanager_SetIamPolicyRequest extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $policyType = 'VendorDuplicator\\Google_Service_Cloudresourcemanager_Policy';
    protected $policyDataType = '';
    public function setPolicy(Google_Service_Cloudresourcemanager_Policy $policy)
    {
        $this->policy = $policy;
    }
    public function getPolicy()
    {
        return $this->policy;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Cloudresourcemanager_SetIamPolicyRequest', 'VendorDuplicator\\Google_Service_Cloudresourcemanager_SetIamPolicyRequest', \false);
/** @internal */
class Google_Service_Cloudresourcemanager_TestIamPermissionsRequest extends Google_Collection
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
\class_alias('VendorDuplicator\\Google_Service_Cloudresourcemanager_TestIamPermissionsRequest', 'VendorDuplicator\\Google_Service_Cloudresourcemanager_TestIamPermissionsRequest', \false);
/** @internal */
class Google_Service_Cloudresourcemanager_TestIamPermissionsResponse extends Google_Collection
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
\class_alias('VendorDuplicator\\Google_Service_Cloudresourcemanager_TestIamPermissionsResponse', 'VendorDuplicator\\Google_Service_Cloudresourcemanager_TestIamPermissionsResponse', \false);
