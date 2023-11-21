<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/resources/custom_audience.proto

namespace Google\Ads\GoogleAds\V12\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A custom audience. This is a list of users by interest.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.resources.CustomAudience</code>
 */
class CustomAudience extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the custom audience.
     * Custom audience resource names have the form:
     * `customers/{customer_id}/customAudiences/{custom_audience_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. ID of the custom audience.
     *
     * Generated from protobuf field <code>int64 id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = 0;
    /**
     * Output only. Status of this custom audience. Indicates whether the custom audience is
     * enabled or removed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.CustomAudienceStatusEnum.CustomAudienceStatus status = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;
    /**
     * Name of the custom audience. It should be unique for all custom audiences
     * created by a customer.
     * This field is required for creating operations.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     */
    protected $name = '';
    /**
     * Type of the custom audience.
     * ("INTEREST" OR "PURCHASE_INTENT" is not allowed for newly created custom
     * audience but kept for existing audiences)
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.CustomAudienceTypeEnum.CustomAudienceType type = 5;</code>
     */
    protected $type = 0;
    /**
     * Description of this custom audience.
     *
     * Generated from protobuf field <code>string description = 6;</code>
     */
    protected $description = '';
    /**
     * List of custom audience members that this custom audience is composed of.
     * Members can be added during CustomAudience creation. If members are
     * presented in UPDATE operation, existing members will be overridden.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.resources.CustomAudienceMember members = 7;</code>
     */
    private $members;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the custom audience.
     *           Custom audience resource names have the form:
     *           `customers/{customer_id}/customAudiences/{custom_audience_id}`
     *     @type int|string $id
     *           Output only. ID of the custom audience.
     *     @type int $status
     *           Output only. Status of this custom audience. Indicates whether the custom audience is
     *           enabled or removed.
     *     @type string $name
     *           Name of the custom audience. It should be unique for all custom audiences
     *           created by a customer.
     *           This field is required for creating operations.
     *     @type int $type
     *           Type of the custom audience.
     *           ("INTEREST" OR "PURCHASE_INTENT" is not allowed for newly created custom
     *           audience but kept for existing audiences)
     *     @type string $description
     *           Description of this custom audience.
     *     @type array<\Google\Ads\GoogleAds\V12\Resources\CustomAudienceMember>|\Google\Protobuf\Internal\RepeatedField $members
     *           List of custom audience members that this custom audience is composed of.
     *           Members can be added during CustomAudience creation. If members are
     *           presented in UPDATE operation, existing members will be overridden.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Resources\CustomAudience::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the custom audience.
     * Custom audience resource names have the form:
     * `customers/{customer_id}/customAudiences/{custom_audience_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the custom audience.
     * Custom audience resource names have the form:
     * `customers/{customer_id}/customAudiences/{custom_audience_id}`
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
     * Output only. ID of the custom audience.
     *
     * Generated from protobuf field <code>int64 id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Output only. ID of the custom audience.
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
     * Output only. Status of this custom audience. Indicates whether the custom audience is
     * enabled or removed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.CustomAudienceStatusEnum.CustomAudienceStatus status = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. Status of this custom audience. Indicates whether the custom audience is
     * enabled or removed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.CustomAudienceStatusEnum.CustomAudienceStatus status = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V12\Enums\CustomAudienceStatusEnum\CustomAudienceStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Name of the custom audience. It should be unique for all custom audiences
     * created by a customer.
     * This field is required for creating operations.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the custom audience. It should be unique for all custom audiences
     * created by a customer.
     * This field is required for creating operations.
     *
     * Generated from protobuf field <code>string name = 4;</code>
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
     * Type of the custom audience.
     * ("INTEREST" OR "PURCHASE_INTENT" is not allowed for newly created custom
     * audience but kept for existing audiences)
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.CustomAudienceTypeEnum.CustomAudienceType type = 5;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of the custom audience.
     * ("INTEREST" OR "PURCHASE_INTENT" is not allowed for newly created custom
     * audience but kept for existing audiences)
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.CustomAudienceTypeEnum.CustomAudienceType type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V12\Enums\CustomAudienceTypeEnum\CustomAudienceType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Description of this custom audience.
     *
     * Generated from protobuf field <code>string description = 6;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of this custom audience.
     *
     * Generated from protobuf field <code>string description = 6;</code>
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
     * List of custom audience members that this custom audience is composed of.
     * Members can be added during CustomAudience creation. If members are
     * presented in UPDATE operation, existing members will be overridden.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.resources.CustomAudienceMember members = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * List of custom audience members that this custom audience is composed of.
     * Members can be added during CustomAudience creation. If members are
     * presented in UPDATE operation, existing members will be overridden.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.resources.CustomAudienceMember members = 7;</code>
     * @param array<\Google\Ads\GoogleAds\V12\Resources\CustomAudienceMember>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMembers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V12\Resources\CustomAudienceMember::class);
        $this->members = $arr;

        return $this;
    }

}

