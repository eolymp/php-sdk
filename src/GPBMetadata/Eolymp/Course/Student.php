<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/student.proto

namespace GPBMetadata\Eolymp\Course;

class Student
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
�
eolymp/course/student.protoeolymp.course"�
Student

id (	
	member_id (	
display_name (	
overall_progress
 (
overall_grade (,
grades (2.eolymp.course.Student.Grade.

updated_at (2.google.protobuf.Timestamp-
	graded_at (2.google.protobuf.Timestamp:
Grade
entry_id (	
progress
 (
grade (")
Extra
UNKNOWN_EXTRA 
	BREAKDOWNB/Z-github.com/eolymp/go-sdk/eolymp/course;coursebproto3'
        , true);

        static::$is_initialized = true;
    }
}

