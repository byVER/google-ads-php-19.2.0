<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/enums/keyword_plan_network.proto

namespace Google\Ads\GoogleAds\V13\Enums\KeywordPlanNetworkEnum;

use UnexpectedValueException;

/**
 * Enumerates keyword plan forecastable network types.
 *
 * Protobuf type <code>google.ads.googleads.v13.enums.KeywordPlanNetworkEnum.KeywordPlanNetwork</code>
 */
class KeywordPlanNetwork
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    public const UNSPECIFIED = 0;
    /**
     * The value is unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    public const UNKNOWN = 1;
    /**
     * Google Search.
     *
     * Generated from protobuf enum <code>GOOGLE_SEARCH = 2;</code>
     */
    public const GOOGLE_SEARCH = 2;
    /**
     * Google Search + Search partners.
     *
     * Generated from protobuf enum <code>GOOGLE_SEARCH_AND_PARTNERS = 3;</code>
     */
    public const GOOGLE_SEARCH_AND_PARTNERS = 3;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::GOOGLE_SEARCH => 'GOOGLE_SEARCH',
        self::GOOGLE_SEARCH_AND_PARTNERS => 'GOOGLE_SEARCH_AND_PARTNERS',
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
class_alias(KeywordPlanNetwork::class, \Google\Ads\GoogleAds\V13\Enums\KeywordPlanNetworkEnum_KeywordPlanNetwork::class);

