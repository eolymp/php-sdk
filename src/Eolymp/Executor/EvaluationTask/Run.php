<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/evaluation_task.proto

namespace Eolymp\Executor\EvaluationTask;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Run defines a single execution of the task.
 *
 * Generated from protobuf message <code>eolymp.executor.EvaluationTask.Run</code>
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
     * A number of points awarded for passing this run.
     *
     * Generated from protobuf field <code>float cost = 4;</code>
     */
    protected $cost = 0.0;
    /**
     * Additional environment variables used during run
     *
     * Generated from protobuf field <code>map<string, string> env = 5;</code>
     */
    private $env;
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
     *     @type float $cost
     *           A number of points awarded for passing this run.
     *     @type array|\Google\Protobuf\Internal\MapField $env
     *           Additional environment variables used during run
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $labels
     *           Labels used to match constraints and preconditions.
     *     @type string $input_url
     *           download input via URL
     *     @type string $input_content
     *           use input from this field (up to 1KB)
     *     @type \Eolymp\Executor\EvaluationTask\Generator $input_generator
     *           generate input using script
     *     @type string $answer_url
     *           download answer via URL
     *     @type string $answer_content
     *           use answer from this field (up to 1KB)
     *     @type \Eolymp\Executor\EvaluationTask\Generator $answer_generator
     *           generate input using script
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Executor\EvaluationTask::initOnce();
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
     * A number of points awarded for passing this run.
     *
     * Generated from protobuf field <code>float cost = 4;</code>
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * A number of points awarded for passing this run.
     *
     * Generated from protobuf field <code>float cost = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setCost($var)
    {
        GPBUtil::checkFloat($var);
        $this->cost = $var;

        return $this;
    }

    /**
     * Additional environment variables used during run
     *
     * Generated from protobuf field <code>map<string, string> env = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getEnv()
    {
        return $this->env;
    }

    /**
     * Additional environment variables used during run
     *
     * Generated from protobuf field <code>map<string, string> env = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setEnv($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->env = $arr;

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
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * download input via URL
     *
     * Generated from protobuf field <code>string input_url = 12;</code>
     * @return string
     */
    public function getInputUrl()
    {
        return $this->readOneof(12);
    }

    public function hasInputUrl()
    {
        return $this->hasOneof(12);
    }

    /**
     * download input via URL
     *
     * Generated from protobuf field <code>string input_url = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setInputUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(12, $var);

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

    public function hasInputContent()
    {
        return $this->hasOneof(11);
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
     * generate input using script
     *
     * Generated from protobuf field <code>.eolymp.executor.EvaluationTask.Generator input_generator = 13;</code>
     * @return \Eolymp\Executor\EvaluationTask\Generator|null
     */
    public function getInputGenerator()
    {
        return $this->readOneof(13);
    }

    public function hasInputGenerator()
    {
        return $this->hasOneof(13);
    }

    /**
     * generate input using script
     *
     * Generated from protobuf field <code>.eolymp.executor.EvaluationTask.Generator input_generator = 13;</code>
     * @param \Eolymp\Executor\EvaluationTask\Generator $var
     * @return $this
     */
    public function setInputGenerator($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Executor\EvaluationTask\Generator::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * download answer via URL
     *
     * Generated from protobuf field <code>string answer_url = 22;</code>
     * @return string
     */
    public function getAnswerUrl()
    {
        return $this->readOneof(22);
    }

    public function hasAnswerUrl()
    {
        return $this->hasOneof(22);
    }

    /**
     * download answer via URL
     *
     * Generated from protobuf field <code>string answer_url = 22;</code>
     * @param string $var
     * @return $this
     */
    public function setAnswerUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(22, $var);

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

    public function hasAnswerContent()
    {
        return $this->hasOneof(21);
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
     * generate input using script
     *
     * Generated from protobuf field <code>.eolymp.executor.EvaluationTask.Generator answer_generator = 23;</code>
     * @return \Eolymp\Executor\EvaluationTask\Generator|null
     */
    public function getAnswerGenerator()
    {
        return $this->readOneof(23);
    }

    public function hasAnswerGenerator()
    {
        return $this->hasOneof(23);
    }

    /**
     * generate input using script
     *
     * Generated from protobuf field <code>.eolymp.executor.EvaluationTask.Generator answer_generator = 23;</code>
     * @param \Eolymp\Executor\EvaluationTask\Generator $var
     * @return $this
     */
    public function setAnswerGenerator($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Executor\EvaluationTask\Generator::class);
        $this->writeOneof(23, $var);

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
class_alias(Run::class, \Eolymp\Executor\EvaluationTask_Run::class);

