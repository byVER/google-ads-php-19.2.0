<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/user_list_membership_status.proto

namespace Google\Ads\GoogleAds\V14\Enums\UserListMembershipStatusEnum;

use UnexpectedValueException;

/**
 * Enum containing possible user list membership statuses.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.UserListMembershipStatusEnum.UserListMembershipStatus</code>
 */
class UserListMembershipStatus
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
     * Open status - List is accruing members and can be targeted to.
     *
     * Generated from protobuf enum <code>OPEN = 2;</code>
     */
    public const OPEN = 2;
    /**
     * Closed status - No new members being added. Cannot be used for targeting.
     *
     * Generated from protobuf enum <code>CLOSED = 3;</code>
     */
    public const CLOSED = 3;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::OPEN => 'OPEN',
        self::CLOSED => 'CLOSED',
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
class_alias(UserListMembershipStatus::class, \Google\Ads\GoogleAds\V14\Enums\UserListMembershipStatusEnum_UserListMembershipStatus::class);

