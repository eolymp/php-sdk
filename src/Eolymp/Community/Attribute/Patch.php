<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/attribute.proto

namespace Eolymp\Community\Attribute;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.community.Attribute.Patch</code>
 */
class Patch
{
    /**
     * Generated from protobuf enum <code>PATCH_ALL = 0;</code>
     */
    const PATCH_ALL = 0;
    /**
     * Generated from protobuf enum <code>PATCH_LABEL = 1;</code>
     */
    const PATCH_LABEL = 1;
    /**
     * Generated from protobuf enum <code>PATCH_HELP = 2;</code>
     */
    const PATCH_HELP = 2;
    /**
     * Generated from protobuf enum <code>PATCH_TYPE = 3;</code>
     */
    const PATCH_TYPE = 3;
    /**
     * Generated from protobuf enum <code>PATCH_INDEX = 4;</code>
     */
    const PATCH_INDEX = 4;
    /**
     * Generated from protobuf enum <code>PATCH_REQUIRED = 5;</code>
     */
    const PATCH_REQUIRED = 5;
    /**
     * Generated from protobuf enum <code>PATCH_READONLY = 6;</code>
     */
    const PATCH_READONLY = 6;
    /**
     * Generated from protobuf enum <code>PATCH_VISIBILITY = 7;</code>
     */
    const PATCH_VISIBILITY = 7;
    /**
     * Generated from protobuf enum <code>PATCH_REGEXP = 8;</code>
     */
    const PATCH_REGEXP = 8;
    /**
     * Generated from protobuf enum <code>PATCH_MIN = 9;</code>
     */
    const PATCH_MIN = 9;
    /**
     * Generated from protobuf enum <code>PATCH_MAX = 10;</code>
     */
    const PATCH_MAX = 10;
    /**
     * Generated from protobuf enum <code>PATCH_CHOICES = 11;</code>
     */
    const PATCH_CHOICES = 11;
    /**
     * Generated from protobuf enum <code>PATCH_CONSTRAINTS = 12;</code>
     */
    const PATCH_CONSTRAINTS = 12;

    private static $valueToName = [
        self::PATCH_ALL => 'PATCH_ALL',
        self::PATCH_LABEL => 'PATCH_LABEL',
        self::PATCH_HELP => 'PATCH_HELP',
        self::PATCH_TYPE => 'PATCH_TYPE',
        self::PATCH_INDEX => 'PATCH_INDEX',
        self::PATCH_REQUIRED => 'PATCH_REQUIRED',
        self::PATCH_READONLY => 'PATCH_READONLY',
        self::PATCH_VISIBILITY => 'PATCH_VISIBILITY',
        self::PATCH_REGEXP => 'PATCH_REGEXP',
        self::PATCH_MIN => 'PATCH_MIN',
        self::PATCH_MAX => 'PATCH_MAX',
        self::PATCH_CHOICES => 'PATCH_CHOICES',
        self::PATCH_CONSTRAINTS => 'PATCH_CONSTRAINTS',
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
class_alias(Patch::class, \Eolymp\Community\Attribute_Patch::class);
