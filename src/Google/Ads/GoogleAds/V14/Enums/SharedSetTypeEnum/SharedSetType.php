<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/shared_set_type.proto

namespace Google\Ads\GoogleAds\V14\Enums\SharedSetTypeEnum;

use UnexpectedValueException;

/**
 * Enum listing the possible shared set types.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.SharedSetTypeEnum.SharedSetType</code>
 */
class SharedSetType
{
    /**
     * Not specified.
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
     * A set of keywords that can be excluded from targeting.
     *
     * Generated from protobuf enum <code>NEGATIVE_KEYWORDS = 2;</code>
     */
    public const NEGATIVE_KEYWORDS = 2;
    /**
     * A set of placements that can be excluded from targeting.
     *
     * Generated from protobuf enum <code>NEGATIVE_PLACEMENTS = 3;</code>
     */
    public const NEGATIVE_PLACEMENTS = 3;
    /**
     * An account-level set of keywords that can be excluded from targeting.
     *
     * Generated from protobuf enum <code>ACCOUNT_LEVEL_NEGATIVE_KEYWORDS = 4;</code>
     */
    public const ACCOUNT_LEVEL_NEGATIVE_KEYWORDS = 4;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::NEGATIVE_KEYWORDS => 'NEGATIVE_KEYWORDS',
        self::NEGATIVE_PLACEMENTS => 'NEGATIVE_PLACEMENTS',
        self::ACCOUNT_LEVEL_NEGATIVE_KEYWORDS => 'ACCOUNT_LEVEL_NEGATIVE_KEYWORDS',
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
class_alias(SharedSetType::class, \Google\Ads\GoogleAds\V14\Enums\SharedSetTypeEnum_SharedSetType::class);

