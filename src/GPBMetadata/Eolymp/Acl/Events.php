<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/acl/events.proto

namespace GPBMetadata\Eolymp\Acl;

class Events
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Acl\AclService::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa1020a17656f6c796d702f61636c2f6576656e74732e70726f746f120a656f6c796d702e61636c22c6010a165065726d697373696f6e4368616e67655265636f726412380a026f7018012001280e322c2e656f6c796d702e61636c2e5065726d697373696f6e4368616e67655265636f72642e4f7065726174696f6e12100a0873706163655f6964180220012809122a0a0a7065726d697373696f6e18032001280b32162e656f6c796d702e61636c2e5065726d697373696f6e22340a094f7065726174696f6e12100a0c4e4f5f4f5045524154494f4e100012090a054752414e541001120a0a065245564f4b45100242295a276769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f61636c3b61636c620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

