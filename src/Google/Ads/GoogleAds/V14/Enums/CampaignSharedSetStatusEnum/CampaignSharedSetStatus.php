<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/campaign_shared_set_status.proto

namespace Google\Ads\GoogleAds\V14\Enums\CampaignSharedSetStatusEnum;

use UnexpectedValueException;

/**
 * Enum listing the possible campaign shared set statuses.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.CampaignSharedSetStatusEnum.CampaignSharedSetStatus</code>
 */
class CampaignSharedSetStatus
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    public const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    public const UNKNOWN = 1;
    /**
     * The campaign shared set is enabled.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    public const ENABLED = 2;
    /**
     * The campaign shared set is removed and can no longer be used.
     *
     * Generated from protobuf enum <code>REMOVED = 3;</code>
     */
    public const REMOVED = 3;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ENABLED => 'ENABLED',
        self::REMOVED => 'REMOVED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', self::class, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = self::class . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', self::class, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CampaignSharedSetStatus::class, \Google\Ads\GoogleAds\V14\Enums\CampaignSharedSetStatusEnum_CampaignSharedSetStatus::class);

