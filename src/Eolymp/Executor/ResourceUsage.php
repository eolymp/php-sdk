<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/executor/usage.proto

namespace Eolymp\Executor;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.executor.ResourceUsage</code>
 */
class ResourceUsage extends \Google\Protobuf\Internal\Message
{
    /**
     * user CPU time used (in milliseconds)
     *
     * Generated from protobuf field <code>uint32 user_cpu_time = 1;</code>
     */
    protected $user_cpu_time = 0;
    /**
     * system CPU time used (in milliseconds)
     *
     * Generated from protobuf field <code>uint32 system_cpu_time = 2;</code>
     */
    protected $system_cpu_time = 0;
    /**
     * This is the maximum resident set size used (in kilobytes).
     *
     * Generated from protobuf field <code>uint32 max_resident_set_size = 3;</code>
     */
    protected $max_resident_set_size = 0;
    /**
     * The number of page faults serviced without any I/O activity; here I/O activity is avoided by “reclaiming” a page frame from the list of pages awaiting reallocation.
     *
     * Generated from protobuf field <code>uint32 page_reclaims = 4;</code>
     */
    protected $page_reclaims = 0;
    /**
     * The number of page faults serviced that required I/O activity.
     *
     * Generated from protobuf field <code>uint32 page_faults = 5;</code>
     */
    protected $page_faults = 0;
    /**
     * The number of times the filesystem had to perform input.
     *
     * Generated from protobuf field <code>uint32 block_input_operations = 6;</code>
     */
    protected $block_input_operations = 0;
    /**
     * The number of times the filesystem had to perform output.
     *
     * Generated from protobuf field <code>uint32 block_output_operations = 7;</code>
     */
    protected $block_output_operations = 0;
    /**
     * The number of times a context switch resulted due to a process voluntarily giving up the processor before its time slice was completed (usually to await availability of a resource).
     *
     * Generated from protobuf field <code>uint32 voluntary_context_switches = 8;</code>
     */
    protected $voluntary_context_switches = 0;
    /**
     * The number of times a context switch resulted due to a higher priority process becoming runnable or because the current process exceeded its time slice.
     *
     * Generated from protobuf field <code>uint32 involuntary_context_switches = 9;</code>
     */
    protected $involuntary_context_switches = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $user_cpu_time
     *           user CPU time used (in milliseconds)
     *     @type int $system_cpu_time
     *           system CPU time used (in milliseconds)
     *     @type int $max_resident_set_size
     *           This is the maximum resident set size used (in kilobytes).
     *     @type int $page_reclaims
     *           The number of page faults serviced without any I/O activity; here I/O activity is avoided by “reclaiming” a page frame from the list of pages awaiting reallocation.
     *     @type int $page_faults
     *           The number of page faults serviced that required I/O activity.
     *     @type int $block_input_operations
     *           The number of times the filesystem had to perform input.
     *     @type int $block_output_operations
     *           The number of times the filesystem had to perform output.
     *     @type int $voluntary_context_switches
     *           The number of times a context switch resulted due to a process voluntarily giving up the processor before its time slice was completed (usually to await availability of a resource).
     *     @type int $involuntary_context_switches
     *           The number of times a context switch resulted due to a higher priority process becoming runnable or because the current process exceeded its time slice.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Executor\Usage::initOnce();
        parent::__construct($data);
    }

    /**
     * user CPU time used (in milliseconds)
     *
     * Generated from protobuf field <code>uint32 user_cpu_time = 1;</code>
     * @return int
     */
    public function getUserCpuTime()
    {
        return $this->user_cpu_time;
    }

    /**
     * user CPU time used (in milliseconds)
     *
     * Generated from protobuf field <code>uint32 user_cpu_time = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setUserCpuTime($var)
    {
        GPBUtil::checkUint32($var);
        $this->user_cpu_time = $var;

        return $this;
    }

    /**
     * system CPU time used (in milliseconds)
     *
     * Generated from protobuf field <code>uint32 system_cpu_time = 2;</code>
     * @return int
     */
    public function getSystemCpuTime()
    {
        return $this->system_cpu_time;
    }

    /**
     * system CPU time used (in milliseconds)
     *
     * Generated from protobuf field <code>uint32 system_cpu_time = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSystemCpuTime($var)
    {
        GPBUtil::checkUint32($var);
        $this->system_cpu_time = $var;

        return $this;
    }

    /**
     * This is the maximum resident set size used (in kilobytes).
     *
     * Generated from protobuf field <code>uint32 max_resident_set_size = 3;</code>
     * @return int
     */
    public function getMaxResidentSetSize()
    {
        return $this->max_resident_set_size;
    }

    /**
     * This is the maximum resident set size used (in kilobytes).
     *
     * Generated from protobuf field <code>uint32 max_resident_set_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxResidentSetSize($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_resident_set_size = $var;

        return $this;
    }

    /**
     * The number of page faults serviced without any I/O activity; here I/O activity is avoided by “reclaiming” a page frame from the list of pages awaiting reallocation.
     *
     * Generated from protobuf field <code>uint32 page_reclaims = 4;</code>
     * @return int
     */
    public function getPageReclaims()
    {
        return $this->page_reclaims;
    }

    /**
     * The number of page faults serviced without any I/O activity; here I/O activity is avoided by “reclaiming” a page frame from the list of pages awaiting reallocation.
     *
     * Generated from protobuf field <code>uint32 page_reclaims = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPageReclaims($var)
    {
        GPBUtil::checkUint32($var);
        $this->page_reclaims = $var;

        return $this;
    }

    /**
     * The number of page faults serviced that required I/O activity.
     *
     * Generated from protobuf field <code>uint32 page_faults = 5;</code>
     * @return int
     */
    public function getPageFaults()
    {
        return $this->page_faults;
    }

    /**
     * The number of page faults serviced that required I/O activity.
     *
     * Generated from protobuf field <code>uint32 page_faults = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setPageFaults($var)
    {
        GPBUtil::checkUint32($var);
        $this->page_faults = $var;

        return $this;
    }

    /**
     * The number of times the filesystem had to perform input.
     *
     * Generated from protobuf field <code>uint32 block_input_operations = 6;</code>
     * @return int
     */
    public function getBlockInputOperations()
    {
        return $this->block_input_operations;
    }

    /**
     * The number of times the filesystem had to perform input.
     *
     * Generated from protobuf field <code>uint32 block_input_operations = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setBlockInputOperations($var)
    {
        GPBUtil::checkUint32($var);
        $this->block_input_operations = $var;

        return $this;
    }

    /**
     * The number of times the filesystem had to perform output.
     *
     * Generated from protobuf field <code>uint32 block_output_operations = 7;</code>
     * @return int
     */
    public function getBlockOutputOperations()
    {
        return $this->block_output_operations;
    }

    /**
     * The number of times the filesystem had to perform output.
     *
     * Generated from protobuf field <code>uint32 block_output_operations = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setBlockOutputOperations($var)
    {
        GPBUtil::checkUint32($var);
        $this->block_output_operations = $var;

        return $this;
    }

    /**
     * The number of times a context switch resulted due to a process voluntarily giving up the processor before its time slice was completed (usually to await availability of a resource).
     *
     * Generated from protobuf field <code>uint32 voluntary_context_switches = 8;</code>
     * @return int
     */
    public function getVoluntaryContextSwitches()
    {
        return $this->voluntary_context_switches;
    }

    /**
     * The number of times a context switch resulted due to a process voluntarily giving up the processor before its time slice was completed (usually to await availability of a resource).
     *
     * Generated from protobuf field <code>uint32 voluntary_context_switches = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setVoluntaryContextSwitches($var)
    {
        GPBUtil::checkUint32($var);
        $this->voluntary_context_switches = $var;

        return $this;
    }

    /**
     * The number of times a context switch resulted due to a higher priority process becoming runnable or because the current process exceeded its time slice.
     *
     * Generated from protobuf field <code>uint32 involuntary_context_switches = 9;</code>
     * @return int
     */
    public function getInvoluntaryContextSwitches()
    {
        return $this->involuntary_context_switches;
    }

    /**
     * The number of times a context switch resulted due to a higher priority process becoming runnable or because the current process exceeded its time slice.
     *
     * Generated from protobuf field <code>uint32 involuntary_context_switches = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setInvoluntaryContextSwitches($var)
    {
        GPBUtil::checkUint32($var);
        $this->involuntary_context_switches = $var;

        return $this;
    }

}

