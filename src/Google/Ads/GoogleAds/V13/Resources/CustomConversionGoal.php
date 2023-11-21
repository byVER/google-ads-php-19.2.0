<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/resources/custom_conversion_goal.proto

namespace Google\Ads\GoogleAds\V13\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Custom conversion goal that can make arbitrary conversion actions biddable.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.resources.CustomConversionGoal</code>
 */
class CustomConversionGoal extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the custom conversion goal.
     * Custom conversion goal resource names have the form:
     * `customers/{customer_id}/customConversionGoals/{goal_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Immutable. The ID for this custom conversion goal.
     *
     * Generated from protobuf field <code>int64 id = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $id = 0;
    /**
     * The name for this custom conversion goal.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     */
    protected $name = '';
    /**
     * Conversion actions that the custom conversion goal makes biddable.
     *
     * Generated from protobuf field <code>repeated string conversion_actions = 4 [(.google.api.resource_reference) = {</code>
     */
    private $conversion_actions;
    /**
     * The status of the custom conversion goal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.CustomConversionGoalStatusEnum.CustomConversionGoalStatus status = 5;</code>
     */
    protected $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the custom conversion goal.
     *           Custom conversion goal resource names have the form:
     *           `customers/{customer_id}/customConversionGoals/{goal_id}`
     *     @type int|string $id
     *           Immutable. The ID for this custom conversion goal.
     *     @type string $name
     *           The name for this custom conversion goal.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $conversion_actions
     *           Conversion actions that the custom conversion goal makes biddable.
     *     @type int $status
     *           The status of the custom conversion goal.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Resources\CustomConversionGoal::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the custom conversion goal.
     * Custom conversion goal resource names have the form:
     * `customers/{customer_id}/customConversionGoals/{goal_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the custom conversion goal.
     * Custom conversion goal resource names have the form:
     * `customers/{customer_id}/customConversionGoals/{goal_id}`
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
     * Immutable. The ID for this custom conversion goal.
     *
     * Generated from protobuf field <code>int64 id = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Immutable. The ID for this custom conversion goal.
     *
     * Generated from protobuf field <code>int64 id = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
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
     * The name for this custom conversion goal.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name for this custom conversion goal.
     *
     * Generated from protobuf field <code>string name = 3;</code>
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
     * Conversion actions that the custom conversion goal makes biddable.
     *
     * Generated from protobuf field <code>repeated string conversion_actions = 4 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConversionActions()
    {
        return $this->conversion_actions;
    }

    /**
     * Conversion actions that the custom conversion goal makes biddable.
     *
     * Generated from protobuf field <code>repeated string conversion_actions = 4 [(.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConversionActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->conversion_actions = $arr;

        return $this;
    }

    /**
     * The status of the custom conversion goal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.CustomConversionGoalStatusEnum.CustomConversionGoalStatus status = 5;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the custom conversion goal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.CustomConversionGoalStatusEnum.CustomConversionGoalStatus status = 5;</code>
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

