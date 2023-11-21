<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/errors/geo_target_constant_suggestion_error.proto

namespace Google\Ads\GoogleAds\V12\Errors\GeoTargetConstantSuggestionErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible geo target constant suggestion errors.
 *
 * Protobuf type <code>google.ads.googleads.v12.errors.GeoTargetConstantSuggestionErrorEnum.GeoTargetConstantSuggestionError</code>
 */
class GeoTargetConstantSuggestionError
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
     * A location name cannot be greater than 300 characters.
     *
     * Generated from protobuf enum <code>LOCATION_NAME_SIZE_LIMIT = 2;</code>
     */
    public const LOCATION_NAME_SIZE_LIMIT = 2;
    /**
     * At most 25 location names can be specified in a SuggestGeoTargetConstants
     * method.
     *
     * Generated from protobuf enum <code>LOCATION_NAME_LIMIT = 3;</code>
     */
    public const LOCATION_NAME_LIMIT = 3;
    /**
     * The country code is invalid.
     *
     * Generated from protobuf enum <code>INVALID_COUNTRY_CODE = 4;</code>
     */
    public const INVALID_COUNTRY_CODE = 4;
    /**
     * Geo target constant resource names or location names must be provided in
     * the request.
     *
     * Generated from protobuf enum <code>REQUEST_PARAMETERS_UNSET = 5;</code>
     */
    public const REQUEST_PARAMETERS_UNSET = 5;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::LOCATION_NAME_SIZE_LIMIT => 'LOCATION_NAME_SIZE_LIMIT',
        self::LOCATION_NAME_LIMIT => 'LOCATION_NAME_LIMIT',
        self::INVALID_COUNTRY_CODE => 'INVALID_COUNTRY_CODE',
        self::REQUEST_PARAMETERS_UNSET => 'REQUEST_PARAMETERS_UNSET',
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
class_alias(GeoTargetConstantSuggestionError::class, \Google\Ads\GoogleAds\V12\Errors\GeoTargetConstantSuggestionErrorEnum_GeoTargetConstantSuggestionError::class);

