<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/acl/events.proto

namespace Eolymp\Acl\PermissionChangeRecord;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.acl.PermissionChangeRecord.Operation</code>
 */
class Operation
{
    /**
     * Generated from protobuf enum <code>NO_OPERATION = 0;</code>
     */
    const NO_OPERATION = 0;
    /**
     * Generated from protobuf enum <code>GRANT = 1;</code>
     */
    const GRANT = 1;
    /**
     * Generated from protobuf enum <code>REVOKE = 2;</code>
     */
    const REVOKE = 2;

    private static $valueToName = [
        self::NO_OPERATION => 'NO_OPERATION',
        self::GRANT => 'GRANT',
        self::REVOKE => 'REVOKE',
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
class_alias(Operation::class, \Eolymp\Acl\PermissionChangeRecord_Operation::class);

