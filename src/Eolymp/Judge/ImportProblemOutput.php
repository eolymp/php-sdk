<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/judge/problem_service.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.ImportProblemOutput</code>
 */
class ImportProblemOutput extends \Google\Protobuf\Internal\Message
{
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
     *     @type string $problem_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\ProblemService::initOnce();
        parent::__construct($data);
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

