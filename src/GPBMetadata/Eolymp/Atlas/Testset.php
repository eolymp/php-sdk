<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/testset.proto

namespace GPBMetadata\Eolymp\Atlas;

class Testset
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Atlas\Feedback::initOnce();
        \GPBMetadata\Eolymp\Atlas\Scoring::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af9020a1a656f6c796d702f61746c61732f746573747365742e70726f746f120c656f6c796d702e61746c61731a1a656f6c796d702f61746c61732f73636f72696e672e70726f746f22f9010a0754657374736574120a0a02696418012001280912120a0a70726f626c656d5f6964180220012809120d0a05696e64657818032001280d12120a0a74696d655f6c696d6974180a2001280d12140a0c6d656d6f72795f6c696d6974180b2001280412170a0f66696c655f73697a655f6c696d6974180c2001280412140a0c646570656e64656e6369657318142003280d122f0a0c73636f72696e675f6d6f6465181e2001280e32192e656f6c796d702e61746c61732e53636f72696e674d6f646512350a0f666565646261636b5f706f6c69637918282001280e321c2e656f6c796d702e61746c61732e466565646261636b506f6c696379422d5a2b6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f61746c61733b61746c6173620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

