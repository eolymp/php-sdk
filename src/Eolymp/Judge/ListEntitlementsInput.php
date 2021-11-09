<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/judge.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.ListEntitlementsInput</code>
 */
class ListEntitlementsInput extends \Google\Protobuf\Internal\Message
{
    protected $context;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $contest_id
     *     @type string $submission_id
     *     @type string $ticket_id
     *     @type string $participant_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Judge::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     * @return string
     */
    public function getContestId()
    {
        return $this->readOneof(1);
    }

    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setContestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string submission_id = 2;</code>
     * @return string
     */
    public function getSubmissionId()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>string submission_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSubmissionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ticket_id = 3;</code>
     * @return string
     */
    public function getTicketId()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>string ticket_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTicketId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string participant_id = 4;</code>
     * @return string
     */
    public function getParticipantId()
    {
        return $this->readOneof(4);
    }

    /**
     * Generated from protobuf field <code>string participant_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setParticipantId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getContext()
    {
        return $this->whichOneof("context");
    }

}
