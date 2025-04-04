<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Content;

class ContentServiceClient {

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
     * @param DescribeFragmentInput $input message
     * @param array $context request parameters
     *
     * @return DescribeFragmentOutput output message
     */
    public function DescribeFragment(DescribeFragmentInput $input, array $context = [])
    {
        $path = "/content/fragments/".rawurlencode($input->getFragmentId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setFragmentId("");

        $context['name'] = "eolymp.content.ContentService/DescribeFragment";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeFragmentOutput::class, $context);
    }

    /**
     * @param ListFragmentsInput $input message
     * @param array $context request parameters
     *
     * @return ListFragmentsOutput output message
     */
    public function ListFragments(ListFragmentsInput $input, array $context = [])
    {
        $path = "/content/fragments";

        $context['name'] = "eolymp.content.ContentService/ListFragments";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListFragmentsOutput::class, $context);
    }

    /**
     * @param CreateFragmentInput $input message
     * @param array $context request parameters
     *
     * @return CreateFragmentOutput output message
     */
    public function CreateFragment(CreateFragmentInput $input, array $context = [])
    {
        $path = "/content/fragments";

        $context['name'] = "eolymp.content.ContentService/CreateFragment";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateFragmentOutput::class, $context);
    }

    /**
     * @param UpdateFragmentInput $input message
     * @param array $context request parameters
     *
     * @return UpdateFragmentOutput output message
     */
    public function UpdateFragment(UpdateFragmentInput $input, array $context = [])
    {
        $path = "/content/fragments/".rawurlencode($input->getFragmentId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setFragmentId("");

        $context['name'] = "eolymp.content.ContentService/UpdateFragment";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateFragmentOutput::class, $context);
    }

    /**
     * @param DeleteFragmentInput $input message
     * @param array $context request parameters
     *
     * @return DeleteFragmentOutput output message
     */
    public function DeleteFragment(DeleteFragmentInput $input, array $context = [])
    {
        $path = "/content/fragments/".rawurlencode($input->getFragmentId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setFragmentId("");

        $context['name'] = "eolymp.content.ContentService/DeleteFragment";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteFragmentOutput::class, $context);
    }

    /**
     * @param TranslateFragmentInput $input message
     * @param array $context request parameters
     *
     * @return TranslateFragmentOutput output message
     */
    public function TranslateFragment(TranslateFragmentInput $input, array $context = [])
    {
        $path = "/content/fragments/".rawurlencode($input->getFragmentId())."/translate";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setFragmentId("");

        $context['name'] = "eolymp.content.ContentService/TranslateFragment";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, TranslateFragmentOutput::class, $context);
    }

    /**
     * @param DescribeVariantInput $input message
     * @param array $context request parameters
     *
     * @return DescribeVariantOutput output message
     */
    public function DescribeVariant(DescribeVariantInput $input, array $context = [])
    {
        $path = "/content/fragments/".rawurlencode($input->getFragmentId())."/variants/".rawurlencode($input->getVariantId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setFragmentId("");
        $input->setVariantId("");

        $context['name'] = "eolymp.content.ContentService/DescribeVariant";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeVariantOutput::class, $context);
    }

    /**
     * @param ListVariantsInput $input message
     * @param array $context request parameters
     *
     * @return ListVariantsOutput output message
     */
    public function ListVariants(ListVariantsInput $input, array $context = [])
    {
        $path = "/content/fragments/".rawurlencode($input->getFragmentId())."/variants";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setFragmentId("");

        $context['name'] = "eolymp.content.ContentService/ListVariants";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListVariantsOutput::class, $context);
    }

    /**
     * @param CreateVariantInput $input message
     * @param array $context request parameters
     *
     * @return CreateVariantOutput output message
     */
    public function CreateVariant(CreateVariantInput $input, array $context = [])
    {
        $path = "/content/fragments/".rawurlencode($input->getFragmentId())."/variants";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setFragmentId("");

        $context['name'] = "eolymp.content.ContentService/CreateVariant";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateVariantOutput::class, $context);
    }

    /**
     * @param UpdateVariantInput $input message
     * @param array $context request parameters
     *
     * @return UpdateVariantOutput output message
     */
    public function UpdateVariant(UpdateVariantInput $input, array $context = [])
    {
        $path = "/content/fragments/".rawurlencode($input->getFragmentId())."/variants/".rawurlencode($input->getVariantId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setFragmentId("");
        $input->setVariantId("");

        $context['name'] = "eolymp.content.ContentService/UpdateVariant";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateVariantOutput::class, $context);
    }

    /**
     * @param DeleteVariantInput $input message
     * @param array $context request parameters
     *
     * @return DeleteVariantOutput output message
     */
    public function DeleteVariant(DeleteVariantInput $input, array $context = [])
    {
        $path = "/content/fragments/".rawurlencode($input->getFragmentId())."/variants/".rawurlencode($input->getVariantId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setFragmentId("");
        $input->setVariantId("");

        $context['name'] = "eolymp.content.ContentService/DeleteVariant";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteVariantOutput::class, $context);
    }

    /**
     * @param DescribePathInput $input message
     * @param array $context request parameters
     *
     * @return DescribePathOutput output message
     */
    public function DescribePath(DescribePathInput $input, array $context = [])
    {
        $path = "/content/path";

        $context['name'] = "eolymp.content.ContentService/DescribePath";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribePathOutput::class, $context);
    }

    /**
     * @param ListParentsInput $input message
     * @param array $context request parameters
     *
     * @return ListParentsOutput output message
     */
    public function ListParents(ListParentsInput $input, array $context = [])
    {
        $path = "/content/parents";

        $context['name'] = "eolymp.content.ContentService/ListParents";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListParentsOutput::class, $context);
    }

}
