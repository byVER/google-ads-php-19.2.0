<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/enums/summary_row_setting.proto

namespace Google\Ads\GoogleAds\V12\Enums\SummaryRowSettingEnum;

use UnexpectedValueException;

/**
 * Enum describing return summary row settings.
 *
 * Protobuf type <code>google.ads.googleads.v12.enums.SummaryRowSettingEnum.SummaryRowSetting</code>
 */
class SummaryRowSetting
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Represent unknown values of return summary row.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Do not return summary row.
     *
     * Generated from protobuf enum <code>NO_SUMMARY_ROW = 2;</code>
     */
    const NO_SUMMARY_ROW = 2;
    /**
     * Return summary row along with results. The summary row will be returned
     * in the last batch alone (last batch will contain no results).
     *
     * Generated from protobuf enum <code>SUMMARY_ROW_WITH_RESULTS = 3;</code>
     */
    const SUMMARY_ROW_WITH_RESULTS = 3;
    /**
     * Return summary row only and return no results.
     *
     * Generated from protobuf enum <code>SUMMARY_ROW_ONLY = 4;</code>
     */
    const SUMMARY_ROW_ONLY = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::NO_SUMMARY_ROW => 'NO_SUMMARY_ROW',
        self::SUMMARY_ROW_WITH_RESULTS => 'SUMMARY_ROW_WITH_RESULTS',
        self::SUMMARY_ROW_ONLY => 'SUMMARY_ROW_ONLY',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SummaryRowSetting::class, \Google\Ads\GoogleAds\V12\Enums\SummaryRowSettingEnum_SummaryRowSetting::class);

