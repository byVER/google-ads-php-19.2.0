<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/errors/batch_job_error.proto

namespace Google\Ads\GoogleAds\V14\Errors\BatchJobErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible request errors.
 *
 * Protobuf type <code>google.ads.googleads.v14.errors.BatchJobErrorEnum.BatchJobError</code>
 */
class BatchJobError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    public const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    public const UNKNOWN = 1;
    /**
     * The batch job cannot add more operations or run after it has started
     * running.
     *
     * Generated from protobuf enum <code>CANNOT_MODIFY_JOB_AFTER_JOB_STARTS_RUNNING = 2;</code>
     */
    public const CANNOT_MODIFY_JOB_AFTER_JOB_STARTS_RUNNING = 2;
    /**
     * The operations for an AddBatchJobOperations request were empty.
     *
     * Generated from protobuf enum <code>EMPTY_OPERATIONS = 3;</code>
     */
    public const EMPTY_OPERATIONS = 3;
    /**
     * The sequence token for an AddBatchJobOperations request was invalid.
     *
     * Generated from protobuf enum <code>INVALID_SEQUENCE_TOKEN = 4;</code>
     */
    public const INVALID_SEQUENCE_TOKEN = 4;
    /**
     * Batch job results can only be retrieved once the job is finished.
     *
     * Generated from protobuf enum <code>RESULTS_NOT_READY = 5;</code>
     */
    public const RESULTS_NOT_READY = 5;
    /**
     * The page size for ListBatchJobResults was invalid.
     *
     * Generated from protobuf enum <code>INVALID_PAGE_SIZE = 6;</code>
     */
    public const INVALID_PAGE_SIZE = 6;
    /**
     * The batch job cannot be removed because it has started running.
     *
     * Generated from protobuf enum <code>CAN_ONLY_REMOVE_PENDING_JOB = 7;</code>
     */
    public const CAN_ONLY_REMOVE_PENDING_JOB = 7;
    /**
     * The batch job cannot be listed due to unexpected errors such as duplicate
     * checkpoints.
     *
     * Generated from protobuf enum <code>CANNOT_LIST_RESULTS = 8;</code>
     */
    public const CANNOT_LIST_RESULTS = 8;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CANNOT_MODIFY_JOB_AFTER_JOB_STARTS_RUNNING => 'CANNOT_MODIFY_JOB_AFTER_JOB_STARTS_RUNNING',
        self::EMPTY_OPERATIONS => 'EMPTY_OPERATIONS',
        self::INVALID_SEQUENCE_TOKEN => 'INVALID_SEQUENCE_TOKEN',
        self::RESULTS_NOT_READY => 'RESULTS_NOT_READY',
        self::INVALID_PAGE_SIZE => 'INVALID_PAGE_SIZE',
        self::CAN_ONLY_REMOVE_PENDING_JOB => 'CAN_ONLY_REMOVE_PENDING_JOB',
        self::CANNOT_LIST_RESULTS => 'CANNOT_LIST_RESULTS',
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
class_alias(BatchJobError::class, \Google\Ads\GoogleAds\V14\Errors\BatchJobErrorEnum_BatchJobError::class);

