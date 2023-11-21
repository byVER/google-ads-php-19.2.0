<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/resources/bidding_seasonality_adjustment.proto

namespace Google\Ads\GoogleAds\V13\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a bidding seasonality adjustment.
 * See "About seasonality adjustments" at
 * https://support.google.com/google-ads/answer/10369906.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.resources.BiddingSeasonalityAdjustment</code>
 */
class BiddingSeasonalityAdjustment extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the seasonality adjustment.
     * Seasonality adjustment resource names have the form:
     * `customers/{customer_id}/biddingSeasonalityAdjustments/{seasonality_adjustment_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ID of the seasonality adjustment.
     *
     * Generated from protobuf field <code>int64 seasonality_adjustment_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $seasonality_adjustment_id = 0;
    /**
     * The scope of the seasonality adjustment.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.SeasonalityEventScopeEnum.SeasonalityEventScope scope = 3;</code>
     */
    protected $scope = 0;
    /**
     * Output only. The status of the seasonality adjustment.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.SeasonalityEventStatusEnum.SeasonalityEventStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;
    /**
     * Required. The inclusive start time of the seasonality adjustment in
     * yyyy-MM-dd HH:mm:ss format.
     * A seasonality adjustment is forward looking and should be used for events
     * that start and end in the future.
     *
     * Generated from protobuf field <code>string start_date_time = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $start_date_time = '';
    /**
     * Required. The exclusive end time of the seasonality adjustment in
     * yyyy-MM-dd HH:mm:ss format.
     * The length of [start_date_time, end_date_time) interval must be
     * within (0, 14 days].
     *
     * Generated from protobuf field <code>string end_date_time = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $end_date_time = '';
    /**
     * The name of the seasonality adjustment. The name can be at most 255
     * characters.
     *
     * Generated from protobuf field <code>string name = 7;</code>
     */
    protected $name = '';
    /**
     * The description of the seasonality adjustment. The description can be at
     * most 2048 characters.
     *
     * Generated from protobuf field <code>string description = 8;</code>
     */
    protected $description = '';
    /**
     * If not specified, all devices will be included in this adjustment.
     * Otherwise, only the specified targeted devices will be included in this
     * adjustment.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v13.enums.DeviceEnum.Device devices = 9;</code>
     */
    private $devices;
    /**
     * Conversion rate modifier estimated based on expected conversion rate
     * changes. When this field is unset or set to 1.0 no adjustment will be
     * applied to traffic. The allowed range is 0.1 to 10.0.
     *
     * Generated from protobuf field <code>double conversion_rate_modifier = 10;</code>
     */
    protected $conversion_rate_modifier = 0.0;
    /**
     * The seasonality adjustment will apply to the campaigns listed when the
     * scope of this adjustment is CAMPAIGN. The maximum number of campaigns per
     * event is 2000.
     * Note: a seasonality adjustment with both advertising_channel_types and
     * campaign_ids is not supported.
     *
     * Generated from protobuf field <code>repeated string campaigns = 11 [(.google.api.resource_reference) = {</code>
     */
    private $campaigns;
    /**
     * The seasonality adjustment will apply to all the campaigns under the listed
     * channels retroactively as well as going forward when the scope of this
     * adjustment is CHANNEL.
     * The supported advertising channel types are DISPLAY, SEARCH and SHOPPING.
     * Note: a seasonality adjustment with both advertising_channel_types and
     * campaign_ids is not supported.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v13.enums.AdvertisingChannelTypeEnum.AdvertisingChannelType advertising_channel_types = 12;</code>
     */
    private $advertising_channel_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the seasonality adjustment.
     *           Seasonality adjustment resource names have the form:
     *           `customers/{customer_id}/biddingSeasonalityAdjustments/{seasonality_adjustment_id}`
     *     @type int|string $seasonality_adjustment_id
     *           Output only. The ID of the seasonality adjustment.
     *     @type int $scope
     *           The scope of the seasonality adjustment.
     *     @type int $status
     *           Output only. The status of the seasonality adjustment.
     *     @type string $start_date_time
     *           Required. The inclusive start time of the seasonality adjustment in
     *           yyyy-MM-dd HH:mm:ss format.
     *           A seasonality adjustment is forward looking and should be used for events
     *           that start and end in the future.
     *     @type string $end_date_time
     *           Required. The exclusive end time of the seasonality adjustment in
     *           yyyy-MM-dd HH:mm:ss format.
     *           The length of [start_date_time, end_date_time) interval must be
     *           within (0, 14 days].
     *     @type string $name
     *           The name of the seasonality adjustment. The name can be at most 255
     *           characters.
     *     @type string $description
     *           The description of the seasonality adjustment. The description can be at
     *           most 2048 characters.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $devices
     *           If not specified, all devices will be included in this adjustment.
     *           Otherwise, only the specified targeted devices will be included in this
     *           adjustment.
     *     @type float $conversion_rate_modifier
     *           Conversion rate modifier estimated based on expected conversion rate
     *           changes. When this field is unset or set to 1.0 no adjustment will be
     *           applied to traffic. The allowed range is 0.1 to 10.0.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $campaigns
     *           The seasonality adjustment will apply to the campaigns listed when the
     *           scope of this adjustment is CAMPAIGN. The maximum number of campaigns per
     *           event is 2000.
     *           Note: a seasonality adjustment with both advertising_channel_types and
     *           campaign_ids is not supported.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $advertising_channel_types
     *           The seasonality adjustment will apply to all the campaigns under the listed
     *           channels retroactively as well as going forward when the scope of this
     *           adjustment is CHANNEL.
     *           The supported advertising channel types are DISPLAY, SEARCH and SHOPPING.
     *           Note: a seasonality adjustment with both advertising_channel_types and
     *           campaign_ids is not supported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Resources\BiddingSeasonalityAdjustment::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the seasonality adjustment.
     * Seasonality adjustment resource names have the form:
     * `customers/{customer_id}/biddingSeasonalityAdjustments/{seasonality_adjustment_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the seasonality adjustment.
     * Seasonality adjustment resource names have the form:
     * `customers/{customer_id}/biddingSeasonalityAdjustments/{seasonality_adjustment_id}`
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
     * Output only. The ID of the seasonality adjustment.
     *
     * Generated from protobuf field <code>int64 seasonality_adjustment_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getSeasonalityAdjustmentId()
    {
        return $this->seasonality_adjustment_id;
    }

    /**
     * Output only. The ID of the seasonality adjustment.
     *
     * Generated from protobuf field <code>int64 seasonality_adjustment_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSeasonalityAdjustmentId($var)
    {
        GPBUtil::checkInt64($var);
        $this->seasonality_adjustment_id = $var;

        return $this;
    }

    /**
     * The scope of the seasonality adjustment.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.SeasonalityEventScopeEnum.SeasonalityEventScope scope = 3;</code>
     * @return int
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * The scope of the seasonality adjustment.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.SeasonalityEventScopeEnum.SeasonalityEventScope scope = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkEnum($var);
        $this->scope = $var;

        return $this;
    }

    /**
     * Output only. The status of the seasonality adjustment.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.SeasonalityEventStatusEnum.SeasonalityEventStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. The status of the seasonality adjustment.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.SeasonalityEventStatusEnum.SeasonalityEventStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var);
        $this->status = $var;

        return $this;
    }

    /**
     * Required. The inclusive start time of the seasonality adjustment in
     * yyyy-MM-dd HH:mm:ss format.
     * A seasonality adjustment is forward looking and should be used for events
     * that start and end in the future.
     *
     * Generated from protobuf field <code>string start_date_time = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getStartDateTime()
    {
        return $this->start_date_time;
    }

    /**
     * Required. The inclusive start time of the seasonality adjustment in
     * yyyy-MM-dd HH:mm:ss format.
     * A seasonality adjustment is forward looking and should be used for events
     * that start and end in the future.
     *
     * Generated from protobuf field <code>string start_date_time = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setStartDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_date_time = $var;

        return $this;
    }

    /**
     * Required. The exclusive end time of the seasonality adjustment in
     * yyyy-MM-dd HH:mm:ss format.
     * The length of [start_date_time, end_date_time) interval must be
     * within (0, 14 days].
     *
     * Generated from protobuf field <code>string end_date_time = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getEndDateTime()
    {
        return $this->end_date_time;
    }

    /**
     * Required. The exclusive end time of the seasonality adjustment in
     * yyyy-MM-dd HH:mm:ss format.
     * The length of [start_date_time, end_date_time) interval must be
     * within (0, 14 days].
     *
     * Generated from protobuf field <code>string end_date_time = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setEndDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->end_date_time = $var;

        return $this;
    }

    /**
     * The name of the seasonality adjustment. The name can be at most 255
     * characters.
     *
     * Generated from protobuf field <code>string name = 7;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the seasonality adjustment. The name can be at most 255
     * characters.
     *
     * Generated from protobuf field <code>string name = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The description of the seasonality adjustment. The description can be at
     * most 2048 characters.
     *
     * Generated from protobuf field <code>string description = 8;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of the seasonality adjustment. The description can be at
     * most 2048 characters.
     *
     * Generated from protobuf field <code>string description = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * If not specified, all devices will be included in this adjustment.
     * Otherwise, only the specified targeted devices will be included in this
     * adjustment.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v13.enums.DeviceEnum.Device devices = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDevices()
    {
        return $this->devices;
    }

    /**
     * If not specified, all devices will be included in this adjustment.
     * Otherwise, only the specified targeted devices will be included in this
     * adjustment.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v13.enums.DeviceEnum.Device devices = 9;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDevices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\GoogleAds\V13\Enums\DeviceEnum\Device::class);
        $this->devices = $arr;

        return $this;
    }

    /**
     * Conversion rate modifier estimated based on expected conversion rate
     * changes. When this field is unset or set to 1.0 no adjustment will be
     * applied to traffic. The allowed range is 0.1 to 10.0.
     *
     * Generated from protobuf field <code>double conversion_rate_modifier = 10;</code>
     * @return float
     */
    public function getConversionRateModifier()
    {
        return $this->conversion_rate_modifier;
    }

    /**
     * Conversion rate modifier estimated based on expected conversion rate
     * changes. When this field is unset or set to 1.0 no adjustment will be
     * applied to traffic. The allowed range is 0.1 to 10.0.
     *
     * Generated from protobuf field <code>double conversion_rate_modifier = 10;</code>
     * @param float $var
     * @return $this
     */
    public function setConversionRateModifier($var)
    {
        GPBUtil::checkDouble($var);
        $this->conversion_rate_modifier = $var;

        return $this;
    }

    /**
     * The seasonality adjustment will apply to the campaigns listed when the
     * scope of this adjustment is CAMPAIGN. The maximum number of campaigns per
     * event is 2000.
     * Note: a seasonality adjustment with both advertising_channel_types and
     * campaign_ids is not supported.
     *
     * Generated from protobuf field <code>repeated string campaigns = 11 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCampaigns()
    {
        return $this->campaigns;
    }

    /**
     * The seasonality adjustment will apply to the campaigns listed when the
     * scope of this adjustment is CAMPAIGN. The maximum number of campaigns per
     * event is 2000.
     * Note: a seasonality adjustment with both advertising_channel_types and
     * campaign_ids is not supported.
     *
     * Generated from protobuf field <code>repeated string campaigns = 11 [(.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCampaigns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->campaigns = $arr;

        return $this;
    }

    /**
     * The seasonality adjustment will apply to all the campaigns under the listed
     * channels retroactively as well as going forward when the scope of this
     * adjustment is CHANNEL.
     * The supported advertising channel types are DISPLAY, SEARCH and SHOPPING.
     * Note: a seasonality adjustment with both advertising_channel_types and
     * campaign_ids is not supported.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v13.enums.AdvertisingChannelTypeEnum.AdvertisingChannelType advertising_channel_types = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdvertisingChannelTypes()
    {
        return $this->advertising_channel_types;
    }

    /**
     * The seasonality adjustment will apply to all the campaigns under the listed
     * channels retroactively as well as going forward when the scope of this
     * adjustment is CHANNEL.
     * The supported advertising channel types are DISPLAY, SEARCH and SHOPPING.
     * Note: a seasonality adjustment with both advertising_channel_types and
     * campaign_ids is not supported.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v13.enums.AdvertisingChannelTypeEnum.AdvertisingChannelType advertising_channel_types = 12;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdvertisingChannelTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\GoogleAds\V13\Enums\AdvertisingChannelTypeEnum\AdvertisingChannelType::class);
        $this->advertising_channel_types = $arr;

        return $this;
    }

}

