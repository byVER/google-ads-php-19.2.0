<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/feed_item_target_type.proto

namespace Google\Ads\GoogleAds\V14\Enums\FeedItemTargetTypeEnum;

use UnexpectedValueException;

/**
 * Possible type of a feed item target.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.FeedItemTargetTypeEnum.FeedItemTargetType</code>
 */
class FeedItemTargetType
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
     * Feed item targets a campaign.
     *
     * Generated from protobuf enum <code>CAMPAIGN = 2;</code>
     */
    public const CAMPAIGN = 2;
    /**
     * Feed item targets an ad group.
     *
     * Generated from protobuf enum <code>AD_GROUP = 3;</code>
     */
    public const AD_GROUP = 3;
    /**
     * Feed item targets a criterion.
     *
     * Generated from protobuf enum <code>CRITERION = 4;</code>
     */
    public const CRITERION = 4;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CAMPAIGN => 'CAMPAIGN',
        self::AD_GROUP => 'AD_GROUP',
        self::CRITERION => 'CRITERION',
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
class_alias(FeedItemTargetType::class, \Google\Ads\GoogleAds\V14\Enums\FeedItemTargetTypeEnum_FeedItemTargetType::class);

