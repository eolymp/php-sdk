<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/runtime/runtime.proto

namespace GPBMetadata\Eolymp\Runtime;

class Runtime
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Runtime\Language::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xEF\x01\x0A\x1Ceolymp/runtime/runtime.proto\x12\x0Eeolymp.runtime\"\x83\x01\x0A\x07Runtime\x12\x0A\x0A\x02id\x18\x01 \x01(\x09\x12\x0C\x0A\x04lang\x18\x02 \x01(\x09\x12\x0F\x0A\x07version\x18\x03 \x01(\x09\x12+\x0A\x04type\x18\x04 \x01(\x0E2\x1D.eolymp.runtime.Language.Type\x12\x0C\x0A\x04name\x18\x0A \x01(\x09\x12\x12\x0A\x0Adeprecated\x18\x0C \x01(\x08B1Z/github.com/eolymp/go-sdk/eolymp/runtime;runtimeb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

