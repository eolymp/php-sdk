<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/content/content_service.proto

namespace GPBMetadata\Eolymp\Content;

class ContentService
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
        \GPBMetadata\Eolymp\Content\Fragment::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a94180a24656f6c796d702f636f6e74656e742f636f6e74656e745f736572766963652e70726f746f120e656f6c796d702e636f6e74656e741a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a1d656f6c796d702f636f6e74656e742f667261676d656e742e70726f746f1a21656f6c796d702f77656c6c6b6e6f776e2f65787072657373696f6e2e70726f746f223c0a154465736372696265467261676d656e74496e70757412130a0b667261676d656e745f6964180120012809120e0a0672656e64657218022001280822440a164465736372696265467261676d656e744f7574707574122a0a08667261676d656e7418012001280b32182e656f6c796d702e636f6e74656e742e467261676d656e7422d9020a124c697374467261676d656e7473496e707574120e0a0672656e646572180120012808120e0a066f6666736574180a20012805120c0a0473697a65180b20012805123a0a0766696c7465727318282001280b32292e656f6c796d702e636f6e74656e742e4c697374467261676d656e7473496e7075742e46696c7465721ad8010a0646696c746572120d0a057175657279180120012809122a0a02696418022003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412300a047061746818032003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e6712300a066c6f63616c6518042003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e456e756d122f0a056c6162656c18052003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e456e756d224d0a134c697374467261676d656e74734f7574707574120d0a05746f74616c18012001280512270a056974656d7318022003280b32182e656f6c796d702e636f6e74656e742e467261676d656e7422410a13437265617465467261676d656e74496e707574122a0a08667261676d656e7418012001280b32182e656f6c796d702e636f6e74656e742e467261676d656e74222b0a14437265617465467261676d656e744f757470757412130a0b667261676d656e745f696418012001280922560a13557064617465467261676d656e74496e70757412130a0b667261676d656e745f6964180120012809122a0a08667261676d656e7418022001280b32182e656f6c796d702e636f6e74656e742e467261676d656e7422160a14557064617465467261676d656e744f7574707574222a0a1344656c657465467261676d656e74496e70757412130a0b667261676d656e745f696418012001280922160a1444656c657465467261676d656e744f757470757422410a11446573637269626550617468496e707574120c0a0470617468180120012809120e0a066c6f63616c65180220012809120e0a0672656e64657218032001280822400a124465736372696265506174684f7574707574122a0a08667261676d656e7418012001280b32182e656f6c796d702e636f6e74656e742e467261676d656e742282020a0e4c6973745061746873496e707574120e0a066c6f63616c65180120012809120e0a0672656e646572180220012808120e0a066f6666736574180a20012805120c0a0473697a65180b2001280512360a0766696c7465727318282001280b32252e656f6c796d702e636f6e74656e742e4c6973745061746873496e7075742e46696c7465721a7a0a0646696c746572120d0a05717565727918012001280912300a047061746818022003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e67122f0a056c6162656c18032003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e456e756d22490a0f4c69737450617468734f7574707574120d0a05746f74616c18012001280512270a056974656d7318022003280b32182e656f6c796d702e636f6e74656e742e467261676d656e7422400a104c697374506172656e7473496e707574120c0a0470617468180120012809120e0a066c6f63616c65180220012809120e0a0672656e646572180320012808224b0a114c697374506172656e74734f7574707574120d0a05746f74616c18012001280512270a056974656d7318022003280b32182e656f6c796d702e636f6e74656e742e467261676d656e7432e30a0a0e436f6e74656e745365727669636512bb010a104465736372696265467261676d656e7412252e656f6c796d702e636f6e74656e742e4465736372696265467261676d656e74496e7075741a262e656f6c796d702e636f6e74656e742e4465736372696265467261676d656e744f7574707574225882e30a1c8ae30a18747970657772697465723a667261676d656e743a72656164eae20a0cf5e20a0000a041f8e20af40382d3e493022212202f636f6e74656e742f667261676d656e74732f7b667261676d656e745f69647d12a3010a0d4c697374467261676d656e747312222e656f6c796d702e636f6e74656e742e4c697374467261676d656e7473496e7075741a232e656f6c796d702e636f6e74656e742e4c697374467261676d656e74734f7574707574224982e30a1c8ae30a18747970657772697465723a667261676d656e743a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493021412122f636f6e74656e742f667261676d656e747312a7010a0e437265617465467261676d656e7412232e656f6c796d702e636f6e74656e742e437265617465467261676d656e74496e7075741a242e656f6c796d702e636f6e74656e742e437265617465467261676d656e744f7574707574224a82e30a1d8ae30a19747970657772697465723a667261676d656e743a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e493021422122f636f6e74656e742f667261676d656e747312b5010a0e557064617465467261676d656e7412232e656f6c796d702e636f6e74656e742e557064617465467261676d656e74496e7075741a242e656f6c796d702e636f6e74656e742e557064617465467261676d656e744f7574707574225882e30a1d8ae30a19747970657772697465723a667261676d656e743a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e49302221a202f636f6e74656e742f667261676d656e74732f7b667261676d656e745f69647d12b5010a0e44656c657465467261676d656e7412232e656f6c796d702e636f6e74656e742e44656c657465467261676d656e74496e7075741a242e656f6c796d702e636f6e74656e742e44656c657465467261676d656e744f7574707574225882e30a1d8ae30a19747970657772697465723a667261676d656e743a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e49302222a202f636f6e74656e742f667261676d656e74732f7b667261676d656e745f69647d129c010a0c44657363726962655061746812212e656f6c796d702e636f6e74656e742e446573637269626550617468496e7075741a222e656f6c796d702e636f6e74656e742e4465736372696265506174684f7574707574224582e30a1c8ae30a18747970657772697465723a667261676d656e743a72656164eae20a0cf5e20a0000a041f8e20af40382d3e493020f120d2f636f6e74656e742f706174681294010a094c6973745061746873121e2e656f6c796d702e636f6e74656e742e4c6973745061746873496e7075741a1f2e656f6c796d702e636f6e74656e742e4c69737450617468734f7574707574224682e30a1c8ae30a18747970657772697465723a667261676d656e743a72656164eae20a0cf5e20a0000a041f8e20af40382d3e4930210120e2f636f6e74656e742f7061746873129c010a0b4c697374506172656e747312202e656f6c796d702e636f6e74656e742e4c697374506172656e7473496e7075741a212e656f6c796d702e636f6e74656e742e4c697374506172656e74734f7574707574224882e30a1c8ae30a18747970657772697465723a667261676d656e743a72656164eae20a0cf5e20a0000a041f8e20af40382d3e493021212102f636f6e74656e742f706172656e747342315a2f6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f636f6e74656e743b636f6e74656e74620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
