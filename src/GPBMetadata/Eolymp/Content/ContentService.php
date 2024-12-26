<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/content/content_service.proto

namespace GPBMetadata\Eolymp\Content;

class ContentService
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
        \GPBMetadata\Eolymp\Content\Fragment::initOnce();
        \GPBMetadata\Eolymp\Content\Variant::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Direction::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(
            '
�)
$eolymp/content/content_service.protoeolymp.content"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.protoeolymp/content/fragment.protoeolymp/content/variant.proto eolymp/wellknown/direction.proto!eolymp/wellknown/expression.proto"\\
DescribeFragmentInput
fragment_id (	.
extra� (2.eolymp.content.Fragment.Extra"D
DescribeFragmentOutput*
fragment (2.eolymp.content.Fragment"�
ListFragmentsInput
offset
 (
size (:
filters( (2).eolymp.content.ListFragmentsInput.Filter5
sort2 (2\'.eolymp.content.ListFragmentsInput.Sort*
order3 (2.eolymp.wellknown.Direction
locale� (	.
extra� (2.eolymp.content.Fragment.Extra�
Filter
query (	*
id (2.eolymp.wellknown.ExpressionID0
path (2".eolymp.wellknown.ExpressionString0
locale (2 .eolymp.wellknown.ExpressionEnum/
label (2 .eolymp.wellknown.ExpressionEnum"-
Sort
DEFAULT 
PATH

CREATED_AT"M
ListFragmentsOutput
total (\'
items (2.eolymp.content.Fragment"A
CreateFragmentInput*
fragment (2.eolymp.content.Fragment"+
CreateFragmentOutput
fragment_id (	"�
UpdateFragmentInput-
patch (2.eolymp.content.Fragment.Patch
fragment_id (	*
fragment (2.eolymp.content.Fragment"
UpdateFragmentOutput"*
DeleteFragmentInput
fragment_id (	"
DeleteFragmentOutput"�
TranslateFragmentInput
fragment_id (	
source (	
target (	
target_automatic (
override_manual (")
TranslateFragmentOutput
job_id (	"n
DescribeVariantInput
fragment_id (	

variant_id (	-
extra� (2.eolymp.content.Variant.Extra"A
DescribeVariantOutput(
variant (2.eolymp.content.Variant"�
ListVariantsInput
fragment_id (	
offset
 (
size (9
filters( (2(.eolymp.content.ListVariantsInput.Filter-
extra� (2.eolymp.content.Variant.Extrau
Filter
query (	*
id (2.eolymp.wellknown.ExpressionID0
locale (2 .eolymp.wellknown.ExpressionEnum"K
ListVariantsOutput
total (&
items (2.eolymp.content.Variant"S
CreateVariantInput
fragment_id (	(
variant (2.eolymp.content.Variant")
CreateVariantOutput

variant_id (	"g
UpdateVariantInput
fragment_id (	

variant_id (	(
variant (2.eolymp.content.Variant"
UpdateVariantOutput"=
DeleteVariantInput
fragment_id (	

variant_id (	"
DeleteVariantOutput"a
DescribePathInput
path (	
locale (	.
extra� (2.eolymp.content.Fragment.Extra"@
DescribePathOutput*
fragment (2.eolymp.content.Fragment"`
ListParentsInput
path (	
locale (	.
extra� (2.eolymp.content.Fragment.Extra"K
ListParentsOutput
total (\'
items (2.eolymp.content.Fragment2�
ContentService�
DescribeFragment%.eolymp.content.DescribeFragmentInput&.eolymp.content.DescribeFragmentOutput"X��
��
  �A��
���
��
typewriter:fragment:read���" /content/fragments/{fragment_id}�
ListFragments".eolymp.content.ListFragmentsInput#.eolymp.content.ListFragmentsOutput"I��
��
  �A��
d��
��
typewriter:fragment:read���/content/fragments�
CreateFragment#.eolymp.content.CreateFragmentInput$.eolymp.content.CreateFragmentOutput"J��
��
  �@��
2��
��
typewriter:fragment:write���"/content/fragments�
UpdateFragment#.eolymp.content.UpdateFragmentInput$.eolymp.content.UpdateFragmentOutput"X��
��
  �@��
2��
��
typewriter:fragment:write���" /content/fragments/{fragment_id}�
DeleteFragment#.eolymp.content.DeleteFragmentInput$.eolymp.content.DeleteFragmentOutput"X��
��
  �@��
2��
��
typewriter:fragment:write���"* /content/fragments/{fragment_id}�
TranslateFragment&.eolymp.content.TranslateFragmentInput\'.eolymp.content.TranslateFragmentOutput"b��
��
   @��

��
��
typewriter:fragment:write���,"*/content/fragments/{fragment_id}/translate�
DescribeVariant$.eolymp.content.DescribeVariantInput%.eolymp.content.DescribeVariantOutput"n��
��
  �A��
���
��
typewriter:fragment:read���86/content/fragments/{fragment_id}/variants/{variant_id}�
ListVariants!.eolymp.content.ListVariantsInput".eolymp.content.ListVariantsOutput"`��
��
  �A��
d��
��
typewriter:fragment:read���+)/content/fragments/{fragment_id}/variants�
CreateVariant".eolymp.content.CreateVariantInput#.eolymp.content.CreateVariantOutput"a��
��
  �@��
2��
��
typewriter:fragment:write���+")/content/fragments/{fragment_id}/variants�
UpdateVariant".eolymp.content.UpdateVariantInput#.eolymp.content.UpdateVariantOutput"n��
��
  �@��
2��
��
typewriter:fragment:write���86/content/fragments/{fragment_id}/variants/{variant_id}�
DeleteVariant".eolymp.content.DeleteVariantInput#.eolymp.content.DeleteVariantOutput"n��
��
  �@��
2��
��
typewriter:fragment:write���8*6/content/fragments/{fragment_id}/variants/{variant_id}�
DescribePath!.eolymp.content.DescribePathInput".eolymp.content.DescribePathOutput"E��
��
  �A��
���
��
typewriter:fragment:read���/content/path�
ListParents .eolymp.content.ListParentsInput!.eolymp.content.ListParentsOutput"H��
��
  �A��
���
��
typewriter:fragment:read���/content/parentsB1Z/github.com/eolymp/go-sdk/eolymp/content;contentbproto3'
        , true);

        static::$is_initialized = true;
    }
}

