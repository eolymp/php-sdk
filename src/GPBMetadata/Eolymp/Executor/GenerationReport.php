<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/generation_report.proto

namespace GPBMetadata\Eolymp\Executor;

class GenerationReport
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Executor\Stats::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
\'eolymp/executor/generation_report.protoeolymp.executor"�
GenerationReport
task_id (	
	reference (	
origin (	A
metadata (2/.eolymp.executor.GenerationReport.MetadataEntry
agent (	3
runs( (2%.eolymp.executor.GenerationReport.Run
error_message2 (	�
Run
	reference (	<
status (2,.eolymp.executor.GenerationReport.Run.Status
	input_url
 (	

answer_url (	5
input_generator_stats (2.eolymp.executor.Stats6
answer_generator_stats (2.eolymp.executor.Stats
error_message( (	"9
Status
NONE 
PENDING
COMPLETE

FAILED/
MetadataEntry
key (	
value (	:8B3Z1github.com/eolymp/go-sdk/eolymp/executor;executorbproto3'
        , true);

        static::$is_initialized = true;
    }
}

