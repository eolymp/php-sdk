<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/activity.proto

namespace GPBMetadata\Eolymp\Judge;

class Activity
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
eolymp/judge/activity.protoeolymp.judge"�
Activity

id (	)
type (2.eolymp.judge.Activity.Type-
status (2.eolymp.judge.Activity.Status

contest_id (	
scoreboard_idd (	

problem_ide (	.

created_at
 (2.google.protobuf.Timestamp.

started_at (2.google.protobuf.Timestamp/
progress_at (2.google.protobuf.Timestamp/
complete_at (2.google.protobuf.Timestamp
progress (
total (
error (	"<
Type
NONE 
PROBLEM_RETEST
SCOREBOARD_REBUILD"H
Status
UNKNOWN 
CREATED
STARTED
COMPLETE	
ERRORB-Z+github.com/eolymp/go-sdk/eolymp/judge;judgebproto3'
        , true);

        static::$is_initialized = true;
    }
}

