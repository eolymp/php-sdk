<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/solution_service.proto

namespace GPBMetadata\Eolymp\Atlas;

class SolutionService
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
        \GPBMetadata\Eolymp\Atlas\Solution::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af50d0a23656f6c796d702f61746c61732f736f6c7574696f6e5f736572766963652e70726f746f120c656f6c796d702e61746c61731a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a1b656f6c796d702f61746c61732f736f6c7574696f6e2e70726f746f22390a124c697374536f6c7574696f6e73496e70757412120a0a70726f626c656d5f6964180120012809120f0a0776657273696f6e18642001280d224b0a134c697374536f6c7574696f6e734f7574707574120d0a05746f74616c18012001280512250a056974656d7318022003280b32162e656f6c796d702e61746c61732e536f6c7574696f6e22510a154465736372696265536f6c7574696f6e496e70757412120a0a70726f626c656d5f696418012001280912130a0b736f6c7574696f6e5f6964180220012809120f0a0776657273696f6e18642001280d22420a164465736372696265536f6c7574696f6e4f757470757412280a08736f6c7574696f6e18012001280b32162e656f6c796d702e61746c61732e536f6c7574696f6e22530a13437265617465536f6c7574696f6e496e70757412120a0a70726f626c656d5f696418012001280912280a08736f6c7574696f6e18022001280b32162e656f6c796d702e61746c61732e536f6c7574696f6e222b0a14437265617465536f6c7574696f6e4f757470757412130a0b736f6c7574696f6e5f696418012001280922df010a13557064617465536f6c7574696f6e496e70757412360a05706174636818012003280e32272e656f6c796d702e61746c61732e557064617465536f6c7574696f6e496e7075742e506174636812120a0a70726f626c656d5f696418022001280912130a0b736f6c7574696f6e5f696418032001280912280a08736f6c7574696f6e18042001280b32162e656f6c796d702e61746c61732e536f6c7574696f6e223d0a05506174636812070a03414c4c100012080a044e414d45100112080a04545950451002120b0a0752554e54494d451003120a0a06534f55524345100422160a14557064617465536f6c7574696f6e4f7574707574223e0a1344656c657465536f6c7574696f6e496e70757412120a0a70726f626c656d5f696418012001280912130a0b736f6c7574696f6e5f696418022001280922160a1444656c657465536f6c7574696f6e4f757470757432b4060a0f536f6c7574696f6e536572766963651295010a0e437265617465536f6c7574696f6e12212e656f6c796d702e61746c61732e437265617465536f6c7574696f6e496e7075741a222e656f6c796d702e61746c61732e437265617465536f6c7574696f6e4f7574707574223c82e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e493020c1a0a2f736f6c7574696f6e7312a3010a0e557064617465536f6c7574696f6e12212e656f6c796d702e61746c61732e557064617465536f6c7574696f6e496e7075741a222e656f6c796d702e61746c61732e557064617465536f6c7574696f6e4f7574707574224a82e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e493021a1a182f736f6c7574696f6e732f7b736f6c7574696f6e5f69647d12a3010a0e44656c657465536f6c7574696f6e12212e656f6c796d702e61746c61732e44656c657465536f6c7574696f6e496e7075741a222e656f6c796d702e61746c61732e44656c657465536f6c7574696f6e4f7574707574224a82e30a178ae30a1361746c61733a70726f626c656d3a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e493021a2a182f736f6c7574696f6e732f7b736f6c7574696f6e5f69647d12a8010a104465736372696265536f6c7574696f6e12232e656f6c796d702e61746c61732e4465736372696265536f6c7574696f6e496e7075741a242e656f6c796d702e61746c61732e4465736372696265536f6c7574696f6e4f7574707574224982e30a168ae30a1261746c61733a70726f626c656d3a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493021a12182f736f6c7574696f6e732f7b736f6c7574696f6e5f69647d1291010a0d4c697374536f6c7574696f6e7312202e656f6c796d702e61746c61732e4c697374536f6c7574696f6e73496e7075741a212e656f6c796d702e61746c61732e4c697374536f6c7574696f6e734f7574707574223b82e30a168ae30a1261746c61733a70726f626c656d3a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493020c120a2f736f6c7574696f6e73422d5a2b6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f61746c61733b61746c6173620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
