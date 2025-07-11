<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/l10n/project_service.proto

namespace GPBMetadata\Eolymp\L10N;

class ProjectService
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
        \GPBMetadata\Eolymp\L10N\Project::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\x82\x07\x0A!eolymp/l10n/project_service.proto\x12\x0Beolymp.l10n\x1A\"eolymp/annotations/ratelimit.proto\x1A\x1Eeolymp/annotations/scope.proto\x1A\x19eolymp/l10n/project.proto\x1A!eolymp/wellknown/expression.proto\"\x9F\x01\x0A\x11ListProjectsInput\x12\x0E\x0A\x06offset\x18\x0A \x01(\x05\x12\x0C\x0A\x04size\x18\x0B \x01(\x05\x126\x0A\x07filters\x18( \x01(\x0B2%.eolymp.l10n.ListProjectsInput.Filter\x1A4\x0A\x06Filter\x12*\x0A\x02id\x18\x01 \x03(\x0B2\x1E.eolymp.wellknown.ExpressionID\"H\x0A\x12ListProjectsOutput\x12\x0D\x0A\x05total\x18\x01 \x01(\x05\x12#\x0A\x05items\x18\x02 \x03(\x0B2\x14.eolymp.l10n.Project\"*\x0A\x14DescribeProjectInput\x12\x12\x0A\x0Aproject_id\x18\x01 \x01(\x09\">\x0A\x15DescribeProjectOutput\x12%\x0A\x07project\x18\x01 \x01(\x0B2\x14.eolymp.l10n.Project2\xC0\x02\x0A\x0EProjectService\x12\x8A\x01\x0A\x0CListProjects\x12\x1E.eolymp.l10n.ListProjectsInput\x1A\x1F.eolymp.l10n.ListProjectsOutput\"9\xEA\xE2\x0A\x0B\xF5\xE2\x0A\x00\x00\xA0@\xF8\xE2\x0A2\x82\xE3\x0A\x15\x8A\xE3\x0A\x11l10n:project:read\x82\xD3\xE4\x93\x02\x0B\x12\x09/projects\x12\xA0\x01\x0A\x0FDescribeProject\x12!.eolymp.l10n.DescribeProjectInput\x1A\".eolymp.l10n.DescribeProjectOutput\"F\xEA\xE2\x0A\x0B\xF5\xE2\x0A\x00\x00\xA0@\xF8\xE2\x0A2\x82\xE3\x0A\x15\x8A\xE3\x0A\x11l10n:project:read\x82\xD3\xE4\x93\x02\x18\x12\x16/projects/{project_id}B+Z)github.com/eolymp/go-sdk/eolymp/l10n;l10nb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

