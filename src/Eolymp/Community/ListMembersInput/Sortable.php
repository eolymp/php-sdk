<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/member_service.proto

namespace Eolymp\Community\ListMembersInput;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.community.ListMembersInput.Sortable</code>
 */
class Sortable
{
    /**
     * Generated from protobuf enum <code>DEFAULT = 0;</code>
     */
    const PBDEFAULT = 0;
    /**
     * Generated from protobuf enum <code>NAME = 1;</code>
     */
    const NAME = 1;
    /**
     * Generated from protobuf enum <code>CREATED_AT = 2;</code>
     */
    const CREATED_AT = 2;
    /**
     * Generated from protobuf enum <code>TYPE = 3;</code>
     */
    const TYPE = 3;
    /**
     * Generated from protobuf enum <code>SCORE = 4;</code>
     */
    const SCORE = 4;

    private static $valueToName = [
        self::PBDEFAULT => 'PBDEFAULT',
        self::NAME => 'NAME',
        self::CREATED_AT => 'CREATED_AT',
        self::TYPE => 'TYPE',
        self::SCORE => 'SCORE',
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
class_alias(Sortable::class, \Eolymp\Community\ListMembersInput_Sortable::class);

