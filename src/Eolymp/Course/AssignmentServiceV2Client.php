<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Course;

class AssignmentServiceV2Client {

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
     * @param CreateAssignmentV2Input $input message
     * @param array $context request parameters
     *
     * @return CreateAssignmentV2Output output message
     */
    public function CreateAssignment(CreateAssignmentV2Input $input, array $context = [])
    {
        $path = "/assignments";

        $context['name'] = "eolymp.course.AssignmentServiceV2/CreateAssignment";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateAssignmentV2Output::class, $context);
    }

    /**
     * @param DeleteAssignmentV2Input $input message
     * @param array $context request parameters
     *
     * @return DeleteAssignmentV2Output output message
     */
    public function DeleteAssignment(DeleteAssignmentV2Input $input, array $context = [])
    {
        $path = "/assignments/".rawurlencode($input->getModuleId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setModuleId("");

        $context['name'] = "eolymp.course.AssignmentServiceV2/DeleteAssignment";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteAssignmentV2Output::class, $context);
    }

    /**
     * @param StartAssignmentV2Input $input message
     * @param array $context request parameters
     *
     * @return StartAssignmentV2Output output message
     */
    public function StartAssignment(StartAssignmentV2Input $input, array $context = [])
    {
        $path = "/assignments/".rawurlencode($input->getModuleId())."/start";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setModuleId("");

        $context['name'] = "eolymp.course.AssignmentServiceV2/StartAssignment";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, StartAssignmentV2Output::class, $context);
    }

    /**
     * @param ListAssignmentsV2Input $input message
     * @param array $context request parameters
     *
     * @return ListAssignmentsV2Output output message
     */
    public function ListAssignments(ListAssignmentsV2Input $input, array $context = [])
    {
        $path = "/assignments";

        $context['name'] = "eolymp.course.AssignmentServiceV2/ListAssignments";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListAssignmentsV2Output::class, $context);
    }

    /**
     * @param ListAssignmentItemsV2Input $input message
     * @param array $context request parameters
     *
     * @return ListAssignmentItemsV2Output output message
     */
    public function ListAssignmentItems(ListAssignmentItemsV2Input $input, array $context = [])
    {
        $path = "/assignments/".rawurlencode($input->getModuleId())."/items";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setModuleId("");

        $context['name'] = "eolymp.course.AssignmentServiceV2/ListAssignmentItems";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListAssignmentItemsV2Output::class, $context);
    }

    /**
     * @param DescribeAssignmentItemV2Input $input message
     * @param array $context request parameters
     *
     * @return DescribeAssignmentItemV2Output output message
     */
    public function DescribeAssignmentItem(DescribeAssignmentItemV2Input $input, array $context = [])
    {
        $path = "/assignments/".rawurlencode($input->getModuleId())."/items/".rawurlencode($input->getItemId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setModuleId("");
        $input->setItemId("");

        $context['name'] = "eolymp.course.AssignmentServiceV2/DescribeAssignmentItem";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeAssignmentItemV2Output::class, $context);
    }

}
