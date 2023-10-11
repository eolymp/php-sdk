<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/contest.proto

namespace Eolymp\Judge\Contest;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.judge.Contest.Visibility</code>
 */
class Visibility
{
    /**
     * reserved, should not be used
     *
     * Generated from protobuf enum <code>VISIBILITY_UNKNOWN = 0;</code>
     */
    const VISIBILITY_UNKNOWN = 0;
    /**
     * visible to everyone and shown on the website
     *
     * Generated from protobuf enum <code>PUBLIC = 1;</code>
     */
    const PBPUBLIC = 1;
    /**
     * anyone can participate, but not shown on the website
     *
     * Generated from protobuf enum <code>UNLISTED = 2;</code>
     */
    const UNLISTED = 2;
    /**
     * only explicitly added participants can participate
     *
     * Generated from protobuf enum <code>PRIVATE = 3;</code>
     */
    const PBPRIVATE = 3;

    private static $valueToName = [
        self::VISIBILITY_UNKNOWN => 'VISIBILITY_UNKNOWN',
        self::PBPUBLIC => 'PBPUBLIC',
        self::UNLISTED => 'UNLISTED',
        self::PBPRIVATE => 'PBPRIVATE',
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
class_alias(Visibility::class, \Eolymp\Judge\Contest_Visibility::class);

