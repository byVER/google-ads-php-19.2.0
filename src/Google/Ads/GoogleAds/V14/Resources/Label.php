<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/label.proto

namespace Google\Ads\GoogleAds\V14\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A label.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.Label</code>
 */
class Label extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. Name of the resource.
     * Label resource names have the form:
     * `customers/{customer_id}/labels/{label_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. ID of the label. Read only.
     *
     * Generated from protobuf field <code>optional int64 id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;
    /**
     * The name of the label.
     * This field is required and should not be empty when creating a new label.
     * The length of this string should be between 1 and 80, inclusive.
     *
     * Generated from protobuf field <code>optional string name = 7;</code>
     */
    protected $name = null;
    /**
     * Output only. Status of the label. Read only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.LabelStatusEnum.LabelStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;
    /**
     * A type of label displaying text on a colored background.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.TextLabel text_label = 5;</code>
     */
    protected $text_label = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. Name of the resource.
     *           Label resource names have the form:
     *           `customers/{customer_id}/labels/{label_id}`
     *     @type int|string $id
     *           Output only. ID of the label. Read only.
     *     @type string $name
     *           The name of the label.
     *           This field is required and should not be empty when creating a new label.
     *           The length of this string should be between 1 and 80, inclusive.
     *     @type int $status
     *           Output only. Status of the label. Read only.
     *     @type \Google\Ads\GoogleAds\V14\Common\TextLabel $text_label
     *           A type of label displaying text on a colored background.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\Label::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. Name of the resource.
     * Label resource names have the form:
     * `customers/{customer_id}/labels/{label_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. Name of the resource.
     * Label resource names have the form:
     * `customers/{customer_id}/labels/{label_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. ID of the label. Read only.
     *
     * Generated from protobuf field <code>optional int64 id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id ?? 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Output only. ID of the label. Read only.
     *
     * Generated from protobuf field <code>optional int64 id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * The name of the label.
     * This field is required and should not be empty when creating a new label.
     * The length of this string should be between 1 and 80, inclusive.
     *
     * Generated from protobuf field <code>optional string name = 7;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name ?? '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * The name of the label.
     * This field is required and should not be empty when creating a new label.
     * The length of this string should be between 1 and 80, inclusive.
     *
     * Generated from protobuf field <code>optional string name = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. Status of the label. Read only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.LabelStatusEnum.LabelStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. Status of the label. Read only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.LabelStatusEnum.LabelStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var);
        $this->status = $var;

        return $this;
    }

    /**
     * A type of label displaying text on a colored background.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.TextLabel text_label = 5;</code>
     * @return \Google\Ads\GoogleAds\V14\Common\TextLabel|null
     */
    public function getTextLabel()
    {
        return $this->text_label;
    }

    public function hasTextLabel()
    {
        return isset($this->text_label);
    }

    public function clearTextLabel()
    {
        unset($this->text_label);
    }

    /**
     * A type of label displaying text on a colored background.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.TextLabel text_label = 5;</code>
     * @param \Google\Ads\GoogleAds\V14\Common\TextLabel $var
     * @return $this
     */
    public function setTextLabel($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V14\Common\TextLabel::class);
        $this->text_label = $var;

        return $this;
    }

}

