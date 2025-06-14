<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/runtime/language.proto

namespace Eolymp\Runtime\Language;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.runtime.Language.Type</code>
 */
class Type
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_TYPE = 0;</code>
     */
    const UNKNOWN_TYPE = 0;
    /**
     * Generated from protobuf enum <code>PROGRAMMING = 1;</code>
     */
    const PROGRAMMING = 1;
    /**
     * Generated from protobuf enum <code>SQL = 3;</code>
     */
    const SQL = 3;
    /**
     * Generated from protobuf enum <code>ML = 4;</code>
     */
    const ML = 4;
    /**
     * Generated from protobuf enum <code>OTHER = 999;</code>
     */
    const OTHER = 999;

    private static $valueToName = [
        self::UNKNOWN_TYPE => 'UNKNOWN_TYPE',
        self::PROGRAMMING => 'PROGRAMMING',
        self::SQL => 'SQL',
        self::ML => 'ML',
        self::OTHER => 'OTHER',
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

