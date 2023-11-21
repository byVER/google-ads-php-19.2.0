<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/resources/campaign_conversion_goal.proto

namespace Google\Ads\GoogleAds\V13\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The biddability setting for the specified campaign only for all
 * conversion actions with a matching category and origin.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.resources.CampaignConversionGoal</code>
 */
class CampaignConversionGoal extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the campaign conversion goal.
     * Campaign conversion goal resource names have the form:
     * `customers/{customer_id}/campaignConversionGoals/{campaign_id}~{category}~{origin}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Immutable. The campaign with which this campaign conversion goal is
     * associated.
     *
     * Generated from protobuf field <code>string campaign = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $campaign = '';
    /**
     * The conversion category of this campaign conversion goal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.ConversionActionCategoryEnum.ConversionActionCategory category = 3;</code>
     */
    protected $category = 0;
    /**
     * The conversion origin of this campaign conversion goal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.ConversionOriginEnum.ConversionOrigin origin = 4;</code>
     */
    protected $origin = 0;
    /**
     * The biddability of the campaign conversion goal.
     *
     * Generated from protobuf field <code>bool biddable = 5;</code>
     */
    protected $biddable = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the campaign conversion goal.
     *           Campaign conversion goal resource names have the form:
     *           `customers/{customer_id}/campaignConversionGoals/{campaign_id}~{category}~{origin}`
     *     @type string $campaign
     *           Immutable. The campaign with which this campaign conversion goal is
     *           associated.
     *     @type int $category
     *           The conversion category of this campaign conversion goal.
     *     @type int $origin
     *           The conversion origin of this campaign conversion goal.
     *     @type bool $biddable
     *           The biddability of the campaign conversion goal.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Resources\CampaignConversionGoal::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the campaign conversion goal.
     * Campaign conversion goal resource names have the form:
     * `customers/{customer_id}/campaignConversionGoals/{campaign_id}~{category}~{origin}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the campaign conversion goal.
     * Campaign conversion goal resource names have the form:
     * `customers/{customer_id}/campaignConversionGoals/{campaign_id}~{category}~{origin}`
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
     * Immutable. The campaign with which this campaign conversion goal is
     * associated.
     *
     * Generated from protobuf field <code>string campaign = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Immutable. The campaign with which this campaign conversion goal is
     * associated.
     *
     * Generated from protobuf field <code>string campaign = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCampaign($var)
    {
        GPBUtil::checkString($var, True);
        $this->campaign = $var;

        return $this;
    }

    /**
     * The conversion category of this campaign conversion goal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.ConversionActionCategoryEnum.ConversionActionCategory category = 3;</code>
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * The conversion category of this campaign conversion goal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.ConversionActionCategoryEnum.ConversionActionCategory category = 3;</code>
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
     * The conversion origin of this campaign conversion goal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.ConversionOriginEnum.ConversionOrigin origin = 4;</code>
     * @return int
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * The conversion origin of this campaign conversion goal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.ConversionOriginEnum.ConversionOrigin origin = 4;</code>
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
     * The biddability of the campaign conversion goal.
     *
     * Generated from protobuf field <code>bool biddable = 5;</code>
     * @return bool
     */
    public function getBiddable()
    {
        return $this->biddable;
    }

    /**
     * The biddability of the campaign conversion goal.
     *
     * Generated from protobuf field <code>bool biddable = 5;</code>
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

