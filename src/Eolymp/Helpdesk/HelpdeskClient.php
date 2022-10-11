<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Helpdesk;

class HelpdeskClient {

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
     * @param DescribeDocumentInput $input message
     * @param array $context request parameters
     *
     * @return DescribeDocumentOutput output message
     */
    public function DescribeDocument(DescribeDocumentInput $input, array $context = [])
    {
        $path = "/helpdesk/document/".rawurlencode($input->getDocumentId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setDocumentId("");

        $context['name'] = "eolymp.helpdesk.Helpdesk/DescribeDocument";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeDocumentOutput::class, $context);
    }

    /**
     * @param ListDocumentsInput $input message
     * @param array $context request parameters
     *
     * @return ListDocumentsOutput output message
     */
    public function ListDocuments(ListDocumentsInput $input, array $context = [])
    {
        $path = "/helpdesk/documents";

        $context['name'] = "eolymp.helpdesk.Helpdesk/ListDocuments";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListDocumentsOutput::class, $context);
    }

    /**
     * @param CreateDocumentInput $input message
     * @param array $context request parameters
     *
     * @return CreateDocumentOutput output message
     */
    public function CreateDocument(CreateDocumentInput $input, array $context = [])
    {
        $path = "/helpdesk/document";

        $context['name'] = "eolymp.helpdesk.Helpdesk/CreateDocument";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateDocumentOutput::class, $context);
    }

    /**
     * @param UpdateDocumentInput $input message
     * @param array $context request parameters
     *
     * @return UpdateDocumentOutput output message
     */
    public function UpdateDocument(UpdateDocumentInput $input, array $context = [])
    {
        $path = "/helpdesk/document/".rawurlencode($input->getDocumentId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setDocumentId("");

        $context['name'] = "eolymp.helpdesk.Helpdesk/UpdateDocument";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateDocumentOutput::class, $context);
    }

    /**
     * @param DeleteDocumentInput $input message
     * @param array $context request parameters
     *
     * @return DeleteDocumentOutput output message
     */
    public function DeleteDocument(DeleteDocumentInput $input, array $context = [])
    {
        $path = "/helpdesk/document/".rawurlencode($input->getDocumentId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setDocumentId("");

        $context['name'] = "eolymp.helpdesk.Helpdesk/DeleteDocument";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteDocumentOutput::class, $context);
    }

    /**
     * @param DescribePathInput $input message
     * @param array $context request parameters
     *
     * @return DescribePathOutput output message
     */
    public function DescribePath(DescribePathInput $input, array $context = [])
    {
        $path = "/helpdesk/paths/".rawurlencode($input->getPath());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setPath("");

        $context['name'] = "eolymp.helpdesk.Helpdesk/DescribePath";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribePathOutput::class, $context);
    }

    /**
     * @param ListPathsInput $input message
     * @param array $context request parameters
     *
     * @return ListPathsOutput output message
     */
    public function ListPaths(ListPathsInput $input, array $context = [])
    {
        $path = "/helpdesk/paths";

        $context['name'] = "eolymp.helpdesk.Helpdesk/ListPaths";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListPathsOutput::class, $context);
    }

    /**
     * @param ListParentsInput $input message
     * @param array $context request parameters
     *
     * @return ListParentsOutput output message
     */
    public function ListParents(ListParentsInput $input, array $context = [])
    {
        $path = "/helpdesk/paths/".rawurlencode($input->getPath())."/parents";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setPath("");

        $context['name'] = "eolymp.helpdesk.Helpdesk/ListParents";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListParentsOutput::class, $context);
    }

}
