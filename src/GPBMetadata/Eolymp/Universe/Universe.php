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
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Annotations\Scope::initOnce();
        \GPBMetadata\Eolymp\Universe\Permission::initOnce();
        \GPBMetadata\Eolymp\Universe\Space::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af9220a1e656f6c796d702f756e6976657273652f756e6976657273652e70726f746f120f656f6c796d702e756e6976657273651a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a20656f6c796d702f756e6976657273652f7065726d697373696f6e2e70726f746f1a1b656f6c796d702f756e6976657273652f73706163652e70726f746f1a21656f6c796d702f77656c6c6b6e6f776e2f65787072657373696f6e2e70726f746f22390a104372656174655370616365496e70757412250a05737061636518012001280b32162e656f6c796d702e756e6976657273652e537061636522250a1143726561746553706163654f757470757412100a0873706163655f696418012001280922f6010a105570646174655370616365496e70757412360a05706174636818032003280e32272e656f6c796d702e756e6976657273652e5570646174655370616365496e7075742e506174636812100a0873706163655f696418012001280912250a05737061636518022001280b32162e656f6c796d702e756e6976657273652e537061636522710a05506174636812070a03414c4c100012070a034b4559100112080a044e414d45100212090a05494d414745100312080a04545950451004120e0a0a5649534942494c4954591005120f0a0b555345525f434f4e464947106412160a11415050454152414e43455f434f4e46494710c80122130a1155706461746553706163654f757470757422240a1044656c6574655370616365496e70757412100a0873706163655f696418012001280922130a1144656c65746553706163654f7574707574221f0a104c6f6f6b75705370616365496e707574120b0a036b6579180120012809223a0a114c6f6f6b757053706163654f757470757412250a05737061636518012001280b32162e656f6c796d702e756e6976657273652e537061636522260a1244657363726962655370616365496e70757412100a0873706163655f6964180120012809223c0a13446573637269626553706163654f757470757412250a05737061636518012001280b32162e656f6c796d702e756e6976657273652e537061636522260a12446573637269626551756f7461496e70757412100a0873706163655f696418012001280922420a13446573637269626551756f74614f7574707574122b0a0571756f746118012001280b321c2e656f6c796d702e756e6976657273652e53706163652e51756f746122510a1055706461746551756f7461496e70757412100a0873706163655f6964180120012809122b0a0571756f746118022001280b321c2e656f6c796d702e756e6976657273652e53706163652e51756f746122130a1155706461746551756f74614f757470757422bd020a0f4c697374537061636573496e707574120e0a066f6666736574180a20012805120c0a0473697a65180b2001280512380a0766696c7465727318282001280b32272e656f6c796d702e756e6976657273652e4c697374537061636573496e7075742e46696c7465721ad1010a0646696c746572120d0a057175657279186420012809122a0a02696418012003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e4944122b0a036b657918022003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412300a046e616d6518032003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e67122d0a036f776e18042003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e426f6f6c22480a104c6973745370616365734f7574707574120d0a05746f74616c18012001280512250a056974656d7318022003280b32162e656f6c796d702e756e6976657273652e537061636522690a144772616e745065726d697373696f6e496e70757412100a0873706163655f6964180120012809122e0a04726f6c6518022001280e32202e656f6c796d702e756e6976657273652e5065726d697373696f6e2e526f6c65120f0a07757365725f696418032001280922170a154772616e745065726d697373696f6e4f7574707574223a0a155265766f6b655065726d697373696f6e496e70757412100a0873706163655f6964180120012809120f0a07757365725f696418032001280922180a165265766f6b655065726d697373696f6e4f7574707574223c0a1744657363726962655065726d697373696f6e496e70757412100a0873706163655f6964180120012809120f0a07757365725f6964180220012809224b0a1844657363726962655065726d697373696f6e4f7574707574122f0a0a7065726d697373696f6e18012001280b321b2e656f6c796d702e756e6976657273652e5065726d697373696f6e222d0a19496e74726f73706563745065726d697373696f6e496e70757412100a0873706163655f6964180120012809224d0a1a496e74726f73706563745065726d697373696f6e4f7574707574122f0a0a7065726d697373696f6e18012001280b321b2e656f6c796d702e756e6976657273652e5065726d697373696f6e229d020a144c6973745065726d697373696f6e73496e70757412100a0873706163655f6964180120012809120e0a066f6666736574180a20012805120c0a0473697a65180b20012805123d0a0766696c7465727318282001280b322c2e656f6c796d702e756e6976657273652e4c6973745065726d697373696f6e73496e7075742e46696c7465721a95010a0646696c746572122a0a02696418012003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e4944122f0a07757365725f696418022003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e4944122e0a04726f6c6518032003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e456e756d22520a154c6973745065726d697373696f6e734f7574707574120d0a05746f74616c180120012805122a0a056974656d7318022003280b321b2e656f6c796d702e756e6976657273652e5065726d697373696f6e32bf100a08556e6976657273651283010a0b4c6f6f6b7570537061636512212e656f6c796d702e756e6976657273652e4c6f6f6b75705370616365496e7075741a222e656f6c796d702e756e6976657273652e4c6f6f6b757053706163654f7574707574222deae20a0bf5e20a00002041f8e20a6482d3e493021812162f7370616365732f5f5f6c6f6f6b75702f7b6b65797d1290010a0b437265617465537061636512212e656f6c796d702e756e6976657273652e4372656174655370616365496e7075741a222e656f6c796d702e756e6976657273652e43726561746553706163654f7574707574223a82e30a188ae30a14756e6976657273653a73706163653a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e493020922072f737061636573129b010a0b557064617465537061636512212e656f6c796d702e756e6976657273652e5570646174655370616365496e7075741a222e656f6c796d702e756e6976657273652e55706461746553706163654f7574707574224582e30a188ae30a14756e6976657273653a73706163653a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e49302141a122f7370616365732f7b73706163655f69647d129b010a0b44656c657465537061636512212e656f6c796d702e756e6976657273652e44656c6574655370616365496e7075741a222e656f6c796d702e756e6976657273652e44656c65746553706163654f7574707574224582e30a188ae30a14756e6976657273653a73706163653a7772697465eae20a0bf5e20a00000040f8e20a0a82d3e49302142a122f7370616365732f7b73706163655f69647d1285010a0d4465736372696265537061636512232e656f6c796d702e756e6976657273652e44657363726962655370616365496e7075741a242e656f6c796d702e756e6976657273652e446573637269626553706163654f75747075742229eae20a0bf5e20a00002041f8e20a6482d3e493021412122f7370616365732f7b73706163655f69647d128b010a0d446573637269626551756f746112232e656f6c796d702e756e6976657273652e446573637269626551756f7461496e7075741a242e656f6c796d702e756e6976657273652e446573637269626551756f74614f7574707574222feae20a0bf5e20a00002041f8e20a6482d3e493021a12182f7370616365732f7b73706163655f69647d2f71756f74611285010a0b55706461746551756f746112212e656f6c796d702e756e6976657273652e55706461746551756f7461496e7075741a222e656f6c796d702e756e6976657273652e55706461746551756f74614f7574707574222feae20a0bf5e20a00002041f8e20a6482d3e493021a1a182f7370616365732f7b73706163655f69647d2f71756f7461128c010a0a4c69737453706163657312202e656f6c796d702e756e6976657273652e4c697374537061636573496e7075741a212e656f6c796d702e756e6976657273652e4c6973745370616365734f7574707574223982e30a178ae30a13756e6976657273653a73706163653a72656164eae20a0bf5e20a0000a040f8e20a1482d3e493020912072f73706163657312bd010a0f4772616e745065726d697373696f6e12252e656f6c796d702e756e6976657273652e4772616e745065726d697373696f6e496e7075741a262e656f6c796d702e756e6976657273652e4772616e745065726d697373696f6e4f7574707574225b82e30a188ae30a14756e6976657273653a73706163653a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e493022a1a282f7370616365732f7b73706163655f69647d2f7065726d697373696f6e732f7b757365725f69647d12c0010a105265766f6b655065726d697373696f6e12262e656f6c796d702e756e6976657273652e5265766f6b655065726d697373696f6e496e7075741a272e656f6c796d702e756e6976657273652e5265766f6b655065726d697373696f6e4f7574707574225b82e30a188ae30a14756e6976657273653a73706163653a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e493022a2a282f7370616365732f7b73706163655f69647d2f7065726d697373696f6e732f7b757365725f69647d12c5010a1244657363726962655065726d697373696f6e12282e656f6c796d702e756e6976657273652e44657363726962655065726d697373696f6e496e7075741a292e656f6c796d702e756e6976657273652e44657363726962655065726d697373696f6e4f7574707574225a82e30a178ae30a13756e6976657273653a73706163653a72656164eae20a0bf5e20a0000a040f8e20a1482d3e493022a12282f7370616365732f7b73706163655f69647d2f7065726d697373696f6e732f7b757365725f69647d12b0010a14496e74726f73706563745065726d697373696f6e122a2e656f6c796d702e756e6976657273652e496e74726f73706563745065726d697373696f6e496e7075741a2b2e656f6c796d702e756e6976657273652e496e74726f73706563745065726d697373696f6e4f7574707574223feae20a0bf5e20a00002041f8e20a3282d3e493022a12282f7370616365732f7b73706163655f69647d2f696e74726f73706563742d7065726d697373696f6e12b2010a0f4c6973745065726d697373696f6e7312252e656f6c796d702e756e6976657273652e4c6973745065726d697373696f6e73496e7075741a262e656f6c796d702e756e6976657273652e4c6973745065726d697373696f6e734f7574707574225082e30a178ae30a13756e6976657273653a73706163653a72656164eae20a0bf5e20a0000a040f8e20a1482d3e4930220121e2f7370616365732f7b73706163655f69647d2f7065726d697373696f6e7342335a316769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f756e6976657273653b756e697665727365620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

