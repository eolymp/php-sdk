<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/atlas.proto

namespace GPBMetadata\Eolymp\Atlas;

class Atlas
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
        \GPBMetadata\Eolymp\Atlas\AttachmentService::initOnce();
        \GPBMetadata\Eolymp\Atlas\BookmarkService::initOnce();
        \GPBMetadata\Eolymp\Atlas\CodeTemplateService::initOnce();
        \GPBMetadata\Eolymp\Atlas\LibraryService::initOnce();
        \GPBMetadata\Eolymp\Atlas\ProblemService::initOnce();
        \GPBMetadata\Eolymp\Atlas\ScoringService::initOnce();
        \GPBMetadata\Eolymp\Atlas\StatementService::initOnce();
        \GPBMetadata\Eolymp\Atlas\SubmissionService::initOnce();
        \GPBMetadata\Eolymp\Atlas\TestingService::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ace450a18656f6c796d702f61746c61732f61746c61732e70726f746f120c656f6c796d702e61746c61731a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a25656f6c796d702f61746c61732f6174746163686d656e745f736572766963652e70726f746f1a23656f6c796d702f61746c61732f626f6f6b6d61726b5f736572766963652e70726f746f1a28656f6c796d702f61746c61732f636f64655f74656d706c6174655f736572766963652e70726f746f1a22656f6c796d702f61746c61732f6c6962726172795f736572766963652e70726f746f1a22656f6c796d702f61746c61732f70726f626c656d5f736572766963652e70726f746f1a22656f6c796d702f61746c61732f73636f72696e675f736572766963652e70726f746f1a24656f6c796d702f61746c61732f73746174656d656e745f736572766963652e70726f746f1a25656f6c796d702f61746c61732f7375626d697373696f6e5f736572766963652e70726f746f1a22656f6c796d702f61746c61732f74657374696e675f736572766963652e70726f746f32d5410a0541746c61731291010a0d43726561746550726f626c656d12202e656f6c796d702e61746c61732e43726561746550726f626c656d496e7075741a212e656f6c796d702e61746c61732e43726561746550726f626c656d4f7574707574223b82e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a0ad7233ef8e20a0582d3e493020b22092f70726f626c656d73129e010a0d44656c65746550726f626c656d12202e656f6c796d702e61746c61732e44656c65746550726f626c656d496e7075741a212e656f6c796d702e61746c61732e44656c65746550726f626c656d4f7574707574224882e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a0ad7233ef8e20a0582d3e49302182a162f70726f626c656d732f7b70726f626c656d5f69647d128d010a0c4c69737450726f626c656d73121f2e656f6c796d702e61746c61732e4c69737450726f626c656d73496e7075741a202e656f6c796d702e61746c61732e4c69737450726f626c656d734f7574707574223a82e30a168ae30a1261746c61733a70726f626c656d3a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493020b12092f70726f626c656d7312a3010a0f446573637269626550726f626c656d12222e656f6c796d702e61746c61732e446573637269626550726f626c656d496e7075741a232e656f6c796d702e61746c61732e446573637269626550726f626c656d4f7574707574224782e30a168ae30a1261746c61733a70726f626c656d3a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493021812162f70726f626c656d732f7b70726f626c656d5f69647d129e010a0d55706461746550726f626c656d12202e656f6c796d702e61746c61732e55706461746550726f626c656d496e7075741a212e656f6c796d702e61746c61732e55706461746550726f626c656d4f7574707574224882e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a0000a041f8e20a6482d3e49302181a162f70726f626c656d732f7b70726f626c656d5f69647d1286010a0b536574426f6f6b6d61726b121e2e656f6c796d702e61746c61732e536574426f6f6b6d61726b496e7075741a1f2e656f6c796d702e61746c61732e536574426f6f6b6d61726b4f75747075742236eae20a0bf5e20a00000040f8e20a0a82d3e4930221221f2f70726f626c656d732f7b70726f626c656d5f69647d2f626f6f6b6d61726b12a3010a0c4c6973744578616d706c6573121f2e656f6c796d702e61746c61732e4c6973744578616d706c6573496e7075741a202e656f6c796d702e61746c61732e4c6973744578616d706c65734f7574707574225082e30a168ae30a1261746c61733a70726f626c656d3a72656164eae20a0bf5e20a0000a041f8e20a6482d3e4930221121f2f70726f626c656d732f7b70726f626c656d5f69647d2f6578616d706c657312aa010a0e557064617465566572696669657212212e656f6c796d702e61746c61732e5570646174655665726966696572496e7075741a222e656f6c796d702e61746c61732e55706461746556657269666965724f7574707574225182e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a0ad7233ef8e20a0582d3e49302211a1f2f70726f626c656d732f7b70726f626c656d5f69647d2f766572696669657212b0010a104465736372696265566572696669657212232e656f6c796d702e61746c61732e44657363726962655665726966696572496e7075741a242e656f6c796d702e61746c61732e446573637269626556657269666965724f7574707574225182e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a00000040f8e20a0a82d3e4930221121f2f70726f626c656d732f7b70726f626c656d5f69647d2f766572696669657212b2010a10557064617465496e7465726163746f7212232e656f6c796d702e61746c61732e557064617465496e7465726163746f72496e7075741a242e656f6c796d702e61746c61732e557064617465496e7465726163746f724f7574707574225382e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a0ad7233ef8e20a0582d3e49302231a212f70726f626c656d732f7b70726f626c656d5f69647d2f696e7465726163746f7212b8010a124465736372696265496e7465726163746f7212252e656f6c796d702e61746c61732e4465736372696265496e7465726163746f72496e7075741a262e656f6c796d702e61746c61732e4465736372696265496e7465726163746f724f7574707574225382e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a00000040f8e20a0a82d3e493022312212f70726f626c656d732f7b70726f626c656d5f69647d2f696e7465726163746f7212af010a0f43726561746553746174656d656e7412222e656f6c796d702e61746c61732e43726561746553746174656d656e74496e7075741a232e656f6c796d702e61746c61732e43726561746553746174656d656e744f7574707574225382e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e49302231a212f70726f626c656d732f7b70726f626c656d5f69647d2f73746174656d656e747312be010a0f55706461746553746174656d656e7412222e656f6c796d702e61746c61732e55706461746553746174656d656e74496e7075741a232e656f6c796d702e61746c61732e55706461746553746174656d656e744f7574707574226282e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e49302321a302f70726f626c656d732f7b70726f626c656d5f69647d2f73746174656d656e74732f7b73746174656d656e745f69647d12be010a0f44656c65746553746174656d656e7412222e656f6c796d702e61746c61732e44656c65746553746174656d656e74496e7075741a232e656f6c796d702e61746c61732e44656c65746553746174656d656e744f7574707574226282e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e49302322a302f70726f626c656d732f7b70726f626c656d5f69647d2f73746174656d656e74732f7b73746174656d656e745f69647d12ab010a0e4c69737453746174656d656e747312212e656f6c796d702e61746c61732e4c69737453746174656d656e7473496e7075741a222e656f6c796d702e61746c61732e4c69737453746174656d656e74734f7574707574225282e30a168ae30a1261746c61733a70726f626c656d3a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493022312212f70726f626c656d732f7b70726f626c656d5f69647d2f73746174656d656e747312c3010a11446573637269626553746174656d656e7412242e656f6c796d702e61746c61732e446573637269626553746174656d656e74496e7075741a252e656f6c796d702e61746c61732e446573637269626553746174656d656e744f7574707574226182e30a168ae30a1261746c61733a70726f626c656d3a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493023212302f70726f626c656d732f7b70726f626c656d5f69647d2f73746174656d656e74732f7b73746174656d656e745f69647d12ad010a0f4c6f6f6b757053746174656d656e7412222e656f6c796d702e61746c61732e4c6f6f6b757053746174656d656e74496e7075741a232e656f6c796d702e61746c61732e4c6f6f6b757053746174656d656e744f7574707574225182e30a168ae30a1261746c61733a70726f626c656d3a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493022212202f70726f626c656d732f7b70726f626c656d5f69647d2f7472616e736c61746512c4010a0f52656e64657253746174656d656e7412222e656f6c796d702e61746c61732e52656e64657253746174656d656e74496e7075741a232e656f6c796d702e61746c61732e52656e64657253746174656d656e744f7574707574226882e30a168ae30a1261746c61733a70726f626c656d3a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493023912372f70726f626c656d732f7b70726f626c656d5f69647d2f73746174656d656e74732f7b73746174656d656e745f69647d2f72656e64657212ae010a105072657669657753746174656d656e7412232e656f6c796d702e61746c61732e5072657669657753746174656d656e74496e7075741a242e656f6c796d702e61746c61732e5072657669657753746174656d656e744f7574707574224f82e30a168ae30a1261746c61733a70726f626c656d3a72656164eae20a0bf5e20a0000a041f8e20a6482d3e4930220221e2f70726f626c656d732f7b70726f626c656d5f69647d2f72656e6465727312a7010a0d4372656174655465737473657412202e656f6c796d702e61746c61732e43726561746554657374736574496e7075741a212e656f6c796d702e61746c61732e437265617465546573747365744f7574707574225182e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e4930221221f2f70726f626c656d732f7b70726f626c656d5f69647d2f746573747365747312b4010a0d5570646174655465737473657412202e656f6c796d702e61746c61732e55706461746554657374736574496e7075741a212e656f6c796d702e61746c61732e557064617465546573747365744f7574707574225e82e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e493022e1a2c2f70726f626c656d732f7b70726f626c656d5f69647d2f74657374736574732f7b746573747365745f69647d12b4010a0d44656c6574655465737473657412202e656f6c796d702e61746c61732e44656c65746554657374736574496e7075741a212e656f6c796d702e61746c61732e44656c657465546573747365744f7574707574225e82e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e493022e2a2c2f70726f626c656d732f7b70726f626c656d5f69647d2f74657374736574732f7b746573747365745f69647d12a4010a0c4c6973745465737473657473121f2e656f6c796d702e61746c61732e4c6973745465737473657473496e7075741a202e656f6c796d702e61746c61732e4c69737454657374736574734f7574707574225182e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a00002041f8e20a3282d3e4930221121f2f70726f626c656d732f7b70726f626c656d5f69647d2f746573747365747312ba010a0f44657363726962655465737473657412222e656f6c796d702e61746c61732e446573637269626554657374736574496e7075741a232e656f6c796d702e61746c61732e4465736372696265546573747365744f7574707574225e82e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a00002041f8e20a3282d3e493022e122c2f70726f626c656d732f7b70726f626c656d5f69647d2f74657374736574732f7b746573747365745f69647d12b2010a0a43726561746554657374121d2e656f6c796d702e61746c61732e43726561746554657374496e7075741a1e2e656f6c796d702e61746c61732e437265617465546573744f7574707574226582e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0cf5e20a00002041f8e20ac80182d3e493023422322f70726f626c656d732f7b70726f626c656d5f69647d2f74657374736574732f7b746573747365745f69647d2f746573747312bc010a0a55706461746554657374121d2e656f6c796d702e61746c61732e55706461746554657374496e7075741a1e2e656f6c796d702e61746c61732e557064617465546573744f7574707574226f82e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0cf5e20a00002041f8e20ac80182d3e493023e1a3c2f70726f626c656d732f7b70726f626c656d5f69647d2f74657374736574732f7b746573747365745f69647d2f74657374732f7b746573745f69647d12bc010a0a44656c65746554657374121d2e656f6c796d702e61746c61732e44656c65746554657374496e7075741a1e2e656f6c796d702e61746c61732e44656c657465546573744f7574707574226f82e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0cf5e20a00002041f8e20ac80182d3e493023e2a3c2f70726f626c656d732f7b70726f626c656d5f69647d2f74657374736574732f7b746573747365745f69647d2f74657374732f7b746573745f69647d12ae010a094c6973745465737473121c2e656f6c796d702e61746c61732e4c6973745465737473496e7075741a1d2e656f6c796d702e61746c61732e4c69737454657374734f7574707574226482e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a00002041f8e20a3282d3e493023412322f70726f626c656d732f7b70726f626c656d5f69647d2f74657374736574732f7b746573747365745f69647d2f746573747312c1010a0c446573637269626554657374121f2e656f6c796d702e61746c61732e446573637269626554657374496e7075741a202e656f6c796d702e61746c61732e4465736372696265546573744f7574707574226e82e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a00002041f8e20a3282d3e493023e123c2f70726f626c656d732f7b70726f626c656d5f69647d2f74657374736574732f7b746573747365745f69647d2f74657374732f7b746573745f69647d12b7010a12437265617465436f646554656d706c61746512252e656f6c796d702e61746c61732e437265617465436f646554656d706c617465496e7075741a262e656f6c796d702e61746c61732e437265617465436f646554656d706c6174654f7574707574225282e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a0ad7233ef8e20a0582d3e493022222202f70726f626c656d732f7b70726f626c656d5f69647d2f74656d706c6174657312c5010a12557064617465436f646554656d706c61746512252e656f6c796d702e61746c61732e557064617465436f646554656d706c617465496e7075741a262e656f6c796d702e61746c61732e557064617465436f646554656d706c6174654f7574707574226082e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a0ad7233ef8e20a0582d3e4930230222e2f70726f626c656d732f7b70726f626c656d5f69647d2f74656d706c617465732f7b74656d706c6174655f69647d12c5010a1244656c657465436f646554656d706c61746512252e656f6c796d702e61746c61732e44656c657465436f646554656d706c617465496e7075741a262e656f6c796d702e61746c61732e44656c657465436f646554656d706c6174654f7574707574226082e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a0ad7233ef8e20a0582d3e49302302a2e2f70726f626c656d732f7b70726f626c656d5f69647d2f74656d706c617465732f7b74656d706c6174655f69647d12b3010a114c697374436f646554656d706c6174657312242e656f6c796d702e61746c61732e4c697374436f646554656d706c61746573496e7075741a252e656f6c796d702e61746c61732e4c697374436f646554656d706c617465734f7574707574225182e30a168ae30a1261746c61733a70726f626c656d3a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493022212202f70726f626c656d732f7b70726f626c656d5f69647d2f74656d706c6174657312ca010a144465736372696265436f646554656d706c61746512272e656f6c796d702e61746c61732e4465736372696265436f646554656d706c617465496e7075741a282e656f6c796d702e61746c61732e4465736372696265436f646554656d706c6174654f7574707574225f82e30a168ae30a1261746c61733a70726f626c656d3a72656164eae20a0bf5e20a0000a041f8e20a6482d3e4930230122e2f70726f626c656d732f7b70726f626c656d5f69647d2f74656d706c617465732f7b74656d706c6174655f69647d12b3010a104372656174654174746163686d656e7412232e656f6c796d702e61746c61732e4372656174654174746163686d656e74496e7075741a242e656f6c796d702e61746c61732e4372656174654174746163686d656e744f7574707574225482e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a0ad7233ef8e20a0582d3e493022422222f70726f626c656d732f7b70726f626c656d5f69647d2f6174746163686d656e747312c3010a105570646174654174746163686d656e7412232e656f6c796d702e61746c61732e5570646174654174746163686d656e74496e7075741a242e656f6c796d702e61746c61732e5570646174654174746163686d656e744f7574707574226482e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a0ad7233ef8e20a0582d3e493023422322f70726f626c656d732f7b70726f626c656d5f69647d2f6174746163686d656e74732f7b6174746163686d656e745f69647d12c3010a1044656c6574654174746163686d656e7412232e656f6c796d702e61746c61732e44656c6574654174746163686d656e74496e7075741a242e656f6c796d702e61746c61732e44656c6574654174746163686d656e744f7574707574226482e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a0ad7233ef8e20a0582d3e49302342a322f70726f626c656d732f7b70726f626c656d5f69647d2f6174746163686d656e74732f7b6174746163686d656e745f69647d12af010a0f4c6973744174746163686d656e747312222e656f6c796d702e61746c61732e4c6973744174746163686d656e7473496e7075741a232e656f6c796d702e61746c61732e4c6973744174746163686d656e74734f7574707574225382e30a168ae30a1261746c61733a70726f626c656d3a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493022412222f70726f626c656d732f7b70726f626c656d5f69647d2f6174746163686d656e747312c8010a1244657363726962654174746163686d656e7412252e656f6c796d702e61746c61732e44657363726962654174746163686d656e74496e7075741a262e656f6c796d702e61746c61732e44657363726962654174746163686d656e744f7574707574226382e30a168ae30a1261746c61733a70726f626c656d3a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493023412322f70726f626c656d732f7b70726f626c656d5f69647d2f6174746163686d656e74732f7b6174746163686d656e745f69647d1295010a0c4c69737456657273696f6e73121f2e656f6c796d702e61746c61732e4c69737456657273696f6e73496e7075741a202e656f6c796d702e61746c61732e4c69737456657273696f6e734f7574707574224282e30a178ae30a1361746c61733a70726f626c656d3a777269746582d3e4930221121f2f70726f626c656d732f7b70726f626c656d5f69647d2f76657273696f6e731295010a0e4c69737450726f626c656d546f7012212e656f6c796d702e61746c61732e4c69737450726f626c656d546f70496e7075741a222e656f6c796d702e61746c61732e4c69737450726f626c656d546f704f7574707574223c82e30a168ae30a1261746c61733a70726f626c656d3a7265616482d3e493021c121a2f70726f626c656d732f7b70726f626c656d5f69647d2f746f7012b1010a16446573637269626550726f626c656d47726164696e6712292e656f6c796d702e61746c61732e446573637269626550726f626c656d47726164696e67496e7075741a2a2e656f6c796d702e61746c61732e446573637269626550726f626c656d47726164696e674f7574707574224082e30a168ae30a1261746c61733a70726f626c656d3a7265616482d3e4930220121e2f70726f626c656d732f7b70726f626c656d5f69647d2f67726164696e6712a7010a104372656174655375626d697373696f6e12232e656f6c796d702e61746c61732e4372656174655375626d697373696f6e496e7075741a242e656f6c796d702e61746c61732e4372656174655375626d697373696f6e4f7574707574224882e30a1a8ae30a1661746c61733a7375626d697373696f6e3a777269746582d3e493022422222f70726f626c656d732f7b70726f626c656d5f69647d2f7375626d697373696f6e7312bc010a1244657363726962655375626d697373696f6e12252e656f6c796d702e61746c61732e44657363726962655375626d697373696f6e496e7075741a262e656f6c796d702e61746c61732e44657363726962655375626d697373696f6e4f7574707574225782e30a198ae30a1561746c61733a7375626d697373696f6e3a7265616482d3e493023412322f70726f626c656d732f7b70726f626c656d5f69647d2f7375626d697373696f6e732f7b7375626d697373696f6e5f69647d12be010a105265746573745375626d697373696f6e12232e656f6c796d702e61746c61732e5265746573745375626d697373696f6e496e7075741a242e656f6c796d702e61746c61732e5265746573745375626d697373696f6e4f7574707574225f82e30a1a8ae30a1661746c61733a7375626d697373696f6e3a777269746582d3e493023b22392f70726f626c656d732f7b70726f626c656d5f69647d2f7375626d697373696f6e732f7b7375626d697373696f6e5f69647d2f726574657374128d010a0f4c6973745375626d697373696f6e7312222e656f6c796d702e61746c61732e4c6973745375626d697373696f6e73496e7075741a232e656f6c796d702e61746c61732e4c6973745375626d697373696f6e734f7574707574223182e30a198ae30a1561746c61733a7375626d697373696f6e3a7265616482d3e493020e120c2f7375626d697373696f6e7312a2010a0d446573637269626553636f726512202e656f6c796d702e61746c61732e446573637269626553636f7265496e7075741a212e656f6c796d702e61746c61732e446573637269626553636f72654f7574707574224c82e30a198ae30a1561746c61733a7375626d697373696f6e3a7265616482d3e493022912272f70726f626c656d732f7b70726f626c656d5f69647d2f73636f7265732f7b757365725f69647d422d5a2b6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f61746c61733b61746c6173620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

