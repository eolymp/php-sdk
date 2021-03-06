<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/scoreboard.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.Scoreboard</code>
 */
class Scoreboard extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string contest_id = 2;</code>
     */
    protected $contest_id = '';
    /**
     * Generated from protobuf field <code>string name = 3;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>bool default = 4;</code>
     */
    protected $default = false;
    /**
     * Generated from protobuf field <code>bool visible = 5;</code>
     */
    protected $visible = false;
    /**
     * Amount of penalty awarded for each submission
     *
     * Generated from protobuf field <code>uint32 attempt_penalty = 30;</code>
     */
    protected $attempt_penalty = 0;
    /**
     * Generated from protobuf field <code>.eolymp.judge.Scoreboard.Status status = 11;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp freeze_time = 21;</code>
     */
    protected $freeze_time = null;
    /**
     * Generated from protobuf field <code>uint32 freeze_in = 22;</code>
     */
    protected $freeze_in = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $contest_id
     *     @type string $name
     *     @type bool $default
     *     @type bool $visible
     *     @type int $attempt_penalty
     *           Amount of penalty awarded for each submission
     *     @type int $status
     *     @type \Google\Protobuf\Timestamp $freeze_time
     *     @type int $freeze_in
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Scoreboard::initOnce();
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
     * Generated from protobuf field <code>string contest_id = 2;</code>
     * @return string
     */
    public function getContestId()
    {
        return $this->contest_id;
    }

    /**
     * Generated from protobuf field <code>string contest_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setContestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->contest_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 3;</code>
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
     * Generated from protobuf field <code>bool default = 4;</code>
     * @return bool
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Generated from protobuf field <code>bool default = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setDefault($var)
    {
        GPBUtil::checkBool($var);
        $this->default = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool visible = 5;</code>
     * @return bool
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Generated from protobuf field <code>bool visible = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setVisible($var)
    {
        GPBUtil::checkBool($var);
        $this->visible = $var;

        return $this;
    }

    /**
     * Amount of penalty awarded for each submission
     *
     * Generated from protobuf field <code>uint32 attempt_penalty = 30;</code>
     * @return int
     */
    public function getAttemptPenalty()
    {
        return $this->attempt_penalty;
    }

    /**
     * Amount of penalty awarded for each submission
     *
     * Generated from protobuf field <code>uint32 attempt_penalty = 30;</code>
     * @param int $var
     * @return $this
     */
    public function setAttemptPenalty($var)
    {
        GPBUtil::checkUint32($var);
        $this->attempt_penalty = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Scoreboard.Status status = 11;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Scoreboard.Status status = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Judge\Scoreboard_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp freeze_time = 21;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getFreezeTime()
    {
        return $this->freeze_time;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp freeze_time = 21;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFreezeTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->freeze_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 freeze_in = 22;</code>
     * @return int
     */
    public function getFreezeIn()
    {
        return $this->freeze_in;
    }

    /**
     * Generated from protobuf field <code>uint32 freeze_in = 22;</code>
     * @param int $var
     * @return $this
     */
    public function setFreezeIn($var)
    {
        GPBUtil::checkUint32($var);
        $this->freeze_in = $var;

        return $this;
    }

}

