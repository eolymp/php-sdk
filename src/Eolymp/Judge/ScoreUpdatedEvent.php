<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/events.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.ScoreUpdatedEvent</code>
 */
class ScoreUpdatedEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     */
    protected $contest_id = '';
    /**
     * Generated from protobuf field <code>string participant_id = 2;</code>
     */
    protected $participant_id = '';
    /**
     * Generated from protobuf field <code>bool out_of_competition = 4;</code>
     */
    protected $out_of_competition = false;
    /**
     * Generated from protobuf field <code>.eolymp.judge.Score score = 3;</code>
     */
    protected $score = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $contest_id
     *     @type string $participant_id
     *     @type bool $out_of_competition
     *     @type \Eolymp\Judge\Score $score
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Events::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     * @return string
     */
    public function getContestId()
    {
        return $this->contest_id;
    }

    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
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
     * Generated from protobuf field <code>string participant_id = 2;</code>
     * @return string
     */
    public function getParticipantId()
    {
        return $this->participant_id;
    }

    /**
     * Generated from protobuf field <code>string participant_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setParticipantId($var)
    {
        GPBUtil::checkString($var, True);
        $this->participant_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool out_of_competition = 4;</code>
     * @return bool
     */
    public function getOutOfCompetition()
    {
        return $this->out_of_competition;
    }

    /**
     * Generated from protobuf field <code>bool out_of_competition = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setOutOfCompetition($var)
    {
        GPBUtil::checkBool($var);
        $this->out_of_competition = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Score score = 3;</code>
     * @return \Eolymp\Judge\Score
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Score score = 3;</code>
     * @param \Eolymp\Judge\Score $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Score::class);
        $this->score = $var;

        return $this;
    }

}

