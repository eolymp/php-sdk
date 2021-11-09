<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/cognito/cognito.proto

namespace GPBMetadata\Eolymp\Cognito;

class Cognito
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Annotations\Scope::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        \GPBMetadata\Eolymp\Cognito\Entitlement::initOnce();
        \GPBMetadata\Eolymp\Cognito\User::initOnce();
        \GPBMetadata\Eolymp\Cognito\Quota::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa12c0a1c656f6c796d702f636f676e69746f2f636f676e69746f2e70726f746f120e656f6c796d702e636f676e69746f1a1d656f6c796d702f616e6e6f746174696f6e732f687474702e70726f746f1a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a21656f6c796d702f77656c6c6b6e6f776e2f65787072657373696f6e2e70726f746f1a20656f6c796d702f636f676e69746f2f656e7469746c656d656e742e70726f746f1a19656f6c796d702f636f676e69746f2f757365722e70726f746f1a1a656f6c796d702f636f676e69746f2f71756f74612e70726f746f22bb020a10437265617465546f6b656e496e707574123e0a0a6772616e745f7479706518012001280e322a2e656f6c796d702e636f676e69746f2e437265617465546f6b656e496e7075742e4772616e745479706512100a08757365726e616d6518022001280912100a0870617373776f726418032001280912110a09636c69656e745f696418042001280912150a0d636c69656e745f736563726574180520012809120c0a04636f646518062001280912150a0d636f64655f7665726966696572180720012809120d0a0573636f706518082001280912150a0d726566726573685f746f6b656e180920012809224e0a094772616e745479706512080a044e4f4e451000120c0a0850415353574f5244100112160a12415554484f52495a4154494f4e5f434f4445100212110a0d524546524553485f544f4b454e100322aa010a11437265617465546f6b656e4f7574707574120d0a05746f6b656e180120012809120c0a0474797065180220012809122e0a0a657870697265735f617418032001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70120e0a0673636f70657318042003280912150a0d726566726573685f746f6b656e180a20012809120f0a07757365725f696418642001280912100a08757365726e616d6518652001280922250a14496e74726f7370656374546f6b656e496e707574120d0a05746f6b656e18012001280922a7010a15496e74726f7370656374546f6b656e4f7574707574120e0a06616374697665180120012808120d0a05746f6b656e180220012809120c0a0474797065180320012809122e0a0a657870697265735f617418042001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70120e0a0673636f706573180520032809120f0a07757365725f696418642001280912100a08757365726e616d6518652001280922af010a18437265617465417574686f72697a6174696f6e496e70757412110a09636c69656e745f696418012001280912160a0e636f64655f6368616c6c656e6765180220012809121d0a15636f64655f6368616c6c656e67655f6d6574686f6418032001280912140a0c72656469726563745f75726918042001280912150a0d726573706f6e73655f74797065180520012809120d0a0573636f7065180620012809120d0a057374617465180720012809224d0a19437265617465417574686f72697a6174696f6e4f7574707574121a0a12617574686f72697a6174696f6e5f636f646518012001280912140a0c72656469726563745f75726918022001280922160a14496e74726f737065637451756f7461496e70757422e9010a15496e74726f737065637451756f74614f757470757412300a11636f6e74657374735f7065725f75736572180a2001280b32152e656f6c796d702e636f676e69746f2e51756f746112330a1470726f626c656d735f7065725f636f6e74657374180b2001280b32152e656f6c796d702e636f676e69746f2e51756f746112370a187061727469636970616e74735f7065725f636f6e74657374180c2001280b32152e656f6c796d702e636f676e69746f2e51756f746112300a1170726f626c656d735f7065725f7573657218142001280b32152e656f6c796d702e636f676e69746f2e51756f746122150a13496e74726f737065637455736572496e707574223a0a14496e74726f7370656374557365724f757470757412220a047573657218012001280b32142e656f6c796d702e636f676e69746f2e5573657222240a11446573637269626555736572496e707574120f0a07757365725f696418012001280922380a124465736372696265557365724f757470757412220a047573657218012001280b32142e656f6c796d702e636f676e69746f2e5573657222d2010a0e4c6973745573657273496e707574120e0a066f6666736574180a20012805120c0a0473697a65180b2001280512360a0766696c7465727318282001280b32252e656f6c796d702e636f676e69746f2e4c6973745573657273496e7075742e46696c7465721a6a0a0646696c746572122a0a02696418012003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412340a08757365726e616d6518022003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e6722450a0f4c69737455736572734f7574707574120d0a05746f74616c18012001280512230a056974656d7318022003280b32142e656f6c796d702e636f676e69746f2e5573657222780a0f43726561746555736572496e70757412100a08757365726e616d6518012001280912110a0966756c6c5f6e616d65180220012809120d0a05656d61696c18032001280912100a0870617373776f7264180420012809120f0a0763617074636861180a20012809120e0a066c6f63616c6518142001280922440a10437265617465557365724f7574707574120f0a07757365725f6964180120012809121f0a17656d61696c5f636f6e6669726d6174696f6e5f68696e7418022001280922ac010a0f4e6f7469667955736572496e707574120f0a07757365725f696418012001280912100a0874656d706c61746518022001280912430a0a706172616d657465727318032003280b322f2e656f6c796d702e636f676e69746f2e4e6f7469667955736572496e7075742e506172616d6574657273456e7472791a310a0f506172616d6574657273456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a023801222b0a104e6f74696679557365724f757470757412170a0f6e6f74696669636174696f6e5f696418012001280922330a10566572696679456d61696c496e707574120f0a07757365725f6964180120012809120e0a0673656372657418022001280922130a11566572696679456d61696c4f757470757422210a10557064617465456d61696c496e707574120d0a05656d61696c18012001280922340a11557064617465456d61696c4f7574707574121f0a17656d61696c5f636f6e6669726d6174696f6e5f68696e7418022001280922440a1253746172745265636f76657279496e707574120d0a05656d61696c180120012809120f0a0763617074636861180220012809120e0a066c6f63616c6518142001280922320a1353746172745265636f766572794f7574707574121b0a13656d61696c5f7265636f766572795f68696e7418012001280922490a14436f6d706c6574655265636f766572496e707574120f0a07757365725f6964180120012809120e0a0673656372657418022001280912100a0870617373776f726418032001280922170a15436f6d706c6574655265636f7665724f757470757422160a14496e74726f7370656374526f6c6573496e70757422260a15496e74726f7370656374526f6c65734f7574707574120d0a05726f6c657318012003280922210a0e4c697374526f6c6573496e707574120f0a07757365725f696418012001280922200a0f4c697374526f6c65734f7574707574120d0a05726f6c657318012003280922320a10557064617465526f6c6573496e707574120f0a07757365725f6964180120012809120d0a05726f6c657318022003280922130a11557064617465526f6c65734f757470757422170a154c697374456e7469746c656d656e7473496e707574224b0a164c697374456e7469746c656d656e74734f757470757412310a0c656e7469746c656d656e747318012003280e321b2e656f6c796d702e636f676e69746f2e456e7469746c656d656e7422210a105265766f6b65546f6b656e496e707574120d0a05746f6b656e18012001280922130a115265766f6b65546f6b656e4f757470757422220a0c5369676e6f7574496e70757412120a0a65766572797768657265180120012808220f0a0d5369676e6f75744f75747075743282130a07436f676e69746f12640a0b437265617465546f6b656e12202e656f6c796d702e636f676e69746f2e437265617465546f6b656e496e7075741a212e656f6c796d702e636f676e69746f2e437265617465546f6b656e4f75747075742210eae20a0cf5e20a0000f041f8e20aac02126f0a0f496e74726f7370656374546f6b656e12242e656f6c796d702e636f676e69746f2e496e74726f7370656374546f6b656e496e7075741a252e656f6c796d702e636f676e69746f2e496e74726f7370656374546f6b656e4f7574707574220feae20a0bf5e20a0000803ff8e20a0a127b0a13437265617465417574686f72697a6174696f6e12282e656f6c796d702e636f676e69746f2e437265617465417574686f72697a6174696f6e496e7075741a292e656f6c796d702e636f676e69746f2e437265617465417574686f72697a6174696f6e4f7574707574220feae20a0bf5e20a0ad7233ef8e20a0a12630a0b5265766f6b65546f6b656e12202e656f6c796d702e636f676e69746f2e5265766f6b65546f6b656e496e7075741a212e656f6c796d702e636f676e69746f2e5265766f6b65546f6b656e4f7574707574220feae20a0bf5e20a0000803ff8e20a0a12570a075369676e6f7574121c2e656f6c796d702e636f676e69746f2e5369676e6f7574496e7075741a1d2e656f6c796d702e636f676e69746f2e5369676e6f75744f7574707574220feae20a0bf5e20a0000803ff8e20a0a12790a0a43726561746555736572121f2e656f6c796d702e636f676e69746f2e43726561746555736572496e7075741a202e656f6c796d702e636f676e69746f2e437265617465557365724f75747075742228eae20a0bf5e20a00002041f8e20a3282d3e4930213220e2f636f676e69746f2f757365727362012a128d010a0b566572696679456d61696c12202e656f6c796d702e636f676e69746f2e566572696679456d61696c496e7075741a212e656f6c796d702e636f676e69746f2e566572696679456d61696c4f75747075742239eae20a0bf5e20a0000803ff8e20a0182d3e4930224221f2f636f676e69746f2f75736572732f7b757365725f69647d2f76657269667962012a1281010a0b557064617465456d61696c12202e656f6c796d702e636f676e69746f2e557064617465456d61696c496e7075741a212e656f6c796d702e636f676e69746f2e557064617465456d61696c4f7574707574222deae20a0bf5e20a0000803ff8e20a0182d3e493021822132f636f676e69746f2f73656c662f656d61696c62012a1285010a0d53746172745265636f7665727912222e656f6c796d702e636f676e69746f2e53746172745265636f76657279496e7075741a232e656f6c796d702e636f676e69746f2e53746172745265636f766572794f7574707574222beae20a0bf5e20a00002041f8e20a3282d3e493021622112f636f676e69746f2f7265636f7665727962012a129b010a10436f6d706c6574655265636f7665727912242e656f6c796d702e636f676e69746f2e436f6d706c6574655265636f766572496e7075741a252e656f6c796d702e636f676e69746f2e436f6d706c6574655265636f7665724f7574707574223aeae20a0bf5e20a00002041f8e20a3282d3e493022522202f636f676e69746f2f75736572732f7b757365725f69647d2f7265636f76657262012a1287010a0e496e74726f73706563745573657212232e656f6c796d702e636f676e69746f2e496e74726f737065637455736572496e7075741a242e656f6c796d702e636f676e69746f2e496e74726f7370656374557365724f7574707574222aeae20a0bf5e20a0ad7233ef8e20a0a82d3e4930215120d2f636f676e69746f2f73656c6662047573657212a6010a0c44657363726962655573657212212e656f6c796d702e636f676e69746f2e446573637269626555736572496e7075741a222e656f6c796d702e636f676e69746f2e4465736372696265557365724f7574707574224f82e30a158ae30a11636f676e69746f3a757365723a72656164eae20a0cf5e20a00004843f8e20af40382d3e493022012182f636f676e69746f2f75736572732f7b757365725f69647d620475736572128c010a094c6973745573657273121e2e656f6c796d702e636f676e69746f2e4c6973745573657273496e7075741a1f2e656f6c796d702e636f676e69746f2e4c69737455736572734f7574707574223e82e30a158ae30a11636f676e69746f3a757365723a72656164eae20a0bf5e20a00007041f8e20a6482d3e4930210120e2f636f676e69746f2f7573657273128a010a0f496e74726f737065637451756f746112242e656f6c796d702e636f676e69746f2e496e74726f737065637451756f7461496e7075741a252e656f6c796d702e636f676e69746f2e496e74726f737065637451756f74614f7574707574222aeae20a0bf5e20a0000803ff8e20a0a82d3e493021512132f636f676e69746f2f73656c662f71756f7461128a010a0f496e74726f7370656374526f6c657312242e656f6c796d702e636f676e69746f2e496e74726f7370656374526f6c6573496e7075741a252e656f6c796d702e636f676e69746f2e496e74726f7370656374526f6c65734f7574707574222aeae20a0bf5e20a0000803ff8e20a0a82d3e493021512132f636f676e69746f2f73656c662f726f6c6573129c010a094c697374526f6c6573121e2e656f6c796d702e636f676e69746f2e4c697374526f6c6573496e7075741a1f2e656f6c796d702e636f676e69746f2e4c697374526f6c65734f7574707574224e82e30a158ae30a11636f676e69746f3a726f6c653a72656164eae20a0bf5e20a0000803ff8e20a0a82d3e4930220121e2f636f676e69746f2f75736572732f7b757365725f69647d2f726f6c657312a2010a0b557064617465526f6c657312202e656f6c796d702e636f676e69746f2e557064617465526f6c6573496e7075741a212e656f6c796d702e636f676e69746f2e557064617465526f6c65734f7574707574224e82e30a158ae30a11636f676e69746f3a726f6c653a72656164eae20a0bf5e20a0000803ff8e20a0a82d3e49302201a1e2f636f676e69746f2f75736572732f7b757365725f69647d2f726f6c6573128f010a104c697374456e7469746c656d656e747312252e656f6c796d702e636f676e69746f2e4c697374456e7469746c656d656e7473496e7075741a262e656f6c796d702e636f676e69746f2e4c697374456e7469746c656d656e74734f7574707574222ceae20a0bf5e20a0000803ff8e20a0a82d3e493021712152f636f676e69746f2f656e7469746c656d656e747342375a356769746875622e636f6d2f656f6c796d702f636f6e7472616374732f676f2f656f6c796d702f636f676e69746f3b636f676e69746f620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

