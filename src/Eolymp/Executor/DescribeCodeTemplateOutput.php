<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/language_service.proto

namespace Eolymp\Executor;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.executor.DescribeCodeTemplateOutput</code>
 */
class DescribeCodeTemplateOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string template = 1;</code>
     */
    protected $template = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $template
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Executor\LanguageService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string template = 1;</code>
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Generated from protobuf field <code>string template = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->template = $var;

        return $this;
    }

}

