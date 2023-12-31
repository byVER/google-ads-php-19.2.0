<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/errors/ad_group_criterion_customizer_error.proto

namespace Google\Ads\GoogleAds\V12\Errors\AdGroupCriterionCustomizerErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible ad group criterion customizer errors.
 *
 * Protobuf type <code>google.ads.googleads.v12.errors.AdGroupCriterionCustomizerErrorEnum.AdGroupCriterionCustomizerError</code>
 */
class AdGroupCriterionCustomizerError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    public const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    public const UNKNOWN = 1;
    /**
     * Only keyword type criterion is allowed to link customizer attribute.
     *
     * Generated from protobuf enum <code>CRITERION_IS_NOT_KEYWORD = 2;</code>
     */
    public const CRITERION_IS_NOT_KEYWORD = 2;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CRITERION_IS_NOT_KEYWORD => 'CRITERION_IS_NOT_KEYWORD',
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
class_alias(AdGroupCriterionCustomizerError::class, \Google\Ads\GoogleAds\V12\Errors\AdGroupCriterionCustomizerErrorEnum_AdGroupCriterionCustomizerError::class);

