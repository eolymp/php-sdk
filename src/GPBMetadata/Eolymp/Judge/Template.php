<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/template.proto

namespace GPBMetadata\Eolymp\Judge;

class Template
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Resource::initOnce();
        \GPBMetadata\Eolymp\Atlas\File::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad0020a1b656f6c796d702f6a756467652f74656d706c6174652e70726f746f120c656f6c796d702e6a756467651a17656f6c796d702f61746c61732f66696c652e70726f746f22d2010a0854656d706c617465120a0a026964180120012809120c0a0365726e188f4e2001280912120a0a70726f626c656d5f6964180220012809120f0a0772756e74696d6518032001280912120a0a736f757263655f65726e180a2001280912120a0a6865616465725f65726e180b2001280912120a0a666f6f7465725f65726e180c2001280912210a0566696c6573181e2003280b32122e656f6c796d702e61746c61732e46696c653a28b2e30a24bae30a0874656d706c617465c2e30a14656f6c796d702e6a756467652e50726f626c656d422d5a2b6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f6a756467653b6a75646765620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
