<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/worker/worker.proto

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
        \GPBMetadata\Eolymp\Worker\Worker::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.worker.Job job = 1;</code>
     * @return \Eolymp\Worker\Job
     */
    public function getJob()
    {
        return $this->job;
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

