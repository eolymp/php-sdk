<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/scoreboard.proto

namespace Eolymp\Judge\Scoreboard;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.Scoreboard.Value</code>
 */
class Value extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string column_id = 1;</code>
     */
    protected $column_id = '';
    protected $value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $column_id
     *     @type \Eolymp\Judge\Scoreboard\RoundScore $round_score
     *     @type \Eolymp\Judge\Scoreboard\ProblemScore $problem_score
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Scoreboard::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string column_id = 1;</code>
     * @return string
     */
    public function getColumnId()
    {
        return $this->column_id;
    }

    /**
     * Generated from protobuf field <code>string column_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setColumnId($var)
    {
        GPBUtil::checkString($var, True);
        $this->column_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Scoreboard.RoundScore round_score = 11;</code>
     * @return \Eolymp\Judge\Scoreboard\RoundScore|null
     */
    public function getRoundScore()
    {
        return $this->readOneof(11);
    }

    public function hasRoundScore()
    {
        return $this->hasOneof(11);
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Scoreboard.RoundScore round_score = 11;</code>
     * @param \Eolymp\Judge\Scoreboard\RoundScore $var
     * @return $this
     */
    public function setRoundScore($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Scoreboard\RoundScore::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Scoreboard.ProblemScore problem_score = 12;</code>
     * @return \Eolymp\Judge\Scoreboard\ProblemScore|null
     */
    public function getProblemScore()
    {
        return $this->readOneof(12);
    }

    public function hasProblemScore()
    {
        return $this->hasOneof(12);
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Scoreboard.ProblemScore problem_score = 12;</code>
     * @param \Eolymp\Judge\Scoreboard\ProblemScore $var
     * @return $this
     */
    public function setProblemScore($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Scoreboard\ProblemScore::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->whichOneof("value");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Value::class, \Eolymp\Judge\Scoreboard_Value::class);

