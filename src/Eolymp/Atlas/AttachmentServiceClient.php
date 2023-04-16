<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Atlas;

class AttachmentServiceClient {

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
     * @param CreateAttachmentInput $input message
     * @param array $context request parameters
     *
     * @return CreateAttachmentOutput output message
     */
    public function CreateAttachment(CreateAttachmentInput $input, array $context = [])
    {
        $path = "/attachments";

        $context['name'] = "eolymp.atlas.AttachmentService/CreateAttachment";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateAttachmentOutput::class, $context);
    }

    /**
     * @param UpdateAttachmentInput $input message
     * @param array $context request parameters
     *
     * @return UpdateAttachmentOutput output message
     */
    public function UpdateAttachment(UpdateAttachmentInput $input, array $context = [])
    {
        $path = "/attachments/".rawurlencode($input->getAttachmentId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setAttachmentId("");

        $context['name'] = "eolymp.atlas.AttachmentService/UpdateAttachment";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, UpdateAttachmentOutput::class, $context);
    }

    /**
     * @param DeleteAttachmentInput $input message
     * @param array $context request parameters
     *
     * @return DeleteAttachmentOutput output message
     */
    public function DeleteAttachment(DeleteAttachmentInput $input, array $context = [])
    {
        $path = "/attachments/".rawurlencode($input->getAttachmentId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setAttachmentId("");

        $context['name'] = "eolymp.atlas.AttachmentService/DeleteAttachment";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteAttachmentOutput::class, $context);
    }

    /**
     * @param ListAttachmentsInput $input message
     * @param array $context request parameters
     *
     * @return ListAttachmentsOutput output message
     */
    public function ListAttachments(ListAttachmentsInput $input, array $context = [])
    {
        $path = "/attachments";

        $context['name'] = "eolymp.atlas.AttachmentService/ListAttachments";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListAttachmentsOutput::class, $context);
    }

    /**
     * @param DescribeAttachmentInput $input message
     * @param array $context request parameters
     *
     * @return DescribeAttachmentOutput output message
     */
    public function DescribeAttachment(DescribeAttachmentInput $input, array $context = [])
    {
        $path = "/attachments/".rawurlencode($input->getAttachmentId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setAttachmentId("");

        $context['name'] = "eolymp.atlas.AttachmentService/DescribeAttachment";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeAttachmentOutput::class, $context);
    }

}