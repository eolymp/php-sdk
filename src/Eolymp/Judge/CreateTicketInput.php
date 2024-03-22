<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/ticket_service.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.CreateTicketInput</code>
 */
class CreateTicketInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     */
    protected $contest_id = '';
    /**
     * Generated from protobuf field <code>string subject = 2;</code>
     */
    protected $subject = '';
    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content message = 4;</code>
     */
    protected $message = null;
    /**
     * Generated from protobuf field <code>string raw_message = 3;</code>
     */
    protected $raw_message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $contest_id
     *     @type string $subject
     *     @type \Eolymp\Ecm\Content $message
     *     @type string $raw_message
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\TicketService::initOnce();
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
     * Generated from protobuf field <code>string subject = 2;</code>
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Generated from protobuf field <code>string subject = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSubject($var)
    {
        GPBUtil::checkString($var, True);
        $this->subject = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content message = 4;</code>
     * @return \Eolymp\Ecm\Content
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>.eolymp.ecm.Content message = 4;</code>
     * @param \Eolymp\Ecm\Content $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Ecm\Content::class);
        $this->message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string raw_message = 3;</code>
     * @return string
     */
    public function getRawMessage()
    {
        return $this->raw_message;
    }

    /**
     * Generated from protobuf field <code>string raw_message = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRawMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->raw_message = $var;

        return $this;
    }

}

