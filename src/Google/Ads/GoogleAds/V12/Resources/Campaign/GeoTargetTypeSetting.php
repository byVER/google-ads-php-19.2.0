<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/resources/campaign.proto

namespace Google\Ads\GoogleAds\V12\Resources\Campaign;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a collection of settings related to ads geotargeting.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.resources.Campaign.GeoTargetTypeSetting</code>
 */
class GeoTargetTypeSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * The setting used for positive geotargeting in this particular campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.PositiveGeoTargetTypeEnum.PositiveGeoTargetType positive_geo_target_type = 1;</code>
     */
    protected $positive_geo_target_type = 0;
    /**
     * The setting used for negative geotargeting in this particular campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.NegativeGeoTargetTypeEnum.NegativeGeoTargetType negative_geo_target_type = 2;</code>
     */
    protected $negative_geo_target_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $positive_geo_target_type
     *           The setting used for positive geotargeting in this particular campaign.
     *     @type int $negative_geo_target_type
     *           The setting used for negative geotargeting in this particular campaign.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Resources\Campaign::initOnce();
        parent::__construct($data);
    }

    /**
     * The setting used for positive geotargeting in this particular campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.PositiveGeoTargetTypeEnum.PositiveGeoTargetType positive_geo_target_type = 1;</code>
     * @return int
     */
    public function getPositiveGeoTargetType()
    {
        return $this->positive_geo_target_type;
    }

    /**
     * The setting used for positive geotargeting in this particular campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.PositiveGeoTargetTypeEnum.PositiveGeoTargetType positive_geo_target_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPositiveGeoTargetType($var)
    {
        GPBUtil::checkEnum($var);
        $this->positive_geo_target_type = $var;

        return $this;
    }

    /**
     * The setting used for negative geotargeting in this particular campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.NegativeGeoTargetTypeEnum.NegativeGeoTargetType negative_geo_target_type = 2;</code>
     * @return int
     */
    public function getNegativeGeoTargetType()
    {
        return $this->negative_geo_target_type;
    }

    /**
     * The setting used for negative geotargeting in this particular campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.NegativeGeoTargetTypeEnum.NegativeGeoTargetType negative_geo_target_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNegativeGeoTargetType($var)
    {
        GPBUtil::checkEnum($var);
        $this->negative_geo_target_type = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GeoTargetTypeSetting::class, \Google\Ads\GoogleAds\V12\Resources\Campaign_GeoTargetTypeSetting::class);

