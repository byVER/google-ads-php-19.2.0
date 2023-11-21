<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/resources/lead_form_submission_data.proto

namespace Google\Ads\GoogleAds\V13\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Fields in the submitted lead form.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.resources.LeadFormSubmissionField</code>
 */
class LeadFormSubmissionField extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Field type for lead form fields.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.LeadFormFieldUserInputTypeEnum.LeadFormFieldUserInputType field_type = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $field_type = 0;
    /**
     * Output only. Field value for lead form fields.
     *
     * Generated from protobuf field <code>string field_value = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $field_value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $field_type
     *           Output only. Field type for lead form fields.
     *     @type string $field_value
     *           Output only. Field value for lead form fields.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Resources\LeadFormSubmissionData::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Field type for lead form fields.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.LeadFormFieldUserInputTypeEnum.LeadFormFieldUserInputType field_type = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getFieldType()
    {
        return $this->field_type;
    }

    /**
     * Output only. Field type for lead form fields.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.LeadFormFieldUserInputTypeEnum.LeadFormFieldUserInputType field_type = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setFieldType($var)
    {
        GPBUtil::checkEnum($var);
        $this->field_type = $var;

        return $this;
    }

    /**
     * Output only. Field value for lead form fields.
     *
     * Generated from protobuf field <code>string field_value = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getFieldValue()
    {
        return $this->field_value;
    }

    /**
     * Output only. Field value for lead form fields.
     *
     * Generated from protobuf field <code>string field_value = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setFieldValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_value = $var;

        return $this;
    }

}

