<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/assignment_service.proto

namespace Eolymp\Course\UpdateAssignmentInput;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.course.UpdateAssignmentInput.Patch</code>
 */
class Patch
{
    /**
     * Generated from protobuf enum <code>ALL = 0;</code>
     */
    const ALL = 0;
    /**
     * Generated from protobuf enum <code>START_AFTER = 1;</code>
     */
    const START_AFTER = 1;
    /**
     * Generated from protobuf enum <code>COMPLETE_BEFORE = 2;</code>
     */
    const COMPLETE_BEFORE = 2;
    /**
     * Generated from protobuf enum <code>DURATION = 3;</code>
     */
    const DURATION = 3;
    /**
     * Generated from protobuf enum <code>ITEMS = 4;</code>
     */
    const ITEMS = 4;

    private static $valueToName = [
        self::ALL => 'ALL',
        self::START_AFTER => 'START_AFTER',
        self::COMPLETE_BEFORE => 'COMPLETE_BEFORE',
        self::DURATION => 'DURATION',
        self::ITEMS => 'ITEMS',
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
class_alias(Patch::class, \Eolymp\Course\UpdateAssignmentInput_Patch::class);

