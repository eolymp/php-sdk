<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/executor/file.proto

namespace GPBMetadata\Eolymp\Executor;

class File
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A\x94\x01\x0A\x1Aeolymp/executor/file.proto\x12\x0Feolymp.executor\"(\x0A\x04File\x12\x0C\x0A\x04path\x18\x01 \x01(\x09\x12\x12\x0A\x0Asource_url\x18\x03 \x01(\x09B3Z1github.com/eolymp/go-sdk/eolymp/executor;executorb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

