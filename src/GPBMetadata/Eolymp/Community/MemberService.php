<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/member_service.proto

namespace GPBMetadata\Eolymp\Community;

class MemberService
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
        \GPBMetadata\Eolymp\Community\Attribute::initOnce();
        \GPBMetadata\Eolymp\Community\ConfigurationIdp::initOnce();
        \GPBMetadata\Eolymp\Community\Member::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Direction::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac31b0a25656f6c796d702f636f6d6d756e6974792f6d656d6265725f736572766963652e70726f746f1210656f6c796d702e636f6d6d756e6974791a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a20656f6c796d702f636f6d6d756e6974792f6174747269627574652e70726f746f1a28656f6c796d702f636f6d6d756e6974792f636f6e66696775726174696f6e5f6964702e70726f746f1a1d656f6c796d702f636f6d6d756e6974792f6d656d6265722e70726f746f1a20656f6c796d702f77656c6c6b6e6f776e2f646972656374696f6e2e70726f746f1a21656f6c796d702f77656c6c6b6e6f776e2f65787072657373696f6e2e70726f746f223d0a114372656174654d656d626572496e70757412280a066d656d62657218012001280b32182e656f6c796d702e636f6d6d756e6974792e4d656d62657222270a124372656174654d656d6265724f757470757412110a096d656d6265725f6964180120012809229e020a115570646174654d656d626572496e70757412380a05706174636818012003280e32292e656f6c796d702e636f6d6d756e6974792e5570646174654d656d626572496e7075742e5061746368121b0a1370617463685f6163636f756e745f70726f7073180420032809121c0a1470617463685f6174747269627574655f6b65797318052003280912110a096d656d6265725f696418022001280912280a066d656d62657218032001280b32182e656f6c796d702e636f6d6d756e6974792e4d656d62657222570a05506174636812070a03414c4c1000120c0a084e49434b4e414d451001120a0a064143544956451002120e0a0a554e4f4646494349414c1003120b0a074143434f554e541004120e0a0a41545452494255544553100522140a125570646174654d656d6265724f7574707574223c0a1152656d6f76654d656d626572496e70757412110a096d656d6265725f696418012001280912140a0c666f7263655f64656c65746518022001280822140a1252656d6f76654d656d6265724f757470757422270a12526573746f72654d656d626572496e70757412110a096d656d6265725f696418012001280922150a13526573746f72654d656d6265724f757470757422280a1344657363726962654d656d626572496e70757412110a096d656d6265725f696418012001280922400a1444657363726962654d656d6265724f757470757412280a066d656d62657218012001280b32182e656f6c796d702e636f6d6d756e6974792e4d656d62657222e2060a104c6973744d656d62657273496e707574120e0a066f6666736574180a20012805120c0a0473697a65180b20012805123a0a0766696c7465727318282001280b32292e656f6c796d702e636f6d6d756e6974792e4c6973744d656d62657273496e7075742e46696c74657212390a04736f727418322001280e322b2e656f6c796d702e636f6d6d756e6974792e4c6973744d656d62657273496e7075742e536f727461626c65122a0a056f7264657218332001280e321b2e656f6c796d702e77656c6c6b6e6f776e2e446972656374696f6e1acb040a0646696c746572122a0a02696418012003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e4944122e0a047479706518022003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e456e756d12340a086e69636b6e616d6518032003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e6712300a0661637469766518042003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e426f6f6c12340a0a7265676973746572656418052003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e426f6f6c12340a0a756e6f6666696369616c18062003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e426f6f6c122f0a077465616d5f696418072003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412370a0b757365725f69737375657218652003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e6712380a0c757365725f7375626a65637418662003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e6712360a0a757365725f656d61696c18672003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e6712350a09757365725f6e616d6518682003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e67223f0a08536f727461626c65120b0a0744454641554c541000120c0a084e49434b4e414d451001120e0a0a435245415445445f4154100212080a04545950451003224b0a114c6973744d656d626572734f7574707574120d0a05746f74616c18012001280512270a056974656d7318022003280b32182e656f6c796d702e636f6d6d756e6974792e4d656d62657222370a1141737369676e4d656d626572496e707574120f0a077465616d5f696418012001280912110a096d656d6265725f696418022001280922140a1241737369676e4d656d6265724f757470757422390a13556e61737369676e4d656d626572496e707574120f0a077465616d5f696418012001280912110a096d656d6265725f696418022001280922160a14556e61737369676e4d656d6265724f757470757432e10a0a0d4d656d626572536572766963651298010a0c4372656174654d656d62657212232e656f6c796d702e636f6d6d756e6974792e4372656174654d656d626572496e7075741a242e656f6c796d702e636f6d6d756e6974792e4372656174654d656d6265724f7574707574223d82e30a1a8ae30a16636f6d6d756e6974793a6d656d6265723a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e493020a22082f6d656d6265727312a4010a0c5570646174654d656d62657212232e656f6c796d702e636f6d6d756e6974792e5570646174654d656d626572496e7075741a242e656f6c796d702e636f6d6d756e6974792e5570646174654d656d6265724f7574707574224982e30a1a8ae30a16636f6d6d756e6974793a6d656d6265723a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e493021622142f6d656d626572732f7b6d656d6265725f69647d12a4010a0c52656d6f76654d656d62657212232e656f6c796d702e636f6d6d756e6974792e52656d6f76654d656d626572496e7075741a242e656f6c796d702e636f6d6d756e6974792e52656d6f76654d656d6265724f7574707574224982e30a1a8ae30a16636f6d6d756e6974793a6d656d6265723a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e49302162a142f6d656d626572732f7b6d656d6265725f69647d12af010a0d526573746f72654d656d62657212242e656f6c796d702e636f6d6d756e6974792e526573746f72654d656d626572496e7075741a252e656f6c796d702e636f6d6d756e6974792e526573746f72654d656d6265724f7574707574225182e30a1a8ae30a16636f6d6d756e6974793a6d656d6265723a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e493021e221c2f6d656d626572732f7b6d656d6265725f69647d2f726573746f726512a9010a0e44657363726962654d656d62657212252e656f6c796d702e636f6d6d756e6974792e44657363726962654d656d626572496e7075741a262e656f6c796d702e636f6d6d756e6974792e44657363726962654d656d6265724f7574707574224882e30a198ae30a15636f6d6d756e6974793a6d656d6265723a72656164eae20a0bf5e20a0000a040f8e20a1482d3e493021612142f6d656d626572732f7b6d656d6265725f69647d1294010a0b4c6973744d656d6265727312222e656f6c796d702e636f6d6d756e6974792e4c6973744d656d62657273496e7075741a232e656f6c796d702e636f6d6d756e6974792e4c6973744d656d626572734f7574707574223c82e30a198ae30a15636f6d6d756e6974793a6d656d6265723a72656164eae20a0bf5e20a0000a040f8e20a1482d3e493020a12082f6d656d6265727312b4010a0c41737369676e4d656d62657212232e656f6c796d702e636f6d6d756e6974792e41737369676e4d656d626572496e7075741a242e656f6c796d702e636f6d6d756e6974792e41737369676e4d656d6265724f7574707574225982e30a1a8ae30a16636f6d6d756e6974793a6d656d6265723a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e49302261a242f6d656d626572732f7b7465616d5f69647d2f75736572732f7b6d656d6265725f69647d12ba010a0e556e61737369676e4d656d62657212252e656f6c796d702e636f6d6d756e6974792e556e61737369676e4d656d626572496e7075741a262e656f6c796d702e636f6d6d756e6974792e556e61737369676e4d656d6265724f7574707574225982e30a1a8ae30a16636f6d6d756e6974793a6d656d6265723a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e49302262a242f6d656d626572732f7b7465616d5f69647d2f75736572732f7b6d656d6265725f69647d42355a336769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f636f6d6d756e6974793b636f6d6d756e697479620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
