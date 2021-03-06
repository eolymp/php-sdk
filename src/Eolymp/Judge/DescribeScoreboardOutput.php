<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/judge.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.DescribeScoreboardOutput</code>
 */
class DescribeScoreboardOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.judge.Scoreboard scoreboard = 1;</code>
     */
    protected $scoreboard = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Judge\Scoreboard $scoreboard
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Judge::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Scoreboard scoreboard = 1;</code>
     * @return \Eolymp\Judge\Scoreboard
     */
    public function getScoreboard()
    {
        return $this->scoreboard;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Scoreboard scoreboard = 1;</code>
     * @param \Eolymp\Judge\Scoreboard $var
     * @return $this
     */
    public function setScoreboard($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Scoreboard::class);
        $this->scoreboard = $var;

        return $this;
    }

}

