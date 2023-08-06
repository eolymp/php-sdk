<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Atlas;

class PolygonServiceClient {

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
     * @param ImportPolygonProblemInput $input message
     * @param array $context request parameters
     *
     * @return ImportPolygonProblemOutput output message
     */
    public function ImportPolygonProblem(ImportPolygonProblemInput $input, array $context = [])
    {
        $path = "/polygon/import";

        $context['name'] = "eolymp.atlas.PolygonService/ImportPolygonProblem";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, ImportPolygonProblemOutput::class, $context);
    }

}
