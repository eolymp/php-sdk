<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/stats.proto

namespace GPBMetadata\Eolymp\Executor;

class Stats
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
eolymp/executor/stats.protoeolymp.executor"�
Stats
	stdin_url (	

stdout_url (	

stderr_url (	
wall_time_duration (
cpu_time_duration (
memory_peak (
signale (
	exit_coded (B3Z1github.com/eolymp/go-sdk/eolymp/executor;executorbproto3'
        , true);

        static::$is_initialized = true;
    }
}

