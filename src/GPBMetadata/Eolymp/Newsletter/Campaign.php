<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/newsletter/campaign.proto

namespace GPBMetadata\Eolymp\Newsletter;

class Campaign
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Community\EmailType::initOnce();
        \GPBMetadata\Eolymp\Ecm\Content::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
 eolymp/newsletter/campaign.protoeolymp.newslettereolymp/ecm/content.protogoogle/protobuf/timestamp.proto"�
Campaign

id (	)
type (2.eolymp.community.EmailType.

created_at (2.google.protobuf.Timestamp
name
 (	
subject (	$
content (2.eolymp.ecm.Content
recipients_count (
pending_count (

sent_count  (
error_count! (s
Translation

id (	
localef (	
subjectg (	$
contenth (2.eolymp.ecm.Content
	automatici ("J
Patch
ALL 
TYPE
NAME
SUBJECT
CONTENT

LOCALE"A
Extra
UNKNOWN_EXTRA 
CONTENT_VALUE
CONTENT_RENDERB7Z5github.com/eolymp/go-sdk/eolymp/newsletter;newsletterbproto3'
        , true);

        static::$is_initialized = true;
    }
}

