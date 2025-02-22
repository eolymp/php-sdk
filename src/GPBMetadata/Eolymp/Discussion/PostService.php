<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/post_service.proto

namespace GPBMetadata\Eolymp\Discussion;

class PostService
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
        \GPBMetadata\Eolymp\Discussion\Post::initOnce();
        \GPBMetadata\Eolymp\Ecm\Content::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Direction::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(
            '
�7
$eolymp/discussion/post_service.protoeolymp.discussion"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.protoeolymp/discussion/post.protoeolymp/ecm/content.proto eolymp/wellknown/direction.proto!eolymp/wellknown/expression.proto"�
PostChangedEvent\'
before (2.eolymp.discussion.Post&
after (2.eolymp.discussion.Post#
reason (2.eolymp.ecm.Content"s
PostPublishedEvent
	published (%
post (2.eolymp.discussion.Post#
reason (2.eolymp.ecm.Content"�
PostTranslationChangedEvent
post_id
 (	3
before (2#.eolymp.discussion.Post.Translation2
after (2#.eolymp.discussion.Post.Translation#
reason (2.eolymp.ecm.Content"c
DescribePostInput
post_id (	
locale< (	-
extra� (2.eolymp.discussion.Post.Extra";
DescribePostOutput%
post (2.eolymp.discussion.Post"�
ListPostsInput
after
 (	
size (
offset (4
sort2 (2&.eolymp.discussion.ListPostsInput.Sort*
order3 (2.eolymp.wellknown.Direction9
filters( (2(.eolymp.discussion.ListPostsInput.Filter
locale< (	-
extra� (2.eolymp.discussion.Post.Extra�
Filter
query (	*
id (2.eolymp.wellknown.ExpressionID1
	source_id (2.eolymp.wellknown.ExpressionID/
user_id (2.eolymp.wellknown.ExpressionID1
	member_id (2.eolymp.wellknown.ExpressionID/
type_id (2.eolymp.wellknown.ExpressionID9

created_at (2%.eolymp.wellknown.ExpressionTimestamp;
published_at (2%.eolymp.wellknown.ExpressionTimestamp/
draft (2 .eolymp.wellknown.ExpressionBool0
public (2 .eolymp.wellknown.ExpressionBool2
featured (2 .eolymp.wellknown.ExpressionBool4

moderation (2 .eolymp.wellknown.ExpressionEnum0
locale	 (2 .eolymp.wellknown.ExpressionEnum/
label
 (2 .eolymp.wellknown.ExpressionEnum"k
Sort
UNKNOWN_SORT 
PUBLISHED_AT

CREATED_AT

VOTE_COUNT
REPLY_COUNT

POPULARITY"b
ListPostsOutput
total (&
items (2.eolymp.discussion.Post
next_page_cursor (	"8
CreatePostInput%
post (2.eolymp.discussion.Post"#
CreatePostOutput
post_id (	"�
UpdatePostInput7
patch (2(.eolymp.discussion.UpdatePostInput.Patch
post_id (	%
post (2.eolymp.discussion.Post"w
Patch
ALL 
CONTENT

LABELS
TYPE_ID

LOCALE	
DRAFT
FEATURED

PINNED

MODERATION"
UpdatePostOutput"#
PublishPostInput
post_id (	"
PublishPostOutput"J
UnpublishPostInput
post_id (	#
reason (2.eolymp.ecm.Content"
UnpublishPostOutput"�
ModeratePostInput
post_id (	=
outcome (2,.eolymp.discussion.ModeratePostInput.Outcome#
reason (2.eolymp.ecm.Content"I
Outcome
UNKNOWN_OUTCOME 
APPROVED
REJECTED
	IN_REVIEW"
ModeratePostOutput""
DeletePostInput
post_id (	"7
DeletePostOutput#
reason (2.eolymp.ecm.Content".
VotePostInput
post_id (	
vote ("$
VotePostOutput

vote_count ("x
TranslatePostInput
post_id (	
source (	
target (	
target_automatic (
override_manual ("%
TranslatePostOutput
job_id (	"v
DescribePostTranslationInput
post_id (	
translation_id (	-
extra� (2.eolymp.discussion.Post.Extra"Y
DescribePostTranslationOutput8
translation (2#.eolymp.discussion.Post.Translation"�
ListPostTranslationsInput
post_id (	
offset
 (
size (D
filters( (23.eolymp.discussion.ListPostTranslationsInput.Filter-
extra� (2.eolymp.discussion.Post.Extrau
Filter
query (	*
id (2.eolymp.wellknown.ExpressionID0
locale (2 .eolymp.wellknown.ExpressionEnum"_
ListPostTranslationsOutput
total (2
items (2#.eolymp.discussion.Post.Translation"g
CreatePostTranslationInput
post_id (	8
translation (2#.eolymp.discussion.Post.Translation"5
CreatePostTranslationOutput
translation_id (	"�
UpdatePostTranslationInputB
patch (23.eolymp.discussion.UpdatePostTranslationInput.Patch
post_id (	
translation_id (	8
translation (2#.eolymp.discussion.Post.Translation"5
Patch
ALL 
CONTENT

LABELS

LOCALE"
UpdatePostTranslationOutput"E
DeletePostTranslationInput
post_id (	
translation_id (	"
DeletePostTranslationOutput2�
PostService�
DescribePost$.eolymp.discussion.DescribePostInput%.eolymp.discussion.DescribePostOutput"D��
��
  �A��
���
��
discussion:post:read���/posts/{post_id}�
	ListPosts!.eolymp.discussion.ListPostsInput".eolymp.discussion.ListPostsOutput"9��
��
  �A��
d��
��
discussion:post:read���/posts�

CreatePost".eolymp.discussion.CreatePostInput#.eolymp.discussion.CreatePostOutput":��
��
  �@��
2��
��
discussion:post:write���"/posts�

UpdatePost".eolymp.discussion.UpdatePostInput#.eolymp.discussion.UpdatePostOutput"D��
��
  �@��
2��
��
discussion:post:write���/posts/{post_id}�
PublishPost#.eolymp.discussion.PublishPostInput$.eolymp.discussion.PublishPostOutput"L��
��
  �@��
2��
��
discussion:post:write���"/posts/{post_id}/publish�
UnpublishPost%.eolymp.discussion.UnpublishPostInput&.eolymp.discussion.UnpublishPostOutput"L��
��
  �@��
2��
��
discussion:post:write���*/posts/{post_id}/publish�
ModeratePost$.eolymp.discussion.ModeratePostInput%.eolymp.discussion.ModeratePostOutput"M��
��
  �@��
2��
��
discussion:post:write���"/posts/{post_id}/moderate�

DeletePost".eolymp.discussion.DeletePostInput#.eolymp.discussion.DeletePostOutput"D��
��
  �@��
2��
��
discussion:post:write���*/posts/{post_id}�
VotePost .eolymp.discussion.VotePostInput!.eolymp.discussion.VotePostOutput"L��
��
  �@��
2��
��
discussion:message:write���"/posts/{post_id}/vote�
TranslatePost%.eolymp.discussion.TranslatePostInput&.eolymp.discussion.TranslatePostOutput"Q��
��
   @��

��
��
discussion:message:write���"/posts/{post_id}/translate�
DescribePostTranslation/.eolymp.discussion.DescribePostTranslationInput0.eolymp.discussion.DescribePostTranslationOutput"f��
��
  �A��
���
��
typewriter:fragment:read���0./posts/{post_id}/translations/{translation_id}�
ListPostTranslations,.eolymp.discussion.ListPostTranslationsInput-.eolymp.discussion.ListPostTranslationsOutput"T��
��
  �A��
d��
��
typewriter:fragment:read���/posts/{post_id}/translations�
CreatePostTranslation-.eolymp.discussion.CreatePostTranslationInput..eolymp.discussion.CreatePostTranslationOutput"U��
��
  �@��
2��
��
typewriter:fragment:write���"/posts/{post_id}/translations�
UpdatePostTranslation-.eolymp.discussion.UpdatePostTranslationInput..eolymp.discussion.UpdatePostTranslationOutput"f��
��
  �@��
2��
��
typewriter:fragment:write���0./posts/{post_id}/translations/{translation_id}�
DeletePostTranslation-.eolymp.discussion.DeletePostTranslationInput..eolymp.discussion.DeletePostTranslationOutput"f��
��
  �@��
2��
��
typewriter:fragment:write���0*./posts/{post_id}/translations/{translation_id}B7Z5github.com/eolymp/go-sdk/eolymp/discussion;discussionbproto3'
        , true);

        static::$is_initialized = true;
    }
}

