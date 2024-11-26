<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/worker/executor_service.proto

namespace Eolymp\Worker;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.worker.ExecuteJobUpdate</code>
 */
class ExecuteJobUpdate extends \Google\Protobuf\Internal\Message
{
    protected $update;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Worker\ExecuteJobUpdate\ProgressUpdate $progress
     *     @type \Eolymp\Worker\ExecuteJobUpdate\OutputUpdate $outputs
     *     @type \Eolymp\Worker\ExecuteJobUpdate\LoggingUpdate $logs
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Worker\ExecutorService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.worker.ExecuteJobUpdate.ProgressUpdate progress = 1;</code>
     * @return \Eolymp\Worker\ExecuteJobUpdate\ProgressUpdate|null
     */
    public function getProgress()
    {
        return $this->readOneof(1);
    }

    public function hasProgress()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.eolymp.worker.ExecuteJobUpdate.ProgressUpdate progress = 1;</code>
     * @param \Eolymp\Worker\ExecuteJobUpdate\ProgressUpdate $var
     * @return $this
     */
    public function setProgress($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Worker\ExecuteJobUpdate\ProgressUpdate::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.worker.ExecuteJobUpdate.OutputUpdate outputs = 2;</code>
     * @return \Eolymp\Worker\ExecuteJobUpdate\OutputUpdate|null
     */
    public function getOutputs()
    {
        return $this->readOneof(2);
    }

    public function hasOutputs()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.eolymp.worker.ExecuteJobUpdate.OutputUpdate outputs = 2;</code>
     * @param \Eolymp\Worker\ExecuteJobUpdate\OutputUpdate $var
     * @return $this
     */
    public function setOutputs($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Worker\ExecuteJobUpdate\OutputUpdate::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.worker.ExecuteJobUpdate.LoggingUpdate logs = 3;</code>
     * @return \Eolymp\Worker\ExecuteJobUpdate\LoggingUpdate|null
     */
    public function getLogs()
    {
        return $this->readOneof(3);
    }

    public function hasLogs()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.eolymp.worker.ExecuteJobUpdate.LoggingUpdate logs = 3;</code>
     * @param \Eolymp\Worker\ExecuteJobUpdate\LoggingUpdate $var
     * @return $this
     */
    public function setLogs($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Worker\ExecuteJobUpdate\LoggingUpdate::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdate()
    {
        return $this->whichOneof("update");
    }

}

