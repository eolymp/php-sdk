<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/ticket.proto

namespace GPBMetadata\Eolymp\Judge;

class Ticket
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aee020a19656f6c796d702f6a756467652f7469636b65742e70726f746f120c656f6c796d702e6a756467652285020a065469636b6574120a0a02696418012001280912120a0a636f6e746573745f696418022001280912160a0e7061727469636970616e745f6964180320012809120f0a077375626a656374180a20012809120f0a076d657373616765180b20012809120f0a0769735f6f70656e181420012808121e0a1669735f726561645f62795f7061727469636970616e7418152001280812180a1069735f726561645f62795f6f776e6572181620012808122e0a0a637265617465645f617418172001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012100a0769735f7265616418874e2001280812140a0b6e656564735f7265706c7918884e2001280842335a316769746875622e636f6d2f656f6c796d702f636f6e7472616374732f676f2f656f6c796d702f6a756467653b6a75646765620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

