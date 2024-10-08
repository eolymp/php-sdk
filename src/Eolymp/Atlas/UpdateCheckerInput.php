<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/testing_service.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.UpdateCheckerInput</code>
 */
class UpdateCheckerInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string problem_id = 1;</code>
     */
    protected $problem_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.atlas.Checker checker = 2;</code>
     */
    protected $checker = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $problem_id
     *     @type \Eolymp\Atlas\Checker $checker
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Atlas\TestingService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string problem_id = 1;</code>
     * @return string
     */
    public function getProblemId()
    {
        return $this->problem_id;
    }

    /**
     * Generated from protobuf field <code>string problem_id = 1;</code>
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
     * Generated from protobuf field <code>.eolymp.atlas.Checker checker = 2;</code>
     * @return \Eolymp\Atlas\Checker|null
     */
    public function getChecker()
    {
        return $this->checker;
    }

    public function hasChecker()
    {
        return isset($this->checker);
    }

    public function clearChecker()
    {
        unset($this->checker);
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Checker checker = 2;</code>
     * @param \Eolymp\Atlas\Checker $var
     * @return $this
     */
    public function setChecker($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Atlas\Checker::class);
        $this->checker = $var;

        return $this;
    }

}

