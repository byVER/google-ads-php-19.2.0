<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/enums/feed_link_status.proto

namespace Google\Ads\GoogleAds\V12\Enums\FeedLinkStatusEnum;

use UnexpectedValueException;

/**
 * Possible statuses of a feed link.
 *
 * Protobuf type <code>google.ads.googleads.v12.enums.FeedLinkStatusEnum.FeedLinkStatus</code>
 */
class FeedLinkStatus
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
     * Feed link is enabled.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    public const ENABLED = 2;
    /**
     * Feed link has been removed.
     *
     * Generated from protobuf enum <code>REMOVED = 3;</code>
     */
    public const REMOVED = 3;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ENABLED => 'ENABLED',
        self::REMOVED => 'REMOVED',
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
class_alias(FeedLinkStatus::class, \Google\Ads\GoogleAds\V12\Enums\FeedLinkStatusEnum_FeedLinkStatus::class);

