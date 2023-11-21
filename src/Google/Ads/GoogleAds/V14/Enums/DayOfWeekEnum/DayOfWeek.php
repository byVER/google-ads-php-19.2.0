<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/day_of_week.proto

namespace Google\Ads\GoogleAds\V14\Enums\DayOfWeekEnum;

use UnexpectedValueException;

/**
 * Enumerates days of the week, for example, "Monday".
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.DayOfWeekEnum.DayOfWeek</code>
 */
class DayOfWeek
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The value is unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Monday.
     *
     * Generated from protobuf enum <code>MONDAY = 2;</code>
     */
    const MONDAY = 2;
    /**
     * Tuesday.
     *
     * Generated from protobuf enum <code>TUESDAY = 3;</code>
     */
    const TUESDAY = 3;
    /**
     * Wednesday.
     *
     * Generated from protobuf enum <code>WEDNESDAY = 4;</code>
     */
    const WEDNESDAY = 4;
    /**
     * Thursday.
     *
     * Generated from protobuf enum <code>THURSDAY = 5;</code>
     */
    const THURSDAY = 5;
    /**
     * Friday.
     *
     * Generated from protobuf enum <code>FRIDAY = 6;</code>
     */
    const FRIDAY = 6;
    /**
     * Saturday.
     *
     * Generated from protobuf enum <code>SATURDAY = 7;</code>
     */
    const SATURDAY = 7;
    /**
     * Sunday.
     *
     * Generated from protobuf enum <code>SUNDAY = 8;</code>
     */
    const SUNDAY = 8;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::MONDAY => 'MONDAY',
        self::TUESDAY => 'TUESDAY',
        self::WEDNESDAY => 'WEDNESDAY',
        self::THURSDAY => 'THURSDAY',
        self::FRIDAY => 'FRIDAY',
        self::SATURDAY => 'SATURDAY',
        self::SUNDAY => 'SUNDAY',
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
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DayOfWeek::class, \Google\Ads\GoogleAds\V14\Enums\DayOfWeekEnum_DayOfWeek::class);

