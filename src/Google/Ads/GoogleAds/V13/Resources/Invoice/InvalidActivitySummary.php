<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/resources/invoice.proto

namespace Google\Ads\GoogleAds\V13\Resources\Invoice;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details about the invalid activity for the invoice that contain
 * additional details about invoice against which corrections are made.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.resources.Invoice.InvalidActivitySummary</code>
 */
class InvalidActivitySummary extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Original month of service related to this invalid activity
     * credit.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v13.enums.MonthOfYearEnum.MonthOfYear original_month_of_service = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $original_month_of_service = null;
    /**
     * Output only. Original year of service related to this invalid activity
     * credit.
     *
     * Generated from protobuf field <code>optional string original_year_of_service = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $original_year_of_service = null;
    /**
     * Output only. Original invoice number related to this invalid activity
     * credit.
     *
     * Generated from protobuf field <code>optional string original_invoice_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $original_invoice_id = null;
    /**
     * Output only. Original account budget name related to this invalid
     * activity credit.
     *
     * Generated from protobuf field <code>optional string original_account_budget_name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $original_account_budget_name = null;
    /**
     * Output only. Original purchase order number related to this invalid
     * activity credit.
     *
     * Generated from protobuf field <code>optional string original_purchase_order_number = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $original_purchase_order_number = null;
    /**
     * Output only. Invalid activity amount in micros.
     *
     * Generated from protobuf field <code>optional int64 amount_micros = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $amount_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $original_month_of_service
     *           Output only. Original month of service related to this invalid activity
     *           credit.
     *     @type string $original_year_of_service
     *           Output only. Original year of service related to this invalid activity
     *           credit.
     *     @type string $original_invoice_id
     *           Output only. Original invoice number related to this invalid activity
     *           credit.
     *     @type string $original_account_budget_name
     *           Output only. Original account budget name related to this invalid
     *           activity credit.
     *     @type string $original_purchase_order_number
     *           Output only. Original purchase order number related to this invalid
     *           activity credit.
     *     @type int|string $amount_micros
     *           Output only. Invalid activity amount in micros.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Resources\Invoice::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Original month of service related to this invalid activity
     * credit.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v13.enums.MonthOfYearEnum.MonthOfYear original_month_of_service = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getOriginalMonthOfService()
    {
        return $this->original_month_of_service ?? 0;
    }

    public function hasOriginalMonthOfService()
    {
        return isset($this->original_month_of_service);
    }

    public function clearOriginalMonthOfService()
    {
        unset($this->original_month_of_service);
    }

    /**
     * Output only. Original month of service related to this invalid activity
     * credit.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v13.enums.MonthOfYearEnum.MonthOfYear original_month_of_service = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setOriginalMonthOfService($var)
    {
        GPBUtil::checkEnum($var);
        $this->original_month_of_service = $var;

        return $this;
    }

    /**
     * Output only. Original year of service related to this invalid activity
     * credit.
     *
     * Generated from protobuf field <code>optional string original_year_of_service = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getOriginalYearOfService()
    {
        return $this->original_year_of_service ?? '';
    }

    public function hasOriginalYearOfService()
    {
        return isset($this->original_year_of_service);
    }

    public function clearOriginalYearOfService()
    {
        unset($this->original_year_of_service);
    }

    /**
     * Output only. Original year of service related to this invalid activity
     * credit.
     *
     * Generated from protobuf field <code>optional string original_year_of_service = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setOriginalYearOfService($var)
    {
        GPBUtil::checkString($var, True);
        $this->original_year_of_service = $var;

        return $this;
    }

    /**
     * Output only. Original invoice number related to this invalid activity
     * credit.
     *
     * Generated from protobuf field <code>optional string original_invoice_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getOriginalInvoiceId()
    {
        return $this->original_invoice_id ?? '';
    }

    public function hasOriginalInvoiceId()
    {
        return isset($this->original_invoice_id);
    }

    public function clearOriginalInvoiceId()
    {
        unset($this->original_invoice_id);
    }

    /**
     * Output only. Original invoice number related to this invalid activity
     * credit.
     *
     * Generated from protobuf field <code>optional string original_invoice_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setOriginalInvoiceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->original_invoice_id = $var;

        return $this;
    }

    /**
     * Output only. Original account budget name related to this invalid
     * activity credit.
     *
     * Generated from protobuf field <code>optional string original_account_budget_name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getOriginalAccountBudgetName()
    {
        return $this->original_account_budget_name ?? '';
    }

    public function hasOriginalAccountBudgetName()
    {
        return isset($this->original_account_budget_name);
    }

    public function clearOriginalAccountBudgetName()
    {
        unset($this->original_account_budget_name);
    }

    /**
     * Output only. Original account budget name related to this invalid
     * activity credit.
     *
     * Generated from protobuf field <code>optional string original_account_budget_name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setOriginalAccountBudgetName($var)
    {
        GPBUtil::checkString($var, True);
        $this->original_account_budget_name = $var;

        return $this;
    }

    /**
     * Output only. Original purchase order number related to this invalid
     * activity credit.
     *
     * Generated from protobuf field <code>optional string original_purchase_order_number = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getOriginalPurchaseOrderNumber()
    {
        return $this->original_purchase_order_number ?? '';
    }

    public function hasOriginalPurchaseOrderNumber()
    {
        return isset($this->original_purchase_order_number);
    }

    public function clearOriginalPurchaseOrderNumber()
    {
        unset($this->original_purchase_order_number);
    }

    /**
     * Output only. Original purchase order number related to this invalid
     * activity credit.
     *
     * Generated from protobuf field <code>optional string original_purchase_order_number = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setOriginalPurchaseOrderNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->original_purchase_order_number = $var;

        return $this;
    }

    /**
     * Output only. Invalid activity amount in micros.
     *
     * Generated from protobuf field <code>optional int64 amount_micros = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getAmountMicros()
    {
        return $this->amount_micros ?? 0;
    }

    public function hasAmountMicros()
    {
        return isset($this->amount_micros);
    }

    public function clearAmountMicros()
    {
        unset($this->amount_micros);
    }

    /**
     * Output only. Invalid activity amount in micros.
     *
     * Generated from protobuf field <code>optional int64 amount_micros = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount_micros = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InvalidActivitySummary::class, \Google\Ads\GoogleAds\V13\Resources\Invoice_InvalidActivitySummary::class);

