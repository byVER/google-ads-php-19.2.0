<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/resources/customer_conversion_goal.proto

namespace Google\Ads\GoogleAds\V12\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Biddability control for conversion actions with a matching category and
 * origin.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.resources.CustomerConversionGoal</code>
 */
class CustomerConversionGoal extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the customer conversion goal.
     * Customer conversion goal resource names have the form:
     * `customers/{customer_id}/customerConversionGoals/{category}~{origin}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * The conversion category of this customer conversion goal. Only
     * conversion actions that have this category will be included in this goal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.ConversionActionCategoryEnum.ConversionActionCategory category = 2;</code>
     */
    protected $category = 0;
    /**
     * The conversion origin of this customer conversion goal. Only
     * conversion actions that have this conversion origin will be included in
     * this goal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.ConversionOriginEnum.ConversionOrigin origin = 3;</code>
     */
    protected $origin = 0;
    /**
     * The biddability of the customer conversion goal.
     *
     * Generated from protobuf field <code>bool biddable = 4;</code>
     */
    protected $biddable = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the customer conversion goal.
     *           Customer conversion goal resource names have the form:
     *           `customers/{customer_id}/customerConversionGoals/{category}~{origin}`
     *     @type int $category
     *           The conversion category of this customer conversion goal. Only
     *           conversion actions that have this category will be included in this goal.
     *     @type int $origin
     *           The conversion origin of this customer conversion goal. Only
     *           conversion actions that have this conversion origin will be included in
     *           this goal.
     *     @type bool $biddable
     *           The biddability of the customer conversion goal.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Resources\CustomerConversionGoal::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the customer conversion goal.
     * Customer conversion goal resource names have the form:
     * `customers/{customer_id}/customerConversionGoals/{category}~{origin}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the customer conversion goal.
     * Customer conversion goal resource names have the form:
     * `customers/{customer_id}/customerConversionGoals/{category}~{origin}`
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
     * The conversion category of this customer conversion goal. Only
     * conversion actions that have this category will be included in this goal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.ConversionActionCategoryEnum.ConversionActionCategory category = 2;</code>
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * The conversion category of this customer conversion goal. Only
     * conversion actions that have this category will be included in this goal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.ConversionActionCategoryEnum.ConversionActionCategory category = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCategory($var)
    {
        GPBUtil::checkEnum($var);
        $this->category = $var;

        return $this;
    }

    /**
     * The conversion origin of this customer conversion goal. Only
     * conversion actions that have this conversion origin will be included in
     * this goal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.ConversionOriginEnum.ConversionOrigin origin = 3;</code>
     * @return int
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * The conversion origin of this customer conversion goal. Only
     * conversion actions that have this conversion origin will be included in
     * this goal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.ConversionOriginEnum.ConversionOrigin origin = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setOrigin($var)
    {
        GPBUtil::checkEnum($var);
        $this->origin = $var;

        return $this;
    }

    /**
     * The biddability of the customer conversion goal.
     *
     * Generated from protobuf field <code>bool biddable = 4;</code>
     * @return bool
     */
    public function getBiddable()
    {
        return $this->biddable;
    }

    /**
     * The biddability of the customer conversion goal.
     *
     * Generated from protobuf field <code>bool biddable = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setBiddable($var)
    {
        GPBUtil::checkBool($var);
        $this->biddable = $var;

        return $this;
    }

}

