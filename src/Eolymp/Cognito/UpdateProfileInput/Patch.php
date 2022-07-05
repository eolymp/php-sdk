<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/cognito/cognito.proto

namespace Eolymp\Cognito\UpdateProfileInput;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.cognito.UpdateProfileInput.Patch</code>
 */
class Patch
{
    /**
     * Generated from protobuf enum <code>USERNAME = 0;</code>
     */
    const USERNAME = 0;
    /**
     * Generated from protobuf enum <code>EMAIL = 1;</code>
     */
    const EMAIL = 1;
    /**
     * Generated from protobuf enum <code>NAME = 2;</code>
     */
    const NAME = 2;
    /**
     * Generated from protobuf enum <code>COMPANY = 3;</code>
     */
    const COMPANY = 3;
    /**
     * Generated from protobuf enum <code>OCCUPATION = 4;</code>
     */
    const OCCUPATION = 4;
    /**
     * Generated from protobuf enum <code>COUNTRY = 5;</code>
     */
    const COUNTRY = 5;
    /**
     * Generated from protobuf enum <code>CITY = 6;</code>
     */
    const CITY = 6;
    /**
     * Generated from protobuf enum <code>BIRTHDAY = 7;</code>
     */
    const BIRTHDAY = 7;

    private static $valueToName = [
        self::USERNAME => 'USERNAME',
        self::EMAIL => 'EMAIL',
        self::NAME => 'NAME',
        self::COMPANY => 'COMPANY',
        self::OCCUPATION => 'OCCUPATION',
        self::COUNTRY => 'COUNTRY',
        self::CITY => 'CITY',
        self::BIRTHDAY => 'BIRTHDAY',
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
class_alias(Patch::class, \Eolymp\Cognito\UpdateProfileInput_Patch::class);

