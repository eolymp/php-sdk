<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/drive/file.proto

namespace GPBMetadata\Eolymp\Drive;

class File
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a83030a17656f6c796d702f64726976652f66696c652e70726f746f120c656f6c796d702e647269766522a2020a0446696c65120a0a026964180120012809120c0a0470617468180220012809120c0a0468617368180320012809120c0a0473697a6518042001280d120c0a0474797065180520012809122e0a0a637265617465645f6174180a2001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70122e0a0a757064617465645f6174180b2001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012360a0a6174747269627574657318142003280b32222e656f6c796d702e64726976652e46696c652e41747472696275746573456e747279120b0a0375726c1864200128091a310a0f41747472696275746573456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a023801422d5a2b6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f64726976653b6472697665620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
