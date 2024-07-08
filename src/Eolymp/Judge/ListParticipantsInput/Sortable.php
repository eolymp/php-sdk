<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/participant_service.proto

namespace Eolymp\Judge\ListParticipantsInput;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.judge.ListParticipantsInput.Sortable</code>
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
     * Generated from protobuf enum <code>STARTED_AT = 2;</code>
     */
    const STARTED_AT = 2;

    private static $valueToName = [
        self::PBDEFAULT => 'DEFAULT',
        self::DISPLAY_NAME => 'DISPLAY_NAME',
        self::STARTED_AT => 'STARTED_AT',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Sortable::class, \Eolymp\Judge\ListParticipantsInput_Sortable::class);

