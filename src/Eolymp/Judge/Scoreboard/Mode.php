<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/scoreboard.proto

namespace Eolymp\Judge\Scoreboard;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.judge.Scoreboard.Mode</code>
 */
class Mode
{
    /**
     * Generated from protobuf enum <code>RESULT = 0;</code>
     */
    const RESULT = 0;
    /**
     * Generated from protobuf enum <code>FROZEN = 1;</code>
     */
    const FROZEN = 1;
    /**
     * Generated from protobuf enum <code>UPSOLVE = 2;</code>
     */
    const UPSOLVE = 2;

    private static $valueToName = [
        self::RESULT => 'RESULT',
        self::FROZEN => 'FROZEN',
        self::UPSOLVE => 'UPSOLVE',
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
class_alias(Mode::class, \Eolymp\Judge\Scoreboard_Mode::class);
