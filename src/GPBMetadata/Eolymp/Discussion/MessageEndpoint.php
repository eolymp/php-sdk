<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/message_endpoint.proto

namespace GPBMetadata\Eolymp\Discussion;

class MessageEndpoint
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Annotations\Scope::initOnce();
        \GPBMetadata\Eolymp\Discussion\Message::initOnce();
        \GPBMetadata\Eolymp\Discussion\MessageService::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Direction::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0acd070a28656f6c796d702f64697363757373696f6e2f6d6573736167655f656e64706f696e742e70726f746f1211656f6c796d702e64697363757373696f6e1a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a1f656f6c796d702f64697363757373696f6e2f6d6573736167652e70726f746f1a27656f6c796d702f64697363757373696f6e2f6d6573736167655f736572766963652e70726f746f1a20656f6c796d702f77656c6c6b6e6f776e2f646972656374696f6e2e70726f746f1a21656f6c796d702f77656c6c6b6e6f776e2f65787072657373696f6e2e70726f746f32f9040a0f4d657373616765456e64706f696e74129d010a0f44657363726962654d65737361676512272e656f6c796d702e64697363757373696f6e2e44657363726962654d657373616765496e7075741a282e656f6c796d702e64697363757373696f6e2e44657363726962654d6573736167654f7574707574223782e30a1b8ae30a1764697363757373696f6e3a6d6573736167653a72656164eae20a0cf5e20a0000a041f8e20af40382d3e493020212001297010a0d5570646174654d65737361676512252e656f6c796d702e64697363757373696f6e2e5570646174654d657373616765496e7075741a262e656f6c796d702e64697363757373696f6e2e5570646174654d6573736167654f7574707574223782e30a1c8ae30a1864697363757373696f6e3a6d6573736167653a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e49302021a001297010a0d44656c6574654d65737361676512252e656f6c796d702e64697363757373696f6e2e44656c6574654d657373616765496e7075741a262e656f6c796d702e64697363757373696f6e2e44656c6574654d6573736167654f7574707574223782e30a1c8ae30a1864697363757373696f6e3a6d6573736167653a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e49302022a001291010a0b566f74654d65737361676512232e656f6c796d702e64697363757373696f6e2e566f74654d657373616765496e7075741a242e656f6c796d702e64697363757373696f6e2e566f74654d6573736167654f7574707574223782e30a1c8ae30a1864697363757373696f6e3a6d6573736167653a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e4930202220042375a356769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f64697363757373696f6e3b64697363757373696f6e620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

