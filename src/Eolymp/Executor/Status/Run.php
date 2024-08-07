<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/status.proto

namespace Eolymp\Executor\Status;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Run represents a single execution
 *
 * Generated from protobuf message <code>eolymp.executor.Status.Run</code>
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
     * Generated from protobuf field <code>.eolymp.executor.Status.Run.Status status = 2;</code>
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
     * wall time usage in milliseconds
     *
     * Generated from protobuf field <code>uint32 wall_time_usage = 51;</code>
     */
    protected $wall_time_usage = 0;
    /**
     * wall time limit in milliseconds
     *
     * Generated from protobuf field <code>uint32 wall_time_limit = 61;</code>
     */
    protected $wall_time_limit = 0;
    /**
     * cpu time usage in milliseconds
     *
     * Generated from protobuf field <code>uint32 cpu_time_usage = 52;</code>
     */
    protected $cpu_time_usage = 0;
    /**
     * cpu time limit in milliseconds
     *
     * Generated from protobuf field <code>uint32 cpu_time_limit = 62;</code>
     */
    protected $cpu_time_limit = 0;
    /**
     * memory usage in bytes
     *
     * Generated from protobuf field <code>uint64 memory_usage = 53;</code>
     */
    protected $memory_usage = 0;
    /**
     * memory limit in bytes
     *
     * Generated from protobuf field <code>uint64 memory_limit = 63;</code>
     */
    protected $memory_limit = 0;
    /**
     * program exit code
     *
     * Generated from protobuf field <code>uint32 exit_code = 70;</code>
     */
    protected $exit_code = 0;
    /**
     * might contain signal used to kill program
     *
     * Generated from protobuf field <code>uint32 signal = 71;</code>
     */
    protected $signal = 0;
    /**
     * Generated from protobuf field <code>string output_url = 11;</code>
     */
    protected $output_url = '';
    /**
     * Generated from protobuf field <code>string stderr_url = 21;</code>
     */
    protected $stderr_url = '';
    /**
     * URL for checker's full log
     *
     * Generated from protobuf field <code>string checker_log_url = 31;</code>
     */
    protected $checker_log_url = '';
    /**
     * checker's wall time usage in milliseconds
     *
     * Generated from protobuf field <code>uint32 checker_wall_time_usage = 32;</code>
     */
    protected $checker_wall_time_usage = 0;
    /**
     * checker's wall time usage in bytes
     *
     * Generated from protobuf field <code>uint64 checker_memory_usage = 33;</code>
     */
    protected $checker_memory_usage = 0;
    /**
     * checker's exit code
     *
     * Generated from protobuf field <code>uint32 checker_exit_code = 34;</code>
     */
    protected $checker_exit_code = 0;
    /**
     * URL for interactor's full log
     *
     * Generated from protobuf field <code>string interactor_log_url = 41;</code>
     */
    protected $interactor_log_url = '';
    /**
     * interactor's wall time usage in milliseconds
     *
     * Generated from protobuf field <code>uint32 interactor_wall_time_usage = 42;</code>
     */
    protected $interactor_wall_time_usage = 0;
    /**
     * interactor's wall time usage in bytes
     *
     * Generated from protobuf field <code>uint64 interactor_memory_usage = 43;</code>
     */
    protected $interactor_memory_usage = 0;
    /**
     * interactor's exit code
     *
     * Generated from protobuf field <code>uint32 interactor_exit_code = 44;</code>
     */
    protected $interactor_exit_code = 0;

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
     *     @type int $wall_time_usage
     *           wall time usage in milliseconds
     *     @type int $wall_time_limit
     *           wall time limit in milliseconds
     *     @type int $cpu_time_usage
     *           cpu time usage in milliseconds
     *     @type int $cpu_time_limit
     *           cpu time limit in milliseconds
     *     @type int|string $memory_usage
     *           memory usage in bytes
     *     @type int|string $memory_limit
     *           memory limit in bytes
     *     @type int $exit_code
     *           program exit code
     *     @type int $signal
     *           might contain signal used to kill program
     *     @type string $output_url
     *     @type string $stderr_url
     *     @type string $checker_log_url
     *           URL for checker's full log
     *     @type int $checker_wall_time_usage
     *           checker's wall time usage in milliseconds
     *     @type int|string $checker_memory_usage
     *           checker's wall time usage in bytes
     *     @type int $checker_exit_code
     *           checker's exit code
     *     @type string $interactor_log_url
     *           URL for interactor's full log
     *     @type int $interactor_wall_time_usage
     *           interactor's wall time usage in milliseconds
     *     @type int|string $interactor_memory_usage
     *           interactor's wall time usage in bytes
     *     @type int $interactor_exit_code
     *           interactor's exit code
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Executor\Status::initOnce();
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
     * Generated from protobuf field <code>.eolymp.executor.Status.Run.Status status = 2;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * run status
     *
     * Generated from protobuf field <code>.eolymp.executor.Status.Run.Status status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Executor\Status\Run\Status::class);
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
     * wall time usage in milliseconds
     *
     * Generated from protobuf field <code>uint32 wall_time_usage = 51;</code>
     * @return int
     */
    public function getWallTimeUsage()
    {
        return $this->wall_time_usage;
    }

    /**
     * wall time usage in milliseconds
     *
     * Generated from protobuf field <code>uint32 wall_time_usage = 51;</code>
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
     * wall time limit in milliseconds
     *
     * Generated from protobuf field <code>uint32 wall_time_limit = 61;</code>
     * @return int
     */
    public function getWallTimeLimit()
    {
        return $this->wall_time_limit;
    }

    /**
     * wall time limit in milliseconds
     *
     * Generated from protobuf field <code>uint32 wall_time_limit = 61;</code>
     * @param int $var
     * @return $this
     */
    public function setWallTimeLimit($var)
    {
        GPBUtil::checkUint32($var);
        $this->wall_time_limit = $var;

        return $this;
    }

    /**
     * cpu time usage in milliseconds
     *
     * Generated from protobuf field <code>uint32 cpu_time_usage = 52;</code>
     * @return int
     */
    public function getCpuTimeUsage()
    {
        return $this->cpu_time_usage;
    }

    /**
     * cpu time usage in milliseconds
     *
     * Generated from protobuf field <code>uint32 cpu_time_usage = 52;</code>
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
     * cpu time limit in milliseconds
     *
     * Generated from protobuf field <code>uint32 cpu_time_limit = 62;</code>
     * @return int
     */
    public function getCpuTimeLimit()
    {
        return $this->cpu_time_limit;
    }

    /**
     * cpu time limit in milliseconds
     *
     * Generated from protobuf field <code>uint32 cpu_time_limit = 62;</code>
     * @param int $var
     * @return $this
     */
    public function setCpuTimeLimit($var)
    {
        GPBUtil::checkUint32($var);
        $this->cpu_time_limit = $var;

        return $this;
    }

    /**
     * memory usage in bytes
     *
     * Generated from protobuf field <code>uint64 memory_usage = 53;</code>
     * @return int|string
     */
    public function getMemoryUsage()
    {
        return $this->memory_usage;
    }

    /**
     * memory usage in bytes
     *
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
     * memory limit in bytes
     *
     * Generated from protobuf field <code>uint64 memory_limit = 63;</code>
     * @return int|string
     */
    public function getMemoryLimit()
    {
        return $this->memory_limit;
    }

    /**
     * memory limit in bytes
     *
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
     * program exit code
     *
     * Generated from protobuf field <code>uint32 exit_code = 70;</code>
     * @return int
     */
    public function getExitCode()
    {
        return $this->exit_code;
    }

    /**
     * program exit code
     *
     * Generated from protobuf field <code>uint32 exit_code = 70;</code>
     * @param int $var
     * @return $this
     */
    public function setExitCode($var)
    {
        GPBUtil::checkUint32($var);
        $this->exit_code = $var;

        return $this;
    }

    /**
     * might contain signal used to kill program
     *
     * Generated from protobuf field <code>uint32 signal = 71;</code>
     * @return int
     */
    public function getSignal()
    {
        return $this->signal;
    }

    /**
     * might contain signal used to kill program
     *
     * Generated from protobuf field <code>uint32 signal = 71;</code>
     * @param int $var
     * @return $this
     */
    public function setSignal($var)
    {
        GPBUtil::checkUint32($var);
        $this->signal = $var;

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
     * Generated from protobuf field <code>string stderr_url = 21;</code>
     * @return string
     */
    public function getStderrUrl()
    {
        return $this->stderr_url;
    }

    /**
     * Generated from protobuf field <code>string stderr_url = 21;</code>
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
     * URL for checker's full log
     *
     * Generated from protobuf field <code>string checker_log_url = 31;</code>
     * @return string
     */
    public function getCheckerLogUrl()
    {
        return $this->checker_log_url;
    }

    /**
     * URL for checker's full log
     *
     * Generated from protobuf field <code>string checker_log_url = 31;</code>
     * @param string $var
     * @return $this
     */
    public function setCheckerLogUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->checker_log_url = $var;

        return $this;
    }

    /**
     * checker's wall time usage in milliseconds
     *
     * Generated from protobuf field <code>uint32 checker_wall_time_usage = 32;</code>
     * @return int
     */
    public function getCheckerWallTimeUsage()
    {
        return $this->checker_wall_time_usage;
    }

    /**
     * checker's wall time usage in milliseconds
     *
     * Generated from protobuf field <code>uint32 checker_wall_time_usage = 32;</code>
     * @param int $var
     * @return $this
     */
    public function setCheckerWallTimeUsage($var)
    {
        GPBUtil::checkUint32($var);
        $this->checker_wall_time_usage = $var;

        return $this;
    }

    /**
     * checker's wall time usage in bytes
     *
     * Generated from protobuf field <code>uint64 checker_memory_usage = 33;</code>
     * @return int|string
     */
    public function getCheckerMemoryUsage()
    {
        return $this->checker_memory_usage;
    }

    /**
     * checker's wall time usage in bytes
     *
     * Generated from protobuf field <code>uint64 checker_memory_usage = 33;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCheckerMemoryUsage($var)
    {
        GPBUtil::checkUint64($var);
        $this->checker_memory_usage = $var;

        return $this;
    }

    /**
     * checker's exit code
     *
     * Generated from protobuf field <code>uint32 checker_exit_code = 34;</code>
     * @return int
     */
    public function getCheckerExitCode()
    {
        return $this->checker_exit_code;
    }

    /**
     * checker's exit code
     *
     * Generated from protobuf field <code>uint32 checker_exit_code = 34;</code>
     * @param int $var
     * @return $this
     */
    public function setCheckerExitCode($var)
    {
        GPBUtil::checkUint32($var);
        $this->checker_exit_code = $var;

        return $this;
    }

    /**
     * URL for interactor's full log
     *
     * Generated from protobuf field <code>string interactor_log_url = 41;</code>
     * @return string
     */
    public function getInteractorLogUrl()
    {
        return $this->interactor_log_url;
    }

    /**
     * URL for interactor's full log
     *
     * Generated from protobuf field <code>string interactor_log_url = 41;</code>
     * @param string $var
     * @return $this
     */
    public function setInteractorLogUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->interactor_log_url = $var;

        return $this;
    }

    /**
     * interactor's wall time usage in milliseconds
     *
     * Generated from protobuf field <code>uint32 interactor_wall_time_usage = 42;</code>
     * @return int
     */
    public function getInteractorWallTimeUsage()
    {
        return $this->interactor_wall_time_usage;
    }

    /**
     * interactor's wall time usage in milliseconds
     *
     * Generated from protobuf field <code>uint32 interactor_wall_time_usage = 42;</code>
     * @param int $var
     * @return $this
     */
    public function setInteractorWallTimeUsage($var)
    {
        GPBUtil::checkUint32($var);
        $this->interactor_wall_time_usage = $var;

        return $this;
    }

    /**
     * interactor's wall time usage in bytes
     *
     * Generated from protobuf field <code>uint64 interactor_memory_usage = 43;</code>
     * @return int|string
     */
    public function getInteractorMemoryUsage()
    {
        return $this->interactor_memory_usage;
    }

    /**
     * interactor's wall time usage in bytes
     *
     * Generated from protobuf field <code>uint64 interactor_memory_usage = 43;</code>
     * @param int|string $var
     * @return $this
     */
    public function setInteractorMemoryUsage($var)
    {
        GPBUtil::checkUint64($var);
        $this->interactor_memory_usage = $var;

        return $this;
    }

    /**
     * interactor's exit code
     *
     * Generated from protobuf field <code>uint32 interactor_exit_code = 44;</code>
     * @return int
     */
    public function getInteractorExitCode()
    {
        return $this->interactor_exit_code;
    }

    /**
     * interactor's exit code
     *
     * Generated from protobuf field <code>uint32 interactor_exit_code = 44;</code>
     * @param int $var
     * @return $this
     */
    public function setInteractorExitCode($var)
    {
        GPBUtil::checkUint32($var);
        $this->interactor_exit_code = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Run::class, \Eolymp\Executor\Status_Run::class);

