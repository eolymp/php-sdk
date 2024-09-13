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
     * view quota information
     *
     * Generated from protobuf enum <code>DESCRIBE_SPACE_QUOTA = 10;</code>
     */
    const DESCRIBE_SPACE_QUOTA = 10;
    /**
     * view quota information
     *
     * Generated from protobuf enum <code>DESCRIBE_SPACE_CONFIG = 11;</code>
     */
    const DESCRIBE_SPACE_CONFIG = 11;
    /**
     * Generated from protobuf enum <code>DESCRIBE_SPACE_BILLING = 12;</code>
     */
    const DESCRIBE_SPACE_BILLING = 12;
    /**
     * modify space parameters
     *
     * Generated from protobuf enum <code>UPDATE_SPACE = 13;</code>
     */
    const UPDATE_SPACE = 13;
    /**
     * Generated from protobuf enum <code>UPDATE_SPACE_CONFIG = 14;</code>
     */
    const UPDATE_SPACE_CONFIG = 14;
    /**
     * Generated from protobuf enum <code>UPDATE_SPACE_BILLING = 15;</code>
     */
    const UPDATE_SPACE_BILLING = 15;
    /**
     * delete space
     *
     * Generated from protobuf enum <code>DELETE_SPACE = 16;</code>
     */
    const DELETE_SPACE = 16;
    /**
     * view/list space permissions
     *
     * Generated from protobuf enum <code>DESCRIBE_POLICY = 20;</code>
     */
    const DESCRIBE_POLICY = 20;
    /**
     * create/update space permissions
     *
     * Generated from protobuf enum <code>UPDATE_POLICY = 21;</code>
     */
    const UPDATE_POLICY = 21;
    /**
     * create problems
     *
     * Generated from protobuf enum <code>CREATE_PROBLEM = 30;</code>
     */
    const CREATE_PROBLEM = 30;
    /**
     * view problems (excl. invisible)
     *
     * Generated from protobuf enum <code>DESCRIBE_PROBLEM = 31;</code>
     */
    const DESCRIBE_PROBLEM = 31;
    /**
     * view testing configuration for problems (incl. tests)
     *
     * Generated from protobuf enum <code>DESCRIBE_PROBLEM_EDITORIAL = 32;</code>
     */
    const DESCRIBE_PROBLEM_EDITORIAL = 32;
    /**
     * view testing configuration for problems (incl. tests)
     *
     * Generated from protobuf enum <code>DESCRIBE_PROBLEM_HISTORY = 33;</code>
     */
    const DESCRIBE_PROBLEM_HISTORY = 33;
    /**
     * view testing configuration for problems (incl. tests)
     *
     * Generated from protobuf enum <code>DESCRIBE_PROBLEM_TESTING = 34;</code>
     */
    const DESCRIBE_PROBLEM_TESTING = 34;
    /**
     * view testing configuration for problems (incl. tests)
     *
     * Generated from protobuf enum <code>DESCRIBE_PROBLEM_SUBMISSION = 35;</code>
     */
    const DESCRIBE_PROBLEM_SUBMISSION = 35;
    /**
     * modify problems (except visibility and testing config)
     *
     * Generated from protobuf enum <code>UPDATE_PROBLEM = 36;</code>
     */
    const UPDATE_PROBLEM = 36;
    /**
     * modify problems (except visibility and testing config)
     *
     * Generated from protobuf enum <code>UPDATE_PROBLEM_EDITORIAL = 37;</code>
     */
    const UPDATE_PROBLEM_EDITORIAL = 37;
    /**
     * modify visibility for problems
     *
     * Generated from protobuf enum <code>UPDATE_PROBLEM_VISIBILITY = 38;</code>
     */
    const UPDATE_PROBLEM_VISIBILITY = 38;
    /**
     * modify testing configuration for problems
     *
     * Generated from protobuf enum <code>UPDATE_PROBLEM_TESTING = 39;</code>
     */
    const UPDATE_PROBLEM_TESTING = 39;
    /**
     * delete problems
     *
     * Generated from protobuf enum <code>DELETE_PROBLEM = 40;</code>
     */
    const DELETE_PROBLEM = 40;
    /**
     * submit problem (create submissions)
     *
     * Generated from protobuf enum <code>SUBMIT_PROBLEM = 41;</code>
     */
    const SUBMIT_PROBLEM = 41;
    /**
     * retest problem submissions
     *
     * Generated from protobuf enum <code>RETEST_PROBLEM = 42;</code>
     */
    const RETEST_PROBLEM = 42;
    /**
     * Generated from protobuf enum <code>CREATE_CONTEST = 50;</code>
     */
    const CREATE_CONTEST = 50;
    /**
     * Generated from protobuf enum <code>DESCRIBE_CONTEST = 51;</code>
     */
    const DESCRIBE_CONTEST = 51;
    /**
     * Generated from protobuf enum <code>DESCRIBE_CONTEST_ANNOUNCEMENT = 56;</code>
     */
    const DESCRIBE_CONTEST_ANNOUNCEMENT = 56;
    /**
     * Generated from protobuf enum <code>DESCRIBE_CONTEST_PARTICIPANT = 57;</code>
     */
    const DESCRIBE_CONTEST_PARTICIPANT = 57;
    /**
     * Generated from protobuf enum <code>DESCRIBE_CONTEST_RESULT = 58;</code>
     */
    const DESCRIBE_CONTEST_RESULT = 58;
    /**
     * Generated from protobuf enum <code>DESCRIBE_CONTEST_RESULT_REALTIME = 59;</code>
     */
    const DESCRIBE_CONTEST_RESULT_REALTIME = 59;
    /**
     * Generated from protobuf enum <code>DESCRIBE_CONTEST_PROBLEM = 60;</code>
     */
    const DESCRIBE_CONTEST_PROBLEM = 60;
    /**
     * Generated from protobuf enum <code>DESCRIBE_CONTEST_SUBMISSION = 61;</code>
     */
    const DESCRIBE_CONTEST_SUBMISSION = 61;
    /**
     * Generated from protobuf enum <code>UPDATE_CONTEST = 62;</code>
     */
    const UPDATE_CONTEST = 62;
    /**
     * Generated from protobuf enum <code>UPDATE_CONTEST_ANNOUNCEMENT = 63;</code>
     */
    const UPDATE_CONTEST_ANNOUNCEMENT = 63;
    /**
     * Generated from protobuf enum <code>UPDATE_CONTEST_PARTICIPANT = 64;</code>
     */
    const UPDATE_CONTEST_PARTICIPANT = 64;
    /**
     * Generated from protobuf enum <code>UPDATE_CONTEST_RESULT = 65;</code>
     */
    const UPDATE_CONTEST_RESULT = 65;
    /**
     * Generated from protobuf enum <code>UPDATE_CONTEST_PROBLEM = 66;</code>
     */
    const UPDATE_CONTEST_PROBLEM = 66;
    /**
     * Generated from protobuf enum <code>UPDATE_CONTEST_SUBMISSION = 67;</code>
     */
    const UPDATE_CONTEST_SUBMISSION = 67;
    /**
     * Generated from protobuf enum <code>SUBMIT_CONTEST_PROBLEM = 68;</code>
     */
    const SUBMIT_CONTEST_PROBLEM = 68;
    /**
     * Generated from protobuf enum <code>DELETE_CONTEST = 69;</code>
     */
    const DELETE_CONTEST = 69;
    /**
     * Generated from protobuf enum <code>DESCRIBE_TICKET = 70;</code>
     */
    const DESCRIBE_TICKET = 70;
    /**
     * Generated from protobuf enum <code>UPDATE_TICKET = 71;</code>
     */
    const UPDATE_TICKET = 71;
    /**
     * Generated from protobuf enum <code>REPLY_TICKET = 72;</code>
     */
    const REPLY_TICKET = 72;
    /**
     * Generated from protobuf enum <code>DESCRIBE_RANKING = 80;</code>
     */
    const DESCRIBE_RANKING = 80;
    /**
     * Generated from protobuf enum <code>UPDATE_RANKING = 81;</code>
     */
    const UPDATE_RANKING = 81;
    /**
     * Generated from protobuf enum <code>CREATE_MEMBER = 90;</code>
     */
    const CREATE_MEMBER = 90;
    /**
     * Generated from protobuf enum <code>DESCRIBE_MEMBER = 91;</code>
     */
    const DESCRIBE_MEMBER = 91;
    /**
     * Generated from protobuf enum <code>UPDATE_MEMBER = 92;</code>
     */
    const UPDATE_MEMBER = 92;
    /**
     * Generated from protobuf enum <code>DELETE_MEMBER = 93;</code>
     */
    const DELETE_MEMBER = 93;
    /**
     * Generated from protobuf enum <code>CREATE_GROUP = 100;</code>
     */
    const CREATE_GROUP = 100;
    /**
     * Generated from protobuf enum <code>DESCRIBE_GROUP = 101;</code>
     */
    const DESCRIBE_GROUP = 101;
    /**
     * Generated from protobuf enum <code>UPDATE_GROUP = 102;</code>
     */
    const UPDATE_GROUP = 102;
    /**
     * Generated from protobuf enum <code>DELETE_GROUP = 103;</code>
     */
    const DELETE_GROUP = 103;
    /**
     * Generated from protobuf enum <code>CREATE_SCOREBOARD = 110;</code>
     */
    const CREATE_SCOREBOARD = 110;
    /**
     * Generated from protobuf enum <code>DESCRIBE_SCOREBOARD = 111;</code>
     */
    const DESCRIBE_SCOREBOARD = 111;
    /**
     * Generated from protobuf enum <code>DESCRIBE_SCOREBOARD_REALTIME = 112;</code>
     */
    const DESCRIBE_SCOREBOARD_REALTIME = 112;
    /**
     * Generated from protobuf enum <code>UPDATE_SCOREBOARD = 113;</code>
     */
    const UPDATE_SCOREBOARD = 113;
    /**
     * Generated from protobuf enum <code>DELETE_SCOREBOARD = 114;</code>
     */
    const DELETE_SCOREBOARD = 114;
    /**
     * Generated from protobuf enum <code>DESCRIBE_CONTENT = 120;</code>
     */
    const DESCRIBE_CONTENT = 120;
    /**
     * Generated from protobuf enum <code>UPDATE_CONTENT = 121;</code>
     */
    const UPDATE_CONTENT = 121;
    /**
     * Generated from protobuf enum <code>CREATE_COURSE = 130;</code>
     */
    const CREATE_COURSE = 130;
    /**
     * Generated from protobuf enum <code>DESCRIBE_COURSE = 131;</code>
     */
    const DESCRIBE_COURSE = 131;
    /**
     * Generated from protobuf enum <code>DESCRIBE_COURSE_ENTRY = 132;</code>
     */
    const DESCRIBE_COURSE_ENTRY = 132;
    /**
     * Generated from protobuf enum <code>DESCRIBE_COURSE_STUDENT = 133;</code>
     */
    const DESCRIBE_COURSE_STUDENT = 133;
    /**
     * Generated from protobuf enum <code>DESCRIBE_COURSE_ASSIGNMENT = 134;</code>
     */
    const DESCRIBE_COURSE_ASSIGNMENT = 134;
    /**
     * Generated from protobuf enum <code>UPDATE_COURSE = 135;</code>
     */
    const UPDATE_COURSE = 135;
    /**
     * Generated from protobuf enum <code>UPDATE_COURSE_STUDENT = 136;</code>
     */
    const UPDATE_COURSE_STUDENT = 136;
    /**
     * Generated from protobuf enum <code>UPDATE_COURSE_ASSIGNMENT = 137;</code>
     */
    const UPDATE_COURSE_ASSIGNMENT = 137;
    /**
     * Generated from protobuf enum <code>DELETE_COURSE = 138;</code>
     */
    const DELETE_COURSE = 138;
    /**
     * Generated from protobuf enum <code>CREATE_POST = 140;</code>
     */
    const CREATE_POST = 140;
    /**
     * Generated from protobuf enum <code>DESCRIBE_POST = 141;</code>
     */
    const DESCRIBE_POST = 141;
    /**
     * Generated from protobuf enum <code>UPDATE_POST = 142;</code>
     */
    const UPDATE_POST = 142;
    /**
     * Generated from protobuf enum <code>DELETE_POST = 143;</code>
     */
    const DELETE_POST = 143;
    /**
     * Generated from protobuf enum <code>MODERATE_POST = 144;</code>
     */
    const MODERATE_POST = 144;
    /**
     * Generated from protobuf enum <code>UPDATE_MESSAGE = 150;</code>
     */
    const UPDATE_MESSAGE = 150;
    /**
     * Generated from protobuf enum <code>DELETE_MESSAGE = 151;</code>
     */
    const DELETE_MESSAGE = 151;

    private static $valueToName = [
        self::UNKNOWN_ACTION => 'UNKNOWN_ACTION',
        self::DESCRIBE_SPACE_QUOTA => 'DESCRIBE_SPACE_QUOTA',
        self::DESCRIBE_SPACE_CONFIG => 'DESCRIBE_SPACE_CONFIG',
        self::DESCRIBE_SPACE_BILLING => 'DESCRIBE_SPACE_BILLING',
        self::UPDATE_SPACE => 'UPDATE_SPACE',
        self::UPDATE_SPACE_CONFIG => 'UPDATE_SPACE_CONFIG',
        self::UPDATE_SPACE_BILLING => 'UPDATE_SPACE_BILLING',
        self::DELETE_SPACE => 'DELETE_SPACE',
        self::DESCRIBE_POLICY => 'DESCRIBE_POLICY',
        self::UPDATE_POLICY => 'UPDATE_POLICY',
        self::CREATE_PROBLEM => 'CREATE_PROBLEM',
        self::DESCRIBE_PROBLEM => 'DESCRIBE_PROBLEM',
        self::DESCRIBE_PROBLEM_EDITORIAL => 'DESCRIBE_PROBLEM_EDITORIAL',
        self::DESCRIBE_PROBLEM_HISTORY => 'DESCRIBE_PROBLEM_HISTORY',
        self::DESCRIBE_PROBLEM_TESTING => 'DESCRIBE_PROBLEM_TESTING',
        self::DESCRIBE_PROBLEM_SUBMISSION => 'DESCRIBE_PROBLEM_SUBMISSION',
        self::UPDATE_PROBLEM => 'UPDATE_PROBLEM',
        self::UPDATE_PROBLEM_EDITORIAL => 'UPDATE_PROBLEM_EDITORIAL',
        self::UPDATE_PROBLEM_VISIBILITY => 'UPDATE_PROBLEM_VISIBILITY',
        self::UPDATE_PROBLEM_TESTING => 'UPDATE_PROBLEM_TESTING',
        self::DELETE_PROBLEM => 'DELETE_PROBLEM',
        self::SUBMIT_PROBLEM => 'SUBMIT_PROBLEM',
        self::RETEST_PROBLEM => 'RETEST_PROBLEM',
        self::CREATE_CONTEST => 'CREATE_CONTEST',
        self::DESCRIBE_CONTEST => 'DESCRIBE_CONTEST',
        self::DESCRIBE_CONTEST_ANNOUNCEMENT => 'DESCRIBE_CONTEST_ANNOUNCEMENT',
        self::DESCRIBE_CONTEST_PARTICIPANT => 'DESCRIBE_CONTEST_PARTICIPANT',
        self::DESCRIBE_CONTEST_RESULT => 'DESCRIBE_CONTEST_RESULT',
        self::DESCRIBE_CONTEST_RESULT_REALTIME => 'DESCRIBE_CONTEST_RESULT_REALTIME',
        self::DESCRIBE_CONTEST_PROBLEM => 'DESCRIBE_CONTEST_PROBLEM',
        self::DESCRIBE_CONTEST_SUBMISSION => 'DESCRIBE_CONTEST_SUBMISSION',
        self::UPDATE_CONTEST => 'UPDATE_CONTEST',
        self::UPDATE_CONTEST_ANNOUNCEMENT => 'UPDATE_CONTEST_ANNOUNCEMENT',
        self::UPDATE_CONTEST_PARTICIPANT => 'UPDATE_CONTEST_PARTICIPANT',
        self::UPDATE_CONTEST_RESULT => 'UPDATE_CONTEST_RESULT',
        self::UPDATE_CONTEST_PROBLEM => 'UPDATE_CONTEST_PROBLEM',
        self::UPDATE_CONTEST_SUBMISSION => 'UPDATE_CONTEST_SUBMISSION',
        self::SUBMIT_CONTEST_PROBLEM => 'SUBMIT_CONTEST_PROBLEM',
        self::DELETE_CONTEST => 'DELETE_CONTEST',
        self::DESCRIBE_TICKET => 'DESCRIBE_TICKET',
        self::UPDATE_TICKET => 'UPDATE_TICKET',
        self::REPLY_TICKET => 'REPLY_TICKET',
        self::DESCRIBE_RANKING => 'DESCRIBE_RANKING',
        self::UPDATE_RANKING => 'UPDATE_RANKING',
        self::CREATE_MEMBER => 'CREATE_MEMBER',
        self::DESCRIBE_MEMBER => 'DESCRIBE_MEMBER',
        self::UPDATE_MEMBER => 'UPDATE_MEMBER',
        self::DELETE_MEMBER => 'DELETE_MEMBER',
        self::CREATE_GROUP => 'CREATE_GROUP',
        self::DESCRIBE_GROUP => 'DESCRIBE_GROUP',
        self::UPDATE_GROUP => 'UPDATE_GROUP',
        self::DELETE_GROUP => 'DELETE_GROUP',
        self::CREATE_SCOREBOARD => 'CREATE_SCOREBOARD',
        self::DESCRIBE_SCOREBOARD => 'DESCRIBE_SCOREBOARD',
        self::DESCRIBE_SCOREBOARD_REALTIME => 'DESCRIBE_SCOREBOARD_REALTIME',
        self::UPDATE_SCOREBOARD => 'UPDATE_SCOREBOARD',
        self::DELETE_SCOREBOARD => 'DELETE_SCOREBOARD',
        self::DESCRIBE_CONTENT => 'DESCRIBE_CONTENT',
        self::UPDATE_CONTENT => 'UPDATE_CONTENT',
        self::CREATE_COURSE => 'CREATE_COURSE',
        self::DESCRIBE_COURSE => 'DESCRIBE_COURSE',
        self::DESCRIBE_COURSE_ENTRY => 'DESCRIBE_COURSE_ENTRY',
        self::DESCRIBE_COURSE_STUDENT => 'DESCRIBE_COURSE_STUDENT',
        self::DESCRIBE_COURSE_ASSIGNMENT => 'DESCRIBE_COURSE_ASSIGNMENT',
        self::UPDATE_COURSE => 'UPDATE_COURSE',
        self::UPDATE_COURSE_STUDENT => 'UPDATE_COURSE_STUDENT',
        self::UPDATE_COURSE_ASSIGNMENT => 'UPDATE_COURSE_ASSIGNMENT',
        self::DELETE_COURSE => 'DELETE_COURSE',
        self::CREATE_POST => 'CREATE_POST',
        self::DESCRIBE_POST => 'DESCRIBE_POST',
        self::UPDATE_POST => 'UPDATE_POST',
        self::DELETE_POST => 'DELETE_POST',
        self::MODERATE_POST => 'MODERATE_POST',
        self::UPDATE_MESSAGE => 'UPDATE_MESSAGE',
        self::DELETE_MESSAGE => 'DELETE_MESSAGE',
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

