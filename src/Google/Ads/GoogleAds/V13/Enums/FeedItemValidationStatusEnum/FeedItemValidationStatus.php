<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/enums/feed_item_validation_status.proto

namespace Google\Ads\GoogleAds\V13\Enums\FeedItemValidationStatusEnum;

use UnexpectedValueException;

/**
 * The possible validation statuses of a feed item.
 *
 * Protobuf type <code>google.ads.googleads.v13.enums.FeedItemValidationStatusEnum.FeedItemValidationStatus</code>
 */
class FeedItemValidationStatus
{
    /**
     * No value has been specified.
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
     * Validation pending.
     *
     * Generated from protobuf enum <code>PENDING = 2;</code>
     */
    public const PENDING = 2;
    /**
     * An error was found.
     *
     * Generated from protobuf enum <code>INVALID = 3;</code>
     */
    public const INVALID = 3;
    /**
     * Feed item is semantically well-formed.
     *
     * Generated from protobuf enum <code>VALID = 4;</code>
     */
    public const VALID = 4;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::PENDING => 'PENDING',
        self::INVALID => 'INVALID',
        self::VALID => 'VALID',
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
class_alias(FeedItemValidationStatus::class, \Google\Ads\GoogleAds\V13\Enums\FeedItemValidationStatusEnum_FeedItemValidationStatus::class);

