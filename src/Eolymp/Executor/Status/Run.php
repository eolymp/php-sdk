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
     * score, number of points awarded by verifier
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
     * output data
     * only populated if debug was set to true
     * up to 5KB, the rest is truncated
     *
     * Generated from protobuf field <code>string output = 10;</code>
     */
    protected $output = '';
    /**
     * stderr data
     * only populated if debug was set to true
     * up to 5KB, the rest is truncated
     *
     * Generated from protobuf field <code>string stderr = 20;</code>
     */
    protected $stderr = '';
    /**
     * output (incl. stderr) produced by verifier during execution
     * only populated if debug was set to true
     * up to 5KB, the rest is truncated
     *
     * Generated from protobuf field <code>string verifier_log = 30;</code>
     */
    protected $verifier_log = '';
    /**
     * output (incl. stderr) produced by interactor during execution
     * only populated if debug was set to true
     * up to 5KB, the rest is truncated
     *
     * Generated from protobuf field <code>string interactor_log = 40;</code>
     */
    protected $interactor_log = '';

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
     *           score, number of points awarded by verifier
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
     *     @type string $output
     *           output data
     *           only populated if debug was set to true
     *           up to 5KB, the rest is truncated
     *     @type string $stderr
     *           stderr data
     *           only populated if debug was set to true
     *           up to 5KB, the rest is truncated
     *     @type string $verifier_log
     *           output (incl. stderr) produced by verifier during execution
     *           only populated if debug was set to true
     *           up to 5KB, the rest is truncated
     *     @type string $interactor_log
     *           output (incl. stderr) produced by interactor during execution
     *           only populated if debug was set to true
     *           up to 5KB, the rest is truncated
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
        GPBUtil::checkEnum($var, \Eolymp\Executor\Status_Run_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * score, number of points awarded by verifier
     *
     * Generated from protobuf field <code>float score = 80;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * score, number of points awarded by verifier
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
     * output data
     * only populated if debug was set to true
     * up to 5KB, the rest is truncated
     *
     * Generated from protobuf field <code>string output = 10;</code>
     * @return string
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * output data
     * only populated if debug was set to true
     * up to 5KB, the rest is truncated
     *
     * Generated from protobuf field <code>string output = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setOutput($var)
    {
        GPBUtil::checkString($var, True);
        $this->output = $var;

        return $this;
    }

    /**
     * stderr data
     * only populated if debug was set to true
     * up to 5KB, the rest is truncated
     *
     * Generated from protobuf field <code>string stderr = 20;</code>
     * @return string
     */
    public function getStderr()
    {
        return $this->stderr;
    }

    /**
     * stderr data
     * only populated if debug was set to true
     * up to 5KB, the rest is truncated
     *
     * Generated from protobuf field <code>string stderr = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setStderr($var)
    {
        GPBUtil::checkString($var, True);
        $this->stderr = $var;

        return $this;
    }

    /**
     * output (incl. stderr) produced by verifier during execution
     * only populated if debug was set to true
     * up to 5KB, the rest is truncated
     *
     * Generated from protobuf field <code>string verifier_log = 30;</code>
     * @return string
     */
    public function getVerifierLog()
    {
        return $this->verifier_log;
    }

    /**
     * output (incl. stderr) produced by verifier during execution
     * only populated if debug was set to true
     * up to 5KB, the rest is truncated
     *
     * Generated from protobuf field <code>string verifier_log = 30;</code>
     * @param string $var
     * @return $this
     */
    public function setVerifierLog($var)
    {
        GPBUtil::checkString($var, True);
        $this->verifier_log = $var;

        return $this;
    }

    /**
     * output (incl. stderr) produced by interactor during execution
     * only populated if debug was set to true
     * up to 5KB, the rest is truncated
     *
     * Generated from protobuf field <code>string interactor_log = 40;</code>
     * @return string
     */
    public function getInteractorLog()
    {
        return $this->interactor_log;
    }

    /**
     * output (incl. stderr) produced by interactor during execution
     * only populated if debug was set to true
     * up to 5KB, the rest is truncated
     *
     * Generated from protobuf field <code>string interactor_log = 40;</code>
     * @param string $var
     * @return $this
     */
    public function setInteractorLog($var)
    {
        GPBUtil::checkString($var, True);
        $this->interactor_log = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Run::class, \Eolymp\Executor\Status_Run::class);

