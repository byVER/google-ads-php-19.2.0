<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/errors/shared_criterion_error.proto

namespace Google\Ads\GoogleAds\V13\Errors\SharedCriterionErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible shared criterion errors.
 *
 * Protobuf type <code>google.ads.googleads.v13.errors.SharedCriterionErrorEnum.SharedCriterionError</code>
 */
class SharedCriterionError
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
     * The criterion is not appropriate for the shared set type.
     *
     * Generated from protobuf enum <code>CRITERION_TYPE_NOT_ALLOWED_FOR_SHARED_SET_TYPE = 2;</code>
     */
    public const CRITERION_TYPE_NOT_ALLOWED_FOR_SHARED_SET_TYPE = 2;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CRITERION_TYPE_NOT_ALLOWED_FOR_SHARED_SET_TYPE => 'CRITERION_TYPE_NOT_ALLOWED_FOR_SHARED_SET_TYPE',
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
class_alias(SharedCriterionError::class, \Google\Ads\GoogleAds\V13\Errors\SharedCriterionErrorEnum_SharedCriterionError::class);

