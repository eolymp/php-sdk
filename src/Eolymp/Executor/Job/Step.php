<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/job.proto

namespace Eolymp\Executor\Job;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Step defines an action within run
 *
 * Generated from protobuf message <code>eolymp.executor.Job.Step</code>
 */
class Step extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * run this step even if one of the previous steps have failed
     *
     * Generated from protobuf field <code>bool even_on_failure = 100;</code>
     */
    protected $even_on_failure = false;
    /**
     * run this step only if one of the previous steps have failed
     *
     * Generated from protobuf field <code>bool only_on_failure = 101;</code>
     */
    protected $only_on_failure = false;
    protected $action;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type bool $even_on_failure
     *           run this step even if one of the previous steps have failed
     *     @type bool $only_on_failure
     *           run this step only if one of the previous steps have failed
     *     @type \Eolymp\Executor\Job\Step\Write $write
     *     @type \Eolymp\Executor\Job\Step\Copy $copy
     *     @type \Eolymp\Executor\Job\Step\Execute $execute
     *     @type \Eolymp\Executor\Job\Step\Upload $upload
     *     @type \Eolymp\Executor\Job\Step\Group $group
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Executor\Job::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * run this step even if one of the previous steps have failed
     *
     * Generated from protobuf field <code>bool even_on_failure = 100;</code>
     * @return bool
     */
    public function getEvenOnFailure()
    {
        return $this->even_on_failure;
    }

    /**
     * run this step even if one of the previous steps have failed
     *
     * Generated from protobuf field <code>bool even_on_failure = 100;</code>
     * @param bool $var
     * @return $this
     */
    public function setEvenOnFailure($var)
    {
        GPBUtil::checkBool($var);
        $this->even_on_failure = $var;

        return $this;
    }

    /**
     * run this step only if one of the previous steps have failed
     *
     * Generated from protobuf field <code>bool only_on_failure = 101;</code>
     * @return bool
     */
    public function getOnlyOnFailure()
    {
        return $this->only_on_failure;
    }

    /**
     * run this step only if one of the previous steps have failed
     *
     * Generated from protobuf field <code>bool only_on_failure = 101;</code>
     * @param bool $var
     * @return $this
     */
    public function setOnlyOnFailure($var)
    {
        GPBUtil::checkBool($var);
        $this->only_on_failure = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.executor.Job.Step.Write write = 10;</code>
     * @return \Eolymp\Executor\Job\Step\Write|null
     */
    public function getWrite()
    {
        return $this->readOneof(10);
    }

    public function hasWrite()
    {
        return $this->hasOneof(10);
    }

    /**
     * Generated from protobuf field <code>.eolymp.executor.Job.Step.Write write = 10;</code>
     * @param \Eolymp\Executor\Job\Step\Write $var
     * @return $this
     */
    public function setWrite($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Executor\Job\Step\Write::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.executor.Job.Step.Copy copy = 11;</code>
     * @return \Eolymp\Executor\Job\Step\Copy|null
     */
    public function getCopy()
    {
        return $this->readOneof(11);
    }

    public function hasCopy()
    {
        return $this->hasOneof(11);
    }

    /**
     * Generated from protobuf field <code>.eolymp.executor.Job.Step.Copy copy = 11;</code>
     * @param \Eolymp\Executor\Job\Step\Copy $var
     * @return $this
     */
    public function setCopy($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Executor\Job\Step\Copy::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.executor.Job.Step.Execute execute = 12;</code>
     * @return \Eolymp\Executor\Job\Step\Execute|null
     */
    public function getExecute()
    {
        return $this->readOneof(12);
    }

    public function hasExecute()
    {
        return $this->hasOneof(12);
    }

    /**
     * Generated from protobuf field <code>.eolymp.executor.Job.Step.Execute execute = 12;</code>
     * @param \Eolymp\Executor\Job\Step\Execute $var
     * @return $this
     */
    public function setExecute($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Executor\Job\Step\Execute::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.executor.Job.Step.Upload upload = 13;</code>
     * @return \Eolymp\Executor\Job\Step\Upload|null
     */
    public function getUpload()
    {
        return $this->readOneof(13);
    }

    public function hasUpload()
    {
        return $this->hasOneof(13);
    }

    /**
     * Generated from protobuf field <code>.eolymp.executor.Job.Step.Upload upload = 13;</code>
     * @param \Eolymp\Executor\Job\Step\Upload $var
     * @return $this
     */
    public function setUpload($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Executor\Job\Step\Upload::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.executor.Job.Step.Group group = 14;</code>
     * @return \Eolymp\Executor\Job\Step\Group|null
     */
    public function getGroup()
    {
        return $this->readOneof(14);
    }

    public function hasGroup()
    {
        return $this->hasOneof(14);
    }

    /**
     * Generated from protobuf field <code>.eolymp.executor.Job.Step.Group group = 14;</code>
     * @param \Eolymp\Executor\Job\Step\Group $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Executor\Job\Step\Group::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->whichOneof("action");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Step::class, \Eolymp\Executor\Job_Step::class);

