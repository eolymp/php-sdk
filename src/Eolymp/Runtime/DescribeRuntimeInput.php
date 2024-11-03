<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/runtime/runtime_service.proto

namespace Eolymp\Runtime;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.runtime.DescribeRuntimeInput</code>
 */
class DescribeRuntimeInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string runtime_id = 1;</code>
     */
    protected $runtime_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $runtime_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Runtime\RuntimeService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string runtime_id = 1;</code>
     * @return string
     */
    public function getRuntimeId()
    {
        return $this->runtime_id;
    }

    /**
     * Generated from protobuf field <code>string runtime_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRuntimeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->runtime_id = $var;

        return $this;
    }

}
