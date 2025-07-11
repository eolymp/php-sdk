<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/executor/evaluation_report.proto

namespace Eolymp\Executor\EvaluationReport;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Run represents a single execution
 *
 * Generated from protobuf message <code>eolymp.executor.EvaluationReport.Run</code>
 */
class Run extends \Google\Protobuf\Internal\Message
{
    /**
     * run reference as set by originator
     *
     * Generated from protobuf field <code>string reference = 1;</code>
     */
    protected $reference = '';
    /**
     * run status
     *
     * Generated from protobuf field <code>.eolymp.executor.EvaluationReport.Run.Status status = 2;</code>
     */
    protected $status = 0;
    /**
     * score, number of points awarded by checker
     *
     * Generated from protobuf field <code>float score = 80;</code>
     */
    protected $score = 0.0;
    /**
     * cost, maximum number of points awarded for the test (as defined in the task)
     *
     * Generated from protobuf field <code>float cost = 81;</code>
     */
    protected $cost = 0.0;
    /**
     * Generated from protobuf field <code>uint32 time_usage = 51;</code>
     */
    protected $time_usage = 0;
    /**
     * Generated from protobuf field <code>uint32 time_limit = 61;</code>
     */
    protected $time_limit = 0;
    /**
     * Generated from protobuf field <code>uint32 cpu_usage = 52;</code>
     */
    protected $cpu_usage = 0;
    /**
     * Generated from protobuf field <code>uint32 cpu_limit = 62;</code>
     */
    protected $cpu_limit = 0;
    /**
     * Generated from protobuf field <code>uint64 memory_usage = 53;</code>
     */
    protected $memory_usage = 0;
    /**
     * Generated from protobuf field <code>uint64 memory_limit = 63;</code>
     */
    protected $memory_limit = 0;
    /**
     * time coefficient used to normalize cpu and time usage
     *
     * Generated from protobuf field <code>float time_coefficient = 14;</code>
     */
    protected $time_coefficient = 0.0;
    /**
     * Generated from protobuf field <code>string input_url = 10;</code>
     */
    protected $input_url = '';
    /**
     * Generated from protobuf field <code>string output_url = 11;</code>
     */
    protected $output_url = '';
    /**
     * Generated from protobuf field <code>string answer_url = 12;</code>
     */
    protected $answer_url = '';
    /**
     * execution stats
     *
     * Generated from protobuf field <code>.eolymp.executor.Stats debug_stats = 90;</code>
     */
    protected $debug_stats = null;
    /**
     * checker stats
     *
     * Generated from protobuf field <code>.eolymp.executor.Stats checker_stats = 35;</code>
     */
    protected $checker_stats = null;
    /**
     * interactor stats
     *
     * Generated from protobuf field <code>.eolymp.executor.Stats interactor_stats = 45;</code>
     */
    protected $interactor_stats = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $reference
     *           run reference as set by originator
     *     @type int $status
     *           run status
     *     @type float $score
     *           score, number of points awarded by checker
     *     @type float $cost
     *           cost, maximum number of points awarded for the test (as defined in the task)
     *     @type int $time_usage
     *     @type int $time_limit
     *     @type int $cpu_usage
     *     @type int $cpu_limit
     *     @type int|string $memory_usage
     *     @type int|string $memory_limit
     *     @type float $time_coefficient
     *           time coefficient used to normalize cpu and time usage
     *     @type string $input_url
     *     @type string $output_url
     *     @type string $answer_url
     *     @type \Eolymp\Executor\Stats $debug_stats
     *           execution stats
     *     @type \Eolymp\Executor\Stats $checker_stats
     *           checker stats
     *     @type \Eolymp\Executor\Stats $interactor_stats
     *           interactor stats
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Executor\EvaluationReport::initOnce();
        parent::__construct($data);
    }

    /**
     * run reference as set by originator
     *
     * Generated from protobuf field <code>string reference = 1;</code>
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * run reference as set by originator
     *
     * Generated from protobuf field <code>string reference = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setReference($var)
    {
        GPBUtil::checkString($var, True);
        $this->reference = $var;

        return $this;
    }

    /**
     * run status
     *
     * Generated from protobuf field <code>.eolymp.executor.EvaluationReport.Run.Status status = 2;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * run status
     *
     * Generated from protobuf field <code>.eolymp.executor.EvaluationReport.Run.Status status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Executor\EvaluationReport\Run\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * score, number of points awarded by checker
     *
     * Generated from protobuf field <code>float score = 80;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * score, number of points awarded by checker
     *
     * Generated from protobuf field <code>float score = 80;</code>
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
     * cost, maximum number of points awarded for the test (as defined in the task)
     *
     * Generated from protobuf field <code>float cost = 81;</code>
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * cost, maximum number of points awarded for the test (as defined in the task)
     *
     * Generated from protobuf field <code>float cost = 81;</code>
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
     * Generated from protobuf field <code>uint32 time_usage = 51;</code>
     * @return int
     */
    public function getTimeUsage()
    {
        return $this->time_usage;
    }

    /**
     * Generated from protobuf field <code>uint32 time_usage = 51;</code>
     * @param int $var
     * @return $this
     */
    public function setTimeUsage($var)
    {
        GPBUtil::checkUint32($var);
        $this->time_usage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 time_limit = 61;</code>
     * @return int
     */
    public function getTimeLimit()
    {
        return $this->time_limit;
    }

    /**
     * Generated from protobuf field <code>uint32 time_limit = 61;</code>
     * @param int $var
     * @return $this
     */
    public function setTimeLimit($var)
    {
        GPBUtil::checkUint32($var);
        $this->time_limit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 cpu_usage = 52;</code>
     * @return int
     */
    public function getCpuUsage()
    {
        return $this->cpu_usage;
    }

    /**
     * Generated from protobuf field <code>uint32 cpu_usage = 52;</code>
     * @param int $var
     * @return $this
     */
    public function setCpuUsage($var)
    {
        GPBUtil::checkUint32($var);
        $this->cpu_usage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 cpu_limit = 62;</code>
     * @return int
     */
    public function getCpuLimit()
    {
        return $this->cpu_limit;
    }

    /**
     * Generated from protobuf field <code>uint32 cpu_limit = 62;</code>
     * @param int $var
     * @return $this
     */
    public function setCpuLimit($var)
    {
        GPBUtil::checkUint32($var);
        $this->cpu_limit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 memory_usage = 53;</code>
     * @return int|string
     */
    public function getMemoryUsage()
    {
        return $this->memory_usage;
    }

    /**
     * Generated from protobuf field <code>uint64 memory_usage = 53;</code>
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
     * Generated from protobuf field <code>uint64 memory_limit = 63;</code>
     * @return int|string
     */
    public function getMemoryLimit()
    {
        return $this->memory_limit;
    }

    /**
     * Generated from protobuf field <code>uint64 memory_limit = 63;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMemoryLimit($var)
    {
        GPBUtil::checkUint64($var);
        $this->memory_limit = $var;

        return $this;
    }

    /**
     * time coefficient used to normalize cpu and time usage
     *
     * Generated from protobuf field <code>float time_coefficient = 14;</code>
     * @return float
     */
    public function getTimeCoefficient()
    {
        return $this->time_coefficient;
    }

    /**
     * time coefficient used to normalize cpu and time usage
     *
     * Generated from protobuf field <code>float time_coefficient = 14;</code>
     * @param float $var
     * @return $this
     */
    public function setTimeCoefficient($var)
    {
        GPBUtil::checkFloat($var);
        $this->time_coefficient = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string input_url = 10;</code>
     * @return string
     */
    public function getInputUrl()
    {
        return $this->input_url;
    }

    /**
     * Generated from protobuf field <code>string input_url = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setInputUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->input_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string output_url = 11;</code>
     * @return string
     */
    public function getOutputUrl()
    {
        return $this->output_url;
    }

    /**
     * Generated from protobuf field <code>string output_url = 11;</code>
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
     * Generated from protobuf field <code>string answer_url = 12;</code>
     * @return string
     */
    public function getAnswerUrl()
    {
        return $this->answer_url;
    }

    /**
     * Generated from protobuf field <code>string answer_url = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setAnswerUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->answer_url = $var;

        return $this;
    }

    /**
     * execution stats
     *
     * Generated from protobuf field <code>.eolymp.executor.Stats debug_stats = 90;</code>
     * @return \Eolymp\Executor\Stats|null
     */
    public function getDebugStats()
    {
        return $this->debug_stats;
    }

    public function hasDebugStats()
    {
        return isset($this->debug_stats);
    }

    public function clearDebugStats()
    {
        unset($this->debug_stats);
    }

    /**
     * execution stats
     *
     * Generated from protobuf field <code>.eolymp.executor.Stats debug_stats = 90;</code>
     * @param \Eolymp\Executor\Stats $var
     * @return $this
     */
    public function setDebugStats($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Executor\Stats::class);
        $this->debug_stats = $var;

        return $this;
    }

    /**
     * checker stats
     *
     * Generated from protobuf field <code>.eolymp.executor.Stats checker_stats = 35;</code>
     * @return \Eolymp\Executor\Stats|null
     */
    public function getCheckerStats()
    {
        return $this->checker_stats;
    }

    public function hasCheckerStats()
    {
        return isset($this->checker_stats);
    }

    public function clearCheckerStats()
    {
        unset($this->checker_stats);
    }

    /**
     * checker stats
     *
     * Generated from protobuf field <code>.eolymp.executor.Stats checker_stats = 35;</code>
     * @param \Eolymp\Executor\Stats $var
     * @return $this
     */
    public function setCheckerStats($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Executor\Stats::class);
        $this->checker_stats = $var;

        return $this;
    }

    /**
     * interactor stats
     *
     * Generated from protobuf field <code>.eolymp.executor.Stats interactor_stats = 45;</code>
     * @return \Eolymp\Executor\Stats|null
     */
    public function getInteractorStats()
    {
        return $this->interactor_stats;
    }

    public function hasInteractorStats()
    {
        return isset($this->interactor_stats);
    }

    public function clearInteractorStats()
    {
        unset($this->interactor_stats);
    }

    /**
     * interactor stats
     *
     * Generated from protobuf field <code>.eolymp.executor.Stats interactor_stats = 45;</code>
     * @param \Eolymp\Executor\Stats $var
     * @return $this
     */
    public function setInteractorStats($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Executor\Stats::class);
        $this->interactor_stats = $var;

        return $this;
    }

}

