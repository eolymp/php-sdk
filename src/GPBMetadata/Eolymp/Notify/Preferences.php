<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/notify/preferences.proto

namespace GPBMetadata\Eolymp\Notify;

class Preferences
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
eolymp/notify/preferences.protoeolymp.notify"�
Preferences=
subscription
 (2\'.eolymp.notify.Preferences.SubscriptionP
Subscription
topic (	1
digest (2!.eolymp.notify.Preferences.Digest"B
Digest
UNKNOWN_DIGEST 
	IMMEDIATE

HOURLY	
DAILYB/Z-github.com/eolymp/go-sdk/eolymp/notify;notifybproto3'
        , true);

        static::$is_initialized = true;
    }
}

