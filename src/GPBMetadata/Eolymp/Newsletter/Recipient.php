<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/newsletter/recipient.proto

namespace GPBMetadata\Eolymp\Newsletter;

class Recipient
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
!eolymp/newsletter/recipient.protoeolymp.newsletter"�
	Recipient

id (	.

created_at
 (2.google.protobuf.Timestamp.

updated_at (2.google.protobuf.Timestamp+
sent_at (2.google.protobuf.Timestamp0
delivered_at (2.google.protobuf.Timestamp
	member_id (	3
status (2#.eolymp.newsletter.Recipient.Status
status_reason (	"t
Status
UNKNOWN_STATUS 
CREATED
PENDING
SENT
	DELIVERED
BOUNCED
SKIPPED	
ERRORB7Z5github.com/eolymp/go-sdk/eolymp/newsletter;newsletterbproto3'
        , true);

        static::$is_initialized = true;
    }
}

