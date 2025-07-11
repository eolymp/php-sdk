<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/atlas/script_service.proto

namespace Eolymp\Atlas\UpdateScriptInput;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.atlas.UpdateScriptInput.Patch</code>
 */
class Patch
{
    /**
     * Generated from protobuf enum <code>ALL = 0;</code>
     */
    const ALL = 0;
    /**
     * Generated from protobuf enum <code>NAME = 1;</code>
     */
    const NAME = 1;
    /**
     * Generated from protobuf enum <code>SECRET = 2;</code>
     */
    const SECRET = 2;
    /**
     * Generated from protobuf enum <code>RUNTIME = 3;</code>
     */
    const RUNTIME = 3;
    /**
     * Generated from protobuf enum <code>SOURCE_URL = 4;</code>
     */
    const SOURCE_URL = 4;
    /**
     * Generated from protobuf enum <code>FILES = 5;</code>
     */
    const FILES = 5;

    private static $valueToName = [
        self::ALL => 'ALL',
        self::NAME => 'NAME',
        self::SECRET => 'SECRET',
        self::RUNTIME => 'RUNTIME',
        self::SOURCE_URL => 'SOURCE_URL',
        self::FILES => 'FILES',
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

