<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/post_service.proto

namespace GPBMetadata\Eolymp\Discussion;

class PostService
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
        \GPBMetadata\Eolymp\Discussion\Post::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Direction::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a96110a24656f6c796d702f64697363757373696f6e2f706f73745f736572766963652e70726f746f1211656f6c796d702e64697363757373696f6e1a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a1c656f6c796d702f64697363757373696f6e2f706f73742e70726f746f1a20656f6c796d702f77656c6c6b6e6f776e2f646972656374696f6e2e70726f746f1a21656f6c796d702f77656c6c6b6e6f776e2f65787072657373696f6e2e70726f746f22530a114465736372696265506f7374496e707574120f0a07706f73745f6964180120012809122d0a05657874726118e3082003280e321d2e656f6c796d702e64697363757373696f6e2e506f73742e4578747261223b0a124465736372696265506f73744f757470757412250a04706f737418012001280b32172e656f6c796d702e64697363757373696f6e2e506f73742289050a0e4c697374506f737473496e707574120d0a056166746572180a20012809120c0a0473697a65180b2001280512340a04736f727418322001280e32262e656f6c796d702e64697363757373696f6e2e4c697374506f737473496e7075742e536f7274122a0a056f7264657218332001280e321b2e656f6c796d702e77656c6c6b6e6f776e2e446972656374696f6e12390a0766696c7465727318282001280b32282e656f6c796d702e64697363757373696f6e2e4c697374506f737473496e7075742e46696c746572122d0a05657874726118e3082003280e321d2e656f6c796d702e64697363757373696f6e2e506f73742e45787472611ad1020a0646696c746572120d0a057175657279180120012809122a0a02696418022003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e4944122f0a07757365725f696418032003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412310a096d656d6265725f696418042003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412390a0a637265617465645f617418052003280b32252e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e54696d657374616d70123b0a0c7075626c69736865645f617418062003280b32252e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e54696d657374616d7012300a0673746174757318072003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e456e756d223a0a04536f727412100a0c554e4b4e4f574e5f534f5254100012100a0c5055424c49534845445f41541001120e0a0a435245415445445f41541002224b0a0f4c697374506f7374734f757470757412260a056974656d7318012003280b32172e656f6c796d702e64697363757373696f6e2e506f737412100a086861735f6d6f726518022001280822380a0f437265617465506f7374496e70757412250a04706f737418012001280b32172e656f6c796d702e64697363757373696f6e2e506f737422230a10437265617465506f73744f7574707574120f0a07706f73745f696418012001280922490a0f557064617465506f7374496e707574120f0a07706f73745f696418012001280912250a04706f737418022001280b32172e656f6c796d702e64697363757373696f6e2e506f737422120a10557064617465506f73744f757470757422220a0f44656c657465506f7374496e707574120f0a07706f73745f696418012001280922120a1044656c657465506f73744f75747075743291060a0b506f73745365727669636512a1010a0c4465736372696265506f737412242e656f6c796d702e64697363757373696f6e2e4465736372696265506f7374496e7075741a252e656f6c796d702e64697363757373696f6e2e4465736372696265506f73744f7574707574224482e30a188ae30a1464697363757373696f6e3a706f73743a72656164eae20a0cf5e20a0000a041f8e20af40382d3e493021212102f706f7374732f7b706f73745f69647d128d010a094c697374506f73747312212e656f6c796d702e64697363757373696f6e2e4c697374506f737473496e7075741a222e656f6c796d702e64697363757373696f6e2e4c697374506f7374734f7574707574223982e30a188ae30a1464697363757373696f6e3a706f73743a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493020812062f706f7374731291010a0a437265617465506f737412222e656f6c796d702e64697363757373696f6e2e437265617465506f7374496e7075741a232e656f6c796d702e64697363757373696f6e2e437265617465506f73744f7574707574223a82e30a198ae30a1564697363757373696f6e3a706f73743a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e493020822062f706f737473129b010a0a557064617465506f737412222e656f6c796d702e64697363757373696f6e2e557064617465506f7374496e7075741a232e656f6c796d702e64697363757373696f6e2e557064617465506f73744f7574707574224482e30a198ae30a1564697363757373696f6e3a706f73743a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e49302121a102f706f7374732f7b706f73745f69647d129b010a0a44656c657465506f737412222e656f6c796d702e64697363757373696f6e2e44656c657465506f7374496e7075741a232e656f6c796d702e64697363757373696f6e2e44656c657465506f73744f7574707574224482e30a198ae30a1564697363757373696f6e3a706f73743a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e49302122a102f706f7374732f7b706f73745f69647d42375a356769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f64697363757373696f6e3b64697363757373696f6e620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
