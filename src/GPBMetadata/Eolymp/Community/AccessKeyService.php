<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/access_key_service.proto

namespace GPBMetadata\Eolymp\Community;

class AccessKeyService
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
        \GPBMetadata\Eolymp\Community\AccessKey::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
)eolymp/community/access_key_service.protoeolymp.community"eolymp/annotations/ratelimit.protoeolymp/annotations/scope.proto!eolymp/community/access_key.proto"G
CreateAccessKeyInput
name (	
scope (	

expires_in ("7
CreateAccessKeyOutput
key_id (	
secret (	"&
DeleteAccessKeyInput
key_id (	"
DeleteAccessKeyOutput"3
ListAccessKeysInput
offset
 (
size ("Q
ListAccessKeysOutput
total (*
items (2.eolymp.community.AccessKey2�
AccessKeyService�
CreateAccessKey&.eolymp.community.CreateAccessKeyInput\'.eolymp.community.CreateAccessKeyOutput"E��
��
  �?��

��
��
community:access-key:write���"/access-keys�
DeleteAccessKey&.eolymp.community.DeleteAccessKeyInput\'.eolymp.community.DeleteAccessKeyOutput"N��
��
  �@��
2��
��
community:access-key:write���*/access-keys/{key_id}�
ListAccessKeys%.eolymp.community.ListAccessKeysInput&.eolymp.community.ListAccessKeysOutput"D��
��
  �A��
d��
��
community:access-key:read���/access-keysB5Z3github.com/eolymp/go-sdk/eolymp/community;communitybproto3'
        , true);

        static::$is_initialized = true;
    }
}

