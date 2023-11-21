<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/location_source_type.proto

namespace Google\Ads\GoogleAds\V14\Enums\LocationSourceTypeEnum;

use UnexpectedValueException;

/**
 * The possible types of a location source.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.LocationSourceTypeEnum.LocationSourceType</code>
 */
class LocationSourceType
{
    /**
     * No value has been specified.
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
     * Locations associated with the customer's linked Business Profile.
     *
     * Generated from protobuf enum <code>GOOGLE_MY_BUSINESS = 2;</code>
     */
    public const GOOGLE_MY_BUSINESS = 2;
    /**
     * Affiliate (chain) store locations. For example, Best Buy store locations.
     *
     * Generated from protobuf enum <code>AFFILIATE = 3;</code>
     */
    public const AFFILIATE = 3;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::GOOGLE_MY_BUSINESS => 'GOOGLE_MY_BUSINESS',
        self::AFFILIATE => 'AFFILIATE',
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
class_alias(LocationSourceType::class, \Google\Ads\GoogleAds\V14\Enums\LocationSourceTypeEnum_LocationSourceType::class);

