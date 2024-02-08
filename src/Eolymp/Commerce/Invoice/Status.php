<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/commerce/invoice.proto

namespace Eolymp\Commerce\Invoice;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.commerce.Invoice.Status</code>
 */
class Status
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_STATUS = 0;</code>
     */
    const UNKNOWN_STATUS = 0;
    /**
     * Generated from protobuf enum <code>DRAFT = 1;</code>
     */
    const DRAFT = 1;
    /**
     * Generated from protobuf enum <code>OPEN = 2;</code>
     */
    const OPEN = 2;
    /**
     * Generated from protobuf enum <code>PAID = 3;</code>
     */
    const PAID = 3;
    /**
     * Generated from protobuf enum <code>UNCOLLECTIBLE = 4;</code>
     */
    const UNCOLLECTIBLE = 4;
    /**
     * Generated from protobuf enum <code>VOID = 5;</code>
     */
    const VOID = 5;

    private static $valueToName = [
        self::UNKNOWN_STATUS => 'UNKNOWN_STATUS',
        self::DRAFT => 'DRAFT',
        self::OPEN => 'OPEN',
        self::PAID => 'PAID',
        self::UNCOLLECTIBLE => 'UNCOLLECTIBLE',
        self::VOID => 'VOID',
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
class_alias(Status::class, \Eolymp\Commerce\Invoice_Status::class);
