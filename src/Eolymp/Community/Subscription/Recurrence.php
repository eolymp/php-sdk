<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/subscription.proto

namespace Eolymp\Community\Subscription;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.community.Subscription.Recurrence</code>
 */
class Recurrence
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_RECURRENCE = 0;</code>
     */
    const UNKNOWN_RECURRENCE = 0;
    /**
     * Generated from protobuf enum <code>MONTHLY = 1;</code>
     */
    const MONTHLY = 1;
    /**
     * Generated from protobuf enum <code>YEARLY = 2;</code>
     */
    const YEARLY = 2;

    private static $valueToName = [
        self::UNKNOWN_RECURRENCE => 'UNKNOWN_RECURRENCE',
        self::MONTHLY => 'MONTHLY',
        self::YEARLY => 'YEARLY',
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
class_alias(Recurrence::class, \Eolymp\Community\Subscription_Recurrence::class);

