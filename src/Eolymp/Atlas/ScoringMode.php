<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/scoring.proto

namespace Eolymp\Atlas;

use UnexpectedValueException;

/**
 * Scoring mode defines how testset score is calculated
 *
 * Protobuf type <code>eolymp.atlas.ScoringMode</code>
 */
class ScoringMode
{
    /**
     * no score is awarded
     *
     * Generated from protobuf enum <code>NO_SCORE = 0;</code>
     */
    const NO_SCORE = 0;
    /**
     * as sum of scores of all tests
     *
     * Generated from protobuf enum <code>EACH = 1;</code>
     */
    const EACH = 1;
    /**
     * as sum of scores of all tests, but only if all tests are passing
     *
     * Generated from protobuf enum <code>ALL = 2;</code>
     */
    const ALL = 2;
    /**
     * as the lowest score awarded per test
     *
     * Generated from protobuf enum <code>WORST = 3;</code>
     */
    const WORST = 3;
    /**
     * as the highest score awarded per test
     *
     * Generated from protobuf enum <code>BEST = 4;</code>
     */
    const BEST = 4;

    private static $valueToName = [
        self::NO_SCORE => 'NO_SCORE',
        self::EACH => 'EACH',
        self::ALL => 'ALL',
        self::WORST => 'WORST',
        self::BEST => 'BEST',
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

