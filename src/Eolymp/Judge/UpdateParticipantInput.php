<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/judge/participant_service.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.UpdateParticipantInput</code>
 */
class UpdateParticipantInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Patch request to update participant partially (all fields are updated if not specified)
     *
     * Generated from protobuf field <code>repeated .eolymp.judge.Participant.Patch.Field patch = 3;</code>
     */
    private $patch;
    /**
     * Participant identifier to update
     *
     * Generated from protobuf field <code>string contest_id = 1;</code>
     */
    protected $contest_id = '';
    /**
     * Generated from protobuf field <code>string participant_id = 2;</code>
     */
    protected $participant_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.judge.Participant participant = 4;</code>
     */
    protected $participant = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $patch
     *           Patch request to update participant partially (all fields are updated if not specified)
     *     @type string $contest_id
     *           Participant identifier to update
     *     @type string $participant_id
     *     @type \Eolymp\Judge\Participant $participant
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\ParticipantService::initOnce();
        parent::__construct($data);
    }

    /**
     * Patch request to update participant partially (all fields are updated if not specified)
     *
     * Generated from protobuf field <code>repeated .eolymp.judge.Participant.Patch.Field patch = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPatch()
    {
        return $this->patch;
    }

    /**
     * Patch request to update participant partially (all fields are updated if not specified)
     *
     * Generated from protobuf field <code>repeated .eolymp.judge.Participant.Patch.Field patch = 3;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPatch($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Judge\Participant\Patch\Field::class);
        $this->patch = $arr;

        return $this;
    }

    /**
     * Participant identifier to update
     *
     * Generated from protobuf field <code>string contest_id = 1;</code>
     * @return string
     */
    public function getContestId()
    {
        return $this->contest_id;
    }

    /**
     * Participant identifier to update
     *
     * Generated from protobuf field <code>string contest_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setContestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->contest_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string participant_id = 2;</code>
     * @return string
     */
    public function getParticipantId()
    {
        return $this->participant_id;
    }

    /**
     * Generated from protobuf field <code>string participant_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setParticipantId($var)
    {
        GPBUtil::checkString($var, True);
        $this->participant_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Participant participant = 4;</code>
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
     * Generated from protobuf field <code>.eolymp.judge.Participant participant = 4;</code>
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

