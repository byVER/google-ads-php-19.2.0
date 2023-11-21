<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/common/asset_types.proto

namespace Google\Ads\GoogleAds\V12\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Text asset.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.common.TextAsset</code>
 */
class TextAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * Text content of the text asset.
     *
     * Generated from protobuf field <code>optional string text = 2;</code>
     */
    protected $text = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $text
     *           Text content of the text asset.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Common\AssetTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Text content of the text asset.
     *
     * Generated from protobuf field <code>optional string text = 2;</code>
     * @return string
     */
    public function getText()
    {
        return $this->text ?? '';
    }

    public function hasText()
    {
        return isset($this->text);
    }

    public function clearText()
    {
        unset($this->text);
    }

    /**
     * Text content of the text asset.
     *
     * Generated from protobuf field <code>optional string text = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

}

