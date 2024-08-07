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
        $pool->internalAddGeneratedFile(
            '
�
#eolymp/course/student_service.protoeolymp.course"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.protoeolymp/course/student.proto eolymp/wellknown/direction.proto!eolymp/wellknown/expression.proto"=
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
DeleteStudentOutput"C
DescribeViewerInput,
extra� (2.eolymp.course.Student.Extra"?
DescribeViewerOutput\'
student (2.eolymp.course.Student"W
DescribeStudentInput
	member_id (	,
extra� (2.eolymp.course.Student.Extra"@
DescribeStudentOutput\'
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
items (2.eolymp.course.Student"T
WatchStudentInput
	member_id (	,
extra� (2.eolymp.course.Student.Extra"=
WatchStudentOutput\'
student (2.eolymp.course.Student2�
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
DescribeViewer".eolymp.course.DescribeViewerInput#.eolymp.course.DescribeViewerOutput"@��
��
course:course:read��
��
  �A��
d���/viewer/student�
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
course:course:read0B/Z-github.com/eolymp/go-sdk/eolymp/course;coursebproto3'
        , true);

        static::$is_initialized = true;
    }
}

