<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/bookmark_service.proto

namespace GPBMetadata\Eolymp\Atlas;

class BookmarkService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
#eolymp/atlas/bookmark_service.protoeolymp.atlas"eolymp/annotations/ratelimit.proto"8
SetBookmarkInput

problem_id (	
bookmark ("
SetBookmarkOutput"&
GetBookmarkInput

problem_id (	"%
GetBookmarkOutput
bookmark (2�
BookmarkServicep
GetBookmark.eolymp.atlas.GetBookmarkInput.eolymp.atlas.GetBookmarkOutput" ��
��
  �A��
d���	/bookmarkp
SetBookmark.eolymp.atlas.SetBookmarkInput.eolymp.atlas.SetBookmarkOutput" ��
��
   @��

���"	/bookmarkB-Z+github.com/eolymp/go-sdk/eolymp/atlas;atlasbproto3'
        , true);

        static::$is_initialized = true;
    }
}

