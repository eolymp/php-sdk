<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/discussion/post.proto

namespace Eolymp\Discussion\Post;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.discussion.Post.Extra</code>
 */
class Extra
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_EXTRA = 0;</code>
     */
    const UNKNOWN_EXTRA = 0;
    /**
     * include content source (original Markdown, LaTeX etc)
     *
     * Generated from protobuf enum <code>CONTENT_VALUE = 1;</code>
     */
    const CONTENT_VALUE = 1;
    /**
     * include rendered content in ECM
     *
     * Generated from protobuf enum <code>CONTENT_RENDER = 2;</code>
     */
    const CONTENT_RENDER = 2;
    /**
     * include rendered but trimmed message in ECM
     *
     * Generated from protobuf enum <code>PREVIEW = 3;</code>
     */
    const PREVIEW = 3;
    /**
     * include vote field
     *
     * Generated from protobuf enum <code>VOTE = 4;</code>
     */
    const VOTE = 4;

    private static $valueToName = [
        self::UNKNOWN_EXTRA => 'UNKNOWN_EXTRA',
        self::CONTENT_VALUE => 'CONTENT_VALUE',
        self::CONTENT_RENDER => 'CONTENT_RENDER',
        self::PREVIEW => 'PREVIEW',
        self::VOTE => 'VOTE',
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

