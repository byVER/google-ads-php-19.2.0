<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/common/segments.proto

namespace Google\Ads\GoogleAds\V12\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A SkAdNetworkSourceApp segment.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.common.SkAdNetworkSourceApp</code>
 */
class SkAdNetworkSourceApp extends \Google\Protobuf\Internal\Message
{
    /**
     * App id where the ad that drove the iOS Store Kit Ad Network install was
     * shown.
     *
     * Generated from protobuf field <code>optional string sk_ad_network_source_app_id = 1;</code>
     */
    protected $sk_ad_network_source_app_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sk_ad_network_source_app_id
     *           App id where the ad that drove the iOS Store Kit Ad Network install was
     *           shown.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Common\Segments::initOnce();
        parent::__construct($data);
    }

    /**
     * App id where the ad that drove the iOS Store Kit Ad Network install was
     * shown.
     *
     * Generated from protobuf field <code>optional string sk_ad_network_source_app_id = 1;</code>
     * @return string
     */
    public function getSkAdNetworkSourceAppId()
    {
        return $this->sk_ad_network_source_app_id ?? '';
    }

    public function hasSkAdNetworkSourceAppId()
    {
        return isset($this->sk_ad_network_source_app_id);
    }

    public function clearSkAdNetworkSourceAppId()
    {
        unset($this->sk_ad_network_source_app_id);
    }

    /**
     * App id where the ad that drove the iOS Store Kit Ad Network install was
     * shown.
     *
     * Generated from protobuf field <code>optional string sk_ad_network_source_app_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSkAdNetworkSourceAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->sk_ad_network_source_app_id = $var;

        return $this;
    }

}

