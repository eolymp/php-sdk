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
        \GPBMetadata\Eolymp\Ecm\Content::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
eolymp/course/module.protoeolymp.coursegoogle/protobuf/timestamp.proto"�
Module

id (	
url (	
draft (
name (	
	image_url (	
index ((
description
 (2.eolymp.ecm.Content4

assignment (2 .eolymp.course.Module.Assignment�

Assignment-
status� (2.eolymp.course.Module.Status
progress� (
grade� (-
due_time� (2.google.protobuf.Timestamp/

start_time� (2.google.protobuf.Timestamp-
end_time� (2.google.protobuf.Timestamp"Y
Extra
UNKNOWN_EXTRA 
DESCRIPTION_VALUE
DESCRIPTION_RENDER

ASSIGNMENT"S
Status
UNKNOWN_STATUS 
BLOCKED	
READY
IN_PROGRESS
COMPLETEB/Z-github.com/eolymp/go-sdk/eolymp/course;coursebproto3'
        , true);

        static::$is_initialized = true;
    }
}

