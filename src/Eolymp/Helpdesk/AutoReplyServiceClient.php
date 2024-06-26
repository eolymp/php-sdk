<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Helpdesk;

class AutoReplyServiceClient {

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
     * @param CreateAutoReplyInput $input message
     * @param array $context request parameters
     *
     * @return CreateAutoReplyOutput output message
     */
    public function CreateAutoReply(CreateAutoReplyInput $input, array $context = [])
    {
        $path = "/helpdesk/auto-replies";

        $context['name'] = "eolymp.helpdesk.AutoReplyService/CreateAutoReply";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateAutoReplyOutput::class, $context);
    }

    /**
     * @param UpdateAutoReplyInput $input message
     * @param array $context request parameters
     *
     * @return UpdateAutoReplyOutput output message
     */
    public function UpdateAutoReply(UpdateAutoReplyInput $input, array $context = [])
    {
        $path = "/helpdesk/auto-replies/".rawurlencode($input->getReplyId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setReplyId("");

        $context['name'] = "eolymp.helpdesk.AutoReplyService/UpdateAutoReply";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateAutoReplyOutput::class, $context);
    }

    /**
     * @param DeleteAutoReplyInput $input message
     * @param array $context request parameters
     *
     * @return DeleteAutoReplyOutput output message
     */
    public function DeleteAutoReply(DeleteAutoReplyInput $input, array $context = [])
    {
        $path = "/helpdesk/auto-replies/".rawurlencode($input->getReplyId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setReplyId("");

        $context['name'] = "eolymp.helpdesk.AutoReplyService/DeleteAutoReply";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteAutoReplyOutput::class, $context);
    }

    /**
     * @param ListAutoRepliesInput $input message
     * @param array $context request parameters
     *
     * @return ListAutoRepliesOutput output message
     */
    public function ListAutoReplies(ListAutoRepliesInput $input, array $context = [])
    {
        $path = "/helpdesk/auto-replies";

        $context['name'] = "eolymp.helpdesk.AutoReplyService/ListAutoReplies";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListAutoRepliesOutput::class, $context);
    }

    /**
     * @param DescribeAutoReplyInput $input message
     * @param array $context request parameters
     *
     * @return DescribeAutoReplyOutput output message
     */
    public function DescribeAutoReply(DescribeAutoReplyInput $input, array $context = [])
    {
        $path = "/helpdesk/auto-replies/".rawurlencode($input->getReplyId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setReplyId("");

        $context['name'] = "eolymp.helpdesk.AutoReplyService/DescribeAutoReply";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeAutoReplyOutput::class, $context);
    }

}
