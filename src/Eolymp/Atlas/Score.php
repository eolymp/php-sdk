<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/scoring_score.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Score for a problem
 *
 * Generated from protobuf message <code>eolymp.atlas.Score</code>
 */
class Score extends \Google\Protobuf\Internal\Message
{
    /**
     * unique identifier
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * problem
     *
     * Generated from protobuf field <code>string problem_id = 2;</code>
     */
    protected $problem_id = '';
    /**
     * user
     *
     * Generated from protobuf field <code>string user_id = 3;</code>
     */
    protected $user_id = '';
    /**
     * member
     *
     * Generated from protobuf field <code>string member_id = 7;</code>
     */
    protected $member_id = '';
    /**
     * time when submission was created
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp accepted_at = 4;</code>
     */
    protected $accepted_at = null;
    /**
     * score from 0 (none of the tests are passing) to 1 (all tests are passing)
     *
     * Generated from protobuf field <code>float score = 5;</code>
     */
    protected $score = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           unique identifier
     *     @type string $problem_id
     *           problem
     *     @type string $user_id
     *           user
     *     @type string $member_id
     *           member
     *     @type \Google\Protobuf\Timestamp $accepted_at
     *           time when submission was created
     *     @type float $score
     *           score from 0 (none of the tests are passing) to 1 (all tests are passing)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\ScoringScore::initOnce();
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
     * problem
     *
     * Generated from protobuf field <code>string problem_id = 2;</code>
     * @return string
     */
    public function getProblemId()
    {
        return $this->problem_id;
    }

    /**
     * problem
     *
     * Generated from protobuf field <code>string problem_id = 2;</code>
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
     * user
     *
     * Generated from protobuf field <code>string user_id = 3;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * user
     *
     * Generated from protobuf field <code>string user_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * member
     *
     * Generated from protobuf field <code>string member_id = 7;</code>
     * @return string
     */
    public function getMemberId()
    {
        return $this->member_id;
    }

    /**
     * member
     *
     * Generated from protobuf field <code>string member_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setMemberId($var)
    {
        GPBUtil::checkString($var, True);
        $this->member_id = $var;

        return $this;
    }

    /**
     * time when submission was created
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp accepted_at = 4;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getAcceptedAt()
    {
        return $this->accepted_at;
    }

    /**
     * time when submission was created
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp accepted_at = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setAcceptedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->accepted_at = $var;

        return $this;
    }

    /**
     * score from 0 (none of the tests are passing) to 1 (all tests are passing)
     *
     * Generated from protobuf field <code>float score = 5;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * score from 0 (none of the tests are passing) to 1 (all tests are passing)
     *
     * Generated from protobuf field <code>float score = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

}

