<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/errors/errors.proto

namespace Google\Ads\GoogleAds\V13\Errors;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Error details returned when an resource count limit was exceeded.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.errors.ResourceCountDetails</code>
 */
class ResourceCountDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the resource whose limit was exceeded.
     * External customer ID if the limit is for a customer.
     *
     * Generated from protobuf field <code>string enclosing_id = 1;</code>
     */
    protected $enclosing_id = '';
    /**
     * The name of the resource (Customer, Campaign etc.) whose limit was
     * exceeded.
     *
     * Generated from protobuf field <code>string enclosing_resource = 5;</code>
     */
    protected $enclosing_resource = '';
    /**
     * The limit which was exceeded.
     *
     * Generated from protobuf field <code>int32 limit = 2;</code>
     */
    protected $limit = 0;
    /**
     * The resource limit type which was exceeded.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.ResourceLimitTypeEnum.ResourceLimitType limit_type = 3;</code>
     */
    protected $limit_type = 0;
    /**
     * The count of existing entities.
     *
     * Generated from protobuf field <code>int32 existing_count = 4;</code>
     */
    protected $existing_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $enclosing_id
     *           The ID of the resource whose limit was exceeded.
     *           External customer ID if the limit is for a customer.
     *     @type string $enclosing_resource
     *           The name of the resource (Customer, Campaign etc.) whose limit was
     *           exceeded.
     *     @type int $limit
     *           The limit which was exceeded.
     *     @type int $limit_type
     *           The resource limit type which was exceeded.
     *     @type int $existing_count
     *           The count of existing entities.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Errors\Errors::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the resource whose limit was exceeded.
     * External customer ID if the limit is for a customer.
     *
     * Generated from protobuf field <code>string enclosing_id = 1;</code>
     * @return string
     */
    public function getEnclosingId()
    {
        return $this->enclosing_id;
    }

    /**
     * The ID of the resource whose limit was exceeded.
     * External customer ID if the limit is for a customer.
     *
     * Generated from protobuf field <code>string enclosing_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEnclosingId($var)
    {
        GPBUtil::checkString($var, True);
        $this->enclosing_id = $var;

        return $this;
    }

    /**
     * The name of the resource (Customer, Campaign etc.) whose limit was
     * exceeded.
     *
     * Generated from protobuf field <code>string enclosing_resource = 5;</code>
     * @return string
     */
    public function getEnclosingResource()
    {
        return $this->enclosing_resource;
    }

    /**
     * The name of the resource (Customer, Campaign etc.) whose limit was
     * exceeded.
     *
     * Generated from protobuf field <code>string enclosing_resource = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setEnclosingResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->enclosing_resource = $var;

        return $this;
    }

    /**
     * The limit which was exceeded.
     *
     * Generated from protobuf field <code>int32 limit = 2;</code>
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * The limit which was exceeded.
     *
     * Generated from protobuf field <code>int32 limit = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt32($var);
        $this->limit = $var;

        return $this;
    }

    /**
     * The resource limit type which was exceeded.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.ResourceLimitTypeEnum.ResourceLimitType limit_type = 3;</code>
     * @return int
     */
    public function getLimitType()
    {
        return $this->limit_type;
    }

    /**
     * The resource limit type which was exceeded.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.ResourceLimitTypeEnum.ResourceLimitType limit_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLimitType($var)
    {
        GPBUtil::checkEnum($var);
        $this->limit_type = $var;

        return $this;
    }

    /**
     * The count of existing entities.
     *
     * Generated from protobuf field <code>int32 existing_count = 4;</code>
     * @return int
     */
    public function getExistingCount()
    {
        return $this->existing_count;
    }

    /**
     * The count of existing entities.
     *
     * Generated from protobuf field <code>int32 existing_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setExistingCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->existing_count = $var;

        return $this;
    }

}

