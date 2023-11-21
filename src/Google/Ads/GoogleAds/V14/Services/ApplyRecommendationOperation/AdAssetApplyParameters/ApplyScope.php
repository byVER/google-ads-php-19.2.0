<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/services/recommendation_service.proto

namespace Google\Ads\GoogleAds\V14\Services\ApplyRecommendationOperation\AdAssetApplyParameters;

use UnexpectedValueException;

/**
 * Scope to apply the assets to.
 *
 * Protobuf type <code>google.ads.googleads.v14.services.ApplyRecommendationOperation.AdAssetApplyParameters.ApplyScope</code>
 */
class ApplyScope
{
    /**
     * The apply scope has not been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    public const UNSPECIFIED = 0;
    /**
     * Unknown.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    public const UNKNOWN = 1;
    /**
     * Apply at the customer scope.
     *
     * Generated from protobuf enum <code>CUSTOMER = 2;</code>
     */
    public const CUSTOMER = 2;
    /**
     * Apply at the campaign scope.
     *
     * Generated from protobuf enum <code>CAMPAIGN = 3;</code>
     */
    public const CAMPAIGN = 3;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CUSTOMER => 'CUSTOMER',
        self::CAMPAIGN => 'CAMPAIGN',
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
class_alias(ApplyScope::class, \Google\Ads\GoogleAds\V14\Services\ApplyRecommendationOperation_AdAssetApplyParameters_ApplyScope::class);

