<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/atlas/testing_service.proto

namespace Eolymp\Atlas;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.atlas.TestBatchChangedEvent</code>
 */
class TestBatchChangedEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string problem_id = 1;</code>
     */
    protected $problem_id = '';
    /**
     * Generated from protobuf field <code>repeated .eolymp.atlas.Test before = 2;</code>
     */
    private $before;
    /**
     * Generated from protobuf field <code>repeated .eolymp.atlas.Test after = 3;</code>
     */
    private $after;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $problem_id
     *     @type array<\Eolymp\Atlas\Test>|\Google\Protobuf\Internal\RepeatedField $before
     *     @type array<\Eolymp\Atlas\Test>|\Google\Protobuf\Internal\RepeatedField $after
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
     * Generated from protobuf field <code>repeated .eolymp.atlas.Test before = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBefore()
    {
        return $this->before;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.atlas.Test before = 2;</code>
     * @param array<\Eolymp\Atlas\Test>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBefore($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Atlas\Test::class);
        $this->before = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.atlas.Test after = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAfter()
    {
        return $this->after;
    }

    /**
     * Generated from protobuf field <code>repeated .eolymp.atlas.Test after = 3;</code>
     * @param array<\Eolymp\Atlas\Test>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAfter($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eolymp\Atlas\Test::class);
        $this->after = $arr;

        return $this;
    }

}

