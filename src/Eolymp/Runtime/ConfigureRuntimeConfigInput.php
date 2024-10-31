<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/runtime/configuration_service.proto

namespace Eolymp\Runtime;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.runtime.ConfigureRuntimeConfigInput</code>
 */
class ConfigureRuntimeConfigInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string allowed_runtime = 1;</code>
     */
    private $allowed_runtime;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $allowed_runtime
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Runtime\ConfigurationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string allowed_runtime = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedRuntime()
    {
        return $this->allowed_runtime;
    }

    /**
     * Generated from protobuf field <code>repeated string allowed_runtime = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedRuntime($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allowed_runtime = $arr;

        return $this;
    }

}

