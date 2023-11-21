<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/errors/operator_error.proto

namespace Google\Ads\GoogleAds\V13\Errors\OperatorErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible operator errors.
 *
 * Protobuf type <code>google.ads.googleads.v13.errors.OperatorErrorEnum.OperatorError</code>
 */
class OperatorError
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
     * Operator not supported.
     *
     * Generated from protobuf enum <code>OPERATOR_NOT_SUPPORTED = 2;</code>
     */
    public const OPERATOR_NOT_SUPPORTED = 2;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::OPERATOR_NOT_SUPPORTED => 'OPERATOR_NOT_SUPPORTED',
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
class_alias(OperatorError::class, \Google\Ads\GoogleAds\V13\Errors\OperatorErrorEnum_OperatorError::class);

