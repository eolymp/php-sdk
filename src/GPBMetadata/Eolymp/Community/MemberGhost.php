<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/community/member_ghost.proto

namespace GPBMetadata\Eolymp\Community;

class MemberGhost
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A\x8D\x01\x0A#eolymp/community/member_ghost.proto\x12\x10eolymp.community\"\x15\x0A\x05Ghost\x12\x0C\x0A\x04name\x18\x01 \x01(\x09B5Z3github.com/eolymp/go-sdk/eolymp/community;communityb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

