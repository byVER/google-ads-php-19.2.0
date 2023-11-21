<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/resources/ad_group_asset.proto

namespace Google\Ads\GoogleAds\V12\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A link between an ad group and an asset.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.resources.AdGroupAsset</code>
 */
class AdGroupAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the ad group asset.
     * AdGroupAsset resource names have the form:
     * `customers/{customer_id}/adGroupAssets/{ad_group_id}~{asset_id}~{field_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Required. Immutable. The ad group to which the asset is linked.
     *
     * Generated from protobuf field <code>string ad_group = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $ad_group = '';
    /**
     * Required. Immutable. The asset which is linked to the ad group.
     *
     * Generated from protobuf field <code>string asset = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $asset = '';
    /**
     * Required. Immutable. Role that the asset takes under the linked ad group.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.AssetFieldTypeEnum.AssetFieldType field_type = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $field_type = 0;
    /**
     * Output only. Source of the adgroup asset link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.AssetSourceEnum.AssetSource source = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $source = 0;
    /**
     * Status of the ad group asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.AssetLinkStatusEnum.AssetLinkStatus status = 5;</code>
     */
    protected $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the ad group asset.
     *           AdGroupAsset resource names have the form:
     *           `customers/{customer_id}/adGroupAssets/{ad_group_id}~{asset_id}~{field_type}`
     *     @type string $ad_group
     *           Required. Immutable. The ad group to which the asset is linked.
     *     @type string $asset
     *           Required. Immutable. The asset which is linked to the ad group.
     *     @type int $field_type
     *           Required. Immutable. Role that the asset takes under the linked ad group.
     *     @type int $source
     *           Output only. Source of the adgroup asset link.
     *     @type int $status
     *           Status of the ad group asset.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Resources\AdGroupAsset::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the ad group asset.
     * AdGroupAsset resource names have the form:
     * `customers/{customer_id}/adGroupAssets/{ad_group_id}~{asset_id}~{field_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the ad group asset.
     * AdGroupAsset resource names have the form:
     * `customers/{customer_id}/adGroupAssets/{ad_group_id}~{asset_id}~{field_type}`
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
     * Required. Immutable. The ad group to which the asset is linked.
     *
     * Generated from protobuf field <code>string ad_group = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAdGroup()
    {
        return $this->ad_group;
    }

    /**
     * Required. Immutable. The ad group to which the asset is linked.
     *
     * Generated from protobuf field <code>string ad_group = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAdGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->ad_group = $var;

        return $this;
    }

    /**
     * Required. Immutable. The asset which is linked to the ad group.
     *
     * Generated from protobuf field <code>string asset = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAsset()
    {
        return $this->asset;
    }

    /**
     * Required. Immutable. The asset which is linked to the ad group.
     *
     * Generated from protobuf field <code>string asset = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAsset($var)
    {
        GPBUtil::checkString($var, True);
        $this->asset = $var;

        return $this;
    }

    /**
     * Required. Immutable. Role that the asset takes under the linked ad group.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.AssetFieldTypeEnum.AssetFieldType field_type = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getFieldType()
    {
        return $this->field_type;
    }

    /**
     * Required. Immutable. Role that the asset takes under the linked ad group.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.AssetFieldTypeEnum.AssetFieldType field_type = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setFieldType($var)
    {
        GPBUtil::checkEnum($var);
        $this->field_type = $var;

        return $this;
    }

    /**
     * Output only. Source of the adgroup asset link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.AssetSourceEnum.AssetSource source = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Output only. Source of the adgroup asset link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.AssetSourceEnum.AssetSource source = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkEnum($var);
        $this->source = $var;

        return $this;
    }

    /**
     * Status of the ad group asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.AssetLinkStatusEnum.AssetLinkStatus status = 5;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status of the ad group asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.AssetLinkStatusEnum.AssetLinkStatus status = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var);
        $this->status = $var;

        return $this;
    }

}

