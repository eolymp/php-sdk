<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/course_service.proto

namespace GPBMetadata\Eolymp\Course;

class CourseService
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
        \GPBMetadata\Eolymp\Course\Course::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Direction::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
"eolymp/course/course_service.protoeolymp.course"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.protoeolymp/course/course.proto eolymp/wellknown/direction.proto!eolymp/wellknown/expression.proto"�
ListCoursesInput
offset
 (
size (7
filters( (2&.eolymp.course.ListCoursesInput.Filter6
sort2 (2(.eolymp.course.ListCoursesInput.Sortable*
order3 (2.eolymp.wellknown.Direction+
extra� (2.eolymp.course.Course.Extra�
Filter
query (	*
id
 (2.eolymp.wellknown.ExpressionID0
topic_id (2.eolymp.wellknown.ExpressionID0
locale (2 .eolymp.wellknown.ExpressionEnum"
Sortable
DEFAULT "H
ListCoursesOutput
total ($
items (2.eolymp.course.Course"U
DescribeCourseInput
	course_id (	+
extra� (2.eolymp.course.Course.Extra"=
DescribeCourseOutput%
course (2.eolymp.course.Course":
CreateCourseInput%
course (2.eolymp.course.Course"\'
CreateCourseOutput
	course_id (	"�
UpdateCourseInput5
patch (2&.eolymp.course.UpdateCourseInput.Patch
	course_id (	%
course (2.eolymp.course.Course"l
Patch
ALL 

LOCALE
NAME
DESCRIPTION	
IMAGE

VISIBILITY
DURATION

TOPICS"
UpdateCourseOutput"&
DeleteCourseInput
	course_id (	"
DeleteCourseOutput"%
StartCourseInput
	course_id (	"
StartCourseOutput"�
CopyCourseInput
	course_id (	8

copy_scope (2$.eolymp.course.CopyCourseInput.Scope
	copy_name (	"M
Scope
ALL 
MODULES
STUDENTS
ASSIGNMENTS
PERMISSIONS"*
CopyCourseOutput
copy_course_id (	2�
CourseService�
CreateCourse .eolymp.course.CreateCourseInput!.eolymp.course.CreateCourseOutput":��
��
course:course:write��
��
  �?��
���
/courses�
UpdateCourse .eolymp.course.UpdateCourseInput!.eolymp.course.UpdateCourseOutput"F��
��
course:course:write��
��
  �?��
���/courses/{course_id}�
DeleteCourse .eolymp.course.DeleteCourseInput!.eolymp.course.DeleteCourseOutput"F��
��
course:course:write��
��
  �?��
���*/courses/{course_id}�
DescribeCourse".eolymp.course.DescribeCourseInput#.eolymp.course.DescribeCourseOutput"E��
��
course:course:read��
��
  �A��
d���/courses/{course_id}�
ListCourses.eolymp.course.ListCoursesInput .eolymp.course.ListCoursesOutput"9��
��
course:course:read��
��
  �A��
d���
/courses�

CopyCourse.eolymp.course.CopyCourseInput.eolymp.course.CopyCourseOutput"K��
��
course:course:write��
��
  �?��
���"/courses/{course_id}/copyB/Z-github.com/eolymp/go-sdk/eolymp/course;coursebproto3'
        , true);

        static::$is_initialized = true;
    }
}

