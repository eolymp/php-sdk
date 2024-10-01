<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/module_service.proto

namespace GPBMetadata\Eolymp\Course;

class ModuleService
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
        \GPBMetadata\Eolymp\Course\Module::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Direction::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
"eolymp/course/module_service.protoeolymp.course"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.protoeolymp/course/module.proto eolymp/wellknown/direction.proto!eolymp/wellknown/expression.protogoogle/protobuf/timestamp.proto":
CreateModuleInput%
module (2.eolymp.course.Module"\'
CreateModuleOutput
	module_id (	"�
UpdateModuleInput5
patch (2&.eolymp.course.UpdateModuleInput.Patch
	module_id (	%
module (2.eolymp.course.Module"[
Patch
ALL 	
DRAFT	
EXTRA
NAME
	IMAGE_URL	
INDEX
DESCRIPTION"
UpdateModuleOutput"&
DeleteModuleInput
	module_id (	"
DeleteModuleOutput"�
DescribeModuleInput
	module_id (	
	member_id (	H 
group_id (	H +
extra� (2.eolymp.course.Module.ExtraB

assignee"=
DescribeModuleOutput%
module (2.eolymp.course.Module"�
ListModulesInput
	member_id (	H 
group_id (	H 
offset
 (
size (7
filters( (2&.eolymp.course.ListModulesInput.Filter2
sort2 (2$.eolymp.course.ListModulesInput.Sort*
order3 (2.eolymp.wellknown.Direction+
extra� (2.eolymp.course.Module.Extray
Filter
query (	/
draft (2 .eolymp.wellknown.ExpressionBool/
extra (2 .eolymp.wellknown.ExpressionBool"
Sort	
INDEX B

assignee"H
ListModulesOutput
total ($
items (2.eolymp.course.Module"%
StartModuleInput
	module_id (	"
StartModuleOutput"X
GradeModuleInput
	module_id (	
	member_id (	
grade (
excused ("
GradeModuleOutput2�
ModuleService�
CreateModule .eolymp.course.CreateModuleInput!.eolymp.course.CreateModuleOutput":��
��
course:course:write��
��
  �?��
���
/modules�
UpdateModule .eolymp.course.UpdateModuleInput!.eolymp.course.UpdateModuleOutput"F��
��
course:course:write��
��
  �?��
���/modules/{module_id}�
DeleteModule .eolymp.course.DeleteModuleInput!.eolymp.course.DeleteModuleOutput"F��
��
course:course:write��
��
  �?��
���*/modules/{module_id}�
DescribeModule".eolymp.course.DescribeModuleInput#.eolymp.course.DescribeModuleOutput"E��
��
course:course:read��
��
  �A��
d���/modules/{module_id}�
ListModules.eolymp.course.ListModulesInput .eolymp.course.ListModulesOutput"9��
��
course:course:read��
��
  �A��
d���
/modules�
StartModule.eolymp.course.StartModuleInput .eolymp.course.StartModuleOutput"K��
��
course:course:read��
��
  �@��
���"/modules/{module_id}/start�
GradeModule.eolymp.course.GradeModuleInput .eolymp.course.GradeModuleOutput"K��
��
course:course:read��
��
  �A��
d���"/modules/{module_id}/gradeB/Z-github.com/eolymp/go-sdk/eolymp/course;coursebproto3'
        , true);

        static::$is_initialized = true;
    }
}

