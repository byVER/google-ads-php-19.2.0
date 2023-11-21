<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/common/offline_user_data.proto

namespace Google\Ads\GoogleAds\V14\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Store attributes of the transaction.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.common.StoreAttribute</code>
 */
class StoreAttribute extends \Google\Protobuf\Internal\Message
{
    /**
     * Store code from
     * https://support.google.com/business/answer/3370250#storecode
     *
     * Generated from protobuf field <code>optional string store_code = 2;</code>
     */
    protected $store_code = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $store_code
     *           Store code from
     *           https://support.google.com/business/answer/3370250#storecode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Common\OfflineUserData::initOnce();
        parent::__construct($data);
    }

    /**
     * Store code from
     * https://support.google.com/business/answer/3370250#storecode
     *
     * Generated from protobuf field <code>optional string store_code = 2;</code>
     * @return string
     */
    public function getStoreCode()
    {
        return $this->store_code ?? '';
    }

    public function hasStoreCode()
    {
        return isset($this->store_code);
    }

    public function clearStoreCode()
    {
        unset($this->store_code);
    }

    /**
     * Store code from
     * https://support.google.com/business/answer/3370250#storecode
     *
     * Generated from protobuf field <code>optional string store_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStoreCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->store_code = $var;

        return $this;
    }

}

