<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/submission.proto

namespace Eolymp\Judge\Submission;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.Submission.CheckerExecutionData</code>
 */
class CheckerExecutionData extends \Google\Protobuf\Internal\Message
{
    /**
     * URL for checker's full log
     *
     * Generated from protobuf field <code>string log_url = 1;</code>
     */
    protected $log_url = '';
    /**
     * checker's wall time usage in milliseconds
     *
     * Generated from protobuf field <code>uint32 wall_time_usage = 2;</code>
     */
    protected $wall_time_usage = 0;
    /**
     * checker's wall time usage in bytes
     *
     * Generated from protobuf field <code>uint64 memory_usage = 3;</code>
     */
    protected $memory_usage = 0;
    /**
     * checker's exit code
     *
     * Generated from protobuf field <code>uint32 exit_code = 4;</code>
     */
    protected $exit_code = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $log_url
     *           URL for checker's full log
     *     @type int $wall_time_usage
     *           checker's wall time usage in milliseconds
     *     @type int|string $memory_usage
     *           checker's wall time usage in bytes
     *     @type int $exit_code
     *           checker's exit code
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Submission::initOnce();
        parent::__construct($data);
    }

    /**
     * URL for checker's full log
     *
     * Generated from protobuf field <code>string log_url = 1;</code>
     * @return string
     */
    public function getLogUrl()
    {
        return $this->log_url;
    }

    /**
     * URL for checker's full log
     *
     * Generated from protobuf field <code>string log_url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLogUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->log_url = $var;

        return $this;
    }

    /**
     * checker's wall time usage in milliseconds
     *
     * Generated from protobuf field <code>uint32 wall_time_usage = 2;</code>
     * @return int
     */
    public function getWallTimeUsage()
    {
        return $this->wall_time_usage;
    }

    /**
     * checker's wall time usage in milliseconds
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
     * checker's wall time usage in bytes
     *
     * Generated from protobuf field <code>uint64 memory_usage = 3;</code>
     * @return int|string
     */
    public function getMemoryUsage()
    {
        return $this->memory_usage;
    }

    /**
     * checker's wall time usage in bytes
     *
     * Generated from protobuf field <code>uint64 memory_usage = 3;</code>
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
     * checker's exit code
     *
     * Generated from protobuf field <code>uint32 exit_code = 4;</code>
     * @return int
     */
    public function getExitCode()
    {
        return $this->exit_code;
    }

    /**
     * checker's exit code
     *
     * Generated from protobuf field <code>uint32 exit_code = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setExitCode($var)
    {
        GPBUtil::checkUint32($var);
        $this->exit_code = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CheckerExecutionData::class, \Eolymp\Judge\Submission_CheckerExecutionData::class);

