<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Acl;

class EntitlementServiceClient {

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
     * @param IntrospectEntitlementsInput $input message
     * @param array $context request parameters
     *
     * @return IntrospectEntitlementsOutput output message
     */
    public function IntrospectEntitlements(IntrospectEntitlementsInput $input, array $context = [])
    {
        $path = "/__entitlements";

        $context['name'] = "eolymp.acl.EntitlementService/IntrospectEntitlements";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, IntrospectEntitlementsOutput::class, $context);
    }

}