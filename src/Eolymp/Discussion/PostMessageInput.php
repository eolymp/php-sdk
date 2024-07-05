<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: eolymp/discussion/message_service.proto

namespace Eolymp\Discussion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.discussion.PostMessageInput</code>
 */
class PostMessageInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.eolymp.discussion.Message message = 1;</code>
     */
    protected $message = null;
    /**
     * Generated from protobuf field <code>string reply_to = 2;</code>
     */
    protected $reply_to = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eolymp\Discussion\Message $message
     *     @type string $reply_to
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Discussion\MessageService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.Message message = 1;</code>
     * @return \Eolymp\Discussion\Message|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    public function hasMessage()
    {
        return isset($this->message);
    }

    public function clearMessage()
    {
        unset($this->message);
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.Message message = 1;</code>
     * @param \Eolymp\Discussion\Message $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Discussion\Message::class);
        $this->message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string reply_to = 2;</code>
     * @return string
     */
    public function getReplyTo()
    {
        return $this->reply_to;
    }

    /**
     * Generated from protobuf field <code>string reply_to = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setReplyTo($var)
    {
        GPBUtil::checkString($var, True);
        $this->reply_to = $var;

        return $this;
    }

}

