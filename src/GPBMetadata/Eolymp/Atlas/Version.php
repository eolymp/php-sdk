<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/version.proto

namespace GPBMetadata\Eolymp\Atlas;

class Version
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
            "0a96040a1a656f6c796d702f61746c61732f76657273696f6e2e70726f746f120c656f6c796d702e61746c61731a1d656f6c796d702f61746c61732f6174746163686d656e742e70726f746f1a1d656f6c796d702f61746c61732f7065726d697373696f6e2e70726f746f1a1a656f6c796d702f61746c61732f70726f626c656d2e70726f746f1a1c656f6c796d702f61746c61732f73746174656d656e742e70726f746f1a1b656f6c796d702f61746c61732f74656d706c6174652e70726f746f1a17656f6c796d702f61746c61732f746573742e70726f746f1a1a656f6c796d702f61746c61732f746573747365742e70726f746f1a20656f6c796d702f6578656375746f722f696e7465726163746f722e70726f746f1a1e656f6c796d702f6578656375746f722f76657269666965722e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f2285010a0756657273696f6e120e0a066e756d62657218012001280d122e0a0a637265617465645f617418022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012120a0a637265617465645f627918032001280912110a096368616e67655f6f7018042001280912130a0b6368616e67655f70617468180520012809422d5a2b6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f61746c61733b61746c6173620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

