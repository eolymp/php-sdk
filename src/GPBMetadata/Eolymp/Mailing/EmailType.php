<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/mailing/email_type.proto

namespace GPBMetadata\Eolymp\Mailing;

class EmailType
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
eolymp/mailing/email_type.protoeolymp.mailing*b
	EmailType
UNKNOWN_TYPE 
ACCOUNT

NEWSLETTER
UPDATES

COMMERCIAL	
OTHERB1Z/github.com/eolymp/go-sdk/eolymp/mailing;mailingbproto3'
        , true);

        static::$is_initialized = true;
    }
}

