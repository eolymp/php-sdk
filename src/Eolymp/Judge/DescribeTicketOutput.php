<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/ticket_service.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.DescribeTicketOutput</code>
 */
class DescribeTicketOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.judge.Ticket ticket = 1;</code>
     */
    protected $ticket = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Judge\Ticket $ticket
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\TicketService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Ticket ticket = 1;</code>
     * @return \Eolymp\Judge\Ticket|null
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    public function hasTicket()
    {
        return isset($this->ticket);
    }

    public function clearTicket()
    {
        unset($this->ticket);
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

}

