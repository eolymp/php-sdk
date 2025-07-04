<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/universe/space.proto

namespace Eolymp\Universe\Space;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.universe.Space.Feature</code>
 */
class Feature
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_FEATURE = 0;</code>
     */
    const UNKNOWN_FEATURE = 0;
    /**
     * Generated from protobuf enum <code>PRINTERS = 1;</code>
     */
    const PRINTERS = 1;
    /**
     * Generated from protobuf enum <code>NEWSLETTERS = 2;</code>
     */
    const NEWSLETTERS = 2;

    private static $valueToName = [
        self::UNKNOWN_FEATURE => 'UNKNOWN_FEATURE',
        self::PRINTERS => 'PRINTERS',
        self::NEWSLETTERS => 'NEWSLETTERS',
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

