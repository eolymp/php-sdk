<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Course;

class ModuleServiceClient {

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
     * @param CreateModuleInput $input message
     * @param array $context request parameters
     *
     * @return CreateModuleOutput output message
     */
    public function CreateModule(CreateModuleInput $input, array $context = [])
    {
        $path = "/modules";

        $context['name'] = "eolymp.course.ModuleService/CreateModule";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, CreateModuleOutput::class, $context);
    }

    /**
     * @param UpdateModuleInput $input message
     * @param array $context request parameters
     *
     * @return UpdateModuleOutput output message
     */
    public function UpdateModule(UpdateModuleInput $input, array $context = [])
    {
        $path = "/modules/".rawurlencode($input->getModuleId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setModuleId("");

        $context['name'] = "eolymp.course.ModuleService/UpdateModule";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateModuleOutput::class, $context);
    }

    /**
     * @param DeleteModuleInput $input message
     * @param array $context request parameters
     *
     * @return DeleteModuleOutput output message
     */
    public function DeleteModule(DeleteModuleInput $input, array $context = [])
    {
        $path = "/modules/".rawurlencode($input->getModuleId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setModuleId("");

        $context['name'] = "eolymp.course.ModuleService/DeleteModule";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteModuleOutput::class, $context);
    }

    /**
     * @param DescribeModuleInput $input message
     * @param array $context request parameters
     *
     * @return DescribeModuleOutput output message
     */
    public function DescribeModule(DescribeModuleInput $input, array $context = [])
    {
        $path = "/modules/".rawurlencode($input->getModuleId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setModuleId("");

        $context['name'] = "eolymp.course.ModuleService/DescribeModule";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeModuleOutput::class, $context);
    }

    /**
     * @param ListModulesInput $input message
     * @param array $context request parameters
     *
     * @return ListModulesOutput output message
     */
    public function ListModules(ListModulesInput $input, array $context = [])
    {
        $path = "/modules";

        $context['name'] = "eolymp.course.ModuleService/ListModules";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListModulesOutput::class, $context);
    }

}
