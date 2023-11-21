<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/enums/listing_group_filter_bidding_category_level.proto

namespace Google\Ads\GoogleAds\V13\Enums\ListingGroupFilterBiddingCategoryLevelEnum;

use UnexpectedValueException;

/**
 * The level of the listing group filter bidding category.
 *
 * Protobuf type <code>google.ads.googleads.v13.enums.ListingGroupFilterBiddingCategoryLevelEnum.ListingGroupFilterBiddingCategoryLevel</code>
 */
class ListingGroupFilterBiddingCategoryLevel
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
     * Level 1.
     *
     * Generated from protobuf enum <code>LEVEL1 = 2;</code>
     */
    public const LEVEL1 = 2;
    /**
     * Level 2.
     *
     * Generated from protobuf enum <code>LEVEL2 = 3;</code>
     */
    public const LEVEL2 = 3;
    /**
     * Level 3.
     *
     * Generated from protobuf enum <code>LEVEL3 = 4;</code>
     */
    public const LEVEL3 = 4;
    /**
     * Level 4.
     *
     * Generated from protobuf enum <code>LEVEL4 = 5;</code>
     */
    public const LEVEL4 = 5;
    /**
     * Level 5.
     *
     * Generated from protobuf enum <code>LEVEL5 = 6;</code>
     */
    public const LEVEL5 = 6;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::LEVEL1 => 'LEVEL1',
        self::LEVEL2 => 'LEVEL2',
        self::LEVEL3 => 'LEVEL3',
        self::LEVEL4 => 'LEVEL4',
        self::LEVEL5 => 'LEVEL5',
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
class_alias(ListingGroupFilterBiddingCategoryLevel::class, \Google\Ads\GoogleAds\V13\Enums\ListingGroupFilterBiddingCategoryLevelEnum_ListingGroupFilterBiddingCategoryLevel::class);

