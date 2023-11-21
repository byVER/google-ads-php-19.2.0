<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/experiment_metric_direction.proto

namespace Google\Ads\GoogleAds\V14\Enums\ExperimentMetricDirectionEnum;

use UnexpectedValueException;

/**
 * The type of experiment metric direction.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.ExperimentMetricDirectionEnum.ExperimentMetricDirection</code>
 */
class ExperimentMetricDirection
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    public const UNSPECIFIED = 0;
    /**
     * The value is unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    public const UNKNOWN = 1;
    /**
     * The goal of the experiment is to not change the metric.
     *
     * Generated from protobuf enum <code>NO_CHANGE = 2;</code>
     */
    public const NO_CHANGE = 2;
    /**
     * The goal of the experiment is to increate the metric.
     *
     * Generated from protobuf enum <code>INCREASE = 3;</code>
     */
    public const INCREASE = 3;
    /**
     * The goal of the experiment is to decrease the metric.
     *
     * Generated from protobuf enum <code>DECREASE = 4;</code>
     */
    public const DECREASE = 4;
    /**
     * The goal of the experiment is to either not change or increase the
     * metric.
     *
     * Generated from protobuf enum <code>NO_CHANGE_OR_INCREASE = 5;</code>
     */
    public const NO_CHANGE_OR_INCREASE = 5;
    /**
     * The goal of the experiment is to either not change or decrease the
     * metric.
     *
     * Generated from protobuf enum <code>NO_CHANGE_OR_DECREASE = 6;</code>
     */
    public const NO_CHANGE_OR_DECREASE = 6;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::NO_CHANGE => 'NO_CHANGE',
        self::INCREASE => 'INCREASE',
        self::DECREASE => 'DECREASE',
        self::NO_CHANGE_OR_INCREASE => 'NO_CHANGE_OR_INCREASE',
        self::NO_CHANGE_OR_DECREASE => 'NO_CHANGE_OR_DECREASE',
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
class_alias(ExperimentMetricDirection::class, \Google\Ads\GoogleAds\V14\Enums\ExperimentMetricDirectionEnum_ExperimentMetricDirection::class);

