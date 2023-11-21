<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/enums/affiliate_location_feed_relationship_type.proto

namespace Google\Ads\GoogleAds\V12\Enums\AffiliateLocationFeedRelationshipTypeEnum;

use UnexpectedValueException;

/**
 * Possible values for a relationship type for an affiliate location feed.
 *
 * Protobuf type <code>google.ads.googleads.v12.enums.AffiliateLocationFeedRelationshipTypeEnum.AffiliateLocationFeedRelationshipType</code>
 */
class AffiliateLocationFeedRelationshipType
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
     * General retailer relationship.
     *
     * Generated from protobuf enum <code>GENERAL_RETAILER = 2;</code>
     */
    public const GENERAL_RETAILER = 2;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::GENERAL_RETAILER => 'GENERAL_RETAILER',
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
class_alias(AffiliateLocationFeedRelationshipType::class, \Google\Ads\GoogleAds\V12\Enums\AffiliateLocationFeedRelationshipTypeEnum_AffiliateLocationFeedRelationshipType::class);

