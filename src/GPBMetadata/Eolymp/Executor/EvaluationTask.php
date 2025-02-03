<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/evaluation_task.proto

namespace GPBMetadata\Eolymp\Executor;

class EvaluationTask
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Executor\Checker::initOnce();
        \GPBMetadata\Eolymp\Executor\File::initOnce();
        \GPBMetadata\Eolymp\Executor\Interactor::initOnce();
        \GPBMetadata\Eolymp\Executor\Script::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
%eolymp/executor/evaluation_task.protoeolymp.executoreolymp/executor/file.proto eolymp/executor/interactor.protoeolymp/executor/script.proto"�
EvaluationTask
task_id (	
	reference (	
origin (	
priority (
runtime
 (	

source_urln (	

header_urlo (	

footer_urlp (	$
files2 (2.eolymp.executor.File)
solution (2.eolymp.executor.Script!
redirect_stderr_to_stdout (
	run_count (C
preconditions( (2,.eolymp.executor.EvaluationTask.Precondition?
constraints (2*.eolymp.executor.EvaluationTask.Constraint)
checker (2.eolymp.executor.Checker/

interactor (2.eolymp.executor.Interactor(
scripts< (2.eolymp.executor.Script1
runs (2#.eolymp.executor.EvaluationTask.Run3
	Generator
script_name (	
	arguments (	�
Run
	reference (	
index (
debug (
cost (9
env (2,.eolymp.executor.EvaluationTask.Run.EnvEntry
labels (	
	input_url (	H 
input_content (	H D
input_generator (2).eolymp.executor.EvaluationTask.GeneratorH 

answer_url (	H
answer_content (	HE
answer_generator (2).eolymp.executor.EvaluationTask.GeneratorH*
EnvEntry
key (	
value (	:8B
inputB
answer�
Precondition
selector (	

depends_on
 (	G
dependency_mode (2..eolymp.executor.EvaluationTask.DependencyMode
stop_on_failure (
max_execution_time (�

Constraint
selector (	
actor (	
wall_time_limit
 (
cpu_time_limit (
memory_limit (
file_size_limit ("R
DependencyMode
UNKNOWN_DEPENDENCY_MODE 
FULLY_ACCEPTED
FIRST_POINTB3Z1github.com/eolymp/go-sdk/eolymp/executor;executorbproto3'
        , true);

        static::$is_initialized = true;
    }
}

