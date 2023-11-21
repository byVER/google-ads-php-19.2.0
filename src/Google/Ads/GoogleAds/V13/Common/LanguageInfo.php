<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/common/criteria.proto

namespace Google\Ads\GoogleAds\V13\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A language criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.common.LanguageInfo</code>
 */
class LanguageInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The language constant resource name.
     *
     * Generated from protobuf field <code>optional string language_constant = 2;</code>
     */
    protected $language_constant = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $language_constant
     *           The language constant resource name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The language constant resource name.
     *
     * Generated from protobuf field <code>optional string language_constant = 2;</code>
     * @return string
     */
    public function getLanguageConstant()
    {
        return $this->language_constant ?? '';
    }

    public function hasLanguageConstant()
    {
        return isset($this->language_constant);
    }

    public function clearLanguageConstant()
    {
        unset($this->language_constant);
    }

    /**
     * The language constant resource name.
     *
     * Generated from protobuf field <code>optional string language_constant = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageConstant($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_constant = $var;

        return $this;
    }

}

