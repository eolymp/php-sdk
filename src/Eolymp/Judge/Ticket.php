<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/ticket.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.Ticket</code>
 */
class Ticket extends \Google\Protobuf\Internal\Message
{
    /**
     * Ticket unique identifier.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string ern = 9999;</code>
     */
    protected $ern = '';
    /**
     * Contest where ticket was opened.
     *
     * Generated from protobuf field <code>string contest_id = 2;</code>
     */
    protected $contest_id = '';
    /**
     * Participant who opened the ticket.
     *
     * Generated from protobuf field <code>string participant_id = 3;</code>
     */
    protected $participant_id = '';
    /**
     * Ticket subject. Max 255 symbols.
     *
     * Generated from protobuf field <code>string subject = 10;</code>
     */
    protected $subject = '';
    /**
     * Ticket message.
     *
     * Generated from protobuf field <code>string message = 11;</code>
     */
    protected $message = '';
    /**
     * True if ticket is open and being handled or False if ticket has been resolved.
     *
     * Generated from protobuf field <code>bool is_open = 20;</code>
     */
    protected $is_open = false;
    /**
     * True if participant haven't seen new replies. This flag helps to find tickets which need participant's attention.
     *
     * Generated from protobuf field <code>bool is_read_by_participant = 21;</code>
     */
    protected $is_read_by_participant = false;
    /**
     * True if contest organiser haven't reply to the ticket. This flag helps to find tickets which need organiser's attention.
     *
     * Generated from protobuf field <code>bool is_read_by_owner = 22;</code>
     */
    protected $is_read_by_owner = false;
    /**
     * Timestamp when ticket was initially created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 23;</code>
     */
    protected $created_at = null;
    /**
     * deprecated use is_read_by_participant instead
     *
     * Generated from protobuf field <code>bool is_read = 9991;</code>
     */
    protected $is_read = false;
    /**
     * deprecated use is_read_by_owner instead
     *
     * Generated from protobuf field <code>bool needs_reply = 9992;</code>
     */
    protected $needs_reply = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Ticket unique identifier.
     *     @type string $ern
     *     @type string $contest_id
     *           Contest where ticket was opened.
     *     @type string $participant_id
     *           Participant who opened the ticket.
     *     @type string $subject
     *           Ticket subject. Max 255 symbols.
     *     @type string $message
     *           Ticket message.
     *     @type bool $is_open
     *           True if ticket is open and being handled or False if ticket has been resolved.
     *     @type bool $is_read_by_participant
     *           True if participant haven't seen new replies. This flag helps to find tickets which need participant's attention.
     *     @type bool $is_read_by_owner
     *           True if contest organiser haven't reply to the ticket. This flag helps to find tickets which need organiser's attention.
     *     @type \Google\Protobuf\Timestamp $created_at
     *           Timestamp when ticket was initially created.
     *     @type bool $is_read
     *           deprecated use is_read_by_participant instead
     *     @type bool $needs_reply
     *           deprecated use is_read_by_owner instead
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Ticket::initOnce();
        parent::__construct($data);
    }

    /**
     * Ticket unique identifier.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Ticket unique identifier.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ern = 9999;</code>
     * @return string
     */
    public function getErn()
    {
        return $this->ern;
    }

    /**
     * Generated from protobuf field <code>string ern = 9999;</code>
     * @param string $var
     * @return $this
     */
    public function setErn($var)
    {
        GPBUtil::checkString($var, True);
        $this->ern = $var;

        return $this;
    }

    /**
     * Contest where ticket was opened.
     *
     * Generated from protobuf field <code>string contest_id = 2;</code>
     * @return string
     */
    public function getContestId()
    {
        return $this->contest_id;
    }

    /**
     * Contest where ticket was opened.
     *
     * Generated from protobuf field <code>string contest_id = 2;</code>
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
     * Participant who opened the ticket.
     *
     * Generated from protobuf field <code>string participant_id = 3;</code>
     * @return string
     */
    public function getParticipantId()
    {
        return $this->participant_id;
    }

    /**
     * Participant who opened the ticket.
     *
     * Generated from protobuf field <code>string participant_id = 3;</code>
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
     * Ticket subject. Max 255 symbols.
     *
     * Generated from protobuf field <code>string subject = 10;</code>
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Ticket subject. Max 255 symbols.
     *
     * Generated from protobuf field <code>string subject = 10;</code>
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
     * Ticket message.
     *
     * Generated from protobuf field <code>string message = 11;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Ticket message.
     *
     * Generated from protobuf field <code>string message = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * True if ticket is open and being handled or False if ticket has been resolved.
     *
     * Generated from protobuf field <code>bool is_open = 20;</code>
     * @return bool
     */
    public function getIsOpen()
    {
        return $this->is_open;
    }

    /**
     * True if ticket is open and being handled or False if ticket has been resolved.
     *
     * Generated from protobuf field <code>bool is_open = 20;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsOpen($var)
    {
        GPBUtil::checkBool($var);
        $this->is_open = $var;

        return $this;
    }

    /**
     * True if participant haven't seen new replies. This flag helps to find tickets which need participant's attention.
     *
     * Generated from protobuf field <code>bool is_read_by_participant = 21;</code>
     * @return bool
     */
    public function getIsReadByParticipant()
    {
        return $this->is_read_by_participant;
    }

    /**
     * True if participant haven't seen new replies. This flag helps to find tickets which need participant's attention.
     *
     * Generated from protobuf field <code>bool is_read_by_participant = 21;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsReadByParticipant($var)
    {
        GPBUtil::checkBool($var);
        $this->is_read_by_participant = $var;

        return $this;
    }

    /**
     * True if contest organiser haven't reply to the ticket. This flag helps to find tickets which need organiser's attention.
     *
     * Generated from protobuf field <code>bool is_read_by_owner = 22;</code>
     * @return bool
     */
    public function getIsReadByOwner()
    {
        return $this->is_read_by_owner;
    }

    /**
     * True if contest organiser haven't reply to the ticket. This flag helps to find tickets which need organiser's attention.
     *
     * Generated from protobuf field <code>bool is_read_by_owner = 22;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsReadByOwner($var)
    {
        GPBUtil::checkBool($var);
        $this->is_read_by_owner = $var;

        return $this;
    }

    /**
     * Timestamp when ticket was initially created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 23;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Timestamp when ticket was initially created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 23;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_at = $var;

        return $this;
    }

    /**
     * deprecated use is_read_by_participant instead
     *
     * Generated from protobuf field <code>bool is_read = 9991;</code>
     * @return bool
     */
    public function getIsRead()
    {
        return $this->is_read;
    }

    /**
     * deprecated use is_read_by_participant instead
     *
     * Generated from protobuf field <code>bool is_read = 9991;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsRead($var)
    {
        GPBUtil::checkBool($var);
        $this->is_read = $var;

        return $this;
    }

    /**
     * deprecated use is_read_by_owner instead
     *
     * Generated from protobuf field <code>bool needs_reply = 9992;</code>
     * @return bool
     */
    public function getNeedsReply()
    {
        return $this->needs_reply;
    }

    /**
     * deprecated use is_read_by_owner instead
     *
     * Generated from protobuf field <code>bool needs_reply = 9992;</code>
     * @param bool $var
     * @return $this
     */
    public function setNeedsReply($var)
    {
        GPBUtil::checkBool($var);
        $this->needs_reply = $var;

        return $this;
    }

}

