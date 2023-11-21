<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/common/frequency_cap.proto

namespace Google\Ads\GoogleAds\V12\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A group of fields used as keys for a frequency cap.
 * There can be no more than one frequency cap with the same key.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.common.FrequencyCapKey</code>
 */
class FrequencyCapKey extends \Google\Protobuf\Internal\Message
{
    /**
     * The level on which the cap is to be applied (for example, ad group ad, ad
     * group). The cap is applied to all the entities of this level.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.FrequencyCapLevelEnum.FrequencyCapLevel level = 1;</code>
     */
    protected $level = 0;
    /**
     * The type of event that the cap applies to (for example, impression).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.FrequencyCapEventTypeEnum.FrequencyCapEventType event_type = 3;</code>
     */
    protected $event_type = 0;
    /**
     * Unit of time the cap is defined at (for example, day, week).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.FrequencyCapTimeUnitEnum.FrequencyCapTimeUnit time_unit = 2;</code>
     */
    protected $time_unit = 0;
    /**
     * Number of time units the cap lasts.
     *
     * Generated from protobuf field <code>optional int32 time_length = 5;</code>
     */
    protected $time_length = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $level
     *           The level on which the cap is to be applied (for example, ad group ad, ad
     *           group). The cap is applied to all the entities of this level.
     *     @type int $event_type
     *           The type of event that the cap applies to (for example, impression).
     *     @type int $time_unit
     *           Unit of time the cap is defined at (for example, day, week).
     *     @type int $time_length
     *           Number of time units the cap lasts.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Common\FrequencyCap::initOnce();
        parent::__construct($data);
    }

    /**
     * The level on which the cap is to be applied (for example, ad group ad, ad
     * group). The cap is applied to all the entities of this level.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.FrequencyCapLevelEnum.FrequencyCapLevel level = 1;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * The level on which the cap is to be applied (for example, ad group ad, ad
     * group). The cap is applied to all the entities of this level.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.FrequencyCapLevelEnum.FrequencyCapLevel level = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkEnum($var);
        $this->level = $var;

        return $this;
    }

    /**
     * The type of event that the cap applies to (for example, impression).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.FrequencyCapEventTypeEnum.FrequencyCapEventType event_type = 3;</code>
     * @return int
     */
    public function getEventType()
    {
        return $this->event_type;
    }

    /**
     * The type of event that the cap applies to (for example, impression).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.FrequencyCapEventTypeEnum.FrequencyCapEventType event_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setEventType($var)
    {
        GPBUtil::checkEnum($var);
        $this->event_type = $var;

        return $this;
    }

    /**
     * Unit of time the cap is defined at (for example, day, week).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.FrequencyCapTimeUnitEnum.FrequencyCapTimeUnit time_unit = 2;</code>
     * @return int
     */
    public function getTimeUnit()
    {
        return $this->time_unit;
    }

    /**
     * Unit of time the cap is defined at (for example, day, week).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.FrequencyCapTimeUnitEnum.FrequencyCapTimeUnit time_unit = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTimeUnit($var)
    {
        GPBUtil::checkEnum($var);
        $this->time_unit = $var;

        return $this;
    }

    /**
     * Number of time units the cap lasts.
     *
     * Generated from protobuf field <code>optional int32 time_length = 5;</code>
     * @return int
     */
    public function getTimeLength()
    {
        return $this->time_length ?? 0;
    }

    public function hasTimeLength()
    {
        return isset($this->time_length);
    }

    public function clearTimeLength()
    {
        unset($this->time_length);
    }

    /**
     * Number of time units the cap lasts.
     *
     * Generated from protobuf field <code>optional int32 time_length = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setTimeLength($var)
    {
        GPBUtil::checkInt32($var);
        $this->time_length = $var;

        return $this;
    }

}

