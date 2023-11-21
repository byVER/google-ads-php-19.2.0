<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/enums/keyword_match_type.proto

namespace Google\Ads\GoogleAds\V12\Enums\KeywordMatchTypeEnum;

use UnexpectedValueException;

/**
 * Possible Keyword match types.
 *
 * Protobuf type <code>google.ads.googleads.v12.enums.KeywordMatchTypeEnum.KeywordMatchType</code>
 */
class KeywordMatchType
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
     * Exact match.
     *
     * Generated from protobuf enum <code>EXACT = 2;</code>
     */
    public const EXACT = 2;
    /**
     * Phrase match.
     *
     * Generated from protobuf enum <code>PHRASE = 3;</code>
     */
    public const PHRASE = 3;
    /**
     * Broad match.
     *
     * Generated from protobuf enum <code>BROAD = 4;</code>
     */
    public const BROAD = 4;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::EXACT => 'EXACT',
        self::PHRASE => 'PHRASE',
        self::BROAD => 'BROAD',
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
class_alias(KeywordMatchType::class, \Google\Ads\GoogleAds\V12\Enums\KeywordMatchTypeEnum_KeywordMatchType::class);

