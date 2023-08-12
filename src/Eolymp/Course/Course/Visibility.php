<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/course.proto

namespace Eolymp\Course\Course;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.course.Course.Visibility</code>
 */
class Visibility
{
    /**
     * Generated from protobuf enum <code>NONE = 0;</code>
     */
    const NONE = 0;
    /**
     * Generated from protobuf enum <code>PUBLIC = 1;</code>
     */
    const PBPUBLIC = 1;
    /**
     * Generated from protobuf enum <code>UNLISTED = 2;</code>
     */
    const UNLISTED = 2;
    /**
     * Generated from protobuf enum <code>PRIVATE = 3;</code>
     */
    const PBPRIVATE = 3;

    private static $valueToName = [
        self::NONE => 'NONE',
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
class_alias(Visibility::class, \Eolymp\Course\Course_Visibility::class);
