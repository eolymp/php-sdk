<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/executor.proto

namespace GPBMetadata\Eolymp\Executor;

class Executor
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
        \GPBMetadata\Eolymp\Executor\Job::initOnce();
        \GPBMetadata\Eolymp\Executor\Language::initOnce();
        \GPBMetadata\Eolymp\Executor\Runtime::initOnce();
        \GPBMetadata\Eolymp\Executor\Task::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aac120a1e656f6c796d702f6578656375746f722f6578656375746f722e70726f746f120f656f6c796d702e6578656375746f721a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a19656f6c796d702f6578656375746f722f6a6f622e70726f746f1a1e656f6c796d702f6578656375746f722f6c616e67756167652e70726f746f1a1d656f6c796d702f6578656375746f722f72756e74696d652e70726f746f1a1a656f6c796d702f6578656375746f722f7461736b2e70726f746f1a21656f6c796d702f77656c6c6b6e6f776e2f65787072657373696f6e2e70726f746f22590a0f4372656174655461736b496e70757412230a047461736b18012001280b32152e656f6c796d702e6578656375746f722e5461736b12210a036a6f6218022001280b32142e656f6c796d702e6578656375746f722e4a6f6222120a104372656174655461736b4f7574707574222c0a1544657363726962654c616e6775616765496e70757412130a0b6c616e67756167655f696418012001280922450a1644657363726962654c616e67756167654f7574707574122b0a086c616e677561676518012001280b32192e656f6c796d702e6578656375746f722e4c616e677561676522f0010a124c6973744c616e677561676573496e707574123b0a0766696c7465727318282001280b322a2e656f6c796d702e6578656375746f722e4c6973744c616e677561676573496e7075742e46696c7465721a9c010a0646696c746572122a0a02696418012003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412300a046e616d6518022003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e6712340a0a6465707265636174656418032003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e426f6f6c223f0a134c6973744c616e6775616765734f757470757412280a056974656d7318022003280b32192e656f6c796d702e6578656375746f722e4c616e6775616765222a0a14446573637269626552756e74696d65496e70757412120a0a72756e74696d655f696418012001280922420a15446573637269626552756e74696d654f757470757412290a0772756e74696d6518012001280b32182e656f6c796d702e6578656375746f722e52756e74696d6522cb020a104c69737452756e74696d65496e70757412390a0766696c7465727318282001280b32282e656f6c796d702e6578656375746f722e4c69737452756e74696d65496e7075742e46696c7465721afb010a0646696c746572122a0a02696418012003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e4944122c0a046c616e6718022003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e4944122f0a0776657273696f6e18032003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412300a046e616d6518042003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e6712340a0a6465707265636174656418052003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e426f6f6c223c0a114c69737452756e74696d654f757470757412270a056974656d7318022003280b32182e656f6c796d702e6578656375746f722e52756e74696d65222f0a194465736372696265436f646554656d706c617465496e70757412120a0a72756e74696d655f6964180120012809222e0a1a4465736372696265436f646554656d706c6174654f757470757412100a0874656d706c61746518012001280932e9060a084578656375746f7212b2010a1044657363726962654c616e677561676512262e656f6c796d702e6578656375746f722e44657363726962654c616e6775616765496e7075741a272e656f6c796d702e6578656375746f722e44657363726962654c616e67756167654f7574707574224d82e30a198ae30a156578656375746f723a72756e74696d653a72656164eae20a0cf5e20a0000a041f8e20ac80182d3e493021a12182f6c616e6775616765732f7b6c616e67756167655f69647d129b010a0d4c6973744c616e67756167657312232e656f6c796d702e6578656375746f722e4c6973744c616e677561676573496e7075741a242e656f6c796d702e6578656375746f722e4c6973744c616e6775616765734f7574707574223f82e30a198ae30a156578656375746f723a72756e74696d653a72656164eae20a0cf5e20a0000a041f8e20ac80182d3e493020c120a2f6c616e67756167657312ac010a0f446573637269626552756e74696d6512252e656f6c796d702e6578656375746f722e446573637269626552756e74696d65496e7075741a262e656f6c796d702e6578656375746f722e446573637269626552756e74696d654f7574707574224a82e30a198ae30a156578656375746f723a72756e74696d653a72656164eae20a0cf5e20a0000a041f8e20ac80182d3e493021712152f72756e74696d652f7b72756e74696d655f69647d1293010a0b4c69737452756e74696d6512212e656f6c796d702e6578656375746f722e4c69737452756e74696d65496e7075741a222e656f6c796d702e6578656375746f722e4c69737452756e74696d654f7574707574223d82e30a198ae30a156578656375746f723a72756e74696d653a72656164eae20a0cf5e20a0000a041f8e20ac80182d3e493020a12082f72756e74696d6512c4010a144465736372696265436f646554656d706c617465122a2e656f6c796d702e6578656375746f722e4465736372696265436f646554656d706c617465496e7075741a2b2e656f6c796d702e6578656375746f722e4465736372696265436f646554656d706c6174654f7574707574225382e30a198ae30a156578656375746f723a72756e74696d653a72656164eae20a0cf5e20a0000a041f8e20ac80182d3e4930220121e2f72756e74696d652f7b72756e74696d655f69647d2f74656d706c61746542335a316769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f6578656375746f723b6578656375746f72620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

