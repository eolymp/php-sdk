<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Cognito;

class CognitoClient {

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
     * Create API key.
     *
     * @param CreateAccessKeyInput $input message
     * @param array $context request parameters
     *
     * @return CreateAccessKeyOutput output message
     */
    public function CreateAccessKey(CreateAccessKeyInput $input, array $context = [])
    {
        $path = "/access-keys";

        $context['name'] = "eolymp.cognito.Cognito/CreateAccessKey";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateAccessKeyOutput::class, $context);
    }

    /**
     * Delete API key.
     *
     * @param DeleteAccessKeyInput $input message
     * @param array $context request parameters
     *
     * @return DeleteAccessKeyOutput output message
     */
    public function DeleteAccessKey(DeleteAccessKeyInput $input, array $context = [])
    {
        $path = "/access-keys/".rawurlencode($input->getKeyId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setKeyId("");

        $context['name'] = "eolymp.cognito.Cognito/DeleteAccessKey";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteAccessKeyOutput::class, $context);
    }

    /**
     * @param ListAccessKeysInput $input message
     * @param array $context request parameters
     *
     * @return ListAccessKeysOutput output message
     */
    public function ListAccessKeys(ListAccessKeysInput $input, array $context = [])
    {
        $path = "/access-keys";

        $context['name'] = "eolymp.cognito.Cognito/ListAccessKeys";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListAccessKeysOutput::class, $context);
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
        $path = "/users";

        $context['name'] = "eolymp.cognito.Cognito/CreateUser";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateUserOutput::class, $context);
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
        $path = "/users/".rawurlencode($input->getUserId())."/verify";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setUserId("");

        $context['name'] = "eolymp.cognito.Cognito/VerifyEmail";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, VerifyEmailOutput::class, $context);
    }

    /**
     * @param ResendEmailVerificationInput $input message
     * @param array $context request parameters
     *
     * @return ResendEmailVerificationOutput output message
     */
    public function ResendEmailVerification(ResendEmailVerificationInput $input, array $context = [])
    {
        $path = "/self/email/resend-verification";

        $context['name'] = "eolymp.cognito.Cognito/ResendEmailVerification";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, ResendEmailVerificationOutput::class, $context);
    }

    /**
     * Update user email, changes user's current email and starts email verification process.
     * DEPRECATED: use UpdateProfile instead
     *
     * @param UpdateEmailInput $input message
     * @param array $context request parameters
     *
     * @return UpdateEmailOutput output message
     */
    public function UpdateEmail(UpdateEmailInput $input, array $context = [])
    {
        $path = "/self/email";

        $context['name'] = "eolymp.cognito.Cognito/UpdateEmail";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, UpdateEmailOutput::class, $context);
    }

    /**
     * @param UpdateProfileInput $input message
     * @param array $context request parameters
     *
     * @return UpdateProfileOutput output message
     */
    public function UpdateProfile(UpdateProfileInput $input, array $context = [])
    {
        $path = "/self";

        $context['name'] = "eolymp.cognito.Cognito/UpdateProfile";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, UpdateProfileOutput::class, $context);
    }

    /**
     * @param UpdatePictureInput $input message
     * @param array $context request parameters
     *
     * @return UpdatePictureOutput output message
     */
    public function UpdatePicture(UpdatePictureInput $input, array $context = [])
    {
        $path = "/self/picture";

        $context['name'] = "eolymp.cognito.Cognito/UpdatePicture";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, UpdatePictureOutput::class, $context);
    }

    /**
     * @param UpdatePasswordInput $input message
     * @param array $context request parameters
     *
     * @return UpdatePasswordOutput output message
     */
    public function UpdatePassword(UpdatePasswordInput $input, array $context = [])
    {
        $path = "/self/password";

        $context['name'] = "eolymp.cognito.Cognito/UpdatePassword";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, UpdatePasswordOutput::class, $context);
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
        $path = "/self";

        $context['name'] = "eolymp.cognito.Cognito/IntrospectUser";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, IntrospectUserOutput::class, $context);
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
        $path = "/users/".rawurlencode($input->getUserId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setUserId("");

        $context['name'] = "eolymp.cognito.Cognito/DescribeUser";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeUserOutput::class, $context);
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
        $path = "/users";

        $context['name'] = "eolymp.cognito.Cognito/ListUsers";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListUsersOutput::class, $context);
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
        $path = "/self/quota";

        $context['name'] = "eolymp.cognito.Cognito/IntrospectQuota";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, IntrospectQuotaOutput::class, $context);
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
        $path = "/self/recovery";

        $context['name'] = "eolymp.cognito.Cognito/StartRecovery";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, StartRecoveryOutput::class, $context);
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
        $path = "/users/".rawurlencode($input->getUserId())."/recover";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setUserId("");

        $context['name'] = "eolymp.cognito.Cognito/CompleteRecovery";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CompleteRecoverOutput::class, $context);
    }

    /**
     * @param SelfDestructInput $input message
     * @param array $context request parameters
     *
     * @return SelfDestructOutput output message
     */
    public function SelfDestruct(SelfDestructInput $input, array $context = [])
    {
        $path = "/self";

        $context['name'] = "eolymp.cognito.Cognito/SelfDestruct";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, SelfDestructOutput::class, $context);
    }

}
