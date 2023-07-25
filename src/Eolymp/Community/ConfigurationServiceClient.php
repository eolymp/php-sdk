<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Community;

class ConfigurationServiceClient {

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
     * Describe identity provider configuration
     *
     * @param DescribeIdentityProviderInput $input message
     * @param array $context request parameters
     *
     * @return DescribeIdentityProviderOutput output message
     */
    public function DescribeIdentityProvider(DescribeIdentityProviderInput $input, array $context = [])
    {
        $path = "/idp";

        $context['name'] = "eolymp.community.ConfigurationService/DescribeIdentityProvider";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeIdentityProviderOutput::class, $context);
    }

    /**
     * Update identity provider configuration
     *
     * @param ConfigureIdentityProviderInput $input message
     * @param array $context request parameters
     *
     * @return ConfigureIdentityProviderOutput output message
     */
    public function ConfigureIdentityProvider(ConfigureIdentityProviderInput $input, array $context = [])
    {
        $path = "/idp";

        $context['name'] = "eolymp.community.ConfigurationService/ConfigureIdentityProvider";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, ConfigureIdentityProviderOutput::class, $context);
    }

}