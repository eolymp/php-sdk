<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/student_service.proto

namespace GPBMetadata\Eolymp\Course;

class StudentService
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
        \GPBMetadata\Eolymp\Course\Student::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Direction::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab7120a23656f6c796d702f636f757273652f73747564656e745f736572766963652e70726f746f120d656f6c796d702e636f757273651a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a1b656f6c796d702f636f757273652f73747564656e742e70726f746f1a20656f6c796d702f77656c6c6b6e6f776e2f646972656374696f6e2e70726f746f1a21656f6c796d702f77656c6c6b6e6f776e2f65787072657373696f6e2e70726f746f223d0a1243726561746553747564656e74496e70757412270a0773747564656e7418012001280b32162e656f6c796d702e636f757273652e53747564656e7422290a1343726561746553747564656e744f757470757412120a0a73747564656e745f696418012001280922ab010a1255706461746553747564656e74496e70757412360a05706174636818012003280e32272e656f6c796d702e636f757273652e55706461746553747564656e74496e7075742e506174636812120a0a73747564656e745f696418022001280912270a0773747564656e7418032001280b32162e656f6c796d702e636f757273652e53747564656e7422200a05506174636812070a03414c4c1000120e0a0a41535349474e4d454e54100122150a1355706461746553747564656e744f757470757422280a1244656c65746553747564656e74496e70757412120a0a73747564656e745f696418012001280922150a1344656c65746553747564656e744f7574707574222a0a14446573637269626553747564656e74496e70757412120a0a73747564656e745f696418012001280922400a15446573637269626553747564656e744f757470757412270a0773747564656e7418012001280b32162e656f6c796d702e636f757273652e53747564656e7422f1030a114c69737453747564656e7473496e707574120e0a066f6666736574180a20012805120c0a0473697a65180b2001280512380a0766696c7465727318282001280b32272e656f6c796d702e636f757273652e4c69737453747564656e7473496e7075742e46696c74657212370a04736f727418322001280e32292e656f6c796d702e636f757273652e4c69737453747564656e7473496e7075742e536f727461626c65122a0a056f7264657218332001280e321b2e656f6c796d702e77656c6c6b6e6f776e2e446972656374696f6e1ada010a0646696c746572120d0a057175657279180120012809122a0a026964180a2003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412310a096d656d6265725f6964180b2003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412300a046e616d65180c2003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e6712300a06737461747573180d2003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e456e756d22420a08536f727461626c65120b0a0744454641554c541000120e0a0a535441525445445f41541001120f0a0b434f4d504c4554455f4154100212080a044e414d451003224a0a124c69737453747564656e74734f7574707574120d0a05746f74616c18012001280512250a056974656d7318022003280b32162e656f6c796d702e636f757273652e53747564656e7422150a134465736372696265566965776572496e707574223f0a1444657363726962655669657765724f757470757412270a0773747564656e7418012001280b32162e656f6c796d702e636f757273652e53747564656e7432ab070a0e53747564656e74536572766963651295010a0d43726561746553747564656e7412212e656f6c796d702e636f757273652e43726561746553747564656e74496e7075741a222e656f6c796d702e636f757273652e43726561746553747564656e744f7574707574223d82e30a198ae30a1573747564656e743a73747564656e743a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e493020b1a092f73747564656e747312a2010a0d55706461746553747564656e7412212e656f6c796d702e636f757273652e55706461746553747564656e74496e7075741a222e656f6c796d702e636f757273652e55706461746553747564656e744f7574707574224a82e30a198ae30a1573747564656e743a73747564656e743a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e49302181a162f73747564656e74732f7b73747564656e745f69647d12a2010a0d44656c65746553747564656e7412212e656f6c796d702e636f757273652e44656c65746553747564656e74496e7075741a222e656f6c796d702e636f757273652e44656c65746553747564656e744f7574707574224a82e30a198ae30a1573747564656e743a73747564656e743a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e49302182a162f73747564656e74732f7b73747564656e745f69647d12a7010a0f446573637269626553747564656e7412232e656f6c796d702e636f757273652e446573637269626553747564656e74496e7075741a242e656f6c796d702e636f757273652e446573637269626553747564656e744f7574707574224982e30a188ae30a1473747564656e743a73747564656e743a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493021812162f73747564656e74732f7b73747564656e745f69647d1291010a0c4c69737453747564656e747312202e656f6c796d702e636f757273652e4c69737453747564656e7473496e7075741a212e656f6c796d702e636f757273652e4c69737453747564656e74734f7574707574223c82e30a188ae30a1473747564656e743a73747564656e743a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493020b12092f73747564656e747312790a0e446573637269626556696577657212222e656f6c796d702e636f757273652e4465736372696265566965776572496e7075741a232e656f6c796d702e636f757273652e44657363726962655669657765724f7574707574221eeae20a0bf5e20a0000a040f8e20a1482d3e493020922072f766965776572422f5a2d6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f636f757273653b636f75727365620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

