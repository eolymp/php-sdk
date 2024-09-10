<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/problem.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.Problem</code>
 */
class Problem extends \Google\Protobuf\Internal\Message
{
    /**
     * globally problem ID
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string url = 6;</code>
     */
    protected $url = '';
    /**
     * problem index within contest
     *
     * Generated from protobuf field <code>uint32 index = 2;</code>
     */
    protected $index = 0;
    /**
     * score for solving problem
     *
     * Generated from protobuf field <code>float score = 3;</code>
     */
    protected $score = 0.0;
    /**
     * ID of the problem in database achieve
     *
     * Generated from protobuf field <code>string base_id = 4;</code>
     */
    protected $base_id = '';
    /**
     * Generated from protobuf field <code>uint32 base_number = 45;</code>
     */
    protected $base_number = 0;
    /**
     * Generated from protobuf field <code>string base_space_id = 40;</code>
     */
    protected $base_space_id = '';
    /**
     * Generated from protobuf field <code>string base_space_name = 41;</code>
     */
    protected $base_space_name = '';
    /**
     * Generated from protobuf field <code>string base_space_key = 42;</code>
     */
    protected $base_space_key = '';
    /**
     * Generated from protobuf field <code>string base_space_home_url = 43;</code>
     */
    protected $base_space_home_url = '';
    /**
     * contest
     *
     * Generated from protobuf field <code>string contest_id = 5;</code>
     */
    protected $contest_id = '';
    /**
     * defines feedback policy for the problem
     *
     * Generated from protobuf field <code>.eolymp.atlas.FeedbackPolicy feedback_policy = 10;</code>
     */
    protected $feedback_policy = 0;
    /**
     * in milliseconds
     *
     * Generated from protobuf field <code>uint32 time_limit = 200;</code>
     */
    protected $time_limit = 0;
    /**
     * in milliseconds
     *
     * Generated from protobuf field <code>uint32 cpu_limit = 204;</code>
     */
    protected $cpu_limit = 0;
    /**
     * in bytes
     *
     * Generated from protobuf field <code>uint64 memory_limit = 201;</code>
     */
    protected $memory_limit = 0;
    /**
     * in bytes
     *
     * Generated from protobuf field <code>uint64 file_size_limit = 202;</code>
     */
    protected $file_size_limit = 0;
    /**
     * in number of submits
     *
     * Generated from protobuf field <code>uint32 submit_limit = 203;</code>
     */
    protected $submit_limit = 0;
    /**
     * problem score is calculated as sum of best score in each testset (best among all submissions)
     *
     * Generated from protobuf field <code>bool score_by_best_testset = 210;</code>
     */
    protected $score_by_best_testset = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           globally problem ID
     *     @type string $url
     *     @type int $index
     *           problem index within contest
     *     @type float $score
     *           score for solving problem
     *     @type string $base_id
     *           ID of the problem in database achieve
     *     @type int $base_number
     *     @type string $base_space_id
     *     @type string $base_space_name
     *     @type string $base_space_key
     *     @type string $base_space_home_url
     *     @type string $contest_id
     *           contest
     *     @type int $feedback_policy
     *           defines feedback policy for the problem
     *     @type int $time_limit
     *           in milliseconds
     *     @type int $cpu_limit
     *           in milliseconds
     *     @type int|string $memory_limit
     *           in bytes
     *     @type int|string $file_size_limit
     *           in bytes
     *     @type int $submit_limit
     *           in number of submits
     *     @type bool $score_by_best_testset
     *           problem score is calculated as sum of best score in each testset (best among all submissions)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Problem::initOnce();
        parent::__construct($data);
    }

    /**
     * globally problem ID
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * globally problem ID
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string url = 6;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>string url = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * problem index within contest
     *
     * Generated from protobuf field <code>uint32 index = 2;</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * problem index within contest
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
     * score for solving problem
     *
     * Generated from protobuf field <code>float score = 3;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * score for solving problem
     *
     * Generated from protobuf field <code>float score = 3;</code>
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
     * ID of the problem in database achieve
     *
     * Generated from protobuf field <code>string base_id = 4;</code>
     * @return string
     */
    public function getBaseId()
    {
        return $this->base_id;
    }

    /**
     * ID of the problem in database achieve
     *
     * Generated from protobuf field <code>string base_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setBaseId($var)
    {
        GPBUtil::checkString($var, True);
        $this->base_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 base_number = 45;</code>
     * @return int
     */
    public function getBaseNumber()
    {
        return $this->base_number;
    }

    /**
     * Generated from protobuf field <code>uint32 base_number = 45;</code>
     * @param int $var
     * @return $this
     */
    public function setBaseNumber($var)
    {
        GPBUtil::checkUint32($var);
        $this->base_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string base_space_id = 40;</code>
     * @return string
     */
    public function getBaseSpaceId()
    {
        return $this->base_space_id;
    }

    /**
     * Generated from protobuf field <code>string base_space_id = 40;</code>
     * @param string $var
     * @return $this
     */
    public function setBaseSpaceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->base_space_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string base_space_name = 41;</code>
     * @return string
     */
    public function getBaseSpaceName()
    {
        return $this->base_space_name;
    }

    /**
     * Generated from protobuf field <code>string base_space_name = 41;</code>
     * @param string $var
     * @return $this
     */
    public function setBaseSpaceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->base_space_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string base_space_key = 42;</code>
     * @return string
     */
    public function getBaseSpaceKey()
    {
        return $this->base_space_key;
    }

    /**
     * Generated from protobuf field <code>string base_space_key = 42;</code>
     * @param string $var
     * @return $this
     */
    public function setBaseSpaceKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->base_space_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string base_space_home_url = 43;</code>
     * @return string
     */
    public function getBaseSpaceHomeUrl()
    {
        return $this->base_space_home_url;
    }

    /**
     * Generated from protobuf field <code>string base_space_home_url = 43;</code>
     * @param string $var
     * @return $this
     */
    public function setBaseSpaceHomeUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->base_space_home_url = $var;

        return $this;
    }

    /**
     * contest
     *
     * Generated from protobuf field <code>string contest_id = 5;</code>
     * @return string
     */
    public function getContestId()
    {
        return $this->contest_id;
    }

    /**
     * contest
     *
     * Generated from protobuf field <code>string contest_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setContestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->contest_id = $var;

        return $this;
    }

    /**
     * defines feedback policy for the problem
     *
     * Generated from protobuf field <code>.eolymp.atlas.FeedbackPolicy feedback_policy = 10;</code>
     * @return int
     */
    public function getFeedbackPolicy()
    {
        return $this->feedback_policy;
    }

    /**
     * defines feedback policy for the problem
     *
     * Generated from protobuf field <code>.eolymp.atlas.FeedbackPolicy feedback_policy = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setFeedbackPolicy($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Atlas\FeedbackPolicy::class);
        $this->feedback_policy = $var;

        return $this;
    }

    /**
     * in milliseconds
     *
     * Generated from protobuf field <code>uint32 time_limit = 200;</code>
     * @return int
     */
    public function getTimeLimit()
    {
        return $this->time_limit;
    }

    /**
     * in milliseconds
     *
     * Generated from protobuf field <code>uint32 time_limit = 200;</code>
     * @param int $var
     * @return $this
     */
    public function setTimeLimit($var)
    {
        GPBUtil::checkUint32($var);
        $this->time_limit = $var;

        return $this;
    }

    /**
     * in milliseconds
     *
     * Generated from protobuf field <code>uint32 cpu_limit = 204;</code>
     * @return int
     */
    public function getCpuLimit()
    {
        return $this->cpu_limit;
    }

    /**
     * in milliseconds
     *
     * Generated from protobuf field <code>uint32 cpu_limit = 204;</code>
     * @param int $var
     * @return $this
     */
    public function setCpuLimit($var)
    {
        GPBUtil::checkUint32($var);
        $this->cpu_limit = $var;

        return $this;
    }

    /**
     * in bytes
     *
     * Generated from protobuf field <code>uint64 memory_limit = 201;</code>
     * @return int|string
     */
    public function getMemoryLimit()
    {
        return $this->memory_limit;
    }

    /**
     * in bytes
     *
     * Generated from protobuf field <code>uint64 memory_limit = 201;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMemoryLimit($var)
    {
        GPBUtil::checkUint64($var);
        $this->memory_limit = $var;

        return $this;
    }

    /**
     * in bytes
     *
     * Generated from protobuf field <code>uint64 file_size_limit = 202;</code>
     * @return int|string
     */
    public function getFileSizeLimit()
    {
        return $this->file_size_limit;
    }

    /**
     * in bytes
     *
     * Generated from protobuf field <code>uint64 file_size_limit = 202;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFileSizeLimit($var)
    {
        GPBUtil::checkUint64($var);
        $this->file_size_limit = $var;

        return $this;
    }

    /**
     * in number of submits
     *
     * Generated from protobuf field <code>uint32 submit_limit = 203;</code>
     * @return int
     */
    public function getSubmitLimit()
    {
        return $this->submit_limit;
    }

    /**
     * in number of submits
     *
     * Generated from protobuf field <code>uint32 submit_limit = 203;</code>
     * @param int $var
     * @return $this
     */
    public function setSubmitLimit($var)
    {
        GPBUtil::checkUint32($var);
        $this->submit_limit = $var;

        return $this;
    }

    /**
     * problem score is calculated as sum of best score in each testset (best among all submissions)
     *
     * Generated from protobuf field <code>bool score_by_best_testset = 210;</code>
     * @return bool
     */
    public function getScoreByBestTestset()
    {
        return $this->score_by_best_testset;
    }

    /**
     * problem score is calculated as sum of best score in each testset (best among all submissions)
     *
     * Generated from protobuf field <code>bool score_by_best_testset = 210;</code>
     * @param bool $var
     * @return $this
     */
    public function setScoreByBestTestset($var)
    {
        GPBUtil::checkBool($var);
        $this->score_by_best_testset = $var;

        return $this;
    }

}

