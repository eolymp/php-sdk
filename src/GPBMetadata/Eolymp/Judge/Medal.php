<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/medal.proto

namespace GPBMetadata\Eolymp\Judge;

class Medal
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
eolymp/judge/medal.protoeolymp.judge*`
Medal
NO_MEDAL 

GOLD_MEDAL
SILVER_MEDAL
BRONZE_MEDAL
HONORABLE_MENTIONB-Z+github.com/eolymp/go-sdk/eolymp/judge;judgebproto3'
        , true);

        static::$is_initialized = true;
    }
}

