<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/ticket_service.proto

namespace GPBMetadata\Eolymp\Judge;

class TicketService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Annotations\Scope::initOnce();
        \GPBMetadata\Eolymp\Ecm\Content::initOnce();
        \GPBMetadata\Eolymp\Judge\Ticket::initOnce();
        \GPBMetadata\Eolymp\Judge\TicketReply::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Direction::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�.
!eolymp/judge/ticket_service.protoeolymp.judge"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.protoeolymp/ecm/content.protoeolymp/judge/ticket.protoeolymp/judge/ticket_reply.proto eolymp/wellknown/direction.proto!eolymp/wellknown/expression.protogoogle/protobuf/timestamp.proto"_
TicketChangedEvent$
before (2.eolymp.judge.Ticket#
after (2.eolymp.judge.Ticket"o
ReplyChangedEvent
	ticket_id (	#
before (2.eolymp.judge.Reply"
after (2.eolymp.judge.Reply"s
CreateTicketInput

contest_id (	
subject (	$
message (2.eolymp.ecm.Content
raw_message (	"\'
CreateTicketOutput
	ticket_id (	"�
UpdateTicketInput4
patch (2%.eolymp.judge.UpdateTicketInput.Patch
	ticket_id (	$
ticket (2.eolymp.judge.Ticket")
Patch
ALL 

STATUS
SUBJECT"
UpdateTicketOutput"g
ReadTicketInput

contest_id (	
	ticket_id (	-
	timestamp (2.google.protobuf.Timestamp"
ReadTicketOutput":
DeleteTicketInput

contest_id (	
	ticket_id (	"
DeleteTicketOutput"h
DescribeTicketInput

contest_id (	
	ticket_id (	*
extra� (2.eolymp.judge.Ticket.Extra"<
DescribeTicketOutput$
ticket (2.eolymp.judge.Ticket"�
ListTicketsInput
after (	
offset
 (
size (6
filters( (2%.eolymp.judge.ListTicketsInput.Filter1
sort2 (2#.eolymp.judge.ListTicketsInput.Sort*
order3 (2.eolymp.wellknown.Direction*
extra� (2.eolymp.judge.Ticket.Extra�
Filter*
id (2.eolymp.wellknown.ExpressionID2

contest_id (2.eolymp.wellknown.ExpressionID6
participant_id (2.eolymp.wellknown.ExpressionID1
	member_id (2.eolymp.wellknown.ExpressionID1
is_read (2 .eolymp.wellknown.ExpressionBool1
is_open (2 .eolymp.wellknown.ExpressionBool-
own (2 .eolymp.wellknown.ExpressionBool0
status	 (2 .eolymp.wellknown.ExpressionEnum"&
Sort

CREATED_AT 

UPDATED_AT"a
ListTicketsOutput
total (#
items (2.eolymp.judge.Ticket
next_page_cursor (	"�
ReplyTicketInput
	ticket_id (	$
message
 (2.eolymp.ecm.Content5
change_status_to (2.eolymp.judge.Ticket.Status"%
ReplyTicketOutput
reply_id (	"Q
WatchTicketInput
	ticket_id (	*
extra� (2.eolymp.judge.Ticket.Extra"9
WatchTicketOutput$
ticket (2.eolymp.judge.Ticket"v
WatchTicketsInput

contest_id (	
	member_id (	
status (	*
extra� (2.eolymp.judge.Ticket.Extra"�
WatchTicketsOutput5
event (2&.eolymp.judge.WatchTicketsOutput.Event$
ticket (2.eolymp.judge.Ticket"A
Event
UNKNOWN_EVENT 
CREATED
UPDATED
DELETED"@
WatchTicketSummaryInput

contest_id (	
	member_id (	"J
WatchTicketSummaryOutput
unread_count (
unresolved_count ("n
ListRepliesInput
	ticket_id (	
offset
 (
size ()
extra� (2.eolymp.judge.Reply.Extra"F
ListRepliesOutput
total ("
items (2.eolymp.judge.Reply"d
DescribeReplyInput
	ticket_id (	
reply_id (	)
extra� (2.eolymp.judge.Reply.Extra"9
DescribeReplyOutput"
reply (2.eolymp.judge.Reply"7
DeleteReplyInput
	ticket_id (	
reply_id (	"
DeleteReplyOutput"]
UpdateReplyInput
	ticket_id (	
reply_id (	$
message (2.eolymp.ecm.Content"
UpdateReplyOutput"a
WatchRepliesInput
	ticket_id (	
cursor (	)
extra� (2.eolymp.judge.Reply.Extra"�
WatchRepliesOutput5
event (2&.eolymp.judge.WatchRepliesOutput.Event"
reply (2.eolymp.judge.Reply"A
Event
UNKNOWN_EVENT 
CREATED
UPDATED
DELETED2�
TicketService�
CreateTicket.eolymp.judge.CreateTicketInput .eolymp.judge.CreateTicketOutput"@��
��
judge:contest:participate��
��
  �?��
���
"/tickets�
UpdateTicket.eolymp.judge.UpdateTicketInput .eolymp.judge.UpdateTicketOutput"F��
��
judge:contest:write��
��
  �?��
���"/tickets/{ticket_id}�

ReadTicket.eolymp.judge.ReadTicketInput.eolymp.judge.ReadTicketOutput"J��
��
judge:contest:read��
��
   @��

���"/tickets/{ticket_id}/read�
DeleteTicket.eolymp.judge.DeleteTicketInput .eolymp.judge.DeleteTicketOutput"F��
��
judge:contest:write��
��
   @��

���*/tickets/{ticket_id}�
DescribeTicket!.eolymp.judge.DescribeTicketInput".eolymp.judge.DescribeTicketOutput"E��
��
judge:contest:read��
��
   @��

���/tickets/{ticket_id}�
ListTickets.eolymp.judge.ListTicketsInput.eolymp.judge.ListTicketsOutput"9��
��
judge:contest:read��
��
  �@��
���
/tickets�
ReplyTicket.eolymp.judge.ReplyTicketInput.eolymp.judge.ReplyTicketOutput"T��
��
judge:contest:participate��
��

�#>��
���"/tickets/{ticket_id}/repliesl
WatchTicket.eolymp.judge.WatchTicketInput.eolymp.judge.WatchTicketOutput"��
��
judge:contest:read0o
WatchTickets.eolymp.judge.WatchTicketsInput .eolymp.judge.WatchTicketsOutput"��
��
judge:contest:read0�
WatchTicketSummary%.eolymp.judge.WatchTicketSummaryInput&.eolymp.judge.WatchTicketSummaryOutput"��
��
judge:contest:read0�
ListReplies.eolymp.judge.ListRepliesInput.eolymp.judge.ListRepliesOutput"M��
��
judge:contest:read��
��
  �@��
���/tickets/{ticket_id}/replies�
DescribeReply .eolymp.judge.DescribeReplyInput!.eolymp.judge.DescribeReplyOutput"Y��
��
judge:contest:write��
��

�#>��
���)\'/tickets/{ticket_id}/replies/{reply_id}�
DeleteReply.eolymp.judge.DeleteReplyInput.eolymp.judge.DeleteReplyOutput"Y��
��
judge:contest:write��
��

�#>��
���)*\'/tickets/{ticket_id}/replies/{reply_id}�
UpdateReply.eolymp.judge.UpdateReplyInput.eolymp.judge.UpdateReplyOutput"Y��
��
judge:contest:write��
��

�#>��
���)"\'/tickets/{ticket_id}/replies/{reply_id}o
WatchReplies.eolymp.judge.WatchRepliesInput .eolymp.judge.WatchRepliesOutput"��
��
judge:contest:read0B-Z+github.com/eolymp/go-sdk/eolymp/judge;judgebproto3'
        , true);

        static::$is_initialized = true;
    }
}

