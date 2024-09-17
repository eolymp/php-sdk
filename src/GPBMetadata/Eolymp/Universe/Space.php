<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/universe/space.proto

namespace GPBMetadata\Eolymp\Universe;

class Space
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Acl\Action::initOnce();
        \GPBMetadata\Eolymp\Universe\Quota::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
eolymp/universe/space.protoeolymp.universeeolymp/universe/quota.protogoogle/protobuf/timestamp.proto"�
Space

id (	
key (	
url (	
home_url2 (	

issuer_url3 (	
graphql_url4 (	
name
 (	
image (	5

visibility (2!.eolymp.universe.Space.Visibility-
status (2.eolymp.universe.Space.Status:
subscription� (2#.eolymp.universe.Space.Subscription
affiliation (	#
actionsd (2.eolymp.acl.Action�
Subscription
plan (	
seats (%
quota
 (2.eolymp.universe.Quota8
billing_period_startZ (2.google.protobuf.Timestamp6
billing_period_end[ (2.google.protobuf.Timestamp6
quota_period_start\\ (2.google.protobuf.Timestamp4
quota_period_end] (2.google.protobuf.Timestamp"B
Status
UNKNOWN_STATUS 	
TRIAL

ACTIVE
	SUSPENDED"=

Visibility
UNKNOWN_VISIBILITY 

PUBLIC
PRIVATE"9
Extra
UNKNOWN_EXTRA 
SUBSCRIPTION
ACTIONSB3Z1github.com/eolymp/go-sdk/eolymp/universe;universebproto3'
        , true);

        static::$is_initialized = true;
    }
}

