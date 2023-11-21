<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/common/criteria.proto

namespace Google\Ads\GoogleAds\V14\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * City the hotel is located in.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.common.HotelCityInfo</code>
 */
class HotelCityInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The Geo Target Constant resource name.
     *
     * Generated from protobuf field <code>optional string city_criterion = 2;</code>
     */
    protected $city_criterion = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $city_criterion
     *           The Geo Target Constant resource name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The Geo Target Constant resource name.
     *
     * Generated from protobuf field <code>optional string city_criterion = 2;</code>
     * @return string
     */
    public function getCityCriterion()
    {
        return $this->city_criterion ?? '';
    }

    public function hasCityCriterion()
    {
        return isset($this->city_criterion);
    }

    public function clearCityCriterion()
    {
        unset($this->city_criterion);
    }

    /**
     * The Geo Target Constant resource name.
     *
     * Generated from protobuf field <code>optional string city_criterion = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCityCriterion($var)
    {
        GPBUtil::checkString($var, True);
        $this->city_criterion = $var;

        return $this;
    }

}

