<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/services/keyword_plan_service.proto

namespace Google\Ads\GoogleAds\V13\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Forecast metrics.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.services.ForecastMetrics</code>
 */
class ForecastMetrics extends \Google\Protobuf\Internal\Message
{
    /**
     * Impressions
     *
     * Generated from protobuf field <code>optional double impressions = 7;</code>
     */
    protected $impressions = null;
    /**
     * Ctr
     *
     * Generated from protobuf field <code>optional double ctr = 8;</code>
     */
    protected $ctr = null;
    /**
     * AVG cpc
     *
     * Generated from protobuf field <code>optional int64 average_cpc = 9;</code>
     */
    protected $average_cpc = null;
    /**
     * Clicks
     *
     * Generated from protobuf field <code>optional double clicks = 10;</code>
     */
    protected $clicks = null;
    /**
     * Cost
     *
     * Generated from protobuf field <code>optional int64 cost_micros = 11;</code>
     */
    protected $cost_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $impressions
     *           Impressions
     *     @type float $ctr
     *           Ctr
     *     @type int|string $average_cpc
     *           AVG cpc
     *     @type float $clicks
     *           Clicks
     *     @type int|string $cost_micros
     *           Cost
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Services\KeywordPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * Impressions
     *
     * Generated from protobuf field <code>optional double impressions = 7;</code>
     * @return float
     */
    public function getImpressions()
    {
        return $this->impressions ?? 0.0;
    }

    public function hasImpressions()
    {
        return isset($this->impressions);
    }

    public function clearImpressions()
    {
        unset($this->impressions);
    }

    /**
     * Impressions
     *
     * Generated from protobuf field <code>optional double impressions = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setImpressions($var)
    {
        GPBUtil::checkDouble($var);
        $this->impressions = $var;

        return $this;
    }

    /**
     * Ctr
     *
     * Generated from protobuf field <code>optional double ctr = 8;</code>
     * @return float
     */
    public function getCtr()
    {
        return $this->ctr ?? 0.0;
    }

    public function hasCtr()
    {
        return isset($this->ctr);
    }

    public function clearCtr()
    {
        unset($this->ctr);
    }

    /**
     * Ctr
     *
     * Generated from protobuf field <code>optional double ctr = 8;</code>
     * @param float $var
     * @return $this
     */
    public function setCtr($var)
    {
        GPBUtil::checkDouble($var);
        $this->ctr = $var;

        return $this;
    }

    /**
     * AVG cpc
     *
     * Generated from protobuf field <code>optional int64 average_cpc = 9;</code>
     * @return int|string
     */
    public function getAverageCpc()
    {
        return $this->average_cpc ?? 0;
    }

    public function hasAverageCpc()
    {
        return isset($this->average_cpc);
    }

    public function clearAverageCpc()
    {
        unset($this->average_cpc);
    }

    /**
     * AVG cpc
     *
     * Generated from protobuf field <code>optional int64 average_cpc = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAverageCpc($var)
    {
        GPBUtil::checkInt64($var);
        $this->average_cpc = $var;

        return $this;
    }

    /**
     * Clicks
     *
     * Generated from protobuf field <code>optional double clicks = 10;</code>
     * @return float
     */
    public function getClicks()
    {
        return $this->clicks ?? 0.0;
    }

    public function hasClicks()
    {
        return isset($this->clicks);
    }

    public function clearClicks()
    {
        unset($this->clicks);
    }

    /**
     * Clicks
     *
     * Generated from protobuf field <code>optional double clicks = 10;</code>
     * @param float $var
     * @return $this
     */
    public function setClicks($var)
    {
        GPBUtil::checkDouble($var);
        $this->clicks = $var;

        return $this;
    }

    /**
     * Cost
     *
     * Generated from protobuf field <code>optional int64 cost_micros = 11;</code>
     * @return int|string
     */
    public function getCostMicros()
    {
        return $this->cost_micros ?? 0;
    }

    public function hasCostMicros()
    {
        return isset($this->cost_micros);
    }

    public function clearCostMicros()
    {
        unset($this->cost_micros);
    }

    /**
     * Cost
     *
     * Generated from protobuf field <code>optional int64 cost_micros = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCostMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->cost_micros = $var;

        return $this;
    }

}

