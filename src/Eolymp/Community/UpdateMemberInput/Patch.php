<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/member_service.proto

namespace Eolymp\Community\UpdateMemberInput;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.community.UpdateMemberInput.Patch</code>
 */
class Patch
{
    /**
     * change all properties (same as an empty patch)
     *
     * Generated from protobuf enum <code>ALL = 0;</code>
     */
    const ALL = 0;
    /**
     * change active/inactive flag
     *
     * Generated from protobuf enum <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * change official/unofficial flag
     *
     * Generated from protobuf enum <code>UNOFFICIAL = 2;</code>
     */
    const UNOFFICIAL = 2;
    /**
     * change groups
     *
     * Generated from protobuf enum <code>GROUPS = 3;</code>
     */
    const GROUPS = 3;
    /**
     * add new groups specified in member.groups to the existing ones
     *
     * Generated from protobuf enum <code>GROUPS_ADD = 4;</code>
     */
    const GROUPS_ADD = 4;
    /**
     * remove groups specified in member.groups from the existing ones
     *
     * Generated from protobuf enum <code>GROUPS_REMOVE = 5;</code>
     */
    const GROUPS_REMOVE = 5;
    /**
     * change all account details
     *
     * Generated from protobuf enum <code>ACCOUNT = 100;</code>
     */
    const ACCOUNT = 100;
    /**
     * Generated from protobuf enum <code>USER_NICKNAME = 101;</code>
     */
    const USER_NICKNAME = 101;
    /**
     * Generated from protobuf enum <code>USER_EMAIL = 102;</code>
     */
    const USER_EMAIL = 102;
    /**
     * Generated from protobuf enum <code>USER_PASSWORD = 103;</code>
     */
    const USER_PASSWORD = 103;
    /**
     * Generated from protobuf enum <code>USER_NAME = 104;</code>
     */
    const USER_NAME = 104;
    /**
     * Generated from protobuf enum <code>USER_PICTURE = 105;</code>
     */
    const USER_PICTURE = 105;
    /**
     * Generated from protobuf enum <code>USER_BIRTHDAY = 106;</code>
     */
    const USER_BIRTHDAY = 106;
    /**
     * Generated from protobuf enum <code>USER_COUNTRY = 107;</code>
     */
    const USER_COUNTRY = 107;
    /**
     * Generated from protobuf enum <code>USER_CITY = 108;</code>
     */
    const USER_CITY = 108;
    /**
     * Generated from protobuf enum <code>USER_PREFERENCES = 109;</code>
     */
    const USER_PREFERENCES = 109;
    /**
     * Generated from protobuf enum <code>USER_PREFERENCES_LOCALE = 190;</code>
     */
    const USER_PREFERENCES_LOCALE = 190;
    /**
     * Generated from protobuf enum <code>USER_PREFERENCES_TIMEZONE = 191;</code>
     */
    const USER_PREFERENCES_TIMEZONE = 191;
    /**
     * Generated from protobuf enum <code>USER_PREFERENCES_RUNTIME = 192;</code>
     */
    const USER_PREFERENCES_RUNTIME = 192;
    /**
     * Generated from protobuf enum <code>USER_PREFERENCES_NOTIFICATIONS = 193;</code>
     */
    const USER_PREFERENCES_NOTIFICATIONS = 193;
    /**
     * Generated from protobuf enum <code>TEAM_NAME = 200;</code>
     */
    const TEAM_NAME = 200;
    /**
     * Generated from protobuf enum <code>GHOST_NAME = 300;</code>
     */
    const GHOST_NAME = 300;
    /**
     * change attributes
     *
     * Generated from protobuf enum <code>ATTRIBUTES = 900;</code>
     */
    const ATTRIBUTES = 900;

    private static $valueToName = [
        self::ALL => 'ALL',
        self::ACTIVE => 'ACTIVE',
        self::UNOFFICIAL => 'UNOFFICIAL',
        self::GROUPS => 'GROUPS',
        self::GROUPS_ADD => 'GROUPS_ADD',
        self::GROUPS_REMOVE => 'GROUPS_REMOVE',
        self::ACCOUNT => 'ACCOUNT',
        self::USER_NICKNAME => 'USER_NICKNAME',
        self::USER_EMAIL => 'USER_EMAIL',
        self::USER_PASSWORD => 'USER_PASSWORD',
        self::USER_NAME => 'USER_NAME',
        self::USER_PICTURE => 'USER_PICTURE',
        self::USER_BIRTHDAY => 'USER_BIRTHDAY',
        self::USER_COUNTRY => 'USER_COUNTRY',
        self::USER_CITY => 'USER_CITY',
        self::USER_PREFERENCES => 'USER_PREFERENCES',
        self::USER_PREFERENCES_LOCALE => 'USER_PREFERENCES_LOCALE',
        self::USER_PREFERENCES_TIMEZONE => 'USER_PREFERENCES_TIMEZONE',
        self::USER_PREFERENCES_RUNTIME => 'USER_PREFERENCES_RUNTIME',
        self::USER_PREFERENCES_NOTIFICATIONS => 'USER_PREFERENCES_NOTIFICATIONS',
        self::TEAM_NAME => 'TEAM_NAME',
        self::GHOST_NAME => 'GHOST_NAME',
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
class_alias(Patch::class, \Eolymp\Community\UpdateMemberInput_Patch::class);

