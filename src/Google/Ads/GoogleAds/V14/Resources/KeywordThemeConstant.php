<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/keyword_theme_constant.proto

namespace Google\Ads\GoogleAds\V14\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Smart Campaign keyword theme constant.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.KeywordThemeConstant</code>
 */
class KeywordThemeConstant extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the keyword theme constant.
     * Keyword theme constant resource names have the form:
     * `keywordThemeConstants/{keyword_theme_id}~{sub_keyword_theme_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ISO-3166 Alpha-2 country code of the constant, eg. "US".
     * To display and query matching purpose, the keyword theme needs to be
     * localized.
     *
     * Generated from protobuf field <code>optional string country_code = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $country_code = null;
    /**
     * Output only. The ISO-639-1 language code with 2 letters of the constant,
     * eg. "en". To display and query matching purpose, the keyword theme needs to
     * be localized.
     *
     * Generated from protobuf field <code>optional string language_code = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $language_code = null;
    /**
     * Output only. The display name of the keyword theme or sub keyword theme.
     *
     * Generated from protobuf field <code>optional string display_name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $display_name = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the keyword theme constant.
     *           Keyword theme constant resource names have the form:
     *           `keywordThemeConstants/{keyword_theme_id}~{sub_keyword_theme_id}`
     *     @type string $country_code
     *           Output only. The ISO-3166 Alpha-2 country code of the constant, eg. "US".
     *           To display and query matching purpose, the keyword theme needs to be
     *           localized.
     *     @type string $language_code
     *           Output only. The ISO-639-1 language code with 2 letters of the constant,
     *           eg. "en". To display and query matching purpose, the keyword theme needs to
     *           be localized.
     *     @type string $display_name
     *           Output only. The display name of the keyword theme or sub keyword theme.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\KeywordThemeConstant::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the keyword theme constant.
     * Keyword theme constant resource names have the form:
     * `keywordThemeConstants/{keyword_theme_id}~{sub_keyword_theme_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the keyword theme constant.
     * Keyword theme constant resource names have the form:
     * `keywordThemeConstants/{keyword_theme_id}~{sub_keyword_theme_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The ISO-3166 Alpha-2 country code of the constant, eg. "US".
     * To display and query matching purpose, the keyword theme needs to be
     * localized.
     *
     * Generated from protobuf field <code>optional string country_code = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCountryCode()
    {
        return $this->country_code ?? '';
    }

    public function hasCountryCode()
    {
        return isset($this->country_code);
    }

    public function clearCountryCode()
    {
        unset($this->country_code);
    }

    /**
     * Output only. The ISO-3166 Alpha-2 country code of the constant, eg. "US".
     * To display and query matching purpose, the keyword theme needs to be
     * localized.
     *
     * Generated from protobuf field <code>optional string country_code = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCountryCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->country_code = $var;

        return $this;
    }

    /**
     * Output only. The ISO-639-1 language code with 2 letters of the constant,
     * eg. "en". To display and query matching purpose, the keyword theme needs to
     * be localized.
     *
     * Generated from protobuf field <code>optional string language_code = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code ?? '';
    }

    public function hasLanguageCode()
    {
        return isset($this->language_code);
    }

    public function clearLanguageCode()
    {
        unset($this->language_code);
    }

    /**
     * Output only. The ISO-639-1 language code with 2 letters of the constant,
     * eg. "en". To display and query matching purpose, the keyword theme needs to
     * be localized.
     *
     * Generated from protobuf field <code>optional string language_code = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Output only. The display name of the keyword theme or sub keyword theme.
     *
     * Generated from protobuf field <code>optional string display_name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name ?? '';
    }

    public function hasDisplayName()
    {
        return isset($this->display_name);
    }

    public function clearDisplayName()
    {
        unset($this->display_name);
    }

    /**
     * Output only. The display name of the keyword theme or sub keyword theme.
     *
     * Generated from protobuf field <code>optional string display_name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

}

