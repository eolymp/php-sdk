<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/webhook/webhook.proto

namespace Eolymp\Webhook\Webhook;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.webhook.Webhook.Patch</code>
 */
class Patch
{
    /**
     * Generated from protobuf enum <code>PATCH_UNKNOWN = 0;</code>
     */
    const PATCH_UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>PATCH_ALL = 1;</code>
     */
    const PATCH_ALL = 1;
    /**
     * Generated from protobuf enum <code>PATCH_NAME = 2;</code>
     */
    const PATCH_NAME = 2;
    /**
     * Generated from protobuf enum <code>PATCH_ENDPOINT = 3;</code>
     */
    const PATCH_ENDPOINT = 3;
    /**
     * Generated from protobuf enum <code>PATCH_INACTIVE = 4;</code>
     */
    const PATCH_INACTIVE = 4;
    /**
     * Generated from protobuf enum <code>PATCH_EVENTS = 5;</code>
     */
    const PATCH_EVENTS = 5;

    private static $valueToName = [
        self::PATCH_UNKNOWN => 'PATCH_UNKNOWN',
        self::PATCH_ALL => 'PATCH_ALL',
        self::PATCH_NAME => 'PATCH_NAME',
        self::PATCH_ENDPOINT => 'PATCH_ENDPOINT',
        self::PATCH_INACTIVE => 'PATCH_INACTIVE',
        self::PATCH_EVENTS => 'PATCH_EVENTS',
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

