<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/resources/operating_system_version_constant.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V12\Resources;

class OperatingSystemVersionConstant
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
Kgoogle/ads/googleads/v12/enums/operating_system_version_operator_type.protogoogle.ads.googleads.v12.enums"�
&OperatingSystemVersionOperatorTypeEnum"m
"OperatingSystemVersionOperatorType
UNSPECIFIED 
UNKNOWN
	EQUALS_TO
GREATER_THAN_EQUALS_TOB�
"com.google.ads.googleads.v12.enumsB\'OperatingSystemVersionOperatorTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
Jgoogle/ads/googleads/v12/resources/operating_system_version_constant.proto"google.ads.googleads.v12.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�
OperatingSystemVersionConstantV
resource_name (	B?�A�A9
7googleads.googleapis.com/OperatingSystemVersionConstant
id (B�AH �
name (	B�AH�"
os_major_version	 (B�AH�"
os_minor_version
 (B�AH��
operator_type (2i.google.ads.googleads.v12.enums.OperatingSystemVersionOperatorTypeEnum.OperatingSystemVersionOperatorTypeB�A:l�Ai
7googleads.googleapis.com/OperatingSystemVersionConstant.operatingSystemVersionConstants/{criterion_id}B
_idB
_nameB
_os_major_versionB
_os_minor_versionB�
&com.google.ads.googleads.v12.resourcesB#OperatingSystemVersionConstantProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v12/resources;resources�GAA�"Google.Ads.GoogleAds.V12.Resources�"Google\\Ads\\GoogleAds\\V12\\Resources�&Google::Ads::GoogleAds::V12::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

