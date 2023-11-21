<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/advertising_channel_type.proto

namespace Google\Ads\GoogleAds\V14\Enums\AdvertisingChannelTypeEnum;

use UnexpectedValueException;

/**
 * Enum describing the various advertising channel types.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.AdvertisingChannelTypeEnum.AdvertisingChannelType</code>
 */
class AdvertisingChannelType
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
     * Search Network. Includes display bundled, and Search+ campaigns.
     *
     * Generated from protobuf enum <code>SEARCH = 2;</code>
     */
    public const SEARCH = 2;
    /**
     * Google Display Network only.
     *
     * Generated from protobuf enum <code>DISPLAY = 3;</code>
     */
    public const DISPLAY = 3;
    /**
     * Shopping campaigns serve on the shopping property
     * and on google.com search results.
     *
     * Generated from protobuf enum <code>SHOPPING = 4;</code>
     */
    public const SHOPPING = 4;
    /**
     * Hotel Ads campaigns.
     *
     * Generated from protobuf enum <code>HOTEL = 5;</code>
     */
    public const HOTEL = 5;
    /**
     * Video campaigns.
     *
     * Generated from protobuf enum <code>VIDEO = 6;</code>
     */
    public const VIDEO = 6;
    /**
     * App Campaigns, and App Campaigns for Engagement, that run
     * across multiple channels.
     *
     * Generated from protobuf enum <code>MULTI_CHANNEL = 7;</code>
     */
    public const MULTI_CHANNEL = 7;
    /**
     * Local ads campaigns.
     *
     * Generated from protobuf enum <code>LOCAL = 8;</code>
     */
    public const LOCAL = 8;
    /**
     * Smart campaigns.
     *
     * Generated from protobuf enum <code>SMART = 9;</code>
     */
    public const SMART = 9;
    /**
     * Performance Max campaigns.
     *
     * Generated from protobuf enum <code>PERFORMANCE_MAX = 10;</code>
     */
    public const PERFORMANCE_MAX = 10;
    /**
     * Local services campaigns.
     *
     * Generated from protobuf enum <code>LOCAL_SERVICES = 11;</code>
     */
    public const LOCAL_SERVICES = 11;
    /**
     * Discovery campaigns.
     *
     * Generated from protobuf enum <code>DISCOVERY = 12;</code>
     */
    public const DISCOVERY = 12;
    /**
     * Travel campaigns.
     *
     * Generated from protobuf enum <code>TRAVEL = 13;</code>
     */
    public const TRAVEL = 13;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::SEARCH => 'SEARCH',
        self::DISPLAY => 'DISPLAY',
        self::SHOPPING => 'SHOPPING',
        self::HOTEL => 'HOTEL',
        self::VIDEO => 'VIDEO',
        self::MULTI_CHANNEL => 'MULTI_CHANNEL',
        self::LOCAL => 'LOCAL',
        self::SMART => 'SMART',
        self::PERFORMANCE_MAX => 'PERFORMANCE_MAX',
        self::LOCAL_SERVICES => 'LOCAL_SERVICES',
        self::DISCOVERY => 'DISCOVERY',
        self::TRAVEL => 'TRAVEL',
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
class_alias(AdvertisingChannelType::class, \Google\Ads\GoogleAds\V14\Enums\AdvertisingChannelTypeEnum_AdvertisingChannelType::class);

