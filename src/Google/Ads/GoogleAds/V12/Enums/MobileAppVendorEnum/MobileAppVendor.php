<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/enums/mobile_app_vendor.proto

namespace Google\Ads\GoogleAds\V12\Enums\MobileAppVendorEnum;

use UnexpectedValueException;

/**
 * The type of mobile app vendor
 *
 * Protobuf type <code>google.ads.googleads.v12.enums.MobileAppVendorEnum.MobileAppVendor</code>
 */
class MobileAppVendor
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
     * Mobile app vendor for Apple app store.
     *
     * Generated from protobuf enum <code>APPLE_APP_STORE = 2;</code>
     */
    public const APPLE_APP_STORE = 2;
    /**
     * Mobile app vendor for Google app store.
     *
     * Generated from protobuf enum <code>GOOGLE_APP_STORE = 3;</code>
     */
    public const GOOGLE_APP_STORE = 3;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::APPLE_APP_STORE => 'APPLE_APP_STORE',
        self::GOOGLE_APP_STORE => 'GOOGLE_APP_STORE',
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
class_alias(MobileAppVendor::class, \Google\Ads\GoogleAds\V12\Enums\MobileAppVendorEnum_MobileAppVendor::class);

