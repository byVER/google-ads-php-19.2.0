<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/common/metric_goal.proto

namespace Google\Ads\GoogleAds\V12\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A metric goal for an experiment.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.common.MetricGoal</code>
 */
class MetricGoal extends \Google\Protobuf\Internal\Message
{
    /**
     * The metric of the goal. For example, clicks, impressions, cost,
     * conversions, etc.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.ExperimentMetricEnum.ExperimentMetric metric = 1;</code>
     */
    protected $metric = 0;
    /**
     * The metric direction of the goal. For example, increase, decrease, no
     * change.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.ExperimentMetricDirectionEnum.ExperimentMetricDirection direction = 2;</code>
     */
    protected $direction = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $metric
     *           The metric of the goal. For example, clicks, impressions, cost,
     *           conversions, etc.
     *     @type int $direction
     *           The metric direction of the goal. For example, increase, decrease, no
     *           change.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Common\MetricGoal::initOnce();
        parent::__construct($data);
    }

    /**
     * The metric of the goal. For example, clicks, impressions, cost,
     * conversions, etc.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.ExperimentMetricEnum.ExperimentMetric metric = 1;</code>
     * @return int
     */
    public function getMetric()
    {
        return $this->metric;
    }

    /**
     * The metric of the goal. For example, clicks, impressions, cost,
     * conversions, etc.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.ExperimentMetricEnum.ExperimentMetric metric = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMetric($var)
    {
        GPBUtil::checkEnum($var);
        $this->metric = $var;

        return $this;
    }

    /**
     * The metric direction of the goal. For example, increase, decrease, no
     * change.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.ExperimentMetricDirectionEnum.ExperimentMetricDirection direction = 2;</code>
     * @return int
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * The metric direction of the goal. For example, increase, decrease, no
     * change.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.ExperimentMetricDirectionEnum.ExperimentMetricDirection direction = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDirection($var)
    {
        GPBUtil::checkEnum($var);
        $this->direction = $var;

        return $this;
    }

}

