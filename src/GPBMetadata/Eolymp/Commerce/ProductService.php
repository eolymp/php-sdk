<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/commerce/product_service.proto

namespace GPBMetadata\Eolymp\Commerce;

class ProductService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        \GPBMetadata\Eolymp\Commerce\Price::initOnce();
        \GPBMetadata\Eolymp\Commerce\Product::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa6120a25656f6c796d702f636f6d6d657263652f70726f647563745f736572766963652e70726f746f120f656f6c796d702e636f6d6d657263651a1b656f6c796d702f636f6d6d657263652f70726963652e70726f746f1a1d656f6c796d702f636f6d6d657263652f70726f647563742e70726f746f223f0a1243726561746550726f64756374496e70757412290a0770726f6475637418012001280b32182e656f6c796d702e636f6d6d657263652e50726f6475637422290a1343726561746550726f647563744f757470757412120a0a70726f647563745f696418012001280922530a1255706461746550726f64756374496e70757412120a0a70726f647563745f696418012001280912290a0770726f6475637418022001280b32182e656f6c796d702e636f6d6d657263652e50726f6475637422150a1355706461746550726f647563744f75747075742285010a114c69737450726f6475637473496e70757412400a0766696c7465727318012003280b322f2e656f6c796d702e636f6d6d657263652e4c69737450726f6475637473496e7075742e46696c74657273456e7472791a2e0a0c46696c74657273456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a023801224c0a124c69737450726f64756374734f7574707574120d0a05746f74616c18012001280512270a056974656d7318022003280b32182e656f6c796d702e636f6d6d657263652e50726f64756374222a0a14446573637269626550726f64756374496e70757412120a0a70726f647563745f696418012001280922420a15446573637269626550726f647563744f757470757412290a0770726f6475637418012001280b32182e656f6c796d702e636f6d6d657263652e50726f6475637422280a1244656c65746550726f64756374496e70757412120a0a70726f647563745f696418012001280922150a1344656c65746550726f647563744f7574707574223e0a164c69737450726f64756374507269636573496e70757412120a0a70726f647563745f696418012001280912100a0863757272656e637918022001280922400a174c69737450726f647563745072696365734f757470757412250a056974656d7318022003280b32162e656f6c796d702e636f6d6d657263652e507269636522410a19446573637269626550726f647563745072696365496e70757412120a0a70726f647563745f696418012001280912100a0870726963655f696418022001280922430a1a446573637269626550726f6475637450726963654f757470757412250a05707269636518012001280b32162e656f6c796d702e636f6d6d657263652e507269636522540a1743726561746550726f647563745072696365496e70757412120a0a70726f647563745f696418012001280912250a05707269636518022001280b32162e656f6c796d702e636f6d6d657263652e5072696365222c0a1843726561746550726f6475637450726963654f757470757412100a0870726963655f6964180120012809223f0a1744656c65746550726f647563745072696365496e70757412120a0a70726f647563745f696418012001280912100a0870726963655f6964180220012809221a0a1844656c65746550726f6475637450726963654f757470757432a8080a0e50726f6475637453657276696365126b0a0d43726561746550726f6475637412232e656f6c796d702e636f6d6d657263652e43726561746550726f64756374496e7075741a242e656f6c796d702e636f6d6d657263652e43726561746550726f647563744f7574707574220feae20a0bf5e20a0000a040f8e20a32126b0a0d55706461746550726f6475637412232e656f6c796d702e636f6d6d657263652e55706461746550726f64756374496e7075741a242e656f6c796d702e636f6d6d657263652e55706461746550726f647563744f7574707574220feae20a0bf5e20a0000a040f8e20a3212710a0f446573637269626550726f6475637412252e656f6c796d702e636f6d6d657263652e446573637269626550726f64756374496e7075741a262e656f6c796d702e636f6d6d657263652e446573637269626550726f647563744f7574707574220feae20a0bf5e20a0000a040f8e20a3212680a0c4c69737450726f647563747312222e656f6c796d702e636f6d6d657263652e4c69737450726f6475637473496e7075741a232e656f6c796d702e636f6d6d657263652e4c69737450726f64756374734f7574707574220feae20a0bf5e20a0000a040f8e20a32126b0a0d44656c65746550726f6475637412232e656f6c796d702e636f6d6d657263652e44656c65746550726f64756374496e7075741a242e656f6c796d702e636f6d6d657263652e44656c65746550726f647563744f7574707574220feae20a0bf5e20a0000a040f8e20a3212770a114c69737450726f6475637450726963657312272e656f6c796d702e636f6d6d657263652e4c69737450726f64756374507269636573496e7075741a282e656f6c796d702e636f6d6d657263652e4c69737450726f647563745072696365734f7574707574220feae20a0bf5e20a0000a040f8e20a321280010a14446573637269626550726f647563745072696365122a2e656f6c796d702e636f6d6d657263652e446573637269626550726f647563745072696365496e7075741a2b2e656f6c796d702e636f6d6d657263652e446573637269626550726f6475637450726963654f7574707574220feae20a0bf5e20a0000a040f8e20a32127a0a1243726561746550726f64756374507269636512282e656f6c796d702e636f6d6d657263652e43726561746550726f647563745072696365496e7075741a292e656f6c796d702e636f6d6d657263652e43726561746550726f6475637450726963654f7574707574220feae20a0bf5e20a0000a040f8e20a32127a0a1244656c65746550726f64756374507269636512282e656f6c796d702e636f6d6d657263652e44656c65746550726f647563745072696365496e7075741a292e656f6c796d702e636f6d6d657263652e44656c65746550726f6475637450726963654f7574707574220feae20a0bf5e20a0000a040f8e20a3242335a316769746875622e636f6d2f656f6c796d702f676f2d73646b2f656f6c796d702f636f6d6d657263653b636f6d6d65726365620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

