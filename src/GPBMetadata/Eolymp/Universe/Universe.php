<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/universe/universe.proto

namespace GPBMetadata\Eolymp\Universe;

class Universe
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Scope::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        \GPBMetadata\Eolymp\Universe\Space::initOnce();
        \GPBMetadata\Eolymp\Universe\Member::initOnce();
        \GPBMetadata\Eolymp\Universe\Permission::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0acd2f0a1e656f6c796d702f756e6976657273652f756e6976657273652e70726f746f120f656f6c796d702e756e6976657273651a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a21656f6c796d702f77656c6c6b6e6f776e2f65787072657373696f6e2e70726f746f1a1b656f6c796d702f756e6976657273652f73706163652e70726f746f1a1c656f6c796d702f756e6976657273652f6d656d6265722e70726f746f1a20656f6c796d702f756e6976657273652f7065726d697373696f6e2e70726f746f22390a104372656174655370616365496e70757412250a05737061636518012001280b32162e656f6c796d702e756e6976657273652e537061636522250a1143726561746553706163654f757470757412100a0873706163655f6964180120012809224b0a105570646174655370616365496e70757412100a0873706163655f696418012001280912250a05737061636518022001280b32162e656f6c796d702e756e6976657273652e537061636522130a1155706461746553706163654f757470757422240a1044656c6574655370616365496e70757412100a0873706163655f696418012001280922130a1144656c65746553706163654f7574707574221f0a104c6f6f6b75705370616365496e707574120b0a036b6579180120012809223a0a114c6f6f6b757053706163654f757470757412250a05737061636518012001280b32162e656f6c796d702e756e6976657273652e537061636522260a1244657363726962655370616365496e70757412100a0873706163655f6964180120012809223c0a13446573637269626553706163654f757470757412250a05737061636518012001280b32162e656f6c796d702e756e6976657273652e537061636522e0020a0f4c697374537061636573496e707574120e0a066f6666736574180a20012805120c0a0473697a65180b2001280512380a0766696c7465727318282001280b32272e656f6c796d702e756e6976657273652e4c697374537061636573496e7075742e46696c7465721af4010a0646696c746572122a0a02696418012003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e4944122b0a036b657918022003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412300a046e616d6518032003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e67122d0a036f776e18042003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e426f6f6c12300a066d656d62657218052003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e426f6f6c22480a104c6973745370616365734f7574707574120d0a05746f74616c18012001280512250a056974656d7318022003280b32162e656f6c796d702e756e6976657273652e537061636522690a144772616e745065726d697373696f6e496e70757412100a0873706163655f6964180120012809122e0a04726f6c6518022001280e32202e656f6c796d702e756e6976657273652e5065726d697373696f6e2e526f6c65120f0a07757365725f696418032001280922170a154772616e745065726d697373696f6e4f7574707574223a0a155265766f6b655065726d697373696f6e496e70757412100a0873706163655f6964180120012809120f0a07757365725f696418032001280922180a165265766f6b655065726d697373696f6e4f7574707574223c0a1744657363726962655065726d697373696f6e496e70757412100a0873706163655f6964180120012809120f0a07757365725f6964180220012809224b0a1844657363726962655065726d697373696f6e4f7574707574122f0a0a7065726d697373696f6e18012001280b321b2e656f6c796d702e756e6976657273652e5065726d697373696f6e222d0a19496e74726f73706563745065726d697373696f6e496e70757412100a0873706163655f6964180120012809224d0a1a496e74726f73706563745065726d697373696f6e4f7574707574122f0a0a7065726d697373696f6e18012001280b321b2e656f6c796d702e756e6976657273652e5065726d697373696f6e229d020a144c6973745065726d697373696f6e73496e70757412100a0873706163655f6964180120012809120e0a066f6666736574180a20012805120c0a0473697a65180b20012805123d0a0766696c7465727318282001280b322c2e656f6c796d702e756e6976657273652e4c6973745065726d697373696f6e73496e7075742e46696c7465721a95010a0646696c746572122a0a02696418012003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e4944122f0a07757365725f696418022003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e4944122e0a04726f6c6518032003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e456e756d22520a154c6973745065726d697373696f6e734f7574707574120d0a05746f74616c180120012805122a0a056974656d7318022003280b321b2e656f6c796d702e756e6976657273652e5065726d697373696f6e224b0a0e4164644d656d626572496e70757412100a0873706163655f696418012001280912270a066d656d62657218022001280b32172e656f6c796d702e756e6976657273652e4d656d62657222240a0f4164644d656d6265724f757470757412110a096d656d6265725f6964180120012809224f0a115570646174654d656d626572496e70757412110a096d656d6265725f696418012001280912270a066d656d62657218022001280b32172e656f6c796d702e756e6976657273652e4d656d62657222140a125570646174654d656d6265724f757470757422260a1152656d6f76654d656d626572496e70757412110a096d656d6265725f696418012001280922140a1252656d6f76654d656d6265724f757470757422280a1344657363726962654d656d626572496e70757412110a096d656d6265725f6964180120012809223f0a1444657363726962654d656d6265724f757470757412270a066d656d62657218012001280b32172e656f6c796d702e756e6976657273652e4d656d62657222290a15496e74726f73706563744d656d626572496e70757412100a0873706163655f696418012001280922410a16496e74726f73706563744d656d6265724f757470757412270a066d656d62657218012001280b32172e656f6c796d702e756e6976657273652e4d656d62657222cb020a104c6973744d656d62657273496e70757412100a0873706163655f6964180120012809120e0a066f6666736574180a20012805120c0a0473697a65180b2001280512390a0766696c7465727318282001280b32282e656f6c796d702e756e6976657273652e4c6973744d656d62657273496e7075742e46696c7465721acb010a0646696c746572122a0a02696418012003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e4944122f0a07757365725f696418022003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412320a0864697361626c656418032003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e426f6f6c12300a046e616d6518042003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e67224a0a114c6973744d656d626572734f7574707574120d0a05746f74616c18012001280512260a056974656d7318022003280b32172e656f6c796d702e756e6976657273652e4d656d62657232c1180a08556e697665727365129c010a0b437265617465537061636512212e656f6c796d702e756e6976657273652e4372656174655370616365496e7075741a222e656f6c796d702e756e6976657273652e43726561746553706163654f7574707574224682e30a188ae30a14756e6976657273653a73706163653a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e493021522102f756e6976657273652f73706163657362012a12a4010a0b557064617465537061636512212e656f6c796d702e756e6976657273652e5570646174655370616365496e7075741a222e656f6c796d702e756e6976657273652e55706461746553706163654f7574707574224e82e30a188ae30a14756e6976657273653a73706163653a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e493021d1a1b2f756e6976657273652f7370616365732f7b73706163655f69647d12a4010a0b44656c657465537061636512212e656f6c796d702e756e6976657273652e44656c6574655370616365496e7075741a222e656f6c796d702e756e6976657273652e44656c65746553706163654f7574707574224e82e30a188ae30a14756e6976657273653a73706163653a7772697465eae20a0bf5e20a00000040f8e20a0a82d3e493021d2a1b2f756e6976657273652f7370616365732f7b73706163655f69647d1290010a0b4c6f6f6b7570537061636512212e656f6c796d702e756e6976657273652e4c6f6f6b75705370616365496e7075741a222e656f6c796d702e756e6976657273652e4c6f6f6b757053706163654f7574707574223aeae20a0bf5e20a00002041f8e20a6482d3e4930225121c2f756e6976657273652f73706163652d6c6f6f6b75702f7b6b65797d6205737061636512b0010a0d4465736372696265537061636512232e656f6c796d702e756e6976657273652e44657363726962655370616365496e7075741a242e656f6c796d702e756e6976657273652e446573637269626553706163654f7574707574225482e30a178ae30a13756e6976657273653a73706163653a72656164eae20a0bf5e20a0000a040f8e20a1482d3e4930224121b2f756e6976657273652f7370616365732f7b73706163655f69647d620573706163651298010a0a4c69737453706163657312202e656f6c796d702e756e6976657273652e4c697374537061636573496e7075741a212e656f6c796d702e756e6976657273652e4c6973745370616365734f7574707574224582e30a178ae30a13756e6976657273653a73706163653a72656164eae20a0bf5e20a0000a040f8e20a1482d3e493021512102f756e6976657273652f73706163657362012a12c9010a0f4772616e745065726d697373696f6e12252e656f6c796d702e756e6976657273652e4772616e745065726d697373696f6e496e7075741a262e656f6c796d702e756e6976657273652e4772616e745065726d697373696f6e4f7574707574226782e30a188ae30a14756e6976657273653a73706163653a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e49302361a312f756e6976657273652f7370616365732f7b73706163655f69647d2f7065726d697373696f6e732f7b757365725f69647d62012a12cc010a105265766f6b655065726d697373696f6e12262e656f6c796d702e756e6976657273652e5265766f6b655065726d697373696f6e496e7075741a272e656f6c796d702e756e6976657273652e5265766f6b655065726d697373696f6e4f7574707574226782e30a188ae30a14756e6976657273653a73706163653a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e49302362a312f756e6976657273652f7370616365732f7b73706163655f69647d2f7065726d697373696f6e732f7b757365725f69647d62012a12da010a1244657363726962655065726d697373696f6e12282e656f6c796d702e756e6976657273652e44657363726962655065726d697373696f6e496e7075741a292e656f6c796d702e756e6976657273652e44657363726962655065726d697373696f6e4f7574707574226f82e30a178ae30a13756e6976657273653a73706163653a72656164eae20a0bf5e20a0000a040f8e20a1482d3e493023f12312f756e6976657273652f7370616365732f7b73706163655f69647d2f7065726d697373696f6e732f7b757365725f69647d620a7065726d697373696f6e12e0010a14496e74726f73706563745065726d697373696f6e122a2e656f6c796d702e756e6976657273652e496e74726f73706563745065726d697373696f6e496e7075741a2b2e656f6c796d702e756e6976657273652e496e74726f73706563745065726d697373696f6e4f7574707574226f82e30a178ae30a13756e6976657273653a73706163653a72656164eae20a0bf5e20a0000a040f8e20a1482d3e493023f12312f756e6976657273652f7370616365732f7b73706163655f69647d2f696e74726f73706563742d7065726d697373696f6e620a7065726d697373696f6e12be010a0f4c6973745065726d697373696f6e7312252e656f6c796d702e756e6976657273652e4c6973745065726d697373696f6e73496e7075741a262e656f6c796d702e756e6976657273652e4c6973745065726d697373696f6e734f7574707574225c82e30a178ae30a13756e6976657273653a73706163653a72656164eae20a0bf5e20a0000a040f8e20a1482d3e493022c12272f756e6976657273652f7370616365732f7b73706163655f69647d2f7065726d697373696f6e7362012a12b3010a094164644d656d626572121f2e656f6c796d702e756e6976657273652e4164644d656d626572496e7075741a202e656f6c796d702e756e6976657273652e4164644d656d6265724f7574707574226382e30a188ae30a14756e6976657273653a73706163653a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e49302321a2d2f756e6976657273652f7370616365732f7b73706163655f69647d2f6d656d626572732f7b757365725f69647d62012a12ac010a0c5570646174654d656d62657212222e656f6c796d702e756e6976657273652e5570646174654d656d626572496e7075741a232e656f6c796d702e756e6976657273652e5570646174654d656d6265724f7574707574225382e30a188ae30a14756e6976657273653a73706163653a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e49302221a1d2f756e6976657273652f6d656d626572732f7b6d656d6265725f69647d62012a12ac010a0c52656d6f76654d656d62657212222e656f6c796d702e756e6976657273652e52656d6f76654d656d626572496e7075741a232e656f6c796d702e756e6976657273652e52656d6f76654d656d6265724f7574707574225382e30a188ae30a14756e6976657273653a73706163653a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e49302222a1d2f756e6976657273652f6d656d626572732f7b6d656d6265725f69647d62012a12b6010a0e44657363726962654d656d62657212242e656f6c796d702e756e6976657273652e44657363726962654d656d626572496e7075741a252e656f6c796d702e756e6976657273652e44657363726962654d656d6265724f7574707574225782e30a178ae30a13756e6976657273653a73706163653a72656164eae20a0bf5e20a0000a040f8e20a1482d3e4930227121d2f756e6976657273652f6d656d626572732f7b6d656d6265725f69647d62066d656d62657212cc010a10496e74726f73706563744d656d62657212262e656f6c796d702e756e6976657273652e496e74726f73706563744d656d626572496e7075741a272e656f6c796d702e756e6976657273652e496e74726f73706563744d656d6265724f7574707574226782e30a178ae30a13756e6976657273653a73706163653a72656164eae20a0bf5e20a0000a040f8e20a1482d3e4930237122d2f756e6976657273652f7370616365732f7b73706163655f69647d2f696e74726f73706563742d6d656d62657262066d656d62657212ae010a0b4c6973744d656d6265727312212e656f6c796d702e756e6976657273652e4c6973744d656d62657273496e7075741a222e656f6c796d702e756e6976657273652e4c6973744d656d626572734f7574707574225882e30a178ae30a13756e6976657273653a73706163653a72656164eae20a0bf5e20a0000a040f8e20a1482d3e493022812232f756e6976657273652f7370616365732f7b73706163655f69647d2f6d656d6265727362012a42395a376769746875622e636f6d2f656f6c796d702f636f6e7472616374732f676f2f656f6c796d702f756e6976657273653b756e697665727365620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

