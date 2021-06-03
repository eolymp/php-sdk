<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/wellknown/expression.proto

namespace Eolymp\Wellknown\ExpressionInt;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.wellknown.ExpressionInt.Type</code>
 */
class Type
{
    /**
     * Generated from protobuf enum <code>NONE = 0;</code>
     */
    const NONE = 0;
    /**
     * Generated from protobuf enum <code>EQUAL = 1;</code>
     */
    const EQUAL = 1;
    /**
     * Generated from protobuf enum <code>NOT_EQUAL = 2;</code>
     */
    const NOT_EQUAL = 2;
    /**
     * Generated from protobuf enum <code>GREATER_THAN = 3;</code>
     */
    const GREATER_THAN = 3;
    /**
     * Generated from protobuf enum <code>GREATER_THAN_EQUAL = 4;</code>
     */
    const GREATER_THAN_EQUAL = 4;
    /**
     * Generated from protobuf enum <code>LESS_THAN = 5;</code>
     */
    const LESS_THAN = 5;
    /**
     * Generated from protobuf enum <code>LESS_THAN_EQUAL = 6;</code>
     */
    const LESS_THAN_EQUAL = 6;

    private static $valueToName = [
        self::NONE => 'NONE',
        self::EQUAL => 'EQUAL',
        self::NOT_EQUAL => 'NOT_EQUAL',
        self::GREATER_THAN => 'GREATER_THAN',
        self::GREATER_THAN_EQUAL => 'GREATER_THAN_EQUAL',
        self::LESS_THAN => 'LESS_THAN',
        self::LESS_THAN_EQUAL => 'LESS_THAN_EQUAL',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Type::class, \Eolymp\Wellknown\ExpressionInt_Type::class);

