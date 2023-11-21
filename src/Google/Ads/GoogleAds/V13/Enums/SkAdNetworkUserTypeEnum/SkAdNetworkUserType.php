<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/enums/sk_ad_network_user_type.proto

namespace Google\Ads\GoogleAds\V13\Enums\SkAdNetworkUserTypeEnum;

use UnexpectedValueException;

/**
 * Enumerates SkAdNetwork user types
 *
 * Protobuf type <code>google.ads.googleads.v13.enums.SkAdNetworkUserTypeEnum.SkAdNetworkUserType</code>
 */
class SkAdNetworkUserType
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
     * The value was not present in the postback or we do not have this data for
     * other reasons.
     *
     * Generated from protobuf enum <code>UNAVAILABLE = 2;</code>
     */
    public const UNAVAILABLE = 2;
    /**
     * The user installed the app for the first time.
     *
     * Generated from protobuf enum <code>NEW_INSTALLER = 3;</code>
     */
    public const NEW_INSTALLER = 3;
    /**
     * The user has previously installed the app.
     *
     * Generated from protobuf enum <code>REINSTALLER = 4;</code>
     */
    public const REINSTALLER = 4;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::UNAVAILABLE => 'UNAVAILABLE',
        self::NEW_INSTALLER => 'NEW_INSTALLER',
        self::REINSTALLER => 'REINSTALLER',
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
class_alias(SkAdNetworkUserType::class, \Google\Ads\GoogleAds\V13\Enums\SkAdNetworkUserTypeEnum_SkAdNetworkUserType::class);

