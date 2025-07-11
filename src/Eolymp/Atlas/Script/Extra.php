<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/atlas/script.proto

namespace Eolymp\Atlas\Script;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.atlas.Script.Extra</code>
 */
class Extra
{
    /**
     * Generated from protobuf enum <code>NO_EXTRA = 0;</code>
     */
    const NO_EXTRA = 0;
    /**
     * Generated from protobuf enum <code>SOURCE = 1;</code>
     */
    const SOURCE = 1;

    private static $valueToName = [
        self::NO_EXTRA => 'NO_EXTRA',
        self::SOURCE => 'SOURCE',
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

