<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/script.proto

namespace GPBMetadata\Eolymp\Atlas;

class Script
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Executor\File::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
eolymp/atlas/script.protoeolymp.atlas"�
Script

id (	
name (	
secret (
runtime
 (	
source (	$
files (2.eolymp.executor.File"!
Extra
NO_EXTRA 

SOURCEB-Z+github.com/eolymp/go-sdk/eolymp/atlas;atlasbproto3'
        , true);

        static::$is_initialized = true;
    }
}

