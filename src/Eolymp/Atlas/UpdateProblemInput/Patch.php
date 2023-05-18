<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/library_service.proto

namespace Eolymp\Atlas\UpdateProblemInput;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.atlas.UpdateProblemInput.Patch</code>
 */
class Patch
{
    /**
     * Generated from protobuf enum <code>ALL = 0;</code>
     */
    const ALL = 0;
    /**
     * Generated from protobuf enum <code>VISIBLE = 1;</code>
     */
    const VISIBLE = 1;
    /**
     * Generated from protobuf enum <code>PRIVATE = 2;</code>
     */
    const PBPRIVATE = 2;
    /**
     * Generated from protobuf enum <code>TOPICS = 3;</code>
     */
    const TOPICS = 3;
    /**
     * Generated from protobuf enum <code>DIFFICULTY = 4;</code>
     */
    const DIFFICULTY = 4;

    private static $valueToName = [
        self::ALL => 'ALL',
        self::VISIBLE => 'VISIBLE',
        self::PBPRIVATE => 'PBPRIVATE',
        self::TOPICS => 'TOPICS',
        self::DIFFICULTY => 'DIFFICULTY',
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
class_alias(Patch::class, \Eolymp\Atlas\UpdateProblemInput_Patch::class);

