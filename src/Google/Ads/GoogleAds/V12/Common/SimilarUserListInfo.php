<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/common/user_lists.proto

namespace Google\Ads\GoogleAds\V12\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SimilarUserList is a list of users which are similar to users from another
 * UserList. These lists are read-only and automatically created by Google.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.common.SimilarUserListInfo</code>
 */
class SimilarUserListInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Seed UserList from which this list is derived.
     *
     * Generated from protobuf field <code>optional string seed_user_list = 2;</code>
     */
    protected $seed_user_list = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $seed_user_list
     *           Seed UserList from which this list is derived.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Common\UserLists::initOnce();
        parent::__construct($data);
    }

    /**
     * Seed UserList from which this list is derived.
     *
     * Generated from protobuf field <code>optional string seed_user_list = 2;</code>
     * @return string
     */
    public function getSeedUserList()
    {
        return $this->seed_user_list ?? '';
    }

    public function hasSeedUserList()
    {
        return isset($this->seed_user_list);
    }

    public function clearSeedUserList()
    {
        unset($this->seed_user_list);
    }

    /**
     * Seed UserList from which this list is derived.
     *
     * Generated from protobuf field <code>optional string seed_user_list = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSeedUserList($var)
    {
        GPBUtil::checkString($var, True);
        $this->seed_user_list = $var;

        return $this;
    }

}

