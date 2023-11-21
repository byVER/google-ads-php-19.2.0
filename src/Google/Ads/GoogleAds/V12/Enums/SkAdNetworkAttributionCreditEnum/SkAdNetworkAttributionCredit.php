<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/enums/sk_ad_network_attribution_credit.proto

namespace Google\Ads\GoogleAds\V12\Enums\SkAdNetworkAttributionCreditEnum;

use UnexpectedValueException;

/**
 * Enumerates SkAdNetwork attribution credits.
 *
 * Protobuf type <code>google.ads.googleads.v12.enums.SkAdNetworkAttributionCreditEnum.SkAdNetworkAttributionCredit</code>
 */
class SkAdNetworkAttributionCredit
{
    /**
     * Default value. This value is equivalent to null.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    public const UNSPECIFIED = 0;
    /**
     * The value is unknown in this API version. The true enum value cannot be
     * returned in this API version or is not supported yet.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    public const UNKNOWN = 1;
    /**
     * The value was not present in the postback or we do not have this data for
     * other reasons.
     *
     * Generated from protobuf enum <code>UNAVAILABLE = 2;</code>
     */
    public const UNAVAILABLE = 2;
    /**
     * Google was the ad network that won ad attribution.
     *
     * Generated from protobuf enum <code>WON = 3;</code>
     */
    public const WON = 3;
    /**
     * Google qualified for attribution, but didn't win.
     *
     * Generated from protobuf enum <code>CONTRIBUTED = 4;</code>
     */
    public const CONTRIBUTED = 4;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::UNAVAILABLE => 'UNAVAILABLE',
        self::WON => 'WON',
        self::CONTRIBUTED => 'CONTRIBUTED',
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
class_alias(SkAdNetworkAttributionCredit::class, \Google\Ads\GoogleAds\V12\Enums\SkAdNetworkAttributionCreditEnum_SkAdNetworkAttributionCredit::class);

