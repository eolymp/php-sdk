<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Atlas;

class ScoringServiceClient {

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
     * @param DescribeScoreInput $input message
     * @param array $context request parameters
     *
     * @return DescribeScoreOutput output message
     */
    public function DescribeScore(DescribeScoreInput $input, array $context = [])
    {
        $path = "/scores/".rawurlencode($input->getMemberId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setMemberId("");

        $context['name'] = "eolymp.atlas.ScoringService/DescribeScore";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeScoreOutput::class, $context);
    }

    /**
     * @param DescribeProblemGradingInput $input message
     * @param array $context request parameters
     *
     * @return DescribeProblemGradingOutput output message
     */
    public function DescribeProblemGrading(DescribeProblemGradingInput $input, array $context = [])
    {
        $path = "/grading";

        $context['name'] = "eolymp.atlas.ScoringService/DescribeProblemGrading";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeProblemGradingOutput::class, $context);
    }

}
