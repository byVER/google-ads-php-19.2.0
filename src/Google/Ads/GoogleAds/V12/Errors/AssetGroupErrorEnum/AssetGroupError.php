<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/errors/asset_group_error.proto

namespace Google\Ads\GoogleAds\V12\Errors\AssetGroupErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible asset group errors.
 *
 * Protobuf type <code>google.ads.googleads.v12.errors.AssetGroupErrorEnum.AssetGroupError</code>
 */
class AssetGroupError
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
     * Each asset group in a single campaign must have a unique name.
     *
     * Generated from protobuf enum <code>DUPLICATE_NAME = 2;</code>
     */
    public const DUPLICATE_NAME = 2;
    /**
     * Cannot add asset group for the campaign type.
     *
     * Generated from protobuf enum <code>CANNOT_ADD_ASSET_GROUP_FOR_CAMPAIGN_TYPE = 3;</code>
     */
    public const CANNOT_ADD_ASSET_GROUP_FOR_CAMPAIGN_TYPE = 3;
    /**
     * Not enough headline asset for a valid asset group.
     *
     * Generated from protobuf enum <code>NOT_ENOUGH_HEADLINE_ASSET = 4;</code>
     */
    public const NOT_ENOUGH_HEADLINE_ASSET = 4;
    /**
     * Not enough long headline asset for a valid asset group.
     *
     * Generated from protobuf enum <code>NOT_ENOUGH_LONG_HEADLINE_ASSET = 5;</code>
     */
    public const NOT_ENOUGH_LONG_HEADLINE_ASSET = 5;
    /**
     * Not enough description headline asset for a valid asset group.
     *
     * Generated from protobuf enum <code>NOT_ENOUGH_DESCRIPTION_ASSET = 6;</code>
     */
    public const NOT_ENOUGH_DESCRIPTION_ASSET = 6;
    /**
     * Not enough business name asset for a valid asset group.
     *
     * Generated from protobuf enum <code>NOT_ENOUGH_BUSINESS_NAME_ASSET = 7;</code>
     */
    public const NOT_ENOUGH_BUSINESS_NAME_ASSET = 7;
    /**
     * Not enough marketing image asset for a valid asset group.
     *
     * Generated from protobuf enum <code>NOT_ENOUGH_MARKETING_IMAGE_ASSET = 8;</code>
     */
    public const NOT_ENOUGH_MARKETING_IMAGE_ASSET = 8;
    /**
     * Not enough square marketing image asset for a valid asset group.
     *
     * Generated from protobuf enum <code>NOT_ENOUGH_SQUARE_MARKETING_IMAGE_ASSET = 9;</code>
     */
    public const NOT_ENOUGH_SQUARE_MARKETING_IMAGE_ASSET = 9;
    /**
     * Not enough logo asset for a valid asset group.
     *
     * Generated from protobuf enum <code>NOT_ENOUGH_LOGO_ASSET = 10;</code>
     */
    public const NOT_ENOUGH_LOGO_ASSET = 10;
    /**
     * Final url and shopping merchant url does not have the same domain.
     *
     * Generated from protobuf enum <code>FINAL_URL_SHOPPING_MERCHANT_HOME_PAGE_URL_DOMAINS_DIFFER = 11;</code>
     */
    public const FINAL_URL_SHOPPING_MERCHANT_HOME_PAGE_URL_DOMAINS_DIFFER = 11;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::DUPLICATE_NAME => 'DUPLICATE_NAME',
        self::CANNOT_ADD_ASSET_GROUP_FOR_CAMPAIGN_TYPE => 'CANNOT_ADD_ASSET_GROUP_FOR_CAMPAIGN_TYPE',
        self::NOT_ENOUGH_HEADLINE_ASSET => 'NOT_ENOUGH_HEADLINE_ASSET',
        self::NOT_ENOUGH_LONG_HEADLINE_ASSET => 'NOT_ENOUGH_LONG_HEADLINE_ASSET',
        self::NOT_ENOUGH_DESCRIPTION_ASSET => 'NOT_ENOUGH_DESCRIPTION_ASSET',
        self::NOT_ENOUGH_BUSINESS_NAME_ASSET => 'NOT_ENOUGH_BUSINESS_NAME_ASSET',
        self::NOT_ENOUGH_MARKETING_IMAGE_ASSET => 'NOT_ENOUGH_MARKETING_IMAGE_ASSET',
        self::NOT_ENOUGH_SQUARE_MARKETING_IMAGE_ASSET => 'NOT_ENOUGH_SQUARE_MARKETING_IMAGE_ASSET',
        self::NOT_ENOUGH_LOGO_ASSET => 'NOT_ENOUGH_LOGO_ASSET',
        self::FINAL_URL_SHOPPING_MERCHANT_HOME_PAGE_URL_DOMAINS_DIFFER => 'FINAL_URL_SHOPPING_MERCHANT_HOME_PAGE_URL_DOMAINS_DIFFER',
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
class_alias(AssetGroupError::class, \Google\Ads\GoogleAds\V12\Errors\AssetGroupErrorEnum_AssetGroupError::class);

