<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/ad_group_ad_asset_view.proto

namespace Google\Ads\GoogleAds\V14\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A link between an AdGroupAd and an Asset.
 * Currently we only support AdGroupAdAssetView for AppAds and Responsive Search
 * Ads.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.AdGroupAdAssetView</code>
 */
class AdGroupAdAssetView extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the ad group ad asset view.
     * Ad group ad asset view resource names have the form (Before V4):
     * `customers/{customer_id}/adGroupAdAssets/{AdGroupAdAsset.ad_group_id}~{AdGroupAdAsset.ad.ad_id}~{AdGroupAdAsset.asset_id}~{AdGroupAdAsset.field_type}`
     * Ad group ad asset view resource names have the form (Beginning from V4):
     * `customers/{customer_id}/adGroupAdAssetViews/{AdGroupAdAsset.ad_group_id}~{AdGroupAdAsset.ad_id}~{AdGroupAdAsset.asset_id}~{AdGroupAdAsset.field_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ad group ad to which the asset is linked.
     *
     * Generated from protobuf field <code>optional string ad_group_ad = 9 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $ad_group_ad = null;
    /**
     * Output only. The asset which is linked to the ad group ad.
     *
     * Generated from protobuf field <code>optional string asset = 10 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $asset = null;
    /**
     * Output only. Role that the asset takes in the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.AssetFieldTypeEnum.AssetFieldType field_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $field_type = 0;
    /**
     * Output only. The status between the asset and the latest version of the ad.
     * If true, the asset is linked to the latest version of the ad. If false, it
     * means the link once existed but has been removed and is no longer present
     * in the latest version of the ad.
     *
     * Generated from protobuf field <code>optional bool enabled = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $enabled = null;
    /**
     * Output only. Policy information for the ad group ad asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.resources.AdGroupAdAssetPolicySummary policy_summary = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $policy_summary = null;
    /**
     * Output only. Performance of an asset linkage.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.AssetPerformanceLabelEnum.AssetPerformanceLabel performance_label = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $performance_label = 0;
    /**
     * Output only. Pinned field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ServedAssetFieldTypeEnum.ServedAssetFieldType pinned_field = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $pinned_field = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the ad group ad asset view.
     *           Ad group ad asset view resource names have the form (Before V4):
     *           `customers/{customer_id}/adGroupAdAssets/{AdGroupAdAsset.ad_group_id}~{AdGroupAdAsset.ad.ad_id}~{AdGroupAdAsset.asset_id}~{AdGroupAdAsset.field_type}`
     *           Ad group ad asset view resource names have the form (Beginning from V4):
     *           `customers/{customer_id}/adGroupAdAssetViews/{AdGroupAdAsset.ad_group_id}~{AdGroupAdAsset.ad_id}~{AdGroupAdAsset.asset_id}~{AdGroupAdAsset.field_type}`
     *     @type string $ad_group_ad
     *           Output only. The ad group ad to which the asset is linked.
     *     @type string $asset
     *           Output only. The asset which is linked to the ad group ad.
     *     @type int $field_type
     *           Output only. Role that the asset takes in the ad.
     *     @type bool $enabled
     *           Output only. The status between the asset and the latest version of the ad.
     *           If true, the asset is linked to the latest version of the ad. If false, it
     *           means the link once existed but has been removed and is no longer present
     *           in the latest version of the ad.
     *     @type \Google\Ads\GoogleAds\V14\Resources\AdGroupAdAssetPolicySummary $policy_summary
     *           Output only. Policy information for the ad group ad asset.
     *     @type int $performance_label
     *           Output only. Performance of an asset linkage.
     *     @type int $pinned_field
     *           Output only. Pinned field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\AdGroupAdAssetView::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the ad group ad asset view.
     * Ad group ad asset view resource names have the form (Before V4):
     * `customers/{customer_id}/adGroupAdAssets/{AdGroupAdAsset.ad_group_id}~{AdGroupAdAsset.ad.ad_id}~{AdGroupAdAsset.asset_id}~{AdGroupAdAsset.field_type}`
     * Ad group ad asset view resource names have the form (Beginning from V4):
     * `customers/{customer_id}/adGroupAdAssetViews/{AdGroupAdAsset.ad_group_id}~{AdGroupAdAsset.ad_id}~{AdGroupAdAsset.asset_id}~{AdGroupAdAsset.field_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the ad group ad asset view.
     * Ad group ad asset view resource names have the form (Before V4):
     * `customers/{customer_id}/adGroupAdAssets/{AdGroupAdAsset.ad_group_id}~{AdGroupAdAsset.ad.ad_id}~{AdGroupAdAsset.asset_id}~{AdGroupAdAsset.field_type}`
     * Ad group ad asset view resource names have the form (Beginning from V4):
     * `customers/{customer_id}/adGroupAdAssetViews/{AdGroupAdAsset.ad_group_id}~{AdGroupAdAsset.ad_id}~{AdGroupAdAsset.asset_id}~{AdGroupAdAsset.field_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. The ad group ad to which the asset is linked.
     *
     * Generated from protobuf field <code>optional string ad_group_ad = 9 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAdGroupAd()
    {
        return $this->ad_group_ad ?? '';
    }

    public function hasAdGroupAd()
    {
        return isset($this->ad_group_ad);
    }

    public function clearAdGroupAd()
    {
        unset($this->ad_group_ad);
    }

    /**
     * Output only. The ad group ad to which the asset is linked.
     *
     * Generated from protobuf field <code>optional string ad_group_ad = 9 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAdGroupAd($var)
    {
        GPBUtil::checkString($var, True);
        $this->ad_group_ad = $var;

        return $this;
    }

    /**
     * Output only. The asset which is linked to the ad group ad.
     *
     * Generated from protobuf field <code>optional string asset = 10 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. The asset which is linked to the ad group ad.
     *
     * Generated from protobuf field <code>optional string asset = 10 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. Role that the asset takes in the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.AssetFieldTypeEnum.AssetFieldType field_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getFieldType()
    {
        return $this->field_type;
    }

    /**
     * Output only. Role that the asset takes in the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.AssetFieldTypeEnum.AssetFieldType field_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The status between the asset and the latest version of the ad.
     * If true, the asset is linked to the latest version of the ad. If false, it
     * means the link once existed but has been removed and is no longer present
     * in the latest version of the ad.
     *
     * Generated from protobuf field <code>optional bool enabled = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled ?? false;
    }

    public function hasEnabled()
    {
        return isset($this->enabled);
    }

    public function clearEnabled()
    {
        unset($this->enabled);
    }

    /**
     * Output only. The status between the asset and the latest version of the ad.
     * If true, the asset is linked to the latest version of the ad. If false, it
     * means the link once existed but has been removed and is no longer present
     * in the latest version of the ad.
     *
     * Generated from protobuf field <code>optional bool enabled = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

    /**
     * Output only. Policy information for the ad group ad asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.resources.AdGroupAdAssetPolicySummary policy_summary = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V14\Resources\AdGroupAdAssetPolicySummary|null
     */
    public function getPolicySummary()
    {
        return $this->policy_summary;
    }

    public function hasPolicySummary()
    {
        return isset($this->policy_summary);
    }

    public function clearPolicySummary()
    {
        unset($this->policy_summary);
    }

    /**
     * Output only. Policy information for the ad group ad asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.resources.AdGroupAdAssetPolicySummary policy_summary = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V14\Resources\AdGroupAdAssetPolicySummary $var
     * @return $this
     */
    public function setPolicySummary($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V14\Resources\AdGroupAdAssetPolicySummary::class);
        $this->policy_summary = $var;

        return $this;
    }

    /**
     * Output only. Performance of an asset linkage.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.AssetPerformanceLabelEnum.AssetPerformanceLabel performance_label = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getPerformanceLabel()
    {
        return $this->performance_label;
    }

    /**
     * Output only. Performance of an asset linkage.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.AssetPerformanceLabelEnum.AssetPerformanceLabel performance_label = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setPerformanceLabel($var)
    {
        GPBUtil::checkEnum($var);
        $this->performance_label = $var;

        return $this;
    }

    /**
     * Output only. Pinned field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ServedAssetFieldTypeEnum.ServedAssetFieldType pinned_field = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getPinnedField()
    {
        return $this->pinned_field;
    }

    /**
     * Output only. Pinned field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ServedAssetFieldTypeEnum.ServedAssetFieldType pinned_field = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setPinnedField($var)
    {
        GPBUtil::checkEnum($var);
        $this->pinned_field = $var;

        return $this;
    }

}

