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
 * Service definition for Translate (v2).
 *
 * <p>
 * Lets you translate text from one language to another</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/translate/v2/using_rest" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 * @internal
 */
class Google_Service_Translate extends Google_Service
{
    public $detections;
    public $languages;
    public $translations;
    /**
     * Constructs the internal representation of the Translate service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->rootUrl = 'https://www.googleapis.com/';
        $this->servicePath = 'language/translate/';
        $this->version = 'v2';
        $this->serviceName = 'translate';
        $this->detections = new Google_Service_Translate_Detections_Resource($this, $this->serviceName, 'detections', array('methods' => array('list' => array('path' => 'v2/detect', 'httpMethod' => 'GET', 'parameters' => array('q' => array('location' => 'query', 'type' => 'string', 'repeated' => \true, 'required' => \true))))));
        $this->languages = new Google_Service_Translate_Languages_Resource($this, $this->serviceName, 'languages', array('methods' => array('list' => array('path' => 'v2/languages', 'httpMethod' => 'GET', 'parameters' => array('target' => array('location' => 'query', 'type' => 'string'))))));
        $this->translations = new Google_Service_Translate_Translations_Resource($this, $this->serviceName, 'translations', array('methods' => array('list' => array('path' => 'v2', 'httpMethod' => 'GET', 'parameters' => array('q' => array('location' => 'query', 'type' => 'string', 'repeated' => \true, 'required' => \true), 'target' => array('location' => 'query', 'type' => 'string', 'required' => \true), 'cid' => array('location' => 'query', 'type' => 'string', 'repeated' => \true), 'format' => array('location' => 'query', 'type' => 'string'), 'source' => array('location' => 'query', 'type' => 'string'))))));
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
 * Service definition for Translate (v2).
 *
 * <p>
 * Lets you translate text from one language to another</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/translate/v2/using_rest" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Translate', 'VendorDuplicator\\Google_Service_Translate', \false);
/**
 * The "detections" collection of methods.
 * Typical usage is:
 *  <code>
 *   $translateService = new Google_Service_Translate(...);
 *   $detections = $translateService->detections;
 *  </code>
 * @internal
 */
class Google_Service_Translate_Detections_Resource extends Google_Service_Resource
{
    /**
     * Detect the language of text. (detections.listDetections)
     *
     * @param string $q The text to detect
     * @param array $optParams Optional parameters.
     * @return Google_Service_Translate_DetectionsListResponse
     */
    public function listDetections($q, $optParams = array())
    {
        $params = array('q' => $q);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Translate_DetectionsListResponse");
    }
}
/**
 * The "detections" collection of methods.
 * Typical usage is:
 *  <code>
 *   $translateService = new Google_Service_Translate(...);
 *   $detections = $translateService->detections;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Translate_Detections_Resource', 'VendorDuplicator\\Google_Service_Translate_Detections_Resource', \false);
/**
 * The "languages" collection of methods.
 * Typical usage is:
 *  <code>
 *   $translateService = new Google_Service_Translate(...);
 *   $languages = $translateService->languages;
 *  </code>
 * @internal
 */
class Google_Service_Translate_Languages_Resource extends Google_Service_Resource
{
    /**
     * List the source/target languages supported by the API
     * (languages.listLanguages)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string target the language and collation in which the localized
     * results should be returned
     * @return Google_Service_Translate_LanguagesListResponse
     */
    public function listLanguages($optParams = array())
    {
        $params = array();
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Translate_LanguagesListResponse");
    }
}
/**
 * The "languages" collection of methods.
 * Typical usage is:
 *  <code>
 *   $translateService = new Google_Service_Translate(...);
 *   $languages = $translateService->languages;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Translate_Languages_Resource', 'VendorDuplicator\\Google_Service_Translate_Languages_Resource', \false);
/**
 * The "translations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $translateService = new Google_Service_Translate(...);
 *   $translations = $translateService->translations;
 *  </code>
 * @internal
 */
class Google_Service_Translate_Translations_Resource extends Google_Service_Resource
{
    /**
     * Returns text translations from one language to another.
     * (translations.listTranslations)
     *
     * @param string $q The text to translate
     * @param string $target The target language into which the text should be
     * translated
     * @param array $optParams Optional parameters.
     *
     * @opt_param string cid The customization id for translate
     * @opt_param string format The format of the text
     * @opt_param string source The source language of the text
     * @return Google_Service_Translate_TranslationsListResponse
     */
    public function listTranslations($q, $target, $optParams = array())
    {
        $params = array('q' => $q, 'target' => $target);
        $params = \array_merge($params, $optParams);
        return $this->call('list', array($params), "VendorDuplicator\\Google_Service_Translate_TranslationsListResponse");
    }
}
/**
 * The "translations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $translateService = new Google_Service_Translate(...);
 *   $translations = $translateService->translations;
 *  </code>
 * @internal
 */
\class_alias('VendorDuplicator\\Google_Service_Translate_Translations_Resource', 'VendorDuplicator\\Google_Service_Translate_Translations_Resource', \false);
/** @internal */
class Google_Service_Translate_DetectionsListResponse extends Google_Collection
{
    protected $collection_key = 'detections';
    protected $internal_gapi_mappings = array();
    protected $detectionsType = 'VendorDuplicator\\Google_Service_Translate_DetectionsResourceItems';
    protected $detectionsDataType = 'array';
    public function setDetections($detections)
    {
        $this->detections = $detections;
    }
    public function getDetections()
    {
        return $this->detections;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Translate_DetectionsListResponse', 'VendorDuplicator\\Google_Service_Translate_DetectionsListResponse', \false);
/** @internal */
class Google_Service_Translate_DetectionsResourceItems extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $confidence;
    public $isReliable;
    public $language;
    public function setConfidence($confidence)
    {
        $this->confidence = $confidence;
    }
    public function getConfidence()
    {
        return $this->confidence;
    }
    public function setIsReliable($isReliable)
    {
        $this->isReliable = $isReliable;
    }
    public function getIsReliable()
    {
        return $this->isReliable;
    }
    public function setLanguage($language)
    {
        $this->language = $language;
    }
    public function getLanguage()
    {
        return $this->language;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Translate_DetectionsResourceItems', 'VendorDuplicator\\Google_Service_Translate_DetectionsResourceItems', \false);
/** @internal */
class Google_Service_Translate_LanguagesListResponse extends Google_Collection
{
    protected $collection_key = 'languages';
    protected $internal_gapi_mappings = array();
    protected $languagesType = 'VendorDuplicator\\Google_Service_Translate_LanguagesResource';
    protected $languagesDataType = 'array';
    public function setLanguages($languages)
    {
        $this->languages = $languages;
    }
    public function getLanguages()
    {
        return $this->languages;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Translate_LanguagesListResponse', 'VendorDuplicator\\Google_Service_Translate_LanguagesListResponse', \false);
/** @internal */
class Google_Service_Translate_LanguagesResource extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $language;
    public $name;
    public function setLanguage($language)
    {
        $this->language = $language;
    }
    public function getLanguage()
    {
        return $this->language;
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
\class_alias('VendorDuplicator\\Google_Service_Translate_LanguagesResource', 'VendorDuplicator\\Google_Service_Translate_LanguagesResource', \false);
/** @internal */
class Google_Service_Translate_TranslationsListResponse extends Google_Collection
{
    protected $collection_key = 'translations';
    protected $internal_gapi_mappings = array();
    protected $translationsType = 'VendorDuplicator\\Google_Service_Translate_TranslationsResource';
    protected $translationsDataType = 'array';
    public function setTranslations($translations)
    {
        $this->translations = $translations;
    }
    public function getTranslations()
    {
        return $this->translations;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Translate_TranslationsListResponse', 'VendorDuplicator\\Google_Service_Translate_TranslationsListResponse', \false);
/** @internal */
class Google_Service_Translate_TranslationsResource extends Google_Model
{
    protected $internal_gapi_mappings = array();
    public $detectedSourceLanguage;
    public $translatedText;
    public function setDetectedSourceLanguage($detectedSourceLanguage)
    {
        $this->detectedSourceLanguage = $detectedSourceLanguage;
    }
    public function getDetectedSourceLanguage()
    {
        return $this->detectedSourceLanguage;
    }
    public function setTranslatedText($translatedText)
    {
        $this->translatedText = $translatedText;
    }
    public function getTranslatedText()
    {
        return $this->translatedText;
    }
}
/** @internal */
\class_alias('VendorDuplicator\\Google_Service_Translate_TranslationsResource', 'VendorDuplicator\\Google_Service_Translate_TranslationsResource', \false);
