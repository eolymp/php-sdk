<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/problem_service.proto

namespace GPBMetadata\Eolymp\Atlas;

class ProblemService
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
        \GPBMetadata\Eolymp\Atlas\Problem::initOnce();
        \GPBMetadata\Eolymp\Atlas\Statement::initOnce();
        \GPBMetadata\Eolymp\Atlas\Version::initOnce();
        \GPBMetadata\Eolymp\Runtime\Runtime::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Direction::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(
            '
�!
"eolymp/atlas/problem_service.protoeolymp.atlas"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.protoeolymp/atlas/problem.protoeolymp/atlas/statement.protoeolymp/atlas/version.protoeolymp/runtime/runtime.proto eolymp/wellknown/direction.proto!eolymp/wellknown/expression.proto"b
ProblemChangedEvent%
before (2.eolymp.atlas.Problem$
after (2.eolymp.atlas.Problem"h
CreateProblemInput&
problem (2.eolymp.atlas.Problem*
	statement (2.eolymp.atlas.Statement")
CreateProblemOutput

problem_id (	"(
DeleteProblemInput

problem_id (	"
DeleteProblemOutput"W
DescribeProblemInput

problem_id (	+
extra� (2.eolymp.atlas.Problem.Extra"?
DescribeProblemOutput&
problem (2.eolymp.atlas.Problem"�
ListProblemsInput
offset
 (
size (
search (	7
filters( (2&.eolymp.atlas.ListProblemsInput.Filter6
sort2 (2(.eolymp.atlas.ListProblemsInput.Sortable*
order3 (2.eolymp.wellknown.Direction+
extra� (2.eolymp.atlas.Problem.Extra�
Filter*
id (2.eolymp.wellknown.ExpressionID0
topic_id (2.eolymp.wellknown.ExpressionID4

is_visible (2 .eolymp.wellknown.ExpressionBool4

is_private (2 .eolymp.wellknown.ExpressionBool/
number (2.eolymp.wellknown.ExpressionInt3

difficulty (2.eolymp.wellknown.ExpressionInt0
status (2 .eolymp.wellknown.ExpressionEnum0
score	 (2!.eolymp.wellknown.ExpressionFloat7
is_bookmarked (2 .eolymp.wellknown.ExpressionBool"0
Sortable
DEFAULT 

RECENT
POPULAR"I
ListProblemsOutput
total ($
items (2.eolymp.atlas.Problem"<
UpdateVisibilityInput

problem_id (	
visible ("
UpdateVisibilityOutput"9
UpdatePrivacyInput

problem_id (	
private ("
UpdatePrivacyOutput"�
UpdateProblemInput5
patch (2&.eolymp.atlas.UpdateProblemInput.Patch

problem_id (	&
problem (2.eolymp.atlas.Problem"\\
Patch
ALL 
VISIBLE
PRIVATE

TOPICS

DIFFICULTY

ORIGIN
TYPE"
UpdateProblemOutput"&
SyncProblemInput

problem_id (	"
SyncProblemOutput"�
ListVersionsInput

problem_id (	
offset
 (
size (7
filters( (2&.eolymp.atlas.ListVersionsInput.Filter�
Filter/
number (2.eolymp.wellknown.ExpressionInt2

created_by (2.eolymp.wellknown.ExpressionID9

created_at (2%.eolymp.wellknown.ExpressionTimestamp3
	change_op (2 .eolymp.wellknown.ExpressionEnum7
change_path (2".eolymp.wellknown.ExpressionString"I
ListVersionsOutput
total ($
items (2.eolymp.atlas.Version"4
VoteProblemInput

problem_id (	
vote ("\'
VoteProblemOutput

vote_count ("\'
ListRuntimesInput

problem_id (	"K
ListRuntimesOutput
total (&
items (2.eolymp.runtime.Runtime2�
ProblemService�
CreateProblem .eolymp.atlas.CreateProblemInput!.eolymp.atlas.CreateProblemOutput";��
��
atlas:problem:write��
��

�#>��
���"	/problems�
UpdateProblem .eolymp.atlas.UpdateProblemInput!.eolymp.atlas.UpdateProblemOutput"H��
��
atlas:problem:write��
��
  �A��
d���/problems/{problem_id}�
DeleteProblem .eolymp.atlas.DeleteProblemInput!.eolymp.atlas.DeleteProblemOutput"H��
��
atlas:problem:write��
��

�#>��
���*/problems/{problem_id}�
DescribeProblem".eolymp.atlas.DescribeProblemInput#.eolymp.atlas.DescribeProblemOutput"G��
��
atlas:problem:read��
��
  �A��
d���/problems/{problem_id}�
ListProblems.eolymp.atlas.ListProblemsInput .eolymp.atlas.ListProblemsOutput":��
��
atlas:problem:read��
��
  �A��
d���	/problems�
SyncProblem.eolymp.atlas.SyncProblemInput.eolymp.atlas.SyncProblemOutput"M��
��
atlas:problem:write��
��

�#>��
���"/problems/{problem_id}/sync�
VoteProblem.eolymp.atlas.VoteProblemInput.eolymp.atlas.VoteProblemOutput"M��
��
atlas:problem:write��
��
  �@��
2���"/problems/{problem_id}/vote�
ListVersions.eolymp.atlas.ListVersionsInput .eolymp.atlas.ListVersionsOutput"B��
��
atlas:problem:write���!/problems/{problem_id}/versions�
ListRuntimes.eolymp.atlas.ListRuntimesInput .eolymp.atlas.ListRuntimesOutput"O��
��
atlas:problem:read��
��
  �@��
��� /problems/{problem_id}/runtimeB-Z+github.com/eolymp/go-sdk/eolymp/atlas;atlasbproto3'
        , true);

        static::$is_initialized = true;
    }
}

