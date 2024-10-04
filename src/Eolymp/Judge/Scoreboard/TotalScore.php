<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/scoreboard.proto

namespace Eolymp\Judge\Scoreboard;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.Scoreboard.TotalScore</code>
 */
class TotalScore extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>float score = 1;</code>
     */
    protected $score = 0.0;
    /**
     * Generated from protobuf field <code>float penalty = 2;</code>
     */
    protected $penalty = 0.0;
    /**
     * Generated from protobuf field <code>uint32 tie_breaker = 3;</code>
     */
    protected $tie_breaker = 0;
    /**
     * Generated from protobuf field <code>bool unofficial = 10;</code>
     */
    protected $unofficial = false;
    /**
     * Generated from protobuf field <code>bool disqualified = 11;</code>
     */
    protected $disqualified = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $score
     *     @type float $penalty
     *     @type int $tie_breaker
     *     @type bool $unofficial
     *     @type bool $disqualified
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Scoreboard::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>float score = 1;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Generated from protobuf field <code>float score = 1;</code>
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
     * Generated from protobuf field <code>float penalty = 2;</code>
     * @return float
     */
    public function getPenalty()
    {
        return $this->penalty;
    }

    /**
     * Generated from protobuf field <code>float penalty = 2;</code>
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
     * Generated from protobuf field <code>uint32 tie_breaker = 3;</code>
     * @return int
     */
    public function getTieBreaker()
    {
        return $this->tie_breaker;
    }

    /**
     * Generated from protobuf field <code>uint32 tie_breaker = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTieBreaker($var)
    {
        GPBUtil::checkUint32($var);
        $this->tie_breaker = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool unofficial = 10;</code>
     * @return bool
     */
    public function getUnofficial()
    {
        return $this->unofficial;
    }

    /**
     * Generated from protobuf field <code>bool unofficial = 10;</code>
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
     * Generated from protobuf field <code>bool disqualified = 11;</code>
     * @return bool
     */
    public function getDisqualified()
    {
        return $this->disqualified;
    }

    /**
     * Generated from protobuf field <code>bool disqualified = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisqualified($var)
    {
        GPBUtil::checkBool($var);
        $this->disqualified = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TotalScore::class, \Eolymp\Judge\Scoreboard_TotalScore::class);

