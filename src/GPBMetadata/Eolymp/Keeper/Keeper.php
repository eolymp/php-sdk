<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/keeper/keeper.proto

namespace GPBMetadata\Eolymp\Keeper;

class Keeper
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Eolymp\Annotations\Scope::initOnce();
        \GPBMetadata\Eolymp\Annotations\Ratelimit::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab2060a1a656f6c796d702f6b65657065722f6b65657065722e70726f746f120d656f6c796d702e6b65657065721a22656f6c796d702f616e6e6f746174696f6e732f726174656c696d69742e70726f746f22210a114372656174654f626a656374496e707574120c0a046461746118012001280c22210a124372656174654f626a6563744f7574707574120b0a036b657918012001280922220a1344657363726962654f626a656374496e707574120b0a036b657918012001280922240a1444657363726962654f626a6563744f7574707574120c0a0473697a6518012001280522400a13446f776e6c6f61644f626a656374496e707574120b0a036b6579180120012809120e0a066f6666736574180a20012805120c0a0473697a65180b2001280522320a14446f776e6c6f61644f626a6563744f7574707574120c0a046461746118012001280c120c0a0473697a65180220012805329b030a064b65657065721280010a0c4372656174654f626a65637412202e656f6c796d702e6b65657065722e4372656174654f626a656374496e7075741a212e656f6c796d702e6b65657065722e4372656174654f626a6563744f7574707574222b82e30a178ae30a136b65657065723a6f626a6563743a7772697465eae20a0cf5e20a00000040f8e20af4031285010a0e44657363726962654f626a65637412222e656f6c796d702e6b65657065722e44657363726962654f626a656374496e7075741a232e656f6c796d702e6b65657065722e44657363726962654f626a6563744f7574707574222a82e30a168ae30a126b65657065723a6f626a6563743a72656164eae20a0cf5e20a00004842f8e20af4031285010a0e446f776e6c6f61644f626a65637412222e656f6c796d702e6b65657065722e446f776e6c6f61644f626a656374496e7075741a232e656f6c796d702e6b65657065722e446f776e6c6f61644f626a6563744f7574707574222a82e30a168ae30a126b65657065723a6f626a6563743a72656164eae20a0cf5e20a00004842f8e20af40342355a336769746875622e636f6d2f656f6c796d702f636f6e7472616374732f676f2f656f6c796d702f6b65657065723b6b6565706572620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

