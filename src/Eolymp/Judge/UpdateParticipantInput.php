<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/judge.proto

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
     * Generated from protobuf field <code>.eolymp.judge.UpdateParticipantInput.Patch patch = 3;</code>
     */
    protected $patch = 0;
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
     * Deprecated, use participant.name instead
     *
     * Generated from protobuf field <code>string name = 10;</code>
     */
    protected $name = '';
    /**
     * Deprecated, use participant.bonus_time instead
     *
     * Generated from protobuf field <code>uint32 bonus_time = 12;</code>
     */
    protected $bonus_time = 0;
    /**
     * Deprecated, use participant.unofficial instead
     *
     * Generated from protobuf field <code>bool out_of_competition = 11;</code>
     */
    protected $out_of_competition = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $patch
     *           Patch request to update participant partially (all fields are updated if not specified)
     *     @type string $contest_id
     *           Participant identifier to update
     *     @type string $participant_id
     *     @type \Eolymp\Judge\Participant $participant
     *     @type string $name
     *           Deprecated, use participant.name instead
     *     @type int $bonus_time
     *           Deprecated, use participant.bonus_time instead
     *     @type bool $out_of_competition
     *           Deprecated, use participant.unofficial instead
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Judge::initOnce();
        parent::__construct($data);
    }

    /**
     * Patch request to update participant partially (all fields are updated if not specified)
     *
     * Generated from protobuf field <code>.eolymp.judge.UpdateParticipantInput.Patch patch = 3;</code>
     * @return int
     */
    public function getPatch()
    {
        return $this->patch;
    }

    /**
     * Patch request to update participant partially (all fields are updated if not specified)
     *
     * Generated from protobuf field <code>.eolymp.judge.UpdateParticipantInput.Patch patch = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPatch($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Judge\UpdateParticipantInput_Patch::class);
        $this->patch = $var;

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
     * @return \Eolymp\Judge\Participant
     */
    public function getParticipant()
    {
        return $this->participant;
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

    /**
     * Deprecated, use participant.name instead
     *
     * Generated from protobuf field <code>string name = 10;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Deprecated, use participant.name instead
     *
     * Generated from protobuf field <code>string name = 10;</code>
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
     * Deprecated, use participant.bonus_time instead
     *
     * Generated from protobuf field <code>uint32 bonus_time = 12;</code>
     * @return int
     */
    public function getBonusTime()
    {
        return $this->bonus_time;
    }

    /**
     * Deprecated, use participant.bonus_time instead
     *
     * Generated from protobuf field <code>uint32 bonus_time = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setBonusTime($var)
    {
        GPBUtil::checkUint32($var);
        $this->bonus_time = $var;

        return $this;
    }

    /**
     * Deprecated, use participant.unofficial instead
     *
     * Generated from protobuf field <code>bool out_of_competition = 11;</code>
     * @return bool
     */
    public function getOutOfCompetition()
    {
        return $this->out_of_competition;
    }

    /**
     * Deprecated, use participant.unofficial instead
     *
     * Generated from protobuf field <code>bool out_of_competition = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setOutOfCompetition($var)
    {
        GPBUtil::checkBool($var);
        $this->out_of_competition = $var;

        return $this;
    }

}

