<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/member_service.proto

namespace GPBMetadata\Eolymp\Community;

class MemberService
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
        \GPBMetadata\Eolymp\Community\EmailType::initOnce();
        \GPBMetadata\Eolymp\Community\Member::initOnce();
        \GPBMetadata\Eolymp\Ecm\Content::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Direction::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�+
%eolymp/community/member_service.protoeolymp.community"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.proto!eolymp/community/email_type.protoeolymp/community/member.protoeolymp/ecm/content.proto eolymp/wellknown/direction.proto!eolymp/wellknown/expression.protogoogle/protobuf/timestamp.proto"g
MemberChangedEvent(
before (2.eolymp.community.Member\'
after (2.eolymp.community.Member"=
CreateMemberInput(
member (2.eolymp.community.Member"\'
CreateMemberOutput
	member_id (	"�
UpdateMemberInput8
patch (2).eolymp.community.UpdateMemberInput.Patch
	member_id (	(
member (2.eolymp.community.Member"�
Patch
ALL 
INACTIVE

UNOFFICIAL

RATING

GROUPS

GROUPS_ADD
GROUPS_REMOVE
ACCOUNTd
USER_NICKNAMEe

USER_EMAILf
USER_PASSWORDg
	USER_NAMEh
USER_PICTUREi
USER_BIRTHDAYj
USER_COUNTRYk
	USER_CITYl
USER_PREFERENCESm
USER_PREFERENCES_LOCALE�
USER_PREFERENCES_TIMEZONE�
USER_PREFERENCES_RUNTIME�
USER_EMAIL_SUBSCRIPTIONSn
	TEAM_NAME�

GHOST_NAME�

ATTRIBUTES�"
UpdateMemberOutput"
UpdateMemberPictureInput
	member_id (	
filename (	
data (
offset_x
 (
offset_y (
size ("0
UpdateMemberPictureOutput
picture_url (	"<
DeleteMemberInput
	member_id (	
force_delete ("
DeleteMemberOutput"\'
RestoreMemberInput
	member_id (	"
RestoreMemberOutput"X
DescribeMemberInput
	member_id (	.
extra� (2.eolymp.community.Member.Extra"@
DescribeMemberOutput(
member (2.eolymp.community.Member"�
ListMembersInput
offset
 (
size (:
filters( (2).eolymp.community.ListMembersInput.Filter9
sort2 (2+.eolymp.community.ListMembersInput.Sortable*
order3 (2.eolymp.wellknown.Direction.
extra� (2.eolymp.community.Member.Extra�
Filter
query
 (	*
id (2.eolymp.wellknown.ExpressionID.
type (2 .eolymp.wellknown.ExpressionEnum0
name (2".eolymp.wellknown.ExpressionString2
inactive (2 .eolymp.wellknown.ExpressionBool4

incomplete (2 .eolymp.wellknown.ExpressionBool4

unofficial (2 .eolymp.wellknown.ExpressionBool0
seated	 (2 .eolymp.wellknown.ExpressionBool/
team_id (2.eolymp.wellknown.ExpressionID0
group_id (2.eolymp.wellknown.ExpressionID7
user_issuere (2".eolymp.wellknown.ExpressionString8
user_subjectf (2".eolymp.wellknown.ExpressionString6

user_emailg (2".eolymp.wellknown.ExpressionString5
	user_nameh (2".eolymp.wellknown.ExpressionString9
user_nicknamei (2".eolymp.wellknown.ExpressionString.
scorej (2.eolymp.wellknown.ExpressionInt"F
Sortable
DEFAULT 
NAME

CREATED_AT
TYPE	
SCORE"K
ListMembersOutput
total (\'
items (2.eolymp.community.Member"7
AssignMemberInput
team_id (	
	member_id (	"
AssignMemberOutput"9
UnassignMemberInput
team_id (	
	member_id (	"
UnassignMemberOutput"|
DescribeMemberUsageInput0
period_start (2.google.protobuf.Timestamp.

period_end (2.google.protobuf.Timestamp"_
DescribeMemberUsageOutput
total_members (
active_members (
new_members ("�
NotifyMemberInput
	member_id (	)
type
 (2.eolymp.community.EmailType
locale (	
subject (	$
content (2.eolymp.ecm.ContentG

parameters (23.eolymp.community.NotifyMemberInput.ParametersEntry1
ParametersEntry
key (	
value (	:8"(
NotifyMemberOutput

message_id (	2�
MemberService�
CreateMember#.eolymp.community.CreateMemberInput$.eolymp.community.CreateMemberOutput"=��
��
  �@��
��
��
community:member:write���
"/members�
UpdateMember#.eolymp.community.UpdateMemberInput$.eolymp.community.UpdateMemberOutput"I��
��
  �@��
��
��
community:member:write���"/members/{member_id}�
UpdateMemberPicture*.eolymp.community.UpdateMemberPictureInput+.eolymp.community.UpdateMemberPictureOutput"Q��
��
  �@��
��
��
community:member:write���"/members/{member_id}/picture�
DeleteMember#.eolymp.community.DeleteMemberInput$.eolymp.community.DeleteMemberOutput"I��
��
  �@��
��
��
community:member:write���*/members/{member_id}�
RestoreMember$.eolymp.community.RestoreMemberInput%.eolymp.community.RestoreMemberOutput"Q��
��
  �@��
��
��
community:member:write���"/members/{member_id}/restore�
DescribeMember%.eolymp.community.DescribeMemberInput&.eolymp.community.DescribeMemberOutput"H��
��
  �@��
��
��
community:member:read���/members/{member_id}�
ListMembers".eolymp.community.ListMembersInput#.eolymp.community.ListMembersOutput"<��
��
  �@��
��
��
community:member:read���
/members�
AssignMember#.eolymp.community.AssignMemberInput$.eolymp.community.AssignMemberOutput"Y��
��
  �@��
��
��
community:member:write���&$/members/{team_id}/users/{member_id}�
UnassignMember%.eolymp.community.UnassignMemberInput&.eolymp.community.UnassignMemberOutput"Y��
��
  �@��
��
��
community:member:write���&*$/members/{team_id}/users/{member_id}�
NotifyMember#.eolymp.community.NotifyMemberInput$.eolymp.community.NotifyMemberOutput"N��
��
  �@��
��
��
community:member:write���"/members/{team_id}/notify�
DescribeMemberUsage*.eolymp.community.DescribeMemberUsageInput+.eolymp.community.DescribeMemberUsageOutput"B��
��
  �@��
��
��
community:member:read���/usage/membersB5Z3github.com/eolymp/go-sdk/eolymp/community;communitybproto3'
        , true);

        static::$is_initialized = true;
    }
}

