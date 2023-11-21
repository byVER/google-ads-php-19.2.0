<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V14\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A product being planned for reach.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.services.PlannedProduct</code>
 */
class PlannedProduct extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Selected product for planning.
     * The code associated with the ad product (for example: Trueview, Bumper).
     * To list the available plannable product codes use
     * [ReachPlanService.ListPlannableProducts][google.ads.googleads.v14.services.ReachPlanService.ListPlannableProducts].
     *
     * Generated from protobuf field <code>optional string plannable_product_code = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $plannable_product_code = null;
    /**
     * Required. Maximum budget allocation in micros for the selected product.
     * The value is specified in the selected planning currency_code.
     * For example: 1 000 000$ = 1 000 000 000 000 micros.
     *
     * Generated from protobuf field <code>optional int64 budget_micros = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $budget_micros = null;
    /**
     * Targeting settings for the selected product.
     * To list the available targeting for each product use
     * [ReachPlanService.ListPlannableProducts][google.ads.googleads.v14.services.ReachPlanService.ListPlannableProducts].
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.services.AdvancedProductTargeting advanced_product_targeting = 5;</code>
     */
    protected $advanced_product_targeting = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $plannable_product_code
     *           Required. Selected product for planning.
     *           The code associated with the ad product (for example: Trueview, Bumper).
     *           To list the available plannable product codes use
     *           [ReachPlanService.ListPlannableProducts][google.ads.googleads.v14.services.ReachPlanService.ListPlannableProducts].
     *     @type int|string $budget_micros
     *           Required. Maximum budget allocation in micros for the selected product.
     *           The value is specified in the selected planning currency_code.
     *           For example: 1 000 000$ = 1 000 000 000 000 micros.
     *     @type \Google\Ads\GoogleAds\V14\Services\AdvancedProductTargeting $advanced_product_targeting
     *           Targeting settings for the selected product.
     *           To list the available targeting for each product use
     *           [ReachPlanService.ListPlannableProducts][google.ads.googleads.v14.services.ReachPlanService.ListPlannableProducts].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Selected product for planning.
     * The code associated with the ad product (for example: Trueview, Bumper).
     * To list the available plannable product codes use
     * [ReachPlanService.ListPlannableProducts][google.ads.googleads.v14.services.ReachPlanService.ListPlannableProducts].
     *
     * Generated from protobuf field <code>optional string plannable_product_code = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPlannableProductCode()
    {
        return $this->plannable_product_code ?? '';
    }

    public function hasPlannableProductCode()
    {
        return isset($this->plannable_product_code);
    }

    public function clearPlannableProductCode()
    {
        unset($this->plannable_product_code);
    }

    /**
     * Required. Selected product for planning.
     * The code associated with the ad product (for example: Trueview, Bumper).
     * To list the available plannable product codes use
     * [ReachPlanService.ListPlannableProducts][google.ads.googleads.v14.services.ReachPlanService.ListPlannableProducts].
     *
     * Generated from protobuf field <code>optional string plannable_product_code = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPlannableProductCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->plannable_product_code = $var;

        return $this;
    }

    /**
     * Required. Maximum budget allocation in micros for the selected product.
     * The value is specified in the selected planning currency_code.
     * For example: 1 000 000$ = 1 000 000 000 000 micros.
     *
     * Generated from protobuf field <code>optional int64 budget_micros = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int|string
     */
    public function getBudgetMicros()
    {
        return $this->budget_micros ?? 0;
    }

    public function hasBudgetMicros()
    {
        return isset($this->budget_micros);
    }

    public function clearBudgetMicros()
    {
        unset($this->budget_micros);
    }

    /**
     * Required. Maximum budget allocation in micros for the selected product.
     * The value is specified in the selected planning currency_code.
     * For example: 1 000 000$ = 1 000 000 000 000 micros.
     *
     * Generated from protobuf field <code>optional int64 budget_micros = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int|string $var
     * @return $this
     */
    public function setBudgetMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->budget_micros = $var;

        return $this;
    }

    /**
     * Targeting settings for the selected product.
     * To list the available targeting for each product use
     * [ReachPlanService.ListPlannableProducts][google.ads.googleads.v14.services.ReachPlanService.ListPlannableProducts].
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.services.AdvancedProductTargeting advanced_product_targeting = 5;</code>
     * @return \Google\Ads\GoogleAds\V14\Services\AdvancedProductTargeting|null
     */
    public function getAdvancedProductTargeting()
    {
        return $this->advanced_product_targeting;
    }

    public function hasAdvancedProductTargeting()
    {
        return isset($this->advanced_product_targeting);
    }

    public function clearAdvancedProductTargeting()
    {
        unset($this->advanced_product_targeting);
    }

    /**
     * Targeting settings for the selected product.
     * To list the available targeting for each product use
     * [ReachPlanService.ListPlannableProducts][google.ads.googleads.v14.services.ReachPlanService.ListPlannableProducts].
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.services.AdvancedProductTargeting advanced_product_targeting = 5;</code>
     * @param \Google\Ads\GoogleAds\V14\Services\AdvancedProductTargeting $var
     * @return $this
     */
    public function setAdvancedProductTargeting($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V14\Services\AdvancedProductTargeting::class);
        $this->advanced_product_targeting = $var;

        return $this;
    }

}

