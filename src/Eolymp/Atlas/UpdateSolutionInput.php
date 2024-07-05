<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/solution_service.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.UpdateSolutionInput</code>
 */
class UpdateSolutionInput extends \Google\Protobuf\Internal\Message
{
    /**
     * specify list of fields to update, if empty all fields are updated
     *
     * Generated from protobuf field <code>repeated .eolymp.atlas.UpdateSolutionInput.Patch patch = 1;</code>
     */
    private $patch;
    /**
     * Generated from protobuf field <code>string problem_id = 2;</code>
     */
    protected $problem_id = '';
    /**
     * Generated from protobuf field <code>string solution_id = 3;</code>
     */
    protected $solution_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.atlas.Solution solution = 4;</code>
     */
    protected $solution = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $patch
     *           specify list of fields to update, if empty all fields are updated
     *     @type string $problem_id
     *     @type string $solution_id
     *     @type \Eolymp\Atlas\Solution $solution
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\SolutionService::initOnce();
        parent::__construct($data);
    }

    /**
     * specify list of fields to update, if empty all fields are updated
     *
     * Generated from protobuf field <code>repeated .eolymp.atlas.UpdateSolutionInput.Patch patch = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPatch()
    {
        return $this->patch;
    }

    /**
     * specify list of fields to update, if empty all fields are updated
     *
     * Generated from protobuf field <code>repeated .eolymp.atlas.UpdateSolutionInput.Patch patch = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPatch($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Atlas\UpdateSolutionInput\Patch::class);
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
     * Generated from protobuf field <code>string solution_id = 3;</code>
     * @return string
     */
    public function getSolutionId()
    {
        return $this->solution_id;
    }

    /**
     * Generated from protobuf field <code>string solution_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSolutionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->solution_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Solution solution = 4;</code>
     * @return \Eolymp\Atlas\Solution|null
     */
    public function getSolution()
    {
        return $this->solution;
    }

    public function hasSolution()
    {
        return isset($this->solution);
    }

    public function clearSolution()
    {
        unset($this->solution);
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Solution solution = 4;</code>
     * @param \Eolymp\Atlas\Solution $var
     * @return $this
     */
    public function setSolution($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Atlas\Solution::class);
        $this->solution = $var;

        return $this;
    }

}

