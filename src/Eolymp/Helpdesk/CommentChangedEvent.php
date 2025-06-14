<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/helpdesk/events.proto

namespace Eolymp\Helpdesk;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.helpdesk.CommentChangedEvent</code>
 */
class CommentChangedEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string ticket_id = 1;</code>
     */
    protected $ticket_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.helpdesk.Ticket.Comment before = 2;</code>
     */
    protected $before = null;
    /**
     * Generated from protobuf field <code>.eolymp.helpdesk.Ticket.Comment after = 3;</code>
     */
    protected $after = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ticket_id
     *     @type \Eolymp\Helpdesk\Ticket\Comment $before
     *     @type \Eolymp\Helpdesk\Ticket\Comment $after
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Helpdesk\Events::initOnce();
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
     * Generated from protobuf field <code>.eolymp.helpdesk.Ticket.Comment before = 2;</code>
     * @return \Eolymp\Helpdesk\Ticket\Comment|null
     */
    public function getBefore()
    {
        return $this->before;
    }

    public function hasBefore()
    {
        return isset($this->before);
    }

    public function clearBefore()
    {
        unset($this->before);
    }

    /**
     * Generated from protobuf field <code>.eolymp.helpdesk.Ticket.Comment before = 2;</code>
     * @param \Eolymp\Helpdesk\Ticket\Comment $var
     * @return $this
     */
    public function setBefore($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Helpdesk\Ticket\Comment::class);
        $this->before = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.helpdesk.Ticket.Comment after = 3;</code>
     * @return \Eolymp\Helpdesk\Ticket\Comment|null
     */
    public function getAfter()
    {
        return $this->after;
    }

    public function hasAfter()
    {
        return isset($this->after);
    }

    public function clearAfter()
    {
        unset($this->after);
    }

    /**
     * Generated from protobuf field <code>.eolymp.helpdesk.Ticket.Comment after = 3;</code>
     * @param \Eolymp\Helpdesk\Ticket\Comment $var
     * @return $this
     */
    public function setAfter($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Helpdesk\Ticket\Comment::class);
        $this->after = $var;

        return $this;
    }

}

