<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/atlas/solution.proto

namespace Eolymp\Atlas\Solution;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.atlas.Solution.Type</code>
 */
class Type
{
    /**
     * Generated from protobuf enum <code>UNSET = 0;</code>
     */
    const PBUNSET = 0;
    /**
     * Generated from protobuf enum <code>CORRECT = 1;</code>
     */
    const CORRECT = 1;
    /**
     * Generated from protobuf enum <code>INCORRECT = 2;</code>
     */
    const INCORRECT = 2;
    /**
     * Generated from protobuf enum <code>WRONG_ANSWER = 3;</code>
     */
    const WRONG_ANSWER = 3;
    /**
     * Generated from protobuf enum <code>TIMEOUT = 4;</code>
     */
    const TIMEOUT = 4;
    /**
     * Generated from protobuf enum <code>OVERFLOW = 5;</code>
     */
    const OVERFLOW = 5;
    /**
     * Generated from protobuf enum <code>TIMEOUT_OR_ACCEPTED = 6;</code>
     */
    const TIMEOUT_OR_ACCEPTED = 6;
    /**
     * Generated from protobuf enum <code>OVERFLOW_OR_ACCEPTED = 7;</code>
     */
    const OVERFLOW_OR_ACCEPTED = 7;
    /**
     * Generated from protobuf enum <code>DONT_RUN = 8;</code>
     */
    const DONT_RUN = 8;
    /**
     * Generated from protobuf enum <code>FAILURE = 9;</code>
     */
    const FAILURE = 9;

    private static $valueToName = [
        self::PBUNSET => 'UNSET',
        self::CORRECT => 'CORRECT',
        self::INCORRECT => 'INCORRECT',
        self::WRONG_ANSWER => 'WRONG_ANSWER',
        self::TIMEOUT => 'TIMEOUT',
        self::OVERFLOW => 'OVERFLOW',
        self::TIMEOUT_OR_ACCEPTED => 'TIMEOUT_OR_ACCEPTED',
        self::OVERFLOW_OR_ACCEPTED => 'OVERFLOW_OR_ACCEPTED',
        self::DONT_RUN => 'DONT_RUN',
        self::FAILURE => 'FAILURE',
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

