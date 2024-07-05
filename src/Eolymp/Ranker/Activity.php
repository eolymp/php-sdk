<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/ranker/activity.proto

namespace Eolymp\Ranker;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.ranker.Activity</code>
 */
class Activity extends \Google\Protobuf\Internal\Message
{
    /**
     * Activity unique identifier.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>.eolymp.ranker.Activity.Type type = 2;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>.eolymp.ranker.Activity.Status status = 3;</code>
     */
    protected $status = 0;
    /**
     * Contest where activity is running.
     *
     * Generated from protobuf field <code>string scoreboard_id = 5;</code>
     */
    protected $scoreboard_id = '';
    /**
     * Timestamp when activity was created, started, updated and complete.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 10;</code>
     */
    protected $created_at = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp started_at = 11;</code>
     */
    protected $started_at = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp progress_at = 12;</code>
     */
    protected $progress_at = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_at = 13;</code>
     */
    protected $complete_at = null;
    /**
     * progress is a number from 0 to `total`, showing amount of work complete
     *
     * Generated from protobuf field <code>uint32 progress = 20;</code>
     */
    protected $progress = 0;
    /**
     * total is a number indicating total amount of work to be complete, 0 means it's unknown
     *
     * Generated from protobuf field <code>uint32 total = 21;</code>
     */
    protected $total = 0;
    /**
     * error is a string indicating why job has failed
     *
     * Generated from protobuf field <code>string error = 30;</code>
     */
    protected $error = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Activity unique identifier.
     *     @type int $type
     *     @type int $status
     *     @type string $scoreboard_id
     *           Contest where activity is running.
     *     @type \Google\Protobuf\Timestamp $created_at
     *           Timestamp when activity was created, started, updated and complete.
     *     @type \Google\Protobuf\Timestamp $started_at
     *     @type \Google\Protobuf\Timestamp $progress_at
     *     @type \Google\Protobuf\Timestamp $complete_at
     *     @type int $progress
     *           progress is a number from 0 to `total`, showing amount of work complete
     *     @type int $total
     *           total is a number indicating total amount of work to be complete, 0 means it's unknown
     *     @type string $error
     *           error is a string indicating why job has failed
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Ranker\Activity::initOnce();
        parent::__construct($data);
    }

    /**
     * Activity unique identifier.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Activity unique identifier.
     *
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
     * Generated from protobuf field <code>.eolymp.ranker.Activity.Type type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ranker.Activity.Type type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Ranker\Activity\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ranker.Activity.Status status = 3;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ranker.Activity.Status status = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Ranker\Activity\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Contest where activity is running.
     *
     * Generated from protobuf field <code>string scoreboard_id = 5;</code>
     * @return string
     */
    public function getScoreboardId()
    {
        return $this->scoreboard_id;
    }

    /**
     * Contest where activity is running.
     *
     * Generated from protobuf field <code>string scoreboard_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setScoreboardId($var)
    {
        GPBUtil::checkString($var, True);
        $this->scoreboard_id = $var;

        return $this;
    }

    /**
     * Timestamp when activity was created, started, updated and complete.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 10;</code>
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
     * Timestamp when activity was created, started, updated and complete.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 10;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp started_at = 11;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp started_at = 11;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp progress_at = 12;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getProgressAt()
    {
        return $this->progress_at;
    }

    public function hasProgressAt()
    {
        return isset($this->progress_at);
    }

    public function clearProgressAt()
    {
        unset($this->progress_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp progress_at = 12;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setProgressAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->progress_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_at = 13;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCompleteAt()
    {
        return $this->complete_at;
    }

    public function hasCompleteAt()
    {
        return isset($this->complete_at);
    }

    public function clearCompleteAt()
    {
        unset($this->complete_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_at = 13;</code>
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
     * progress is a number from 0 to `total`, showing amount of work complete
     *
     * Generated from protobuf field <code>uint32 progress = 20;</code>
     * @return int
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * progress is a number from 0 to `total`, showing amount of work complete
     *
     * Generated from protobuf field <code>uint32 progress = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setProgress($var)
    {
        GPBUtil::checkUint32($var);
        $this->progress = $var;

        return $this;
    }

    /**
     * total is a number indicating total amount of work to be complete, 0 means it's unknown
     *
     * Generated from protobuf field <code>uint32 total = 21;</code>
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * total is a number indicating total amount of work to be complete, 0 means it's unknown
     *
     * Generated from protobuf field <code>uint32 total = 21;</code>
     * @param int $var
     * @return $this
     */
    public function setTotal($var)
    {
        GPBUtil::checkUint32($var);
        $this->total = $var;

        return $this;
    }

    /**
     * error is a string indicating why job has failed
     *
     * Generated from protobuf field <code>string error = 30;</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * error is a string indicating why job has failed
     *
     * Generated from protobuf field <code>string error = 30;</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;

        return $this;
    }

}

