<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Community;

    /**
     * MemberService provides API to manage space members.
     */
class MemberServiceClient {

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
     * @param CreateMemberInput $input message
     * @param array $context request parameters
     *
     * @return CreateMemberOutput output message
     */
    public function CreateMember(CreateMemberInput $input, array $context = [])
    {
        $path = "/members";

        $context['name'] = "eolymp.community.MemberService/CreateMember";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateMemberOutput::class, $context);
    }

    /**
     * @param UpdateMemberInput $input message
     * @param array $context request parameters
     *
     * @return UpdateMemberOutput output message
     */
    public function UpdateMember(UpdateMemberInput $input, array $context = [])
    {
        $path = "/members/".rawurlencode($input->getMemberId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setMemberId("");

        $context['name'] = "eolymp.community.MemberService/UpdateMember";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, UpdateMemberOutput::class, $context);
    }

    /**
     * @param DeleteMemberInput $input message
     * @param array $context request parameters
     *
     * @return DeleteMemberOutput output message
     */
    public function DeleteMember(DeleteMemberInput $input, array $context = [])
    {
        $path = "/members/".rawurlencode($input->getMemberId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setMemberId("");

        $context['name'] = "eolymp.community.MemberService/DeleteMember";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteMemberOutput::class, $context);
    }

    /**
     * @param RestoreMemberInput $input message
     * @param array $context request parameters
     *
     * @return RestoreMemberOutput output message
     */
    public function RestoreMember(RestoreMemberInput $input, array $context = [])
    {
        $path = "/members/".rawurlencode($input->getMemberId())."/restore";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setMemberId("");

        $context['name'] = "eolymp.community.MemberService/RestoreMember";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, RestoreMemberOutput::class, $context);
    }

    /**
     * @param DescribeMemberInput $input message
     * @param array $context request parameters
     *
     * @return DescribeMemberOutput output message
     */
    public function DescribeMember(DescribeMemberInput $input, array $context = [])
    {
        $path = "/members/".rawurlencode($input->getMemberId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setMemberId("");

        $context['name'] = "eolymp.community.MemberService/DescribeMember";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeMemberOutput::class, $context);
    }

    /**
     * @param ListMembersInput $input message
     * @param array $context request parameters
     *
     * @return ListMembersOutput output message
     */
    public function ListMembers(ListMembersInput $input, array $context = [])
    {
        $path = "/members";

        $context['name'] = "eolymp.community.MemberService/ListMembers";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListMembersOutput::class, $context);
    }

    /**
     * @param AssignMemberInput $input message
     * @param array $context request parameters
     *
     * @return AssignMemberOutput output message
     */
    public function AssignMember(AssignMemberInput $input, array $context = [])
    {
        $path = "/members/".rawurlencode($input->getTeamId())."/users/".rawurlencode($input->getMemberId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTeamId("");
        $input->setMemberId("");

        $context['name'] = "eolymp.community.MemberService/AssignMember";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, AssignMemberOutput::class, $context);
    }

    /**
     * @param UnassignMemberInput $input message
     * @param array $context request parameters
     *
     * @return UnassignMemberOutput output message
     */
    public function UnassignMember(UnassignMemberInput $input, array $context = [])
    {
        $path = "/members/".rawurlencode($input->getTeamId())."/users/".rawurlencode($input->getMemberId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTeamId("");
        $input->setMemberId("");

        $context['name'] = "eolymp.community.MemberService/UnassignMember";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, UnassignMemberOutput::class, $context);
    }

}
