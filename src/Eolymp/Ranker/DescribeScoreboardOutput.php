<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/ranker/ranker.proto

namespace Eolymp\Ranker;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.ranker.DescribeScoreboardOutput</code>
 */
class DescribeScoreboardOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.ranker.Scoreboard scoreboard = 1;</code>
     */
    protected $scoreboard = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Ranker\Scoreboard $scoreboard
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Ranker\Ranker::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.ranker.Scoreboard scoreboard = 1;</code>
     * @return \Eolymp\Ranker\Scoreboard
     */
    public function getScoreboard()
    {
        return $this->scoreboard;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ranker.Scoreboard scoreboard = 1;</code>
     * @param \Eolymp\Ranker\Scoreboard $var
     * @return $this
     */
    public function setScoreboard($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Ranker\Scoreboard::class);
        $this->scoreboard = $var;

        return $this;
    }

}

