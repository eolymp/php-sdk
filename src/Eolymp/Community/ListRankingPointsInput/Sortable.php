<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/ranking_service.proto

namespace Eolymp\Community\ListRankingPointsInput;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.community.ListRankingPointsInput.Sortable</code>
 */
class Sortable
{
    /**
     * Generated from protobuf enum <code>TIMESTAMP = 0;</code>
     */
    const TIMESTAMP = 0;

    private static $valueToName = [
        self::TIMESTAMP => 'TIMESTAMP',
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
class_alias(Sortable::class, \Eolymp\Community\ListRankingPointsInput_Sortable::class);
