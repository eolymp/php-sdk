<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/executor/executor.proto

namespace Eolymp\Executor;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.executor.DescribeLanguageOutput</code>
 */
class DescribeLanguageOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.executor.Language language = 1;</code>
     */
    protected $language = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Executor\Language $language
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Executor\Executor::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.executor.Language language = 1;</code>
     * @return \Eolymp\Executor\Language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Generated from protobuf field <code>.eolymp.executor.Language language = 1;</code>
     * @param \Eolymp\Executor\Language $var
     * @return $this
     */
    public function setLanguage($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Executor\Language::class);
        $this->language = $var;

        return $this;
    }

}

