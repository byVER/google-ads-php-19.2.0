<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/enums/user_list_prepopulation_status.proto

namespace Google\Ads\GoogleAds\V12\Enums\UserListPrepopulationStatusEnum;

use UnexpectedValueException;

/**
 * Enum describing possible user list prepopulation status.
 *
 * Protobuf type <code>google.ads.googleads.v12.enums.UserListPrepopulationStatusEnum.UserListPrepopulationStatus</code>
 */
class UserListPrepopulationStatus
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
     * Prepopoulation is being requested.
     *
     * Generated from protobuf enum <code>REQUESTED = 2;</code>
     */
    public const REQUESTED = 2;
    /**
     * Prepopulation is finished.
     *
     * Generated from protobuf enum <code>FINISHED = 3;</code>
     */
    public const FINISHED = 3;
    /**
     * Prepopulation failed.
     *
     * Generated from protobuf enum <code>FAILED = 4;</code>
     */
    public const FAILED = 4;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::REQUESTED => 'REQUESTED',
        self::FINISHED => 'FINISHED',
        self::FAILED => 'FAILED',
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
class_alias(UserListPrepopulationStatus::class, \Google\Ads\GoogleAds\V12\Enums\UserListPrepopulationStatusEnum_UserListPrepopulationStatus::class);

