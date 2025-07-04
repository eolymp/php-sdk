<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/judge/contest.proto

namespace Eolymp\Judge\Contest;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.judge.Contest.ParticipationMode</code>
 */
class ParticipationMode
{
    /**
     * reserved, should not be used
     *
     * Generated from protobuf enum <code>PARTICIPATION_MODE_UNKNOWN = 0;</code>
     */
    const PARTICIPATION_MODE_UNKNOWN = 0;
    /**
     * everyone start and finish together
     *
     * Generated from protobuf enum <code>ONLINE = 1;</code>
     */
    const ONLINE = 1;
    /**
     * participants can start contest individually
     *
     * Generated from protobuf enum <code>VIRTUAL = 2;</code>
     */
    const VIRTUAL = 2;

    private static $valueToName = [
        self::PARTICIPATION_MODE_UNKNOWN => 'PARTICIPATION_MODE_UNKNOWN',
        self::ONLINE => 'ONLINE',
        self::VIRTUAL => 'VIRTUAL',
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

