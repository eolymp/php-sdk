<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/typewriter/typewriter.proto

namespace GPBMetadata\Eolymp\Typewriter;

class Typewriter
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
        \GPBMetadata\Eolymp\Typewriter\Fragment::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af5190a22656f6c796d702f747970657772697465722f747970657772697465722e70726f746f1211656f6c796d702e747970657772697465721a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a20656f6c796d702f747970657772697465722f667261676d656e742e70726f746f1a21656f6c796d702f77656c6c6b6e6f776e2f65787072657373696f6e2e70726f746f222c0a154465736372696265467261676d656e74496e70757412130a0b667261676d656e745f696418012001280922470a164465736372696265467261676d656e744f7574707574122d0a08667261676d656e7418012001280b321b2e656f6c796d702e747970657772697465722e467261676d656e74229b020a124c697374467261676d656e7473496e707574120e0a066f6666736574180a20012805120c0a0473697a65180b20012805123d0a0766696c7465727318282001280b322c2e656f6c796d702e747970657772697465722e4c697374467261676d656e7473496e7075742e46696c7465721aa7010a0646696c746572120d0a057175657279180120012809122a0a02696418022003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412300a047061746818032003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e6712300a066c6f63616c6518042003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e456e756d22500a134c697374467261676d656e74734f7574707574120d0a05746f74616c180120012805122a0a056974656d7318022003280b321b2e656f6c796d702e747970657772697465722e467261676d656e7422440a13437265617465467261676d656e74496e707574122d0a08667261676d656e7418012001280b321b2e656f6c796d702e747970657772697465722e467261676d656e74222b0a14437265617465467261676d656e744f757470757412130a0b667261676d656e745f696418012001280922590a13557064617465467261676d656e74496e70757412130a0b667261676d656e745f6964180120012809122d0a08667261676d656e7418022001280b321b2e656f6c796d702e747970657772697465722e467261676d656e7422160a14557064617465467261676d656e744f7574707574222a0a1344656c657465467261676d656e74496e70757412130a0b667261676d656e745f696418012001280922160a1444656c657465467261676d656e744f7574707574223c0a11446573637269626550617468496e707574120c0a047061746818012001280912190a117072656665727265645f6c6f63616c657318022003280922430a124465736372696265506174684f7574707574122d0a08667261676d656e7418012001280b321b2e656f6c796d702e747970657772697465722e467261676d656e742280020a0e4c6973745061746873496e70757412190a117072656665727265645f6c6f63616c6573180120032809120e0a066f6666736574180a20012805120c0a0473697a65180b2001280512390a0766696c7465727318282001280b32282e656f6c796d702e747970657772697465722e4c6973745061746873496e7075742e46696c7465721a7a0a0646696c746572120d0a05717565727918012001280912300a047061746818022003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e67122f0a056c6162656c18032003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e456e756d224c0a0f4c69737450617468734f7574707574120d0a05746f74616c180120012805122a0a056974656d7318022003280b321b2e656f6c796d702e747970657772697465722e467261676d656e74223b0a104c697374506172656e7473496e707574120c0a047061746818012001280912190a117072656665727265645f6c6f63616c6573180220032809224e0a114c697374506172656e74734f7574707574120d0a05746f74616c180120012805122a0a056974656d7318022003280b321b2e656f6c796d702e747970657772697465722e467261676d656e7422320a1055706c6f61644173736574496e70757412100a0866696c656e616d65180120012809120c0a046461746118022001280c22210a1155706c6f616441737365744f7574707574120c0a046c696e6b18012001280932a80c0a0a5479706577726974657212c1010a104465736372696265467261676d656e7412282e656f6c796d702e747970657772697465722e4465736372696265467261676d656e74496e7075741a292e656f6c796d702e747970657772697465722e4465736372696265467261676d656e744f7574707574225882e30a1c8ae30a18747970657772697465723a667261676d656e743a72656164eae20a0cf5e20a0000a041f8e20af40382d3e493022212202f636f6e74656e742f667261676d656e74732f7b667261676d656e745f69647d12a9010a0d4c697374467261676d656e747312252e656f6c796d702e747970657772697465722e4c697374467261676d656e7473496e7075741a262e656f6c796d702e747970657772697465722e4c697374467261676d656e74734f7574707574224982e30a1c8ae30a18747970657772697465723a667261676d656e743a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493021412122f636f6e74656e742f667261676d656e747312ad010a0e437265617465467261676d656e7412262e656f6c796d702e747970657772697465722e437265617465467261676d656e74496e7075741a272e656f6c796d702e747970657772697465722e437265617465467261676d656e744f7574707574224a82e30a1d8ae30a19747970657772697465723a667261676d656e743a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e493021422122f636f6e74656e742f667261676d656e747312bb010a0e557064617465467261676d656e7412262e656f6c796d702e747970657772697465722e557064617465467261676d656e74496e7075741a272e656f6c796d702e747970657772697465722e557064617465467261676d656e744f7574707574225882e30a1d8ae30a19747970657772697465723a667261676d656e743a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e49302221a202f636f6e74656e742f667261676d656e74732f7b667261676d656e745f69647d12bb010a0e44656c657465467261676d656e7412262e656f6c796d702e747970657772697465722e44656c657465467261676d656e74496e7075741a272e656f6c796d702e747970657772697465722e44656c657465467261676d656e744f7574707574225882e30a1d8ae30a19747970657772697465723a667261676d656e743a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e49302222a202f636f6e74656e742f667261676d656e74732f7b667261676d656e745f69647d12a2010a0c44657363726962655061746812242e656f6c796d702e747970657772697465722e446573637269626550617468496e7075741a252e656f6c796d702e747970657772697465722e4465736372696265506174684f7574707574224582e30a1c8ae30a18747970657772697465723a667261676d656e743a72656164eae20a0cf5e20a0000a041f8e20af40382d3e493020f120d2f636f6e74656e742f70617468129a010a094c697374506174687312212e656f6c796d702e747970657772697465722e4c6973745061746873496e7075741a222e656f6c796d702e747970657772697465722e4c69737450617468734f7574707574224682e30a1c8ae30a18747970657772697465723a667261676d656e743a72656164eae20a0cf5e20a0000a041f8e20af40382d3e4930210120e2f636f6e74656e742f706174687312a2010a0b4c697374506172656e747312232e656f6c796d702e747970657772697465722e4c697374506172656e7473496e7075741a242e656f6c796d702e747970657772697465722e4c697374506172656e74734f7574707574224882e30a1c8ae30a18747970657772697465723a667261676d656e743a72656164eae20a0cf5e20a0000a041f8e20af40382d3e493021212102f636f6e74656e742f706172656e74731296010a0b55706c6f6164417373657412232e656f6c796d702e747970657772697465722e55706c6f61644173736574496e7075741a242e656f6c796d702e747970657772697465722e55706c6f616441737365744f7574707574223c82e30a1a8ae30a16747970657772697465723a61737365743a7772697465eae20a0bf5e20a00000040f8e20a6482d3e493020922072f61737365747342375a356769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f747970657772697465723b74797065777269746572620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

