<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/testing_scoring.proto

namespace GPBMetadata\Eolymp\Atlas;

class TestingScoring
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
"eolymp/atlas/testing_scoring.protoeolymp.atlas*C
ScoringMode
NO_SCORE 
EACH
ALL	
WORST
BESTB-Z+github.com/eolymp/go-sdk/eolymp/atlas;atlasbproto3'
        , true);

        static::$is_initialized = true;
    }
}

