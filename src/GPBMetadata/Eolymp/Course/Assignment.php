<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/assignment.proto

namespace GPBMetadata\Eolymp\Course;

class Assignment
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
�
eolymp/course/assignment.protoeolymp.course"�

Assignment

id (	
	member_id (	H 
group_id (	H 1
modules (2 .eolymp.course.Assignment.Module0
status
 (2 .eolymp.course.Assignment.Status/
start_after (2.google.protobuf.Timestamp3
complete_before (2.google.protobuf.Timestamp
duration (.

created_at (2.google.protobuf.Timestamp.

started_at (2.google.protobuf.Timestamp0
completed_at (2.google.protobuf.TimestampJ
Module
	module_id (	-
items (2.eolymp.course.Assignment.Item
Item
item_id (	"
Extra
UNKNOWN_EXTRA "m
Status
UNKNOWN_STATUS 

UNASSIGNED
	SCHEDULED	
READY

ACTIVE
COMPLETE
UPSOLVEB

assigneeB/Z-github.com/eolymp/go-sdk/eolymp/course;coursebproto3'
        , true);

        static::$is_initialized = true;
    }
}

