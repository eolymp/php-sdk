<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/ranking_event.proto

namespace GPBMetadata\Eolymp\Community;

class RankingEvent
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
�
$eolymp/community/ranking_event.protoeolymp.community"k
RankingEvent

id (	
name (	-
	timestamp (2.google.protobuf.Timestamp

contest_idd (	B5Z3github.com/eolymp/go-sdk/eolymp/community;communitybproto3'
        , true);

        static::$is_initialized = true;
    }
}

