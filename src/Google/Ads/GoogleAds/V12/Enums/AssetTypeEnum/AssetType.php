<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/enums/asset_type.proto

namespace Google\Ads\GoogleAds\V12\Enums\AssetTypeEnum;

use UnexpectedValueException;

/**
 * Enum describing possible types of asset.
 *
 * Protobuf type <code>google.ads.googleads.v12.enums.AssetTypeEnum.AssetType</code>
 */
class AssetType
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
     * YouTube video asset.
     *
     * Generated from protobuf enum <code>YOUTUBE_VIDEO = 2;</code>
     */
    public const YOUTUBE_VIDEO = 2;
    /**
     * Media bundle asset.
     *
     * Generated from protobuf enum <code>MEDIA_BUNDLE = 3;</code>
     */
    public const MEDIA_BUNDLE = 3;
    /**
     * Image asset.
     *
     * Generated from protobuf enum <code>IMAGE = 4;</code>
     */
    public const IMAGE = 4;
    /**
     * Text asset.
     *
     * Generated from protobuf enum <code>TEXT = 5;</code>
     */
    public const TEXT = 5;
    /**
     * Lead form asset.
     *
     * Generated from protobuf enum <code>LEAD_FORM = 6;</code>
     */
    public const LEAD_FORM = 6;
    /**
     * Book on Google asset.
     *
     * Generated from protobuf enum <code>BOOK_ON_GOOGLE = 7;</code>
     */
    public const BOOK_ON_GOOGLE = 7;
    /**
     * Promotion asset.
     *
     * Generated from protobuf enum <code>PROMOTION = 8;</code>
     */
    public const PROMOTION = 8;
    /**
     * Callout asset.
     *
     * Generated from protobuf enum <code>CALLOUT = 9;</code>
     */
    public const CALLOUT = 9;
    /**
     * Structured Snippet asset.
     *
     * Generated from protobuf enum <code>STRUCTURED_SNIPPET = 10;</code>
     */
    public const STRUCTURED_SNIPPET = 10;
    /**
     * Sitelink asset.
     *
     * Generated from protobuf enum <code>SITELINK = 11;</code>
     */
    public const SITELINK = 11;
    /**
     * Page Feed asset.
     *
     * Generated from protobuf enum <code>PAGE_FEED = 12;</code>
     */
    public const PAGE_FEED = 12;
    /**
     * Dynamic Education asset.
     *
     * Generated from protobuf enum <code>DYNAMIC_EDUCATION = 13;</code>
     */
    public const DYNAMIC_EDUCATION = 13;
    /**
     * Mobile app asset.
     *
     * Generated from protobuf enum <code>MOBILE_APP = 14;</code>
     */
    public const MOBILE_APP = 14;
    /**
     * Hotel callout asset.
     *
     * Generated from protobuf enum <code>HOTEL_CALLOUT = 15;</code>
     */
    public const HOTEL_CALLOUT = 15;
    /**
     * Call asset.
     *
     * Generated from protobuf enum <code>CALL = 16;</code>
     */
    public const CALL = 16;
    /**
     * Price asset.
     *
     * Generated from protobuf enum <code>PRICE = 17;</code>
     */
    public const PRICE = 17;
    /**
     * Call to action asset.
     *
     * Generated from protobuf enum <code>CALL_TO_ACTION = 18;</code>
     */
    public const CALL_TO_ACTION = 18;
    /**
     * Dynamic real estate asset.
     *
     * Generated from protobuf enum <code>DYNAMIC_REAL_ESTATE = 19;</code>
     */
    public const DYNAMIC_REAL_ESTATE = 19;
    /**
     * Dynamic custom asset.
     *
     * Generated from protobuf enum <code>DYNAMIC_CUSTOM = 20;</code>
     */
    public const DYNAMIC_CUSTOM = 20;
    /**
     * Dynamic hotels and rentals asset.
     *
     * Generated from protobuf enum <code>DYNAMIC_HOTELS_AND_RENTALS = 21;</code>
     */
    public const DYNAMIC_HOTELS_AND_RENTALS = 21;
    /**
     * Dynamic flights asset.
     *
     * Generated from protobuf enum <code>DYNAMIC_FLIGHTS = 22;</code>
     */
    public const DYNAMIC_FLIGHTS = 22;
    /**
     * Discovery Carousel Card asset.
     *
     * Generated from protobuf enum <code>DISCOVERY_CAROUSEL_CARD = 23;</code>
     */
    public const DISCOVERY_CAROUSEL_CARD = 23;
    /**
     * Dynamic travel asset.
     *
     * Generated from protobuf enum <code>DYNAMIC_TRAVEL = 24;</code>
     */
    public const DYNAMIC_TRAVEL = 24;
    /**
     * Dynamic local asset.
     *
     * Generated from protobuf enum <code>DYNAMIC_LOCAL = 25;</code>
     */
    public const DYNAMIC_LOCAL = 25;
    /**
     * Dynamic jobs asset.
     *
     * Generated from protobuf enum <code>DYNAMIC_JOBS = 26;</code>
     */
    public const DYNAMIC_JOBS = 26;
    /**
     * Location asset.
     *
     * Generated from protobuf enum <code>LOCATION = 27;</code>
     */
    public const LOCATION = 27;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::YOUTUBE_VIDEO => 'YOUTUBE_VIDEO',
        self::MEDIA_BUNDLE => 'MEDIA_BUNDLE',
        self::IMAGE => 'IMAGE',
        self::TEXT => 'TEXT',
        self::LEAD_FORM => 'LEAD_FORM',
        self::BOOK_ON_GOOGLE => 'BOOK_ON_GOOGLE',
        self::PROMOTION => 'PROMOTION',
        self::CALLOUT => 'CALLOUT',
        self::STRUCTURED_SNIPPET => 'STRUCTURED_SNIPPET',
        self::SITELINK => 'SITELINK',
        self::PAGE_FEED => 'PAGE_FEED',
        self::DYNAMIC_EDUCATION => 'DYNAMIC_EDUCATION',
        self::MOBILE_APP => 'MOBILE_APP',
        self::HOTEL_CALLOUT => 'HOTEL_CALLOUT',
        self::CALL => 'CALL',
        self::PRICE => 'PRICE',
        self::CALL_TO_ACTION => 'CALL_TO_ACTION',
        self::DYNAMIC_REAL_ESTATE => 'DYNAMIC_REAL_ESTATE',
        self::DYNAMIC_CUSTOM => 'DYNAMIC_CUSTOM',
        self::DYNAMIC_HOTELS_AND_RENTALS => 'DYNAMIC_HOTELS_AND_RENTALS',
        self::DYNAMIC_FLIGHTS => 'DYNAMIC_FLIGHTS',
        self::DISCOVERY_CAROUSEL_CARD => 'DISCOVERY_CAROUSEL_CARD',
        self::DYNAMIC_TRAVEL => 'DYNAMIC_TRAVEL',
        self::DYNAMIC_LOCAL => 'DYNAMIC_LOCAL',
        self::DYNAMIC_JOBS => 'DYNAMIC_JOBS',
        self::LOCATION => 'LOCATION',
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
class_alias(AssetType::class, \Google\Ads\GoogleAds\V12\Enums\AssetTypeEnum_AssetType::class);

