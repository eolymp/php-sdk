<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/universe/space.proto

namespace GPBMetadata\Eolymp\Universe;

class Space
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Universe\SpaceAppearanceConfig::initOnce();
        \GPBMetadata\Eolymp\Universe\SpaceUserConfig::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab0070a1b656f6c796d702f756e6976657273652f73706163652e70726f746f120f656f6c796d702e756e6976657273651a27656f6c796d702f756e6976657273652f73706163655f757365725f636f6e6669672e70726f746f2299060a055370616365120a0a026964180120012809120b0a036b6579180220012809120b0a0375726c180320012809120c0a046e616d65180a20012809120d0a05696d616765180b2001280912290a0474797065180c2001280e321b2e656f6c796d702e756e6976657273652e53706163652e54797065120c0a04706c616e180d2001280912350a0a7669736962696c697479180e2001280e32212e656f6c796d702e756e6976657273652e53706163652e5669736962696c69747912100a08686f6d655f75726c18322001280912120a0a6973737565725f75726c18332001280912300a0b757365725f636f6e66696718642001280b321b2e656f6c796d702e756e6976657273652e55736572436f6e666967123c0a11617070656172616e63655f636f6e66696718652001280b32212e656f6c796d702e756e6976657273652e417070656172616e6365436f6e6669671ab4020a0551756f7461121a0a1270726f626c656d735f7065725f737061636518012001280d12190a116d656d626572735f7065725f737061636518022001280d121a0a12636f6e74657374735f7065725f737061636518032001280d12210a196163746976655f636f6e74657374735f7065725f737061636518042001280d121d0a1573636f7265626f617264735f7065725f737061636518052001280d121d0a157065726d697373696f6e735f7065725f737061636518062001280d121c0a14617474726962757465735f7065725f737061636518072001280d12190a11636f75727365735f7065725f7370616365180c2001280d121c0a1470726f626c656d735f7065725f636f6e74657374180a2001280d12200a187061727469636970616e74735f7065725f636f6e74657374180b2001280d22510a045479706512100a0c554e4b4e4f574e5f54595045100012090a054f544845521001120d0a09434c415353524f4f4d1002120c0a085445414d524f4f4d1003120f0a0b434f4d5045544954494f4e1004223d0a0a5669736962696c69747912160a12554e4b4e4f574e5f5649534942494c4954591000120a0a065055424c49431001120b0a0750524956415445100242335a316769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f756e6976657273653b756e697665727365620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

