<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/universe/space_service.proto

namespace Eolymp\Universe\UpdateSpaceInput;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.universe.UpdateSpaceInput.Patch</code>
 */
class Patch
{
    /**
     * Generated from protobuf enum <code>ALL = 0;</code>
     */
    const ALL = 0;
    /**
     * Generated from protobuf enum <code>KEY = 1;</code>
     */
    const KEY = 1;
    /**
     * Generated from protobuf enum <code>NAME = 2;</code>
     */
    const NAME = 2;
    /**
     * Generated from protobuf enum <code>IMAGE = 3;</code>
     */
    const IMAGE = 3;
    /**
     * Generated from protobuf enum <code>TYPE = 4;</code>
     */
    const TYPE = 4;
    /**
     * Generated from protobuf enum <code>VISIBILITY = 5;</code>
     */
    const VISIBILITY = 5;

    private static $valueToName = [
        self::ALL => 'ALL',
        self::KEY => 'KEY',
        self::NAME => 'NAME',
        self::IMAGE => 'IMAGE',
        self::TYPE => 'TYPE',
        self::VISIBILITY => 'VISIBILITY',
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
class_alias(Patch::class, \Eolymp\Universe\UpdateSpaceInput_Patch::class);

