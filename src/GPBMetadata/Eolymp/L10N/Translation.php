<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/l10n/translation.proto

namespace GPBMetadata\Eolymp\L10N;

class Translation
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
eolymp/l10n/translation.protoeolymp.l10n"�
Translation

id (	
locale (	
message (	/
status (2.eolymp.l10n.Translation.Status
needs_review (

created_by
 (	.

created_at (2.google.protobuf.Timestamp/
approved_at (2.google.protobuf.Timestamp"7
Status
NONE 
PENDING

ACTIVE

UNUSEDB+Z)github.com/eolymp/go-sdk/eolymp/l10n;l10nbproto3'
        , true);

        static::$is_initialized = true;
    }
}

