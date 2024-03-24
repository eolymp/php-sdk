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
     * Member who opened the ticket.
     *
     * Generated from protobuf field <code>string member_id = 4;</code>
     */
    protected $member_id = '';
    /**
     * Ticket status as
     *
     * Generated from protobuf field <code>.eolymp.judge.Ticket.Status status = 5;</code>
     */
    protected $status = 0;
    /**
     * Ticket subject. Max 255 symbols.
     *
     * Generated from protobuf field <code>string subject = 10;</code>
     */
    protected $subject = '';
    /**
     * Ticket message.
     *
     * Generated from protobuf field <code>.eolymp.ecm.Content message = 12;</code>
     */
    protected $message = null;
    /**
     * Generated from protobuf field <code>string raw_message = 11;</code>
     */
    protected $raw_message = '';
    /**
     * True if ticket has not been read by current user
     *
     * Generated from protobuf field <code>bool is_read = 21;</code>
     */
    protected $is_read = false;
    /**
     * Number of replies in the ticket.
     *
     * Generated from protobuf field <code>uint32 reply_count = 30;</code>
     */
    protected $reply_count = 0;
    /**
     * Timestamp when ticket was initially created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 23;</code>
     */
    protected $created_at = null;
    /**
     * Timestamp when ticket was modified/replied.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 24;</code>
     */
    protected $updated_at = null;
    /**
     * Timestamp when ticket was read by current user
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_at = 25;</code>
     */
    protected $read_at = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Ticket unique identifier.
     *     @type string $contest_id
     *           Contest where ticket was opened.
     *     @type string $participant_id
     *           Participant who opened the ticket.
     *     @type string $member_id
     *           Member who opened the ticket.
     *     @type int $status
     *           Ticket status as
     *     @type string $subject
     *           Ticket subject. Max 255 symbols.
     *     @type \Eolymp\Ecm\Content $message
     *           Ticket message.
     *     @type string $raw_message
     *     @type bool $is_read
     *           True if ticket has not been read by current user
     *     @type int $reply_count
     *           Number of replies in the ticket.
     *     @type \Google\Protobuf\Timestamp $created_at
     *           Timestamp when ticket was initially created.
     *     @type \Google\Protobuf\Timestamp $updated_at
     *           Timestamp when ticket was modified/replied.
     *     @type \Google\Protobuf\Timestamp $read_at
     *           Timestamp when ticket was read by current user
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
     * Member who opened the ticket.
     *
     * Generated from protobuf field <code>string member_id = 4;</code>
     * @return string
     */
    public function getMemberId()
    {
        return $this->member_id;
    }

    /**
     * Member who opened the ticket.
     *
     * Generated from protobuf field <code>string member_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMemberId($var)
    {
        GPBUtil::checkString($var, True);
        $this->member_id = $var;

        return $this;
    }

    /**
     * Ticket status as
     *
     * Generated from protobuf field <code>.eolymp.judge.Ticket.Status status = 5;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Ticket status as
     *
     * Generated from protobuf field <code>.eolymp.judge.Ticket.Status status = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Judge\Ticket_Status::class);
        $this->status = $var;

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
     * Generated from protobuf field <code>.eolymp.ecm.Content message = 12;</code>
     * @return \Eolymp\Ecm\Content
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Ticket message.
     *
     * Generated from protobuf field <code>.eolymp.ecm.Content message = 12;</code>
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
     * Generated from protobuf field <code>string raw_message = 11;</code>
     * @return string
     */
    public function getRawMessage()
    {
        return $this->raw_message;
    }

    /**
     * Generated from protobuf field <code>string raw_message = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setRawMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->raw_message = $var;

        return $this;
    }

    /**
     * True if ticket has not been read by current user
     *
     * Generated from protobuf field <code>bool is_read = 21;</code>
     * @return bool
     */
    public function getIsRead()
    {
        return $this->is_read;
    }

    /**
     * True if ticket has not been read by current user
     *
     * Generated from protobuf field <code>bool is_read = 21;</code>
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
     * Number of replies in the ticket.
     *
     * Generated from protobuf field <code>uint32 reply_count = 30;</code>
     * @return int
     */
    public function getReplyCount()
    {
        return $this->reply_count;
    }

    /**
     * Number of replies in the ticket.
     *
     * Generated from protobuf field <code>uint32 reply_count = 30;</code>
     * @param int $var
     * @return $this
     */
    public function setReplyCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->reply_count = $var;

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
     * Timestamp when ticket was modified/replied.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 24;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Timestamp when ticket was modified/replied.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 24;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->updated_at = $var;

        return $this;
    }

    /**
     * Timestamp when ticket was read by current user
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_at = 25;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getReadAt()
    {
        return $this->read_at;
    }

    /**
     * Timestamp when ticket was read by current user
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_at = 25;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReadAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->read_at = $var;

        return $this;
    }

}

