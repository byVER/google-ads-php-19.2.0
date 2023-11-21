<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/services/customer_service.proto

namespace Google\Ads\GoogleAds\V14\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [CustomerService.MutateCustomer][google.ads.googleads.v14.services.CustomerService.MutateCustomer].
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.services.MutateCustomerRequest</code>
 */
class MutateCustomerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the customer being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_id = '';
    /**
     * Required. The operation to perform on the customer
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.services.CustomerOperation operation = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $operation = null;
    /**
     * If true, the request is validated but not executed. Only errors are
     * returned, not results.
     *
     * Generated from protobuf field <code>bool validate_only = 5;</code>
     */
    protected $validate_only = false;
    /**
     * The response content type setting. Determines whether the mutable resource
     * or just the resource name should be returned post mutation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ResponseContentTypeEnum.ResponseContentType response_content_type = 6;</code>
     */
    protected $response_content_type = 0;

    /**
     * @param string                                               $customerId Required. The ID of the customer being modified.
     * @param \Google\Ads\GoogleAds\V14\Services\CustomerOperation $operation  Required. The operation to perform on the customer
     *
     * @return \Google\Ads\GoogleAds\V14\Services\MutateCustomerRequest
     *
     * @experimental
     */
    public static function build(string $customerId, \Google\Ads\GoogleAds\V14\Services\CustomerOperation $operation): self
    {
        return (new self())
            ->setCustomerId($customerId)
            ->setOperation($operation);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           Required. The ID of the customer being modified.
     *     @type \Google\Ads\GoogleAds\V14\Services\CustomerOperation $operation
     *           Required. The operation to perform on the customer
     *     @type bool $validate_only
     *           If true, the request is validated but not executed. Only errors are
     *           returned, not results.
     *     @type int $response_content_type
     *           The response content type setting. Determines whether the mutable resource
     *           or just the resource name should be returned post mutation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Services\CustomerService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the customer being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Required. The ID of the customer being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * Required. The operation to perform on the customer
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.services.CustomerOperation operation = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Ads\GoogleAds\V14\Services\CustomerOperation|null
     */
    public function getOperation()
    {
        return $this->operation;
    }

    public function hasOperation()
    {
        return isset($this->operation);
    }

    public function clearOperation()
    {
        unset($this->operation);
    }

    /**
     * Required. The operation to perform on the customer
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.services.CustomerOperation operation = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Ads\GoogleAds\V14\Services\CustomerOperation $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V14\Services\CustomerOperation::class);
        $this->operation = $var;

        return $this;
    }

    /**
     * If true, the request is validated but not executed. Only errors are
     * returned, not results.
     *
     * Generated from protobuf field <code>bool validate_only = 5;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If true, the request is validated but not executed. Only errors are
     * returned, not results.
     *
     * Generated from protobuf field <code>bool validate_only = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

    /**
     * The response content type setting. Determines whether the mutable resource
     * or just the resource name should be returned post mutation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ResponseContentTypeEnum.ResponseContentType response_content_type = 6;</code>
     * @return int
     */
    public function getResponseContentType()
    {
        return $this->response_content_type;
    }

    /**
     * The response content type setting. Determines whether the mutable resource
     * or just the resource name should be returned post mutation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ResponseContentTypeEnum.ResponseContentType response_content_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setResponseContentType($var)
    {
        GPBUtil::checkEnum($var);
        $this->response_content_type = $var;

        return $this;
    }

}

