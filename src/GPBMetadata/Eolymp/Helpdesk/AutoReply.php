<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/helpdesk/auto_reply.proto

namespace GPBMetadata\Eolymp\Helpdesk;

class AutoReply
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Ecm\Node::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ada010a20656f6c796d702f68656c706465736b2f6175746f5f7265706c792e70726f746f120f656f6c796d702e68656c706465736b22680a094175746f5265706c79120a0a026964180120012809120e0a066c6f63616c65180220012809120c0a046e616d6518142001280912210a076d65737361676518152001280b32102e656f6c796d702e65636d2e4e6f6465120e0a066c6162656c7318162003280942335a316769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f68656c706465736b3b68656c706465736b620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

