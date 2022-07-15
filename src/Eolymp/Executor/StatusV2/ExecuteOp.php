<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/status_v2.proto

namespace Eolymp\Executor\StatusV2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.executor.StatusV2.ExecuteOp</code>
 */
class ExecuteOp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string actor = 1;</code>
     */
    protected $actor = '';
    /**
     * Generated from protobuf field <code>.eolymp.executor.StatusV2.ExecuteOp.Status status = 2;</code>
     */
    protected $status = 0;
    /**
     * Wall time usage in milliseconds
     *
     * Generated from protobuf field <code>uint32 wall_time_usage = 51;</code>
     */
    protected $wall_time_usage = 0;
    /**
     * Wall time limit in milliseconds
     *
     * Generated from protobuf field <code>uint32 wall_time_limit = 61;</code>
     */
    protected $wall_time_limit = 0;
    /**
     * CPU time usage in milliseconds
     *
     * Generated from protobuf field <code>uint32 cpu_time_usage = 52;</code>
     */
    protected $cpu_time_usage = 0;
    /**
     * CPU time limit in milliseconds
     *
     * Generated from protobuf field <code>uint32 cpu_time_limit = 62;</code>
     */
    protected $cpu_time_limit = 0;
    /**
     * Memory usage in bytes
     *
     * Generated from protobuf field <code>uint64 memory_usage = 53;</code>
     */
    protected $memory_usage = 0;
    /**
     * Memory limit in bytes
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
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $actor
     *     @type int $status
     *     @type int $wall_time_usage
     *           Wall time usage in milliseconds
     *     @type int $wall_time_limit
     *           Wall time limit in milliseconds
     *     @type int $cpu_time_usage
     *           CPU time usage in milliseconds
     *     @type int $cpu_time_limit
     *           CPU time limit in milliseconds
     *     @type int|string $memory_usage
     *           Memory usage in bytes
     *     @type int|string $memory_limit
     *           Memory limit in bytes
     *     @type int $exit_code
     *           program exit code
     *     @type int $signal
     *           might contain signal used to kill program
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Executor\StatusV2::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string actor = 1;</code>
     * @return string
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Generated from protobuf field <code>string actor = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setActor($var)
    {
        GPBUtil::checkString($var, True);
        $this->actor = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.executor.StatusV2.ExecuteOp.Status status = 2;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.eolymp.executor.StatusV2.ExecuteOp.Status status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Executor\StatusV2_ExecuteOp_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Wall time usage in milliseconds
     *
     * Generated from protobuf field <code>uint32 wall_time_usage = 51;</code>
     * @return int
     */
    public function getWallTimeUsage()
    {
        return $this->wall_time_usage;
    }

    /**
     * Wall time usage in milliseconds
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
     * Wall time limit in milliseconds
     *
     * Generated from protobuf field <code>uint32 wall_time_limit = 61;</code>
     * @return int
     */
    public function getWallTimeLimit()
    {
        return $this->wall_time_limit;
    }

    /**
     * Wall time limit in milliseconds
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
     * CPU time usage in milliseconds
     *
     * Generated from protobuf field <code>uint32 cpu_time_usage = 52;</code>
     * @return int
     */
    public function getCpuTimeUsage()
    {
        return $this->cpu_time_usage;
    }

    /**
     * CPU time usage in milliseconds
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
     * CPU time limit in milliseconds
     *
     * Generated from protobuf field <code>uint32 cpu_time_limit = 62;</code>
     * @return int
     */
    public function getCpuTimeLimit()
    {
        return $this->cpu_time_limit;
    }

    /**
     * CPU time limit in milliseconds
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
     * Memory usage in bytes
     *
     * Generated from protobuf field <code>uint64 memory_usage = 53;</code>
     * @return int|string
     */
    public function getMemoryUsage()
    {
        return $this->memory_usage;
    }

    /**
     * Memory usage in bytes
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
     * Memory limit in bytes
     *
     * Generated from protobuf field <code>uint64 memory_limit = 63;</code>
     * @return int|string
     */
    public function getMemoryLimit()
    {
        return $this->memory_limit;
    }

    /**
     * Memory limit in bytes
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

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExecuteOp::class, \Eolymp\Executor\StatusV2_ExecuteOp::class);

