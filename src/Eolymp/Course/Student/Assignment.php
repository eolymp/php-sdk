<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/student.proto

namespace Eolymp\Course\Student;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.Student.Assignment</code>
 */
class Assignment extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string module_id = 1;</code>
     */
    protected $module_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.course.Student.Status status = 2;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>float overall_progress = 10;</code>
     */
    protected $overall_progress = 0.0;
    /**
     * Generated from protobuf field <code>uint32 overall_grade = 15;</code>
     */
    protected $overall_grade = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp assigned_at = 20;</code>
     */
    protected $assigned_at = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp started_at = 21;</code>
     */
    protected $started_at = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp completed_at = 22;</code>
     */
    protected $completed_at = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_after = 30;</code>
     */
    protected $start_after = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_before = 31;</code>
     */
    protected $complete_before = null;
    /**
     * Generated from protobuf field <code>uint32 duration = 35;</code>
     */
    protected $duration = 0;
    /**
     * Generated from protobuf field <code>repeated .eolymp.course.Student.Grade grades = 100;</code>
     */
    private $grades;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $module_id
     *     @type int $status
     *     @type float $overall_progress
     *     @type int $overall_grade
     *     @type \Google\Protobuf\Timestamp $assigned_at
     *     @type \Google\Protobuf\Timestamp $started_at
     *     @type \Google\Protobuf\Timestamp $completed_at
     *     @type \Google\Protobuf\Timestamp $start_after
     *     @type \Google\Protobuf\Timestamp $complete_before
     *     @type int $duration
     *     @type array<\Eolymp\Course\Student\Grade>|\Google\Protobuf\Internal\RepeatedField $grades
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\Student::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string module_id = 1;</code>
     * @return string
     */
    public function getModuleId()
    {
        return $this->module_id;
    }

    /**
     * Generated from protobuf field <code>string module_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setModuleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->module_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Student.Status status = 2;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Student.Status status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Course\Student\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float overall_progress = 10;</code>
     * @return float
     */
    public function getOverallProgress()
    {
        return $this->overall_progress;
    }

    /**
     * Generated from protobuf field <code>float overall_progress = 10;</code>
     * @param float $var
     * @return $this
     */
    public function setOverallProgress($var)
    {
        GPBUtil::checkFloat($var);
        $this->overall_progress = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 overall_grade = 15;</code>
     * @return int
     */
    public function getOverallGrade()
    {
        return $this->overall_grade;
    }

    /**
     * Generated from protobuf field <code>uint32 overall_grade = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setOverallGrade($var)
    {
        GPBUtil::checkUint32($var);
        $this->overall_grade = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp assigned_at = 20;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getAssignedAt()
    {
        return $this->assigned_at;
    }

    public function hasAssignedAt()
    {
        return isset($this->assigned_at);
    }

    public function clearAssignedAt()
    {
        unset($this->assigned_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp assigned_at = 20;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setAssignedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->assigned_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp started_at = 21;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartedAt()
    {
        return $this->started_at;
    }

    public function hasStartedAt()
    {
        return isset($this->started_at);
    }

    public function clearStartedAt()
    {
        unset($this->started_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp started_at = 21;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->started_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp completed_at = 22;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCompletedAt()
    {
        return $this->completed_at;
    }

    public function hasCompletedAt()
    {
        return isset($this->completed_at);
    }

    public function clearCompletedAt()
    {
        unset($this->completed_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp completed_at = 22;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCompletedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->completed_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_after = 30;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartAfter()
    {
        return $this->start_after;
    }

    public function hasStartAfter()
    {
        return isset($this->start_after);
    }

    public function clearStartAfter()
    {
        unset($this->start_after);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_after = 30;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_before = 31;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCompleteBefore()
    {
        return $this->complete_before;
    }

    public function hasCompleteBefore()
    {
        return isset($this->complete_before);
    }

    public function clearCompleteBefore()
    {
        unset($this->complete_before);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_before = 31;</code>
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
     * Generated from protobuf field <code>uint32 duration = 35;</code>
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Generated from protobuf field <code>uint32 duration = 35;</code>
     * @param int $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkUint32($var);
        $this->duration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.course.Student.Grade grades = 100;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGrades()
    {
        return $this->grades;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.course.Student.Grade grades = 100;</code>
     * @param array<\Eolymp\Course\Student\Grade>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGrades($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Course\Student\Grade::class);
        $this->grades = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Assignment::class, \Eolymp\Course\Student_Assignment::class);

