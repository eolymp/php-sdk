<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/submission.proto

namespace GPBMetadata\Eolymp\Atlas;

class Submission
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Atlas\TestingFeedback::initOnce();
        \GPBMetadata\Eolymp\Atlas\TestingScoring::initOnce();
        \GPBMetadata\Eolymp\Executor\Stats::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
eolymp/atlas/submission.protoeolymp.atlas"eolymp/atlas/testing_scoring.protoeolymp/executor/stats.protogoogle/protobuf/timestamp.proto"�

Submission

id (	

problem_id (	
user_id (	
	member_id (	0
submitted_at (2.google.protobuf.Timestamp
lang
 (	
source (	

source_url (	
	signature (	/
status (2.eolymp.atlas.Submission.Status1
verdict (2 .eolymp.atlas.Submission.Verdict
error (	
	error_url (	
cost (
score (

percentage  (
wall_time_usage) (
cpu_time_usage* (
memory_usage. (
resource_usage/ (.
groups2 (2.eolymp.atlas.Submission.Group
cursord (	i
CheckerExecutionData
log_url (	
wall_time_usage (
memory_usage (
	exit_code (l
InteractorExecutionData
log_url (	
wall_time_usage (
memory_usage (
	exit_code (�
Run

id (	
wall_time_usage (
cpu_time_usage (
memory_usage (
resource_usage (

output_url (	

stderr_url (	
index
 (
test_id (	
cost (
score (3
status (2#.eolymp.atlas.Submission.Run.Status1
verdict (2 .eolymp.atlas.Submission.Verdict%
stats (2.eolymp.executor.StatsM
checker_execution_data (2-.eolymp.atlas.Submission.CheckerExecutionData-
checker_stats (2.eolymp.executor.StatsS
interactor_execution_data( (20.eolymp.atlas.Submission.InteractorExecutionData0
interactor_stats) (2.eolymp.executor.Stats"�
Status
	NO_STATUS 
CREATED
	EXECUTING
COMPLETE
SKIPPED

BLOCKED
VERIFICATION_ERROR	
INTERACTION_ERROR
TIMEOUT
CPU_EXHAUSTED
MEMORY_OVERFLOW
WRONG_ANSWER
ACCEPTED
RUNTIME_ERROR�
Group
index (

testset_id (	5
status
 (2%.eolymp.atlas.Submission.Group.Status1
verdict (2 .eolymp.atlas.Submission.Verdict
dependencies (
cost (
score (/
scoring_mode (2.eolymp.atlas.ScoringMode5
feedback_policy (2.eolymp.atlas.FeedbackPolicy
wall_time_usage) (
cpu_time_usage* (
memory_usage. (
resource_usage/ (*
runsd (2.eolymp.atlas.Submission.Run"�
Status
UNKNOWN 
BLOCKED
PENDING
TESTING
ACCEPTED
TIMEOUT
CPU_EXHAUSTED
MEMORY_OVERFLOW
WRONG_ANSWER
RUNTIME_ERROR	
VERIFICATION_ERROR

SKIPPED
INTERACTION_ERROR"_
Status
NONE 
PENDING
TESTING
TIMEOUT
COMPLETE	
ERROR
FAILURE"�
Verdict

NO_VERDICT 
ACCEPTED
WRONG_ANSWER
TIME_LIMIT_EXCEEDED
CPU_EXHAUSTED
MEMORY_OVERFLOW
RUNTIME_ERRORB-Z+github.com/eolymp/go-sdk/eolymp/atlas;atlasbproto3'
        , true);

        static::$is_initialized = true;
    }
}

