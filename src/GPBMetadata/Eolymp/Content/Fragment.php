<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/content/fragment.proto

namespace GPBMetadata\Eolymp\Content;

class Fragment
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
�
eolymp/content/fragment.protoeolymp.contentgoogle/protobuf/timestamp.proto"�
Fragment

id (	
path
 (	
locale (	
draft (
title (	$
content3 (2.eolymp.ecm.Content.

created_at< (2.google.protobuf.Timestamp.

updated_at= (2.google.protobuf.Timestamp
labelsd (	"<
Extra
NO_EXTRA 
CONTENT_RENDER
CONTENT_VALUE"�
Patch
UNKNOWN_PATCH 
	PATCH_ALL

PATCH_PATH
PATCH_LOCALE
PATCH_DRAFT
PATCH_TITLE
PATCH_CONTENT
PATCH_LABELSB1Z/github.com/eolymp/go-sdk/eolymp/content;contentbproto3'
        , true);

        static::$is_initialized = true;
    }
}

