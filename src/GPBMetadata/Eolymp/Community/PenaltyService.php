<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/penalty_service.proto

namespace GPBMetadata\Eolymp\Community;

class PenaltyService
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
        \GPBMetadata\Eolymp\Community\Penalty::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
&eolymp/community/penalty_service.protoeolymp.community"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.protoeolymp/community/penalty.proto"U
CreatePenaltyInput*
penalty (2.eolymp.community.Penalty
dont_notify (")
CreatePenaltyOutput

penalty_id (	"�
UpdatePenaltyInput9
patch (2*.eolymp.community.UpdatePenaltyInput.Patch

penalty_id (	*
penalty (2.eolymp.community.Penalty"I
Patch
ALL 
SUMMARY
DESCRIPTION	
SCOPE

EXPIRES_AT"
UpdatePenaltyOutput"(
DeletePenaltyInput

penalty_id (	"
DeletePenaltyOutput"[
DescribePenaltyInput

penalty_id (	/
extra� (2.eolymp.community.Penalty.Extra"
DescribePenaltyOutput"c
ListPenaltiesInput
offset
 (
size (/
extra� (2.eolymp.community.Penalty.Extra"N
ListPenaltiesOutput
total ((
items (2.eolymp.community.Penalty2�
PenaltyService�
CreatePenalty$.eolymp.community.CreatePenaltyInput%.eolymp.community.CreatePenaltyOutput"?��
��
community:member:write��
��
   A��
d���"
/penalties�
UpdatePenalty$.eolymp.community.UpdatePenaltyInput%.eolymp.community.UpdatePenaltyOutput"L��
��
community:member:write��
��
  �@��
���"/penalties/{penalty_id}�
DeletePenalty$.eolymp.community.DeletePenaltyInput%.eolymp.community.DeletePenaltyOutput"L��
��
community:member:write��
��
   A��
d���*/penalties/{penalty_id}�
DescribePenalty&.eolymp.community.DescribePenaltyInput\'.eolymp.community.DescribePenaltyOutput"K��
��
community:member:read��
��
  �@��
���/penalties/{penalty_id}�
ListPenalties$.eolymp.community.ListPenaltiesInput%.eolymp.community.ListPenaltiesOutput">��
��
community:member:read��
��
  �@��
���
/penaltiesB5Z3github.com/eolymp/go-sdk/eolymp/community;communitybproto3'
        , true);

        static::$is_initialized = true;
    }
}

