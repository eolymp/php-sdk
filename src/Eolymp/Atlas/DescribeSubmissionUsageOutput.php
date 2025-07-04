<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/atlas/submission_service.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.DescribeSubmissionUsageOutput</code>
 */
class DescribeSubmissionUsageOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * number of total number of submissions
     *
     * Generated from protobuf field <code>uint32 total_submissions = 1;</code>
     */
    protected $total_submissions = 0;
    /**
     * number of submissions this month
     *
     * Generated from protobuf field <code>uint32 monthly_submissions = 2;</code>
     */
    protected $monthly_submissions = 0;
    /**
     * number of evaluations this month
     *
     * Generated from protobuf field <code>uint32 monthly_evaluations = 3;</code>
     */
    protected $monthly_evaluations = 0;
    /**
     * current evaluation limit in the space
     *
     * Generated from protobuf field <code>uint32 available_evaluations = 4;</code>
     */
    protected $available_evaluations = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $total_submissions
     *           number of total number of submissions
     *     @type int $monthly_submissions
     *           number of submissions this month
     *     @type int $monthly_evaluations
     *           number of evaluations this month
     *     @type int $available_evaluations
     *           current evaluation limit in the space
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\SubmissionService::initOnce();
        parent::__construct($data);
    }

    /**
     * number of total number of submissions
     *
     * Generated from protobuf field <code>uint32 total_submissions = 1;</code>
     * @return int
     */
    public function getTotalSubmissions()
    {
        return $this->total_submissions;
    }

    /**
     * number of total number of submissions
     *
     * Generated from protobuf field <code>uint32 total_submissions = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalSubmissions($var)
    {
        GPBUtil::checkUint32($var);
        $this->total_submissions = $var;

        return $this;
    }

    /**
     * number of submissions this month
     *
     * Generated from protobuf field <code>uint32 monthly_submissions = 2;</code>
     * @return int
     */
    public function getMonthlySubmissions()
    {
        return $this->monthly_submissions;
    }

    /**
     * number of submissions this month
     *
     * Generated from protobuf field <code>uint32 monthly_submissions = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMonthlySubmissions($var)
    {
        GPBUtil::checkUint32($var);
        $this->monthly_submissions = $var;

        return $this;
    }

    /**
     * number of evaluations this month
     *
     * Generated from protobuf field <code>uint32 monthly_evaluations = 3;</code>
     * @return int
     */
    public function getMonthlyEvaluations()
    {
        return $this->monthly_evaluations;
    }

    /**
     * number of evaluations this month
     *
     * Generated from protobuf field <code>uint32 monthly_evaluations = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMonthlyEvaluations($var)
    {
        GPBUtil::checkUint32($var);
        $this->monthly_evaluations = $var;

        return $this;
    }

    /**
     * current evaluation limit in the space
     *
     * Generated from protobuf field <code>uint32 available_evaluations = 4;</code>
     * @return int
     */
    public function getAvailableEvaluations()
    {
        return $this->available_evaluations;
    }

    /**
     * current evaluation limit in the space
     *
     * Generated from protobuf field <code>uint32 available_evaluations = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setAvailableEvaluations($var)
    {
        GPBUtil::checkUint32($var);
        $this->available_evaluations = $var;

        return $this;
    }

}

