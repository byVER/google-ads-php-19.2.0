<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/errors/customer_customizer_error.proto

namespace Google\Ads\GoogleAds\V13\Errors\CustomerCustomizerErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible customer customizer errors.
 *
 * Protobuf type <code>google.ads.googleads.v13.errors.CustomerCustomizerErrorEnum.CustomerCustomizerError</code>
 */
class CustomerCustomizerError
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

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
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
class_alias(CustomerCustomizerError::class, \Google\Ads\GoogleAds\V13\Errors\CustomerCustomizerErrorEnum_CustomerCustomizerError::class);

