<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/suggestion.proto

namespace GPBMetadata\Eolymp\Atlas;

class Suggestion
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
eolymp/atlas/suggestion.protoeolymp.atlasgoogle/protobuf/timestamp.proto"�

Suggestion

id (	/
status (2.eolymp.atlas.Suggestion.Status
locale (	
title (	
	member_id (	.

created_at
 (2.google.protobuf.Timestamp.

updated_at (2.google.protobuf.Timestamp
topicsd (	

difficultye (&
	statementf (2.eolymp.ecm.Content&
	editorialg (2.eolymp.ecm.Content"T
Status
UNKNOWN_STATUS 
PENDING
	IN_REVIEW
APPROVED
REJECTEDB-Z+github.com/eolymp/go-sdk/eolymp/atlas;atlasbproto3'
        , true);

        static::$is_initialized = true;
    }
}

