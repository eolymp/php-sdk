<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/community/community.proto

namespace GPBMetadata\Eolymp\Community;

class Community
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
        \GPBMetadata\Eolymp\Community\Attribute::initOnce();
        \GPBMetadata\Eolymp\Community\Identity::initOnce();
        \GPBMetadata\Eolymp\Community\Idp::initOnce();
        \GPBMetadata\Eolymp\Community\Member::initOnce();
        \GPBMetadata\Eolymp\Wellknown\Expression::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac2340a20656f6c796d702f636f6d6d756e6974792f636f6d6d756e6974792e70726f746f1210656f6c796d702e636f6d6d756e6974791a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f1a1e656f6c796d702f616e6e6f746174696f6e732f73636f70652e70726f746f1a20656f6c796d702f636f6d6d756e6974792f6174747269627574652e70726f746f1a1f656f6c796d702f636f6d6d756e6974792f6964656e746974792e70726f746f1a1a656f6c796d702f636f6d6d756e6974792f6964702e70726f746f1a1d656f6c796d702f636f6d6d756e6974792f6d656d6265722e70726f746f1a21656f6c796d702f77656c6c6b6e6f776e2f65787072657373696f6e2e70726f746f224e0a0e4a6f696e5370616365496e707574120c0a046e616d65180120012809122e0a0676616c75657318142003280b321e2e656f6c796d702e636f6d6d756e6974792e4d656d6265722e56616c756522320a0f4a6f696e53706163654f7574707574120c0a0365726e188f4e2001280912110a096d656d6265725f696418012001280922450a1352656769737465724d656d626572496e707574122e0a0676616c75657318012003280b321e2e656f6c796d702e636f6d6d756e6974792e4d656d6265722e56616c756522160a1452656769737465724d656d6265724f757470757422110a0f4c656176655370616365496e70757422120a104c6561766553706163654f7574707574223a0a0e4164644d656d626572496e70757412280a066d656d62657218012001280b32182e656f6c796d702e636f6d6d756e6974792e4d656d62657222320a0f4164644d656d6265724f7574707574120c0a0365726e188f4e2001280912110a096d656d6265725f69641801200128092283020a115570646174654d656d626572496e70757412380a05706174636818012003280e32292e656f6c796d702e636f6d6d756e6974792e5570646174654d656d626572496e7075742e506174636812110a096d656d6265725f696418022001280912280a066d656d62657218032001280b32182e656f6c796d702e636f6d6d756e6974792e4d656d62657222770a05506174636812070a03414c4c100012080a044e414d451001120c0a0844495341424c45441002120e0a0a52454749535445524544100312090a0547484f5354100412160a124f55545f4f465f434f4d5045544954494f4e1005120e0a0a4944454e5449544945531006120a0a0656414c554553100722140a125570646174654d656d6265724f757470757422260a1152656d6f76654d656d626572496e70757412110a096d656d6265725f696418012001280922140a1252656d6f76654d656d6265724f757470757422280a1344657363726962654d656d626572496e70757412110a096d656d6265725f696418012001280922400a1444657363726962654d656d6265724f757470757412280a066d656d62657218012001280b32182e656f6c796d702e636f6d6d756e6974792e4d656d62657222170a15496e74726f73706563744d656d626572496e70757422420a16496e74726f73706563744d656d6265724f757470757412280a066d656d62657218012001280b32182e656f6c796d702e636f6d6d756e6974792e4d656d62657222f0030a104c6973744d656d62657273496e707574120e0a066f6666736574180a20012805120c0a0473697a65180b20012805123a0a0766696c7465727318282001280b32292e656f6c796d702e636f6d6d756e6974792e4c6973744d656d62657273496e7075742e46696c7465721a81030a0646696c746572122a0a02696418012003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e4944122f0a07757365725f696418022003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e494412320a0864697361626c656418032003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e426f6f6c12300a046e616d6518042003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e6712390a0d6964656e746974795f6e616d65180a2003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e67123d0a116964656e746974795f6e69636b6e616d65180b2003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e67123a0a0e6964656e746974795f656d61696c180c2003280b32222e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e537472696e67224b0a114c6973744d656d626572734f7574707574120d0a05746f74616c18012001280512270a056974656d7318022003280b32182e656f6c796d702e636f6d6d756e6974792e4d656d62657222590a164164644d656d6265724964656e74697479496e70757412110a096d656d6265725f6964180120012809122c0a086964656e7469747918022001280b321a2e656f6c796d702e636f6d6d756e6974792e4964656e74697479222e0a174164644d656d6265724964656e746974794f757470757412130a0b6964656e746974795f696418012001280922710a195570646174654d656d6265724964656e74697479496e70757412110a096d656d6265725f696418012001280912130a0b6964656e746974795f6964180220012809122c0a086964656e7469747918032001280b321a2e656f6c796d702e636f6d6d756e6974792e4964656e74697479221c0a1a5570646174654d656d6265724964656e746974794f757470757422430a1952656d6f76654d656d6265724964656e74697479496e70757412110a096d656d6265725f696418012001280912130a0b6964656e746974795f6964180220012809221c0a1a52656d6f76654d656d6265724964656e746974794f7574707574225a0a11416464417474726962757465496e70757412150a0d6174747269627574655f6b6579180120012809122e0a0961747472696275746518022001280b321b2e656f6c796d702e636f6d6d756e6974792e41747472696275746522220a124164644174747269627574654f7574707574120c0a0365726e188f4e20012809225d0a14557064617465417474726962757465496e70757412150a0d6174747269627574655f6b6579180120012809122e0a0961747472696275746518022001280b321b2e656f6c796d702e636f6d6d756e6974792e41747472696275746522170a155570646174654174747269627574654f7574707574222d0a1452656d6f7665417474726962757465496e70757412150a0d6174747269627574655f6b657918012001280922170a1552656d6f76654174747269627574654f7574707574222f0a164465736372696265417474726962757465496e70757412150a0d6174747269627574655f6b657918012001280922490a1744657363726962654174747269627574654f7574707574122e0a0961747472696275746518012001280b321b2e656f6c796d702e636f6d6d756e6974792e41747472696275746522ee020a134c69737441747472696275746573496e707574120e0a066f6666736574180a20012805120c0a0473697a65180b20012805123d0a0766696c7465727318282001280b322c2e656f6c796d702e636f6d6d756e6974792e4c69737441747472696275746573496e7075742e46696c7465721af9010a0646696c746572122a0a02696418012003280b321e2e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e4944122d0a036b657918022003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e456e756d12300a0668696464656e18032003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e426f6f6c12320a08726571756972656418042003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e426f6f6c122e0a047479706518052003280b32202e656f6c796d702e77656c6c6b6e6f776e2e45787072657373696f6e456e756d22510a144c697374417474726962757465734f7574707574120d0a05746f74616c180120012805122a0a056974656d7318022003280b321b2e656f6c796d702e636f6d6d756e6974792e417474726962757465221f0a1d44657363726962654964656e7469747950726f7669646572496e70757422760a1e44657363726962654964656e7469747950726f76696465724f7574707574120f0a056c6f63616c180120012808480012370a046f69646318032001280b32272e656f6c796d702e636f6d6d756e6974792e4964656e7469747950726f76696465722e4f4944434800420a0a0870726f766964657222760a1e436f6e6669677572654964656e7469747950726f7669646572496e707574120f0a056c6f63616c180120012808480012370a046f69646318032001280b32272e656f6c796d702e636f6d6d756e6974792e4964656e7469747950726f76696465722e4f4944434800420a0a0870726f766964657222210a1f436f6e6669677572654964656e7469747950726f76696465724f757470757432d7190a09436f6d6d756e6974791294010a094a6f696e537061636512202e656f6c796d702e636f6d6d756e6974792e4a6f696e5370616365496e7075741a212e656f6c796d702e636f6d6d756e6974792e4a6f696e53706163654f7574707574224282e30a198ae30a15636f6d6d756e6974793a6d656d6265723a6a6f696eeae20a0bf5e20a0000803ff8e20a0a82d3e4930210220e2f6d656d626572732f5f73656c661297010a0a4c65617665537061636512212e656f6c796d702e636f6d6d756e6974792e4c656176655370616365496e7075741a222e656f6c796d702e636f6d6d756e6974792e4c6561766553706163654f7574707574224282e30a198ae30a15636f6d6d756e6974793a6d656d6265723a6a6f696eeae20a0bf5e20a0000803ff8e20a0a82d3e49302102a0e2f6d656d626572732f5f73656c6612af010a0e52656769737465724d656d62657212252e656f6c796d702e636f6d6d756e6974792e52656769737465724d656d626572496e7075741a262e656f6c796d702e636f6d6d756e6974792e52656769737465724d656d6265724f7574707574224e82e30a1a8ae30a16636f6d6d756e6974793a6d656d6265723a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e493021b22192f6d656d626572732f5f73656c662f61747472696275746573128c010a10496e74726f73706563744d656d62657212272e656f6c796d702e636f6d6d756e6974792e496e74726f73706563744d656d626572496e7075741a282e656f6c796d702e636f6d6d756e6974792e496e74726f73706563744d656d6265724f75747075742225eae20a0bf5e20a00002041f8e20a3282d3e4930210120e2f6d656d626572732f5f73656c66128f010a094164644d656d62657212202e656f6c796d702e636f6d6d756e6974792e4164644d656d626572496e7075741a212e656f6c796d702e636f6d6d756e6974792e4164644d656d6265724f7574707574223d82e30a1a8ae30a16636f6d6d756e6974793a6d656d6265723a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e493020a22082f6d656d6265727312a4010a0c5570646174654d656d62657212232e656f6c796d702e636f6d6d756e6974792e5570646174654d656d626572496e7075741a242e656f6c796d702e636f6d6d756e6974792e5570646174654d656d6265724f7574707574224982e30a1a8ae30a16636f6d6d756e6974793a6d656d6265723a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e493021622142f6d656d626572732f7b6d656d6265725f69647d12a4010a0c52656d6f76654d656d62657212232e656f6c796d702e636f6d6d756e6974792e52656d6f76654d656d626572496e7075741a242e656f6c796d702e636f6d6d756e6974792e52656d6f76654d656d6265724f7574707574224982e30a1a8ae30a16636f6d6d756e6974793a6d656d6265723a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e49302162a142f6d656d626572732f7b6d656d6265725f69647d12a9010a0e44657363726962654d656d62657212252e656f6c796d702e636f6d6d756e6974792e44657363726962654d656d626572496e7075741a262e656f6c796d702e636f6d6d756e6974792e44657363726962654d656d6265724f7574707574224882e30a198ae30a15636f6d6d756e6974793a6d656d6265723a72656164eae20a0bf5e20a0000a040f8e20a1482d3e493021612142f6d656d626572732f7b6d656d6265725f69647d1294010a0b4c6973744d656d6265727312222e656f6c796d702e636f6d6d756e6974792e4c6973744d656d62657273496e7075741a232e656f6c796d702e636f6d6d756e6974792e4c6973744d656d626572734f7574707574223c82e30a198ae30a15636f6d6d756e6974793a6d656d6265723a72656164eae20a0bf5e20a0000a040f8e20a1482d3e493020a12082f6d656d6265727312be010a114164644d656d6265724964656e7469747912282e656f6c796d702e636f6d6d756e6974792e4164644d656d6265724964656e74697479496e7075741a292e656f6c796d702e636f6d6d756e6974792e4164644d656d6265724964656e746974794f7574707574225482e30a1a8ae30a16636f6d6d756e6974793a6d656d6265723a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e4930221221f2f6d656d626572732f7b6d656d6265725f69647d2f6964656e74697469657312d5010a145570646174654d656d6265724964656e74697479122b2e656f6c796d702e636f6d6d756e6974792e5570646174654d656d6265724964656e74697479496e7075741a2c2e656f6c796d702e636f6d6d756e6974792e5570646174654d656d6265724964656e746974794f7574707574226282e30a1a8ae30a16636f6d6d756e6974793a6d656d6265723a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e493022f1a2d2f6d656d626572732f7b6d656d6265725f69647d2f6964656e7469746965732f7b6964656e746974795f69647d12d5010a1452656d6f76654d656d6265724964656e74697479122b2e656f6c796d702e636f6d6d756e6974792e52656d6f76654d656d6265724964656e74697479496e7075741a2c2e656f6c796d702e636f6d6d756e6974792e52656d6f76654d656d6265724964656e746974794f7574707574226282e30a1a8ae30a16636f6d6d756e6974793a6d656d6265723a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e493022f2a2d2f6d656d626572732f7b6d656d6265725f69647d2f6964656e7469746965732f7b6964656e746974795f69647d129b010a0c41646441747472696275746512232e656f6c796d702e636f6d6d756e6974792e416464417474726962757465496e7075741a242e656f6c796d702e636f6d6d756e6974792e4164644174747269627574654f7574707574224082e30a1a8ae30a16636f6d6d756e6974793a6d656d6265723a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e493020d220b2f6174747269627574657312b4010a0f55706461746541747472696275746512262e656f6c796d702e636f6d6d756e6974792e557064617465417474726962757465496e7075741a272e656f6c796d702e636f6d6d756e6974792e5570646174654174747269627574654f7574707574225082e30a1a8ae30a16636f6d6d756e6974793a6d656d6265723a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e493021d221b2f617474726962757465732f7b6174747269627574655f6b65797d12b4010a0f52656d6f766541747472696275746512262e656f6c796d702e636f6d6d756e6974792e52656d6f7665417474726962757465496e7075741a272e656f6c796d702e636f6d6d756e6974792e52656d6f76654174747269627574654f7574707574225082e30a1a8ae30a16636f6d6d756e6974793a6d656d6265723a7772697465eae20a0bf5e20a0000a040f8e20a1482d3e493021d2a1b2f617474726962757465732f7b6174747269627574655f6b65797d12b9010a11446573637269626541747472696275746512282e656f6c796d702e636f6d6d756e6974792e4465736372696265417474726962757465496e7075741a292e656f6c796d702e636f6d6d756e6974792e44657363726962654174747269627574654f7574707574224f82e30a198ae30a15636f6d6d756e6974793a6d656d6265723a72656164eae20a0bf5e20a0000a040f8e20a1482d3e493021d121b2f617474726962757465732f7b6174747269627574655f6b65797d12a0010a0e4c6973744174747269627574657312252e656f6c796d702e636f6d6d756e6974792e4c69737441747472696275746573496e7075741a262e656f6c796d702e636f6d6d756e6974792e4c697374417474726962757465734f7574707574223f82e30a198ae30a15636f6d6d756e6974793a6d656d6265723a72656164eae20a0bf5e20a0000a040f8e20a1482d3e493020d120b2f61747472696275746573129a010a1844657363726962654964656e7469747950726f7669646572122f2e656f6c796d702e636f6d6d756e6974792e44657363726962654964656e7469747950726f7669646572496e7075741a302e656f6c796d702e636f6d6d756e6974792e44657363726962654964656e7469747950726f76696465724f7574707574221beae20a0bf5e20a00002041f8e20a6482d3e493020612042f69647012bb010a19436f6e6669677572654964656e7469747950726f766964657212302e656f6c796d702e636f6d6d756e6974792e436f6e6669677572654964656e7469747950726f7669646572496e7075741a312e656f6c796d702e636f6d6d756e6974792e436f6e6669677572654964656e7469747950726f76696465724f7574707574223982e30a1a8ae30a16636f6d6d756e6974793a6d656d6265723a7772697465eae20a0bf5e20a0000803ff8e20a0582d3e49302061a042f69647042355a336769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f636f6d6d756e6974793b636f6d6d756e697479620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

