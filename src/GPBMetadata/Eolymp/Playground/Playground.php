<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/playground/playground.proto

namespace GPBMetadata\Eolymp\Playground;

class Playground
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
        \GPBMetadata\Eolymp\Playground\Run::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aff060a22656f6c796d702f706c617967726f756e642f706c617967726f756e642e70726f746f1211656f6c796d702e706c617967726f756e641a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a1b656f6c796d702f706c617967726f756e642f72756e2e70726f746f22cc010a0e43726561746552756e496e707574120c0a046c616e67180120012809120f0a0772756e74696d65180220012809120e0a06736f75726365181f2001280912120a0a736f757263655f65726e181e2001280912110a09696e7075745f65726e180a2001280912130a0b70726f626c656d5f65726e181420012809120d0a05696e70757418032001280912170a0d696e7075745f636f6e74656e7418042001280c480012190a0f696e7075745f6f626a6563745f69641805200128094800420c0a0a696e7075745f6461746122210a0f43726561746552756e4f7574707574120e0a0672756e5f696418012001280922220a10446573637269626552756e496e707574120e0a0672756e5f696418012001280922380a11446573637269626552756e4f757470757412230a0372756e18012001280b32162e656f6c796d702e706c617967726f756e642e52756e32d3020a0a506c617967726f756e641297010a0943726561746552756e12212e656f6c796d702e706c617967726f756e642e43726561746552756e496e7075741a222e656f6c796d702e706c617967726f756e642e43726561746552756e4f7574707574224382e30a188ae30a14706c617967726f756e643a72756e3a7772697465eae20a0bf5e20a0ad7233ef8e20a0582d3e493021222102f706c617967726f756e642f72756e7312aa010a0b446573637269626552756e12232e656f6c796d702e706c617967726f756e642e446573637269626552756e496e7075741a242e656f6c796d702e706c617967726f756e642e446573637269626552756e4f7574707574225082e30a178ae30a13706c617967726f756e643a72756e3a72656164eae20a0bf5e20a00000040f8e20a0a82d3e493022012192f706c617967726f756e642f72756e732f7b72756e5f69647d620372756e42375a356769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f706c617967726f756e643b706c617967726f756e64620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

