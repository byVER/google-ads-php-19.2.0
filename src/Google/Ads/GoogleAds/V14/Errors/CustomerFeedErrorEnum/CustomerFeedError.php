<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/errors/customer_feed_error.proto

namespace Google\Ads\GoogleAds\V14\Errors\CustomerFeedErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible customer feed errors.
 *
 * Protobuf type <code>google.ads.googleads.v14.errors.CustomerFeedErrorEnum.CustomerFeedError</code>
 */
class CustomerFeedError
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
     * An active feed already exists for this customer and place holder type.
     *
     * Generated from protobuf enum <code>FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE = 2;</code>
     */
    public const FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE = 2;
    /**
     * The specified feed is removed.
     *
     * Generated from protobuf enum <code>CANNOT_CREATE_FOR_REMOVED_FEED = 3;</code>
     */
    public const CANNOT_CREATE_FOR_REMOVED_FEED = 3;
    /**
     * The CustomerFeed already exists. Update should be used to modify the
     * existing CustomerFeed.
     *
     * Generated from protobuf enum <code>CANNOT_CREATE_ALREADY_EXISTING_CUSTOMER_FEED = 4;</code>
     */
    public const CANNOT_CREATE_ALREADY_EXISTING_CUSTOMER_FEED = 4;
    /**
     * Cannot update removed customer feed.
     *
     * Generated from protobuf enum <code>CANNOT_MODIFY_REMOVED_CUSTOMER_FEED = 5;</code>
     */
    public const CANNOT_MODIFY_REMOVED_CUSTOMER_FEED = 5;
    /**
     * Invalid placeholder type.
     *
     * Generated from protobuf enum <code>INVALID_PLACEHOLDER_TYPE = 6;</code>
     */
    public const INVALID_PLACEHOLDER_TYPE = 6;
    /**
     * Feed mapping for this placeholder type does not exist.
     *
     * Generated from protobuf enum <code>MISSING_FEEDMAPPING_FOR_PLACEHOLDER_TYPE = 7;</code>
     */
    public const MISSING_FEEDMAPPING_FOR_PLACEHOLDER_TYPE = 7;
    /**
     * Placeholder not allowed at the account level.
     *
     * Generated from protobuf enum <code>PLACEHOLDER_TYPE_NOT_ALLOWED_ON_CUSTOMER_FEED = 8;</code>
     */
    public const PLACEHOLDER_TYPE_NOT_ALLOWED_ON_CUSTOMER_FEED = 8;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE => 'FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE',
        self::CANNOT_CREATE_FOR_REMOVED_FEED => 'CANNOT_CREATE_FOR_REMOVED_FEED',
        self::CANNOT_CREATE_ALREADY_EXISTING_CUSTOMER_FEED => 'CANNOT_CREATE_ALREADY_EXISTING_CUSTOMER_FEED',
        self::CANNOT_MODIFY_REMOVED_CUSTOMER_FEED => 'CANNOT_MODIFY_REMOVED_CUSTOMER_FEED',
        self::INVALID_PLACEHOLDER_TYPE => 'INVALID_PLACEHOLDER_TYPE',
        self::MISSING_FEEDMAPPING_FOR_PLACEHOLDER_TYPE => 'MISSING_FEEDMAPPING_FOR_PLACEHOLDER_TYPE',
        self::PLACEHOLDER_TYPE_NOT_ALLOWED_ON_CUSTOMER_FEED => 'PLACEHOLDER_TYPE_NOT_ALLOWED_ON_CUSTOMER_FEED',
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
class_alias(CustomerFeedError::class, \Google\Ads\GoogleAds\V14\Errors\CustomerFeedErrorEnum_CustomerFeedError::class);

