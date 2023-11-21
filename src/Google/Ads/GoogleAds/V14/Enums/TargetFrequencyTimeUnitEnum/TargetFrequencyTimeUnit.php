<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/target_frequency_time_unit.proto

namespace Google\Ads\GoogleAds\V14\Enums\TargetFrequencyTimeUnitEnum;

use UnexpectedValueException;

/**
 * Enum describing time window over which we want to reach Target Frequency.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.TargetFrequencyTimeUnitEnum.TargetFrequencyTimeUnit</code>
 */
class TargetFrequencyTimeUnit
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
     * Optimize bidding to reach Target Frequency in a week.
     *
     * Generated from protobuf enum <code>WEEKLY = 2;</code>
     */
    public const WEEKLY = 2;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::WEEKLY => 'WEEKLY',
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
class_alias(TargetFrequencyTimeUnit::class, \Google\Ads\GoogleAds\V14\Enums\TargetFrequencyTimeUnitEnum_TargetFrequencyTimeUnit::class);

