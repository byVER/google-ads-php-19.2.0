<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/enums/batch_job_status.proto

namespace Google\Ads\GoogleAds\V12\Enums\BatchJobStatusEnum;

use UnexpectedValueException;

/**
 * The batch job statuses.
 *
 * Protobuf type <code>google.ads.googleads.v12.enums.BatchJobStatusEnum.BatchJobStatus</code>
 */
class BatchJobStatus
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
     * The job is not currently running.
     *
     * Generated from protobuf enum <code>PENDING = 2;</code>
     */
    public const PENDING = 2;
    /**
     * The job is running.
     *
     * Generated from protobuf enum <code>RUNNING = 3;</code>
     */
    public const RUNNING = 3;
    /**
     * The job is done.
     *
     * Generated from protobuf enum <code>DONE = 4;</code>
     */
    public const DONE = 4;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::PENDING => 'PENDING',
        self::RUNNING => 'RUNNING',
        self::DONE => 'DONE',
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
class_alias(BatchJobStatus::class, \Google\Ads\GoogleAds\V12\Enums\BatchJobStatusEnum_BatchJobStatus::class);

