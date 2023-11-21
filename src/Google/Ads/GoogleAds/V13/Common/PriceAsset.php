<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/common/asset_types.proto

namespace Google\Ads\GoogleAds\V13\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An asset representing a list of price offers.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.common.PriceAsset</code>
 */
class PriceAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The type of the price asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.PriceExtensionTypeEnum.PriceExtensionType type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $type = 0;
    /**
     * The price qualifier of the price asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.PriceExtensionPriceQualifierEnum.PriceExtensionPriceQualifier price_qualifier = 2;</code>
     */
    protected $price_qualifier = 0;
    /**
     * Required. The language of the price asset.
     * Represented as BCP 47 language tag.
     *
     * Generated from protobuf field <code>string language_code = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $language_code = '';
    /**
     * The price offerings of the price asset.
     * The size of this collection should be between 3 and 8, inclusive.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v13.common.PriceOffering price_offerings = 4;</code>
     */
    private $price_offerings;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Required. The type of the price asset.
     *     @type int $price_qualifier
     *           The price qualifier of the price asset.
     *     @type string $language_code
     *           Required. The language of the price asset.
     *           Represented as BCP 47 language tag.
     *     @type array<\Google\Ads\GoogleAds\V13\Common\PriceOffering>|\Google\Protobuf\Internal\RepeatedField $price_offerings
     *           The price offerings of the price asset.
     *           The size of this collection should be between 3 and 8, inclusive.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Common\AssetTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The type of the price asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.PriceExtensionTypeEnum.PriceExtensionType type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. The type of the price asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.PriceExtensionTypeEnum.PriceExtensionType type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var);
        $this->type = $var;

        return $this;
    }

    /**
     * The price qualifier of the price asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.PriceExtensionPriceQualifierEnum.PriceExtensionPriceQualifier price_qualifier = 2;</code>
     * @return int
     */
    public function getPriceQualifier()
    {
        return $this->price_qualifier;
    }

    /**
     * The price qualifier of the price asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.PriceExtensionPriceQualifierEnum.PriceExtensionPriceQualifier price_qualifier = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPriceQualifier($var)
    {
        GPBUtil::checkEnum($var);
        $this->price_qualifier = $var;

        return $this;
    }

    /**
     * Required. The language of the price asset.
     * Represented as BCP 47 language tag.
     *
     * Generated from protobuf field <code>string language_code = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Required. The language of the price asset.
     * Represented as BCP 47 language tag.
     *
     * Generated from protobuf field <code>string language_code = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * The price offerings of the price asset.
     * The size of this collection should be between 3 and 8, inclusive.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v13.common.PriceOffering price_offerings = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPriceOfferings()
    {
        return $this->price_offerings;
    }

    /**
     * The price offerings of the price asset.
     * The size of this collection should be between 3 and 8, inclusive.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v13.common.PriceOffering price_offerings = 4;</code>
     * @param array<\Google\Ads\GoogleAds\V13\Common\PriceOffering>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPriceOfferings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V13\Common\PriceOffering::class);
        $this->price_offerings = $arr;

        return $this;
    }

}

