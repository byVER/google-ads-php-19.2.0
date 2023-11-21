<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V12\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The budget recommendation for budget constrained campaigns.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.resources.Recommendation.CampaignBudgetRecommendation</code>
 */
class CampaignBudgetRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The current budget amount in micros.
     *
     * Generated from protobuf field <code>optional int64 current_budget_amount_micros = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $current_budget_amount_micros = null;
    /**
     * Output only. The recommended budget amount in micros.
     *
     * Generated from protobuf field <code>optional int64 recommended_budget_amount_micros = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $recommended_budget_amount_micros = null;
    /**
     * Output only. The budget amounts and associated impact estimates for some values of
     * possible budget amounts.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.resources.Recommendation.CampaignBudgetRecommendation.CampaignBudgetRecommendationOption budget_options = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $budget_options;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $current_budget_amount_micros
     *           Output only. The current budget amount in micros.
     *     @type int|string $recommended_budget_amount_micros
     *           Output only. The recommended budget amount in micros.
     *     @type array<\Google\Ads\GoogleAds\V12\Resources\Recommendation\CampaignBudgetRecommendation\CampaignBudgetRecommendationOption>|\Google\Protobuf\Internal\RepeatedField $budget_options
     *           Output only. The budget amounts and associated impact estimates for some values of
     *           possible budget amounts.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The current budget amount in micros.
     *
     * Generated from protobuf field <code>optional int64 current_budget_amount_micros = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getCurrentBudgetAmountMicros()
    {
        return $this->current_budget_amount_micros ?? 0;
    }

    public function hasCurrentBudgetAmountMicros()
    {
        return isset($this->current_budget_amount_micros);
    }

    public function clearCurrentBudgetAmountMicros()
    {
        unset($this->current_budget_amount_micros);
    }

    /**
     * Output only. The current budget amount in micros.
     *
     * Generated from protobuf field <code>optional int64 current_budget_amount_micros = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCurrentBudgetAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->current_budget_amount_micros = $var;

        return $this;
    }

    /**
     * Output only. The recommended budget amount in micros.
     *
     * Generated from protobuf field <code>optional int64 recommended_budget_amount_micros = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getRecommendedBudgetAmountMicros()
    {
        return $this->recommended_budget_amount_micros ?? 0;
    }

    public function hasRecommendedBudgetAmountMicros()
    {
        return isset($this->recommended_budget_amount_micros);
    }

    public function clearRecommendedBudgetAmountMicros()
    {
        unset($this->recommended_budget_amount_micros);
    }

    /**
     * Output only. The recommended budget amount in micros.
     *
     * Generated from protobuf field <code>optional int64 recommended_budget_amount_micros = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setRecommendedBudgetAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->recommended_budget_amount_micros = $var;

        return $this;
    }

    /**
     * Output only. The budget amounts and associated impact estimates for some values of
     * possible budget amounts.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.resources.Recommendation.CampaignBudgetRecommendation.CampaignBudgetRecommendationOption budget_options = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBudgetOptions()
    {
        return $this->budget_options;
    }

    /**
     * Output only. The budget amounts and associated impact estimates for some values of
     * possible budget amounts.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.resources.Recommendation.CampaignBudgetRecommendation.CampaignBudgetRecommendationOption budget_options = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Ads\GoogleAds\V12\Resources\Recommendation\CampaignBudgetRecommendation\CampaignBudgetRecommendationOption>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBudgetOptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V12\Resources\Recommendation\CampaignBudgetRecommendation\CampaignBudgetRecommendationOption::class);
        $this->budget_options = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CampaignBudgetRecommendation::class, \Google\Ads\GoogleAds\V12\Resources\Recommendation_CampaignBudgetRecommendation::class);

