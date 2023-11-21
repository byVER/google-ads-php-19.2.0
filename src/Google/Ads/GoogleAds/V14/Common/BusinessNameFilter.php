<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/common/feed_item_set_filter_type_infos.proto

namespace Google\Ads\GoogleAds\V14\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a business name filter on locations in a FeedItemSet.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.common.BusinessNameFilter</code>
 */
class BusinessNameFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Business name string to use for filtering.
     *
     * Generated from protobuf field <code>string business_name = 1;</code>
     */
    protected $business_name = '';
    /**
     * The type of string matching to use when filtering with business_name.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.FeedItemSetStringFilterTypeEnum.FeedItemSetStringFilterType filter_type = 2;</code>
     */
    protected $filter_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $business_name
     *           Business name string to use for filtering.
     *     @type int $filter_type
     *           The type of string matching to use when filtering with business_name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Common\FeedItemSetFilterTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * Business name string to use for filtering.
     *
     * Generated from protobuf field <code>string business_name = 1;</code>
     * @return string
     */
    public function getBusinessName()
    {
        return $this->business_name;
    }

    /**
     * Business name string to use for filtering.
     *
     * Generated from protobuf field <code>string business_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessName($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_name = $var;

        return $this;
    }

    /**
     * The type of string matching to use when filtering with business_name.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.FeedItemSetStringFilterTypeEnum.FeedItemSetStringFilterType filter_type = 2;</code>
     * @return int
     */
    public function getFilterType()
    {
        return $this->filter_type;
    }

    /**
     * The type of string matching to use when filtering with business_name.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.FeedItemSetStringFilterTypeEnum.FeedItemSetStringFilterType filter_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setFilterType($var)
    {
        GPBUtil::checkEnum($var);
        $this->filter_type = $var;

        return $this;
    }

}

