<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/generation_task.proto

namespace Eolymp\Executor\GenerationTask;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.executor.GenerationTask.Generator</code>
 */
class Generator extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string arguments = 2;</code>
     */
    private $arguments;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $arguments
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Executor\GenerationTask::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string arguments = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArguments()
    {
        return $this->arguments;
    }

    /**
     * Generated from protobuf field <code>repeated string arguments = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArguments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->arguments = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Generator::class, \Eolymp\Executor\GenerationTask_Generator::class);

