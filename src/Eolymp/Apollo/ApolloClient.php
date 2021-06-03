<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Apollo;

class ApolloClient {

    /** @var callable RPC client */
    private $invoker;

    /**
     * @param callable $invoker for RPC calls
     */
    public function __construct($invoker)
    {
        $this->invoker = $invoker;
    }

    /**
     * @param CreateSubmissionInput $input message
     * @param array $context request parameters
     *
     * @return CreateSubmissionOutput output message
     */
    public function CreateSubmission(CreateSubmissionInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.apollo.Apollo/CreateSubmission", $input, CreateSubmissionOutput::class, $context);
    }

    /**
     * @param DescribeSubmissionInput $input message
     * @param array $context request parameters
     *
     * @return DescribeSubmissionOutput output message
     */
    public function DescribeSubmission(DescribeSubmissionInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.apollo.Apollo/DescribeSubmission", $input, DescribeSubmissionOutput::class, $context);
    }

}
