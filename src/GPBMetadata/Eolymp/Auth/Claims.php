<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/auth/claims.proto

namespace GPBMetadata\Eolymp\Auth;

class Claims
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a90020a18656f6c796d702f617574682f636c61696d732e70726f746f120b656f6c796d702e6175746822b1010a06436c61696d73120e0a06697373756572180120012809120f0a077375626a656374180220012809120d0a05656d61696c180a2001280912160a0e656d61696c5f7665726966696564180b20012808120c0a046e616d65181e2001280912100a086e69636b6e616d65181f20012809120f0a0770696374757265182820012809120e0a066c6f63616c65183220012809120d0a056d696e6f72183c20012808120f0a07636f756e747279184620012809422b5a296769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f617574683b61757468620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
