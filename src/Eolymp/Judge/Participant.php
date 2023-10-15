<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/participant.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.Participant</code>
 */
class Participant extends \Google\Protobuf\Internal\Message
{
    /**
     * unique identifier of the participant (can not be set when creating participant)
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * contest
     *
     * Generated from protobuf field <code>string contest_id = 3;</code>
     */
    protected $contest_id = '';
    /**
     * community member
     *
     * Generated from protobuf field <code>string member_id = 4;</code>
     */
    protected $member_id = '';
    /**
     * display name
     *
     * Generated from protobuf field <code>string name = 5;</code>
     */
    protected $name = '';
    /**
     * if true, participant won't be assigned rank in scoreboard
     *
     * Generated from protobuf field <code>bool unofficial = 6;</code>
     */
    protected $unofficial = false;
    /**
     * participant has been disabled
     *
     * Generated from protobuf field <code>bool inactive = 7;</code>
     */
    protected $inactive = false;
    /**
     * participant is a ghost
     *
     * Generated from protobuf field <code>bool ghost = 8;</code>
     */
    protected $ghost = false;
    /**
     * status (see explanation to enumeration values)
     *
     * Generated from protobuf field <code>.eolymp.judge.Participant.Status status = 20;</code>
     */
    protected $status = 0;
    /**
     * time when user has started participating
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp started_at = 21;</code>
     */
    protected $started_at = null;
    /**
     * time in seconds when user has started participating
     *
     * Generated from protobuf field <code>uint32 started_in = 22;</code>
     */
    protected $started_in = 0;
    /**
     * time when user has finished (will finish) participating (incl. bonus time)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_at = 25;</code>
     */
    protected $end_at = null;
    /**
     * time in seconds when user has finished (will finish) participating (incl. bonus time)
     *
     * Generated from protobuf field <code>uint32 end_in = 26;</code>
     */
    protected $end_in = 0;
    /**
     * additional time in seconds for participation
     *
     * Generated from protobuf field <code>uint32 bonus_time = 27;</code>
     */
    protected $bonus_time = 0;
    /**
     * passcode is a code participant has to enter before she can begin contest
     * this field is only populated when request is made by contest owner
     * passcode is read-only and should be set using ResetPasscode method.
     *
     * Generated from protobuf field <code>string passcode = 30;</code>
     */
    protected $passcode = '';
    /**
     * Submit counter is used to count how many times user submitted the problem.
     *
     * Generated from protobuf field <code>repeated .eolymp.judge.Participant.Submit submits = 40;</code>
     */
    private $submits;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           unique identifier of the participant (can not be set when creating participant)
     *     @type string $contest_id
     *           contest
     *     @type string $member_id
     *           community member
     *     @type string $name
     *           display name
     *     @type bool $unofficial
     *           if true, participant won't be assigned rank in scoreboard
     *     @type bool $inactive
     *           participant has been disabled
     *     @type bool $ghost
     *           participant is a ghost
     *     @type int $status
     *           status (see explanation to enumeration values)
     *     @type \Google\Protobuf\Timestamp $started_at
     *           time when user has started participating
     *     @type int $started_in
     *           time in seconds when user has started participating
     *     @type \Google\Protobuf\Timestamp $end_at
     *           time when user has finished (will finish) participating (incl. bonus time)
     *     @type int $end_in
     *           time in seconds when user has finished (will finish) participating (incl. bonus time)
     *     @type int $bonus_time
     *           additional time in seconds for participation
     *     @type string $passcode
     *           passcode is a code participant has to enter before she can begin contest
     *           this field is only populated when request is made by contest owner
     *           passcode is read-only and should be set using ResetPasscode method.
     *     @type \Eolymp\Judge\Participant\Submit[]|\Google\Protobuf\Internal\RepeatedField $submits
     *           Submit counter is used to count how many times user submitted the problem.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Participant::initOnce();
        parent::__construct($data);
    }

    /**
     * unique identifier of the participant (can not be set when creating participant)
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * unique identifier of the participant (can not be set when creating participant)
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
     * contest
     *
     * Generated from protobuf field <code>string contest_id = 3;</code>
     * @return string
     */
    public function getContestId()
    {
        return $this->contest_id;
    }

    /**
     * contest
     *
     * Generated from protobuf field <code>string contest_id = 3;</code>
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
     * display name
     *
     * Generated from protobuf field <code>string name = 5;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * display name
     *
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
     * if true, participant won't be assigned rank in scoreboard
     *
     * Generated from protobuf field <code>bool unofficial = 6;</code>
     * @return bool
     */
    public function getUnofficial()
    {
        return $this->unofficial;
    }

    /**
     * if true, participant won't be assigned rank in scoreboard
     *
     * Generated from protobuf field <code>bool unofficial = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setUnofficial($var)
    {
        GPBUtil::checkBool($var);
        $this->unofficial = $var;

        return $this;
    }

    /**
     * participant has been disabled
     *
     * Generated from protobuf field <code>bool inactive = 7;</code>
     * @return bool
     */
    public function getInactive()
    {
        return $this->inactive;
    }

    /**
     * participant has been disabled
     *
     * Generated from protobuf field <code>bool inactive = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setInactive($var)
    {
        GPBUtil::checkBool($var);
        $this->inactive = $var;

        return $this;
    }

    /**
     * participant is a ghost
     *
     * Generated from protobuf field <code>bool ghost = 8;</code>
     * @return bool
     */
    public function getGhost()
    {
        return $this->ghost;
    }

    /**
     * participant is a ghost
     *
     * Generated from protobuf field <code>bool ghost = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setGhost($var)
    {
        GPBUtil::checkBool($var);
        $this->ghost = $var;

        return $this;
    }

    /**
     * status (see explanation to enumeration values)
     *
     * Generated from protobuf field <code>.eolymp.judge.Participant.Status status = 20;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * status (see explanation to enumeration values)
     *
     * Generated from protobuf field <code>.eolymp.judge.Participant.Status status = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Judge\Participant_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * time when user has started participating
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp started_at = 21;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getStartedAt()
    {
        return $this->started_at;
    }

    /**
     * time when user has started participating
     *
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
     * time in seconds when user has started participating
     *
     * Generated from protobuf field <code>uint32 started_in = 22;</code>
     * @return int
     */
    public function getStartedIn()
    {
        return $this->started_in;
    }

    /**
     * time in seconds when user has started participating
     *
     * Generated from protobuf field <code>uint32 started_in = 22;</code>
     * @param int $var
     * @return $this
     */
    public function setStartedIn($var)
    {
        GPBUtil::checkUint32($var);
        $this->started_in = $var;

        return $this;
    }

    /**
     * time when user has finished (will finish) participating (incl. bonus time)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_at = 25;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getEndAt()
    {
        return $this->end_at;
    }

    /**
     * time when user has finished (will finish) participating (incl. bonus time)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_at = 25;</code>
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
     * time in seconds when user has finished (will finish) participating (incl. bonus time)
     *
     * Generated from protobuf field <code>uint32 end_in = 26;</code>
     * @return int
     */
    public function getEndIn()
    {
        return $this->end_in;
    }

    /**
     * time in seconds when user has finished (will finish) participating (incl. bonus time)
     *
     * Generated from protobuf field <code>uint32 end_in = 26;</code>
     * @param int $var
     * @return $this
     */
    public function setEndIn($var)
    {
        GPBUtil::checkUint32($var);
        $this->end_in = $var;

        return $this;
    }

    /**
     * additional time in seconds for participation
     *
     * Generated from protobuf field <code>uint32 bonus_time = 27;</code>
     * @return int
     */
    public function getBonusTime()
    {
        return $this->bonus_time;
    }

    /**
     * additional time in seconds for participation
     *
     * Generated from protobuf field <code>uint32 bonus_time = 27;</code>
     * @param int $var
     * @return $this
     */
    public function setBonusTime($var)
    {
        GPBUtil::checkUint32($var);
        $this->bonus_time = $var;

        return $this;
    }

    /**
     * passcode is a code participant has to enter before she can begin contest
     * this field is only populated when request is made by contest owner
     * passcode is read-only and should be set using ResetPasscode method.
     *
     * Generated from protobuf field <code>string passcode = 30;</code>
     * @return string
     */
    public function getPasscode()
    {
        return $this->passcode;
    }

    /**
     * passcode is a code participant has to enter before she can begin contest
     * this field is only populated when request is made by contest owner
     * passcode is read-only and should be set using ResetPasscode method.
     *
     * Generated from protobuf field <code>string passcode = 30;</code>
     * @param string $var
     * @return $this
     */
    public function setPasscode($var)
    {
        GPBUtil::checkString($var, True);
        $this->passcode = $var;

        return $this;
    }

    /**
     * Submit counter is used to count how many times user submitted the problem.
     *
     * Generated from protobuf field <code>repeated .eolymp.judge.Participant.Submit submits = 40;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubmits()
    {
        return $this->submits;
    }

    /**
     * Submit counter is used to count how many times user submitted the problem.
     *
     * Generated from protobuf field <code>repeated .eolymp.judge.Participant.Submit submits = 40;</code>
     * @param \Eolymp\Judge\Participant\Submit[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubmits($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Judge\Participant\Submit::class);
        $this->submits = $arr;

        return $this;
    }

}

