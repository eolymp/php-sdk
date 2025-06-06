<?php
# Generated by the protocol buffer compiler. DO NOT EDIT!
# See https://github.com/eolymp/contracts/tree/main/cmd/protoc-gen-php-esdk for more details.

namespace Eolymp\Ranker;

class ScoreboardServiceClient {

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
     * Create a scoreboard
     *
     * @param CreateScoreboardInput $input message
     * @param array $context request parameters
     *
     * @return CreateScoreboardOutput output message
     */
    public function CreateScoreboard(CreateScoreboardInput $input, array $context = [])
    {
        $path = "/scoreboards";

        $context['name'] = "eolymp.ranker.ScoreboardService/CreateScoreboard";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, CreateScoreboardOutput::class, $context);
    }

    /**
     * Update existing scoreboard in a contest
     *
     * @param UpdateScoreboardInput $input message
     * @param array $context request parameters
     *
     * @return UpdateScoreboardOutput output message
     */
    public function UpdateScoreboard(UpdateScoreboardInput $input, array $context = [])
    {
        $path = "/scoreboards/".rawurlencode($input->getScoreboardId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setScoreboardId("");

        $context['name'] = "eolymp.ranker.ScoreboardService/UpdateScoreboard";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateScoreboardOutput::class, $context);
    }

    /**
     * Rebuild scoreboard: recalculate score for all participants
     *
     * @param RebuildScoreboardInput $input message
     * @param array $context request parameters
     *
     * @return RebuildScoreboardOutput output message
     */
    public function RebuildScoreboard(RebuildScoreboardInput $input, array $context = [])
    {
        $path = "/scoreboards/".rawurlencode($input->getScoreboardId())."/rebuild";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setScoreboardId("");

        $context['name'] = "eolymp.ranker.ScoreboardService/RebuildScoreboard";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, RebuildScoreboardOutput::class, $context);
    }

    /**
     * Delete scoreboard
     *
     * @param DeleteScoreboardInput $input message
     * @param array $context request parameters
     *
     * @return DeleteScoreboardOutput output message
     */
    public function DeleteScoreboard(DeleteScoreboardInput $input, array $context = [])
    {
        $path = "/scoreboards/".rawurlencode($input->getScoreboardId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setScoreboardId("");

        $context['name'] = "eolymp.ranker.ScoreboardService/DeleteScoreboard";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteScoreboardOutput::class, $context);
    }

    /**
     * Describe scoreboard
     *
     * @param DescribeScoreboardInput $input message
     * @param array $context request parameters
     *
     * @return DescribeScoreboardOutput output message
     */
    public function DescribeScoreboard(DescribeScoreboardInput $input, array $context = [])
    {
        $path = "/scoreboards/".rawurlencode($input->getScoreboardId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setScoreboardId("");

        $context['name'] = "eolymp.ranker.ScoreboardService/DescribeScoreboard";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeScoreboardOutput::class, $context);
    }

    /**
     * Describe scoreboard
     *
     * @param LookupScoreboardInput $input message
     * @param array $context request parameters
     *
     * @return LookupScoreboardOutput output message
     */
    public function LookupScoreboard(LookupScoreboardInput $input, array $context = [])
    {
        $path = "/scoreboards:lookup";

        $context['name'] = "eolymp.ranker.ScoreboardService/LookupScoreboard";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, LookupScoreboardOutput::class, $context);
    }

    /**
     * List scoreboards of a contest
     *
     * @param ListScoreboardsInput $input message
     * @param array $context request parameters
     *
     * @return ListScoreboardsOutput output message
     */
    public function ListScoreboards(ListScoreboardsInput $input, array $context = [])
    {
        $path = "/scoreboards";

        $context['name'] = "eolymp.ranker.ScoreboardService/ListScoreboards";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListScoreboardsOutput::class, $context);
    }

    /**
     * List scoreboards of a contest
     *
     * @param DescribeScoreboardRowInput $input message
     * @param array $context request parameters
     *
     * @return DescribeScoreboardRowOutput output message
     */
    public function DescribeScoreboardRow(DescribeScoreboardRowInput $input, array $context = [])
    {
        $path = "/scoreboards/".rawurlencode($input->getScoreboardId())."/rows/".rawurlencode($input->getMemberId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setScoreboardId("");
        $input->setMemberId("");

        $context['name'] = "eolymp.ranker.ScoreboardService/DescribeScoreboardRow";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeScoreboardRowOutput::class, $context);
    }

    /**
     * List scoreboards of a contest
     *
     * @param ListScoreboardRowsInput $input message
     * @param array $context request parameters
     *
     * @return ListScoreboardRowsOutput output message
     */
    public function ListScoreboardRows(ListScoreboardRowsInput $input, array $context = [])
    {
        $path = "/scoreboards/".rawurlencode($input->getScoreboardId())."/rows";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setScoreboardId("");

        $context['name'] = "eolymp.ranker.ScoreboardService/ListScoreboardRows";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListScoreboardRowsOutput::class, $context);
    }

    /**
     * @param AddScoreboardColumnInput $input message
     * @param array $context request parameters
     *
     * @return AddScoreboardColumnOutput output message
     */
    public function AddScoreboardColumn(AddScoreboardColumnInput $input, array $context = [])
    {
        $path = "/scoreboards/".rawurlencode($input->getScoreboardId())."/columns";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setScoreboardId("");

        $context['name'] = "eolymp.ranker.ScoreboardService/AddScoreboardColumn";
        $context['path'] = $path;

        return call_user_func($this->invoker, "POST", $this->url.$path, $input, AddScoreboardColumnOutput::class, $context);
    }

    /**
     * @param UpdateScoreboardColumnInput $input message
     * @param array $context request parameters
     *
     * @return UpdateScoreboardColumnOutput output message
     */
    public function UpdateScoreboardColumn(UpdateScoreboardColumnInput $input, array $context = [])
    {
        $path = "/scoreboards/".rawurlencode($input->getScoreboardId())."/columns/".rawurlencode($input->getColumnId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setScoreboardId("");
        $input->setColumnId("");

        $context['name'] = "eolymp.ranker.ScoreboardService/UpdateScoreboardColumn";
        $context['path'] = $path;

        return call_user_func($this->invoker, "PUT", $this->url.$path, $input, UpdateScoreboardColumnOutput::class, $context);
    }

    /**
     * @param DeleteScoreboardColumnInput $input message
     * @param array $context request parameters
     *
     * @return DeleteScoreboardColumnOutput output message
     */
    public function DeleteScoreboardColumn(DeleteScoreboardColumnInput $input, array $context = [])
    {
        $path = "/scoreboards/".rawurlencode($input->getScoreboardId())."/columns/".rawurlencode($input->getColumnId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setScoreboardId("");
        $input->setColumnId("");

        $context['name'] = "eolymp.ranker.ScoreboardService/DeleteScoreboardColumn";
        $context['path'] = $path;

        return call_user_func($this->invoker, "DELETE", $this->url.$path, $input, DeleteScoreboardColumnOutput::class, $context);
    }

    /**
     * @param DescribeScoreboardColumnInput $input message
     * @param array $context request parameters
     *
     * @return DescribeScoreboardColumnOutput output message
     */
    public function DescribeScoreboardColumn(DescribeScoreboardColumnInput $input, array $context = [])
    {
        $path = "/scoreboards/".rawurlencode($input->getScoreboardId())."/columns/".rawurlencode($input->getColumnId());

        // Cleanup URL parameters to avoid any ambiguity
        $input->setScoreboardId("");
        $input->setColumnId("");

        $context['name'] = "eolymp.ranker.ScoreboardService/DescribeScoreboardColumn";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, DescribeScoreboardColumnOutput::class, $context);
    }

    /**
     * List scoreboards of a contest
     *
     * @param ListScoreboardColumnsInput $input message
     * @param array $context request parameters
     *
     * @return ListScoreboardColumnsOutput output message
     */
    public function ListScoreboardColumns(ListScoreboardColumnsInput $input, array $context = [])
    {
        $path = "/scoreboards/".rawurlencode($input->getScoreboardId())."/columns";

        // Cleanup URL parameters to avoid any ambiguity
        $input->setScoreboardId("");

        $context['name'] = "eolymp.ranker.ScoreboardService/ListScoreboardColumns";
        $context['path'] = $path;

        return call_user_func($this->invoker, "GET", $this->url.$path, $input, ListScoreboardColumnsOutput::class, $context);
    }

}
