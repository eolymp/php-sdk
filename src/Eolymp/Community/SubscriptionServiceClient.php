<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Community;

class SubscriptionServiceClient {

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
     * @param DescribeSubscriptionInput $input message
     * @param array $context request parameters
     *
     * @return DescribeSubscriptionOutput output message
     */
    public function DescribeSubscription(DescribeSubscriptionInput $input, array $context = [])
    {
        $path = "/subscriptions/".rawurlencode($input->getSubscriptionId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setSubscriptionId("");

        $context['name'] = "eolymp.community.SubscriptionService/DescribeSubscription";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeSubscriptionOutput::class, $context);
    }

    /**
     * @param ListSubscriptionsInput $input message
     * @param array $context request parameters
     *
     * @return ListSubscriptionsOutput output message
     */
    public function ListSubscriptions(ListSubscriptionsInput $input, array $context = [])
    {
        $path = "/subscriptions";

        $context['name'] = "eolymp.community.SubscriptionService/ListSubscriptions";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListSubscriptionsOutput::class, $context);
    }

}