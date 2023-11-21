<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/feed_item_target_device.proto

namespace Google\Ads\GoogleAds\V14\Enums\FeedItemTargetDeviceEnum;

use UnexpectedValueException;

/**
 * Possible data types for a feed item target device.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.FeedItemTargetDeviceEnum.FeedItemTargetDevice</code>
 */
class FeedItemTargetDevice
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
     * Mobile.
     *
     * Generated from protobuf enum <code>MOBILE = 2;</code>
     */
    public const MOBILE = 2;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::MOBILE => 'MOBILE',
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
class_alias(FeedItemTargetDevice::class, \Google\Ads\GoogleAds\V14\Enums\FeedItemTargetDeviceEnum_FeedItemTargetDevice::class);

