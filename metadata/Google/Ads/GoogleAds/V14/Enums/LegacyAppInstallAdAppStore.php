<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/legacy_app_install_ad_app_store.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V14\Enums;

class LegacyAppInstallAdAppStore
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
Dgoogle/ads/googleads/v14/enums/legacy_app_install_ad_app_store.protogoogle.ads.googleads.v14.enums"�
LegacyAppInstallAdAppStoreEnum"�
LegacyAppInstallAdAppStore
UNSPECIFIED 
UNKNOWN
APPLE_APP_STORE
GOOGLE_PLAY
WINDOWS_STORE
WINDOWS_PHONE_STORE
CN_APP_STOREB�
"com.google.ads.googleads.v14.enumsBLegacyAppInstallAdAppStoreProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

