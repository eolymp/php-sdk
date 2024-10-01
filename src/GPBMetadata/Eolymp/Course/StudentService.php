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
        \GPBMetadata\Eolymp\Course\Assignment::initOnce();
        \GPBMetadata\Eolymp\Course\Student::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Direction::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�!
#eolymp/course/student_service.protoeolymp.course"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.protoeolymp/course/assignment.protoeolymp/course/student.proto eolymp/wellknown/direction.proto!eolymp/wellknown/expression.protogoogle/protobuf/timestamp.proto"=
CreateStudentInput\'
student (2.eolymp.course.Student")
CreateStudentOutput

student_id (	"�
UpdateStudentInput6
patch (2\'.eolymp.course.UpdateStudentInput.Patch
	member_id (	\'
student (2.eolymp.course.Student".
Patch
ALL 
INACTIVE

ASSIGN_ALL"
UpdateStudentOutput"\'
DeleteStudentInput
	member_id (	"
DeleteStudentOutput"W
DescribeStudentInput
	member_id (	,
extra� (2.eolymp.course.Student.Extra"@
DescribeStudentOutput\'
student (2.eolymp.course.Student"�
ListStudentsInput
after (	
offset
 (
size (8
filters( (2\'.eolymp.course.ListStudentsInput.Filter7
sort2 (2).eolymp.course.ListStudentsInput.Sortable*
order3 (2.eolymp.wellknown.Direction,
extra� (2.eolymp.course.Student.Extra�
Filter
query (	*
id
 (2.eolymp.wellknown.ExpressionID1
	member_id (2.eolymp.wellknown.ExpressionID0
group_id (2.eolymp.wellknown.ExpressionID"
Sortable
DEFAULT "J
ListStudentsOutput
total (%
items (2.eolymp.course.Student"T
WatchStudentInput
	member_id (	,
extra� (2.eolymp.course.Student.Extra"=
WatchStudentOutput\'
student (2.eolymp.course.Student"
JoinCourseInput"
JoinCourseOutput"C
DescribeViewerInput,
extra� (2.eolymp.course.Student.Extra"?
DescribeViewerOutput\'
student (2.eolymp.course.Student"�
ListStudentAssignmentsInput
	member_id (	
offset
 (
size (B
filters( (21.eolymp.course.ListStudentAssignmentsInput.Filterv
Filter
query (	*
id
 (2.eolymp.wellknown.ExpressionID1
	module_id (2.eolymp.wellknown.ExpressionID"W
ListStudentAssignmentsOutput
total ((
items (2.eolymp.course.Assignment"�
UpdateStudentAssignmentInput
	member_id (	
	module_id (	/
start_after (2.google.protobuf.Timestamp3
complete_before (2.google.protobuf.Timestamp
duration (
upsolve ("
UpdateStudentAssignmentOutput"D
DeleteStudentAssignmentInput
	member_id (	
	module_id (	"
DeleteStudentAssignmentOutput2�
StudentService�
CreateStudent!.eolymp.course.CreateStudentInput".eolymp.course.CreateStudentOutput";��
��
course:course:write��
��
  �@��
���"	/students�
UpdateStudent!.eolymp.course.UpdateStudentInput".eolymp.course.UpdateStudentOutput"G��
��
course:course:write��
��
  �@��
���"/students/{member_id}�
DeleteStudent!.eolymp.course.DeleteStudentInput".eolymp.course.DeleteStudentOutput"G��
��
course:course:write��
��
  �?��
���*/students/{member_id}�
DescribeStudent#.eolymp.course.DescribeStudentInput$.eolymp.course.DescribeStudentOutput"F��
��
course:course:read��
��
  �A��
d���/students/{member_id}�
ListStudents .eolymp.course.ListStudentsInput!.eolymp.course.ListStudentsOutput":��
��
course:course:read��
��
  �A��
d���	/studentsq
WatchStudent .eolymp.course.WatchStudentInput!.eolymp.course.WatchStudentOutput"��
��
course:course:read0�

JoinCourse.eolymp.course.JoinCourseInput.eolymp.course.JoinCourseOutput"6��
��
course:course:read��
��
   @��

���"/join�
DescribeViewer".eolymp.course.DescribeViewerInput#.eolymp.course.DescribeViewerOutput"@��
��
course:course:read��
��
  �A��
d���/viewer/student�
ListStudentAssignments*.eolymp.course.ListStudentAssignmentsInput+.eolymp.course.ListStudentAssignmentsOutput"R��
��
course:course:read��
��
  �A��
d���#!/students/{member_id}/assignments�
UpdateStudentAssignment+.eolymp.course.UpdateStudentAssignmentInput,.eolymp.course.UpdateStudentAssignmentOutput"R��
��
course:course:read��
��
  �A��
d���#"!/students/{member_id}/assignments�
DeleteStudentAssignment+.eolymp.course.DeleteStudentAssignmentInput,.eolymp.course.DeleteStudentAssignmentOutput"R��
��
course:course:read��
��
  �A��
d���#*!/students/{member_id}/assignmentsB/Z-github.com/eolymp/go-sdk/eolymp/course;coursebproto3'
        , true);

        static::$is_initialized = true;
    }
}

