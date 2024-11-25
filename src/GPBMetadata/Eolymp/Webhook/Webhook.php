<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/webhook/webhook.proto

namespace GPBMetadata\Eolymp\Webhook;

class Webhook
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
�	
eolymp/webhook/webhook.protoeolymp.webhook"�
Webhook

id (	
name (	
secret (	
endpoint (	
inactive (-
events
 (2.eolymp.webhook.Webhook.Event.

created_at (2.google.protobuf.Timestamp3
last_failure_at  (2.google.protobuf.Timestamp3
last_success_at! (2.google.protobuf.Timestamp
delivery_count (
failure_count ("�
Event
UNKNOWN_EVENT 
PROBLEM_CHANGEDd
PROBLEM_STATEMENT_CHANGEDe
PROBLEM_SCORE_CHANGEDf
SUBMISSION_CHANGED�
SUBMISSION_COMPLETED�
MEMBER_CHANGED�
GROUP_CHANGED�
COURSE_MODULE_CHANGED�
COURSE_MATERIAL_CHANGED�
COURSE_STUDENT_CHANGED�
COURSE_ASSIGNMENT_CHANGED�
DISCUSSION_MESSAGE_CHANGED�
POST_CHANGED�
POST_TRANSLATION_CHANGED�
POST_PUBLISHED�
TICKET_CHANGED�
TICKET_REPLY_CHANGED�!
CONTEST_SUBMISSION_COMPLETED�
CONTEST_SCORE_CHANGED� 
CONTEST_PARTICIPANT_CHANGED�
CONTEST_PARTICIPANT_JOINED�"s
Patch
PATCH_UNKNOWN 
	PATCH_ALL

PATCH_NAME
PATCH_ENDPOINT
PATCH_INACTIVE
PATCH_EVENTSB1Z/github.com/eolymp/go-sdk/eolymp/webhook;webhookbproto3'
        , true);

        static::$is_initialized = true;
    }
}

