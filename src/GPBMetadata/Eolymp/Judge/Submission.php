<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/submission.proto

namespace GPBMetadata\Eolymp\Judge;

class Submission
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Eolymp\Annotations\Resource::initOnce();
        \GPBMetadata\Eolymp\Judge\Feedback::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa30d0a1d656f6c796d702f6a756467652f7375626d697373696f6e2e70726f746f120c656f6c796d702e6a756467651a21656f6c796d702f616e6e6f746174696f6e732f7265736f757263652e70726f746f1a1b656f6c796d702f6a756467652f666565646261636b2e70726f746f22fc0b0a0a5375626d697373696f6e120a0a02696418012001280912120a0a636f6e746573745f696418022001280912120a0a70726f626c656d5f696418032001280912160a0e7061727469636970616e745f696418042001280912300a0c7375626d69747465645f617418052001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70120c0a046c616e67180a20012809120e0a06736f75726365180b2001280912110a097369676e6174757265180c20012809122f0a0673746174757318142001280e321f2e656f6c796d702e6a756467652e5375626d697373696f6e2e537461747573120d0a056572726f72181520012809120c0a04636f7374181e20012802120d0a0573636f7265181f2001280212120a0a70657263656e74616765182020012802122e0a0667726f75707318322003280b321e2e656f6c796d702e6a756467652e5375626d697373696f6e2e47726f75701a95030a0352756e120a0a02696418012001280912170a0f77616c6c5f74696d655f757361676518022001280d12160a0e6370755f74696d655f757361676518032001280d12140a0c6d656d6f72795f7573616765180420012804120d0a05696e646578180a2001280d120f0a07746573745f6964180b20012809120c0a04636f7374180c20012802120d0a0573636f7265180d2001280212330a0673746174757318142001280e32232e656f6c796d702e6a756467652e5375626d697373696f6e2e52756e2e53746174757322c8010a0653746174757312080a044e4f4e451000120b0a07435245415445441001120d0a09455845435554494e471002120b0a0754494d454f5554100312110a0d4350555f455848415553544544100412130a0f4d454d4f52595f4f564552464c4f57100512100a0c57524f4e475f414e535745521006120c0a084143434550544544100712110a0d52554e54494d455f4552524f52100812160a12564552494649434154494f4e5f4552524f521009120b0a07534b4950504544100a120b0a07424c4f434b4544100b1af8040a0547726f7570120d0a05696e64657818012001280d12120a0a746573747365745f696418022001280912350a06737461747573180a2001280e32252e656f6c796d702e6a756467652e5375626d697373696f6e2e47726f75702e53746174757312140a0c646570656e64656e63696573180b2003280d120c0a04636f7374181420012802120d0a0573636f726518152001280212400a0c73636f72696e675f6d6f646518162001280e322a2e656f6c796d702e6a756467652e5375626d697373696f6e2e47726f75702e53636f72696e674d6f646512350a0f666565646261636b5f706f6c696379181e2001280e321c2e656f6c796d702e6a756467652e466565646261636b506f6c69637912170a0f77616c6c5f74696d655f757361676518292001280d12160a0e6370755f74696d655f7573616765182a2001280d12140a0c6d656d6f72795f7573616765182e20012804122a0a0472756e7318642003280b321c2e656f6c796d702e6a756467652e5375626d697373696f6e2e52756e22c9010a06537461747573120b0a07554e4b4e4f574e1000120b0a07424c4f434b45441001120b0a0750454e44494e471002120b0a0754455354494e471003120c0a0841434345505445441004120b0a0754494d454f5554100512110a0d4350555f455848415553544544100612130a0f4d454d4f52595f4f564552464c4f57100712100a0c57524f4e475f414e53574552100812110a0d52554e54494d455f4552524f52100912160a12564552494649434154494f4e5f4552524f52100a120b0a07534b4950504544100b222a0a0b53636f72696e674d6f646512080a044e4f4e45100012080a0445414348100112070a03414c4c1002225f0a0653746174757312080a044e4f4e451000120b0a0750454e44494e471001120b0a0754455354494e471002120b0a0754494d454f55541003120c0a08434f4d504c455445100412090a054552524f521005120b0a074641494c55524510063a2ab2e30a26bae30a0a7375626d697373696f6ec2e30a14656f6c796d702e6a756467652e436f6e74657374422d5a2b6769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f6a756467653b6a75646765620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

