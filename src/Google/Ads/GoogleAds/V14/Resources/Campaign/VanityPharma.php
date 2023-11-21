<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/campaign.proto

namespace Google\Ads\GoogleAds\V14\Resources\Campaign;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes how unbranded pharma ads will be displayed.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.Campaign.VanityPharma</code>
 */
class VanityPharma extends \Google\Protobuf\Internal\Message
{
    /**
     * The display mode for vanity pharma URLs.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.VanityPharmaDisplayUrlModeEnum.VanityPharmaDisplayUrlMode vanity_pharma_display_url_mode = 1;</code>
     */
    protected $vanity_pharma_display_url_mode = 0;
    /**
     * The text that will be displayed in display URL of the text ad when
     * website description is the selected display mode for vanity pharma URLs.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.VanityPharmaTextEnum.VanityPharmaText vanity_pharma_text = 2;</code>
     */
    protected $vanity_pharma_text = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $vanity_pharma_display_url_mode
     *           The display mode for vanity pharma URLs.
     *     @type int $vanity_pharma_text
     *           The text that will be displayed in display URL of the text ad when
     *           website description is the selected display mode for vanity pharma URLs.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\Campaign::initOnce();
        parent::__construct($data);
    }

    /**
     * The display mode for vanity pharma URLs.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.VanityPharmaDisplayUrlModeEnum.VanityPharmaDisplayUrlMode vanity_pharma_display_url_mode = 1;</code>
     * @return int
     */
    public function getVanityPharmaDisplayUrlMode()
    {
        return $this->vanity_pharma_display_url_mode;
    }

    /**
     * The display mode for vanity pharma URLs.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.VanityPharmaDisplayUrlModeEnum.VanityPharmaDisplayUrlMode vanity_pharma_display_url_mode = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setVanityPharmaDisplayUrlMode($var)
    {
        GPBUtil::checkEnum($var);
        $this->vanity_pharma_display_url_mode = $var;

        return $this;
    }

    /**
     * The text that will be displayed in display URL of the text ad when
     * website description is the selected display mode for vanity pharma URLs.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.VanityPharmaTextEnum.VanityPharmaText vanity_pharma_text = 2;</code>
     * @return int
     */
    public function getVanityPharmaText()
    {
        return $this->vanity_pharma_text;
    }

    /**
     * The text that will be displayed in display URL of the text ad when
     * website description is the selected display mode for vanity pharma URLs.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.VanityPharmaTextEnum.VanityPharmaText vanity_pharma_text = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setVanityPharmaText($var)
    {
        GPBUtil::checkEnum($var);
        $this->vanity_pharma_text = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VanityPharma::class, \Google\Ads\GoogleAds\V14\Resources\Campaign_VanityPharma::class);

