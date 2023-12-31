<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/enums/access_role.proto

namespace Google\Ads\GoogleAds\V13\Enums\AccessRoleEnum;

use UnexpectedValueException;

/**
 * Possible access role of a user.
 *
 * Protobuf type <code>google.ads.googleads.v13.enums.AccessRoleEnum.AccessRole</code>
 */
class AccessRole
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
     * Owns its account and can control the addition of other users.
     *
     * Generated from protobuf enum <code>ADMIN = 2;</code>
     */
    public const ADMIN = 2;
    /**
     * Can modify campaigns, but can't affect other users.
     *
     * Generated from protobuf enum <code>STANDARD = 3;</code>
     */
    public const STANDARD = 3;
    /**
     * Can view campaigns and account changes, but cannot make edits.
     *
     * Generated from protobuf enum <code>READ_ONLY = 4;</code>
     */
    public const READ_ONLY = 4;
    /**
     * Role for \"email only\" access. Represents an email recipient rather than
     * a true User entity.
     *
     * Generated from protobuf enum <code>EMAIL_ONLY = 5;</code>
     */
    public const EMAIL_ONLY = 5;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ADMIN => 'ADMIN',
        self::STANDARD => 'STANDARD',
        self::READ_ONLY => 'READ_ONLY',
        self::EMAIL_ONLY => 'EMAIL_ONLY',
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
class_alias(AccessRole::class, \Google\Ads\GoogleAds\V13\Enums\AccessRoleEnum_AccessRole::class);

