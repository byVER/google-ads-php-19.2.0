<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/geo_targeting_type.proto

namespace Google\Ads\GoogleAds\V14\Enums\GeoTargetingTypeEnum;

use UnexpectedValueException;

/**
 * The possible geo targeting types.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.GeoTargetingTypeEnum.GeoTargetingType</code>
 */
class GeoTargetingType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    public const UNSPECIFIED = 0;
    /**
     * The value is unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    public const UNKNOWN = 1;
    /**
     * Location the user is interested in while making the query.
     *
     * Generated from protobuf enum <code>AREA_OF_INTEREST = 2;</code>
     */
    public const AREA_OF_INTEREST = 2;
    /**
     * Location of the user issuing the query.
     *
     * Generated from protobuf enum <code>LOCATION_OF_PRESENCE = 3;</code>
     */
    public const LOCATION_OF_PRESENCE = 3;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::AREA_OF_INTEREST => 'AREA_OF_INTEREST',
        self::LOCATION_OF_PRESENCE => 'LOCATION_OF_PRESENCE',
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
class_alias(GeoTargetingType::class, \Google\Ads\GoogleAds\V14\Enums\GeoTargetingTypeEnum_GeoTargetingType::class);

