<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Worker;

class WorkerServiceClient {

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
     * @param CreateJobInput $input message
     * @param array $context request parameters
     *
     * @return CreateJobOutput output message
     */
    public function CreateJob(CreateJobInput $input, array $context = [])
    {
        $path = "/jobs";

        $context['name'] = "eolymp.worker.WorkerService/CreateJob";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateJobOutput::class, $context);
    }

    /**
     * @param DescribeJobInput $input message
     * @param array $context request parameters
     *
     * @return DescribeJobOutput output message
     */
    public function DescribeJob(DescribeJobInput $input, array $context = [])
    {
        $path = "/jobs/".rawurlencode($input->getJobId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setJobId("");

        $context['name'] = "eolymp.worker.WorkerService/DescribeJob";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeJobOutput::class, $context);
    }

    /**
     * @param ListJobsInput $input message
     * @param array $context request parameters
     *
     * @return ListJobsOutput output message
     */
    public function ListJobs(ListJobsInput $input, array $context = [])
    {
        $path = "/jobs";

        $context['name'] = "eolymp.worker.WorkerService/ListJobs";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListJobsOutput::class, $context);
    }

}