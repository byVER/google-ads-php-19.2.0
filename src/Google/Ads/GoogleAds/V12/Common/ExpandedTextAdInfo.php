<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V12\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An expanded text ad.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.common.ExpandedTextAdInfo</code>
 */
class ExpandedTextAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The first part of the ad's headline.
     *
     * Generated from protobuf field <code>optional string headline_part1 = 8;</code>
     */
    protected $headline_part1 = null;
    /**
     * The second part of the ad's headline.
     *
     * Generated from protobuf field <code>optional string headline_part2 = 9;</code>
     */
    protected $headline_part2 = null;
    /**
     * The third part of the ad's headline.
     *
     * Generated from protobuf field <code>optional string headline_part3 = 10;</code>
     */
    protected $headline_part3 = null;
    /**
     * The description of the ad.
     *
     * Generated from protobuf field <code>optional string description = 11;</code>
     */
    protected $description = null;
    /**
     * The second description of the ad.
     *
     * Generated from protobuf field <code>optional string description2 = 12;</code>
     */
    protected $description2 = null;
    /**
     * The text that can appear alongside the ad's displayed URL.
     *
     * Generated from protobuf field <code>optional string path1 = 13;</code>
     */
    protected $path1 = null;
    /**
     * Additional text that can appear alongside the ad's displayed URL.
     *
     * Generated from protobuf field <code>optional string path2 = 14;</code>
     */
    protected $path2 = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $headline_part1
     *           The first part of the ad's headline.
     *     @type string $headline_part2
     *           The second part of the ad's headline.
     *     @type string $headline_part3
     *           The third part of the ad's headline.
     *     @type string $description
     *           The description of the ad.
     *     @type string $description2
     *           The second description of the ad.
     *     @type string $path1
     *           The text that can appear alongside the ad's displayed URL.
     *     @type string $path2
     *           Additional text that can appear alongside the ad's displayed URL.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * The first part of the ad's headline.
     *
     * Generated from protobuf field <code>optional string headline_part1 = 8;</code>
     * @return string
     */
    public function getHeadlinePart1()
    {
        return $this->headline_part1 ?? '';
    }

    public function hasHeadlinePart1()
    {
        return isset($this->headline_part1);
    }

    public function clearHeadlinePart1()
    {
        unset($this->headline_part1);
    }

    /**
     * The first part of the ad's headline.
     *
     * Generated from protobuf field <code>optional string headline_part1 = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setHeadlinePart1($var)
    {
        GPBUtil::checkString($var, True);
        $this->headline_part1 = $var;

        return $this;
    }

    /**
     * The second part of the ad's headline.
     *
     * Generated from protobuf field <code>optional string headline_part2 = 9;</code>
     * @return string
     */
    public function getHeadlinePart2()
    {
        return $this->headline_part2 ?? '';
    }

    public function hasHeadlinePart2()
    {
        return isset($this->headline_part2);
    }

    public function clearHeadlinePart2()
    {
        unset($this->headline_part2);
    }

    /**
     * The second part of the ad's headline.
     *
     * Generated from protobuf field <code>optional string headline_part2 = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setHeadlinePart2($var)
    {
        GPBUtil::checkString($var, True);
        $this->headline_part2 = $var;

        return $this;
    }

    /**
     * The third part of the ad's headline.
     *
     * Generated from protobuf field <code>optional string headline_part3 = 10;</code>
     * @return string
     */
    public function getHeadlinePart3()
    {
        return $this->headline_part3 ?? '';
    }

    public function hasHeadlinePart3()
    {
        return isset($this->headline_part3);
    }

    public function clearHeadlinePart3()
    {
        unset($this->headline_part3);
    }

    /**
     * The third part of the ad's headline.
     *
     * Generated from protobuf field <code>optional string headline_part3 = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setHeadlinePart3($var)
    {
        GPBUtil::checkString($var, True);
        $this->headline_part3 = $var;

        return $this;
    }

    /**
     * The description of the ad.
     *
     * Generated from protobuf field <code>optional string description = 11;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description ?? '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * The description of the ad.
     *
     * Generated from protobuf field <code>optional string description = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * The second description of the ad.
     *
     * Generated from protobuf field <code>optional string description2 = 12;</code>
     * @return string
     */
    public function getDescription2()
    {
        return $this->description2 ?? '';
    }

    public function hasDescription2()
    {
        return isset($this->description2);
    }

    public function clearDescription2()
    {
        unset($this->description2);
    }

    /**
     * The second description of the ad.
     *
     * Generated from protobuf field <code>optional string description2 = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription2($var)
    {
        GPBUtil::checkString($var, True);
        $this->description2 = $var;

        return $this;
    }

    /**
     * The text that can appear alongside the ad's displayed URL.
     *
     * Generated from protobuf field <code>optional string path1 = 13;</code>
     * @return string
     */
    public function getPath1()
    {
        return $this->path1 ?? '';
    }

    public function hasPath1()
    {
        return isset($this->path1);
    }

    public function clearPath1()
    {
        unset($this->path1);
    }

    /**
     * The text that can appear alongside the ad's displayed URL.
     *
     * Generated from protobuf field <code>optional string path1 = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setPath1($var)
    {
        GPBUtil::checkString($var, True);
        $this->path1 = $var;

        return $this;
    }

    /**
     * Additional text that can appear alongside the ad's displayed URL.
     *
     * Generated from protobuf field <code>optional string path2 = 14;</code>
     * @return string
     */
    public function getPath2()
    {
        return $this->path2 ?? '';
    }

    public function hasPath2()
    {
        return isset($this->path2);
    }

    public function clearPath2()
    {
        unset($this->path2);
    }

    /**
     * Additional text that can appear alongside the ad's displayed URL.
     *
     * Generated from protobuf field <code>optional string path2 = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setPath2($var)
    {
        GPBUtil::checkString($var, True);
        $this->path2 = $var;

        return $this;
    }

}

