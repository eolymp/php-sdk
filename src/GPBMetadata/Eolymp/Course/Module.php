<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/module.proto

namespace GPBMetadata\Eolymp\Course;

class Module
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Course\Assignment::initOnce();
        \GPBMetadata\Eolymp\Ecm\Content::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
eolymp/course/module.protoeolymp.courseeolymp/ecm/content.protogoogle/protobuf/timestamp.proto"�
Module

id (	
url (	
draft (
extra (
weight (
name (	
	image_url (	
index ((
description
 (2.eolymp.ecm.Content/
start_after (2.google.protobuf.Timestamp3
complete_before (2.google.protobuf.Timestamp
duration (0
progress (2.eolymp.course.Module.Progress-

assignment  (2.eolymp.course.Assignment�
Progress0
status
 (2 .eolymp.course.Assignment.Status

percentage( (
grade) (
grade_automatic* (
grade_override+ (
excused, (/
start_after (2.google.protobuf.Timestamp3
complete_before (2.google.protobuf.Timestamp
duration (
upsolve (/
assigned_at (2.google.protobuf.Timestamp.

started_at (2.google.protobuf.Timestamp0
completed_at (2.google.protobuf.Timestamp"g
Extra
UNKNOWN_EXTRA 
DESCRIPTION_VALUE
DESCRIPTION_RENDER
PROGRESS

ASSIGNMENTB/Z-github.com/eolymp/go-sdk/eolymp/course;coursebproto3'
        , true);

        static::$is_initialized = true;
    }
}

