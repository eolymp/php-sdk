<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/result.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.Result</code>
 */
class Result extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string participant_id = 1;</code>
     */
    protected $participant_id = '';
    /**
     * Generated from protobuf field <code>string member_id = 7;</code>
     */
    protected $member_id = '';
    /**
     * Generated from protobuf field <code>string contest_id = 2;</code>
     */
    protected $contest_id = '';
    /**
     * Generated from protobuf field <code>string name = 3;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>bool out_of_competition = 4;</code>
     */
    protected $out_of_competition = false;
    /**
     * Generated from protobuf field <code>uint32 rank = 5;</code>
     */
    protected $rank = 0;
    /**
     * Generated from protobuf field <code>uint32 rank_lower = 6;</code>
     */
    protected $rank_lower = 0;
    /**
     * Generated from protobuf field <code>.eolymp.judge.Score score = 10;</code>
     */
    protected $score = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $participant_id
     *     @type string $member_id
     *     @type string $contest_id
     *     @type string $name
     *     @type bool $out_of_competition
     *     @type int $rank
     *     @type int $rank_lower
     *     @type \Eolymp\Judge\Score $score
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Result::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string participant_id = 1;</code>
     * @return string
     */
    public function getParticipantId()
    {
        return $this->participant_id;
    }

    /**
     * Generated from protobuf field <code>string participant_id = 1;</code>
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
     * Generated from protobuf field <code>string member_id = 7;</code>
     * @return string
     */
    public function getMemberId()
    {
        return $this->member_id;
    }

    /**
     * Generated from protobuf field <code>string member_id = 7;</code>
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
     * Generated from protobuf field <code>uint32 rank = 5;</code>
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Generated from protobuf field <code>uint32 rank = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setRank($var)
    {
        GPBUtil::checkUint32($var);
        $this->rank = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 rank_lower = 6;</code>
     * @return int
     */
    public function getRankLower()
    {
        return $this->rank_lower;
    }

    /**
     * Generated from protobuf field <code>uint32 rank_lower = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setRankLower($var)
    {
        GPBUtil::checkUint32($var);
        $this->rank_lower = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Score score = 10;</code>
     * @return \Eolymp\Judge\Score
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Score score = 10;</code>
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

