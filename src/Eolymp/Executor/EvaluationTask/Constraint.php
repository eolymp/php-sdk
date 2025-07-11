<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/executor/evaluation_task.proto

namespace Eolymp\Executor\EvaluationTask;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Constraint defines limitations which apply to the run.
 *
 * Generated from protobuf message <code>eolymp.executor.EvaluationTask.Constraint</code>
 */
class Constraint extends \Google\Protobuf\Internal\Message
{
    /**
     * Constraint will apply to all runs matching this label selector.
     * Run must have all labels defined by selector. Empty selector will match all runs.
     *
     * Generated from protobuf field <code>repeated string selector = 1;</code>
     */
    private $selector;
    /**
     * Defines actor to whom the constraint is applied (used by Task V2)
     *
     * Generated from protobuf field <code>string actor = 2;</code>
     */
    protected $actor = '';
    /**
     * Real-world time limit in milliseconds.
     *
     * Generated from protobuf field <code>uint32 wall_time_limit = 10;</code>
     */
    protected $wall_time_limit = 0;
    /**
     * CPU time limit in milliseconds.
     *
     * Generated from protobuf field <code>uint32 cpu_time_limit = 11;</code>
     */
    protected $cpu_time_limit = 0;
    /**
     * Memory limit in bytes.
     *
     * Generated from protobuf field <code>uint64 memory_limit = 12;</code>
     */
    protected $memory_limit = 0;
    /**
     * File size limit in bytes.
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
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $selector
     *           Constraint will apply to all runs matching this label selector.
     *           Run must have all labels defined by selector. Empty selector will match all runs.
     *     @type string $actor
     *           Defines actor to whom the constraint is applied (used by Task V2)
     *     @type int $wall_time_limit
     *           Real-world time limit in milliseconds.
     *     @type int $cpu_time_limit
     *           CPU time limit in milliseconds.
     *     @type int|string $memory_limit
     *           Memory limit in bytes.
     *     @type int|string $file_size_limit
     *           File size limit in bytes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Executor\EvaluationTask::initOnce();
        parent::__construct($data);
    }

    /**
     * Constraint will apply to all runs matching this label selector.
     * Run must have all labels defined by selector. Empty selector will match all runs.
     *
     * Generated from protobuf field <code>repeated string selector = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSelector()
    {
        return $this->selector;
    }

    /**
     * Constraint will apply to all runs matching this label selector.
     * Run must have all labels defined by selector. Empty selector will match all runs.
     *
     * Generated from protobuf field <code>repeated string selector = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSelector($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->selector = $arr;

        return $this;
    }

    /**
     * Defines actor to whom the constraint is applied (used by Task V2)
     *
     * Generated from protobuf field <code>string actor = 2;</code>
     * @return string
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Defines actor to whom the constraint is applied (used by Task V2)
     *
     * Generated from protobuf field <code>string actor = 2;</code>
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
     * Real-world time limit in milliseconds.
     *
     * Generated from protobuf field <code>uint32 wall_time_limit = 10;</code>
     * @return int
     */
    public function getWallTimeLimit()
    {
        return $this->wall_time_limit;
    }

    /**
     * Real-world time limit in milliseconds.
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
     * CPU time limit in milliseconds.
     *
     * Generated from protobuf field <code>uint32 cpu_time_limit = 11;</code>
     * @return int
     */
    public function getCpuTimeLimit()
    {
        return $this->cpu_time_limit;
    }

    /**
     * CPU time limit in milliseconds.
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
     * Memory limit in bytes.
     *
     * Generated from protobuf field <code>uint64 memory_limit = 12;</code>
     * @return int|string
     */
    public function getMemoryLimit()
    {
        return $this->memory_limit;
    }

    /**
     * Memory limit in bytes.
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
     * File size limit in bytes.
     *
     * Generated from protobuf field <code>uint64 file_size_limit = 13;</code>
     * @return int|string
     */
    public function getFileSizeLimit()
    {
        return $this->file_size_limit;
    }

    /**
     * File size limit in bytes.
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

