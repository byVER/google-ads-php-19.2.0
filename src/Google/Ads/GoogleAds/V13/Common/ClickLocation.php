<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/common/click_location.proto

namespace Google\Ads\GoogleAds\V13\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Location criteria associated with a click.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.common.ClickLocation</code>
 */
class ClickLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * The city location criterion associated with the impression.
     *
     * Generated from protobuf field <code>optional string city = 6;</code>
     */
    protected $city = null;
    /**
     * The country location criterion associated with the impression.
     *
     * Generated from protobuf field <code>optional string country = 7;</code>
     */
    protected $country = null;
    /**
     * The metro location criterion associated with the impression.
     *
     * Generated from protobuf field <code>optional string metro = 8;</code>
     */
    protected $metro = null;
    /**
     * The most specific location criterion associated with the impression.
     *
     * Generated from protobuf field <code>optional string most_specific = 9;</code>
     */
    protected $most_specific = null;
    /**
     * The region location criterion associated with the impression.
     *
     * Generated from protobuf field <code>optional string region = 10;</code>
     */
    protected $region = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $city
     *           The city location criterion associated with the impression.
     *     @type string $country
     *           The country location criterion associated with the impression.
     *     @type string $metro
     *           The metro location criterion associated with the impression.
     *     @type string $most_specific
     *           The most specific location criterion associated with the impression.
     *     @type string $region
     *           The region location criterion associated with the impression.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Common\ClickLocation::initOnce();
        parent::__construct($data);
    }

    /**
     * The city location criterion associated with the impression.
     *
     * Generated from protobuf field <code>optional string city = 6;</code>
     * @return string
     */
    public function getCity()
    {
        return $this->city ?? '';
    }

    public function hasCity()
    {
        return isset($this->city);
    }

    public function clearCity()
    {
        unset($this->city);
    }

    /**
     * The city location criterion associated with the impression.
     *
     * Generated from protobuf field <code>optional string city = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCity($var)
    {
        GPBUtil::checkString($var, True);
        $this->city = $var;

        return $this;
    }

    /**
     * The country location criterion associated with the impression.
     *
     * Generated from protobuf field <code>optional string country = 7;</code>
     * @return string
     */
    public function getCountry()
    {
        return $this->country ?? '';
    }

    public function hasCountry()
    {
        return isset($this->country);
    }

    public function clearCountry()
    {
        unset($this->country);
    }

    /**
     * The country location criterion associated with the impression.
     *
     * Generated from protobuf field <code>optional string country = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->country = $var;

        return $this;
    }

    /**
     * The metro location criterion associated with the impression.
     *
     * Generated from protobuf field <code>optional string metro = 8;</code>
     * @return string
     */
    public function getMetro()
    {
        return $this->metro ?? '';
    }

    public function hasMetro()
    {
        return isset($this->metro);
    }

    public function clearMetro()
    {
        unset($this->metro);
    }

    /**
     * The metro location criterion associated with the impression.
     *
     * Generated from protobuf field <code>optional string metro = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setMetro($var)
    {
        GPBUtil::checkString($var, True);
        $this->metro = $var;

        return $this;
    }

    /**
     * The most specific location criterion associated with the impression.
     *
     * Generated from protobuf field <code>optional string most_specific = 9;</code>
     * @return string
     */
    public function getMostSpecific()
    {
        return $this->most_specific ?? '';
    }

    public function hasMostSpecific()
    {
        return isset($this->most_specific);
    }

    public function clearMostSpecific()
    {
        unset($this->most_specific);
    }

    /**
     * The most specific location criterion associated with the impression.
     *
     * Generated from protobuf field <code>optional string most_specific = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setMostSpecific($var)
    {
        GPBUtil::checkString($var, True);
        $this->most_specific = $var;

        return $this;
    }

    /**
     * The region location criterion associated with the impression.
     *
     * Generated from protobuf field <code>optional string region = 10;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region ?? '';
    }

    public function hasRegion()
    {
        return isset($this->region);
    }

    public function clearRegion()
    {
        unset($this->region);
    }

    /**
     * The region location criterion associated with the impression.
     *
     * Generated from protobuf field <code>optional string region = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

}

