<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/universe/idp.proto

namespace GPBMetadata\Eolymp\Universe;

class Idp
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Resource::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0afb010a19656f6c796d702f756e6976657273652f6964702e70726f746f120f656f6c796d702e756e697665727365228f010a104964656e7469747950726f76696465721a7b0a044f49444312110a09636c69656e745f6964180a2001280912150a0d636c69656e745f736563726574180b20012809121a0a12617574686f72697a655f656e64706f696e7418142001280912160a0e746f6b656e5f656e64706f696e7418152001280912150a0d6b6579735f656e64706f696e7418162001280942335a316769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f756e6976657273653b756e697665727365620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

