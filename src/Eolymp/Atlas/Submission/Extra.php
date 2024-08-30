<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/submission.proto

namespace Eolymp\Atlas\Submission;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.atlas.Submission.Extra</code>
 */
class Extra
{
    /**
     * Generated from protobuf enum <code>NO_EXTRA = 0;</code>
     */
    const NO_EXTRA = 0;
    /**
     * Generated from protobuf enum <code>GROUPS = 3;</code>
     */
    const GROUPS = 3;
    /**
     * Generated from protobuf enum <code>RUNS = 4;</code>
     */
    const RUNS = 4;

    private static $valueToName = [
        self::NO_EXTRA => 'NO_EXTRA',
        self::GROUPS => 'GROUPS',
        self::RUNS => 'RUNS',
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
class_alias(Extra::class, \Eolymp\Atlas\Submission_Extra::class);

