<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/submission_service.proto

namespace GPBMetadata\Eolymp\Atlas;

class SubmissionService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Annotations\Scope::initOnce();
        \GPBMetadata\Eolymp\Atlas\Submission::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
%eolymp/atlas/submission_service.protoeolymp.atlas"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.protoeolymp/atlas/submission.proto!eolymp/wellknown/expression.proto"I
CreateSubmissionInput

problem_id (	
lang (	
source (	"/
CreateSubmissionOutput
submission_id (	"D
DescribeSubmissionInput

problem_id (	
submission_id (	"x
DescribeSubmissionOutput,

submission (2.eolymp.atlas.Submission.
extra� (2.eolymp.atlas.Submission.Extra"q
WatchSubmissionInput

problem_id (	
submission_id (	.
extra� (2.eolymp.atlas.Submission.Extra"E
WatchSubmissionOutput,

submission (2.eolymp.atlas.Submission"Q
RetestSubmissionInput

problem_id (	
submission_id (	
debug ("
RetestSubmissionOutput"�
ListSubmissionsInput

problem_id (	
after (	
offset
 (
size (:
filters( (2).eolymp.atlas.ListSubmissionsInput.Filter.
extra� (2.eolymp.atlas.Submission.Extra�
Filter*
id (2.eolymp.wellknown.ExpressionID2

problem_id (2.eolymp.wellknown.ExpressionID/
user_id (2.eolymp.wellknown.ExpressionID1
	member_id	 (2.eolymp.wellknown.ExpressionID;
submitted_at (2%.eolymp.wellknown.ExpressionTimestamp1
runtime (2 .eolymp.wellknown.ExpressionEnum0
status (2 .eolymp.wellknown.ExpressionEnum0
score (2!.eolymp.wellknown.ExpressionFloat5

percentage (2!.eolymp.wellknown.ExpressionFloat"�
ListSubmissionsOutput
total (\'
items (2.eolymp.atlas.Submission
next_page_cursor (	
prev_page_cursor (	2�
SubmissionService�
CreateSubmission#.eolymp.atlas.CreateSubmissionInput$.eolymp.atlas.CreateSubmissionOutput"A��
��

�#>��
��
��
atlas:submission:write���"/submissions�
RetestSubmission#.eolymp.atlas.RetestSubmissionInput$.eolymp.atlas.RetestSubmissionOutput"X��
��
  �?��

��
��
atlas:submission:write���%"#/submissions/{submission_id}/retest�
DescribeSubmission%.eolymp.atlas.DescribeSubmissionInput&.eolymp.atlas.DescribeSubmissionOutput"P��
��
  �@��

��
��
atlas:submission:read���/submissions/{submission_id}{
WatchSubmission".eolymp.atlas.WatchSubmissionInput#.eolymp.atlas.WatchSubmissionOutput"��
��
atlas:submission:read0�
ListSubmissions".eolymp.atlas.ListSubmissionsInput#.eolymp.atlas.ListSubmissionsOutput"@��
��
  �@��

��
��
atlas:submission:read���/submissionsB-Z+github.com/eolymp/go-sdk/eolymp/atlas;atlasbproto3'
        , true);

        static::$is_initialized = true;
    }
}

