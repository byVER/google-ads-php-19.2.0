<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/common/criteria.proto

namespace Google\Ads\GoogleAds\V12\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Availability of a product offer.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.common.ProductChannelExclusivityInfo</code>
 */
class ProductChannelExclusivityInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Value of the availability.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.ProductChannelExclusivityEnum.ProductChannelExclusivity channel_exclusivity = 1;</code>
     */
    protected $channel_exclusivity = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $channel_exclusivity
     *           Value of the availability.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Value of the availability.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.ProductChannelExclusivityEnum.ProductChannelExclusivity channel_exclusivity = 1;</code>
     * @return int
     */
    public function getChannelExclusivity()
    {
        return $this->channel_exclusivity;
    }

    /**
     * Value of the availability.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.ProductChannelExclusivityEnum.ProductChannelExclusivity channel_exclusivity = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setChannelExclusivity($var)
    {
        GPBUtil::checkEnum($var);
        $this->channel_exclusivity = $var;

        return $this;
    }

}

