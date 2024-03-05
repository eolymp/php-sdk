<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/course/problem_service.proto

namespace Eolymp\Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.course.DescribeSubmissionInput</code>
 */
class DescribeSubmissionInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string problem_id = 1;</code>
     */
    protected $problem_id = '';
    /**
     * Generated from protobuf field <code>string submission_id = 2;</code>
     */
    protected $submission_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $problem_id
     *     @type string $submission_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Course\ProblemService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string problem_id = 1;</code>
     * @return string
     */
    public function getProblemId()
    {
        return $this->problem_id;
    }

    /**
     * Generated from protobuf field <code>string problem_id = 1;</code>
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
     * Generated from protobuf field <code>string submission_id = 2;</code>
     * @return string
     */
    public function getSubmissionId()
    {
        return $this->submission_id;
    }

    /**
     * Generated from protobuf field <code>string submission_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSubmissionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->submission_id = $var;

        return $this;
    }

}
