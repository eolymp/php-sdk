<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/contest_service.proto

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
     * Generated from protobuf enum <code>JOIN_UNOFFICIALLY = 7;</code>
     */
    const JOIN_UNOFFICIALLY = 7;
    /**
     * Generated from protobuf enum <code>REQUIRE_ADMISSION = 16;</code>
     */
    const REQUIRE_ADMISSION = 16;
    /**
     * Generated from protobuf enum <code>ALLOW_PAUSE = 17;</code>
     */
    const ALLOW_PAUSE = 17;
    /**
     * Generated from protobuf enum <code>ALLOW_FINISH_EARLY = 18;</code>
     */
    const ALLOW_FINISH_EARLY = 18;
    /**
     * Generated from protobuf enum <code>PARTICIPATION_MODE = 8;</code>
     */
    const PARTICIPATION_MODE = 8;
    /**
     * Generated from protobuf enum <code>FORMAT = 10;</code>
     */
    const FORMAT = 10;
    /**
     * Generated from protobuf enum <code>KEY = 11;</code>
     */
    const KEY = 11;
    /**
     * Generated from protobuf enum <code>LOGO_URL = 14;</code>
     */
    const LOGO_URL = 14;
    /**
     * Generated from protobuf enum <code>PROBLEM_COUNT_HIDDEN = 12;</code>
     */
    const PROBLEM_COUNT_HIDDEN = 12;
    /**
     * Generated from protobuf enum <code>PARTICIPANT_COUNT_HIDDEN = 13;</code>
     */
    const PARTICIPANT_COUNT_HIDDEN = 13;
    /**
     * Generated from protobuf enum <code>FEATURED_UNTIL = 9;</code>
     */
    const FEATURED_UNTIL = 9;
    /**
     * Generated from protobuf enum <code>PRINTER = 15;</code>
     */
    const PRINTER = 15;
    /**
     * Generated from protobuf enum <code>TAXONOMY = 140;</code>
     */
    const TAXONOMY = 140;
    /**
     * Generated from protobuf enum <code>APPEARANCE = 110;</code>
     */
    const APPEARANCE = 110;
    /**
     * Generated from protobuf enum <code>ENVIRONMENT = 130;</code>
     */
    const ENVIRONMENT = 130;
    /**
     * Generated from protobuf enum <code>UPSOLVE = 120;</code>
     */
    const UPSOLVE = 120;
    /**
     * Generated from protobuf enum <code>SCOREBOARD = 150;</code>
     */
    const SCOREBOARD = 150;
    /**
     * Generated from protobuf enum <code>CERTIFICATION = 160;</code>
     */
    const CERTIFICATION = 160;

    private static $valueToName = [
        self::ALL => 'ALL',
        self::NAME => 'NAME',
        self::STARTS_AT => 'STARTS_AT',
        self::ENDS_AT => 'ENDS_AT',
        self::DURATION => 'DURATION',
        self::VISIBILITY => 'VISIBILITY',
        self::JOIN_UNOFFICIALLY => 'JOIN_UNOFFICIALLY',
        self::REQUIRE_ADMISSION => 'REQUIRE_ADMISSION',
        self::ALLOW_PAUSE => 'ALLOW_PAUSE',
        self::ALLOW_FINISH_EARLY => 'ALLOW_FINISH_EARLY',
        self::PARTICIPATION_MODE => 'PARTICIPATION_MODE',
        self::FORMAT => 'FORMAT',
        self::KEY => 'KEY',
        self::LOGO_URL => 'LOGO_URL',
        self::PROBLEM_COUNT_HIDDEN => 'PROBLEM_COUNT_HIDDEN',
        self::PARTICIPANT_COUNT_HIDDEN => 'PARTICIPANT_COUNT_HIDDEN',
        self::FEATURED_UNTIL => 'FEATURED_UNTIL',
        self::PRINTER => 'PRINTER',
        self::TAXONOMY => 'TAXONOMY',
        self::APPEARANCE => 'APPEARANCE',
        self::ENVIRONMENT => 'ENVIRONMENT',
        self::UPSOLVE => 'UPSOLVE',
        self::SCOREBOARD => 'SCOREBOARD',
        self::CERTIFICATION => 'CERTIFICATION',
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

