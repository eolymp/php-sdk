<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/task.proto

namespace GPBMetadata\Eolymp\Executor;

class Task
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Executor\Interactor::initOnce();
        \GPBMetadata\Eolymp\Executor\Verifier::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a87080a1a656f6c796d702f6578656375746f722f7461736b2e70726f746f120f656f6c796d702e6578656375746f721a1e656f6c796d702f6578656375746f722f76657269666965722e70726f746f22fa060a045461736b12110a097265666572656e6365180120012809120e0a066f726967696e18022001280912100a087072696f7269747918032001280d120d0a046c616e6718e80720012809120f0a0772756e74696d65180a20012809120e0a06736f75726365180b2001280912130a0b7573655f66696c655f696f180c2001280812210a1972656469726563745f7374646572725f746f5f7374646f7574180d20012808121d0a157573655f776f726b73706163655f61726368697665180f2001280812390a0d707265636f6e646974696f6e7318282003280b32222e656f6c796d702e6578656375746f722e5461736b2e507265636f6e646974696f6e12350a0b636f6e73747261696e747318142003280b32202e656f6c796d702e6578656375746f722e5461736b2e436f6e73747261696e74122b0a08766572696669657218182001280b32192e656f6c796d702e6578656375746f722e5665726966696572122f0a0a696e7465726163746f7218192001280b321b2e656f6c796d702e6578656375746f722e496e7465726163746f7212270a0472756e73181e2003280b32192e656f6c796d702e6578656375746f722e5461736b2e52756e1ad1010a0352756e12110a097265666572656e6365180120012809120d0a05696e64657818022001280d120d0a056465627567180320012808120c0a04636f7374180420012802120e0a066c6162656c73181e2003280912190a0f696e7075745f6f626a6563745f6964180a20012809480012170a0d696e7075745f636f6e74656e74180b200128094800121a0a10616e737765725f6f626a6563745f6964181420012809480112180a0e616e737765725f636f6e74656e74181520012809480142070a05696e70757442080a06616e737765721a690a0c507265636f6e646974696f6e12100a0873656c6563746f7218012003280912120a0a646570656e64735f6f6e180a2003280912170a0f73746f705f6f6e5f6661696c757265180b20012808121a0a126d61785f657865637574696f6e5f74696d65180c2001280d1a7e0a0a436f6e73747261696e7412100a0873656c6563746f7218012003280912170a0f77616c6c5f74696d655f6c696d6974180a2001280d12160a0e6370755f74696d655f6c696d6974180b2001280d12140a0c6d656d6f72795f6c696d6974180c2001280412170a0f66696c655f73697a655f6c696d6974180d2001280442335a316769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f6578656375746f723b6578656375746f72620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

