<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/customer.proto

namespace Google\Ads\GoogleAds\V14\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Offline conversion upload diagnostic summarized by client. This proto
 * contains general information, breakdown by date/job and alerts for offline
 * conversion upload results.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.OfflineConversionClientSummary</code>
 */
class OfflineConversionClientSummary extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Client type of the upload event.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.OfflineEventUploadClientEnum.OfflineEventUploadClient client = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $client = 0;
    /**
     * Output only. Overall status for offline conversion client summary. Status
     * is generated from most recent calendar day with upload stats.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.OfflineConversionDiagnosticStatusEnum.OfflineConversionDiagnosticStatus status = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;
    /**
     * Output only. Total count of uploaded events.
     *
     * Generated from protobuf field <code>int64 total_event_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $total_event_count = 0;
    /**
     * Output only. Total count of successful uploaded events.
     *
     * Generated from protobuf field <code>int64 successful_event_count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $successful_event_count = 0;
    /**
     * Output only. Successful rate.
     *
     * Generated from protobuf field <code>double success_rate = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $success_rate = 0.0;
    /**
     * Output only. Date for the latest upload batch.
     *
     * Generated from protobuf field <code>string last_upload_date_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $last_upload_date_time = '';
    /**
     * Output only. Summary of history stats by last N days.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.resources.OfflineConversionUploadSummary daily_summaries = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $daily_summaries;
    /**
     * Output only. Summary of history stats by last N jobs.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.resources.OfflineConversionUploadSummary job_summaries = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $job_summaries;
    /**
     * Output only. Details for each error code. Alerts are generated from most
     * recent calendar day with upload stats.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.resources.OfflineConversionUploadAlert alerts = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $alerts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $client
     *           Output only. Client type of the upload event.
     *     @type int $status
     *           Output only. Overall status for offline conversion client summary. Status
     *           is generated from most recent calendar day with upload stats.
     *     @type int|string $total_event_count
     *           Output only. Total count of uploaded events.
     *     @type int|string $successful_event_count
     *           Output only. Total count of successful uploaded events.
     *     @type float $success_rate
     *           Output only. Successful rate.
     *     @type string $last_upload_date_time
     *           Output only. Date for the latest upload batch.
     *     @type array<\Google\Ads\GoogleAds\V14\Resources\OfflineConversionUploadSummary>|\Google\Protobuf\Internal\RepeatedField $daily_summaries
     *           Output only. Summary of history stats by last N days.
     *     @type array<\Google\Ads\GoogleAds\V14\Resources\OfflineConversionUploadSummary>|\Google\Protobuf\Internal\RepeatedField $job_summaries
     *           Output only. Summary of history stats by last N jobs.
     *     @type array<\Google\Ads\GoogleAds\V14\Resources\OfflineConversionUploadAlert>|\Google\Protobuf\Internal\RepeatedField $alerts
     *           Output only. Details for each error code. Alerts are generated from most
     *           recent calendar day with upload stats.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\Customer::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Client type of the upload event.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.OfflineEventUploadClientEnum.OfflineEventUploadClient client = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Output only. Client type of the upload event.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.OfflineEventUploadClientEnum.OfflineEventUploadClient client = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setClient($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V14\Enums\OfflineEventUploadClientEnum\OfflineEventUploadClient::class);
        $this->client = $var;

        return $this;
    }

    /**
     * Output only. Overall status for offline conversion client summary. Status
     * is generated from most recent calendar day with upload stats.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.OfflineConversionDiagnosticStatusEnum.OfflineConversionDiagnosticStatus status = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. Overall status for offline conversion client summary. Status
     * is generated from most recent calendar day with upload stats.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.OfflineConversionDiagnosticStatusEnum.OfflineConversionDiagnosticStatus status = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V14\Enums\OfflineConversionDiagnosticStatusEnum\OfflineConversionDiagnosticStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Output only. Total count of uploaded events.
     *
     * Generated from protobuf field <code>int64 total_event_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getTotalEventCount()
    {
        return $this->total_event_count;
    }

    /**
     * Output only. Total count of uploaded events.
     *
     * Generated from protobuf field <code>int64 total_event_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalEventCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_event_count = $var;

        return $this;
    }

    /**
     * Output only. Total count of successful uploaded events.
     *
     * Generated from protobuf field <code>int64 successful_event_count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getSuccessfulEventCount()
    {
        return $this->successful_event_count;
    }

    /**
     * Output only. Total count of successful uploaded events.
     *
     * Generated from protobuf field <code>int64 successful_event_count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSuccessfulEventCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->successful_event_count = $var;

        return $this;
    }

    /**
     * Output only. Successful rate.
     *
     * Generated from protobuf field <code>double success_rate = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getSuccessRate()
    {
        return $this->success_rate;
    }

    /**
     * Output only. Successful rate.
     *
     * Generated from protobuf field <code>double success_rate = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setSuccessRate($var)
    {
        GPBUtil::checkDouble($var);
        $this->success_rate = $var;

        return $this;
    }

    /**
     * Output only. Date for the latest upload batch.
     *
     * Generated from protobuf field <code>string last_upload_date_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getLastUploadDateTime()
    {
        return $this->last_upload_date_time;
    }

    /**
     * Output only. Date for the latest upload batch.
     *
     * Generated from protobuf field <code>string last_upload_date_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setLastUploadDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->last_upload_date_time = $var;

        return $this;
    }

    /**
     * Output only. Summary of history stats by last N days.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.resources.OfflineConversionUploadSummary daily_summaries = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDailySummaries()
    {
        return $this->daily_summaries;
    }

    /**
     * Output only. Summary of history stats by last N days.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.resources.OfflineConversionUploadSummary daily_summaries = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Ads\GoogleAds\V14\Resources\OfflineConversionUploadSummary>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDailySummaries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V14\Resources\OfflineConversionUploadSummary::class);
        $this->daily_summaries = $arr;

        return $this;
    }

    /**
     * Output only. Summary of history stats by last N jobs.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.resources.OfflineConversionUploadSummary job_summaries = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJobSummaries()
    {
        return $this->job_summaries;
    }

    /**
     * Output only. Summary of history stats by last N jobs.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.resources.OfflineConversionUploadSummary job_summaries = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Ads\GoogleAds\V14\Resources\OfflineConversionUploadSummary>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJobSummaries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V14\Resources\OfflineConversionUploadSummary::class);
        $this->job_summaries = $arr;

        return $this;
    }

    /**
     * Output only. Details for each error code. Alerts are generated from most
     * recent calendar day with upload stats.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.resources.OfflineConversionUploadAlert alerts = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAlerts()
    {
        return $this->alerts;
    }

    /**
     * Output only. Details for each error code. Alerts are generated from most
     * recent calendar day with upload stats.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.resources.OfflineConversionUploadAlert alerts = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Ads\GoogleAds\V14\Resources\OfflineConversionUploadAlert>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAlerts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V14\Resources\OfflineConversionUploadAlert::class);
        $this->alerts = $arr;

        return $this;
    }

}

