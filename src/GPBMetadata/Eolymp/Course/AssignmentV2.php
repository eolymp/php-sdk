<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/assignment_v2.proto

namespace GPBMetadata\Eolymp\Course;

class AssignmentV2
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Course\Module::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
!eolymp/course/assignment_v2.protoeolymp.coursegoogle/protobuf/timestamp.proto"�
AssignmentV2%
module (2.eolymp.course.Module2
status
 (2".eolymp.course.AssignmentV2.Status/
start_after (2.google.protobuf.Timestamp3
complete_before (2.google.protobuf.Timestamp
duration (/
assigned_at (2.google.protobuf.Timestamp.

started_at (2.google.protobuf.Timestamp0
completed_at (2.google.protobuf.Timestamp"m
Status
UNKNOWN_STATUS 

UNASSIGNED
	SCHEDULED	
READY

ACTIVE
COMPLETE
UPSOLVEB/Z-github.com/eolymp/go-sdk/eolymp/course;coursebproto3'
        , true);

        static::$is_initialized = true;
    }
}

