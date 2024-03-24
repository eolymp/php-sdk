<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/ticket_service.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.WatchTicketsOutput</code>
 */
class WatchTicketsOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.judge.WatchTicketsOutput.Event event = 1;</code>
     */
    protected $event = 0;
    /**
     * Generated from protobuf field <code>.eolymp.judge.Ticket ticket = 2;</code>
     */
    protected $ticket = null;
    /**
     * Generated from protobuf field <code>uint32 unread_count = 3;</code>
     */
    protected $unread_count = 0;
    /**
     * Generated from protobuf field <code>uint32 unresolved_count = 4;</code>
     */
    protected $unresolved_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $event
     *     @type \Eolymp\Judge\Ticket $ticket
     *     @type int $unread_count
     *     @type int $unresolved_count
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\TicketService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.WatchTicketsOutput.Event event = 1;</code>
     * @return int
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.WatchTicketsOutput.Event event = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setEvent($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Judge\WatchTicketsOutput_Event::class);
        $this->event = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Ticket ticket = 2;</code>
     * @return \Eolymp\Judge\Ticket
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Ticket ticket = 2;</code>
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
     * Generated from protobuf field <code>uint32 unread_count = 3;</code>
     * @return int
     */
    public function getUnreadCount()
    {
        return $this->unread_count;
    }

    /**
     * Generated from protobuf field <code>uint32 unread_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setUnreadCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->unread_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 unresolved_count = 4;</code>
     * @return int
     */
    public function getUnresolvedCount()
    {
        return $this->unresolved_count;
    }

    /**
     * Generated from protobuf field <code>uint32 unresolved_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setUnresolvedCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->unresolved_count = $var;

        return $this;
    }

}

