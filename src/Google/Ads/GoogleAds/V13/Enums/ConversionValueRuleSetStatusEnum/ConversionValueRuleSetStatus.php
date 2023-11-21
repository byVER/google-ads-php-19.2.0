<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/enums/conversion_value_rule_set_status.proto

namespace Google\Ads\GoogleAds\V13\Enums\ConversionValueRuleSetStatusEnum;

use UnexpectedValueException;

/**
 * Possible statuses of a conversion value rule set.
 *
 * Protobuf type <code>google.ads.googleads.v13.enums.ConversionValueRuleSetStatusEnum.ConversionValueRuleSetStatus</code>
 */
class ConversionValueRuleSetStatus
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
     * Conversion Value Rule Set is enabled and can be applied.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    public const ENABLED = 2;
    /**
     * Conversion Value Rule Set is permanently deleted and can't be applied.
     *
     * Generated from protobuf enum <code>REMOVED = 3;</code>
     */
    public const REMOVED = 3;
    /**
     * Conversion Value Rule Set is paused and won't be applied. It can be
     * enabled again.
     *
     * Generated from protobuf enum <code>PAUSED = 4;</code>
     */
    public const PAUSED = 4;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ENABLED => 'ENABLED',
        self::REMOVED => 'REMOVED',
        self::PAUSED => 'PAUSED',
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
class_alias(ConversionValueRuleSetStatus::class, \Google\Ads\GoogleAds\V13\Enums\ConversionValueRuleSetStatusEnum_ConversionValueRuleSetStatus::class);

