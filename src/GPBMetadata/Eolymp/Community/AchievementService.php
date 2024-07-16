<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
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
            '
�
*eolymp/community/achievement_service.protoeolymp.community"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.proto"eolymp/community/achievement.proto!eolymp/wellknown/expression.proto"`
AssignAchievementInput
achievement_id (	
set_to (H 
inc_by (H B

quantity"+
AssignAchievementOutput
quantity ("2
UnassignAchievementInput
achievement_id (	"
UnassignAchievementOutput"�
ListAchievementsInput
locale (	
after (	
size (
offset
 (?
filters( (2..eolymp.community.ListAchievementsInput.Filter3
extra� (2#.eolymp.community.Achievement.ExtraC
Filter
query (	*
id (2.eolymp.wellknown.ExpressionID"o
ListAchievementsOutput
total (
next_page_cursor (	,
items (2.eolymp.community.Achievement2�
AchievementService�
AssignAchievement(.eolymp.community.AssignAchievementInput).eolymp.community.AssignAchievementOutput"S��
��
community:member:write��
��
  �@��
��� /achievements/{achievement_id}�
UnassignAchievement*.eolymp.community.UnassignAchievementInput+.eolymp.community.UnassignAchievementOutput"S��
��
community:member:write��
��
  �@��
��� */achievements/{achievement_id}�
ListAchievements\'.eolymp.community.ListAchievementsInput(.eolymp.community.ListAchievementsOutput"A��
��
community:member:read��
��
  �@��
���/achievementsB5Z3github.com/eolymp/go-sdk/eolymp/community;communitybproto3'
        , true);

        static::$is_initialized = true;
    }
}

