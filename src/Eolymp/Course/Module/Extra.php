<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/module.proto

namespace Eolymp\Course\Module;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.course.Module.Extra</code>
 */
class Extra
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_EXTRA = 0;</code>
     */
    const UNKNOWN_EXTRA = 0;
    /**
     * Generated from protobuf enum <code>DESCRIPTION_VALUE = 1;</code>
     */
    const DESCRIPTION_VALUE = 1;
    /**
     * Generated from protobuf enum <code>DESCRIPTION_RENDER = 2;</code>
     */
    const DESCRIPTION_RENDER = 2;
    /**
     * Generated from protobuf enum <code>ASSIGNMENT = 3;</code>
     */
    const ASSIGNMENT = 3;

    private static $valueToName = [
        self::UNKNOWN_EXTRA => 'UNKNOWN_EXTRA',
        self::DESCRIPTION_VALUE => 'DESCRIPTION_VALUE',
        self::DESCRIPTION_RENDER => 'DESCRIPTION_RENDER',
        self::ASSIGNMENT => 'ASSIGNMENT',
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
class_alias(Extra::class, \Eolymp\Course\Module_Extra::class);

