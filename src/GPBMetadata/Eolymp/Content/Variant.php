<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/content/variant.proto

namespace GPBMetadata\Eolymp\Content;

class Variant
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
�
eolymp/content/variant.protoeolymp.content"�
Variant

id (	
locale (	
title (	$
content3 (2.eolymp.ecm.Content"<
Extra
NO_EXTRA 
CONTENT_RENDER
CONTENT_VALUEB1Z/github.com/eolymp/go-sdk/eolymp/content;contentbproto3'
        , true);

        static::$is_initialized = true;
    }
}

