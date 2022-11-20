<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/community.proto

namespace Eolymp\Community\UpdateMemberInput;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.community.UpdateMemberInput.Patch</code>
 */
class Patch
{
    /**
     * Generated from protobuf enum <code>NAME = 0;</code>
     */
    const NAME = 0;
    /**
     * Generated from protobuf enum <code>DISABLED = 1;</code>
     */
    const DISABLED = 1;
    /**
     * Generated from protobuf enum <code>REGISTERED = 2;</code>
     */
    const REGISTERED = 2;
    /**
     * Generated from protobuf enum <code>GHOST = 3;</code>
     */
    const GHOST = 3;
    /**
     * Generated from protobuf enum <code>OUT_OF_COMPETITION = 4;</code>
     */
    const OUT_OF_COMPETITION = 4;
    /**
     * Generated from protobuf enum <code>IDENTITIES = 5;</code>
     */
    const IDENTITIES = 5;
    /**
     * Generated from protobuf enum <code>VALUES = 6;</code>
     */
    const VALUES = 6;

    private static $valueToName = [
        self::NAME => 'NAME',
        self::DISABLED => 'DISABLED',
        self::REGISTERED => 'REGISTERED',
        self::GHOST => 'GHOST',
        self::OUT_OF_COMPETITION => 'OUT_OF_COMPETITION',
        self::IDENTITIES => 'IDENTITIES',
        self::VALUES => 'VALUES',
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
class_alias(Patch::class, \Eolymp\Community\UpdateMemberInput_Patch::class);
