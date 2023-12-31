<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/conversion_attribution_event_type.proto

namespace Google\Ads\GoogleAds\V14\Enums\ConversionAttributionEventTypeEnum;

use UnexpectedValueException;

/**
 * The event type of conversions that are attributed to.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.ConversionAttributionEventTypeEnum.ConversionAttributionEventType</code>
 */
class ConversionAttributionEventType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    public const UNSPECIFIED = 0;
    /**
     * Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    public const UNKNOWN = 1;
    /**
     * The conversion is attributed to an impression.
     *
     * Generated from protobuf enum <code>IMPRESSION = 2;</code>
     */
    public const IMPRESSION = 2;
    /**
     * The conversion is attributed to an interaction.
     *
     * Generated from protobuf enum <code>INTERACTION = 3;</code>
     */
    public const INTERACTION = 3;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::IMPRESSION => 'IMPRESSION',
        self::INTERACTION => 'INTERACTION',
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
class_alias(ConversionAttributionEventType::class, \Google\Ads\GoogleAds\V14\Enums\ConversionAttributionEventTypeEnum_ConversionAttributionEventType::class);

