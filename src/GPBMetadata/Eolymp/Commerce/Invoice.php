<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/commerce/invoice.proto

namespace GPBMetadata\Eolymp\Commerce;

class Invoice
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Commerce\Price::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac70b0a1d656f6c796d702f636f6d6d657263652f696e766f6963652e70726f746f120f656f6c796d702e636f6d6d657263651a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f22b60a0a07496e766f696365120a0a026964180120012809120e0a066e756d626572180220012809122f0a0673746174757318032001280e321f2e656f6c796d702e636f6d6d657263652e496e766f6963652e53746174757312130a0b637573746f6d65725f696418042001280912130a0b6465736372697074696f6e180520012809123a0a0c66726f6d5f696e766f69636518062001280b32242e656f6c796d702e636f6d6d657263652e496e766f6963652e46726f6d496e766f696365122e0a0a637265617465645f6174180a2001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70122a0a066475655f6174180b2001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70121a0a12686f737465645f696e766f6963655f75726c181f2001280912170a0f696e766f6963655f7064665f75726c18202001280912100a0863757272656e637918642001280912120a0a616d6f756e745f64756518782001280512130a0b616d6f756e745f7061696418792001280512180a10616d6f756e745f72656d61696e696e67187a2001280512110a08737562746f74616c18820120012805121f0a16737562746f74616c5f6578636c7564696e675f7461781883012001280512380a0b7461785f616d6f756e7473188d012003280b32222e656f6c796d702e636f6d6d657263652e496e766f6963652e546178416d6f756e74120c0a03746178188c012001280512420a10646973636f756e745f616d6f756e74731896012003280b32272e656f6c796d702e636f6d6d657263652e496e766f6963652e446973636f756e74416d6f756e74120e0a05746f74616c18c80120012805121c0a13746f74616c5f6578636c7564696e675f74617818c90120012805122d0a056974656d7318e7072003280b321d2e656f6c796d702e636f6d6d657263652e496e766f6963652e4974656d1abf020a044974656d120a0a02696418012001280912130a0b6465736372697074696f6e18022001280912100a087175616e74697479180a2001280d12250a05707269636518142001280b32162e656f6c796d702e636f6d6d657263652e507269636512100a0863757272656e6379186420012809120e0a06616d6f756e74186520012805121c0a14616d6f756e745f6578636c7564696e675f74617818662001280512210a19756e69745f616d6f756e745f6578636c7564696e675f74617818672001280512410a10646973636f756e745f616d6f756e747318682003280b32272e656f6c796d702e636f6d6d657263652e496e766f6963652e446973636f756e74416d6f756e7412370a0b7461785f616d6f756e747318692003280b32222e656f6c796d702e636f6d6d657263652e496e766f6963652e546178416d6f756e741a730a09546178416d6f756e74120e0a06616d6f756e7418012001280512110a09696e636c757369766518022001280812100a087461785f7261746518032001280912190a117461786162696c6974795f726561736f6e18042001280912160a0e74617861626c655f616d6f756e74180a200128051a320a0e446973636f756e74416d6f756e74120e0a06616d6f756e7418012001280512100a08646973636f756e741802200128091a300a0b46726f6d496e766f69636512100a0872656c6174696f6e180120012809120f0a07696e766f69636518022001280922580a0653746174757312120a0e554e4b4e4f574e5f535441545553100012090a054452414654100112080a044f50454e100212080a0450414944100312110a0d554e434f4c4c45435449424c45100412080a04564f4944100542335a316769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f636f6d6d657263653b636f6d6d65726365620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
