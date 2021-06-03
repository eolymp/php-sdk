<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/events.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.TicketUpdatedEvent</code>
 */
class TicketUpdatedEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.judge.Ticket ticket = 1;</code>
     */
    protected $ticket = null;
    /**
     * Generated from protobuf field <code>.eolymp.judge.Reply reply = 2;</code>
     */
    protected $reply = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Judge\Ticket $ticket
     *     @type \Eolymp\Judge\Reply $reply
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Events::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Ticket ticket = 1;</code>
     * @return \Eolymp\Judge\Ticket
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Ticket ticket = 1;</code>
     * @param \Eolymp\Judge\Ticket $var
     * @return $this
     */
    public function setTicket($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Ticket::class);
        $this->ticket = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Reply reply = 2;</code>
     * @return \Eolymp\Judge\Reply
     */
    public function getReply()
    {
        return $this->reply;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Reply reply = 2;</code>
     * @param \Eolymp\Judge\Reply $var
     * @return $this
     */
    public function setReply($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Reply::class);
        $this->reply = $var;

        return $this;
    }

}

