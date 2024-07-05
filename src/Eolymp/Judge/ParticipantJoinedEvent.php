<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/events.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.ParticipantJoinedEvent</code>
 */
class ParticipantJoinedEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.judge.Contest contest = 1;</code>
     */
    protected $contest = null;
    /**
     * Generated from protobuf field <code>.eolymp.judge.Participant participant = 2;</code>
     */
    protected $participant = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Judge\Contest $contest
     *     @type \Eolymp\Judge\Participant $participant
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Events::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Contest contest = 1;</code>
     * @return \Eolymp\Judge\Contest|null
     */
    public function getContest()
    {
        return $this->contest;
    }

    public function hasContest()
    {
        return isset($this->contest);
    }

    public function clearContest()
    {
        unset($this->contest);
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Contest contest = 1;</code>
     * @param \Eolymp\Judge\Contest $var
     * @return $this
     */
    public function setContest($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Contest::class);
        $this->contest = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Participant participant = 2;</code>
     * @return \Eolymp\Judge\Participant|null
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    public function hasParticipant()
    {
        return isset($this->participant);
    }

    public function clearParticipant()
    {
        unset($this->participant);
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Participant participant = 2;</code>
     * @param \Eolymp\Judge\Participant $var
     * @return $this
     */
    public function setParticipant($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Participant::class);
        $this->participant = $var;

        return $this;
    }

}

