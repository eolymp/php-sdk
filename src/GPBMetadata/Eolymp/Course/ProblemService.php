<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/problem_service.proto

namespace GPBMetadata\Eolymp\Course;

class ProblemService
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
        \GPBMetadata\Eolymp\Atlas\CodeTemplate::initOnce();
        \GPBMetadata\Eolymp\Atlas\ScoringScore::initOnce();
        \GPBMetadata\Eolymp\Atlas\Statement::initOnce();
        \GPBMetadata\Eolymp\Atlas\Submission::initOnce();
        \GPBMetadata\Eolymp\Atlas\TestingTest::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aee170a23656f6c796d702f636f757273652f70726f626c656d5f736572766963652e70726f746f120d656f6c796d702e636f757273651a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a20656f6c796d702f61746c61732f636f64655f74656d706c6174652e70726f746f1a20656f6c796d702f61746c61732f73636f72696e675f73636f72652e70726f746f1a1c656f6c796d702f61746c61732f73746174656d656e742e70726f746f1a1d656f6c796d702f61746c61732f7375626d697373696f6e2e70726f746f1a1f656f6c796d702f61746c61732f74657374696e675f746573742e70726f746f1a21656f6c796d702f77656c6c6b6e6f776e2f65787072657373696f6e2e70726f746f22150a134c69737453746174656d656e7473496e707574224d0a144c69737453746174656d656e74734f7574707574120d0a05746f74616c18012001280512260a056974656d7318022003280b32172e656f6c796d702e61746c61732e53746174656d656e7422130a114c6973744578616d706c6573496e707574223a0a124c6973744578616d706c65734f757470757412240a086578616d706c657318022003280b32122e656f6c796d702e61746c61732e5465737422490a154372656174655375626d697373696f6e496e70757412120a0a70726f626c656d5f6964180120012809120c0a046c616e67180220012809120e0a06736f75726365180320012809222f0a164372656174655375626d697373696f6e4f757470757412150a0d7375626d697373696f6e5f69641801200128092297040a144c6973745375626d697373696f6e73496e707574120e0a066f6666736574180a20012805120c0a0473697a65180b20012805123b0a0766696c7465727318282001280b322a2e656f6c796d702e636f757273652e4c6973745375626d697373696f6e73496e7075742e46696c7465721aa3030a0646696c746572122a0a02696418012003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e4944122f0a07757365725f696418032003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412310a096d656d6265725f696418092003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e4944123b0a0c7375626d69747465645f617418042003280b32252e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e54696d657374616d7012310a0772756e74696d6518052003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e456e756d12300a0673746174757318062003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e456e756d12300a0573636f726518072003280b32212e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e466c6f617412350a0a70657263656e7461676518082003280b32212e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e466c6f6174224f0a154c6973745375626d697373696f6e734f7574707574120d0a05746f74616c18012001280512270a056974656d7318022003280b32182e656f6c796d702e61746c61732e5375626d697373696f6e22440a1744657363726962655375626d697373696f6e496e70757412120a0a70726f626c656d5f696418012001280912150a0d7375626d697373696f6e5f696418022001280922480a1844657363726962655375626d697373696f6e4f7574707574122c0a0a7375626d697373696f6e18012001280b32182e656f6c796d702e61746c61732e5375626d697373696f6e22410a1457617463685375626d697373696f6e496e70757412120a0a70726f626c656d5f696418012001280912150a0d7375626d697373696f6e5f696418022001280922450a1557617463685375626d697373696f6e4f7574707574122c0a0a7375626d697373696f6e18012001280b32182e656f6c796d702e61746c61732e5375626d697373696f6e22270a12446573637269626553636f7265496e70757412110a096d656d6265725f696418022001280922390a13446573637269626553636f72654f757470757412220a0573636f726518012001280b32132e656f6c796d702e61746c61732e53636f7265222a0a174c6f6f6b7570436f646554656d706c617465496e707574120f0a0772756e74696d6518012001280922440a184c6f6f6b7570436f646554656d706c6174654f757470757412280a0874656d706c61746518012001280b32162e656f6c796d702e61746c61732e54656d706c61746532e7090a0e50726f626c656d536572766963651297010a0e4c69737453746174656d656e747312222e656f6c796d702e636f757273652e4c69737453746174656d656e7473496e7075741a232e656f6c796d702e636f757273652e4c69737453746174656d656e74734f7574707574223c82e30a168ae30a12636f757273653a636f757273653a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493020d120b2f73746174656d656e7473128f010a0c4c6973744578616d706c657312202e656f6c796d702e636f757273652e4c6973744578616d706c6573496e7075741a212e656f6c796d702e636f757273652e4c6973744578616d706c65734f7574707574223a82e30a168ae30a12636f757273653a636f757273653a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493020b12092f6578616d706c657312a0010a104372656174655375626d697373696f6e12242e656f6c796d702e636f757273652e4372656174655375626d697373696f6e496e7075741a252e656f6c796d702e636f757273652e4372656174655375626d697373696f6e4f7574707574223f82e30a188ae30a14636f757273653a636f757273653a7375626d6974eae20a0bf5e20a0ad7233ef8e20a0a82d3e493020e220c2f7375626d697373696f6e73129b010a0f4c6973745375626d697373696f6e7312232e656f6c796d702e636f757273652e4c6973745375626d697373696f6e73496e7075741a242e656f6c796d702e636f757273652e4c6973745375626d697373696f6e734f7574707574223d82e30a168ae30a12636f757273653a636f757273653a72656164eae20a0bf5e20a0000803ff8e20a0582d3e493020e120c2f7375626d697373696f6e7312b4010a1244657363726962655375626d697373696f6e12262e656f6c796d702e636f757273652e44657363726962655375626d697373696f6e496e7075741a272e656f6c796d702e636f757273652e44657363726962655375626d697373696f6e4f7574707574224d82e30a168ae30a12636f757273653a636f757273653a72656164eae20a0bf5e20a00000040f8e20a0a82d3e493021e121c2f7375626d697373696f6e732f7b7375626d697373696f6e5f69647d127a0a0f57617463685375626d697373696f6e12232e656f6c796d702e636f757273652e57617463685375626d697373696f6e496e7075741a242e656f6c796d702e636f757273652e57617463685375626d697373696f6e4f7574707574221a82e30a168ae30a12636f757273653a636f757273653a7265616430011290010a0d446573637269626553636f726512212e656f6c796d702e636f757273652e446573637269626553636f7265496e7075741a222e656f6c796d702e636f757273652e446573637269626553636f72654f7574707574223882e30a168ae30a12636f757273653a636f757273653a72656164eae20a0cf5e20a00004842f8e20ac80182d3e493020812062f73636f726512a1010a124c6f6f6b7570436f646554656d706c61746512262e656f6c796d702e636f757273652e4c6f6f6b7570436f646554656d706c617465496e7075741a272e656f6c796d702e636f757273652e4c6f6f6b7570436f646554656d706c6174654f7574707574223a82e30a168ae30a12636f757273653a636f757273653a72656164eae20a0bf5e20a0000a040f8e20a1482d3e493020b12092f74656d706c617465422f5a2d6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f636f757273653b636f75727365620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

