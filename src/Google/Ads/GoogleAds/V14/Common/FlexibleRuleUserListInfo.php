<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/common/user_lists.proto

namespace Google\Ads\GoogleAds\V14\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Flexible rule representation of visitors with one or multiple actions. The
 * flexible user list is defined by two lists of operands – inclusive_operands
 * and exclusive_operands; each operand represents a set of users based on
 * actions they took in a given timeframe. These lists of operands are combined
 * with the AND_NOT operator, so that users represented by the inclusive
 * operands are included in the user list, minus the users represented by the
 * exclusive operands.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.common.FlexibleRuleUserListInfo</code>
 */
class FlexibleRuleUserListInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Operator that defines how the inclusive operands are combined.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.UserListFlexibleRuleOperatorEnum.UserListFlexibleRuleOperator inclusive_rule_operator = 1;</code>
     */
    protected $inclusive_rule_operator = 0;
    /**
     * Rules representing users that should be included in the user list. These
     * are located on the left side of the AND_NOT operator, and joined together
     * by either AND/OR as specified by the inclusive_rule_operator.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.FlexibleRuleOperandInfo inclusive_operands = 2;</code>
     */
    private $inclusive_operands;
    /**
     * Rules representing users that should be excluded from the user list. These
     * are located on the right side of the AND_NOT operator, and joined together
     * by OR.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.FlexibleRuleOperandInfo exclusive_operands = 3;</code>
     */
    private $exclusive_operands;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $inclusive_rule_operator
     *           Operator that defines how the inclusive operands are combined.
     *     @type array<\Google\Ads\GoogleAds\V14\Common\FlexibleRuleOperandInfo>|\Google\Protobuf\Internal\RepeatedField $inclusive_operands
     *           Rules representing users that should be included in the user list. These
     *           are located on the left side of the AND_NOT operator, and joined together
     *           by either AND/OR as specified by the inclusive_rule_operator.
     *     @type array<\Google\Ads\GoogleAds\V14\Common\FlexibleRuleOperandInfo>|\Google\Protobuf\Internal\RepeatedField $exclusive_operands
     *           Rules representing users that should be excluded from the user list. These
     *           are located on the right side of the AND_NOT operator, and joined together
     *           by OR.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Common\UserLists::initOnce();
        parent::__construct($data);
    }

    /**
     * Operator that defines how the inclusive operands are combined.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.UserListFlexibleRuleOperatorEnum.UserListFlexibleRuleOperator inclusive_rule_operator = 1;</code>
     * @return int
     */
    public function getInclusiveRuleOperator()
    {
        return $this->inclusive_rule_operator;
    }

    /**
     * Operator that defines how the inclusive operands are combined.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.UserListFlexibleRuleOperatorEnum.UserListFlexibleRuleOperator inclusive_rule_operator = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setInclusiveRuleOperator($var)
    {
        GPBUtil::checkEnum($var);
        $this->inclusive_rule_operator = $var;

        return $this;
    }

    /**
     * Rules representing users that should be included in the user list. These
     * are located on the left side of the AND_NOT operator, and joined together
     * by either AND/OR as specified by the inclusive_rule_operator.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.FlexibleRuleOperandInfo inclusive_operands = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInclusiveOperands()
    {
        return $this->inclusive_operands;
    }

    /**
     * Rules representing users that should be included in the user list. These
     * are located on the left side of the AND_NOT operator, and joined together
     * by either AND/OR as specified by the inclusive_rule_operator.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.FlexibleRuleOperandInfo inclusive_operands = 2;</code>
     * @param array<\Google\Ads\GoogleAds\V14\Common\FlexibleRuleOperandInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInclusiveOperands($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V14\Common\FlexibleRuleOperandInfo::class);
        $this->inclusive_operands = $arr;

        return $this;
    }

    /**
     * Rules representing users that should be excluded from the user list. These
     * are located on the right side of the AND_NOT operator, and joined together
     * by OR.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.FlexibleRuleOperandInfo exclusive_operands = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExclusiveOperands()
    {
        return $this->exclusive_operands;
    }

    /**
     * Rules representing users that should be excluded from the user list. These
     * are located on the right side of the AND_NOT operator, and joined together
     * by OR.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.FlexibleRuleOperandInfo exclusive_operands = 3;</code>
     * @param array<\Google\Ads\GoogleAds\V14\Common\FlexibleRuleOperandInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExclusiveOperands($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V14\Common\FlexibleRuleOperandInfo::class);
        $this->exclusive_operands = $arr;

        return $this;
    }

}

