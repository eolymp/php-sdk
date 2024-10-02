<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/events.proto

namespace GPBMetadata\Eolymp\Course;

class Events
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Course\Assignment::initOnce();
        \GPBMetadata\Eolymp\Course\Material::initOnce();
        \GPBMetadata\Eolymp\Course\Module::initOnce();
        \GPBMetadata\Eolymp\Course\Student::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
eolymp/course/events.protoeolymp.courseeolymp/course/material.protoeolymp/course/module.protoeolymp/course/student.proto"t
ModuleChangedEvent
	course_id (	%
before (2.eolymp.course.Module$
after (2.eolymp.course.Module"z
MaterialChangedEvent
	course_id (	\'
before (2.eolymp.course.Material&
after (2.eolymp.course.Material"w
StudentChangedEvent
	course_id (	&
before (2.eolymp.course.Student%
after (2.eolymp.course.Student"�
AssignmentChangedEvent
	course_id (	
	module_id (	)
before (2.eolymp.course.Assignment(
after (2.eolymp.course.AssignmentB/Z-github.com/eolymp/go-sdk/eolymp/course;coursebproto3'
        , true);

        static::$is_initialized = true;
    }
}

