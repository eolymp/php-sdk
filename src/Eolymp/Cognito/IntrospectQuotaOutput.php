<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/cognito/cognito.proto

namespace Eolymp\Cognito;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.cognito.IntrospectQuotaOutput</code>
 */
class IntrospectQuotaOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * number of contests per user
     *
     * Generated from protobuf field <code>.eolymp.cognito.Quota contests_per_user = 10;</code>
     */
    protected $contests_per_user = null;
    /**
     * number of problems per contest
     *
     * Generated from protobuf field <code>.eolymp.cognito.Quota problems_per_contest = 11;</code>
     */
    protected $problems_per_contest = null;
    /**
     * number of participants per contest
     *
     * Generated from protobuf field <code>.eolymp.cognito.Quota participants_per_contest = 12;</code>
     */
    protected $participants_per_contest = null;
    /**
     * number of problems per user
     *
     * Generated from protobuf field <code>.eolymp.cognito.Quota problems_per_user = 20;</code>
     */
    protected $problems_per_user = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Cognito\Quota $contests_per_user
     *           number of contests per user
     *     @type \Eolymp\Cognito\Quota $problems_per_contest
     *           number of problems per contest
     *     @type \Eolymp\Cognito\Quota $participants_per_contest
     *           number of participants per contest
     *     @type \Eolymp\Cognito\Quota $problems_per_user
     *           number of problems per user
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Cognito\Cognito::initOnce();
        parent::__construct($data);
    }

    /**
     * number of contests per user
     *
     * Generated from protobuf field <code>.eolymp.cognito.Quota contests_per_user = 10;</code>
     * @return \Eolymp\Cognito\Quota
     */
    public function getContestsPerUser()
    {
        return $this->contests_per_user;
    }

    /**
     * number of contests per user
     *
     * Generated from protobuf field <code>.eolymp.cognito.Quota contests_per_user = 10;</code>
     * @param \Eolymp\Cognito\Quota $var
     * @return $this
     */
    public function setContestsPerUser($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Cognito\Quota::class);
        $this->contests_per_user = $var;

        return $this;
    }

    /**
     * number of problems per contest
     *
     * Generated from protobuf field <code>.eolymp.cognito.Quota problems_per_contest = 11;</code>
     * @return \Eolymp\Cognito\Quota
     */
    public function getProblemsPerContest()
    {
        return $this->problems_per_contest;
    }

    /**
     * number of problems per contest
     *
     * Generated from protobuf field <code>.eolymp.cognito.Quota problems_per_contest = 11;</code>
     * @param \Eolymp\Cognito\Quota $var
     * @return $this
     */
    public function setProblemsPerContest($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Cognito\Quota::class);
        $this->problems_per_contest = $var;

        return $this;
    }

    /**
     * number of participants per contest
     *
     * Generated from protobuf field <code>.eolymp.cognito.Quota participants_per_contest = 12;</code>
     * @return \Eolymp\Cognito\Quota
     */
    public function getParticipantsPerContest()
    {
        return $this->participants_per_contest;
    }

    /**
     * number of participants per contest
     *
     * Generated from protobuf field <code>.eolymp.cognito.Quota participants_per_contest = 12;</code>
     * @param \Eolymp\Cognito\Quota $var
     * @return $this
     */
    public function setParticipantsPerContest($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Cognito\Quota::class);
        $this->participants_per_contest = $var;

        return $this;
    }

    /**
     * number of problems per user
     *
     * Generated from protobuf field <code>.eolymp.cognito.Quota problems_per_user = 20;</code>
     * @return \Eolymp\Cognito\Quota
     */
    public function getProblemsPerUser()
    {
        return $this->problems_per_user;
    }

    /**
     * number of problems per user
     *
     * Generated from protobuf field <code>.eolymp.cognito.Quota problems_per_user = 20;</code>
     * @param \Eolymp\Cognito\Quota $var
     * @return $this
     */
    public function setProblemsPerUser($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Cognito\Quota::class);
        $this->problems_per_user = $var;

        return $this;
    }

}

