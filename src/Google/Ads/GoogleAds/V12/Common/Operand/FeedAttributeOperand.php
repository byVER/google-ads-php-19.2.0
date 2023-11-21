<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/common/matching_function.proto

namespace Google\Ads\GoogleAds\V12\Common\Operand;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A feed attribute operand in a matching function.
 * Used to represent a feed attribute in feed.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.common.Operand.FeedAttributeOperand</code>
 */
class FeedAttributeOperand extends \Google\Protobuf\Internal\Message
{
    /**
     * The associated feed. Required.
     *
     * Generated from protobuf field <code>optional int64 feed_id = 3;</code>
     */
    protected $feed_id = null;
    /**
     * Id of the referenced feed attribute. Required.
     *
     * Generated from protobuf field <code>optional int64 feed_attribute_id = 4;</code>
     */
    protected $feed_attribute_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $feed_id
     *           The associated feed. Required.
     *     @type int|string $feed_attribute_id
     *           Id of the referenced feed attribute. Required.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Common\MatchingFunction::initOnce();
        parent::__construct($data);
    }

    /**
     * The associated feed. Required.
     *
     * Generated from protobuf field <code>optional int64 feed_id = 3;</code>
     * @return int|string
     */
    public function getFeedId()
    {
        return $this->feed_id ?? 0;
    }

    public function hasFeedId()
    {
        return isset($this->feed_id);
    }

    public function clearFeedId()
    {
        unset($this->feed_id);
    }

    /**
     * The associated feed. Required.
     *
     * Generated from protobuf field <code>optional int64 feed_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFeedId($var)
    {
        GPBUtil::checkInt64($var);
        $this->feed_id = $var;

        return $this;
    }

    /**
     * Id of the referenced feed attribute. Required.
     *
     * Generated from protobuf field <code>optional int64 feed_attribute_id = 4;</code>
     * @return int|string
     */
    public function getFeedAttributeId()
    {
        return $this->feed_attribute_id ?? 0;
    }

    public function hasFeedAttributeId()
    {
        return isset($this->feed_attribute_id);
    }

    public function clearFeedAttributeId()
    {
        unset($this->feed_attribute_id);
    }

    /**
     * Id of the referenced feed attribute. Required.
     *
     * Generated from protobuf field <code>optional int64 feed_attribute_id = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFeedAttributeId($var)
    {
        GPBUtil::checkInt64($var);
        $this->feed_attribute_id = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FeedAttributeOperand::class, \Google\Ads\GoogleAds\V12\Common\Operand_FeedAttributeOperand::class);

