<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
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
            "\x0A\x86\x07\x0A\"eolymp/atlas/scoring_service.proto\x12\x0Ceolymp.atlas\x1A\x1Eeolymp/annotations/scope.proto\x1A eolymp/atlas/scoring_score.proto\"\x83\x01\x0A\x11ScoreChangedEvent\x12\x12\x0A\x0Aproblem_id\x18\x03 \x01(\x09\x12\x11\x0A\x09member_id\x18\x04 \x01(\x09\x12#\x0A\x06before\x18\x01 \x01(\x0B2\x13.eolymp.atlas.Score\x12\"\x0A\x05after\x18\x02 \x01(\x0B2\x13.eolymp.atlas.Score\"'\x0A\x12DescribeScoreInput\x12\x11\x0A\x09member_id\x18\x02 \x01(\x09\"9\x0A\x13DescribeScoreOutput\x12\"\x0A\x05score\x18\x01 \x01(\x0B2\x13.eolymp.atlas.Score\"\x1D\x0A\x1BDescribeProblemGradingInput\"\x8D\x01\x0A\x1CDescribeProblemGradingOutput\x12@\x0A\x06ranges\x18\x02 \x03(\x0B20.eolymp.atlas.DescribeProblemGradingOutput.Range\x1A+\x0A\x05Range\x12\x0D\x0A\x05grade\x18\x01 \x01(\x0D\x12\x13\x0A\x0Bupper_bound\x18\x02 \x01(\x022\xBF\x02\x0A\x0EScoringService\x12\x8E\x01\x0A\x0DDescribeScore\x12 .eolymp.atlas.DescribeScoreInput\x1A!.eolymp.atlas.DescribeScoreOutput\"8\x82\xE3\x0A\x19\x8A\xE3\x0A\x15atlas:submission:read\x82\xD3\xE4\x93\x02\x15\x12\x13/scores/{member_id}\x12\x9B\x01\x0A\x16DescribeProblemGrading\x12).eolymp.atlas.DescribeProblemGradingInput\x1A*.eolymp.atlas.DescribeProblemGradingOutput\"*\x82\xE3\x0A\x16\x8A\xE3\x0A\x12atlas:problem:read\x82\xD3\xE4\x93\x02\x0A\x12\x08/gradingB-Z+github.com/eolymp/go-sdk/eolymp/atlas;atlasb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

