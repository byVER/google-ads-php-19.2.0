<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/enums/matching_function_operator.proto

namespace Google\Ads\GoogleAds\V12\Enums\MatchingFunctionOperatorEnum;

use UnexpectedValueException;

/**
 * Possible operators in a matching function.
 *
 * Protobuf type <code>google.ads.googleads.v12.enums.MatchingFunctionOperatorEnum.MatchingFunctionOperator</code>
 */
class MatchingFunctionOperator
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
     * The IN operator.
     *
     * Generated from protobuf enum <code>IN = 2;</code>
     */
    public const IN = 2;
    /**
     * The IDENTITY operator.
     *
     * Generated from protobuf enum <code>IDENTITY = 3;</code>
     */
    public const IDENTITY = 3;
    /**
     * The EQUALS operator
     *
     * Generated from protobuf enum <code>EQUALS = 4;</code>
     */
    public const EQUALS = 4;
    /**
     * Operator that takes two or more operands that are of type
     * FunctionOperand and checks that all the operands evaluate to true.
     * For functions related to ad formats, all the operands must be in
     * left_operands.
     *
     * Generated from protobuf enum <code>AND = 5;</code>
     */
    public const PBAND = 5;
    /**
     * Operator that returns true if the elements in left_operands contain any
     * of the elements in right_operands. Otherwise, return false. The
     * right_operands must contain at least 1 and no more than 3
     * ConstantOperands.
     *
     * Generated from protobuf enum <code>CONTAINS_ANY = 6;</code>
     */
    public const CONTAINS_ANY = 6;

    private static array $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::IN => 'IN',
        self::IDENTITY => 'IDENTITY',
        self::EQUALS => 'EQUALS',
        self::PBAND => 'AND',
        self::CONTAINS_ANY => 'CONTAINS_ANY',
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
class_alias(MatchingFunctionOperator::class, \Google\Ads\GoogleAds\V12\Enums\MatchingFunctionOperatorEnum_MatchingFunctionOperator::class);

