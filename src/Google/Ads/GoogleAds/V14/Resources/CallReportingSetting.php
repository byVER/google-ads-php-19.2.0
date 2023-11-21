<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/customer.proto

namespace Google\Ads\GoogleAds\V14\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Call reporting setting for a customer. Only mutable in an `update` operation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.CallReportingSetting</code>
 */
class CallReportingSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * Enable reporting of phone call events by redirecting them through Google
     * System.
     *
     * Generated from protobuf field <code>optional bool call_reporting_enabled = 10;</code>
     */
    protected $call_reporting_enabled = null;
    /**
     * Whether to enable call conversion reporting.
     *
     * Generated from protobuf field <code>optional bool call_conversion_reporting_enabled = 11;</code>
     */
    protected $call_conversion_reporting_enabled = null;
    /**
     * Customer-level call conversion action to attribute a call conversion to.
     * If not set a default conversion action is used. Only in effect when
     * call_conversion_reporting_enabled is set to true.
     *
     * Generated from protobuf field <code>optional string call_conversion_action = 12 [(.google.api.resource_reference) = {</code>
     */
    protected $call_conversion_action = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $call_reporting_enabled
     *           Enable reporting of phone call events by redirecting them through Google
     *           System.
     *     @type bool $call_conversion_reporting_enabled
     *           Whether to enable call conversion reporting.
     *     @type string $call_conversion_action
     *           Customer-level call conversion action to attribute a call conversion to.
     *           If not set a default conversion action is used. Only in effect when
     *           call_conversion_reporting_enabled is set to true.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\Customer::initOnce();
        parent::__construct($data);
    }

    /**
     * Enable reporting of phone call events by redirecting them through Google
     * System.
     *
     * Generated from protobuf field <code>optional bool call_reporting_enabled = 10;</code>
     * @return bool
     */
    public function getCallReportingEnabled()
    {
        return $this->call_reporting_enabled ?? false;
    }

    public function hasCallReportingEnabled()
    {
        return isset($this->call_reporting_enabled);
    }

    public function clearCallReportingEnabled()
    {
        unset($this->call_reporting_enabled);
    }

    /**
     * Enable reporting of phone call events by redirecting them through Google
     * System.
     *
     * Generated from protobuf field <code>optional bool call_reporting_enabled = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setCallReportingEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->call_reporting_enabled = $var;

        return $this;
    }

    /**
     * Whether to enable call conversion reporting.
     *
     * Generated from protobuf field <code>optional bool call_conversion_reporting_enabled = 11;</code>
     * @return bool
     */
    public function getCallConversionReportingEnabled()
    {
        return $this->call_conversion_reporting_enabled ?? false;
    }

    public function hasCallConversionReportingEnabled()
    {
        return isset($this->call_conversion_reporting_enabled);
    }

    public function clearCallConversionReportingEnabled()
    {
        unset($this->call_conversion_reporting_enabled);
    }

    /**
     * Whether to enable call conversion reporting.
     *
     * Generated from protobuf field <code>optional bool call_conversion_reporting_enabled = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setCallConversionReportingEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->call_conversion_reporting_enabled = $var;

        return $this;
    }

    /**
     * Customer-level call conversion action to attribute a call conversion to.
     * If not set a default conversion action is used. Only in effect when
     * call_conversion_reporting_enabled is set to true.
     *
     * Generated from protobuf field <code>optional string call_conversion_action = 12 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCallConversionAction()
    {
        return $this->call_conversion_action ?? '';
    }

    public function hasCallConversionAction()
    {
        return isset($this->call_conversion_action);
    }

    public function clearCallConversionAction()
    {
        unset($this->call_conversion_action);
    }

    /**
     * Customer-level call conversion action to attribute a call conversion to.
     * If not set a default conversion action is used. Only in effect when
     * call_conversion_reporting_enabled is set to true.
     *
     * Generated from protobuf field <code>optional string call_conversion_action = 12 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCallConversionAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->call_conversion_action = $var;

        return $this;
    }

}

