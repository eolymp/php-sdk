<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/ranker/scoreboard.proto

namespace Eolymp\Ranker\Scoreboard;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.ranker.Scoreboard.Row</code>
 */
class Row extends \Google\Protobuf\Internal\Message
{
    /**
     * Row unique identifier
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Participant name (identifier).
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * User ID.
     *
     * Generated from protobuf field <code>string user_id = 3;</code>
     */
    protected $user_id = '';
    /**
     * Total score.
     *
     * Generated from protobuf field <code>float score = 10;</code>
     */
    protected $score = 0.0;
    /**
     * Total penalty.
     *
     * Generated from protobuf field <code>float penalty = 11;</code>
     */
    protected $penalty = 0.0;
    /**
     * Score breakdown by contest and problem.
     *
     * Generated from protobuf field <code>repeated .eolymp.ranker.Scoreboard.Row.Value values = 20;</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Row unique identifier
     *     @type string $name
     *           Participant name (identifier).
     *     @type string $user_id
     *           User ID.
     *     @type float $score
     *           Total score.
     *     @type float $penalty
     *           Total penalty.
     *     @type \Eolymp\Ranker\Scoreboard\Row\Value[]|\Google\Protobuf\Internal\RepeatedField $values
     *           Score breakdown by contest and problem.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Ranker\Scoreboard::initOnce();
        parent::__construct($data);
    }

    /**
     * Row unique identifier
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Row unique identifier
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
     * Participant name (identifier).
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Participant name (identifier).
     *
     * Generated from protobuf field <code>string name = 2;</code>
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
     * User ID.
     *
     * Generated from protobuf field <code>string user_id = 3;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * User ID.
     *
     * Generated from protobuf field <code>string user_id = 3;</code>
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
     * Total score.
     *
     * Generated from protobuf field <code>float score = 10;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Total score.
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
     * Total penalty.
     *
     * Generated from protobuf field <code>float penalty = 11;</code>
     * @return float
     */
    public function getPenalty()
    {
        return $this->penalty;
    }

    /**
     * Total penalty.
     *
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
     * Score breakdown by contest and problem.
     *
     * Generated from protobuf field <code>repeated .eolymp.ranker.Scoreboard.Row.Value values = 20;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Score breakdown by contest and problem.
     *
     * Generated from protobuf field <code>repeated .eolymp.ranker.Scoreboard.Row.Value values = 20;</code>
     * @param \Eolymp\Ranker\Scoreboard\Row\Value[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Ranker\Scoreboard\Row\Value::class);
        $this->values = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Row::class, \Eolymp\Ranker\Scoreboard_Row::class);
