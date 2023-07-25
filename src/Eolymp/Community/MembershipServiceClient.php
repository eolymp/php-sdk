<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Community;

    /**
     * MembershipService provides API to manage own membership in space.
     */
class MembershipServiceClient {

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
     * Add yourself to the space, for already authenticated user (for example using 3rd party IdP)
     *
     * @param JoinSpaceInput $input message
     * @param array $context request parameters
     *
     * @return JoinSpaceOutput output message
     */
    public function JoinSpace(JoinSpaceInput $input, array $context = [])
    {
        $path = "/members/_self";

        $context['name'] = "eolymp.community.MembershipService/JoinSpace";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, JoinSpaceOutput::class, $context);
    }

    /**
     * Describe member profile for authenticated user
     *
     * @param DescribeMembershipInput $input message
     * @param array $context request parameters
     *
     * @return DescribeMembershipOutput output message
     */
    public function DescribeMembership(DescribeMembershipInput $input, array $context = [])
    {
        $path = "/members/_self";

        $context['name'] = "eolymp.community.MembershipService/DescribeMembership";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeMembershipOutput::class, $context);
    }

    /**
     * Update member profile for authenticated user
     *
     * @param UpdateMembershipInput $input message
     * @param array $context request parameters
     *
     * @return UpdateMembershipOutput output message
     */
    public function UpdateMembership(UpdateMembershipInput $input, array $context = [])
    {
        $path = "/members/_self/attributes";

        $context['name'] = "eolymp.community.MembershipService/UpdateMembership";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, UpdateMembershipOutput::class, $context);
    }

}