<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/contest.proto

namespace Eolymp\Judge\Contest\Scoreboard;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.judge.Contest.Scoreboard.Visibility</code>
 */
class Visibility
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_VISIBILITY = 0;</code>
     */
    const UNKNOWN_VISIBILITY = 0;
    /**
     * visible only to organizers
     *
     * Generated from protobuf enum <code>INVISIBLE = 1;</code>
     */
    const INVISIBLE = 1;
    /**
     * visible to participants and organizers
     *
     * Generated from protobuf enum <code>INTERNAL = 2;</code>
     */
    const INTERNAL = 2;
    /**
     * visible to everyone
     *
     * Generated from protobuf enum <code>PUBLIC = 3;</code>
     */
    const PBPUBLIC = 3;

    private static $valueToName = [
        self::UNKNOWN_VISIBILITY => 'UNKNOWN_VISIBILITY',
        self::INVISIBLE => 'INVISIBLE',
        self::INTERNAL => 'INTERNAL',
        self::PBPUBLIC => 'PUBLIC',
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
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Visibility::class, \Eolymp\Judge\Contest_Scoreboard_Visibility::class);

