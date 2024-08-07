<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/assignment.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.Assignment</code>
 */
class Assignment extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 5;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>.eolymp.course.Assignment.Status status = 10;</code>
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
     * Generated from protobuf field <code>repeated .eolymp.course.Assignment.Item items = 15;</code>
     */
    private $items;
    /**
     * read-only, time when assignment was created
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 20;</code>
     */
    protected $created_at = null;
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
    protected $assignee;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $member_id
     *     @type string $group_id
     *     @type int $status
     *     @type \Google\Protobuf\Timestamp $start_after
     *           optionally, time by when assignment should be complete
     *     @type \Google\Protobuf\Timestamp $complete_before
     *           optionally, time by when assignment should be complete
     *     @type int $duration
     *           optionally, duration of the assignment in seconds
     *     @type array<\Eolymp\Course\Assignment\Item>|\Google\Protobuf\Internal\RepeatedField $items
     *     @type \Google\Protobuf\Timestamp $created_at
     *           read-only, time when assignment was created
     *     @type \Google\Protobuf\Timestamp $started_at
     *           read-only, time when assignment has been started (via StartAssignment API)
     *     @type \Google\Protobuf\Timestamp $completed_at
     *           read-only, time when assignment will complete (started_at + duration)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\Assignment::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 5;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 5;</code>
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
     * Generated from protobuf field <code>string member_id = 1;</code>
     * @return string
     */
    public function getMemberId()
    {
        return $this->readOneof(1);
    }

    public function hasMemberId()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>string member_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMemberId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string group_id = 2;</code>
     * @return string
     */
    public function getGroupId()
    {
        return $this->readOneof(2);
    }

    public function hasGroupId()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>string group_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Assignment.Status status = 10;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.eolymp.course.Assignment.Status status = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Course\Assignment\Status::class);
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
     * Generated from protobuf field <code>repeated .eolymp.course.Assignment.Item items = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.course.Assignment.Item items = 15;</code>
     * @param array<\Eolymp\Course\Assignment\Item>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Course\Assignment\Item::class);
        $this->items = $arr;

        return $this;
    }

    /**
     * read-only, time when assignment was created
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 20;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function hasCreatedAt()
    {
        return isset($this->created_at);
    }

    public function clearCreatedAt()
    {
        unset($this->created_at);
    }

    /**
     * read-only, time when assignment was created
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 20;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_at = $var;

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

    /**
     * @return string
     */
    public function getAssignee()
    {
        return $this->whichOneof("assignee");
    }

}

