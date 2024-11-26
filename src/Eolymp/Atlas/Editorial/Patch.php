<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/editorial.proto

namespace Eolymp\Atlas\Editorial;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.atlas.Editorial.Patch</code>
 */
class Patch
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_PATCH = 0;</code>
     */
    const UNKNOWN_PATCH = 0;
    /**
     * Generated from protobuf enum <code>PATCH_LOCALE = 1;</code>
     */
    const PATCH_LOCALE = 1;
    /**
     * Generated from protobuf enum <code>PATCH_AUTOMATIC = 2;</code>
     */
    const PATCH_AUTOMATIC = 2;
    /**
     * Generated from protobuf enum <code>PATCH_DRAFT = 3;</code>
     */
    const PATCH_DRAFT = 3;
    /**
     * Generated from protobuf enum <code>PATCH_CONTENT = 4;</code>
     */
    const PATCH_CONTENT = 4;
    /**
     * Generated from protobuf enum <code>PATCH_DOWNLOAD_LINK = 5;</code>
     */
    const PATCH_DOWNLOAD_LINK = 5;

    private static $valueToName = [
        self::UNKNOWN_PATCH => 'UNKNOWN_PATCH',
        self::PATCH_LOCALE => 'PATCH_LOCALE',
        self::PATCH_AUTOMATIC => 'PATCH_AUTOMATIC',
        self::PATCH_DRAFT => 'PATCH_DRAFT',
        self::PATCH_CONTENT => 'PATCH_CONTENT',
        self::PATCH_DOWNLOAD_LINK => 'PATCH_DOWNLOAD_LINK',
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
class_alias(Patch::class, \Eolymp\Atlas\Editorial_Patch::class);

