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
 * Service definition for Urlshortener (v1).
 *
 * <p>
 * Lets you create, inspect, and manage goo.gl short URLs</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/url-shortener/v1/getting_started" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 * @internal
 */
class Google_Service_Urlshortener extends Google_Service
{
    /** Manage your goo.gl short URLs. */
    const URLSHORTENER = "https://www.googleapis.com/auth/urlshortener";
    public $url;
    /**
     * Constructs the internal representation of the Urlshortener service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->rootUrl = 'https://www.googleapis.com/';
        $this->servicePath = 'urlshortener/v1/';
        $this->version = 'v1';
        $this->serviceName = 'urlshortener';
        $this->url = new Google_Service_Urlshortener_Url_Resource($this, $this->serviceName, 'url', array('methods' => array('get' => array('path' => 'url', 'httpMethod' => 'GET', 'parameters' => array('shortUrl' => array('location' => 'query', 'type' => 'string', 'required' => \true), 'projection' => array('location' => 'query', 'type' => 'string'))), 'insert' => array('path' => 'url', 'httpMethod' => 'POST', 'parameters' => array()), 'list' => array('path' => 'url/history', 'httpMethod' => 'GET', 'parameters' => array('projection' => array('location' => 'query', 'type' => 'string'), 'start-token' => array('location' => 'query', 'type' => 'string'))))));
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
 * Service definition for Urlshortener (v1).
 *
 * <p>
 * Lets you create, inspect, and manage goo.gl short URLs</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/url-shortener/v1/getting_started" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Urlshortener', 'VendorDuplicator\\Google_Service_Urlshortener', \false);
/**
 * The "url" collection of methods.
 * Typical usage is:
 *  <code>
 *   $urlshortenerService = new Google_Service_Urlshortener(...);
 *   $url = $urlshortenerService->url;
 *  </code>
 * @internal
 */
class Google_Service_Urlshortener_Url_Resource extends Google_Service_Resource
{
    /**
     * Expands a short URL or gets creation time and analytics. (url.get)
     *
     * @param string $shortUrl The short URL, including the protocol.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string projection Additional information to return.
     * @return Google_Service_Urlshortener_Url
     */
    public function get($shortUrl, $optParams = array())
    {
        $params = array('shortUrl' => $shortUrl);
        $params = \array_merge($params, $optParams);
        return $this->call('get', array($params), "VendorDuplicator\\Google_Service_Urlshortener_Url");
    }
    /**
     * Creates a new short URL. (url.insert)
     *
     * @param Google_Url $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Urlshortener_Url
     */
    public function insert(Google_Service_Urlshortener_Url $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('insert', array($params), "VendorDuplicator\\Google_Service_Urlshortener_Url");
    }
    /**
     * Retrieves a list of URLs shortened by a user. (url.listUrl)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string projection Additional information to return.
     * @opt_param string start-token Token for requesting successive pages of
     * results.
     * @return Google_Service_Urlshortener_UrlHistory
     */
    public function listUrl($optParams = array())
    {
        $params = array();
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Urlshortener_UrlHistory");
    }
}
/**
 * The "url" collection of methods.
 * Typical usage is:
 *  <code>
 *   $urlshortenerService = new Google_Service_Urlshortener(...);
 *   $url = $urlshortenerService->url;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Urlshortener_Url_Resource', 'VendorDuplicator\\Google_Service_Urlshortener_Url_Resource', \false);
/** @internal */
class Google_Service_Urlshortener_AnalyticsSnapshot extends Google_Collection
{
    protected $collection_key = 'referrers';
    protected $internal_gapi_mappings = array();
    protected $browsersType = 'VendorDuplicator\\Google_Service_Urlshortener_StringCount';
    protected $browsersDataType = 'array';
    protected $countriesType = 'VendorDuplicator\\Google_Service_Urlshortener_StringCount';
    protected $countriesDataType = 'array';
    public $longUrlClicks;
    protected $platformsType = 'VendorDuplicator\\Google_Service_Urlshortener_StringCount';
    protected $platformsDataType = 'array';
    protected $referrersType = 'VendorDuplicator\\Google_Service_Urlshortener_StringCount';
    protected $referrersDataType = 'array';
    public $shortUrlClicks;
    public function setBrowsers($browsers)
    {
        $this->browsers = $browsers;
    }
    public function getBrowsers()
    {
        return $this->browsers;
    }
    public function setCountries($countries)
    {
        $this->countries = $countries;
    }
    public function getCountries()
    {
        return $this->countries;
    }
    public function setLongUrlClicks($longUrlClicks)
    {
        $this->longUrlClicks = $longUrlClicks;
    }
    public function getLongUrlClicks()
    {
        return $this->longUrlClicks;
    }
    public function setPlatforms($platforms)
    {
        $this->platforms = $platforms;
    }
    public function getPlatforms()
    {
        return $this->platforms;
    }
    public function setReferrers($referrers)
    {
        $this->referrers = $referrers;
    }
    public function getReferrers()
    {
        return $this->referrers;
    }
    public function setShortUrlClicks($shortUrlClicks)
    {
        $this->shortUrlClicks = $shortUrlClicks;
    }
    public function getShortUrlClicks()
    {
        return $this->shortUrlClicks;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Urlshortener_AnalyticsSnapshot', 'VendorDuplicator\\Google_Service_Urlshortener_AnalyticsSnapshot', \false);
/** @internal */
class Google_Service_Urlshortener_AnalyticsSummary extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $allTimeType = 'VendorDuplicator\\Google_Service_Urlshortener_AnalyticsSnapshot';
    protected $allTimeDataType = '';
    protected $dayType = 'VendorDuplicator\\Google_Service_Urlshortener_AnalyticsSnapshot';
    protected $dayDataType = '';
    protected $monthType = 'VendorDuplicator\\Google_Service_Urlshortener_AnalyticsSnapshot';
    protected $monthDataType = '';
    protected $twoHoursType = 'VendorDuplicator\\Google_Service_Urlshortener_AnalyticsSnapshot';
    protected $twoHoursDataType = '';
    protected $weekType = 'VendorDuplicator\\Google_Service_Urlshortener_AnalyticsSnapshot';
    protected $weekDataType = '';
    public function setAllTime(Google_Service_Urlshortener_AnalyticsSnapshot $allTime)
    {
        $this->allTime = $allTime;
    }
    public function getAllTime()
    {
        return $this->allTime;
    }
    public function setDay(Google_Service_Urlshortener_AnalyticsSnapshot $day)
    {
        $this->day = $day;
    }
    public function getDay()
    {
        return $this->day;
    }
    public function setMonth(Google_Service_Urlshortener_AnalyticsSnapshot $month)
    {
        $this->month = $month;
    }
    public function getMonth()
    {
        return $this->month;
    }
    public function setTwoHours(Google_Service_Urlshortener_AnalyticsSnapshot $twoHours)
    {
        $this->twoHours = $twoHours;
    }
    public function getTwoHours()
    {
        return $this->twoHours;
    }
    public function setWeek(Google_Service_Urlshortener_AnalyticsSnapshot $week)
    {
        $this->week = $week;
    }
    public function getWeek()
    {
        return $this->week;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Urlshortener_AnalyticsSummary', 'VendorDuplicator\\Google_Service_Urlshortener_AnalyticsSummary', \false);
/** @internal */
class Google_Service_Urlshortener_StringCount extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $count;
    public $id;
    public function setCount($count)
    {
        $this->count = $count;
    }
    public function getCount()
    {
        return $this->count;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Urlshortener_StringCount', 'VendorDuplicator\\Google_Service_Urlshortener_StringCount', \false);
/** @internal */
class Google_Service_Urlshortener_Url extends Google_Model
{
    protected $internal_gapi_mappings = array();
    protected $analyticsType = 'VendorDuplicator\\Google_Service_Urlshortener_AnalyticsSummary';
    protected $analyticsDataType = '';
    public $created;
    public $id;
    public $kind;
    public $longUrl;
    public $status;
    public function setAnalytics(Google_Service_Urlshortener_AnalyticsSummary $analytics)
    {
        $this->analytics = $analytics;
    }
    public function getAnalytics()
    {
        return $this->analytics;
    }
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
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setLongUrl($longUrl)
    {
        $this->longUrl = $longUrl;
    }
    public function getLongUrl()
    {
        return $this->longUrl;
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
\class_alias('VendorDuplicator\\Google_Service_Urlshortener_Url', 'VendorDuplicator\\Google_Service_Urlshortener_Url', \false);
/** @internal */
class Google_Service_Urlshortener_UrlHistory extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = array();
    protected $itemsType = 'VendorDuplicator\\Google_Service_Urlshortener_Url';
    protected $itemsDataType = 'array';
    public $itemsPerPage;
    public $kind;
    public $nextPageToken;
    public $totalItems;
    public function setItems($items)
    {
        $this->items = $items;
    }
    public function getItems()
    {
        return $this->items;
    }
    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
    }
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
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
\class_alias('VendorDuplicator\\Google_Service_Urlshortener_UrlHistory', 'VendorDuplicator\\Google_Service_Urlshortener_UrlHistory', \false);
