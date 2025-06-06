<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Newsletter;

class CampaignServiceClient {

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
     * @param CreateCampaignInput $input message
     * @param array $context request parameters
     *
     * @return CreateCampaignOutput output message
     */
    public function CreateCampaign(CreateCampaignInput $input, array $context = [])
    {
        $path = "/campaigns";

        $context['name'] = "eolymp.newsletter.CampaignService/CreateCampaign";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateCampaignOutput::class, $context);
    }

    /**
     * @param UpdateCampaignInput $input message
     * @param array $context request parameters
     *
     * @return UpdateCampaignOutput output message
     */
    public function UpdateCampaign(UpdateCampaignInput $input, array $context = [])
    {
        $path = "/campaigns/".rawurlencode($input->getCampaignId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setCampaignId("");

        $context['name'] = "eolymp.newsletter.CampaignService/UpdateCampaign";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateCampaignOutput::class, $context);
    }

    /**
     * @param DeleteCampaignInput $input message
     * @param array $context request parameters
     *
     * @return DeleteCampaignOutput output message
     */
    public function DeleteCampaign(DeleteCampaignInput $input, array $context = [])
    {
        $path = "/campaigns/".rawurlencode($input->getCampaignId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setCampaignId("");

        $context['name'] = "eolymp.newsletter.CampaignService/DeleteCampaign";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteCampaignOutput::class, $context);
    }

    /**
     * @param DescribeCampaignInput $input message
     * @param array $context request parameters
     *
     * @return DescribeCampaignOutput output message
     */
    public function DescribeCampaign(DescribeCampaignInput $input, array $context = [])
    {
        $path = "/campaigns/".rawurlencode($input->getCampaignId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setCampaignId("");

        $context['name'] = "eolymp.newsletter.CampaignService/DescribeCampaign";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeCampaignOutput::class, $context);
    }

    /**
     * @param ListCampaignsInput $input message
     * @param array $context request parameters
     *
     * @return ListCampaignsOutput output message
     */
    public function ListCampaigns(ListCampaignsInput $input, array $context = [])
    {
        $path = "/campaigns";

        $context['name'] = "eolymp.newsletter.CampaignService/ListCampaigns";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListCampaignsOutput::class, $context);
    }

    /**
     * @param TestCampaignInput $input message
     * @param array $context request parameters
     *
     * @return TestCampaignOutput output message
     */
    public function TestCampaign(TestCampaignInput $input, array $context = [])
    {
        $path = "/campaigns/".rawurlencode($input->getCampaignId())."/test";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setCampaignId("");

        $context['name'] = "eolymp.newsletter.CampaignService/TestCampaign";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, TestCampaignOutput::class, $context);
    }

    /**
     * @param SendCampaignInput $input message
     * @param array $context request parameters
     *
     * @return SendCampaignOutput output message
     */
    public function SendCampaign(SendCampaignInput $input, array $context = [])
    {
        $path = "/campaigns/".rawurlencode($input->getCampaignId())."/send";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setCampaignId("");

        $context['name'] = "eolymp.newsletter.CampaignService/SendCampaign";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, SendCampaignOutput::class, $context);
    }

    /**
     * @param TranslateCampaignInput $input message
     * @param array $context request parameters
     *
     * @return TranslateCampaignOutput output message
     */
    public function TranslateCampaign(TranslateCampaignInput $input, array $context = [])
    {
        $path = "/campaigns/".rawurlencode($input->getCampaignId())."/translate";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setCampaignId("");

        $context['name'] = "eolymp.newsletter.CampaignService/TranslateCampaign";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, TranslateCampaignOutput::class, $context);
    }

    /**
     * @param CreateTranslationInput $input message
     * @param array $context request parameters
     *
     * @return CreateTranslationOutput output message
     */
    public function CreateTranslation(CreateTranslationInput $input, array $context = [])
    {
        $path = "/campaigns/".rawurlencode($input->getCampaignId())."/translations";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setCampaignId("");

        $context['name'] = "eolymp.newsletter.CampaignService/CreateTranslation";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateTranslationOutput::class, $context);
    }

    /**
     * @param UpdateTranslationInput $input message
     * @param array $context request parameters
     *
     * @return UpdateTranslationOutput output message
     */
    public function UpdateTranslation(UpdateTranslationInput $input, array $context = [])
    {
        $path = "/campaigns/".rawurlencode($input->getCampaignId())."/translations/".rawurlencode($input->getTranslationId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setCampaignId("");
        $input->setTranslationId("");

        $context['name'] = "eolymp.newsletter.CampaignService/UpdateTranslation";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateTranslationOutput::class, $context);
    }

    /**
     * @param DeleteTranslationInput $input message
     * @param array $context request parameters
     *
     * @return DeleteTranslationOutput output message
     */
    public function DeleteTranslation(DeleteTranslationInput $input, array $context = [])
    {
        $path = "/campaigns/".rawurlencode($input->getCampaignId())."/translations/".rawurlencode($input->getTranslationId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setCampaignId("");
        $input->setTranslationId("");

        $context['name'] = "eolymp.newsletter.CampaignService/DeleteTranslation";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteTranslationOutput::class, $context);
    }

    /**
     * @param DescribeTranslationInput $input message
     * @param array $context request parameters
     *
     * @return DescribeTranslationOutput output message
     */
    public function DescribeTranslation(DescribeTranslationInput $input, array $context = [])
    {
        $path = "/campaigns/".rawurlencode($input->getCampaignId())."/translations/".rawurlencode($input->getTranslationId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setCampaignId("");
        $input->setTranslationId("");

        $context['name'] = "eolymp.newsletter.CampaignService/DescribeTranslation";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeTranslationOutput::class, $context);
    }

    /**
     * @param ListTranslationsInput $input message
     * @param array $context request parameters
     *
     * @return ListTranslationsOutput output message
     */
    public function ListTranslations(ListTranslationsInput $input, array $context = [])
    {
        $path = "/campaigns/".rawurlencode($input->getCampaignId())."/translations";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setCampaignId("");

        $context['name'] = "eolymp.newsletter.CampaignService/ListTranslations";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListTranslationsOutput::class, $context);
    }

    /**
     * @param CreateRecipientInput $input message
     * @param array $context request parameters
     *
     * @return CreateRecipientOutput output message
     */
    public function CreateRecipient(CreateRecipientInput $input, array $context = [])
    {
        $path = "/campaigns/".rawurlencode($input->getCampaignId())."/recipients";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setCampaignId("");

        $context['name'] = "eolymp.newsletter.CampaignService/CreateRecipient";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateRecipientOutput::class, $context);
    }

    /**
     * @param ImportRecipientInput $input message
     * @param array $context request parameters
     *
     * @return ImportRecipientOutput output message
     */
    public function ImportRecipient(ImportRecipientInput $input, array $context = [])
    {
        $path = "/campaigns/".rawurlencode($input->getCampaignId())."/recipients:import";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setCampaignId("");

        $context['name'] = "eolymp.newsletter.CampaignService/ImportRecipient";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, ImportRecipientOutput::class, $context);
    }

    /**
     * @param DeleteRecipientInput $input message
     * @param array $context request parameters
     *
     * @return DeleteRecipientOutput output message
     */
    public function DeleteRecipient(DeleteRecipientInput $input, array $context = [])
    {
        $path = "/campaigns/".rawurlencode($input->getCampaignId())."/recipients/".rawurlencode($input->getRecipientId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setCampaignId("");
        $input->setRecipientId("");

        $context['name'] = "eolymp.newsletter.CampaignService/DeleteRecipient";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteRecipientOutput::class, $context);
    }

    /**
     * @param ListRecipientsInput $input message
     * @param array $context request parameters
     *
     * @return ListRecipientsOutput output message
     */
    public function ListRecipients(ListRecipientsInput $input, array $context = [])
    {
        $path = "/campaigns/".rawurlencode($input->getCampaignId())."/recipients";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setCampaignId("");

        $context['name'] = "eolymp.newsletter.CampaignService/ListRecipients";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListRecipientsOutput::class, $context);
    }

    /**
     * @param DescribeRecipientInput $input message
     * @param array $context request parameters
     *
     * @return DescribeRecipientOutput output message
     */
    public function DescribeRecipient(DescribeRecipientInput $input, array $context = [])
    {
        $path = "/campaigns/".rawurlencode($input->getCampaignId())."/recipients/".rawurlencode($input->getRecipientId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setCampaignId("");
        $input->setRecipientId("");

        $context['name'] = "eolymp.newsletter.CampaignService/DescribeRecipient";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeRecipientOutput::class, $context);
    }

}
