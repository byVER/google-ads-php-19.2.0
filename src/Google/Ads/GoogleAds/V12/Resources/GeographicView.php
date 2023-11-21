<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/resources/geographic_view.proto

namespace Google\Ads\GoogleAds\V12\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A geographic view.
 * Geographic View includes all metrics aggregated at the country level,
 * one row per country. It reports metrics at either actual physical location of
 * the user or an area of interest. If other segment fields are used, you may
 * get more than one row per country.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.resources.GeographicView</code>
 */
class GeographicView extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the geographic view.
     * Geographic view resource names have the form:
     * `customers/{customer_id}/geographicViews/{country_criterion_id}~{location_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. Type of the geo targeting of the campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.GeoTargetingTypeEnum.GeoTargetingType location_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $location_type = 0;
    /**
     * Output only. Criterion Id for the country.
     *
     * Generated from protobuf field <code>optional int64 country_criterion_id = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $country_criterion_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the geographic view.
     *           Geographic view resource names have the form:
     *           `customers/{customer_id}/geographicViews/{country_criterion_id}~{location_type}`
     *     @type int $location_type
     *           Output only. Type of the geo targeting of the campaign.
     *     @type int|string $country_criterion_id
     *           Output only. Criterion Id for the country.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Resources\GeographicView::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the geographic view.
     * Geographic view resource names have the form:
     * `customers/{customer_id}/geographicViews/{country_criterion_id}~{location_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the geographic view.
     * Geographic view resource names have the form:
     * `customers/{customer_id}/geographicViews/{country_criterion_id}~{location_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. Type of the geo targeting of the campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.GeoTargetingTypeEnum.GeoTargetingType location_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getLocationType()
    {
        return $this->location_type;
    }

    /**
     * Output only. Type of the geo targeting of the campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.GeoTargetingTypeEnum.GeoTargetingType location_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setLocationType($var)
    {
        GPBUtil::checkEnum($var);
        $this->location_type = $var;

        return $this;
    }

    /**
     * Output only. Criterion Id for the country.
     *
     * Generated from protobuf field <code>optional int64 country_criterion_id = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getCountryCriterionId()
    {
        return $this->country_criterion_id ?? 0;
    }

    public function hasCountryCriterionId()
    {
        return isset($this->country_criterion_id);
    }

    public function clearCountryCriterionId()
    {
        unset($this->country_criterion_id);
    }

    /**
     * Output only. Criterion Id for the country.
     *
     * Generated from protobuf field <code>optional int64 country_criterion_id = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCountryCriterionId($var)
    {
        GPBUtil::checkInt64($var);
        $this->country_criterion_id = $var;

        return $this;
    }

}

