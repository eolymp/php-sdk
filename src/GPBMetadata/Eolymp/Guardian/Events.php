<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/guardian/events.proto

namespace GPBMetadata\Eolymp\Guardian;

class Events
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Guardian\Policy::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aea010a1c656f6c796d702f677561726469616e2f6576656e74732e70726f746f120f656f6c796d702e677561726469616e223d0a12506f6c696379446566696e65644576656e7412270a06706f6c69637918012001280b32172e656f6c796d702e677561726469616e2e506f6c696379223d0a12506f6c69637944656c657465644576656e7412270a06706f6c69637918012001280b32172e656f6c796d702e677561726469616e2e506f6c69637942335a316769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f677561726469616e3b677561726469616e620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

