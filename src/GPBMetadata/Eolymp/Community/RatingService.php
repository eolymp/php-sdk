<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/rating_service.proto

namespace GPBMetadata\Eolymp\Community;

class RatingService
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
        \GPBMetadata\Eolymp\Community\RatingPoint::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
%eolymp/community/rating_service.protoeolymp.community"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.proto#eolymp/community/rating_point.proto"R
SetRatingInput
	rating_id (	-
rating (2.eolymp.community.RatingPoint"$
SetRatingOutput
	rating_id (	"T
DeleteRatingInput
	rating_id (	,
point (2.eolymp.community.RatingPoint"
DeleteRatingOutput2�
RatingService�
	SetRating .eolymp.community.SetRatingInput!.eolymp.community.SetRatingOutput"<��
��
   A��
d��
��
community:member:write���	"/rating�
DeleteRating#.eolymp.community.DeleteRatingInput$.eolymp.community.DeleteRatingOutput"H��
��
   A��
d��
��
community:member:write���*/rating/{rating_id}B5Z3github.com/eolymp/go-sdk/eolymp/community;communitybproto3'
        , true);

        static::$is_initialized = true;
    }
}

