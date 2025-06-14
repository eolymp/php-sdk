<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/atlas/problem_service.proto

namespace Eolymp\Atlas\ListProblemsInput;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.atlas.ListProblemsInput.Sortable</code>
 */
class Sortable
{
    /**
     * Generated from protobuf enum <code>DEFAULT = 0;</code>
     */
    const PBDEFAULT = 0;
    /**
     * Generated from protobuf enum <code>RECENT = 1;</code>
     */
    const RECENT = 1;
    /**
     * Generated from protobuf enum <code>POPULAR = 2;</code>
     */
    const POPULAR = 2;

    private static $valueToName = [
        self::PBDEFAULT => 'DEFAULT',
        self::RECENT => 'RECENT',
        self::POPULAR => 'POPULAR',
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
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}

