<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/commerce/checkout_service.proto

namespace GPBMetadata\Eolymp\Commerce;

class CheckoutService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Commerce\Checkout::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab0030a26656f6c796d702f636f6d6d657263652f636865636b6f75745f736572766963652e70726f746f120f656f6c796d702e636f6d6d657263651a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f636f6d6d657263652f636865636b6f75742e70726f746f22420a13437265617465436865636b6f7574496e707574122b0a08636865636b6f757418012001280b32192e656f6c796d702e636f6d6d657263652e436865636b6f7574222c0a14437265617465436865636b6f75744f757470757412140a0c636865636b6f75745f75726c1801200128093281010a0f436865636b6f757453657276696365126e0a0e437265617465436865636b6f757412242e656f6c796d702e636f6d6d657263652e437265617465436865636b6f7574496e7075741a252e656f6c796d702e636f6d6d657263652e437265617465436865636b6f75744f7574707574220feae20a0bf5e20a0000a040f8e20a3242335a316769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f636f6d6d657263653b636f6d6d65726365620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

