<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/task.proto

namespace Eolymp\Executor\Task;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.executor.Task.Run</code>
 */
class Run extends \Google\Protobuf\Internal\Message
{
    /**
     * Run reference.
     *
     * Generated from protobuf field <code>string reference = 1;</code>
     */
    protected $reference = '';
    /**
     * Index defines order in which runs are executed.
     *
     * Generated from protobuf field <code>uint32 index = 2;</code>
     */
    protected $index = 0;
    /**
     * Use debugging (report content of stdout, stderr and exit code).
     *
     * Generated from protobuf field <code>bool debug = 3;</code>
     */
    protected $debug = false;
    /**
     * Labels used to match constraints and preconditions.
     *
     * Generated from protobuf field <code>repeated string labels = 30;</code>
     */
    private $labels;
    protected $input;
    protected $answer;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $reference
     *           Run reference.
     *     @type int $index
     *           Index defines order in which runs are executed.
     *     @type bool $debug
     *           Use debugging (report content of stdout, stderr and exit code).
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $labels
     *           Labels used to match constraints and preconditions.
     *     @type string $input_object_id
     *           download input from object storage
     *     @type string $input_content
     *           use input from this field (up to 1KB)
     *     @type string $answer_object_id
     *           download answer from object storage
     *     @type string $answer_content
     *           use answer from this field (up to 1KB)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Executor\Task::initOnce();
        parent::__construct($data);
    }

    /**
     * Run reference.
     *
     * Generated from protobuf field <code>string reference = 1;</code>
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Run reference.
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
     * Index defines order in which runs are executed.
     *
     * Generated from protobuf field <code>uint32 index = 2;</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Index defines order in which runs are executed.
     *
     * Generated from protobuf field <code>uint32 index = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Use debugging (report content of stdout, stderr and exit code).
     *
     * Generated from protobuf field <code>bool debug = 3;</code>
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Use debugging (report content of stdout, stderr and exit code).
     *
     * Generated from protobuf field <code>bool debug = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setDebug($var)
    {
        GPBUtil::checkBool($var);
        $this->debug = $var;

        return $this;
    }

    /**
     * Labels used to match constraints and preconditions.
     *
     * Generated from protobuf field <code>repeated string labels = 30;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels used to match constraints and preconditions.
     *
     * Generated from protobuf field <code>repeated string labels = 30;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * download input from object storage
     *
     * Generated from protobuf field <code>string input_object_id = 10;</code>
     * @return string
     */
    public function getInputObjectId()
    {
        return $this->readOneof(10);
    }

    /**
     * download input from object storage
     *
     * Generated from protobuf field <code>string input_object_id = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setInputObjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * use input from this field (up to 1KB)
     *
     * Generated from protobuf field <code>string input_content = 11;</code>
     * @return string
     */
    public function getInputContent()
    {
        return $this->readOneof(11);
    }

    /**
     * use input from this field (up to 1KB)
     *
     * Generated from protobuf field <code>string input_content = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setInputContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * download answer from object storage
     *
     * Generated from protobuf field <code>string answer_object_id = 20;</code>
     * @return string
     */
    public function getAnswerObjectId()
    {
        return $this->readOneof(20);
    }

    /**
     * download answer from object storage
     *
     * Generated from protobuf field <code>string answer_object_id = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setAnswerObjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(20, $var);

        return $this;
    }

    /**
     * use answer from this field (up to 1KB)
     *
     * Generated from protobuf field <code>string answer_content = 21;</code>
     * @return string
     */
    public function getAnswerContent()
    {
        return $this->readOneof(21);
    }

    /**
     * use answer from this field (up to 1KB)
     *
     * Generated from protobuf field <code>string answer_content = 21;</code>
     * @param string $var
     * @return $this
     */
    public function setAnswerContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(21, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getInput()
    {
        return $this->whichOneof("input");
    }

    /**
     * @return string
     */
    public function getAnswer()
    {
        return $this->whichOneof("answer");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Run::class, \Eolymp\Executor\Task_Run::class);

