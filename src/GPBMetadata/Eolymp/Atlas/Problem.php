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
        $pool->internalAddGeneratedFile(
            '
�
eolymp/atlas/problem.protoeolymp.atlas"�
Problem

id (	
url� (	0
links� (2 .eolymp.atlas.Problem.LinksEntry
number
 (
visible (
private (
origin (	
topics (	
acceptance_rate( (
submissions_count* (
submissions_accepted+ (
vote2 (

vote_count3 (

difficulty (,

LinksEntry
key (	
value (	:8"$
Extra
UNKNOWN_EXTRA 
VOTEB-Z+github.com/eolymp/go-sdk/eolymp/atlas;atlasbproto3'
        , true);

        static::$is_initialized = true;
    }
}

