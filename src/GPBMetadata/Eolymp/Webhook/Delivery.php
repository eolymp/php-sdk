<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/webhook/delivery.proto

namespace GPBMetadata\Eolymp\Webhook;

class Delivery
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Webhook\Webhook::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
eolymp/webhook/delivery.protoeolymp.webhookgoogle/protobuf/any.protogoogle/protobuf/timestamp.proto"�
Delivery

id (	

webhook_id (	-
	timestamp (2.google.protobuf.Timestamp,
event
 (2.eolymp.webhook.Webhook.Event%
payload (2.google.protobuf.AnyB1Z/github.com/eolymp/go-sdk/eolymp/webhook;webhookbproto3'
        , true);

        static::$is_initialized = true;
    }
}

