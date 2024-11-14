<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/penalty_service.proto

namespace Eolymp\Community\UpdatePenaltyInput;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.community.UpdatePenaltyInput.Patch</code>
 */
class Patch
{
    /**
     * Generated from protobuf enum <code>ALL = 0;</code>
     */
    const ALL = 0;
    /**
     * Generated from protobuf enum <code>SUMMARY = 1;</code>
     */
    const SUMMARY = 1;
    /**
     * Generated from protobuf enum <code>DESCRIPTION = 2;</code>
     */
    const DESCRIPTION = 2;
    /**
     * Generated from protobuf enum <code>SCOPE = 3;</code>
     */
    const SCOPE = 3;
    /**
     * Generated from protobuf enum <code>EXPIRES_AT = 4;</code>
     */
    const EXPIRES_AT = 4;

    private static $valueToName = [
        self::ALL => 'ALL',
        self::SUMMARY => 'SUMMARY',
        self::DESCRIPTION => 'DESCRIPTION',
        self::SCOPE => 'SCOPE',
        self::EXPIRES_AT => 'EXPIRES_AT',
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
class_alias(Patch::class, \Eolymp\Community\UpdatePenaltyInput_Patch::class);
