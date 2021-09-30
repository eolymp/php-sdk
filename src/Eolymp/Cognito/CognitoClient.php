<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Cognito;

class CognitoClient {

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
     * Create oauth access token.
     *
     * @param CreateTokenInput $input message
     * @param array $context request parameters
     *
     * @return CreateTokenOutput output message
     */
    public function CreateToken(CreateTokenInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.cognito.Cognito/CreateToken", $input, CreateTokenOutput::class, $context);
    }

    /**
     * Introspect oauth token, returns access token details for a given token.
     *
     * @param IntrospectTokenInput $input message
     * @param array $context request parameters
     *
     * @return IntrospectTokenOutput output message
     */
    public function IntrospectToken(IntrospectTokenInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.cognito.Cognito/IntrospectToken", $input, IntrospectTokenOutput::class, $context);
    }

    /**
     * Create authorization code.
     *
     * @param CreateAuthorizationInput $input message
     * @param array $context request parameters
     *
     * @return CreateAuthorizationOutput output message
     */
    public function CreateAuthorization(CreateAuthorizationInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.cognito.Cognito/CreateAuthorization", $input, CreateAuthorizationOutput::class, $context);
    }

    /**
     * Revoke token disables given token and related tokens.
     *
     * @param RevokeTokenInput $input message
     * @param array $context request parameters
     *
     * @return RevokeTokenOutput output message
     */
    public function RevokeToken(RevokeTokenInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.cognito.Cognito/RevokeToken", $input, RevokeTokenOutput::class, $context);
    }

    /**
     * Signout revokes all user's tokens or all tokens of current session.
     *
     * @param SignoutInput $input message
     * @param array $context request parameters
     *
     * @return SignoutOutput output message
     */
    public function Signout(SignoutInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.cognito.Cognito/Signout", $input, SignoutOutput::class, $context);
    }

    /**
     * Create user account.
     *
     * @param CreateUserInput $input message
     * @param array $context request parameters
     *
     * @return CreateUserOutput output message
     */
    public function CreateUser(CreateUserInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.cognito.Cognito/CreateUser", $input, CreateUserOutput::class, $context);
    }

    /**
     * Verify user email, takes email verification token and if it's correct - changes email status to CONFIRMED.
     *
     * @param VerifyEmailInput $input message
     * @param array $context request parameters
     *
     * @return VerifyEmailOutput output message
     */
    public function VerifyEmail(VerifyEmailInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.cognito.Cognito/VerifyEmail", $input, VerifyEmailOutput::class, $context);
    }

    /**
     * Update user email, changes user's current email and starts email verification process.
     *
     * @param UpdateEmailInput $input message
     * @param array $context request parameters
     *
     * @return UpdateEmailOutput output message
     */
    public function UpdateEmail(UpdateEmailInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.cognito.Cognito/UpdateEmail", $input, UpdateEmailOutput::class, $context);
    }

    /**
     * Start access recovery procedure, this method will send recovery token to the user's email.
     * This method will return OK even if email does not exist.
     *
     * @param StartRecoveryInput $input message
     * @param array $context request parameters
     *
     * @return StartRecoveryOutput output message
     */
    public function StartRecovery(StartRecoveryInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.cognito.Cognito/StartRecovery", $input, StartRecoveryOutput::class, $context);
    }

    /**
     * Finish recovery procedure by setting new password, this method requires token sent by email using `StartRecovery`
     * method
     *
     * @param CompleteRecoverInput $input message
     * @param array $context request parameters
     *
     * @return CompleteRecoverOutput output message
     */
    public function CompleteRecovery(CompleteRecoverInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.cognito.Cognito/CompleteRecovery", $input, CompleteRecoverOutput::class, $context);
    }

    /**
     * Introspect user, returns user profile for authenticated user.
     *
     * @param IntrospectUserInput $input message
     * @param array $context request parameters
     *
     * @return IntrospectUserOutput output message
     */
    public function IntrospectUser(IntrospectUserInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.cognito.Cognito/IntrospectUser", $input, IntrospectUserOutput::class, $context);
    }

    /**
     * Describe user by ID.
     *
     * @param DescribeUserInput $input message
     * @param array $context request parameters
     *
     * @return DescribeUserOutput output message
     */
    public function DescribeUser(DescribeUserInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.cognito.Cognito/DescribeUser", $input, DescribeUserOutput::class, $context);
    }

    /**
     * List users.
     *
     * @param ListUsersInput $input message
     * @param array $context request parameters
     *
     * @return ListUsersOutput output message
     */
    public function ListUsers(ListUsersInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.cognito.Cognito/ListUsers", $input, ListUsersOutput::class, $context);
    }

    /**
     * Describe user's quota.
     *
     * @param IntrospectQuotaInput $input message
     * @param array $context request parameters
     *
     * @return IntrospectQuotaOutput output message
     */
    public function IntrospectQuota(IntrospectQuotaInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.cognito.Cognito/IntrospectQuota", $input, IntrospectQuotaOutput::class, $context);
    }

    /**
     * List own roles.
     *
     * @param IntrospectRolesInput $input message
     * @param array $context request parameters
     *
     * @return IntrospectRolesOutput output message
     */
    public function IntrospectRoles(IntrospectRolesInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.cognito.Cognito/IntrospectRoles", $input, IntrospectRolesOutput::class, $context);
    }

    /**
     * List roles assigned to a user.
     *
     * @param ListRolesInput $input message
     * @param array $context request parameters
     *
     * @return ListRolesOutput output message
     */
    public function ListRoles(ListRolesInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.cognito.Cognito/ListRoles", $input, ListRolesOutput::class, $context);
    }

    /**
     * Update user's roles.
     *
     * @param UpdateRolesInput $input message
     * @param array $context request parameters
     *
     * @return UpdateRolesOutput output message
     */
    public function UpdateRoles(UpdateRolesInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.cognito.Cognito/UpdateRoles", $input, UpdateRolesOutput::class, $context);
    }

    /**
     * Lists entitlements granted to authenticated user.
     *
     * @param ListEntitlementsInput $input message
     * @param array $context request parameters
     *
     * @return ListEntitlementsOutput output message
     */
    public function ListEntitlements(ListEntitlementsInput $input, array $context = [])
    {
        return call_user_func($this->invoker, "eolymp.cognito.Cognito/ListEntitlements", $input, ListEntitlementsOutput::class, $context);
    }

}
