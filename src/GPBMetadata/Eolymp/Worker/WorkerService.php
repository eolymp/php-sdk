<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/worker/worker_service.proto

namespace GPBMetadata\Eolymp\Worker;

class WorkerService
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
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        \GPBMetadata\Eolymp\Worker\WorkerJob::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
"eolymp/worker/worker_service.protoeolymp.worker"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.proto!eolymp/wellknown/expression.protoeolymp/worker/worker_job.proto"2
JobTriggerEvent
job (2.eolymp.worker.Job"�
CreateJobInput
type (	9
inputs (2).eolymp.worker.CreateJobInput.InputsEntry-
InputsEntry
key (	
value (	:8"!
CreateJobOutput
job_id (	""
DescribeJobInput
job_id (	"4
DescribeJobOutput
job (2.eolymp.worker.Job"�
ListJobsInput
offset
 (
size (4
filters( (2#.eolymp.worker.ListJobsInput.Filter�
Filter*
id (2.eolymp.wellknown.ExpressionID.
type (2 .eolymp.wellknown.ExpressionEnum0
status (2 .eolymp.wellknown.ExpressionEnum"B
ListJobsOutput
total (!
items (2.eolymp.worker.Job2�
WorkerServiceL
	CreateJob.eolymp.worker.CreateJobInput.eolymp.worker.CreateJobOutput" �
DescribeJob.eolymp.worker.DescribeJobInput .eolymp.worker.DescribeJobOutput"<��
��
   @��

��
��
worker:job:read���/jobs/{job_id}|
ListJobs.eolymp.worker.ListJobsInput.eolymp.worker.ListJobsOutput"3��
��
   @��

��
��
worker:job:read���/jobsB/Z-github.com/eolymp/go-sdk/eolymp/worker;workerbproto3'
        , true);

        static::$is_initialized = true;
    }
}

