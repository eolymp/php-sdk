<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/account_service.proto

namespace Eolymp\Community\UpdateAccountInput;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.community.UpdateAccountInput.Patch</code>
 */
class Patch
{
    /**
     * Generated from protobuf enum <code>ALL = 0;</code>
     */
    const ALL = 0;
    /**
     * Generated from protobuf enum <code>EMAIL = 1;</code>
     */
    const EMAIL = 1;
    /**
     * Generated from protobuf enum <code>NICKNAME = 2;</code>
     */
    const NICKNAME = 2;
    /**
     * Generated from protobuf enum <code>PASSWORD = 3;</code>
     */
    const PASSWORD = 3;
    /**
     * Generated from protobuf enum <code>NAME = 4;</code>
     */
    const NAME = 4;
    /**
     * Generated from protobuf enum <code>PICTURE = 5;</code>
     */
    const PICTURE = 5;
    /**
     * Generated from protobuf enum <code>BIRTHDAY = 6;</code>
     */
    const BIRTHDAY = 6;
    /**
     * Generated from protobuf enum <code>COUNTRY = 7;</code>
     */
    const COUNTRY = 7;
    /**
     * Generated from protobuf enum <code>CITY = 8;</code>
     */
    const CITY = 8;
    /**
     * Generated from protobuf enum <code>PREFERRED_LOCALE = 101;</code>
     */
    const PREFERRED_LOCALE = 101;
    /**
     * Generated from protobuf enum <code>PREFERRED_TIMEZONE = 102;</code>
     */
    const PREFERRED_TIMEZONE = 102;
    /**
     * Generated from protobuf enum <code>PREFERRED_RUNTIME = 103;</code>
     */
    const PREFERRED_RUNTIME = 103;
    /**
     * Generated from protobuf enum <code>ATTRIBUTES = 900;</code>
     */
    const ATTRIBUTES = 900;

    private static $valueToName = [
        self::ALL => 'ALL',
        self::EMAIL => 'EMAIL',
        self::NICKNAME => 'NICKNAME',
        self::PASSWORD => 'PASSWORD',
        self::NAME => 'NAME',
        self::PICTURE => 'PICTURE',
        self::BIRTHDAY => 'BIRTHDAY',
        self::COUNTRY => 'COUNTRY',
        self::CITY => 'CITY',
        self::PREFERRED_LOCALE => 'PREFERRED_LOCALE',
        self::PREFERRED_TIMEZONE => 'PREFERRED_TIMEZONE',
        self::PREFERRED_RUNTIME => 'PREFERRED_RUNTIME',
        self::ATTRIBUTES => 'ATTRIBUTES',
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
class_alias(Patch::class, \Eolymp\Community\UpdateAccountInput_Patch::class);
