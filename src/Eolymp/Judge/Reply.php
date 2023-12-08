<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/reply.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.Reply</code>
 */
class Reply extends \Google\Protobuf\Internal\Message
{
    /**
     * Reply unique identifier.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string ern = 9999;</code>
     */
    protected $ern = '';
    /**
     * Ticket this reply belongs to.
     *
     * Generated from protobuf field <code>string ticket_id = 2;</code>
     */
    protected $ticket_id = '';
    /**
     * Message of the reply.
     *
     * Generated from protobuf field <code>.eolymp.ecm.Content message = 10;</code>
     */
    protected $message = null;
    /**
     * Timestamp when reply was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 11;</code>
     */
    protected $created_at = null;
    protected $author;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Reply unique identifier.
     *     @type string $ern
     *     @type string $ticket_id
     *           Ticket this reply belongs to.
     *     @type string $user_id
     *     @type string $member_id
     *     @type \Eolymp\Ecm\Content $message
     *           Message of the reply.
     *     @type \Google\Protobuf\Timestamp $created_at
     *           Timestamp when reply was created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Reply::initOnce();
        parent::__construct($data);
    }

    /**
     * Reply unique identifier.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Reply unique identifier.
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
     * Ticket this reply belongs to.
     *
     * Generated from protobuf field <code>string ticket_id = 2;</code>
     * @return string
     */
    public function getTicketId()
    {
        return $this->ticket_id;
    }

    /**
     * Ticket this reply belongs to.
     *
     * Generated from protobuf field <code>string ticket_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTicketId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ticket_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string user_id = 3;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>string user_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string member_id = 4;</code>
     * @return string
     */
    public function getMemberId()
    {
        return $this->readOneof(4);
    }

    /**
     * Generated from protobuf field <code>string member_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMemberId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Message of the reply.
     *
     * Generated from protobuf field <code>.eolymp.ecm.Content message = 10;</code>
     * @return \Eolymp\Ecm\Content
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Message of the reply.
     *
     * Generated from protobuf field <code>.eolymp.ecm.Content message = 10;</code>
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
     * Timestamp when reply was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 11;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Timestamp when reply was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 11;</code>
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
     * @return string
     */
    public function getAuthor()
    {
        return $this->whichOneof("author");
    }

}

