<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/events.proto

namespace GPBMetadata\Eolymp\Judge;

class Events
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Judge\Reply::initOnce();
        \GPBMetadata\Eolymp\Judge\Score::initOnce();
        \GPBMetadata\Eolymp\Judge\Submission::initOnce();
        \GPBMetadata\Eolymp\Judge\Ticket::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad9040a19656f6c796d702f6a756467652f6576656e74732e70726f746f120c656f6c796d702e6a756467651a18656f6c796d702f6a756467652f73636f72652e70726f746f1a1d656f6c796d702f6a756467652f7375626d697373696f6e2e70726f746f1a19656f6c796d702f6a756467652f7469636b65742e70726f746f22480a185375626d697373696f6e436f6d706c657465644576656e74122c0a0a7375626d697373696f6e18012001280b32182e656f6c796d702e6a756467652e5375626d697373696f6e223c0a1152656275696c6453636f72654576656e7412120a0a636f6e746573745f696418012001280912130a0b61637469766974795f6964180220012809227f0a1153636f7265557064617465644576656e7412120a0a636f6e746573745f696418012001280912160a0e7061727469636970616e745f6964180220012809121a0a126f75745f6f665f636f6d7065746974696f6e18042001280812220a0573636f726518032001280b32132e656f6c796d702e6a756467652e53636f7265223a0a125469636b6574437265617465644576656e7412240a067469636b657418012001280b32142e656f6c796d702e6a756467652e5469636b6574225e0a125469636b6574557064617465644576656e7412240a067469636b657418012001280b32142e656f6c796d702e6a756467652e5469636b657412220a057265706c7918022001280b32132e656f6c796d702e6a756467652e5265706c79422d5a2b6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f6a756467653b6a75646765620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

