<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/services/conversion_adjustment_upload_service.proto

namespace Google\Ads\GoogleAds\V12\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Uniquely identifies a conversion that was reported without an order ID
 * specified.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.services.GclidDateTimePair</code>
 */
class GclidDateTimePair extends \Google\Protobuf\Internal\Message
{
    /**
     * Google click ID (gclid) associated with the original conversion for this
     * adjustment.
     *
     * Generated from protobuf field <code>optional string gclid = 3;</code>
     */
    protected $gclid = null;
    /**
     * The date time at which the original conversion for this adjustment
     * occurred. The timezone must be specified. The format is "yyyy-mm-dd
     * hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>optional string conversion_date_time = 4;</code>
     */
    protected $conversion_date_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gclid
     *           Google click ID (gclid) associated with the original conversion for this
     *           adjustment.
     *     @type string $conversion_date_time
     *           The date time at which the original conversion for this adjustment
     *           occurred. The timezone must be specified. The format is "yyyy-mm-dd
     *           hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Services\ConversionAdjustmentUploadService::initOnce();
        parent::__construct($data);
    }

    /**
     * Google click ID (gclid) associated with the original conversion for this
     * adjustment.
     *
     * Generated from protobuf field <code>optional string gclid = 3;</code>
     * @return string
     */
    public function getGclid()
    {
        return $this->gclid ?? '';
    }

    public function hasGclid()
    {
        return isset($this->gclid);
    }

    public function clearGclid()
    {
        unset($this->gclid);
    }

    /**
     * Google click ID (gclid) associated with the original conversion for this
     * adjustment.
     *
     * Generated from protobuf field <code>optional string gclid = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setGclid($var)
    {
        GPBUtil::checkString($var, True);
        $this->gclid = $var;

        return $this;
    }

    /**
     * The date time at which the original conversion for this adjustment
     * occurred. The timezone must be specified. The format is "yyyy-mm-dd
     * hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>optional string conversion_date_time = 4;</code>
     * @return string
     */
    public function getConversionDateTime()
    {
        return $this->conversion_date_time ?? '';
    }

    public function hasConversionDateTime()
    {
        return isset($this->conversion_date_time);
    }

    public function clearConversionDateTime()
    {
        unset($this->conversion_date_time);
    }

    /**
     * The date time at which the original conversion for this adjustment
     * occurred. The timezone must be specified. The format is "yyyy-mm-dd
     * hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>optional string conversion_date_time = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setConversionDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->conversion_date_time = $var;

        return $this;
    }

}

