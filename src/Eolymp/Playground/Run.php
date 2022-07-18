<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/playground/run.proto

namespace Eolymp\Playground;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.playground.Run</code>
 */
class Run extends \Google\Protobuf\Internal\Message
{
    /**
     * Task unique identifier.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Programming language.
     * deprecated, use runtime instead
     *
     * Generated from protobuf field <code>string lang = 9;</code>
     */
    protected $lang = '';
    /**
     * Programming language.
     *
     * Generated from protobuf field <code>string runtime = 10;</code>
     */
    protected $runtime = '';
    /**
     * Source code.
     * deprecated, use source_ern instead
     *
     * Generated from protobuf field <code>string source = 11;</code>
     */
    protected $source = '';
    /**
     * Source code ERN (blob or data).
     *
     * Generated from protobuf field <code>string source_ern = 12;</code>
     */
    protected $source_ern = '';
    /**
     * Input data (up to 5KB)
     * deprecated, use input_ern instead
     *
     * Generated from protobuf field <code>string input = 13;</code>
     */
    protected $input = '';
    /**
     * Input ERN (data up to 5KB or blob)
     *
     * Generated from protobuf field <code>string input_ern = 14;</code>
     */
    protected $input_ern = '';
    /**
     * Status (see enumeration values for details)
     *
     * Generated from protobuf field <code>.eolymp.playground.Run.Status status = 20;</code>
     */
    protected $status = 0;
    /**
     * Error message (when status is ERROR)
     *
     * Generated from protobuf field <code>string error = 21;</code>
     */
    protected $error = '';
    /**
     * Exit code.
     *
     * Generated from protobuf field <code>uint32 exit_code = 30;</code>
     */
    protected $exit_code = 0;
    /**
     * Signal used to kill process, if any.
     *
     * Generated from protobuf field <code>uint32 signal = 31;</code>
     */
    protected $signal = 0;
    /**
     * Amount of time in milliseconds program was executed.
     *
     * Generated from protobuf field <code>uint32 wall_time_usage = 32;</code>
     */
    protected $wall_time_usage = 0;
    /**
     * Amount of time in milliseconds program used CPU.
     *
     * Generated from protobuf field <code>uint32 cpu_time_usage = 33;</code>
     */
    protected $cpu_time_usage = 0;
    /**
     * Peak amount of memory in bytes used during program execution.
     *
     * Generated from protobuf field <code>uint64 memory_usage = 34;</code>
     */
    protected $memory_usage = 0;
    /**
     * Combined output (stdout + stderr) generated by the program (only first 1KB, the rest is truncated).
     * deprecated, use output_ern instead
     *
     * Generated from protobuf field <code>string output = 40;</code>
     */
    protected $output = '';
    /**
     * Combined output ERN (data or blob)
     *
     * Generated from protobuf field <code>string output_ern = 41;</code>
     */
    protected $output_ern = '';
    /**
     * Problem ERN (optionally)
     *
     * Generated from protobuf field <code>string problem_ern = 50;</code>
     */
    protected $problem_ern = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Task unique identifier.
     *     @type string $lang
     *           Programming language.
     *           deprecated, use runtime instead
     *     @type string $runtime
     *           Programming language.
     *     @type string $source
     *           Source code.
     *           deprecated, use source_ern instead
     *     @type string $source_ern
     *           Source code ERN (blob or data).
     *     @type string $input
     *           Input data (up to 5KB)
     *           deprecated, use input_ern instead
     *     @type string $input_ern
     *           Input ERN (data up to 5KB or blob)
     *     @type int $status
     *           Status (see enumeration values for details)
     *     @type string $error
     *           Error message (when status is ERROR)
     *     @type int $exit_code
     *           Exit code.
     *     @type int $signal
     *           Signal used to kill process, if any.
     *     @type int $wall_time_usage
     *           Amount of time in milliseconds program was executed.
     *     @type int $cpu_time_usage
     *           Amount of time in milliseconds program used CPU.
     *     @type int|string $memory_usage
     *           Peak amount of memory in bytes used during program execution.
     *     @type string $output
     *           Combined output (stdout + stderr) generated by the program (only first 1KB, the rest is truncated).
     *           deprecated, use output_ern instead
     *     @type string $output_ern
     *           Combined output ERN (data or blob)
     *     @type string $problem_ern
     *           Problem ERN (optionally)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Playground\Run::initOnce();
        parent::__construct($data);
    }

    /**
     * Task unique identifier.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Task unique identifier.
     *
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
     * Programming language.
     * deprecated, use runtime instead
     *
     * Generated from protobuf field <code>string lang = 9;</code>
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Programming language.
     * deprecated, use runtime instead
     *
     * Generated from protobuf field <code>string lang = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setLang($var)
    {
        GPBUtil::checkString($var, True);
        $this->lang = $var;

        return $this;
    }

    /**
     * Programming language.
     *
     * Generated from protobuf field <code>string runtime = 10;</code>
     * @return string
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * Programming language.
     *
     * Generated from protobuf field <code>string runtime = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setRuntime($var)
    {
        GPBUtil::checkString($var, True);
        $this->runtime = $var;

        return $this;
    }

    /**
     * Source code.
     * deprecated, use source_ern instead
     *
     * Generated from protobuf field <code>string source = 11;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Source code.
     * deprecated, use source_ern instead
     *
     * Generated from protobuf field <code>string source = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

    /**
     * Source code ERN (blob or data).
     *
     * Generated from protobuf field <code>string source_ern = 12;</code>
     * @return string
     */
    public function getSourceErn()
    {
        return $this->source_ern;
    }

    /**
     * Source code ERN (blob or data).
     *
     * Generated from protobuf field <code>string source_ern = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceErn($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_ern = $var;

        return $this;
    }

    /**
     * Input data (up to 5KB)
     * deprecated, use input_ern instead
     *
     * Generated from protobuf field <code>string input = 13;</code>
     * @return string
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Input data (up to 5KB)
     * deprecated, use input_ern instead
     *
     * Generated from protobuf field <code>string input = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setInput($var)
    {
        GPBUtil::checkString($var, True);
        $this->input = $var;

        return $this;
    }

    /**
     * Input ERN (data up to 5KB or blob)
     *
     * Generated from protobuf field <code>string input_ern = 14;</code>
     * @return string
     */
    public function getInputErn()
    {
        return $this->input_ern;
    }

    /**
     * Input ERN (data up to 5KB or blob)
     *
     * Generated from protobuf field <code>string input_ern = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setInputErn($var)
    {
        GPBUtil::checkString($var, True);
        $this->input_ern = $var;

        return $this;
    }

    /**
     * Status (see enumeration values for details)
     *
     * Generated from protobuf field <code>.eolymp.playground.Run.Status status = 20;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status (see enumeration values for details)
     *
     * Generated from protobuf field <code>.eolymp.playground.Run.Status status = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Playground\Run_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Error message (when status is ERROR)
     *
     * Generated from protobuf field <code>string error = 21;</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Error message (when status is ERROR)
     *
     * Generated from protobuf field <code>string error = 21;</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;

        return $this;
    }

    /**
     * Exit code.
     *
     * Generated from protobuf field <code>uint32 exit_code = 30;</code>
     * @return int
     */
    public function getExitCode()
    {
        return $this->exit_code;
    }

    /**
     * Exit code.
     *
     * Generated from protobuf field <code>uint32 exit_code = 30;</code>
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
     * Signal used to kill process, if any.
     *
     * Generated from protobuf field <code>uint32 signal = 31;</code>
     * @return int
     */
    public function getSignal()
    {
        return $this->signal;
    }

    /**
     * Signal used to kill process, if any.
     *
     * Generated from protobuf field <code>uint32 signal = 31;</code>
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
     * Amount of time in milliseconds program was executed.
     *
     * Generated from protobuf field <code>uint32 wall_time_usage = 32;</code>
     * @return int
     */
    public function getWallTimeUsage()
    {
        return $this->wall_time_usage;
    }

    /**
     * Amount of time in milliseconds program was executed.
     *
     * Generated from protobuf field <code>uint32 wall_time_usage = 32;</code>
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
     * Amount of time in milliseconds program used CPU.
     *
     * Generated from protobuf field <code>uint32 cpu_time_usage = 33;</code>
     * @return int
     */
    public function getCpuTimeUsage()
    {
        return $this->cpu_time_usage;
    }

    /**
     * Amount of time in milliseconds program used CPU.
     *
     * Generated from protobuf field <code>uint32 cpu_time_usage = 33;</code>
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
     * Peak amount of memory in bytes used during program execution.
     *
     * Generated from protobuf field <code>uint64 memory_usage = 34;</code>
     * @return int|string
     */
    public function getMemoryUsage()
    {
        return $this->memory_usage;
    }

    /**
     * Peak amount of memory in bytes used during program execution.
     *
     * Generated from protobuf field <code>uint64 memory_usage = 34;</code>
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
     * Combined output (stdout + stderr) generated by the program (only first 1KB, the rest is truncated).
     * deprecated, use output_ern instead
     *
     * Generated from protobuf field <code>string output = 40;</code>
     * @return string
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * Combined output (stdout + stderr) generated by the program (only first 1KB, the rest is truncated).
     * deprecated, use output_ern instead
     *
     * Generated from protobuf field <code>string output = 40;</code>
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
     * Combined output ERN (data or blob)
     *
     * Generated from protobuf field <code>string output_ern = 41;</code>
     * @return string
     */
    public function getOutputErn()
    {
        return $this->output_ern;
    }

    /**
     * Combined output ERN (data or blob)
     *
     * Generated from protobuf field <code>string output_ern = 41;</code>
     * @param string $var
     * @return $this
     */
    public function setOutputErn($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_ern = $var;

        return $this;
    }

    /**
     * Problem ERN (optionally)
     *
     * Generated from protobuf field <code>string problem_ern = 50;</code>
     * @return string
     */
    public function getProblemErn()
    {
        return $this->problem_ern;
    }

    /**
     * Problem ERN (optionally)
     *
     * Generated from protobuf field <code>string problem_ern = 50;</code>
     * @param string $var
     * @return $this
     */
    public function setProblemErn($var)
    {
        GPBUtil::checkString($var, True);
        $this->problem_ern = $var;

        return $this;
    }

}

