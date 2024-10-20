<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/statement_service.proto

namespace GPBMetadata\Eolymp\Atlas;

class StatementService
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
        \GPBMetadata\Eolymp\Atlas\Statement::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
$eolymp/atlas/statement_service.protoeolymp.atlas"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.protoeolymp/atlas/statement.proto"|
StatementChangedEvent

problem_id (	\'
before (2.eolymp.atlas.Statement&
after (2.eolymp.atlas.Statement"6
ListStatementsInput
render (
versiond ("M
ListStatementsOutput
total (&
items (2.eolymp.atlas.Statement"O
DescribeStatementInput
statement_id (	
render (
versiond ("E
DescribeStatementOutput*
	statement (2.eolymp.atlas.Statement"G
LookupStatementInput
locale (	
render (
versiond ("C
LookupStatementOutput*
	statement (2.eolymp.atlas.Statement"C
PreviewStatementInput*
	statement (2.eolymp.atlas.Statement"D
PreviewStatementOutput*
	statement (2.eolymp.atlas.Statement"B
CreateStatementInput*
	statement (2.eolymp.atlas.Statement"-
CreateStatementOutput
statement_id (	"�
UpdateStatementInput7
patch
 (2(.eolymp.atlas.UpdateStatementInput.Patch
statement_id (	*
	statement (2.eolymp.atlas.Statement"_
Patch
ALL 

LOCALE	
TITLE
CONTENT
DOWNLOAD_LINK

AUTHOR

SOURCE"
UpdateStatementOutput",
DeleteStatementInput
statement_id (	"
DeleteStatementOutput2�	
StatementService�
CreateStatement".eolymp.atlas.CreateStatementInput#.eolymp.atlas.CreateStatementOutput"=��
��
atlas:problem:write��
��
  �?��
���/statements�
UpdateStatement".eolymp.atlas.UpdateStatementInput#.eolymp.atlas.UpdateStatementOutput"L��
��
atlas:problem:write��
��
  �?��
���/statements/{statement_id}�
DeleteStatement".eolymp.atlas.DeleteStatementInput#.eolymp.atlas.DeleteStatementOutput"L��
��
atlas:problem:write��
��
  �?��
���*/statements/{statement_id}�
DescribeStatement$.eolymp.atlas.DescribeStatementInput%.eolymp.atlas.DescribeStatementOutput"K��
��
atlas:problem:read��
��
  �A��
d���/statements/{statement_id}�
LookupStatement".eolymp.atlas.LookupStatementInput#.eolymp.atlas.LookupStatementOutput";��
��
atlas:problem:read��
��
  �A��
d���
/translate�
PreviewStatement#.eolymp.atlas.PreviewStatementInput$.eolymp.atlas.PreviewStatementOutput"9��
��
atlas:problem:read��
��
  �A��
d���
"/renders�
ListStatements!.eolymp.atlas.ListStatementsInput".eolymp.atlas.ListStatementsOutput"<��
��
atlas:problem:read��
��
  �A��
d���/statementsB-Z+github.com/eolymp/go-sdk/eolymp/atlas;atlasbproto3'
        , true);

        static::$is_initialized = true;
    }
}

