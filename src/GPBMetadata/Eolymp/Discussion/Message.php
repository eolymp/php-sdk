<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/message.proto

namespace GPBMetadata\Eolymp\Discussion;

class Message
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Ecm\Content::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Link::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
eolymp/discussion/message.protoeolymp.discussioneolymp/wellknown/link.protogoogle/protobuf/timestamp.proto"�
Message

id (	
url (	

thread_url (	
	member_id (	
reply_to (	
vote (

vote_count
 (
reply_count (-
	posted_at (2.google.protobuf.Timestamp-
	edited_at (2.google.protobuf.Timestamp.

deleted_at (2.google.protobuf.Timestamp
revision ($
messaged (2.eolymp.ecm.Content&
links� (2.eolymp.wellknown.Link"`
Extra
UNKNOWN_EXTRA 
MESSAGE_VALUE
MESSAGE_RENDER
MESSAGE_PREVIEW
VOTEB7Z5github.com/eolymp/go-sdk/eolymp/discussion;discussionbproto3'
        , true);

        static::$is_initialized = true;
    }
}

