<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Atlas;

class LibraryServiceClient {

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
     * @param CreateProblemInput $input message
     * @param array $context request parameters
     *
     * @return CreateProblemOutput output message
     */
    public function CreateProblem(CreateProblemInput $input, array $context = [])
    {
        $path = "/problems";

        $context['name'] = "eolymp.atlas.LibraryService/CreateProblem";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateProblemOutput::class, $context);
    }

    /**
     * @param DeleteProblemInput $input message
     * @param array $context request parameters
     *
     * @return DeleteProblemOutput output message
     */
    public function DeleteProblem(DeleteProblemInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.LibraryService/DeleteProblem";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteProblemOutput::class, $context);
    }

    /**
     * @param DescribeProblemInput $input message
     * @param array $context request parameters
     *
     * @return DescribeProblemOutput output message
     */
    public function DescribeProblem(DescribeProblemInput $input, array $context = [])
    {
        $path = "/problems/".rawurlencode($input->getProblemId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setProblemId("");

        $context['name'] = "eolymp.atlas.LibraryService/DescribeProblem";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeProblemOutput::class, $context);
    }

    /**
     * @param ListProblemsInput $input message
     * @param array $context request parameters
     *
     * @return ListProblemsOutput output message
     */
    public function ListProblems(ListProblemsInput $input, array $context = [])
    {
        $path = "/problems";

        $context['name'] = "eolymp.atlas.LibraryService/ListProblems";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListProblemsOutput::class, $context);
    }

}