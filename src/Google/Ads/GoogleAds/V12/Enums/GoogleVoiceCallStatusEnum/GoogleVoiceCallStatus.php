<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/enums/google_voice_call_status.proto

namespace Google\Ads\GoogleAds\V12\Enums\GoogleVoiceCallStatusEnum;

use UnexpectedValueException;

/**
 * Possible statuses of a google voice call.
 *
 * Protobuf type <code>google.ads.googleads.v12.enums.GoogleVoiceCallStatusEnum.GoogleVoiceCallStatus</code>
 */
class GoogleVoiceCallStatus
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
     * The call was missed.
     *
     * Generated from protobuf enum <code>MISSED = 2;</code>
     */
    public const MISSED = 2;
    /**
     * The call was received.
     *
     * Generated from protobuf enum <code>RECEIVED = 3;</code>
     */
    public const RECEIVED = 3;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::MISSED => 'MISSED',
        self::RECEIVED => 'RECEIVED',
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
class_alias(GoogleVoiceCallStatus::class, \Google\Ads\GoogleAds\V12\Enums\GoogleVoiceCallStatusEnum_GoogleVoiceCallStatus::class);

