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
        \GPBMetadata\Eolymp\Annotations\Http::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Annotations\Scope::initOnce();
        \GPBMetadata\Eolymp\Cognito\AccessKey::initOnce();
        \GPBMetadata\Eolymp\Cognito\Entitlement::initOnce();
        \GPBMetadata\Eolymp\Cognito\Quota::initOnce();
        \GPBMetadata\Eolymp\Cognito\User::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0afb3e0a1c656f6c796d702f636f676e69746f2f636f676e69746f2e70726f746f120e656f6c796d702e636f676e69746f1a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a1f656f6c796d702f636f676e69746f2f6163636573735f6b65792e70726f746f1a20656f6c796d702f636f676e69746f2f656e7469746c656d656e742e70726f746f1a1a656f6c796d702f636f676e69746f2f71756f74612e70726f746f1a19656f6c796d702f636f676e69746f2f757365722e70726f746f1a21656f6c796d702f77656c6c6b6e6f776e2f65787072657373696f6e2e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f22cc020a10437265617465546f6b656e496e707574123e0a0a6772616e745f7479706518012001280e322a2e656f6c796d702e636f676e69746f2e437265617465546f6b656e496e7075742e4772616e745479706512100a08757365726e616d6518022001280912100a0870617373776f726418032001280912110a09636c69656e745f696418042001280912150a0d636c69656e745f736563726574180520012809120c0a04636f646518062001280912150a0d636f64655f7665726966696572180720012809120d0a0573636f706518082001280912150a0d726566726573685f746f6b656e180920012809225f0a094772616e745479706512080a044e4f4e451000120c0a0850415353574f5244100112160a12415554484f52495a4154494f4e5f434f4445100212110a0d524546524553485f544f4b454e1003120f0a0b474f4f474c455f434f4445100422aa010a11437265617465546f6b656e4f7574707574120d0a05746f6b656e180120012809120c0a0474797065180220012809122e0a0a657870697265735f617418032001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70120e0a0673636f70657318042003280912150a0d726566726573685f746f6b656e180a20012809120f0a07757365725f696418642001280912100a08757365726e616d6518652001280922250a14496e74726f7370656374546f6b656e496e707574120d0a05746f6b656e18012001280922fd010a15496e74726f7370656374546f6b656e4f7574707574120e0a06616374697665180120012808120d0a0573636f7065180220012809122a0a0665787069726518032001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70120f0a077375626a65637418042001280912100a0861756469656e6365180520012809120e0a06697373756572180620012809120c0a046e616d6518642001280912100a086e69636b6e616d65186520012809120f0a0770696374757265186620012809120d0a05656d61696c18672001280912160a0e656d61696c5f7665726966696564186820012808120e0a066c6f63616c6518692001280922af010a18437265617465417574686f72697a6174696f6e496e70757412110a09636c69656e745f696418012001280912160a0e636f64655f6368616c6c656e6765180220012809121d0a15636f64655f6368616c6c656e67655f6d6574686f6418032001280912140a0c72656469726563745f75726918042001280912150a0d726573706f6e73655f74797065180520012809120d0a0573636f7065180620012809120d0a057374617465180720012809224d0a19437265617465417574686f72697a6174696f6e4f7574707574121a0a12617574686f72697a6174696f6e5f636f646518012001280912140a0c72656469726563745f75726918022001280922160a14496e74726f737065637451756f7461496e70757422e9010a15496e74726f737065637451756f74614f757470757412300a11636f6e74657374735f7065725f75736572180a2001280b32152e656f6c796d702e636f676e69746f2e51756f746112330a1470726f626c656d735f7065725f636f6e74657374180b2001280b32152e656f6c796d702e636f676e69746f2e51756f746112370a187061727469636970616e74735f7065725f636f6e74657374180c2001280b32152e656f6c796d702e636f676e69746f2e51756f746112300a1170726f626c656d735f7065725f7573657218142001280b32152e656f6c796d702e636f676e69746f2e51756f746122150a13496e74726f737065637455736572496e707574223a0a14496e74726f7370656374557365724f757470757412220a047573657218012001280b32142e656f6c796d702e636f676e69746f2e5573657222240a11446573637269626555736572496e707574120f0a07757365725f696418012001280922380a124465736372696265557365724f757470757412220a047573657218012001280b32142e656f6c796d702e636f676e69746f2e5573657222d2010a0e4c6973745573657273496e707574120e0a066f6666736574180a20012805120c0a0473697a65180b2001280512360a0766696c7465727318282001280b32252e656f6c796d702e636f676e69746f2e4c6973745573657273496e7075742e46696c7465721a6a0a0646696c746572122a0a02696418012003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412340a08757365726e616d6518022003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e6722450a0f4c69737455736572734f7574707574120d0a05746f74616c18012001280512230a056974656d7318022003280b32142e656f6c796d702e636f676e69746f2e55736572229b010a0f43726561746555736572496e70757412100a08757365726e616d6518012001280912110a0966756c6c5f6e616d65180220012809120d0a05656d61696c18032001280912100a0870617373776f7264180420012809120f0a07636f756e74727918052001280912100a086269727468646179180620012809120f0a0763617074636861180a20012809120e0a066c6f63616c6518142001280922440a10437265617465557365724f7574707574120f0a07757365725f6964180120012809121f0a17656d61696c5f636f6e6669726d6174696f6e5f68696e7418022001280922ac010a0f4e6f7469667955736572496e707574120f0a07757365725f696418012001280912100a0874656d706c61746518022001280912430a0a706172616d657465727318032003280b322f2e656f6c796d702e636f676e69746f2e4e6f7469667955736572496e7075742e506172616d6574657273456e7472791a310a0f506172616d6574657273456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a023801222b0a104e6f74696679557365724f757470757412170a0f6e6f74696669636174696f6e5f696418012001280922330a10566572696679456d61696c496e707574120f0a07757365725f6964180120012809120e0a0673656372657418022001280922130a11566572696679456d61696c4f757470757422210a10557064617465456d61696c496e707574120d0a05656d61696c18012001280922340a11557064617465456d61696c4f7574707574121f0a17656d61696c5f636f6e6669726d6174696f6e5f68696e7418022001280922dc020a1255706461746550726f66696c65496e70757412370a05706174636818012003280e32282e656f6c796d702e636f676e69746f2e55706461746550726f66696c65496e7075742e506174636812100a08757365726e616d65180220012809120d0a05656d61696c180320012809120c0a046e616d65180a20012809120f0a07636f6d70616e79180c2001280912120a0a6f636375706174696f6e180d20012809120f0a07636f756e747279181520012809120c0a046369747918162001280912100a086269727468646179182120012809120e0a066c6f63616c6518222001280922780a055061746368120c0a08555345524e414d45100012090a05454d41494c100112080a044e414d451002120b0a07434f4d50414e591003120e0a0a4f434355504154494f4e1004120b0a07434f554e545259100512080a04434954591006120c0a0842495254484441591007120a0a064c4f43414c45100822360a1355706461746550726f66696c654f7574707574121f0a17656d61696c5f636f6e6669726d6174696f6e5f68696e7418012001280922660a1255706461746550696374757265496e70757412100a0866696c656e616d65180120012809120c0a046461746118022001280c12100a086f66667365745f78180a2001280d12100a086f66667365745f79180b2001280d120c0a0473697a65180c2001280d22150a13557064617465506963747572654f757470757422450a1355706461746550617373776f7264496e70757412180a1063757272656e745f70617373776f726418012001280912140a0c6e65775f70617373776f726418022001280922160a1455706461746550617373776f72644f7574707574221e0a1c526573656e64456d61696c566572696669636174696f6e496e70757422400a1d526573656e64456d61696c566572696669636174696f6e4f7574707574121f0a17656d61696c5f636f6e6669726d6174696f6e5f68696e7418012001280922440a1253746172745265636f76657279496e707574120d0a05656d61696c180120012809120f0a0763617074636861180220012809120e0a066c6f63616c6518142001280922320a1353746172745265636f766572794f7574707574121b0a13656d61696c5f7265636f766572795f68696e7418012001280922490a14436f6d706c6574655265636f766572496e707574120f0a07757365725f6964180120012809120e0a0673656372657418022001280912100a0870617373776f726418032001280922170a15436f6d706c6574655265636f7665724f757470757422160a14496e74726f7370656374526f6c6573496e70757422260a15496e74726f7370656374526f6c65734f7574707574120d0a05726f6c657318012003280922210a0e4c697374526f6c6573496e707574120f0a07757365725f696418012001280922200a0f4c697374526f6c65734f7574707574120d0a05726f6c657318012003280922320a10557064617465526f6c6573496e707574120f0a07757365725f6964180120012809120d0a05726f6c657318022003280922130a11557064617465526f6c65734f757470757422170a154c697374456e7469746c656d656e7473496e707574224b0a164c697374456e7469746c656d656e74734f757470757412310a0c656e7469746c656d656e747318012003280e321b2e656f6c796d702e636f676e69746f2e456e7469746c656d656e7422130a1153656c664465737472756374496e70757422430a1253656c6644657374727563744f7574707574122d0a0964656c6574655f6f6e18012001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7022210a105265766f6b65546f6b656e496e707574120d0a05746f6b656e18012001280922130a115265766f6b65546f6b656e4f757470757422310a0b5369676e696e496e70757412100a08757365726e616d6518012001280912100a0870617373776f726418022001280922320a0c5369676e696e4f757470757412220a047573657218012001280b32142e656f6c796d702e636f676e69746f2e5573657222220a0c5369676e6f7574496e70757412120a0a65766572797768657265180120012808220f0a0d5369676e6f75744f757470757422470a144372656174654163636573734b6579496e707574120c0a046e616d65180120012809120d0a0573636f706518022001280912120a0a657870697265735f696e18032001280d22370a154372656174654163636573734b65794f7574707574120e0a066b65795f6964180120012809120e0a0673656372657418022001280922260a1444656c6574654163636573734b6579496e707574120e0a066b65795f696418012001280922170a1544656c6574654163636573734b65794f757470757422330a134c6973744163636573734b657973496e707574120e0a066f6666736574180a20012805120c0a0473697a65180b20012805224f0a144c6973744163636573734b6579734f7574707574120d0a05746f74616c18012001280512280a056974656d7318022003280b32192e656f6c796d702e636f676e69746f2e4163636573734b657932d31a0a07436f676e69746f12640a0b437265617465546f6b656e12202e656f6c796d702e636f676e69746f2e437265617465546f6b656e496e7075741a212e656f6c796d702e636f676e69746f2e437265617465546f6b656e4f75747075742210eae20a0cf5e20a0000f041f8e20aac02126f0a0f496e74726f7370656374546f6b656e12242e656f6c796d702e636f676e69746f2e496e74726f7370656374546f6b656e496e7075741a252e656f6c796d702e636f676e69746f2e496e74726f7370656374546f6b656e4f7574707574220feae20a0bf5e20a00002041f8e20a3212630a0b5265766f6b65546f6b656e12202e656f6c796d702e636f676e69746f2e5265766f6b65546f6b656e496e7075741a212e656f6c796d702e636f676e69746f2e5265766f6b65546f6b656e4f7574707574220feae20a0bf5e20a0000803ff8e20a0a126c0a075369676e6f7574121c2e656f6c796d702e636f676e69746f2e5369676e6f7574496e7075741a1d2e656f6c796d702e636f676e69746f2e5369676e6f75744f75747075742224eae20a0bf5e20a0000803ff8e20a0a82d3e493020f220d2f73656c662f7369676e6f757412a3010a0f4372656174654163636573734b657912242e656f6c796d702e636f676e69746f2e4372656174654163636573734b6579496e7075741a252e656f6c796d702e636f676e69746f2e4372656174654163636573734b65794f7574707574224382e30a1c8ae30a18636f676e69746f3a6163636573732d6b65793a7772697465eae20a0bf5e20a0000803ff8e20a0a82d3e493020e220c2f6163636573732d6b65797312ac010a0f44656c6574654163636573734b657912242e656f6c796d702e636f676e69746f2e44656c6574654163636573734b6579496e7075741a252e656f6c796d702e636f676e69746f2e44656c6574654163636573734b65794f7574707574224c82e30a1c8ae30a18636f676e69746f3a6163636573732d6b65793a7772697465eae20a0bf5e20a0000a040f8e20a3282d3e49302172a152f6163636573732d6b6579732f7b6b65795f69647d129f010a0e4c6973744163636573734b65797312232e656f6c796d702e636f676e69746f2e4c6973744163636573734b657973496e7075741a242e656f6c796d702e636f676e69746f2e4c6973744163636573734b6579734f7574707574224282e30a1b8ae30a17636f676e69746f3a6163636573732d6b65793a72656164eae20a0bf5e20a0000a041f8e20a6482d3e493020e120c2f6163636573732d6b657973126e0a0a43726561746555736572121f2e656f6c796d702e636f676e69746f2e43726561746555736572496e7075741a202e656f6c796d702e636f676e69746f2e437265617465557365724f7574707574221deae20a0bf5e20a00002041f8e20a3282d3e493020822062f75736572731282010a0b566572696679456d61696c12202e656f6c796d702e636f676e69746f2e566572696679456d61696c496e7075741a212e656f6c796d702e636f676e69746f2e566572696679456d61696c4f7574707574222eeae20a0bf5e20a0000803ff8e20a0182d3e493021922172f75736572732f7b757365725f69647d2f76657269667912ae010a17526573656e64456d61696c566572696669636174696f6e122c2e656f6c796d702e636f676e69746f2e526573656e64456d61696c566572696669636174696f6e496e7075741a2d2e656f6c796d702e636f676e69746f2e526573656e64456d61696c566572696669636174696f6e4f75747075742236eae20a0bf5e20a0000803ff8e20a0582d3e4930221221f2f73656c662f656d61696c2f726573656e642d766572696669636174696f6e12760a0b557064617465456d61696c12202e656f6c796d702e636f676e69746f2e557064617465456d61696c496e7075741a212e656f6c796d702e636f676e69746f2e557064617465456d61696c4f75747075742222eae20a0bf5e20a0000803ff8e20a0182d3e493020d220b2f73656c662f656d61696c12760a0d55706461746550726f66696c6512222e656f6c796d702e636f676e69746f2e55706461746550726f66696c65496e7075741a232e656f6c796d702e636f676e69746f2e55706461746550726f66696c654f7574707574221ceae20a0bf5e20a0000803ff8e20a0582d3e493020722052f73656c66127e0a0d5570646174655069637475726512222e656f6c796d702e636f676e69746f2e55706461746550696374757265496e7075741a232e656f6c796d702e636f676e69746f2e557064617465506963747572654f75747075742224eae20a0bf5e20a0000803ff8e20a0582d3e493020f220d2f73656c662f706963747572651298010a0e55706461746550617373776f726412232e656f6c796d702e636f676e69746f2e55706461746550617373776f7264496e7075741a242e656f6c796d702e636f676e69746f2e55706461746550617373776f72644f7574707574223b82e30a128ae30a0e70617373776f72645f6772616e74eae20a0bf5e20a0000803ff8e20a0582d3e4930210220e2f73656c662f70617373776f726412790a0e496e74726f73706563745573657212232e656f6c796d702e636f676e69746f2e496e74726f737065637455736572496e7075741a242e656f6c796d702e636f676e69746f2e496e74726f7370656374557365724f7574707574221ceae20a0bf5e20a00002041f8e20a3282d3e493020712052f73656c661298010a0c44657363726962655573657212212e656f6c796d702e636f676e69746f2e446573637269626555736572496e7075741a222e656f6c796d702e636f676e69746f2e4465736372696265557365724f7574707574224182e30a158ae30a11636f676e69746f3a757365723a72656164eae20a0cf5e20a00004843f8e20af40382d3e493021212102f75736572732f7b757365725f69647d1284010a094c6973745573657273121e2e656f6c796d702e636f676e69746f2e4c6973745573657273496e7075741a1f2e656f6c796d702e636f676e69746f2e4c69737455736572734f7574707574223682e30a158ae30a11636f676e69746f3a757365723a72656164eae20a0bf5e20a00007041f8e20a6482d3e493020812062f75736572731282010a0f496e74726f737065637451756f746112242e656f6c796d702e636f676e69746f2e496e74726f737065637451756f7461496e7075741a252e656f6c796d702e636f676e69746f2e496e74726f737065637451756f74614f75747075742222eae20a0bf5e20a00002041f8e20a3282d3e493020d120b2f73656c662f71756f74611282010a0f496e74726f7370656374526f6c657312242e656f6c796d702e636f676e69746f2e496e74726f7370656374526f6c6573496e7075741a252e656f6c796d702e636f676e69746f2e496e74726f7370656374526f6c65734f75747075742222eae20a0bf5e20a00002041f8e20a3282d3e493020d120b2f73656c662f726f6c65731294010a094c697374526f6c6573121e2e656f6c796d702e636f676e69746f2e4c697374526f6c6573496e7075741a1f2e656f6c796d702e636f676e69746f2e4c697374526f6c65734f7574707574224682e30a158ae30a11636f676e69746f3a726f6c653a72656164eae20a0bf5e20a0000803ff8e20a0a82d3e493021812162f75736572732f7b757365725f69647d2f726f6c6573129a010a0b557064617465526f6c657312202e656f6c796d702e636f676e69746f2e557064617465526f6c6573496e7075741a212e656f6c796d702e636f676e69746f2e557064617465526f6c65734f7574707574224682e30a158ae30a11636f676e69746f3a726f6c653a72656164eae20a0bf5e20a0000803ff8e20a0a82d3e49302181a162f75736572732f7b757365725f69647d2f726f6c6573127f0a0d53746172745265636f7665727912222e656f6c796d702e636f676e69746f2e53746172745265636f76657279496e7075741a232e656f6c796d702e636f676e69746f2e53746172745265636f766572794f75747075742225eae20a0bf5e20a00002041f8e20a3282d3e4930210220e2f73656c662f7265636f766572791290010a10436f6d706c6574655265636f7665727912242e656f6c796d702e636f676e69746f2e436f6d706c6574655265636f766572496e7075741a252e656f6c796d702e636f676e69746f2e436f6d706c6574655265636f7665724f7574707574222feae20a0bf5e20a00002041f8e20a3282d3e493021a22182f75736572732f7b757365725f69647d2f7265636f7665721291010a104c697374456e7469746c656d656e747312252e656f6c796d702e636f676e69746f2e4c697374456e7469746c656d656e7473496e7075741a262e656f6c796d702e636f676e69746f2e4c697374456e7469746c656d656e74734f7574707574222eeae20a0bf5e20a0000803ff8e20a0a82d3e493021912172f5f5f636f676e69746f2f656e7469746c656d656e747312730a0c53656c66446573747275637412212e656f6c796d702e636f676e69746f2e53656c664465737472756374496e7075741a222e656f6c796d702e636f676e69746f2e53656c6644657374727563744f7574707574221ceae20a0bf5e20a0000803ff8e20a0a82d3e49302072a052f73656c6642315a2f6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f636f676e69746f3b636f676e69746f620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

