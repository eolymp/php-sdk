<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/job.proto

namespace GPBMetadata\Eolymp\Executor;

class Job
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Executor\Task::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae60f0a19656f6c796d702f6578656375746f722f6a6f622e70726f746f120f656f6c796d702e6578656375746f7222fa0e0a034a6f6212110a097265666572656e6365180120012809120e0a066f726967696e18022001280912390a0d707265636f6e646974696f6e73180a2003280b32222e656f6c796d702e6578656375746f722e5461736b2e507265636f6e646974696f6e122a0a066163746f727318142003280b321a2e656f6c796d702e6578656375746f722e4a6f622e4163746f72122b0a087363656e6172696f18282003280b32192e656f6c796d702e6578656375746f722e4a6f622e5374657012260a0472756e73181e2003280b32182e656f6c796d702e6578656375746f722e4a6f622e52756e1a88030a054163746f72120c0a046e616d65180120012809120f0a0772756e74696d65180a2001280912120a0a736f757263655f75726c180e2001280912120a0a6865616465725f75726c180f2001280912120a0a666f6f7465725f75726c18102001280912300a03656e7618282003280b32232e656f6c796d702e6578656375746f722e4a6f622e4163746f722e456e76456e74727912280a0566696c657318292003280b32192e656f6c796d702e6578656375746f722e4a6f622e46696c65123e0a0d6f75747075745f666f726d617418232001280e32272e656f6c796d702e6578656375746f722e4a6f622e4163746f722e4f7574707574466f726d617412290a056d6f756e7418322003280b321a2e656f6c796d702e6578656375746f722e4a6f622e4d6f756e741a2a0a08456e76456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a02380122310a0c4f7574707574466f726d6174120d0a09455849545f434f4445100012120a0e544553544c49425f4f555450555410011a2c0a054d6f756e7412120a0a66726f6d5f6163746f72180120012809120f0a07746f5f706174681802200128091a280a0446696c65120c0a047061746818012001280912120a0a736f757263655f75726c1803200128091a610a0352756e12110a097265666572656e6365180120012809120d0a05696e64657818022001280d120e0a066c6162656c73180a2003280912280a05737465707318142003280b32192e656f6c796d702e6578656375746f722e4a6f622e537465701acd080a0453746570120c0a046e616d6518012001280912170a0f6576656e5f6f6e5f6661696c75726518642001280812170a0f6f6e6c795f6f6e5f6661696c75726518652001280812300a057772697465180a2001280b321f2e656f6c796d702e6578656375746f722e4a6f622e537465702e57726974654800122e0a04636f7079180b2001280b321e2e656f6c796d702e6578656375746f722e4a6f622e537465702e436f7079480012340a0765786563757465180c2001280b32212e656f6c796d702e6578656375746f722e4a6f622e537465702e45786563757465480012320a0675706c6f6164180d2001280b32202e656f6c796d702e6578656375746f722e4a6f622e537465702e55706c6f6164480012300a0567726f7570180e2001280b321f2e656f6c796d702e6578656375746f722e4a6f622e537465702e47726f757048001a580a05577269746512120a0a736f757263655f75726c18052001280912140a0c7461726765745f6163746f7218022001280912130a0b7461726765745f7061746818032001280912100a086669785f63726c661804200128081aa8010a0655706c6f616412140a0c736f757263655f6163746f7218012001280912130a0b736f757263655f7061746818022001280912130a0b7461726765745f6e616d6518032001280912120a0a6f7074696f6e616c6c79180420012808120b0a0374746c18052001280d12100a086d61785f73697a6518062001280d12150a0d6d61785f646174615f73697a6518072001280d12140a0c666f7263655f75706c6f61641808200128081a87010a04436f707912140a0c736f757263655f6163746f7218012001280912130a0b736f757263655f7061746818022001280912140a0c7461726765745f6163746f7218032001280912130a0b7461726765745f7061746818042001280912120a0a6f7074696f6e616c6c7918052001280812150a0d72656d6f76655f736f757263651806200128081aae020a0745786563757465120d0a056163746f72180120012809120c0a046172677318022003280912370a03656e7618032003280b322a2e656f6c796d702e6578656375746f722e4a6f622e537465702e457865637574652e456e76456e747279120d0a05737464696e181e20012809120e0a067374646f7574181f20012809120e0a0673746465727218202001280912120a0a737464696e5f6c61737418212001280812170a0f77616c6c5f74696d655f6c696d6974180a2001280d12160a0e6370755f74696d655f6c696d6974180b2001280d12140a0c6d656d6f72795f6c696d6974180c2001280412170a0f66696c655f73697a655f6c696d6974180d200128041a2a0a08456e76456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a0238011a3d0a0547726f757012340a0970726f63657373657318012003280b32212e656f6c796d702e6578656375746f722e4a6f622e537465702e4578656375746542080a06616374696f6e42335a316769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f6578656375746f723b6578656375746f72620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

