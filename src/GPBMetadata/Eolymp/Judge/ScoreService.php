<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/score_service.proto

namespace GPBMetadata\Eolymp\Judge;

class ScoreService
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
        \GPBMetadata\Eolymp\Judge\Result::initOnce();
        \GPBMetadata\Eolymp\Judge\Score::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0adc0f0a20656f6c796d702f6a756467652f73636f72655f736572766963652e70726f746f120c656f6c796d702e6a756467651a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a19656f6c796d702f6a756467652f726573756c742e70726f746f1a18656f6c796d702f6a756467652f73636f72652e70726f746f22270a1152656275696c6453636f7265496e70757412120a0a636f6e746573745f696418012001280922290a1252656275696c6453636f72654f757470757412130a0b61637469766974795f6964180120012809222a0a14496e74726f737065637453636f7265496e70757412120a0a636f6e746573745f6964180120012809223b0a15496e74726f737065637453636f72654f757470757412220a0573636f726518012001280b32132e656f6c796d702e6a756467652e53636f72652285010a12446573637269626553636f7265496e70757412120a0a636f6e746573745f696418012001280912160a0e7061727469636970616e745f6964180220012809122e0a046d6f646518032001280e32202e656f6c796d702e6a756467652e53636f72652e4665746368696e674d6f646512130a0b74696d655f6f666673657418042001280522390a13446573637269626553636f72654f757470757412220a0573636f726518012001280b32132e656f6c796d702e6a756467652e53636f726522630a10496d706f727453636f7265496e70757412120a0a636f6e746573745f696418012001280912160a0e7061727469636970616e745f696418022001280912230a0673636f726573180a2003280b32132e656f6c796d702e6a756467652e53636f726522130a11496d706f727453636f72654f7574707574223e0a104578706f727453636f7265496e70757412120a0a636f6e746573745f696418012001280912160a0e7061727469636970616e745f696418022001280922380a114578706f727453636f72654f757470757412230a0673636f726573180a2003280b32132e656f6c796d702e6a756467652e53636f72652288010a0f4c697374526573756c74496e70757412120a0a636f6e746573745f6964180120012809122e0a046d6f646518022001280e32202e656f6c796d702e6a756467652e53636f72652e4665746368696e674d6f646512130a0b74696d655f6f6666736574180320012805120e0a066f6666736574180a20012805120c0a0473697a65180b2001280522460a104c697374526573756c744f7574707574120d0a05746f74616c18012001280512230a056974656d7318022003280b32142e656f6c796d702e6a756467652e526573756c7432b2070a0c53636f7265536572766963651284010a0f496e74726f737065637453636f726512222e656f6c796d702e6a756467652e496e74726f737065637453636f7265496e7075741a232e656f6c796d702e6a756467652e496e74726f737065637453636f72654f75747075742228eae20a0bf5e20a00002041f8e20a3282d3e493021312112f696e74726f73706563742f73636f726512ac010a0d446573637269626553636f726512202e656f6c796d702e6a756467652e446573637269626553636f7265496e7075741a212e656f6c796d702e6a756467652e446573637269626553636f72654f7574707574225682e30a168ae30a126a756467653a636f6e746573743a72656164eae20a0cf5e20a00004842f8e20ac80182d3e493022612242f7061727469636970616e74732f7b7061727469636970616e745f69647d2f73636f726512a7010a0b496d706f727453636f7265121e2e656f6c796d702e6a756467652e496d706f727453636f7265496e7075741a1f2e656f6c796d702e6a756467652e496d706f727453636f72654f7574707574225782e30a168ae30a126a756467653a636f6e746573743a72656164eae20a0cf5e20a00004842f8e20ac80182d3e493022722252f7061727469636970616e74732f7b7061727469636970616e745f69647d2f73636f72657312a7010a0b4578706f727453636f7265121e2e656f6c796d702e6a756467652e4578706f727453636f7265496e7075741a1f2e656f6c796d702e6a756467652e4578706f727453636f72654f7574707574225782e30a168ae30a126a756467653a636f6e746573743a72656164eae20a0cf5e20a00004842f8e20ac80182d3e493022712252f7061727469636970616e74732f7b7061727469636970616e745f69647d2f73636f7265731287010a0a4c697374526573756c74121d2e656f6c796d702e6a756467652e4c697374526573756c74496e7075741a1e2e656f6c796d702e6a756467652e4c697374526573756c744f7574707574223a82e30a168ae30a126a756467653a636f6e746573743a72656164eae20a0cf5e20a00004842f8e20ac80182d3e493020a12082f726573756c7473128d010a0c52656275696c6453636f7265121f2e656f6c796d702e6a756467652e52656275696c6453636f7265496e7075741a202e656f6c796d702e6a756467652e52656275696c6453636f72654f7574707574223a82e30a178ae30a136a756467653a636f6e746573743a7772697465eae20a0bf5e20a00000040f8e20a0a82d3e493020a22082f72656275696c64422d5a2b6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f6a756467653b6a75646765620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
