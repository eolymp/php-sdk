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
            "0abe160a26656f6c796d702f636f6d6d756e6974792f6163636f756e745f736572766963652e70726f746f1210656f6c796d702e636f6d6d756e6974791a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1d656f6c796d702f636f6d6d756e6974792f6d656d6265722e70726f746f224f0a124372656174654163636f756e74496e70757412280a066d656d62657218012001280b32182e656f6c796d702e636f6d6d756e6974792e4d656d626572120f0a076361707463686118642001280922360a134372656174654163636f756e744f757470757412110a096d656d6265725f6964180120012809120c0a0468696e7418642001280922160a1444657363726962654163636f756e74496e7075742299010a1544657363726962654163636f756e744f757470757412280a066d656d62657218012001280b32182e656f6c796d702e636f6d6d756e6974792e4d656d62657212260a047465616d18022001280b32182e656f6c796d702e636f6d6d756e6974792e4d656d626572122e0a05657874726118e3082003280e321e2e656f6c796d702e636f6d6d756e6974792e4d656d6265722e457874726122d3030a125570646174654163636f756e74496e70757412390a05706174636818012003280e322a2e656f6c796d702e636f6d6d756e6974792e5570646174654163636f756e74496e7075742e506174636812180a1063757272656e745f70617373776f726418022001280912280a066d656d626572180a2001280b32182e656f6c796d702e636f6d6d756e6974792e4d656d62657222bd020a05506174636812070a03414c4c100012110a0d555345525f4e49434b4e414d451065120e0a0a555345525f454d41494c106612110a0d555345525f50415353574f52441067120d0a09555345525f4e414d45106812100a0c555345525f50494354555245106912110a0d555345525f4249525448444159106a12100a0c555345525f434f554e545259106b120d0a09555345525f43495459106c12140a10555345525f505245464552454e434553106d121c0a17555345525f505245464552454e4345535f4c4f43414c4510be01121e0a19555345525f505245464552454e4345535f54494d455a4f4e4510bf01121d0a18555345525f505245464552454e4345535f52554e54494d4510c001121c0a18555345525f454d41494c5f535542534352495054494f4e53106e120f0a0a4154545249425554455310840722230a135570646174654163636f756e744f7574707574120c0a0468696e7418012001280922660a1255706c6f616450696374757265496e70757412100a0866696c656e616d65180120012809120c0a046461746118022001280c12100a086f66667365745f78180a2001280d12100a086f66667365745f79180b2001280d120c0a0473697a65180c2001280d222a0a1355706c6f6164506963747572654f757470757412130a0b706963747572655f75726c18012001280922140a1244656c6574654163636f756e74496e70757422150a1344656c6574654163636f756e744f757470757422190a17526573656e64566572696669636174696f6e496e707574221a0a18526573656e64566572696669636174696f6e4f7574707574223c0a19436f6d706c657465566572696669636174696f6e496e707574120c0a04636f646518012001280912110a096d656d6265725f6964180220012809221c0a1a436f6d706c657465566572696669636174696f6e4f757470757422440a1253746172745265636f76657279496e707574120d0a05656d61696c180120012809120e0a066c6f63616c65180220012809120f0a076361707463686118642001280922360a1353746172745265636f766572794f7574707574120c0a0468696e7418012001280912110a096d656d6265725f696418022001280922490a14436f6d706c6574655265636f766572496e707574120c0a04636f646518012001280912100a0870617373776f726418022001280912110a096d656d6265725f696418032001280922170a15436f6d706c6574655265636f7665724f757470757432910a0a0e4163636f756e7453657276696365127d0a0d4372656174654163636f756e7412242e656f6c796d702e636f6d6d756e6974792e4372656174654163636f756e74496e7075741a252e656f6c796d702e636f6d6d756e6974792e4372656174654163636f756e744f7574707574221feae20a0bf5e20a00002041f8e20a3282d3e493020a22082f6163636f756e741283010a0f44657363726962654163636f756e7412262e656f6c796d702e636f6d6d756e6974792e44657363726962654163636f756e74496e7075741a272e656f6c796d702e636f6d6d756e6974792e44657363726962654163636f756e744f7574707574221feae20a0bf5e20a00002041f8e20a3282d3e493020a12082f6163636f756e74127d0a0d5570646174654163636f756e7412242e656f6c796d702e636f6d6d756e6974792e5570646174654163636f756e74496e7075741a252e656f6c796d702e636f6d6d756e6974792e5570646174654163636f756e744f7574707574221feae20a0bf5e20a0000803ff8e20a0582d3e493020a1a082f6163636f756e741285010a0d55706c6f61645069637475726512242e656f6c796d702e636f6d6d756e6974792e55706c6f616450696374757265496e7075741a252e656f6c796d702e636f6d6d756e6974792e55706c6f6164506963747572654f75747075742227eae20a0bf5e20a0000803ff8e20a0582d3e493021222102f6163636f756e742f70696374757265127d0a0d44656c6574654163636f756e7412242e656f6c796d702e636f6d6d756e6974792e44656c6574654163636f756e74496e7075741a252e656f6c796d702e636f6d6d756e6974792e44656c6574654163636f756e744f7574707574221feae20a0bf5e20a0000803ff8e20a0a82d3e493020a2a082f6163636f756e7412a0010a12526573656e64566572696669636174696f6e12292e656f6c796d702e636f6d6d756e6974792e526573656e64566572696669636174696f6e496e7075741a2a2e656f6c796d702e636f6d6d756e6974792e526573656e64566572696669636174696f6e4f75747075742233eae20a0bf5e20a0000803ff8e20a0582d3e493021e221c2f6163636f756e742f766572696669636174696f6e2f726573656e6412a8010a14436f6d706c657465566572696669636174696f6e122b2e656f6c796d702e636f6d6d756e6974792e436f6d706c657465566572696669636174696f6e496e7075741a2c2e656f6c796d702e636f6d6d756e6974792e436f6d706c657465566572696669636174696f6e4f75747075742235eae20a0bf5e20a0000803ff8e20a0182d3e4930220221e2f6163636f756e742f766572696669636174696f6e2f636f6d706c657465128c010a0d53746172745265636f7665727912242e656f6c796d702e636f6d6d756e6974792e53746172745265636f76657279496e7075741a252e656f6c796d702e636f6d6d756e6974792e53746172745265636f766572794f7574707574222eeae20a0bf5e20a00000040f8e20a0582d3e493021922172f6163636f756e742f7265636f766572792f73746172741296010a10436f6d706c6574655265636f7665727912262e656f6c796d702e636f6d6d756e6974792e436f6d706c6574655265636f766572496e7075741a272e656f6c796d702e636f6d6d756e6974792e436f6d706c6574655265636f7665724f75747075742231eae20a0bf5e20a00002041f8e20a3282d3e493021c221a2f6163636f756e742f7265636f766572792f636f6d706c65746542355a336769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f636f6d6d756e6974793b636f6d6d756e697479620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

