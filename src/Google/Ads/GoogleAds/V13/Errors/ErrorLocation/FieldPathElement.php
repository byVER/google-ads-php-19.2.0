<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/errors/errors.proto

namespace Google\Ads\GoogleAds\V13\Errors\ErrorLocation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A part of a field path.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.errors.ErrorLocation.FieldPathElement</code>
 */
class FieldPathElement extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of a field or a oneof
     *
     * Generated from protobuf field <code>string field_name = 1;</code>
     */
    protected $field_name = '';
    /**
     * If field_name is a repeated field, this is the element that failed
     *
     * Generated from protobuf field <code>optional int32 index = 3;</code>
     */
    protected $index = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $field_name
     *           The name of a field or a oneof
     *     @type int $index
     *           If field_name is a repeated field, this is the element that failed
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Errors\Errors::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of a field or a oneof
     *
     * Generated from protobuf field <code>string field_name = 1;</code>
     * @return string
     */
    public function getFieldName()
    {
        return $this->field_name;
    }

    /**
     * The name of a field or a oneof
     *
     * Generated from protobuf field <code>string field_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFieldName($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_name = $var;

        return $this;
    }

    /**
     * If field_name is a repeated field, this is the element that failed
     *
     * Generated from protobuf field <code>optional int32 index = 3;</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index ?? 0;
    }

    public function hasIndex()
    {
        return isset($this->index);
    }

    public function clearIndex()
    {
        unset($this->index);
    }

    /**
     * If field_name is a repeated field, this is the element that failed
     *
     * Generated from protobuf field <code>optional int32 index = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->index = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FieldPathElement::class, \Google\Ads\GoogleAds\V13\Errors\ErrorLocation_FieldPathElement::class);

