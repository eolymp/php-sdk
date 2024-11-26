<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Webhook;

class WebhookServiceClient {

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
     * @param CreateWebhookInput $input message
     * @param array $context request parameters
     *
     * @return CreateWebhookOutput output message
     */
    public function CreateWebhook(CreateWebhookInput $input, array $context = [])
    {
        $path = "/webhooks";

        $context['name'] = "eolymp.webhook.WebhookService/CreateWebhook";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateWebhookOutput::class, $context);
    }

    /**
     * @param UpdateWebhookInput $input message
     * @param array $context request parameters
     *
     * @return UpdateWebhookOutput output message
     */
    public function UpdateWebhook(UpdateWebhookInput $input, array $context = [])
    {
        $path = "/webhooks/".rawurlencode($input->getWebhookId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setWebhookId("");

        $context['name'] = "eolymp.webhook.WebhookService/UpdateWebhook";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, UpdateWebhookOutput::class, $context);
    }

    /**
     * @param DeleteWebhookInput $input message
     * @param array $context request parameters
     *
     * @return DeleteWebhookOutput output message
     */
    public function DeleteWebhook(DeleteWebhookInput $input, array $context = [])
    {
        $path = "/webhooks/".rawurlencode($input->getWebhookId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setWebhookId("");

        $context['name'] = "eolymp.webhook.WebhookService/DeleteWebhook";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteWebhookOutput::class, $context);
    }

    /**
     * @param DescribeWebhookInput $input message
     * @param array $context request parameters
     *
     * @return DescribeWebhookOutput output message
     */
    public function DescribeWebhook(DescribeWebhookInput $input, array $context = [])
    {
        $path = "/webhooks/".rawurlencode($input->getWebhookId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setWebhookId("");

        $context['name'] = "eolymp.webhook.WebhookService/DescribeWebhook";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeWebhookOutput::class, $context);
    }

    /**
     * @param ListWebhooksInput $input message
     * @param array $context request parameters
     *
     * @return ListWebhooksOutput output message
     */
    public function ListWebhooks(ListWebhooksInput $input, array $context = [])
    {
        $path = "/webhooks";

        $context['name'] = "eolymp.webhook.WebhookService/ListWebhooks";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListWebhooksOutput::class, $context);
    }

    /**
     * @param TestWebhookInput $input message
     * @param array $context request parameters
     *
     * @return TestWebhookOutput output message
     */
    public function TestWebhook(TestWebhookInput $input, array $context = [])
    {
        $path = "/webhooks/".rawurlencode($input->getWebhookId())."/test";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setWebhookId("");

        $context['name'] = "eolymp.webhook.WebhookService/TestWebhook";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, TestWebhookOutput::class, $context);
    }

}