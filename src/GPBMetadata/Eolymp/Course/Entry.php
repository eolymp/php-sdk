<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/entry.proto

namespace GPBMetadata\Eolymp\Course;

class Entry
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Course\EntrySection::initOnce();
        \GPBMetadata\Eolymp\Course\EntryVideo::initOnce();
        \GPBMetadata\Eolymp\Ecm\Content::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a95030a19656f6c796d702f636f757273652f656e7472792e70726f746f120d656f6c796d702e636f757273651a1f656f6c796d702f636f757273652f656e7472795f766964656f2e70726f746f1a18656f6c796d702f65636d2f636f6e74656e742e70726f746f22f4010a05456e747279120a0a026964180120012809120d0a057469746c6518022001280912110a09706172656e745f6964180a20012809120d0a05696e646578180b2001280d120d0a05646570746818142001280d12190a116475726174696f6e5f657374696d61746518152001280d12290a0773656374696f6e18642001280b32162e656f6c796d702e636f757273652e53656374696f6e480012270a08646f63756d656e7418652001280b32132e656f6c796d702e65636d2e436f6e74656e74480012250a05766964656f18662001280b32142e656f6c796d702e636f757273652e566964656f480042090a07636f6e74656e74422f5a2d6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f636f757273653b636f75727365620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

