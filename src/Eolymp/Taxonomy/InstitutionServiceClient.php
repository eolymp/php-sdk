<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Taxonomy;

class InstitutionServiceClient {

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
     * @param ListInstitutionsInput $input message
     * @param array $context request parameters
     *
     * @return ListInstitutionsOutput output message
     */
    public function ListInstitutions(ListInstitutionsInput $input, array $context = [])
    {
        $path = "/institutions";

        $context['name'] = "eolymp.taxonomy.InstitutionService/ListInstitutions";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListInstitutionsOutput::class, $context);
    }

    /**
     * @param DescribeInstitutionInput $input message
     * @param array $context request parameters
     *
     * @return DescribeInstitutionOutput output message
     */
    public function DescribeInstitution(DescribeInstitutionInput $input, array $context = [])
    {
        $path = "/institutions/".rawurlencode($input->getInstitutionId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setInstitutionId("");

        $context['name'] = "eolymp.taxonomy.InstitutionService/DescribeInstitution";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeInstitutionOutput::class, $context);
    }

}
