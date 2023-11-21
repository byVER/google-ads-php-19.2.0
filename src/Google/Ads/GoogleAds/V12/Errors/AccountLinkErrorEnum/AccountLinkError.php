<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/errors/account_link_error.proto

namespace Google\Ads\GoogleAds\V12\Errors\AccountLinkErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible account link errors.
 *
 * Protobuf type <code>google.ads.googleads.v12.errors.AccountLinkErrorEnum.AccountLinkError</code>
 */
class AccountLinkError
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
     * The new link status is invalid.
     *
     * Generated from protobuf enum <code>INVALID_STATUS = 2;</code>
     */
    public const INVALID_STATUS = 2;
    /**
     * The authenticated user doesn't have the permission to do the change.
     *
     * Generated from protobuf enum <code>PERMISSION_DENIED = 3;</code>
     */
    public const PERMISSION_DENIED = 3;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::INVALID_STATUS => 'INVALID_STATUS',
        self::PERMISSION_DENIED => 'PERMISSION_DENIED',
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
class_alias(AccountLinkError::class, \Google\Ads\GoogleAds\V12\Errors\AccountLinkErrorEnum_AccountLinkError::class);

