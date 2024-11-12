<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/solution_service.proto

namespace GPBMetadata\Eolymp\Atlas;

class SolutionService
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
        \GPBMetadata\Eolymp\Atlas\Solution::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Direction::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
#eolymp/atlas/solution_service.protoeolymp.atlas"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.protoeolymp/atlas/solution.proto eolymp/wellknown/direction.proto!eolymp/wellknown/expression.proto"�
ListSolutionsInput
versiond (
offset
 (
size (
search (	8
filters( (2\'.eolymp.atlas.ListSolutionsInput.Filter7
sort2 (2).eolymp.atlas.ListSolutionsInput.Sortable*
order3 (2.eolymp.wellknown.Direction�
Filter*
id
 (2.eolymp.wellknown.ExpressionID.
type (2 .eolymp.wellknown.ExpressionEnum0
name (2".eolymp.wellknown.ExpressionString1
runtime (2 .eolymp.wellknown.ExpressionEnum"
Sortable
NAME 
TYPE"K
ListSolutionsOutput
total (%
items (2.eolymp.atlas.Solution"=
DescribeSolutionInput
solution_id (	
versiond ("B
DescribeSolutionOutput(
solution (2.eolymp.atlas.Solution"?
CreateSolutionInput(
solution (2.eolymp.atlas.Solution"+
CreateSolutionOutput
solution_id (	"�
UpdateSolutionInput6
patch (2\'.eolymp.atlas.UpdateSolutionInput.Patch
solution_id (	(
solution (2.eolymp.atlas.Solution"I
Patch
ALL 
NAME
TYPE
RUNTIME

SOURCE

SECRET"
UpdateSolutionOutput"*
DeleteSolutionInput
solution_id (	"
DeleteSolutionOutput2�
SolutionService�
CreateSolution!.eolymp.atlas.CreateSolutionInput".eolymp.atlas.CreateSolutionOutput"<��
��
atlas:problem:write��
��
  �?��
���
/solutions�
UpdateSolution!.eolymp.atlas.UpdateSolutionInput".eolymp.atlas.UpdateSolutionOutput"J��
��
atlas:problem:write��
��
  �?��
���/solutions/{solution_id}�
DeleteSolution!.eolymp.atlas.DeleteSolutionInput".eolymp.atlas.DeleteSolutionOutput"J��
��
atlas:problem:write��
��
  �?��
���*/solutions/{solution_id}�
DescribeSolution#.eolymp.atlas.DescribeSolutionInput$.eolymp.atlas.DescribeSolutionOutput"I��
��
atlas:problem:read��
��
  �A��
d���/solutions/{solution_id}�
ListSolutions .eolymp.atlas.ListSolutionsInput!.eolymp.atlas.ListSolutionsOutput";��
��
atlas:problem:read��
��
  �A��
d���
/solutionsB-Z+github.com/eolymp/go-sdk/eolymp/atlas;atlasbproto3'
        , true);

        static::$is_initialized = true;
    }
}

