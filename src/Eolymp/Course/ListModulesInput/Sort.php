<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/course/module_service.proto

namespace Eolymp\Course\ListModulesInput;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.course.ListModulesInput.Sort</code>
 */
class Sort
{
    /**
     * Generated from protobuf enum <code>INDEX = 0;</code>
     */
    const INDEX = 0;

    private static $valueToName = [
        self::INDEX => 'INDEX',
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

