<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/assignment_service.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.AssignAssignmentInput</code>
 */
class AssignAssignmentInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string assignment_id = 1;</code>
     */
    protected $assignment_id = '';
    /**
     * Generated from protobuf field <code>string student_id = 2;</code>
     */
    protected $student_id = '';
    /**
     * optionally, a timestamp after which the assignment will become available
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_after = 10;</code>
     */
    protected $start_after = null;
    /**
     * optionally, a timestamp before which the assignment should be complete (after which assignment will become complete)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_before = 11;</code>
     */
    protected $complete_before = null;
    /**
     * optionally, additional time limit in seconds to complete the task
     *
     * Generated from protobuf field <code>uint32 duration = 12;</code>
     */
    protected $duration = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $assignment_id
     *     @type string $student_id
     *     @type \Google\Protobuf\Timestamp $start_after
     *           optionally, a timestamp after which the assignment will become available
     *     @type \Google\Protobuf\Timestamp $complete_before
     *           optionally, a timestamp before which the assignment should be complete (after which assignment will become complete)
     *     @type int $duration
     *           optionally, additional time limit in seconds to complete the task
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\AssignmentService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string assignment_id = 1;</code>
     * @return string
     */
    public function getAssignmentId()
    {
        return $this->assignment_id;
    }

    /**
     * Generated from protobuf field <code>string assignment_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAssignmentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->assignment_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string student_id = 2;</code>
     * @return string
     */
    public function getStudentId()
    {
        return $this->student_id;
    }

    /**
     * Generated from protobuf field <code>string student_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStudentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->student_id = $var;

        return $this;
    }

    /**
     * optionally, a timestamp after which the assignment will become available
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_after = 10;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getStartAfter()
    {
        return $this->start_after;
    }

    /**
     * optionally, a timestamp after which the assignment will become available
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_after = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartAfter($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_after = $var;

        return $this;
    }

    /**
     * optionally, a timestamp before which the assignment should be complete (after which assignment will become complete)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_before = 11;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCompleteBefore()
    {
        return $this->complete_before;
    }

    /**
     * optionally, a timestamp before which the assignment should be complete (after which assignment will become complete)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_before = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCompleteBefore($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->complete_before = $var;

        return $this;
    }

    /**
     * optionally, additional time limit in seconds to complete the task
     *
     * Generated from protobuf field <code>uint32 duration = 12;</code>
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * optionally, additional time limit in seconds to complete the task
     *
     * Generated from protobuf field <code>uint32 duration = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkUint32($var);
        $this->duration = $var;

        return $this;
    }

}

