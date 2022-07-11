<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/workspace/project.proto

namespace Eolymp\Workspace\Project;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.workspace.Project.Visibility</code>
 */
class Visibility
{
    /**
     * Reserved, don't use
     *
     * Generated from protobuf enum <code>NONE = 0;</code>
     */
    const NONE = 0;
    /**
     * Private, not visible by others
     *
     * Generated from protobuf enum <code>PRIVATE = 1;</code>
     */
    const PBPRIVATE = 1;
    /**
     * Public, visible to others
     *
     * Generated from protobuf enum <code>PUBLIC = 2;</code>
     */
    const PBPUBLIC = 2;

    private static $valueToName = [
        self::NONE => 'NONE',
        self::PBPRIVATE => 'PBPRIVATE',
        self::PBPUBLIC => 'PBPUBLIC',
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
class_alias(Visibility::class, \Eolymp\Workspace\Project_Visibility::class);

