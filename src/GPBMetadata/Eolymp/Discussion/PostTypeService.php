<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/post_type_service.proto

namespace GPBMetadata\Eolymp\Discussion;

class PostTypeService
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
        \GPBMetadata\Eolymp\Discussion\PostType::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aad1b0a29656f6c796d702f64697363757373696f6e2f706f73745f747970655f736572766963652e70726f746f1211656f6c796d702e64697363757373696f6e1a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a21656f6c796d702f64697363757373696f6e2f706f73745f747970652e70726f746f22380a154465736372696265506f737454797065496e707574120f0a07747970655f6964180120012809120e0a066c6f63616c65180a2001280922430a164465736372696265506f7374547970654f757470757412290a047479706518012001280b321b2e656f6c796d702e64697363757373696f6e2e506f73745479706522320a124c697374506f73745479706573496e707574120e0a066f6666736574180a20012805120c0a0473697a65180b2001280522600a134c697374506f737454797065734f7574707574120d0a05746f74616c180120012805122a0a056974656d7318022003280b321b2e656f6c796d702e64697363757373696f6e2e506f737454797065120e0a066c6f63616c65180a2001280922400a13437265617465506f737454797065496e70757412290a047479706518012001280b321b2e656f6c796d702e64697363757373696f6e2e506f73745479706522270a14437265617465506f7374547970654f7574707574120f0a07747970655f696418012001280922510a13557064617465506f737454797065496e707574120f0a07747970655f696418012001280912290a047479706518022001280b321b2e656f6c796d702e64697363757373696f6e2e506f73745479706522160a14557064617465506f7374547970654f757470757422260a1344656c657465506f737454797065496e707574120f0a07747970655f696418012001280922160a1444656c657465506f7374547970654f757470757422430a1c4465736372696265506f73745479706556617269616e74496e707574120f0a07747970655f696418012001280912120a0a76617269616e745f6964180220012809224d0a1d4465736372696265506f73745479706556617269616e744f7574707574122c0a0776617269616e7418012001280b321b2e656f6c796d702e64697363757373696f6e2e506f737454797065224a0a194c697374506f73745479706556617269616e7473496e707574120f0a07747970655f6964180220012809120e0a066f6666736574180a20012805120c0a0473697a65180b20012805225f0a1a4c697374506f73745479706556617269616e74734f7574707574120d0a05746f74616c18012001280512320a056974656d7318022003280b32232e656f6c796d702e64697363757373696f6e2e506f7374547970652e56617269616e7422630a1a437265617465506f73745479706556617269616e74496e707574120f0a07747970655f696418012001280912340a0776617269616e7418022001280b32232e656f6c796d702e64697363757373696f6e2e506f7374547970652e56617269616e7422310a1b437265617465506f73745479706556617269616e744f757470757412120a0a76617269616e745f696418012001280922770a1a557064617465506f73745479706556617269616e74496e707574120f0a07747970655f696418012001280912120a0a76617269616e745f696418022001280912340a0776617269616e7418032001280b32232e656f6c796d702e64697363757373696f6e2e506f7374547970652e56617269616e74221d0a1b557064617465506f73745479706556617269616e744f757470757422410a1a44656c657465506f73745479706556617269616e74496e707574120f0a07747970655f696418012001280912120a0a76617269616e745f6964180220012809221d0a1b44656c657465506f73745479706556617269616e744f757470757432c60f0a0f506f7374547970655365727669636512b7010a104465736372696265506f73745479706512282e656f6c796d702e64697363757373696f6e2e4465736372696265506f737454797065496e7075741a292e656f6c796d702e64697363757373696f6e2e4465736372696265506f7374547970654f7574707574224e82e30a1d8ae30a1964697363757373696f6e3a706f73742d747970653a72656164eae20a0cf5e20a0000a041f8e20af40382d3e493021712152f706f73742d74797065732f7b747970655f69647d12a3010a0d4c697374506f7374547970657312252e656f6c796d702e64697363757373696f6e2e4c697374506f73745479706573496e7075741a262e656f6c796d702e64697363757373696f6e2e4c697374506f737454797065734f7574707574224382e30a1d8ae30a1964697363757373696f6e3a706f73742d747970653a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493020d120b2f706f73742d747970657312a7010a0e437265617465506f73745479706512262e656f6c796d702e64697363757373696f6e2e437265617465506f737454797065496e7075741a272e656f6c796d702e64697363757373696f6e2e437265617465506f7374547970654f7574707574224482e30a1e8ae30a1a64697363757373696f6e3a706f73742d747970653a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e493020d220b2f706f73742d747970657312b1010a0e557064617465506f73745479706512262e656f6c796d702e64697363757373696f6e2e557064617465506f737454797065496e7075741a272e656f6c796d702e64697363757373696f6e2e557064617465506f7374547970654f7574707574224e82e30a1e8ae30a1a64697363757373696f6e3a706f73742d747970653a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e49302171a152f706f73742d74797065732f7b747970655f69647d12b1010a0e44656c657465506f73745479706512262e656f6c796d702e64697363757373696f6e2e44656c657465506f737454797065496e7075741a272e656f6c796d702e64697363757373696f6e2e44656c657465506f7374547970654f7574707574224e82e30a1e8ae30a1a64697363757373696f6e3a706f73742d747970653a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e49302172a152f706f73742d74797065732f7b747970655f69647d12e2010a174465736372696265506f73745479706556617269616e74122f2e656f6c796d702e64697363757373696f6e2e4465736372696265506f73745479706556617269616e74496e7075741a302e656f6c796d702e64697363757373696f6e2e4465736372696265506f73745479706556617269616e744f7574707574226482e30a1d8ae30a1964697363757373696f6e3a706f73742d747970653a72656164eae20a0cf5e20a0000a041f8e20af40382d3e493022d122b2f706f73742d74797065732f7b747970655f69647d2f76617269616e74732f7b76617269616e745f69647d12cb010a144c697374506f73745479706556617269616e7473122c2e656f6c796d702e64697363757373696f6e2e4c697374506f73745479706556617269616e7473496e7075741a2d2e656f6c796d702e64697363757373696f6e2e4c697374506f73745479706556617269616e74734f7574707574225682e30a1d8ae30a1964697363757373696f6e3a706f73742d747970653a72656164eae20a0bf5e20a0000a041f8e20a6482d3e4930220121e2f706f73742d74797065732f7b747970655f69647d2f76617269616e747312cf010a15437265617465506f73745479706556617269616e74122d2e656f6c796d702e64697363757373696f6e2e437265617465506f73745479706556617269616e74496e7075741a2e2e656f6c796d702e64697363757373696f6e2e437265617465506f73745479706556617269616e744f7574707574225782e30a1e8ae30a1a64697363757373696f6e3a706f73742d747970653a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e4930220221e2f706f73742d74797065732f7b747970655f69647d2f76617269616e747312dc010a15557064617465506f73745479706556617269616e74122d2e656f6c796d702e64697363757373696f6e2e557064617465506f73745479706556617269616e74496e7075741a2e2e656f6c796d702e64697363757373696f6e2e557064617465506f73745479706556617269616e744f7574707574226482e30a1e8ae30a1a64697363757373696f6e3a706f73742d747970653a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e493022d1a2b2f706f73742d74797065732f7b747970655f69647d2f76617269616e74732f7b76617269616e745f69647d12dc010a1544656c657465506f73745479706556617269616e74122d2e656f6c796d702e64697363757373696f6e2e44656c657465506f73745479706556617269616e74496e7075741a2e2e656f6c796d702e64697363757373696f6e2e44656c657465506f73745479706556617269616e744f7574707574226482e30a1e8ae30a1a64697363757373696f6e3a706f73742d747970653a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e493022d2a2b2f706f73742d74797065732f7b747970655f69647d2f76617269616e74732f7b76617269616e745f69647d42375a356769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f64697363757373696f6e3b64697363757373696f6e620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

