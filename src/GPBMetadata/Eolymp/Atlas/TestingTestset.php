<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/testing_testset.proto

namespace GPBMetadata\Eolymp\Atlas;

class TestingTestset
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Atlas\TestingFeedback::initOnce();
        \GPBMetadata\Eolymp\Atlas\TestingScoring::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
"eolymp/atlas/testing_testset.protoeolymp.atlas"eolymp/atlas/testing_scoring.proto"�
Testset

id (	

version_id (	
index (

time_limit
 (
	cpu_limit (
memory_limit (
file_size_limit (
dependencies (=
dependency_mode (2$.eolymp.atlas.Testset.DependencyMode/
scoring_mode (2.eolymp.atlas.ScoringMode5
feedback_policy( (2.eolymp.atlas.FeedbackPolicy"R
DependencyMode
UNKNOWN_DEPENDENCY_MODE 
FULLY_ACCEPTED
FIRST_POINTB-Z+github.com/eolymp/go-sdk/eolymp/atlas;atlasbproto3'
        , true);

        static::$is_initialized = true;
    }
}

