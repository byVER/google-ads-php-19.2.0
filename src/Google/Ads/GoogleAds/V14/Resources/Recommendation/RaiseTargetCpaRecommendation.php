<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V14\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Recommendation to raise Target CPA.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.Recommendation.RaiseTargetCpaRecommendation</code>
 */
class RaiseTargetCpaRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The relevant information describing the recommended target
     * adjustment.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.resources.Recommendation.TargetAdjustmentInfo target_adjustment = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $target_adjustment = null;
    /**
     * Output only. Represents the goal towards which the bidding strategy
     * should optimize. Only populated for App Campaigns.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v14.enums.AppBiddingGoalEnum.AppBiddingGoal app_bidding_goal = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $app_bidding_goal = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V14\Resources\Recommendation\TargetAdjustmentInfo $target_adjustment
     *           Output only. The relevant information describing the recommended target
     *           adjustment.
     *     @type int $app_bidding_goal
     *           Output only. Represents the goal towards which the bidding strategy
     *           should optimize. Only populated for App Campaigns.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The relevant information describing the recommended target
     * adjustment.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.resources.Recommendation.TargetAdjustmentInfo target_adjustment = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V14\Resources\Recommendation\TargetAdjustmentInfo|null
     */
    public function getTargetAdjustment()
    {
        return $this->target_adjustment;
    }

    public function hasTargetAdjustment()
    {
        return isset($this->target_adjustment);
    }

    public function clearTargetAdjustment()
    {
        unset($this->target_adjustment);
    }

    /**
     * Output only. The relevant information describing the recommended target
     * adjustment.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.resources.Recommendation.TargetAdjustmentInfo target_adjustment = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V14\Resources\Recommendation\TargetAdjustmentInfo $var
     * @return $this
     */
    public function setTargetAdjustment($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V14\Resources\Recommendation\TargetAdjustmentInfo::class);
        $this->target_adjustment = $var;

        return $this;
    }

    /**
     * Output only. Represents the goal towards which the bidding strategy
     * should optimize. Only populated for App Campaigns.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v14.enums.AppBiddingGoalEnum.AppBiddingGoal app_bidding_goal = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getAppBiddingGoal()
    {
        return $this->app_bidding_goal ?? 0;
    }

    public function hasAppBiddingGoal()
    {
        return isset($this->app_bidding_goal);
    }

    public function clearAppBiddingGoal()
    {
        unset($this->app_bidding_goal);
    }

    /**
     * Output only. Represents the goal towards which the bidding strategy
     * should optimize. Only populated for App Campaigns.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v14.enums.AppBiddingGoalEnum.AppBiddingGoal app_bidding_goal = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setAppBiddingGoal($var)
    {
        GPBUtil::checkEnum($var);
        $this->app_bidding_goal = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RaiseTargetCpaRecommendation::class, \Google\Ads\GoogleAds\V14\Resources\Recommendation_RaiseTargetCpaRecommendation::class);

