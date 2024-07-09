<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/deprecated_job.proto

namespace Eolymp\Executor\Job\Step;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Execute operation executes actor
 *
 * Generated from protobuf message <code>eolymp.executor.Job.Step.Execute</code>
 */
class Execute extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the actor to execute.
     *
     * Generated from protobuf field <code>string actor = 1;</code>
     */
    protected $actor = '';
    /**
     * If set will override arguments set in Actor.
     *
     * Generated from protobuf field <code>repeated string args = 2;</code>
     */
    private $args;
    /**
     * If set will append environment variables set in Actor.
     *
     * Generated from protobuf field <code>map<string, string> env = 3;</code>
     */
    private $env;
    /**
     * Local path to the stdin source (relative to workdir)
     *
     * Generated from protobuf field <code>string stdin = 30;</code>
     */
    protected $stdin = '';
    /**
     * Local path to the stdout destination (relative to workdir)
     *
     * Generated from protobuf field <code>string stdout = 31;</code>
     */
    protected $stdout = '';
    /**
     * Local path to the stderr destination (relative to workdir), can be same as stdout
     *
     * Generated from protobuf field <code>string stderr = 32;</code>
     */
    protected $stderr = '';
    /**
     * If true, open stdin file after stdout and stderr, this is used when two actors communicate using named pipes and should not interlock each other.
     *
     * Generated from protobuf field <code>bool stdin_last = 33;</code>
     */
    protected $stdin_last = false;
    /**
     * Wall time limit in ms
     *
     * Generated from protobuf field <code>uint32 wall_time_limit = 10;</code>
     */
    protected $wall_time_limit = 0;
    /**
     * CPU usage limit in ms
     *
     * Generated from protobuf field <code>uint32 cpu_time_limit = 11;</code>
     */
    protected $cpu_time_limit = 0;
    /**
     * Memory usage limit in bytes
     *
     * Generated from protobuf field <code>uint64 memory_limit = 12;</code>
     */
    protected $memory_limit = 0;
    /**
     * File size limit in bytes
     *
     * Generated from protobuf field <code>uint64 file_size_limit = 13;</code>
     */
    protected $file_size_limit = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $actor
     *           Name of the actor to execute.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $args
     *           If set will override arguments set in Actor.
     *     @type array|\Google\Protobuf\Internal\MapField $env
     *           If set will append environment variables set in Actor.
     *     @type string $stdin
     *           Local path to the stdin source (relative to workdir)
     *     @type string $stdout
     *           Local path to the stdout destination (relative to workdir)
     *     @type string $stderr
     *           Local path to the stderr destination (relative to workdir), can be same as stdout
     *     @type bool $stdin_last
     *           If true, open stdin file after stdout and stderr, this is used when two actors communicate using named pipes and should not interlock each other.
     *     @type int $wall_time_limit
     *           Wall time limit in ms
     *     @type int $cpu_time_limit
     *           CPU usage limit in ms
     *     @type int|string $memory_limit
     *           Memory usage limit in bytes
     *     @type int|string $file_size_limit
     *           File size limit in bytes
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Executor\DeprecatedJob::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the actor to execute.
     *
     * Generated from protobuf field <code>string actor = 1;</code>
     * @return string
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Name of the actor to execute.
     *
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
     * If set will override arguments set in Actor.
     *
     * Generated from protobuf field <code>repeated string args = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * If set will override arguments set in Actor.
     *
     * Generated from protobuf field <code>repeated string args = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArgs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->args = $arr;

        return $this;
    }

    /**
     * If set will append environment variables set in Actor.
     *
     * Generated from protobuf field <code>map<string, string> env = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getEnv()
    {
        return $this->env;
    }

    /**
     * If set will append environment variables set in Actor.
     *
     * Generated from protobuf field <code>map<string, string> env = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setEnv($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->env = $arr;

        return $this;
    }

    /**
     * Local path to the stdin source (relative to workdir)
     *
     * Generated from protobuf field <code>string stdin = 30;</code>
     * @return string
     */
    public function getStdin()
    {
        return $this->stdin;
    }

    /**
     * Local path to the stdin source (relative to workdir)
     *
     * Generated from protobuf field <code>string stdin = 30;</code>
     * @param string $var
     * @return $this
     */
    public function setStdin($var)
    {
        GPBUtil::checkString($var, True);
        $this->stdin = $var;

        return $this;
    }

    /**
     * Local path to the stdout destination (relative to workdir)
     *
     * Generated from protobuf field <code>string stdout = 31;</code>
     * @return string
     */
    public function getStdout()
    {
        return $this->stdout;
    }

    /**
     * Local path to the stdout destination (relative to workdir)
     *
     * Generated from protobuf field <code>string stdout = 31;</code>
     * @param string $var
     * @return $this
     */
    public function setStdout($var)
    {
        GPBUtil::checkString($var, True);
        $this->stdout = $var;

        return $this;
    }

    /**
     * Local path to the stderr destination (relative to workdir), can be same as stdout
     *
     * Generated from protobuf field <code>string stderr = 32;</code>
     * @return string
     */
    public function getStderr()
    {
        return $this->stderr;
    }

    /**
     * Local path to the stderr destination (relative to workdir), can be same as stdout
     *
     * Generated from protobuf field <code>string stderr = 32;</code>
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
     * If true, open stdin file after stdout and stderr, this is used when two actors communicate using named pipes and should not interlock each other.
     *
     * Generated from protobuf field <code>bool stdin_last = 33;</code>
     * @return bool
     */
    public function getStdinLast()
    {
        return $this->stdin_last;
    }

    /**
     * If true, open stdin file after stdout and stderr, this is used when two actors communicate using named pipes and should not interlock each other.
     *
     * Generated from protobuf field <code>bool stdin_last = 33;</code>
     * @param bool $var
     * @return $this
     */
    public function setStdinLast($var)
    {
        GPBUtil::checkBool($var);
        $this->stdin_last = $var;

        return $this;
    }

    /**
     * Wall time limit in ms
     *
     * Generated from protobuf field <code>uint32 wall_time_limit = 10;</code>
     * @return int
     */
    public function getWallTimeLimit()
    {
        return $this->wall_time_limit;
    }

    /**
     * Wall time limit in ms
     *
     * Generated from protobuf field <code>uint32 wall_time_limit = 10;</code>
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
     * CPU usage limit in ms
     *
     * Generated from protobuf field <code>uint32 cpu_time_limit = 11;</code>
     * @return int
     */
    public function getCpuTimeLimit()
    {
        return $this->cpu_time_limit;
    }

    /**
     * CPU usage limit in ms
     *
     * Generated from protobuf field <code>uint32 cpu_time_limit = 11;</code>
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
     * Memory usage limit in bytes
     *
     * Generated from protobuf field <code>uint64 memory_limit = 12;</code>
     * @return int|string
     */
    public function getMemoryLimit()
    {
        return $this->memory_limit;
    }

    /**
     * Memory usage limit in bytes
     *
     * Generated from protobuf field <code>uint64 memory_limit = 12;</code>
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
     * File size limit in bytes
     *
     * Generated from protobuf field <code>uint64 file_size_limit = 13;</code>
     * @return int|string
     */
    public function getFileSizeLimit()
    {
        return $this->file_size_limit;
    }

    /**
     * File size limit in bytes
     *
     * Generated from protobuf field <code>uint64 file_size_limit = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFileSizeLimit($var)
    {
        GPBUtil::checkUint64($var);
        $this->file_size_limit = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Execute::class, \Eolymp\Executor\Job_Step_Execute::class);

