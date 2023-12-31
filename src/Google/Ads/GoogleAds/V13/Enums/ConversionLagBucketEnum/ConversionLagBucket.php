<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/enums/conversion_lag_bucket.proto

namespace Google\Ads\GoogleAds\V13\Enums\ConversionLagBucketEnum;

use UnexpectedValueException;

/**
 * Enum representing the number of days between impression and conversion.
 *
 * Protobuf type <code>google.ads.googleads.v13.enums.ConversionLagBucketEnum.ConversionLagBucket</code>
 */
class ConversionLagBucket
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
     * Conversion lag bucket from 0 to 1 day. 0 day is included, 1 day is not.
     *
     * Generated from protobuf enum <code>LESS_THAN_ONE_DAY = 2;</code>
     */
    public const LESS_THAN_ONE_DAY = 2;
    /**
     * Conversion lag bucket from 1 to 2 days. 1 day is included, 2 days is not.
     *
     * Generated from protobuf enum <code>ONE_TO_TWO_DAYS = 3;</code>
     */
    public const ONE_TO_TWO_DAYS = 3;
    /**
     * Conversion lag bucket from 2 to 3 days. 2 days is included,
     * 3 days is not.
     *
     * Generated from protobuf enum <code>TWO_TO_THREE_DAYS = 4;</code>
     */
    public const TWO_TO_THREE_DAYS = 4;
    /**
     * Conversion lag bucket from 3 to 4 days. 3 days is included,
     * 4 days is not.
     *
     * Generated from protobuf enum <code>THREE_TO_FOUR_DAYS = 5;</code>
     */
    public const THREE_TO_FOUR_DAYS = 5;
    /**
     * Conversion lag bucket from 4 to 5 days. 4 days is included,
     * 5 days is not.
     *
     * Generated from protobuf enum <code>FOUR_TO_FIVE_DAYS = 6;</code>
     */
    public const FOUR_TO_FIVE_DAYS = 6;
    /**
     * Conversion lag bucket from 5 to 6 days. 5 days is included,
     * 6 days is not.
     *
     * Generated from protobuf enum <code>FIVE_TO_SIX_DAYS = 7;</code>
     */
    public const FIVE_TO_SIX_DAYS = 7;
    /**
     * Conversion lag bucket from 6 to 7 days. 6 days is included,
     * 7 days is not.
     *
     * Generated from protobuf enum <code>SIX_TO_SEVEN_DAYS = 8;</code>
     */
    public const SIX_TO_SEVEN_DAYS = 8;
    /**
     * Conversion lag bucket from 7 to 8 days. 7 days is included,
     * 8 days is not.
     *
     * Generated from protobuf enum <code>SEVEN_TO_EIGHT_DAYS = 9;</code>
     */
    public const SEVEN_TO_EIGHT_DAYS = 9;
    /**
     * Conversion lag bucket from 8 to 9 days. 8 days is included,
     * 9 days is not.
     *
     * Generated from protobuf enum <code>EIGHT_TO_NINE_DAYS = 10;</code>
     */
    public const EIGHT_TO_NINE_DAYS = 10;
    /**
     * Conversion lag bucket from 9 to 10 days. 9 days is included,
     * 10 days is not.
     *
     * Generated from protobuf enum <code>NINE_TO_TEN_DAYS = 11;</code>
     */
    public const NINE_TO_TEN_DAYS = 11;
    /**
     * Conversion lag bucket from 10 to 11 days. 10 days is included,
     * 11 days is not.
     *
     * Generated from protobuf enum <code>TEN_TO_ELEVEN_DAYS = 12;</code>
     */
    public const TEN_TO_ELEVEN_DAYS = 12;
    /**
     * Conversion lag bucket from 11 to 12 days. 11 days is included,
     * 12 days is not.
     *
     * Generated from protobuf enum <code>ELEVEN_TO_TWELVE_DAYS = 13;</code>
     */
    public const ELEVEN_TO_TWELVE_DAYS = 13;
    /**
     * Conversion lag bucket from 12 to 13 days. 12 days is included,
     * 13 days is not.
     *
     * Generated from protobuf enum <code>TWELVE_TO_THIRTEEN_DAYS = 14;</code>
     */
    public const TWELVE_TO_THIRTEEN_DAYS = 14;
    /**
     * Conversion lag bucket from 13 to 14 days. 13 days is included,
     * 14 days is not.
     *
     * Generated from protobuf enum <code>THIRTEEN_TO_FOURTEEN_DAYS = 15;</code>
     */
    public const THIRTEEN_TO_FOURTEEN_DAYS = 15;
    /**
     * Conversion lag bucket from 14 to 21 days. 14 days is included,
     * 21 days is not.
     *
     * Generated from protobuf enum <code>FOURTEEN_TO_TWENTY_ONE_DAYS = 16;</code>
     */
    public const FOURTEEN_TO_TWENTY_ONE_DAYS = 16;
    /**
     * Conversion lag bucket from 21 to 30 days. 21 days is included,
     * 30 days is not.
     *
     * Generated from protobuf enum <code>TWENTY_ONE_TO_THIRTY_DAYS = 17;</code>
     */
    public const TWENTY_ONE_TO_THIRTY_DAYS = 17;
    /**
     * Conversion lag bucket from 30 to 45 days. 30 days is included,
     * 45 days is not.
     *
     * Generated from protobuf enum <code>THIRTY_TO_FORTY_FIVE_DAYS = 18;</code>
     */
    public const THIRTY_TO_FORTY_FIVE_DAYS = 18;
    /**
     * Conversion lag bucket from 45 to 60 days. 45 days is included,
     * 60 days is not.
     *
     * Generated from protobuf enum <code>FORTY_FIVE_TO_SIXTY_DAYS = 19;</code>
     */
    public const FORTY_FIVE_TO_SIXTY_DAYS = 19;
    /**
     * Conversion lag bucket from 60 to 90 days. 60 days is included,
     * 90 days is not.
     *
     * Generated from protobuf enum <code>SIXTY_TO_NINETY_DAYS = 20;</code>
     */
    public const SIXTY_TO_NINETY_DAYS = 20;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::LESS_THAN_ONE_DAY => 'LESS_THAN_ONE_DAY',
        self::ONE_TO_TWO_DAYS => 'ONE_TO_TWO_DAYS',
        self::TWO_TO_THREE_DAYS => 'TWO_TO_THREE_DAYS',
        self::THREE_TO_FOUR_DAYS => 'THREE_TO_FOUR_DAYS',
        self::FOUR_TO_FIVE_DAYS => 'FOUR_TO_FIVE_DAYS',
        self::FIVE_TO_SIX_DAYS => 'FIVE_TO_SIX_DAYS',
        self::SIX_TO_SEVEN_DAYS => 'SIX_TO_SEVEN_DAYS',
        self::SEVEN_TO_EIGHT_DAYS => 'SEVEN_TO_EIGHT_DAYS',
        self::EIGHT_TO_NINE_DAYS => 'EIGHT_TO_NINE_DAYS',
        self::NINE_TO_TEN_DAYS => 'NINE_TO_TEN_DAYS',
        self::TEN_TO_ELEVEN_DAYS => 'TEN_TO_ELEVEN_DAYS',
        self::ELEVEN_TO_TWELVE_DAYS => 'ELEVEN_TO_TWELVE_DAYS',
        self::TWELVE_TO_THIRTEEN_DAYS => 'TWELVE_TO_THIRTEEN_DAYS',
        self::THIRTEEN_TO_FOURTEEN_DAYS => 'THIRTEEN_TO_FOURTEEN_DAYS',
        self::FOURTEEN_TO_TWENTY_ONE_DAYS => 'FOURTEEN_TO_TWENTY_ONE_DAYS',
        self::TWENTY_ONE_TO_THIRTY_DAYS => 'TWENTY_ONE_TO_THIRTY_DAYS',
        self::THIRTY_TO_FORTY_FIVE_DAYS => 'THIRTY_TO_FORTY_FIVE_DAYS',
        self::FORTY_FIVE_TO_SIXTY_DAYS => 'FORTY_FIVE_TO_SIXTY_DAYS',
        self::SIXTY_TO_NINETY_DAYS => 'SIXTY_TO_NINETY_DAYS',
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
class_alias(ConversionLagBucket::class, \Google\Ads\GoogleAds\V13\Enums\ConversionLagBucketEnum_ConversionLagBucket::class);

