<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/module_item.proto

namespace GPBMetadata\Eolymp\Course;

class ModuleItem
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
eolymp/course/module_item.protoeolymp.course"�

ModuleItem

id (	
url (	
draft (
name (	
	image_url (	
index (
depth (0
target (2 .eolymp.course.ModuleItem.Target2
grading (2!.eolymp.course.ModuleItem.Grading
progress� (
grade� (+
due_at� (2.google.protobuf.Timestamp-
start_at� (2.google.protobuf.Timestamp0
complete_at� (2.google.protobuf.Timestamp�
Target
type (	
ref (	:
attrs (2+.eolymp.course.ModuleItem.Target.AttrsEntry,

AttrsEntry
key (	
value (	:8
Grading
	max_score (B/Z-github.com/eolymp/go-sdk/eolymp/course;coursebproto3'
        , true);

        static::$is_initialized = true;
    }
}

