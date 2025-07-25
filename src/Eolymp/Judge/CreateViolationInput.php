<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/judge/violation_service.proto

namespace Eolymp\Judge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.judge.CreateViolationInput</code>
 */
class CreateViolationInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.judge.Violation violation = 1;</code>
     */
    protected $violation = null;
    /**
     * Generated from protobuf field <code>bool dont_notify = 2;</code>
     */
    protected $dont_notify = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Judge\Violation $violation
     *     @type bool $dont_notify
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Judge\ViolationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.judge.Violation violation = 1;</code>
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
     * Generated from protobuf field <code>.eolymp.judge.Violation violation = 1;</code>
     * @param \Eolymp\Judge\Violation $var
     * @return $this
     */
    public function setViolation($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Judge\Violation::class);
        $this->violation = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool dont_notify = 2;</code>
     * @return bool
     */
    public function getDontNotify()
    {
        return $this->dont_notify;
    }

    /**
     * Generated from protobuf field <code>bool dont_notify = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setDontNotify($var)
    {
        GPBUtil::checkBool($var);
        $this->dont_notify = $var;

        return $this;
    }

}

