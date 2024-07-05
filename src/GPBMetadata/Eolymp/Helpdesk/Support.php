<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/helpdesk/support.proto

namespace GPBMetadata\Eolymp\Helpdesk;

class Support
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
        \GPBMetadata\Eolymp\Helpdesk\AutoReplyService::initOnce();
        \GPBMetadata\Eolymp\Helpdesk\TicketService::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
eolymp/helpdesk/support.protoeolymp.helpdesk"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.proto(eolymp/helpdesk/auto_reply_service.proto$eolymp/helpdesk/ticket_service.proto2�
Support�
CreateTicket".eolymp.helpdesk.CreateTicketInput#.eolymp.helpdesk.CreateTicketOutput"E��
��
helpdesk:ticket:write��
��
   @��

���"/helpdesk/tickets�
UpdateTicket".eolymp.helpdesk.UpdateTicketInput#.eolymp.helpdesk.UpdateTicketOutput"Q��
��
helpdesk:ticket:write��
��
   @��

���/helpdesk/tickets/{ticket_id}�
DeleteTicket".eolymp.helpdesk.DeleteTicketInput#.eolymp.helpdesk.DeleteTicketOutput"Q��
��
helpdesk:ticket:write��
��
   @��

���*/helpdesk/tickets/{ticket_id}�
DescribeTicket$.eolymp.helpdesk.DescribeTicketInput%.eolymp.helpdesk.DescribeTicketOutput"P��
��
helpdesk:ticket:read��
��
   @��

���/helpdesk/tickets/{ticket_id}�
ListTickets!.eolymp.helpdesk.ListTicketsInput".eolymp.helpdesk.ListTicketsOutput"D��
��
helpdesk:ticket:read��
��
   @��

���/helpdesk/tickets�
ApproveTicket#.eolymp.helpdesk.ApproveTicketInput$.eolymp.helpdesk.ApproveTicketOutput"Y��
��
helpdesk:ticket:write��
��
   @��

���\'"%/helpdesk/tickets/{ticket_id}/approve�
RejectTicket".eolymp.helpdesk.RejectTicketInput#.eolymp.helpdesk.RejectTicketOutput"X��
��
helpdesk:ticket:write��
��
   @��

���&"$/helpdesk/tickets/{ticket_id}/reject�
CloseTicket!.eolymp.helpdesk.CloseTicketInput".eolymp.helpdesk.CloseTicketOutput"W��
��
helpdesk:ticket:write��
��
   @��

���%"#/helpdesk/tickets/{ticket_id}/close�

AddComment .eolymp.helpdesk.AddCommentInput!.eolymp.helpdesk.AddCommentOutput"Z��
��
helpdesk:ticket:write��
��
   @��

���("&/helpdesk/tickets/{ticket_id}/comments�
UpdateComment#.eolymp.helpdesk.UpdateCommentInput$.eolymp.helpdesk.UpdateCommentOutput"g��
��
helpdesk:ticket:write��
��
   @��

���53/helpdesk/tickets/{ticket_id}/comments/{comment_id}�
DeleteComment#.eolymp.helpdesk.DeleteCommentInput$.eolymp.helpdesk.DeleteCommentOutput"g��
��
helpdesk:ticket:write��
��
   @��

���5*3/helpdesk/tickets/{ticket_id}/comments/{comment_id}�
ListComments".eolymp.helpdesk.ListCommentsInput#.eolymp.helpdesk.ListCommentsOutput"Y��
��
helpdesk:ticket:read��
��
  �@��
���(&/helpdesk/tickets/{ticket_id}/comments�
DescribeComment%.eolymp.helpdesk.DescribeCommentInput&.eolymp.helpdesk.DescribeCommentOutput"g��
��
helpdesk:ticket:write��
��
  �@��
2���53/helpdesk/tickets/{ticket_id}/comments/{comment_id}�
CreateAutoReply%.eolymp.helpdesk.CreateAutoReplyInput&.eolymp.helpdesk.CreateAutoReplyOutput"M��
��
helpdesk:auto-reply:write��
��
   @��

���"/helpdesk/autoreplies�
UpdateAutoReply%.eolymp.helpdesk.UpdateAutoReplyInput&.eolymp.helpdesk.UpdateAutoReplyOutput"X��
��
helpdesk:auto-reply:write��
��
   @��

���" /helpdesk/autoreplies/{reply_id}�
DeleteAutoReply%.eolymp.helpdesk.DeleteAutoReplyInput&.eolymp.helpdesk.DeleteAutoReplyOutput"X��
��
helpdesk:auto-reply:write��
��
   @��

���"* /helpdesk/autoreplies/{reply_id}�
ListAutoReplies%.eolymp.helpdesk.ListAutoRepliesInput&.eolymp.helpdesk.ListAutoRepliesOutput"L��
��
helpdesk:auto-reply:read��
��
  �@��
���/helpdesk/autoreplies�
DescribeAutoReply\'.eolymp.helpdesk.DescribeAutoReplyInput(.eolymp.helpdesk.DescribeAutoReplyOutput"X��
��
helpdesk:auto-reply:write��
��
  �@��
2���" /helpdesk/autoreplies/{reply_id}�
UploadAttachment&.eolymp.helpdesk.UploadAttachmentInput\'.eolymp.helpdesk.UploadAttachmentOutput"I��
��
helpdesk:ticket:write��
��
  �@��
2���"/helpdesk/attachmentsB3Z1github.com/eolymp/go-sdk/eolymp/helpdesk;helpdeskbproto3'
        , true);

        static::$is_initialized = true;
    }
}

