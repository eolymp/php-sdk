<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/geography/geography.proto

namespace GPBMetadata\Eolymp\Geography;

class Geography
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Geography\Country::initOnce();
        \GPBMetadata\Eolymp\Geography\Region::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a920e0a20656f6c796d702f67656f6772617068792f67656f6772617068792e70726f746f1210656f6c796d702e67656f6772617068791a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f67656f6772617068792f636f756e7472792e70726f746f1a1d656f6c796d702f67656f6772617068792f726567696f6e2e70726f746f1a21656f6c796d702f77656c6c6b6e6f776e2f65787072657373696f6e2e70726f746f222a0a144465736372696265436f756e747279496e70757412120a0a636f756e7472795f696418012001280922430a154465736372696265436f756e7472794f7574707574122a0a07636f756e74727918012001280b32192e656f6c796d702e67656f6772617068792e436f756e74727922a9010a124c697374436f756e7472696573496e707574120e0a066f6666736574180a20012805120c0a0473697a65180b200128051a750a0646696c746572120d0a057175657279180120012809122a0a02696418022003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412300a046e616d6518032003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e67224e0a134c697374436f756e74726965734f757470757412280a056974656d7318012003280b32192e656f6c796d702e67656f6772617068792e436f756e747279120d0a05746f74616c18022001280522280a134465736372696265526567696f6e496e70757412110a09726567696f6e5f696418012001280922400a144465736372696265526567696f6e4f757470757412280a06726567696f6e18012001280b32182e656f6c796d702e67656f6772617068792e526567696f6e22f0010a104c697374526567696f6e73496e707574120e0a066f6666736574180a20012805120c0a0473697a65180b2001280512120a0a636f756e7472795f69641801200128091aa9010a0646696c746572120d0a057175657279180120012809122a0a02696418022003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412320a0a636f756e7472795f696418032003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412300a046e616d6518042003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e67224b0a114c697374526567696f6e734f757470757412270a056974656d7318012003280b32182e656f6c796d702e67656f6772617068792e526567696f6e120d0a05746f74616c18022001280532fd050a0947656f677261706879129d010a0f4465736372696265436f756e74727912262e656f6c796d702e67656f6772617068792e4465736372696265436f756e747279496e7075741a272e656f6c796d702e67656f6772617068792e4465736372696265436f756e7472794f75747075742239eae20a0cf5e20a00004842f8e20af40382d3e493022312212f67656f6772617068792f636f756e74726965732f7b636f756e7472795f69647d128a010a0d4c697374436f756e747269657312242e656f6c796d702e67656f6772617068792e4c697374436f756e7472696573496e7075741a252e656f6c796d702e67656f6772617068792e4c697374436f756e74726965734f7574707574222ceae20a0cf5e20a00004842f8e20af40382d3e493021612142f67656f6772617068792f636f756e74726965731297010a0e4465736372696265526567696f6e12252e656f6c796d702e67656f6772617068792e4465736372696265526567696f6e496e7075741a262e656f6c796d702e67656f6772617068792e4465736372696265526567696f6e4f75747075742236eae20a0cf5e20a00004842f8e20af40382d3e4930220121e2f67656f6772617068792f726567696f6e732f7b726567696f6e5f69647d1282010a0b4c697374526567696f6e7312222e656f6c796d702e67656f6772617068792e4c697374526567696f6e73496e7075741a232e656f6c796d702e67656f6772617068792e4c697374526567696f6e734f7574707574222aeae20a0cf5e20a00004842f8e20af40382d3e493021412122f67656f6772617068792f726567696f6e7312a3010a15446570726563617465644c697374526567696f6e7312222e656f6c796d702e67656f6772617068792e4c697374526567696f6e73496e7075741a232e656f6c796d702e67656f6772617068792e4c697374526567696f6e734f75747075742241eae20a0cf5e20a00004842f8e20af40382d3e493022b12292f67656f6772617068792f636f756e74726965732f7b636f756e7472795f69647d2f726567696f6e7342355a336769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f67656f6772617068793b67656f677261706879620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

