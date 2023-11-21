<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/enums/user_list_flexible_rule_operator.proto

namespace Google\Ads\GoogleAds\V12\Enums\UserListFlexibleRuleOperatorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible user list combined rule operators.
 *
 * Protobuf type <code>google.ads.googleads.v12.enums.UserListFlexibleRuleOperatorEnum.UserListFlexibleRuleOperator</code>
 */
class UserListFlexibleRuleOperator
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * A AND B.
     *
     * Generated from protobuf enum <code>AND = 2;</code>
     */
    const PBAND = 2;
    /**
     * A OR B.
     *
     * Generated from protobuf enum <code>OR = 3;</code>
     */
    const PBOR = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::PBAND => 'AND',
        self::PBOR => 'OR',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserListFlexibleRuleOperator::class, \Google\Ads\GoogleAds\V12\Enums\UserListFlexibleRuleOperatorEnum_UserListFlexibleRuleOperator::class);

