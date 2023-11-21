<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/conversion_action_category.proto

namespace Google\Ads\GoogleAds\V14\Enums\ConversionActionCategoryEnum;

use UnexpectedValueException;

/**
 * The category of conversions that are associated with a ConversionAction.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.ConversionActionCategoryEnum.ConversionActionCategory</code>
 */
class ConversionActionCategory
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
     * Default category.
     *
     * Generated from protobuf enum <code>DEFAULT = 2;</code>
     */
    public const PBDEFAULT = 2;
    /**
     * User visiting a page.
     *
     * Generated from protobuf enum <code>PAGE_VIEW = 3;</code>
     */
    public const PAGE_VIEW = 3;
    /**
     * Purchase, sales, or "order placed" event.
     *
     * Generated from protobuf enum <code>PURCHASE = 4;</code>
     */
    public const PURCHASE = 4;
    /**
     * Signup user action.
     *
     * Generated from protobuf enum <code>SIGNUP = 5;</code>
     */
    public const SIGNUP = 5;
    /**
     * Software download action (as for an app).
     *
     * Generated from protobuf enum <code>DOWNLOAD = 7;</code>
     */
    public const DOWNLOAD = 7;
    /**
     * The addition of items to a shopping cart or bag on an advertiser site.
     *
     * Generated from protobuf enum <code>ADD_TO_CART = 8;</code>
     */
    public const ADD_TO_CART = 8;
    /**
     * When someone enters the checkout flow on an advertiser site.
     *
     * Generated from protobuf enum <code>BEGIN_CHECKOUT = 9;</code>
     */
    public const BEGIN_CHECKOUT = 9;
    /**
     * The start of a paid subscription for a product or service.
     *
     * Generated from protobuf enum <code>SUBSCRIBE_PAID = 10;</code>
     */
    public const SUBSCRIBE_PAID = 10;
    /**
     * A call to indicate interest in an advertiser's offering.
     *
     * Generated from protobuf enum <code>PHONE_CALL_LEAD = 11;</code>
     */
    public const PHONE_CALL_LEAD = 11;
    /**
     * A lead conversion imported from an external source into Google Ads.
     *
     * Generated from protobuf enum <code>IMPORTED_LEAD = 12;</code>
     */
    public const IMPORTED_LEAD = 12;
    /**
     * A submission of a form on an advertiser site indicating business
     * interest.
     *
     * Generated from protobuf enum <code>SUBMIT_LEAD_FORM = 13;</code>
     */
    public const SUBMIT_LEAD_FORM = 13;
    /**
     * A booking of an appointment with an advertiser's business.
     *
     * Generated from protobuf enum <code>BOOK_APPOINTMENT = 14;</code>
     */
    public const BOOK_APPOINTMENT = 14;
    /**
     * A quote or price estimate request.
     *
     * Generated from protobuf enum <code>REQUEST_QUOTE = 15;</code>
     */
    public const REQUEST_QUOTE = 15;
    /**
     * A search for an advertiser's business location with intention to visit.
     *
     * Generated from protobuf enum <code>GET_DIRECTIONS = 16;</code>
     */
    public const GET_DIRECTIONS = 16;
    /**
     * A click to an advertiser's partner's site.
     *
     * Generated from protobuf enum <code>OUTBOUND_CLICK = 17;</code>
     */
    public const OUTBOUND_CLICK = 17;
    /**
     * A call, SMS, email, chat or other type of contact to an advertiser.
     *
     * Generated from protobuf enum <code>CONTACT = 18;</code>
     */
    public const CONTACT = 18;
    /**
     * A website engagement event such as long site time or a Google Analytics
     * (GA) Smart Goal. Intended to be used for GA, Firebase, GA Gold goal
     * imports.
     *
     * Generated from protobuf enum <code>ENGAGEMENT = 19;</code>
     */
    public const ENGAGEMENT = 19;
    /**
     * A visit to a physical store location.
     *
     * Generated from protobuf enum <code>STORE_VISIT = 20;</code>
     */
    public const STORE_VISIT = 20;
    /**
     * A sale occurring in a physical store.
     *
     * Generated from protobuf enum <code>STORE_SALE = 21;</code>
     */
    public const STORE_SALE = 21;
    /**
     * A lead conversion imported from an external source into Google Ads,
     * that has been further qualified by the advertiser (marketing/sales team).
     * In the lead-to-sale journey, advertisers get leads, then act on them
     * by reaching out to the consumer. If the consumer is interested and
     * may end up buying their product, the advertiser marks such leads as
     * "qualified leads".
     *
     * Generated from protobuf enum <code>QUALIFIED_LEAD = 22;</code>
     */
    public const QUALIFIED_LEAD = 22;
    /**
     * A lead conversion imported from an external source into Google Ads, that
     * has further completed a chosen stage as defined by the lead gen
     * advertiser.
     *
     * Generated from protobuf enum <code>CONVERTED_LEAD = 23;</code>
     */
    public const CONVERTED_LEAD = 23;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::PBDEFAULT => 'DEFAULT',
        self::PAGE_VIEW => 'PAGE_VIEW',
        self::PURCHASE => 'PURCHASE',
        self::SIGNUP => 'SIGNUP',
        self::DOWNLOAD => 'DOWNLOAD',
        self::ADD_TO_CART => 'ADD_TO_CART',
        self::BEGIN_CHECKOUT => 'BEGIN_CHECKOUT',
        self::SUBSCRIBE_PAID => 'SUBSCRIBE_PAID',
        self::PHONE_CALL_LEAD => 'PHONE_CALL_LEAD',
        self::IMPORTED_LEAD => 'IMPORTED_LEAD',
        self::SUBMIT_LEAD_FORM => 'SUBMIT_LEAD_FORM',
        self::BOOK_APPOINTMENT => 'BOOK_APPOINTMENT',
        self::REQUEST_QUOTE => 'REQUEST_QUOTE',
        self::GET_DIRECTIONS => 'GET_DIRECTIONS',
        self::OUTBOUND_CLICK => 'OUTBOUND_CLICK',
        self::CONTACT => 'CONTACT',
        self::ENGAGEMENT => 'ENGAGEMENT',
        self::STORE_VISIT => 'STORE_VISIT',
        self::STORE_SALE => 'STORE_SALE',
        self::QUALIFIED_LEAD => 'QUALIFIED_LEAD',
        self::CONVERTED_LEAD => 'CONVERTED_LEAD',
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
            $pbconst =  self::class. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', self::class, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConversionActionCategory::class, \Google\Ads\GoogleAds\V14\Enums\ConversionActionCategoryEnum_ConversionActionCategory::class);

