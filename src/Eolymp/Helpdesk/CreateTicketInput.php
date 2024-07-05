<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/helpdesk/ticket_service.proto

namespace Eolymp\Helpdesk;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.helpdesk.CreateTicketInput</code>
 */
class CreateTicketInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.helpdesk.Ticket ticket = 1;</code>
     */
    protected $ticket = null;
    /**
     * Generated from protobuf field <code>string captcha = 2;</code>
     */
    protected $captcha = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Helpdesk\Ticket $ticket
     *     @type string $captcha
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Helpdesk\TicketService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.helpdesk.Ticket ticket = 1;</code>
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
     * Generated from protobuf field <code>.eolymp.helpdesk.Ticket ticket = 1;</code>
     * @param \Eolymp\Helpdesk\Ticket $var
     * @return $this
     */
    public function setTicket($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Helpdesk\Ticket::class);
        $this->ticket = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string captcha = 2;</code>
     * @return string
     */
    public function getCaptcha()
    {
        return $this->captcha;
    }

    /**
     * Generated from protobuf field <code>string captcha = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCaptcha($var)
    {
        GPBUtil::checkString($var, True);
        $this->captcha = $var;

        return $this;
    }

}

