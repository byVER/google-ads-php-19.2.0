<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/enums/bidding_strategy_system_status.proto

namespace Google\Ads\GoogleAds\V13\Enums\BiddingStrategySystemStatusEnum;

use UnexpectedValueException;

/**
 * The possible system statuses of a BiddingStrategy.
 *
 * Protobuf type <code>google.ads.googleads.v13.enums.BiddingStrategySystemStatusEnum.BiddingStrategySystemStatus</code>
 */
class BiddingStrategySystemStatus
{
    /**
     * Signals that an unexpected error occurred, for example, no bidding
     * strategy type was found, or no status information was found.
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
     * The bid strategy is active, and AdWords cannot find any specific issues
     * with the strategy.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    public const ENABLED = 2;
    /**
     * The bid strategy is learning because it has been recently created or
     * recently reactivated.
     *
     * Generated from protobuf enum <code>LEARNING_NEW = 3;</code>
     */
    public const LEARNING_NEW = 3;
    /**
     * The bid strategy is learning because of a recent setting change.
     *
     * Generated from protobuf enum <code>LEARNING_SETTING_CHANGE = 4;</code>
     */
    public const LEARNING_SETTING_CHANGE = 4;
    /**
     * The bid strategy is learning because of a recent budget change.
     *
     * Generated from protobuf enum <code>LEARNING_BUDGET_CHANGE = 5;</code>
     */
    public const LEARNING_BUDGET_CHANGE = 5;
    /**
     * The bid strategy is learning because of recent change in number of
     * campaigns, ad groups or keywords attached to it.
     *
     * Generated from protobuf enum <code>LEARNING_COMPOSITION_CHANGE = 6;</code>
     */
    public const LEARNING_COMPOSITION_CHANGE = 6;
    /**
     * The bid strategy depends on conversion reporting and the customer
     * recently modified conversion types that were relevant to the
     * bid strategy.
     *
     * Generated from protobuf enum <code>LEARNING_CONVERSION_TYPE_CHANGE = 7;</code>
     */
    public const LEARNING_CONVERSION_TYPE_CHANGE = 7;
    /**
     * The bid strategy depends on conversion reporting and the customer
     * recently changed their conversion settings.
     *
     * Generated from protobuf enum <code>LEARNING_CONVERSION_SETTING_CHANGE = 8;</code>
     */
    public const LEARNING_CONVERSION_SETTING_CHANGE = 8;
    /**
     * The bid strategy is limited by its bid ceiling.
     *
     * Generated from protobuf enum <code>LIMITED_BY_CPC_BID_CEILING = 9;</code>
     */
    public const LIMITED_BY_CPC_BID_CEILING = 9;
    /**
     * The bid strategy is limited by its bid floor.
     *
     * Generated from protobuf enum <code>LIMITED_BY_CPC_BID_FLOOR = 10;</code>
     */
    public const LIMITED_BY_CPC_BID_FLOOR = 10;
    /**
     * The bid strategy is limited because there was not enough conversion
     * traffic over the past weeks.
     *
     * Generated from protobuf enum <code>LIMITED_BY_DATA = 11;</code>
     */
    public const LIMITED_BY_DATA = 11;
    /**
     * A significant fraction of keywords in this bid strategy are limited by
     * budget.
     *
     * Generated from protobuf enum <code>LIMITED_BY_BUDGET = 12;</code>
     */
    public const LIMITED_BY_BUDGET = 12;
    /**
     * The bid strategy cannot reach its target spend because its spend has
     * been de-prioritized.
     *
     * Generated from protobuf enum <code>LIMITED_BY_LOW_PRIORITY_SPEND = 13;</code>
     */
    public const LIMITED_BY_LOW_PRIORITY_SPEND = 13;
    /**
     * A significant fraction of keywords in this bid strategy have a low
     * Quality Score.
     *
     * Generated from protobuf enum <code>LIMITED_BY_LOW_QUALITY = 14;</code>
     */
    public const LIMITED_BY_LOW_QUALITY = 14;
    /**
     * The bid strategy cannot fully spend its budget because of narrow
     * targeting.
     *
     * Generated from protobuf enum <code>LIMITED_BY_INVENTORY = 15;</code>
     */
    public const LIMITED_BY_INVENTORY = 15;
    /**
     * Missing conversion tracking (no pings present) and/or remarketing lists
     * for SSC.
     *
     * Generated from protobuf enum <code>MISCONFIGURED_ZERO_ELIGIBILITY = 16;</code>
     */
    public const MISCONFIGURED_ZERO_ELIGIBILITY = 16;
    /**
     * The bid strategy depends on conversion reporting and the customer is
     * lacking conversion types that might be reported against this strategy.
     *
     * Generated from protobuf enum <code>MISCONFIGURED_CONVERSION_TYPES = 17;</code>
     */
    public const MISCONFIGURED_CONVERSION_TYPES = 17;
    /**
     * The bid strategy depends on conversion reporting and the customer's
     * conversion settings are misconfigured.
     *
     * Generated from protobuf enum <code>MISCONFIGURED_CONVERSION_SETTINGS = 18;</code>
     */
    public const MISCONFIGURED_CONVERSION_SETTINGS = 18;
    /**
     * There are campaigns outside the bid strategy that share budgets with
     * campaigns included in the strategy.
     *
     * Generated from protobuf enum <code>MISCONFIGURED_SHARED_BUDGET = 19;</code>
     */
    public const MISCONFIGURED_SHARED_BUDGET = 19;
    /**
     * The campaign has an invalid strategy type and is not serving.
     *
     * Generated from protobuf enum <code>MISCONFIGURED_STRATEGY_TYPE = 20;</code>
     */
    public const MISCONFIGURED_STRATEGY_TYPE = 20;
    /**
     * The bid strategy is not active. Either there are no active campaigns,
     * ad groups or keywords attached to the bid strategy. Or there are no
     * active budgets connected to the bid strategy.
     *
     * Generated from protobuf enum <code>PAUSED = 21;</code>
     */
    public const PAUSED = 21;
    /**
     * This bid strategy currently does not support status reporting.
     *
     * Generated from protobuf enum <code>UNAVAILABLE = 22;</code>
     */
    public const UNAVAILABLE = 22;
    /**
     * There were multiple LEARNING_* system statuses for this bid strategy
     * during the time in question.
     *
     * Generated from protobuf enum <code>MULTIPLE_LEARNING = 23;</code>
     */
    public const MULTIPLE_LEARNING = 23;
    /**
     * There were multiple LIMITED_* system statuses for this bid strategy
     * during the time in question.
     *
     * Generated from protobuf enum <code>MULTIPLE_LIMITED = 24;</code>
     */
    public const MULTIPLE_LIMITED = 24;
    /**
     * There were multiple MISCONFIGURED_* system statuses for this bid strategy
     * during the time in question.
     *
     * Generated from protobuf enum <code>MULTIPLE_MISCONFIGURED = 25;</code>
     */
    public const MULTIPLE_MISCONFIGURED = 25;
    /**
     * There were multiple system statuses for this bid strategy during the
     * time in question.
     *
     * Generated from protobuf enum <code>MULTIPLE = 26;</code>
     */
    public const MULTIPLE = 26;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ENABLED => 'ENABLED',
        self::LEARNING_NEW => 'LEARNING_NEW',
        self::LEARNING_SETTING_CHANGE => 'LEARNING_SETTING_CHANGE',
        self::LEARNING_BUDGET_CHANGE => 'LEARNING_BUDGET_CHANGE',
        self::LEARNING_COMPOSITION_CHANGE => 'LEARNING_COMPOSITION_CHANGE',
        self::LEARNING_CONVERSION_TYPE_CHANGE => 'LEARNING_CONVERSION_TYPE_CHANGE',
        self::LEARNING_CONVERSION_SETTING_CHANGE => 'LEARNING_CONVERSION_SETTING_CHANGE',
        self::LIMITED_BY_CPC_BID_CEILING => 'LIMITED_BY_CPC_BID_CEILING',
        self::LIMITED_BY_CPC_BID_FLOOR => 'LIMITED_BY_CPC_BID_FLOOR',
        self::LIMITED_BY_DATA => 'LIMITED_BY_DATA',
        self::LIMITED_BY_BUDGET => 'LIMITED_BY_BUDGET',
        self::LIMITED_BY_LOW_PRIORITY_SPEND => 'LIMITED_BY_LOW_PRIORITY_SPEND',
        self::LIMITED_BY_LOW_QUALITY => 'LIMITED_BY_LOW_QUALITY',
        self::LIMITED_BY_INVENTORY => 'LIMITED_BY_INVENTORY',
        self::MISCONFIGURED_ZERO_ELIGIBILITY => 'MISCONFIGURED_ZERO_ELIGIBILITY',
        self::MISCONFIGURED_CONVERSION_TYPES => 'MISCONFIGURED_CONVERSION_TYPES',
        self::MISCONFIGURED_CONVERSION_SETTINGS => 'MISCONFIGURED_CONVERSION_SETTINGS',
        self::MISCONFIGURED_SHARED_BUDGET => 'MISCONFIGURED_SHARED_BUDGET',
        self::MISCONFIGURED_STRATEGY_TYPE => 'MISCONFIGURED_STRATEGY_TYPE',
        self::PAUSED => 'PAUSED',
        self::UNAVAILABLE => 'UNAVAILABLE',
        self::MULTIPLE_LEARNING => 'MULTIPLE_LEARNING',
        self::MULTIPLE_LIMITED => 'MULTIPLE_LIMITED',
        self::MULTIPLE_MISCONFIGURED => 'MULTIPLE_MISCONFIGURED',
        self::MULTIPLE => 'MULTIPLE',
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
class_alias(BiddingStrategySystemStatus::class, \Google\Ads\GoogleAds\V13\Enums\BiddingStrategySystemStatusEnum_BiddingStrategySystemStatus::class);

