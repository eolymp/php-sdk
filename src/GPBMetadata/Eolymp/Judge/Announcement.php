<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/announcement.proto

namespace GPBMetadata\Eolymp\Judge;

class Announcement
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
            "0ab4020a1f656f6c796d702f6a756467652f616e6e6f756e63656d656e742e70726f746f120c656f6c796d702e6a756467651a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f22aa010a0c416e6e6f756e63656d656e74120a0a02696418012001280912120a0a636f6e746573745f6964180220012809122e0a0a637265617465645f617418032001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70120f0a077375626a656374180a20012809120f0a076d657373616765180b200128093a28b2e30a24bae30a086163746976697479c2e30a14656f6c796d702e6a756467652e436f6e74657374422d5a2b6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f6a756467653b6a75646765620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

