<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/code_template_service.proto

namespace Eolymp\Atlas\UpdateCodeTemplateInput;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.atlas.UpdateCodeTemplateInput.Patch</code>
 */
class Patch
{
    /**
     * Generated from protobuf enum <code>ALL = 0;</code>
     */
    const ALL = 0;
    /**
     * Generated from protobuf enum <code>RUNTIME = 1;</code>
     */
    const RUNTIME = 1;
    /**
     * Generated from protobuf enum <code>SOURCE = 2;</code>
     */
    const SOURCE = 2;
    /**
     * Generated from protobuf enum <code>HEADER = 3;</code>
     */
    const HEADER = 3;
    /**
     * Generated from protobuf enum <code>FOOTER = 4;</code>
     */
    const FOOTER = 4;
    /**
     * Generated from protobuf enum <code>SECRET = 5;</code>
     */
    const SECRET = 5;
    /**
     * Generated from protobuf enum <code>FILES = 6;</code>
     */
    const FILES = 6;

    private static $valueToName = [
        self::ALL => 'ALL',
        self::RUNTIME => 'RUNTIME',
        self::SOURCE => 'SOURCE',
        self::HEADER => 'HEADER',
        self::FOOTER => 'FOOTER',
        self::SECRET => 'SECRET',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Patch::class, \Eolymp\Atlas\UpdateCodeTemplateInput_Patch::class);

