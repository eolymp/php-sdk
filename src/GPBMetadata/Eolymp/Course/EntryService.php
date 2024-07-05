<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/entry_service.proto

namespace GPBMetadata\Eolymp\Course;

class EntryService
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
        \GPBMetadata\Eolymp\Course\Entry::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Direction::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
!eolymp/course/entry_service.protoeolymp.course"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.protoeolymp/course/entry.proto eolymp/wellknown/direction.proto!eolymp/wellknown/expression.proto"7
CreateEntryInput#
entry (2.eolymp.course.Entry"%
CreateEntryOutput
entry_id (	"�
UpdateEntryInput4
patch (2%.eolymp.course.UpdateEntryInput.Patch
entry_id (	#
entry (2.eolymp.course.Entry"�
Patch
ALL 	
TITLE	
DRAFT

WEIGHT
CONTENT_ALL
SECTION_IMAGE

SECTION_DESCRIPTION
VIDEO_IMAGE_URL
VIDEO_VIDEO_URL
PROBLEM_URL"
UpdateEntryOutput"3
RenameEntryInput
entry_id (	
title (	"
RenameEntryOutput"D
MoveEntryInput
entry_id (	
	parent_id (	
index ("
MoveEntryOutput"$
DeleteEntryInput
entry_id (	"
DeleteEntryOutput"R
DescribeEntryInput
entry_id (	*
extra� (2.eolymp.course.Entry.Extra":
DescribeEntryOutput#
entry (2.eolymp.course.Entry"�
ListEntriesInput
offset
 (
size (7
filters( (2&.eolymp.course.ListEntriesInput.Filter6
sort2 (2(.eolymp.course.ListEntriesInput.Sortable*
order3 (2.eolymp.wellknown.Direction*
extra� (2.eolymp.course.Entry.Extra�
Filter
query (	*
id
 (2.eolymp.wellknown.ExpressionID1
	parent_id (2.eolymp.wellknown.ExpressionID/
draft (2 .eolymp.wellknown.ExpressionBool1
title (2".eolymp.wellknown.ExpressionString"
Sortable
DEFAULT "G
ListEntriesOutput
total (#
items (2.eolymp.course.Entry"n
DescribeTreeInput
root_id (	
depth (
draft (*
extra� (2.eolymp.course.Entry.Extra"9
DescribeTreeOutput#
items (2.eolymp.course.Entry"P
ListParentsInput
entry_id (	*
extra� (2.eolymp.course.Entry.Extra"8
ListParentsOutput#
items (2.eolymp.course.Entry2�

EntryService�
CreateEntry.eolymp.course.CreateEntryInput .eolymp.course.CreateEntryOutput":��
��
course:course:write��
��
  �?��
���
"/entries�
UpdateEntry.eolymp.course.UpdateEntryInput .eolymp.course.UpdateEntryOutput"E��
��
course:course:write��
��
  �?��
���/entries/{entry_id}�
RenameEntry.eolymp.course.RenameEntryInput .eolymp.course.RenameEntryOutput"K��
��
course:course:write��
��
   @��

���/entries/{entry_id}/title�
	MoveEntry.eolymp.course.MoveEntryInput.eolymp.course.MoveEntryOutput"N��
��
course:course:write��
��
   @��

���/entries/{entry_id}/position�
DeleteEntry.eolymp.course.DeleteEntryInput .eolymp.course.DeleteEntryOutput"E��
��
course:course:write��
��
   @��

���*/entries/{entry_id}�
DescribeEntry!.eolymp.course.DescribeEntryInput".eolymp.course.DescribeEntryOutput"D��
��
course:course:read��
��
  �A��
d���/entries/{entry_id}�
ListEntries.eolymp.course.ListEntriesInput .eolymp.course.ListEntriesOutput"9��
��
course:course:read��
��
  �@��
���
/entries�
DescribeTree .eolymp.course.DescribeTreeInput!.eolymp.course.DescribeTreeOutput"5��
��
course:course:read��
��
  �@��

���/toc�
ListParents.eolymp.course.ListParentsInput .eolymp.course.ListParentsOutput"L��
��
course:course:read��
��
  �@��

���/entries/{entry_id}/parentsB/Z-github.com/eolymp/go-sdk/eolymp/course;coursebproto3'
        , true);

        static::$is_initialized = true;
    }
}

