<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/configuration_service.proto

namespace GPBMetadata\Eolymp\Discussion;

class ConfigurationService
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
        \GPBMetadata\Eolymp\Discussion\Configuration::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aeb070a2d656f6c796d702f64697363757373696f6e2f636f6e66696775726174696f6e5f736572766963652e70726f746f1211656f6c796d702e64697363757373696f6e1a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a25656f6c796d702f64697363757373696f6e2f636f6e66696775726174696f6e2e70726f746f221f0a1d446573637269626544697363757373696f6e436f6e666967496e70757422520a1e446573637269626544697363757373696f6e436f6e6669674f757470757412300a06636f6e66696718012001280b32202e656f6c796d702e64697363757373696f6e2e436f6e66696775726174696f6e22f4010a1b55706461746544697363757373696f6e436f6e666967496e70757412300a06636f6e66696718012001280b32202e656f6c796d702e64697363757373696f6e2e436f6e66696775726174696f6e22a2010a05506174636812070a03414c4c1000121c0a184d454d424552535f43414e5f4352454154455f504f535453100112200a1c4d454d424552535f43414e5f434f4d4d454e545f4f4e5f504f535453100212230a1f4d454d424552535f43414e5f434f4d4d454e545f4f4e5f50524f424c454d53100312130a0f504f53545f4d4f4445524154494f4e100412160a12434f4d4d454e545f4d4f4445524154494f4e1005221e0a1c55706461746544697363757373696f6e436f6e6669674f757470757432ee020a14436f6e66696775726174696f6e5365727669636512ac010a18446573637269626544697363757373696f6e436f6e66696712302e656f6c796d702e64697363757373696f6e2e446573637269626544697363757373696f6e436f6e666967496e7075741a312e656f6c796d702e64697363757373696f6e2e446573637269626544697363757373696f6e436f6e6669674f7574707574222beae20a0bf5e20a00002041f8e20a6482d3e493021612142f636f6e666967732f64697363757373696f6e7312a6010a1655706461746544697363757373696f6e436f6e666967122e2e656f6c796d702e64697363757373696f6e2e55706461746544697363757373696f6e436f6e666967496e7075741a2f2e656f6c796d702e64697363757373696f6e2e55706461746544697363757373696f6e436f6e6669674f7574707574222beae20a0bf5e20a0000803ff8e20a0582d3e49302161a142f636f6e666967732f64697363757373696f6e7342375a356769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f64697363757373696f6e3b64697363757373696f6e620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

