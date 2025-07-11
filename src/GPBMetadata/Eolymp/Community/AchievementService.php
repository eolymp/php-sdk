<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/community/achievement_service.proto

namespace GPBMetadata\Eolymp\Community;

class AchievementService
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
        \GPBMetadata\Eolymp\Community\Achievement::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xB3\x0B\x0A*eolymp/community/achievement_service.proto\x12\x10eolymp.community\x1A\"eolymp/annotations/ratelimit.proto\x1A\x1Eeolymp/annotations/scope.proto\x1A\"eolymp/community/achievement.proto\x1A!eolymp/wellknown/expression.proto\"`\x0A\x16AssignAchievementInput\x12\x16\x0A\x0Eachievement_id\x18\x02 \x01(\x09\x12\x10\x0A\x06set_to\x18\x03 \x01(\x05H\x00\x12\x10\x0A\x06inc_by\x18\x04 \x01(\x05H\x00B\x0A\x0A\x08quantity\"+\x0A\x17AssignAchievementOutput\x12\x10\x0A\x08quantity\x18\x03 \x01(\x05\"2\x0A\x18UnassignAchievementInput\x12\x16\x0A\x0Eachievement_id\x18\x02 \x01(\x09\"\x1B\x0A\x19UnassignAchievementOutput\"\x8F\x02\x0A\x15ListAchievementsInput\x12\x0E\x0A\x06locale\x18\x01 \x01(\x09\x12\x0D\x0A\x05after\x18\x0C \x01(\x09\x12\x0C\x0A\x04size\x18\x0B \x01(\x05\x12\x0E\x0A\x06offset\x18\x0A \x01(\x05\x12?\x0A\x07filters\x18( \x01(\x0B2..eolymp.community.ListAchievementsInput.Filter\x123\x0A\x05extra\x18\xE3\x08 \x03(\x0E2#.eolymp.community.Achievement.Extra\x1AC\x0A\x06Filter\x12\x0D\x0A\x05query\x18\x01 \x01(\x09\x12*\x0A\x02id\x18\x02 \x03(\x0B2\x1E.eolymp.wellknown.ExpressionID\"o\x0A\x16ListAchievementsOutput\x12\x0D\x0A\x05total\x18\x01 \x01(\x05\x12\x18\x0A\x10next_page_cursor\x18\x03 \x01(\x09\x12,\x0A\x05items\x18\x02 \x03(\x0B2\x1D.eolymp.community.Achievement2\xC5\x04\x0A\x12AchievementService\x12\xBD\x01\x0A\x11AssignAchievement\x12(.eolymp.community.AssignAchievementInput\x1A).eolymp.community.AssignAchievementOutput\"S\xEA\xE2\x0A\x0B\xF5\xE2\x0A\x00\x00\xA0@\xF8\xE2\x0A\x14\x82\xE3\x0A\x1A\x8A\xE3\x0A\x16community:member:write\x82\xD3\xE4\x93\x02 \x1A\x1E/achievements/{achievement_id}\x12\xC3\x01\x0A\x13UnassignAchievement\x12*.eolymp.community.UnassignAchievementInput\x1A+.eolymp.community.UnassignAchievementOutput\"S\xEA\xE2\x0A\x0B\xF5\xE2\x0A\x00\x00\xA0@\xF8\xE2\x0A\x14\x82\xE3\x0A\x1A\x8A\xE3\x0A\x16community:member:write\x82\xD3\xE4\x93\x02 *\x1E/achievements/{achievement_id}\x12\xA8\x01\x0A\x10ListAchievements\x12'.eolymp.community.ListAchievementsInput\x1A(.eolymp.community.ListAchievementsOutput\"A\xEA\xE2\x0A\x0B\xF5\xE2\x0A\x00\x00\xA0@\xF8\xE2\x0A\x14\x82\xE3\x0A\x19\x8A\xE3\x0A\x15community:member:read\x82\xD3\xE4\x93\x02\x0F\x12\x0D/achievementsB5Z3github.com/eolymp/go-sdk/eolymp/community;communityb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

