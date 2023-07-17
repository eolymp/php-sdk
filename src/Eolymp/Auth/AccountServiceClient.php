<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Auth;

class AccountServiceClient {

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
     * @param CreateAccountInput $input message
     * @param array $context request parameters
     *
     * @return CreateAccountOutput output message
     */
    public function CreateAccount(CreateAccountInput $input, array $context = [])
    {
        $path = "/account";

        $context['name'] = "eolymp.auth.AccountService/CreateAccount";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateAccountOutput::class, $context);
    }

    /**
     * @param DescribeAccountInput $input message
     * @param array $context request parameters
     *
     * @return DescribeAccountOutput output message
     */
    public function DescribeAccount(DescribeAccountInput $input, array $context = [])
    {
        $path = "/account";

        $context['name'] = "eolymp.auth.AccountService/DescribeAccount";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeAccountOutput::class, $context);
    }

    /**
     * @param UpdateAccountInput $input message
     * @param array $context request parameters
     *
     * @return UpdateAccountOutput output message
     */
    public function UpdateAccount(UpdateAccountInput $input, array $context = [])
    {
        $path = "/account";

        $context['name'] = "eolymp.auth.AccountService/UpdateAccount";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateAccountOutput::class, $context);
    }

    /**
     * @param UploadPictureInput $input message
     * @param array $context request parameters
     *
     * @return UploadPictureOutput output message
     */
    public function UploadPicture(UploadPictureInput $input, array $context = [])
    {
        $path = "/account/picture";

        $context['name'] = "eolymp.auth.AccountService/UploadPicture";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, UploadPictureOutput::class, $context);
    }

    /**
     * @param DeleteAccountInput $input message
     * @param array $context request parameters
     *
     * @return DeleteAccountOutput output message
     */
    public function DeleteAccount(DeleteAccountInput $input, array $context = [])
    {
        $path = "/account";

        $context['name'] = "eolymp.auth.AccountService/DeleteAccount";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteAccountOutput::class, $context);
    }

    /**
     * @param ResendVerificationInput $input message
     * @param array $context request parameters
     *
     * @return ResendVerificationOutput output message
     */
    public function ResendVerification(ResendVerificationInput $input, array $context = [])
    {
        $path = "/account/verification/resend";

        $context['name'] = "eolymp.auth.AccountService/ResendVerification";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, ResendVerificationOutput::class, $context);
    }

    /**
     * @param CompleteVerificationInput $input message
     * @param array $context request parameters
     *
     * @return CompleteVerificationOutput output message
     */
    public function CompleteVerification(CompleteVerificationInput $input, array $context = [])
    {
        $path = "/account/verification/complete";

        $context['name'] = "eolymp.auth.AccountService/CompleteVerification";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CompleteVerificationOutput::class, $context);
    }

    /**
     * @param StartRecoveryInput $input message
     * @param array $context request parameters
     *
     * @return StartRecoveryOutput output message
     */
    public function StartRecovery(StartRecoveryInput $input, array $context = [])
    {
        $path = "/account/recover";

        $context['name'] = "eolymp.auth.AccountService/StartRecovery";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, StartRecoveryOutput::class, $context);
    }

    /**
     * @param CompleteRecoverInput $input message
     * @param array $context request parameters
     *
     * @return CompleteRecoverOutput output message
     */
    public function CompleteRecovery(CompleteRecoverInput $input, array $context = [])
    {
        $path = "/account/recover/complete";

        $context['name'] = "eolymp.auth.AccountService/CompleteRecovery";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CompleteRecoverOutput::class, $context);
    }

}
