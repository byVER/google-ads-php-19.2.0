<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/message_placeholder_field.proto

namespace Google\Ads\GoogleAds\V14\Enums\MessagePlaceholderFieldEnum;

use UnexpectedValueException;

/**
 * Possible values for Message placeholder fields.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.MessagePlaceholderFieldEnum.MessagePlaceholderField</code>
 */
class MessagePlaceholderField
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
     * Data Type: STRING. The name of your business.
     *
     * Generated from protobuf enum <code>BUSINESS_NAME = 2;</code>
     */
    public const BUSINESS_NAME = 2;
    /**
     * Data Type: STRING. Country code of phone number.
     *
     * Generated from protobuf enum <code>COUNTRY_CODE = 3;</code>
     */
    public const COUNTRY_CODE = 3;
    /**
     * Data Type: STRING. A phone number that's capable of sending and receiving
     * text messages.
     *
     * Generated from protobuf enum <code>PHONE_NUMBER = 4;</code>
     */
    public const PHONE_NUMBER = 4;
    /**
     * Data Type: STRING. The text that will go in your click-to-message ad.
     *
     * Generated from protobuf enum <code>MESSAGE_EXTENSION_TEXT = 5;</code>
     */
    public const MESSAGE_EXTENSION_TEXT = 5;
    /**
     * Data Type: STRING. The message text automatically shows in people's
     * messaging apps when they tap to send you a message.
     *
     * Generated from protobuf enum <code>MESSAGE_TEXT = 6;</code>
     */
    public const MESSAGE_TEXT = 6;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::BUSINESS_NAME => 'BUSINESS_NAME',
        self::COUNTRY_CODE => 'COUNTRY_CODE',
        self::PHONE_NUMBER => 'PHONE_NUMBER',
        self::MESSAGE_EXTENSION_TEXT => 'MESSAGE_EXTENSION_TEXT',
        self::MESSAGE_TEXT => 'MESSAGE_TEXT',
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
class_alias(MessagePlaceholderField::class, \Google\Ads\GoogleAds\V14\Enums\MessagePlaceholderFieldEnum_MessagePlaceholderField::class);

