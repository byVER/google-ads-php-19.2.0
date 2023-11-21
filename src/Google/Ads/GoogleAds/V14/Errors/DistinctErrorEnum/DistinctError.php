<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/errors/distinct_error.proto

namespace Google\Ads\GoogleAds\V14\Errors\DistinctErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible distinct errors.
 *
 * Protobuf type <code>google.ads.googleads.v14.errors.DistinctErrorEnum.DistinctError</code>
 */
class DistinctError
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
     * Duplicate element.
     *
     * Generated from protobuf enum <code>DUPLICATE_ELEMENT = 2;</code>
     */
    public const DUPLICATE_ELEMENT = 2;
    /**
     * Duplicate type.
     *
     * Generated from protobuf enum <code>DUPLICATE_TYPE = 3;</code>
     */
    public const DUPLICATE_TYPE = 3;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::DUPLICATE_ELEMENT => 'DUPLICATE_ELEMENT',
        self::DUPLICATE_TYPE => 'DUPLICATE_TYPE',
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
class_alias(DistinctError::class, \Google\Ads\GoogleAds\V14\Errors\DistinctErrorEnum_DistinctError::class);

