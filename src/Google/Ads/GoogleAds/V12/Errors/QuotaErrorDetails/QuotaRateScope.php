<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/errors/errors.proto

namespace Google\Ads\GoogleAds\V12\Errors\QuotaErrorDetails;

use UnexpectedValueException;

/**
 * Enum of possible scopes that quota buckets belong to.
 *
 * Protobuf type <code>google.ads.googleads.v12.errors.QuotaErrorDetails.QuotaRateScope</code>
 */
class QuotaRateScope
{
    /**
     * Unspecified enum
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
     * Per customer account quota
     *
     * Generated from protobuf enum <code>ACCOUNT = 2;</code>
     */
    public const ACCOUNT = 2;
    /**
     * Per project or DevToken quota
     *
     * Generated from protobuf enum <code>DEVELOPER = 3;</code>
     */
    public const DEVELOPER = 3;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ACCOUNT => 'ACCOUNT',
        self::DEVELOPER => 'DEVELOPER',
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
class_alias(QuotaRateScope::class, \Google\Ads\GoogleAds\V12\Errors\QuotaErrorDetails_QuotaRateScope::class);

