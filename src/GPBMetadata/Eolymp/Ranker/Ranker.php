<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/ranker/ranker.proto

namespace GPBMetadata\Eolymp\Ranker;

class Ranker
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
        \GPBMetadata\Eolymp\Annotations\Service::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        \GPBMetadata\Eolymp\Ranker\Activity::initOnce();
        \GPBMetadata\Eolymp\Ranker\Scoreboard::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a8e260a1a656f6c796d702f72616e6b65722f72616e6b65722e70726f746f120d656f6c796d702e72616e6b65721a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a20656f6c796d702f616e6e6f746174696f6e732f736572766963652e70726f746f1a21656f6c796d702f77656c6c6b6e6f776e2f65787072657373696f6e2e70726f746f1a1c656f6c796d702f72616e6b65722f61637469766974792e70726f746f1a1e656f6c796d702f72616e6b65722f73636f7265626f6172642e70726f746f22460a1543726561746553636f7265626f617264496e707574122d0a0a73636f7265626f61726418012001280b32192e656f6c796d702e72616e6b65722e53636f7265626f617264222f0a1643726561746553636f7265626f6172644f757470757412150a0d73636f7265626f6172645f6964180120012809225d0a1555706461746553636f7265626f617264496e70757412150a0d73636f7265626f6172645f6964180120012809122d0a0a73636f7265626f61726418022001280b32192e656f6c796d702e72616e6b65722e53636f7265626f61726422180a1655706461746553636f7265626f6172644f7574707574222f0a1652656275696c6453636f7265626f617264496e70757412150a0d73636f7265626f6172645f6964180120012809222e0a1752656275696c6453636f7265626f6172644f757470757412130a0b61637469766974795f6964180120012809222e0a1544656c65746553636f7265626f617264496e70757412150a0d73636f7265626f6172645f696418012001280922180a1644656c65746553636f7265626f6172644f757470757422480a17446573637269626553636f7265626f617264496e70757412150a0d73636f7265626f6172645f696418012001280912160a0e73636f7265626f6172645f6b657918022001280922490a18446573637269626553636f7265626f6172644f7574707574122d0a0a73636f7265626f61726418012001280b32192e656f6c796d702e72616e6b65722e53636f7265626f61726422a7010a144c69737453636f7265626f61726473496e707574120e0a066f6666736574180a20012805120c0a0473697a65180b20012805123b0a0766696c7465727318282001280b322a2e656f6c796d702e72616e6b65722e4c69737453636f7265626f61726473496e7075742e46696c7465721a340a0646696c746572122a0a02696418012003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494422500a154c69737453636f7265626f617264734f7574707574120d0a05746f74616c18012001280512280a056974656d7318022003280b32192e656f6c796d702e72616e6b65722e53636f7265626f61726422440a1a446573637269626553636f7265626f617264526f77496e70757412150a0d73636f7265626f6172645f6964180120012809120f0a07757365725f696418022001280922490a1b446573637269626553636f7265626f617264526f774f7574707574122a0a03726f7718012001280b321d2e656f6c796d702e72616e6b65722e53636f7265626f6172642e526f7722c9010a174c69737453636f7265626f617264526f7773496e70757412150a0d73636f7265626f6172645f6964180120012809120e0a066f6666736574180a20012805120c0a0473697a65180b20012805123e0a0766696c7465727318282001280b322d2e656f6c796d702e72616e6b65722e4c69737453636f7265626f617264526f7773496e7075742e46696c7465721a390a0646696c746572122f0a07757365725f696418012003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494422570a184c69737453636f7265626f617264526f77734f7574707574120d0a05746f74616c180120012805122c0a056974656d7318022003280b321d2e656f6c796d702e72616e6b65722e53636f7265626f6172642e526f7722630a1841646453636f7265626f617264436f6c756d6e496e70757412150a0d73636f7265626f6172645f696418012001280912300a06636f6c756d6e18022001280b32202e656f6c796d702e72616e6b65722e53636f7265626f6172642e436f6c756d6e222e0a1941646453636f7265626f617264436f6c756d6e4f757470757412110a09636f6c756d6e5f696418012001280922300a1b44656c65746553636f7265626f617264436f6c756d6e496e70757412110a09636f6c756d6e5f6964180120012809221e0a1c44656c65746553636f7265626f617264436f6c756d6e4f757470757422320a1d446573637269626553636f7265626f617264436f6c756d6e496e70757412110a09636f6c756d6e5f696418012001280922520a1e446573637269626553636f7265626f617264436f6c756d6e4f757470757412300a06636f6c756d6e18012001280b32202e656f6c796d702e72616e6b65722e53636f7265626f6172642e436f6c756d6e22330a1a4c69737453636f7265626f617264436f6c756d6e73496e70757412150a0d73636f7265626f6172645f6964180120012809225d0a1b4c69737453636f7265626f617264436f6c756d6e734f7574707574120d0a05746f74616c180120012805122f0a056974656d7318022003280b32202e656f6c796d702e72616e6b65722e53636f7265626f6172642e436f6c756d6e224a0a134c69737441637469766974696573496e70757412150a0d73636f7265626f6172645f6964180120012809120e0a066f6666736574180a20012805120c0a0473697a65180b20012805224d0a144c697374416374697669746965734f7574707574120d0a05746f74616c18012001280512260a056974656d7318022003280b32172e656f6c796d702e72616e6b65722e416374697669747932d8140a0652616e6b657212ad010a1043726561746553636f7265626f61726412242e656f6c796d702e72616e6b65722e43726561746553636f7265626f617264496e7075741a252e656f6c796d702e72616e6b65722e43726561746553636f7265626f6172644f7574707574224c82e30a1b8ae30a1772616e6b65723a73636f7265626f6172643a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e493021822132f72616e6b65722f73636f7265626f6172647362012a12ba010a1055706461746553636f7265626f61726412242e656f6c796d702e72616e6b65722e55706461746553636f7265626f617264496e7075741a252e656f6c796d702e72616e6b65722e55706461746553636f7265626f6172644f7574707574225982e30a1b8ae30a1772616e6b65723a73636f7265626f6172643a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e49302251a232f72616e6b65722f73636f7265626f617264732f7b73636f7265626f6172645f69647d12c5010a1152656275696c6453636f7265626f61726412252e656f6c796d702e72616e6b65722e52656275696c6453636f7265626f617264496e7075741a262e656f6c796d702e72616e6b65722e52656275696c6453636f7265626f6172644f7574707574226182e30a1b8ae30a1772616e6b65723a73636f7265626f6172643a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e493022d222b2f72616e6b65722f73636f7265626f617264732f7b73636f7265626f6172645f69647d2f72656275696c6412ba010a1044656c65746553636f7265626f61726412242e656f6c796d702e72616e6b65722e44656c65746553636f7265626f617264496e7075741a252e656f6c796d702e72616e6b65722e44656c65746553636f7265626f6172644f7574707574225982e30a1b8ae30a1772616e6b65723a73636f7265626f6172643a7772697465eae20a0bf5e20a00000040f8e20a0a82d3e49302252a232f72616e6b65722f73636f7265626f617264732f7b73636f7265626f6172645f69647d1286020a12446573637269626553636f7265626f61726412262e656f6c796d702e72616e6b65722e446573637269626553636f7265626f617264496e7075741a272e656f6c796d702e72616e6b65722e446573637269626553636f7265626f6172644f7574707574229e0182e30a1a8ae30a1672616e6b65723a73636f7265626f6172643a72656164eae20a0bf5e20a0000a040f8e20a1482d3e493026b12232f72616e6b65722f73636f7265626f617264732f7b73636f7265626f6172645f69647d5a38122a2f72616e6b65722f73636f7265626f6172642d6c6f6f6b75702f7b73636f7265626f6172645f6b65797d620a73636f7265626f617264620a73636f7265626f61726412a9010a0f4c69737453636f7265626f6172647312232e656f6c796d702e72616e6b65722e4c69737453636f7265626f61726473496e7075741a242e656f6c796d702e72616e6b65722e4c69737453636f7265626f617264734f7574707574224b82e30a1a8ae30a1672616e6b65723a73636f7265626f6172643a72656164eae20a0bf5e20a0000a040f8e20a1482d3e493021812132f72616e6b65722f73636f7265626f6172647362012a12da010a15446573637269626553636f7265626f617264526f7712292e656f6c796d702e72616e6b65722e446573637269626553636f7265626f617264526f77496e7075741a2a2e656f6c796d702e72616e6b65722e446573637269626553636f7265626f617264526f774f7574707574226a82e30a1a8ae30a1672616e6b65723a73636f7265626f6172643a72656164eae20a0bf5e20a00002041f8e20a6482d3e493023712322f72616e6b65722f73636f7265626f617264732f7b73636f7265626f6172645f69647d2f726f77732f7b757365725f69647d62012a12c7010a124c69737453636f7265626f617264526f777312262e656f6c796d702e72616e6b65722e4c69737453636f7265626f617264526f7773496e7075741a272e656f6c796d702e72616e6b65722e4c69737453636f7265626f617264526f77734f7574707574226082e30a1a8ae30a1672616e6b65723a73636f7265626f6172643a72656164eae20a0bf5e20a00002041f8e20a6482d3e493022d12282f72616e6b65722f73636f7265626f617264732f7b73636f7265626f6172645f69647d2f726f777362012a12cb010a1341646453636f7265626f617264436f6c756d6e12272e656f6c796d702e72616e6b65722e41646453636f7265626f617264436f6c756d6e496e7075741a282e656f6c796d702e72616e6b65722e41646453636f7265626f617264436f6c756d6e4f7574707574226182e30a1b8ae30a1772616e6b65723a73636f7265626f6172643a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e493022d222b2f72616e6b65722f73636f7265626f617264732f7b73636f7265626f6172645f69647d2f636f6c756d6e7312c4010a1644656c65746553636f7265626f617264436f6c756d6e122a2e656f6c796d702e72616e6b65722e44656c65746553636f7265626f617264436f6c756d6e496e7075741a2b2e656f6c796d702e72616e6b65722e44656c65746553636f7265626f617264436f6c756d6e4f7574707574225182e30a1b8ae30a1772616e6b65723a73636f7265626f6172643a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e493021d2a1b2f72616e6b65722f636f6c756d6e732f7b636f6c756d6e5f69647d12cc010a18446573637269626553636f7265626f617264436f6c756d6e122c2e656f6c796d702e72616e6b65722e446573637269626553636f7265626f617264436f6c756d6e496e7075741a2d2e656f6c796d702e72616e6b65722e446573637269626553636f7265626f617264436f6c756d6e4f7574707574225382e30a1a8ae30a1672616e6b65723a73636f7265626f6172643a72656164eae20a0bf5e20a00002041f8e20a6482d3e4930220121b2f72616e6b65722f636f6c756d6e732f7b636f6c756d6e5f69647d62012a12d3010a154c69737453636f7265626f617264436f6c756d6e7312292e656f6c796d702e72616e6b65722e4c69737453636f7265626f617264436f6c756d6e73496e7075741a2a2e656f6c796d702e72616e6b65722e4c69737453636f7265626f617264436f6c756d6e734f7574707574226382e30a1a8ae30a1672616e6b65723a73636f7265626f6172643a72656164eae20a0bf5e20a00002041f8e20a6482d3e4930230122b2f72616e6b65722f73636f7265626f617264732f7b73636f7265626f6172645f69647d2f636f6c756d6e7362012a12bd010a0e4c6973744163746976697469657312222e656f6c796d702e72616e6b65722e4c69737441637469766974696573496e7075741a232e656f6c796d702e72616e6b65722e4c697374416374697669746965734f7574707574226282e30a168ae30a126a756467653a636f6e746573743a72656164eae20a0bf5e20a0000a040f8e20a1482d3e4930233122e2f72616e6b65722f73636f7265626f617264732f7b73636f7265626f6172645f69647d2f6163746976697469657362012a1a06b2e30a02080142355a336769746875622e636f6d2f656f6c796d702f636f6e7472616374732f676f2f656f6c796d702f72616e6b65723b72616e6b6572620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

