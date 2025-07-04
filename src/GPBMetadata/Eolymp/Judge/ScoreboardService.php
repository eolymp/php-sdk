<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/judge/scoreboard_service.proto

namespace GPBMetadata\Eolymp\Judge;

class ScoreboardService
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
        \GPBMetadata\Eolymp\Judge\Scoreboard::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Direction::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xB2\x09\x0A%eolymp/judge/scoreboard_service.proto\x12\x0Ceolymp.judge\x1A\"eolymp/annotations/ratelimit.proto\x1A\x1Eeolymp/annotations/scope.proto\x1A\x1Deolymp/judge/scoreboard.proto\x1A eolymp/wellknown/direction.proto\x1A!eolymp/wellknown/expression.proto\"+\x0A\x17DescribeScoreboardInput\x12\x10\x0A\x08round_id\x18\x01 \x01(\x09\"H\x0A\x18DescribeScoreboardOutput\x12,\x0A\x0Ascoreboard\x18\x01 \x01(\x0B2\x18.eolymp.judge.Scoreboard\"\xE7\x02\x0A\x17ListScoreboardRowsInput\x12+\x0A\x04mode\x18\x01 \x01(\x0E2\x1D.eolymp.judge.Scoreboard.Mode\x12\x10\x0A\x08round_id\x18\x02 \x01(\x09\x12\x0C\x0A\x04size\x18\x0A \x01(\x05\x12\x0E\x0A\x06offset\x18\x0C \x01(\x05\x12=\x0A\x07filters\x18( \x01(\x0B2,.eolymp.judge.ListScoreboardRowsInput.Filter\x12\x0C\x0A\x04sort\x182 \x01(\x09\x12*\x0A\x05order\x18< \x01(\x0E2\x1B.eolymp.wellknown.Direction\x1Av\x0A\x06Filter\x124\x0A\x0Aunofficial\x18\x0A \x03(\x0B2 .eolymp.wellknown.ExpressionBool\x126\x0A\x0Cdisqualified\x18\x0B \x03(\x0B2 .eolymp.wellknown.ExpressionBool\"V\x0A\x18ListScoreboardRowsOutput\x12\x0D\x0A\x05total\x18\x01 \x01(\x05\x12+\x0A\x05items\x18\x02 \x03(\x0B2\x1C.eolymp.judge.Scoreboard.Row2\xE2\x02\x0A\x11ScoreboardService\x12\xA2\x01\x0A\x12DescribeScoreboard\x12%.eolymp.judge.DescribeScoreboardInput\x1A&.eolymp.judge.DescribeScoreboardOutput\"=\xEA\xE2\x0A\x0C\xF5\xE2\x0A\x00\x00HB\xF8\xE2\x0A\xC8\x01\x82\xE3\x0A\x16\x8A\xE3\x0A\x12judge:contest:read\x82\xD3\xE4\x93\x02\x0D\x12\x0B/scoreboard\x12\xA7\x01\x0A\x12ListScoreboardRows\x12%.eolymp.judge.ListScoreboardRowsInput\x1A&.eolymp.judge.ListScoreboardRowsOutput\"B\xEA\xE2\x0A\x0C\xF5\xE2\x0A\x00\x00HB\xF8\xE2\x0A\xC8\x01\x82\xE3\x0A\x16\x8A\xE3\x0A\x12judge:contest:read\x82\xD3\xE4\x93\x02\x12\x12\x10/scoreboard/rowsB-Z+github.com/eolymp/go-sdk/eolymp/judge;judgeb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

