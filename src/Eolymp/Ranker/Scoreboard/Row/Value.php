<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/ranker/scoreboard.proto

namespace Eolymp\Ranker\Scoreboard\Row;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.ranker.Scoreboard.Row.Value</code>
 */
class Value extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string column_id = 2;</code>
     */
    protected $column_id = '';
    /**
     * UNIX timestamp when this value was set (only populated, if scoreboard keeps historical data)
     *
     * Generated from protobuf field <code>uint32 valid_after = 31;</code>
     */
    protected $valid_after = 0;
    /**
     * UNIX timestamp when this value was overriden by newer value (only populated, if scoreboard keeps historical data)
     * if set to 0, means latest value
     *
     * Generated from protobuf field <code>uint32 valid_until = 32;</code>
     */
    protected $valid_until = 0;
    /**
     * score and related fields for CONTEST and PROBLEM columns.
     *
     * Generated from protobuf field <code>float score = 10;</code>
     */
    protected $score = 0.0;
    /**
     * Generated from protobuf field <code>float penalty = 11;</code>
     */
    protected $penalty = 0.0;
    /**
     * Percentage of points scored, from 0 to 1.
     *
     * Generated from protobuf field <code>float percentage = 12;</code>
     */
    protected $percentage = 0.0;
    /**
     * Number of attempts before problem was solved.
     *
     * Generated from protobuf field <code>uint32 attempts = 13;</code>
     */
    protected $attempts = 0;
    /**
     * How much time it took to solve problem since beginning of the contest, in seconds.
     *
     * Generated from protobuf field <code>uint32 solved_in = 14;</code>
     */
    protected $solved_in = 0;
    /**
     * value for NAME and ATTRIBUTE columns.
     *
     * Generated from protobuf field <code>string value_string = 20;</code>
     */
    protected $value_string = '';
    /**
     * Generated from protobuf field <code>int32 value_number = 21;</code>
     */
    protected $value_number = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $column_id
     *     @type int $valid_after
     *           UNIX timestamp when this value was set (only populated, if scoreboard keeps historical data)
     *     @type int $valid_until
     *           UNIX timestamp when this value was overriden by newer value (only populated, if scoreboard keeps historical data)
     *           if set to 0, means latest value
     *     @type float $score
     *           score and related fields for CONTEST and PROBLEM columns.
     *     @type float $penalty
     *     @type float $percentage
     *           Percentage of points scored, from 0 to 1.
     *     @type int $attempts
     *           Number of attempts before problem was solved.
     *     @type int $solved_in
     *           How much time it took to solve problem since beginning of the contest, in seconds.
     *     @type string $value_string
     *           value for NAME and ATTRIBUTE columns.
     *     @type int $value_number
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Ranker\Scoreboard::initOnce();
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
     * Generated from protobuf field <code>string column_id = 2;</code>
     * @return string
     */
    public function getColumnId()
    {
        return $this->column_id;
    }

    /**
     * Generated from protobuf field <code>string column_id = 2;</code>
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
     * UNIX timestamp when this value was set (only populated, if scoreboard keeps historical data)
     *
     * Generated from protobuf field <code>uint32 valid_after = 31;</code>
     * @return int
     */
    public function getValidAfter()
    {
        return $this->valid_after;
    }

    /**
     * UNIX timestamp when this value was set (only populated, if scoreboard keeps historical data)
     *
     * Generated from protobuf field <code>uint32 valid_after = 31;</code>
     * @param int $var
     * @return $this
     */
    public function setValidAfter($var)
    {
        GPBUtil::checkUint32($var);
        $this->valid_after = $var;

        return $this;
    }

    /**
     * UNIX timestamp when this value was overriden by newer value (only populated, if scoreboard keeps historical data)
     * if set to 0, means latest value
     *
     * Generated from protobuf field <code>uint32 valid_until = 32;</code>
     * @return int
     */
    public function getValidUntil()
    {
        return $this->valid_until;
    }

    /**
     * UNIX timestamp when this value was overriden by newer value (only populated, if scoreboard keeps historical data)
     * if set to 0, means latest value
     *
     * Generated from protobuf field <code>uint32 valid_until = 32;</code>
     * @param int $var
     * @return $this
     */
    public function setValidUntil($var)
    {
        GPBUtil::checkUint32($var);
        $this->valid_until = $var;

        return $this;
    }

    /**
     * score and related fields for CONTEST and PROBLEM columns.
     *
     * Generated from protobuf field <code>float score = 10;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * score and related fields for CONTEST and PROBLEM columns.
     *
     * Generated from protobuf field <code>float score = 10;</code>
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
     * Generated from protobuf field <code>float penalty = 11;</code>
     * @return float
     */
    public function getPenalty()
    {
        return $this->penalty;
    }

    /**
     * Generated from protobuf field <code>float penalty = 11;</code>
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
     * Percentage of points scored, from 0 to 1.
     *
     * Generated from protobuf field <code>float percentage = 12;</code>
     * @return float
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Percentage of points scored, from 0 to 1.
     *
     * Generated from protobuf field <code>float percentage = 12;</code>
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
     * Number of attempts before problem was solved.
     *
     * Generated from protobuf field <code>uint32 attempts = 13;</code>
     * @return int
     */
    public function getAttempts()
    {
        return $this->attempts;
    }

    /**
     * Number of attempts before problem was solved.
     *
     * Generated from protobuf field <code>uint32 attempts = 13;</code>
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
     * How much time it took to solve problem since beginning of the contest, in seconds.
     *
     * Generated from protobuf field <code>uint32 solved_in = 14;</code>
     * @return int
     */
    public function getSolvedIn()
    {
        return $this->solved_in;
    }

    /**
     * How much time it took to solve problem since beginning of the contest, in seconds.
     *
     * Generated from protobuf field <code>uint32 solved_in = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setSolvedIn($var)
    {
        GPBUtil::checkUint32($var);
        $this->solved_in = $var;

        return $this;
    }

    /**
     * value for NAME and ATTRIBUTE columns.
     *
     * Generated from protobuf field <code>string value_string = 20;</code>
     * @return string
     */
    public function getValueString()
    {
        return $this->value_string;
    }

    /**
     * value for NAME and ATTRIBUTE columns.
     *
     * Generated from protobuf field <code>string value_string = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setValueString($var)
    {
        GPBUtil::checkString($var, True);
        $this->value_string = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 value_number = 21;</code>
     * @return int
     */
    public function getValueNumber()
    {
        return $this->value_number;
    }

    /**
     * Generated from protobuf field <code>int32 value_number = 21;</code>
     * @param int $var
     * @return $this
     */
    public function setValueNumber($var)
    {
        GPBUtil::checkInt32($var);
        $this->value_number = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Value::class, \Eolymp\Ranker\Scoreboard_Row_Value::class);

