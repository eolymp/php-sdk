<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/content/variant.proto

namespace Eolymp\Content\Variant;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.content.Variant.Extra</code>
 */
class Extra
{
    /**
     * Generated from protobuf enum <code>NO_EXTRA = 0;</code>
     */
    const NO_EXTRA = 0;
    /**
     * Generated from protobuf enum <code>CONTENT_RENDER = 1;</code>
     */
    const CONTENT_RENDER = 1;
    /**
     * Generated from protobuf enum <code>CONTENT_VALUE = 2;</code>
     */
    const CONTENT_VALUE = 2;

    private static $valueToName = [
        self::NO_EXTRA => 'NO_EXTRA',
        self::CONTENT_RENDER => 'CONTENT_RENDER',
        self::CONTENT_VALUE => 'CONTENT_VALUE',
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
class_alias(Extra::class, \Eolymp\Content\Variant_Extra::class);

