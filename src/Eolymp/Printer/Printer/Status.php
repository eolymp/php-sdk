<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/printer/printer.proto

namespace Eolymp\Printer\Printer;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.printer.Printer.Status</code>
 */
class Status
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_STATUS = 0;</code>
     */
    const UNKNOWN_STATUS = 0;
    /**
     * Generated from protobuf enum <code>OFFLINE = 1;</code>
     */
    const OFFLINE = 1;
    /**
     * Generated from protobuf enum <code>READY = 2;</code>
     */
    const READY = 2;

    private static $valueToName = [
        self::UNKNOWN_STATUS => 'UNKNOWN_STATUS',
        self::OFFLINE => 'OFFLINE',
        self::READY => 'READY',
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
class_alias(Status::class, \Eolymp\Printer\Printer_Status::class);

