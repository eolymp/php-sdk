<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/ticket.proto

namespace GPBMetadata\Eolymp\Judge;

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
�
eolymp/judge/ticket.protoeolymp.judgegoogle/protobuf/timestamp.proto"�
Ticket

id (	

contest_id (	
participant_id (	
	member_id (	+
status (2.eolymp.judge.Ticket.Status
subject
 (	$
message (2.eolymp.ecm.Content
raw_message (	
is_read (
reply_count (.

created_at (2.google.protobuf.Timestamp.

updated_at (2.google.protobuf.Timestamp+
read_at (2.google.protobuf.Timestamp1
last_reply_at (2.google.protobuf.Timestamp
cursord (	"<
Extra
NO_EXTRA 
MESSAGE_RENDER
MESSAGE_VALUE"D
Status
UNKNOWN_STATUS 
AWAITING
RESOLVED

CLOSEDB-Z+github.com/eolymp/go-sdk/eolymp/judge;judgebproto3'
        , true);

        static::$is_initialized = true;
    }
}

