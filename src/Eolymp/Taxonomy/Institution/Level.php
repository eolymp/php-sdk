<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/taxonomy/institution.proto

namespace Eolymp\Taxonomy\Institution;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.taxonomy.Institution.Level</code>
 */
class Level
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_LEVEL = 0;</code>
     */
    const UNKNOWN_LEVEL = 0;
    /**
     * under 5 yo.: kindergartens, etc. (here mostly for completeness)
     *
     * Generated from protobuf enum <code>PRESCHOOL = 1;</code>
     */
    const PRESCHOOL = 1;
    /**
     * 5-11 yo.: elementary schools, etc.
     *
     * Generated from protobuf enum <code>PRIMARY = 2;</code>
     */
    const PRIMARY = 2;
    /**
     * 11-18 yo.: high schools, gymnasiums, etc.
     *
     * Generated from protobuf enum <code>SECONDARY = 3;</code>
     */
    const SECONDARY = 3;
    /**
     * 18+ yo.: universities, colleges, etc.
     *
     * Generated from protobuf enum <code>TERTIARY = 4;</code>
     */
    const TERTIARY = 4;

    private static $valueToName = [
        self::UNKNOWN_LEVEL => 'UNKNOWN_LEVEL',
        self::PRESCHOOL => 'PRESCHOOL',
        self::PRIMARY => 'PRIMARY',
        self::SECONDARY => 'SECONDARY',
        self::TERTIARY => 'TERTIARY',
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
class_alias(Level::class, \Eolymp\Taxonomy\Institution_Level::class);

