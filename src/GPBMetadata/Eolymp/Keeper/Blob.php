<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/keeper/blob.proto

namespace GPBMetadata\Eolymp\Keeper;

class Blob
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
eolymp/keeper/blob.protoeolymp.keeper"J
Blob
ern (	
key (	
hash (	
size (
datad (B/Z-github.com/eolymp/go-sdk/eolymp/keeper;keeperbproto3'
        , true);

        static::$is_initialized = true;
    }
}

