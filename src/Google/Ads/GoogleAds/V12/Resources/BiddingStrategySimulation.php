<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/resources/bidding_strategy_simulation.proto

namespace Google\Ads\GoogleAds\V12\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A bidding strategy simulation. Supported combinations of simulation type
 * and simulation modification method are detailed below respectively.
 * 1. TARGET_CPA - UNIFORM
 * 2. TARGET_ROAS - UNIFORM
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.resources.BiddingStrategySimulation</code>
 */
class BiddingStrategySimulation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the bidding strategy simulation.
     * Bidding strategy simulation resource names have the form:
     * `customers/{customer_id}/biddingStrategySimulations/{bidding_strategy_id}~{type}~{modification_method}~{start_date}~{end_date}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. Bidding strategy shared set id of the simulation.
     *
     * Generated from protobuf field <code>int64 bidding_strategy_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $bidding_strategy_id = 0;
    /**
     * Output only. The field that the simulation modifies.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.SimulationTypeEnum.SimulationType type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $type = 0;
    /**
     * Output only. How the simulation modifies the field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.SimulationModificationMethodEnum.SimulationModificationMethod modification_method = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $modification_method = 0;
    /**
     * Output only. First day on which the simulation is based, in YYYY-MM-DD format.
     *
     * Generated from protobuf field <code>string start_date = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $start_date = '';
    /**
     * Output only. Last day on which the simulation is based, in YYYY-MM-DD format
     *
     * Generated from protobuf field <code>string end_date = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $end_date = '';
    protected $point_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the bidding strategy simulation.
     *           Bidding strategy simulation resource names have the form:
     *           `customers/{customer_id}/biddingStrategySimulations/{bidding_strategy_id}~{type}~{modification_method}~{start_date}~{end_date}`
     *     @type int|string $bidding_strategy_id
     *           Output only. Bidding strategy shared set id of the simulation.
     *     @type int $type
     *           Output only. The field that the simulation modifies.
     *     @type int $modification_method
     *           Output only. How the simulation modifies the field.
     *     @type string $start_date
     *           Output only. First day on which the simulation is based, in YYYY-MM-DD format.
     *     @type string $end_date
     *           Output only. Last day on which the simulation is based, in YYYY-MM-DD format
     *     @type \Google\Ads\GoogleAds\V12\Common\TargetCpaSimulationPointList $target_cpa_point_list
     *           Output only. Simulation points if the simulation type is TARGET_CPA.
     *     @type \Google\Ads\GoogleAds\V12\Common\TargetRoasSimulationPointList $target_roas_point_list
     *           Output only. Simulation points if the simulation type is TARGET_ROAS.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Resources\BiddingStrategySimulation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the bidding strategy simulation.
     * Bidding strategy simulation resource names have the form:
     * `customers/{customer_id}/biddingStrategySimulations/{bidding_strategy_id}~{type}~{modification_method}~{start_date}~{end_date}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the bidding strategy simulation.
     * Bidding strategy simulation resource names have the form:
     * `customers/{customer_id}/biddingStrategySimulations/{bidding_strategy_id}~{type}~{modification_method}~{start_date}~{end_date}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. Bidding strategy shared set id of the simulation.
     *
     * Generated from protobuf field <code>int64 bidding_strategy_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getBiddingStrategyId()
    {
        return $this->bidding_strategy_id;
    }

    /**
     * Output only. Bidding strategy shared set id of the simulation.
     *
     * Generated from protobuf field <code>int64 bidding_strategy_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setBiddingStrategyId($var)
    {
        GPBUtil::checkInt64($var);
        $this->bidding_strategy_id = $var;

        return $this;
    }

    /**
     * Output only. The field that the simulation modifies.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.SimulationTypeEnum.SimulationType type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Output only. The field that the simulation modifies.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.SimulationTypeEnum.SimulationType type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var);
        $this->type = $var;

        return $this;
    }

    /**
     * Output only. How the simulation modifies the field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.SimulationModificationMethodEnum.SimulationModificationMethod modification_method = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getModificationMethod()
    {
        return $this->modification_method;
    }

    /**
     * Output only. How the simulation modifies the field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.SimulationModificationMethodEnum.SimulationModificationMethod modification_method = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setModificationMethod($var)
    {
        GPBUtil::checkEnum($var);
        $this->modification_method = $var;

        return $this;
    }

    /**
     * Output only. First day on which the simulation is based, in YYYY-MM-DD format.
     *
     * Generated from protobuf field <code>string start_date = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Output only. First day on which the simulation is based, in YYYY-MM-DD format.
     *
     * Generated from protobuf field <code>string start_date = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setStartDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_date = $var;

        return $this;
    }

    /**
     * Output only. Last day on which the simulation is based, in YYYY-MM-DD format
     *
     * Generated from protobuf field <code>string end_date = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Output only. Last day on which the simulation is based, in YYYY-MM-DD format
     *
     * Generated from protobuf field <code>string end_date = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->end_date = $var;

        return $this;
    }

    /**
     * Output only. Simulation points if the simulation type is TARGET_CPA.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.TargetCpaSimulationPointList target_cpa_point_list = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V12\Common\TargetCpaSimulationPointList|null
     */
    public function getTargetCpaPointList()
    {
        return $this->readOneof(7);
    }

    public function hasTargetCpaPointList()
    {
        return $this->hasOneof(7);
    }

    /**
     * Output only. Simulation points if the simulation type is TARGET_CPA.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.TargetCpaSimulationPointList target_cpa_point_list = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V12\Common\TargetCpaSimulationPointList $var
     * @return $this
     */
    public function setTargetCpaPointList($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Common\TargetCpaSimulationPointList::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Output only. Simulation points if the simulation type is TARGET_ROAS.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.TargetRoasSimulationPointList target_roas_point_list = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V12\Common\TargetRoasSimulationPointList|null
     */
    public function getTargetRoasPointList()
    {
        return $this->readOneof(8);
    }

    public function hasTargetRoasPointList()
    {
        return $this->hasOneof(8);
    }

    /**
     * Output only. Simulation points if the simulation type is TARGET_ROAS.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.TargetRoasSimulationPointList target_roas_point_list = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V12\Common\TargetRoasSimulationPointList $var
     * @return $this
     */
    public function setTargetRoasPointList($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Common\TargetRoasSimulationPointList::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getPointList()
    {
        return $this->whichOneof("point_list");
    }

}

