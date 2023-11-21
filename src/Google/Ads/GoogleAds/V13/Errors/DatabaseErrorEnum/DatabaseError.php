<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/errors/database_error.proto

namespace Google\Ads\GoogleAds\V13\Errors\DatabaseErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible database errors.
 *
 * Protobuf type <code>google.ads.googleads.v13.errors.DatabaseErrorEnum.DatabaseError</code>
 */
class DatabaseError
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
     * Multiple requests were attempting to modify the same resource at once.
     * Retry the request.
     *
     * Generated from protobuf enum <code>CONCURRENT_MODIFICATION = 2;</code>
     */
    public const CONCURRENT_MODIFICATION = 2;
    /**
     * The request conflicted with existing data. This error will usually be
     * replaced with a more specific error if the request is retried.
     *
     * Generated from protobuf enum <code>DATA_CONSTRAINT_VIOLATION = 3;</code>
     */
    public const DATA_CONSTRAINT_VIOLATION = 3;
    /**
     * The data written is too large. Split the request into smaller
     * requests.
     *
     * Generated from protobuf enum <code>REQUEST_TOO_LARGE = 4;</code>
     */
    public const REQUEST_TOO_LARGE = 4;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CONCURRENT_MODIFICATION => 'CONCURRENT_MODIFICATION',
        self::DATA_CONSTRAINT_VIOLATION => 'DATA_CONSTRAINT_VIOLATION',
        self::REQUEST_TOO_LARGE => 'REQUEST_TOO_LARGE',
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
class_alias(DatabaseError::class, \Google\Ads\GoogleAds\V13\Errors\DatabaseErrorEnum_DatabaseError::class);

