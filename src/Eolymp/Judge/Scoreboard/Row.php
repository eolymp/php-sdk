<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/scoreboard.proto

namespace Eolymp\Judge\Scoreboard;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.Scoreboard.Row</code>
 */
class Row extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string member_id = 2;</code>
     */
    protected $member_id = '';
    /**
     * Generated from protobuf field <code>uint32 index = 10;</code>
     */
    protected $index = 0;
    /**
     * Generated from protobuf field <code>uint32 rank = 11;</code>
     */
    protected $rank = 0;
    /**
     * Generated from protobuf field <code>uint32 rank_length = 12;</code>
     */
    protected $rank_length = 0;
    /**
     * Generated from protobuf field <code>float score = 20;</code>
     */
    protected $score = 0.0;
    /**
     * Generated from protobuf field <code>float penalty = 21;</code>
     */
    protected $penalty = 0.0;
    /**
     * Generated from protobuf field <code>uint32 tie_breaker = 22;</code>
     */
    protected $tie_breaker = 0;
    /**
     * Generated from protobuf field <code>bool unofficial = 30;</code>
     */
    protected $unofficial = false;
    /**
     * Generated from protobuf field <code>bool disqualified = 31;</code>
     */
    protected $disqualified = false;
    /**
     * Generated from protobuf field <code>.eolymp.judge.Medal medal = 32;</code>
     */
    protected $medal = 0;
    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Scoreboard.Row.Value values = 50;</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $member_id
     *     @type int $index
     *     @type int $rank
     *     @type int $rank_length
     *     @type float $score
     *     @type float $penalty
     *     @type int $tie_breaker
     *     @type bool $unofficial
     *     @type bool $disqualified
     *     @type int $medal
     *     @type array<\Eolymp\Judge\Scoreboard\Row\Value>|\Google\Protobuf\Internal\RepeatedField $values
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
     * Generated from protobuf field <code>string member_id = 2;</code>
     * @return string
     */
    public function getMemberId()
    {
        return $this->member_id;
    }

    /**
     * Generated from protobuf field <code>string member_id = 2;</code>
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
     * Generated from protobuf field <code>uint32 index = 10;</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 rank = 11;</code>
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Generated from protobuf field <code>uint32 rank = 11;</code>
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
     * Generated from protobuf field <code>uint32 rank_length = 12;</code>
     * @return int
     */
    public function getRankLength()
    {
        return $this->rank_length;
    }

    /**
     * Generated from protobuf field <code>uint32 rank_length = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setRankLength($var)
    {
        GPBUtil::checkUint32($var);
        $this->rank_length = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float score = 20;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Generated from protobuf field <code>float score = 20;</code>
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
     * Generated from protobuf field <code>float penalty = 21;</code>
     * @return float
     */
    public function getPenalty()
    {
        return $this->penalty;
    }

    /**
     * Generated from protobuf field <code>float penalty = 21;</code>
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
     * Generated from protobuf field <code>uint32 tie_breaker = 22;</code>
     * @return int
     */
    public function getTieBreaker()
    {
        return $this->tie_breaker;
    }

    /**
     * Generated from protobuf field <code>uint32 tie_breaker = 22;</code>
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
     * Generated from protobuf field <code>bool unofficial = 30;</code>
     * @return bool
     */
    public function getUnofficial()
    {
        return $this->unofficial;
    }

    /**
     * Generated from protobuf field <code>bool unofficial = 30;</code>
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
     * Generated from protobuf field <code>bool disqualified = 31;</code>
     * @return bool
     */
    public function getDisqualified()
    {
        return $this->disqualified;
    }

    /**
     * Generated from protobuf field <code>bool disqualified = 31;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisqualified($var)
    {
        GPBUtil::checkBool($var);
        $this->disqualified = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Medal medal = 32;</code>
     * @return int
     */
    public function getMedal()
    {
        return $this->medal;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Medal medal = 32;</code>
     * @param int $var
     * @return $this
     */
    public function setMedal($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Judge\Medal::class);
        $this->medal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Scoreboard.Row.Value values = 50;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Scoreboard.Row.Value values = 50;</code>
     * @param array<\Eolymp\Judge\Scoreboard\Row\Value>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Judge\Scoreboard\Row\Value::class);
        $this->values = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Row::class, \Eolymp\Judge\Scoreboard_Row::class);

