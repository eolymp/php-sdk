<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/testing_service.proto

namespace GPBMetadata\Eolymp\Atlas;

class TestingService
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
        \GPBMetadata\Eolymp\Atlas\Atlas::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa8140a22656f6c796d702f61746c61732f74657374696e675f736572766963652e70726f746f120c656f6c796d702e61746c61731a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a18656f6c796d702f61746c61732f61746c61732e70726f746f32de120a0e54657374696e67536572766963651293010a0d557064617465436865636b657212212e656f6c796d702e61746c61732e5570646174655665726966696572496e7075741a222e656f6c796d702e61746c61732e55706461746556657269666965724f7574707574223b82e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a0ad7233ef8e20a0582d3e493020b1a092f76657269666965721299010a0f4465736372696265436865636b657212232e656f6c796d702e61746c61732e44657363726962655665726966696572496e7075741a242e656f6c796d702e61746c61732e446573637269626556657269666965724f7574707574223b82e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a00000040f8e20a0a82d3e493020b12092f7665726966696572129c010a10557064617465496e7465726163746f7212232e656f6c796d702e61746c61732e557064617465496e7465726163746f72496e7075741a242e656f6c796d702e61746c61732e557064617465496e7465726163746f724f7574707574223d82e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a0ad7233ef8e20a0582d3e493020d1a0b2f696e7465726163746f7212a2010a124465736372696265496e7465726163746f7212252e656f6c796d702e61746c61732e4465736372696265496e7465726163746f72496e7075741a262e656f6c796d702e61746c61732e4465736372696265496e7465726163746f724f7574707574223d82e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a00000040f8e20a0a82d3e493020d120b2f696e7465726163746f721291010a0d4372656174655465737473657412202e656f6c796d702e61746c61732e43726561746554657374736574496e7075741a212e656f6c796d702e61746c61732e437265617465546573747365744f7574707574223b82e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e493020b22092f7465737473657473129e010a0d5570646174655465737473657412202e656f6c796d702e61746c61732e55706461746554657374736574496e7075741a212e656f6c796d702e61746c61732e557064617465546573747365744f7574707574224882e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e49302181a162f74657374736574732f7b746573747365745f69647d129e010a0d44656c6574655465737473657412202e656f6c796d702e61746c61732e44656c65746554657374736574496e7075741a212e656f6c796d702e61746c61732e44656c657465546573747365744f7574707574224882e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e49302182a162f74657374736574732f7b746573747365745f69647d12a4010a0f44657363726962655465737473657412222e656f6c796d702e61746c61732e446573637269626554657374736574496e7075741a232e656f6c796d702e61746c61732e4465736372696265546573747365744f7574707574224882e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a00002041f8e20a3282d3e493021812162f74657374736574732f7b746573747365745f69647d128e010a0c4c6973745465737473657473121f2e656f6c796d702e61746c61732e4c6973745465737473657473496e7075741a202e656f6c796d702e61746c61732e4c69737454657374736574734f7574707574223b82e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a00002041f8e20a3282d3e493020b12092f7465737473657473129c010a0a43726561746554657374121d2e656f6c796d702e61746c61732e43726561746554657374496e7075741a1e2e656f6c796d702e61746c61732e437265617465546573744f7574707574224f82e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0cf5e20a00002041f8e20ac80182d3e493021e221c2f74657374736574732f7b746573747365745f69647d2f746573747312a6010a0a55706461746554657374121d2e656f6c796d702e61746c61732e55706461746554657374496e7075741a1e2e656f6c796d702e61746c61732e557064617465546573744f7574707574225982e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0cf5e20a00002041f8e20ac80182d3e49302281a262f74657374736574732f7b746573747365745f69647d2f74657374732f7b746573745f69647d12a6010a0a44656c65746554657374121d2e656f6c796d702e61746c61732e44656c65746554657374496e7075741a1e2e656f6c796d702e61746c61732e44656c657465546573744f7574707574225982e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0cf5e20a00002041f8e20ac80182d3e49302282a262f74657374736574732f7b746573747365745f69647d2f74657374732f7b746573745f69647d12ab010a0c446573637269626554657374121f2e656f6c796d702e61746c61732e446573637269626554657374496e7075741a202e656f6c796d702e61746c61732e4465736372696265546573744f7574707574225882e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a00002041f8e20a3282d3e493022812262f74657374736574732f7b746573747365745f69647d2f74657374732f7b746573745f69647d1298010a094c6973745465737473121c2e656f6c796d702e61746c61732e4c6973745465737473496e7075741a1d2e656f6c796d702e61746c61732e4c69737454657374734f7574707574224e82e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a00002041f8e20a3282d3e493021e121c2f74657374736574732f7b746573747365745f69647d2f7465737473128d010a0c4c6973744578616d706c6573121f2e656f6c796d702e61746c61732e4c6973744578616d706c6573496e7075741a202e656f6c796d702e61746c61732e4c6973744578616d706c65734f7574707574223a82e30a168ae30a1261746c61733a70726f626c656d3a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493020b12092f6578616d706c6573422d5a2b6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f61746c61733b61746c6173620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

