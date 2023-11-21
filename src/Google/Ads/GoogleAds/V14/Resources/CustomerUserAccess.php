<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/customer_user_access.proto

namespace Google\Ads\GoogleAds\V14\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the permission of a single user onto a single customer.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.CustomerUserAccess</code>
 */
class CustomerUserAccess extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. Name of the resource.
     * Resource names have the form:
     * `customers/{customer_id}/customerUserAccesses/{user_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. User id of the user with the customer access.
     * Read only field
     *
     * Generated from protobuf field <code>int64 user_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $user_id = 0;
    /**
     * Output only. Email address of the user.
     * Read only field
     *
     * Generated from protobuf field <code>optional string email_address = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $email_address = null;
    /**
     * Access role of the user.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.AccessRoleEnum.AccessRole access_role = 4;</code>
     */
    protected $access_role = 0;
    /**
     * Output only. The customer user access creation time.
     * Read only field
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>optional string access_creation_date_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $access_creation_date_time = null;
    /**
     * Output only. The email address of the inviter user.
     * Read only field
     *
     * Generated from protobuf field <code>optional string inviter_user_email_address = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $inviter_user_email_address = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. Name of the resource.
     *           Resource names have the form:
     *           `customers/{customer_id}/customerUserAccesses/{user_id}`
     *     @type int|string $user_id
     *           Output only. User id of the user with the customer access.
     *           Read only field
     *     @type string $email_address
     *           Output only. Email address of the user.
     *           Read only field
     *     @type int $access_role
     *           Access role of the user.
     *     @type string $access_creation_date_time
     *           Output only. The customer user access creation time.
     *           Read only field
     *           The format is "YYYY-MM-DD HH:MM:SS".
     *           Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *     @type string $inviter_user_email_address
     *           Output only. The email address of the inviter user.
     *           Read only field
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\CustomerUserAccess::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. Name of the resource.
     * Resource names have the form:
     * `customers/{customer_id}/customerUserAccesses/{user_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. Name of the resource.
     * Resource names have the form:
     * `customers/{customer_id}/customerUserAccesses/{user_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. User id of the user with the customer access.
     * Read only field
     *
     * Generated from protobuf field <code>int64 user_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Output only. User id of the user with the customer access.
     * Read only field
     *
     * Generated from protobuf field <code>int64 user_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkInt64($var);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Output only. Email address of the user.
     * Read only field
     *
     * Generated from protobuf field <code>optional string email_address = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->email_address ?? '';
    }

    public function hasEmailAddress()
    {
        return isset($this->email_address);
    }

    public function clearEmailAddress()
    {
        unset($this->email_address);
    }

    /**
     * Output only. Email address of the user.
     * Read only field
     *
     * Generated from protobuf field <code>optional string email_address = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setEmailAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->email_address = $var;

        return $this;
    }

    /**
     * Access role of the user.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.AccessRoleEnum.AccessRole access_role = 4;</code>
     * @return int
     */
    public function getAccessRole()
    {
        return $this->access_role;
    }

    /**
     * Access role of the user.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.AccessRoleEnum.AccessRole access_role = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setAccessRole($var)
    {
        GPBUtil::checkEnum($var);
        $this->access_role = $var;

        return $this;
    }

    /**
     * Output only. The customer user access creation time.
     * Read only field
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>optional string access_creation_date_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getAccessCreationDateTime()
    {
        return $this->access_creation_date_time ?? '';
    }

    public function hasAccessCreationDateTime()
    {
        return isset($this->access_creation_date_time);
    }

    public function clearAccessCreationDateTime()
    {
        unset($this->access_creation_date_time);
    }

    /**
     * Output only. The customer user access creation time.
     * Read only field
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>optional string access_creation_date_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setAccessCreationDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->access_creation_date_time = $var;

        return $this;
    }

    /**
     * Output only. The email address of the inviter user.
     * Read only field
     *
     * Generated from protobuf field <code>optional string inviter_user_email_address = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getInviterUserEmailAddress()
    {
        return $this->inviter_user_email_address ?? '';
    }

    public function hasInviterUserEmailAddress()
    {
        return isset($this->inviter_user_email_address);
    }

    public function clearInviterUserEmailAddress()
    {
        unset($this->inviter_user_email_address);
    }

    /**
     * Output only. The email address of the inviter user.
     * Read only field
     *
     * Generated from protobuf field <code>optional string inviter_user_email_address = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setInviterUserEmailAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->inviter_user_email_address = $var;

        return $this;
    }

}

