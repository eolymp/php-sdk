<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Atlas;

class EditorServiceClient {

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
     * @param DescribeEditorInput $input message
     * @param array $context request parameters
     *
     * @return DescribeEditorOutput output message
     */
    public function DescribeEditor(DescribeEditorInput $input, array $context = [])
    {
        $path = "/editor";

        $context['name'] = "eolymp.atlas.EditorService/DescribeEditor";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeEditorOutput::class, $context);
    }

    /**
     * @param DescribeEditorStateInput $input message
     * @param array $context request parameters
     *
     * @return DescribeEditorStateOutput output message
     */
    public function DescribeEditorState(DescribeEditorStateInput $input, array $context = [])
    {
        $path = "/editor/state";

        $context['name'] = "eolymp.atlas.EditorService/DescribeEditorState";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeEditorStateOutput::class, $context);
    }

    /**
     * @param UpdateEditorStateInput $input message
     * @param array $context request parameters
     *
     * @return UpdateEditorStateOutput output message
     */
    public function UpdateEditorState(UpdateEditorStateInput $input, array $context = [])
    {
        $path = "/editor/state";

        $context['name'] = "eolymp.atlas.EditorService/UpdateEditorState";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, UpdateEditorStateOutput::class, $context);
    }

    /**
     * @param PrintEditorCodeInput $input message
     * @param array $context request parameters
     *
     * @return PrintEditorCodeOutput output message
     */
    public function PrintEditorCode(PrintEditorCodeInput $input, array $context = [])
    {
        $path = "/editor/print";

        $context['name'] = "eolymp.atlas.EditorService/PrintEditorCode";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, PrintEditorCodeOutput::class, $context);
    }

}
