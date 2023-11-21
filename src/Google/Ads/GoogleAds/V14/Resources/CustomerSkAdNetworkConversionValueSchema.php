<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/customer_sk_ad_network_conversion_value_schema.proto

namespace Google\Ads\GoogleAds\V14\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A CustomerSkAdNetworkConversionValueSchema.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.CustomerSkAdNetworkConversionValueSchema</code>
 */
class CustomerSkAdNetworkConversionValueSchema extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the schema.
     * CustomerSkAdNetworkConversionValueSchema resource names have the form:
     * customers/{customer_id}/customerSkAdNetworkConversionValueSchemas/{account_link_id}
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The schema for the specified resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.resources.CustomerSkAdNetworkConversionValueSchema.SkAdNetworkConversionValueSchema schema = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $schema = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the schema.
     *           CustomerSkAdNetworkConversionValueSchema resource names have the form:
     *           customers/{customer_id}/customerSkAdNetworkConversionValueSchemas/{account_link_id}
     *     @type \Google\Ads\GoogleAds\V14\Resources\CustomerSkAdNetworkConversionValueSchema\SkAdNetworkConversionValueSchema $schema
     *           Output only. The schema for the specified resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\CustomerSkAdNetworkConversionValueSchema::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the schema.
     * CustomerSkAdNetworkConversionValueSchema resource names have the form:
     * customers/{customer_id}/customerSkAdNetworkConversionValueSchemas/{account_link_id}
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the schema.
     * CustomerSkAdNetworkConversionValueSchema resource names have the form:
     * customers/{customer_id}/customerSkAdNetworkConversionValueSchemas/{account_link_id}
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
     * Output only. The schema for the specified resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.resources.CustomerSkAdNetworkConversionValueSchema.SkAdNetworkConversionValueSchema schema = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V14\Resources\CustomerSkAdNetworkConversionValueSchema\SkAdNetworkConversionValueSchema|null
     */
    public function getSchema()
    {
        return $this->schema;
    }

    public function hasSchema()
    {
        return isset($this->schema);
    }

    public function clearSchema()
    {
        unset($this->schema);
    }

    /**
     * Output only. The schema for the specified resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.resources.CustomerSkAdNetworkConversionValueSchema.SkAdNetworkConversionValueSchema schema = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V14\Resources\CustomerSkAdNetworkConversionValueSchema\SkAdNetworkConversionValueSchema $var
     * @return $this
     */
    public function setSchema($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V14\Resources\CustomerSkAdNetworkConversionValueSchema\SkAdNetworkConversionValueSchema::class);
        $this->schema = $var;

        return $this;
    }

}

