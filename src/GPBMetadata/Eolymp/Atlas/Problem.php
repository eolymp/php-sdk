<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/problem.proto

namespace GPBMetadata\Eolymp\Atlas;

class Problem
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Acl\Action::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
eolymp/atlas/problem.protoeolymp.atlas"�
Problem

id (	
url� (	0
links� (2 .eolymp.atlas.Problem.LinksEntry
number
 (
visible (
private (
origin (	
topics (	
score (6
constraints (2!.eolymp.atlas.Problem.Constraints
acceptance_rate( (
submissions_count* (
submissions_accepted+ (
vote2 (

vote_count3 (

difficulty (#
actionsd (2.eolymp.acl.Action�
Constraints
time_limit_min< (
time_limit_max= (
cpu_limit_min> (
cpu_limit_max? (
memory_limit_min@ (
memory_limit_maxA (,

LinksEntry
key (	
value (	:8"1
Extra
UNKNOWN_EXTRA 
VOTE
ACTIONSB-Z+github.com/eolymp/go-sdk/eolymp/atlas;atlasbproto3'
        , true);

        static::$is_initialized = true;
    }
}

