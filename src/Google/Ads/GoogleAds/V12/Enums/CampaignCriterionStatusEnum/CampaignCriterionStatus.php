<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/enums/campaign_criterion_status.proto

namespace Google\Ads\GoogleAds\V12\Enums\CampaignCriterionStatusEnum;

use UnexpectedValueException;

/**
 * The possible statuses of a CampaignCriterion.
 *
 * Protobuf type <code>google.ads.googleads.v12.enums.CampaignCriterionStatusEnum.CampaignCriterionStatus</code>
 */
class CampaignCriterionStatus
{
    /**
     * No value has been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    public const UNSPECIFIED = 0;
    /**
     * The received value is not known in this version.
     * This is a response-only value.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    public const UNKNOWN = 1;
    /**
     * The campaign criterion is enabled.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    public const ENABLED = 2;
    /**
     * The campaign criterion is paused.
     *
     * Generated from protobuf enum <code>PAUSED = 3;</code>
     */
    public const PAUSED = 3;
    /**
     * The campaign criterion is removed.
     *
     * Generated from protobuf enum <code>REMOVED = 4;</code>
     */
    public const REMOVED = 4;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ENABLED => 'ENABLED',
        self::PAUSED => 'PAUSED',
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
class_alias(CampaignCriterionStatus::class, \Google\Ads\GoogleAds\V12\Enums\CampaignCriterionStatusEnum_CampaignCriterionStatus::class);

