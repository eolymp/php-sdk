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
     * Generated from protobuf field <code>bool unofficial = 20;</code>
     */
    protected $unofficial = false;
    /**
     * Generated from protobuf field <code>bool disqualified = 21;</code>
     */
    protected $disqualified = false;
    /**
     * Generated from protobuf field <code>.eolymp.judge.Scoreboard.TotalScore score = 22;</code>
     */
    protected $score = null;
    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Scoreboard.Value values = 50;</code>
     */
    private $values;
    /**
     * Generated from protobuf field <code>string cursor = 100;</code>
     */
    protected $cursor = '';

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
     *     @type bool $unofficial
     *     @type bool $disqualified
     *     @type \Eolymp\Judge\Scoreboard\TotalScore $score
     *     @type array<\Eolymp\Judge\Scoreboard\Value>|\Google\Protobuf\Internal\RepeatedField $values
     *     @type string $cursor
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
     * Generated from protobuf field <code>bool unofficial = 20;</code>
     * @return bool
     */
    public function getUnofficial()
    {
        return $this->unofficial;
    }

    /**
     * Generated from protobuf field <code>bool unofficial = 20;</code>
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
     * Generated from protobuf field <code>bool disqualified = 21;</code>
     * @return bool
     */
    public function getDisqualified()
    {
        return $this->disqualified;
    }

    /**
     * Generated from protobuf field <code>bool disqualified = 21;</code>
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
     * Generated from protobuf field <code>.eolymp.judge.Scoreboard.TotalScore score = 22;</code>
     * @return \Eolymp\Judge\Scoreboard\TotalScore|null
     */
    public function getScore()
    {
        return $this->score;
    }

    public function hasScore()
    {
        return isset($this->score);
    }

    public function clearScore()
    {
        unset($this->score);
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Scoreboard.TotalScore score = 22;</code>
     * @param \Eolymp\Judge\Scoreboard\TotalScore $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Scoreboard\TotalScore::class);
        $this->score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Scoreboard.Value values = 50;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Scoreboard.Value values = 50;</code>
     * @param array<\Eolymp\Judge\Scoreboard\Value>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Judge\Scoreboard\Value::class);
        $this->values = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cursor = 100;</code>
     * @return string
     */
    public function getCursor()
    {
        return $this->cursor;
    }

    /**
     * Generated from protobuf field <code>string cursor = 100;</code>
     * @param string $var
     * @return $this
     */
    public function setCursor($var)
    {
        GPBUtil::checkString($var, True);
        $this->cursor = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Row::class, \Eolymp\Judge\Scoreboard_Row::class);
