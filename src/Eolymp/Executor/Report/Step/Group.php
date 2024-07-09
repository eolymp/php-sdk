<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/deprecated_report.proto

namespace Eolymp\Executor\Report\Step;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.executor.Report.Step.Group</code>
 */
class Group extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .eolymp.executor.Report.Step.Execute processes = 1;</code>
     */
    private $processes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Eolymp\Executor\Report\Step\Execute>|\Google\Protobuf\Internal\RepeatedField $processes
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Executor\DeprecatedReport::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.executor.Report.Step.Execute processes = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProcesses()
    {
        return $this->processes;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.executor.Report.Step.Execute processes = 1;</code>
     * @param array<\Eolymp\Executor\Report\Step\Execute>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProcesses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Executor\Report\Step\Execute::class);
        $this->processes = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Group::class, \Eolymp\Executor\Report_Step_Group::class);

