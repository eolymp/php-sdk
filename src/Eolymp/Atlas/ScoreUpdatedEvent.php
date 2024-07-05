<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/events.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ScoreUpdatedEvent is dispatched when score for a given problem and user has been updated (increased).
 *
 * Generated from protobuf message <code>eolymp.atlas.ScoreUpdatedEvent</code>
 */
class ScoreUpdatedEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.atlas.Score score = 1;</code>
     */
    protected $score = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Atlas\Score $score
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\Events::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Score score = 1;</code>
     * @return \Eolymp\Atlas\Score|null
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
     * Generated from protobuf field <code>.eolymp.atlas.Score score = 1;</code>
     * @param \Eolymp\Atlas\Score $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Atlas\Score::class);
        $this->score = $var;

        return $this;
    }

}

