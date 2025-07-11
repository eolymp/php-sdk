<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/judge/violation.proto

namespace Eolymp\Judge\Violation;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.judge.Violation.Status</code>
 */
class Status
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_STATUS = 0;</code>
     */
    const UNKNOWN_STATUS = 0;
    /**
     * Generated from protobuf enum <code>PENDING = 1;</code>
     */
    const PENDING = 1;
    /**
     * Generated from protobuf enum <code>CONFIRMED = 2;</code>
     */
    const CONFIRMED = 2;
    /**
     * Generated from protobuf enum <code>CANCELLED = 3;</code>
     */
    const CANCELLED = 3;

    private static $valueToName = [
        self::UNKNOWN_STATUS => 'UNKNOWN_STATUS',
        self::PENDING => 'PENDING',
        self::CONFIRMED => 'CONFIRMED',
        self::CANCELLED => 'CANCELLED',
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

