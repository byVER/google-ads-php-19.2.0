<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/common/offline_user_data.proto

namespace Google\Ads\GoogleAds\V13\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for a third party Store Sales.
 * This product is only for customers on the allow-list. Contact your
 * Google business development representative for details on the upload
 * configuration.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.common.StoreSalesThirdPartyMetadata</code>
 */
class StoreSalesThirdPartyMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Time the advertiser uploaded the data to the partner. Required.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>optional string advertiser_upload_date_time = 7;</code>
     */
    protected $advertiser_upload_date_time = null;
    /**
     * The fraction of transactions that are valid. Invalid transactions may
     * include invalid formats or values.
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>optional double valid_transaction_fraction = 8;</code>
     */
    protected $valid_transaction_fraction = null;
    /**
     * The fraction of valid transactions that are matched to a third party
     * assigned user ID on the partner side.
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>optional double partner_match_fraction = 9;</code>
     */
    protected $partner_match_fraction = null;
    /**
     * The fraction of valid transactions that are uploaded by the partner to
     * Google.
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>optional double partner_upload_fraction = 10;</code>
     */
    protected $partner_upload_fraction = null;
    /**
     * Version of partner IDs to be used for uploads. Required.
     *
     * Generated from protobuf field <code>optional string bridge_map_version_id = 11;</code>
     */
    protected $bridge_map_version_id = null;
    /**
     * ID of the third party partner updating the transaction feed.
     *
     * Generated from protobuf field <code>optional int64 partner_id = 12;</code>
     */
    protected $partner_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $advertiser_upload_date_time
     *           Time the advertiser uploaded the data to the partner. Required.
     *           The format is "YYYY-MM-DD HH:MM:SS".
     *           Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *     @type float $valid_transaction_fraction
     *           The fraction of transactions that are valid. Invalid transactions may
     *           include invalid formats or values.
     *           Required.
     *           The fraction needs to be between 0 and 1 (excluding 0).
     *     @type float $partner_match_fraction
     *           The fraction of valid transactions that are matched to a third party
     *           assigned user ID on the partner side.
     *           Required.
     *           The fraction needs to be between 0 and 1 (excluding 0).
     *     @type float $partner_upload_fraction
     *           The fraction of valid transactions that are uploaded by the partner to
     *           Google.
     *           Required.
     *           The fraction needs to be between 0 and 1 (excluding 0).
     *     @type string $bridge_map_version_id
     *           Version of partner IDs to be used for uploads. Required.
     *     @type int|string $partner_id
     *           ID of the third party partner updating the transaction feed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Common\OfflineUserData::initOnce();
        parent::__construct($data);
    }

    /**
     * Time the advertiser uploaded the data to the partner. Required.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>optional string advertiser_upload_date_time = 7;</code>
     * @return string
     */
    public function getAdvertiserUploadDateTime()
    {
        return $this->advertiser_upload_date_time ?? '';
    }

    public function hasAdvertiserUploadDateTime()
    {
        return isset($this->advertiser_upload_date_time);
    }

    public function clearAdvertiserUploadDateTime()
    {
        unset($this->advertiser_upload_date_time);
    }

    /**
     * Time the advertiser uploaded the data to the partner. Required.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>optional string advertiser_upload_date_time = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setAdvertiserUploadDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->advertiser_upload_date_time = $var;

        return $this;
    }

    /**
     * The fraction of transactions that are valid. Invalid transactions may
     * include invalid formats or values.
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>optional double valid_transaction_fraction = 8;</code>
     * @return float
     */
    public function getValidTransactionFraction()
    {
        return $this->valid_transaction_fraction ?? 0.0;
    }

    public function hasValidTransactionFraction()
    {
        return isset($this->valid_transaction_fraction);
    }

    public function clearValidTransactionFraction()
    {
        unset($this->valid_transaction_fraction);
    }

    /**
     * The fraction of transactions that are valid. Invalid transactions may
     * include invalid formats or values.
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>optional double valid_transaction_fraction = 8;</code>
     * @param float $var
     * @return $this
     */
    public function setValidTransactionFraction($var)
    {
        GPBUtil::checkDouble($var);
        $this->valid_transaction_fraction = $var;

        return $this;
    }

    /**
     * The fraction of valid transactions that are matched to a third party
     * assigned user ID on the partner side.
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>optional double partner_match_fraction = 9;</code>
     * @return float
     */
    public function getPartnerMatchFraction()
    {
        return $this->partner_match_fraction ?? 0.0;
    }

    public function hasPartnerMatchFraction()
    {
        return isset($this->partner_match_fraction);
    }

    public function clearPartnerMatchFraction()
    {
        unset($this->partner_match_fraction);
    }

    /**
     * The fraction of valid transactions that are matched to a third party
     * assigned user ID on the partner side.
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>optional double partner_match_fraction = 9;</code>
     * @param float $var
     * @return $this
     */
    public function setPartnerMatchFraction($var)
    {
        GPBUtil::checkDouble($var);
        $this->partner_match_fraction = $var;

        return $this;
    }

    /**
     * The fraction of valid transactions that are uploaded by the partner to
     * Google.
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>optional double partner_upload_fraction = 10;</code>
     * @return float
     */
    public function getPartnerUploadFraction()
    {
        return $this->partner_upload_fraction ?? 0.0;
    }

    public function hasPartnerUploadFraction()
    {
        return isset($this->partner_upload_fraction);
    }

    public function clearPartnerUploadFraction()
    {
        unset($this->partner_upload_fraction);
    }

    /**
     * The fraction of valid transactions that are uploaded by the partner to
     * Google.
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>optional double partner_upload_fraction = 10;</code>
     * @param float $var
     * @return $this
     */
    public function setPartnerUploadFraction($var)
    {
        GPBUtil::checkDouble($var);
        $this->partner_upload_fraction = $var;

        return $this;
    }

    /**
     * Version of partner IDs to be used for uploads. Required.
     *
     * Generated from protobuf field <code>optional string bridge_map_version_id = 11;</code>
     * @return string
     */
    public function getBridgeMapVersionId()
    {
        return $this->bridge_map_version_id ?? '';
    }

    public function hasBridgeMapVersionId()
    {
        return isset($this->bridge_map_version_id);
    }

    public function clearBridgeMapVersionId()
    {
        unset($this->bridge_map_version_id);
    }

    /**
     * Version of partner IDs to be used for uploads. Required.
     *
     * Generated from protobuf field <code>optional string bridge_map_version_id = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setBridgeMapVersionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->bridge_map_version_id = $var;

        return $this;
    }

    /**
     * ID of the third party partner updating the transaction feed.
     *
     * Generated from protobuf field <code>optional int64 partner_id = 12;</code>
     * @return int|string
     */
    public function getPartnerId()
    {
        return $this->partner_id ?? 0;
    }

    public function hasPartnerId()
    {
        return isset($this->partner_id);
    }

    public function clearPartnerId()
    {
        unset($this->partner_id);
    }

    /**
     * ID of the third party partner updating the transaction feed.
     *
     * Generated from protobuf field <code>optional int64 partner_id = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPartnerId($var)
    {
        GPBUtil::checkInt64($var);
        $this->partner_id = $var;

        return $this;
    }

}

