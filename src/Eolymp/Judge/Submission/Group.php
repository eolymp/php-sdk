<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/submission.proto

namespace Eolymp\Judge\Submission;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.Submission.Group</code>
 */
class Group extends \Google\Protobuf\Internal\Message
{
    /**
     * group index
     *
     * Generated from protobuf field <code>uint32 index = 1;</code>
     */
    protected $index = 0;
    /**
     * testset associated with the group
     *
     * Generated from protobuf field <code>string testset_id = 2;</code>
     */
    protected $testset_id = '';
    /**
     * status of the group
     *
     * Generated from protobuf field <code>.eolymp.judge.Submission.Group.Status status = 10;</code>
     */
    protected $status = 0;
    /**
     * other group indices which need to pass for this group to run
     *
     * Generated from protobuf field <code>repeated uint32 dependencies = 11;</code>
     */
    private $dependencies;
    /**
     * max possible score for passing all tests in the group
     *
     * Generated from protobuf field <code>float cost = 20;</code>
     */
    protected $cost = 0.0;
    /**
     * sum of earned points within a group
     *
     * Generated from protobuf field <code>float score = 21;</code>
     */
    protected $score = 0.0;
    /**
     * how group is scored
     *
     * Generated from protobuf field <code>.eolymp.judge.Submission.Group.ScoringMode scoring_mode = 22;</code>
     */
    protected $scoring_mode = 0;
    /**
     * how tests are shown to the user
     *
     * Generated from protobuf field <code>.eolymp.judge.FeedbackPolicy feedback_policy = 30;</code>
     */
    protected $feedback_policy = 0;
    /**
     * provides feedback on wall time usage within the group, depending on feedback mode it might be max execution time in group or time usage in the first non-accepted test
     *
     * Generated from protobuf field <code>uint32 wall_time_usage = 41;</code>
     */
    protected $wall_time_usage = 0;
    /**
     * provides feedback on CPU time usage within the group, depending on feedback mode it might be max execution time in group or time usage in the first non-accepted test
     *
     * Generated from protobuf field <code>uint32 cpu_time_usage = 42;</code>
     */
    protected $cpu_time_usage = 0;
    /**
     * provides feedback on memory usage within the group, depending on feedback mode it might be memory usage peak in group or memory usage in the first non-accepted test
     *
     * Generated from protobuf field <code>uint64 memory_usage = 46;</code>
     */
    protected $memory_usage = 0;
    /**
     * runs of the group
     *
     * Generated from protobuf field <code>repeated .eolymp.judge.Submission.Run runs = 100;</code>
     */
    private $runs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $index
     *           group index
     *     @type string $testset_id
     *           testset associated with the group
     *     @type int $status
     *           status of the group
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $dependencies
     *           other group indices which need to pass for this group to run
     *     @type float $cost
     *           max possible score for passing all tests in the group
     *     @type float $score
     *           sum of earned points within a group
     *     @type int $scoring_mode
     *           how group is scored
     *     @type int $feedback_policy
     *           how tests are shown to the user
     *     @type int $wall_time_usage
     *           provides feedback on wall time usage within the group, depending on feedback mode it might be max execution time in group or time usage in the first non-accepted test
     *     @type int $cpu_time_usage
     *           provides feedback on CPU time usage within the group, depending on feedback mode it might be max execution time in group or time usage in the first non-accepted test
     *     @type int|string $memory_usage
     *           provides feedback on memory usage within the group, depending on feedback mode it might be memory usage peak in group or memory usage in the first non-accepted test
     *     @type \Eolymp\Judge\Submission\Run[]|\Google\Protobuf\Internal\RepeatedField $runs
     *           runs of the group
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Submission::initOnce();
        parent::__construct($data);
    }

    /**
     * group index
     *
     * Generated from protobuf field <code>uint32 index = 1;</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * group index
     *
     * Generated from protobuf field <code>uint32 index = 1;</code>
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
     * testset associated with the group
     *
     * Generated from protobuf field <code>string testset_id = 2;</code>
     * @return string
     */
    public function getTestsetId()
    {
        return $this->testset_id;
    }

    /**
     * testset associated with the group
     *
     * Generated from protobuf field <code>string testset_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTestsetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->testset_id = $var;

        return $this;
    }

    /**
     * status of the group
     *
     * Generated from protobuf field <code>.eolymp.judge.Submission.Group.Status status = 10;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * status of the group
     *
     * Generated from protobuf field <code>.eolymp.judge.Submission.Group.Status status = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Judge\Submission_Group_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * other group indices which need to pass for this group to run
     *
     * Generated from protobuf field <code>repeated uint32 dependencies = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDependencies()
    {
        return $this->dependencies;
    }

    /**
     * other group indices which need to pass for this group to run
     *
     * Generated from protobuf field <code>repeated uint32 dependencies = 11;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDependencies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->dependencies = $arr;

        return $this;
    }

    /**
     * max possible score for passing all tests in the group
     *
     * Generated from protobuf field <code>float cost = 20;</code>
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * max possible score for passing all tests in the group
     *
     * Generated from protobuf field <code>float cost = 20;</code>
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
     * sum of earned points within a group
     *
     * Generated from protobuf field <code>float score = 21;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * sum of earned points within a group
     *
     * Generated from protobuf field <code>float score = 21;</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

    /**
     * how group is scored
     *
     * Generated from protobuf field <code>.eolymp.judge.Submission.Group.ScoringMode scoring_mode = 22;</code>
     * @return int
     */
    public function getScoringMode()
    {
        return $this->scoring_mode;
    }

    /**
     * how group is scored
     *
     * Generated from protobuf field <code>.eolymp.judge.Submission.Group.ScoringMode scoring_mode = 22;</code>
     * @param int $var
     * @return $this
     */
    public function setScoringMode($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Judge\Submission_Group_ScoringMode::class);
        $this->scoring_mode = $var;

        return $this;
    }

    /**
     * how tests are shown to the user
     *
     * Generated from protobuf field <code>.eolymp.judge.FeedbackPolicy feedback_policy = 30;</code>
     * @return int
     */
    public function getFeedbackPolicy()
    {
        return $this->feedback_policy;
    }

    /**
     * how tests are shown to the user
     *
     * Generated from protobuf field <code>.eolymp.judge.FeedbackPolicy feedback_policy = 30;</code>
     * @param int $var
     * @return $this
     */
    public function setFeedbackPolicy($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Judge\FeedbackPolicy::class);
        $this->feedback_policy = $var;

        return $this;
    }

    /**
     * provides feedback on wall time usage within the group, depending on feedback mode it might be max execution time in group or time usage in the first non-accepted test
     *
     * Generated from protobuf field <code>uint32 wall_time_usage = 41;</code>
     * @return int
     */
    public function getWallTimeUsage()
    {
        return $this->wall_time_usage;
    }

    /**
     * provides feedback on wall time usage within the group, depending on feedback mode it might be max execution time in group or time usage in the first non-accepted test
     *
     * Generated from protobuf field <code>uint32 wall_time_usage = 41;</code>
     * @param int $var
     * @return $this
     */
    public function setWallTimeUsage($var)
    {
        GPBUtil::checkUint32($var);
        $this->wall_time_usage = $var;

        return $this;
    }

    /**
     * provides feedback on CPU time usage within the group, depending on feedback mode it might be max execution time in group or time usage in the first non-accepted test
     *
     * Generated from protobuf field <code>uint32 cpu_time_usage = 42;</code>
     * @return int
     */
    public function getCpuTimeUsage()
    {
        return $this->cpu_time_usage;
    }

    /**
     * provides feedback on CPU time usage within the group, depending on feedback mode it might be max execution time in group or time usage in the first non-accepted test
     *
     * Generated from protobuf field <code>uint32 cpu_time_usage = 42;</code>
     * @param int $var
     * @return $this
     */
    public function setCpuTimeUsage($var)
    {
        GPBUtil::checkUint32($var);
        $this->cpu_time_usage = $var;

        return $this;
    }

    /**
     * provides feedback on memory usage within the group, depending on feedback mode it might be memory usage peak in group or memory usage in the first non-accepted test
     *
     * Generated from protobuf field <code>uint64 memory_usage = 46;</code>
     * @return int|string
     */
    public function getMemoryUsage()
    {
        return $this->memory_usage;
    }

    /**
     * provides feedback on memory usage within the group, depending on feedback mode it might be memory usage peak in group or memory usage in the first non-accepted test
     *
     * Generated from protobuf field <code>uint64 memory_usage = 46;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMemoryUsage($var)
    {
        GPBUtil::checkUint64($var);
        $this->memory_usage = $var;

        return $this;
    }

    /**
     * runs of the group
     *
     * Generated from protobuf field <code>repeated .eolymp.judge.Submission.Run runs = 100;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRuns()
    {
        return $this->runs;
    }

    /**
     * runs of the group
     *
     * Generated from protobuf field <code>repeated .eolymp.judge.Submission.Run runs = 100;</code>
     * @param \Eolymp\Judge\Submission\Run[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRuns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Judge\Submission\Run::class);
        $this->runs = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Group::class, \Eolymp\Judge\Submission_Group::class);

