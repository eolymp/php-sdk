<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/student.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.Student</code>
 */
class Student extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string course_id = 2;</code>
     */
    protected $course_id = '';
    /**
     * community member
     *
     * Generated from protobuf field <code>string member_id = 4;</code>
     */
    protected $member_id = '';
    /**
     * Generated from protobuf field <code>string name = 5;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>.eolymp.course.Student.Status status = 20;</code>
     */
    protected $status = 0;
    /**
     * optionally, time when course will commence
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_at = 10;</code>
     */
    protected $start_at = null;
    /**
     * optionally, time by when course should be complete
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_at = 11;</code>
     */
    protected $end_at = null;
    /**
     * optionally, time when course was actually complete
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_at = 12;</code>
     */
    protected $complete_at = null;
    /**
     * optionally, duration of the course in seconds
     *
     * Generated from protobuf field <code>uint32 duration = 15;</code>
     */
    protected $duration = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $course_id
     *     @type string $member_id
     *           community member
     *     @type string $name
     *     @type int $status
     *     @type \Google\Protobuf\Timestamp $start_at
     *           optionally, time when course will commence
     *     @type \Google\Protobuf\Timestamp $end_at
     *           optionally, time by when course should be complete
     *     @type \Google\Protobuf\Timestamp $complete_at
     *           optionally, time when course was actually complete
     *     @type int $duration
     *           optionally, duration of the course in seconds
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\Student::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string course_id = 2;</code>
     * @return string
     */
    public function getCourseId()
    {
        return $this->course_id;
    }

    /**
     * Generated from protobuf field <code>string course_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCourseId($var)
    {
        GPBUtil::checkString($var, True);
        $this->course_id = $var;

        return $this;
    }

    /**
     * community member
     *
     * Generated from protobuf field <code>string member_id = 4;</code>
     * @return string
     */
    public function getMemberId()
    {
        return $this->member_id;
    }

    /**
     * community member
     *
     * Generated from protobuf field <code>string member_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMemberId($var)
    {
        GPBUtil::checkString($var, True);
        $this->member_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 5;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Student.Status status = 20;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Student.Status status = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Course\Student_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * optionally, time when course will commence
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_at = 10;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getStartAt()
    {
        return $this->start_at;
    }

    /**
     * optionally, time when course will commence
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_at = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_at = $var;

        return $this;
    }

    /**
     * optionally, time by when course should be complete
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_at = 11;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getEndAt()
    {
        return $this->end_at;
    }

    /**
     * optionally, time by when course should be complete
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_at = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_at = $var;

        return $this;
    }

    /**
     * optionally, time when course was actually complete
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_at = 12;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCompleteAt()
    {
        return $this->complete_at;
    }

    /**
     * optionally, time when course was actually complete
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_at = 12;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCompleteAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->complete_at = $var;

        return $this;
    }

    /**
     * optionally, duration of the course in seconds
     *
     * Generated from protobuf field <code>uint32 duration = 15;</code>
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * optionally, duration of the course in seconds
     *
     * Generated from protobuf field <code>uint32 duration = 15;</code>
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

