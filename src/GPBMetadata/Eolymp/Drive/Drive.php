<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/drive/drive.proto

namespace GPBMetadata\Eolymp\Drive;

class Drive
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
        \GPBMetadata\Eolymp\Drive\File::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac3180a18656f6c796d702f64726976652f64726976652e70726f746f120c656f6c796d702e64726976651a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a17656f6c796d702f64726976652f66696c652e70726f746f1a21656f6c796d702f77656c6c6b6e6f776e2f65787072657373696f6e2e70726f746f22240a11446573637269626546696c65496e707574120f0a0766696c655f696418012001280922360a12446573637269626546696c654f757470757412200a0466696c6518012001280b32122e656f6c796d702e64726976652e46696c6522d2030a0e4c69737446696c6573496e707574120e0a066f6666736574180a20012805120c0a0473697a65180b2001280512340a0766696c7465727318282001280b32232e656f6c796d702e64726976652e4c69737446696c6573496e7075742e46696c7465721aeb020a0646696c746572122a0a02696418022003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412300a047061746818032003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e67122e0a046861736818042003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e456e756d122d0a0473697a6518052003280b321f2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e496e74122e0a047479706518062003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e456e756d12390a0a637265617465645f617418072003280b32252e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e54696d657374616d7012390a0a757064617465645f617418082003280b32252e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e54696d657374616d7022430a0f4c69737446696c65734f7574707574120d0a05746f74616c18012001280512210a056974656d7318022003280b32122e656f6c796d702e64726976652e46696c6522d6010a0f55706c6f616446696c65496e707574120c0a0470617468180120012809120c0a047479706518022001280912230a0361636c18032001280e32162e656f6c796d702e64726976652e46696c652e41636c12410a0a61747472696275746573180a2003280b322d2e656f6c796d702e64726976652e55706c6f616446696c65496e7075742e41747472696275746573456e747279120c0a046461746118642001280c1a310a0f41747472696275746573456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a02380122480a1055706c6f616446696c654f7574707574120f0a0766696c655f696418012001280912100a0866696c655f75726c18022001280912110a0966696c655f6861736818032001280922440a0f55706461746546696c65496e707574120f0a0766696c655f696418012001280912200a0466696c6518022001280b32122e656f6c796d702e64726976652e46696c6522120a1055706461746546696c654f757470757422220a0f44656c65746546696c65496e707574120f0a0766696c655f696418012001280922120a1044656c65746546696c654f757470757422dc010a1953746172744d756c74697061727455706c6f6164496e707574120c0a0470617468180120012809120c0a047479706518022001280912230a0361636c18032001280e32162e656f6c796d702e64726976652e46696c652e41636c124b0a0a61747472696275746573180a2003280b32372e656f6c796d702e64726976652e53746172744d756c74697061727455706c6f6164496e7075742e41747472696275746573456e7472791a310a0f41747472696275746573456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a023801222f0a1a53746172744d756c74697061727455706c6f61644f757470757412110a0975706c6f61645f696418012001280922470a0f55706c6f616450617274496e70757412110a0975706c6f61645f696418012001280912130a0b706172745f6e756d62657218022001280d120c0a0464617461180a2001280c22200a1055706c6f6164506172744f7574707574120c0a046574616718012001280922ae010a1c436f6d706c6574654d756c74697061727455706c6f6164496e70757412110a0975706c6f61645f6964180120012809123e0a057061727473180a2003280b322f2e656f6c796d702e64726976652e436f6d706c6574654d756c74697061727455706c6f6164496e7075742e506172741a3b0a0450617274120e0a066e756d62657218012001280d120c0a046574616718022001280912150a0d636865636b73756d5f73686131180a2001280922550a1d436f6d706c6574654d756c74697061727455706c6f61644f7574707574120f0a0766696c655f696418012001280912100a0866696c655f75726c18022001280912110a0966696c655f6861736818032001280932b1090a0544726976651282010a0a55706c6f616446696c65121d2e656f6c796d702e64726976652e55706c6f616446696c65496e7075741a1e2e656f6c796d702e64726976652e55706c6f616446696c654f7574707574223582e30a148ae30a1064726976653a66696c653a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e493020822062f66696c65731292010a0c446573637269626546696c65121f2e656f6c796d702e64726976652e446573637269626546696c65496e7075741a202e656f6c796d702e64726976652e446573637269626546696c654f7574707574223f82e30a138ae30a0f64726976653a66696c653a72656164eae20a0cf5e20a0000a041f8e20af40382d3e493021212102f66696c65732f7b66696c655f69647d127e0a094c69737446696c6573121c2e656f6c796d702e64726976652e4c69737446696c6573496e7075741a1d2e656f6c796d702e64726976652e4c69737446696c65734f7574707574223482e30a138ae30a0f64726976653a66696c653a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493020812062f66696c6573128c010a0a55706461746546696c65121d2e656f6c796d702e64726976652e55706461746546696c65496e7075741a1e2e656f6c796d702e64726976652e55706461746546696c654f7574707574223f82e30a148ae30a1064726976653a66696c653a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e49302121a102f66696c65732f7b66696c655f69647d128c010a0a44656c65746546696c65121d2e656f6c796d702e64726976652e44656c65746546696c65496e7075741a1e2e656f6c796d702e64726976652e44656c65746546696c654f7574707574223f82e30a148ae30a1064726976653a66696c653a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e49302122a102f66696c65732f7b66696c655f69647d12a2010a1453746172744d756c74697061727455706c6f616412272e656f6c796d702e64726976652e53746172744d756c74697061727455706c6f6164496e7075741a282e656f6c796d702e64726976652e53746172744d756c74697061727455706c6f61644f7574707574223782e30a148ae30a1064726976653a66696c653a7772697465eae20a0bf5e20a00002041f8e20a6482d3e493020a22082f75706c6f6164731290010a0a55706c6f616450617274121d2e656f6c796d702e64726976652e55706c6f616450617274496e7075741a1e2e656f6c796d702e64726976652e55706c6f6164506172744f7574707574224382e30a148ae30a1064726976653a66696c653a7772697465eae20a0bf5e20a00002041f8e20a6482d3e493021622142f75706c6f6164732f7b75706c6f61645f69647d12b7010a17436f6d706c6574654d756c74697061727455706c6f6164122a2e656f6c796d702e64726976652e436f6d706c6574654d756c74697061727455706c6f6164496e7075741a2b2e656f6c796d702e64726976652e436f6d706c6574654d756c74697061727455706c6f61644f7574707574224382e30a148ae30a1064726976653a66696c653a7772697465eae20a0bf5e20a00002041f8e20a6482d3e49302161a142f75706c6f6164732f7b75706c6f61645f69647d422d5a2b6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f64726976653b6472697665620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

