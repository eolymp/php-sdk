<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/executor_service.proto

namespace GPBMetadata\Eolymp\Executor;

class ExecutorService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Executor\Task::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
&eolymp/executor/executor_service.protoeolymp.executoreolymp/executor/task.proto"6
CreateTaskInput#
task (2.eolymp.executor.Task"
CreateTaskOutput2v
ExecutorServicec

CreateTask .eolymp.executor.CreateTaskInput!.eolymp.executor.CreateTaskOutput"��
��
  �A��
�B3Z1github.com/eolymp/go-sdk/eolymp/executor;executorbproto3'
        , true);

        static::$is_initialized = true;
    }
}

