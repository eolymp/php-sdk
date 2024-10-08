<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Judge;

class ScoreServiceClient {

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
     * @param IntrospectScoreInput $input message
     * @param array $context request parameters
     *
     * @return IntrospectScoreOutput output message
     */
    public function IntrospectScore(IntrospectScoreInput $input, array $context = [])
    {
        $path = "/introspect/score";

        $context['name'] = "eolymp.judge.ScoreService/IntrospectScore";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, IntrospectScoreOutput::class, $context);
    }

    /**
     * @param DescribeScoreInput $input message
     * @param array $context request parameters
     *
     * @return DescribeScoreOutput output message
     */
    public function DescribeScore(DescribeScoreInput $input, array $context = [])
    {
        $path = "/participants/".rawurlencode($input->getParticipantId())."/score";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setParticipantId("");

        $context['name'] = "eolymp.judge.ScoreService/DescribeScore";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeScoreOutput::class, $context);
    }

    /**
     * ImportScore for ghost participants
     *
     * @param ImportScoreInput $input message
     * @param array $context request parameters
     *
     * @return ImportScoreOutput output message
     */
    public function ImportScore(ImportScoreInput $input, array $context = [])
    {
        $path = "/participants/".rawurlencode($input->getParticipantId())."/scores";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setParticipantId("");

        $context['name'] = "eolymp.judge.ScoreService/ImportScore";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, ImportScoreOutput::class, $context);
    }

    /**
     * ExportScore for ghost participants
     *
     * @param ExportScoreInput $input message
     * @param array $context request parameters
     *
     * @return ExportScoreOutput output message
     */
    public function ExportScore(ExportScoreInput $input, array $context = [])
    {
        $path = "/participants/".rawurlencode($input->getParticipantId())."/scores";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setParticipantId("");

        $context['name'] = "eolymp.judge.ScoreService/ExportScore";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ExportScoreOutput::class, $context);
    }

    /**
     * ListResult retrieves scoreboard
     *
     * @param ListResultInput $input message
     * @param array $context request parameters
     *
     * @return ListResultOutput output message
     */
    public function ListResult(ListResultInput $input, array $context = [])
    {
        $path = "/results";

        $context['name'] = "eolymp.judge.ScoreService/ListResult";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListResultOutput::class, $context);
    }

    /**
     * @param ExportResultInput $input message
     * @param array $context request parameters
     *
     * @return ExportResultOutput output message
     */
    public function ExportResult(ExportResultInput $input, array $context = [])
    {
        $path = "/results-export";

        $context['name'] = "eolymp.judge.ScoreService/ExportResult";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, ExportResultOutput::class, $context);
    }

    /**
     * Rebuild scoreboard
     *
     * @param RebuildScoreInput $input message
     * @param array $context request parameters
     *
     * @return RebuildScoreOutput output message
     */
    public function RebuildScore(RebuildScoreInput $input, array $context = [])
    {
        $path = "/rebuild";

        $context['name'] = "eolymp.judge.ScoreService/RebuildScore";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, RebuildScoreOutput::class, $context);
    }

}
