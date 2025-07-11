<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
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
    /**
     * Generated from protobuf enum <code>PUBLISHED_AT = 1;</code>
     */
    const PUBLISHED_AT = 1;
    /**
     * Generated from protobuf enum <code>CREATED_AT = 2;</code>
     */
    const CREATED_AT = 2;
    /**
     * Generated from protobuf enum <code>VOTE_COUNT = 3;</code>
     */
    const VOTE_COUNT = 3;
    /**
     * Generated from protobuf enum <code>REPLY_COUNT = 4;</code>
     */
    const REPLY_COUNT = 4;
    /**
     * Generated from protobuf enum <code>POPULARITY = 5;</code>
     */
    const POPULARITY = 5;

    private static $valueToName = [
        self::UNKNOWN_SORT => 'UNKNOWN_SORT',
        self::PUBLISHED_AT => 'PUBLISHED_AT',
        self::CREATED_AT => 'CREATED_AT',
        self::VOTE_COUNT => 'VOTE_COUNT',
        self::REPLY_COUNT => 'REPLY_COUNT',
        self::POPULARITY => 'POPULARITY',
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

