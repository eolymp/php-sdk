<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/submission_assistant_service.proto

namespace GPBMetadata\Eolymp\Atlas;

class SubmissionAssistantService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/eolymp/atlas/submission_assistant_service.protoeolymp.atlas"eolymp/annotations/ratelimit.proto"=
DebugSubmissionInput
submission_id (	
locale (	"J
DebugSubmissionOutput
assistance_id (	
assistance_message (	"A
RateDebugAssistanceInput
submission_id (	
rating ("
RateDebugAssistanceOutput2�
SubmissionAssistantService�
DebugSubmission".eolymp.atlas.DebugSubmissionInput#.eolymp.atlas.DebugSubmissionOutput"C��
��
  �?��
���.",/submissions/{submission_id}/assistant:debug�
RateDebugAssistance&.eolymp.atlas.RateDebugAssistanceInput\'.eolymp.atlas.RateDebugAssistanceOutput"B��
��
  �?��
���-"+/submissions/{submission_id}/assistant:rateB-Z+github.com/eolymp/go-sdk/eolymp/atlas;atlasbproto3'
        , true);

        static::$is_initialized = true;
    }
}

