<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/asset_link_status.proto

namespace Google\Ads\GoogleAds\V14\Enums\AssetLinkStatusEnum;

use UnexpectedValueException;

/**
 * Enum describing statuses of an asset link.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.AssetLinkStatusEnum.AssetLinkStatus</code>
 */
class AssetLinkStatus
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
     * Asset link is enabled.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    public const ENABLED = 2;
    /**
     * Asset link has been removed.
     *
     * Generated from protobuf enum <code>REMOVED = 3;</code>
     */
    public const REMOVED = 3;
    /**
     * Asset link is paused.
     *
     * Generated from protobuf enum <code>PAUSED = 4;</code>
     */
    public const PAUSED = 4;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ENABLED => 'ENABLED',
        self::REMOVED => 'REMOVED',
        self::PAUSED => 'PAUSED',
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
class_alias(AssetLinkStatus::class, \Google\Ads\GoogleAds\V14\Enums\AssetLinkStatusEnum_AssetLinkStatus::class);

