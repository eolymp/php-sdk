<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/checker.proto

namespace GPBMetadata\Eolymp\Executor;

class Checker
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
eolymp/executor/checker.protoeolymp.executor"�
Checker+
type (2.eolymp.executor.Checker.Type
lang (	
source (	

source_url (	
	precision (
case_sensitive (
order_sensitive (
secret (,
files
 (2.eolymp.executor.Checker.File(
File
path (	

source_url (	"[
Type
NONE 

TOKENS	
LINES
PROGRAM
LEGACY_PROGRAM
QUERY_RESULTSB3Z1github.com/eolymp/go-sdk/eolymp/executor;executorbproto3'
        , true);

        static::$is_initialized = true;
    }
}

