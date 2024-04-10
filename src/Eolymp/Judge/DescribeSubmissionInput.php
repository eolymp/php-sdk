<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/submission_service.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.DescribeSubmissionInput</code>
 */
class DescribeSubmissionInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     */
    protected $contest_id = '';
    /**
     * Generated from protobuf field <code>string submission_id = 2;</code>
     */
    protected $submission_id = '';
    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Submission.Extra extra = 1123;</code>
     */
    private $extra;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $contest_id
     *     @type string $submission_id
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $extra
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\SubmissionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     * @return string
     */
    public function getContestId()
    {
        return $this->contest_id;
    }

    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
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

    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Submission.Extra extra = 1123;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Submission.Extra extra = 1123;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExtra($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Judge\Submission\Extra::class);
        $this->extra = $arr;

        return $this;
    }

}

