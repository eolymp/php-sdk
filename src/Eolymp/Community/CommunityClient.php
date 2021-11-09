<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Community;

class CommunityClient {

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
     * @param AddMemberInput $input message
     * @param array $context request parameters
     *
     * @return AddMemberOutput output message
     */
    public function AddMember(AddMemberInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.community.Community/AddMember", $input, AddMemberOutput::class, $context);
    }

    /**
     * @param UpdateMemberInput $input message
     * @param array $context request parameters
     *
     * @return UpdateMemberOutput output message
     */
    public function UpdateMember(UpdateMemberInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.community.Community/UpdateMember", $input, UpdateMemberOutput::class, $context);
    }

    /**
     * @param RemoveMemberInput $input message
     * @param array $context request parameters
     *
     * @return RemoveMemberOutput output message
     */
    public function RemoveMember(RemoveMemberInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.community.Community/RemoveMember", $input, RemoveMemberOutput::class, $context);
    }

    /**
     * @param DescribeMemberInput $input message
     * @param array $context request parameters
     *
     * @return DescribeMemberOutput output message
     */
    public function DescribeMember(DescribeMemberInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.community.Community/DescribeMember", $input, DescribeMemberOutput::class, $context);
    }

    /**
     * @param IntrospectMemberInput $input message
     * @param array $context request parameters
     *
     * @return IntrospectMemberOutput output message
     */
    public function IntrospectMember(IntrospectMemberInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.community.Community/IntrospectMember", $input, IntrospectMemberOutput::class, $context);
    }

    /**
     * @param ListMembersInput $input message
     * @param array $context request parameters
     *
     * @return ListMembersOutput output message
     */
    public function ListMembers(ListMembersInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.community.Community/ListMembers", $input, ListMembersOutput::class, $context);
    }

    /**
     * @param AddAttributeInput $input message
     * @param array $context request parameters
     *
     * @return AddAttributeOutput output message
     */
    public function AddAttribute(AddAttributeInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.community.Community/AddAttribute", $input, AddAttributeOutput::class, $context);
    }

    /**
     * @param UpdateAttributeInput $input message
     * @param array $context request parameters
     *
     * @return UpdateAttributeOutput output message
     */
    public function UpdateAttribute(UpdateAttributeInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.community.Community/UpdateAttribute", $input, UpdateAttributeOutput::class, $context);
    }

    /**
     * @param RemoveAttributeInput $input message
     * @param array $context request parameters
     *
     * @return RemoveAttributeOutput output message
     */
    public function RemoveAttribute(RemoveAttributeInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.community.Community/RemoveAttribute", $input, RemoveAttributeOutput::class, $context);
    }

    /**
     * @param DescribeAttributeInput $input message
     * @param array $context request parameters
     *
     * @return DescribeAttributeOutput output message
     */
    public function DescribeAttribute(DescribeAttributeInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.community.Community/DescribeAttribute", $input, DescribeAttributeOutput::class, $context);
    }

    /**
     * @param ListAttributesInput $input message
     * @param array $context request parameters
     *
     * @return ListAttributesOutput output message
     */
    public function ListAttributes(ListAttributesInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.community.Community/ListAttributes", $input, ListAttributesOutput::class, $context);
    }

}
