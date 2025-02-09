<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/solution.proto

namespace Eolymp\Atlas\Solution;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.atlas.Solution.Status</code>
 */
class Status
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_STATUS = 0;</code>
     */
    const UNKNOWN_STATUS = 0;
    /**
     * Generated from protobuf enum <code>PASS = 1;</code>
     */
    const PASS = 1;
    /**
     * Generated from protobuf enum <code>FAIL = 2;</code>
     */
    const FAIL = 2;
    /**
     * Generated from protobuf enum <code>ERROR = 3;</code>
     */
    const ERROR = 3;

    private static $valueToName = [
        self::UNKNOWN_STATUS => 'UNKNOWN_STATUS',
        self::PASS => 'PASS',
        self::FAIL => 'FAIL',
        self::ERROR => 'ERROR',
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
class_alias(Status::class, \Eolymp\Atlas\Solution_Status::class);

