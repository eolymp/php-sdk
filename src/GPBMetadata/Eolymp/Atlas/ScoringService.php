<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/scoring_service.proto

namespace GPBMetadata\Eolymp\Atlas;

class ScoringService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Scope::initOnce();
        \GPBMetadata\Eolymp\Atlas\ScoringScore::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
"eolymp/atlas/scoring_service.protoeolymp.atlaseolymp/annotations/scope.proto eolymp/atlas/scoring_score.proto"\\
ScoreChangedEvent#
before (2.eolymp.atlas.Score"
after (2.eolymp.atlas.Score"\'
DescribeScoreInput
	member_id (	"9
DescribeScoreOutput"
score (2.eolymp.atlas.Score"
DescribeProblemGradingInput"�
DescribeProblemGradingOutput@
ranges (20.eolymp.atlas.DescribeProblemGradingOutput.Range+
Range
grade (
upper_bound (2�
ScoringService�
DescribeScore .eolymp.atlas.DescribeScoreInput!.eolymp.atlas.DescribeScoreOutput"8��
��
atlas:submission:read���/scores/{member_id}�
DescribeProblemGrading).eolymp.atlas.DescribeProblemGradingInput*.eolymp.atlas.DescribeProblemGradingOutput"*��
��
atlas:problem:read���
/gradingB-Z+github.com/eolymp/go-sdk/eolymp/atlas;atlasbproto3'
        , true);

        static::$is_initialized = true;
    }
}

