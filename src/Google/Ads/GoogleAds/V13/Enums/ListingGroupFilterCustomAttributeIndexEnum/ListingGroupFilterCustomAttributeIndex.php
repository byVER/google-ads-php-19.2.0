<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/enums/listing_group_filter_custom_attribute_index.proto

namespace Google\Ads\GoogleAds\V13\Enums\ListingGroupFilterCustomAttributeIndexEnum;

use UnexpectedValueException;

/**
 * The index of customer attributes.
 *
 * Protobuf type <code>google.ads.googleads.v13.enums.ListingGroupFilterCustomAttributeIndexEnum.ListingGroupFilterCustomAttributeIndex</code>
 */
class ListingGroupFilterCustomAttributeIndex
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
     * First listing group filter custom attribute.
     *
     * Generated from protobuf enum <code>INDEX0 = 2;</code>
     */
    public const INDEX0 = 2;
    /**
     * Second listing group filter custom attribute.
     *
     * Generated from protobuf enum <code>INDEX1 = 3;</code>
     */
    public const INDEX1 = 3;
    /**
     * Third listing group filter custom attribute.
     *
     * Generated from protobuf enum <code>INDEX2 = 4;</code>
     */
    public const INDEX2 = 4;
    /**
     * Fourth listing group filter custom attribute.
     *
     * Generated from protobuf enum <code>INDEX3 = 5;</code>
     */
    public const INDEX3 = 5;
    /**
     * Fifth listing group filter custom attribute.
     *
     * Generated from protobuf enum <code>INDEX4 = 6;</code>
     */
    public const INDEX4 = 6;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::INDEX0 => 'INDEX0',
        self::INDEX1 => 'INDEX1',
        self::INDEX2 => 'INDEX2',
        self::INDEX3 => 'INDEX3',
        self::INDEX4 => 'INDEX4',
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
class_alias(ListingGroupFilterCustomAttributeIndex::class, \Google\Ads\GoogleAds\V13\Enums\ListingGroupFilterCustomAttributeIndexEnum_ListingGroupFilterCustomAttributeIndex::class);

