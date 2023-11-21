<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/services/keyword_plan_idea_service.proto

namespace Google\Ads\GoogleAds\V14\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result of generating keyword historical metrics.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.services.GenerateKeywordHistoricalMetricsResult</code>
 */
class GenerateKeywordHistoricalMetricsResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The text of the query associated with one or more keywords.
     * Note that we de-dupe your keywords list, eliminating close variants
     * before returning the keywords as text. For example, if your request
     * originally contained the keywords "car" and "cars", the returned search
     * query will only contain "cars". The list of de-duped queries will be
     * included in close_variants field.
     *
     * Generated from protobuf field <code>optional string text = 1;</code>
     */
    protected $text = null;
    /**
     * The list of close variants from the requested keywords whose stats
     * are combined into this GenerateKeywordHistoricalMetricsResult.
     *
     * Generated from protobuf field <code>repeated string close_variants = 3;</code>
     */
    private $close_variants;
    /**
     * The historical metrics for text and its close variants
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.KeywordPlanHistoricalMetrics keyword_metrics = 2;</code>
     */
    protected $keyword_metrics = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $text
     *           The text of the query associated with one or more keywords.
     *           Note that we de-dupe your keywords list, eliminating close variants
     *           before returning the keywords as text. For example, if your request
     *           originally contained the keywords "car" and "cars", the returned search
     *           query will only contain "cars". The list of de-duped queries will be
     *           included in close_variants field.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $close_variants
     *           The list of close variants from the requested keywords whose stats
     *           are combined into this GenerateKeywordHistoricalMetricsResult.
     *     @type \Google\Ads\GoogleAds\V14\Common\KeywordPlanHistoricalMetrics $keyword_metrics
     *           The historical metrics for text and its close variants
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Services\KeywordPlanIdeaService::initOnce();
        parent::__construct($data);
    }

    /**
     * The text of the query associated with one or more keywords.
     * Note that we de-dupe your keywords list, eliminating close variants
     * before returning the keywords as text. For example, if your request
     * originally contained the keywords "car" and "cars", the returned search
     * query will only contain "cars". The list of de-duped queries will be
     * included in close_variants field.
     *
     * Generated from protobuf field <code>optional string text = 1;</code>
     * @return string
     */
    public function getText()
    {
        return $this->text ?? '';
    }

    public function hasText()
    {
        return isset($this->text);
    }

    public function clearText()
    {
        unset($this->text);
    }

    /**
     * The text of the query associated with one or more keywords.
     * Note that we de-dupe your keywords list, eliminating close variants
     * before returning the keywords as text. For example, if your request
     * originally contained the keywords "car" and "cars", the returned search
     * query will only contain "cars". The list of de-duped queries will be
     * included in close_variants field.
     *
     * Generated from protobuf field <code>optional string text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

    /**
     * The list of close variants from the requested keywords whose stats
     * are combined into this GenerateKeywordHistoricalMetricsResult.
     *
     * Generated from protobuf field <code>repeated string close_variants = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCloseVariants()
    {
        return $this->close_variants;
    }

    /**
     * The list of close variants from the requested keywords whose stats
     * are combined into this GenerateKeywordHistoricalMetricsResult.
     *
     * Generated from protobuf field <code>repeated string close_variants = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCloseVariants($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->close_variants = $arr;

        return $this;
    }

    /**
     * The historical metrics for text and its close variants
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.KeywordPlanHistoricalMetrics keyword_metrics = 2;</code>
     * @return \Google\Ads\GoogleAds\V14\Common\KeywordPlanHistoricalMetrics|null
     */
    public function getKeywordMetrics()
    {
        return $this->keyword_metrics;
    }

    public function hasKeywordMetrics()
    {
        return isset($this->keyword_metrics);
    }

    public function clearKeywordMetrics()
    {
        unset($this->keyword_metrics);
    }

    /**
     * The historical metrics for text and its close variants
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.KeywordPlanHistoricalMetrics keyword_metrics = 2;</code>
     * @param \Google\Ads\GoogleAds\V14\Common\KeywordPlanHistoricalMetrics $var
     * @return $this
     */
    public function setKeywordMetrics($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V14\Common\KeywordPlanHistoricalMetrics::class);
        $this->keyword_metrics = $var;

        return $this;
    }

}

