<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Community;

    /**
     * GroupService provides API to manage space groups.
     */
class GroupServiceClient {

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
     * @param CreateGroupInput $input message
     * @param array $context request parameters
     *
     * @return CreateGroupOutput output message
     */
    public function CreateGroup(CreateGroupInput $input, array $context = [])
    {
        $path = "/groups";

        $context['name'] = "eolymp.community.GroupService/CreateGroup";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateGroupOutput::class, $context);
    }

    /**
     * @param UpdateGroupInput $input message
     * @param array $context request parameters
     *
     * @return UpdateGroupOutput output message
     */
    public function UpdateGroup(UpdateGroupInput $input, array $context = [])
    {
        $path = "/groups/".rawurlencode($input->getGroupId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setGroupId("");

        $context['name'] = "eolymp.community.GroupService/UpdateGroup";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, UpdateGroupOutput::class, $context);
    }

    /**
     * @param DeleteGroupInput $input message
     * @param array $context request parameters
     *
     * @return DeleteGroupOutput output message
     */
    public function DeleteGroup(DeleteGroupInput $input, array $context = [])
    {
        $path = "/groups/".rawurlencode($input->getGroupId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setGroupId("");

        $context['name'] = "eolymp.community.GroupService/DeleteGroup";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteGroupOutput::class, $context);
    }

    /**
     * @param DescribeGroupInput $input message
     * @param array $context request parameters
     *
     * @return DescribeGroupOutput output message
     */
    public function DescribeGroup(DescribeGroupInput $input, array $context = [])
    {
        $path = "/groups/".rawurlencode($input->getGroupId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setGroupId("");

        $context['name'] = "eolymp.community.GroupService/DescribeGroup";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeGroupOutput::class, $context);
    }

    /**
     * @param ListGroupsInput $input message
     * @param array $context request parameters
     *
     * @return ListGroupsOutput output message
     */
    public function ListGroups(ListGroupsInput $input, array $context = [])
    {
        $path = "/groups";

        $context['name'] = "eolymp.community.GroupService/ListGroups";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListGroupsOutput::class, $context);
    }

}
