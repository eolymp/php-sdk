<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/post.proto

namespace GPBMetadata\Eolymp\Discussion;

class Post
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Ecm\Content::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Link::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aaf050a1c656f6c796d702f64697363757373696f6e2f706f73742e70726f746f1211656f6c796d702e64697363757373696f6e1a1b656f6c796d702f77656c6c6b6e6f776e2f6c696e6b2e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f22fc030a04506f7374120a0a026964180120012809120b0a0375726c18022001280912110a07757365725f6964180a20012809480012130a096d656d6265725f6964180b200128094800122e0a0a637265617465645f617418142001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70122d0a09706f737465645f617418152001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70122e0a0a757064617465645f617418162001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70120d0a057469746c6518642001280912240a076d65737361676518652001280b32132e656f6c796d702e65636d2e436f6e74656e74120e0a066c6162656c7318782003280912260a056c696e6b7318c8012003280b32162e656f6c796d702e77656c6c6b6e6f776e2e4c696e6b22530a0653746174757312120a0e554e4b4e4f574e5f535441545553100012090a0544524146541001120d0a09494e5f5245564945571002120d0a095055424c49534845441003120c0a0852454a4543544544100422580a05457874726112110a0d554e4b4e4f574e5f4558545241100012130a0f4d4553534147455f434f4e54454e54100112120a0e4d4553534147455f52454e444552100212130a0f4d4553534147455f50524556494557100342080a06617574686f7242375a356769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f64697363757373696f6e3b64697363757373696f6e620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

