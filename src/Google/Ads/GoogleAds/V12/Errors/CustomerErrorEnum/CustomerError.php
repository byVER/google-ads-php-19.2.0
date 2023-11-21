<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/errors/customer_error.proto

namespace Google\Ads\GoogleAds\V12\Errors\CustomerErrorEnum;

use UnexpectedValueException;

/**
 * Set of errors that are related to requests dealing with Customer.
 *
 * Protobuf type <code>google.ads.googleads.v12.errors.CustomerErrorEnum.CustomerError</code>
 */
class CustomerError
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
     * Customer status is not allowed to be changed from DRAFT and CLOSED.
     * Currency code and at least one of country code and time zone needs to be
     * set when status is changed to ENABLED.
     *
     * Generated from protobuf enum <code>STATUS_CHANGE_DISALLOWED = 2;</code>
     */
    public const STATUS_CHANGE_DISALLOWED = 2;
    /**
     * CustomerService cannot get a customer that has not been fully set up.
     *
     * Generated from protobuf enum <code>ACCOUNT_NOT_SET_UP = 3;</code>
     */
    public const ACCOUNT_NOT_SET_UP = 3;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::STATUS_CHANGE_DISALLOWED => 'STATUS_CHANGE_DISALLOWED',
        self::ACCOUNT_NOT_SET_UP => 'ACCOUNT_NOT_SET_UP',
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
class_alias(CustomerError::class, \Google\Ads\GoogleAds\V12\Errors\CustomerErrorEnum_CustomerError::class);

