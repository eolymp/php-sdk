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
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0abd120a1a656f6c796d702f6f61757468322f6f61757468322e70726f746f120d656f6c796d702e6f61757468321a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f22d5020a0a546f6b656e496e70757412370a0a6772616e745f7479706518012001280e32232e656f6c796d702e6f61757468322e546f6b656e496e7075742e4772616e745479706512100a08757365726e616d6518022001280912100a0870617373776f726418032001280912110a09636c69656e745f696418042001280912150a0d636c69656e745f736563726574180520012809120c0a04636f646518062001280912150a0d636f64655f7665726966696572180720012809120d0a0573636f706518082001280912150a0d726566726573685f746f6b656e18092001280912140a0c72656469726563745f757269180a20012809225f0a094772616e745479706512080a044e4f4e451000120c0a0850415353574f5244100112160a12415554484f52495a4154494f4e5f434f4445100212110a0d524546524553485f544f4b454e1003120f0a0b474f4f474c455f434f444510042283010a0b546f6b656e4f757470757412140a0c6163636573735f746f6b656e18012001280912120a0a746f6b656e5f7479706518022001280912120a0a657870697265735f696e18032001280d12150a0d726566726573685f746f6b656e180420012809120d0a0573636f706518052001280912100a0869645f746f6b656e18642001280922a5010a0e417574686f72697a65496e70757412110a09636c69656e745f696418012001280912160a0e636f64655f6368616c6c656e6765180220012809121d0a15636f64655f6368616c6c656e67655f6d6574686f6418032001280912140a0c72656469726563745f75726918042001280912150a0d726573706f6e73655f74797065180520012809120d0a0573636f7065180620012809120d0a05737461746518072001280922270a0f417574686f72697a654f757470757412140a0c72656469726563745f757269180120012809222c0a0d43616c6c6261636b496e707574120c0a04636f6465180120012809120d0a05737461746518022001280922260a0e43616c6c6261636b4f757470757412140a0c72656469726563745f757269180120012809220f0a0d55736572496e666f496e70757422e8010a0e55736572496e666f4f7574707574120e0a06697373756572180120012809120f0a077375626a656374180220012809120c0a046e616d6518032001280912120a0a676976656e5f6e616d6518042001280912130a0b66616d696c795f6e616d6518052001280912130a0b6d6964646c655f6e616d6518062001280912100a086e69636b6e616d65180720012809120f0a0770696374757265180820012809120d0a05656d61696c18092001280912160a0e656d61696c5f7665726966696564180a20012808120e0a066c6f63616c65180b20012809120f0a0770726f66696c65180c2001280922200a0f496e74726f7370656374496e707574120d0a05746f6b656e18012001280922f8010a10496e74726f73706563744f7574707574120e0a06616374697665180120012808120d0a0573636f7065180220012809122a0a0665787069726518032001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70120f0a077375626a65637418042001280912100a0861756469656e6365180520012809120e0a06697373756572180620012809120c0a046e616d6518642001280912100a086e69636b6e616d65186520012809120f0a0770696374757265186620012809120d0a05656d61696c18672001280912160a0e656d61696c5f7665726966696564186820012808120e0a066c6f63616c6518692001280922a4010a0d41757468436f6465496e70757412110a09636c69656e745f696418012001280912160a0e636f64655f6368616c6c656e6765180220012809121d0a15636f64655f6368616c6c656e67655f6d6574686f6418032001280912140a0c72656469726563745f75726918042001280912150a0d726573706f6e73655f74797065180520012809120d0a0573636f7065180620012809120d0a05737461746518072001280922420a0e41757468436f64654f7574707574121a0a12617574686f72697a6174696f6e5f636f646518012001280912140a0c72656469726563745f757269180220012809221c0a0b5265766f6b65496e707574120d0a05746f6b656e180120012809220e0a0c5265766f6b654f757470757432fe040a064f417574683212500a05546f6b656e12192e656f6c796d702e6f61757468322e546f6b656e496e7075741a1a2e656f6c796d702e6f61757468322e546f6b656e4f75747075742210eae20a0cf5e20a0000f041f8e20aac0212590a0855736572496e666f121c2e656f6c796d702e6f61757468322e55736572496e666f496e7075741a1d2e656f6c796d702e6f61757468322e55736572496e666f4f75747075742210eae20a0cf5e20a0000f041f8e20aac02125e0a0a496e74726f7370656374121e2e656f6c796d702e6f61757468322e496e74726f7370656374496e7075741a1f2e656f6c796d702e6f61757468322e496e74726f73706563744f7574707574220feae20a0bf5e20a00002041f8e20a3212530a065265766f6b65121a2e656f6c796d702e6f61757468322e5265766f6b65496e7075741a1b2e656f6c796d702e6f61757468322e5265766f6b654f75747075742210eae20a0cf5e20a0000f041f8e20aac0212590a0841757468436f6465121c2e656f6c796d702e6f61757468322e41757468436f6465496e7075741a1d2e656f6c796d702e6f61757468322e41757468436f64654f75747075742210eae20a0cf5e20a0000f041f8e20aac02125c0a09417574686f72697a65121d2e656f6c796d702e6f61757468322e417574686f72697a65496e7075741a1e2e656f6c796d702e6f61757468322e417574686f72697a654f75747075742210eae20a0cf5e20a0000f041f8e20aac0212590a0843616c6c6261636b121c2e656f6c796d702e6f61757468322e43616c6c6261636b496e7075741a1d2e656f6c796d702e6f61757468322e43616c6c6261636b4f75747075742210eae20a0cf5e20a0000f041f8e20aac02422f5a2d6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f6f61757468323b6f6175746832620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

