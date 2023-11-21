<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/resources/media_file.proto

namespace Google\Ads\GoogleAds\V13\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Encapsulates an Audio.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.resources.MediaAudio</code>
 */
class MediaAudio extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The duration of the Audio in milliseconds.
     *
     * Generated from protobuf field <code>optional int64 ad_duration_millis = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $ad_duration_millis = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $ad_duration_millis
     *           Output only. The duration of the Audio in milliseconds.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Resources\MediaFile::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The duration of the Audio in milliseconds.
     *
     * Generated from protobuf field <code>optional int64 ad_duration_millis = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getAdDurationMillis()
    {
        return $this->ad_duration_millis ?? 0;
    }

    public function hasAdDurationMillis()
    {
        return isset($this->ad_duration_millis);
    }

    public function clearAdDurationMillis()
    {
        unset($this->ad_duration_millis);
    }

    /**
     * Output only. The duration of the Audio in milliseconds.
     *
     * Generated from protobuf field <code>optional int64 ad_duration_millis = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setAdDurationMillis($var)
    {
        GPBUtil::checkInt64($var);
        $this->ad_duration_millis = $var;

        return $this;
    }

}

