<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/message_service.proto

namespace Eolymp\Discussion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.discussion.DescribeMessageInput</code>
 */
class DescribeMessageInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string message_id = 1;</code>
     */
    protected $message_id = '';
    /**
     * Generated from protobuf field <code>bool render = 2;</code>
     */
    protected $render = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message_id
     *     @type bool $render
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Discussion\MessageService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string message_id = 1;</code>
     * @return string
     */
    public function getMessageId()
    {
        return $this->message_id;
    }

    /**
     * Generated from protobuf field <code>string message_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessageId($var)
    {
        GPBUtil::checkString($var, True);
        $this->message_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool render = 2;</code>
     * @return bool
     */
    public function getRender()
    {
        return $this->render;
    }

    /**
     * Generated from protobuf field <code>bool render = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setRender($var)
    {
        GPBUtil::checkBool($var);
        $this->render = $var;

        return $this;
    }

}
