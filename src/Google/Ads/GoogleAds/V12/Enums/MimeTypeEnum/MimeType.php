<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/enums/mime_type.proto

namespace Google\Ads\GoogleAds\V12\Enums\MimeTypeEnum;

use UnexpectedValueException;

/**
 * The mime type
 *
 * Protobuf type <code>google.ads.googleads.v12.enums.MimeTypeEnum.MimeType</code>
 */
class MimeType
{
    /**
     * The mime type has not been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    public const UNSPECIFIED = 0;
    /**
     * The received value is not known in this version.
     * This is a response-only value.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    public const UNKNOWN = 1;
    /**
     * MIME type of image/jpeg.
     *
     * Generated from protobuf enum <code>IMAGE_JPEG = 2;</code>
     */
    public const IMAGE_JPEG = 2;
    /**
     * MIME type of image/gif.
     *
     * Generated from protobuf enum <code>IMAGE_GIF = 3;</code>
     */
    public const IMAGE_GIF = 3;
    /**
     * MIME type of image/png.
     *
     * Generated from protobuf enum <code>IMAGE_PNG = 4;</code>
     */
    public const IMAGE_PNG = 4;
    /**
     * MIME type of application/x-shockwave-flash.
     *
     * Generated from protobuf enum <code>FLASH = 5;</code>
     */
    public const FLASH = 5;
    /**
     * MIME type of text/html.
     *
     * Generated from protobuf enum <code>TEXT_HTML = 6;</code>
     */
    public const TEXT_HTML = 6;
    /**
     * MIME type of application/pdf.
     *
     * Generated from protobuf enum <code>PDF = 7;</code>
     */
    public const PDF = 7;
    /**
     * MIME type of application/msword.
     *
     * Generated from protobuf enum <code>MSWORD = 8;</code>
     */
    public const MSWORD = 8;
    /**
     * MIME type of application/vnd.ms-excel.
     *
     * Generated from protobuf enum <code>MSEXCEL = 9;</code>
     */
    public const MSEXCEL = 9;
    /**
     * MIME type of application/rtf.
     *
     * Generated from protobuf enum <code>RTF = 10;</code>
     */
    public const RTF = 10;
    /**
     * MIME type of audio/wav.
     *
     * Generated from protobuf enum <code>AUDIO_WAV = 11;</code>
     */
    public const AUDIO_WAV = 11;
    /**
     * MIME type of audio/mp3.
     *
     * Generated from protobuf enum <code>AUDIO_MP3 = 12;</code>
     */
    public const AUDIO_MP3 = 12;
    /**
     * MIME type of application/x-html5-ad-zip.
     *
     * Generated from protobuf enum <code>HTML5_AD_ZIP = 13;</code>
     */
    public const HTML5_AD_ZIP = 13;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::IMAGE_JPEG => 'IMAGE_JPEG',
        self::IMAGE_GIF => 'IMAGE_GIF',
        self::IMAGE_PNG => 'IMAGE_PNG',
        self::FLASH => 'FLASH',
        self::TEXT_HTML => 'TEXT_HTML',
        self::PDF => 'PDF',
        self::MSWORD => 'MSWORD',
        self::MSEXCEL => 'MSEXCEL',
        self::RTF => 'RTF',
        self::AUDIO_WAV => 'AUDIO_WAV',
        self::AUDIO_MP3 => 'AUDIO_MP3',
        self::HTML5_AD_ZIP => 'HTML5_AD_ZIP',
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
class_alias(MimeType::class, \Google\Ads\GoogleAds\V12\Enums\MimeTypeEnum_MimeType::class);

