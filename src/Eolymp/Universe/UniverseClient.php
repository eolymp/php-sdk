<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Universe;

class UniverseClient {

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
     * Create a space
     *
     * @param CreateSpaceInput $input message
     * @param array $context request parameters
     *
     * @return CreateSpaceOutput output message
     */
    public function CreateSpace(CreateSpaceInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.universe.Universe/CreateSpace", $input, CreateSpaceOutput::class, $context);
    }

    /**
     * Update existing space
     *
     * @param UpdateSpaceInput $input message
     * @param array $context request parameters
     *
     * @return UpdateSpaceOutput output message
     */
    public function UpdateSpace(UpdateSpaceInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.universe.Universe/UpdateSpace", $input, UpdateSpaceOutput::class, $context);
    }

    /**
     * Delete space
     *
     * @param DeleteSpaceInput $input message
     * @param array $context request parameters
     *
     * @return DeleteSpaceOutput output message
     */
    public function DeleteSpace(DeleteSpaceInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.universe.Universe/DeleteSpace", $input, DeleteSpaceOutput::class, $context);
    }

    /**
     * Lookup space by domain key
     *
     * @param LookupSpaceInput $input message
     * @param array $context request parameters
     *
     * @return LookupSpaceOutput output message
     */
    public function LookupSpace(LookupSpaceInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.universe.Universe/LookupSpace", $input, LookupSpaceOutput::class, $context);
    }

    /**
     * Describe space
     *
     * @param DescribeSpaceInput $input message
     * @param array $context request parameters
     *
     * @return DescribeSpaceOutput output message
     */
    public function DescribeSpace(DescribeSpaceInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.universe.Universe/DescribeSpace", $input, DescribeSpaceOutput::class, $context);
    }

    /**
     * List spaces of a contest
     *
     * @param ListSpacesInput $input message
     * @param array $context request parameters
     *
     * @return ListSpacesOutput output message
     */
    public function ListSpaces(ListSpacesInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.universe.Universe/ListSpaces", $input, ListSpacesOutput::class, $context);
    }

    /**
     * Add space permission
     *
     * @param GrantPermissionInput $input message
     * @param array $context request parameters
     *
     * @return GrantPermissionOutput output message
     */
    public function GrantPermission(GrantPermissionInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.universe.Universe/GrantPermission", $input, GrantPermissionOutput::class, $context);
    }

    /**
     * Delete space permission
     *
     * @param RevokePermissionInput $input message
     * @param array $context request parameters
     *
     * @return RevokePermissionOutput output message
     */
    public function RevokePermission(RevokePermissionInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.universe.Universe/RevokePermission", $input, RevokePermissionOutput::class, $context);
    }

    /**
     * Describe space permission
     *
     * @param DescribePermissionInput $input message
     * @param array $context request parameters
     *
     * @return DescribePermissionOutput output message
     */
    public function DescribePermission(DescribePermissionInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.universe.Universe/DescribePermission", $input, DescribePermissionOutput::class, $context);
    }

    /**
     * Describe space permission
     *
     * @param IntrospectPermissionInput $input message
     * @param array $context request parameters
     *
     * @return IntrospectPermissionOutput output message
     */
    public function IntrospectPermission(IntrospectPermissionInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.universe.Universe/IntrospectPermission", $input, IntrospectPermissionOutput::class, $context);
    }

    /**
     * List permissions in a space
     *
     * @param ListPermissionsInput $input message
     * @param array $context request parameters
     *
     * @return ListPermissionsOutput output message
     */
    public function ListPermissions(ListPermissionsInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.universe.Universe/ListPermissions", $input, ListPermissionsOutput::class, $context);
    }

}