<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/change.proto

namespace GPBMetadata\Eolymp\Atlas;

class Change
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Resource::initOnce();
        \GPBMetadata\Eolymp\Atlas\Attachment::initOnce();
        \GPBMetadata\Eolymp\Atlas\Permission::initOnce();
        \GPBMetadata\Eolymp\Atlas\Problem::initOnce();
        \GPBMetadata\Eolymp\Atlas\Statement::initOnce();
        \GPBMetadata\Eolymp\Atlas\Template::initOnce();
        \GPBMetadata\Eolymp\Atlas\Test::initOnce();
        \GPBMetadata\Eolymp\Atlas\Testset::initOnce();
        \GPBMetadata\Eolymp\Executor\Interactor::initOnce();
        \GPBMetadata\Eolymp\Executor\Verifier::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af71b0a19656f6c796d702f61746c61732f6368616e67652e70726f746f120c656f6c796d702e61746c61731a1d656f6c796d702f61746c61732f6174746163686d656e742e70726f746f1a1d656f6c796d702f61746c61732f7065726d697373696f6e2e70726f746f1a1a656f6c796d702f61746c61732f70726f626c656d2e70726f746f1a1c656f6c796d702f61746c61732f73746174656d656e742e70726f746f1a1b656f6c796d702f61746c61732f74656d706c6174652e70726f746f1a17656f6c796d702f61746c61732f746573742e70726f746f1a1a656f6c796d702f61746c61732f746573747365742e70726f746f1a20656f6c796d702f6578656375746f722f696e7465726163746f722e70726f746f1a1e656f6c796d702f6578656375746f722f76657269666965722e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f22e7180a064368616e6765120a0a026964180120012809122d0a0974696d657374616d7018022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012120a0a69705f61646472657373180320012809120f0a07757365725f696418042001280912120a0a70726f626c656d5f6964180520012809123c0a0e6372656174655f70726f626c656d18642001280b32222e656f6c796d702e61746c61732e4368616e67652e43726561746550726f626c656d4800123c0a0e7570646174655f70726f626c656d18652001280b32222e656f6c796d702e61746c61732e4368616e67652e55706461746550726f626c656d4800123e0a0f7570646174655f766572696669657218662001280b32232e656f6c796d702e61746c61732e4368616e67652e5570646174655665726966696572480012420a117570646174655f696e7465726163746f7218682001280b32252e656f6c796d702e61746c61732e4368616e67652e557064617465496e7465726163746f724800123c0a0e64656c6574655f70726f626c656d18692001280b32222e656f6c796d702e61746c61732e4368616e67652e44656c65746550726f626c656d480012400a106372656174655f73746174656d656e74186e2001280b32242e656f6c796d702e61746c61732e4368616e67652e43726561746553746174656d656e74480012400a107570646174655f73746174656d656e74186f2001280b32242e656f6c796d702e61746c61732e4368616e67652e55706461746553746174656d656e74480012400a1064656c6574655f73746174656d656e7418702001280b32242e656f6c796d702e61746c61732e4368616e67652e44656c65746553746174656d656e744800123c0a0e6372656174655f7465737473657418782001280b32222e656f6c796d702e61746c61732e4368616e67652e437265617465546573747365744800123c0a0e7570646174655f7465737473657418792001280b32222e656f6c796d702e61746c61732e4368616e67652e557064617465546573747365744800123c0a0e64656c6574655f74657374736574187a2001280b32222e656f6c796d702e61746c61732e4368616e67652e44656c65746554657374736574480012370a0b6372656174655f746573741882012001280b321f2e656f6c796d702e61746c61732e4368616e67652e43726561746554657374480012370a0b7570646174655f746573741883012001280b321f2e656f6c796d702e61746c61732e4368616e67652e55706461746554657374480012370a0b64656c6574655f746573741884012001280b321f2e656f6c796d702e61746c61732e4368616e67652e44656c657465546573744800123f0a0f6372656174655f74656d706c617465188c012001280b32232e656f6c796d702e61746c61732e4368616e67652e43726561746554656d706c6174654800123f0a0f7570646174655f74656d706c617465188d012001280b32232e656f6c796d702e61746c61732e4368616e67652e55706461746554656d706c6174654800123f0a0f64656c6574655f74656d706c617465188e012001280b32232e656f6c796d702e61746c61732e4368616e67652e44656c65746554656d706c617465480012430a116372656174655f6174746163686d656e7418a0012001280b32252e656f6c796d702e61746c61732e4368616e67652e4372656174654174746163686d656e74480012430a117570646174655f6174746163686d656e7418a1012001280b32252e656f6c796d702e61746c61732e4368616e67652e5570646174654174746163686d656e74480012430a1164656c6574655f6174746163686d656e7418a2012001280b32252e656f6c796d702e61746c61732e4368616e67652e44656c6574654174746163686d656e74480012410a106772616e745f7065726d697373696f6e1896012001280b32242e656f6c796d702e61746c61732e4368616e67652e4772616e745065726d697373696f6e480012430a117265766f6b655f7065726d697373696f6e1897012001280b32252e656f6c796d702e61746c61732e4368616e67652e5265766f6b655065726d697373696f6e48001a350a0d43726561746550726f626c656d12240a05616674657218022001280b32152e656f6c796d702e61746c61732e50726f626c656d1a5c0a0d55706461746550726f626c656d12250a066265666f726518012001280b32152e656f6c796d702e61746c61732e50726f626c656d12240a05616674657218022001280b32152e656f6c796d702e61746c61732e50726f626c656d1a650a0e557064617465566572696669657212290a066265666f726518012001280b32192e656f6c796d702e6578656375746f722e566572696669657212280a05616674657218022001280b32192e656f6c796d702e6578656375746f722e56657269666965721a6b0a10557064617465496e7465726163746f72122b0a066265666f726518012001280b321b2e656f6c796d702e6578656375746f722e496e7465726163746f72122a0a05616674657218022001280b321b2e656f6c796d702e6578656375746f722e496e7465726163746f721a360a0d44656c65746550726f626c656d12250a066265666f726518012001280b32152e656f6c796d702e61746c61732e50726f626c656d1a390a0f43726561746553746174656d656e7412260a05616674657218022001280b32172e656f6c796d702e61746c61732e53746174656d656e741a620a0f55706461746553746174656d656e7412270a066265666f726518012001280b32172e656f6c796d702e61746c61732e53746174656d656e7412260a05616674657218022001280b32172e656f6c796d702e61746c61732e53746174656d656e741a3a0a0f44656c65746553746174656d656e7412270a066265666f726518012001280b32172e656f6c796d702e61746c61732e53746174656d656e741a350a0d4372656174655465737473657412240a05616674657218022001280b32152e656f6c796d702e61746c61732e546573747365741a5c0a0d5570646174655465737473657412250a066265666f726518012001280b32152e656f6c796d702e61746c61732e5465737473657412240a05616674657218022001280b32152e656f6c796d702e61746c61732e546573747365741a360a0d44656c6574655465737473657412250a066265666f726518012001280b32152e656f6c796d702e61746c61732e546573747365741a2f0a0a4372656174655465737412210a05616674657218022001280b32122e656f6c796d702e61746c61732e546573741a530a0a5570646174655465737412220a066265666f726518012001280b32122e656f6c796d702e61746c61732e5465737412210a05616674657218022001280b32122e656f6c796d702e61746c61732e546573741a300a0a44656c6574655465737412220a066265666f726518012001280b32122e656f6c796d702e61746c61732e546573741a370a0e43726561746554656d706c61746512250a05616674657218022001280b32162e656f6c796d702e61746c61732e54656d706c6174651a5f0a0e55706461746554656d706c61746512260a066265666f726518012001280b32162e656f6c796d702e61746c61732e54656d706c61746512250a05616674657218022001280b32162e656f6c796d702e61746c61732e54656d706c6174651a380a0e44656c65746554656d706c61746512260a066265666f726518012001280b32162e656f6c796d702e61746c61732e54656d706c6174651a3b0a104372656174654174746163686d656e7412270a05616674657218022001280b32182e656f6c796d702e61746c61732e4174746163686d656e741a650a105570646174654174746163686d656e7412280a066265666f726518012001280b32182e656f6c796d702e61746c61732e4174746163686d656e7412270a05616674657218022001280b32182e656f6c796d702e61746c61732e4174746163686d656e741a3c0a1044656c6574654174746163686d656e7412280a066265666f726518012001280b32182e656f6c796d702e61746c61732e4174746163686d656e741a3a0a0f4772616e745065726d697373696f6e12270a05616674657218022001280b32182e656f6c796d702e61746c61732e5065726d697373696f6e1a3c0a105265766f6b655065726d697373696f6e12280a066265666f726518012001280b32182e656f6c796d702e61746c61732e5065726d697373696f6e3a2ab2e30a26bae30a0a6174746163686d656e74c2e30a14656f6c796d702e61746c61732e50726f626c656d42090a077061796c6f6164422d5a2b6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f61746c61733b61746c6173620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

