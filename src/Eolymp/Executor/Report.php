<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/deprecated_report.proto

namespace Eolymp\Executor;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Status represents results of the executing task.
 * deprecated
 *
 * Generated from protobuf message <code>eolymp.executor.Report</code>
 */
class Report extends \Google\Protobuf\Internal\Message
{
    /**
     * Task reference as set when task was created.
     *
     * Generated from protobuf field <code>string reference = 1;</code>
     */
    protected $reference = '';
    /**
     * Originator of the task (service which created task)
     *
     * Generated from protobuf field <code>string origin = 2;</code>
     */
    protected $origin = '';
    /**
     * Unique identifier of the agent which executed task.
     *
     * Generated from protobuf field <code>string agent_name = 110;</code>
     */
    protected $agent_name = '';
    /**
     * Always increasing report version.
     * Each time agent emits a report it would increase version, so listener can put reports in the right order: process
     * newer and ignore older.
     * In case runs of a single task are distributed among multiple agents, each agent will report version independently,
     * so listener must track versions per run (eg. run #1 last update is v.15, run #2 last update is v.41, if listener
     * receives run #1 v.20 it's newer and should be processed, but run #2 v.20 should be ignored).
     *
     * Generated from protobuf field <code>uint32 version = 100;</code>
     */
    protected $version = 0;
    /**
     * Overall task state
     *
     * Generated from protobuf field <code>.eolymp.executor.Report.State state = 10;</code>
     */
    protected $state = 0;
    /**
     * Actor statuses.
     *
     * Generated from protobuf field <code>repeated .eolymp.executor.Report.Actor actors = 50;</code>
     */
    private $actors;
    /**
     * Runs statuses.
     *
     * Generated from protobuf field <code>repeated .eolymp.executor.Report.Run runs = 40;</code>
     */
    private $runs;
    /**
     * Error message.
     *
     * Generated from protobuf field <code>string error = 20;</code>
     */
    protected $error = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $reference
     *           Task reference as set when task was created.
     *     @type string $origin
     *           Originator of the task (service which created task)
     *     @type string $agent_name
     *           Unique identifier of the agent which executed task.
     *     @type int $version
     *           Always increasing report version.
     *           Each time agent emits a report it would increase version, so listener can put reports in the right order: process
     *           newer and ignore older.
     *           In case runs of a single task are distributed among multiple agents, each agent will report version independently,
     *           so listener must track versions per run (eg. run #1 last update is v.15, run #2 last update is v.41, if listener
     *           receives run #1 v.20 it's newer and should be processed, but run #2 v.20 should be ignored).
     *     @type int $state
     *           Overall task state
     *     @type array<\Eolymp\Executor\Report\Actor>|\Google\Protobuf\Internal\RepeatedField $actors
     *           Actor statuses.
     *     @type array<\Eolymp\Executor\Report\Run>|\Google\Protobuf\Internal\RepeatedField $runs
     *           Runs statuses.
     *     @type string $error
     *           Error message.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Executor\DeprecatedReport::initOnce();
        parent::__construct($data);
    }

    /**
     * Task reference as set when task was created.
     *
     * Generated from protobuf field <code>string reference = 1;</code>
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Task reference as set when task was created.
     *
     * Generated from protobuf field <code>string reference = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setReference($var)
    {
        GPBUtil::checkString($var, True);
        $this->reference = $var;

        return $this;
    }

    /**
     * Originator of the task (service which created task)
     *
     * Generated from protobuf field <code>string origin = 2;</code>
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Originator of the task (service which created task)
     *
     * Generated from protobuf field <code>string origin = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOrigin($var)
    {
        GPBUtil::checkString($var, True);
        $this->origin = $var;

        return $this;
    }

    /**
     * Unique identifier of the agent which executed task.
     *
     * Generated from protobuf field <code>string agent_name = 110;</code>
     * @return string
     */
    public function getAgentName()
    {
        return $this->agent_name;
    }

    /**
     * Unique identifier of the agent which executed task.
     *
     * Generated from protobuf field <code>string agent_name = 110;</code>
     * @param string $var
     * @return $this
     */
    public function setAgentName($var)
    {
        GPBUtil::checkString($var, True);
        $this->agent_name = $var;

        return $this;
    }

    /**
     * Always increasing report version.
     * Each time agent emits a report it would increase version, so listener can put reports in the right order: process
     * newer and ignore older.
     * In case runs of a single task are distributed among multiple agents, each agent will report version independently,
     * so listener must track versions per run (eg. run #1 last update is v.15, run #2 last update is v.41, if listener
     * receives run #1 v.20 it's newer and should be processed, but run #2 v.20 should be ignored).
     *
     * Generated from protobuf field <code>uint32 version = 100;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Always increasing report version.
     * Each time agent emits a report it would increase version, so listener can put reports in the right order: process
     * newer and ignore older.
     * In case runs of a single task are distributed among multiple agents, each agent will report version independently,
     * so listener must track versions per run (eg. run #1 last update is v.15, run #2 last update is v.41, if listener
     * receives run #1 v.20 it's newer and should be processed, but run #2 v.20 should be ignored).
     *
     * Generated from protobuf field <code>uint32 version = 100;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkUint32($var);
        $this->version = $var;

        return $this;
    }

    /**
     * Overall task state
     *
     * Generated from protobuf field <code>.eolymp.executor.Report.State state = 10;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Overall task state
     *
     * Generated from protobuf field <code>.eolymp.executor.Report.State state = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Executor\Report\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Actor statuses.
     *
     * Generated from protobuf field <code>repeated .eolymp.executor.Report.Actor actors = 50;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * Actor statuses.
     *
     * Generated from protobuf field <code>repeated .eolymp.executor.Report.Actor actors = 50;</code>
     * @param array<\Eolymp\Executor\Report\Actor>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Executor\Report\Actor::class);
        $this->actors = $arr;

        return $this;
    }

    /**
     * Runs statuses.
     *
     * Generated from protobuf field <code>repeated .eolymp.executor.Report.Run runs = 40;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRuns()
    {
        return $this->runs;
    }

    /**
     * Runs statuses.
     *
     * Generated from protobuf field <code>repeated .eolymp.executor.Report.Run runs = 40;</code>
     * @param array<\Eolymp\Executor\Report\Run>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRuns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Executor\Report\Run::class);
        $this->runs = $arr;

        return $this;
    }

    /**
     * Error message.
     *
     * Generated from protobuf field <code>string error = 20;</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Error message.
     *
     * Generated from protobuf field <code>string error = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;

        return $this;
    }

}

