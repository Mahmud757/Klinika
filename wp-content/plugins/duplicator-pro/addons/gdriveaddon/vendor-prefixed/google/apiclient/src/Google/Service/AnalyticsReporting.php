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
 * Service definition for AnalyticsReporting (v4).
 *
 * <p>
 * Accesses Analytics report data.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/analytics/devguides/reporting/core/v4/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 * @internal
 */
class Google_Service_AnalyticsReporting extends Google_Service
{
    /** View and manage your Google Analytics data. */
    const ANALYTICS = "https://www.googleapis.com/auth/analytics";
    /** View your Google Analytics data. */
    const ANALYTICS_READONLY = "https://www.googleapis.com/auth/analytics.readonly";
    public $reports;
    /**
     * Constructs the internal representation of the AnalyticsReporting service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->rootUrl = 'https://analyticsreporting.googleapis.com/';
        $this->servicePath = '';
        $this->version = 'v4';
        $this->serviceName = 'analyticsreporting';
        $this->reports = new Google_Service_AnalyticsReporting_Reports_Resource($this, $this->serviceName, 'reports', array('methods' => array('batchGet' => array('path' => 'v4/reports:batchGet', 'httpMethod' => 'POST', 'parameters' => array()))));
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
 * Service definition for AnalyticsReporting (v4).
 *
 * <p>
 * Accesses Analytics report data.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/analytics/devguides/reporting/core/v4/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting', 'VendorDuplicator\\Google_Service_AnalyticsReporting', \false);
/**
 * The "reports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsreportingService = new Google_Service_AnalyticsReporting(...);
 *   $reports = $analyticsreportingService->reports;
 *  </code>
 * @internal
 */
class Google_Service_AnalyticsReporting_Reports_Resource extends Google_Service_Resource
{
    /**
     * Returns the Analytics data. (reports.batchGet)
     *
     * @param Google_GetReportsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_AnalyticsReporting_GetReportsResponse
     */
    public function batchGet(Google_Service_AnalyticsReporting_GetReportsRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('batchGet', array($params), "VendorDuplicator\\Google_Service_AnalyticsReporting_GetReportsResponse");
    }
}
/**
 * The "reports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsreportingService = new Google_Service_AnalyticsReporting(...);
 *   $reports = $analyticsreportingService->reports;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_Reports_Resource', 'VendorDuplicator\\Google_Service_AnalyticsReporting_Reports_Resource', \false);
/** @internal */
class Google_Service_AnalyticsReporting_Cohort extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $dateRangeType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_DateRange';
    protected $dateRangeDataType = '';
    public $name;
    public $type;
    public function setDateRange(Google_Service_AnalyticsReporting_DateRange $dateRange)
    {
        $this->dateRange = $dateRange;
    }
    public function getDateRange()
    {
        return $this->dateRange;
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
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_Cohort', 'VendorDuplicator\\Google_Service_AnalyticsReporting_Cohort', \false);
/** @internal */
class Google_Service_AnalyticsReporting_CohortGroup extends Google_Collection
{
    protected $collection_key = 'cohorts';
    protected $internal_gapi_mappings = array();
    protected $cohortsType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_Cohort';
    protected $cohortsDataType = 'array';
    public $lifetimeValue;
    public function setCohorts($cohorts)
    {
        $this->cohorts = $cohorts;
    }
    public function getCohorts()
    {
        return $this->cohorts;
    }
    public function setLifetimeValue($lifetimeValue)
    {
        $this->lifetimeValue = $lifetimeValue;
    }
    public function getLifetimeValue()
    {
        return $this->lifetimeValue;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_CohortGroup', 'VendorDuplicator\\Google_Service_AnalyticsReporting_CohortGroup', \false);
/** @internal */
class Google_Service_AnalyticsReporting_ColumnHeader extends Google_Collection
{
    protected $collection_key = 'dimensions';
    protected $internal_gapi_mappings = array();
    public $dimensions;
    protected $metricHeaderType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_MetricHeader';
    protected $metricHeaderDataType = '';
    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;
    }
    public function getDimensions()
    {
        return $this->dimensions;
    }
    public function setMetricHeader(Google_Service_AnalyticsReporting_MetricHeader $metricHeader)
    {
        $this->metricHeader = $metricHeader;
    }
    public function getMetricHeader()
    {
        return $this->metricHeader;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_ColumnHeader', 'VendorDuplicator\\Google_Service_AnalyticsReporting_ColumnHeader', \false);
/** @internal */
class Google_Service_AnalyticsReporting_DateRange extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $endDate;
    public $startDate;
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }
    public function getEndDate()
    {
        return $this->endDate;
    }
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }
    public function getStartDate()
    {
        return $this->startDate;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_DateRange', 'VendorDuplicator\\Google_Service_AnalyticsReporting_DateRange', \false);
/** @internal */
class Google_Service_AnalyticsReporting_DateRangeValues extends Google_Collection
{
    protected $collection_key = 'values';
    protected $internal_gapi_mappings = array();
    protected $pivotValueRegionsType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_PivotValueRegion';
    protected $pivotValueRegionsDataType = 'array';
    public $values;
    public function setPivotValueRegions($pivotValueRegions)
    {
        $this->pivotValueRegions = $pivotValueRegions;
    }
    public function getPivotValueRegions()
    {
        return $this->pivotValueRegions;
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
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_DateRangeValues', 'VendorDuplicator\\Google_Service_AnalyticsReporting_DateRangeValues', \false);
/** @internal */
class Google_Service_AnalyticsReporting_Dimension extends Google_Collection
{
    protected $collection_key = 'histogramBuckets';
    protected $internal_gapi_mappings = array();
    public $histogramBuckets;
    public $name;
    public function setHistogramBuckets($histogramBuckets)
    {
        $this->histogramBuckets = $histogramBuckets;
    }
    public function getHistogramBuckets()
    {
        return $this->histogramBuckets;
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
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_Dimension', 'VendorDuplicator\\Google_Service_AnalyticsReporting_Dimension', \false);
/** @internal */
class Google_Service_AnalyticsReporting_DimensionFilter extends Google_Collection
{
    protected $collection_key = 'expressions';
    protected $internal_gapi_mappings = array();
    public $caseSensitive;
    public $dimensionName;
    public $expressions;
    public $not;
    public $operator;
    public function setCaseSensitive($caseSensitive)
    {
        $this->caseSensitive = $caseSensitive;
    }
    public function getCaseSensitive()
    {
        return $this->caseSensitive;
    }
    public function setDimensionName($dimensionName)
    {
        $this->dimensionName = $dimensionName;
    }
    public function getDimensionName()
    {
        return $this->dimensionName;
    }
    public function setExpressions($expressions)
    {
        $this->expressions = $expressions;
    }
    public function getExpressions()
    {
        return $this->expressions;
    }
    public function setNot($not)
    {
        $this->not = $not;
    }
    public function getNot()
    {
        return $this->not;
    }
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }
    public function getOperator()
    {
        return $this->operator;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_DimensionFilter', 'VendorDuplicator\\Google_Service_AnalyticsReporting_DimensionFilter', \false);
/** @internal */
class Google_Service_AnalyticsReporting_DimensionFilterClause extends Google_Collection
{
    protected $collection_key = 'filters';
    protected $internal_gapi_mappings = array();
    protected $filtersType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_DimensionFilter';
    protected $filtersDataType = 'array';
    public $operator;
    public function setFilters($filters)
    {
        $this->filters = $filters;
    }
    public function getFilters()
    {
        return $this->filters;
    }
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }
    public function getOperator()
    {
        return $this->operator;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_DimensionFilterClause', 'VendorDuplicator\\Google_Service_AnalyticsReporting_DimensionFilterClause', \false);
/** @internal */
class Google_Service_AnalyticsReporting_DynamicSegment extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $name;
    protected $sessionSegmentType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_SegmentDefinition';
    protected $sessionSegmentDataType = '';
    protected $userSegmentType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_SegmentDefinition';
    protected $userSegmentDataType = '';
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setSessionSegment(Google_Service_AnalyticsReporting_SegmentDefinition $sessionSegment)
    {
        $this->sessionSegment = $sessionSegment;
    }
    public function getSessionSegment()
    {
        return $this->sessionSegment;
    }
    public function setUserSegment(Google_Service_AnalyticsReporting_SegmentDefinition $userSegment)
    {
        $this->userSegment = $userSegment;
    }
    public function getUserSegment()
    {
        return $this->userSegment;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_DynamicSegment', 'VendorDuplicator\\Google_Service_AnalyticsReporting_DynamicSegment', \false);
/** @internal */
class Google_Service_AnalyticsReporting_GetReportsRequest extends Google_Collection
{
    protected $collection_key = 'reportRequests';
    protected $internal_gapi_mappings = array();
    protected $reportRequestsType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_ReportRequest';
    protected $reportRequestsDataType = 'array';
    public function setReportRequests($reportRequests)
    {
        $this->reportRequests = $reportRequests;
    }
    public function getReportRequests()
    {
        return $this->reportRequests;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_GetReportsRequest', 'VendorDuplicator\\Google_Service_AnalyticsReporting_GetReportsRequest', \false);
/** @internal */
class Google_Service_AnalyticsReporting_GetReportsResponse extends Google_Collection
{
    protected $collection_key = 'reports';
    protected $internal_gapi_mappings = array();
    protected $reportsType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_Report';
    protected $reportsDataType = 'array';
    public function setReports($reports)
    {
        $this->reports = $reports;
    }
    public function getReports()
    {
        return $this->reports;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_GetReportsResponse', 'VendorDuplicator\\Google_Service_AnalyticsReporting_GetReportsResponse', \false);
/** @internal */
class Google_Service_AnalyticsReporting_Metric extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $alias;
    public $expression;
    public $formattingType;
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }
    public function getAlias()
    {
        return $this->alias;
    }
    public function setExpression($expression)
    {
        $this->expression = $expression;
    }
    public function getExpression()
    {
        return $this->expression;
    }
    public function setFormattingType($formattingType)
    {
        $this->formattingType = $formattingType;
    }
    public function getFormattingType()
    {
        return $this->formattingType;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_Metric', 'VendorDuplicator\\Google_Service_AnalyticsReporting_Metric', \false);
/** @internal */
class Google_Service_AnalyticsReporting_MetricFilter extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $comparisonValue;
    public $metricName;
    public $not;
    public $operator;
    public function setComparisonValue($comparisonValue)
    {
        $this->comparisonValue = $comparisonValue;
    }
    public function getComparisonValue()
    {
        return $this->comparisonValue;
    }
    public function setMetricName($metricName)
    {
        $this->metricName = $metricName;
    }
    public function getMetricName()
    {
        return $this->metricName;
    }
    public function setNot($not)
    {
        $this->not = $not;
    }
    public function getNot()
    {
        return $this->not;
    }
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }
    public function getOperator()
    {
        return $this->operator;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_MetricFilter', 'VendorDuplicator\\Google_Service_AnalyticsReporting_MetricFilter', \false);
/** @internal */
class Google_Service_AnalyticsReporting_MetricFilterClause extends Google_Collection
{
    protected $collection_key = 'filters';
    protected $internal_gapi_mappings = array();
    protected $filtersType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_MetricFilter';
    protected $filtersDataType = 'array';
    public $operator;
    public function setFilters($filters)
    {
        $this->filters = $filters;
    }
    public function getFilters()
    {
        return $this->filters;
    }
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }
    public function getOperator()
    {
        return $this->operator;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_MetricFilterClause', 'VendorDuplicator\\Google_Service_AnalyticsReporting_MetricFilterClause', \false);
/** @internal */
class Google_Service_AnalyticsReporting_MetricHeader extends Google_Collection
{
    protected $collection_key = 'pivotHeaders';
    protected $internal_gapi_mappings = array();
    protected $metricHeaderEntriesType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_MetricHeaderEntry';
    protected $metricHeaderEntriesDataType = 'array';
    protected $pivotHeadersType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_PivotHeader';
    protected $pivotHeadersDataType = 'array';
    public function setMetricHeaderEntries($metricHeaderEntries)
    {
        $this->metricHeaderEntries = $metricHeaderEntries;
    }
    public function getMetricHeaderEntries()
    {
        return $this->metricHeaderEntries;
    }
    public function setPivotHeaders($pivotHeaders)
    {
        $this->pivotHeaders = $pivotHeaders;
    }
    public function getPivotHeaders()
    {
        return $this->pivotHeaders;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_MetricHeader', 'VendorDuplicator\\Google_Service_AnalyticsReporting_MetricHeader', \false);
/** @internal */
class Google_Service_AnalyticsReporting_MetricHeaderEntry extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $name;
    public $type;
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
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_MetricHeaderEntry', 'VendorDuplicator\\Google_Service_AnalyticsReporting_MetricHeaderEntry', \false);
/** @internal */
class Google_Service_AnalyticsReporting_OrFiltersForSegment extends Google_Collection
{
    protected $collection_key = 'segmentFilterClauses';
    protected $internal_gapi_mappings = array();
    protected $segmentFilterClausesType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_SegmentFilterClause';
    protected $segmentFilterClausesDataType = 'array';
    public function setSegmentFilterClauses($segmentFilterClauses)
    {
        $this->segmentFilterClauses = $segmentFilterClauses;
    }
    public function getSegmentFilterClauses()
    {
        return $this->segmentFilterClauses;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_OrFiltersForSegment', 'VendorDuplicator\\Google_Service_AnalyticsReporting_OrFiltersForSegment', \false);
/** @internal */
class Google_Service_AnalyticsReporting_OrderBy extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $fieldName;
    public $orderType;
    public $sortOrder;
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;
    }
    public function getFieldName()
    {
        return $this->fieldName;
    }
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
    }
    public function getOrderType()
    {
        return $this->orderType;
    }
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }
    public function getSortOrder()
    {
        return $this->sortOrder;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_OrderBy', 'VendorDuplicator\\Google_Service_AnalyticsReporting_OrderBy', \false);
/** @internal */
class Google_Service_AnalyticsReporting_Pivot extends Google_Collection
{
    protected $collection_key = 'metrics';
    protected $internal_gapi_mappings = array();
    protected $dimensionFilterClausesType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_DimensionFilterClause';
    protected $dimensionFilterClausesDataType = 'array';
    protected $dimensionsType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_Dimension';
    protected $dimensionsDataType = 'array';
    public $maxGroupCount;
    protected $metricsType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_Metric';
    protected $metricsDataType = 'array';
    public $startGroup;
    public function setDimensionFilterClauses($dimensionFilterClauses)
    {
        $this->dimensionFilterClauses = $dimensionFilterClauses;
    }
    public function getDimensionFilterClauses()
    {
        return $this->dimensionFilterClauses;
    }
    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;
    }
    public function getDimensions()
    {
        return $this->dimensions;
    }
    public function setMaxGroupCount($maxGroupCount)
    {
        $this->maxGroupCount = $maxGroupCount;
    }
    public function getMaxGroupCount()
    {
        return $this->maxGroupCount;
    }
    public function setMetrics($metrics)
    {
        $this->metrics = $metrics;
    }
    public function getMetrics()
    {
        return $this->metrics;
    }
    public function setStartGroup($startGroup)
    {
        $this->startGroup = $startGroup;
    }
    public function getStartGroup()
    {
        return $this->startGroup;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_Pivot', 'VendorDuplicator\\Google_Service_AnalyticsReporting_Pivot', \false);
/** @internal */
class Google_Service_AnalyticsReporting_PivotHeader extends Google_Collection
{
    protected $collection_key = 'pivotHeaderEntries';
    protected $internal_gapi_mappings = array();
    protected $pivotHeaderEntriesType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_PivotHeaderEntry';
    protected $pivotHeaderEntriesDataType = 'array';
    public $totalPivotGroupsCount;
    public function setPivotHeaderEntries($pivotHeaderEntries)
    {
        $this->pivotHeaderEntries = $pivotHeaderEntries;
    }
    public function getPivotHeaderEntries()
    {
        return $this->pivotHeaderEntries;
    }
    public function setTotalPivotGroupsCount($totalPivotGroupsCount)
    {
        $this->totalPivotGroupsCount = $totalPivotGroupsCount;
    }
    public function getTotalPivotGroupsCount()
    {
        return $this->totalPivotGroupsCount;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_PivotHeader', 'VendorDuplicator\\Google_Service_AnalyticsReporting_PivotHeader', \false);
/** @internal */
class Google_Service_AnalyticsReporting_PivotHeaderEntry extends Google_Collection
{
    protected $collection_key = 'dimensionValues';
    protected $internal_gapi_mappings = array();
    public $dimensionNames;
    public $dimensionValues;
    protected $metricType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_MetricHeaderEntry';
    protected $metricDataType = '';
    public function setDimensionNames($dimensionNames)
    {
        $this->dimensionNames = $dimensionNames;
    }
    public function getDimensionNames()
    {
        return $this->dimensionNames;
    }
    public function setDimensionValues($dimensionValues)
    {
        $this->dimensionValues = $dimensionValues;
    }
    public function getDimensionValues()
    {
        return $this->dimensionValues;
    }
    public function setMetric(Google_Service_AnalyticsReporting_MetricHeaderEntry $metric)
    {
        $this->metric = $metric;
    }
    public function getMetric()
    {
        return $this->metric;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_PivotHeaderEntry', 'VendorDuplicator\\Google_Service_AnalyticsReporting_PivotHeaderEntry', \false);
/** @internal */
class Google_Service_AnalyticsReporting_PivotValueRegion extends Google_Collection
{
    protected $collection_key = 'values';
    protected $internal_gapi_mappings = array();
    public $values;
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
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_PivotValueRegion', 'VendorDuplicator\\Google_Service_AnalyticsReporting_PivotValueRegion', \false);
/** @internal */
class Google_Service_AnalyticsReporting_Report extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $columnHeaderType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_ColumnHeader';
    protected $columnHeaderDataType = '';
    protected $dataType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_ReportData';
    protected $dataDataType = '';
    public $nextPageToken;
    public function setColumnHeader(Google_Service_AnalyticsReporting_ColumnHeader $columnHeader)
    {
        $this->columnHeader = $columnHeader;
    }
    public function getColumnHeader()
    {
        return $this->columnHeader;
    }
    public function setData(Google_Service_AnalyticsReporting_ReportData $data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
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
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_Report', 'VendorDuplicator\\Google_Service_AnalyticsReporting_Report', \false);
/** @internal */
class Google_Service_AnalyticsReporting_ReportData extends Google_Collection
{
    protected $collection_key = 'totals';
    protected $internal_gapi_mappings = array();
    public $isDataGolden;
    protected $maximumsType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_DateRangeValues';
    protected $maximumsDataType = 'array';
    protected $minimumsType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_DateRangeValues';
    protected $minimumsDataType = 'array';
    public $rowCount;
    protected $rowsType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_ReportRow';
    protected $rowsDataType = 'array';
    public $samplesReadCounts;
    public $samplingSpaceSizes;
    protected $totalsType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_DateRangeValues';
    protected $totalsDataType = 'array';
    public function setIsDataGolden($isDataGolden)
    {
        $this->isDataGolden = $isDataGolden;
    }
    public function getIsDataGolden()
    {
        return $this->isDataGolden;
    }
    public function setMaximums($maximums)
    {
        $this->maximums = $maximums;
    }
    public function getMaximums()
    {
        return $this->maximums;
    }
    public function setMinimums($minimums)
    {
        $this->minimums = $minimums;
    }
    public function getMinimums()
    {
        return $this->minimums;
    }
    public function setRowCount($rowCount)
    {
        $this->rowCount = $rowCount;
    }
    public function getRowCount()
    {
        return $this->rowCount;
    }
    public function setRows($rows)
    {
        $this->rows = $rows;
    }
    public function getRows()
    {
        return $this->rows;
    }
    public function setSamplesReadCounts($samplesReadCounts)
    {
        $this->samplesReadCounts = $samplesReadCounts;
    }
    public function getSamplesReadCounts()
    {
        return $this->samplesReadCounts;
    }
    public function setSamplingSpaceSizes($samplingSpaceSizes)
    {
        $this->samplingSpaceSizes = $samplingSpaceSizes;
    }
    public function getSamplingSpaceSizes()
    {
        return $this->samplingSpaceSizes;
    }
    public function setTotals($totals)
    {
        $this->totals = $totals;
    }
    public function getTotals()
    {
        return $this->totals;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_ReportData', 'VendorDuplicator\\Google_Service_AnalyticsReporting_ReportData', \false);
/** @internal */
class Google_Service_AnalyticsReporting_ReportRequest extends Google_Collection
{
    protected $collection_key = 'segments';
    protected $internal_gapi_mappings = array();
    protected $cohortGroupType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_CohortGroup';
    protected $cohortGroupDataType = '';
    protected $dateRangesType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_DateRange';
    protected $dateRangesDataType = 'array';
    protected $dimensionFilterClausesType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_DimensionFilterClause';
    protected $dimensionFilterClausesDataType = 'array';
    protected $dimensionsType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_Dimension';
    protected $dimensionsDataType = 'array';
    public $filtersExpression;
    public $hideTotals;
    public $hideValueRanges;
    public $includeEmptyRows;
    protected $metricFilterClausesType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_MetricFilterClause';
    protected $metricFilterClausesDataType = 'array';
    protected $metricsType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_Metric';
    protected $metricsDataType = 'array';
    protected $orderBysType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_OrderBy';
    protected $orderBysDataType = 'array';
    public $pageSize;
    public $pageToken;
    protected $pivotsType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_Pivot';
    protected $pivotsDataType = 'array';
    public $samplingLevel;
    protected $segmentsType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_Segment';
    protected $segmentsDataType = 'array';
    public $viewId;
    public function setCohortGroup(Google_Service_AnalyticsReporting_CohortGroup $cohortGroup)
    {
        $this->cohortGroup = $cohortGroup;
    }
    public function getCohortGroup()
    {
        return $this->cohortGroup;
    }
    public function setDateRanges($dateRanges)
    {
        $this->dateRanges = $dateRanges;
    }
    public function getDateRanges()
    {
        return $this->dateRanges;
    }
    public function setDimensionFilterClauses($dimensionFilterClauses)
    {
        $this->dimensionFilterClauses = $dimensionFilterClauses;
    }
    public function getDimensionFilterClauses()
    {
        return $this->dimensionFilterClauses;
    }
    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;
    }
    public function getDimensions()
    {
        return $this->dimensions;
    }
    public function setFiltersExpression($filtersExpression)
    {
        $this->filtersExpression = $filtersExpression;
    }
    public function getFiltersExpression()
    {
        return $this->filtersExpression;
    }
    public function setHideTotals($hideTotals)
    {
        $this->hideTotals = $hideTotals;
    }
    public function getHideTotals()
    {
        return $this->hideTotals;
    }
    public function setHideValueRanges($hideValueRanges)
    {
        $this->hideValueRanges = $hideValueRanges;
    }
    public function getHideValueRanges()
    {
        return $this->hideValueRanges;
    }
    public function setIncludeEmptyRows($includeEmptyRows)
    {
        $this->includeEmptyRows = $includeEmptyRows;
    }
    public function getIncludeEmptyRows()
    {
        return $this->includeEmptyRows;
    }
    public function setMetricFilterClauses($metricFilterClauses)
    {
        $this->metricFilterClauses = $metricFilterClauses;
    }
    public function getMetricFilterClauses()
    {
        return $this->metricFilterClauses;
    }
    public function setMetrics($metrics)
    {
        $this->metrics = $metrics;
    }
    public function getMetrics()
    {
        return $this->metrics;
    }
    public function setOrderBys($orderBys)
    {
        $this->orderBys = $orderBys;
    }
    public function getOrderBys()
    {
        return $this->orderBys;
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
    public function setPivots($pivots)
    {
        $this->pivots = $pivots;
    }
    public function getPivots()
    {
        return $this->pivots;
    }
    public function setSamplingLevel($samplingLevel)
    {
        $this->samplingLevel = $samplingLevel;
    }
    public function getSamplingLevel()
    {
        return $this->samplingLevel;
    }
    public function setSegments($segments)
    {
        $this->segments = $segments;
    }
    public function getSegments()
    {
        return $this->segments;
    }
    public function setViewId($viewId)
    {
        $this->viewId = $viewId;
    }
    public function getViewId()
    {
        return $this->viewId;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_ReportRequest', 'VendorDuplicator\\Google_Service_AnalyticsReporting_ReportRequest', \false);
/** @internal */
class Google_Service_AnalyticsReporting_ReportRow extends Google_Collection
{
    protected $collection_key = 'metrics';
    protected $internal_gapi_mappings = array();
    public $dimensions;
    protected $metricsType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_DateRangeValues';
    protected $metricsDataType = 'array';
    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;
    }
    public function getDimensions()
    {
        return $this->dimensions;
    }
    public function setMetrics($metrics)
    {
        $this->metrics = $metrics;
    }
    public function getMetrics()
    {
        return $this->metrics;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_ReportRow', 'VendorDuplicator\\Google_Service_AnalyticsReporting_ReportRow', \false);
/** @internal */
class Google_Service_AnalyticsReporting_Segment extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $dynamicSegmentType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_DynamicSegment';
    protected $dynamicSegmentDataType = '';
    public $segmentId;
    public function setDynamicSegment(Google_Service_AnalyticsReporting_DynamicSegment $dynamicSegment)
    {
        $this->dynamicSegment = $dynamicSegment;
    }
    public function getDynamicSegment()
    {
        return $this->dynamicSegment;
    }
    public function setSegmentId($segmentId)
    {
        $this->segmentId = $segmentId;
    }
    public function getSegmentId()
    {
        return $this->segmentId;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_Segment', 'VendorDuplicator\\Google_Service_AnalyticsReporting_Segment', \false);
/** @internal */
class Google_Service_AnalyticsReporting_SegmentDefinition extends Google_Collection
{
    protected $collection_key = 'segmentFilters';
    protected $internal_gapi_mappings = array();
    protected $segmentFiltersType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_SegmentFilter';
    protected $segmentFiltersDataType = 'array';
    public function setSegmentFilters($segmentFilters)
    {
        $this->segmentFilters = $segmentFilters;
    }
    public function getSegmentFilters()
    {
        return $this->segmentFilters;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_SegmentDefinition', 'VendorDuplicator\\Google_Service_AnalyticsReporting_SegmentDefinition', \false);
/** @internal */
class Google_Service_AnalyticsReporting_SegmentDimensionFilter extends Google_Collection
{
    protected $collection_key = 'expressions';
    protected $internal_gapi_mappings = array();
    public $caseSensitive;
    public $dimensionName;
    public $expressions;
    public $maxComparisonValue;
    public $minComparisonValue;
    public $operator;
    public function setCaseSensitive($caseSensitive)
    {
        $this->caseSensitive = $caseSensitive;
    }
    public function getCaseSensitive()
    {
        return $this->caseSensitive;
    }
    public function setDimensionName($dimensionName)
    {
        $this->dimensionName = $dimensionName;
    }
    public function getDimensionName()
    {
        return $this->dimensionName;
    }
    public function setExpressions($expressions)
    {
        $this->expressions = $expressions;
    }
    public function getExpressions()
    {
        return $this->expressions;
    }
    public function setMaxComparisonValue($maxComparisonValue)
    {
        $this->maxComparisonValue = $maxComparisonValue;
    }
    public function getMaxComparisonValue()
    {
        return $this->maxComparisonValue;
    }
    public function setMinComparisonValue($minComparisonValue)
    {
        $this->minComparisonValue = $minComparisonValue;
    }
    public function getMinComparisonValue()
    {
        return $this->minComparisonValue;
    }
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }
    public function getOperator()
    {
        return $this->operator;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_SegmentDimensionFilter', 'VendorDuplicator\\Google_Service_AnalyticsReporting_SegmentDimensionFilter', \false);
/** @internal */
class Google_Service_AnalyticsReporting_SegmentFilter extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $not;
    protected $sequenceSegmentType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_SequenceSegment';
    protected $sequenceSegmentDataType = '';
    protected $simpleSegmentType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_SimpleSegment';
    protected $simpleSegmentDataType = '';
    public function setNot($not)
    {
        $this->not = $not;
    }
    public function getNot()
    {
        return $this->not;
    }
    public function setSequenceSegment(Google_Service_AnalyticsReporting_SequenceSegment $sequenceSegment)
    {
        $this->sequenceSegment = $sequenceSegment;
    }
    public function getSequenceSegment()
    {
        return $this->sequenceSegment;
    }
    public function setSimpleSegment(Google_Service_AnalyticsReporting_SimpleSegment $simpleSegment)
    {
        $this->simpleSegment = $simpleSegment;
    }
    public function getSimpleSegment()
    {
        return $this->simpleSegment;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_SegmentFilter', 'VendorDuplicator\\Google_Service_AnalyticsReporting_SegmentFilter', \false);
/** @internal */
class Google_Service_AnalyticsReporting_SegmentFilterClause extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $dimensionFilterType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_SegmentDimensionFilter';
    protected $dimensionFilterDataType = '';
    protected $metricFilterType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_SegmentMetricFilter';
    protected $metricFilterDataType = '';
    public $not;
    public function setDimensionFilter(Google_Service_AnalyticsReporting_SegmentDimensionFilter $dimensionFilter)
    {
        $this->dimensionFilter = $dimensionFilter;
    }
    public function getDimensionFilter()
    {
        return $this->dimensionFilter;
    }
    public function setMetricFilter(Google_Service_AnalyticsReporting_SegmentMetricFilter $metricFilter)
    {
        $this->metricFilter = $metricFilter;
    }
    public function getMetricFilter()
    {
        return $this->metricFilter;
    }
    public function setNot($not)
    {
        $this->not = $not;
    }
    public function getNot()
    {
        return $this->not;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_SegmentFilterClause', 'VendorDuplicator\\Google_Service_AnalyticsReporting_SegmentFilterClause', \false);
/** @internal */
class Google_Service_AnalyticsReporting_SegmentMetricFilter extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $comparisonValue;
    public $maxComparisonValue;
    public $metricName;
    public $operator;
    public $scope;
    public function setComparisonValue($comparisonValue)
    {
        $this->comparisonValue = $comparisonValue;
    }
    public function getComparisonValue()
    {
        return $this->comparisonValue;
    }
    public function setMaxComparisonValue($maxComparisonValue)
    {
        $this->maxComparisonValue = $maxComparisonValue;
    }
    public function getMaxComparisonValue()
    {
        return $this->maxComparisonValue;
    }
    public function setMetricName($metricName)
    {
        $this->metricName = $metricName;
    }
    public function getMetricName()
    {
        return $this->metricName;
    }
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }
    public function getOperator()
    {
        return $this->operator;
    }
    public function setScope($scope)
    {
        $this->scope = $scope;
    }
    public function getScope()
    {
        return $this->scope;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_SegmentMetricFilter', 'VendorDuplicator\\Google_Service_AnalyticsReporting_SegmentMetricFilter', \false);
/** @internal */
class Google_Service_AnalyticsReporting_SegmentSequenceStep extends Google_Collection
{
    protected $collection_key = 'orFiltersForSegment';
    protected $internal_gapi_mappings = array();
    public $matchType;
    protected $orFiltersForSegmentType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_OrFiltersForSegment';
    protected $orFiltersForSegmentDataType = 'array';
    public function setMatchType($matchType)
    {
        $this->matchType = $matchType;
    }
    public function getMatchType()
    {
        return $this->matchType;
    }
    public function setOrFiltersForSegment($orFiltersForSegment)
    {
        $this->orFiltersForSegment = $orFiltersForSegment;
    }
    public function getOrFiltersForSegment()
    {
        return $this->orFiltersForSegment;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_SegmentSequenceStep', 'VendorDuplicator\\Google_Service_AnalyticsReporting_SegmentSequenceStep', \false);
/** @internal */
class Google_Service_AnalyticsReporting_SequenceSegment extends Google_Collection
{
    protected $collection_key = 'segmentSequenceSteps';
    protected $internal_gapi_mappings = array();
    public $firstStepShouldMatchFirstHit;
    protected $segmentSequenceStepsType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_SegmentSequenceStep';
    protected $segmentSequenceStepsDataType = 'array';
    public function setFirstStepShouldMatchFirstHit($firstStepShouldMatchFirstHit)
    {
        $this->firstStepShouldMatchFirstHit = $firstStepShouldMatchFirstHit;
    }
    public function getFirstStepShouldMatchFirstHit()
    {
        return $this->firstStepShouldMatchFirstHit;
    }
    public function setSegmentSequenceSteps($segmentSequenceSteps)
    {
        $this->segmentSequenceSteps = $segmentSequenceSteps;
    }
    public function getSegmentSequenceSteps()
    {
        return $this->segmentSequenceSteps;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_SequenceSegment', 'VendorDuplicator\\Google_Service_AnalyticsReporting_SequenceSegment', \false);
/** @internal */
class Google_Service_AnalyticsReporting_SimpleSegment extends Google_Collection
{
    protected $collection_key = 'orFiltersForSegment';
    protected $internal_gapi_mappings = array();
    protected $orFiltersForSegmentType = 'VendorDuplicator\\Google_Service_AnalyticsReporting_OrFiltersForSegment';
    protected $orFiltersForSegmentDataType = 'array';
    public function setOrFiltersForSegment($orFiltersForSegment)
    {
        $this->orFiltersForSegment = $orFiltersForSegment;
    }
    public function getOrFiltersForSegment()
    {
        return $this->orFiltersForSegment;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_AnalyticsReporting_SimpleSegment', 'VendorDuplicator\\Google_Service_AnalyticsReporting_SimpleSegment', \false);
