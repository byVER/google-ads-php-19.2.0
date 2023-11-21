<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/ad_serving_optimization_status.proto

namespace Google\Ads\GoogleAds\V14\Enums\AdServingOptimizationStatusEnum;

use UnexpectedValueException;

/**
 * Enum describing possible serving statuses.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.AdServingOptimizationStatusEnum.AdServingOptimizationStatus</code>
 */
class AdServingOptimizationStatus
{
    /**
     * No value has been specified.
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
     * Ad serving is optimized based on CTR for the campaign.
     *
     * Generated from protobuf enum <code>OPTIMIZE = 2;</code>
     */
    public const OPTIMIZE = 2;
    /**
     * Ad serving is optimized based on CTR * Conversion for the campaign. If
     * the campaign is not in the conversion optimizer bidding strategy, it will
     * default to OPTIMIZED.
     *
     * Generated from protobuf enum <code>CONVERSION_OPTIMIZE = 3;</code>
     */
    public const CONVERSION_OPTIMIZE = 3;
    /**
     * Ads are rotated evenly for 90 days, then optimized for clicks.
     *
     * Generated from protobuf enum <code>ROTATE = 4;</code>
     */
    public const ROTATE = 4;
    /**
     * Show lower performing ads more evenly with higher performing ads, and do
     * not optimize.
     *
     * Generated from protobuf enum <code>ROTATE_INDEFINITELY = 5;</code>
     */
    public const ROTATE_INDEFINITELY = 5;
    /**
     * Ad serving optimization status is not available.
     *
     * Generated from protobuf enum <code>UNAVAILABLE = 6;</code>
     */
    public const UNAVAILABLE = 6;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::OPTIMIZE => 'OPTIMIZE',
        self::CONVERSION_OPTIMIZE => 'CONVERSION_OPTIMIZE',
        self::ROTATE => 'ROTATE',
        self::ROTATE_INDEFINITELY => 'ROTATE_INDEFINITELY',
        self::UNAVAILABLE => 'UNAVAILABLE',
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
class_alias(AdServingOptimizationStatus::class, \Google\Ads\GoogleAds\V14\Enums\AdServingOptimizationStatusEnum_AdServingOptimizationStatus::class);

