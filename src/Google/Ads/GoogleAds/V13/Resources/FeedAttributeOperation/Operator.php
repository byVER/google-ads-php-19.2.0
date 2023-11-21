<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/resources/feed.proto

namespace Google\Ads\GoogleAds\V13\Resources\FeedAttributeOperation;

use UnexpectedValueException;

/**
 * The operator.
 *
 * Protobuf type <code>google.ads.googleads.v13.resources.FeedAttributeOperation.Operator</code>
 */
class Operator
{
    /**
     * Unspecified.
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
     * Add the attribute to the existing attributes.
     *
     * Generated from protobuf enum <code>ADD = 2;</code>
     */
    public const ADD = 2;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ADD => 'ADD',
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
class_alias(Operator::class, \Google\Ads\GoogleAds\V13\Resources\FeedAttributeOperation_Operator::class);

