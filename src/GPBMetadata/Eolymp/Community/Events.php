<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/events.proto

namespace GPBMetadata\Eolymp\Community;

class Events
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Community\Member::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
eolymp/community/events.protoeolymp.community">
MemberCreatedEvent(
member (2.eolymp.community.Member">
MemberUpdatedEvent(
member (2.eolymp.community.Member">
MemberDeletedEvent(
member (2.eolymp.community.Member"�
MemberChangeRecord
space_id (	:
op (2..eolymp.community.MemberChangeRecord.Operation(
member (2.eolymp.community.Member"A
	Operation
NO_OPERATION 

CREATE

UPDATE

DELETEB5Z3github.com/eolymp/go-sdk/eolymp/community;communitybproto3'
        , true);

        static::$is_initialized = true;
    }
}

