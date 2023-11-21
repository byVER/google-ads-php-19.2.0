<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/common/offline_user_data.proto

namespace Google\Ads\GoogleAds\V12\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The shopping loyalty related data. Shopping utilizes this data to provide
 * users with a better experience.
 * Accessible only to merchants on the allow-list.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.common.ShoppingLoyalty</code>
 */
class ShoppingLoyalty extends \Google\Protobuf\Internal\Message
{
    /**
     * The membership tier. It is a free-form string as each merchant may have
     * their own loyalty system. For example, it could be a number from 1 to 10,
     * or a string such as "Golden" or "Silver", or even empty string "".
     *
     * Generated from protobuf field <code>optional string loyalty_tier = 1;</code>
     */
    protected $loyalty_tier = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $loyalty_tier
     *           The membership tier. It is a free-form string as each merchant may have
     *           their own loyalty system. For example, it could be a number from 1 to 10,
     *           or a string such as "Golden" or "Silver", or even empty string "".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Common\OfflineUserData::initOnce();
        parent::__construct($data);
    }

    /**
     * The membership tier. It is a free-form string as each merchant may have
     * their own loyalty system. For example, it could be a number from 1 to 10,
     * or a string such as "Golden" or "Silver", or even empty string "".
     *
     * Generated from protobuf field <code>optional string loyalty_tier = 1;</code>
     * @return string
     */
    public function getLoyaltyTier()
    {
        return $this->loyalty_tier ?? '';
    }

    public function hasLoyaltyTier()
    {
        return isset($this->loyalty_tier);
    }

    public function clearLoyaltyTier()
    {
        unset($this->loyalty_tier);
    }

    /**
     * The membership tier. It is a free-form string as each merchant may have
     * their own loyalty system. For example, it could be a number from 1 to 10,
     * or a string such as "Golden" or "Silver", or even empty string "".
     *
     * Generated from protobuf field <code>optional string loyalty_tier = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLoyaltyTier($var)
    {
        GPBUtil::checkString($var, True);
        $this->loyalty_tier = $var;

        return $this;
    }

}

