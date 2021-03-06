<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Typewriter;

class TypewriterClient {

    /** @var callable RPC client */
    private $invoker;

    /**
     * @param callable $invoker for RPC calls
     */
    public function __construct($invoker)
    {
        $this->invoker = $invoker;
    }

    /**
     * @param UploadAssetInput $input message
     * @param array $context request parameters
     *
     * @return UploadAssetOutput output message
     */
    public function UploadAsset(UploadAssetInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.typewriter.Typewriter/UploadAsset", $input, UploadAssetOutput::class, $context);
    }

}
