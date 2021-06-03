<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/apollo/events.proto

namespace Eolymp\Apollo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.apollo.SubmissionCompletedEvent</code>
 */
class SubmissionCompletedEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * submission
     *
     * Generated from protobuf field <code>.eolymp.apollo.Submission submission = 1;</code>
     */
    protected $submission = null;
    /**
     * true, if submission has been completed before, this flag is set when submission is being retested
     *
     * Generated from protobuf field <code>bool update = 2;</code>
     */
    protected $update = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Apollo\Submission $submission
     *           submission
     *     @type bool $update
     *           true, if submission has been completed before, this flag is set when submission is being retested
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Apollo\Events::initOnce();
        parent::__construct($data);
    }

    /**
     * submission
     *
     * Generated from protobuf field <code>.eolymp.apollo.Submission submission = 1;</code>
     * @return \Eolymp\Apollo\Submission
     */
    public function getSubmission()
    {
        return $this->submission;
    }

    /**
     * submission
     *
     * Generated from protobuf field <code>.eolymp.apollo.Submission submission = 1;</code>
     * @param \Eolymp\Apollo\Submission $var
     * @return $this
     */
    public function setSubmission($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Apollo\Submission::class);
        $this->submission = $var;

        return $this;
    }

    /**
     * true, if submission has been completed before, this flag is set when submission is being retested
     *
     * Generated from protobuf field <code>bool update = 2;</code>
     * @return bool
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * true, if submission has been completed before, this flag is set when submission is being retested
     *
     * Generated from protobuf field <code>bool update = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setUpdate($var)
    {
        GPBUtil::checkBool($var);
        $this->update = $var;

        return $this;
    }

}

