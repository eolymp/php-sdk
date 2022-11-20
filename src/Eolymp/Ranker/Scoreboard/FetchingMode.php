<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/ranker/scoreboard.proto

namespace Eolymp\Ranker\Scoreboard;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.ranker.Scoreboard.FetchingMode</code>
 */
class FetchingMode
{
    /**
     * Actual score returns score at the moment of participation. This mode is intended to show scoreboard to
     * participants and guests. This mode returns frozen score during freeze time and latest score otherwise.
     *
     * Generated from protobuf enum <code>ACTUAL = 0;</code>
     */
    const ACTUAL = 0;
    /**
     * Punctual score returns score at particular moment, use time_offset parameter to specify time. This mode is
     * intended to show historical score at a given moment. Value will be capped by freeze time if user does not
     * have admin permissions.
     *
     * Generated from protobuf enum <code>PUNCTUAL = 1;</code>
     */
    const PUNCTUAL = 1;
    /**
     * Latest score returns the latest score recorded. This mode is intended for admins to see current scoreboard.
     * Users without admin permissions will get PermissionDenied error when requesting score in latest mode.
     *
     * Generated from protobuf enum <code>LATEST = 2;</code>
     */
    const LATEST = 2;
    /**
     * Frozen score returns the latest score recorded before freezing time. This mode is intended for admins to see
     * frozen scoreboard.
     *
     * Generated from protobuf enum <code>FROZEN = 3;</code>
     */
    const FROZEN = 3;

    private static $valueToName = [
        self::ACTUAL => 'ACTUAL',
        self::PUNCTUAL => 'PUNCTUAL',
        self::LATEST => 'LATEST',
        self::FROZEN => 'FROZEN',
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
class_alias(FetchingMode::class, \Eolymp\Ranker\Scoreboard_FetchingMode::class);

