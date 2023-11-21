<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V13\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The metadata associated with an available plannable product.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.services.ProductMetadata</code>
 */
class ProductMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The code associated with the ad product (for example: BUMPER,
     * TRUEVIEW_IN_STREAM).
     * To list the available plannable product codes use
     * [ReachPlanService.ListPlannableProducts][google.ads.googleads.v13.services.ReachPlanService.ListPlannableProducts].
     *
     * Generated from protobuf field <code>optional string plannable_product_code = 4;</code>
     */
    protected $plannable_product_code = null;
    /**
     * The name associated with the ad product.
     *
     * Generated from protobuf field <code>string plannable_product_name = 3;</code>
     */
    protected $plannable_product_name = '';
    /**
     * The allowed plannable targeting for this product.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.services.PlannableTargeting plannable_targeting = 2;</code>
     */
    protected $plannable_targeting = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $plannable_product_code
     *           The code associated with the ad product (for example: BUMPER,
     *           TRUEVIEW_IN_STREAM).
     *           To list the available plannable product codes use
     *           [ReachPlanService.ListPlannableProducts][google.ads.googleads.v13.services.ReachPlanService.ListPlannableProducts].
     *     @type string $plannable_product_name
     *           The name associated with the ad product.
     *     @type \Google\Ads\GoogleAds\V13\Services\PlannableTargeting $plannable_targeting
     *           The allowed plannable targeting for this product.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * The code associated with the ad product (for example: BUMPER,
     * TRUEVIEW_IN_STREAM).
     * To list the available plannable product codes use
     * [ReachPlanService.ListPlannableProducts][google.ads.googleads.v13.services.ReachPlanService.ListPlannableProducts].
     *
     * Generated from protobuf field <code>optional string plannable_product_code = 4;</code>
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
     * The code associated with the ad product (for example: BUMPER,
     * TRUEVIEW_IN_STREAM).
     * To list the available plannable product codes use
     * [ReachPlanService.ListPlannableProducts][google.ads.googleads.v13.services.ReachPlanService.ListPlannableProducts].
     *
     * Generated from protobuf field <code>optional string plannable_product_code = 4;</code>
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
     * The name associated with the ad product.
     *
     * Generated from protobuf field <code>string plannable_product_name = 3;</code>
     * @return string
     */
    public function getPlannableProductName()
    {
        return $this->plannable_product_name;
    }

    /**
     * The name associated with the ad product.
     *
     * Generated from protobuf field <code>string plannable_product_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPlannableProductName($var)
    {
        GPBUtil::checkString($var, True);
        $this->plannable_product_name = $var;

        return $this;
    }

    /**
     * The allowed plannable targeting for this product.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.services.PlannableTargeting plannable_targeting = 2;</code>
     * @return \Google\Ads\GoogleAds\V13\Services\PlannableTargeting|null
     */
    public function getPlannableTargeting()
    {
        return $this->plannable_targeting;
    }

    public function hasPlannableTargeting()
    {
        return isset($this->plannable_targeting);
    }

    public function clearPlannableTargeting()
    {
        unset($this->plannable_targeting);
    }

    /**
     * The allowed plannable targeting for this product.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.services.PlannableTargeting plannable_targeting = 2;</code>
     * @param \Google\Ads\GoogleAds\V13\Services\PlannableTargeting $var
     * @return $this
     */
    public function setPlannableTargeting($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V13\Services\PlannableTargeting::class);
        $this->plannable_targeting = $var;

        return $this;
    }

}

