<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/enums/customer_status.proto

namespace Google\Ads\GoogleAds\V13\Enums\CustomerStatusEnum;

use UnexpectedValueException;

/**
 * Possible statuses of a customer.
 *
 * Protobuf type <code>google.ads.googleads.v13.enums.CustomerStatusEnum.CustomerStatus</code>
 */
class CustomerStatus
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
     * Indicates an active account able to serve ads.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    public const ENABLED = 2;
    /**
     * Indicates a canceled account unable to serve ads.
     * Can be reactivated by an admin user.
     *
     * Generated from protobuf enum <code>CANCELED = 3;</code>
     */
    public const CANCELED = 3;
    /**
     * Indicates a suspended account unable to serve ads.
     * May only be activated by Google support.
     *
     * Generated from protobuf enum <code>SUSPENDED = 4;</code>
     */
    public const SUSPENDED = 4;
    /**
     * Indicates a closed account unable to serve ads.
     * Test account will also have CLOSED status.
     * Status is permanent and may not be reopened.
     *
     * Generated from protobuf enum <code>CLOSED = 5;</code>
     */
    public const CLOSED = 5;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ENABLED => 'ENABLED',
        self::CANCELED => 'CANCELED',
        self::SUSPENDED => 'SUSPENDED',
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
class_alias(CustomerStatus::class, \Google\Ads\GoogleAds\V13\Enums\CustomerStatusEnum_CustomerStatus::class);

