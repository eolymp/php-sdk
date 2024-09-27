<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/module.proto

namespace Eolymp\Course\Module;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.Module.Assignment</code>
 */
class Assignment extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.course.Module.Assignment.Status status = 10;</code>
     */
    protected $status = 0;
    /**
     * optionally, time by when assignment should be complete
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_after = 11;</code>
     */
    protected $start_after = null;
    /**
     * optionally, time by when assignment should be complete
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_before = 12;</code>
     */
    protected $complete_before = null;
    /**
     * optionally, duration of the assignment in seconds
     *
     * Generated from protobuf field <code>uint32 duration = 13;</code>
     */
    protected $duration = 0;
    /**
     * if true the task will be available after time runs out
     *
     * Generated from protobuf field <code>bool upsolve = 30;</code>
     */
    protected $upsolve = false;
    /**
     * read-only, time when assignment was created
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp assigned_at = 20;</code>
     */
    protected $assigned_at = null;
    /**
     * read-only, time when assignment has been started (via StartAssignment API)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp started_at = 25;</code>
     */
    protected $started_at = null;
    /**
     * read-only, time when assignment will complete (started_at + duration)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp completed_at = 26;</code>
     */
    protected $completed_at = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $status
     *     @type \Google\Protobuf\Timestamp $start_after
     *           optionally, time by when assignment should be complete
     *     @type \Google\Protobuf\Timestamp $complete_before
     *           optionally, time by when assignment should be complete
     *     @type int $duration
     *           optionally, duration of the assignment in seconds
     *     @type bool $upsolve
     *           if true the task will be available after time runs out
     *     @type \Google\Protobuf\Timestamp $assigned_at
     *           read-only, time when assignment was created
     *     @type \Google\Protobuf\Timestamp $started_at
     *           read-only, time when assignment has been started (via StartAssignment API)
     *     @type \Google\Protobuf\Timestamp $completed_at
     *           read-only, time when assignment will complete (started_at + duration)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\Module::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Module.Assignment.Status status = 10;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Module.Assignment.Status status = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Course\Module\Assignment\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * optionally, time by when assignment should be complete
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_after = 11;</code>
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
     * optionally, time by when assignment should be complete
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_after = 11;</code>
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
     * optionally, time by when assignment should be complete
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_before = 12;</code>
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
     * optionally, time by when assignment should be complete
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_before = 12;</code>
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
     * optionally, duration of the assignment in seconds
     *
     * Generated from protobuf field <code>uint32 duration = 13;</code>
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * optionally, duration of the assignment in seconds
     *
     * Generated from protobuf field <code>uint32 duration = 13;</code>
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
     * if true the task will be available after time runs out
     *
     * Generated from protobuf field <code>bool upsolve = 30;</code>
     * @return bool
     */
    public function getUpsolve()
    {
        return $this->upsolve;
    }

    /**
     * if true the task will be available after time runs out
     *
     * Generated from protobuf field <code>bool upsolve = 30;</code>
     * @param bool $var
     * @return $this
     */
    public function setUpsolve($var)
    {
        GPBUtil::checkBool($var);
        $this->upsolve = $var;

        return $this;
    }

    /**
     * read-only, time when assignment was created
     *
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
     * read-only, time when assignment was created
     *
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
     * read-only, time when assignment has been started (via StartAssignment API)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp started_at = 25;</code>
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
     * read-only, time when assignment has been started (via StartAssignment API)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp started_at = 25;</code>
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
     * read-only, time when assignment will complete (started_at + duration)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp completed_at = 26;</code>
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
     * read-only, time when assignment will complete (started_at + duration)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp completed_at = 26;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCompletedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->completed_at = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Assignment::class, \Eolymp\Course\Module_Assignment::class);

