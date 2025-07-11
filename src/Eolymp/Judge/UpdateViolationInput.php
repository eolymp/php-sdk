<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/judge/violation_service.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.UpdateViolationInput</code>
 */
class UpdateViolationInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Violation.Patch.Field patch = 3;</code>
     */
    private $patch;
    /**
     * Generated from protobuf field <code>string violation_id = 1;</code>
     */
    protected $violation_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.judge.Violation violation = 2;</code>
     */
    protected $violation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $patch
     *     @type string $violation_id
     *     @type \Eolymp\Judge\Violation $violation
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\ViolationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Violation.Patch.Field patch = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPatch()
    {
        return $this->patch;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.judge.Violation.Patch.Field patch = 3;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPatch($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eolymp\Judge\Violation\Patch\Field::class);
        $this->patch = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string violation_id = 1;</code>
     * @return string
     */
    public function getViolationId()
    {
        return $this->violation_id;
    }

    /**
     * Generated from protobuf field <code>string violation_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setViolationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->violation_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Violation violation = 2;</code>
     * @return \Eolymp\Judge\Violation|null
     */
    public function getViolation()
    {
        return $this->violation;
    }

    public function hasViolation()
    {
        return isset($this->violation);
    }

    public function clearViolation()
    {
        unset($this->violation);
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Violation violation = 2;</code>
     * @param \Eolymp\Judge\Violation $var
     * @return $this
     */
    public function setViolation($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Violation::class);
        $this->violation = $var;

        return $this;
    }

}

