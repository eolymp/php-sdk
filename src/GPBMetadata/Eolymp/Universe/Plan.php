<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/universe/plan.proto

namespace GPBMetadata\Eolymp\Universe;

class Plan
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Ecm\Content::initOnce();
        \GPBMetadata\Eolymp\Universe\Quota::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
eolymp/universe/plan.protoeolymp.universeeolymp/universe/quota.proto"�
Plan

id (	
name (	(
description (2.eolymp.ecm.Content%
quota (2.eolymp.universe.Quota
labels (	
requires_approval (
	min_seats
 (
	max_seats (/
variantsd (2.eolymp.universe.Plan.Variantr
Variant

id (	4

recurrence (2 .eolymp.universe.Plan.Recurrence
currency (	
unit_amount ("D
Extra
NO_EXTRA 
DESCRIPTION_RENDER
DESCRIPTION_VALUE"J

Recurrence
UNKNOWN_RECURRENCE 
ONETIME
MONTHLY

YEARLYB3Z1github.com/eolymp/go-sdk/eolymp/universe;universebproto3'
        , true);

        static::$is_initialized = true;
    }
}

