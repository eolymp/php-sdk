<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/helpdesk/events.proto

namespace GPBMetadata\Eolymp\Helpdesk;

class Events
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Helpdesk\Ticket::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
eolymp/helpdesk/events.protoeolymp.helpdesk"e
TicketChangedEvent\'
before (2.eolymp.helpdesk.Ticket&
after (2.eolymp.helpdesk.Ticket"�
CommentChangedEvent
	ticket_id (	/
before (2.eolymp.helpdesk.Ticket.Comment.
after (2.eolymp.helpdesk.Ticket.CommentB3Z1github.com/eolymp/go-sdk/eolymp/helpdesk;helpdeskbproto3'
        , true);

        static::$is_initialized = true;
    }
}

