<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/audience.proto

namespace Google\Ads\GoogleAds\V14\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Audience is an effective targeting option that lets you
 * intersect different segment attributes, such as detailed demographics and
 * affinities, to create audiences that represent sections of your target
 * segments.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.Audience</code>
 */
class Audience extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the audience.
     * Audience names have the form:
     * `customers/{customer_id}/audiences/{audience_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. ID of the audience.
     *
     * Generated from protobuf field <code>int64 id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = 0;
    /**
     * Output only. Status of this audience. Indicates whether the audience
     * is enabled or removed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.AudienceStatusEnum.AudienceStatus status = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;
    /**
     * Required. Name of the audience. It should be unique across all
     * audiences. It must have a minimum length of 1 and
     * maximum length of 255.
     *
     * Generated from protobuf field <code>string name = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Description of this audience.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     */
    protected $description = '';
    /**
     * Positive dimensions specifying the audience composition.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.AudienceDimension dimensions = 6;</code>
     */
    private $dimensions;
    /**
     * Negative dimension specifying the audience composition.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.AudienceExclusionDimension exclusion_dimension = 7;</code>
     */
    protected $exclusion_dimension = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the audience.
     *           Audience names have the form:
     *           `customers/{customer_id}/audiences/{audience_id}`
     *     @type int|string $id
     *           Output only. ID of the audience.
     *     @type int $status
     *           Output only. Status of this audience. Indicates whether the audience
     *           is enabled or removed.
     *     @type string $name
     *           Required. Name of the audience. It should be unique across all
     *           audiences. It must have a minimum length of 1 and
     *           maximum length of 255.
     *     @type string $description
     *           Description of this audience.
     *     @type array<\Google\Ads\GoogleAds\V14\Common\AudienceDimension>|\Google\Protobuf\Internal\RepeatedField $dimensions
     *           Positive dimensions specifying the audience composition.
     *     @type \Google\Ads\GoogleAds\V14\Common\AudienceExclusionDimension $exclusion_dimension
     *           Negative dimension specifying the audience composition.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\Audience::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the audience.
     * Audience names have the form:
     * `customers/{customer_id}/audiences/{audience_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the audience.
     * Audience names have the form:
     * `customers/{customer_id}/audiences/{audience_id}`
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
     * Output only. ID of the audience.
     *
     * Generated from protobuf field <code>int64 id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Output only. ID of the audience.
     *
     * Generated from protobuf field <code>int64 id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Status of this audience. Indicates whether the audience
     * is enabled or removed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.AudienceStatusEnum.AudienceStatus status = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. Status of this audience. Indicates whether the audience
     * is enabled or removed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.AudienceStatusEnum.AudienceStatus status = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var);
        $this->status = $var;

        return $this;
    }

    /**
     * Required. Name of the audience. It should be unique across all
     * audiences. It must have a minimum length of 1 and
     * maximum length of 255.
     *
     * Generated from protobuf field <code>string name = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the audience. It should be unique across all
     * audiences. It must have a minimum length of 1 and
     * maximum length of 255.
     *
     * Generated from protobuf field <code>string name = 4 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Description of this audience.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of this audience.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Positive dimensions specifying the audience composition.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.AudienceDimension dimensions = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * Positive dimensions specifying the audience composition.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.AudienceDimension dimensions = 6;</code>
     * @param array<\Google\Ads\GoogleAds\V14\Common\AudienceDimension>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDimensions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V14\Common\AudienceDimension::class);
        $this->dimensions = $arr;

        return $this;
    }

    /**
     * Negative dimension specifying the audience composition.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.AudienceExclusionDimension exclusion_dimension = 7;</code>
     * @return \Google\Ads\GoogleAds\V14\Common\AudienceExclusionDimension|null
     */
    public function getExclusionDimension()
    {
        return $this->exclusion_dimension;
    }

    public function hasExclusionDimension()
    {
        return isset($this->exclusion_dimension);
    }

    public function clearExclusionDimension()
    {
        unset($this->exclusion_dimension);
    }

    /**
     * Negative dimension specifying the audience composition.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.AudienceExclusionDimension exclusion_dimension = 7;</code>
     * @param \Google\Ads\GoogleAds\V14\Common\AudienceExclusionDimension $var
     * @return $this
     */
    public function setExclusionDimension($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V14\Common\AudienceExclusionDimension::class);
        $this->exclusion_dimension = $var;

        return $this;
    }

}

