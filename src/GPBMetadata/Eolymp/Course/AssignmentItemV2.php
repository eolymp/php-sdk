<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/assignment_item_v2.proto

namespace GPBMetadata\Eolymp\Course;

class AssignmentItemV2
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Course\ModuleItem::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
&eolymp/course/assignment_item_v2.protoeolymp.coursegoogle/protobuf/timestamp.proto"�
AssignmentItemV2
module_item_id (	
progress
 (
grade (
excused (-
	graded_at (2.google.protobuf.TimestampB/Z-github.com/eolymp/go-sdk/eolymp/course;coursebproto3'
        , true);

        static::$is_initialized = true;
    }
}

