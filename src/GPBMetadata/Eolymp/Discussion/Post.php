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
        \GPBMetadata\Eolymp\Ecm\Node::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Link::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a83070a1c656f6c796d702f64697363757373696f6e2f706f73742e70726f746f1211656f6c796d702e64697363757373696f6e1a15656f6c796d702f65636d2f6e6f64652e70726f746f1a1b656f6c796d702f77656c6c6b6e6f776e2f6c696e6b2e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f22b9050a04506f7374120a0a026964180120012809120b0a0375726c180220012809122e0a0673746174757318032001280e321e2e656f6c796d702e64697363757373696f6e2e506f73742e537461747573120f0a07747970655f696418042001280912110a07757365725f6964180a20012809480012130a096d656d6265725f6964180b200128094800122e0a0a637265617465645f617418142001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012300a0c7075626c69736865645f617418152001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70122e0a0a757064617465645f617418162001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70120e0a066c6f63616c65186620012809120d0a057469746c65186420012809120d0a05696d61676518672001280912210a077072657669657718682001280b32102e656f6c796d702e65636d2e4e6f646512240a076d65737361676518652001280b32132e656f6c796d702e65636d2e436f6e74656e74120c0a04766f7465180c2001280512120a0a766f74655f636f756e74181e2001280512130a0b7265706c795f636f756e74181f20012805120e0a066c6162656c7318782003280912260a056c696e6b7318c8012003280b32162e656f6c796d702e77656c6c6b6e6f776e2e4c696e6b22530a0653746174757312120a0e554e4b4e4f574e5f535441545553100012090a0544524146541001120d0a09494e5f5245564945571002120d0a095055424c49534845441003120c0a0852454a4543544544100422580a05457874726112110a0d554e4b4e4f574e5f4558545241100012110a0d4d4553534147455f56414c5545100112120a0e4d4553534147455f52454e4445521002120b0a0750524556494557100312080a04564f5445100442080a06617574686f7242375a356769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f64697363757373696f6e3b64697363757373696f6e620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

