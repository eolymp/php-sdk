<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/module_service.proto

namespace Eolymp\Course\UpdateModuleInput;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.course.UpdateModuleInput.Patch</code>
 */
class Patch
{
    /**
     * Generated from protobuf enum <code>ALL = 0;</code>
     */
    const ALL = 0;
    /**
     * Generated from protobuf enum <code>DRAFT = 1;</code>
     */
    const DRAFT = 1;
    /**
     * Generated from protobuf enum <code>EXTRA = 6;</code>
     */
    const EXTRA = 6;
    /**
     * Generated from protobuf enum <code>NAME = 2;</code>
     */
    const NAME = 2;
    /**
     * Generated from protobuf enum <code>IMAGE_URL = 3;</code>
     */
    const IMAGE_URL = 3;
    /**
     * Generated from protobuf enum <code>INDEX = 4;</code>
     */
    const INDEX = 4;
    /**
     * Generated from protobuf enum <code>DESCRIPTION = 5;</code>
     */
    const DESCRIPTION = 5;

    private static $valueToName = [
        self::ALL => 'ALL',
        self::DRAFT => 'DRAFT',
        self::EXTRA => 'EXTRA',
        self::NAME => 'NAME',
        self::IMAGE_URL => 'IMAGE_URL',
        self::INDEX => 'INDEX',
        self::DESCRIPTION => 'DESCRIPTION',
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
class_alias(Patch::class, \Eolymp\Course\UpdateModuleInput_Patch::class);

