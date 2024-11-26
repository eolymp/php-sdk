<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/statement.proto

namespace Eolymp\Atlas\Statement;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.atlas.Statement.Patch</code>
 */
class Patch
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_PATCH = 0;</code>
     */
    const UNKNOWN_PATCH = 0;
    /**
     * Generated from protobuf enum <code>PATCH_ALL = 1;</code>
     */
    const PATCH_ALL = 1;
    /**
     * Generated from protobuf enum <code>PATCH_LOCALE = 2;</code>
     */
    const PATCH_LOCALE = 2;
    /**
     * Generated from protobuf enum <code>PATCH_AUTOMATIC = 8;</code>
     */
    const PATCH_AUTOMATIC = 8;
    /**
     * Generated from protobuf enum <code>PATCH_DRAFT = 9;</code>
     */
    const PATCH_DRAFT = 9;
    /**
     * Generated from protobuf enum <code>PATCH_TITLE = 3;</code>
     */
    const PATCH_TITLE = 3;
    /**
     * Generated from protobuf enum <code>PATCH_CONTENT = 4;</code>
     */
    const PATCH_CONTENT = 4;
    /**
     * Generated from protobuf enum <code>PATCH_DOWNLOAD_LINK = 5;</code>
     */
    const PATCH_DOWNLOAD_LINK = 5;
    /**
     * Generated from protobuf enum <code>PATCH_AUTHOR = 6;</code>
     */
    const PATCH_AUTHOR = 6;
    /**
     * Generated from protobuf enum <code>PATCH_SOURCE = 7;</code>
     */
    const PATCH_SOURCE = 7;

    private static $valueToName = [
        self::UNKNOWN_PATCH => 'UNKNOWN_PATCH',
        self::PATCH_ALL => 'PATCH_ALL',
        self::PATCH_LOCALE => 'PATCH_LOCALE',
        self::PATCH_AUTOMATIC => 'PATCH_AUTOMATIC',
        self::PATCH_DRAFT => 'PATCH_DRAFT',
        self::PATCH_TITLE => 'PATCH_TITLE',
        self::PATCH_CONTENT => 'PATCH_CONTENT',
        self::PATCH_DOWNLOAD_LINK => 'PATCH_DOWNLOAD_LINK',
        self::PATCH_AUTHOR => 'PATCH_AUTHOR',
        self::PATCH_SOURCE => 'PATCH_SOURCE',
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
class_alias(Patch::class, \Eolymp\Atlas\Statement_Patch::class);

