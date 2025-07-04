<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/course/student_service.proto

namespace Eolymp\Course\UpdateStudentInput;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.course.UpdateStudentInput.Patch</code>
 */
class Patch
{
    /**
     * Generated from protobuf enum <code>ALL = 0;</code>
     */
    const ALL = 0;
    /**
     * Generated from protobuf enum <code>INACTIVE = 1;</code>
     */
    const INACTIVE = 1;
    /**
     * Generated from protobuf enum <code>ASSIGN_ALL = 2;</code>
     */
    const ASSIGN_ALL = 2;

    private static $valueToName = [
        self::ALL => 'ALL',
        self::INACTIVE => 'INACTIVE',
        self::ASSIGN_ALL => 'ASSIGN_ALL',
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

