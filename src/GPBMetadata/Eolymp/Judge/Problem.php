<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/problem.proto

namespace GPBMetadata\Eolymp\Judge;

class Problem
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Atlas\TestingFeedback::initOnce();
        \GPBMetadata\Eolymp\Ecm\Node::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
eolymp/judge/problem.protoeolymp.judgeeolymp/ecm/node.proto"�
Problem

id (	
url (	
index (
score (
base_id (	

contest_id (	5
feedback_policy
 (2.eolymp.atlas.FeedbackPolicy

time_limit� (
	cpu_limit� (
memory_limit� (
file_size_limit� (
submit_limit� (
score_by_best_testset� (�
	Statement
locale (	
title (	
content_raw (	!
content (2.eolymp.ecm.Node6
format (2&.eolymp.judge.Problem.Statement.Format
download_link (	"=
Format
NONE 
TEX
MARKDOWN
HTML
RICHh
Test
index (
example (
input_object_id (	
answer_object_id (	
score (4

Attachment

id (	
name (	
link (	B-Z+github.com/eolymp/go-sdk/eolymp/judge;judgebproto3'
        , true);

        static::$is_initialized = true;
    }
}

