<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/score.proto

namespace GPBMetadata\Eolymp\Judge;

class Score
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
eolymp/judge/score.protoeolymp.judge"�
Score
valid_after (
valid_until (-
	timestamp (2.google.protobuf.Timestamp
score
 (
penalty (
upsolve (.
	breakdown (2.eolymp.judge.Score.Problem�
Problem

problem_id (	
score (
penalty (
solved (

percentage (
attempts (-
	solved_at (2.google.protobuf.Timestamp
	solved_in	 (
changed
 (.
	breakdown (2.eolymp.judge.Score.TestsetI
Testset

testset_id (	
index (
cost
 (
score ("M
FetchingMode

ACTUAL 
PUNCTUAL

LATEST

FROZEN
UPSOLVEB-Z+github.com/eolymp/go-sdk/eolymp/judge;judgebproto3'
        , true);

        static::$is_initialized = true;
    }
}

