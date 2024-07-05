<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/events.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.SubmissionCompletedEvent</code>
 */
class SubmissionCompletedEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.judge.Submission submission = 1;</code>
     */
    protected $submission = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Judge\Submission $submission
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Events::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Submission submission = 1;</code>
     * @return \Eolymp\Judge\Submission|null
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
     * Generated from protobuf field <code>.eolymp.judge.Submission submission = 1;</code>
     * @param \Eolymp\Judge\Submission $var
     * @return $this
     */
    public function setSubmission($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Submission::class);
        $this->submission = $var;

        return $this;
    }

}

