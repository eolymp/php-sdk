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
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac3040a1d656f6c796d702f636f6d6d756e6974792f6d656d6265722e70726f746f1210656f6c796d702e636f6d6d756e6974791a23656f6c796d702f636f6d6d756e6974792f6d656d6265725f67686f73742e70726f746f1a22656f6c796d702f636f6d6d756e6974792f6d656d6265725f7465616d2e70726f746f1a22656f6c796d702f636f6d6d756e6974792f6d656d6265725f757365722e70726f746f22e3020a064d656d626572120a0a026964180120012809120c0a046e616d65180220012809120e0a06616374697665180a2001280812120a0a696e636f6d706c65746518142001280812120a0a756e6f6666696369616c181e20012808120e0a06736563726574182820012808120f0a07746965725f696418322001280912180a1066616c6c6261636b5f746965725f696418332001280912260a047573657218642001280b32162e656f6c796d702e636f6d6d756e6974792e55736572480012260a047465616d18652001280b32162e656f6c796d702e636f6d6d756e6974792e5465616d480012280a0567686f737418662001280b32172e656f6c796d702e636f6d6d756e6974792e47686f73744800120f0a0667726f75707318c8012003280912360a0a617474726962757465731884072003280b32212e656f6c796d702e636f6d6d756e6974792e4174747269627574652e56616c756542090a076163636f756e7442355a336769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f636f6d6d756e6974793b636f6d6d756e697479620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

