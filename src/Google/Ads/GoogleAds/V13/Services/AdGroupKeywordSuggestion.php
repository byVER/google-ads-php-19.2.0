<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/services/keyword_plan_idea_service.proto

namespace Google\Ads\GoogleAds\V13\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The suggested text and AdGroup/Campaign pairing for a given keyword.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.services.AdGroupKeywordSuggestion</code>
 */
class AdGroupKeywordSuggestion extends \Google\Protobuf\Internal\Message
{
    /**
     * The original keyword text.
     *
     * Generated from protobuf field <code>string keyword_text = 1;</code>
     */
    protected $keyword_text = '';
    /**
     * The normalized version of keyword_text for BROAD/EXACT/PHRASE suggestions.
     *
     * Generated from protobuf field <code>string suggested_keyword_text = 2;</code>
     */
    protected $suggested_keyword_text = '';
    /**
     * The suggested keyword match type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.KeywordMatchTypeEnum.KeywordMatchType suggested_match_type = 3;</code>
     */
    protected $suggested_match_type = 0;
    /**
     * The suggested AdGroup for the keyword.
     * Resource name format: `customers/{customer_id}/adGroups/{ad_group_id}`
     *
     * Generated from protobuf field <code>string suggested_ad_group = 4;</code>
     */
    protected $suggested_ad_group = '';
    /**
     * The suggested Campaign for the keyword.
     * Resource name format: `customers/{customer_id}/campaigns/{campaign_id}`
     *
     * Generated from protobuf field <code>string suggested_campaign = 5;</code>
     */
    protected $suggested_campaign = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $keyword_text
     *           The original keyword text.
     *     @type string $suggested_keyword_text
     *           The normalized version of keyword_text for BROAD/EXACT/PHRASE suggestions.
     *     @type int $suggested_match_type
     *           The suggested keyword match type.
     *     @type string $suggested_ad_group
     *           The suggested AdGroup for the keyword.
     *           Resource name format: `customers/{customer_id}/adGroups/{ad_group_id}`
     *     @type string $suggested_campaign
     *           The suggested Campaign for the keyword.
     *           Resource name format: `customers/{customer_id}/campaigns/{campaign_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Services\KeywordPlanIdeaService::initOnce();
        parent::__construct($data);
    }

    /**
     * The original keyword text.
     *
     * Generated from protobuf field <code>string keyword_text = 1;</code>
     * @return string
     */
    public function getKeywordText()
    {
        return $this->keyword_text;
    }

    /**
     * The original keyword text.
     *
     * Generated from protobuf field <code>string keyword_text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKeywordText($var)
    {
        GPBUtil::checkString($var, True);
        $this->keyword_text = $var;

        return $this;
    }

    /**
     * The normalized version of keyword_text for BROAD/EXACT/PHRASE suggestions.
     *
     * Generated from protobuf field <code>string suggested_keyword_text = 2;</code>
     * @return string
     */
    public function getSuggestedKeywordText()
    {
        return $this->suggested_keyword_text;
    }

    /**
     * The normalized version of keyword_text for BROAD/EXACT/PHRASE suggestions.
     *
     * Generated from protobuf field <code>string suggested_keyword_text = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSuggestedKeywordText($var)
    {
        GPBUtil::checkString($var, True);
        $this->suggested_keyword_text = $var;

        return $this;
    }

    /**
     * The suggested keyword match type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.KeywordMatchTypeEnum.KeywordMatchType suggested_match_type = 3;</code>
     * @return int
     */
    public function getSuggestedMatchType()
    {
        return $this->suggested_match_type;
    }

    /**
     * The suggested keyword match type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.KeywordMatchTypeEnum.KeywordMatchType suggested_match_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSuggestedMatchType($var)
    {
        GPBUtil::checkEnum($var);
        $this->suggested_match_type = $var;

        return $this;
    }

    /**
     * The suggested AdGroup for the keyword.
     * Resource name format: `customers/{customer_id}/adGroups/{ad_group_id}`
     *
     * Generated from protobuf field <code>string suggested_ad_group = 4;</code>
     * @return string
     */
    public function getSuggestedAdGroup()
    {
        return $this->suggested_ad_group;
    }

    /**
     * The suggested AdGroup for the keyword.
     * Resource name format: `customers/{customer_id}/adGroups/{ad_group_id}`
     *
     * Generated from protobuf field <code>string suggested_ad_group = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSuggestedAdGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->suggested_ad_group = $var;

        return $this;
    }

    /**
     * The suggested Campaign for the keyword.
     * Resource name format: `customers/{customer_id}/campaigns/{campaign_id}`
     *
     * Generated from protobuf field <code>string suggested_campaign = 5;</code>
     * @return string
     */
    public function getSuggestedCampaign()
    {
        return $this->suggested_campaign;
    }

    /**
     * The suggested Campaign for the keyword.
     * Resource name format: `customers/{customer_id}/campaigns/{campaign_id}`
     *
     * Generated from protobuf field <code>string suggested_campaign = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSuggestedCampaign($var)
    {
        GPBUtil::checkString($var, True);
        $this->suggested_campaign = $var;

        return $this;
    }

}

