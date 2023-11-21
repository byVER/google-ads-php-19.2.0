<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V13\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The keyword recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.resources.Recommendation.KeywordRecommendation</code>
 */
class KeywordRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The recommended keyword.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.common.KeywordInfo keyword = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $keyword = null;
    /**
     * Output only. The recommended CPC (cost-per-click) bid.
     *
     * Generated from protobuf field <code>optional int64 recommended_cpc_bid_micros = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $recommended_cpc_bid_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V13\Common\KeywordInfo $keyword
     *           Output only. The recommended keyword.
     *     @type int|string $recommended_cpc_bid_micros
     *           Output only. The recommended CPC (cost-per-click) bid.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The recommended keyword.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.common.KeywordInfo keyword = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V13\Common\KeywordInfo|null
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    public function hasKeyword()
    {
        return isset($this->keyword);
    }

    public function clearKeyword()
    {
        unset($this->keyword);
    }

    /**
     * Output only. The recommended keyword.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.common.KeywordInfo keyword = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V13\Common\KeywordInfo $var
     * @return $this
     */
    public function setKeyword($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V13\Common\KeywordInfo::class);
        $this->keyword = $var;

        return $this;
    }

    /**
     * Output only. The recommended CPC (cost-per-click) bid.
     *
     * Generated from protobuf field <code>optional int64 recommended_cpc_bid_micros = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getRecommendedCpcBidMicros()
    {
        return $this->recommended_cpc_bid_micros ?? 0;
    }

    public function hasRecommendedCpcBidMicros()
    {
        return isset($this->recommended_cpc_bid_micros);
    }

    public function clearRecommendedCpcBidMicros()
    {
        unset($this->recommended_cpc_bid_micros);
    }

    /**
     * Output only. The recommended CPC (cost-per-click) bid.
     *
     * Generated from protobuf field <code>optional int64 recommended_cpc_bid_micros = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setRecommendedCpcBidMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->recommended_cpc_bid_micros = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KeywordRecommendation::class, \Google\Ads\GoogleAds\V13\Resources\Recommendation_KeywordRecommendation::class);

