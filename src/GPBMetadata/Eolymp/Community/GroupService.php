<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/group_service.proto

namespace GPBMetadata\Eolymp\Community;

class GroupService
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
        \GPBMetadata\Eolymp\Community\Group::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9b0e0a24656f6c796d702f636f6d6d756e6974792f67726f75705f736572766963652e70726f746f1210656f6c796d702e636f6d6d756e6974791a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a1c656f6c796d702f636f6d6d756e6974792f67726f75702e70726f746f1a21656f6c796d702f77656c6c6b6e6f776e2f65787072657373696f6e2e70726f746f223a0a1043726561746547726f7570496e70757412260a0567726f757018012001280b32172e656f6c796d702e636f6d6d756e6974792e47726f757022250a1143726561746547726f75704f757470757412100a0867726f75705f696418012001280922b2010a1055706461746547726f7570496e70757412370a05706174636818012003280e32282e656f6c796d702e636f6d6d756e6974792e55706461746547726f7570496e7075742e506174636812100a0867726f75705f696418022001280912260a0567726f757018032001280b32172e656f6c796d702e636f6d6d756e6974792e47726f7570222b0a05506174636812070a03414c4c100012080a044e414d451001120f0a0b4445534352495054494f4e100222130a1155706461746547726f75704f757470757422240a1044656c65746547726f7570496e70757412100a0867726f75705f696418012001280922130a1144656c65746547726f75704f757470757422260a12446573637269626547726f7570496e70757412100a0867726f75705f6964180120012809223d0a13446573637269626547726f75704f757470757412260a0567726f757018012001280b32172e656f6c796d702e636f6d6d756e6974792e47726f757022e1010a0f4c69737447726f757073496e707574120e0a066f6666736574180a20012805120c0a0473697a65180b2001280512390a0766696c7465727318282001280b32282e656f6c796d702e636f6d6d756e6974792e4c69737447726f757073496e7075742e46696c7465721a750a0646696c746572120d0a057175657279180120012809122a0a02696418022003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412300a046e616d6518032003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e6722490a104c69737447726f7570734f7574707574120d0a05746f74616c18012001280512260a056974656d7318022003280b32172e656f6c796d702e636f6d6d756e6974792e47726f7570329e060a0c47726f7570536572766963651293010a0b43726561746547726f757012222e656f6c796d702e636f6d6d756e6974792e43726561746547726f7570496e7075741a232e656f6c796d702e636f6d6d756e6974792e43726561746547726f75704f7574707574223b82e30a198ae30a15636f6d6d756e6974793a67726f75703a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e493020922072f67726f757073129e010a0b55706461746547726f757012222e656f6c796d702e636f6d6d756e6974792e55706461746547726f7570496e7075741a232e656f6c796d702e636f6d6d756e6974792e55706461746547726f75704f7574707574224682e30a198ae30a15636f6d6d756e6974793a67726f75703a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e493021422122f67726f7570732f7b67726f75705f69647d129e010a0b44656c65746547726f757012222e656f6c796d702e636f6d6d756e6974792e44656c65746547726f7570496e7075741a232e656f6c796d702e636f6d6d756e6974792e44656c65746547726f75704f7574707574224682e30a198ae30a15636f6d6d756e6974793a67726f75703a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e49302142a122f67726f7570732f7b67726f75705f69647d12a3010a0d446573637269626547726f757012242e656f6c796d702e636f6d6d756e6974792e446573637269626547726f7570496e7075741a252e656f6c796d702e636f6d6d756e6974792e446573637269626547726f75704f7574707574224582e30a188ae30a14636f6d6d756e6974793a67726f75703a72656164eae20a0bf5e20a0000a040f8e20a1482d3e493021412122f67726f7570732f7b67726f75705f69647d128f010a0a4c69737447726f75707312212e656f6c796d702e636f6d6d756e6974792e4c69737447726f757073496e7075741a222e656f6c796d702e636f6d6d756e6974792e4c69737447726f7570734f7574707574223a82e30a188ae30a14636f6d6d756e6974793a67726f75703a72656164eae20a0bf5e20a0000a040f8e20a1482d3e493020912072f67726f75707342355a336769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f636f6d6d756e6974793b636f6d6d756e697479620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

