<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/student_service.proto

namespace GPBMetadata\Eolymp\Course;

class StudentService
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
        \GPBMetadata\Eolymp\Course\Student::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Direction::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
#eolymp/course/student_service.protoeolymp.course"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.protoeolymp/course/student.proto eolymp/wellknown/direction.proto!eolymp/wellknown/expression.protogoogle/protobuf/timestamp.proto"W
DescribeStudentInput
	member_id (	,
extra� (2.eolymp.course.Student.Extra"@
DescribeStudentOutput\'
student (2.eolymp.course.Student"�
UpdateStudentInput6
patch (2\'.eolymp.course.UpdateStudentInput.Patch
	member_id (	\'
student (2.eolymp.course.Student"
Patch
ALL 
INACTIVE"
UpdateStudentOutput"�
AssignModuleInput
	member_id (	
	module_id (	/
start_after (2.google.protobuf.Timestamp3
complete_before (2.google.protobuf.Timestamp
duration# ("
AssignModuleOutput";
UnassignModuleInput
	member_id (	
	module_id (	"
UnassignModuleOutput"
DescribeViewerInput"?
DescribeViewerOutput\'
student (2.eolymp.course.Student"�
ListStudentsInput
offset
 (
size (8
filters( (2\'.eolymp.course.ListStudentsInput.Filter7
sort2 (2).eolymp.course.ListStudentsInput.Sortable*
order3 (2.eolymp.wellknown.Direction,
extra� (2.eolymp.course.Student.Extrag
Filter*
id
 (2.eolymp.wellknown.ExpressionID1
	member_id (2.eolymp.wellknown.ExpressionID"
Sortable
DEFAULT "J
ListStudentsOutput
total (%
items (2.eolymp.course.Student"&
WatchStudentInput
	member_id (	"=
WatchStudentOutput\'
student (2.eolymp.course.Student2�
StudentService�
DescribeStudent#.eolymp.course.DescribeStudentInput$.eolymp.course.DescribeStudentOutput"F��
��
course:course:read��
��
  �A��
d���/students/{member_id}�
UpdateStudent!.eolymp.course.UpdateStudentInput".eolymp.course.UpdateStudentOutput"F��
��
course:course:read��
��
  �@��
���"/students/{member_id}�
AssignModule .eolymp.course.AssignModuleInput!.eolymp.course.AssignModuleOutput"_��
��
course:course:write��
��
  �@��
���/"-/students/{member_id}/assignments/{module_id}�
UnassignModule".eolymp.course.UnassignModuleInput#.eolymp.course.UnassignModuleOutput"_��
��
course:course:write��
��
  �@��
���/*-/students/{member_id}/assignments/{module_id}�
DescribeViewer".eolymp.course.DescribeViewerInput#.eolymp.course.DescribeViewerOutput"@��
��
course:course:read��
��
  �A��
d���/viewer/student�
ListStudents .eolymp.course.ListStudentsInput!.eolymp.course.ListStudentsOutput":��
��
course:course:read��
��
  �A��
d���	/studentsq
WatchStudent .eolymp.course.WatchStudentInput!.eolymp.course.WatchStudentOutput"��
��
course:course:read0B/Z-github.com/eolymp/go-sdk/eolymp/course;coursebproto3'
        , true);

        static::$is_initialized = true;
    }
}

