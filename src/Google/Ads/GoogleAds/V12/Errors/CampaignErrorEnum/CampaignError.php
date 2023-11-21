<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/errors/campaign_error.proto

namespace Google\Ads\GoogleAds\V12\Errors\CampaignErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible campaign errors.
 *
 * Protobuf type <code>google.ads.googleads.v12.errors.CampaignErrorEnum.CampaignError</code>
 */
class CampaignError
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
     * Cannot target content network.
     *
     * Generated from protobuf enum <code>CANNOT_TARGET_CONTENT_NETWORK = 3;</code>
     */
    public const CANNOT_TARGET_CONTENT_NETWORK = 3;
    /**
     * Cannot target search network.
     *
     * Generated from protobuf enum <code>CANNOT_TARGET_SEARCH_NETWORK = 4;</code>
     */
    public const CANNOT_TARGET_SEARCH_NETWORK = 4;
    /**
     * Cannot cover search network without google search network.
     *
     * Generated from protobuf enum <code>CANNOT_TARGET_SEARCH_NETWORK_WITHOUT_GOOGLE_SEARCH = 5;</code>
     */
    public const CANNOT_TARGET_SEARCH_NETWORK_WITHOUT_GOOGLE_SEARCH = 5;
    /**
     * Cannot target Google Search network for a CPM campaign.
     *
     * Generated from protobuf enum <code>CANNOT_TARGET_GOOGLE_SEARCH_FOR_CPM_CAMPAIGN = 6;</code>
     */
    public const CANNOT_TARGET_GOOGLE_SEARCH_FOR_CPM_CAMPAIGN = 6;
    /**
     * Must target at least one network.
     *
     * Generated from protobuf enum <code>CAMPAIGN_MUST_TARGET_AT_LEAST_ONE_NETWORK = 7;</code>
     */
    public const CAMPAIGN_MUST_TARGET_AT_LEAST_ONE_NETWORK = 7;
    /**
     * Only some Google partners are allowed to target partner search network.
     *
     * Generated from protobuf enum <code>CANNOT_TARGET_PARTNER_SEARCH_NETWORK = 8;</code>
     */
    public const CANNOT_TARGET_PARTNER_SEARCH_NETWORK = 8;
    /**
     * Cannot target content network only as campaign has criteria-level bidding
     * strategy.
     *
     * Generated from protobuf enum <code>CANNOT_TARGET_CONTENT_NETWORK_ONLY_WITH_CRITERIA_LEVEL_BIDDING_STRATEGY = 9;</code>
     */
    public const CANNOT_TARGET_CONTENT_NETWORK_ONLY_WITH_CRITERIA_LEVEL_BIDDING_STRATEGY = 9;
    /**
     * Cannot modify the start or end date such that the campaign duration would
     * not contain the durations of all runnable trials.
     *
     * Generated from protobuf enum <code>CAMPAIGN_DURATION_MUST_CONTAIN_ALL_RUNNABLE_TRIALS = 10;</code>
     */
    public const CAMPAIGN_DURATION_MUST_CONTAIN_ALL_RUNNABLE_TRIALS = 10;
    /**
     * Cannot modify dates, budget or status of a trial campaign.
     *
     * Generated from protobuf enum <code>CANNOT_MODIFY_FOR_TRIAL_CAMPAIGN = 11;</code>
     */
    public const CANNOT_MODIFY_FOR_TRIAL_CAMPAIGN = 11;
    /**
     * Trying to modify the name of an active or paused campaign, where the name
     * is already assigned to another active or paused campaign.
     *
     * Generated from protobuf enum <code>DUPLICATE_CAMPAIGN_NAME = 12;</code>
     */
    public const DUPLICATE_CAMPAIGN_NAME = 12;
    /**
     * Two fields are in conflicting modes.
     *
     * Generated from protobuf enum <code>INCOMPATIBLE_CAMPAIGN_FIELD = 13;</code>
     */
    public const INCOMPATIBLE_CAMPAIGN_FIELD = 13;
    /**
     * Campaign name cannot be used.
     *
     * Generated from protobuf enum <code>INVALID_CAMPAIGN_NAME = 14;</code>
     */
    public const INVALID_CAMPAIGN_NAME = 14;
    /**
     * Given status is invalid.
     *
     * Generated from protobuf enum <code>INVALID_AD_SERVING_OPTIMIZATION_STATUS = 15;</code>
     */
    public const INVALID_AD_SERVING_OPTIMIZATION_STATUS = 15;
    /**
     * Error in the campaign level tracking URL.
     *
     * Generated from protobuf enum <code>INVALID_TRACKING_URL = 16;</code>
     */
    public const INVALID_TRACKING_URL = 16;
    /**
     * Cannot set both tracking URL template and tracking setting. A user has
     * to clear legacy tracking setting in order to add tracking URL template.
     *
     * Generated from protobuf enum <code>CANNOT_SET_BOTH_TRACKING_URL_TEMPLATE_AND_TRACKING_SETTING = 17;</code>
     */
    public const CANNOT_SET_BOTH_TRACKING_URL_TEMPLATE_AND_TRACKING_SETTING = 17;
    /**
     * The maximum number of impressions for Frequency Cap should be an integer
     * greater than 0.
     *
     * Generated from protobuf enum <code>MAX_IMPRESSIONS_NOT_IN_RANGE = 18;</code>
     */
    public const MAX_IMPRESSIONS_NOT_IN_RANGE = 18;
    /**
     * Only the Day, Week and Month time units are supported.
     *
     * Generated from protobuf enum <code>TIME_UNIT_NOT_SUPPORTED = 19;</code>
     */
    public const TIME_UNIT_NOT_SUPPORTED = 19;
    /**
     * Operation not allowed on a campaign whose serving status has ended
     *
     * Generated from protobuf enum <code>INVALID_OPERATION_IF_SERVING_STATUS_HAS_ENDED = 20;</code>
     */
    public const INVALID_OPERATION_IF_SERVING_STATUS_HAS_ENDED = 20;
    /**
     * This budget is exclusively linked to a Campaign that is using experiments
     * so it cannot be shared.
     *
     * Generated from protobuf enum <code>BUDGET_CANNOT_BE_SHARED = 21;</code>
     */
    public const BUDGET_CANNOT_BE_SHARED = 21;
    /**
     * Campaigns using experiments cannot use a shared budget.
     *
     * Generated from protobuf enum <code>CAMPAIGN_CANNOT_USE_SHARED_BUDGET = 22;</code>
     */
    public const CAMPAIGN_CANNOT_USE_SHARED_BUDGET = 22;
    /**
     * A different budget cannot be assigned to a campaign when there are
     * running or scheduled trials.
     *
     * Generated from protobuf enum <code>CANNOT_CHANGE_BUDGET_ON_CAMPAIGN_WITH_TRIALS = 23;</code>
     */
    public const CANNOT_CHANGE_BUDGET_ON_CAMPAIGN_WITH_TRIALS = 23;
    /**
     * No link found between the campaign and the label.
     *
     * Generated from protobuf enum <code>CAMPAIGN_LABEL_DOES_NOT_EXIST = 24;</code>
     */
    public const CAMPAIGN_LABEL_DOES_NOT_EXIST = 24;
    /**
     * The label has already been attached to the campaign.
     *
     * Generated from protobuf enum <code>CAMPAIGN_LABEL_ALREADY_EXISTS = 25;</code>
     */
    public const CAMPAIGN_LABEL_ALREADY_EXISTS = 25;
    /**
     * A ShoppingSetting was not found when creating a shopping campaign.
     *
     * Generated from protobuf enum <code>MISSING_SHOPPING_SETTING = 26;</code>
     */
    public const MISSING_SHOPPING_SETTING = 26;
    /**
     * The country in shopping setting is not an allowed country.
     *
     * Generated from protobuf enum <code>INVALID_SHOPPING_SALES_COUNTRY = 27;</code>
     */
    public const INVALID_SHOPPING_SALES_COUNTRY = 27;
    /**
     * The requested channel type is not available according to the customer's
     * account setting.
     *
     * Generated from protobuf enum <code>ADVERTISING_CHANNEL_TYPE_NOT_AVAILABLE_FOR_ACCOUNT_TYPE = 31;</code>
     */
    public const ADVERTISING_CHANNEL_TYPE_NOT_AVAILABLE_FOR_ACCOUNT_TYPE = 31;
    /**
     * The AdvertisingChannelSubType is not a valid subtype of the primary
     * channel type.
     *
     * Generated from protobuf enum <code>INVALID_ADVERTISING_CHANNEL_SUB_TYPE = 32;</code>
     */
    public const INVALID_ADVERTISING_CHANNEL_SUB_TYPE = 32;
    /**
     * At least one conversion must be selected.
     *
     * Generated from protobuf enum <code>AT_LEAST_ONE_CONVERSION_MUST_BE_SELECTED = 33;</code>
     */
    public const AT_LEAST_ONE_CONVERSION_MUST_BE_SELECTED = 33;
    /**
     * Setting ad rotation mode for a campaign is not allowed. Ad rotation mode
     * at campaign is deprecated.
     *
     * Generated from protobuf enum <code>CANNOT_SET_AD_ROTATION_MODE = 34;</code>
     */
    public const CANNOT_SET_AD_ROTATION_MODE = 34;
    /**
     * Trying to change start date on a campaign that has started.
     *
     * Generated from protobuf enum <code>CANNOT_MODIFY_START_DATE_IF_ALREADY_STARTED = 35;</code>
     */
    public const CANNOT_MODIFY_START_DATE_IF_ALREADY_STARTED = 35;
    /**
     * Trying to modify a date into the past.
     *
     * Generated from protobuf enum <code>CANNOT_SET_DATE_TO_PAST = 36;</code>
     */
    public const CANNOT_SET_DATE_TO_PAST = 36;
    /**
     * Hotel center id in the hotel setting does not match any customer links.
     *
     * Generated from protobuf enum <code>MISSING_HOTEL_CUSTOMER_LINK = 37;</code>
     */
    public const MISSING_HOTEL_CUSTOMER_LINK = 37;
    /**
     * Hotel center id in the hotel setting must match an active customer link.
     *
     * Generated from protobuf enum <code>INVALID_HOTEL_CUSTOMER_LINK = 38;</code>
     */
    public const INVALID_HOTEL_CUSTOMER_LINK = 38;
    /**
     * Hotel setting was not found when creating a hotel ads campaign.
     *
     * Generated from protobuf enum <code>MISSING_HOTEL_SETTING = 39;</code>
     */
    public const MISSING_HOTEL_SETTING = 39;
    /**
     * A Campaign cannot use shared campaign budgets and be part of a campaign
     * group.
     *
     * Generated from protobuf enum <code>CANNOT_USE_SHARED_CAMPAIGN_BUDGET_WHILE_PART_OF_CAMPAIGN_GROUP = 40;</code>
     */
    public const CANNOT_USE_SHARED_CAMPAIGN_BUDGET_WHILE_PART_OF_CAMPAIGN_GROUP = 40;
    /**
     * The app ID was not found.
     *
     * Generated from protobuf enum <code>APP_NOT_FOUND = 41;</code>
     */
    public const APP_NOT_FOUND = 41;
    /**
     * Campaign.shopping_setting.enable_local is not supported for the specified
     * campaign type.
     *
     * Generated from protobuf enum <code>SHOPPING_ENABLE_LOCAL_NOT_SUPPORTED_FOR_CAMPAIGN_TYPE = 42;</code>
     */
    public const SHOPPING_ENABLE_LOCAL_NOT_SUPPORTED_FOR_CAMPAIGN_TYPE = 42;
    /**
     * The merchant does not support the creation of campaigns for Shopping
     * Comparison Listing Ads.
     *
     * Generated from protobuf enum <code>MERCHANT_NOT_ALLOWED_FOR_COMPARISON_LISTING_ADS = 43;</code>
     */
    public const MERCHANT_NOT_ALLOWED_FOR_COMPARISON_LISTING_ADS = 43;
    /**
     * The App campaign for engagement cannot be created because there aren't
     * enough installs.
     *
     * Generated from protobuf enum <code>INSUFFICIENT_APP_INSTALLS_COUNT = 44;</code>
     */
    public const INSUFFICIENT_APP_INSTALLS_COUNT = 44;
    /**
     * The App campaign for engagement cannot be created because the app is
     * sensitive.
     *
     * Generated from protobuf enum <code>SENSITIVE_CATEGORY_APP = 45;</code>
     */
    public const SENSITIVE_CATEGORY_APP = 45;
    /**
     * Customers with Housing, Employment, or Credit ads must accept updated
     * personalized ads policy to continue creating campaigns.
     *
     * Generated from protobuf enum <code>HEC_AGREEMENT_REQUIRED = 46;</code>
     */
    public const HEC_AGREEMENT_REQUIRED = 46;
    /**
     * The field is not compatible with view through conversion optimization.
     *
     * Generated from protobuf enum <code>NOT_COMPATIBLE_WITH_VIEW_THROUGH_CONVERSION_OPTIMIZATION = 49;</code>
     */
    public const NOT_COMPATIBLE_WITH_VIEW_THROUGH_CONVERSION_OPTIMIZATION = 49;
    /**
     * The field type cannot be excluded because an active campaign-asset link
     * of this type exists.
     *
     * Generated from protobuf enum <code>INVALID_EXCLUDED_PARENT_ASSET_FIELD_TYPE = 48;</code>
     */
    public const INVALID_EXCLUDED_PARENT_ASSET_FIELD_TYPE = 48;
    /**
     * The app pre-registration campaign cannot be created for non-Android
     * applications.
     *
     * Generated from protobuf enum <code>CANNOT_CREATE_APP_PRE_REGISTRATION_FOR_NON_ANDROID_APP = 50;</code>
     */
    public const CANNOT_CREATE_APP_PRE_REGISTRATION_FOR_NON_ANDROID_APP = 50;
    /**
     * The campaign cannot be created since the app is not available for
     * pre-registration in any country.
     *
     * Generated from protobuf enum <code>APP_NOT_AVAILABLE_TO_CREATE_APP_PRE_REGISTRATION_CAMPAIGN = 51;</code>
     */
    public const APP_NOT_AVAILABLE_TO_CREATE_APP_PRE_REGISTRATION_CAMPAIGN = 51;
    /**
     * The type of the Budget is not compatible with this Campaign.
     *
     * Generated from protobuf enum <code>INCOMPATIBLE_BUDGET_TYPE = 52;</code>
     */
    public const INCOMPATIBLE_BUDGET_TYPE = 52;
    /**
     * Category bid list in the local services campaign setting contains
     * multiple bids for the same category ID.
     *
     * Generated from protobuf enum <code>LOCAL_SERVICES_DUPLICATE_CATEGORY_BID = 53;</code>
     */
    public const LOCAL_SERVICES_DUPLICATE_CATEGORY_BID = 53;
    /**
     * Category bid list in the local services campaign setting contains
     * a bid for an invalid category ID.
     *
     * Generated from protobuf enum <code>LOCAL_SERVICES_INVALID_CATEGORY_BID = 54;</code>
     */
    public const LOCAL_SERVICES_INVALID_CATEGORY_BID = 54;
    /**
     * Category bid list in the local services campaign setting is missing a
     * bid for a category ID that must be present.
     *
     * Generated from protobuf enum <code>LOCAL_SERVICES_MISSING_CATEGORY_BID = 55;</code>
     */
    public const LOCAL_SERVICES_MISSING_CATEGORY_BID = 55;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CANNOT_TARGET_CONTENT_NETWORK => 'CANNOT_TARGET_CONTENT_NETWORK',
        self::CANNOT_TARGET_SEARCH_NETWORK => 'CANNOT_TARGET_SEARCH_NETWORK',
        self::CANNOT_TARGET_SEARCH_NETWORK_WITHOUT_GOOGLE_SEARCH => 'CANNOT_TARGET_SEARCH_NETWORK_WITHOUT_GOOGLE_SEARCH',
        self::CANNOT_TARGET_GOOGLE_SEARCH_FOR_CPM_CAMPAIGN => 'CANNOT_TARGET_GOOGLE_SEARCH_FOR_CPM_CAMPAIGN',
        self::CAMPAIGN_MUST_TARGET_AT_LEAST_ONE_NETWORK => 'CAMPAIGN_MUST_TARGET_AT_LEAST_ONE_NETWORK',
        self::CANNOT_TARGET_PARTNER_SEARCH_NETWORK => 'CANNOT_TARGET_PARTNER_SEARCH_NETWORK',
        self::CANNOT_TARGET_CONTENT_NETWORK_ONLY_WITH_CRITERIA_LEVEL_BIDDING_STRATEGY => 'CANNOT_TARGET_CONTENT_NETWORK_ONLY_WITH_CRITERIA_LEVEL_BIDDING_STRATEGY',
        self::CAMPAIGN_DURATION_MUST_CONTAIN_ALL_RUNNABLE_TRIALS => 'CAMPAIGN_DURATION_MUST_CONTAIN_ALL_RUNNABLE_TRIALS',
        self::CANNOT_MODIFY_FOR_TRIAL_CAMPAIGN => 'CANNOT_MODIFY_FOR_TRIAL_CAMPAIGN',
        self::DUPLICATE_CAMPAIGN_NAME => 'DUPLICATE_CAMPAIGN_NAME',
        self::INCOMPATIBLE_CAMPAIGN_FIELD => 'INCOMPATIBLE_CAMPAIGN_FIELD',
        self::INVALID_CAMPAIGN_NAME => 'INVALID_CAMPAIGN_NAME',
        self::INVALID_AD_SERVING_OPTIMIZATION_STATUS => 'INVALID_AD_SERVING_OPTIMIZATION_STATUS',
        self::INVALID_TRACKING_URL => 'INVALID_TRACKING_URL',
        self::CANNOT_SET_BOTH_TRACKING_URL_TEMPLATE_AND_TRACKING_SETTING => 'CANNOT_SET_BOTH_TRACKING_URL_TEMPLATE_AND_TRACKING_SETTING',
        self::MAX_IMPRESSIONS_NOT_IN_RANGE => 'MAX_IMPRESSIONS_NOT_IN_RANGE',
        self::TIME_UNIT_NOT_SUPPORTED => 'TIME_UNIT_NOT_SUPPORTED',
        self::INVALID_OPERATION_IF_SERVING_STATUS_HAS_ENDED => 'INVALID_OPERATION_IF_SERVING_STATUS_HAS_ENDED',
        self::BUDGET_CANNOT_BE_SHARED => 'BUDGET_CANNOT_BE_SHARED',
        self::CAMPAIGN_CANNOT_USE_SHARED_BUDGET => 'CAMPAIGN_CANNOT_USE_SHARED_BUDGET',
        self::CANNOT_CHANGE_BUDGET_ON_CAMPAIGN_WITH_TRIALS => 'CANNOT_CHANGE_BUDGET_ON_CAMPAIGN_WITH_TRIALS',
        self::CAMPAIGN_LABEL_DOES_NOT_EXIST => 'CAMPAIGN_LABEL_DOES_NOT_EXIST',
        self::CAMPAIGN_LABEL_ALREADY_EXISTS => 'CAMPAIGN_LABEL_ALREADY_EXISTS',
        self::MISSING_SHOPPING_SETTING => 'MISSING_SHOPPING_SETTING',
        self::INVALID_SHOPPING_SALES_COUNTRY => 'INVALID_SHOPPING_SALES_COUNTRY',
        self::ADVERTISING_CHANNEL_TYPE_NOT_AVAILABLE_FOR_ACCOUNT_TYPE => 'ADVERTISING_CHANNEL_TYPE_NOT_AVAILABLE_FOR_ACCOUNT_TYPE',
        self::INVALID_ADVERTISING_CHANNEL_SUB_TYPE => 'INVALID_ADVERTISING_CHANNEL_SUB_TYPE',
        self::AT_LEAST_ONE_CONVERSION_MUST_BE_SELECTED => 'AT_LEAST_ONE_CONVERSION_MUST_BE_SELECTED',
        self::CANNOT_SET_AD_ROTATION_MODE => 'CANNOT_SET_AD_ROTATION_MODE',
        self::CANNOT_MODIFY_START_DATE_IF_ALREADY_STARTED => 'CANNOT_MODIFY_START_DATE_IF_ALREADY_STARTED',
        self::CANNOT_SET_DATE_TO_PAST => 'CANNOT_SET_DATE_TO_PAST',
        self::MISSING_HOTEL_CUSTOMER_LINK => 'MISSING_HOTEL_CUSTOMER_LINK',
        self::INVALID_HOTEL_CUSTOMER_LINK => 'INVALID_HOTEL_CUSTOMER_LINK',
        self::MISSING_HOTEL_SETTING => 'MISSING_HOTEL_SETTING',
        self::CANNOT_USE_SHARED_CAMPAIGN_BUDGET_WHILE_PART_OF_CAMPAIGN_GROUP => 'CANNOT_USE_SHARED_CAMPAIGN_BUDGET_WHILE_PART_OF_CAMPAIGN_GROUP',
        self::APP_NOT_FOUND => 'APP_NOT_FOUND',
        self::SHOPPING_ENABLE_LOCAL_NOT_SUPPORTED_FOR_CAMPAIGN_TYPE => 'SHOPPING_ENABLE_LOCAL_NOT_SUPPORTED_FOR_CAMPAIGN_TYPE',
        self::MERCHANT_NOT_ALLOWED_FOR_COMPARISON_LISTING_ADS => 'MERCHANT_NOT_ALLOWED_FOR_COMPARISON_LISTING_ADS',
        self::INSUFFICIENT_APP_INSTALLS_COUNT => 'INSUFFICIENT_APP_INSTALLS_COUNT',
        self::SENSITIVE_CATEGORY_APP => 'SENSITIVE_CATEGORY_APP',
        self::HEC_AGREEMENT_REQUIRED => 'HEC_AGREEMENT_REQUIRED',
        self::NOT_COMPATIBLE_WITH_VIEW_THROUGH_CONVERSION_OPTIMIZATION => 'NOT_COMPATIBLE_WITH_VIEW_THROUGH_CONVERSION_OPTIMIZATION',
        self::INVALID_EXCLUDED_PARENT_ASSET_FIELD_TYPE => 'INVALID_EXCLUDED_PARENT_ASSET_FIELD_TYPE',
        self::CANNOT_CREATE_APP_PRE_REGISTRATION_FOR_NON_ANDROID_APP => 'CANNOT_CREATE_APP_PRE_REGISTRATION_FOR_NON_ANDROID_APP',
        self::APP_NOT_AVAILABLE_TO_CREATE_APP_PRE_REGISTRATION_CAMPAIGN => 'APP_NOT_AVAILABLE_TO_CREATE_APP_PRE_REGISTRATION_CAMPAIGN',
        self::INCOMPATIBLE_BUDGET_TYPE => 'INCOMPATIBLE_BUDGET_TYPE',
        self::LOCAL_SERVICES_DUPLICATE_CATEGORY_BID => 'LOCAL_SERVICES_DUPLICATE_CATEGORY_BID',
        self::LOCAL_SERVICES_INVALID_CATEGORY_BID => 'LOCAL_SERVICES_INVALID_CATEGORY_BID',
        self::LOCAL_SERVICES_MISSING_CATEGORY_BID => 'LOCAL_SERVICES_MISSING_CATEGORY_BID',
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
class_alias(CampaignError::class, \Google\Ads\GoogleAds\V12\Errors\CampaignErrorEnum_CampaignError::class);

