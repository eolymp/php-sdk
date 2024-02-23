<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/post_service.proto

namespace Eolymp\Discussion\ListPostsInput;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.discussion.ListPostsInput.Sort</code>
 */
class Sort
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_SORT = 0;</code>
     */
    const UNKNOWN_SORT = 0;

    private static $valueToName = [
        self::UNKNOWN_SORT => 'UNKNOWN_SORT',
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
class_alias(Sort::class, \Eolymp\Discussion\ListPostsInput_Sort::class);

