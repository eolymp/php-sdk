<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Executor;

class ExecutorClient {

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
     * @param DescribeLanguageInput $input message
     * @param array $context request parameters
     *
     * @return DescribeLanguageOutput output message
     */
    public function DescribeLanguage(DescribeLanguageInput $input, array $context = [])
    {
        $path = "/executor/languages/".rawurlencode($input->getLanguageId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setLanguageId("");

        $context['name'] = "eolymp.executor.Executor/DescribeLanguage";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeLanguageOutput::class, $context);
    }

    /**
     * @param ListLanguagesInput $input message
     * @param array $context request parameters
     *
     * @return ListLanguagesOutput output message
     */
    public function ListLanguages(ListLanguagesInput $input, array $context = [])
    {
        $path = "/executor/languages";

        $context['name'] = "eolymp.executor.Executor/ListLanguages";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListLanguagesOutput::class, $context);
    }

    /**
     * @param DescribeRuntimeInput $input message
     * @param array $context request parameters
     *
     * @return DescribeRuntimeOutput output message
     */
    public function DescribeRuntime(DescribeRuntimeInput $input, array $context = [])
    {
        $path = "/executor/runtime/".rawurlencode($input->getRuntimeId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setRuntimeId("");

        $context['name'] = "eolymp.executor.Executor/DescribeRuntime";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeRuntimeOutput::class, $context);
    }

    /**
     * @param ListRuntimeInput $input message
     * @param array $context request parameters
     *
     * @return ListRuntimeOutput output message
     */
    public function ListRuntime(ListRuntimeInput $input, array $context = [])
    {
        $path = "/executor/runtime";

        $context['name'] = "eolymp.executor.Executor/ListRuntime";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListRuntimeOutput::class, $context);
    }

    /**
     * @param DescribeCodeTemplateInput $input message
     * @param array $context request parameters
     *
     * @return DescribeCodeTemplateOutput output message
     */
    public function DescribeCodeTemplate(DescribeCodeTemplateInput $input, array $context = [])
    {
        $path = "/executor/runtime/".rawurlencode($input->getRuntimeId())."/template";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setRuntimeId("");

        $context['name'] = "eolymp.executor.Executor/DescribeCodeTemplate";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeCodeTemplateOutput::class, $context);
    }

}
