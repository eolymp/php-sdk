<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/content/events.proto

namespace GPBMetadata\Eolymp\Content;

class Events
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Content\Fragment::initOnce();
        \GPBMetadata\Eolymp\Content\Variant::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a86030a1b656f6c796d702f636f6e74656e742f6576656e74732e70726f746f120e656f6c796d702e636f6e74656e741a1c656f6c796d702f636f6e74656e742f76617269616e742e70726f746f22690a14467261676d656e744368616e6765644576656e7412280a066265666f726518012001280b32182e656f6c796d702e636f6e74656e742e467261676d656e7412270a05616674657218022001280b32182e656f6c796d702e636f6e74656e742e467261676d656e742292010a1356617269616e744368616e6765644576656e74122a0a08667261676d656e7418032001280b32182e656f6c796d702e636f6e74656e742e467261676d656e7412270a066265666f726518012001280b32172e656f6c796d702e636f6e74656e742e56617269616e7412260a05616674657218022001280b32172e656f6c796d702e636f6e74656e742e56617269616e7442315a2f6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f636f6e74656e743b636f6e74656e74620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

