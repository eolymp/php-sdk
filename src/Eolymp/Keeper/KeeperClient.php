<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Keeper;

class KeeperClient {

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
     * @param CreateObjectInput $input message
     * @param array $context request parameters
     *
     * @return CreateObjectOutput output message
     */
    public function CreateObject(CreateObjectInput $input, array $context = [])
    {
        $path = "/objects";

        $context['name'] = "eolymp.keeper.Keeper/CreateObject";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateObjectOutput::class, $context);
    }

    /**
     * @param DescribeObjectInput $input message
     * @param array $context request parameters
     *
     * @return DescribeObjectOutput output message
     */
    public function DescribeObject(DescribeObjectInput $input, array $context = [])
    {
        $path = "/objects/".rawurlencode($input->getKey());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setKey("");

        $context['name'] = "eolymp.keeper.Keeper/DescribeObject";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeObjectOutput::class, $context);
    }

    /**
     * @param DownloadObjectInput $input message
     * @param array $context request parameters
     *
     * @return DownloadObjectOutput output message
     */
    public function DownloadObject(DownloadObjectInput $input, array $context = [])
    {
        $path = "/objects/".rawurlencode($input->getKey())."/data";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setKey("");

        $context['name'] = "eolymp.keeper.Keeper/DownloadObject";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DownloadObjectOutput::class, $context);
    }

    /**
     * @param StartMultipartUploadInput $input message
     * @param array $context request parameters
     *
     * @return StartMultipartUploadOutput output message
     */
    public function StartMultipartUpload(StartMultipartUploadInput $input, array $context = [])
    {
        $path = "/uploads";

        $context['name'] = "eolymp.keeper.Keeper/StartMultipartUpload";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, StartMultipartUploadOutput::class, $context);
    }

    /**
     * @param UploadPartInput $input message
     * @param array $context request parameters
     *
     * @return UploadPartOutput output message
     */
    public function UploadPart(UploadPartInput $input, array $context = [])
    {
        $path = "/objects/".rawurlencode($input->getObjectId())."/parts";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setObjectId("");

        $context['name'] = "eolymp.keeper.Keeper/UploadPart";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, UploadPartOutput::class, $context);
    }

    /**
     * @param CompleteMultipartUploadInput $input message
     * @param array $context request parameters
     *
     * @return CompleteMultipartUploadOutput output message
     */
    public function CompleteMultipartUpload(CompleteMultipartUploadInput $input, array $context = [])
    {
        $path = "/objects/".rawurlencode($input->getObjectId())."/complete";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setObjectId("");

        $context['name'] = "eolymp.keeper.Keeper/CompleteMultipartUpload";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CompleteMultipartUploadOutput::class, $context);
    }

}
