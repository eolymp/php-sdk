<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/auth/account.proto

namespace GPBMetadata\Eolymp\Auth;

class Account
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa5030a19656f6c796d702f617574682f6163636f756e742e70726f746f120b656f6c796d702e6175746822c5020a074163636f756e74120a0a026964180120012809122e0a0a637265617465645f6f6e18022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70120e0a06616374697665180320012808120d0a05656d61696c180a2001280912160a0e656d61696c5f7665726966696564180b2001280812100a0870617373776f726418142001280912140a0c70617373776f72645f61676518152001280d120c0a046e616d65181e2001280912100a086e69636b6e616d65181f20012809121f0a176e69636b6e616d655f6368616e67655f74696d656f757418202001280d120f0a0770696374757265182820012809120e0a066c6f63616c65183220012809122c0a086269727468646179183c2001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70120f0a07636f756e747279184620012809422b5a296769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f617574683b61757468620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

