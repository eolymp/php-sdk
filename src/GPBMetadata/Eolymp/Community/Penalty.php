<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/penalty.proto

namespace GPBMetadata\Eolymp\Community;

class Penalty
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
�
eolymp/community/penalty.protoeolymp.community"�
Penalty

id (	
summary (	
description (	
scope (	.

created_at
 (2.google.protobuf.Timestamp.

expires_at (2.google.protobuf.Timestamp0
cancelled_at (2.google.protobuf.TimestampB5Z3github.com/eolymp/go-sdk/eolymp/community;communitybproto3'
        , true);

        static::$is_initialized = true;
    }
}

