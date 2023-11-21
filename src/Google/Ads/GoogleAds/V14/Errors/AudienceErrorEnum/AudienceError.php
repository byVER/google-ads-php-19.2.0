<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/errors/audience_error.proto

namespace Google\Ads\GoogleAds\V14\Errors\AudienceErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible audience errors.
 *
 * Protobuf type <code>google.ads.googleads.v14.errors.AudienceErrorEnum.AudienceError</code>
 */
class AudienceError
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
     * An audience with this name already exists.
     *
     * Generated from protobuf enum <code>NAME_ALREADY_IN_USE = 2;</code>
     */
    public const NAME_ALREADY_IN_USE = 2;
    /**
     * A dimension within the audience definition is not valid.
     *
     * Generated from protobuf enum <code>DIMENSION_INVALID = 3;</code>
     */
    public const DIMENSION_INVALID = 3;
    /**
     * One of the audience segment added is not found.
     *
     * Generated from protobuf enum <code>AUDIENCE_SEGMENT_NOT_FOUND = 4;</code>
     */
    public const AUDIENCE_SEGMENT_NOT_FOUND = 4;
    /**
     * One of the audience segment type is not supported.
     *
     * Generated from protobuf enum <code>AUDIENCE_SEGMENT_TYPE_NOT_SUPPORTED = 5;</code>
     */
    public const AUDIENCE_SEGMENT_TYPE_NOT_SUPPORTED = 5;
    /**
     * The same segment already exists in this audience.
     *
     * Generated from protobuf enum <code>DUPLICATE_AUDIENCE_SEGMENT = 6;</code>
     */
    public const DUPLICATE_AUDIENCE_SEGMENT = 6;
    /**
     * Audience can't have more than allowed number segments.
     *
     * Generated from protobuf enum <code>TOO_MANY_SEGMENTS = 7;</code>
     */
    public const TOO_MANY_SEGMENTS = 7;
    /**
     * Audience can't have multiple dimensions of same type.
     *
     * Generated from protobuf enum <code>TOO_MANY_DIMENSIONS_OF_SAME_TYPE = 8;</code>
     */
    public const TOO_MANY_DIMENSIONS_OF_SAME_TYPE = 8;
    /**
     * The audience cannot be removed, because it is currently used in an
     * ad group criterion or asset group signal in an (enabled or paused)
     * ad group or campaign.
     *
     * Generated from protobuf enum <code>IN_USE = 9;</code>
     */
    public const IN_USE = 9;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::NAME_ALREADY_IN_USE => 'NAME_ALREADY_IN_USE',
        self::DIMENSION_INVALID => 'DIMENSION_INVALID',
        self::AUDIENCE_SEGMENT_NOT_FOUND => 'AUDIENCE_SEGMENT_NOT_FOUND',
        self::AUDIENCE_SEGMENT_TYPE_NOT_SUPPORTED => 'AUDIENCE_SEGMENT_TYPE_NOT_SUPPORTED',
        self::DUPLICATE_AUDIENCE_SEGMENT => 'DUPLICATE_AUDIENCE_SEGMENT',
        self::TOO_MANY_SEGMENTS => 'TOO_MANY_SEGMENTS',
        self::TOO_MANY_DIMENSIONS_OF_SAME_TYPE => 'TOO_MANY_DIMENSIONS_OF_SAME_TYPE',
        self::IN_USE => 'IN_USE',
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
class_alias(AudienceError::class, \Google\Ads\GoogleAds\V14\Errors\AudienceErrorEnum_AudienceError::class);

