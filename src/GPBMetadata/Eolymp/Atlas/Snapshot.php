<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/snapshot.proto

namespace GPBMetadata\Eolymp\Atlas;

class Snapshot
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Atlas\Attachment::initOnce();
        \GPBMetadata\Eolymp\Atlas\CodeTemplate::initOnce();
        \GPBMetadata\Eolymp\Atlas\Editorial::initOnce();
        \GPBMetadata\Eolymp\Atlas\Problem::initOnce();
        \GPBMetadata\Eolymp\Atlas\Script::initOnce();
        \GPBMetadata\Eolymp\Atlas\Solution::initOnce();
        \GPBMetadata\Eolymp\Atlas\Statement::initOnce();
        \GPBMetadata\Eolymp\Atlas\TestingChecker::initOnce();
        \GPBMetadata\Eolymp\Atlas\TestingConfig::initOnce();
        \GPBMetadata\Eolymp\Atlas\TestingInteractor::initOnce();
        \GPBMetadata\Eolymp\Atlas\TestingTest::initOnce();
        \GPBMetadata\Eolymp\Atlas\TestingTestset::initOnce();
        \GPBMetadata\Eolymp\Atlas\TestingValidator::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
eolymp/atlas/snapshot.protoeolymp.atlas eolymp/atlas/code_template.protoeolymp/atlas/editorial.protoeolymp/atlas/problem.protoeolymp/atlas/script.protoeolymp/atlas/solution.protoeolymp/atlas/statement.proto"eolymp/atlas/testing_checker.proto!eolymp/atlas/testing_config.proto%eolymp/atlas/testing_interactor.protoeolymp/atlas/testing_test.proto"eolymp/atlas/testing_testset.proto$eolymp/atlas/testing_validator.proto"�
Snapshot&
problem (2.eolymp.atlas.Problem,
testing
 (2.eolymp.atlas.TestingConfig&
checker (2.eolymp.atlas.Checker,

interactor (2.eolymp.atlas.Interactor*
	validator (2.eolymp.atlas.Validator+

statements (2.eolymp.atlas.Statement)
	templates (2.eolymp.atlas.Template-
attachments (2.eolymp.atlas.Attachment\'
testsets (2.eolymp.atlas.Testset!
tests (2.eolymp.atlas.Test+

editorials	 (2.eolymp.atlas.Editorial)
	solutions (2.eolymp.atlas.Solution%
scripts (2.eolymp.atlas.ScriptB-Z+github.com/eolymp/go-sdk/eolymp/atlas;atlasbproto3'
        , true);

        static::$is_initialized = true;
    }
}

