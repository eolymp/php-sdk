<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/worker/worker_service.proto

namespace Eolymp\Worker;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.worker.DescribeJobOutput</code>
 */
class DescribeJobOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.worker.Job job = 1;</code>
     */
    protected $job = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Worker\Job $job
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Worker\WorkerService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.worker.Job job = 1;</code>
     * @return \Eolymp\Worker\Job|null
     */
    public function getJob()
    {
        return $this->job;
    }

    public function hasJob()
    {
        return isset($this->job);
    }

    public function clearJob()
    {
        unset($this->job);
    }

    /**
     * Generated from protobuf field <code>.eolymp.worker.Job job = 1;</code>
     * @param \Eolymp\Worker\Job $var
     * @return $this
     */
    public function setJob($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Worker\Job::class);
        $this->job = $var;

        return $this;
    }

}

