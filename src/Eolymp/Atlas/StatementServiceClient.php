<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Atlas;

class StatementServiceClient {

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
     * @param CreateStatementInput $input message
     * @param array $context request parameters
     *
     * @return CreateStatementOutput output message
     */
    public function CreateStatement(CreateStatementInput $input, array $context = [])
    {
        $path = "/statements";

        $context['name'] = "eolymp.atlas.StatementService/CreateStatement";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, CreateStatementOutput::class, $context);
    }

    /**
     * @param UpdateStatementInput $input message
     * @param array $context request parameters
     *
     * @return UpdateStatementOutput output message
     */
    public function UpdateStatement(UpdateStatementInput $input, array $context = [])
    {
        $path = "/statements/".rawurlencode($input->getStatementId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setStatementId("");

        $context['name'] = "eolymp.atlas.StatementService/UpdateStatement";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateStatementOutput::class, $context);
    }

    /**
     * @param DeleteStatementInput $input message
     * @param array $context request parameters
     *
     * @return DeleteStatementOutput output message
     */
    public function DeleteStatement(DeleteStatementInput $input, array $context = [])
    {
        $path = "/statements/".rawurlencode($input->getStatementId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setStatementId("");

        $context['name'] = "eolymp.atlas.StatementService/DeleteStatement";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteStatementOutput::class, $context);
    }

    /**
     * DescribeStatement returns statement.
     *
     * @param DescribeStatementInput $input message
     * @param array $context request parameters
     *
     * @return DescribeStatementOutput output message
     */
    public function DescribeStatement(DescribeStatementInput $input, array $context = [])
    {
        $path = "/statements/".rawurlencode($input->getStatementId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setStatementId("");

        $context['name'] = "eolymp.atlas.StatementService/DescribeStatement";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeStatementOutput::class, $context);
    }

    /**
     * LookupStatement finds a statement in one of the requested languages.
     *
     * @param LookupStatementInput $input message
     * @param array $context request parameters
     *
     * @return LookupStatementOutput output message
     */
    public function LookupStatement(LookupStatementInput $input, array $context = [])
    {
        $path = "/translate";

        $context['name'] = "eolymp.atlas.StatementService/LookupStatement";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, LookupStatementOutput::class, $context);
    }

    /**
     * PreviewStatement renders unsaved statement.
     *
     * This method can be used to render statement before it has been saved.
     *
     * @param PreviewStatementInput $input message
     * @param array $context request parameters
     *
     * @return PreviewStatementOutput output message
     */
    public function PreviewStatement(PreviewStatementInput $input, array $context = [])
    {
        $path = "/renders";

        $context['name'] = "eolymp.atlas.StatementService/PreviewStatement";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, PreviewStatementOutput::class, $context);
    }

    /**
     * @param ListStatementsInput $input message
     * @param array $context request parameters
     *
     * @return ListStatementsOutput output message
     */
    public function ListStatements(ListStatementsInput $input, array $context = [])
    {
        $path = "/statements";

        $context['name'] = "eolymp.atlas.StatementService/ListStatements";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListStatementsOutput::class, $context);
    }

}
