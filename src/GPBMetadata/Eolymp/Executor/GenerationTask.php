<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/generation_task.proto

namespace GPBMetadata\Eolymp\Executor;

class GenerationTask
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Executor\Script::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
%eolymp/executor/generation_task.protoeolymp.executor"�
GenerationTask
task_id (	
	reference (	
origin (	?
metadata (2-.eolymp.executor.GenerationTask.MetadataEntry
	run_count (+

interactor (2.eolymp.executor.Script*
	validator (2.eolymp.executor.Script(
scripts (2.eolymp.executor.Script1
runs
 (2#.eolymp.executor.GenerationTask.Run3
	Generator
script_name (	
	arguments (	�
Run
	reference (	
index (
cost (9
env (2,.eolymp.executor.GenerationTask.Run.EnvEntry
	input_url (	H 
input_content (	H D
input_generator (2).eolymp.executor.GenerationTask.GeneratorH 

answer_url (	H
answer_content (	HE
answer_generator (2).eolymp.executor.GenerationTask.GeneratorH*
EnvEntry
key (	
value (	:8B
inputB
answer/
MetadataEntry
key (	
value (	:8B3Z1github.com/eolymp/go-sdk/eolymp/executor;executorbproto3'
        , true);

        static::$is_initialized = true;
    }
}

