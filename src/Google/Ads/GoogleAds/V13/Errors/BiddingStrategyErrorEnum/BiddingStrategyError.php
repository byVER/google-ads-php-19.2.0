<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/errors/bidding_strategy_error.proto

namespace Google\Ads\GoogleAds\V13\Errors\BiddingStrategyErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible bidding strategy errors.
 *
 * Protobuf type <code>google.ads.googleads.v13.errors.BiddingStrategyErrorEnum.BiddingStrategyError</code>
 */
class BiddingStrategyError
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
     * Each bidding strategy must have a unique name.
     *
     * Generated from protobuf enum <code>DUPLICATE_NAME = 2;</code>
     */
    public const DUPLICATE_NAME = 2;
    /**
     * Bidding strategy type is immutable.
     *
     * Generated from protobuf enum <code>CANNOT_CHANGE_BIDDING_STRATEGY_TYPE = 3;</code>
     */
    public const CANNOT_CHANGE_BIDDING_STRATEGY_TYPE = 3;
    /**
     * Only bidding strategies not linked to campaigns, adgroups or adgroup
     * criteria can be removed.
     *
     * Generated from protobuf enum <code>CANNOT_REMOVE_ASSOCIATED_STRATEGY = 4;</code>
     */
    public const CANNOT_REMOVE_ASSOCIATED_STRATEGY = 4;
    /**
     * The specified bidding strategy is not supported.
     *
     * Generated from protobuf enum <code>BIDDING_STRATEGY_NOT_SUPPORTED = 5;</code>
     */
    public const BIDDING_STRATEGY_NOT_SUPPORTED = 5;
    /**
     * The bidding strategy is incompatible with the campaign's bidding
     * strategy goal type.
     *
     * Generated from protobuf enum <code>INCOMPATIBLE_BIDDING_STRATEGY_AND_BIDDING_STRATEGY_GOAL_TYPE = 6;</code>
     */
    public const INCOMPATIBLE_BIDDING_STRATEGY_AND_BIDDING_STRATEGY_GOAL_TYPE = 6;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::DUPLICATE_NAME => 'DUPLICATE_NAME',
        self::CANNOT_CHANGE_BIDDING_STRATEGY_TYPE => 'CANNOT_CHANGE_BIDDING_STRATEGY_TYPE',
        self::CANNOT_REMOVE_ASSOCIATED_STRATEGY => 'CANNOT_REMOVE_ASSOCIATED_STRATEGY',
        self::BIDDING_STRATEGY_NOT_SUPPORTED => 'BIDDING_STRATEGY_NOT_SUPPORTED',
        self::INCOMPATIBLE_BIDDING_STRATEGY_AND_BIDDING_STRATEGY_GOAL_TYPE => 'INCOMPATIBLE_BIDDING_STRATEGY_AND_BIDDING_STRATEGY_GOAL_TYPE',
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
class_alias(BiddingStrategyError::class, \Google\Ads\GoogleAds\V13\Errors\BiddingStrategyErrorEnum_BiddingStrategyError::class);

