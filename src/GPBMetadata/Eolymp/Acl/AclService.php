<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/acl/acl_service.proto

namespace GPBMetadata\Eolymp\Acl;

class AclService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af7110a1c656f6c796d702f61636c2f61636c5f736572766963652e70726f746f120a656f6c796d702e61636c1a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a21656f6c796d702f77656c6c6b6e6f776e2f65787072657373696f6e2e70726f746f224d0a0a5065726d697373696f6e120a0a026964180120012809120c0a04726f6c65180220012809120f0a07757365725f696418032001280912140a0c656e7469746c656d656e7473180420032809224b0a144772616e745065726d697373696f6e496e707574120f0a07757365725f6964180120012809120c0a04726f6c6518022001280912140a0c656e7469746c656d656e747318032003280922170a154772616e745065726d697373696f6e4f757470757422280a155265766f6b655065726d697373696f6e496e707574120f0a07757365725f696418012001280922180a165265766f6b655065726d697373696f6e4f7574707574222a0a1744657363726962655065726d697373696f6e496e707574120f0a07757365725f696418012001280922460a1844657363726962655065726d697373696f6e4f7574707574122a0a0a7065726d697373696f6e18012001280b32162e656f6c796d702e61636c2e5065726d697373696f6e2286020a144c6973745065726d697373696f6e73496e707574120e0a066f6666736574180a20012805120c0a0473697a65180b2001280512380a0766696c7465727318282001280b32272e656f6c796d702e61636c2e4c6973745065726d697373696f6e73496e7075742e46696c7465721a95010a0646696c746572122a0a02696418012003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e4944122f0a07757365725f696418022003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e4944122e0a04726f6c6518032003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e456e756d224d0a154c6973745065726d697373696f6e734f7574707574120d0a05746f74616c18012001280512250a056974656d7318022003280b32162e656f6c796d702e61636c2e5065726d697373696f6e221b0a19496e74726f73706563745065726d697373696f6e496e70757422480a1a496e74726f73706563745065726d697373696f6e4f7574707574122a0a0a7065726d697373696f6e18012001280b32162e656f6c796d702e61636c2e5065726d697373696f6e328d050a0341636c127d0a0f4772616e745065726d697373696f6e12202e656f6c796d702e61636c2e4772616e745065726d697373696f6e496e7075741a212e656f6c796d702e61636c2e4772616e745065726d697373696f6e4f75747075742225eae20a0bf5e20a0000a040f8e20a1482d3e49302101a0e2f61636c2f7b757365725f69647d1280010a105265766f6b655065726d697373696f6e12212e656f6c796d702e61636c2e5265766f6b655065726d697373696f6e496e7075741a222e656f6c796d702e61636c2e5265766f6b655065726d697373696f6e4f75747075742225eae20a0bf5e20a0000a040f8e20a1482d3e49302102a0e2f61636c2f7b757365725f69647d1286010a1244657363726962655065726d697373696f6e12232e656f6c796d702e61636c2e44657363726962655065726d697373696f6e496e7075741a242e656f6c796d702e61636c2e44657363726962655065726d697373696f6e4f75747075742225eae20a0bf5e20a00002041f8e20a1482d3e4930210120e2f61636c2f7b757365725f69647d12730a0f4c6973745065726d697373696f6e7312202e656f6c796d702e61636c2e4c6973745065726d697373696f6e73496e7075741a212e656f6c796d702e61636c2e4c6973745065726d697373696f6e734f7574707574221beae20a0bf5e20a00002041f8e20a1482d3e493020612042f61636c1285010a14496e74726f73706563745065726d697373696f6e12252e656f6c796d702e61636c2e496e74726f73706563745065726d697373696f6e496e7075741a262e656f6c796d702e61636c2e496e74726f73706563745065726d697373696f6e4f7574707574221eeae20a0bf5e20a00002041f8e20a1482d3e493020912072f77686f616d693294050a0a41636c53657276696365127d0a0f4772616e745065726d697373696f6e12202e656f6c796d702e61636c2e4772616e745065726d697373696f6e496e7075741a212e656f6c796d702e61636c2e4772616e745065726d697373696f6e4f75747075742225eae20a0bf5e20a0000a040f8e20a1482d3e49302101a0e2f61636c2f7b757365725f69647d1280010a105265766f6b655065726d697373696f6e12212e656f6c796d702e61636c2e5265766f6b655065726d697373696f6e496e7075741a222e656f6c796d702e61636c2e5265766f6b655065726d697373696f6e4f75747075742225eae20a0bf5e20a0000a040f8e20a1482d3e49302102a0e2f61636c2f7b757365725f69647d1286010a1244657363726962655065726d697373696f6e12232e656f6c796d702e61636c2e44657363726962655065726d697373696f6e496e7075741a242e656f6c796d702e61636c2e44657363726962655065726d697373696f6e4f75747075742225eae20a0bf5e20a00002041f8e20a1482d3e4930210120e2f61636c2f7b757365725f69647d12730a0f4c6973745065726d697373696f6e7312202e656f6c796d702e61636c2e4c6973745065726d697373696f6e73496e7075741a212e656f6c796d702e61636c2e4c6973745065726d697373696f6e734f7574707574221beae20a0bf5e20a00002041f8e20a1482d3e493020612042f61636c1285010a14496e74726f73706563745065726d697373696f6e12252e656f6c796d702e61636c2e496e74726f73706563745065726d697373696f6e496e7075741a262e656f6c796d702e61636c2e496e74726f73706563745065726d697373696f6e4f7574707574221eeae20a0bf5e20a00002041f8e20a1482d3e493020912072f77686f616d6942295a276769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f61636c3b61636c620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
