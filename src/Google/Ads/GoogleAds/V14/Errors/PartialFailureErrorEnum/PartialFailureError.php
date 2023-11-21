<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/errors/partial_failure_error.proto

namespace Google\Ads\GoogleAds\V14\Errors\PartialFailureErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible partial failure errors.
 *
 * Protobuf type <code>google.ads.googleads.v14.errors.PartialFailureErrorEnum.PartialFailureError</code>
 */
class PartialFailureError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    public const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    public const UNKNOWN = 1;
    /**
     * The partial failure field was false in the request.
     * This method requires this field be set to true.
     *
     * Generated from protobuf enum <code>PARTIAL_FAILURE_MODE_REQUIRED = 2;</code>
     */
    public const PARTIAL_FAILURE_MODE_REQUIRED = 2;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::PARTIAL_FAILURE_MODE_REQUIRED => 'PARTIAL_FAILURE_MODE_REQUIRED',
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
class_alias(PartialFailureError::class, \Google\Ads\GoogleAds\V14\Errors\PartialFailureErrorEnum_PartialFailureError::class);

