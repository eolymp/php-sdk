<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/testing_interactor.proto

namespace GPBMetadata\Eolymp\Atlas;

class TestingInteractor
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Executor\File::initOnce();
        \GPBMetadata\Eolymp\Executor\Interactor::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
%eolymp/atlas/testing_interactor.protoeolymp.atlas eolymp/executor/interactor.proto"�

Interactor

version_id (	
secret (.
type (2 .eolymp.executor.Interactor.Type
runtime (	
source (	$
files
 (2.eolymp.executor.FileB-Z+github.com/eolymp/go-sdk/eolymp/atlas;atlasbproto3'
        , true);

        static::$is_initialized = true;
    }
}

