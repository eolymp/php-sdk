<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/editorial_service.proto

namespace Eolymp\Atlas\UpdateEditorialInput;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.atlas.UpdateEditorialInput.Patch</code>
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
     * Generated from protobuf enum <code>CONTENT = 2;</code>
     */
    const CONTENT = 2;
    /**
     * Generated from protobuf enum <code>DOWNLOAD_LINK = 3;</code>
     */
    const DOWNLOAD_LINK = 3;

    private static $valueToName = [
        self::ALL => 'ALL',
        self::LOCALE => 'LOCALE',
        self::CONTENT => 'CONTENT',
        self::DOWNLOAD_LINK => 'DOWNLOAD_LINK',
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
class_alias(Patch::class, \Eolymp\Atlas\UpdateEditorialInput_Patch::class);

