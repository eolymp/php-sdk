<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/student.proto

namespace Eolymp\Course\Student;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.course.Student.Extra</code>
 */
class Extra
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_EXTRA = 0;</code>
     */
    const UNKNOWN_EXTRA = 0;
    /**
     * Generated from protobuf enum <code>GRADES = 1;</code>
     */
    const GRADES = 1;

    private static $valueToName = [
        self::UNKNOWN_EXTRA => 'UNKNOWN_EXTRA',
        self::GRADES => 'GRADES',
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
class_alias(Extra::class, \Eolymp\Course\Student_Extra::class);

