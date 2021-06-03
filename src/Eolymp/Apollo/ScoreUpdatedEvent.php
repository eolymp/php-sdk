<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/apollo/events.proto

namespace Eolymp\Apollo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.apollo.ScoreUpdatedEvent</code>
 */
class ScoreUpdatedEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.apollo.Score score = 1;</code>
     */
    protected $score = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Apollo\Score $score
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Apollo\Events::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.apollo.Score score = 1;</code>
     * @return \Eolymp\Apollo\Score
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Generated from protobuf field <code>.eolymp.apollo.Score score = 1;</code>
     * @param \Eolymp\Apollo\Score $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Apollo\Score::class);
        $this->score = $var;

        return $this;
    }

}

