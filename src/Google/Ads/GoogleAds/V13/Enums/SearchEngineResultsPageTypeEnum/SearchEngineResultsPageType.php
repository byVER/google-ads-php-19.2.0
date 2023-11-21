<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/enums/search_engine_results_page_type.proto

namespace Google\Ads\GoogleAds\V13\Enums\SearchEngineResultsPageTypeEnum;

use UnexpectedValueException;

/**
 * The type of the search engine results page.
 *
 * Protobuf type <code>google.ads.googleads.v13.enums.SearchEngineResultsPageTypeEnum.SearchEngineResultsPageType</code>
 */
class SearchEngineResultsPageType
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
     * Only ads were contained in the search engine results page.
     *
     * Generated from protobuf enum <code>ADS_ONLY = 2;</code>
     */
    public const ADS_ONLY = 2;
    /**
     * Only organic results were contained in the search engine results page.
     *
     * Generated from protobuf enum <code>ORGANIC_ONLY = 3;</code>
     */
    public const ORGANIC_ONLY = 3;
    /**
     * Both ads and organic results were contained in the search engine results
     * page.
     *
     * Generated from protobuf enum <code>ADS_AND_ORGANIC = 4;</code>
     */
    public const ADS_AND_ORGANIC = 4;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ADS_ONLY => 'ADS_ONLY',
        self::ORGANIC_ONLY => 'ORGANIC_ONLY',
        self::ADS_AND_ORGANIC => 'ADS_AND_ORGANIC',
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
class_alias(SearchEngineResultsPageType::class, \Google\Ads\GoogleAds\V13\Enums\SearchEngineResultsPageTypeEnum_SearchEngineResultsPageType::class);

