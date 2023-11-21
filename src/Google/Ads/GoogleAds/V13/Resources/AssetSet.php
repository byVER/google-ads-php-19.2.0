<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/resources/asset_set.proto

namespace Google\Ads\GoogleAds\V13\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An asset set representing a collection of assets.
 * Use AssetSetAsset to link an asset to the asset set.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.resources.AssetSet</code>
 */
class AssetSet extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The ID of the asset set.
     *
     * Generated from protobuf field <code>int64 id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = 0;
    /**
     * Immutable. The resource name of the asset set.
     * Asset set resource names have the form:
     * `customers/{customer_id}/assetSets/{asset_set_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Required. Name of the asset set. Required. It must have a minimum length of
     * 1 and maximum length of 128.
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Required. Immutable. The type of the asset set. Required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.AssetSetTypeEnum.AssetSetType type = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $type = 0;
    /**
     * Output only. The status of the asset set. Read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.AssetSetStatusEnum.AssetSetStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;
    /**
     * Merchant ID and Feed Label from Google Merchant Center.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.resources.AssetSet.MerchantCenterFeed merchant_center_feed = 5;</code>
     */
    protected $merchant_center_feed = null;
    /**
     * Immutable. Parent asset set id for the asset set where the elements of this
     * asset set come from. For example: the sync level location AssetSet id where
     * the the elements in LocationGroup AssetSet come from. This field is
     * required and only applicable for Location Group typed AssetSet.
     *
     * Generated from protobuf field <code>int64 location_group_parent_asset_set_id = 10 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $location_group_parent_asset_set_id = 0;
    /**
     * Output only. For Performance Max for travel goals campaigns with a Hotel
     * Center account link. Read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.resources.AssetSet.HotelPropertyData hotel_property_data = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $hotel_property_data = null;
    protected $asset_set_source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *           Output only. The ID of the asset set.
     *     @type string $resource_name
     *           Immutable. The resource name of the asset set.
     *           Asset set resource names have the form:
     *           `customers/{customer_id}/assetSets/{asset_set_id}`
     *     @type string $name
     *           Required. Name of the asset set. Required. It must have a minimum length of
     *           1 and maximum length of 128.
     *     @type int $type
     *           Required. Immutable. The type of the asset set. Required.
     *     @type int $status
     *           Output only. The status of the asset set. Read-only.
     *     @type \Google\Ads\GoogleAds\V13\Resources\AssetSet\MerchantCenterFeed $merchant_center_feed
     *           Merchant ID and Feed Label from Google Merchant Center.
     *     @type int|string $location_group_parent_asset_set_id
     *           Immutable. Parent asset set id for the asset set where the elements of this
     *           asset set come from. For example: the sync level location AssetSet id where
     *           the the elements in LocationGroup AssetSet come from. This field is
     *           required and only applicable for Location Group typed AssetSet.
     *     @type \Google\Ads\GoogleAds\V13\Resources\AssetSet\HotelPropertyData $hotel_property_data
     *           Output only. For Performance Max for travel goals campaigns with a Hotel
     *           Center account link. Read-only.
     *     @type \Google\Ads\GoogleAds\V13\Common\LocationSet $location_set
     *           Location asset set data. This will be used for sync level location
     *           set. This can only be set if AssetSet's type is LOCATION_SYNC.
     *     @type \Google\Ads\GoogleAds\V13\Common\BusinessProfileLocationGroup $business_profile_location_group
     *           Business Profile location group asset set data.
     *     @type \Google\Ads\GoogleAds\V13\Common\ChainLocationGroup $chain_location_group
     *           Represents information about a Chain dynamic location group.
     *           Only applicable if the sync level AssetSet's type is LOCATION_SYNC and
     *           sync source is chain.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Resources\AssetSet::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The ID of the asset set.
     *
     * Generated from protobuf field <code>int64 id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Output only. The ID of the asset set.
     *
     * Generated from protobuf field <code>int64 id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Immutable. The resource name of the asset set.
     * Asset set resource names have the form:
     * `customers/{customer_id}/assetSets/{asset_set_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the asset set.
     * Asset set resource names have the form:
     * `customers/{customer_id}/assetSets/{asset_set_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Required. Name of the asset set. Required. It must have a minimum length of
     * 1 and maximum length of 128.
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the asset set. Required. It must have a minimum length of
     * 1 and maximum length of 128.
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. Immutable. The type of the asset set. Required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.AssetSetTypeEnum.AssetSetType type = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. Immutable. The type of the asset set. Required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.AssetSetTypeEnum.AssetSetType type = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V13\Enums\AssetSetTypeEnum\AssetSetType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Output only. The status of the asset set. Read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.AssetSetStatusEnum.AssetSetStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. The status of the asset set. Read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.AssetSetStatusEnum.AssetSetStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V13\Enums\AssetSetStatusEnum\AssetSetStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Merchant ID and Feed Label from Google Merchant Center.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.resources.AssetSet.MerchantCenterFeed merchant_center_feed = 5;</code>
     * @return \Google\Ads\GoogleAds\V13\Resources\AssetSet\MerchantCenterFeed|null
     */
    public function getMerchantCenterFeed()
    {
        return $this->merchant_center_feed;
    }

    public function hasMerchantCenterFeed()
    {
        return isset($this->merchant_center_feed);
    }

    public function clearMerchantCenterFeed()
    {
        unset($this->merchant_center_feed);
    }

    /**
     * Merchant ID and Feed Label from Google Merchant Center.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.resources.AssetSet.MerchantCenterFeed merchant_center_feed = 5;</code>
     * @param \Google\Ads\GoogleAds\V13\Resources\AssetSet\MerchantCenterFeed $var
     * @return $this
     */
    public function setMerchantCenterFeed($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V13\Resources\AssetSet\MerchantCenterFeed::class);
        $this->merchant_center_feed = $var;

        return $this;
    }

    /**
     * Immutable. Parent asset set id for the asset set where the elements of this
     * asset set come from. For example: the sync level location AssetSet id where
     * the the elements in LocationGroup AssetSet come from. This field is
     * required and only applicable for Location Group typed AssetSet.
     *
     * Generated from protobuf field <code>int64 location_group_parent_asset_set_id = 10 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int|string
     */
    public function getLocationGroupParentAssetSetId()
    {
        return $this->location_group_parent_asset_set_id;
    }

    /**
     * Immutable. Parent asset set id for the asset set where the elements of this
     * asset set come from. For example: the sync level location AssetSet id where
     * the the elements in LocationGroup AssetSet come from. This field is
     * required and only applicable for Location Group typed AssetSet.
     *
     * Generated from protobuf field <code>int64 location_group_parent_asset_set_id = 10 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int|string $var
     * @return $this
     */
    public function setLocationGroupParentAssetSetId($var)
    {
        GPBUtil::checkInt64($var);
        $this->location_group_parent_asset_set_id = $var;

        return $this;
    }

    /**
     * Output only. For Performance Max for travel goals campaigns with a Hotel
     * Center account link. Read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.resources.AssetSet.HotelPropertyData hotel_property_data = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V13\Resources\AssetSet\HotelPropertyData|null
     */
    public function getHotelPropertyData()
    {
        return $this->hotel_property_data;
    }

    public function hasHotelPropertyData()
    {
        return isset($this->hotel_property_data);
    }

    public function clearHotelPropertyData()
    {
        unset($this->hotel_property_data);
    }

    /**
     * Output only. For Performance Max for travel goals campaigns with a Hotel
     * Center account link. Read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.resources.AssetSet.HotelPropertyData hotel_property_data = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V13\Resources\AssetSet\HotelPropertyData $var
     * @return $this
     */
    public function setHotelPropertyData($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V13\Resources\AssetSet\HotelPropertyData::class);
        $this->hotel_property_data = $var;

        return $this;
    }

    /**
     * Location asset set data. This will be used for sync level location
     * set. This can only be set if AssetSet's type is LOCATION_SYNC.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.common.LocationSet location_set = 7;</code>
     * @return \Google\Ads\GoogleAds\V13\Common\LocationSet|null
     */
    public function getLocationSet()
    {
        return $this->readOneof(7);
    }

    public function hasLocationSet()
    {
        return $this->hasOneof(7);
    }

    /**
     * Location asset set data. This will be used for sync level location
     * set. This can only be set if AssetSet's type is LOCATION_SYNC.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.common.LocationSet location_set = 7;</code>
     * @param \Google\Ads\GoogleAds\V13\Common\LocationSet $var
     * @return $this
     */
    public function setLocationSet($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V13\Common\LocationSet::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Business Profile location group asset set data.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.common.BusinessProfileLocationGroup business_profile_location_group = 8;</code>
     * @return \Google\Ads\GoogleAds\V13\Common\BusinessProfileLocationGroup|null
     */
    public function getBusinessProfileLocationGroup()
    {
        return $this->readOneof(8);
    }

    public function hasBusinessProfileLocationGroup()
    {
        return $this->hasOneof(8);
    }

    /**
     * Business Profile location group asset set data.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.common.BusinessProfileLocationGroup business_profile_location_group = 8;</code>
     * @param \Google\Ads\GoogleAds\V13\Common\BusinessProfileLocationGroup $var
     * @return $this
     */
    public function setBusinessProfileLocationGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V13\Common\BusinessProfileLocationGroup::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Represents information about a Chain dynamic location group.
     * Only applicable if the sync level AssetSet's type is LOCATION_SYNC and
     * sync source is chain.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.common.ChainLocationGroup chain_location_group = 9;</code>
     * @return \Google\Ads\GoogleAds\V13\Common\ChainLocationGroup|null
     */
    public function getChainLocationGroup()
    {
        return $this->readOneof(9);
    }

    public function hasChainLocationGroup()
    {
        return $this->hasOneof(9);
    }

    /**
     * Represents information about a Chain dynamic location group.
     * Only applicable if the sync level AssetSet's type is LOCATION_SYNC and
     * sync source is chain.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.common.ChainLocationGroup chain_location_group = 9;</code>
     * @param \Google\Ads\GoogleAds\V13\Common\ChainLocationGroup $var
     * @return $this
     */
    public function setChainLocationGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V13\Common\ChainLocationGroup::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAssetSetSource()
    {
        return $this->whichOneof("asset_set_source");
    }

}
