<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/executor.proto

namespace Eolymp\Executor;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.executor.DescribeRuntimeOutput</code>
 */
class DescribeRuntimeOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.executor.Runtime runtime = 1;</code>
     */
    protected $runtime = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Executor\Runtime $runtime
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Executor\Executor::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.executor.Runtime runtime = 1;</code>
     * @return \Eolymp\Executor\Runtime|null
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    public function hasRuntime()
    {
        return isset($this->runtime);
    }

    public function clearRuntime()
    {
        unset($this->runtime);
    }

    /**
     * Generated from protobuf field <code>.eolymp.executor.Runtime runtime = 1;</code>
     * @param \Eolymp\Executor\Runtime $var
     * @return $this
     */
    public function setRuntime($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Executor\Runtime::class);
        $this->runtime = $var;

        return $this;
    }

}

