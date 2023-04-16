<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Atlas;

class TestingServiceClient {

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
     * @param UpdateVerifierInput $input message
     * @param array $context request parameters
     *
     * @return UpdateVerifierOutput output message
     */
    public function UpdateChecker(UpdateVerifierInput $input, array $context = [])
    {
        $path = "/verifier";

        $context['name'] = "eolymp.atlas.TestingService/UpdateChecker";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateVerifierOutput::class, $context);
    }

    /**
     * @param DescribeVerifierInput $input message
     * @param array $context request parameters
     *
     * @return DescribeVerifierOutput output message
     */
    public function DescribeChecker(DescribeVerifierInput $input, array $context = [])
    {
        $path = "/verifier";

        $context['name'] = "eolymp.atlas.TestingService/DescribeChecker";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeVerifierOutput::class, $context);
    }

    /**
     * @param UpdateInteractorInput $input message
     * @param array $context request parameters
     *
     * @return UpdateInteractorOutput output message
     */
    public function UpdateInteractor(UpdateInteractorInput $input, array $context = [])
    {
        $path = "/interactor";

        $context['name'] = "eolymp.atlas.TestingService/UpdateInteractor";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateInteractorOutput::class, $context);
    }

    /**
     * @param DescribeInteractorInput $input message
     * @param array $context request parameters
     *
     * @return DescribeInteractorOutput output message
     */
    public function DescribeInteractor(DescribeInteractorInput $input, array $context = [])
    {
        $path = "/interactor";

        $context['name'] = "eolymp.atlas.TestingService/DescribeInteractor";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeInteractorOutput::class, $context);
    }

    /**
     * @param CreateTestsetInput $input message
     * @param array $context request parameters
     *
     * @return CreateTestsetOutput output message
     */
    public function CreateTestset(CreateTestsetInput $input, array $context = [])
    {
        $path = "/testsets";

        $context['name'] = "eolymp.atlas.TestingService/CreateTestset";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateTestsetOutput::class, $context);
    }

    /**
     * @param UpdateTestsetInput $input message
     * @param array $context request parameters
     *
     * @return UpdateTestsetOutput output message
     */
    public function UpdateTestset(UpdateTestsetInput $input, array $context = [])
    {
        $path = "/testsets/".rawurlencode($input->getTestsetId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTestsetId("");

        $context['name'] = "eolymp.atlas.TestingService/UpdateTestset";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateTestsetOutput::class, $context);
    }

    /**
     * @param DeleteTestsetInput $input message
     * @param array $context request parameters
     *
     * @return DeleteTestsetOutput output message
     */
    public function DeleteTestset(DeleteTestsetInput $input, array $context = [])
    {
        $path = "/testsets/".rawurlencode($input->getTestsetId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTestsetId("");

        $context['name'] = "eolymp.atlas.TestingService/DeleteTestset";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteTestsetOutput::class, $context);
    }

    /**
     * @param DescribeTestsetInput $input message
     * @param array $context request parameters
     *
     * @return DescribeTestsetOutput output message
     */
    public function DescribeTestset(DescribeTestsetInput $input, array $context = [])
    {
        $path = "/testsets/".rawurlencode($input->getTestsetId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTestsetId("");

        $context['name'] = "eolymp.atlas.TestingService/DescribeTestset";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeTestsetOutput::class, $context);
    }

    /**
     * @param ListTestsetsInput $input message
     * @param array $context request parameters
     *
     * @return ListTestsetsOutput output message
     */
    public function ListTestsets(ListTestsetsInput $input, array $context = [])
    {
        $path = "/testsets";

        $context['name'] = "eolymp.atlas.TestingService/ListTestsets";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListTestsetsOutput::class, $context);
    }

    /**
     * @param CreateTestInput $input message
     * @param array $context request parameters
     *
     * @return CreateTestOutput output message
     */
    public function CreateTest(CreateTestInput $input, array $context = [])
    {
        $path = "/testsets/".rawurlencode($input->getTestsetId())."/tests";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTestsetId("");

        $context['name'] = "eolymp.atlas.TestingService/CreateTest";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateTestOutput::class, $context);
    }

    /**
     * @param UpdateTestInput $input message
     * @param array $context request parameters
     *
     * @return UpdateTestOutput output message
     */
    public function UpdateTest(UpdateTestInput $input, array $context = [])
    {
        $path = "/testsets/".rawurlencode($input->getTestsetId())."/tests/".rawurlencode($input->getTestId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTestsetId("");
        $input->setTestId("");

        $context['name'] = "eolymp.atlas.TestingService/UpdateTest";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateTestOutput::class, $context);
    }

    /**
     * @param DeleteTestInput $input message
     * @param array $context request parameters
     *
     * @return DeleteTestOutput output message
     */
    public function DeleteTest(DeleteTestInput $input, array $context = [])
    {
        $path = "/testsets/".rawurlencode($input->getTestsetId())."/tests/".rawurlencode($input->getTestId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTestsetId("");
        $input->setTestId("");

        $context['name'] = "eolymp.atlas.TestingService/DeleteTest";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteTestOutput::class, $context);
    }

    /**
     * @param DescribeTestInput $input message
     * @param array $context request parameters
     *
     * @return DescribeTestOutput output message
     */
    public function DescribeTest(DescribeTestInput $input, array $context = [])
    {
        $path = "/testsets/".rawurlencode($input->getTestsetId())."/tests/".rawurlencode($input->getTestId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTestsetId("");
        $input->setTestId("");

        $context['name'] = "eolymp.atlas.TestingService/DescribeTest";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeTestOutput::class, $context);
    }

    /**
     * @param ListTestsInput $input message
     * @param array $context request parameters
     *
     * @return ListTestsOutput output message
     */
    public function ListTests(ListTestsInput $input, array $context = [])
    {
        $path = "/testsets/".rawurlencode($input->getTestsetId())."/tests";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTestsetId("");

        $context['name'] = "eolymp.atlas.TestingService/ListTests";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListTestsOutput::class, $context);
    }

    /**
     * @param ListExamplesInput $input message
     * @param array $context request parameters
     *
     * @return ListExamplesOutput output message
     */
    public function ListExamples(ListExamplesInput $input, array $context = [])
    {
        $path = "/examples";

        $context['name'] = "eolymp.atlas.TestingService/ListExamples";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListExamplesOutput::class, $context);
    }

}