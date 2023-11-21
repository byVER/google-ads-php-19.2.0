<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/common/asset_types.proto

namespace Google\Ads\GoogleAds\V12\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Call asset.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.common.CallAsset</code>
 */
class CallAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Two-letter country code of the phone number. Examples: 'US', 'us'.
     *
     * Generated from protobuf field <code>string country_code = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $country_code = '';
    /**
     * Required. The advertiser's raw phone number. Examples: '1234567890', '(123)456-7890'
     *
     * Generated from protobuf field <code>string phone_number = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $phone_number = '';
    /**
     * Indicates whether this CallAsset should use its own call conversion
     * setting, follow the account level setting, or disable call conversion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.CallConversionReportingStateEnum.CallConversionReportingState call_conversion_reporting_state = 3;</code>
     */
    protected $call_conversion_reporting_state = 0;
    /**
     * The conversion action to attribute a call conversion to. If not set, the
     * default conversion action is used. This field only has effect if
     * call_conversion_reporting_state is set to
     * USE_RESOURCE_LEVEL_CALL_CONVERSION_ACTION.
     *
     * Generated from protobuf field <code>string call_conversion_action = 4 [(.google.api.resource_reference) = {</code>
     */
    protected $call_conversion_action = '';
    /**
     * List of non-overlapping schedules specifying all time intervals for which
     * the asset may serve. There can be a maximum of 6 schedules per day, 42 in
     * total.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.common.AdScheduleInfo ad_schedule_targets = 5;</code>
     */
    private $ad_schedule_targets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $country_code
     *           Required. Two-letter country code of the phone number. Examples: 'US', 'us'.
     *     @type string $phone_number
     *           Required. The advertiser's raw phone number. Examples: '1234567890', '(123)456-7890'
     *     @type int $call_conversion_reporting_state
     *           Indicates whether this CallAsset should use its own call conversion
     *           setting, follow the account level setting, or disable call conversion.
     *     @type string $call_conversion_action
     *           The conversion action to attribute a call conversion to. If not set, the
     *           default conversion action is used. This field only has effect if
     *           call_conversion_reporting_state is set to
     *           USE_RESOURCE_LEVEL_CALL_CONVERSION_ACTION.
     *     @type array<\Google\Ads\GoogleAds\V12\Common\AdScheduleInfo>|\Google\Protobuf\Internal\RepeatedField $ad_schedule_targets
     *           List of non-overlapping schedules specifying all time intervals for which
     *           the asset may serve. There can be a maximum of 6 schedules per day, 42 in
     *           total.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Common\AssetTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Two-letter country code of the phone number. Examples: 'US', 'us'.
     *
     * Generated from protobuf field <code>string country_code = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * Required. Two-letter country code of the phone number. Examples: 'US', 'us'.
     *
     * Generated from protobuf field <code>string country_code = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The advertiser's raw phone number. Examples: '1234567890', '(123)456-7890'
     *
     * Generated from protobuf field <code>string phone_number = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * Required. The advertiser's raw phone number. Examples: '1234567890', '(123)456-7890'
     *
     * Generated from protobuf field <code>string phone_number = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPhoneNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone_number = $var;

        return $this;
    }

    /**
     * Indicates whether this CallAsset should use its own call conversion
     * setting, follow the account level setting, or disable call conversion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.CallConversionReportingStateEnum.CallConversionReportingState call_conversion_reporting_state = 3;</code>
     * @return int
     */
    public function getCallConversionReportingState()
    {
        return $this->call_conversion_reporting_state;
    }

    /**
     * Indicates whether this CallAsset should use its own call conversion
     * setting, follow the account level setting, or disable call conversion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.CallConversionReportingStateEnum.CallConversionReportingState call_conversion_reporting_state = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCallConversionReportingState($var)
    {
        GPBUtil::checkEnum($var);
        $this->call_conversion_reporting_state = $var;

        return $this;
    }

    /**
     * The conversion action to attribute a call conversion to. If not set, the
     * default conversion action is used. This field only has effect if
     * call_conversion_reporting_state is set to
     * USE_RESOURCE_LEVEL_CALL_CONVERSION_ACTION.
     *
     * Generated from protobuf field <code>string call_conversion_action = 4 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCallConversionAction()
    {
        return $this->call_conversion_action;
    }

    /**
     * The conversion action to attribute a call conversion to. If not set, the
     * default conversion action is used. This field only has effect if
     * call_conversion_reporting_state is set to
     * USE_RESOURCE_LEVEL_CALL_CONVERSION_ACTION.
     *
     * Generated from protobuf field <code>string call_conversion_action = 4 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCallConversionAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->call_conversion_action = $var;

        return $this;
    }

    /**
     * List of non-overlapping schedules specifying all time intervals for which
     * the asset may serve. There can be a maximum of 6 schedules per day, 42 in
     * total.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.common.AdScheduleInfo ad_schedule_targets = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdScheduleTargets()
    {
        return $this->ad_schedule_targets;
    }

    /**
     * List of non-overlapping schedules specifying all time intervals for which
     * the asset may serve. There can be a maximum of 6 schedules per day, 42 in
     * total.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.common.AdScheduleInfo ad_schedule_targets = 5;</code>
     * @param array<\Google\Ads\GoogleAds\V12\Common\AdScheduleInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdScheduleTargets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V12\Common\AdScheduleInfo::class);
        $this->ad_schedule_targets = $arr;

        return $this;
    }

}

