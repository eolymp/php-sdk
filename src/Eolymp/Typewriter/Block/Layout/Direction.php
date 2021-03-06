<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/typewriter/block.proto

namespace Eolymp\Typewriter\Block\Layout;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.typewriter.Block.Layout.Direction</code>
 */
class Direction
{
    /**
     * Generated from protobuf enum <code>ROW = 0;</code>
     */
    const ROW = 0;
    /**
     * Generated from protobuf enum <code>COLUMN = 1;</code>
     */
    const COLUMN = 1;

    private static $valueToName = [
        self::ROW => 'ROW',
        self::COLUMN => 'COLUMN',
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
class_alias(Direction::class, \Eolymp\Typewriter\Block_Layout_Direction::class);

