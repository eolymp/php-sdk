<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/post_service.proto

namespace Eolymp\Discussion\UpdatePostInput;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.discussion.UpdatePostInput.Patch</code>
 */
class Patch
{
    /**
     * Generated from protobuf enum <code>ALL = 0;</code>
     */
    const ALL = 0;
    /**
     * Generated from protobuf enum <code>CONTENT = 1;</code>
     */
    const CONTENT = 1;
    /**
     * Generated from protobuf enum <code>LABELS = 2;</code>
     */
    const LABELS = 2;
    /**
     * Generated from protobuf enum <code>TYPE_ID = 3;</code>
     */
    const TYPE_ID = 3;
    /**
     * Generated from protobuf enum <code>LOCALE = 4;</code>
     */
    const LOCALE = 4;
    /**
     * Generated from protobuf enum <code>DRAFT = 5;</code>
     */
    const DRAFT = 5;
    /**
     * Generated from protobuf enum <code>MODERATION = 6;</code>
     */
    const MODERATION = 6;

    private static $valueToName = [
        self::ALL => 'ALL',
        self::CONTENT => 'CONTENT',
        self::LABELS => 'LABELS',
        self::TYPE_ID => 'TYPE_ID',
        self::LOCALE => 'LOCALE',
        self::DRAFT => 'DRAFT',
        self::MODERATION => 'MODERATION',
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
class_alias(Patch::class, \Eolymp\Discussion\UpdatePostInput_Patch::class);

