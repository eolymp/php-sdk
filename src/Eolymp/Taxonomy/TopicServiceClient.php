<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Taxonomy;

    /**
     * Topic service allows to manage taxonomy topics.
     */
class TopicServiceClient {

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
     * @param CreateTopicInput $input message
     * @param array $context request parameters
     *
     * @return CreateTopicOutput output message
     */
    public function CreateTopic(CreateTopicInput $input, array $context = [])
    {
        $path = "/topics";

        $context['name'] = "eolymp.taxonomy.TopicService/CreateTopic";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateTopicOutput::class, $context);
    }

    /**
     * @param DeleteTopicInput $input message
     * @param array $context request parameters
     *
     * @return DeleteTopicOutput output message
     */
    public function DeleteTopic(DeleteTopicInput $input, array $context = [])
    {
        $path = "/topics/".rawurlencode($input->getTopicId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTopicId("");

        $context['name'] = "eolymp.taxonomy.TopicService/DeleteTopic";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteTopicOutput::class, $context);
    }

    /**
     * @param UpdateTopicInput $input message
     * @param array $context request parameters
     *
     * @return UpdateTopicOutput output message
     */
    public function UpdateTopic(UpdateTopicInput $input, array $context = [])
    {
        $path = "/topics/".rawurlencode($input->getTopicId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTopicId("");

        $context['name'] = "eolymp.taxonomy.TopicService/UpdateTopic";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateTopicOutput::class, $context);
    }

    /**
     * @param DescribeTopicInput $input message
     * @param array $context request parameters
     *
     * @return DescribeTopicOutput output message
     */
    public function DescribeTopic(DescribeTopicInput $input, array $context = [])
    {
        $path = "/topics/".rawurlencode($input->getTopicId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTopicId("");

        $context['name'] = "eolymp.taxonomy.TopicService/DescribeTopic";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeTopicOutput::class, $context);
    }

    /**
     * @param ListTopicsInput $input message
     * @param array $context request parameters
     *
     * @return ListTopicsOutput output message
     */
    public function ListTopics(ListTopicsInput $input, array $context = [])
    {
        $path = "/topics";

        $context['name'] = "eolymp.taxonomy.TopicService/ListTopics";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListTopicsOutput::class, $context);
    }

    /**
     * @param TranslateTopicInput $input message
     * @param array $context request parameters
     *
     * @return TranslateTopicOutput output message
     */
    public function TranslateTopic(TranslateTopicInput $input, array $context = [])
    {
        $path = "/topics/".rawurlencode($input->getTopicId())."/translations/".rawurlencode($input->getLocale());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTopicId("");
        $input->setLocale("");

        $context['name'] = "eolymp.taxonomy.TopicService/TranslateTopic";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, TranslateTopicOutput::class, $context);
    }

    /**
     * @param DeleteTranslationInput $input message
     * @param array $context request parameters
     *
     * @return DeleteTranslationOutput output message
     */
    public function DeleteTranslation(DeleteTranslationInput $input, array $context = [])
    {
        $path = "/topics/".rawurlencode($input->getTopicId())."/translations/".rawurlencode($input->getLocale());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTopicId("");
        $input->setLocale("");

        $context['name'] = "eolymp.taxonomy.TopicService/DeleteTranslation";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteTranslationOutput::class, $context);
    }

    /**
     * @param ListTranslationsInput $input message
     * @param array $context request parameters
     *
     * @return ListTranslationsOutput output message
     */
    public function ListTranslations(ListTranslationsInput $input, array $context = [])
    {
        $path = "/topics/".rawurlencode($input->getTopicId())."/translations";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setTopicId("");

        $context['name'] = "eolymp.taxonomy.TopicService/ListTranslations";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, ListTranslationsOutput::class, $context);
    }

}
