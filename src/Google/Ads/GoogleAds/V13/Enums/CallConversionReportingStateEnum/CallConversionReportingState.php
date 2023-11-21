<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/enums/call_conversion_reporting_state.proto

namespace Google\Ads\GoogleAds\V13\Enums\CallConversionReportingStateEnum;

use UnexpectedValueException;

/**
 * Possible data types for a call conversion action state.
 *
 * Protobuf type <code>google.ads.googleads.v13.enums.CallConversionReportingStateEnum.CallConversionReportingState</code>
 */
class CallConversionReportingState
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
     * Call conversion action is disabled.
     *
     * Generated from protobuf enum <code>DISABLED = 2;</code>
     */
    public const DISABLED = 2;
    /**
     * Call conversion action will use call conversion type set at the
     * account level.
     *
     * Generated from protobuf enum <code>USE_ACCOUNT_LEVEL_CALL_CONVERSION_ACTION = 3;</code>
     */
    public const USE_ACCOUNT_LEVEL_CALL_CONVERSION_ACTION = 3;
    /**
     * Call conversion action will use call conversion type set at the resource
     * (call only ads/call extensions) level.
     *
     * Generated from protobuf enum <code>USE_RESOURCE_LEVEL_CALL_CONVERSION_ACTION = 4;</code>
     */
    public const USE_RESOURCE_LEVEL_CALL_CONVERSION_ACTION = 4;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::DISABLED => 'DISABLED',
        self::USE_ACCOUNT_LEVEL_CALL_CONVERSION_ACTION => 'USE_ACCOUNT_LEVEL_CALL_CONVERSION_ACTION',
        self::USE_RESOURCE_LEVEL_CALL_CONVERSION_ACTION => 'USE_RESOURCE_LEVEL_CALL_CONVERSION_ACTION',
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
class_alias(CallConversionReportingState::class, \Google\Ads\GoogleAds\V13\Enums\CallConversionReportingStateEnum_CallConversionReportingState::class);

