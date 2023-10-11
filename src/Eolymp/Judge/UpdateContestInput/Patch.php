<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/judge.proto

namespace Eolymp\Judge\UpdateContestInput;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.judge.UpdateContestInput.Patch</code>
 */
class Patch
{
    /**
     * Generated from protobuf enum <code>ALL = 0;</code>
     */
    const ALL = 0;
    /**
     * Generated from protobuf enum <code>NAME = 2;</code>
     */
    const NAME = 2;
    /**
     * Generated from protobuf enum <code>STARTS_AT = 3;</code>
     */
    const STARTS_AT = 3;
    /**
     * Generated from protobuf enum <code>ENDS_AT = 4;</code>
     */
    const ENDS_AT = 4;
    /**
     * Generated from protobuf enum <code>DURATION = 5;</code>
     */
    const DURATION = 5;
    /**
     * Generated from protobuf enum <code>VISIBILITY = 6;</code>
     */
    const VISIBILITY = 6;
    /**
     * Generated from protobuf enum <code>PARTICIPATION_MODE = 7;</code>
     */
    const PARTICIPATION_MODE = 7;
    /**
     * Generated from protobuf enum <code>ENDLESS = 8;</code>
     */
    const ENDLESS = 8;
    /**
     * Generated from protobuf enum <code>FORMAT = 9;</code>
     */
    const FORMAT = 9;
    /**
     * Generated from protobuf enum <code>DOMAIN = 10;</code>
     */
    const DOMAIN = 10;

    private static $valueToName = [
        self::ALL => 'ALL',
        self::NAME => 'NAME',
        self::STARTS_AT => 'STARTS_AT',
        self::ENDS_AT => 'ENDS_AT',
        self::DURATION => 'DURATION',
        self::VISIBILITY => 'VISIBILITY',
        self::PARTICIPATION_MODE => 'PARTICIPATION_MODE',
        self::ENDLESS => 'ENDLESS',
        self::FORMAT => 'FORMAT',
        self::DOMAIN => 'DOMAIN',
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
class_alias(Patch::class, \Eolymp\Judge\UpdateContestInput_Patch::class);

