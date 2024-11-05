<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/submission_service.proto

namespace GPBMetadata\Eolymp\Course;

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
�
&eolymp/course/submission_service.protoeolymp.course"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.protoeolymp/atlas/submission.proto!eolymp/wellknown/expression.proto"M
CreateSubmissionInput
material_id (	
runtime (	
source (	"/
CreateSubmissionOutput
submission_id (	"�
ListSubmissionsInput
after (	
offset
 (
size (;
filters( (2*.eolymp.course.ListSubmissionsInput.Filter�
Filter*
id (2.eolymp.wellknown.ExpressionID/
user_id (2.eolymp.wellknown.ExpressionID1
	member_id	 (2.eolymp.wellknown.ExpressionID3
material_id (2.eolymp.wellknown.ExpressionID;
submitted_at (2%.eolymp.wellknown.ExpressionTimestamp1
runtime (2 .eolymp.wellknown.ExpressionEnum0
status (2 .eolymp.wellknown.ExpressionEnum1
verdict
 (2 .eolymp.wellknown.ExpressionEnum0
score (2!.eolymp.wellknown.ExpressionFloat5

percentage (2!.eolymp.wellknown.ExpressionFloat"O
ListSubmissionsOutput
total (\'
items (2.eolymp.atlas.Submission"0
DescribeSubmissionInput
submission_id (	"H
DescribeSubmissionOutput,

submission (2.eolymp.atlas.Submission"-
WatchSubmissionInput
submission_id (	"E
WatchSubmissionOutput,

submission (2.eolymp.atlas.Submission2�
SubmissionService�
CreateSubmission$.eolymp.course.CreateSubmissionInput%.eolymp.course.CreateSubmissionOutput"?��
��
course:course:submit��
��

�#>��

���"/submissions�
ListSubmissions#.eolymp.course.ListSubmissionsInput$.eolymp.course.ListSubmissionsOutput"=��
��
course:course:read��
��
  �?��
���/submissions�
DescribeSubmission&.eolymp.course.DescribeSubmissionInput\'.eolymp.course.DescribeSubmissionOutput"M��
��
course:course:read��
��
   @��

���/submissions/{submission_id}z
WatchSubmission#.eolymp.course.WatchSubmissionInput$.eolymp.course.WatchSubmissionOutput"��
��
course:course:read0B/Z-github.com/eolymp/go-sdk/eolymp/course;coursebproto3'
        , true);

        static::$is_initialized = true;
    }
}

