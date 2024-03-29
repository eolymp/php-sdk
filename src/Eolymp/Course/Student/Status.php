<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/student.proto

namespace Eolymp\Course\Student;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.course.Student.Status</code>
 */
class Status
{
    /**
     * reserved, should not be used
     *
     * Generated from protobuf enum <code>NONE = 0;</code>
     */
    const NONE = 0;
    /**
     * student added to the course and can start
     *
     * Generated from protobuf enum <code>READY = 1;</code>
     */
    const READY = 1;
    /**
     * student has started the course
     *
     * Generated from protobuf enum <code>ACTIVE = 2;</code>
     */
    const ACTIVE = 2;
    /**
     * student has completed the course
     *
     * Generated from protobuf enum <code>COMPLETE = 3;</code>
     */
    const COMPLETE = 3;

    private static $valueToName = [
        self::NONE => 'NONE',
        self::READY => 'READY',
        self::ACTIVE => 'ACTIVE',
        self::COMPLETE => 'COMPLETE',
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
class_alias(Status::class, \Eolymp\Course\Student_Status::class);

