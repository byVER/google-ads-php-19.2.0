<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/common/criteria.proto

namespace Google\Ads\GoogleAds\V12\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A YouTube Channel criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.common.YouTubeChannelInfo</code>
 */
class YouTubeChannelInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The YouTube uploader channel id or the channel code of a YouTube channel.
     *
     * Generated from protobuf field <code>optional string channel_id = 2;</code>
     */
    protected $channel_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $channel_id
     *           The YouTube uploader channel id or the channel code of a YouTube channel.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The YouTube uploader channel id or the channel code of a YouTube channel.
     *
     * Generated from protobuf field <code>optional string channel_id = 2;</code>
     * @return string
     */
    public function getChannelId()
    {
        return $this->channel_id ?? '';
    }

    public function hasChannelId()
    {
        return isset($this->channel_id);
    }

    public function clearChannelId()
    {
        unset($this->channel_id);
    }

    /**
     * The YouTube uploader channel id or the channel code of a YouTube channel.
     *
     * Generated from protobuf field <code>optional string channel_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setChannelId($var)
    {
        GPBUtil::checkString($var, True);
        $this->channel_id = $var;

        return $this;
    }

}

