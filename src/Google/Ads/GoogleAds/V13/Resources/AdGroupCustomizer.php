<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/resources/ad_group_customizer.proto

namespace Google\Ads\GoogleAds\V13\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A customizer value for the associated CustomizerAttribute at the AdGroup
 * level.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.resources.AdGroupCustomizer</code>
 */
class AdGroupCustomizer extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the ad group customizer.
     * Ad group customizer resource names have the form:
     * `customers/{customer_id}/adGroupCustomizers/{ad_group_id}~{customizer_attribute_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Immutable. The ad group to which the customizer attribute is linked.
     *
     * Generated from protobuf field <code>string ad_group = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $ad_group = '';
    /**
     * Required. Immutable. The customizer attribute which is linked to the ad
     * group.
     *
     * Generated from protobuf field <code>string customizer_attribute = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $customizer_attribute = '';
    /**
     * Output only. The status of the ad group customizer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.CustomizerValueStatusEnum.CustomizerValueStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;
    /**
     * Required. The value to associate with the customizer attribute at this
     * level. The value must be of the type specified for the CustomizerAttribute.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.common.CustomizerValue value = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the ad group customizer.
     *           Ad group customizer resource names have the form:
     *           `customers/{customer_id}/adGroupCustomizers/{ad_group_id}~{customizer_attribute_id}`
     *     @type string $ad_group
     *           Immutable. The ad group to which the customizer attribute is linked.
     *     @type string $customizer_attribute
     *           Required. Immutable. The customizer attribute which is linked to the ad
     *           group.
     *     @type int $status
     *           Output only. The status of the ad group customizer.
     *     @type \Google\Ads\GoogleAds\V13\Common\CustomizerValue $value
     *           Required. The value to associate with the customizer attribute at this
     *           level. The value must be of the type specified for the CustomizerAttribute.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Resources\AdGroupCustomizer::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the ad group customizer.
     * Ad group customizer resource names have the form:
     * `customers/{customer_id}/adGroupCustomizers/{ad_group_id}~{customizer_attribute_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the ad group customizer.
     * Ad group customizer resource names have the form:
     * `customers/{customer_id}/adGroupCustomizers/{ad_group_id}~{customizer_attribute_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
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
     * Immutable. The ad group to which the customizer attribute is linked.
     *
     * Generated from protobuf field <code>string ad_group = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAdGroup()
    {
        return $this->ad_group;
    }

    /**
     * Immutable. The ad group to which the customizer attribute is linked.
     *
     * Generated from protobuf field <code>string ad_group = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAdGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->ad_group = $var;

        return $this;
    }

    /**
     * Required. Immutable. The customizer attribute which is linked to the ad
     * group.
     *
     * Generated from protobuf field <code>string customizer_attribute = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCustomizerAttribute()
    {
        return $this->customizer_attribute;
    }

    /**
     * Required. Immutable. The customizer attribute which is linked to the ad
     * group.
     *
     * Generated from protobuf field <code>string customizer_attribute = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCustomizerAttribute($var)
    {
        GPBUtil::checkString($var, True);
        $this->customizer_attribute = $var;

        return $this;
    }

    /**
     * Output only. The status of the ad group customizer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.CustomizerValueStatusEnum.CustomizerValueStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. The status of the ad group customizer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.CustomizerValueStatusEnum.CustomizerValueStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V13\Enums\CustomizerValueStatusEnum\CustomizerValueStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Required. The value to associate with the customizer attribute at this
     * level. The value must be of the type specified for the CustomizerAttribute.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.common.CustomizerValue value = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Ads\GoogleAds\V13\Common\CustomizerValue|null
     */
    public function getValue()
    {
        return $this->value;
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * Required. The value to associate with the customizer attribute at this
     * level. The value must be of the type specified for the CustomizerAttribute.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.common.CustomizerValue value = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Ads\GoogleAds\V13\Common\CustomizerValue $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V13\Common\CustomizerValue::class);
        $this->value = $var;

        return $this;
    }

}

