<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/scoreboard.proto

namespace Eolymp\Judge\Scoreboard;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.Scoreboard.Score</code>
 */
class Score extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string problem_id = 1;</code>
     */
    protected $problem_id = '';
    /**
     * number of points scored
     *
     * Generated from protobuf field <code>float score = 2;</code>
     */
    protected $score = 0.0;
    /**
     * Generated from protobuf field <code>float penalty = 3;</code>
     */
    protected $penalty = 0.0;
    /**
     * Generated from protobuf field <code>bool solved = 4;</code>
     */
    protected $solved = false;
    /**
     * percentage scored from 0 to 1
     *
     * Generated from protobuf field <code>float percentage = 5;</code>
     */
    protected $percentage = 0.0;
    /**
     * number of submits made until problem was solved
     *
     * Generated from protobuf field <code>uint32 attempts = 7;</code>
     */
    protected $attempts = 0;
    /**
     * time when first accepted submission is made
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp solved_at = 8;</code>
     */
    protected $solved_at = null;
    /**
     * amount of time it took user to get accepted
     *
     * Generated from protobuf field <code>uint32 solved_in = 9;</code>
     */
    protected $solved_in = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $problem_id
     *     @type float $score
     *           number of points scored
     *     @type float $penalty
     *     @type bool $solved
     *     @type float $percentage
     *           percentage scored from 0 to 1
     *     @type int $attempts
     *           number of submits made until problem was solved
     *     @type \Google\Protobuf\Timestamp $solved_at
     *           time when first accepted submission is made
     *     @type int $solved_in
     *           amount of time it took user to get accepted
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Scoreboard::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string problem_id = 1;</code>
     * @return string
     */
    public function getProblemId()
    {
        return $this->problem_id;
    }

    /**
     * Generated from protobuf field <code>string problem_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProblemId($var)
    {
        GPBUtil::checkString($var, True);
        $this->problem_id = $var;

        return $this;
    }

    /**
     * number of points scored
     *
     * Generated from protobuf field <code>float score = 2;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * number of points scored
     *
     * Generated from protobuf field <code>float score = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float penalty = 3;</code>
     * @return float
     */
    public function getPenalty()
    {
        return $this->penalty;
    }

    /**
     * Generated from protobuf field <code>float penalty = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setPenalty($var)
    {
        GPBUtil::checkFloat($var);
        $this->penalty = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool solved = 4;</code>
     * @return bool
     */
    public function getSolved()
    {
        return $this->solved;
    }

    /**
     * Generated from protobuf field <code>bool solved = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setSolved($var)
    {
        GPBUtil::checkBool($var);
        $this->solved = $var;

        return $this;
    }

    /**
     * percentage scored from 0 to 1
     *
     * Generated from protobuf field <code>float percentage = 5;</code>
     * @return float
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * percentage scored from 0 to 1
     *
     * Generated from protobuf field <code>float percentage = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setPercentage($var)
    {
        GPBUtil::checkFloat($var);
        $this->percentage = $var;

        return $this;
    }

    /**
     * number of submits made until problem was solved
     *
     * Generated from protobuf field <code>uint32 attempts = 7;</code>
     * @return int
     */
    public function getAttempts()
    {
        return $this->attempts;
    }

    /**
     * number of submits made until problem was solved
     *
     * Generated from protobuf field <code>uint32 attempts = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setAttempts($var)
    {
        GPBUtil::checkUint32($var);
        $this->attempts = $var;

        return $this;
    }

    /**
     * time when first accepted submission is made
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp solved_at = 8;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getSolvedAt()
    {
        return $this->solved_at;
    }

    /**
     * time when first accepted submission is made
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp solved_at = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setSolvedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->solved_at = $var;

        return $this;
    }

    /**
     * amount of time it took user to get accepted
     *
     * Generated from protobuf field <code>uint32 solved_in = 9;</code>
     * @return int
     */
    public function getSolvedIn()
    {
        return $this->solved_in;
    }

    /**
     * amount of time it took user to get accepted
     *
     * Generated from protobuf field <code>uint32 solved_in = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setSolvedIn($var)
    {
        GPBUtil::checkUint32($var);
        $this->solved_in = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Score::class, \Eolymp\Judge\Scoreboard_Score::class);

