<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/feed/entry_service.proto

namespace GPBMetadata\Eolymp\Feed;

class EntryService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Feed\Entry::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af4040a1f656f6c796d702f666565642f656e7472795f736572766963652e70726f746f120b656f6c796d702e666565641a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a17656f6c796d702f666565642f656e7472792e70726f746f222f0a104c697374456e7472696573496e707574120c0a0473697a65180b20012805120d0a056166746572180c2001280922450a114c697374456e74726965734f7574707574120d0a05746f74616c18012001280512210a056974656d7318022003280b32122e656f6c796d702e666565642e456e74727922260a124465736372696265456e747279496e70757412100a08656e7472795f696418012001280922380a134465736372696265456e7472794f757470757412210a05656e74727918012001280b32122e656f6c796d702e666565642e456e74727932f7010a0c456e74727953657276696365126a0a0b4c697374456e7472696573121d2e656f6c796d702e666565642e4c697374456e7472696573496e7075741a1e2e656f6c796d702e666565642e4c697374456e74726965734f7574707574221ceae20a0bf5e20a0000a040f8e20a1482d3e493020712052f66656564127b0a0d4465736372696265456e747279121f2e656f6c796d702e666565642e4465736372696265456e747279496e7075741a202e656f6c796d702e666565642e4465736372696265456e7472794f75747075742227eae20a0bf5e20a0000a040f8e20a1482d3e493021212102f666565642f7b656e7472795f69647d422b5a296769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f666565643b66656564620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

