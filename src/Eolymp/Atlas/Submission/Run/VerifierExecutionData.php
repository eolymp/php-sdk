<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/submission.proto

namespace Eolymp\Atlas\Submission\Run;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.Submission.Run.VerifierExecutionData</code>
 */
class VerifierExecutionData extends \Google\Protobuf\Internal\Message
{
    /**
     * URL for verifier's full log
     *
     * Generated from protobuf field <code>string log_url = 1;</code>
     */
    protected $log_url = '';
    /**
     * verifier's wall time usage in milliseconds
     *
     * Generated from protobuf field <code>uint32 wall_time_usage = 2;</code>
     */
    protected $wall_time_usage = 0;
    /**
     * verifier's wall time usage in bytes
     *
     * Generated from protobuf field <code>uint32 memory_usage = 3;</code>
     */
    protected $memory_usage = 0;
    /**
     * verifier's exit code
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
     *           URL for verifier's full log
     *     @type int $wall_time_usage
     *           verifier's wall time usage in milliseconds
     *     @type int $memory_usage
     *           verifier's wall time usage in bytes
     *     @type int $exit_code
     *           verifier's exit code
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\Submission::initOnce();
        parent::__construct($data);
    }

    /**
     * URL for verifier's full log
     *
     * Generated from protobuf field <code>string log_url = 1;</code>
     * @return string
     */
    public function getLogUrl()
    {
        return $this->log_url;
    }

    /**
     * URL for verifier's full log
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
     * verifier's wall time usage in milliseconds
     *
     * Generated from protobuf field <code>uint32 wall_time_usage = 2;</code>
     * @return int
     */
    public function getWallTimeUsage()
    {
        return $this->wall_time_usage;
    }

    /**
     * verifier's wall time usage in milliseconds
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
     * verifier's wall time usage in bytes
     *
     * Generated from protobuf field <code>uint32 memory_usage = 3;</code>
     * @return int
     */
    public function getMemoryUsage()
    {
        return $this->memory_usage;
    }

    /**
     * verifier's wall time usage in bytes
     *
     * Generated from protobuf field <code>uint32 memory_usage = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMemoryUsage($var)
    {
        GPBUtil::checkUint32($var);
        $this->memory_usage = $var;

        return $this;
    }

    /**
     * verifier's exit code
     *
     * Generated from protobuf field <code>uint32 exit_code = 4;</code>
     * @return int
     */
    public function getExitCode()
    {
        return $this->exit_code;
    }

    /**
     * verifier's exit code
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
class_alias(VerifierExecutionData::class, \Eolymp\Atlas\Submission_Run_VerifierExecutionData::class);

