<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/enums/account_budget_status.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Enums;

class AccountBudgetStatus
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v13/enums/account_budget_status.protogoogle.ads.googleads.v13.enums"x
AccountBudgetStatusEnum"]
AccountBudgetStatus
UNSPECIFIED 
UNKNOWN
PENDING
APPROVED
	CANCELLEDB�
"com.google.ads.googleads.v13.enumsBAccountBudgetStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

