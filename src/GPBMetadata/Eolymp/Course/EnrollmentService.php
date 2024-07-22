<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/enrollment_service.proto

namespace GPBMetadata\Eolymp\Course;

class EnrollmentService
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
        \GPBMetadata\Eolymp\Course\Enrollment::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Direction::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
&eolymp/course/enrollment_service.protoeolymp.course"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.protoeolymp/course/enrollment.proto eolymp/wellknown/direction.proto!eolymp/wellknown/expression.protogoogle/protobuf/timestamp.proto"F
CreateEnrollmentInput-

enrollment (2.eolymp.course.Enrollment"/
CreateEnrollmentOutput
enrollment_id (	"�
UpdateEnrollmentInput9
patch (2*.eolymp.course.UpdateEnrollmentInput.Patch
enrollment_id (	-

enrollment (2.eolymp.course.Enrollment"N
Patch
ALL 
ASSIGNMENTS
ASSIGNMENTS_ADD
ASSIGNMENTS_REMOVE"
UpdateEnrollmentOutput".
DeleteEnrollmentInput
enrollment_id (	"
DeleteEnrollmentOutput"�
ListEnrollmentsInput
offset
 (
size (;
filters( (2*.eolymp.course.ListEnrollmentsInput.Filter:
sort2 (2,.eolymp.course.ListEnrollmentsInput.Sortable*
order3 (2.eolymp.wellknown.Direction/
extra� (2.eolymp.course.Enrollment.Extra�
Filter*
id
 (2.eolymp.wellknown.ExpressionID1
	member_id (2.eolymp.wellknown.ExpressionID0
group_id (2.eolymp.wellknown.ExpressionID"
Sortable
DEFAULT "P
ListEnrollmentsOutput
total ((
items (2.eolymp.course.Enrollment"a
DescribeEnrollmentInput
enrollment_id (	/
extra� (2.eolymp.course.Enrollment.Extra"I
DescribeEnrollmentOutput-

enrollment (2.eolymp.course.Enrollment2�
EnrollmentService�
CreateEnrollment$.eolymp.course.CreateEnrollmentInput%.eolymp.course.CreateEnrollmentOutput">��
��
course:course:write��
��
  �?��
���/enrollments�
UpdateEnrollment$.eolymp.course.UpdateEnrollmentInput%.eolymp.course.UpdateEnrollmentOutput"N��
��
course:course:write��
��
  �?��
���/enrollments/{enrollment_id}�
DeleteEnrollment$.eolymp.course.DeleteEnrollmentInput%.eolymp.course.DeleteEnrollmentOutput"N��
��
course:course:write��
��
  �?��
���*/enrollments/{enrollment_id}�
DescribeEnrollment&.eolymp.course.DescribeEnrollmentInput\'.eolymp.course.DescribeEnrollmentOutput"M��
��
course:course:read��
��
  �A��
d���/enrollments/{enrollment_id}�
ListEnrollments#.eolymp.course.ListEnrollmentsInput$.eolymp.course.ListEnrollmentsOutput"=��
��
course:course:read��
��
  �A��
d���/enrollmentsB/Z-github.com/eolymp/go-sdk/eolymp/course;coursebproto3'
        , true);

        static::$is_initialized = true;
    }
}

