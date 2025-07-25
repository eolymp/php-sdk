<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/helpdesk/ticket_service.proto

namespace Eolymp\Helpdesk;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.helpdesk.UpdateTicketInput</code>
 */
class UpdateTicketInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string ticket_id = 1;</code>
     */
    protected $ticket_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.helpdesk.Ticket ticket = 2;</code>
     */
    protected $ticket = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ticket_id
     *     @type \Eolymp\Helpdesk\Ticket $ticket
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Helpdesk\TicketService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string ticket_id = 1;</code>
     * @return string
     */
    public function getTicketId()
    {
        return $this->ticket_id;
    }

    /**
     * Generated from protobuf field <code>string ticket_id = 1;</code>
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
     * Generated from protobuf field <code>.eolymp.helpdesk.Ticket ticket = 2;</code>
     * @return \Eolymp\Helpdesk\Ticket|null
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
     * Generated from protobuf field <code>.eolymp.helpdesk.Ticket ticket = 2;</code>
     * @param \Eolymp\Helpdesk\Ticket $var
     * @return $this
     */
    public function setTicket($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Helpdesk\Ticket::class);
        $this->ticket = $var;

        return $this;
    }

}

