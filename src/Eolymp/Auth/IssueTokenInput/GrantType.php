<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/auth/oauth2_service.proto

namespace Eolymp\Auth\IssueTokenInput;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.auth.IssueTokenInput.GrantType</code>
 */
class GrantType
{
    /**
     * Generated from protobuf enum <code>NONE = 0;</code>
     */
    const NONE = 0;
    /**
     * Generated from protobuf enum <code>PASSWORD = 1;</code>
     */
    const PASSWORD = 1;
    /**
     * Generated from protobuf enum <code>AUTHORIZATION_CODE = 2;</code>
     */
    const AUTHORIZATION_CODE = 2;
    /**
     * Generated from protobuf enum <code>REFRESH_TOKEN = 3;</code>
     */
    const REFRESH_TOKEN = 3;
    /**
     * Generated from protobuf enum <code>EOLYMP_SIGNIN = 4;</code>
     */
    const EOLYMP_SIGNIN = 4;

    private static $valueToName = [
        self::NONE => 'NONE',
        self::PASSWORD => 'PASSWORD',
        self::AUTHORIZATION_CODE => 'AUTHORIZATION_CODE',
        self::REFRESH_TOKEN => 'REFRESH_TOKEN',
        self::EOLYMP_SIGNIN => 'EOLYMP_SIGNIN',
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

