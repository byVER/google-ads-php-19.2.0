<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/resources/video.proto

namespace Google\Ads\GoogleAds\V12\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A video.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.resources.Video</code>
 */
class Video extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the video.
     * Video resource names have the form:
     * `customers/{customer_id}/videos/{video_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ID of the video.
     *
     * Generated from protobuf field <code>optional string id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;
    /**
     * Output only. The owner channel id of the video.
     *
     * Generated from protobuf field <code>optional string channel_id = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $channel_id = null;
    /**
     * Output only. The duration of the video in milliseconds.
     *
     * Generated from protobuf field <code>optional int64 duration_millis = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $duration_millis = null;
    /**
     * Output only. The title of the video.
     *
     * Generated from protobuf field <code>optional string title = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $title = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the video.
     *           Video resource names have the form:
     *           `customers/{customer_id}/videos/{video_id}`
     *     @type string $id
     *           Output only. The ID of the video.
     *     @type string $channel_id
     *           Output only. The owner channel id of the video.
     *     @type int|string $duration_millis
     *           Output only. The duration of the video in milliseconds.
     *     @type string $title
     *           Output only. The title of the video.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Resources\Video::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the video.
     * Video resource names have the form:
     * `customers/{customer_id}/videos/{video_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the video.
     * Video resource names have the form:
     * `customers/{customer_id}/videos/{video_id}`
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
     * Output only. The ID of the video.
     *
     * Generated from protobuf field <code>optional string id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id ?? '';
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Output only. The ID of the video.
     *
     * Generated from protobuf field <code>optional string id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Output only. The owner channel id of the video.
     *
     * Generated from protobuf field <code>optional string channel_id = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The owner channel id of the video.
     *
     * Generated from protobuf field <code>optional string channel_id = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setChannelId($var)
    {
        GPBUtil::checkString($var, True);
        $this->channel_id = $var;

        return $this;
    }

    /**
     * Output only. The duration of the video in milliseconds.
     *
     * Generated from protobuf field <code>optional int64 duration_millis = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getDurationMillis()
    {
        return $this->duration_millis ?? 0;
    }

    public function hasDurationMillis()
    {
        return isset($this->duration_millis);
    }

    public function clearDurationMillis()
    {
        unset($this->duration_millis);
    }

    /**
     * Output only. The duration of the video in milliseconds.
     *
     * Generated from protobuf field <code>optional int64 duration_millis = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setDurationMillis($var)
    {
        GPBUtil::checkInt64($var);
        $this->duration_millis = $var;

        return $this;
    }

    /**
     * Output only. The title of the video.
     *
     * Generated from protobuf field <code>optional string title = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title ?? '';
    }

    public function hasTitle()
    {
        return isset($this->title);
    }

    public function clearTitle()
    {
        unset($this->title);
    }

    /**
     * Output only. The title of the video.
     *
     * Generated from protobuf field <code>optional string title = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

}

