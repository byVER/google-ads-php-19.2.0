<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/customer_extension_setting.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V14\Resources;

class CustomerExtensionSetting
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
3google/ads/googleads/v14/enums/extension_type.protogoogle.ads.googleads.v14.enums"�
ExtensionTypeEnum"�
ExtensionType
UNSPECIFIED 
UNKNOWN
NONE
APP
CALL
CALLOUT
MESSAGE	
PRICE
	PROMOTION
SITELINK

STRUCTURED_SNIPPET
LOCATION
AFFILIATE_LOCATION
HOTEL_CALLOUT	
IMAGEB�
"com.google.ads.googleads.v14.enumsBExtensionTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
=google/ads/googleads/v14/enums/extension_setting_device.protogoogle.ads.googleads.v14.enums"m
ExtensionSettingDeviceEnum"O
ExtensionSettingDevice
UNSPECIFIED 
UNKNOWN

MOBILE
DESKTOPB�
"com.google.ads.googleads.v14.enumsBExtensionSettingDeviceProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
Cgoogle/ads/googleads/v14/resources/customer_extension_setting.proto"google.ads.googleads.v14.resources3google/ads/googleads/v14/enums/extension_type.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
CustomerExtensionSettingP
resource_name (	B9�A�A3
1googleads.googleapis.com/CustomerExtensionSetting\\
extension_type (2?.google.ads.googleads.v14.enums.ExtensionTypeEnum.ExtensionTypeB�AM
extension_feed_items (	B/�A,
*googleads.googleapis.com/ExtensionFeedItema
device (2Q.google.ads.googleads.v14.enums.ExtensionSettingDeviceEnum.ExtensionSettingDevice:z�Aw
1googleads.googleapis.com/CustomerExtensionSettingBcustomers/{customer_id}/customerExtensionSettings/{extension_type}B�
&com.google.ads.googleads.v14.resourcesBCustomerExtensionSettingProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v14/resources;resources�GAA�"Google.Ads.GoogleAds.V14.Resources�"Google\\Ads\\GoogleAds\\V14\\Resources�&Google::Ads::GoogleAds::V14::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

