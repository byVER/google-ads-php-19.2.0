<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/errors/bidding_error.proto

namespace Google\Ads\GoogleAds\V12\Errors\BiddingErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible bidding errors.
 *
 * Protobuf type <code>google.ads.googleads.v12.errors.BiddingErrorEnum.BiddingError</code>
 */
class BiddingError
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
     * Cannot transition to new bidding strategy.
     *
     * Generated from protobuf enum <code>BIDDING_STRATEGY_TRANSITION_NOT_ALLOWED = 2;</code>
     */
    public const BIDDING_STRATEGY_TRANSITION_NOT_ALLOWED = 2;
    /**
     * Cannot attach bidding strategy to campaign.
     *
     * Generated from protobuf enum <code>CANNOT_ATTACH_BIDDING_STRATEGY_TO_CAMPAIGN = 7;</code>
     */
    public const CANNOT_ATTACH_BIDDING_STRATEGY_TO_CAMPAIGN = 7;
    /**
     * Bidding strategy is not supported or cannot be used as anonymous.
     *
     * Generated from protobuf enum <code>INVALID_ANONYMOUS_BIDDING_STRATEGY_TYPE = 10;</code>
     */
    public const INVALID_ANONYMOUS_BIDDING_STRATEGY_TYPE = 10;
    /**
     * The type does not match the named strategy's type.
     *
     * Generated from protobuf enum <code>INVALID_BIDDING_STRATEGY_TYPE = 14;</code>
     */
    public const INVALID_BIDDING_STRATEGY_TYPE = 14;
    /**
     * The bid is invalid.
     *
     * Generated from protobuf enum <code>INVALID_BID = 17;</code>
     */
    public const INVALID_BID = 17;
    /**
     * Bidding strategy is not available for the account type.
     *
     * Generated from protobuf enum <code>BIDDING_STRATEGY_NOT_AVAILABLE_FOR_ACCOUNT_TYPE = 18;</code>
     */
    public const BIDDING_STRATEGY_NOT_AVAILABLE_FOR_ACCOUNT_TYPE = 18;
    /**
     * Conversion tracking is not enabled in the campaign that has value-based
     * bidding transitions.
     *
     * Generated from protobuf enum <code>CONVERSION_TRACKING_NOT_ENABLED = 19;</code>
     */
    public const CONVERSION_TRACKING_NOT_ENABLED = 19;
    /**
     * Not enough conversions tracked for value-based bidding transitions.
     *
     * Generated from protobuf enum <code>NOT_ENOUGH_CONVERSIONS = 20;</code>
     */
    public const NOT_ENOUGH_CONVERSIONS = 20;
    /**
     * Campaign can not be created with given bidding strategy. It can be
     * transitioned to the strategy, once eligible.
     *
     * Generated from protobuf enum <code>CANNOT_CREATE_CAMPAIGN_WITH_BIDDING_STRATEGY = 21;</code>
     */
    public const CANNOT_CREATE_CAMPAIGN_WITH_BIDDING_STRATEGY = 21;
    /**
     * Cannot target content network only as campaign uses Page One Promoted
     * bidding strategy.
     *
     * Generated from protobuf enum <code>CANNOT_TARGET_CONTENT_NETWORK_ONLY_WITH_CAMPAIGN_LEVEL_POP_BIDDING_STRATEGY = 23;</code>
     */
    public const CANNOT_TARGET_CONTENT_NETWORK_ONLY_WITH_CAMPAIGN_LEVEL_POP_BIDDING_STRATEGY = 23;
    /**
     * Budget Optimizer and Target Spend bidding strategies are not supported
     * for campaigns with AdSchedule targeting.
     *
     * Generated from protobuf enum <code>BIDDING_STRATEGY_NOT_SUPPORTED_WITH_AD_SCHEDULE = 24;</code>
     */
    public const BIDDING_STRATEGY_NOT_SUPPORTED_WITH_AD_SCHEDULE = 24;
    /**
     * Pay per conversion is not available to all the customer, only few
     * customers on the allow-list can use this.
     *
     * Generated from protobuf enum <code>PAY_PER_CONVERSION_NOT_AVAILABLE_FOR_CUSTOMER = 25;</code>
     */
    public const PAY_PER_CONVERSION_NOT_AVAILABLE_FOR_CUSTOMER = 25;
    /**
     * Pay per conversion is not allowed with Target CPA.
     *
     * Generated from protobuf enum <code>PAY_PER_CONVERSION_NOT_ALLOWED_WITH_TARGET_CPA = 26;</code>
     */
    public const PAY_PER_CONVERSION_NOT_ALLOWED_WITH_TARGET_CPA = 26;
    /**
     * Cannot set bidding strategy to Manual CPM for search network only
     * campaigns.
     *
     * Generated from protobuf enum <code>BIDDING_STRATEGY_NOT_ALLOWED_FOR_SEARCH_ONLY_CAMPAIGNS = 27;</code>
     */
    public const BIDDING_STRATEGY_NOT_ALLOWED_FOR_SEARCH_ONLY_CAMPAIGNS = 27;
    /**
     * The bidding strategy is not supported for use in drafts or experiments.
     *
     * Generated from protobuf enum <code>BIDDING_STRATEGY_NOT_SUPPORTED_IN_DRAFTS_OR_EXPERIMENTS = 28;</code>
     */
    public const BIDDING_STRATEGY_NOT_SUPPORTED_IN_DRAFTS_OR_EXPERIMENTS = 28;
    /**
     * Bidding strategy type does not support product type ad group criterion.
     *
     * Generated from protobuf enum <code>BIDDING_STRATEGY_TYPE_DOES_NOT_SUPPORT_PRODUCT_TYPE_ADGROUP_CRITERION = 29;</code>
     */
    public const BIDDING_STRATEGY_TYPE_DOES_NOT_SUPPORT_PRODUCT_TYPE_ADGROUP_CRITERION = 29;
    /**
     * Bid amount is too small.
     *
     * Generated from protobuf enum <code>BID_TOO_SMALL = 30;</code>
     */
    public const BID_TOO_SMALL = 30;
    /**
     * Bid amount is too big.
     *
     * Generated from protobuf enum <code>BID_TOO_BIG = 31;</code>
     */
    public const BID_TOO_BIG = 31;
    /**
     * Bid has too many fractional digit precision.
     *
     * Generated from protobuf enum <code>BID_TOO_MANY_FRACTIONAL_DIGITS = 32;</code>
     */
    public const BID_TOO_MANY_FRACTIONAL_DIGITS = 32;
    /**
     * Invalid domain name specified.
     *
     * Generated from protobuf enum <code>INVALID_DOMAIN_NAME = 33;</code>
     */
    public const INVALID_DOMAIN_NAME = 33;
    /**
     * The field is not compatible with the payment mode.
     *
     * Generated from protobuf enum <code>NOT_COMPATIBLE_WITH_PAYMENT_MODE = 34;</code>
     */
    public const NOT_COMPATIBLE_WITH_PAYMENT_MODE = 34;
    /**
     * The field is not compatible with the budget type.
     *
     * Generated from protobuf enum <code>NOT_COMPATIBLE_WITH_BUDGET_TYPE = 35;</code>
     */
    public const NOT_COMPATIBLE_WITH_BUDGET_TYPE = 35;
    /**
     * The field is not compatible with the bidding strategy type.
     *
     * Generated from protobuf enum <code>NOT_COMPATIBLE_WITH_BIDDING_STRATEGY_TYPE = 36;</code>
     */
    public const NOT_COMPATIBLE_WITH_BIDDING_STRATEGY_TYPE = 36;
    /**
     * Bidding strategy type is incompatible with shared budget.
     *
     * Generated from protobuf enum <code>BIDDING_STRATEGY_TYPE_INCOMPATIBLE_WITH_SHARED_BUDGET = 37;</code>
     */
    public const BIDDING_STRATEGY_TYPE_INCOMPATIBLE_WITH_SHARED_BUDGET = 37;
    /**
     * The attached bidding strategy and budget must be aligned with each other
     * if alignment is specified on either entity.
     *
     * Generated from protobuf enum <code>BIDDING_STRATEGY_AND_BUDGET_MUST_BE_ALIGNED = 38;</code>
     */
    public const BIDDING_STRATEGY_AND_BUDGET_MUST_BE_ALIGNED = 38;
    /**
     * The attached bidding strategy and budget must be attached to the same
     * campaigns to become aligned.
     *
     * Generated from protobuf enum <code>BIDDING_STRATEGY_AND_BUDGET_MUST_BE_ATTACHED_TO_THE_SAME_CAMPAIGNS_TO_ALIGN = 39;</code>
     */
    public const BIDDING_STRATEGY_AND_BUDGET_MUST_BE_ATTACHED_TO_THE_SAME_CAMPAIGNS_TO_ALIGN = 39;
    /**
     * The aligned bidding strategy and budget must be removed at the same time.
     *
     * Generated from protobuf enum <code>BIDDING_STRATEGY_AND_BUDGET_MUST_BE_REMOVED_TOGETHER = 40;</code>
     */
    public const BIDDING_STRATEGY_AND_BUDGET_MUST_BE_REMOVED_TOGETHER = 40;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::BIDDING_STRATEGY_TRANSITION_NOT_ALLOWED => 'BIDDING_STRATEGY_TRANSITION_NOT_ALLOWED',
        self::CANNOT_ATTACH_BIDDING_STRATEGY_TO_CAMPAIGN => 'CANNOT_ATTACH_BIDDING_STRATEGY_TO_CAMPAIGN',
        self::INVALID_ANONYMOUS_BIDDING_STRATEGY_TYPE => 'INVALID_ANONYMOUS_BIDDING_STRATEGY_TYPE',
        self::INVALID_BIDDING_STRATEGY_TYPE => 'INVALID_BIDDING_STRATEGY_TYPE',
        self::INVALID_BID => 'INVALID_BID',
        self::BIDDING_STRATEGY_NOT_AVAILABLE_FOR_ACCOUNT_TYPE => 'BIDDING_STRATEGY_NOT_AVAILABLE_FOR_ACCOUNT_TYPE',
        self::CONVERSION_TRACKING_NOT_ENABLED => 'CONVERSION_TRACKING_NOT_ENABLED',
        self::NOT_ENOUGH_CONVERSIONS => 'NOT_ENOUGH_CONVERSIONS',
        self::CANNOT_CREATE_CAMPAIGN_WITH_BIDDING_STRATEGY => 'CANNOT_CREATE_CAMPAIGN_WITH_BIDDING_STRATEGY',
        self::CANNOT_TARGET_CONTENT_NETWORK_ONLY_WITH_CAMPAIGN_LEVEL_POP_BIDDING_STRATEGY => 'CANNOT_TARGET_CONTENT_NETWORK_ONLY_WITH_CAMPAIGN_LEVEL_POP_BIDDING_STRATEGY',
        self::BIDDING_STRATEGY_NOT_SUPPORTED_WITH_AD_SCHEDULE => 'BIDDING_STRATEGY_NOT_SUPPORTED_WITH_AD_SCHEDULE',
        self::PAY_PER_CONVERSION_NOT_AVAILABLE_FOR_CUSTOMER => 'PAY_PER_CONVERSION_NOT_AVAILABLE_FOR_CUSTOMER',
        self::PAY_PER_CONVERSION_NOT_ALLOWED_WITH_TARGET_CPA => 'PAY_PER_CONVERSION_NOT_ALLOWED_WITH_TARGET_CPA',
        self::BIDDING_STRATEGY_NOT_ALLOWED_FOR_SEARCH_ONLY_CAMPAIGNS => 'BIDDING_STRATEGY_NOT_ALLOWED_FOR_SEARCH_ONLY_CAMPAIGNS',
        self::BIDDING_STRATEGY_NOT_SUPPORTED_IN_DRAFTS_OR_EXPERIMENTS => 'BIDDING_STRATEGY_NOT_SUPPORTED_IN_DRAFTS_OR_EXPERIMENTS',
        self::BIDDING_STRATEGY_TYPE_DOES_NOT_SUPPORT_PRODUCT_TYPE_ADGROUP_CRITERION => 'BIDDING_STRATEGY_TYPE_DOES_NOT_SUPPORT_PRODUCT_TYPE_ADGROUP_CRITERION',
        self::BID_TOO_SMALL => 'BID_TOO_SMALL',
        self::BID_TOO_BIG => 'BID_TOO_BIG',
        self::BID_TOO_MANY_FRACTIONAL_DIGITS => 'BID_TOO_MANY_FRACTIONAL_DIGITS',
        self::INVALID_DOMAIN_NAME => 'INVALID_DOMAIN_NAME',
        self::NOT_COMPATIBLE_WITH_PAYMENT_MODE => 'NOT_COMPATIBLE_WITH_PAYMENT_MODE',
        self::NOT_COMPATIBLE_WITH_BUDGET_TYPE => 'NOT_COMPATIBLE_WITH_BUDGET_TYPE',
        self::NOT_COMPATIBLE_WITH_BIDDING_STRATEGY_TYPE => 'NOT_COMPATIBLE_WITH_BIDDING_STRATEGY_TYPE',
        self::BIDDING_STRATEGY_TYPE_INCOMPATIBLE_WITH_SHARED_BUDGET => 'BIDDING_STRATEGY_TYPE_INCOMPATIBLE_WITH_SHARED_BUDGET',
        self::BIDDING_STRATEGY_AND_BUDGET_MUST_BE_ALIGNED => 'BIDDING_STRATEGY_AND_BUDGET_MUST_BE_ALIGNED',
        self::BIDDING_STRATEGY_AND_BUDGET_MUST_BE_ATTACHED_TO_THE_SAME_CAMPAIGNS_TO_ALIGN => 'BIDDING_STRATEGY_AND_BUDGET_MUST_BE_ATTACHED_TO_THE_SAME_CAMPAIGNS_TO_ALIGN',
        self::BIDDING_STRATEGY_AND_BUDGET_MUST_BE_REMOVED_TOGETHER => 'BIDDING_STRATEGY_AND_BUDGET_MUST_BE_REMOVED_TOGETHER',
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
class_alias(BiddingError::class, \Google\Ads\GoogleAds\V12\Errors\BiddingErrorEnum_BiddingError::class);

