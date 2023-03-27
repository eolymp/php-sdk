<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Pastebin;

class PastebinClient {

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
     * @param UploadFileInput $input message
     * @param array $context request parameters
     *
     * @return UploadFileOutput output message
     */
    public function UploadFile(UploadFileInput $input, array $context = [])
    {
        $path = "/pastebin";

        $context['name'] = "eolymp.pastebin.Pastebin/UploadFile";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, UploadFileOutput::class, $context);
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

        $context['name'] = "eolymp.pastebin.Pastebin/StartMultipartUpload";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, StartMultipartUploadOutput::class, $context);
    }

    /**
     * @param UploadPartInput $input message
     * @param array $context request parameters
     *
     * @return UploadPartOutput output message
     */
    public function UploadPart(UploadPartInput $input, array $context = [])
    {
        $path = "/uploads/".rawurlencode($input->getUploadId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setUploadId("");

        $context['name'] = "eolymp.pastebin.Pastebin/UploadPart";
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
        $path = "/uploads/".rawurlencode($input->getUploadId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setUploadId("");

        $context['name'] = "eolymp.pastebin.Pastebin/CompleteMultipartUpload";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, CompleteMultipartUploadOutput::class, $context);
    }

}
