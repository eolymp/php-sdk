<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/judge.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.DeleteProblemInput</code>
 */
class DeleteProblemInput extends \Google\Protobuf\Internal\Message
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
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $contest_id
     *     @type string $problem_id
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

}

