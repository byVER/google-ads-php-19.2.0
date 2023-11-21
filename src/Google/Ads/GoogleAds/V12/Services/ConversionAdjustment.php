<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/services/conversion_adjustment_upload_service.proto

namespace Google\Ads\GoogleAds\V12\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A conversion adjustment.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.services.ConversionAdjustment</code>
 */
class ConversionAdjustment extends \Google\Protobuf\Internal\Message
{
    /**
     * For adjustments, uniquely identifies a conversion that was reported
     * without an order ID specified. If the adjustment_type is ENHANCEMENT, this
     * value is optional but may be set in addition to the order_id.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.services.GclidDateTimePair gclid_date_time_pair = 12;</code>
     */
    protected $gclid_date_time_pair = null;
    /**
     * The order ID of the conversion to be adjusted. If the conversion was
     * reported with an order ID specified, that order ID must be used as the
     * identifier here. The order ID is required for enhancements.
     *
     * Generated from protobuf field <code>optional string order_id = 13;</code>
     */
    protected $order_id = null;
    /**
     * Resource name of the conversion action associated with this conversion
     * adjustment. Note: Although this resource name consists of a customer id and
     * a conversion action id, validation will ignore the customer id and use the
     * conversion action id as the sole identifier of the conversion action.
     *
     * Generated from protobuf field <code>optional string conversion_action = 8;</code>
     */
    protected $conversion_action = null;
    /**
     * The date time at which the adjustment occurred. Must be after the
     * conversion_date_time. The timezone must be specified. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>optional string adjustment_date_time = 9;</code>
     */
    protected $adjustment_date_time = null;
    /**
     * The adjustment type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.ConversionAdjustmentTypeEnum.ConversionAdjustmentType adjustment_type = 5;</code>
     */
    protected $adjustment_type = 0;
    /**
     * Information needed to restate the conversion's value.
     * Required for restatements. Should not be supplied for retractions. An error
     * will be returned if provided for a retraction.
     * NOTE: If you want to upload a second restatement with a different adjusted
     * value, it must have a new, more recent, adjustment occurrence time.
     * Otherwise, it will be treated as a duplicate of the previous restatement
     * and ignored.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.services.RestatementValue restatement_value = 6;</code>
     */
    protected $restatement_value = null;
    /**
     * The user identifiers to enhance the original conversion.
     * ConversionAdjustmentUploadService only accepts user identifiers in
     * enhancements. The maximum number of user identifiers for each
     * enhancement is 5.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.common.UserIdentifier user_identifiers = 10;</code>
     */
    private $user_identifiers;
    /**
     * The user agent to enhance the original conversion. This can be found in
     * your user's HTTP request header when they convert on your web page.
     * Example, "Mozilla/5.0 (iPhone; CPU iPhone OS 12_2 like Mac OS X)". User
     * agent can only be specified in enhancements with user identifiers. This
     * should match the user agent of the request that sent the original
     * conversion so the conversion and its enhancement are either both attributed
     * as same-device or both attributed as cross-device.
     *
     * Generated from protobuf field <code>optional string user_agent = 11;</code>
     */
    protected $user_agent = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V12\Services\GclidDateTimePair $gclid_date_time_pair
     *           For adjustments, uniquely identifies a conversion that was reported
     *           without an order ID specified. If the adjustment_type is ENHANCEMENT, this
     *           value is optional but may be set in addition to the order_id.
     *     @type string $order_id
     *           The order ID of the conversion to be adjusted. If the conversion was
     *           reported with an order ID specified, that order ID must be used as the
     *           identifier here. The order ID is required for enhancements.
     *     @type string $conversion_action
     *           Resource name of the conversion action associated with this conversion
     *           adjustment. Note: Although this resource name consists of a customer id and
     *           a conversion action id, validation will ignore the customer id and use the
     *           conversion action id as the sole identifier of the conversion action.
     *     @type string $adjustment_date_time
     *           The date time at which the adjustment occurred. Must be after the
     *           conversion_date_time. The timezone must be specified. The format is
     *           "yyyy-mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
     *     @type int $adjustment_type
     *           The adjustment type.
     *     @type \Google\Ads\GoogleAds\V12\Services\RestatementValue $restatement_value
     *           Information needed to restate the conversion's value.
     *           Required for restatements. Should not be supplied for retractions. An error
     *           will be returned if provided for a retraction.
     *           NOTE: If you want to upload a second restatement with a different adjusted
     *           value, it must have a new, more recent, adjustment occurrence time.
     *           Otherwise, it will be treated as a duplicate of the previous restatement
     *           and ignored.
     *     @type array<\Google\Ads\GoogleAds\V12\Common\UserIdentifier>|\Google\Protobuf\Internal\RepeatedField $user_identifiers
     *           The user identifiers to enhance the original conversion.
     *           ConversionAdjustmentUploadService only accepts user identifiers in
     *           enhancements. The maximum number of user identifiers for each
     *           enhancement is 5.
     *     @type string $user_agent
     *           The user agent to enhance the original conversion. This can be found in
     *           your user's HTTP request header when they convert on your web page.
     *           Example, "Mozilla/5.0 (iPhone; CPU iPhone OS 12_2 like Mac OS X)". User
     *           agent can only be specified in enhancements with user identifiers. This
     *           should match the user agent of the request that sent the original
     *           conversion so the conversion and its enhancement are either both attributed
     *           as same-device or both attributed as cross-device.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Services\ConversionAdjustmentUploadService::initOnce();
        parent::__construct($data);
    }

    /**
     * For adjustments, uniquely identifies a conversion that was reported
     * without an order ID specified. If the adjustment_type is ENHANCEMENT, this
     * value is optional but may be set in addition to the order_id.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.services.GclidDateTimePair gclid_date_time_pair = 12;</code>
     * @return \Google\Ads\GoogleAds\V12\Services\GclidDateTimePair|null
     */
    public function getGclidDateTimePair()
    {
        return $this->gclid_date_time_pair;
    }

    public function hasGclidDateTimePair()
    {
        return isset($this->gclid_date_time_pair);
    }

    public function clearGclidDateTimePair()
    {
        unset($this->gclid_date_time_pair);
    }

    /**
     * For adjustments, uniquely identifies a conversion that was reported
     * without an order ID specified. If the adjustment_type is ENHANCEMENT, this
     * value is optional but may be set in addition to the order_id.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.services.GclidDateTimePair gclid_date_time_pair = 12;</code>
     * @param \Google\Ads\GoogleAds\V12\Services\GclidDateTimePair $var
     * @return $this
     */
    public function setGclidDateTimePair($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Services\GclidDateTimePair::class);
        $this->gclid_date_time_pair = $var;

        return $this;
    }

    /**
     * The order ID of the conversion to be adjusted. If the conversion was
     * reported with an order ID specified, that order ID must be used as the
     * identifier here. The order ID is required for enhancements.
     *
     * Generated from protobuf field <code>optional string order_id = 13;</code>
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id ?? '';
    }

    public function hasOrderId()
    {
        return isset($this->order_id);
    }

    public function clearOrderId()
    {
        unset($this->order_id);
    }

    /**
     * The order ID of the conversion to be adjusted. If the conversion was
     * reported with an order ID specified, that order ID must be used as the
     * identifier here. The order ID is required for enhancements.
     *
     * Generated from protobuf field <code>optional string order_id = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_id = $var;

        return $this;
    }

    /**
     * Resource name of the conversion action associated with this conversion
     * adjustment. Note: Although this resource name consists of a customer id and
     * a conversion action id, validation will ignore the customer id and use the
     * conversion action id as the sole identifier of the conversion action.
     *
     * Generated from protobuf field <code>optional string conversion_action = 8;</code>
     * @return string
     */
    public function getConversionAction()
    {
        return $this->conversion_action ?? '';
    }

    public function hasConversionAction()
    {
        return isset($this->conversion_action);
    }

    public function clearConversionAction()
    {
        unset($this->conversion_action);
    }

    /**
     * Resource name of the conversion action associated with this conversion
     * adjustment. Note: Although this resource name consists of a customer id and
     * a conversion action id, validation will ignore the customer id and use the
     * conversion action id as the sole identifier of the conversion action.
     *
     * Generated from protobuf field <code>optional string conversion_action = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setConversionAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->conversion_action = $var;

        return $this;
    }

    /**
     * The date time at which the adjustment occurred. Must be after the
     * conversion_date_time. The timezone must be specified. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>optional string adjustment_date_time = 9;</code>
     * @return string
     */
    public function getAdjustmentDateTime()
    {
        return $this->adjustment_date_time ?? '';
    }

    public function hasAdjustmentDateTime()
    {
        return isset($this->adjustment_date_time);
    }

    public function clearAdjustmentDateTime()
    {
        unset($this->adjustment_date_time);
    }

    /**
     * The date time at which the adjustment occurred. Must be after the
     * conversion_date_time. The timezone must be specified. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>optional string adjustment_date_time = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setAdjustmentDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->adjustment_date_time = $var;

        return $this;
    }

    /**
     * The adjustment type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.ConversionAdjustmentTypeEnum.ConversionAdjustmentType adjustment_type = 5;</code>
     * @return int
     */
    public function getAdjustmentType()
    {
        return $this->adjustment_type;
    }

    /**
     * The adjustment type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.ConversionAdjustmentTypeEnum.ConversionAdjustmentType adjustment_type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setAdjustmentType($var)
    {
        GPBUtil::checkEnum($var);
        $this->adjustment_type = $var;

        return $this;
    }

    /**
     * Information needed to restate the conversion's value.
     * Required for restatements. Should not be supplied for retractions. An error
     * will be returned if provided for a retraction.
     * NOTE: If you want to upload a second restatement with a different adjusted
     * value, it must have a new, more recent, adjustment occurrence time.
     * Otherwise, it will be treated as a duplicate of the previous restatement
     * and ignored.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.services.RestatementValue restatement_value = 6;</code>
     * @return \Google\Ads\GoogleAds\V12\Services\RestatementValue|null
     */
    public function getRestatementValue()
    {
        return $this->restatement_value;
    }

    public function hasRestatementValue()
    {
        return isset($this->restatement_value);
    }

    public function clearRestatementValue()
    {
        unset($this->restatement_value);
    }

    /**
     * Information needed to restate the conversion's value.
     * Required for restatements. Should not be supplied for retractions. An error
     * will be returned if provided for a retraction.
     * NOTE: If you want to upload a second restatement with a different adjusted
     * value, it must have a new, more recent, adjustment occurrence time.
     * Otherwise, it will be treated as a duplicate of the previous restatement
     * and ignored.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.services.RestatementValue restatement_value = 6;</code>
     * @param \Google\Ads\GoogleAds\V12\Services\RestatementValue $var
     * @return $this
     */
    public function setRestatementValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Services\RestatementValue::class);
        $this->restatement_value = $var;

        return $this;
    }

    /**
     * The user identifiers to enhance the original conversion.
     * ConversionAdjustmentUploadService only accepts user identifiers in
     * enhancements. The maximum number of user identifiers for each
     * enhancement is 5.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.common.UserIdentifier user_identifiers = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserIdentifiers()
    {
        return $this->user_identifiers;
    }

    /**
     * The user identifiers to enhance the original conversion.
     * ConversionAdjustmentUploadService only accepts user identifiers in
     * enhancements. The maximum number of user identifiers for each
     * enhancement is 5.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.common.UserIdentifier user_identifiers = 10;</code>
     * @param array<\Google\Ads\GoogleAds\V12\Common\UserIdentifier>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserIdentifiers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V12\Common\UserIdentifier::class);
        $this->user_identifiers = $arr;

        return $this;
    }

    /**
     * The user agent to enhance the original conversion. This can be found in
     * your user's HTTP request header when they convert on your web page.
     * Example, "Mozilla/5.0 (iPhone; CPU iPhone OS 12_2 like Mac OS X)". User
     * agent can only be specified in enhancements with user identifiers. This
     * should match the user agent of the request that sent the original
     * conversion so the conversion and its enhancement are either both attributed
     * as same-device or both attributed as cross-device.
     *
     * Generated from protobuf field <code>optional string user_agent = 11;</code>
     * @return string
     */
    public function getUserAgent()
    {
        return $this->user_agent ?? '';
    }

    public function hasUserAgent()
    {
        return isset($this->user_agent);
    }

    public function clearUserAgent()
    {
        unset($this->user_agent);
    }

    /**
     * The user agent to enhance the original conversion. This can be found in
     * your user's HTTP request header when they convert on your web page.
     * Example, "Mozilla/5.0 (iPhone; CPU iPhone OS 12_2 like Mac OS X)". User
     * agent can only be specified in enhancements with user identifiers. This
     * should match the user agent of the request that sent the original
     * conversion so the conversion and its enhancement are either both attributed
     * as same-device or both attributed as cross-device.
     *
     * Generated from protobuf field <code>optional string user_agent = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setUserAgent($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_agent = $var;

        return $this;
    }

}

