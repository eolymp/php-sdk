<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/taxonomy/topic_service.proto

namespace GPBMetadata\Eolymp\Taxonomy;

class TopicService
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
        \GPBMetadata\Eolymp\Taxonomy\Topic::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af6160a23656f6c796d702f7461786f6e6f6d792f746f7069635f736572766963652e70726f746f120f656f6c796d702e7461786f6e6f6d791a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a1b656f6c796d702f7461786f6e6f6d792f746f7069632e70726f746f1a21656f6c796d702f77656c6c6b6e6f776e2f65787072657373696f6e2e70726f746f22390a10437265617465546f706963496e70757412250a05746f70696318012001280b32162e656f6c796d702e7461786f6e6f6d792e546f70696322250a11437265617465546f7069634f757470757412100a08746f7069635f696418012001280922240a1044656c657465546f706963496e70757412100a08746f7069635f696418012001280922130a1144656c657465546f7069634f757470757422c6010a10557064617465546f706963496e70757412360a05706174636818012003280e32272e656f6c796d702e7461786f6e6f6d792e557064617465546f706963496e7075742e506174636812100a08746f7069635f696418022001280912250a05746f70696318032001280b32162e656f6c796d702e7461786f6e6f6d792e546f70696322410a05506174636812070a03414c4c100012160a12415050454e445f44455343524950544f5253100112170a134558434c5544455f44455343524950544f5253100222130a11557064617465546f7069634f757470757422360a124465736372696265546f706963496e70757412100a08746f7069635f6964180120012809120e0a066c6f63616c65186420012809223c0a134465736372696265546f7069634f757470757412250a05746f70696318012001280b32162e656f6c796d702e7461786f6e6f6d792e546f70696322f0010a0f4c697374546f70696373496e707574120e0a066f6666736574180a20012805120c0a0473697a65180b2001280512380a0766696c7465727318282001280b32272e656f6c796d702e7461786f6e6f6d792e4c697374546f70696373496e7075742e46696c746572120e0a066c6f63616c651864200128091a750a0646696c746572120d0a057175657279180120012809122a0a02696418022003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412300a046e616d6518032003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e6722480a104c697374546f706963734f7574707574120d0a05746f74616c18012001280512250a056974656d7318022003280b32162e656f6c796d702e7461786f6e6f6d792e546f70696322700a135472616e736c617465546f706963496e70757412100a08746f7069635f6964180120012809120e0a066c6f63616c6518022001280912370a0b7472616e736c6174696f6e18032001280b32222e656f6c796d702e7461786f6e6f6d792e546f7069632e5472616e736c6174696f6e22160a145472616e736c617465546f7069634f7574707574223a0a1644656c6574655472616e736c6174696f6e496e70757412100a08746f7069635f6964180120012809120e0a066c6f63616c6518022001280922190a1744656c6574655472616e736c6174696f6e4f757470757422c3010a154c6973745472616e736c6174696f6e73496e70757412100a08746f7069635f6964180120012809120e0a066f6666736574180a20012805120c0a0473697a65180b20012805123e0a0766696c7465727318282001280b322d2e656f6c796d702e7461786f6e6f6d792e4c6973745472616e736c6174696f6e73496e7075742e46696c7465721a3a0a0646696c74657212300a066c6f63616c6518012003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e456e756d225a0a164c6973745472616e736c6174696f6e734f7574707574120d0a05746f74616c18012001280512310a056974656d7318022003280b32222e656f6c796d702e7461786f6e6f6d792e546f7069632e5472616e736c6174696f6e32cb0a0a0c546f706963536572766963651290010a0b437265617465546f70696312212e656f6c796d702e7461786f6e6f6d792e437265617465546f706963496e7075741a222e656f6c796d702e7461786f6e6f6d792e437265617465546f7069634f7574707574223a82e30a188ae30a147461786f6e6f6d793a746f7069633a7772697465eae20a0bf5e20a0ad7233ef8e20a0582d3e493020922072f746f70696373129b010a0b44656c657465546f70696312212e656f6c796d702e7461786f6e6f6d792e44656c657465546f706963496e7075741a222e656f6c796d702e7461786f6e6f6d792e44656c657465546f7069634f7574707574224582e30a188ae30a147461786f6e6f6d793a746f7069633a7772697465eae20a0bf5e20a0ad7233ef8e20a0582d3e49302142a122f746f706963732f7b746f7069635f69647d129b010a0b557064617465546f70696312212e656f6c796d702e7461786f6e6f6d792e557064617465546f706963496e7075741a222e656f6c796d702e7461786f6e6f6d792e557064617465546f7069634f7574707574224582e30a188ae30a147461786f6e6f6d793a746f7069633a7772697465eae20a0bf5e20a0ad7233ef8e20a0582d3e49302141a122f746f706963732f7b746f7069635f69647d12a0010a0d4465736372696265546f70696312232e656f6c796d702e7461786f6e6f6d792e4465736372696265546f706963496e7075741a242e656f6c796d702e7461786f6e6f6d792e4465736372696265546f7069634f7574707574224482e30a178ae30a137461786f6e6f6d793a746f7069633a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493021412122f746f706963732f7b746f7069635f69647d128c010a0a4c697374546f7069637312202e656f6c796d702e7461786f6e6f6d792e4c697374546f70696373496e7075741a212e656f6c796d702e7461786f6e6f6d792e4c697374546f706963734f7574707574223982e30a178ae30a137461786f6e6f6d793a746f7069633a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493020912072f746f7069637312ba010a0e5472616e736c617465546f70696312242e656f6c796d702e7461786f6e6f6d792e5472616e736c617465546f706963496e7075741a252e656f6c796d702e7461786f6e6f6d792e5472616e736c617465546f7069634f7574707574225b82e30a188ae30a147461786f6e6f6d793a746f7069633a7772697465eae20a0bf5e20a0ad7233ef8e20a0582d3e493022a1a282f746f706963732f7b746f7069635f69647d2f7472616e736c6174696f6e732f7b6c6f63616c657d12c3010a1144656c6574655472616e736c6174696f6e12272e656f6c796d702e7461786f6e6f6d792e44656c6574655472616e736c6174696f6e496e7075741a282e656f6c796d702e7461786f6e6f6d792e44656c6574655472616e736c6174696f6e4f7574707574225b82e30a188ae30a147461786f6e6f6d793a746f7069633a7772697465eae20a0bf5e20a0ad7233ef8e20a0582d3e493022a2a282f746f706963732f7b746f7069635f69647d2f7472616e736c6174696f6e732f7b6c6f63616c657d12b6010a104c6973745472616e736c6174696f6e7312262e656f6c796d702e7461786f6e6f6d792e4c6973745472616e736c6174696f6e73496e7075741a272e656f6c796d702e7461786f6e6f6d792e4c6973745472616e736c6174696f6e734f7574707574225182e30a178ae30a137461786f6e6f6d793a746f7069633a72656164eae20a0bf5e20a0ad7233ef8e20a0582d3e49302212a1f2f746f706963732f7b746f7069635f69647d2f7472616e736c6174696f6e7342335a316769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f7461786f6e6f6d793b7461786f6e6f6d79620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

