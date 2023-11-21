<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/common/ad_asset.proto

namespace Google\Ads\GoogleAds\V14\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A discovery carousel card asset used inside an ad.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.common.AdDiscoveryCarouselCardAsset</code>
 */
class AdDiscoveryCarouselCardAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * The Asset resource name of this discovery carousel card.
     *
     * Generated from protobuf field <code>optional string asset = 1;</code>
     */
    protected $asset = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $asset
     *           The Asset resource name of this discovery carousel card.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Common\AdAsset::initOnce();
        parent::__construct($data);
    }

    /**
     * The Asset resource name of this discovery carousel card.
     *
     * Generated from protobuf field <code>optional string asset = 1;</code>
     * @return string
     */
    public function getAsset()
    {
        return $this->asset ?? '';
    }

    public function hasAsset()
    {
        return isset($this->asset);
    }

    public function clearAsset()
    {
        unset($this->asset);
    }

    /**
     * The Asset resource name of this discovery carousel card.
     *
     * Generated from protobuf field <code>optional string asset = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAsset($var)
    {
        GPBUtil::checkString($var, True);
        $this->asset = $var;

        return $this;
    }

}

