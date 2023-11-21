<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/resources/customer_asset_set.proto

namespace Google\Ads\GoogleAds\V12\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CustomerAssetSet is the linkage between a customer and an asset set.
 * Adding a CustomerAssetSet links an asset set with a customer.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.resources.CustomerAssetSet</code>
 */
class CustomerAssetSet extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the customer asset set.
     * Asset set asset resource names have the form:
     * `customers/{customer_id}/customerAssetSets/{asset_set_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Immutable. The asset set which is linked to the customer.
     *
     * Generated from protobuf field <code>string asset_set = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $asset_set = '';
    /**
     * Immutable. The customer to which this asset set is linked.
     *
     * Generated from protobuf field <code>string customer = 3 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $customer = '';
    /**
     * Output only. The status of the customer asset set asset. Read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.AssetSetLinkStatusEnum.AssetSetLinkStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the customer asset set.
     *           Asset set asset resource names have the form:
     *           `customers/{customer_id}/customerAssetSets/{asset_set_id}`
     *     @type string $asset_set
     *           Immutable. The asset set which is linked to the customer.
     *     @type string $customer
     *           Immutable. The customer to which this asset set is linked.
     *     @type int $status
     *           Output only. The status of the customer asset set asset. Read-only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Resources\CustomerAssetSet::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the customer asset set.
     * Asset set asset resource names have the form:
     * `customers/{customer_id}/customerAssetSets/{asset_set_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the customer asset set.
     * Asset set asset resource names have the form:
     * `customers/{customer_id}/customerAssetSets/{asset_set_id}`
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
     * Immutable. The asset set which is linked to the customer.
     *
     * Generated from protobuf field <code>string asset_set = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAssetSet()
    {
        return $this->asset_set;
    }

    /**
     * Immutable. The asset set which is linked to the customer.
     *
     * Generated from protobuf field <code>string asset_set = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAssetSet($var)
    {
        GPBUtil::checkString($var, True);
        $this->asset_set = $var;

        return $this;
    }

    /**
     * Immutable. The customer to which this asset set is linked.
     *
     * Generated from protobuf field <code>string customer = 3 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Immutable. The customer to which this asset set is linked.
     *
     * Generated from protobuf field <code>string customer = 3 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCustomer($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer = $var;

        return $this;
    }

    /**
     * Output only. The status of the customer asset set asset. Read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.AssetSetLinkStatusEnum.AssetSetLinkStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. The status of the customer asset set asset. Read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.AssetSetLinkStatusEnum.AssetSetLinkStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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

