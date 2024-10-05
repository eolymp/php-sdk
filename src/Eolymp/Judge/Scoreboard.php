<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/scoreboard.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.Scoreboard</code>
 */
class Scoreboard extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Scoreboard.Mode modes = 10;</code>
     */
    private $modes;
    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Scoreboard.Round rounds = 12;</code>
     */
    private $rounds;
    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Scoreboard.Column columns = 11;</code>
     */
    private $columns;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $modes
     *     @type array<\Eolymp\Judge\Scoreboard\Round>|\Google\Protobuf\Internal\RepeatedField $rounds
     *     @type array<\Eolymp\Judge\Scoreboard\Column>|\Google\Protobuf\Internal\RepeatedField $columns
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Scoreboard::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Scoreboard.Mode modes = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getModes()
    {
        return $this->modes;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Scoreboard.Mode modes = 10;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setModes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Judge\Scoreboard\Mode::class);
        $this->modes = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Scoreboard.Round rounds = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRounds()
    {
        return $this->rounds;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Scoreboard.Round rounds = 12;</code>
     * @param array<\Eolymp\Judge\Scoreboard\Round>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRounds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Judge\Scoreboard\Round::class);
        $this->rounds = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Scoreboard.Column columns = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Scoreboard.Column columns = 11;</code>
     * @param array<\Eolymp\Judge\Scoreboard\Column>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setColumns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Judge\Scoreboard\Column::class);
        $this->columns = $arr;

        return $this;
    }

}

