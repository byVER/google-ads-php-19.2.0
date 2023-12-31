<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/errors/asset_group_asset_error.proto

namespace Google\Ads\GoogleAds\V12\Errors\AssetGroupAssetErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible asset group asset errors.
 *
 * Protobuf type <code>google.ads.googleads.v12.errors.AssetGroupAssetErrorEnum.AssetGroupAssetError</code>
 */
class AssetGroupAssetError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    public const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    public const UNKNOWN = 1;
    /**
     * Cannot add duplicated asset group asset.
     *
     * Generated from protobuf enum <code>DUPLICATE_RESOURCE = 2;</code>
     */
    public const DUPLICATE_RESOURCE = 2;
    /**
     * Expandable tags are not allowed in description assets.
     *
     * Generated from protobuf enum <code>EXPANDABLE_TAGS_NOT_ALLOWED_IN_DESCRIPTION = 3;</code>
     */
    public const EXPANDABLE_TAGS_NOT_ALLOWED_IN_DESCRIPTION = 3;
    /**
     * Ad customizers are not supported in assetgroup's text assets.
     *
     * Generated from protobuf enum <code>AD_CUSTOMIZER_NOT_SUPPORTED = 4;</code>
     */
    public const AD_CUSTOMIZER_NOT_SUPPORTED = 4;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::DUPLICATE_RESOURCE => 'DUPLICATE_RESOURCE',
        self::EXPANDABLE_TAGS_NOT_ALLOWED_IN_DESCRIPTION => 'EXPANDABLE_TAGS_NOT_ALLOWED_IN_DESCRIPTION',
        self::AD_CUSTOMIZER_NOT_SUPPORTED => 'AD_CUSTOMIZER_NOT_SUPPORTED',
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
class_alias(AssetGroupAssetError::class, \Google\Ads\GoogleAds\V12\Errors\AssetGroupAssetErrorEnum_AssetGroupAssetError::class);

