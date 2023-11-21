<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/enums/distance_bucket.proto

namespace Google\Ads\GoogleAds\V12\Enums\DistanceBucketEnum;

use UnexpectedValueException;

/**
 * The distance bucket for a user's distance from an advertiser's location
 * extension.
 *
 * Protobuf type <code>google.ads.googleads.v12.enums.DistanceBucketEnum.DistanceBucket</code>
 */
class DistanceBucket
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
     * User was within 700m of the location.
     *
     * Generated from protobuf enum <code>WITHIN_700M = 2;</code>
     */
    public const WITHIN_700M = 2;
    /**
     * User was within 1KM of the location.
     *
     * Generated from protobuf enum <code>WITHIN_1KM = 3;</code>
     */
    public const WITHIN_1KM = 3;
    /**
     * User was within 5KM of the location.
     *
     * Generated from protobuf enum <code>WITHIN_5KM = 4;</code>
     */
    public const WITHIN_5KM = 4;
    /**
     * User was within 10KM of the location.
     *
     * Generated from protobuf enum <code>WITHIN_10KM = 5;</code>
     */
    public const WITHIN_10KM = 5;
    /**
     * User was within 15KM of the location.
     *
     * Generated from protobuf enum <code>WITHIN_15KM = 6;</code>
     */
    public const WITHIN_15KM = 6;
    /**
     * User was within 20KM of the location.
     *
     * Generated from protobuf enum <code>WITHIN_20KM = 7;</code>
     */
    public const WITHIN_20KM = 7;
    /**
     * User was within 25KM of the location.
     *
     * Generated from protobuf enum <code>WITHIN_25KM = 8;</code>
     */
    public const WITHIN_25KM = 8;
    /**
     * User was within 30KM of the location.
     *
     * Generated from protobuf enum <code>WITHIN_30KM = 9;</code>
     */
    public const WITHIN_30KM = 9;
    /**
     * User was within 35KM of the location.
     *
     * Generated from protobuf enum <code>WITHIN_35KM = 10;</code>
     */
    public const WITHIN_35KM = 10;
    /**
     * User was within 40KM of the location.
     *
     * Generated from protobuf enum <code>WITHIN_40KM = 11;</code>
     */
    public const WITHIN_40KM = 11;
    /**
     * User was within 45KM of the location.
     *
     * Generated from protobuf enum <code>WITHIN_45KM = 12;</code>
     */
    public const WITHIN_45KM = 12;
    /**
     * User was within 50KM of the location.
     *
     * Generated from protobuf enum <code>WITHIN_50KM = 13;</code>
     */
    public const WITHIN_50KM = 13;
    /**
     * User was within 55KM of the location.
     *
     * Generated from protobuf enum <code>WITHIN_55KM = 14;</code>
     */
    public const WITHIN_55KM = 14;
    /**
     * User was within 60KM of the location.
     *
     * Generated from protobuf enum <code>WITHIN_60KM = 15;</code>
     */
    public const WITHIN_60KM = 15;
    /**
     * User was within 65KM of the location.
     *
     * Generated from protobuf enum <code>WITHIN_65KM = 16;</code>
     */
    public const WITHIN_65KM = 16;
    /**
     * User was beyond 65KM of the location.
     *
     * Generated from protobuf enum <code>BEYOND_65KM = 17;</code>
     */
    public const BEYOND_65KM = 17;
    /**
     * User was within 0.7 miles of the location.
     *
     * Generated from protobuf enum <code>WITHIN_0_7MILES = 18;</code>
     */
    public const WITHIN_0_7MILES = 18;
    /**
     * User was within 1 mile of the location.
     *
     * Generated from protobuf enum <code>WITHIN_1MILE = 19;</code>
     */
    public const WITHIN_1MILE = 19;
    /**
     * User was within 5 miles of the location.
     *
     * Generated from protobuf enum <code>WITHIN_5MILES = 20;</code>
     */
    public const WITHIN_5MILES = 20;
    /**
     * User was within 10 miles of the location.
     *
     * Generated from protobuf enum <code>WITHIN_10MILES = 21;</code>
     */
    public const WITHIN_10MILES = 21;
    /**
     * User was within 15 miles of the location.
     *
     * Generated from protobuf enum <code>WITHIN_15MILES = 22;</code>
     */
    public const WITHIN_15MILES = 22;
    /**
     * User was within 20 miles of the location.
     *
     * Generated from protobuf enum <code>WITHIN_20MILES = 23;</code>
     */
    public const WITHIN_20MILES = 23;
    /**
     * User was within 25 miles of the location.
     *
     * Generated from protobuf enum <code>WITHIN_25MILES = 24;</code>
     */
    public const WITHIN_25MILES = 24;
    /**
     * User was within 30 miles of the location.
     *
     * Generated from protobuf enum <code>WITHIN_30MILES = 25;</code>
     */
    public const WITHIN_30MILES = 25;
    /**
     * User was within 35 miles of the location.
     *
     * Generated from protobuf enum <code>WITHIN_35MILES = 26;</code>
     */
    public const WITHIN_35MILES = 26;
    /**
     * User was within 40 miles of the location.
     *
     * Generated from protobuf enum <code>WITHIN_40MILES = 27;</code>
     */
    public const WITHIN_40MILES = 27;
    /**
     * User was beyond 40 miles of the location.
     *
     * Generated from protobuf enum <code>BEYOND_40MILES = 28;</code>
     */
    public const BEYOND_40MILES = 28;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::WITHIN_700M => 'WITHIN_700M',
        self::WITHIN_1KM => 'WITHIN_1KM',
        self::WITHIN_5KM => 'WITHIN_5KM',
        self::WITHIN_10KM => 'WITHIN_10KM',
        self::WITHIN_15KM => 'WITHIN_15KM',
        self::WITHIN_20KM => 'WITHIN_20KM',
        self::WITHIN_25KM => 'WITHIN_25KM',
        self::WITHIN_30KM => 'WITHIN_30KM',
        self::WITHIN_35KM => 'WITHIN_35KM',
        self::WITHIN_40KM => 'WITHIN_40KM',
        self::WITHIN_45KM => 'WITHIN_45KM',
        self::WITHIN_50KM => 'WITHIN_50KM',
        self::WITHIN_55KM => 'WITHIN_55KM',
        self::WITHIN_60KM => 'WITHIN_60KM',
        self::WITHIN_65KM => 'WITHIN_65KM',
        self::BEYOND_65KM => 'BEYOND_65KM',
        self::WITHIN_0_7MILES => 'WITHIN_0_7MILES',
        self::WITHIN_1MILE => 'WITHIN_1MILE',
        self::WITHIN_5MILES => 'WITHIN_5MILES',
        self::WITHIN_10MILES => 'WITHIN_10MILES',
        self::WITHIN_15MILES => 'WITHIN_15MILES',
        self::WITHIN_20MILES => 'WITHIN_20MILES',
        self::WITHIN_25MILES => 'WITHIN_25MILES',
        self::WITHIN_30MILES => 'WITHIN_30MILES',
        self::WITHIN_35MILES => 'WITHIN_35MILES',
        self::WITHIN_40MILES => 'WITHIN_40MILES',
        self::BEYOND_40MILES => 'BEYOND_40MILES',
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
class_alias(DistanceBucket::class, \Google\Ads\GoogleAds\V12\Enums\DistanceBucketEnum_DistanceBucket::class);

