<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Asset;

class AssetServiceClient {

    /** @var string base URL */
    private $url;

    /** @var callable RPC client */
    private $invoker;

    /**
     * @param string   $url     defines base URL for service
     * @param callable $invoker provides transport implementation for calls
     */
    public function __construct($url, $invoker)
    {
        $this->url = $url;
        $this->invoker = $invoker;
    }

    /**
     * @param UploadImageInput $input message
     * @param array $context request parameters
     *
     * @return UploadImageOutput output message
     */
    public function UploadImage(UploadImageInput $input, array $context = [])
    {
        $path = "/assets/images";

        $context['name'] = "eolymp.asset.AssetService/UploadImage";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, UploadImageOutput::class, $context);
    }

    /**
     * @param UploadFileInput $input message
     * @param array $context request parameters
     *
     * @return UploadFileOutput output message
     */
    public function UploadFile(UploadFileInput $input, array $context = [])
    {
        $path = "/assets/files";

        $context['name'] = "eolymp.asset.AssetService/UploadFile";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, UploadFileOutput::class, $context);
    }

}
