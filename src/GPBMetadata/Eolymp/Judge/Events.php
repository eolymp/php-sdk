<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/events.proto

namespace GPBMetadata\Eolymp\Judge;

class Events
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Judge\Participant::initOnce();
        \GPBMetadata\Eolymp\Judge\Score::initOnce();
        \GPBMetadata\Eolymp\Judge\Submission::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
eolymp/judge/events.protoeolymp.judgeeolymp/judge/score.protoeolymp/judge/submission.proto"\\
SubmissionCompletedEvent

contest_id
 (	,

submission (2.eolymp.judge.Submission"<
RebuildScoreEvent

contest_id (	
activity_id (	"w
ScoreChangedEvent

contest_id (	
participant_id (	

unofficial ("
score (2.eolymp.judge.Score"Q
RetestProblemEvent

contest_id (	

problem_id (	
activity_id (	B-Z+github.com/eolymp/go-sdk/eolymp/judge;judgebproto3'
        , true);

        static::$is_initialized = true;
    }
}

