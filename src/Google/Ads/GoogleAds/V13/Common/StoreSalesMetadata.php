<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/common/offline_user_data.proto

namespace Google\Ads\GoogleAds\V13\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for Store Sales Direct.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.common.StoreSalesMetadata</code>
 */
class StoreSalesMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * This is the fraction of all transactions that are identifiable (for
     * example, associated with any form of customer information). Required. The
     * fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>optional double loyalty_fraction = 5;</code>
     */
    protected $loyalty_fraction = null;
    /**
     * This is the ratio of sales being uploaded compared to the overall sales
     * that can be associated with a customer. Required.
     * The fraction needs to be between 0 and 1 (excluding 0). For example, if you
     * upload half the sales that you are able to associate with a customer, this
     * would be 0.5.
     *
     * Generated from protobuf field <code>optional double transaction_upload_fraction = 6;</code>
     */
    protected $transaction_upload_fraction = null;
    /**
     * Name of the store sales custom variable key. A predefined key that
     * can be applied to the transaction and then later used for custom
     * segmentation in reporting.
     * Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>optional string custom_key = 7;</code>
     */
    protected $custom_key = null;
    /**
     * Metadata for a third party Store Sales upload.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.common.StoreSalesThirdPartyMetadata third_party_metadata = 3;</code>
     */
    protected $third_party_metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $loyalty_fraction
     *           This is the fraction of all transactions that are identifiable (for
     *           example, associated with any form of customer information). Required. The
     *           fraction needs to be between 0 and 1 (excluding 0).
     *     @type float $transaction_upload_fraction
     *           This is the ratio of sales being uploaded compared to the overall sales
     *           that can be associated with a customer. Required.
     *           The fraction needs to be between 0 and 1 (excluding 0). For example, if you
     *           upload half the sales that you are able to associate with a customer, this
     *           would be 0.5.
     *     @type string $custom_key
     *           Name of the store sales custom variable key. A predefined key that
     *           can be applied to the transaction and then later used for custom
     *           segmentation in reporting.
     *           Accessible only to customers on the allow-list.
     *     @type \Google\Ads\GoogleAds\V13\Common\StoreSalesThirdPartyMetadata $third_party_metadata
     *           Metadata for a third party Store Sales upload.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Common\OfflineUserData::initOnce();
        parent::__construct($data);
    }

    /**
     * This is the fraction of all transactions that are identifiable (for
     * example, associated with any form of customer information). Required. The
     * fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>optional double loyalty_fraction = 5;</code>
     * @return float
     */
    public function getLoyaltyFraction()
    {
        return $this->loyalty_fraction ?? 0.0;
    }

    public function hasLoyaltyFraction()
    {
        return isset($this->loyalty_fraction);
    }

    public function clearLoyaltyFraction()
    {
        unset($this->loyalty_fraction);
    }

    /**
     * This is the fraction of all transactions that are identifiable (for
     * example, associated with any form of customer information). Required. The
     * fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>optional double loyalty_fraction = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setLoyaltyFraction($var)
    {
        GPBUtil::checkDouble($var);
        $this->loyalty_fraction = $var;

        return $this;
    }

    /**
     * This is the ratio of sales being uploaded compared to the overall sales
     * that can be associated with a customer. Required.
     * The fraction needs to be between 0 and 1 (excluding 0). For example, if you
     * upload half the sales that you are able to associate with a customer, this
     * would be 0.5.
     *
     * Generated from protobuf field <code>optional double transaction_upload_fraction = 6;</code>
     * @return float
     */
    public function getTransactionUploadFraction()
    {
        return $this->transaction_upload_fraction ?? 0.0;
    }

    public function hasTransactionUploadFraction()
    {
        return isset($this->transaction_upload_fraction);
    }

    public function clearTransactionUploadFraction()
    {
        unset($this->transaction_upload_fraction);
    }

    /**
     * This is the ratio of sales being uploaded compared to the overall sales
     * that can be associated with a customer. Required.
     * The fraction needs to be between 0 and 1 (excluding 0). For example, if you
     * upload half the sales that you are able to associate with a customer, this
     * would be 0.5.
     *
     * Generated from protobuf field <code>optional double transaction_upload_fraction = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setTransactionUploadFraction($var)
    {
        GPBUtil::checkDouble($var);
        $this->transaction_upload_fraction = $var;

        return $this;
    }

    /**
     * Name of the store sales custom variable key. A predefined key that
     * can be applied to the transaction and then later used for custom
     * segmentation in reporting.
     * Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>optional string custom_key = 7;</code>
     * @return string
     */
    public function getCustomKey()
    {
        return $this->custom_key ?? '';
    }

    public function hasCustomKey()
    {
        return isset($this->custom_key);
    }

    public function clearCustomKey()
    {
        unset($this->custom_key);
    }

    /**
     * Name of the store sales custom variable key. A predefined key that
     * can be applied to the transaction and then later used for custom
     * segmentation in reporting.
     * Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>optional string custom_key = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->custom_key = $var;

        return $this;
    }

    /**
     * Metadata for a third party Store Sales upload.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.common.StoreSalesThirdPartyMetadata third_party_metadata = 3;</code>
     * @return \Google\Ads\GoogleAds\V13\Common\StoreSalesThirdPartyMetadata|null
     */
    public function getThirdPartyMetadata()
    {
        return $this->third_party_metadata;
    }

    public function hasThirdPartyMetadata()
    {
        return isset($this->third_party_metadata);
    }

    public function clearThirdPartyMetadata()
    {
        unset($this->third_party_metadata);
    }

    /**
     * Metadata for a third party Store Sales upload.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.common.StoreSalesThirdPartyMetadata third_party_metadata = 3;</code>
     * @param \Google\Ads\GoogleAds\V13\Common\StoreSalesThirdPartyMetadata $var
     * @return $this
     */
    public function setThirdPartyMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V13\Common\StoreSalesThirdPartyMetadata::class);
        $this->third_party_metadata = $var;

        return $this;
    }

}

