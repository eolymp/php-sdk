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
�
%eolymp/executor/generation_task.protoeolymp.executor"�
GenerationTask
task_id (	
	reference (	
origin (	1
runs
 (2#.eolymp.executor.GenerationTask.Run(
scripts (2.eolymp.executor.Script3
	Generator
script_name (	
	arguments (	�
Run
	reference (	
	input_url (	H 
input_content (	H D
input_generator (2).eolymp.executor.GenerationTask.GeneratorH 

answer_url (	H
answer_content (	HE
answer_generator (2).eolymp.executor.GenerationTask.GeneratorHB
inputB
answerB3Z1github.com/eolymp/go-sdk/eolymp/executor;executorbproto3'
        , true);

        static::$is_initialized = true;
    }
}

