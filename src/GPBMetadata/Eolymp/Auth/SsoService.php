<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/auth/sso_service.proto

namespace GPBMetadata\Eolymp\Auth;

class SsoService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a96050a1d656f6c796d702f617574682f73736f5f736572766963652e70726f746f120b656f6c796d702e6175746822ac010a15417574686f72697a6552657175657374496e70757412110a09636c69656e745f696418012001280912160a0e636f64655f6368616c6c656e6765180220012809121d0a15636f64655f6368616c6c656e67655f6d6574686f6418032001280912140a0c72656469726563745f75726918042001280912150a0d726573706f6e73655f74797065180520012809120d0a0573636f7065180620012809120d0a057374617465180720012809222e0a16417574686f72697a65526571756573744f757470757412140a0c72656469726563745f75726918012001280922350a16417574686f72697a6543616c6c6261636b496e707574120c0a04636f6465180120012809120d0a057374617465180220012809222f0a17417574686f72697a6543616c6c6261636b4f757470757412140a0c72656469726563745f75726918012001280932eb010a0a53534f53657276696365126c0a10417574686f72697a655265717565737412222e656f6c796d702e617574682e417574686f72697a6552657175657374496e7075741a232e656f6c796d702e617574682e417574686f72697a65526571756573744f7574707574220feae20a0bf5e20a00002041f8e20a32126f0a11417574686f72697a6543616c6c6261636b12232e656f6c796d702e617574682e417574686f72697a6543616c6c6261636b496e7075741a242e656f6c796d702e617574682e417574686f72697a6543616c6c6261636b4f7574707574220feae20a0bf5e20a00002041f8e20a32422b5a296769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f617574683b61757468620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
