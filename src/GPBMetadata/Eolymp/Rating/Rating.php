<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/rating/rating.proto

namespace GPBMetadata\Eolymp\Rating;

class Rating
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
eolymp/rating/rating.protoeolymp.rating"�
Rating

id (	-
	timestamp (2.google.protobuf.Timestamp
	member_id (	

contest_id (	
value
 (
level (B/Z-github.com/eolymp/go-sdk/eolymp/rating;ratingbproto3'
        , true);

        static::$is_initialized = true;
    }
}

