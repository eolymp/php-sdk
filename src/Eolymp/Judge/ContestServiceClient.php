<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Judge;

class ContestServiceClient {

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
     * @param CreateContestInput $input message
     * @param array $context request parameters
     *
     * @return CreateContestOutput output message
     */
    public function CreateContest(CreateContestInput $input, array $context = [])
    {
        $path = "/contests";

        $context['name'] = "eolymp.judge.ContestService/CreateContest";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateContestOutput::class, $context);
    }

    /**
     * @param DeleteContestInput $input message
     * @param array $context request parameters
     *
     * @return DeleteContestOutput output message
     */
    public function DeleteContest(DeleteContestInput $input, array $context = [])
    {
        $path = "/contests/".rawurlencode($input->getContestId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setContestId("");

        $context['name'] = "eolymp.judge.ContestService/DeleteContest";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteContestOutput::class, $context);
    }

    /**
     * @param UpdateContestInput $input message
     * @param array $context request parameters
     *
     * @return UpdateContestOutput output message
     */
    public function UpdateContest(UpdateContestInput $input, array $context = [])
    {
        $path = "/contests/".rawurlencode($input->getContestId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setContestId("");

        $context['name'] = "eolymp.judge.ContestService/UpdateContest";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateContestOutput::class, $context);
    }

    /**
     * @param CopyContestInput $input message
     * @param array $context request parameters
     *
     * @return CopyContestOutput output message
     */
    public function CopyContest(CopyContestInput $input, array $context = [])
    {
        $path = "/contests/".rawurlencode($input->getContestId())."/copy";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setContestId("");

        $context['name'] = "eolymp.judge.ContestService/CopyContest";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CopyContestOutput::class, $context);
    }

    /**
     * @param DescribeContestInput $input message
     * @param array $context request parameters
     *
     * @return DescribeContestOutput output message
     */
    public function DescribeContest(DescribeContestInput $input, array $context = [])
    {
        $path = "/contests/".rawurlencode($input->getContestId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setContestId("");

        $context['name'] = "eolymp.judge.ContestService/DescribeContest";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeContestOutput::class, $context);
    }

    /**
     * @param ListContestsInput $input message
     * @param array $context request parameters
     *
     * @return ListContestsOutput output message
     */
    public function ListContests(ListContestsInput $input, array $context = [])
    {
        $path = "/contests";

        $context['name'] = "eolymp.judge.ContestService/ListContests";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListContestsOutput::class, $context);
    }

    /**
     * Force-starts scheduled contest, this call also automatically changes starts_at to current time and adjusts
     * ends_at to match original date range of the contest.
     *
     * @param OpenContestInput $input message
     * @param array $context request parameters
     *
     * @return OpenContestOutput output message
     */
    public function OpenContest(OpenContestInput $input, array $context = [])
    {
        $path = "/contests/".rawurlencode($input->getContestId())."/open";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setContestId("");

        $context['name'] = "eolymp.judge.ContestService/OpenContest";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, OpenContestOutput::class, $context);
    }

    /**
     * Force-finishes open contest, this method automatically changes ends_at to current time.
     *
     * @param CloseContestInput $input message
     * @param array $context request parameters
     *
     * @return CloseContestOutput output message
     */
    public function CloseContest(CloseContestInput $input, array $context = [])
    {
        $path = "/contests/".rawurlencode($input->getContestId())."/close";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setContestId("");

        $context['name'] = "eolymp.judge.ContestService/CloseContest";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CloseContestOutput::class, $context);
    }

    /**
     * Temporarily stop contest and block participant's interface
     * Use ResumeContest to switch contest back to a normal mode.
     *
     * @param SuspendContestInput $input message
     * @param array $context request parameters
     *
     * @return SuspendContestOutput output message
     */
    public function SuspendContest(SuspendContestInput $input, array $context = [])
    {
        $path = "/contests/".rawurlencode($input->getContestId())."/suspend";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setContestId("");

        $context['name'] = "eolymp.judge.ContestService/SuspendContest";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, SuspendContestOutput::class, $context);
    }

    /**
     * Temporarily restrict submission function
     * Use ResumeContest to switch contest back to a normal mode.
     *
     * @param FreezeContestInput $input message
     * @param array $context request parameters
     *
     * @return FreezeContestOutput output message
     */
    public function FreezeContest(FreezeContestInput $input, array $context = [])
    {
        $path = "/contests/".rawurlencode($input->getContestId())."/freeze";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setContestId("");

        $context['name'] = "eolymp.judge.ContestService/FreezeContest";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, FreezeContestOutput::class, $context);
    }

    /**
     * Re-start suspended or frozen contest
     *
     * @param ResumeContestInput $input message
     * @param array $context request parameters
     *
     * @return ResumeContestOutput output message
     */
    public function ResumeContest(ResumeContestInput $input, array $context = [])
    {
        $path = "/contests/".rawurlencode($input->getContestId())."/resume";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setContestId("");

        $context['name'] = "eolymp.judge.ContestService/ResumeContest";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, ResumeContestOutput::class, $context);
    }

    /**
     * @param ListActivitiesInput $input message
     * @param array $context request parameters
     *
     * @return ListActivitiesOutput output message
     */
    public function ListActivities(ListActivitiesInput $input, array $context = [])
    {
        $path = "/contests/".rawurlencode($input->getContestId())."/activities";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setContestId("");

        $context['name'] = "eolymp.judge.ContestService/ListActivities";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListActivitiesOutput::class, $context);
    }

    /**
     * @param DescribeContestUsageInput $input message
     * @param array $context request parameters
     *
     * @return DescribeContestUsageOutput output message
     */
    public function DescribeContestUsage(DescribeContestUsageInput $input, array $context = [])
    {
        $path = "/usage/contests";

        $context['name'] = "eolymp.judge.ContestService/DescribeContestUsage";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeContestUsageOutput::class, $context);
    }

}
