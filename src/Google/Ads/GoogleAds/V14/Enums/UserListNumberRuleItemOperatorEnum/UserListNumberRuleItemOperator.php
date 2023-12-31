<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/user_list_number_rule_item_operator.proto

namespace Google\Ads\GoogleAds\V14\Enums\UserListNumberRuleItemOperatorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible user list number rule item operators.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.UserListNumberRuleItemOperatorEnum.UserListNumberRuleItemOperator</code>
 */
class UserListNumberRuleItemOperator
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    public const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    public const UNKNOWN = 1;
    /**
     * Greater than.
     *
     * Generated from protobuf enum <code>GREATER_THAN = 2;</code>
     */
    public const GREATER_THAN = 2;
    /**
     * Greater than or equal.
     *
     * Generated from protobuf enum <code>GREATER_THAN_OR_EQUAL = 3;</code>
     */
    public const GREATER_THAN_OR_EQUAL = 3;
    /**
     * Equals.
     *
     * Generated from protobuf enum <code>EQUALS = 4;</code>
     */
    public const EQUALS = 4;
    /**
     * Not equals.
     *
     * Generated from protobuf enum <code>NOT_EQUALS = 5;</code>
     */
    public const NOT_EQUALS = 5;
    /**
     * Less than.
     *
     * Generated from protobuf enum <code>LESS_THAN = 6;</code>
     */
    public const LESS_THAN = 6;
    /**
     * Less than or equal.
     *
     * Generated from protobuf enum <code>LESS_THAN_OR_EQUAL = 7;</code>
     */
    public const LESS_THAN_OR_EQUAL = 7;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::GREATER_THAN => 'GREATER_THAN',
        self::GREATER_THAN_OR_EQUAL => 'GREATER_THAN_OR_EQUAL',
        self::EQUALS => 'EQUALS',
        self::NOT_EQUALS => 'NOT_EQUALS',
        self::LESS_THAN => 'LESS_THAN',
        self::LESS_THAN_OR_EQUAL => 'LESS_THAN_OR_EQUAL',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', self::class, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = self::class . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', self::class, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserListNumberRuleItemOperator::class, \Google\Ads\GoogleAds\V14\Enums\UserListNumberRuleItemOperatorEnum_UserListNumberRuleItemOperator::class);

