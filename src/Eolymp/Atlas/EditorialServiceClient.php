<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Atlas;

class EditorialServiceClient {

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
     * @param CreateEditorialInput $input message
     * @param array $context request parameters
     *
     * @return CreateEditorialOutput output message
     */
    public function CreateEditorial(CreateEditorialInput $input, array $context = [])
    {
        $path = "/editorials";

        $context['name'] = "eolymp.atlas.EditorialService/CreateEditorial";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, CreateEditorialOutput::class, $context);
    }

    /**
     * @param UpdateEditorialInput $input message
     * @param array $context request parameters
     *
     * @return UpdateEditorialOutput output message
     */
    public function UpdateEditorial(UpdateEditorialInput $input, array $context = [])
    {
        $path = "/editorials/".rawurlencode($input->getEditorialId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setEditorialId("");

        $context['name'] = "eolymp.atlas.EditorialService/UpdateEditorial";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateEditorialOutput::class, $context);
    }

    /**
     * @param DeleteEditorialInput $input message
     * @param array $context request parameters
     *
     * @return DeleteEditorialOutput output message
     */
    public function DeleteEditorial(DeleteEditorialInput $input, array $context = [])
    {
        $path = "/editorials/".rawurlencode($input->getEditorialId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setEditorialId("");

        $context['name'] = "eolymp.atlas.EditorialService/DeleteEditorial";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteEditorialOutput::class, $context);
    }

    /**
     * DescribeEditorial returns editorial.
     *
     * @param DescribeEditorialInput $input message
     * @param array $context request parameters
     *
     * @return DescribeEditorialOutput output message
     */
    public function DescribeEditorial(DescribeEditorialInput $input, array $context = [])
    {
        $path = "/editorials/".rawurlencode($input->getEditorialId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setEditorialId("");

        $context['name'] = "eolymp.atlas.EditorialService/DescribeEditorial";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeEditorialOutput::class, $context);
    }

    /**
     * LookupEditorial finds an editorial for the requested locale.
     *
     * @param LookupEditorialInput $input message
     * @param array $context request parameters
     *
     * @return LookupEditorialOutput output message
     */
    public function LookupEditorial(LookupEditorialInput $input, array $context = [])
    {
        $path = "/editorial";

        $context['name'] = "eolymp.atlas.EditorialService/LookupEditorial";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, LookupEditorialOutput::class, $context);
    }

    /**
     * RenderEditorial returns fully resolved editorial in ECM format.
     *
     * This method should be used to fetch editorial for viewing, it always returns editorial as ECM tree (rather than
     * HTML or LaTeX) and ensures any embedded or computed values are resolved.
     *
     * @param RenderEditorialInput $input message
     * @param array $context request parameters
     *
     * @return RenderEditorialOutput output message
     */
    public function RenderEditorial(RenderEditorialInput $input, array $context = [])
    {
        $path = "/editorials/".rawurlencode($input->getEditorialId())."/render";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setEditorialId("");

        $context['name'] = "eolymp.atlas.EditorialService/RenderEditorial";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, RenderEditorialOutput::class, $context);
    }

    /**
     * PreviewEditorial renders unsaved editorial.
     *
     * This method can be used to render editorial before it has been saved.
     *
     * @param PreviewEditorialInput $input message
     * @param array $context request parameters
     *
     * @return PreviewEditorialOutput output message
     */
    public function PreviewEditorial(PreviewEditorialInput $input, array $context = [])
    {
        $path = "/editorial/preview";

        $context['name'] = "eolymp.atlas.EditorialService/PreviewEditorial";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, PreviewEditorialOutput::class, $context);
    }

    /**
     * @param ListEditorialsInput $input message
     * @param array $context request parameters
     *
     * @return ListEditorialsOutput output message
     */
    public function ListEditorials(ListEditorialsInput $input, array $context = [])
    {
        $path = "/editorials";

        $context['name'] = "eolymp.atlas.EditorialService/ListEditorials";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListEditorialsOutput::class, $context);
    }

}
