<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/guardian/guardian.proto

namespace GPBMetadata\Eolymp\Guardian;

class Guardian
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Guardian\Policy::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ace090a1e656f6c796d702f677561726469616e2f677561726469616e2e70726f746f120f656f6c796d702e677561726469616e1a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1c656f6c796d702f677561726469616e2f706f6c6963792e70726f746f22130a114c697374506f6c6963696573496e707574224b0a124c697374506f6c69636965734f7574707574120d0a05746f74616c18012001280512260a056974656d7318022003280b32172e656f6c796d702e677561726469616e2e506f6c69637922210a134465736372696265506f6c696379496e707574120a0a026964180120012809223f0a144465736372696265506f6c6963794f757470757412270a06706f6c69637918012001280b32172e656f6c796d702e677561726469616e2e506f6c69637922480a11446566696e65506f6c696379496e707574120a0a02696418012001280912270a06706f6c69637918022001280b32172e656f6c796d702e677561726469616e2e506f6c69637922140a12446566696e65506f6c6963794f7574707574221f0a1152656d6f7665506f6c696379496e707574120a0a02696418012001280922140a1252656d6f7665506f6c6963794f7574707574222f0a0d4576616c75617465496e70757412100a087265736f75726365180120012809120c0a046172677318022003280922100a0e4576616c756174654f757470757432fb040a08477561726469616e12790a0c4c697374506f6c696369657312222e656f6c796d702e677561726469616e2e4c697374506f6c6963696573496e7075741a232e656f6c796d702e677561726469616e2e4c697374506f6c69636965734f75747075742220eae20a0bf5e20a00002041f8e20a6482d3e493020b12092f706f6c69636965731284010a0e4465736372696265506f6c69637912242e656f6c796d702e677561726469616e2e4465736372696265506f6c696379496e7075741a252e656f6c796d702e677561726469616e2e4465736372696265506f6c6963794f75747075742225eae20a0bf5e20a00002041f8e20a6482d3e4930210120e2f706f6c69636965732f7b69647d127e0a0c446566696e65506f6c69637912222e656f6c796d702e677561726469616e2e446566696e65506f6c696379496e7075741a232e656f6c796d702e677561726469616e2e446566696e65506f6c6963794f75747075742225eae20a0bf5e20a00002041f8e20a6482d3e49302101a0e2f706f6c69636965732f7b69647d127e0a0c52656d6f7665506f6c69637912222e656f6c796d702e677561726469616e2e52656d6f7665506f6c696379496e7075741a232e656f6c796d702e677561726469616e2e52656d6f7665506f6c6963794f75747075742225eae20a0bf5e20a00002041f8e20a6482d3e49302102a0e2f706f6c69636965732f7b69647d126d0a084576616c75617465121e2e656f6c796d702e677561726469616e2e4576616c75617465496e7075741a1f2e656f6c796d702e677561726469616e2e4576616c756174654f75747075742220eae20a0bf5e20a00002041f8e20a6482d3e493020b2a092f6576616c7561746542335a316769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f677561726469616e3b677561726469616e620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

