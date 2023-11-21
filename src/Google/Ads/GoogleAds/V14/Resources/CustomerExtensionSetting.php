<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/customer_extension_setting.proto

namespace Google\Ads\GoogleAds\V14\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A customer extension setting.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.CustomerExtensionSetting</code>
 */
class CustomerExtensionSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the customer extension setting.
     * CustomerExtensionSetting resource names have the form:
     * `customers/{customer_id}/customerExtensionSettings/{extension_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Immutable. The extension type of the customer extension setting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ExtensionTypeEnum.ExtensionType extension_type = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $extension_type = 0;
    /**
     * The resource names of the extension feed items to serve under the customer.
     * ExtensionFeedItem resource names have the form:
     * `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *
     * Generated from protobuf field <code>repeated string extension_feed_items = 5 [(.google.api.resource_reference) = {</code>
     */
    private $extension_feed_items;
    /**
     * The device for which the extensions will serve. Optional.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ExtensionSettingDeviceEnum.ExtensionSettingDevice device = 4;</code>
     */
    protected $device = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the customer extension setting.
     *           CustomerExtensionSetting resource names have the form:
     *           `customers/{customer_id}/customerExtensionSettings/{extension_type}`
     *     @type int $extension_type
     *           Immutable. The extension type of the customer extension setting.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $extension_feed_items
     *           The resource names of the extension feed items to serve under the customer.
     *           ExtensionFeedItem resource names have the form:
     *           `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *     @type int $device
     *           The device for which the extensions will serve. Optional.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\CustomerExtensionSetting::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the customer extension setting.
     * CustomerExtensionSetting resource names have the form:
     * `customers/{customer_id}/customerExtensionSettings/{extension_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the customer extension setting.
     * CustomerExtensionSetting resource names have the form:
     * `customers/{customer_id}/customerExtensionSettings/{extension_type}`
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
     * Immutable. The extension type of the customer extension setting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ExtensionTypeEnum.ExtensionType extension_type = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getExtensionType()
    {
        return $this->extension_type;
    }

    /**
     * Immutable. The extension type of the customer extension setting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ExtensionTypeEnum.ExtensionType extension_type = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setExtensionType($var)
    {
        GPBUtil::checkEnum($var);
        $this->extension_type = $var;

        return $this;
    }

    /**
     * The resource names of the extension feed items to serve under the customer.
     * ExtensionFeedItem resource names have the form:
     * `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *
     * Generated from protobuf field <code>repeated string extension_feed_items = 5 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExtensionFeedItems()
    {
        return $this->extension_feed_items;
    }

    /**
     * The resource names of the extension feed items to serve under the customer.
     * ExtensionFeedItem resource names have the form:
     * `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *
     * Generated from protobuf field <code>repeated string extension_feed_items = 5 [(.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExtensionFeedItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->extension_feed_items = $arr;

        return $this;
    }

    /**
     * The device for which the extensions will serve. Optional.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ExtensionSettingDeviceEnum.ExtensionSettingDevice device = 4;</code>
     * @return int
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * The device for which the extensions will serve. Optional.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ExtensionSettingDeviceEnum.ExtensionSettingDevice device = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setDevice($var)
    {
        GPBUtil::checkEnum($var);
        $this->device = $var;

        return $this;
    }

}

