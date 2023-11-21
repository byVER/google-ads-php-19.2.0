<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V13\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Shopping Comparison Listing ad.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.common.ShoppingComparisonListingAdInfo</code>
 */
class ShoppingComparisonListingAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Headline of the ad. This field is required. Allowed length is between 25
     * and 45 characters.
     *
     * Generated from protobuf field <code>optional string headline = 2;</code>
     */
    protected $headline = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $headline
     *           Headline of the ad. This field is required. Allowed length is between 25
     *           and 45 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * Headline of the ad. This field is required. Allowed length is between 25
     * and 45 characters.
     *
     * Generated from protobuf field <code>optional string headline = 2;</code>
     * @return string
     */
    public function getHeadline()
    {
        return $this->headline ?? '';
    }

    public function hasHeadline()
    {
        return isset($this->headline);
    }

    public function clearHeadline()
    {
        unset($this->headline);
    }

    /**
     * Headline of the ad. This field is required. Allowed length is between 25
     * and 45 characters.
     *
     * Generated from protobuf field <code>optional string headline = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setHeadline($var)
    {
        GPBUtil::checkString($var, True);
        $this->headline = $var;

        return $this;
    }

}

