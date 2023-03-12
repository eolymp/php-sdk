<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Acl;

class AclClient {

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
     * @param GrantInput $input message
     * @param array $context request parameters
     *
     * @return GrantOutput output message
     */
    public function Grant(GrantInput $input, array $context = [])
    {
        $path = "/acl/".rawurlencode($input->getUserId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setUserId("");

        $context['name'] = "eolymp.acl.Acl/Grant";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, GrantOutput::class, $context);
    }

    /**
     * @param RevokeInput $input message
     * @param array $context request parameters
     *
     * @return RevokeOutput output message
     */
    public function Revoke(RevokeInput $input, array $context = [])
    {
        $path = "/acl/".rawurlencode($input->getUserId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setUserId("");

        $context['name'] = "eolymp.acl.Acl/Revoke";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, RevokeOutput::class, $context);
    }

    /**
     * @param DescribeInput $input message
     * @param array $context request parameters
     *
     * @return DescribeOutput output message
     */
    public function Describe(DescribeInput $input, array $context = [])
    {
        $path = "/acl/".rawurlencode($input->getUserId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setUserId("");

        $context['name'] = "eolymp.acl.Acl/Describe";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeOutput::class, $context);
    }

    /**
     * @param ListInput $input message
     * @param array $context request parameters
     *
     * @return ListOutput output message
     */
    public function List(ListInput $input, array $context = [])
    {
        $path = "/acl";

        $context['name'] = "eolymp.acl.Acl/List";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListOutput::class, $context);
    }

    /**
     * @param IntrospectInput $input message
     * @param array $context request parameters
     *
     * @return IntrospectOutput output message
     */
    public function Introspect(IntrospectInput $input, array $context = [])
    {
        $path = "/whoami";

        $context['name'] = "eolymp.acl.Acl/Introspect";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, IntrospectOutput::class, $context);
    }

}
