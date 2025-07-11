<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/judge/participant_service.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.DescribeParticipantOutput</code>
 */
class DescribeParticipantOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.judge.Participant participant = 1;</code>
     */
    protected $participant = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Judge\Participant $participant
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\ParticipantService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Participant participant = 1;</code>
     * @return \Eolymp\Judge\Participant|null
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    public function hasParticipant()
    {
        return isset($this->participant);
    }

    public function clearParticipant()
    {
        unset($this->participant);
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Participant participant = 1;</code>
     * @param \Eolymp\Judge\Participant $var
     * @return $this
     */
    public function setParticipant($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Participant::class);
        $this->participant = $var;

        return $this;
    }

}

