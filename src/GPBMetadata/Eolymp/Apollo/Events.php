<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/apollo/events.proto

namespace GPBMetadata\Eolymp\Apollo;

class Events
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
eolymp/apollo/events.protoeolymp.apollo"5
StarAddedEvent

problem_id (	
user_id (	"7
StarRemovedEvent

problem_id (	
user_id (	B/Z-github.com/eolymp/go-sdk/eolymp/apollo;apollobproto3'
        , true);

        static::$is_initialized = true;
    }
}

