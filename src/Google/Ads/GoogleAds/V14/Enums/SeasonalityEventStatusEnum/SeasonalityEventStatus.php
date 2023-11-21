<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/seasonality_event_status.proto

namespace Google\Ads\GoogleAds\V14\Enums\SeasonalityEventStatusEnum;

use UnexpectedValueException;

/**
 * The possible statuses of a Seasonality Event.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.SeasonalityEventStatusEnum.SeasonalityEventStatus</code>
 */
class SeasonalityEventStatus
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
     * The seasonality event is enabled.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    public const ENABLED = 2;
    /**
     * The seasonality event is removed.
     *
     * Generated from protobuf enum <code>REMOVED = 4;</code>
     */
    public const REMOVED = 4;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ENABLED => 'ENABLED',
        self::REMOVED => 'REMOVED',
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
class_alias(SeasonalityEventStatus::class, \Google\Ads\GoogleAds\V14\Enums\SeasonalityEventStatusEnum_SeasonalityEventStatus::class);

