<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/universe/space_service.proto

namespace GPBMetadata\Eolymp\Universe;

class SpaceService
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
        \GPBMetadata\Eolymp\Universe\Quota::initOnce();
        \GPBMetadata\Eolymp\Universe\Space::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
#eolymp/universe/space_service.protoeolymp.universe"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.protoeolymp/universe/quota.protoeolymp/universe/space.proto!eolymp/wellknown/expression.proto"9
CreateSpaceInput%
space (2.eolymp.universe.Space"%
CreateSpaceOutput
space_id (	"�
UpdateSpaceInput6
patch (2\'.eolymp.universe.UpdateSpaceInput.Patch
space_id (	%
space (2.eolymp.universe.Space"H
Patch
ALL 
KEY
NAME	
IMAGE
TYPE

VISIBILITY"
UpdateSpaceOutput"$
DeleteSpaceInput
space_id (	"
DeleteSpaceOutput"M
LookupSpaceInput
key (	,
extra� (2.eolymp.universe.Space.Extra":
LookupSpaceOutput%
space (2.eolymp.universe.Space"T
DescribeSpaceInput
space_id (	,
extra� (2.eolymp.universe.Space.Extra"<
DescribeSpaceOutput%
space (2.eolymp.universe.Space"&
DescribeQuotaInput
space_id (	"<
DescribeQuotaOutput%
quota (2.eolymp.universe.Quota"K
UpdateQuotaInput
space_id (	%
quota (2.eolymp.universe.Quota"
UpdateQuotaOutput"�
ListSpacesInput
offset
 (
size (8
filters( (2\'.eolymp.universe.ListSpacesInput.Filter,
extra� (2.eolymp.universe.Space.Extra�
Filter
queryd (	*
id (2.eolymp.wellknown.ExpressionID+
key (2.eolymp.wellknown.ExpressionID0
name (2".eolymp.wellknown.ExpressionString-
own (2 .eolymp.wellknown.ExpressionBool"H
ListSpacesOutput
total (%
items (2.eolymp.universe.Space2�
SpaceService�
LookupSpace!.eolymp.universe.LookupSpaceInput".eolymp.universe.LookupSpaceOutput"-��
��
   A��
d���/spaces/__lookup/{key}�
CreateSpace!.eolymp.universe.CreateSpaceInput".eolymp.universe.CreateSpaceOutput":��
��
  �?��
��
��
universe:space:write���	"/spaces�
UpdateSpace!.eolymp.universe.UpdateSpaceInput".eolymp.universe.UpdateSpaceOutput"E��
��
  �?��
��
��
universe:space:write���/spaces/{space_id}�
DeleteSpace!.eolymp.universe.DeleteSpaceInput".eolymp.universe.DeleteSpaceOutput"E��
��
   @��

��
��
universe:space:write���*/spaces/{space_id}�
DescribeSpace#.eolymp.universe.DescribeSpaceInput$.eolymp.universe.DescribeSpaceOutput")��
��
   A��
d���/spaces/{space_id}�

ListSpaces .eolymp.universe.ListSpacesInput!.eolymp.universe.ListSpacesOutput"9��
��
  �@��
��
��
universe:space:read���	/spacesB3Z1github.com/eolymp/go-sdk/eolymp/universe;universebproto3'
        , true);

        static::$is_initialized = true;
    }
}

