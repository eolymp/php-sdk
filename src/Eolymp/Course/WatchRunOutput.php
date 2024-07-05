<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/problem_service.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.WatchRunOutput</code>
 */
class WatchRunOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.playground.Run run = 1;</code>
     */
    protected $run = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Playground\Run $run
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\ProblemService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.playground.Run run = 1;</code>
     * @return \Eolymp\Playground\Run|null
     */
    public function getRun()
    {
        return $this->run;
    }

    public function hasRun()
    {
        return isset($this->run);
    }

    public function clearRun()
    {
        unset($this->run);
    }

    /**
     * Generated from protobuf field <code>.eolymp.playground.Run run = 1;</code>
     * @param \Eolymp\Playground\Run $var
     * @return $this
     */
    public function setRun($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Playground\Run::class);
        $this->run = $var;

        return $this;
    }

}

