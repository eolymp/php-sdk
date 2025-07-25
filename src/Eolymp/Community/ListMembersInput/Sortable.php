<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
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
     * Generated from protobuf enum <code>DISPLAY_NAME = 1;</code>
     */
    const DISPLAY_NAME = 1;
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
        self::PBDEFAULT => 'DEFAULT',
        self::DISPLAY_NAME => 'DISPLAY_NAME',
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

