<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/atlas/problem.proto

namespace Eolymp\Atlas\Problem;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.Problem.Constraints</code>
 */
class Constraints extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 time_limit_min = 60;</code>
     */
    protected $time_limit_min = 0;
    /**
     * Generated from protobuf field <code>uint32 time_limit_max = 61;</code>
     */
    protected $time_limit_max = 0;
    /**
     * Generated from protobuf field <code>uint32 cpu_limit_min = 62;</code>
     */
    protected $cpu_limit_min = 0;
    /**
     * Generated from protobuf field <code>uint32 cpu_limit_max = 63;</code>
     */
    protected $cpu_limit_max = 0;
    /**
     * Generated from protobuf field <code>uint64 memory_limit_min = 64;</code>
     */
    protected $memory_limit_min = 0;
    /**
     * Generated from protobuf field <code>uint64 memory_limit_max = 65;</code>
     */
    protected $memory_limit_max = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $time_limit_min
     *     @type int $time_limit_max
     *     @type int $cpu_limit_min
     *     @type int $cpu_limit_max
     *     @type int|string $memory_limit_min
     *     @type int|string $memory_limit_max
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\Problem::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 time_limit_min = 60;</code>
     * @return int
     */
    public function getTimeLimitMin()
    {
        return $this->time_limit_min;
    }

    /**
     * Generated from protobuf field <code>uint32 time_limit_min = 60;</code>
     * @param int $var
     * @return $this
     */
    public function setTimeLimitMin($var)
    {
        GPBUtil::checkUint32($var);
        $this->time_limit_min = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 time_limit_max = 61;</code>
     * @return int
     */
    public function getTimeLimitMax()
    {
        return $this->time_limit_max;
    }

    /**
     * Generated from protobuf field <code>uint32 time_limit_max = 61;</code>
     * @param int $var
     * @return $this
     */
    public function setTimeLimitMax($var)
    {
        GPBUtil::checkUint32($var);
        $this->time_limit_max = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 cpu_limit_min = 62;</code>
     * @return int
     */
    public function getCpuLimitMin()
    {
        return $this->cpu_limit_min;
    }

    /**
     * Generated from protobuf field <code>uint32 cpu_limit_min = 62;</code>
     * @param int $var
     * @return $this
     */
    public function setCpuLimitMin($var)
    {
        GPBUtil::checkUint32($var);
        $this->cpu_limit_min = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 cpu_limit_max = 63;</code>
     * @return int
     */
    public function getCpuLimitMax()
    {
        return $this->cpu_limit_max;
    }

    /**
     * Generated from protobuf field <code>uint32 cpu_limit_max = 63;</code>
     * @param int $var
     * @return $this
     */
    public function setCpuLimitMax($var)
    {
        GPBUtil::checkUint32($var);
        $this->cpu_limit_max = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 memory_limit_min = 64;</code>
     * @return int|string
     */
    public function getMemoryLimitMin()
    {
        return $this->memory_limit_min;
    }

    /**
     * Generated from protobuf field <code>uint64 memory_limit_min = 64;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMemoryLimitMin($var)
    {
        GPBUtil::checkUint64($var);
        $this->memory_limit_min = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 memory_limit_max = 65;</code>
     * @return int|string
     */
    public function getMemoryLimitMax()
    {
        return $this->memory_limit_max;
    }

    /**
     * Generated from protobuf field <code>uint64 memory_limit_max = 65;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMemoryLimitMax($var)
    {
        GPBUtil::checkUint64($var);
        $this->memory_limit_max = $var;

        return $this;
    }

}

