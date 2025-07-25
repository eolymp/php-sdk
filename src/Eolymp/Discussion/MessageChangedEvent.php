<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: eolymp/discussion/message_service.proto

namespace Eolymp\Discussion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>eolymp.discussion.MessageChangedEvent</code>
 */
class MessageChangedEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string scope = 10;</code>
     */
    protected $scope = '';
    /**
     * Generated from protobuf field <code>.eolymp.discussion.Message before = 1;</code>
     */
    protected $before = null;
    /**
     * Generated from protobuf field <code>.eolymp.discussion.Message after = 2;</code>
     */
    protected $after = null;
    /**
     * Generated from protobuf field <code>string reason = 3;</code>
     */
    protected $reason = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $scope
     *     @type \Eolymp\Discussion\Message $before
     *     @type \Eolymp\Discussion\Message $after
     *     @type string $reason
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Eolymp\Discussion\MessageService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string scope = 10;</code>
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Generated from protobuf field <code>string scope = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkString($var, True);
        $this->scope = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.Message before = 1;</code>
     * @return \Eolymp\Discussion\Message|null
     */
    public function getBefore()
    {
        return $this->before;
    }

    public function hasBefore()
    {
        return isset($this->before);
    }

    public function clearBefore()
    {
        unset($this->before);
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.Message before = 1;</code>
     * @param \Eolymp\Discussion\Message $var
     * @return $this
     */
    public function setBefore($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Discussion\Message::class);
        $this->before = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.Message after = 2;</code>
     * @return \Eolymp\Discussion\Message|null
     */
    public function getAfter()
    {
        return $this->after;
    }

    public function hasAfter()
    {
        return isset($this->after);
    }

    public function clearAfter()
    {
        unset($this->after);
    }

    /**
     * Generated from protobuf field <code>.eolymp.discussion.Message after = 2;</code>
     * @param \Eolymp\Discussion\Message $var
     * @return $this
     */
    public function setAfter($var)
    {
        GPBUtil::checkMessage($var, \Eolymp\Discussion\Message::class);
        $this->after = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string reason = 3;</code>
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Generated from protobuf field <code>string reason = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->reason = $var;

        return $this;
    }

}

