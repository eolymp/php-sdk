<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/executor/stats.proto

namespace GPBMetadata\Eolymp\Executor;

class Stats
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A\x9F\x02\x0A\x1Beolymp/executor/stats.proto\x12\x0Feolymp.executor\"\xB1\x01\x0A\x05Stats\x12\x11\x0A\x09stdin_url\x18\x01 \x01(\x09\x12\x12\x0A\x0Astdout_url\x18\x02 \x01(\x09\x12\x12\x0A\x0Astderr_url\x18\x03 \x01(\x09\x12\x1A\x0A\x12wall_time_duration\x18\x14 \x01(\x0D\x12\x19\x0A\x11cpu_time_duration\x18\x19 \x01(\x0D\x12\x13\x0A\x0Bmemory_peak\x18\x1E \x01(\x04\x12\x0E\x0A\x06signal\x18e \x01(\x0D\x12\x11\x0A\x09exit_code\x18d \x01(\x0DB3Z1github.com/eolymp/go-sdk/eolymp/executor;executorb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

