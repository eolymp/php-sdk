<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/cognito/events.proto

namespace GPBMetadata\Eolymp\Cognito;

class Events
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Cognito\User::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac7010a1b656f6c796d702f636f676e69746f2f6576656e74732e70726f746f120e656f6c796d702e636f676e69746f225d0a10557365724368616e6765644576656e7412240a066265666f726518012001280b32142e656f6c796d702e636f676e69746f2e5573657212230a05616674657218022001280b32142e656f6c796d702e636f676e69746f2e5573657242315a2f6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f636f676e69746f3b636f676e69746f620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
