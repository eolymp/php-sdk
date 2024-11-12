<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Community;

class PenaltyServiceClient {

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
     * @param CreatePenaltyInput $input message
     * @param array $context request parameters
     *
     * @return CreatePenaltyOutput output message
     */
    public function CreatePenalty(CreatePenaltyInput $input, array $context = [])
    {
        $path = "/penalties";

        $context['name'] = "eolymp.community.PenaltyService/CreatePenalty";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreatePenaltyOutput::class, $context);
    }

    /**
     * @param CancelPenaltyInput $input message
     * @param array $context request parameters
     *
     * @return CancelPenaltyOutput output message
     */
    public function CancelPenalty(CancelPenaltyInput $input, array $context = [])
    {
        $path = "/penalties/".rawurlencode($input->getPenaltyId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setPenaltyId("");

        $context['name'] = "eolymp.community.PenaltyService/CancelPenalty";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, CancelPenaltyOutput::class, $context);
    }

    /**
     * @param DescribePenaltyInput $input message
     * @param array $context request parameters
     *
     * @return DescribePenaltyOutput output message
     */
    public function DescribePenalty(DescribePenaltyInput $input, array $context = [])
    {
        $path = "/penalties/".rawurlencode($input->getPenaltyId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setPenaltyId("");

        $context['name'] = "eolymp.community.PenaltyService/DescribePenalty";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribePenaltyOutput::class, $context);
    }

    /**
     * @param ListPenaltiesInput $input message
     * @param array $context request parameters
     *
     * @return ListPenaltiesOutput output message
     */
    public function ListPenalties(ListPenaltiesInput $input, array $context = [])
    {
        $path = "/penalties";

        $context['name'] = "eolymp.community.PenaltyService/ListPenalties";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListPenaltiesOutput::class, $context);
    }

}
