<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/reward/achievement.proto

namespace GPBMetadata\Eolymp\Reward;

class Achievement
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Ecm\Content::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
eolymp/reward/achievement.protoeolymp.reward"�
Achievement

id (	
value (
rarity (
name
 (	
	image_url (	$
summary (2.eolymp.ecm.Content
cursord (	]
Translation

id (	
localef (	
nameg (	$
summaryh (2.eolymp.ecm.Content"<
Extra
NO_EXTRA 
SUMMARY_VALUE
SUMMARY_RENDERB/Z-github.com/eolymp/go-sdk/eolymp/reward;rewardbproto3'
        , true);

        static::$is_initialized = true;
    }
}

