<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/oauth2/oauth2.proto

namespace GPBMetadata\Eolymp\Oauth2;

class Oauth2
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Annotations\Scope::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae0060a1a656f6c796d702f6f61757468322f6f61757468322e70726f746f120d656f6c796d702e6f61757468321a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a21656f6c796d702f77656c6c6b6e6f776e2f65787072657373696f6e2e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f22e1020a10437265617465546f6b656e496e707574123d0a0a6772616e745f7479706518012001280e32292e656f6c796d702e6f61757468322e437265617465546f6b656e496e7075742e4772616e745479706512100a08757365726e616d6518022001280912100a0870617373776f726418032001280912110a09636c69656e745f696418042001280912150a0d636c69656e745f736563726574180520012809120c0a04636f646518062001280912150a0d636f64655f7665726966696572180720012809120d0a0573636f706518082001280912150a0d726566726573685f746f6b656e18092001280912140a0c72656469726563745f757269180a20012809225f0a094772616e745479706512080a044e4f4e451000120c0a0850415353574f5244100112160a12415554484f52495a4154494f4e5f434f4445100212110a0d524546524553485f544f4b454e1003120f0a0b474f4f474c455f434f444510042289010a11437265617465546f6b656e4f757470757412140a0c6163636573735f746f6b656e18012001280912120a0a746f6b656e5f7479706518022001280912120a0a657870697265735f696e18032001280d12150a0d726566726573685f746f6b656e180420012809120d0a0573636f706518052001280912100a0869645f746f6b656e1864200128093281010a064f417574683212770a0b437265617465546f6b656e121f2e656f6c796d702e6f61757468322e437265617465546f6b656e496e7075741a202e656f6c796d702e6f61757468322e437265617465546f6b656e4f75747075742225eae20a0cf5e20a0000f041f8e20aac0282d3e493020f220d2f6f61757468322f746f6b656e422f5a2d6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f6f61757468323b6f6175746832620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

