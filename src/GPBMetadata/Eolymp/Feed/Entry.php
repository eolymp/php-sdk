<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/feed/entry.proto

namespace GPBMetadata\Eolymp\Feed;

class Entry
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Wellknown\Link::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xE1\x02\x0A\x17eolymp/feed/entry.proto\x12\x0Beolymp.feed\x1A\x1Fgoogle/protobuf/timestamp.proto\"\xE2\x01\x0A\x05Entry\x12\x0A\x0A\x02id\x18\x01 \x01(\x09\x12\x0C\x0A\x04type\x18\x02 \x01(\x09\x12-\x0A\x09timestamp\x18\x03 \x01(\x0B2\x1A.google.protobuf.Timestamp\x126\x0A\x0Aattributes\x18\x0A \x03(\x0B2\".eolymp.feed.Entry.AttributesEntry\x12%\x0A\x05links\x18\x14 \x03(\x0B2\x16.eolymp.wellknown.Link\x1A1\x0A\x0FAttributesEntry\x12\x0B\x0A\x03key\x18\x01 \x01(\x09\x12\x0D\x0A\x05value\x18\x02 \x01(\x09:\x028\x01B+Z)github.com/eolymp/go-sdk/eolymp/feed;feedb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

