<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/testing_service.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.UpdateTestInput</code>
 */
class UpdateTestInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string problem_id = 1;</code>
     */
    protected $problem_id = '';
    /**
     * Generated from protobuf field <code>string testset_id = 2;</code>
     */
    protected $testset_id = '';
    /**
     * Generated from protobuf field <code>string test_id = 3;</code>
     */
    protected $test_id = '';
    /**
     * Generated from protobuf field <code>.eolymp.atlas.Test test = 4;</code>
     */
    protected $test = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $problem_id
     *     @type string $testset_id
     *     @type string $test_id
     *     @type \Eolymp\Atlas\Test $test
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
     * Generated from protobuf field <code>string testset_id = 2;</code>
     * @return string
     */
    public function getTestsetId()
    {
        return $this->testset_id;
    }

    /**
     * Generated from protobuf field <code>string testset_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTestsetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->testset_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string test_id = 3;</code>
     * @return string
     */
    public function getTestId()
    {
        return $this->test_id;
    }

    /**
     * Generated from protobuf field <code>string test_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->test_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Test test = 4;</code>
     * @return \Eolymp\Atlas\Test
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * Generated from protobuf field <code>.eolymp.atlas.Test test = 4;</code>
     * @param \Eolymp\Atlas\Test $var
     * @return $this
     */
    public function setTest($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Atlas\Test::class);
        $this->test = $var;

        return $this;
    }

}

