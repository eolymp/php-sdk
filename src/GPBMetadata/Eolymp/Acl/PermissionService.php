<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/acl/permission_service.proto

namespace GPBMetadata\Eolymp\Acl;

class PermissionService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Acl\Action::initOnce();
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xC1\x03\x0A#eolymp/acl/permission_service.proto\x12\x0Aeolymp.acl\x1A\x1Deolymp/annotations/http.proto\x1A\"eolymp/annotations/ratelimit.proto\".\x0A\x1AIntrospectPermissionsInput\x12\x10\x0A\x08resource\x18\x01 \x01(\x09\"B\x0A\x1BIntrospectPermissionsOutput\x12#\x0A\x07actions\x18\x01 \x03(\x0E2\x12.eolymp.acl.Action2\xA3\x01\x0A\x11PermissionService\x12\x8D\x01\x0A\x15IntrospectPermissions\x12&.eolymp.acl.IntrospectPermissionsInput\x1A'.eolymp.acl.IntrospectPermissionsOutput\"#\xEA\xE2\x0A\x0B\xF5\xE2\x0A\x00\x00 A\xF8\xE2\x0A\x14\x82\xD3\xE4\x93\x02\x0E\"\x0C/permissionsB)Z'github.com/eolymp/go-sdk/eolymp/acl;aclb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

