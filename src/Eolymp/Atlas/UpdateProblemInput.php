<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/atlas/problem_service.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.UpdateProblemInput</code>
 */
class UpdateProblemInput extends \Google\Protobuf\Internal\Message
{
    /**
     * specify list of fields to update, if empty all fields are updated
     *
     * Generated from protobuf field <code>repeated .eolymp.atlas.UpdateProblemInput.Patch patch = 1;</code>
     */
    private $patch;
    /**
     * Generated from protobuf field <code>string problem_id = 2;</code>
     */
    protected $problem_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.atlas.Problem problem = 3;</code>
     */
    protected $problem = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $patch
     *           specify list of fields to update, if empty all fields are updated
     *     @type string $problem_id
     *     @type \Eolymp\Atlas\Problem $problem
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\ProblemService::initOnce();
        parent::__construct($data);
    }

    /**
     * specify list of fields to update, if empty all fields are updated
     *
     * Generated from protobuf field <code>repeated .eolymp.atlas.UpdateProblemInput.Patch patch = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPatch()
    {
        return $this->patch;
    }

    /**
     * specify list of fields to update, if empty all fields are updated
     *
     * Generated from protobuf field <code>repeated .eolymp.atlas.UpdateProblemInput.Patch patch = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPatch($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Atlas\UpdateProblemInput\Patch::class);
        $this->patch = $arr;

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
     * Generated from protobuf field <code>.eolymp.atlas.Problem problem = 3;</code>
     * @return \Eolymp\Atlas\Problem|null
     */
    public function getProblem()
    {
        return $this->problem;
    }

    public function hasProblem()
    {
        return isset($this->problem);
    }

    public function clearProblem()
    {
        unset($this->problem);
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Problem problem = 3;</code>
     * @param \Eolymp\Atlas\Problem $var
     * @return $this
     */
    public function setProblem($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Atlas\Problem::class);
        $this->problem = $var;

        return $this;
    }

}

