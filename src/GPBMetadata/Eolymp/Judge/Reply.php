<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/reply.proto

namespace GPBMetadata\Eolymp\Judge;

class Reply
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aaf020a18656f6c796d702f6a756467652f7265706c792e70726f746f120c656f6c796d702e6a756467651a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f22ac010a055265706c79120a0a026964180120012809120c0a0365726e188f4e2001280912110a097469636b65745f6964180220012809120f0a07757365725f6964180320012809120f0a076d657373616765180a20012809122e0a0a637265617465645f6174180b2001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d703a24b2e30a20bae30a057265706c79c2e30a13656f6c796d702e6a756467652e5469636b6574422d5a2b6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f6a756467653b6a75646765620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

