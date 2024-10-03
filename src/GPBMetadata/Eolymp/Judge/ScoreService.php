<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/score_service.proto

namespace GPBMetadata\Eolymp\Judge;

class ScoreService
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
        \GPBMetadata\Eolymp\Judge\Result::initOnce();
        \GPBMetadata\Eolymp\Judge\Score::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
 eolymp/judge/score_service.protoeolymp.judge"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.protoeolymp/judge/result.protoeolymp/judge/score.proto"\'
RebuildScoreInput

contest_id (	")
RebuildScoreOutput
activity_id (	"*
IntrospectScoreInput

contest_id (	";
IntrospectScoreOutput"
score (2.eolymp.judge.Score"m
WatchScoreInput

contest_id (	
participant_id (	.
mode (2 .eolymp.judge.Score.FetchingMode"6
WatchScoreOutput"
score (2.eolymp.judge.Score"�
DescribeScoreInput

contest_id (	
participant_id (	.
mode (2 .eolymp.judge.Score.FetchingMode
time_offset ("9
DescribeScoreOutput"
score (2.eolymp.judge.Score"c
ImportScoreInput

contest_id (	
participant_id (	#
scores
 (2.eolymp.judge.Score"
ImportScoreOutput">
ExportScoreInput

contest_id (	
participant_id (	"8
ExportScoreOutput#
scores
 (2.eolymp.judge.Score"�
ListResultInput

contest_id (	.
mode (2 .eolymp.judge.Score.FetchingMode
time_offset (
offset
 (
size ("F
ListResultOutput
total (#
items (2.eolymp.judge.Result"l
ExportResultInput

contest_id (	.
mode (2 .eolymp.judge.Score.FetchingMode
time_offset ("(
ExportResultOutput

export_url (	"�
ListResultsInput.
mode (2 .eolymp.judge.Score.FetchingMode
time_offset (
round_id (	
size
 (
after (	"I
ListResultsOutput
total (%
items (2.eolymp.judge.ResultV22�

ScoreService�
IntrospectScore".eolymp.judge.IntrospectScoreInput#.eolymp.judge.IntrospectScoreOutput"(��
��
   A��
2���/introspect/scorei

WatchScore.eolymp.judge.WatchScoreInput.eolymp.judge.WatchScoreOutput"��
��
judge:contest:read0�
DescribeScore .eolymp.judge.DescribeScoreInput!.eolymp.judge.DescribeScoreOutput"V��
��
judge:contest:read��
��
  HB��
����&$/participants/{participant_id}/score�
ImportScore.eolymp.judge.ImportScoreInput.eolymp.judge.ImportScoreOutput"W��
��
judge:contest:read��
��
  HB��
����\'"%/participants/{participant_id}/scores�
ExportScore.eolymp.judge.ExportScoreInput.eolymp.judge.ExportScoreOutput"W��
��
judge:contest:read��
��
  HB��
����\'%/participants/{participant_id}/scores�

ListResult.eolymp.judge.ListResultInput.eolymp.judge.ListResultOutput":��
��
judge:contest:read��
��
  HB��
����
/results�
ListResults.eolymp.judge.ListResultsInput.eolymp.judge.ListResultsOutput"=��
��
judge:contest:read��
��
  HB��
����/results-v2�
ExportResult.eolymp.judge.ExportResultInput .eolymp.judge.ExportResultOutput"@��
��
judge:contest:read��
��
   @��
���"/results-export�
RebuildScore.eolymp.judge.RebuildScoreInput .eolymp.judge.RebuildScoreOutput":��
��
judge:contest:write��
��
   @��

���
"/rebuildB-Z+github.com/eolymp/go-sdk/eolymp/judge;judgebproto3'
        , true);

        static::$is_initialized = true;
    }
}

