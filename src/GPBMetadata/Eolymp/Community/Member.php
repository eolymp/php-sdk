<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/member.proto

namespace GPBMetadata\Eolymp\Community;

class Member
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Community\Attribute::initOnce();
        \GPBMetadata\Eolymp\Community\MemberGhost::initOnce();
        \GPBMetadata\Eolymp\Community\MemberTeam::initOnce();
        \GPBMetadata\Eolymp\Community\MemberUser::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab6070a1d656f6c796d702f636f6d6d756e6974792f6d656d6265722e70726f746f1210656f6c796d702e636f6d6d756e6974791a23656f6c796d702f636f6d6d756e6974792f6d656d6265725f67686f73742e70726f746f1a22656f6c796d702f636f6d6d756e6974792f6d656d6265725f7465616d2e70726f746f1a22656f6c796d702f636f6d6d756e6974792f6d656d6265725f757365722e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f22b5050a064d656d626572120a0a026964180120012809120c0a046e616d65180220012809120b0a0375726c180320012809120c0a0472616e6b18462001280512130a0b72616e6b5f6c656e677468184820012805120d0a0573636f7265184720012805120e0a06616374697665180a2001280812120a0a696e636f6d706c65746518142001280812120a0a756e6f6666696369616c181e20012808120e0a06736563726574182820012808120f0a07746965725f696418322001280912180a1066616c6c6261636b5f746965725f6964183320012809122e0a0a637265617465645f6174183c2001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012260a047573657218642001280b32162e656f6c796d702e636f6d6d756e6974792e55736572480012260a047465616d18652001280b32162e656f6c796d702e636f6d6d756e6974792e5465616d480012280a0567686f737418662001280b32172e656f6c796d702e636f6d6d756e6974792e47686f73744800122e0a05737461747318ac022001280b321e2e656f6c796d702e636f6d6d756e6974792e4d656d6265722e5374617473120f0a0667726f75707318c8012003280912360a0a617474726962757465731884072003280b32212e656f6c796d702e636f6d6d756e6974792e4174747269627574652e56616c75651a690a055374617473120e0a0673747265616b180a2001280512170a0f70726f626c656d735f736f6c766564181420012805121c0a147375626d697373696f6e735f6163636570746564181e2001280512190a117375626d697373696f6e735f746f74616c18292001280522460a054578747261120c0a084e4f5f4558545241100012080a0454494552100112090a0553544154531002120a0a0647524f5550531003120e0a0a41545452494255544553100442090a076163636f756e7442355a336769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f636f6d6d756e6974793b636f6d6d756e697479620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

