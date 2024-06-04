<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/submission.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.Submission</code>
 */
class Submission extends \Google\Protobuf\Internal\Message
{
    /**
     * unique identifier
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string url = 7;</code>
     */
    protected $url = '';
    /**
     * contest
     *
     * Generated from protobuf field <code>string contest_id = 2;</code>
     */
    protected $contest_id = '';
    /**
     * problem
     *
     * Generated from protobuf field <code>string problem_id = 3;</code>
     */
    protected $problem_id = '';
    /**
     * submitter
     *
     * Generated from protobuf field <code>string participant_id = 4;</code>
     */
    protected $participant_id = '';
    /**
     * time when submission was created
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp submitted_at = 5;</code>
     */
    protected $submitted_at = null;
    /**
     * mark deleted (excluded from scoring) submissions
     *
     * Generated from protobuf field <code>bool deleted = 6;</code>
     */
    protected $deleted = false;
    /**
     * programming language
     *
     * Generated from protobuf field <code>string lang = 10;</code>
     */
    protected $lang = '';
    /**
     * source code
     *
     * Generated from protobuf field <code>string source = 11;</code>
     */
    protected $source = '';
    /**
     * source code URL (overrides source)
     *
     * Generated from protobuf field <code>string source_url = 110;</code>
     */
    protected $source_url = '';
    /**
     * source code
     *
     * Generated from protobuf field <code>string signature = 12;</code>
     */
    protected $signature = '';
    /**
     * status (see explanation for enumeration values)
     *
     * Generated from protobuf field <code>.eolymp.judge.Submission.Status status = 20;</code>
     */
    protected $status = 0;
    /**
     * overall verdict based on verdicts in groups/runs
     *
     * Generated from protobuf field <code>.eolymp.atlas.Submission.Verdict verdict = 22;</code>
     */
    protected $verdict = 0;
    /**
     * error message in case status is ERROR
     *
     * Generated from protobuf field <code>string error = 21;</code>
     */
    protected $error = '';
    /**
     * a URL with error output
     *
     * Generated from protobuf field <code>string error_url = 23;</code>
     */
    protected $error_url = '';
    /**
     * maximum possible score for the submission
     *
     * Generated from protobuf field <code>float cost = 30;</code>
     */
    protected $cost = 0.0;
    /**
     * sum of earned points
     *
     * Generated from protobuf field <code>float score = 31;</code>
     */
    protected $score = 0.0;
    /**
     * Generated from protobuf field <code>float percentage = 32;</code>
     */
    protected $percentage = 0.0;
    /**
     * status for each run by group
     *
     * Generated from protobuf field <code>repeated .eolymp.judge.Submission.Group groups = 50;</code>
     */
    private $groups;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           unique identifier
     *     @type string $url
     *     @type string $contest_id
     *           contest
     *     @type string $problem_id
     *           problem
     *     @type string $participant_id
     *           submitter
     *     @type \Google\Protobuf\Timestamp $submitted_at
     *           time when submission was created
     *     @type bool $deleted
     *           mark deleted (excluded from scoring) submissions
     *     @type string $lang
     *           programming language
     *     @type string $source
     *           source code
     *     @type string $source_url
     *           source code URL (overrides source)
     *     @type string $signature
     *           source code
     *     @type int $status
     *           status (see explanation for enumeration values)
     *     @type int $verdict
     *           overall verdict based on verdicts in groups/runs
     *     @type string $error
     *           error message in case status is ERROR
     *     @type string $error_url
     *           a URL with error output
     *     @type float $cost
     *           maximum possible score for the submission
     *     @type float $score
     *           sum of earned points
     *     @type float $percentage
     *     @type \Eolymp\Judge\Submission\Group[]|\Google\Protobuf\Internal\RepeatedField $groups
     *           status for each run by group
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Submission::initOnce();
        parent::__construct($data);
    }

    /**
     * unique identifier
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * unique identifier
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
     * Generated from protobuf field <code>string url = 7;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>string url = 7;</code>
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
     * contest
     *
     * Generated from protobuf field <code>string contest_id = 2;</code>
     * @return string
     */
    public function getContestId()
    {
        return $this->contest_id;
    }

    /**
     * contest
     *
     * Generated from protobuf field <code>string contest_id = 2;</code>
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
     * problem
     *
     * Generated from protobuf field <code>string problem_id = 3;</code>
     * @return string
     */
    public function getProblemId()
    {
        return $this->problem_id;
    }

    /**
     * problem
     *
     * Generated from protobuf field <code>string problem_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setProblemId($var)
    {
        GPBUtil::checkString($var, True);
        $this->problem_id = $var;

        return $this;
    }

    /**
     * submitter
     *
     * Generated from protobuf field <code>string participant_id = 4;</code>
     * @return string
     */
    public function getParticipantId()
    {
        return $this->participant_id;
    }

    /**
     * submitter
     *
     * Generated from protobuf field <code>string participant_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setParticipantId($var)
    {
        GPBUtil::checkString($var, True);
        $this->participant_id = $var;

        return $this;
    }

    /**
     * time when submission was created
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp submitted_at = 5;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getSubmittedAt()
    {
        return $this->submitted_at;
    }

    /**
     * time when submission was created
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp submitted_at = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setSubmittedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->submitted_at = $var;

        return $this;
    }

    /**
     * mark deleted (excluded from scoring) submissions
     *
     * Generated from protobuf field <code>bool deleted = 6;</code>
     * @return bool
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * mark deleted (excluded from scoring) submissions
     *
     * Generated from protobuf field <code>bool deleted = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setDeleted($var)
    {
        GPBUtil::checkBool($var);
        $this->deleted = $var;

        return $this;
    }

    /**
     * programming language
     *
     * Generated from protobuf field <code>string lang = 10;</code>
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * programming language
     *
     * Generated from protobuf field <code>string lang = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setLang($var)
    {
        GPBUtil::checkString($var, True);
        $this->lang = $var;

        return $this;
    }

    /**
     * source code
     *
     * Generated from protobuf field <code>string source = 11;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * source code
     *
     * Generated from protobuf field <code>string source = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

    /**
     * source code URL (overrides source)
     *
     * Generated from protobuf field <code>string source_url = 110;</code>
     * @return string
     */
    public function getSourceUrl()
    {
        return $this->source_url;
    }

    /**
     * source code URL (overrides source)
     *
     * Generated from protobuf field <code>string source_url = 110;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_url = $var;

        return $this;
    }

    /**
     * source code
     *
     * Generated from protobuf field <code>string signature = 12;</code>
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * source code
     *
     * Generated from protobuf field <code>string signature = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, True);
        $this->signature = $var;

        return $this;
    }

    /**
     * status (see explanation for enumeration values)
     *
     * Generated from protobuf field <code>.eolymp.judge.Submission.Status status = 20;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * status (see explanation for enumeration values)
     *
     * Generated from protobuf field <code>.eolymp.judge.Submission.Status status = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Judge\Submission_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * overall verdict based on verdicts in groups/runs
     *
     * Generated from protobuf field <code>.eolymp.atlas.Submission.Verdict verdict = 22;</code>
     * @return int
     */
    public function getVerdict()
    {
        return $this->verdict;
    }

    /**
     * overall verdict based on verdicts in groups/runs
     *
     * Generated from protobuf field <code>.eolymp.atlas.Submission.Verdict verdict = 22;</code>
     * @param int $var
     * @return $this
     */
    public function setVerdict($var)
    {
        GPBUtil::checkEnum($var, \Eolymp\Atlas\Submission_Verdict::class);
        $this->verdict = $var;

        return $this;
    }

    /**
     * error message in case status is ERROR
     *
     * Generated from protobuf field <code>string error = 21;</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * error message in case status is ERROR
     *
     * Generated from protobuf field <code>string error = 21;</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;

        return $this;
    }

    /**
     * a URL with error output
     *
     * Generated from protobuf field <code>string error_url = 23;</code>
     * @return string
     */
    public function getErrorUrl()
    {
        return $this->error_url;
    }

    /**
     * a URL with error output
     *
     * Generated from protobuf field <code>string error_url = 23;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_url = $var;

        return $this;
    }

    /**
     * maximum possible score for the submission
     *
     * Generated from protobuf field <code>float cost = 30;</code>
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * maximum possible score for the submission
     *
     * Generated from protobuf field <code>float cost = 30;</code>
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
     * sum of earned points
     *
     * Generated from protobuf field <code>float score = 31;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * sum of earned points
     *
     * Generated from protobuf field <code>float score = 31;</code>
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
     * Generated from protobuf field <code>float percentage = 32;</code>
     * @return float
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Generated from protobuf field <code>float percentage = 32;</code>
     * @param float $var
     * @return $this
     */
    public function setPercentage($var)
    {
        GPBUtil::checkFloat($var);
        $this->percentage = $var;

        return $this;
    }

    /**
     * status for each run by group
     *
     * Generated from protobuf field <code>repeated .eolymp.judge.Submission.Group groups = 50;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * status for each run by group
     *
     * Generated from protobuf field <code>repeated .eolymp.judge.Submission.Group groups = 50;</code>
     * @param \Eolymp\Judge\Submission\Group[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Judge\Submission\Group::class);
        $this->groups = $arr;

        return $this;
    }

}

