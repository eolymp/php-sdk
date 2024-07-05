<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/helpdesk/ticket.proto

namespace GPBMetadata\Eolymp\Helpdesk;

class Ticket
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Ecm\Content::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
eolymp/helpdesk/ticket.protoeolymp.helpdeskgoogle/protobuf/timestamp.proto"�
Ticket

id (	*
type (2.eolymp.helpdesk.Ticket.Type
user_id (	

user_email (	7
metadata (2%.eolymp.helpdesk.Ticket.MetadataEntry.
status (2.eolymp.helpdesk.Ticket.Status
locale	 (	.

created_at
 (2.google.protobuf.Timestamp.

updated_at (2.google.protobuf.Timestamp
secret (	
subject (	$
message2 (2.eolymp.ecm.Content�
Comment

id (	
user_id (	

user_email (	?
metadata (2-.eolymp.helpdesk.Ticket.Comment.MetadataEntry.

created_at
 (2.google.protobuf.Timestamp.

updated_at (2.google.protobuf.Timestamp$
message2 (2.eolymp.ecm.Content/
MetadataEntry
key (	
value (	:8/
MetadataEntry
key (	
value (	:8"n
Type
NONE 
QUESTION
QUOTA_INCREASE
FEEDBACK
ACADEMIC_PLAN_REQUEST
SALES_REQUEST"X
Status
UNKNOWN 
PENDING
AWAITING

CLOSED
APPROVED
REJECTEDB3Z1github.com/eolymp/go-sdk/eolymp/helpdesk;helpdeskbproto3'
        , true);

        static::$is_initialized = true;
    }
}

