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
        \GPBMetadata\Eolymp\Community\Group::initOnce();
        \GPBMetadata\Eolymp\Community\Member::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
eolymp/community/events.protoeolymp.communityeolymp/community/member.proto">
MemberCreatedEvent(
member (2.eolymp.community.Member">
MemberUpdatedEvent(
member (2.eolymp.community.Member">
MemberDeletedEvent(
member (2.eolymp.community.Member"g
MemberChangedEvent(
before (2.eolymp.community.Member\'
after (2.eolymp.community.Member"d
GroupChangedEvent\'
before (2.eolymp.community.Group&
after (2.eolymp.community.GroupB5Z3github.com/eolymp/go-sdk/eolymp/community;communitybproto3'
        , true);

        static::$is_initialized = true;
    }
}

