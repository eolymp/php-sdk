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
     * name
     *
     * Generated from protobuf field <code>string name = 4;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Participant.User users = 5;</code>
     */
    private $users;
    /**
     * deprecated: user identifier
     *
     * Generated from protobuf field <code>string user_id = 9998;</code>
     */
    protected $user_id = '';
    /**
     * deprecated: username
     *
     * Generated from protobuf field <code>string username = 9999;</code>
     */
    protected $username = '';
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
     * time when user has finished (will finish) participating (excl. bonus time)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_at = 23;</code>
     */
    protected $end_at = null;
    /**
     * time in seconds when user has finished (will finish) participating (excl. bonus time)
     *
     * Generated from protobuf field <code>uint32 end_in = 24;</code>
     */
    protected $end_in = 0;
    /**
     * time when user has finished (will finish) participating (incl. bonus time)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_at = 25;</code>
     */
    protected $complete_at = null;
    /**
     * time in seconds when user has finished (will finish) participating  (incl. bonus time)
     *
     * Generated from protobuf field <code>uint32 complete_in = 26;</code>
     */
    protected $complete_in = 0;
    /**
     * additional time in seconds for participation (included in complete_at and complete_in)
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
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           unique identifier of the participant (can not be set when creating participant)
     *     @type string $contest_id
     *           contest
     *     @type string $name
     *           name
     *     @type \Eolymp\Judge\Participant\User[]|\Google\Protobuf\Internal\RepeatedField $users
     *     @type string $user_id
     *           deprecated: user identifier
     *     @type string $username
     *           deprecated: username
     *     @type int $status
     *           status (see explanation to enumeration values)
     *     @type \Google\Protobuf\Timestamp $started_at
     *           time when user has started participating
     *     @type int $started_in
     *           time in seconds when user has started participating
     *     @type \Google\Protobuf\Timestamp $end_at
     *           time when user has finished (will finish) participating (excl. bonus time)
     *     @type int $end_in
     *           time in seconds when user has finished (will finish) participating (excl. bonus time)
     *     @type \Google\Protobuf\Timestamp $complete_at
     *           time when user has finished (will finish) participating (incl. bonus time)
     *     @type int $complete_in
     *           time in seconds when user has finished (will finish) participating  (incl. bonus time)
     *     @type int $bonus_time
     *           additional time in seconds for participation (included in complete_at and complete_in)
     *     @type string $passcode
     *           passcode is a code participant has to enter before she can begin contest
     *           this field is only populated when request is made by contest owner
     *           passcode is read-only and should be set using ResetPasscode method.
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
     * name
     *
     * Generated from protobuf field <code>string name = 4;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * name
     *
     * Generated from protobuf field <code>string name = 4;</code>
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
     * Generated from protobuf field <code>repeated .eolymp.judge.Participant.User users = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Participant.User users = 5;</code>
     * @param \Eolymp\Judge\Participant\User[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUsers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Judge\Participant\User::class);
        $this->users = $arr;

        return $this;
    }

    /**
     * deprecated: user identifier
     *
     * Generated from protobuf field <code>string user_id = 9998;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * deprecated: user identifier
     *
     * Generated from protobuf field <code>string user_id = 9998;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * deprecated: username
     *
     * Generated from protobuf field <code>string username = 9999;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * deprecated: username
     *
     * Generated from protobuf field <code>string username = 9999;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

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
     * time when user has finished (will finish) participating (excl. bonus time)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_at = 23;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getEndAt()
    {
        return $this->end_at;
    }

    /**
     * time when user has finished (will finish) participating (excl. bonus time)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_at = 23;</code>
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
     * time in seconds when user has finished (will finish) participating (excl. bonus time)
     *
     * Generated from protobuf field <code>uint32 end_in = 24;</code>
     * @return int
     */
    public function getEndIn()
    {
        return $this->end_in;
    }

    /**
     * time in seconds when user has finished (will finish) participating (excl. bonus time)
     *
     * Generated from protobuf field <code>uint32 end_in = 24;</code>
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
     * time when user has finished (will finish) participating (incl. bonus time)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_at = 25;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCompleteAt()
    {
        return $this->complete_at;
    }

    /**
     * time when user has finished (will finish) participating (incl. bonus time)
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp complete_at = 25;</code>
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
     * time in seconds when user has finished (will finish) participating  (incl. bonus time)
     *
     * Generated from protobuf field <code>uint32 complete_in = 26;</code>
     * @return int
     */
    public function getCompleteIn()
    {
        return $this->complete_in;
    }

    /**
     * time in seconds when user has finished (will finish) participating  (incl. bonus time)
     *
     * Generated from protobuf field <code>uint32 complete_in = 26;</code>
     * @param int $var
     * @return $this
     */
    public function setCompleteIn($var)
    {
        GPBUtil::checkUint32($var);
        $this->complete_in = $var;

        return $this;
    }

    /**
     * additional time in seconds for participation (included in complete_at and complete_in)
     *
     * Generated from protobuf field <code>uint32 bonus_time = 27;</code>
     * @return int
     */
    public function getBonusTime()
    {
        return $this->bonus_time;
    }

    /**
     * additional time in seconds for participation (included in complete_at and complete_in)
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

}

