<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Guardian;

class GuardianClient {

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
     * @param ListPoliciesInput $input message
     * @param array $context request parameters
     *
     * @return ListPoliciesOutput output message
     */
    public function ListPolicies(ListPoliciesInput $input, array $context = [])
    {
        $path = "/policies";

        $context['name'] = "eolymp.guardian.Guardian/ListPolicies";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListPoliciesOutput::class, $context);
    }

    /**
     * @param DescribePolicyInput $input message
     * @param array $context request parameters
     *
     * @return DescribePolicyOutput output message
     */
    public function DescribePolicy(DescribePolicyInput $input, array $context = [])
    {
        $path = "/policies/".rawurlencode($input->getId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setId("");

        $context['name'] = "eolymp.guardian.Guardian/DescribePolicy";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribePolicyOutput::class, $context);
    }

    /**
     * @param DefinePolicyInput $input message
     * @param array $context request parameters
     *
     * @return DefinePolicyOutput output message
     */
    public function DefinePolicy(DefinePolicyInput $input, array $context = [])
    {
        $path = "/policies/".rawurlencode($input->getId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setId("");

        $context['name'] = "eolymp.guardian.Guardian/DefinePolicy";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, DefinePolicyOutput::class, $context);
    }

    /**
     * @param DeletePolicyInput $input message
     * @param array $context request parameters
     *
     * @return DeletePolicyOutput output message
     */
    public function DeletePolicy(DeletePolicyInput $input, array $context = [])
    {
        $path = "/policies/".rawurlencode($input->getId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setId("");

        $context['name'] = "eolymp.guardian.Guardian/DeletePolicy";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeletePolicyOutput::class, $context);
    }

    /**
     * @param EvaluateInput $input message
     * @param array $context request parameters
     *
     * @return EvaluateOutput output message
     */
    public function Evaluate(EvaluateInput $input, array $context = [])
    {
        $path = "/evaluate";

        $context['name'] = "eolymp.guardian.Guardian/Evaluate";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, EvaluateOutput::class, $context);
    }

}
