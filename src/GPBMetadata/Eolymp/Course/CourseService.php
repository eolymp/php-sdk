<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/course_service.proto

namespace GPBMetadata\Eolymp\Course;

class CourseService
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
        \GPBMetadata\Eolymp\Course\Course::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Direction::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab70f0a22656f6c796d702f636f757273652f636f757273655f736572766963652e70726f746f120d656f6c796d702e636f757273651a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a1a656f6c796d702f636f757273652f636f757273652e70726f746f1a20656f6c796d702f77656c6c6b6e6f776e2f646972656374696f6e2e70726f746f1a21656f6c796d702f77656c6c6b6e6f776e2f65787072657373696f6e2e70726f746f22bb020a104c697374436f7572736573496e707574120e0a0672656e646572180120012808120e0a066f6666736574180a20012805120c0a0473697a65180b2001280512370a0766696c7465727318282001280b32262e656f6c796d702e636f757273652e4c697374436f7572736573496e7075742e46696c74657212360a04736f727418322001280e32282e656f6c796d702e636f757273652e4c697374436f7572736573496e7075742e536f727461626c65122a0a056f7264657218332001280e321b2e656f6c796d702e77656c6c6b6e6f776e2e446972656374696f6e1a430a0646696c746572120d0a057175657279180120012809122a0a026964180a2003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494422170a08536f727461626c65120b0a0744454641554c54100022480a114c697374436f75727365734f7574707574120d0a05746f74616c18012001280512240a056974656d7318022003280b32152e656f6c796d702e636f757273652e436f7572736522380a134465736372696265436f75727365496e70757412110a09636f757273655f6964180120012809120e0a0672656e646572180220012808223d0a144465736372696265436f757273654f757470757412250a06636f7572736518012001280b32152e656f6c796d702e636f757273652e436f75727365223a0a11437265617465436f75727365496e70757412250a06636f7572736518012001280b32152e656f6c796d702e636f757273652e436f7572736522270a12437265617465436f757273654f757470757412110a09636f757273655f696418012001280922d8010a11557064617465436f75727365496e70757412350a05706174636818012003280e32262e656f6c796d702e636f757273652e557064617465436f75727365496e7075742e506174636812110a09636f757273655f696418022001280912250a06636f7572736518032001280b32152e656f6c796d702e636f757273652e436f7572736522520a05506174636812070a03414c4c1000120a0a064c4f43414c45100112080a044e414d451002120f0a0b4445534352495054494f4e100312090a05494d4147451004120e0a0a5649534942494c495459100522140a12557064617465436f757273654f757470757422260a1144656c657465436f75727365496e70757412110a09636f757273655f696418012001280922140a1244656c657465436f757273654f7574707574328e060a0d436f7572736553657276696365128f010a0c437265617465436f7572736512202e656f6c796d702e636f757273652e437265617465436f75727365496e7075741a212e656f6c796d702e636f757273652e437265617465436f757273654f7574707574223a82e30a178ae30a13636f757273653a636f757273653a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e493020a1a082f636f7572736573129b010a0c557064617465436f7572736512202e656f6c796d702e636f757273652e557064617465436f75727365496e7075741a212e656f6c796d702e636f757273652e557064617465436f757273654f7574707574224682e30a178ae30a13636f757273653a636f757273653a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e49302161a142f636f75727365732f7b636f757273655f69647d129b010a0c44656c657465436f7572736512202e656f6c796d702e636f757273652e44656c657465436f75727365496e7075741a212e656f6c796d702e636f757273652e44656c657465436f757273654f7574707574224682e30a178ae30a13636f757273653a636f757273653a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e49302162a142f636f75727365732f7b636f757273655f69647d12a0010a0e4465736372696265436f7572736512222e656f6c796d702e636f757273652e4465736372696265436f75727365496e7075741a232e656f6c796d702e636f757273652e4465736372696265436f757273654f7574707574224582e30a168ae30a12636f757273653a636f757273653a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493021612142f636f75727365732f7b636f757273655f69647d128b010a0b4c697374436f7572736573121f2e656f6c796d702e636f757273652e4c697374436f7572736573496e7075741a202e656f6c796d702e636f757273652e4c697374436f75727365734f7574707574223982e30a168ae30a12636f757273653a636f757273653a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493020a12082f636f7572736573422f5a2d6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f636f757273653b636f75727365620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

