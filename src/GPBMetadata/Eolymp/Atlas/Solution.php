<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/solution.proto

namespace GPBMetadata\Eolymp\Atlas;

class Solution
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
eolymp/atlas/solution.protoeolymp.atlas"�
Solution

id (	
name (	
secret (
runtime
 (	
source (	)
type (2.eolymp.atlas.Solution.Type"�
Type	
UNSET 
CORRECT
	INCORRECT
WRONG_ANSWER
TIMEOUT
OVERFLOW
TIMEOUT_OR_ACCEPTED
OVERFLOW_OR_ACCEPTED
DONT_RUN
FAILURE	B-Z+github.com/eolymp/go-sdk/eolymp/atlas;atlasbproto3'
        , true);

        static::$is_initialized = true;
    }
}

