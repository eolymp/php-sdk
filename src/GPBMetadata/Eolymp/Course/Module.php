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
        $pool->internalAddGeneratedFile(
            '
�
eolymp/course/module.protoeolymp.course"�
Module

id (	
url (	
draft (
name (	
	image_url (	
index ((
description
 (2.eolymp.ecm.Content"I
Extra
UNKNOWN_EXTRA 
DESCRIPTION_VALUE
DESCRIPTION_RENDER"S
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

