<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/judge.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.DescribeProblemInput</code>
 */
class DescribeProblemInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string contest_id = 1;</code>
     */
    protected $contest_id = '';
    /**
     * Generated from protobuf field <code>string problem_id = 2;</code>
     */
    protected $problem_id = '';
    /**
     * Generated from protobuf field <code>string problem_ern = 9999;</code>
     */
    protected $problem_ern = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $contest_id
     *     @type string $problem_id
     *     @type string $problem_ern
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\Judge::initOnce();
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
     * Generated from protobuf field <code>string problem_id = 2;</code>
     * @return string
     */
    public function getProblemId()
    {
        return $this->problem_id;
    }

    /**
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
     * Generated from protobuf field <code>string problem_ern = 9999;</code>
     * @return string
     */
    public function getProblemErn()
    {
        return $this->problem_ern;
    }

    /**
     * Generated from protobuf field <code>string problem_ern = 9999;</code>
     * @param string $var
     * @return $this
     */
    public function setProblemErn($var)
    {
        GPBUtil::checkString($var, True);
        $this->problem_ern = $var;

        return $this;
    }

}

