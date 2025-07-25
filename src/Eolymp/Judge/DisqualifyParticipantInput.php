<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/judge/participant_service.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.DisqualifyParticipantInput</code>
 */
class DisqualifyParticipantInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     */
    protected $contest_id = '';
    /**
     * Generated from protobuf field <code>string participant_id = 2;</code>
     */
    protected $participant_id = '';
    /**
     * True to disqualify, false to un-disqualify
     *
     * Generated from protobuf field <code>bool disqualify = 3;</code>
     */
    protected $disqualify = false;
    /**
     * Reason for disqualification
     *
     * Generated from protobuf field <code>.eolymp.ecm.Content reason = 4;</code>
     */
    protected $reason = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $contest_id
     *     @type string $participant_id
     *     @type bool $disqualify
     *           True to disqualify, false to un-disqualify
     *     @type \Eolymp\Ecm\Content $reason
     *           Reason for disqualification
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\ParticipantService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     * @return string
     */
    public function getContestId()
    {
        return $this->contest_id;
    }

    /**
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
     * True to disqualify, false to un-disqualify
     *
     * Generated from protobuf field <code>bool disqualify = 3;</code>
     * @return bool
     */
    public function getDisqualify()
    {
        return $this->disqualify;
    }

    /**
     * True to disqualify, false to un-disqualify
     *
     * Generated from protobuf field <code>bool disqualify = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisqualify($var)
    {
        GPBUtil::checkBool($var);
        $this->disqualify = $var;

        return $this;
    }

    /**
     * Reason for disqualification
     *
     * Generated from protobuf field <code>.eolymp.ecm.Content reason = 4;</code>
     * @return \Eolymp\Ecm\Content|null
     */
    public function getReason()
    {
        return $this->reason;
    }

    public function hasReason()
    {
        return isset($this->reason);
    }

    public function clearReason()
    {
        unset($this->reason);
    }

    /**
     * Reason for disqualification
     *
     * Generated from protobuf field <code>.eolymp.ecm.Content reason = 4;</code>
     * @param \Eolymp\Ecm\Content $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Ecm\Content::class);
        $this->reason = $var;

        return $this;
    }

}

