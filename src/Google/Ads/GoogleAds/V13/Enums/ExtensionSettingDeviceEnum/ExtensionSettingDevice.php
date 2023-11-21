<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/enums/extension_setting_device.proto

namespace Google\Ads\GoogleAds\V13\Enums\ExtensionSettingDeviceEnum;

use UnexpectedValueException;

/**
 * Possible device types for an extension setting.
 *
 * Protobuf type <code>google.ads.googleads.v13.enums.ExtensionSettingDeviceEnum.ExtensionSettingDevice</code>
 */
class ExtensionSettingDevice
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
     * Mobile. The extensions in the extension setting will only serve on
     * mobile devices.
     *
     * Generated from protobuf enum <code>MOBILE = 2;</code>
     */
    public const MOBILE = 2;
    /**
     * Desktop. The extensions in the extension setting will only serve on
     * desktop devices.
     *
     * Generated from protobuf enum <code>DESKTOP = 3;</code>
     */
    public const DESKTOP = 3;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::MOBILE => 'MOBILE',
        self::DESKTOP => 'DESKTOP',
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
class_alias(ExtensionSettingDevice::class, \Google\Ads\GoogleAds\V13\Enums\ExtensionSettingDeviceEnum_ExtensionSettingDevice::class);

