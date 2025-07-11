<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/taxonomy/institution.proto

namespace Eolymp\Taxonomy\Institution;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.taxonomy.Institution.Governance</code>
 */
class Governance
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_GOVERNANCE = 0;</code>
     */
    const UNKNOWN_GOVERNANCE = 0;
    /**
     * Generated from protobuf enum <code>PUBLIC = 1;</code>
     */
    const PBPUBLIC = 1;
    /**
     * Generated from protobuf enum <code>PRIVATE = 2;</code>
     */
    const PBPRIVATE = 2;
    /**
     * Generated from protobuf enum <code>CHARTER = 3;</code>
     */
    const CHARTER = 3;

    private static $valueToName = [
        self::UNKNOWN_GOVERNANCE => 'UNKNOWN_GOVERNANCE',
        self::PBPUBLIC => 'PUBLIC',
        self::PBPRIVATE => 'PRIVATE',
        self::CHARTER => 'CHARTER',
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

