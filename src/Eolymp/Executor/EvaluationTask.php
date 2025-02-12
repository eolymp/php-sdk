<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/evaluation_task.proto

namespace Eolymp\Executor;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Task represents task to be executed by judge agent.
 *
 * Generated from protobuf message <code>eolymp.executor.EvaluationTask</code>
 */
class EvaluationTask extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string task_id = 1;</code>
     */
    protected $task_id = '';
    /**
     * Generated from protobuf field <code>string reference = 2;</code>
     */
    protected $reference = '';
    /**
     * Generated from protobuf field <code>string origin = 3;</code>
     */
    protected $origin = '';
    /**
     * Generated from protobuf field <code>map<string, string> metadata = 5;</code>
     */
    private $metadata;
    /**
     * Task priority. Allowed values 1-9. Messages with higher priority are precessed first.
     * Currently not supported.
     *
     * Generated from protobuf field <code>uint32 priority = 4;</code>
     */
    protected $priority = 0;
    /**
     * Combine stderr and stdout when capturing output. Checker will use combined output as answer. Status will capture
     * both stderr and stdout in output field while stderr will be empty.
     *
     * Generated from protobuf field <code>bool redirect_stderr_to_stdout = 13;</code>
     */
    protected $redirect_stderr_to_stdout = false;
    /**
     * The agent will normalize execution time of each run within deviation range.
     * Each agent calculates a time coefficient (a multiplier) based on the evaluation time of benchmark solution. This coefficient is used to normalize execution time of each run.
     * This parameter allows to limit the coefficient deviation, for example 0.5 means the coefficient will be limited to range of 0.5-1.5, 0 means the coefficient will be ignored and actual execution time will be used.
     *
     * Generated from protobuf field <code>float time_coefficient_deviation = 14;</code>
     */
    protected $time_coefficient_deviation = 0.0;
    /**
     * Number of times solution will be executed, after each run (except last) output.txt will be renamed to input.txt.
     *
     * Generated from protobuf field <code>uint32 run_count = 16;</code>
     */
    protected $run_count = 0;
    /**
     * Precondition define conditions when each run should be executed, if runs does not satisfy preconditions it will be skipped.
     *
     * Generated from protobuf field <code>repeated .eolymp.executor.EvaluationTask.Precondition preconditions = 40;</code>
     */
    private $preconditions;
    /**
     * Execution constraints, define limits imposed on each run.
     *
     * Generated from protobuf field <code>repeated .eolymp.executor.EvaluationTask.Constraint constraints = 20;</code>
     */
    private $constraints;
    /**
     * Submission being evaluated.
     *
     * Generated from protobuf field <code>.eolymp.executor.Script submission = 12;</code>
     */
    protected $submission = null;
    /**
     * Interactor configuration
     *
     * Generated from protobuf field <code>.eolymp.executor.Script interactor = 26;</code>
     */
    protected $interactor = null;
    /**
     * Checker configuration.
     *
     * Generated from protobuf field <code>.eolymp.executor.Checker checker = 24;</code>
     */
    protected $checker = null;
    /**
     * Additional scripts
     *
     * Generated from protobuf field <code>repeated .eolymp.executor.Script scripts = 60;</code>
     */
    private $scripts;
    /**
     * Run configurations.
     *
     * Generated from protobuf field <code>repeated .eolymp.executor.EvaluationTask.Run runs = 30;</code>
     */
    private $runs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $task_id
     *     @type string $reference
     *     @type string $origin
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *     @type int $priority
     *           Task priority. Allowed values 1-9. Messages with higher priority are precessed first.
     *           Currently not supported.
     *     @type bool $redirect_stderr_to_stdout
     *           Combine stderr and stdout when capturing output. Checker will use combined output as answer. Status will capture
     *           both stderr and stdout in output field while stderr will be empty.
     *     @type float $time_coefficient_deviation
     *           The agent will normalize execution time of each run within deviation range.
     *           Each agent calculates a time coefficient (a multiplier) based on the evaluation time of benchmark solution. This coefficient is used to normalize execution time of each run.
     *           This parameter allows to limit the coefficient deviation, for example 0.5 means the coefficient will be limited to range of 0.5-1.5, 0 means the coefficient will be ignored and actual execution time will be used.
     *     @type int $run_count
     *           Number of times solution will be executed, after each run (except last) output.txt will be renamed to input.txt.
     *     @type array<\Eolymp\Executor\EvaluationTask\Precondition>|\Google\Protobuf\Internal\RepeatedField $preconditions
     *           Precondition define conditions when each run should be executed, if runs does not satisfy preconditions it will be skipped.
     *     @type array<\Eolymp\Executor\EvaluationTask\Constraint>|\Google\Protobuf\Internal\RepeatedField $constraints
     *           Execution constraints, define limits imposed on each run.
     *     @type \Eolymp\Executor\Script $submission
     *           Submission being evaluated.
     *     @type \Eolymp\Executor\Script $interactor
     *           Interactor configuration
     *     @type \Eolymp\Executor\Checker $checker
     *           Checker configuration.
     *     @type array<\Eolymp\Executor\Script>|\Google\Protobuf\Internal\RepeatedField $scripts
     *           Additional scripts
     *     @type array<\Eolymp\Executor\EvaluationTask\Run>|\Google\Protobuf\Internal\RepeatedField $runs
     *           Run configurations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Executor\EvaluationTask::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string task_id = 1;</code>
     * @return string
     */
    public function getTaskId()
    {
        return $this->task_id;
    }

    /**
     * Generated from protobuf field <code>string task_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskId($var)
    {
        GPBUtil::checkString($var, True);
        $this->task_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string reference = 2;</code>
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Generated from protobuf field <code>string reference = 2;</code>
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
     * Generated from protobuf field <code>string origin = 3;</code>
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Generated from protobuf field <code>string origin = 3;</code>
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
     * Generated from protobuf field <code>map<string, string> metadata = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Generated from protobuf field <code>map<string, string> metadata = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;

        return $this;
    }

    /**
     * Task priority. Allowed values 1-9. Messages with higher priority are precessed first.
     * Currently not supported.
     *
     * Generated from protobuf field <code>uint32 priority = 4;</code>
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Task priority. Allowed values 1-9. Messages with higher priority are precessed first.
     * Currently not supported.
     *
     * Generated from protobuf field <code>uint32 priority = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkUint32($var);
        $this->priority = $var;

        return $this;
    }

    /**
     * Combine stderr and stdout when capturing output. Checker will use combined output as answer. Status will capture
     * both stderr and stdout in output field while stderr will be empty.
     *
     * Generated from protobuf field <code>bool redirect_stderr_to_stdout = 13;</code>
     * @return bool
     */
    public function getRedirectStderrToStdout()
    {
        return $this->redirect_stderr_to_stdout;
    }

    /**
     * Combine stderr and stdout when capturing output. Checker will use combined output as answer. Status will capture
     * both stderr and stdout in output field while stderr will be empty.
     *
     * Generated from protobuf field <code>bool redirect_stderr_to_stdout = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setRedirectStderrToStdout($var)
    {
        GPBUtil::checkBool($var);
        $this->redirect_stderr_to_stdout = $var;

        return $this;
    }

    /**
     * The agent will normalize execution time of each run within deviation range.
     * Each agent calculates a time coefficient (a multiplier) based on the evaluation time of benchmark solution. This coefficient is used to normalize execution time of each run.
     * This parameter allows to limit the coefficient deviation, for example 0.5 means the coefficient will be limited to range of 0.5-1.5, 0 means the coefficient will be ignored and actual execution time will be used.
     *
     * Generated from protobuf field <code>float time_coefficient_deviation = 14;</code>
     * @return float
     */
    public function getTimeCoefficientDeviation()
    {
        return $this->time_coefficient_deviation;
    }

    /**
     * The agent will normalize execution time of each run within deviation range.
     * Each agent calculates a time coefficient (a multiplier) based on the evaluation time of benchmark solution. This coefficient is used to normalize execution time of each run.
     * This parameter allows to limit the coefficient deviation, for example 0.5 means the coefficient will be limited to range of 0.5-1.5, 0 means the coefficient will be ignored and actual execution time will be used.
     *
     * Generated from protobuf field <code>float time_coefficient_deviation = 14;</code>
     * @param float $var
     * @return $this
     */
    public function setTimeCoefficientDeviation($var)
    {
        GPBUtil::checkFloat($var);
        $this->time_coefficient_deviation = $var;

        return $this;
    }

    /**
     * Number of times solution will be executed, after each run (except last) output.txt will be renamed to input.txt.
     *
     * Generated from protobuf field <code>uint32 run_count = 16;</code>
     * @return int
     */
    public function getRunCount()
    {
        return $this->run_count;
    }

    /**
     * Number of times solution will be executed, after each run (except last) output.txt will be renamed to input.txt.
     *
     * Generated from protobuf field <code>uint32 run_count = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setRunCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->run_count = $var;

        return $this;
    }

    /**
     * Precondition define conditions when each run should be executed, if runs does not satisfy preconditions it will be skipped.
     *
     * Generated from protobuf field <code>repeated .eolymp.executor.EvaluationTask.Precondition preconditions = 40;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPreconditions()
    {
        return $this->preconditions;
    }

    /**
     * Precondition define conditions when each run should be executed, if runs does not satisfy preconditions it will be skipped.
     *
     * Generated from protobuf field <code>repeated .eolymp.executor.EvaluationTask.Precondition preconditions = 40;</code>
     * @param array<\Eolymp\Executor\EvaluationTask\Precondition>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPreconditions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Executor\EvaluationTask\Precondition::class);
        $this->preconditions = $arr;

        return $this;
    }

    /**
     * Execution constraints, define limits imposed on each run.
     *
     * Generated from protobuf field <code>repeated .eolymp.executor.EvaluationTask.Constraint constraints = 20;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConstraints()
    {
        return $this->constraints;
    }

    /**
     * Execution constraints, define limits imposed on each run.
     *
     * Generated from protobuf field <code>repeated .eolymp.executor.EvaluationTask.Constraint constraints = 20;</code>
     * @param array<\Eolymp\Executor\EvaluationTask\Constraint>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConstraints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Executor\EvaluationTask\Constraint::class);
        $this->constraints = $arr;

        return $this;
    }

    /**
     * Submission being evaluated.
     *
     * Generated from protobuf field <code>.eolymp.executor.Script submission = 12;</code>
     * @return \Eolymp\Executor\Script|null
     */
    public function getSubmission()
    {
        return $this->submission;
    }

    public function hasSubmission()
    {
        return isset($this->submission);
    }

    public function clearSubmission()
    {
        unset($this->submission);
    }

    /**
     * Submission being evaluated.
     *
     * Generated from protobuf field <code>.eolymp.executor.Script submission = 12;</code>
     * @param \Eolymp\Executor\Script $var
     * @return $this
     */
    public function setSubmission($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Executor\Script::class);
        $this->submission = $var;

        return $this;
    }

    /**
     * Interactor configuration
     *
     * Generated from protobuf field <code>.eolymp.executor.Script interactor = 26;</code>
     * @return \Eolymp\Executor\Script|null
     */
    public function getInteractor()
    {
        return $this->interactor;
    }

    public function hasInteractor()
    {
        return isset($this->interactor);
    }

    public function clearInteractor()
    {
        unset($this->interactor);
    }

    /**
     * Interactor configuration
     *
     * Generated from protobuf field <code>.eolymp.executor.Script interactor = 26;</code>
     * @param \Eolymp\Executor\Script $var
     * @return $this
     */
    public function setInteractor($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Executor\Script::class);
        $this->interactor = $var;

        return $this;
    }

    /**
     * Checker configuration.
     *
     * Generated from protobuf field <code>.eolymp.executor.Checker checker = 24;</code>
     * @return \Eolymp\Executor\Checker|null
     */
    public function getChecker()
    {
        return $this->checker;
    }

    public function hasChecker()
    {
        return isset($this->checker);
    }

    public function clearChecker()
    {
        unset($this->checker);
    }

    /**
     * Checker configuration.
     *
     * Generated from protobuf field <code>.eolymp.executor.Checker checker = 24;</code>
     * @param \Eolymp\Executor\Checker $var
     * @return $this
     */
    public function setChecker($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Executor\Checker::class);
        $this->checker = $var;

        return $this;
    }

    /**
     * Additional scripts
     *
     * Generated from protobuf field <code>repeated .eolymp.executor.Script scripts = 60;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScripts()
    {
        return $this->scripts;
    }

    /**
     * Additional scripts
     *
     * Generated from protobuf field <code>repeated .eolymp.executor.Script scripts = 60;</code>
     * @param array<\Eolymp\Executor\Script>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScripts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Executor\Script::class);
        $this->scripts = $arr;

        return $this;
    }

    /**
     * Run configurations.
     *
     * Generated from protobuf field <code>repeated .eolymp.executor.EvaluationTask.Run runs = 30;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRuns()
    {
        return $this->runs;
    }

    /**
     * Run configurations.
     *
     * Generated from protobuf field <code>repeated .eolymp.executor.EvaluationTask.Run runs = 30;</code>
     * @param array<\Eolymp\Executor\EvaluationTask\Run>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRuns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Executor\EvaluationTask\Run::class);
        $this->runs = $arr;

        return $this;
    }

}

