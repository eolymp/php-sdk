<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/acl/action.proto

namespace Eolymp\Acl;

use UnexpectedValueException;

/**
 * Protobuf type <code>eolymp.acl.Action</code>
 */
class Action
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_ACTION = 0;</code>
     */
    const UNKNOWN_ACTION = 0;
    /**
     * Generated from protobuf enum <code>SPACE_READ = 11;</code>
     */
    const SPACE_READ = 11;
    /**
     * Generated from protobuf enum <code>SPACE_WRITE = 13;</code>
     */
    const SPACE_WRITE = 13;
    /**
     * Generated from protobuf enum <code>SPACE_DELETE = 16;</code>
     */
    const SPACE_DELETE = 16;
    /**
     * Generated from protobuf enum <code>BILLING_READ = 12;</code>
     */
    const BILLING_READ = 12;
    /**
     * Generated from protobuf enum <code>BILLING_WRITE = 15;</code>
     */
    const BILLING_WRITE = 15;
    /**
     * view/list space permissions
     *
     * Generated from protobuf enum <code>POLICY_READ = 20;</code>
     */
    const POLICY_READ = 20;
    /**
     * create/update space permissions
     *
     * Generated from protobuf enum <code>POLICY_WRITE = 21;</code>
     */
    const POLICY_WRITE = 21;
    /**
     * Generated from protobuf enum <code>PROBLEM_READ = 31;</code>
     */
    const PROBLEM_READ = 31;
    /**
     * Generated from protobuf enum <code>PROBLEM_WRITE = 36;</code>
     */
    const PROBLEM_WRITE = 36;
    /**
     * access to testing configuration, tests, solutions, submissions etc
     *
     * Generated from protobuf enum <code>PROBLEM_TESTING = 34;</code>
     */
    const PROBLEM_TESTING = 34;
    /**
     * Generated from protobuf enum <code>CONTEST_READ = 51;</code>
     */
    const CONTEST_READ = 51;
    /**
     * Generated from protobuf enum <code>CONTEST_WRITE = 62;</code>
     */
    const CONTEST_WRITE = 62;
    /**
     * Generated from protobuf enum <code>TICKET_READ = 70;</code>
     */
    const TICKET_READ = 70;
    /**
     * modify tickets: reply, close etc
     *
     * Generated from protobuf enum <code>TICKET_WRITE = 71;</code>
     */
    const TICKET_WRITE = 71;
    /**
     * Generated from protobuf enum <code>MEMBER_READ = 91;</code>
     */
    const MEMBER_READ = 91;
    /**
     * Generated from protobuf enum <code>MEMBER_WRITE = 92;</code>
     */
    const MEMBER_WRITE = 92;
    /**
     * Generated from protobuf enum <code>SCOREBOARD_READ = 111;</code>
     */
    const SCOREBOARD_READ = 111;
    /**
     * Generated from protobuf enum <code>SCOREBOARD_WRITE = 112;</code>
     */
    const SCOREBOARD_WRITE = 112;
    /**
     * Generated from protobuf enum <code>CONTENT_READ = 120;</code>
     */
    const CONTENT_READ = 120;
    /**
     * Generated from protobuf enum <code>CONTENT_WRITE = 121;</code>
     */
    const CONTENT_WRITE = 121;
    /**
     * Generated from protobuf enum <code>COURSE_READ = 130;</code>
     */
    const COURSE_READ = 130;
    /**
     * Generated from protobuf enum <code>COURSE_WRITE = 131;</code>
     */
    const COURSE_WRITE = 131;
    /**
     * limited write permission to add students to the course and manage assignments
     *
     * Generated from protobuf enum <code>COURSE_ASSIGN = 132;</code>
     */
    const COURSE_ASSIGN = 132;
    /**
     * Generated from protobuf enum <code>POST_READ = 140;</code>
     */
    const POST_READ = 140;
    /**
     * Generated from protobuf enum <code>POST_WRITE = 141;</code>
     */
    const POST_WRITE = 141;

    private static $valueToName = [
        self::UNKNOWN_ACTION => 'UNKNOWN_ACTION',
        self::SPACE_READ => 'SPACE_READ',
        self::SPACE_WRITE => 'SPACE_WRITE',
        self::SPACE_DELETE => 'SPACE_DELETE',
        self::BILLING_READ => 'BILLING_READ',
        self::BILLING_WRITE => 'BILLING_WRITE',
        self::POLICY_READ => 'POLICY_READ',
        self::POLICY_WRITE => 'POLICY_WRITE',
        self::PROBLEM_READ => 'PROBLEM_READ',
        self::PROBLEM_WRITE => 'PROBLEM_WRITE',
        self::PROBLEM_TESTING => 'PROBLEM_TESTING',
        self::CONTEST_READ => 'CONTEST_READ',
        self::CONTEST_WRITE => 'CONTEST_WRITE',
        self::TICKET_READ => 'TICKET_READ',
        self::TICKET_WRITE => 'TICKET_WRITE',
        self::MEMBER_READ => 'MEMBER_READ',
        self::MEMBER_WRITE => 'MEMBER_WRITE',
        self::SCOREBOARD_READ => 'SCOREBOARD_READ',
        self::SCOREBOARD_WRITE => 'SCOREBOARD_WRITE',
        self::CONTENT_READ => 'CONTENT_READ',
        self::CONTENT_WRITE => 'CONTENT_WRITE',
        self::COURSE_READ => 'COURSE_READ',
        self::COURSE_WRITE => 'COURSE_WRITE',
        self::COURSE_ASSIGN => 'COURSE_ASSIGN',
        self::POST_READ => 'POST_READ',
        self::POST_WRITE => 'POST_WRITE',
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

