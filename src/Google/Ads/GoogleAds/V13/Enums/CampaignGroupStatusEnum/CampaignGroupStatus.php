<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/enums/campaign_group_status.proto

namespace Google\Ads\GoogleAds\V13\Enums\CampaignGroupStatusEnum;

use UnexpectedValueException;

/**
 * Possible statuses of a CampaignGroup.
 *
 * Protobuf type <code>google.ads.googleads.v13.enums.CampaignGroupStatusEnum.CampaignGroupStatus</code>
 */
class CampaignGroupStatus
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
     * The campaign group is active.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    public const ENABLED = 2;
    /**
     * The campaign group has been removed.
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
class_alias(CampaignGroupStatus::class, \Google\Ads\GoogleAds\V13\Enums\CampaignGroupStatusEnum_CampaignGroupStatus::class);

