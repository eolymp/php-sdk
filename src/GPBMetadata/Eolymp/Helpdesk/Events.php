<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/helpdesk/events.proto

namespace GPBMetadata\Eolymp\Helpdesk;

class Events
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Helpdesk\Document::initOnce();
        \GPBMetadata\Eolymp\Helpdesk\Ticket::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0acc040a1c656f6c796d702f68656c706465736b2f6576656e74732e70726f746f120f656f6c796d702e68656c706465736b1a1c656f6c796d702f68656c706465736b2f7469636b65742e70726f746f22430a14446f63756d656e74437265617465644576656e74122b0a08646f63756d656e7418012001280b32192e656f6c796d702e68656c706465736b2e446f63756d656e7422430a14446f63756d656e74557064617465644576656e74122b0a08646f63756d656e7418012001280b32192e656f6c796d702e68656c706465736b2e446f63756d656e7422430a14446f63756d656e7444656c657465644576656e74122b0a08646f63756d656e7418012001280b32192e656f6c796d702e68656c706465736b2e446f63756d656e7422650a125469636b65744368616e6765644576656e7412270a066265666f726518012001280b32172e656f6c796d702e68656c706465736b2e5469636b657412260a05616674657218022001280b32172e656f6c796d702e68656c706465736b2e5469636b65742289010a13436f6d6d656e744368616e6765644576656e7412110a097469636b65745f6964180120012809122f0a066265666f726518022001280b321f2e656f6c796d702e68656c706465736b2e5469636b65742e436f6d6d656e74122e0a05616674657218032001280b321f2e656f6c796d702e68656c706465736b2e5469636b65742e436f6d6d656e7442335a316769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f68656c706465736b3b68656c706465736b620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

