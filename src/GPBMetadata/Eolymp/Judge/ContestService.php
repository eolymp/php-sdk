<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/contest_service.proto

namespace GPBMetadata\Eolymp\Judge;

class ContestService
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
        \GPBMetadata\Eolymp\Judge\Activity::initOnce();
        \GPBMetadata\Eolymp\Judge\Contest::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0abc290a22656f6c796d702f6a756467652f636f6e746573745f736572766963652e70726f746f120c656f6c796d702e6a756467651a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a1b656f6c796d702f6a756467652f61637469766974792e70726f746f1a1a656f6c796d702f6a756467652f636f6e746573742e70726f746f1a21656f6c796d702f77656c6c6b6e6f776e2f65787072657373696f6e2e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f223c0a12437265617465436f6e74657374496e70757412260a07636f6e7465737418012001280b32152e656f6c796d702e6a756467652e436f6e7465737422290a13437265617465436f6e746573744f757470757412120a0a636f6e746573745f696418012001280922280a1244656c657465436f6e74657374496e70757412120a0a636f6e746573745f696418012001280922150a1344656c657465436f6e746573744f75747075742288030a12557064617465436f6e74657374496e70757412350a05706174636818032003280e32262e656f6c796d702e6a756467652e557064617465436f6e74657374496e7075742e506174636812120a0a636f6e746573745f696418012001280912260a07636f6e7465737418022001280b32152e656f6c796d702e6a756467652e436f6e7465737422fe010a05506174636812070a03414c4c100012080a044e414d451002120d0a095354415254535f41541003120b0a07454e44535f41541004120c0a084455524154494f4e1005120e0a0a5649534942494c495459100612150a114a4f494e5f554e4f4646494349414c4c59100712160a1250415254494349504154494f4e5f4d4f4445100812120a0e46454154555245445f554e54494c1009120a0a06464f524d4154100a120a0a06444f4d41494e100b120d0a085441584f4e4f4d59108c01120e0a0a415050454152414e4345106e12100a0b454e5649524f4e4d454e54108201120b0a075550534f4c56451078120f0a0a53434f5245424f41524410960122150a13557064617465436f6e746573744f75747075742284020a10436f7079436f6e74657374496e70757412120a0a636f6e746573745f696418012001280912380a0a636f70795f73636f706518022003280e32242e656f6c796d702e6a756467652e436f7079436f6e74657374496e7075742e53636f706512110a09636f70795f6e616d6518032001280912390a0f636f70795f7669736962696c69747918042001280e32202e656f6c796d702e6a756467652e436f6e746573742e5669736962696c69747922540a0553636f706512070a03414c4c100012110a0d434f4e46494755524154494f4e1001120c0a0850524f424c454d53100212100a0c5041525449434950414e54531003120f0a0b5045524d495353494f4e531004222c0a11436f7079436f6e746573744f757470757412170a0f636f70795f636f6e746573745f6964180120012809222a0a144465736372696265436f6e74657374496e70757412120a0a636f6e746573745f6964180120012809223f0a154465736372696265436f6e746573744f757470757412260a07636f6e7465737418012001280b32152e656f6c796d702e6a756467652e436f6e7465737422b2070a114c697374436f6e7465737473496e707574120e0a066f6666736574180a20012805120c0a0473697a65180b2001280512370a0766696c7465727318282001280b32262e656f6c796d702e6a756467652e4c697374436f6e7465737473496e7075742e46696c7465721ac5060a0646696c746572120d0a057175657279180920012809122a0a02696418012003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412300a046e616d6518032003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e6712380a097374617274735f617418042003280b32252e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e54696d657374616d7012360a07656e64735f617418052003280b32252e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e54696d657374616d7012300a067075626c696318062003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e426f6f6c12340a0a7669736962696c69747918072003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e456e756d12300a06666f726d617418082003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e456e756d12300a06737461747573180a2003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e456e756d12320a086665617475726564180b2003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e426f6f6c122d0a047965617218642003280b321f2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e496e74122f0a057363616c6518652003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e456e756d12300a0673657269657318662003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e456e756d12330a0a646966666963756c747918672003280b321f2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e496e7412310a07636f756e74727918682003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e456e756d12300a06726567696f6e18692003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e456e756d12300a0463697479186a2003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e6722490a124c697374436f6e74657374734f757470757412240a056974656d7318012003280b32152e656f6c796d702e6a756467652e436f6e74657374120d0a05746f74616c18022001280522260a104f70656e436f6e74657374496e70757412120a0a636f6e746573745f696418012001280922130a114f70656e436f6e746573744f757470757422270a11436c6f7365436f6e74657374496e70757412120a0a636f6e746573745f696418012001280922140a12436c6f7365436f6e746573744f757470757422290a1353757370656e64436f6e74657374496e70757412120a0a636f6e746573745f696418012001280922160a1453757370656e64436f6e746573744f757470757422280a12467265657a65436f6e74657374496e70757412120a0a636f6e746573745f696418012001280922150a13467265657a65436f6e746573744f757470757422280a12526573756d65436f6e74657374496e70757412120a0a636f6e746573745f696418012001280922150a13526573756d65436f6e746573744f757470757422270a115761746368436f6e74657374496e70757412120a0a636f6e746573745f6964180120012809223c0a125761746368436f6e746573744f757470757412260a07636f6e7465737418012001280b32152e656f6c796d702e6a756467652e436f6e7465737422470a134c69737441637469766974696573496e70757412120a0a636f6e746573745f6964180120012809120e0a066f6666736574180a20012805120c0a0473697a65180b20012805224c0a144c697374416374697669746965734f7574707574120d0a05746f74616c18012001280512250a056974656d7318022003280b32162e656f6c796d702e6a756467652e4163746976697479227d0a194465736372696265436f6e746573745573616765496e70757412300a0c706572696f645f737461727418012001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70122e0a0a706572696f645f656e6418022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7022670a1a4465736372696265436f6e7465737455736167654f757470757412160a0e746f74616c5f636f6e746573747318012001280d12170a0f6163746976655f636f6e746573747318022001280d12180a106d6f6e74686c795f636f6e746573747318032001280d32fa100a0e436f6e74657374536572766963651291010a0d437265617465436f6e7465737412202e656f6c796d702e6a756467652e437265617465436f6e74657374496e7075741a212e656f6c796d702e6a756467652e437265617465436f6e746573744f7574707574223b82e30a178ae30a136a756467653a636f6e746573743a7772697465eae20a0bf5e20a0ad7a33df8e20a0582d3e493020b22092f636f6e7465737473129e010a0d44656c657465436f6e7465737412202e656f6c796d702e6a756467652e44656c657465436f6e74657374496e7075741a212e656f6c796d702e6a756467652e44656c657465436f6e746573744f7574707574224882e30a178ae30a136a756467653a636f6e746573743a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e49302182a162f636f6e74657374732f7b636f6e746573745f69647d129e010a0d557064617465436f6e7465737412202e656f6c796d702e6a756467652e557064617465436f6e74657374496e7075741a212e656f6c796d702e6a756467652e557064617465436f6e746573744f7574707574224882e30a178ae30a136a756467653a636f6e746573743a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e49302181a162f636f6e74657374732f7b636f6e746573745f69647d129d010a0b436f7079436f6e74657374121e2e656f6c796d702e6a756467652e436f7079436f6e74657374496e7075741a1f2e656f6c796d702e6a756467652e436f7079436f6e746573744f7574707574224d82e30a178ae30a136a756467653a636f6e746573743a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e493021d221b2f636f6e74657374732f7b636f6e746573745f69647d2f636f70791289010a0f4465736372696265436f6e7465737412222e656f6c796d702e6a756467652e4465736372696265436f6e74657374496e7075741a232e656f6c796d702e6a756467652e4465736372696265436f6e746573744f7574707574222deae20a0bf5e20a00002041f8e20a3282d3e493021812162f636f6e74657374732f7b636f6e746573745f69647d12730a0c4c697374436f6e7465737473121f2e656f6c796d702e6a756467652e4c697374436f6e7465737473496e7075741a202e656f6c796d702e6a756467652e4c697374436f6e74657374734f75747075742220eae20a0bf5e20a0000803ff8e20a0a82d3e493020b12092f636f6e7465737473129d010a0b4f70656e436f6e74657374121e2e656f6c796d702e6a756467652e4f70656e436f6e74657374496e7075741a1f2e656f6c796d702e6a756467652e4f70656e436f6e746573744f7574707574224d82e30a178ae30a136a756467653a636f6e746573743a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e493021d221b2f636f6e74657374732f7b636f6e746573745f69647d2f6f70656e12a1010a0c436c6f7365436f6e74657374121f2e656f6c796d702e6a756467652e436c6f7365436f6e74657374496e7075741a202e656f6c796d702e6a756467652e436c6f7365436f6e746573744f7574707574224e82e30a178ae30a136a756467653a636f6e746573743a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e493021e221c2f636f6e74657374732f7b636f6e746573745f69647d2f636c6f736512a9010a0e53757370656e64436f6e7465737412212e656f6c796d702e6a756467652e53757370656e64436f6e74657374496e7075741a222e656f6c796d702e6a756467652e53757370656e64436f6e746573744f7574707574225082e30a178ae30a136a756467653a636f6e746573743a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e4930220221e2f636f6e74657374732f7b636f6e746573745f69647d2f73757370656e6412a5010a0d467265657a65436f6e7465737412202e656f6c796d702e6a756467652e467265657a65436f6e74657374496e7075741a212e656f6c796d702e6a756467652e467265657a65436f6e746573744f7574707574224f82e30a178ae30a136a756467653a636f6e746573743a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e493021f221d2f636f6e74657374732f7b636f6e746573745f69647d2f667265657a6512a5010a0d526573756d65436f6e7465737412202e656f6c796d702e6a756467652e526573756d65436f6e74657374496e7075741a212e656f6c796d702e6a756467652e526573756d65436f6e746573744f7574707574224f82e30a178ae30a136a756467653a636f6e746573743a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e493021f221d2f636f6e74657374732f7b636f6e746573745f69647d2f726573756d65126f0a0c5761746368436f6e74657374121f2e656f6c796d702e6a756467652e5761746368436f6e74657374496e7075741a202e656f6c796d702e6a756467652e5761746368436f6e746573744f7574707574221a82e30a168ae30a126a756467653a636f6e746573743a72656164300112ab010a0e4c6973744163746976697469657312212e656f6c796d702e6a756467652e4c69737441637469766974696573496e7075741a222e656f6c796d702e6a756467652e4c697374416374697669746965734f7574707574225282e30a168ae30a126a756467653a636f6e746573743a72656164eae20a0bf5e20a0000a040f8e20a1482d3e493022312212f636f6e74657374732f7b636f6e746573745f69647d2f616374697669746965731291010a144465736372696265436f6e74657374557361676512272e656f6c796d702e6a756467652e4465736372696265436f6e746573745573616765496e7075741a282e656f6c796d702e6a756467652e4465736372696265436f6e7465737455736167654f75747075742226eae20a0bf5e20a0000a040f8e20a1482d3e4930211120f2f75736167652f636f6e7465737473422d5a2b6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f6a756467653b6a75646765620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

