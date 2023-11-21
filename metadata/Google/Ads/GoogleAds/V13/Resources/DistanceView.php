<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/resources/distance_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Resources;

class DistanceView
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
�
4google/ads/googleads/v13/enums/distance_bucket.protogoogle.ads.googleads.v13.enums"�
DistanceBucketEnum"�
DistanceBucket
UNSPECIFIED 
UNKNOWN
WITHIN_700M

WITHIN_1KM

WITHIN_5KM
WITHIN_10KM
WITHIN_15KM
WITHIN_20KM
WITHIN_25KM
WITHIN_30KM	
WITHIN_35KM

WITHIN_40KM
WITHIN_45KM
WITHIN_50KM
WITHIN_55KM
WITHIN_60KM
WITHIN_65KM
BEYOND_65KM
WITHIN_0_7MILES
WITHIN_1MILE
WITHIN_5MILES
WITHIN_10MILES
WITHIN_15MILES
WITHIN_20MILES
WITHIN_25MILES
WITHIN_30MILES
WITHIN_35MILES
WITHIN_40MILES
BEYOND_40MILESB�
"com.google.ads.googleads.v13.enumsBDistanceBucketProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
6google/ads/googleads/v13/resources/distance_view.proto"google.ads.googleads.v13.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�
DistanceViewD
resource_name (	B-�A�A\'
%googleads.googleapis.com/DistanceView_
distance_bucket (2A.google.ads.googleads.v13.enums.DistanceBucketEnum.DistanceBucketB�A
metric_system (B�AH �:z�Aw
%googleads.googleapis.com/DistanceViewNcustomers/{customer_id}/distanceViews/{placeholder_chain_id}~{distance_bucket}B
_metric_systemB�
&com.google.ads.googleads.v13.resourcesBDistanceViewProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v13/resources;resources�GAA�"Google.Ads.GoogleAds.V13.Resources�"Google\\Ads\\GoogleAds\\V13\\Resources�&Google::Ads::GoogleAds::V13::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

