<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/assignment_service_v2.proto

namespace GPBMetadata\Eolymp\Course;

class AssignmentServiceV2
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
        \GPBMetadata\Eolymp\Course\AssignmentItemV2::initOnce();
        \GPBMetadata\Eolymp\Course\AssignmentV2::initOnce();
        \GPBMetadata\Eolymp\Course\ModuleItem::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
)eolymp/course/assignment_service_v2.protoeolymp.course"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.proto&eolymp/course/assignment_item_v2.proto!eolymp/course/assignment_v2.protoeolymp/course/module_item.protogoogle/protobuf/timestamp.proto"�
CreateAssignmentV2Input
	module_id (	/
start_after (2.google.protobuf.Timestamp3
complete_before (2.google.protobuf.Timestamp
duration# ("
CreateAssignmentV2Output",
DeleteAssignmentV2Input
	module_id (	"
DeleteAssignmentV2Output"+
StartAssignmentV2Input
	module_id (	"
StartAssignmentV2Output"
ListAssignmentsV2Input"E
ListAssignmentsV2Output*
items (2.eolymp.course.AssignmentV2"/
ListAssignmentItemsV2Input
	module_id (	"M
ListAssignmentItemsV2Output.
items (2.eolymp.course.AssignmentItemV2"t
DescribeAssignmentItemV2Input
	module_id (	
item_id (	/
extra� (2.eolymp.course.ModuleItem.Extra"O
DescribeAssignmentItemV2Output-
item (2.eolymp.course.AssignmentItemV2"�
UpdateAssignmentItemV2Input?
patch (20.eolymp.course.UpdateAssignmentItemV2Input.Patch
	module_id (	
item_id (	-
item (2.eolymp.course.AssignmentItemV2"1
Patch
ALL 
EXCUSED
GRADE_OVERRIDE"
UpdateAssignmentItemV2Output"@
ResetAssignmentItemV2Input
	module_id (	
item_id (	"
ResetAssignmentItemV2Output2�
AssignmentServiceV2�
CreateAssignment&.eolymp.course.CreateAssignmentV2Input\'.eolymp.course.CreateAssignmentV2Output">��
��
course:course:write��
��
  �@��
���"/assignments�
DeleteAssignment&.eolymp.course.DeleteAssignmentV2Input\'.eolymp.course.DeleteAssignmentV2Output"J��
��
course:course:write��
��
  �@��
���*/assignments/{module_id}�
StartAssignment%.eolymp.course.StartAssignmentV2Input&.eolymp.course.StartAssignmentV2Output"O��
��
course:course:read��
��
  �@��
��� */assignments/{module_id}/start�
ListAssignments%.eolymp.course.ListAssignmentsV2Input&.eolymp.course.ListAssignmentsV2Output"=��
��
course:course:read��
��
  �@��
���/assignments�
ListAssignmentItems).eolymp.course.ListAssignmentItemsV2Input*.eolymp.course.ListAssignmentItemsV2Output"O��
��
course:course:read��
��
  �@��
��� /assignments/{module_id}/items�
DescribeAssignmentItem,.eolymp.course.DescribeAssignmentItemV2Input-.eolymp.course.DescribeAssignmentItemV2Output"Y��
��
course:course:read��
��
  �@��
���*(/assignments/{module_id}/items/{item_id}�
UpdateAssignmentItem*.eolymp.course.UpdateAssignmentItemV2Input+.eolymp.course.UpdateAssignmentItemV2Output"Z��
��
course:course:write��
��
  �@��
���*"(/assignments/{module_id}/items/{item_id}�
ResetAssignmentItem).eolymp.course.ResetAssignmentItemV2Input*.eolymp.course.ResetAssignmentItemV2Output"`��
��
course:course:write��
��
  �@��
���0"./assignments/{module_id}/items/{item_id}/resetB/Z-github.com/eolymp/go-sdk/eolymp/course;coursebproto3'
        , true);

        static::$is_initialized = true;
    }
}

