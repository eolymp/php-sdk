<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/submission.proto

namespace Eolymp\Judge\Submission;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.Submission.Run</code>
 */
class Run extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * wall time (real-world time) usage
     *
     * Generated from protobuf field <code>uint32 wall_time_usage = 2;</code>
     */
    protected $wall_time_usage = 0;
    /**
     * cpu time (time cpu was active)
     *
     * Generated from protobuf field <code>uint32 cpu_time_usage = 3;</code>
     */
    protected $cpu_time_usage = 0;
    /**
     * Generated from protobuf field <code>uint64 memory_usage = 4;</code>
     */
    protected $memory_usage = 0;
    /**
     * URL for program's full output
     *
     * Generated from protobuf field <code>string output_url = 5;</code>
     */
    protected $output_url = '';
    /**
     * URL for program's output to stderr
     *
     * Generated from protobuf field <code>string stderr_url = 6;</code>
     */
    protected $stderr_url = '';
    /**
     * Generated from protobuf field <code>uint32 index = 10;</code>
     */
    protected $index = 0;
    /**
     * Generated from protobuf field <code>string test_id = 11;</code>
     */
    protected $test_id = '';
    /**
     * Generated from protobuf field <code>float cost = 12;</code>
     */
    protected $cost = 0.0;
    /**
     * Generated from protobuf field <code>float score = 13;</code>
     */
    protected $score = 0.0;
    /**
     * Generated from protobuf field <code>.eolymp.judge.Submission.Run.Status status = 20;</code>
     */
    protected $status = 0;
    /**
     * overall verdict based on verdicts in groups/runs
     *
     * Generated from protobuf field <code>.eolymp.atlas.Submission.Verdict verdict = 21;</code>
     */
    protected $verdict = 0;
    /**
     * Generated from protobuf field <code>.eolymp.judge.Submission.CheckerExecutionData checker_execution_data = 30;</code>
     */
    protected $checker_execution_data = null;
    /**
     * Generated from protobuf field <code>.eolymp.judge.Submission.InteractorExecutionData interactor_execution_data = 40;</code>
     */
    protected $interactor_execution_data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type int $wall_time_usage
     *           wall time (real-world time) usage
     *     @type int $cpu_time_usage
     *           cpu time (time cpu was active)
     *     @type int|string $memory_usage
     *     @type string $output_url
     *           URL for program's full output
     *     @type string $stderr_url
     *           URL for program's output to stderr
     *     @type int $index
     *     @type string $test_id
     *     @type float $cost
     *     @type float $score
     *     @type int $status
     *     @type int $verdict
     *           overall verdict based on verdicts in groups/runs
     *     @type \Eolymp\Judge\Submission\CheckerExecutionData $checker_execution_data
     *     @type \Eolymp\Judge\Submission\InteractorExecutionData $interactor_execution_data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Submission::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * wall time (real-world time) usage
     *
     * Generated from protobuf field <code>uint32 wall_time_usage = 2;</code>
     * @return int
     */
    public function getWallTimeUsage()
    {
        return $this->wall_time_usage;
    }

    /**
     * wall time (real-world time) usage
     *
     * Generated from protobuf field <code>uint32 wall_time_usage = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setWallTimeUsage($var)
    {
        GPBUtil::checkUint32($var);
        $this->wall_time_usage = $var;

        return $this;
    }

    /**
     * cpu time (time cpu was active)
     *
     * Generated from protobuf field <code>uint32 cpu_time_usage = 3;</code>
     * @return int
     */
    public function getCpuTimeUsage()
    {
        return $this->cpu_time_usage;
    }

    /**
     * cpu time (time cpu was active)
     *
     * Generated from protobuf field <code>uint32 cpu_time_usage = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCpuTimeUsage($var)
    {
        GPBUtil::checkUint32($var);
        $this->cpu_time_usage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 memory_usage = 4;</code>
     * @return int|string
     */
    public function getMemoryUsage()
    {
        return $this->memory_usage;
    }

    /**
     * Generated from protobuf field <code>uint64 memory_usage = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMemoryUsage($var)
    {
        GPBUtil::checkUint64($var);
        $this->memory_usage = $var;

        return $this;
    }

    /**
     * URL for program's full output
     *
     * Generated from protobuf field <code>string output_url = 5;</code>
     * @return string
     */
    public function getOutputUrl()
    {
        return $this->output_url;
    }

    /**
     * URL for program's full output
     *
     * Generated from protobuf field <code>string output_url = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setOutputUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_url = $var;

        return $this;
    }

    /**
     * URL for program's output to stderr
     *
     * Generated from protobuf field <code>string stderr_url = 6;</code>
     * @return string
     */
    public function getStderrUrl()
    {
        return $this->stderr_url;
    }

    /**
     * URL for program's output to stderr
     *
     * Generated from protobuf field <code>string stderr_url = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setStderrUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->stderr_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 10;</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string test_id = 11;</code>
     * @return string
     */
    public function getTestId()
    {
        return $this->test_id;
    }

    /**
     * Generated from protobuf field <code>string test_id = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setTestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->test_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float cost = 12;</code>
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Generated from protobuf field <code>float cost = 12;</code>
     * @param float $var
     * @return $this
     */
    public function setCost($var)
    {
        GPBUtil::checkFloat($var);
        $this->cost = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float score = 13;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Generated from protobuf field <code>float score = 13;</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Submission.Run.Status status = 20;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Submission.Run.Status status = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Judge\Submission\Run\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * overall verdict based on verdicts in groups/runs
     *
     * Generated from protobuf field <code>.eolymp.atlas.Submission.Verdict verdict = 21;</code>
     * @return int
     */
    public function getVerdict()
    {
        return $this->verdict;
    }

    /**
     * overall verdict based on verdicts in groups/runs
     *
     * Generated from protobuf field <code>.eolymp.atlas.Submission.Verdict verdict = 21;</code>
     * @param int $var
     * @return $this
     */
    public function setVerdict($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Atlas\Submission\Verdict::class);
        $this->verdict = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Submission.CheckerExecutionData checker_execution_data = 30;</code>
     * @return \Eolymp\Judge\Submission\CheckerExecutionData|null
     */
    public function getCheckerExecutionData()
    {
        return $this->checker_execution_data;
    }

    public function hasCheckerExecutionData()
    {
        return isset($this->checker_execution_data);
    }

    public function clearCheckerExecutionData()
    {
        unset($this->checker_execution_data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Submission.CheckerExecutionData checker_execution_data = 30;</code>
     * @param \Eolymp\Judge\Submission\CheckerExecutionData $var
     * @return $this
     */
    public function setCheckerExecutionData($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Submission\CheckerExecutionData::class);
        $this->checker_execution_data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Submission.InteractorExecutionData interactor_execution_data = 40;</code>
     * @return \Eolymp\Judge\Submission\InteractorExecutionData|null
     */
    public function getInteractorExecutionData()
    {
        return $this->interactor_execution_data;
    }

    public function hasInteractorExecutionData()
    {
        return isset($this->interactor_execution_data);
    }

    public function clearInteractorExecutionData()
    {
        unset($this->interactor_execution_data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Submission.InteractorExecutionData interactor_execution_data = 40;</code>
     * @param \Eolymp\Judge\Submission\InteractorExecutionData $var
     * @return $this
     */
    public function setInteractorExecutionData($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Submission\InteractorExecutionData::class);
        $this->interactor_execution_data = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Run::class, \Eolymp\Judge\Submission_Run::class);

