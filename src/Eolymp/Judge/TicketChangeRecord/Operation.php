<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/events.proto

namespace Eolymp\Judge\TicketChangeRecord;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.judge.TicketChangeRecord.Operation</code>
 */
class Operation
{
    /**
     * Generated from protobuf enum <code>NO_OPERATION = 0;</code>
     */
    const NO_OPERATION = 0;
    /**
     * Generated from protobuf enum <code>CREATE = 1;</code>
     */
    const CREATE = 1;
    /**
     * Generated from protobuf enum <code>UPDATE = 2;</code>
     */
    const UPDATE = 2;
    /**
     * Generated from protobuf enum <code>DELETE = 3;</code>
     */
    const DELETE = 3;
    /**
     * Generated from protobuf enum <code>REPLY = 5;</code>
     */
    const REPLY = 5;

    private static $valueToName = [
        self::NO_OPERATION => 'NO_OPERATION',
        self::CREATE => 'CREATE',
        self::UPDATE => 'UPDATE',
        self::DELETE => 'DELETE',
        self::REPLY => 'REPLY',
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
class_alias(Operation::class, \Eolymp\Judge\TicketChangeRecord_Operation::class);

