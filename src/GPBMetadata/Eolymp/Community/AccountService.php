<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/account_service.proto

namespace GPBMetadata\Eolymp\Community;

class AccountService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Community\Member::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae3120a26656f6c796d702f636f6d6d756e6974792f6163636f756e745f736572766963652e70726f746f1210656f6c796d702e636f6d6d756e6974791a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1d656f6c796d702f636f6d6d756e6974792f6d656d6265722e70726f746f229c010a124372656174654163636f756e74496e70757412100a086e69636b6e616d65180120012809120d0a05656d61696c18022001280912100a0870617373776f7264180320012809120e0a066c6f63616c65180a2001280912320a0a6174747269627574657318322003280b321e2e656f6c796d702e636f6d6d756e6974792e4d656d6265722e56616c7565120f0a076361707463686118642001280922360a134372656174654163636f756e744f757470757412110a096d656d6265725f6964180120012809120c0a0468696e7418642001280922160a1444657363726962654163636f756e74496e7075742297010a1544657363726962654163636f756e744f757470757412100a086e69636b6e616d65180a20012809121f0a176e69636b6e616d655f6368616e67655f74696d656f7574180b2001280d120d0a05656d61696c18142001280912160a0e656d61696c5f766572696669656418152001280812140a0c70617373776f72645f616765181e2001280d120e0a066c6f63616c651832200128092289020a125570646174654163636f756e74496e707574120d0a05706174636818012003280912180a1063757272656e745f70617373776f726418022001280912100a086e69636b6e616d65180a20012809120d0a05656d61696c180b2001280912100a0870617373776f7264180c20012809120e0a066c6f63616c6518142001280912320a0a6174747269627574657318322003280b321e2e656f6c796d702e636f6d6d756e6974792e4d656d6265722e56616c756522530a05506174636812070a03414c4c1000120c0a084e49434b4e414d45100112090a05454d41494c1002120c0a0850415353574f52441003120a0a064c4f43414c451004120e0a0a41545452494255544553100522230a135570646174654163636f756e744f7574707574120c0a0468696e7418012001280922140a1244656c6574654163636f756e74496e70757422150a1344656c6574654163636f756e744f757470757422190a17526573656e64566572696669636174696f6e496e707574221a0a18526573656e64566572696669636174696f6e4f757470757422290a19436f6d706c657465566572696669636174696f6e496e707574120c0a04636f6465180120012809221c0a1a436f6d706c657465566572696669636174696f6e4f757470757422440a1253746172745265636f76657279496e707574120d0a05656d61696c180120012809120e0a066c6f63616c65180220012809120f0a076361707463686118642001280922230a1353746172745265636f766572794f7574707574120c0a0468696e7418012001280922360a14436f6d706c6574655265636f766572496e707574120c0a04636f646518012001280912100a0870617373776f726418022001280922170a15436f6d706c6574655265636f7665724f75747075743281090a0e4163636f756e7453657276696365127d0a0d4372656174654163636f756e7412242e656f6c796d702e636f6d6d756e6974792e4372656174654163636f756e74496e7075741a252e656f6c796d702e636f6d6d756e6974792e4372656174654163636f756e744f7574707574221feae20a0bf5e20a00002041f8e20a3282d3e493020a22082f6163636f756e741283010a0f44657363726962654163636f756e7412262e656f6c796d702e636f6d6d756e6974792e44657363726962654163636f756e74496e7075741a272e656f6c796d702e636f6d6d756e6974792e44657363726962654163636f756e744f7574707574221feae20a0bf5e20a00002041f8e20a3282d3e493020a12082f6163636f756e74127d0a0d5570646174654163636f756e7412242e656f6c796d702e636f6d6d756e6974792e5570646174654163636f756e74496e7075741a252e656f6c796d702e636f6d6d756e6974792e5570646174654163636f756e744f7574707574221feae20a0bf5e20a0000803ff8e20a0582d3e493020a1a082f6163636f756e74127d0a0d44656c6574654163636f756e7412242e656f6c796d702e636f6d6d756e6974792e44656c6574654163636f756e74496e7075741a252e656f6c796d702e636f6d6d756e6974792e44656c6574654163636f756e744f7574707574221feae20a0bf5e20a0000803ff8e20a0a82d3e493020a2a082f6163636f756e7412a0010a12526573656e64566572696669636174696f6e12292e656f6c796d702e636f6d6d756e6974792e526573656e64566572696669636174696f6e496e7075741a2a2e656f6c796d702e636f6d6d756e6974792e526573656e64566572696669636174696f6e4f75747075742233eae20a0bf5e20a0000803ff8e20a0582d3e493021e221c2f6163636f756e742f766572696669636174696f6e2f726573656e6412a8010a14436f6d706c657465566572696669636174696f6e122b2e656f6c796d702e636f6d6d756e6974792e436f6d706c657465566572696669636174696f6e496e7075741a2c2e656f6c796d702e636f6d6d756e6974792e436f6d706c657465566572696669636174696f6e4f75747075742235eae20a0bf5e20a0000803ff8e20a0182d3e4930220221e2f6163636f756e742f766572696669636174696f6e2f636f6d706c6574651285010a0d53746172745265636f7665727912242e656f6c796d702e636f6d6d756e6974792e53746172745265636f76657279496e7075741a252e656f6c796d702e636f6d6d756e6974792e53746172745265636f766572794f75747075742227eae20a0bf5e20a00002041f8e20a3282d3e493021222102f6163636f756e742f7265636f7665721295010a10436f6d706c6574655265636f7665727912262e656f6c796d702e636f6d6d756e6974792e436f6d706c6574655265636f766572496e7075741a272e656f6c796d702e636f6d6d756e6974792e436f6d706c6574655265636f7665724f75747075742230eae20a0bf5e20a00002041f8e20a3282d3e493021b22192f6163636f756e742f7265636f7665722f636f6d706c65746542355a336769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f636f6d6d756e6974793b636f6d6d756e697479620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

