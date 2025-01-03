<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/testing_service.proto

namespace GPBMetadata\Eolymp\Atlas;

class TestingService
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
        \GPBMetadata\Eolymp\Atlas\TestingChecker::initOnce();
        \GPBMetadata\Eolymp\Atlas\TestingConfig::initOnce();
        \GPBMetadata\Eolymp\Atlas\TestingInteractor::initOnce();
        \GPBMetadata\Eolymp\Atlas\TestingTest::initOnce();
        \GPBMetadata\Eolymp\Atlas\TestingTestset::initOnce();
        $pool->internalAddGeneratedFile(
            '
�\'
"eolymp/atlas/testing_service.protoeolymp.atlas"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.proto"eolymp/atlas/testing_checker.proto!eolymp/atlas/testing_config.proto%eolymp/atlas/testing_interactor.protoeolymp/atlas/testing_test.proto"eolymp/atlas/testing_testset.proto"G
UpdateTestingConfigInput+
config (2.eolymp.atlas.TestingConfig"
UpdateTestingConfigOutput"-
DescribeTestingConfigInput
versiond ("J
DescribeTestingConfigOutput+
config (2.eolymp.atlas.TestingConfig"<
UpdateCheckerInput&
checker (2.eolymp.atlas.Checker"
UpdateCheckerOutput"\'
DescribeCheckerInput
versiond ("?
DescribeCheckerOutput&
checker (2.eolymp.atlas.Checker"E
UpdateInteractorInput,

interactor (2.eolymp.atlas.Interactor"
UpdateInteractorOutput"*
DescribeInteractorInput
versiond ("H
DescribeInteractorOutput,

interactor (2.eolymp.atlas.Interactor"B
ListTestsetsInput
offset
 (
size (
versiond ("I
ListTestsetsOutput
total ($
items (2.eolymp.atlas.Testset";
DescribeTestsetInput

testset_id (	
versiond ("?
DescribeTestsetOutput&
testset (2.eolymp.atlas.Testset"<
CreateTestsetInput&
testset (2.eolymp.atlas.Testset"!
CreateTestsetOutput

id (	"P
UpdateTestsetInput

testset_id (	&
testset (2.eolymp.atlas.Testset"
UpdateTestsetOutput"(
DeleteTestsetInput

testset_id (	"
DeleteTestsetOutput"$
ListExamplesInput
versiond (":
ListExamplesOutput$
examples (2.eolymp.atlas.Test"5
ListTestsInput

testset_id (	
versiond ("C
ListTestsOutput
total (!
items (2.eolymp.atlas.Test"I
DescribeTestInput

testset_id (	
test_id (	
versiond ("6
DescribeTestOutput 
test (2.eolymp.atlas.Test"G
CreateTestInput

testset_id (	 
test (2.eolymp.atlas.Test"#
CreateTestOutput
test_id (	"�
UpdateTestInput2
patch (2#.eolymp.atlas.UpdateTestInput.Patch

testset_id (	
test_id (	 
test (2.eolymp.atlas.Test"�
Patch
ALL 
EXAMPLE
INACTIVE	
SCORE	
INPUT

ANSWER	
INDEX

SECRET	
EXAMPLE_INPUT
EXAMPLE_ANSWER"
UpdateTestOutput"6
DeleteTestInput

testset_id (	
test_id (	"
DeleteTestOutput2�
TestingService�
UpdateTestingConfig&.eolymp.atlas.UpdateTestingConfigInput\'.eolymp.atlas.UpdateTestingConfigOutput":��
��

�#>��
��
��
atlas:problem:write���
/testing�
DescribeTestingConfig(.eolymp.atlas.DescribeTestingConfigInput).eolymp.atlas.DescribeTestingConfigOutput":��
��
   @��

��
��
atlas:problem:write���
/testing�
UpdateChecker .eolymp.atlas.UpdateCheckerInput!.eolymp.atlas.UpdateCheckerOutput":��
��

�#>��
��
��
atlas:problem:write���
/checker�
DescribeChecker".eolymp.atlas.DescribeCheckerInput#.eolymp.atlas.DescribeCheckerOutput":��
��
   @��

��
��
atlas:problem:write���
/checker�
UpdateInteractor#.eolymp.atlas.UpdateInteractorInput$.eolymp.atlas.UpdateInteractorOutput"=��
��

�#>��
��
��
atlas:problem:write���/interactor�
DescribeInteractor%.eolymp.atlas.DescribeInteractorInput&.eolymp.atlas.DescribeInteractorOutput"=��
��
   @��

��
��
atlas:problem:write���/interactor�
CreateTestset .eolymp.atlas.CreateTestsetInput!.eolymp.atlas.CreateTestsetOutput";��
��
  �@��
2��
��
atlas:problem:write���"	/testsets�
UpdateTestset .eolymp.atlas.UpdateTestsetInput!.eolymp.atlas.UpdateTestsetOutput"H��
��
  �@��
2��
��
atlas:problem:write���/testsets/{testset_id}�
DeleteTestset .eolymp.atlas.DeleteTestsetInput!.eolymp.atlas.DeleteTestsetOutput"H��
��
  �@��
2��
��
atlas:problem:write���*/testsets/{testset_id}�
DescribeTestset".eolymp.atlas.DescribeTestsetInput#.eolymp.atlas.DescribeTestsetOutput"H��
��
   A��
2��
��
atlas:problem:write���/testsets/{testset_id}�
ListTestsets.eolymp.atlas.ListTestsetsInput .eolymp.atlas.ListTestsetsOutput";��
��
   A��
2��
��
atlas:problem:write���	/testsets�

CreateTest.eolymp.atlas.CreateTestInput.eolymp.atlas.CreateTestOutput"O��
��
   A��
���
��
atlas:problem:write���"/testsets/{testset_id}/tests�

UpdateTest.eolymp.atlas.UpdateTestInput.eolymp.atlas.UpdateTestOutput"Y��
��
   A��
���
��
atlas:problem:write���(&/testsets/{testset_id}/tests/{test_id}�

DeleteTest.eolymp.atlas.DeleteTestInput.eolymp.atlas.DeleteTestOutput"Y��
��
   A��
���
��
atlas:problem:write���(*&/testsets/{testset_id}/tests/{test_id}�
DescribeTest.eolymp.atlas.DescribeTestInput .eolymp.atlas.DescribeTestOutput"X��
��
   A��
2��
��
atlas:problem:write���(&/testsets/{testset_id}/tests/{test_id}�
	ListTests.eolymp.atlas.ListTestsInput.eolymp.atlas.ListTestsOutput"N��
��
   A��
2��
��
atlas:problem:write���/testsets/{testset_id}/tests�
ListExamples.eolymp.atlas.ListExamplesInput .eolymp.atlas.ListExamplesOutput":��
��
  �A��
d��
��
atlas:problem:read���	/examplesB-Z+github.com/eolymp/go-sdk/eolymp/atlas;atlasbproto3'
        , true);

        static::$is_initialized = true;
    }
}

