<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/common/criteria.proto

namespace Google\Ads\GoogleAds\V14\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A mobile app category criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.common.MobileAppCategoryInfo</code>
 */
class MobileAppCategoryInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The mobile app category constant resource name.
     *
     * Generated from protobuf field <code>optional string mobile_app_category_constant = 2;</code>
     */
    protected $mobile_app_category_constant = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $mobile_app_category_constant
     *           The mobile app category constant resource name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The mobile app category constant resource name.
     *
     * Generated from protobuf field <code>optional string mobile_app_category_constant = 2;</code>
     * @return string
     */
    public function getMobileAppCategoryConstant()
    {
        return $this->mobile_app_category_constant ?? '';
    }

    public function hasMobileAppCategoryConstant()
    {
        return isset($this->mobile_app_category_constant);
    }

    public function clearMobileAppCategoryConstant()
    {
        unset($this->mobile_app_category_constant);
    }

    /**
     * The mobile app category constant resource name.
     *
     * Generated from protobuf field <code>optional string mobile_app_category_constant = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMobileAppCategoryConstant($var)
    {
        GPBUtil::checkString($var, True);
        $this->mobile_app_category_constant = $var;

        return $this;
    }

}

