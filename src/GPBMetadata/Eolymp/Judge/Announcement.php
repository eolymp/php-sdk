<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/announcement.proto

namespace GPBMetadata\Eolymp\Judge;

class Announcement
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
�
eolymp/judge/announcement.protoeolymp.judgegoogle/protobuf/timestamp.proto"�
Announcement

id (	

contest_id (	.

created_at (2.google.protobuf.Timestamp
subject
 (	$
message (2.eolymp.ecm.Content"<
Extra
NO_EXTRA 
MESSAGE_RENDER
MESSAGE_VALUEB-Z+github.com/eolymp/go-sdk/eolymp/judge;judgebproto3'
        , true);

        static::$is_initialized = true;
    }
}

