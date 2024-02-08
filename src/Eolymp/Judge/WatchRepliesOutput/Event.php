<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/judge.proto

namespace Eolymp\Judge\WatchRepliesOutput;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.judge.WatchRepliesOutput.Event</code>
 */
class Event
{
    /**
     * Generated from protobuf enum <code>NO_TYPE = 0;</code>
     */
    const NO_TYPE = 0;
    /**
     * Generated from protobuf enum <code>CREATED = 1;</code>
     */
    const CREATED = 1;
    /**
     * Generated from protobuf enum <code>UPDATED = 2;</code>
     */
    const UPDATED = 2;
    /**
     * Generated from protobuf enum <code>DELETED = 3;</code>
     */
    const DELETED = 3;

    private static $valueToName = [
        self::NO_TYPE => 'NO_TYPE',
        self::CREATED => 'CREATED',
        self::UPDATED => 'UPDATED',
        self::DELETED => 'DELETED',
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
class_alias(Event::class, \Eolymp\Judge\WatchRepliesOutput_Event::class);
