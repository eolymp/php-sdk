<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/acl/policy.proto

namespace GPBMetadata\Eolymp\Acl;

class Policy
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
�
eolymp/acl/policy.proto
eolymp.acl"j
Policy

id (	
name (	
subject (	
resource
 (	#
actions (2.eolymp.acl.ActionB)Z\'github.com/eolymp/go-sdk/eolymp/acl;aclbproto3'
        , true);

        static::$is_initialized = true;
    }
}

