<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/resources/offline_user_data_job.proto

namespace Google\Ads\GoogleAds\V12\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A job containing offline user data of store visitors, or user list members
 * that will be processed asynchronously. The uploaded data isn't readable and
 * the processing results of the job can only be read using
 * GoogleAdsService.Search/SearchStream.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.resources.OfflineUserDataJob</code>
 */
class OfflineUserDataJob extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the offline user data job.
     * Offline user data job resource names have the form:
     * `customers/{customer_id}/offlineUserDataJobs/{offline_user_data_job_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. ID of this offline user data job.
     *
     * Generated from protobuf field <code>optional int64 id = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;
    /**
     * Immutable. User specified job ID.
     *
     * Generated from protobuf field <code>optional int64 external_id = 10 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $external_id = null;
    /**
     * Immutable. Type of the job.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.OfflineUserDataJobTypeEnum.OfflineUserDataJobType type = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $type = 0;
    /**
     * Output only. Status of the job.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.OfflineUserDataJobStatusEnum.OfflineUserDataJobStatus status = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;
    /**
     * Output only. Reason for the processing failure, if status is FAILED.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.OfflineUserDataJobFailureReasonEnum.OfflineUserDataJobFailureReason failure_reason = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $failure_reason = 0;
    /**
     * Output only. Metadata of offline user data job depicting match rate range.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.resources.OfflineUserDataJobMetadata operation_metadata = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $operation_metadata = null;
    protected $metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the offline user data job.
     *           Offline user data job resource names have the form:
     *           `customers/{customer_id}/offlineUserDataJobs/{offline_user_data_job_id}`
     *     @type int|string $id
     *           Output only. ID of this offline user data job.
     *     @type int|string $external_id
     *           Immutable. User specified job ID.
     *     @type int $type
     *           Immutable. Type of the job.
     *     @type int $status
     *           Output only. Status of the job.
     *     @type int $failure_reason
     *           Output only. Reason for the processing failure, if status is FAILED.
     *     @type \Google\Ads\GoogleAds\V12\Resources\OfflineUserDataJobMetadata $operation_metadata
     *           Output only. Metadata of offline user data job depicting match rate range.
     *     @type \Google\Ads\GoogleAds\V12\Common\CustomerMatchUserListMetadata $customer_match_user_list_metadata
     *           Immutable. Metadata for data updates to a CRM-based user list.
     *     @type \Google\Ads\GoogleAds\V12\Common\StoreSalesMetadata $store_sales_metadata
     *           Immutable. Metadata for store sales data update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Resources\OfflineUserDataJob::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the offline user data job.
     * Offline user data job resource names have the form:
     * `customers/{customer_id}/offlineUserDataJobs/{offline_user_data_job_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the offline user data job.
     * Offline user data job resource names have the form:
     * `customers/{customer_id}/offlineUserDataJobs/{offline_user_data_job_id}`
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
     * Output only. ID of this offline user data job.
     *
     * Generated from protobuf field <code>optional int64 id = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. ID of this offline user data job.
     *
     * Generated from protobuf field <code>optional int64 id = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Immutable. User specified job ID.
     *
     * Generated from protobuf field <code>optional int64 external_id = 10 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int|string
     */
    public function getExternalId()
    {
        return $this->external_id ?? 0;
    }

    public function hasExternalId()
    {
        return isset($this->external_id);
    }

    public function clearExternalId()
    {
        unset($this->external_id);
    }

    /**
     * Immutable. User specified job ID.
     *
     * Generated from protobuf field <code>optional int64 external_id = 10 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int|string $var
     * @return $this
     */
    public function setExternalId($var)
    {
        GPBUtil::checkInt64($var);
        $this->external_id = $var;

        return $this;
    }

    /**
     * Immutable. Type of the job.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.OfflineUserDataJobTypeEnum.OfflineUserDataJobType type = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Immutable. Type of the job.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.OfflineUserDataJobTypeEnum.OfflineUserDataJobType type = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var);
        $this->type = $var;

        return $this;
    }

    /**
     * Output only. Status of the job.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.OfflineUserDataJobStatusEnum.OfflineUserDataJobStatus status = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. Status of the job.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.OfflineUserDataJobStatusEnum.OfflineUserDataJobStatus status = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Reason for the processing failure, if status is FAILED.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.OfflineUserDataJobFailureReasonEnum.OfflineUserDataJobFailureReason failure_reason = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getFailureReason()
    {
        return $this->failure_reason;
    }

    /**
     * Output only. Reason for the processing failure, if status is FAILED.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.OfflineUserDataJobFailureReasonEnum.OfflineUserDataJobFailureReason failure_reason = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setFailureReason($var)
    {
        GPBUtil::checkEnum($var);
        $this->failure_reason = $var;

        return $this;
    }

    /**
     * Output only. Metadata of offline user data job depicting match rate range.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.resources.OfflineUserDataJobMetadata operation_metadata = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V12\Resources\OfflineUserDataJobMetadata|null
     */
    public function getOperationMetadata()
    {
        return $this->operation_metadata;
    }

    public function hasOperationMetadata()
    {
        return isset($this->operation_metadata);
    }

    public function clearOperationMetadata()
    {
        unset($this->operation_metadata);
    }

    /**
     * Output only. Metadata of offline user data job depicting match rate range.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.resources.OfflineUserDataJobMetadata operation_metadata = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V12\Resources\OfflineUserDataJobMetadata $var
     * @return $this
     */
    public function setOperationMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Resources\OfflineUserDataJobMetadata::class);
        $this->operation_metadata = $var;

        return $this;
    }

    /**
     * Immutable. Metadata for data updates to a CRM-based user list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.CustomerMatchUserListMetadata customer_match_user_list_metadata = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Ads\GoogleAds\V12\Common\CustomerMatchUserListMetadata|null
     */
    public function getCustomerMatchUserListMetadata()
    {
        return $this->readOneof(7);
    }

    public function hasCustomerMatchUserListMetadata()
    {
        return $this->hasOneof(7);
    }

    /**
     * Immutable. Metadata for data updates to a CRM-based user list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.CustomerMatchUserListMetadata customer_match_user_list_metadata = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Ads\GoogleAds\V12\Common\CustomerMatchUserListMetadata $var
     * @return $this
     */
    public function setCustomerMatchUserListMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Common\CustomerMatchUserListMetadata::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Immutable. Metadata for store sales data update.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.StoreSalesMetadata store_sales_metadata = 8 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Ads\GoogleAds\V12\Common\StoreSalesMetadata|null
     */
    public function getStoreSalesMetadata()
    {
        return $this->readOneof(8);
    }

    public function hasStoreSalesMetadata()
    {
        return $this->hasOneof(8);
    }

    /**
     * Immutable. Metadata for store sales data update.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.StoreSalesMetadata store_sales_metadata = 8 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Ads\GoogleAds\V12\Common\StoreSalesMetadata $var
     * @return $this
     */
    public function setStoreSalesMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Common\StoreSalesMetadata::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMetadata()
    {
        return $this->whichOneof("metadata");
    }

}

