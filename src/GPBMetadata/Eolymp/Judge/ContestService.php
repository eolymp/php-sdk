<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/contest_service.proto

namespace GPBMetadata\Eolymp\Judge;

class ContestService
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
        \GPBMetadata\Eolymp\Judge\Activity::initOnce();
        \GPBMetadata\Eolymp\Judge\Contest::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�-
"eolymp/judge/contest_service.protoeolymp.judge"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.protoeolymp/judge/activity.protoeolymp/judge/contest.proto!eolymp/wellknown/expression.protogoogle/protobuf/timestamp.proto"b
ContestChangedEvent%
before (2.eolymp.judge.Contest$
after (2.eolymp.judge.Contest"<
CreateContestInput&
contest (2.eolymp.judge.Contest")
CreateContestOutput

contest_id (	"(
DeleteContestInput

contest_id (	"
DeleteContestOutput"�
UpdateContestInput5
patch (2&.eolymp.judge.UpdateContestInput.Patch

contest_id (	&
contest (2.eolymp.judge.Contest"�
Patch
ALL 
NAME
	STARTS_AT
ENDS_AT
DURATION

VISIBILITY
JOIN_UNOFFICIALLY
REQUIRE_ADMISSION
ALLOW_PAUSE
ALLOW_FINISH_EARLY
PARTICIPATION_MODE

FORMAT

KEY
LOGO_URL
PROBLEM_COUNT_HIDDEN
PARTICIPANT_COUNT_HIDDEN
FEATURED_UNTIL	
PRINTER
TAXONOMY�

APPEARANCEn
ENVIRONMENT�
UPSOLVEx

SCOREBOARD�
CERTIFICATION�"
UpdateContestOutput"�
CopyContestInput

contest_id (	8

copy_scope (2$.eolymp.judge.CopyContestInput.Scope
	copy_name (	9
copy_visibility (2 .eolymp.judge.Contest.Visibility"T
Scope
ALL 
CONFIGURATION
PROBLEMS
PARTICIPANTS
PERMISSIONS",
CopyContestOutput
copy_contest_id (	"*
DescribeContestInput

contest_id (	"?
DescribeContestOutput&
contest (2.eolymp.judge.Contest"�
ListContestsInput
offset
 (
size (
search (	7
filters( (2&.eolymp.judge.ListContestsInput.Filter�
Filter*
id (2.eolymp.wellknown.ExpressionID0
name (2".eolymp.wellknown.ExpressionString8
	starts_at (2%.eolymp.wellknown.ExpressionTimestamp6
ends_at (2%.eolymp.wellknown.ExpressionTimestamp0
public (2 .eolymp.wellknown.ExpressionBool4

visibility (2 .eolymp.wellknown.ExpressionEnum0
format (2 .eolymp.wellknown.ExpressionEnum0
status
 (2 .eolymp.wellknown.ExpressionEnum2
featured (2 .eolymp.wellknown.ExpressionBool-
yeard (2.eolymp.wellknown.ExpressionInt/
scalee (2 .eolymp.wellknown.ExpressionEnum0
seriesf (2 .eolymp.wellknown.ExpressionEnum3

difficultyg (2.eolymp.wellknown.ExpressionInt1
countryh (2 .eolymp.wellknown.ExpressionEnum0
regioni (2 .eolymp.wellknown.ExpressionEnum0
cityj (2".eolymp.wellknown.ExpressionString"I
ListContestsOutput$
items (2.eolymp.judge.Contest
total ("&
OpenContestInput

contest_id (	"
OpenContestOutput"\'
CloseContestInput

contest_id (	"
CloseContestOutput")
SuspendContestInput

contest_id (	"
SuspendContestOutput"(
FreezeContestInput

contest_id (	"
FreezeContestOutput"*
FinalizeContestInput

contest_id (	"
FinalizeContestOutput"(
ResumeContestInput

contest_id (	"
ResumeContestOutput"\'
WatchContestInput

contest_id (	"<
WatchContestOutput&
contest (2.eolymp.judge.Contest"G
ListActivitiesInput

contest_id (	
offset
 (
size ("L
ListActivitiesOutput
total (%
items (2.eolymp.judge.Activity"}
DescribeContestUsageInput0
period_start (2.google.protobuf.Timestamp.

period_end (2.google.protobuf.Timestamp"g
DescribeContestUsageOutput
total_contests (
active_contests (
monthly_contests (2�
ContestService�
CreateContest .eolymp.judge.CreateContestInput!.eolymp.judge.CreateContestOutput";��
��

ף=��
��
��
judge:contest:write���"	/contests�
DeleteContest .eolymp.judge.DeleteContestInput!.eolymp.judge.DeleteContestOutput"H��
��
  �?��
��
��
judge:contest:write���*/contests/{contest_id}�
UpdateContest .eolymp.judge.UpdateContestInput!.eolymp.judge.UpdateContestOutput"H��
��
  �?��
��
��
judge:contest:write���/contests/{contest_id}�
CopyContest.eolymp.judge.CopyContestInput.eolymp.judge.CopyContestOutput"M��
��
  �?��
��
��
judge:contest:write���"/contests/{contest_id}/copy�
DescribeContest".eolymp.judge.DescribeContestInput#.eolymp.judge.DescribeContestOutput"-��
��
   A��
2���/contests/{contest_id}s
ListContests.eolymp.judge.ListContestsInput .eolymp.judge.ListContestsOutput" ��
��
  �?��

���	/contests�
OpenContest.eolymp.judge.OpenContestInput.eolymp.judge.OpenContestOutput"M��
��
  �?��
��
��
judge:contest:write���"/contests/{contest_id}/open�
CloseContest.eolymp.judge.CloseContestInput .eolymp.judge.CloseContestOutput"N��
��
  �?��
��
��
judge:contest:write���"/contests/{contest_id}/close�
SuspendContest!.eolymp.judge.SuspendContestInput".eolymp.judge.SuspendContestOutput"P��
��
  �?��
��
��
judge:contest:write��� "/contests/{contest_id}/suspend�
FreezeContest .eolymp.judge.FreezeContestInput!.eolymp.judge.FreezeContestOutput"O��
��
  �?��
��
��
judge:contest:write���"/contests/{contest_id}/freeze�
FinalizeContest".eolymp.judge.FinalizeContestInput#.eolymp.judge.FinalizeContestOutput"Q��
��
  �?��
��
��
judge:contest:write���!"/contests/{contest_id}/finalize�
ResumeContest .eolymp.judge.ResumeContestInput!.eolymp.judge.ResumeContestOutput"O��
��
  �?��
��
��
judge:contest:write���"/contests/{contest_id}/resumeo
WatchContest.eolymp.judge.WatchContestInput .eolymp.judge.WatchContestOutput"��
��
judge:contest:read0�
ListActivities!.eolymp.judge.ListActivitiesInput".eolymp.judge.ListActivitiesOutput"R��
��
  �@��
��
��
judge:contest:read���#!/contests/{contest_id}/activities�
DescribeContestUsage\'.eolymp.judge.DescribeContestUsageInput(.eolymp.judge.DescribeContestUsageOutput"&��
��
  �@��
���/usage/contestsB-Z+github.com/eolymp/go-sdk/eolymp/judge;judgebproto3'
        , true);

        static::$is_initialized = true;
    }
}

