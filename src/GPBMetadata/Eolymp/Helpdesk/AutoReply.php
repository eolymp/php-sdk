<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/helpdesk/auto_reply.proto

namespace GPBMetadata\Eolymp\Helpdesk;

class AutoReply
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Ecm\Content::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
 eolymp/helpdesk/auto_reply.protoeolymp.helpdesk"k
	AutoReply

id (	
locale (	
name (	$
message (2.eolymp.ecm.Content
labels (	B3Z1github.com/eolymp/go-sdk/eolymp/helpdesk;helpdeskbproto3'
        , true);

        static::$is_initialized = true;
    }
}

