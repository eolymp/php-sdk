<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/entry_service.proto

namespace GPBMetadata\Eolymp\Course;

class EntryService
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
        \GPBMetadata\Eolymp\Course\Entry::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Direction::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aea180a21656f6c796d702f636f757273652f656e7472795f736572766963652e70726f746f120d656f6c796d702e636f757273651a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a19656f6c796d702f636f757273652f656e7472792e70726f746f1a20656f6c796d702f77656c6c6b6e6f776e2f646972656374696f6e2e70726f746f1a21656f6c796d702f77656c6c6b6e6f776e2f65787072657373696f6e2e70726f746f22370a10437265617465456e747279496e70757412230a05656e74727918012001280b32142e656f6c796d702e636f757273652e456e74727922250a11437265617465456e7472794f757470757412100a08656e7472795f696418012001280922ac020a10557064617465456e747279496e70757412340a05706174636818012003280e32252e656f6c796d702e636f757273652e557064617465456e747279496e7075742e506174636812100a08656e7472795f696418022001280912230a05656e74727918032001280b32142e656f6c796d702e636f757273652e456e74727922aa010a05506174636812070a03414c4c100012090a055449544c45100112090a0544524146541002120a0a065745494748541004120f0a0b434f4e54454e545f414c4c100312110a0d53454354494f4e5f494d414745100a12170a1353454354494f4e5f4445534352495054494f4e100b12130a0f564944454f5f494d4147455f55524c101412130a0f564944454f5f564944454f5f55524c1015120f0a0b50524f424c454d5f55524c101e22130a11557064617465456e7472794f757470757422330a1052656e616d65456e747279496e70757412100a08656e7472795f6964180120012809120d0a057469746c6518022001280922130a1152656e616d65456e7472794f757470757422440a0e4d6f7665456e747279496e70757412100a08656e7472795f696418012001280912110a09706172656e745f6964180220012809120d0a05696e64657818032001280d22110a0f4d6f7665456e7472794f757470757422240a1044656c657465456e747279496e70757412100a08656e7472795f696418012001280922130a1144656c657465456e7472794f757470757422360a124465736372696265456e747279496e70757412100a08656e7472795f6964180120012809120e0a0672656e646572180220012808223a0a134465736372696265456e7472794f757470757412230a05656e74727918012001280b32142e656f6c796d702e636f757273652e456e74727922d3030a104c697374456e7472696573496e707574120e0a0672656e646572180120012808120e0a066f6666736574180a20012805120c0a0473697a65180b2001280512370a0766696c7465727318282001280b32262e656f6c796d702e636f757273652e4c697374456e7472696573496e7075742e46696c74657212360a04736f727418322001280e32282e656f6c796d702e636f757273652e4c697374456e7472696573496e7075742e536f727461626c65122a0a056f7264657218332001280e321b2e656f6c796d702e77656c6c6b6e6f776e2e446972656374696f6e1ada010a0646696c746572120d0a057175657279180120012809122a0a026964180a2003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412310a09706172656e745f6964180b2003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e4944122f0a056472616674180c2003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e426f6f6c12310a057469746c65180d2003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e6722170a08536f727461626c65120b0a0744454641554c54100022470a114c697374456e74726965734f7574707574120d0a05746f74616c18012001280512230a056974656d7318022003280b32142e656f6c796d702e636f757273652e456e74727922410a104465736372696265544f43496e707574120f0a07726f6f745f6964180120012809120d0a05646570746818022001280d120d0a05647261667418032001280822380a114465736372696265544f434f757470757412230a056974656d7318022003280b32142e656f6c796d702e636f757273652e456e74727922240a104c697374506172656e7473496e70757412100a08656e7472795f696418012001280922380a114c697374506172656e74734f757470757412230a056974656d7318022003280b32142e656f6c796d702e636f757273652e456e74727932e60a0a0c456e74727953657276696365128c010a0b437265617465456e747279121f2e656f6c796d702e636f757273652e437265617465456e747279496e7075741a202e656f6c796d702e636f757273652e437265617465456e7472794f7574707574223a82e30a178ae30a13636f757273653a636f757273653a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e493020a22082f656e74726965731297010a0b557064617465456e747279121f2e656f6c796d702e636f757273652e557064617465456e747279496e7075741a202e656f6c796d702e636f757273652e557064617465456e7472794f7574707574224582e30a178ae30a13636f757273653a636f757273653a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e49302151a132f656e74726965732f7b656e7472795f69647d129d010a0b52656e616d65456e747279121f2e656f6c796d702e636f757273652e52656e616d65456e747279496e7075741a202e656f6c796d702e636f757273652e52656e616d65456e7472794f7574707574224b82e30a178ae30a13636f757273653a636f757273653a7772697465eae20a0bf5e20a00000040f8e20a0a82d3e493021b1a192f656e74726965732f7b656e7472795f69647d2f7469746c65129a010a094d6f7665456e747279121d2e656f6c796d702e636f757273652e4d6f7665456e747279496e7075741a1e2e656f6c796d702e636f757273652e4d6f7665456e7472794f7574707574224e82e30a178ae30a13636f757273653a636f757273653a7772697465eae20a0bf5e20a00000040f8e20a0a82d3e493021e1a1c2f656e74726965732f7b656e7472795f69647d2f706f736974696f6e1297010a0b44656c657465456e747279121f2e656f6c796d702e636f757273652e44656c657465456e747279496e7075741a202e656f6c796d702e636f757273652e44656c657465456e7472794f7574707574224582e30a178ae30a13636f757273653a636f757273653a7772697465eae20a0bf5e20a00000040f8e20a0a82d3e49302152a132f656e74726965732f7b656e7472795f69647d129c010a0d4465736372696265456e74727912212e656f6c796d702e636f757273652e4465736372696265456e747279496e7075741a222e656f6c796d702e636f757273652e4465736372696265456e7472794f7574707574224482e30a168ae30a12636f757273653a636f757273653a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493021512132f656e74726965732f7b656e7472795f69647d128b010a0b4c697374456e7472696573121f2e656f6c796d702e636f757273652e4c697374456e7472696573496e7075741a202e656f6c796d702e636f757273652e4c697374456e74726965734f7574707574223982e30a168ae30a12636f757273653a636f757273653a72656164eae20a0bf5e20a0000a040f8e20a1482d3e493020a12082f656e74726965731287010a0b4465736372696265544f43121f2e656f6c796d702e636f757273652e4465736372696265544f43496e7075741a202e656f6c796d702e636f757273652e4465736372696265544f434f7574707574223582e30a168ae30a12636f757273653a636f757273653a72656164eae20a0bf5e20a0000a040f8e20a0a82d3e493020612042f746f63129e010a0b4c697374506172656e7473121f2e656f6c796d702e636f757273652e4c697374506172656e7473496e7075741a202e656f6c796d702e636f757273652e4c697374506172656e74734f7574707574224c82e30a168ae30a12636f757273653a636f757273653a72656164eae20a0bf5e20a0000a040f8e20a0a82d3e493021d121b2f656e74726965732f7b656e7472795f69647d2f706172656e7473422f5a2d6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f636f757273653b636f75727365620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

