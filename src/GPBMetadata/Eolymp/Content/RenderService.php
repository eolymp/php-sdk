<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/content/render_service.proto

namespace GPBMetadata\Eolymp\Content;

class RenderService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Ecm\Content::initOnce();
        \GPBMetadata\Eolymp\Ecm\Node::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
#eolymp/content/render_service.protoeolymp.content"eolymp/annotations/ratelimit.protoeolymp/ecm/content.protoeolymp/ecm/node.proto":
RenderContentInput$
content (2.eolymp.ecm.Content"7
RenderContentOutput 
render (2.eolymp.ecm.Node2�
RenderService�
RenderContent".eolymp.content.RenderContentInput#.eolymp.content.RenderContentOutput"3��
��
  �A��
d���"/content:renderZ"	/rendererB1Z/github.com/eolymp/go-sdk/eolymp/content;contentbproto3'
        , true);

        static::$is_initialized = true;
    }
}

