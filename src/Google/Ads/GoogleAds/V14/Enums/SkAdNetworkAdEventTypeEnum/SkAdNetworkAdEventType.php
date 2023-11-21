<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/sk_ad_network_ad_event_type.proto

namespace Google\Ads\GoogleAds\V14\Enums\SkAdNetworkAdEventTypeEnum;

use UnexpectedValueException;

/**
 * Enumerates SkAdNetwork ad event types
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.SkAdNetworkAdEventTypeEnum.SkAdNetworkAdEventType</code>
 */
class SkAdNetworkAdEventType
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
     * The value was not present in the postback or we do not have this data for
     * other reasons.
     *
     * Generated from protobuf enum <code>UNAVAILABLE = 2;</code>
     */
    public const UNAVAILABLE = 2;
    /**
     * The user interacted with the ad.
     *
     * Generated from protobuf enum <code>INTERACTION = 3;</code>
     */
    public const INTERACTION = 3;
    /**
     * The user viewed the ad.
     *
     * Generated from protobuf enum <code>VIEW = 4;</code>
     */
    public const VIEW = 4;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::UNAVAILABLE => 'UNAVAILABLE',
        self::INTERACTION => 'INTERACTION',
        self::VIEW => 'VIEW',
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
class_alias(SkAdNetworkAdEventType::class, \Google\Ads\GoogleAds\V14\Enums\SkAdNetworkAdEventTypeEnum_SkAdNetworkAdEventType::class);

