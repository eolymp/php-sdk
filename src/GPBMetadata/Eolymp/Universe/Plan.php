<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/universe/plan.proto

namespace GPBMetadata\Eolymp\Universe;

class Plan
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Ecm\Content::initOnce();
        \GPBMetadata\Eolymp\Universe\Quota::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac2040a1a656f6c796d702f756e6976657273652f706c616e2e70726f746f120f656f6c796d702e756e6976657273651a1b656f6c796d702f756e6976657273652f71756f74612e70726f746f22b8030a04506c616e120a0a026964180120012809120c0a046e616d6518022001280912280a0b6465736372697074696f6e18032001280b32132e656f6c796d702e65636d2e436f6e74656e7412250a0571756f746118042001280b32162e656f6c796d702e756e6976657273652e51756f7461120e0a066c6162656c73180520032809122f0a0876617269616e747318642003280b321d2e656f6c796d702e756e6976657273652e506c616e2e56617269616e741a720a0756617269616e74120a0a02696418012001280912340a0a726563757272656e636518032001280e32202e656f6c796d702e756e6976657273652e506c616e2e526563757272656e636512100a0863757272656e6379181e2001280912130a0b756e69745f616d6f756e74181f2001280522440a054578747261120c0a084e4f5f4558545241100012160a124445534352495054494f4e5f52454e444552100112150a114445534352495054494f4e5f56414c55451002224a0a0a526563757272656e636512160a12554e4b4e4f574e5f524543555252454e43451000120b0a074f4e4554494d451001120b0a074d4f4e54484c591002120a0a06594541524c59100342335a316769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f756e6976657273653b756e697665727365620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

