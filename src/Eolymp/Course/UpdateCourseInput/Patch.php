<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/course_service.proto

namespace Eolymp\Course\UpdateCourseInput;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.course.UpdateCourseInput.Patch</code>
 */
class Patch
{
    /**
     * Generated from protobuf enum <code>ALL = 0;</code>
     */
    const ALL = 0;
    /**
     * Generated from protobuf enum <code>LOCALE = 1;</code>
     */
    const LOCALE = 1;
    /**
     * Generated from protobuf enum <code>NAME = 2;</code>
     */
    const NAME = 2;
    /**
     * Generated from protobuf enum <code>DESCRIPTION = 3;</code>
     */
    const DESCRIPTION = 3;
    /**
     * Generated from protobuf enum <code>IMAGE = 4;</code>
     */
    const IMAGE = 4;
    /**
     * Generated from protobuf enum <code>VISIBILITY = 5;</code>
     */
    const VISIBILITY = 5;
    /**
     * Generated from protobuf enum <code>DURATION = 6;</code>
     */
    const DURATION = 6;

    private static $valueToName = [
        self::ALL => 'ALL',
        self::LOCALE => 'LOCALE',
        self::NAME => 'NAME',
        self::DESCRIPTION => 'DESCRIPTION',
        self::IMAGE => 'IMAGE',
        self::VISIBILITY => 'VISIBILITY',
        self::DURATION => 'DURATION',
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
class_alias(Patch::class, \Eolymp\Course\UpdateCourseInput_Patch::class);
