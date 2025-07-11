<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/discussion/configuration_service.proto

namespace Eolymp\Discussion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.discussion.DescribeDiscussionConfigOutput</code>
 */
class DescribeDiscussionConfigOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.discussion.Configuration config = 1;</code>
     */
    protected $config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Discussion\Configuration $config
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Discussion\ConfigurationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.Configuration config = 1;</code>
     * @return \Eolymp\Discussion\Configuration|null
     */
    public function getConfig()
    {
        return $this->config;
    }

    public function hasConfig()
    {
        return isset($this->config);
    }

    public function clearConfig()
    {
        unset($this->config);
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.Configuration config = 1;</code>
     * @param \Eolymp\Discussion\Configuration $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Discussion\Configuration::class);
        $this->config = $var;

        return $this;
    }

}

