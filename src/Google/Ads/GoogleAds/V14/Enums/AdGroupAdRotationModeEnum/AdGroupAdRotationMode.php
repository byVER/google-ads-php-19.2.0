<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/ad_group_ad_rotation_mode.proto

namespace Google\Ads\GoogleAds\V14\Enums\AdGroupAdRotationModeEnum;

use UnexpectedValueException;

/**
 * The possible ad rotation modes of an ad group.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.AdGroupAdRotationModeEnum.AdGroupAdRotationMode</code>
 */
class AdGroupAdRotationMode
{
    /**
     * The ad rotation mode has not been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    public const UNSPECIFIED = 0;
    /**
     * The received value is not known in this version.
     * This is a response-only value.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    public const UNKNOWN = 1;
    /**
     * Optimize ad group ads based on clicks or conversions.
     *
     * Generated from protobuf enum <code>OPTIMIZE = 2;</code>
     */
    public const OPTIMIZE = 2;
    /**
     * Rotate evenly forever.
     *
     * Generated from protobuf enum <code>ROTATE_FOREVER = 3;</code>
     */
    public const ROTATE_FOREVER = 3;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::OPTIMIZE => 'OPTIMIZE',
        self::ROTATE_FOREVER => 'ROTATE_FOREVER',
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
class_alias(AdGroupAdRotationMode::class, \Google\Ads\GoogleAds\V14\Enums\AdGroupAdRotationModeEnum_AdGroupAdRotationMode::class);

