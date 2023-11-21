<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/errors/internal_error.proto

namespace Google\Ads\GoogleAds\V14\Errors\InternalErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible internal errors.
 *
 * Protobuf type <code>google.ads.googleads.v14.errors.InternalErrorEnum.InternalError</code>
 */
class InternalError
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
     * Google Ads API encountered unexpected internal error.
     *
     * Generated from protobuf enum <code>INTERNAL_ERROR = 2;</code>
     */
    public const INTERNAL_ERROR = 2;
    /**
     * The intended error code doesn't exist in specified API version. It will
     * be released in a future API version.
     *
     * Generated from protobuf enum <code>ERROR_CODE_NOT_PUBLISHED = 3;</code>
     */
    public const ERROR_CODE_NOT_PUBLISHED = 3;
    /**
     * Google Ads API encountered an unexpected transient error. The user
     * should retry their request in these cases.
     *
     * Generated from protobuf enum <code>TRANSIENT_ERROR = 4;</code>
     */
    public const TRANSIENT_ERROR = 4;
    /**
     * The request took longer than a deadline.
     *
     * Generated from protobuf enum <code>DEADLINE_EXCEEDED = 5;</code>
     */
    public const DEADLINE_EXCEEDED = 5;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::INTERNAL_ERROR => 'INTERNAL_ERROR',
        self::ERROR_CODE_NOT_PUBLISHED => 'ERROR_CODE_NOT_PUBLISHED',
        self::TRANSIENT_ERROR => 'TRANSIENT_ERROR',
        self::DEADLINE_EXCEEDED => 'DEADLINE_EXCEEDED',
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
class_alias(InternalError::class, \Google\Ads\GoogleAds\V14\Errors\InternalErrorEnum_InternalError::class);

