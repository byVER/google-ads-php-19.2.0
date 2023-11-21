<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/common/criteria.proto

namespace Google\Ads\GoogleAds\V14\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Class of the hotel as a number of stars 1 to 5.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.common.HotelClassInfo</code>
 */
class HotelClassInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Long value of the hotel class.
     *
     * Generated from protobuf field <code>optional int64 value = 2;</code>
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $value
     *           Long value of the hotel class.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Long value of the hotel class.
     *
     * Generated from protobuf field <code>optional int64 value = 2;</code>
     * @return int|string
     */
    public function getValue()
    {
        return $this->value ?? 0;
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
     * Long value of the hotel class.
     *
     * Generated from protobuf field <code>optional int64 value = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->value = $var;

        return $this;
    }

}

